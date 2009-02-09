<?

class FileVersion extends Object {
	
	private $numThumbnailLevels = 3; 
	
	// Update type constants
	const UT_REPLACE_FILE = 1;
	const UT_TITLE = 2;
	const UT_DESCRIPTION = 3;
	const UT_TAGS = 4;
	const UT_EXTENDED_ATTRIBUTE = 5;
	
	public function getFileID() {return $this->fID;}
	public function getFileVersionID() {return $this->fvID;}
	public function getPrefix() {return $this->fvPrefix;}
	public function getFileName() {return $this->fvFilename;}
	public function getTitle() {return $this->fvTitle;}
	public function getTags() {return $this->fvTags;}
	public function getDescription() {return $this->fvDescription;}
	public function isApproved() {return $this->fvIsApproved;}
	
	public function getSize() {
		return round($this->fvSize / 1024) . t('KB');
	}
	public function getFullSize() {
		return $this->fvSize;
	}
	public function getAuthorName() {
		return $this->fvAuthorName;
	}
	
	public function getAuthorUserID() {
		return $this->fvAuthorUID;
	}
	
	public function getDateAdded() {
		return $this->fvDateAdded;
	}
	
	protected function logVersionUpdate($updateTypeID, $auxValue = false) {
		$db = Loader::db();
		$db->Execute('insert into FileVersionLog (fID, fvID, fvUpdateTypeID) values (?, ?, ?)', array(
			$this->getFileID(),
			$this->getFileVersionID(),
			$updateTypeID
		));
	}
	
	/** 
	 * Takes the current value of the file version and makes a new one with the same values
	 */
	public function duplicate() {
		$f = File::getByID($this->fID);

		$dh = Loader::helper('date');
		$date = $dh->getLocalDateTime();
		$db = Loader::db();
		$fvID = $db->GetOne("select max(fvID) from FileVersions where fID = ?", array($this->fID));
		if ($fvID > 0) {
			$fvID++;
		}

		$data = $db->GetRow("select * from FileVersions where fID = ? and fvID = ?", array($this->fID, $this->fvID));
		$data['fvID'] = $fvID;
		$data['fvDateAdded'] = $date;
		$u = new User();
		$data['fvAuthorUID'] = $u->getUserID();
		
		// If This version is the approved version, we approve the new one.
		if ($this->isApproved()) {
			$data['fvIsApproved'] = 1;
		} else {
			$data['fvIsApproved'] = 0;
		}

		// build the field insert query
		$fields = '';
		$i = 0;
		$data2 = array();
		foreach($data as $key => $value) {
			if (!is_integer($key)) {	
				$data2[$key] = $value;
			}
		}
		
		foreach($data2 as $key => $value) {		
			$fields .= $key;
			$questions .= '?';
			if (($i + 1) < count($data2)) {
				$fields .= ',';
				$questions .= ',';
			}
			$i++;
		}
		
		$db->Execute("insert into FileVersions (" . $fields . ") values (" . $questions . ")", $data2);
		
		
		$this->deny();
		// TODO: duplicate attribute key/values
		$fv2 = $f->getVersion($fvID);
		
		return $fv2;
	}
	
	
	public function getType() {
		$fh = Loader::helper('file');
		$ext = $fh->getExtension($this->fvFilename);
		
		$ftl = FileTypeList::getType($ext);
		if (is_object($ftl)) {
			return $ftl->getName();
		}
	}
	
	public function updateTitle($title) {
		$db = Loader::db();
		$db->Execute("update FileVersions set fvTitle = ? where fID = ? and fvID = ?", array($title, $this->getFileID(), $this->getFileVersionID()));
		$this->logVersionUpdate(FileVersion::UT_TITLE);
	}

	public function updateTags($tags) {
		$db = Loader::db();
		$db->Execute("update FileVersions set fvTags = ? where fID = ? and fvID = ?", array($tags, $this->getFileID(), $this->getFileVersionID()));
		$this->logVersionUpdate(FileVersion::UT_TAGS);
	}


	public function updateDescription($descr) {
		$db = Loader::db();
		$db->Execute("update FileVersions set fvDescription = ? where fID = ? and fvID = ?", array($descr, $this->getFileID(), $this->getFileVersionID()));
		$this->logVersionUpdate(FileVersion::UT_DESCRIPTION);

	}

	public function approve() {
		$db = Loader::db();
		$db->Execute("update FileVersions set fvIsApproved = 1 where fID = ? and fvID = ?", array($this->getFileID(), $this->getFileVersionID()));
	}


