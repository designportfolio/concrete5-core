<?php

// Generated on 2019-07-19T13:23:43+01:00

namespace
{
    die('Access Denied.');

    class Area extends \Concrete\Core\Area\Area
    {
    }

    abstract class Asset extends \Concrete\Core\Asset\Asset
    {
    }

    class AssetList extends \Concrete\Core\Asset\AssetList
    {
    }

    class AttributeSet extends \Concrete\Core\Attribute\SetFactory
    {
        /**
         * @var Concrete\Core\Attribute\SetFactory
         */
        protected static $instance;
        public static function getByHandle($atHandle)
        {
            return static::$instance->getByHandle($atHandle);
        }
        public static function getListByPackage(Concrete\Core\Entity\Package $package)
        {
            return static::$instance->getListByPackage($package);
        }
        public static function getByID($asID)
        {
            return static::$instance->getByID($asID);
        }
        /**
         * @param $key Key
         */
        public static function getByAttributeKey($key)
        {
            return static::$instance->getByAttributeKey($key);
        }
        /**
         * @deprecated
         */
        public static function exportTranslations()
        {
            return static::$instance->exportTranslations();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Attribute\Set::getFacadeAccessor();
        }
        /**
         * @deprecated
         */
        public static function exportTranslations()
        {
            return Concrete\Core\Attribute\Set::exportTranslations();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class AuthenticationType extends \Concrete\Core\Authentication\AuthenticationType
    {
    }

    class Block extends \Concrete\Core\Block\Block
    {
    }

    class BlockType extends \Concrete\Core\Block\BlockType\BlockType
    {
    }

    class BlockTypeList extends \Concrete\Core\Block\BlockType\BlockTypeList
    {
    }

    class BlockTypeSet extends \Concrete\Core\Block\BlockType\Set
    {
    }

    /**
     * Base class for the three caching layers present in Concrete5:
     *   - ExpensiveCache
     *   - ObjectCache
     *   - RequestCache
     *
     * Cache storage is performed using the Stash Library, see http://www.stashphp.com/
     *
     * This class imports the various caching settings from Config class, sets
     * up the Stash pools and provides a basic caching API for all of Concrete5.
     */
    abstract class Cache extends \Concrete\Core\Cache\Cache
    {
    }

    /**
     * An object that represents a particular request to the Concrete-powered website. The request object then determines what is being requested, based on the path, and presents itself to the rest of the dispatcher (which loads the page, etc...).
     *
     * \@package    Core
     *
     * @author     Andrew Embler <andrew@concrete5.org>
     *
     * @category   Concrete
     *
     * @copyright  Copyright (c) 2003-2008 Concrete5. (http://www.concrete5.org)
     * @license    http://www.concrete5.org/license/     MIT License
     */
    class Request extends \Concrete\Core\Http\Request
    {
    }

    /**
     * @deprecated
     *
     * \@package Concrete\Core\Cache
     */
    class CacheLocal extends \Concrete\Core\Cache\CacheLocal
    {
    }

    class Collection extends \Concrete\Core\Page\Collection\Collection
    {
    }

    class CollectionAttributeKey extends \Concrete\Core\Attribute\Category\PageCategory
    {
        /**
         * @var Concrete\Core\Attribute\Category\PageCategory
         */
        protected static $instance;
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::createAttributeKey()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\PageKey
         */
        public static function createAttributeKey()
        {
            return static::$instance->createAttributeKey();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\SearchIndexer\StandardSearchIndexerInterface::getIndexedSearchTable()
         */
        public static function getIndexedSearchTable()
        {
            return static::$instance->getIndexedSearchTable();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\SearchIndexer\StandardSearchIndexerInterface::getIndexedSearchPrimaryKeyValue()
         *
         * @param \Concrete\Core\Page\Collection\Version\Version|\Concrete\Core\Page\Collection\Collection $mixed
         *
         * @return int
         */
        public static function getIndexedSearchPrimaryKeyValue($mixed)
        {
            return static::$instance->getIndexedSearchPrimaryKeyValue($mixed);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\SearchIndexer\StandardSearchIndexerInterface::getSearchIndexFieldDefinition()
         */
        public static function getSearchIndexFieldDefinition()
        {
            return static::$instance->getSearchIndexFieldDefinition();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::getAttributeKeyRepository()
         */
        public static function getAttributeKeyRepository()
        {
            return static::$instance->getAttributeKeyRepository();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::getAttributeValueRepository()
         */
        public static function getAttributeValueRepository()
        {
            return static::$instance->getAttributeValueRepository();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeValues()
         *
         * @param \Concrete\Core\Page\Collection\Version\Version|\Concrete\Core\Page\Collection\Collection $page
         *
         * @return \Concrete\Core\Entity\Attribute\Value\PageValue[]
         */
        public static function getAttributeValues($page)
        {
            return static::$instance->getAttributeValues($page);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeValue()
         *
         * @param \Concrete\Core\Entity\Attribute\Key\PageKey $key
         * @param \Concrete\Core\Page\Collection\Version\Version|\Concrete\Core\Page\Collection\Collection $page
         *
         * @return \Concrete\Core\Entity\Attribute\Value\PageValue|null
         */
        public static function getAttributeValue(Concrete\Core\Entity\Attribute\Key\Key $key, $page)
        {
            return static::$instance->getAttributeValue($key, $page);
        }
        public static function delete()
        {
            return static::$instance->delete();
        }
        public static function add($type, $key, $settings = null, $pkg = null)
        {
            return static::$instance->add($type, $key, $settings, $pkg);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getSearchIndexer()
         */
        public static function getSearchIndexer()
        {
            return static::$instance->getSearchIndexer();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getList()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key[]
         */
        public static function getList()
        {
            return static::$instance->getList();
        }
        /**
         * Get the list of attribute keys that are searchable.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key[]
         */
        public static function getSearchableList()
        {
            return static::$instance->getSearchableList();
        }
        /**
         * Get the list of attribute keys that are searchable and indexed.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key[]
         */
        public static function getSearchableIndexedList()
        {
            return static::$instance->getSearchableIndexedList();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeKeyByHandle()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         */
        public static function getAttributeKeyByHandle($handle)
        {
            return static::$instance->getAttributeKeyByHandle($handle);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeKeyByID()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         */
        public static function getAttributeKeyByID($akID)
        {
            return static::$instance->getAttributeKeyByID($akID);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::addFromRequest()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key
         */
        public static function addFromRequest(Concrete\Core\Entity\Attribute\Type $type, Symfony\Component\HttpFoundation\Request $request)
        {
            return static::$instance->addFromRequest($type, $request);
        }
        /**
         * Import a new attribute key from a SimpleXMLElement instance.
         *
         * @param AttributeType $type the type of the attribute key to be created
         * @param SimpleXMLElement $element the SimpleXMLElement instance containing the data of the attribute key to be created
         * @param Package|null $package the entity of the package that's creating the attribute key (if applicable)
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key
         */
        public static function import(Concrete\Core\Entity\Attribute\Type $type, SimpleXMLElement $element, Concrete\Core\Entity\Package $package = null)
        {
            return static::$instance->import($type, $element, $package);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::updateFromRequest()
         */
        public static function updateFromRequest(Concrete\Core\Entity\Attribute\Key\Key $key, Symfony\Component\HttpFoundation\Request $request)
        {
            return static::$instance->updateFromRequest($key, $request);
        }
        /**
         * @return EntityManager
         */
        public static function getEntityManager()
        {
            return static::$instance->getEntityManager();
        }
        /**
         * Get the EntityManager instance.
         *
         * @param EntityManager $entityManager
         */
        public static function setEntityManager($entityManager)
        {
            return static::$instance->setEntityManager($entityManager);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::deleteKey()
         */
        public static function deleteKey(Concrete\Core\Entity\Attribute\Key\Key $key)
        {
            return static::$instance->deleteKey($key);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::deleteValue()
         */
        public static function deleteValue(Concrete\Core\Attribute\AttributeValueInterface $attributeValue)
        {
            return static::$instance->deleteValue($attributeValue);
        }
        /**
         * Get the object to be used to update attribute keys with the data contained in a Symfony\Component\HttpFoundation\Request instance.
         *
         * @return \Concrete\Core\Attribute\Key\RequestLoader\RequestLoaderInterface
         */
        public static function getRequestLoader()
        {
            return static::$instance->getRequestLoader();
        }
        /**
         * Get the object to be used to update attribute keys with the data contained in a SimpleXMLElement instance.
         *
         * @return \Concrete\Core\Attribute\Key\ImportLoader\ImportLoaderInterface
         */
        public static function getImportLoader()
        {
            return static::$instance->getImportLoader();
        }
        /**
         * @param int $akID
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         *
         * @deprecated use the getAttributeKeyByID method
         */
        public static function getByID($akID)
        {
            return static::$instance->getByID($akID);
        }
        /**
         * @param string $akHandle
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         *
         * @deprecated use the getAttributeKeyByHandle method
         */
        public static function getByHandle($akHandle)
        {
            return static::$instance->getByHandle($akHandle);
        }
        public static function getSetManager()
        {
            return static::$instance->getSetManager();
        }
        public static function getAttributeTypes()
        {
            return static::$instance->getAttributeTypes();
        }
        public static function setCategoryEntity(Concrete\Core\Entity\Attribute\Category $category)
        {
            return static::$instance->setCategoryEntity($category);
        }
        public static function getCategoryEntity()
        {
            return static::$instance->getCategoryEntity();
        }
        /**
         * @deprecated
         */
        public static function addSet($handle, $name, $pkg = null, $locked = null)
        {
            return static::$instance->addSet($handle, $name, $pkg, $locked);
        }
        public static function associateAttributeKeyType(Concrete\Core\Entity\Attribute\Type $type)
        {
            return static::$instance->associateAttributeKeyType($type);
        }
        public static function deleteCategory()
        {
            return static::$instance->deleteCategory();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getFacadeAccessor();
        }
        public static function getByHandle($handle)
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getByHandle($handle);
        }
        public static function getByID($akID)
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getByID($akID);
        }
        /**
         * We need this here for old package installers that call CollectionKey::add()
         * @deprecated
         */
        public static function add($type, $args, $pkg = false)
        {
            return Concrete\Core\Attribute\Key\CollectionKey::add($type, $args, $pkg);
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class CollectionVersion extends \Concrete\Core\Page\Collection\Version\Version
    {
    }

    class ConcreteAuthenticationTypeController extends \Concrete\Authentication\Concrete\Controller
    {
    }

    class Controller extends \Concrete\Core\Controller\Controller
    {
    }

    class Conversation extends \Concrete\Core\Conversation\Conversation
    {
    }

    abstract class ConversationEditor extends \Concrete\Core\Conversation\Editor\Editor
    {
    }

    class ConversationFlagType extends \Concrete\Core\Conversation\FlagType\FlagType
    {
    }

    class ConversationMessage extends \Concrete\Core\Conversation\Message\Message
    {
    }

    abstract class ConversationRatingType extends \Concrete\Core\Conversation\Rating\Type
    {
    }

    class Cookie extends \Concrete\Core\Cookie\CookieJar
    {
        /**
         * @var Concrete\Core\Cookie\CookieJar
         */
        protected static $instance;
        /**
         * Get the object containing the response cookies.
         *
         * @return \Concrete\Core\Cookie\ResponseCookieJar
         */
        public static function getResponseCookies()
        {
            return static::$instance->getResponseCookies();
        }
        /**
         * Does a cookie exist in the request or response cookies?
         *
         * @param string $name
         *
         * @return bool
         */
        public static function has($name)
        {
            return static::$instance->has($name);
        }
        /**
         * Get the value of a cookie (from response or from request) given its name.
         *
         * @param string $name The key the cookie
         * @param mixed $default The value to return if the cookie isn't set
         *
         * @return mixed
         */
        public static function get($name, $default = null)
        {
            return static::$instance->get($name, $default);
        }
        /**
         * Get a list of cookie names and values (both from response and from request).
         *
         * @return array array keys are the cookie names, array values are the cookie values
         */
        public static function getAll()
        {
            return static::$instance->getAll();
        }
        /**
         * Set the request for this cookie jar.
         *
         * @param \Concrete\Core\Http\Request $request
         */
        public static function setRequest(Concrete\Core\Http\Request $request)
        {
            return static::$instance->setRequest($request);
        }
        /**
         * @deprecated Use ->getResponseCookies()->addCookie() or $app->make(ResponseCookieJar::class)->addCookie()
         *
         * @param string $name
         * @param string|null $value
         * @param int $expire
         * @param string $path
         * @param null|string $domain
         * @param bool $secure
         * @param bool $httpOnly
         *
         * @return \Symfony\Component\HttpFoundation\Cookie
         */
        public static function set($name, $value = null, $expire = 0, $path = "/", $domain = null, $secure = false, $httpOnly = true)
        {
            return static::$instance->set($name, $value, $expire, $path, $domain, $secure, $httpOnly);
        }
        /**
         * @deprecated Use ->getResponseCookies()->addCookieObject() or $app->make(ResponseCookieJar::class)->addCookieObject()
         *
         * @param \Symfony\Component\HttpFoundation\Cookie $cookie
         */
        public static function add($cookie)
        {
            return static::$instance->add($cookie);
        }
        /**
         * @deprecated Use ->getResponseCookies()->clear() or $app->make(ResponseCookieJar::class)->clear()
         *
         * @param string $name
         */
        public static function clear($name)
        {
            return static::$instance->clear($name);
        }
        /**
         * @deprecated Use ->getResponseCookies()->getCookies() or $app->make(ResponseCookieJar::class)->getCookies()
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[]
         */
        public static function getCookies()
        {
            return static::$instance->getCookies();
        }
        /**
         * Get the request for this cookie jar.
         *
         * @return \Concrete\Core\Http\Request
         */
        protected static function getRequest()
        {
            return static::$instance->getRequest();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Cookie::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    /**
     * Deprecated. Use Concrete\Core\Filesystem\FileLocator instead.
     * @deprecated
     * @author Andrew Embler <andrew@concrete5.org>
     * @copyright  Copyright (c) 2003-2012 Concrete5. (http://www.concrete5.org)
     * @license    http://www.concrete5.org/license/     MIT License
     */
    class Environment extends \Concrete\Core\Foundation\Environment
    {
    }

    class FacebookAuthenticationTypeController extends \Concrete\Authentication\Facebook\Controller
    {
    }

    /**
     * Service class for the File entity
     */
    class File extends \Concrete\Core\File\File
    {
    }

    class FileAttributeKey extends \Concrete\Core\Attribute\Category\FileCategory
    {
        /**
         * @var Concrete\Core\Attribute\Category\FileCategory
         */
        protected static $instance;
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::createAttributeKey()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\FileKey
         */
        public static function createAttributeKey()
        {
            return static::$instance->createAttributeKey();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\SearchIndexer\StandardSearchIndexerInterface::getIndexedSearchTable()
         */
        public static function getIndexedSearchTable()
        {
            return static::$instance->getIndexedSearchTable();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\SearchIndexer\StandardSearchIndexerInterface::getIndexedSearchPrimaryKeyValue()
         *
         * @param \Concrete\Core\Entity\File\File $mixed
         *
         * @return int
         */
        public static function getIndexedSearchPrimaryKeyValue($mixed)
        {
            return static::$instance->getIndexedSearchPrimaryKeyValue($mixed);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\SearchIndexer\StandardSearchIndexerInterface::getSearchIndexFieldDefinition()
         */
        public static function getSearchIndexFieldDefinition()
        {
            return static::$instance->getSearchIndexFieldDefinition();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::getAttributeKeyRepository()
         */
        public static function getAttributeKeyRepository()
        {
            return static::$instance->getAttributeKeyRepository();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::getAttributeValueRepository()
         */
        public static function getAttributeValueRepository()
        {
            return static::$instance->getAttributeValueRepository();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeValues()
         *
         * @param \Concrete\Core\Entity\File\Version $version
         *
         * @return \Concrete\Core\Entity\Attribute\Value\FileValue[]
         */
        public static function getAttributeValues($version)
        {
            return static::$instance->getAttributeValues($version);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeValue()
         *
         * @param \Concrete\Core\Entity\Attribute\Key\FileKey $key
         * @param \Concrete\Core\Entity\File\Version $file
         *
         * @return \Concrete\Core\Entity\Attribute\Value\FileValue|null
         */
        public static function getAttributeValue(Concrete\Core\Entity\Attribute\Key\Key $key, $file)
        {
            return static::$instance->getAttributeValue($key, $file);
        }
        public static function delete()
        {
            return static::$instance->delete();
        }
        public static function add($type, $key, $settings = null, $pkg = null)
        {
            return static::$instance->add($type, $key, $settings, $pkg);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getSearchIndexer()
         */
        public static function getSearchIndexer()
        {
            return static::$instance->getSearchIndexer();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getList()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key[]
         */
        public static function getList()
        {
            return static::$instance->getList();
        }
        /**
         * Get the list of attribute keys that are searchable.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key[]
         */
        public static function getSearchableList()
        {
            return static::$instance->getSearchableList();
        }
        /**
         * Get the list of attribute keys that are searchable and indexed.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key[]
         */
        public static function getSearchableIndexedList()
        {
            return static::$instance->getSearchableIndexedList();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeKeyByHandle()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         */
        public static function getAttributeKeyByHandle($handle)
        {
            return static::$instance->getAttributeKeyByHandle($handle);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeKeyByID()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         */
        public static function getAttributeKeyByID($akID)
        {
            return static::$instance->getAttributeKeyByID($akID);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::addFromRequest()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key
         */
        public static function addFromRequest(Concrete\Core\Entity\Attribute\Type $type, Symfony\Component\HttpFoundation\Request $request)
        {
            return static::$instance->addFromRequest($type, $request);
        }
        /**
         * Import a new attribute key from a SimpleXMLElement instance.
         *
         * @param AttributeType $type the type of the attribute key to be created
         * @param SimpleXMLElement $element the SimpleXMLElement instance containing the data of the attribute key to be created
         * @param Package|null $package the entity of the package that's creating the attribute key (if applicable)
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key
         */
        public static function import(Concrete\Core\Entity\Attribute\Type $type, SimpleXMLElement $element, Concrete\Core\Entity\Package $package = null)
        {
            return static::$instance->import($type, $element, $package);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::updateFromRequest()
         */
        public static function updateFromRequest(Concrete\Core\Entity\Attribute\Key\Key $key, Symfony\Component\HttpFoundation\Request $request)
        {
            return static::$instance->updateFromRequest($key, $request);
        }
        /**
         * @return EntityManager
         */
        public static function getEntityManager()
        {
            return static::$instance->getEntityManager();
        }
        /**
         * Get the EntityManager instance.
         *
         * @param EntityManager $entityManager
         */
        public static function setEntityManager($entityManager)
        {
            return static::$instance->setEntityManager($entityManager);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::deleteKey()
         */
        public static function deleteKey(Concrete\Core\Entity\Attribute\Key\Key $key)
        {
            return static::$instance->deleteKey($key);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::deleteValue()
         */
        public static function deleteValue(Concrete\Core\Attribute\AttributeValueInterface $attributeValue)
        {
            return static::$instance->deleteValue($attributeValue);
        }
        /**
         * Get the object to be used to update attribute keys with the data contained in a Symfony\Component\HttpFoundation\Request instance.
         *
         * @return \Concrete\Core\Attribute\Key\RequestLoader\RequestLoaderInterface
         */
        public static function getRequestLoader()
        {
            return static::$instance->getRequestLoader();
        }
        /**
         * Get the object to be used to update attribute keys with the data contained in a SimpleXMLElement instance.
         *
         * @return \Concrete\Core\Attribute\Key\ImportLoader\ImportLoaderInterface
         */
        public static function getImportLoader()
        {
            return static::$instance->getImportLoader();
        }
        /**
         * @param int $akID
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         *
         * @deprecated use the getAttributeKeyByID method
         */
        public static function getByID($akID)
        {
            return static::$instance->getByID($akID);
        }
        /**
         * @param string $akHandle
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         *
         * @deprecated use the getAttributeKeyByHandle method
         */
        public static function getByHandle($akHandle)
        {
            return static::$instance->getByHandle($akHandle);
        }
        public static function getSetManager()
        {
            return static::$instance->getSetManager();
        }
        public static function getAttributeTypes()
        {
            return static::$instance->getAttributeTypes();
        }
        public static function setCategoryEntity(Concrete\Core\Entity\Attribute\Category $category)
        {
            return static::$instance->setCategoryEntity($category);
        }
        public static function getCategoryEntity()
        {
            return static::$instance->getCategoryEntity();
        }
        /**
         * @deprecated
         */
        public static function addSet($handle, $name, $pkg = null, $locked = null)
        {
            return static::$instance->addSet($handle, $name, $pkg, $locked);
        }
        public static function associateAttributeKeyType(Concrete\Core\Entity\Attribute\Type $type)
        {
            return static::$instance->associateAttributeKeyType($type);
        }
        public static function deleteCategory()
        {
            return static::$instance->deleteCategory();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Attribute\Key\FileKey::getFacadeAccessor();
        }
        public static function getByHandle($handle)
        {
            return Concrete\Core\Attribute\Key\FileKey::getByHandle($handle);
        }
        /**
         * We need this here for old package installers that call FileKey::add()
         * @deprecated
         */
        public static function add($type, $args, $pkg = false)
        {
            return Concrete\Core\Attribute\Key\FileKey::add($type, $args, $pkg);
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class FileImporter extends \Concrete\Core\File\Importer
    {
    }

    class FileList extends \Concrete\Core\File\FileList
    {
    }

    /**
     * @deprecated
     */
    class FilePermissions extends \Concrete\Core\Legacy\FilePermissions
    {
    }

    /**
     * Represents a file set.
     *
     * @method static Set add(string $setName, int $fsOverrideGlobalPermissions = 0, bool|\User $u = false, int $type = self::TYPE_PUBLIC) Deprecated method. Use Set::create instead.
     */
    class FileSet extends \Concrete\Core\File\Set\Set
    {
    }

    class GlobalArea extends \Concrete\Core\Area\GlobalArea
    {
    }

    class Group extends \Concrete\Core\User\Group\Group
    {
    }

    class GroupList extends \Concrete\Core\User\Group\GroupList
    {
    }

    class GroupSet extends \Concrete\Core\User\Group\GroupSet
    {
    }

    class GroupSetList extends \Concrete\Core\User\Group\GroupSetList
    {
    }

    class GroupTree extends \Concrete\Core\Tree\Type\Group
    {
    }

    class GroupTreeNode extends \Concrete\Core\Tree\Node\Type\Group
    {
    }

    abstract class Job extends \Concrete\Core\Job\Job
    {
    }

    class JobSet extends \Concrete\Core\Job\Set
    {
    }

    /**
     * @deprecated
     */
    class Loader extends \Concrete\Core\Legacy\Loader
    {
    }

    class Localization extends \Concrete\Core\Localization\Localization
    {
    }

    class Marketplace extends \Concrete\Core\Marketplace\Marketplace
    {
    }

    abstract class Package extends \Concrete\Core\Package\Package
    {
    }

    /**
     * The page object in Concrete encapsulates all the functionality used by a typical page and their contents including blocks, page metadata, page permissions.
     */
    class Page extends \Concrete\Core\Page\Page
    {
    }

    abstract class PageCache extends \Concrete\Core\Cache\Page\PageCache
    {
    }

    class PageController extends \Concrete\Core\Page\Controller\PageController
    {
    }

    class PageEditResponse extends \Concrete\Core\Page\EditResponse
    {
    }

    /**
     * An object that allows a filtered list of pages to be returned.
     */
    class PageList extends \Concrete\Core\Page\PageList
    {
    }

    class PageTemplate extends \Concrete\Core\Page\Template
    {
    }

    /**
     * A page's theme is a pointer to a directory containing templates, CSS files and optionally PHP includes, images and JavaScript files.
     * Themes inherit down the tree when a page is added, but can also be set at the site-wide level (thereby overriding any previous choices.).
     */
    class PageTheme extends \Concrete\Core\Page\Theme\Theme
    {
    }

    class PageType extends \Concrete\Core\Page\Type\Type
    {
    }

    /**
     * @property \Concrete\Core\Permission\Key\Key $pk
     * @property bool|int|string $paIsInUse
     */
    class PermissionAccess extends \Concrete\Core\Permission\Access\Access
    {
    }

    /**
     * @property bool|int|string $pkID
     * @property string $pkName
     * @property string $pkHandle
     * @property string $pkDescription
     * @property bool|int|string $pkCategoryID
     * @property string $pkCategoryHandle
     * @property bool|int|string|null $pkgID
     * @property bool|int|string $pkCanTriggerWorkflow
     * @property bool|int|string $pkHasCustomClass
     * @property \Concrete\Core\Permission\ObjectInterface|null $permissionObjectToCheck
     */
    abstract class PermissionKey extends \Concrete\Core\Permission\Key\Key
    {
    }

    class PermissionKeyCategory extends \Concrete\Core\Permission\Category
    {
    }

    class Permissions extends \Concrete\Core\Permission\Checker
    {
    }

    /**
     * @deprecated Use $app->make(\Concrete\Core\Foundation\Queue\QueueService::class)
     */
    class Queue extends \Concrete\Core\Foundation\Queue\QueueService
    {
        /**
         * @var Concrete\Core\Foundation\Queue\QueueService
         */
        protected static $instance;
        /**
         * Get a queue by name.
         *
         * @param string $name The queue name
         * @param array $additionalConfig additional configuration to be passed to the Zend Queue
         *
         * @return \ZendQueue\Queue
         */
        public static function get($name, array $additionalConfig = array())
        {
            return static::$instance->get($name, $additionalConfig);
        }
        /**
         * Check if a queue with a specific name exists.
         *
         * @param string $name The queue name
         *
         * @return bool
         */
        public static function exists($name)
        {
            return static::$instance->exists($name);
        }
        /**
         * @return string
         */
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Foundation\Queue\Queue::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    abstract class QueueableJob extends \Concrete\Core\Job\QueueableJob
    {
    }

    class Redirect extends \Concrete\Core\Routing\Redirect
    {
    }

    class RedirectResponse extends \Concrete\Core\Routing\RedirectResponse
    {
    }

    class Response extends \Concrete\Core\Http\Response
    {
    }

    class Router extends \Concrete\Core\Routing\Router
    {
    }

    /**
     * SinglePage extends the page class for those instances of pages that have no type, and are special "single pages"
     * within the system.
     *
     * \@package Pages
     */
    class SinglePage extends \Concrete\Core\Page\Single
    {
    }

    /**
     * Class Stack.
     *
     * \@package Concrete\Core\Page\Stack
     */
    class Stack extends \Concrete\Core\Page\Stack\Stack
    {
    }

    class StackList extends \Concrete\Core\Page\Stack\StackList
    {
    }

    class StartingPointPackage extends \Concrete\Core\Package\StartingPointPackage
    {
    }

    /**
     * @deprecated Use \Concrete\Core\Permission\Checker
     */
    class TaskPermission extends \Concrete\Core\Legacy\TaskPermission
    {
    }

    class User extends \Concrete\Core\User\User
    {
    }

    class UserAttributeKey extends \Concrete\Core\Attribute\Category\UserCategory
    {
        /**
         * @var Concrete\Core\Attribute\Category\UserCategory
         */
        protected static $instance;
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::createAttributeKey()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\UserKey
         */
        public static function createAttributeKey()
        {
            return static::$instance->createAttributeKey();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\SearchIndexer\StandardSearchIndexerInterface::getIndexedSearchTable()
         */
        public static function getIndexedSearchTable()
        {
            return static::$instance->getIndexedSearchTable();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\SearchIndexer\StandardSearchIndexerInterface::getIndexedSearchPrimaryKeyValue()
         *
         * @param \Concrete\Core\Entity\User\User|\Concrete\Core\User\User|\Concrete\Core\User\UserInfo $mixed
         *
         * @return int
         */
        public static function getIndexedSearchPrimaryKeyValue($mixed)
        {
            return static::$instance->getIndexedSearchPrimaryKeyValue($mixed);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\SearchIndexer\StandardSearchIndexerInterface::getSearchIndexFieldDefinition()
         */
        public static function getSearchIndexFieldDefinition()
        {
            return static::$instance->getSearchIndexFieldDefinition();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::getAttributeKeyRepository()
         *
         * @return \Concrete\Core\Entity\User\AttributeRepository
         */
        public static function getAttributeKeyRepository()
        {
            return static::$instance->getAttributeKeyRepository();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::getAttributeValueRepository()
         */
        public static function getAttributeValueRepository()
        {
            return static::$instance->getAttributeValueRepository();
        }
        /**
         * Get the attribute keys to be displayed in the member list page.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\UserKey[]
         */
        public static function getMemberListList()
        {
            return static::$instance->getMemberListList();
        }
        /**
         * Get the attribute keys to be displayed in the public profile page.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\UserKey[]
         */
        public static function getPublicProfileList()
        {
            return static::$instance->getPublicProfileList();
        }
        /**
         * Get the attribute keys to be displayed in the users' registration page.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\UserKey[]
         */
        public static function getRegistrationList()
        {
            return static::$instance->getRegistrationList();
        }
        /**
         * Get the attribute keys that can be modified in the user profile page.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\UserKey[]
         */
        public static function getEditableInProfileList()
        {
            return static::$instance->getEditableInProfileList();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::addFromRequest()
         */
        public static function addFromRequest(Concrete\Core\Entity\Attribute\Type $type, Symfony\Component\HttpFoundation\Request $request)
        {
            return static::$instance->addFromRequest($type, $request);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::updateFromRequest()
         *
         * @param \Concrete\Core\Entity\Attribute\Key\UserKey $key
         *
         * @return \Concrete\Core\Entity\Attribute\Key\UserKey
         */
        public static function updateFromRequest(Concrete\Core\Entity\Attribute\Key\Key $key, Symfony\Component\HttpFoundation\Request $request)
        {
            return static::$instance->updateFromRequest($key, $request);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\AbstractCategory::import()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\UserKey
         */
        public static function import(Concrete\Core\Entity\Attribute\Type $type, SimpleXMLElement $element, Concrete\Core\Entity\Package $package = null)
        {
            return static::$instance->import($type, $element, $package);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeValues()
         *
         * @param \Concrete\Core\Entity\User\User $user
         *
         * @return \Concrete\Core\Entity\Attribute\Value\UserValue[]
         */
        public static function getAttributeValues($user)
        {
            return static::$instance->getAttributeValues($user);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeValue()
         *
         * @param \Concrete\Core\Entity\Attribute\Key\UserKey $key
         * @param \Concrete\Core\Entity\User\User $user
         *
         * @return \Concrete\Core\Entity\Attribute\Value\UserValue|null
         */
        public static function getAttributeValue(Concrete\Core\Entity\Attribute\Key\Key $key, $user)
        {
            return static::$instance->getAttributeValue($key, $user);
        }
        /**
         * Update the user attribute key with the data received from POST.
         *
         * @param \Concrete\Core\Entity\Attribute\Key\UserKey $key The user attribute key to be updated
         * @param \Symfony\Component\HttpFoundation\Request $request The request containing the posted data
         *
         * @return \Concrete\Core\Entity\Attribute\Key\UserKey
         */
        protected static function saveFromRequest(Concrete\Core\Entity\Attribute\Key\Key $key, Symfony\Component\HttpFoundation\Request $request)
        {
            return static::$instance->saveFromRequest($key, $request);
        }
        public static function delete()
        {
            return static::$instance->delete();
        }
        public static function add($type, $key, $settings = null, $pkg = null)
        {
            return static::$instance->add($type, $key, $settings, $pkg);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getSearchIndexer()
         */
        public static function getSearchIndexer()
        {
            return static::$instance->getSearchIndexer();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getList()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key[]
         */
        public static function getList()
        {
            return static::$instance->getList();
        }
        /**
         * Get the list of attribute keys that are searchable.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key[]
         */
        public static function getSearchableList()
        {
            return static::$instance->getSearchableList();
        }
        /**
         * Get the list of attribute keys that are searchable and indexed.
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key[]
         */
        public static function getSearchableIndexedList()
        {
            return static::$instance->getSearchableIndexedList();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeKeyByHandle()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         */
        public static function getAttributeKeyByHandle($handle)
        {
            return static::$instance->getAttributeKeyByHandle($handle);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::getAttributeKeyByID()
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         */
        public static function getAttributeKeyByID($akID)
        {
            return static::$instance->getAttributeKeyByID($akID);
        }
        /**
         * @return EntityManager
         */
        public static function getEntityManager()
        {
            return static::$instance->getEntityManager();
        }
        /**
         * Get the EntityManager instance.
         *
         * @param EntityManager $entityManager
         */
        public static function setEntityManager($entityManager)
        {
            return static::$instance->setEntityManager($entityManager);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::deleteKey()
         */
        public static function deleteKey(Concrete\Core\Entity\Attribute\Key\Key $key)
        {
            return static::$instance->deleteKey($key);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Attribute\Category\CategoryInterface::deleteValue()
         */
        public static function deleteValue(Concrete\Core\Attribute\AttributeValueInterface $attributeValue)
        {
            return static::$instance->deleteValue($attributeValue);
        }
        /**
         * Get the object to be used to update attribute keys with the data contained in a Symfony\Component\HttpFoundation\Request instance.
         *
         * @return \Concrete\Core\Attribute\Key\RequestLoader\RequestLoaderInterface
         */
        public static function getRequestLoader()
        {
            return static::$instance->getRequestLoader();
        }
        /**
         * Get the object to be used to update attribute keys with the data contained in a SimpleXMLElement instance.
         *
         * @return \Concrete\Core\Attribute\Key\ImportLoader\ImportLoaderInterface
         */
        public static function getImportLoader()
        {
            return static::$instance->getImportLoader();
        }
        /**
         * @param int $akID
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         *
         * @deprecated use the getAttributeKeyByID method
         */
        public static function getByID($akID)
        {
            return static::$instance->getByID($akID);
        }
        /**
         * @param string $akHandle
         *
         * @return \Concrete\Core\Entity\Attribute\Key\Key|null
         *
         * @deprecated use the getAttributeKeyByHandle method
         */
        public static function getByHandle($akHandle)
        {
            return static::$instance->getByHandle($akHandle);
        }
        public static function getSetManager()
        {
            return static::$instance->getSetManager();
        }
        public static function getAttributeTypes()
        {
            return static::$instance->getAttributeTypes();
        }
        public static function setCategoryEntity(Concrete\Core\Entity\Attribute\Category $category)
        {
            return static::$instance->setCategoryEntity($category);
        }
        public static function getCategoryEntity()
        {
            return static::$instance->getCategoryEntity();
        }
        /**
         * @deprecated
         */
        public static function addSet($handle, $name, $pkg = null, $locked = null)
        {
            return static::$instance->addSet($handle, $name, $pkg, $locked);
        }
        public static function associateAttributeKeyType(Concrete\Core\Entity\Attribute\Type $type)
        {
            return static::$instance->associateAttributeKeyType($type);
        }
        public static function deleteCategory()
        {
            return static::$instance->deleteCategory();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Attribute\Key\UserKey::getFacadeAccessor();
        }
        public static function getByHandle($handle)
        {
            return Concrete\Core\Attribute\Key\UserKey::getByHandle($handle);
        }
        /**
         * We need this here for old package installers that call UserKey::add()
         * @deprecated
         */
        public static function add($type, $args, $pkg = false)
        {
            return Concrete\Core\Attribute\Key\UserKey::add($type, $args, $pkg);
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class UserList extends \Concrete\Core\User\UserList
    {
    }

    class View extends \Concrete\Core\View\View
    {
    }

    /**
     * \@package Workflow
     *
     * @author Andrew Embler <andrew@concrete5.org>
     * @copyright  Copyright (c) 2003-2012 concrete5. (http://www.concrete5.org)
     * @license    http://www.concrete5.org/license/     MIT License
     */
    abstract class Workflow extends \Concrete\Core\Workflow\Workflow
    {
    }

    class Core extends \Concrete\Core\Application\Application
    {
        /**
         * @var Concrete\Core\Application\Application
         */
        protected static $instance;
        /**
         * Turns off the lights.
         *
         * @param array $options Array of options for disabling certain things during shutdown
         *      Add `'jobs' => true` to disable scheduled jobs
         *      Add `'log_queries' => true` to disable query logging
         */
        public static function shutdown($options = array())
        {
            return static::$instance->shutdown($options);
        }
        /**
         * @param \Concrete\Core\Http\Request $request
         *
         * @deprecated Use the dispatcher object to dispatch
         */
        public static function dispatch(Concrete\Core\Http\Request $request)
        {
            return static::$instance->dispatch($request);
        }
        /**
         * Utility method for clearing all application caches.
         */
        public static function clearCaches()
        {
            return static::$instance->clearCaches();
        }
        /**
         * If we have job scheduling running through the site, we check to see if it's time to go for it.
         */
        protected static function handleScheduledJobs()
        {
            return static::$instance->handleScheduledJobs();
        }
        /**
         * Returns true if concrete5 is installed, false if it has not yet been.
         */
        public static function isInstalled()
        {
            return static::$instance->isInstalled();
        }
        /**
         * Checks to see whether we should deliver a concrete5 response from the page cache.
         */
        public static function checkPageCache(Concrete\Core\Http\Request $request)
        {
            return static::$instance->checkPageCache($request);
        }
        /**
         * Check if the core needs to be updated, and if so, updates it.
         *
         * @throws \Concrete\Core\System\Mutex\MutexBusyException throws a MutexBusyException exception if there upgrade process is already running
         * @throws \Concrete\Core\Updater\Migrations\MigrationIncompleteException throws a MigrationIncompleteException exception if there's still some migration pending
         */
        public static function handleAutomaticUpdates()
        {
            return static::$instance->handleAutomaticUpdates();
        }
        /**
         * Register package autoloaders. Has to come BEFORE session calls.
         */
        public static function setupPackageAutoloaders()
        {
            return static::$instance->setupPackageAutoloaders();
        }
        /**
         * Run startup and localization events on any installed packages.
         */
        public static function setupPackages()
        {
            return static::$instance->setupPackages();
        }
        /**
         * Ensure we have a cache directory.
         */
        public static function setupFilesystem()
        {
            return static::$instance->setupFilesystem();
        }
        /**
         * Returns true if the app is run through the command line.
         */
        public static function isRunThroughCommandLineInterface()
        {
            return Concrete\Core\Application\Application::isRunThroughCommandLineInterface();
        }
        /**
         * Using the configuration value, determines whether we need to redirect to a URL with
         * a trailing slash or not.
         *
         * @return \Concrete\Core\Routing\RedirectResponse
         */
        public static function handleURLSlashes(Symfony\Component\HttpFoundation\Request $request, Concrete\Core\Entity\Site\Site $site)
        {
            return static::$instance->handleURLSlashes($request, $site);
        }
        /**
         * If we have redirect to canonical host enabled, we need to honor it here.
         *
         * @return \Concrete\Core\Routing\RedirectResponse|null
         */
        public static function handleCanonicalURLRedirection(Symfony\Component\HttpFoundation\Request $r, Concrete\Core\Entity\Site\Site $site)
        {
            return static::$instance->handleCanonicalURLRedirection($r, $site);
        }
        /**
         * Get or check the current application environment.
         *
         * @param  mixed
         *
         * @return string|bool
         */
        public static function environment()
        {
            return static::$instance->environment();
        }
        /**
         * Detect the application's current environment.
         *
         * @param  array|string|callable  $environments
         *
         * @return string
         */
        public static function detectEnvironment($environments)
        {
            return static::$instance->detectEnvironment($environments);
        }
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param  string $concrete
         * @param  array $parameters
         *
         * @return mixed
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        public static function build($concrete, array $parameters = array())
        {
            return static::$instance->build($concrete, $parameters);
        }
        /**
         * @return RuntimeInterface
         */
        public static function getRuntime()
        {
            return static::$instance->getRuntime();
        }
        /**
         * Get the list of registered aliases.
         *
         * @return string[]
         */
        public static function getRegisteredAliases()
        {
            return static::$instance->getRegisteredAliases();
        }
        /**
         * Get the list of registered instances.
         *
         * @return string[]
         */
        public static function getRegisteredInstances()
        {
            return static::$instance->getRegisteredInstances();
        }
        /**
         * @deprecated Use the singleton method
         *
         * @param $abstract
         * @param $concrete
         */
        public static function bindShared($abstract, $concrete)
        {
            return static::$instance->bindShared($abstract, $concrete);
        }
        /**
         * Define a contextual binding.
         *
         * @param  string  $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
         */
        public static function when($concrete)
        {
            return static::$instance->when($concrete);
        }
        /**
         * Determine if the given abstract type has been bound.
         *
         * @param  string  $abstract
         * @return bool
         */
        public static function bound($abstract)
        {
            return static::$instance->bound($abstract);
        }
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param  string  $abstract
         * @return bool
         */
        public static function resolved($abstract)
        {
            return static::$instance->resolved($abstract);
        }
        /**
         * Determine if a given string is an alias.
         *
         * @param  string  $name
         * @return bool
         */
        public static function isAlias($name)
        {
            return static::$instance->isAlias($name);
        }
        /**
         * Register a binding with the container.
         *
         * @param  string|array  $abstract
         * @param  \Closure|string|null  $concrete
         * @param  bool  $shared
         * @return void
         */
        public static function bind($abstract, $concrete = null, $shared = false)
        {
            return static::$instance->bind($abstract, $concrete, $shared);
        }
        /**
         * Get the Closure to be used when building a type.
         *
         * @param  string  $abstract
         * @param  string  $concrete
         * @return \Closure
         */
        protected static function getClosure($abstract, $concrete)
        {
            return static::$instance->getClosure($abstract, $concrete);
        }
        /**
         * Add a contextual binding to the container.
         *
         * @param  string  $concrete
         * @param  string  $abstract
         * @param  \Closure|string  $implementation
         * @return void
         */
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {
            return static::$instance->addContextualBinding($concrete, $abstract, $implementation);
        }
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param  string  $abstract
         * @param  \Closure|string|null  $concrete
         * @param  bool  $shared
         * @return void
         */
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {
            return static::$instance->bindIf($abstract, $concrete, $shared);
        }
        /**
         * Register a shared binding in the container.
         *
         * @param  string|array  $abstract
         * @param  \Closure|string|null  $concrete
         * @return void
         */
        public static function singleton($abstract, $concrete = null)
        {
            return static::$instance->singleton($abstract, $concrete);
        }
        /**
         * Wrap a Closure such that it is shared.
         *
         * @param  \Closure  $closure
         * @return \Closure
         */
        public static function share(Closure $closure)
        {
            return static::$instance->share($closure);
        }
        /**
         * "Extend" an abstract type in the container.
         *
         * @param  string    $abstract
         * @param  \Closure  $closure
         * @return void
         *
         * @throws \InvalidArgumentException
         */
        public static function extend($abstract, Closure $closure)
        {
            return static::$instance->extend($abstract, $closure);
        }
        /**
         * Register an existing instance as shared in the container.
         *
         * @param  string  $abstract
         * @param  mixed   $instance
         * @return void
         */
        public static function instance($abstract, $instance)
        {
            return static::$instance->instance($abstract, $instance);
        }
        /**
         * Assign a set of tags to a given binding.
         *
         * @param  array|string  $abstracts
         * @param  array|mixed   ...$tags
         * @return void
         */
        public static function tag($abstracts, $tags)
        {
            return static::$instance->tag($abstracts, $tags);
        }
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param  string  $tag
         * @return array
         */
        public static function tagged($tag)
        {
            return static::$instance->tagged($tag);
        }
        /**
         * Alias a type to a different name.
         *
         * @param  string  $abstract
         * @param  string  $alias
         * @return void
         */
        public static function alias($abstract, $alias)
        {
            return static::$instance->alias($abstract, $alias);
        }
        /**
         * Extract the type and alias from a given definition.
         *
         * @param  array  $definition
         * @return array
         */
        protected static function extractAlias(array $definition)
        {
            return static::$instance->extractAlias($definition);
        }
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param  string    $abstract
         * @param  \Closure  $callback
         * @return mixed
         */
        public static function rebinding($abstract, Closure $callback)
        {
            return static::$instance->rebinding($abstract, $callback);
        }
        /**
         * Refresh an instance on the given target and method.
         *
         * @param  string  $abstract
         * @param  mixed   $target
         * @param  string  $method
         * @return mixed
         */
        public static function refresh($abstract, $target, $method)
        {
            return static::$instance->refresh($abstract, $target, $method);
        }
        /**
         * Fire the "rebound" callbacks for the given abstract type.
         *
         * @param  string  $abstract
         * @return void
         */
        protected static function rebound($abstract)
        {
            return static::$instance->rebound($abstract);
        }
        /**
         * Get the rebound callbacks for a given type.
         *
         * @param  string  $abstract
         * @return array
         */
        protected static function getReboundCallbacks($abstract)
        {
            return static::$instance->getReboundCallbacks($abstract);
        }
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param  \Closure  $callback
         * @param  array  $parameters
         * @return \Closure
         */
        public static function wrap(Closure $callback, array $parameters = array())
        {
            return static::$instance->wrap($callback, $parameters);
        }
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param  callable|string  $callback
         * @param  array  $parameters
         * @param  string|null  $defaultMethod
         * @return mixed
         */
        public static function call($callback, array $parameters = array(), $defaultMethod = null)
        {
            return static::$instance->call($callback, $parameters, $defaultMethod);
        }
        /**
         * Determine if the given string is in Class@method syntax.
         *
         * @param  mixed  $callback
         * @return bool
         */
        protected static function isCallableWithAtSign($callback)
        {
            return static::$instance->isCallableWithAtSign($callback);
        }
        /**
         * Get all dependencies for a given method.
         *
         * @param  callable|string  $callback
         * @param  array  $parameters
         * @return array
         */
        protected static function getMethodDependencies($callback, array $parameters = array())
        {
            return static::$instance->getMethodDependencies($callback, $parameters);
        }
        /**
         * Get the proper reflection instance for the given callback.
         *
         * @param  callable|string  $callback
         * @return \ReflectionFunctionAbstract
         */
        protected static function getCallReflector($callback)
        {
            return static::$instance->getCallReflector($callback);
        }
        /**
         * Get the dependency for the given call parameter.
         *
         * @param  \ReflectionParameter  $parameter
         * @param  array  $parameters
         * @param  array  $dependencies
         * @return mixed
         */
        protected static function addDependencyForCallParameter(ReflectionParameter $parameter, array &$parameters, &$dependencies)
        {
            return static::$instance->addDependencyForCallParameter($parameter, $parameters, $dependencies);
        }
        /**
         * Call a string reference to a class using Class@method syntax.
         *
         * @param  string  $target
         * @param  array  $parameters
         * @param  string|null  $defaultMethod
         * @return mixed
         *
         * @throws \InvalidArgumentException
         */
        protected static function callClass($target, array $parameters = array(), $defaultMethod = null)
        {
            return static::$instance->callClass($target, $parameters, $defaultMethod);
        }
        /**
         * Resolve the given type from the container.
         *
         * @param  string  $abstract
         * @param  array   $parameters
         * @return mixed
         */
        public static function make($abstract, array $parameters = array())
        {
            return static::$instance->make($abstract, $parameters);
        }
        /**
         * Get the concrete type for a given abstract.
         *
         * @param  string  $abstract
         * @return mixed   $concrete
         */
        protected static function getConcrete($abstract)
        {
            return static::$instance->getConcrete($abstract);
        }
        /**
         * Get the contextual concrete binding for the given abstract.
         *
         * @param  string  $abstract
         * @return string|null
         */
        protected static function getContextualConcrete($abstract)
        {
            return static::$instance->getContextualConcrete($abstract);
        }
        /**
         * Normalize the given class name by removing leading slashes.
         *
         * @param  mixed  $service
         * @return mixed
         */
        protected static function normalize($service)
        {
            return static::$instance->normalize($service);
        }
        /**
         * Get the extender callbacks for a given type.
         *
         * @param  string  $abstract
         * @return array
         */
        protected static function getExtenders($abstract)
        {
            return static::$instance->getExtenders($abstract);
        }
        /**
         * Resolve all of the dependencies from the ReflectionParameters.
         *
         * @param  array  $parameters
         * @param  array  $primitives
         * @return array
         */
        protected static function getDependencies(array $parameters, array $primitives = array())
        {
            return static::$instance->getDependencies($parameters, $primitives);
        }
        /**
         * Resolve a non-class hinted dependency.
         *
         * @param  \ReflectionParameter  $parameter
         * @return mixed
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected static function resolveNonClass(ReflectionParameter $parameter)
        {
            return static::$instance->resolveNonClass($parameter);
        }
        /**
         * Resolve a class based dependency from the container.
         *
         * @param  \ReflectionParameter  $parameter
         * @return mixed
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected static function resolveClass(ReflectionParameter $parameter)
        {
            return static::$instance->resolveClass($parameter);
        }
        /**
         * If extra parameters are passed by numeric ID, rekey them by argument name.
         *
         * @param  array  $dependencies
         * @param  array  $parameters
         * @return array
         */
        protected static function keyParametersByArgument(array $dependencies, array $parameters)
        {
            return static::$instance->keyParametersByArgument($dependencies, $parameters);
        }
        /**
         * Register a new resolving callback.
         *
         * @param  string    $abstract
         * @param  \Closure|null  $callback
         * @return void
         */
        public static function resolving($abstract, Closure $callback = null)
        {
            return static::$instance->resolving($abstract, $callback);
        }
        /**
         * Register a new after resolving callback for all types.
         *
         * @param  string   $abstract
         * @param  \Closure|null $callback
         * @return void
         */
        public static function afterResolving($abstract, Closure $callback = null)
        {
            return static::$instance->afterResolving($abstract, $callback);
        }
        /**
         * Register a new resolving callback by type of its first argument.
         *
         * @param  \Closure  $callback
         * @return void
         */
        protected static function resolvingCallback(Closure $callback)
        {
            return static::$instance->resolvingCallback($callback);
        }
        /**
         * Register a new after resolving callback by type of its first argument.
         *
         * @param  \Closure  $callback
         * @return void
         */
        protected static function afterResolvingCallback(Closure $callback)
        {
            return static::$instance->afterResolvingCallback($callback);
        }
        /**
         * Get the type hint for this closure's first argument.
         *
         * @param  \Closure  $callback
         * @return mixed
         */
        protected static function getFunctionHint(Closure $callback)
        {
            return static::$instance->getFunctionHint($callback);
        }
        /**
         * Fire all of the resolving callbacks.
         *
         * @param  string  $abstract
         * @param  mixed   $object
         * @return void
         */
        protected static function fireResolvingCallbacks($abstract, $object)
        {
            return static::$instance->fireResolvingCallbacks($abstract, $object);
        }
        /**
         * Get all callbacks for a given type.
         *
         * @param  string  $abstract
         * @param  object  $object
         * @param  array   $callbacksPerType
         *
         * @return array
         */
        protected static function getCallbacksForType($abstract, $object, array $callbacksPerType)
        {
            return static::$instance->getCallbacksForType($abstract, $object, $callbacksPerType);
        }
        /**
         * Fire an array of callbacks with an object.
         *
         * @param  mixed  $object
         * @param  array  $callbacks
         * @return void
         */
        protected static function fireCallbackArray($object, array $callbacks)
        {
            return static::$instance->fireCallbackArray($object, $callbacks);
        }
        /**
         * Determine if a given type is shared.
         *
         * @param  string  $abstract
         * @return bool
         */
        public static function isShared($abstract)
        {
            return static::$instance->isShared($abstract);
        }
        /**
         * Determine if the given concrete is buildable.
         *
         * @param  mixed   $concrete
         * @param  string  $abstract
         * @return bool
         */
        protected static function isBuildable($concrete, $abstract)
        {
            return static::$instance->isBuildable($concrete, $abstract);
        }
        /**
         * Get the alias for an abstract if available.
         *
         * @param  string  $abstract
         * @return string
         */
        protected static function getAlias($abstract)
        {
            return static::$instance->getAlias($abstract);
        }
        /**
         * Get the container's bindings.
         *
         * @return array
         */
        public static function getBindings()
        {
            return static::$instance->getBindings();
        }
        /**
         * Drop all of the stale instances and aliases.
         *
         * @param  string  $abstract
         * @return void
         */
        protected static function dropStaleInstances($abstract)
        {
            return static::$instance->dropStaleInstances($abstract);
        }
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param  string  $abstract
         * @return void
         */
        public static function forgetInstance($abstract)
        {
            return static::$instance->forgetInstance($abstract);
        }
        /**
         * Clear all of the instances from the container.
         *
         * @return void
         */
        public static function forgetInstances()
        {
            return static::$instance->forgetInstances();
        }
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void
         */
        public static function flush()
        {
            return static::$instance->flush();
        }
        /**
         * Set the globally available instance of the container.
         *
         * @return static
         */
        public static function getInstance()
        {
            return Illuminate\Container\Container::getInstance();
        }
        /**
         * Set the shared instance of the container.
         *
         * @param  \Illuminate\Contracts\Container\Container  $container
         * @return void
         */
        public static function setInstance(Illuminate\Contracts\Container\Container $container)
        {
            return Illuminate\Container\Container::setInstance($container);
        }
        /**
         * Determine if a given offset exists.
         *
         * @param  string  $key
         * @return bool
         */
        public static function offsetExists($key)
        {
            return static::$instance->offsetExists($key);
        }
        /**
         * Get the value at a given offset.
         *
         * @param  string  $key
         * @return mixed
         */
        public static function offsetGet($key)
        {
            return static::$instance->offsetGet($key);
        }
        /**
         * Set the value at a given offset.
         *
         * @param  string  $key
         * @param  mixed   $value
         * @return void
         */
        public static function offsetSet($key, $value)
        {
            return static::$instance->offsetSet($key, $value);
        }
        /**
         * Unset the value at a given offset.
         *
         * @param  string  $key
         * @return void
         */
        public static function offsetUnset($key)
        {
            return static::$instance->offsetUnset($key);
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Application::getFacadeAccessor();
        }
        public static function getApplicationRelativePath()
        {
            return Concrete\Core\Support\Facade\Application::getApplicationRelativePath();
        }
        public static function getApplicationURL($asObject = false)
        {
            return Concrete\Core\Support\Facade\Application::getApplicationURL($asObject);
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Session extends \Symfony\Component\HttpFoundation\Session\Session
    {
        /**
         * @var Symfony\Component\HttpFoundation\Session\Session
         */
        protected static $instance;
        /**
         * {@inheritdoc}
         */
        public static function start()
        {
            return static::$instance->start();
        }
        /**
         * {@inheritdoc}
         */
        public static function has($name)
        {
            return static::$instance->has($name);
        }
        /**
         * {@inheritdoc}
         */
        public static function get($name, $default = null)
        {
            return static::$instance->get($name, $default);
        }
        /**
         * {@inheritdoc}
         */
        public static function set($name, $value)
        {
            return static::$instance->set($name, $value);
        }
        /**
         * {@inheritdoc}
         */
        public static function all()
        {
            return static::$instance->all();
        }
        /**
         * {@inheritdoc}
         */
        public static function replace(array $attributes)
        {
            return static::$instance->replace($attributes);
        }
        /**
         * {@inheritdoc}
         */
        public static function remove($name)
        {
            return static::$instance->remove($name);
        }
        /**
         * {@inheritdoc}
         */
        public static function clear()
        {
            return static::$instance->clear();
        }
        /**
         * {@inheritdoc}
         */
        public static function isStarted()
        {
            return static::$instance->isStarted();
        }
        /**
         * Returns an iterator for attributes.
         *
         * @return \ArrayIterator An \ArrayIterator instance
         */
        public static function getIterator()
        {
            return static::$instance->getIterator();
        }
        /**
         * Returns the number of attributes.
         *
         * @return int The number of attributes
         */
        public static function count()
        {
            return static::$instance->count();
        }
        /**
         * @return int
         *
         * @internal
         */
        public static function getUsageIndex()
        {
            return static::$instance->getUsageIndex();
        }
        /**
         * @return bool
         *
         * @internal
         */
        public static function isEmpty()
        {
            return static::$instance->isEmpty();
        }
        /**
         * {@inheritdoc}
         */
        public static function invalidate($lifetime = null)
        {
            return static::$instance->invalidate($lifetime);
        }
        /**
         * {@inheritdoc}
         */
        public static function migrate($destroy = false, $lifetime = null)
        {
            return static::$instance->migrate($destroy, $lifetime);
        }
        /**
         * {@inheritdoc}
         */
        public static function save()
        {
            return static::$instance->save();
        }
        /**
         * {@inheritdoc}
         */
        public static function getId()
        {
            return static::$instance->getId();
        }
        /**
         * {@inheritdoc}
         */
        public static function setId($id)
        {
            return static::$instance->setId($id);
        }
        /**
         * {@inheritdoc}
         */
        public static function getName()
        {
            return static::$instance->getName();
        }
        /**
         * {@inheritdoc}
         */
        public static function setName($name)
        {
            return static::$instance->setName($name);
        }
        /**
         * {@inheritdoc}
         */
        public static function getMetadataBag()
        {
            return static::$instance->getMetadataBag();
        }
        /**
         * {@inheritdoc}
         */
        public static function registerBag(Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag)
        {
            return static::$instance->registerBag($bag);
        }
        /**
         * {@inheritdoc}
         */
        public static function getBag($name)
        {
            return static::$instance->getBag($name);
        }
        /**
         * Gets the flashbag interface.
         *
         * @return FlashBagInterface
         */
        public static function getFlashBag()
        {
            return static::$instance->getFlashBag();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Session::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Database extends \Concrete\Core\Database\DatabaseManager
    {
        /**
         * @var Concrete\Core\Database\DatabaseManager
         */
        protected static $instance;
        /**
         * Legacy entry point.
         *
         * @deprecated
         *
         * @return \Concrete\Core\Database\Connection\Connection
         */
        public static function getActiveConnection()
        {
            return static::$instance->getActiveConnection();
        }
        /**
         * Legacy entry point.
         *
         * @deprecated
         *
         * @return \Concrete\Core\Database\Connection\Connection
         */
        public static function get()
        {
            return static::$instance->get();
        }
        /**
         * Get a database connection instance.
         *
         * @param  string $name
         *
         * @return \Concrete\Core\Database\Connection\Connection
         */
        public static function connection($name = null)
        {
            return static::$instance->connection($name);
        }
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param  string $name
         */
        public static function purge($name = null)
        {
            return static::$instance->purge($name);
        }
        /**
         * Disconnect from the given database.
         *
         * @param  string $name
         */
        public static function disconnect($name = null)
        {
            return static::$instance->disconnect($name);
        }
        /**
         * Reconnect to the given database.
         *
         * @param  string $name
         *
         * @return \Concrete\Core\Database\Connection\Connection
         */
        public static function reconnect($name = null)
        {
            return static::$instance->reconnect($name);
        }
        /**
         * Refresh the PDO connections on a given connection.
         *
         * @param  string $name
         *
         * @return Connection
         */
        protected static function refreshPdoConnections($name)
        {
            return static::$instance->refreshPdoConnections($name);
        }
        /**
         * Make the database connection instance.
         *
         * @param  string $name
         *
         * @return Connection
         */
        protected static function makeConnection($name)
        {
            return static::$instance->makeConnection($name);
        }
        /**
         * Prepare the database connection instance.
         *
         * @param Connection $connection
         *
         * @return Connection
         */
        protected static function prepare($connection)
        {
            return static::$instance->prepare($connection);
        }
        /**
         * Get the configuration for a connection.
         *
         * @param  string $name
         *
         * @return array
         *
         * @throws \InvalidArgumentException
         */
        protected static function getConfig($name)
        {
            return static::$instance->getConfig($name);
        }
        /**
         * Get the default connection name.
         *
         * @return string
         */
        public static function getDefaultConnection()
        {
            return static::$instance->getDefaultConnection();
        }
        /**
         * Set the default connection name.
         *
         * @param  string $name
         */
        public static function setDefaultConnection($name)
        {
            return static::$instance->setDefaultConnection($name);
        }
        /**
         * Register an extension connection resolver.
         *
         * @param  string   $name
         * @param  callable $resolver
         */
        public static function extend($name, $resolver)
        {
            return static::$instance->extend($name, $resolver);
        }
        /**
         * Return all of the created connections.
         *
         * @return \Concrete\Core\Database\Connection\Connection[]
         */
        public static function getConnections()
        {
            return static::$instance->getConnections();
        }
        /**
         * @return \Concrete\Core\Database\Connection\ConnectionFactory
         */
        public static function getFactory()
        {
            return static::$instance->getFactory();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Database::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class ORM extends \Concrete\Core\Database\DatabaseManagerORM
    {
        /**
         * @var Concrete\Core\Database\DatabaseManagerORM
         */
        protected static $instance;
        /**
         * @return \Doctrine\ORM\EntityManager
         */
        public static function entityManager()
        {
            return static::$instance->entityManager();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\DatabaseORM::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Events extends \Symfony\Component\EventDispatcher\EventDispatcher
    {
        /**
         * @var Symfony\Component\EventDispatcher\EventDispatcher
         */
        protected static $instance;
        /**
         * {@inheritdoc}
         */
        public static function dispatch($eventName, Symfony\Component\EventDispatcher\Event $event = null)
        {
            return static::$instance->dispatch($eventName, $event);
        }
        /**
         * {@inheritdoc}
         */
        public static function getListeners($eventName = null)
        {
            return static::$instance->getListeners($eventName);
        }
        /**
         * {@inheritdoc}
         */
        public static function getListenerPriority($eventName, $listener)
        {
            return static::$instance->getListenerPriority($eventName, $listener);
        }
        /**
         * {@inheritdoc}
         */
        public static function hasListeners($eventName = null)
        {
            return static::$instance->hasListeners($eventName);
        }
        /**
         * {@inheritdoc}
         */
        public static function addListener($eventName, $listener, $priority = 0)
        {
            return static::$instance->addListener($eventName, $listener, $priority);
        }
        /**
         * {@inheritdoc}
         */
        public static function removeListener($eventName, $listener)
        {
            return static::$instance->removeListener($eventName, $listener);
        }
        /**
         * {@inheritdoc}
         */
        public static function addSubscriber(Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
        {
            return static::$instance->addSubscriber($subscriber);
        }
        /**
         * {@inheritdoc}
         */
        public static function removeSubscriber(Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
        {
            return static::$instance->removeSubscriber($subscriber);
        }
        /**
         * Triggers the listeners of an event.
         *
         * This method can be overridden to add functionality that is executed
         * for each listener.
         *
         * @param callable[] $listeners The event listeners
         * @param string     $eventName The name of the event to dispatch
         * @param Event      $event     The event object to pass to the event handlers/listeners
         */
        protected static function doDispatch($listeners, $eventName, Symfony\Component\EventDispatcher\Event $event)
        {
            return static::$instance->doDispatch($listeners, $eventName, $event);
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Events::getFacadeAccessor();
        }
        public static function fire($eventName, $event = null)
        {
            return Concrete\Core\Support\Facade\Events::fire($eventName, $event);
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Express extends \Concrete\Core\Express\ObjectManager
    {
        /**
         * @var Concrete\Core\Express\ObjectManager
         */
        protected static $instance;
        public static function getEntities($asObject = false)
        {
            return static::$instance->getEntities($asObject);
        }
        public static function getList($entityHandle, $asObject = false)
        {
            return static::$instance->getList($entityHandle, $asObject);
        }
        public static function refresh($object)
        {
            return static::$instance->refresh($object);
        }
        public static function buildObject($handle, $plural_handle, $name, Concrete\Core\Entity\Package $pkg = null)
        {
            return static::$instance->buildObject($handle, $plural_handle, $name, $pkg);
        }
        public static function buildEntry($entity)
        {
            return static::$instance->buildEntry($entity);
        }
        public static function getEntry($entryID)
        {
            return static::$instance->getEntry($entryID);
        }
        public static function deleteEntry($entryID)
        {
            return static::$instance->deleteEntry($entryID);
        }
        public static function getObjectByID($entityID)
        {
            return static::$instance->getObjectByID($entityID);
        }
        public static function getObjectByHandle($entityHandle)
        {
            return static::$instance->getObjectByHandle($entityHandle);
        }
        public static function getEntityController(Concrete\Core\Entity\Express\Entity $entity)
        {
            return static::$instance->getEntityController($entity);
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Express::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Route extends \Concrete\Core\Routing\Router
    {
        /**
         * @var Concrete\Core\Routing\Router
         */
        protected static $instance;
        public static function buildGroup()
        {
            return static::$instance->buildGroup();
        }
        /**
         * @param string $path
         * @param string $action
         *
         * @since 8.5.0a2
         *
         * @return \Concrete\Core\Routing\RouteBuilder
         */
        public static function get($path, $action)
        {
            return static::$instance->get($path, $action);
        }
        /**
         * @param string $path
         * @param string $action
         *
         * @since 8.5.0a2
         *
         * @return \Concrete\Core\Routing\RouteBuilder
         */
        public static function head($path, $action)
        {
            return static::$instance->head($path, $action);
        }
        /**
         * @param string $path
         * @param string $action
         *
         * @since 8.5.0a2
         *
         * @return \Concrete\Core\Routing\RouteBuilder
         */
        public static function post($path, $action)
        {
            return static::$instance->post($path, $action);
        }
        /**
         * @param string $path
         * @param string $action
         *
         * @since 8.5.0a2
         *
         * @return \Concrete\Core\Routing\RouteBuilder
         */
        public static function put($path, $action)
        {
            return static::$instance->put($path, $action);
        }
        /**
         * @param string $path
         * @param string $action
         *
         * @since 8.5.0a2
         *
         * @return \Concrete\Core\Routing\RouteBuilder
         */
        public static function patch($path, $action)
        {
            return static::$instance->patch($path, $action);
        }
        /**
         * @param string $path
         * @param string $action
         *
         * @since 8.5.0a2
         *
         * @return \Concrete\Core\Routing\RouteBuilder
         */
        public static function delete($path, $action)
        {
            return static::$instance->delete($path, $action);
        }
        /**
         * @param string $path
         * @param string $action
         *
         * @since 8.5.0a2
         *
         * @return \Concrete\Core\Routing\RouteBuilder
         */
        public static function options($path, $action)
        {
            return static::$instance->options($path, $action);
        }
        /**
         * @param string $path
         * @param string $action
         *
         * @since 8.5.0a2
         *
         * @return \Concrete\Core\Routing\RouteBuilder
         */
        public static function all($path, $action)
        {
            return static::$instance->all($path, $action);
        }
        /**
         * @param Route $route
         *
         * @return RouteActionInterface
         */
        public static function resolveAction(Concrete\Core\Routing\Route $route)
        {
            return static::$instance->resolveAction($route);
        }
        /**
         * @return RouteCollection
         */
        public static function getRoutes()
        {
            return static::$instance->getRoutes();
        }
        /**
         * @return RouteActionFactoryInterface
         */
        public static function getActionFactory()
        {
            return static::$instance->getActionFactory();
        }
        public static function addRoute(Concrete\Core\Routing\Route $route)
        {
            return static::$instance->addRoute($route);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Routing\RouterInterface::getRouteByPath()
         */
        public static function getRouteByPath($path, Symfony\Component\Routing\RequestContext $context, array &$routeAttributes = array())
        {
            return static::$instance->getRouteByPath($path, $context, $routeAttributes);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Concrete\Core\Routing\RouterInterface::matchRoute()
         */
        public static function matchRoute(Symfony\Component\HttpFoundation\Request $request)
        {
            return static::$instance->matchRoute($request);
        }
        public static function loadRouteList(Concrete\Core\Routing\RouteListInterface $list)
        {
            return static::$instance->loadRouteList($list);
        }
        /**
         * @deprecated. Use the verb methods instead.
         *
         * @param $path
         * @param $callback
         * @param null $handle
         * @param array $requirements
         * @param array $options
         * @param string $host
         * @param array $schemes
         * @param array $methods
         * @param null $condition
         *
         * @return Route
         */
        public static function register($path, $callback, $handle = null, array $requirements = array(), array $options = array(), $host = "", $schemes = array(), $methods = array(), $condition = null)
        {
            return static::$instance->register($path, $callback, $handle, $requirements, $options, $host, $schemes, $methods, $condition);
        }
        /**
         * Registers routes from a config array. This is deprecated. Use the $router object
         * directly in an included file.
         *
         * @deprecated.
         *
         * @param array $routes
         */
        public static function registerMultiple(array $routes)
        {
            return static::$instance->registerMultiple($routes);
        }
        /**
         * Returns a route string based on data. DO NOT USE THIS.
         *
         * @deprecated
         *
         * @param $data
         *
         * @return string
         */
        public static function route($data)
        {
            return static::$instance->route($data);
        }
        /**
         * @deprecated Use $app->make(\Concrete\Core\Page\Theme\ThemeRouteCollection::class)->setThemeByRoute() with the same arguments
         *
         * {@inheritdoc}
         * @see \Concrete\Core\Page\Theme\ThemeRouteCollection::setThemeByRoute()
         */
        public static function setThemeByRoute($path, $theme = null, $wrapper = FILENAME_THEMES_VIEW)
        {
            return static::$instance->setThemeByRoute($path, $theme, $wrapper);
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Route::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Site extends \Concrete\Core\Site\Service
    {
        /**
         * @var Concrete\Core\Site\Service
         */
        protected static $instance;
        /**
         * @param EntityManagerInterface $entityManager
         */
        public static function setEntityManager($entityManager)
        {
            return static::$instance->setEntityManager($entityManager);
        }
        /**
         * @param mixed $cache
         */
        public static function setCache($cache)
        {
            return static::$instance->setCache($cache);
        }
        /**
         * @param Type $type
         *
         * @return Site[]
         */
        public static function getByType(Concrete\Core\Entity\Site\Type $type)
        {
            return static::$instance->getByType($type);
        }
        /**
         * @param string $handle
         *
         * @return Site|null
         */
        public static function getByHandle($handle)
        {
            return static::$instance->getByHandle($handle);
        }
        /**
         * @return Site|null
         */
        public static function getDefault()
        {
            return static::$instance->getDefault();
        }
        /**
         * @param Type $type
         * @param Theme $theme
         * @param string $handle
         * @param string $name
         * @param string $locale
         * @param bool $default
         *
         * @return Site
         */
        public static function add(Concrete\Core\Entity\Site\Type $type, Concrete\Core\Page\Theme\Theme $theme, $handle, $name, $locale, $default = false)
        {
            return static::$instance->add($type, $theme, $handle, $name, $locale, $default);
        }
        /**
         * @param int $siteTreeID
         *
         * @return \Concrete\Core\Entity\Site\Tree|null
         */
        public static function getSiteTreeByID($siteTreeID)
        {
            return static::$instance->getSiteTreeByID($siteTreeID);
        }
        /**
         * @param int $id
         *
         * @return Site|null
         */
        public static function getByID($id)
        {
            return static::$instance->getByID($id);
        }
        /**
         * @param Site $site
         */
        public static function delete(Concrete\Core\Entity\Site\Site $site)
        {
            return static::$instance->delete($site);
        }
        /**
         * Returns a list of sites. If $sort = 'name' then the sites will be sorted by site name. If sort is false it will
         * not be sorted. Only name is supported for now.
         *
         * @param string $sort
         *
         * @return Site[]
         */
        public static function getList($sort = "name")
        {
            return static::$instance->getList($sort);
        }
        /**
         * @param string|null $locale
         *
         * @return Site
         */
        public static function installDefault($locale = null)
        {
            return static::$instance->installDefault($locale);
        }
        /**
         * @return Site|null
         */
        final public static function getSite()
        {
            return static::$instance->getSite();
        }
        /**
         * @return Site|null
         */
        final public static function getActiveSiteForEditing()
        {
            return static::$instance->getActiveSiteForEditing();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Site::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class UserInfo extends \Concrete\Core\User\UserInfoRepository
    {
        /**
         * @var Concrete\Core\User\UserInfoRepository
         */
        protected static $instance;
        /**
         * Returns the UserInfo object for a give user's uID.
         *
         * @param int $uID
         *
         * @return UserInfo|null
         */
        public static function getByID($uID)
        {
            return static::$instance->getByID($uID);
        }
        /**
         * Returns the UserInfo object for a give user's username.
         *
         * @param string $uName
         *
         * @return UserInfo|null
         */
        public static function getByName($uName)
        {
            return static::$instance->getByName($uName);
        }
        /**
         * @deprecated
         */
        public static function getByUserName($uName)
        {
            return static::$instance->getByUserName($uName);
        }
        /**
         * Returns the UserInfo object for a give user's email address.
         *
         * @param string $uEmail
         *
         * @return UserInfo|null
         */
        public static function getByEmail($uEmail)
        {
            return static::$instance->getByEmail($uEmail);
        }
        /**
         * @param string $uHash
         * @param bool $unredeemedHashesOnly
         *
         * @return UserInfo|null
         */
        public static function getByValidationHash($uHash, $unredeemedHashesOnly = true)
        {
            return static::$instance->getByValidationHash($uHash, $unredeemedHashesOnly);
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\UserInfo::getFacadeAccessor();
        }
        /**
         * @deprecated
         */
        public static function add($data)
        {
            return Concrete\Core\Support\Facade\UserInfo::add($data);
        }
        /**
         * @deprecated
         */
        public static function addSuperUser($uPasswordEncrypted, $uEmail)
        {
            return Concrete\Core\Support\Facade\UserInfo::addSuperUser($uPasswordEncrypted, $uEmail);
        }
        /**
         * @deprecated
         */
        public static function register($data)
        {
            return Concrete\Core\Support\Facade\UserInfo::register($data);
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Element extends \Concrete\Core\Filesystem\ElementManager
    {
        /**
         * @var Concrete\Core\Filesystem\ElementManager
         */
        protected static $instance;
        public static function get($element)
        {
            return static::$instance->get($element);
        }
        public static function register($element, $object)
        {
            return static::$instance->register($element, $object);
        }
        public static function unregister($element)
        {
            return static::$instance->unregister($element);
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Element::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Log extends \Monolog\Logger
    {
        /**
         * @var Monolog\Logger
         */
        protected static $instance;
        /**
         * @return string
         */
        public static function getName()
        {
            return static::$instance->getName();
        }
        /**
         * Return a new cloned instance with the name changed
         *
         * @return static
         */
        public static function withName($name)
        {
            return static::$instance->withName($name);
        }
        /**
         * Pushes a handler on to the stack.
         *
         * @param  HandlerInterface $handler
         * @return $this
         */
        public static function pushHandler(Monolog\Handler\HandlerInterface $handler)
        {
            return static::$instance->pushHandler($handler);
        }
        /**
         * Pops a handler from the stack
         *
         * @return HandlerInterface
         */
        public static function popHandler()
        {
            return static::$instance->popHandler();
        }
        /**
         * Set handlers, replacing all existing ones.
         *
         * If a map is passed, keys will be ignored.
         *
         * @param  HandlerInterface[] $handlers
         * @return $this
         */
        public static function setHandlers(array $handlers)
        {
            return static::$instance->setHandlers($handlers);
        }
        /**
         * @return HandlerInterface[]
         */
        public static function getHandlers()
        {
            return static::$instance->getHandlers();
        }
        /**
         * Adds a processor on to the stack.
         *
         * @param  callable $callback
         * @return $this
         */
        public static function pushProcessor($callback)
        {
            return static::$instance->pushProcessor($callback);
        }
        /**
         * Removes the processor on top of the stack and returns it.
         *
         * @return callable
         */
        public static function popProcessor()
        {
            return static::$instance->popProcessor();
        }
        /**
         * @return callable[]
         */
        public static function getProcessors()
        {
            return static::$instance->getProcessors();
        }
        /**
         * Control the use of microsecond resolution timestamps in the 'datetime'
         * member of new records.
         *
         * Generating microsecond resolution timestamps by calling
         * microtime(true), formatting the result via sprintf() and then parsing
         * the resulting string via \DateTime::createFromFormat() can incur
         * a measurable runtime overhead vs simple usage of DateTime to capture
         * a second resolution timestamp in systems which generate a large number
         * of log events.
         *
         * @param bool $micro True to use microtime() to create timestamps
         */
        public static function useMicrosecondTimestamps($micro)
        {
            return static::$instance->useMicrosecondTimestamps($micro);
        }
        /**
         * Adds a log record.
         *
         * @param  int     $level   The logging level
         * @param  string  $message The log message
         * @param  array   $context The log context
         * @return bool Whether the record has been processed
         */
        public static function addRecord($level, $message, array $context = array())
        {
            return static::$instance->addRecord($level, $message, $context);
        }
        /**
         * Ends a log cycle and frees all resources used by handlers.
         *
         * Closing a Handler means flushing all buffers and freeing any open resources/handles.
         * Handlers that have been closed should be able to accept log records again and re-open
         * themselves on demand, but this may not always be possible depending on implementation.
         *
         * This is useful at the end of a request and will be called automatically on every handler
         * when they get destructed.
         */
        public static function close()
        {
            return static::$instance->close();
        }
        /**
         * Ends a log cycle and resets all handlers and processors to their initial state.
         *
         * Resetting a Handler or a Processor means flushing/cleaning all buffers, resetting internal
         * state, and getting it back to a state in which it can receive log records again.
         *
         * This is useful in case you want to avoid logs leaking between two requests or jobs when you
         * have a long running process like a worker or an application server serving multiple requests
         * in one process.
         */
        public static function reset()
        {
            return static::$instance->reset();
        }
        /**
         * Adds a log record at the DEBUG level.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function addDebug($message, array $context = array())
        {
            return static::$instance->addDebug($message, $context);
        }
        /**
         * Adds a log record at the INFO level.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function addInfo($message, array $context = array())
        {
            return static::$instance->addInfo($message, $context);
        }
        /**
         * Adds a log record at the NOTICE level.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function addNotice($message, array $context = array())
        {
            return static::$instance->addNotice($message, $context);
        }
        /**
         * Adds a log record at the WARNING level.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function addWarning($message, array $context = array())
        {
            return static::$instance->addWarning($message, $context);
        }
        /**
         * Adds a log record at the ERROR level.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function addError($message, array $context = array())
        {
            return static::$instance->addError($message, $context);
        }
        /**
         * Adds a log record at the CRITICAL level.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function addCritical($message, array $context = array())
        {
            return static::$instance->addCritical($message, $context);
        }
        /**
         * Adds a log record at the ALERT level.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function addAlert($message, array $context = array())
        {
            return static::$instance->addAlert($message, $context);
        }
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function addEmergency($message, array $context = array())
        {
            return static::$instance->addEmergency($message, $context);
        }
        /**
         * Gets all supported logging levels.
         *
         * @return array Assoc array with human-readable level names => level codes.
         */
        public static function getLevels()
        {
            return Monolog\Logger::getLevels();
        }
        /**
         * Gets the name of the logging level.
         *
         * @param  int    $level
         * @return string
         */
        public static function getLevelName($level)
        {
            return Monolog\Logger::getLevelName($level);
        }
        /**
         * Converts PSR-3 levels to Monolog ones if necessary
         *
         * @param string|int Level number (monolog) or name (PSR-3)
         * @return int
         */
        public static function toMonologLevel($level)
        {
            return Monolog\Logger::toMonologLevel($level);
        }
        /**
         * Checks whether the Logger has a handler that listens on the given level
         *
         * @param  int     $level
         * @return bool
         */
        public static function isHandling($level)
        {
            return static::$instance->isHandling($level);
        }
        /**
         * Set a custom exception handler
         *
         * @param  callable $callback
         * @return $this
         */
        public static function setExceptionHandler($callback)
        {
            return static::$instance->setExceptionHandler($callback);
        }
        /**
         * @return callable
         */
        public static function getExceptionHandler()
        {
            return static::$instance->getExceptionHandler();
        }
        /**
         * Delegates exception management to the custom exception handler,
         * or throws the exception if no custom handler is set.
         */
        protected static function handleException(Exception $e, array $record)
        {
            return static::$instance->handleException($e, $record);
        }
        /**
         * Adds a log record at an arbitrary level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  mixed   $level   The log level
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function log($level, $message, array $context = array())
        {
            return static::$instance->log($level, $message, $context);
        }
        /**
         * Adds a log record at the DEBUG level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function debug($message, array $context = array())
        {
            return static::$instance->debug($message, $context);
        }
        /**
         * Adds a log record at the INFO level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function info($message, array $context = array())
        {
            return static::$instance->info($message, $context);
        }
        /**
         * Adds a log record at the NOTICE level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function notice($message, array $context = array())
        {
            return static::$instance->notice($message, $context);
        }
        /**
         * Adds a log record at the WARNING level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function warn($message, array $context = array())
        {
            return static::$instance->warn($message, $context);
        }
        /**
         * Adds a log record at the WARNING level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function warning($message, array $context = array())
        {
            return static::$instance->warning($message, $context);
        }
        /**
         * Adds a log record at the ERROR level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function err($message, array $context = array())
        {
            return static::$instance->err($message, $context);
        }
        /**
         * Adds a log record at the ERROR level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function error($message, array $context = array())
        {
            return static::$instance->error($message, $context);
        }
        /**
         * Adds a log record at the CRITICAL level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function crit($message, array $context = array())
        {
            return static::$instance->crit($message, $context);
        }
        /**
         * Adds a log record at the CRITICAL level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function critical($message, array $context = array())
        {
            return static::$instance->critical($message, $context);
        }
        /**
         * Adds a log record at the ALERT level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function alert($message, array $context = array())
        {
            return static::$instance->alert($message, $context);
        }
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function emerg($message, array $context = array())
        {
            return static::$instance->emerg($message, $context);
        }
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * This method allows for compatibility with common interfaces.
         *
         * @param  string $message The log message
         * @param  array  $context The log context
         * @return bool   Whether the record has been processed
         */
        public static function emergency($message, array $context = array())
        {
            return static::$instance->emergency($message, $context);
        }
        /**
         * Set the timezone to be used for the timestamp of log records.
         *
         * This is stored globally for all Logger instances
         *
         * @param \DateTimeZone $tz Timezone object
         */
        public static function setTimezone(DateTimeZone $tz)
        {
            return Monolog\Logger::setTimezone($tz);
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Log::getFacadeAccessor();
        }
        /**
         * @deprecated
         */
        public static function addEntry($entry)
        {
            return Concrete\Core\Support\Facade\Log::addEntry($entry);
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Image extends \Imagine\Gd\Imagine
    {
        /**
         * @var Imagine\Gd\Imagine
         */
        protected static $instance;
        /**
         * {@inheritdoc}
         *
         * @see \Imagine\Image\ImagineInterface::create()
         */
        public static function create(Imagine\Image\BoxInterface $size, Imagine\Image\Palette\Color\ColorInterface $color = null)
        {
            return static::$instance->create($size, $color);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Imagine\Image\ImagineInterface::open()
         */
        public static function open($path)
        {
            return static::$instance->open($path);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Imagine\Image\ImagineInterface::load()
         */
        public static function load($string)
        {
            return static::$instance->load($string);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Imagine\Image\ImagineInterface::read()
         */
        public static function read($resource)
        {
            return static::$instance->read($resource);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Imagine\Image\ImagineInterface::font()
         */
        public static function font($file, $size, Imagine\Image\Palette\Color\ColorInterface $color)
        {
            return static::$instance->font($file, $size, $color);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Imagine\Image\ImagineInterface::setMetadataReader()
         */
        public static function setMetadataReader(Imagine\Image\Metadata\MetadataReaderInterface $metadataReader)
        {
            return static::$instance->setMetadataReader($metadataReader);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Imagine\Image\ImagineInterface::getMetadataReader()
         */
        public static function getMetadataReader()
        {
            return static::$instance->getMetadataReader();
        }
        /**
         * {@inheritdoc}
         *
         * @see \Imagine\Factory\ClassFactoryAwareInterface::setClassFactory()
         */
        public static function setClassFactory(Imagine\Factory\ClassFactoryInterface $classFactory)
        {
            return static::$instance->setClassFactory($classFactory);
        }
        /**
         * {@inheritdoc}
         *
         * @see \Imagine\Factory\ClassFactoryAwareInterface::getClassFactory()
         */
        public static function getClassFactory()
        {
            return static::$instance->getClassFactory();
        }
        /**
         * Checks a path that could be used with ImagineInterface::open and returns
         * a proper string.
         *
         * @param string|object $path
         *
         * @throws \Imagine\Exception\InvalidArgumentException in case the given path is invalid
         *
         * @return string
         */
        protected static function checkPath($path)
        {
            return static::$instance->checkPath($path);
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Image::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class Config extends \Concrete\Core\Config\Repository\Repository
    {
        /**
         * @var Concrete\Core\Config\Repository\Repository
         */
        protected static $instance;
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         *
         * @return bool
         */
        public static function has($key)
        {
            return static::$instance->has($key);
        }
        /**
         * Determine if a configuration group exists.
         *
         * @param string $key
         *
         * @return bool
         */
        public static function hasGroup($key)
        {
            return static::$instance->hasGroup($key);
        }
        /**
         * Get the specified configuration value.
         *
         * @param string $key
         * @param mixed $default
         *
         * @return mixed
         */
        public static function get($key, $default = null)
        {
            return static::$instance->get($key, $default);
        }
        /**
         * Set a given configuration value.
         *
         * @param string $key
         * @param mixed $value
         */
        public static function set($key, $value = null)
        {
            return static::$instance->set($key, $value);
        }
        /**
         * Save a key.
         *
         * @param string $key
         * @param mixed $value
         *
         * @return bool
         */
        public static function save($key, $value)
        {
            return static::$instance->save($key, $value);
        }
        /**
         * Clear specific key.
         *
         * @param string $key
         */
        public static function clear($key)
        {
            return static::$instance->clear($key);
        }
        /**
         * Clear cached items.
         */
        public static function clearCache()
        {
            return static::$instance->clearCache();
        }
        /**
         * Clear a namespace (Note: this deletes items permanently).
         *
         * @param string $namespace
         */
        public static function clearNamespace($namespace)
        {
            return static::$instance->clearNamespace($namespace);
        }
        /**
         * Register a package for cascading configuration.
         *
         * @param string $package
         * @param string|null $hint
         * @param string|null $namespace
         */
        public static function package($package, $hint = null, $namespace = null)
        {
            return static::$instance->package($package, $hint, $namespace);
        }
        /**
         * Register an after load callback for a given namespace.
         *
         * @param string $namespace
         * @param \Closure $callback
         */
        public static function afterLoading($namespace, Closure $callback)
        {
            return static::$instance->afterLoading($namespace, $callback);
        }
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         */
        public static function addNamespace($namespace, $hint)
        {
            return static::$instance->addNamespace($namespace, $hint);
        }
        /**
         * Returns all registered namespaces with the config
         * loader.
         *
         * @return array
         */
        public static function getNamespaces()
        {
            return static::$instance->getNamespaces();
        }
        /**
         * Get the loader implementation.
         *
         * @return LoaderInterface
         */
        public static function getLoader()
        {
            return static::$instance->getLoader();
        }
        /**
         * Set the loader implementation.
         *
         * @param LoaderInterface $loader
         */
        public static function setLoader(Concrete\Core\Config\LoaderInterface $loader)
        {
            return static::$instance->setLoader($loader);
        }
        /**
         * Get the saver implementation.
         *
         * @return SaverInterface
         */
        public static function getSaver()
        {
            return static::$instance->getSaver();
        }
        /**
         * Set the saver instance.
         *
         * @param SaverInterface $saver
         */
        public static function setSaver(Concrete\Core\Config\SaverInterface $saver)
        {
            return static::$instance->setSaver($saver);
        }
        /**
         * Get the current configuration environment.
         *
         * @return string
         */
        public static function getEnvironment()
        {
            return static::$instance->getEnvironment();
        }
        /**
         * Get the after load callback array.
         *
         * @return array
         */
        public static function getAfterLoadCallbacks()
        {
            return static::$instance->getAfterLoadCallbacks();
        }
        /**
         * Get all of the configuration items.
         *
         * @return array
         */
        public static function getItems()
        {
            return static::$instance->getItems();
        }
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         *
         * @return array
         */
        public static function parseKey($key)
        {
            return static::$instance->parseKey($key);
        }
        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         */
        public static function setParsedKey($key, $parsed)
        {
            return static::$instance->setParsedKey($key, $parsed);
        }
        /**
         * Execute a callable using a specific key value.
         *
         * @param string $key
         * @param mixed $value
         * @param callable $callable
         *
         * @return mixed returns the result of $callable
         */
        public static function withKey($key, $value, $callable)
        {
            return static::$instance->withKey($key, $value, $callable);
        }
        /**
         * Load the configuration group for the key.
         *
         * @param string $group
         * @param string $namespace
         * @param string $collection
         */
        protected static function load($group, $namespace, $collection)
        {
            return static::$instance->load($group, $namespace, $collection);
        }
        /**
         * Call the after load callback for a namespace.
         *
         * @param string $namespace
         * @param string $group
         * @param array $items
         *
         * @return array
         */
        protected static function callAfterLoad($namespace, $group, $items)
        {
            return static::$instance->callAfterLoad($namespace, $group, $items);
        }
        /**
         * Parse an array of namespaced segments.
         *
         * @param string $key
         *
         * @return array
         */
        protected static function parseNamespacedSegments($key)
        {
            return static::$instance->parseNamespacedSegments($key);
        }
        /**
         * @param string $key
         * @param string $namespace
         * @param string $item
         *
         * @return array
         */
        protected static function parsePackageSegments($key, $namespace, $item)
        {
            return static::$instance->parsePackageSegments($key, $namespace, $item);
        }
        /**
         * Get the configuration namespace for a package.
         *
         * @param string|\Concrete\Core\Package\Package $package
         * @param string $namespace
         *
         * @return string
         */
        protected static function getPackageNamespace($package, $namespace)
        {
            return static::$instance->getPackageNamespace($package, $namespace);
        }
        /**
         * Get the collection identifier.
         *
         * @param string $group
         * @param string $namespace
         *
         * @return string
         */
        protected static function getCollection($group, $namespace = null)
        {
            return static::$instance->getCollection($group, $namespace);
        }
        /**
         * Parse an array of basic segments.
         *
         * @param array $segments
         *
         * @return array
         */
        protected static function parseBasicSegments(array $segments)
        {
            return static::$instance->parseBasicSegments($segments);
        }
        /**
         * Prepend a value onto an array configuration value.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return void
         */
        public static function prepend($key, $value)
        {
            return static::$instance->prepend($key, $value);
        }
        /**
         * Push a value onto an array configuration value.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return void
         */
        public static function push($key, $value)
        {
            return static::$instance->push($key, $value);
        }
        /**
         * Get all of the configuration items for the application.
         *
         * @return array
         */
        public static function all()
        {
            return static::$instance->all();
        }
        /**
         * Determine if the given configuration option exists.
         *
         * @param  string  $key
         * @return bool
         */
        public static function offsetExists($key)
        {
            return static::$instance->offsetExists($key);
        }
        /**
         * Get a configuration option.
         *
         * @param  string  $key
         * @return mixed
         */
        public static function offsetGet($key)
        {
            return static::$instance->offsetGet($key);
        }
        /**
         * Set a configuration option.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return void
         */
        public static function offsetSet($key, $value)
        {
            return static::$instance->offsetSet($key, $value);
        }
        /**
         * Unset a configuration option.
         *
         * @param  string  $key
         * @return void
         */
        public static function offsetUnset($key)
        {
            return static::$instance->offsetUnset($key);
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Config::getFacadeAccessor();
        }
        /**
         * Get the root object behind the facade.
         *
         * @return mixed
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeRoot();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }

    class URL extends \Concrete\Core\Url\Resolver\Manager\ResolverManager
    {
        /**
         * @var Concrete\Core\Url\Resolver\Manager\ResolverManager
         */
        protected static $instance;
        /**
         * {@inheritdoc}
         */
        public static function addResolver($handle, Concrete\Core\Url\Resolver\UrlResolverInterface $resolver, $priority = 512)
        {
            return static::$instance->addResolver($handle, $resolver, $priority);
        }
        /**
         * {@inheritdoc}
         */
        public static function getDefaultResolver()
        {
            return static::$instance->getDefaultResolver();
        }
        /**
         * {@inheritdoc}
         */
        public static function getResolver($handle)
        {
            return static::$instance->getResolver($handle);
        }
        /**
         * @return array
         */
        public static function getResolvers()
        {
            return static::$instance->getResolvers();
        }
        /**
         * {@inheritdoc}
         */
        public static function resolve(array $args)
        {
            return static::$instance->resolve($args);
        }
        /**
         * @return \Concrete\Core\Url\Resolver\Manager\ResolverManagerInterface
         */
        public static function getFacadeRoot()
        {
            return Concrete\Core\Support\Facade\Url::getFacadeRoot();
        }
        public static function getFacadeAccessor()
        {
            return Concrete\Core\Support\Facade\Url::getFacadeAccessor();
        }
        /**
         * Resolve a URL from data.
         *
         * Working core examples for example.com:
         * \Url::to('/some/path', 'some_action', $some_variable = 2)
         *     http://example.com/some/path/some_action/2/
         *
         * \Url::to($page_object = \Page::getByPath('blog'), 'action')
         *     http://example.com/blog/action/
         *
         * @return \League\URL\URLInterface
         */
        public static function to()
        {
            return Concrete\Core\Support\Facade\Url::to();
        }
        /**
         * This method is only here as a legacy decorator, use url::to.
         *
         * @return \League\URL\URLInterface
         *
         * @deprecated
         */
        public static function route($data)
        {
            return Concrete\Core\Support\Facade\Url::route($data);
        }
        /**
         * This method is only here as a legacy decorator, use `\URL::to($page)`.
         *
         * @return \League\URL\URLInterface
         *
         * @deprecated
         */
        public static function page()
        {
            return Concrete\Core\Support\Facade\Url::page();
        }
        /**
         * Resolve the facade root instance from the container.
         *
         * @param  string $name
         *
         * @return mixed
         */
        protected static function resolveFacadeInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::resolveFacadeInstance($name);
        }
        /**
         * Clear a resolved facade instance.
         *
         * @param  string  $name
         */
        public static function clearResolvedInstance($name)
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstance($name);
        }
        /**
         * Clear all of the resolved instances.
         */
        public static function clearResolvedInstances()
        {
            return Concrete\Core\Support\Facade\Facade::clearResolvedInstances();
        }
        /**
         * Get the application instance behind the facade.
         *
         * @return \Concrete\Core\Application\Application
         */
        public static function getFacadeApplication()
        {
            return Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        }
        /**
         * Set the application instance.
         *
         * @param  \Concrete\Core\Application\Application $app
         */
        public static function setFacadeApplication($app)
        {
            return Concrete\Core\Support\Facade\Facade::setFacadeApplication($app);
        }
    }
}

namespace Concrete\Core\Foundation
{
    class Object extends \Concrete\Core\Foundation\ConcreteObject
    {
    }
}