	public function deny() {
		$db = Loader::db();
		$db->Execute("update FileVersions set fvIsApproved = 0 where fID = ? and fvID = ?", array($this->getFileID(), $this->getFileVersionID()));
	}
	
	
	/** 
	 * Returns a full filesystem path to the file on disk.
	 */
	public function getPath() {
		$f = Loader::helper('concrete/file');
		$path = $f->getSystemPath($this->fvPrefix, $this->fvFilename);
		return $path;
	}
	
	public function getRelativePath() {
		$f = Loader::helper('concrete/file');
		$path = $f->getFileRelativePath($this->fvPrefix, $this->fvFilename );
		return $path;
	}	
	
	public function getThumbnailPath($level) {
		$f = Loader::helper('concrete/file');
		$path = $f->getThumbnailSystemPath($this->fvPrefix, $this->fvFilename, $level);
		return $path;
	}
	
	public function getThumbnailSRC($level) {
		eval('$hasThumbnail = $this->fvHasThumbnail' . $level . ';');
		if ($hasThumbnail) {
			$f = Loader::helper('concrete/file');
			$path = $f->getThumbnailRelativePath($this->fvPrefix, $this->fvFilename, $level);
			return $path;
		}
	}
	
	public function hasThumbnail($level) {
		eval('$hasThumbnail = $this->fvHasThumbnail' . $level . ';');
		return $hasThumbnail;
	}
	
	public function getThumbnail($level) {
		$html = Loader::helper('html');
		eval('$hasThumbnail = $this->fvHasThumbnail' . $level . ';');
		if ($hasThumbnail) {
			return $html->image($this->getThumbnailSRC($level));
		} else {
			$ft = FileTypeList::getType($this->fvFilename);
			return $ft->getThumbnail($level);
		}
	}
	// 
	public function refreshThumbnails() {
		$db = Loader::db();
		$f = Loader::helper('concrete/file');
		for ($i = 1; $i <= $this->numThumbnailLevels; $i++) {
			$path = $f->getThumbnailSystemPath($this->fvPrefix, $this->fvFilename, $i);	
			$hasThumbnail = 0;
			if (file_exists($path)) {
				$hasThumbnail = 1;
			}
			$db->Execute("update FileVersions set fvHasThumbnail" . $i . "= ? where fID = ? and fvID = ?", array($hasThumbnail, $this->fID, $this->fvID));
		}
	}
	
	// update types
	const UT_NEW = 0;
	
	
	/** 
	 * Responsible for taking a particular version of a file and rescanning all its attributes
	 * This will run any type-based import routines, and store those attributes, generate thumbnails,
	 * etc...
	 */
	public function refreshAttributes() {
		$fh = Loader::helper('file');
		$ext = $fh->getExtension($this->fvFilename);
		$ftl = FileTypeList::getType($ext);
		$db = Loader::db();
		$size = filesize($this->getPath());
		$db->Execute('update FileVersions set fvExtension = ?, fvType = ?, fvTitle = ?, fvSize = ? where fID = ? and fvID = ?',
			array($ext, $ftl->getGenericType(), $this->getFilename(), $size, $this->getFileID(), $this->getFileVersionID())
		);
		if (is_object($ftl)) {
			if ($ftl->getCustomImporter() != false) {
				Loader::library('file/inspector');
				
				$db->Execute('update FileVersions set fvGenericType = ? where fID = ? and fvID = ?',
					array($ftl->getGenericType(), $this->getFileID(), $this->getFileVersionID())
				);
				
				// we have a custom library script that handles this stuff
				$script = 'file/types/' . $ftl->getCustomImporter();
				Loader::library($script);
				
				$class = Object::camelcase($ftl->getCustomImporter()) . 'FileTypeInspector';
				$cl = new $class;
				$cl->inspect($this);
				
			}
		}
	}

	public function createThumbnailDirectories(){
		$f = Loader::helper('concrete/file');
		for ($i = 1; $i <= $this->numThumbnailLevels; $i++) {
			$path = $f->getThumbnailSystemPath($this->fvPrefix, $this->fvFilename, $i, true);	
		}
	}
	
	public function setAttribute($akHandle, $value) {
		$db = Loader::db();
		$fakID = $db->GetOne("select fakID from FileAttributeKeys where akHandle = ?", array($akHandle));
		if ($fakID > 0) {
			$db->Replace('FileAttributeValues', array(
				'fID' => $this->fID,
				'fvID' => $this->getFileVersionID(),
				'fakID' => $fakID,
				'value' => $value
			),
			array('fID', 'fvID', 'fakID'), true);
		}
		
	}
	
	
}