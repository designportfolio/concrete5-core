<?php

namespace PHPSTORM_META;

die('Access Denied.');

// $app->build(SomeClass::class)
override(\Illuminate\Contracts\Container\Container::build(0), map([
  '' => '@',
]));

// $app->make('something') or $app->make(SomeClass::class)
override(\Illuminate\Contracts\Container\Container::make(0), map([
  '' => '@',
  'Concrete\Core\Captcha\CaptchaInterface' => \Concrete\Core\Captcha\SecurimageController::class,
  'Concrete\Core\Captcha\CaptchaWithPictureInterface' => \Concrete\Core\Captcha\SecurimageController::class,
  'Concrete\Core\Database\EntityManagerConfigFactoryInterface' => \Concrete\Core\Database\EntityManagerConfigFactory::class,
  'Concrete\Core\Database\EntityManagerFactoryInterface' => \Concrete\Core\Database\EntityManagerFactory::class,
  'Concrete\Core\Editor\EditorInterface' => \Concrete\Core\Editor\CkeditorEditor::class,
  'Concrete\Core\Express\Entry\Formatter\EntryFormatterInterface' => \Concrete\Core\Express\Entry\Formatter\LabelFormatter::class,
  'Concrete\Core\Express\Formatter\FormatterInterface' => \Concrete\Core\Express\Formatter\LabelFormatter::class,
  'Concrete\Core\File\StorageLocation\StorageLocationInterface' => \Concrete\Core\Entity\File\StorageLocation\StorageLocation::class,
  'Concrete\Core\Http\DispatcherInterface' => \Concrete\Core\Http\DefaultDispatcher::class,
  'Concrete\Core\Http\Middleware\StackInterface' => \Concrete\Core\Http\Middleware\MiddlewareStack::class,
  'Concrete\Core\Http\ResponseFactoryInterface' => \Concrete\Core\Http\ResponseFactory::class,
  'Concrete\Core\Http\ServerInterface' => \Concrete\Core\Http\DefaultServer::class,
  'Concrete\Core\Localization\Translation\Local\FactoryInterface' => \Concrete\Core\Localization\Translation\Local\Factory::class,
  'Concrete\Core\Localization\Translation\Remote\ProviderInterface' => \Concrete\Core\Localization\Translation\Remote\CommunityStoreTranslationProvider::class,
  'Concrete\Core\Localization\Translator\TranslatorAdapterFactoryInterface' => \Concrete\Core\Localization\Translator\Adapter\Core\TranslatorAdapterFactory::class,
  'Concrete\Core\Routing\RouteActionFactoryInterface' => \Concrete\Core\Routing\RouteActionFactory::class,
  'Concrete\Core\Routing\RouterInterface' => \Concrete\Core\Routing\Router::class,
  'Concrete\Core\Search\Index\IndexManagerInterface' => \Concrete\Core\Search\Index\DefaultManager::class,
  'Concrete\Core\Service\Manager\ManagerInterface' => \Concrete\Core\Service\Manager\ServiceManager::class,
  'Concrete\Core\Session\SessionFactoryInterface' => \Concrete\Core\Session\SessionFactory::class,
  'Concrete\Core\Session\SessionValidatorInterface' => \Concrete\Core\Session\SessionValidator::class,
  'Concrete\Core\Site\Resolver\DriverInterface' => \Concrete\Core\Site\Resolver\StandardDriver::class,
  'Concrete\Core\Statistics\UsageTracker\TrackerManagerInterface' => \Concrete\Core\Statistics\UsageTracker\AggregateTracker::class,
  'Concrete\Core\System\Mutex\MutexInterface' => \Concrete\Core\System\Mutex\SemaphoreMutex::class,
  'Concrete\Core\Url\Resolver\Manager\ResolverManagerInterface' => \Concrete\Core\Url\Resolver\Manager\ResolverManager::class,
  'Concrete\Core\User\Avatar\AvatarServiceInterface' => \Concrete\Core\User\Avatar\AvatarService::class,
  'Concrete\Core\User\RegistrationServiceInterface' => \Concrete\Core\User\RegistrationService::class,
  'Concrete\Core\User\StatusServiceInterface' => \Concrete\Core\User\StatusService::class,
  'Concrete\Core\Validator\ValidatorForSubjectInterface' => \Concrete\Core\Validator\ValidatorForSubjectManager::class,
  'Concrete\Core\Validator\ValidatorManagerInterface' => \Concrete\Core\Validator\ValidatorManager::class,
  'Doctrine\DBAL\Connection' => \Concrete\Core\Database\Connection\Connection::class,
  'Doctrine\ORM\EntityManagerInterface' => \Doctrine\ORM\EntityManager::class,
  'Illuminate\Config\Repository' => \Concrete\Core\Config\Repository\Repository::class,
  'Illuminate\Container\Container' => \Concrete\Core\Application\Application::class,
  'Imagine\Image\ImagineInterface' => \Imagine\Gd\Imagine::class,
  'Psr\Log\LoggerInterface' => \Monolog\Logger::class,
  'Symfony\Component\EventDispatcher\EventDispatcherInterface' => \Symfony\Component\EventDispatcher\EventDispatcher::class,
  'Zend\Mail\Transport\TransportInterface' => \Zend\Mail\Transport\Sendmail::class,
  'app' => \Concrete\Core\Application\Application::class,
  'cache' => \Concrete\Core\Cache\Level\ObjectCache::class,
  'cache/expensive' => \Concrete\Core\Cache\Level\ExpensiveCache::class,
  'cache/overrides' => \Concrete\Core\Cache\Level\OverridesCache::class,
  'cache/page' => \Concrete\Core\Cache\Page\FilePageCache::class,
  'cache/request' => \Concrete\Core\Cache\Level\RequestCache::class,
  'calendar/event/formatter/date' => \Concrete\Core\Calendar\Event\Formatter\DateFormatter::class,
  'calendar/event/formatter/link' => \Concrete\Core\Calendar\Event\Formatter\LinkFormatter::class,
  'calendar/event/occurrence/factory' => \Concrete\Core\Calendar\Event\EventOccurrenceFactory::class,
  'captcha' => \Concrete\Core\Captcha\SecurimageController::class,
  'config' => \Concrete\Core\Config\Repository\Repository::class,
  'config/database' => \Concrete\Core\Config\Repository\Repository::class,
  'console' => \Concrete\Core\Console\Application::class,
  'cookie' => \Concrete\Core\Cookie\CookieJar::class,
  'database' => \Concrete\Core\Database\DatabaseManager::class,
  'database/connection' => \Concrete\Core\Database\Connection\Connection::class,
  'database/orm' => \Concrete\Core\Database\DatabaseManagerORM::class,
  'date' => \Concrete\Core\Localization\Service\Date::class,
  'device/manager' => \Concrete\Core\Device\DeviceManager::class,
  'director' => \Symfony\Component\EventDispatcher\EventDispatcher::class,
  'editor' => \Concrete\Core\Editor\CkeditorEditor::class,
  'editor/image' => \Concrete\Core\ImageEditor\ImageEditor::class,
  'editor/image/core' => \Concrete\Core\ImageEditor\ImageEditor::class,
  'editor/image/extension/factory' => \Concrete\Core\ImageEditor\ExtensionFactory::class,
  'element' => \Concrete\Core\Filesystem\ElementManager::class,
  'environment' => \Concrete\Core\Foundation\Environment::class,
  'error' => \Concrete\Core\Error\ErrorList\ErrorList::class,
  'express' => \Concrete\Core\Express\ObjectManager::class,
  'express/builder/association' => \Concrete\Core\Express\ObjectAssociationBuilder::class,
  'express/control/type/manager' => \Concrete\Core\Express\Form\Control\Type\Manager::class,
  'form/express/entry_selector' => \Concrete\Core\Form\Service\Widget\ExpressEntrySelector::class,
  'help' => \Concrete\Core\Application\Service\UserInterface\Help::class,
  'help/block_type' => \Concrete\Core\Application\Service\UserInterface\Help\BlockTypeManager::class,
  'help/core' => \Concrete\Core\Application\Service\UserInterface\Help\CoreManager::class,
  'help/dashboard' => \Concrete\Core\Application\Service\UserInterface\Help\DashboardManager::class,
  'help/panel' => \Concrete\Core\Application\Service\UserInterface\Help\PanelManager::class,
  'helper/ajax' => \Concrete\Core\Http\Service\Ajax::class,
  'helper/arrays' => \Concrete\Core\Utility\Service\Arrays::class,
  'helper/concrete/asset_library' => \Concrete\Core\Application\Service\FileManager::class,
  'helper/concrete/avatar' => \Concrete\Core\Legacy\Avatar::class,
  'helper/concrete/composer' => \Concrete\Core\Application\Service\Composer::class,
  'helper/concrete/dashboard' => \Concrete\Core\Application\Service\Dashboard::class,
  'helper/concrete/dashboard/sitemap' => \Concrete\Core\Application\Service\Dashboard\Sitemap::class,
  'helper/concrete/file' => \Concrete\Core\File\Service\Application::class,
  'helper/concrete/file_manager' => \Concrete\Core\Application\Service\FileManager::class,
  'helper/concrete/ui' => \Concrete\Core\Application\Service\UserInterface::class,
  'helper/concrete/ui/help' => \Concrete\Core\Application\Service\UserInterface\Help::class,
  'helper/concrete/ui/menu' => \Concrete\Core\Application\Service\UserInterface\Menu::class,
  'helper/concrete/urls' => \Concrete\Core\Application\Service\Urls::class,
  'helper/concrete/user' => \Concrete\Core\Application\Service\User::class,
  'helper/concrete/validation' => \Concrete\Core\Application\Service\Validation::class,
  'helper/date' => \Concrete\Core\Localization\Service\Date::class,
  'helper/encryption' => \Concrete\Core\Encryption\EncryptionService::class,
  'helper/feed' => \Concrete\Core\Feed\FeedService::class,
  'helper/file' => \Concrete\Core\File\Service\File::class,
  'helper/form' => \Concrete\Core\Form\Service\Form::class,
  'helper/form/attribute' => \Concrete\Core\Form\Service\Widget\Attribute::class,
  'helper/form/color' => \Concrete\Core\Form\Service\Widget\Color::class,
  'helper/form/date_time' => \Concrete\Core\Form\Service\Widget\DateTime::class,
  'helper/form/font' => \Concrete\Core\Form\Service\Widget\Typography::class,
  'helper/form/page_selector' => \Concrete\Core\Form\Service\Widget\PageSelector::class,
  'helper/form/rating' => \Concrete\Core\Form\Service\Widget\Rating::class,
  'helper/form/typography' => \Concrete\Core\Form\Service\Widget\Typography::class,
  'helper/form/user_selector' => \Concrete\Core\Form\Service\Widget\UserSelector::class,
  'helper/html' => \Concrete\Core\Html\Service\Html::class,
  'helper/image' => \Concrete\Core\File\Image\BasicThumbnailer::class,
  'helper/json' => \Concrete\Core\Http\Service\Json::class,
  'helper/lightbox' => \Concrete\Core\Html\Service\Lightbox::class,
  'helper/lists/countries' => \Concrete\Core\Localization\Service\CountryList::class,
  'helper/lists/states_provinces' => \Concrete\Core\Localization\Service\StatesProvincesList::class,
  'helper/localization/countries' => \Concrete\Core\Localization\Service\CountryList::class,
  'helper/localization/states_provinces' => \Concrete\Core\Localization\Service\StatesProvincesList::class,
  'helper/mail' => \Concrete\Core\Mail\Service::class,
  'helper/mime' => \Concrete\Core\File\Service\Mime::class,
  'helper/navigation' => \Concrete\Core\Html\Service\Navigation::class,
  'helper/number' => \Concrete\Core\Utility\Service\Number::class,
  'helper/pagination' => \Concrete\Core\Legacy\Pagination::class,
  'helper/rating' => \Concrete\Attribute\Rating\Service::class,
  'helper/security' => \Concrete\Core\Validation\SanitizeService::class,
  'helper/seo' => \Concrete\Core\Html\Service\Seo::class,
  'helper/text' => \Concrete\Core\Utility\Service\Text::class,
  'helper/url' => \Concrete\Core\Utility\Service\Url::class,
  'helper/validation/antispam' => \Concrete\Core\Antispam\Service::class,
  'helper/validation/banned_words' => \Concrete\Core\Validation\BannedWord\Service::class,
  'helper/validation/captcha' => \Concrete\Core\Captcha\SecurimageController::class,
  'helper/validation/error' => \Concrete\Core\Error\ErrorList\ErrorList::class,
  'helper/validation/file' => \Concrete\Core\File\ValidationService::class,
  'helper/validation/form' => \Concrete\Core\Form\Service\Validation::class,
  'helper/validation/identifier' => \Concrete\Core\Utility\Service\Identifier::class,
  'helper/validation/ip' => \Concrete\Core\Permission\IPService::class,
  'helper/validation/numbers' => \Concrete\Core\Utility\Service\Validation\Numbers::class,
  'helper/validation/strings' => \Concrete\Core\Utility\Service\Validation\Strings::class,
  'helper/validation/token' => \Concrete\Core\Validation\CSRF\Token::class,
  'helper/xml' => \Concrete\Core\Utility\Service\Xml::class,
  'helper/zip' => \Concrete\Core\File\Service\Zip::class,
  'html/image' => \Concrete\Core\Html\Image::class,
  'http/client' => \Concrete\Core\Http\Client\Client::class,
  'http/client/curl' => \Concrete\Core\Http\Client\Client::class,
  'http/client/socket' => \Concrete\Core\Http\Client\Client::class,
  'image/gd' => \Imagine\Gd\Imagine::class,
  'image/thumbnailer' => \Concrete\Core\File\Image\BasicThumbnailer::class,
  'import/item/manager' => \Concrete\Core\Backup\ContentImporter\Importer\Manager::class,
  'import/value_inspector' => \Concrete\Core\Backup\ContentImporter\ValueInspector\ValueInspector::class,
  'import/value_inspector/core' => \Concrete\Core\Backup\ContentImporter\ValueInspector\ValueInspector::class,
  'ip' => \Concrete\Core\Permission\IPService::class,
  'lists/countries' => \Concrete\Core\Localization\Service\CountryList::class,
  'lists/states_provinces' => \Concrete\Core\Localization\Service\StatesProvincesList::class,
  'localization/countries' => \Concrete\Core\Localization\Service\CountryList::class,
  'localization/languages' => \Concrete\Core\Localization\Service\LanguageList::class,
  'localization/states_provinces' => \Concrete\Core\Localization\Service\StatesProvincesList::class,
  'log' => \Monolog\Logger::class,
  'log/application' => \Monolog\Logger::class,
  'log/exceptions' => \Monolog\Logger::class,
  'log/factory' => \Concrete\Core\Logging\LoggerFactory::class,
  'mail' => \Concrete\Core\Mail\Service::class,
  'manager/area_layout_preset_provider' => \Concrete\Core\Area\Layout\Preset\Provider\Manager::class,
  'manager/attribute/category' => \Concrete\Core\Attribute\Category\Manager::class,
  'manager/grid_framework' => \Concrete\Core\Page\Theme\GridFramework\Manager::class,
  'manager/notification/subscriptions' => \Concrete\Core\Notification\Subscription\Manager::class,
  'manager/notification/types' => \Concrete\Core\Notification\Type\Manager::class,
  'manager/page_type/saver' => \Concrete\Core\Page\Type\Saver\Manager::class,
  'manager/page_type/validator' => \Concrete\Core\Page\Type\Validator\Manager::class,
  'manager/search_field/express' => \Concrete\Core\Express\Search\Field\Manager::class,
  'manager/search_field/file' => \Concrete\Core\File\Search\Field\Manager::class,
  'manager/search_field/file_folder' => \Concrete\Core\File\Search\Field\FileFolderManager::class,
  'manager/search_field/page' => \Concrete\Core\Page\Search\Field\Manager::class,
  'manager/search_field/user' => \Concrete\Core\User\Search\Field\Manager::class,
  'manager/view/pagination' => \Concrete\Core\Search\Pagination\View\Manager::class,
  'manager/view/pagination/pager' => \Concrete\Core\Search\Pagination\View\PagerManager::class,
  'multilingual/detector' => \Concrete\Core\Multilingual\Service\Detector::class,
  'multilingual/extractor' => \Concrete\Core\Multilingual\Service\Extractor::class,
  'multilingual/interface/flag' => \Concrete\Core\Multilingual\Service\UserInterface\Flag::class,
  'oauth/factory/extractor' => \OAuth\UserData\ExtractorFactory::class,
  'oauth/factory/service' => \OAuth\ServiceFactory::class,
  'orm/cache' => \Concrete\Core\Cache\Adapter\DoctrineCacheDriver::class,
  'orm/cachedAnnotationReader' => \Doctrine\Common\Annotations\CachedReader::class,
  'orm/cachedSimpleAnnotationReader' => \Doctrine\Common\Annotations\CachedReader::class,
  'router' => \Concrete\Core\Routing\Router::class,
  'session' => \Symfony\Component\HttpFoundation\Session\Session::class,
  'site' => \Concrete\Core\Site\Service::class,
  'site/type' => \Concrete\Core\Site\Type\Service::class,
  'statistics/tracker' => \Concrete\Core\Statistics\UsageTracker\AggregateTracker::class,
  'token' => \Concrete\Core\Validation\CSRF\Token::class,
  'url/canonical' => \Concrete\Core\Url\UrlImmutable::class,
  'url/canonical/resolver' => \Concrete\Core\Url\Resolver\CanonicalUrlResolver::class,
  'url/manager' => \Concrete\Core\Url\Resolver\Manager\ResolverManager::class,
  'url/resolver/page' => \Concrete\Core\Url\Resolver\PageUrlResolver::class,
  'url/resolver/path' => \Concrete\Core\Url\Resolver\PathUrlResolver::class,
  'url/resolver/route' => \Concrete\Core\Url\Resolver\RouterUrlResolver::class,
  'user/avatar' => \Concrete\Core\User\Avatar\AvatarService::class,
  'user/registration' => \Concrete\Core\User\RegistrationService::class,
  'user/status' => \Concrete\Core\User\StatusService::class,
  'validator/password' => \Concrete\Core\Validator\ValidatorForSubjectManager::class,
  'validator/user/email' => \Concrete\Core\Validator\ValidatorForSubjectManager::class,
  'validator/user/name' => \Concrete\Core\Validator\ValidatorForSubjectManager::class,
]));

// $app[SomeClass::class]
override(new \Illuminate\Contracts\Container\Container, map([
  '' => '@',
  'Concrete\Core\Captcha\CaptchaInterface' => \Concrete\Core\Captcha\SecurimageController::class,
  'Concrete\Core\Captcha\CaptchaWithPictureInterface' => \Concrete\Core\Captcha\SecurimageController::class,
  'Concrete\Core\Database\EntityManagerConfigFactoryInterface' => \Concrete\Core\Database\EntityManagerConfigFactory::class,
  'Concrete\Core\Database\EntityManagerFactoryInterface' => \Concrete\Core\Database\EntityManagerFactory::class,
  'Concrete\Core\Editor\EditorInterface' => \Concrete\Core\Editor\CkeditorEditor::class,
  'Concrete\Core\Express\Entry\Formatter\EntryFormatterInterface' => \Concrete\Core\Express\Entry\Formatter\LabelFormatter::class,
  'Concrete\Core\Express\Formatter\FormatterInterface' => \Concrete\Core\Express\Formatter\LabelFormatter::class,
  'Concrete\Core\File\StorageLocation\StorageLocationInterface' => \Concrete\Core\Entity\File\StorageLocation\StorageLocation::class,
  'Concrete\Core\Http\DispatcherInterface' => \Concrete\Core\Http\DefaultDispatcher::class,
  'Concrete\Core\Http\Middleware\StackInterface' => \Concrete\Core\Http\Middleware\MiddlewareStack::class,
  'Concrete\Core\Http\ResponseFactoryInterface' => \Concrete\Core\Http\ResponseFactory::class,
  'Concrete\Core\Http\ServerInterface' => \Concrete\Core\Http\DefaultServer::class,
  'Concrete\Core\Localization\Translation\Local\FactoryInterface' => \Concrete\Core\Localization\Translation\Local\Factory::class,
  'Concrete\Core\Localization\Translation\Remote\ProviderInterface' => \Concrete\Core\Localization\Translation\Remote\CommunityStoreTranslationProvider::class,
  'Concrete\Core\Localization\Translator\TranslatorAdapterFactoryInterface' => \Concrete\Core\Localization\Translator\Adapter\Core\TranslatorAdapterFactory::class,
  'Concrete\Core\Routing\RouteActionFactoryInterface' => \Concrete\Core\Routing\RouteActionFactory::class,
  'Concrete\Core\Routing\RouterInterface' => \Concrete\Core\Routing\Router::class,
  'Concrete\Core\Search\Index\IndexManagerInterface' => \Concrete\Core\Search\Index\DefaultManager::class,
  'Concrete\Core\Service\Manager\ManagerInterface' => \Concrete\Core\Service\Manager\ServiceManager::class,
  'Concrete\Core\Session\SessionFactoryInterface' => \Concrete\Core\Session\SessionFactory::class,
  'Concrete\Core\Session\SessionValidatorInterface' => \Concrete\Core\Session\SessionValidator::class,
  'Concrete\Core\Site\Resolver\DriverInterface' => \Concrete\Core\Site\Resolver\StandardDriver::class,
  'Concrete\Core\Statistics\UsageTracker\TrackerManagerInterface' => \Concrete\Core\Statistics\UsageTracker\AggregateTracker::class,
  'Concrete\Core\System\Mutex\MutexInterface' => \Concrete\Core\System\Mutex\SemaphoreMutex::class,
  'Concrete\Core\Url\Resolver\Manager\ResolverManagerInterface' => \Concrete\Core\Url\Resolver\Manager\ResolverManager::class,
  'Concrete\Core\User\Avatar\AvatarServiceInterface' => \Concrete\Core\User\Avatar\AvatarService::class,
  'Concrete\Core\User\RegistrationServiceInterface' => \Concrete\Core\User\RegistrationService::class,
  'Concrete\Core\User\StatusServiceInterface' => \Concrete\Core\User\StatusService::class,
  'Concrete\Core\Validator\ValidatorForSubjectInterface' => \Concrete\Core\Validator\ValidatorForSubjectManager::class,
  'Concrete\Core\Validator\ValidatorManagerInterface' => \Concrete\Core\Validator\ValidatorManager::class,
  'Doctrine\DBAL\Connection' => \Concrete\Core\Database\Connection\Connection::class,
  'Doctrine\ORM\EntityManagerInterface' => \Doctrine\ORM\EntityManager::class,
  'Illuminate\Config\Repository' => \Concrete\Core\Config\Repository\Repository::class,
  'Illuminate\Container\Container' => \Concrete\Core\Application\Application::class,
  'Imagine\Image\ImagineInterface' => \Imagine\Gd\Imagine::class,
  'Psr\Log\LoggerInterface' => \Monolog\Logger::class,
  'Symfony\Component\EventDispatcher\EventDispatcherInterface' => \Symfony\Component\EventDispatcher\EventDispatcher::class,
  'Zend\Mail\Transport\TransportInterface' => \Zend\Mail\Transport\Sendmail::class,
  'app' => \Concrete\Core\Application\Application::class,
  'cache' => \Concrete\Core\Cache\Level\ObjectCache::class,
  'cache/expensive' => \Concrete\Core\Cache\Level\ExpensiveCache::class,
  'cache/overrides' => \Concrete\Core\Cache\Level\OverridesCache::class,
  'cache/page' => \Concrete\Core\Cache\Page\FilePageCache::class,
  'cache/request' => \Concrete\Core\Cache\Level\RequestCache::class,
  'calendar/event/formatter/date' => \Concrete\Core\Calendar\Event\Formatter\DateFormatter::class,
  'calendar/event/formatter/link' => \Concrete\Core\Calendar\Event\Formatter\LinkFormatter::class,
  'calendar/event/occurrence/factory' => \Concrete\Core\Calendar\Event\EventOccurrenceFactory::class,
  'captcha' => \Concrete\Core\Captcha\SecurimageController::class,
  'config' => \Concrete\Core\Config\Repository\Repository::class,
  'config/database' => \Concrete\Core\Config\Repository\Repository::class,
  'console' => \Concrete\Core\Console\Application::class,
  'cookie' => \Concrete\Core\Cookie\CookieJar::class,
  'database' => \Concrete\Core\Database\DatabaseManager::class,
  'database/connection' => \Concrete\Core\Database\Connection\Connection::class,
  'database/orm' => \Concrete\Core\Database\DatabaseManagerORM::class,
  'date' => \Concrete\Core\Localization\Service\Date::class,
  'device/manager' => \Concrete\Core\Device\DeviceManager::class,
  'director' => \Symfony\Component\EventDispatcher\EventDispatcher::class,
  'editor' => \Concrete\Core\Editor\CkeditorEditor::class,
  'editor/image' => \Concrete\Core\ImageEditor\ImageEditor::class,
  'editor/image/core' => \Concrete\Core\ImageEditor\ImageEditor::class,
  'editor/image/extension/factory' => \Concrete\Core\ImageEditor\ExtensionFactory::class,
  'element' => \Concrete\Core\Filesystem\ElementManager::class,
  'environment' => \Concrete\Core\Foundation\Environment::class,
  'error' => \Concrete\Core\Error\ErrorList\ErrorList::class,
  'express' => \Concrete\Core\Express\ObjectManager::class,
  'express/builder/association' => \Concrete\Core\Express\ObjectAssociationBuilder::class,
  'express/control/type/manager' => \Concrete\Core\Express\Form\Control\Type\Manager::class,
  'form/express/entry_selector' => \Concrete\Core\Form\Service\Widget\ExpressEntrySelector::class,
  'help' => \Concrete\Core\Application\Service\UserInterface\Help::class,
  'help/block_type' => \Concrete\Core\Application\Service\UserInterface\Help\BlockTypeManager::class,
  'help/core' => \Concrete\Core\Application\Service\UserInterface\Help\CoreManager::class,
  'help/dashboard' => \Concrete\Core\Application\Service\UserInterface\Help\DashboardManager::class,
  'help/panel' => \Concrete\Core\Application\Service\UserInterface\Help\PanelManager::class,
  'helper/ajax' => \Concrete\Core\Http\Service\Ajax::class,
  'helper/arrays' => \Concrete\Core\Utility\Service\Arrays::class,
  'helper/concrete/asset_library' => \Concrete\Core\Application\Service\FileManager::class,
  'helper/concrete/avatar' => \Concrete\Core\Legacy\Avatar::class,
  'helper/concrete/composer' => \Concrete\Core\Application\Service\Composer::class,
  'helper/concrete/dashboard' => \Concrete\Core\Application\Service\Dashboard::class,
  'helper/concrete/dashboard/sitemap' => \Concrete\Core\Application\Service\Dashboard\Sitemap::class,
  'helper/concrete/file' => \Concrete\Core\File\Service\Application::class,
  'helper/concrete/file_manager' => \Concrete\Core\Application\Service\FileManager::class,
  'helper/concrete/ui' => \Concrete\Core\Application\Service\UserInterface::class,
  'helper/concrete/ui/help' => \Concrete\Core\Application\Service\UserInterface\Help::class,
  'helper/concrete/ui/menu' => \Concrete\Core\Application\Service\UserInterface\Menu::class,
  'helper/concrete/urls' => \Concrete\Core\Application\Service\Urls::class,
  'helper/concrete/user' => \Concrete\Core\Application\Service\User::class,
  'helper/concrete/validation' => \Concrete\Core\Application\Service\Validation::class,
  'helper/date' => \Concrete\Core\Localization\Service\Date::class,
  'helper/encryption' => \Concrete\Core\Encryption\EncryptionService::class,
  'helper/feed' => \Concrete\Core\Feed\FeedService::class,
  'helper/file' => \Concrete\Core\File\Service\File::class,
  'helper/form' => \Concrete\Core\Form\Service\Form::class,
  'helper/form/attribute' => \Concrete\Core\Form\Service\Widget\Attribute::class,
  'helper/form/color' => \Concrete\Core\Form\Service\Widget\Color::class,
  'helper/form/date_time' => \Concrete\Core\Form\Service\Widget\DateTime::class,
  'helper/form/font' => \Concrete\Core\Form\Service\Widget\Typography::class,
  'helper/form/page_selector' => \Concrete\Core\Form\Service\Widget\PageSelector::class,
  'helper/form/rating' => \Concrete\Core\Form\Service\Widget\Rating::class,
  'helper/form/typography' => \Concrete\Core\Form\Service\Widget\Typography::class,
  'helper/form/user_selector' => \Concrete\Core\Form\Service\Widget\UserSelector::class,
  'helper/html' => \Concrete\Core\Html\Service\Html::class,
  'helper/image' => \Concrete\Core\File\Image\BasicThumbnailer::class,
  'helper/json' => \Concrete\Core\Http\Service\Json::class,
  'helper/lightbox' => \Concrete\Core\Html\Service\Lightbox::class,
  'helper/lists/countries' => \Concrete\Core\Localization\Service\CountryList::class,
  'helper/lists/states_provinces' => \Concrete\Core\Localization\Service\StatesProvincesList::class,
  'helper/localization/countries' => \Concrete\Core\Localization\Service\CountryList::class,
  'helper/localization/states_provinces' => \Concrete\Core\Localization\Service\StatesProvincesList::class,
  'helper/mail' => \Concrete\Core\Mail\Service::class,
  'helper/mime' => \Concrete\Core\File\Service\Mime::class,
  'helper/navigation' => \Concrete\Core\Html\Service\Navigation::class,
  'helper/number' => \Concrete\Core\Utility\Service\Number::class,
  'helper/pagination' => \Concrete\Core\Legacy\Pagination::class,
  'helper/rating' => \Concrete\Attribute\Rating\Service::class,
  'helper/security' => \Concrete\Core\Validation\SanitizeService::class,
  'helper/seo' => \Concrete\Core\Html\Service\Seo::class,
  'helper/text' => \Concrete\Core\Utility\Service\Text::class,
  'helper/url' => \Concrete\Core\Utility\Service\Url::class,
  'helper/validation/antispam' => \Concrete\Core\Antispam\Service::class,
  'helper/validation/banned_words' => \Concrete\Core\Validation\BannedWord\Service::class,
  'helper/validation/captcha' => \Concrete\Core\Captcha\SecurimageController::class,
  'helper/validation/error' => \Concrete\Core\Error\ErrorList\ErrorList::class,
  'helper/validation/file' => \Concrete\Core\File\ValidationService::class,
  'helper/validation/form' => \Concrete\Core\Form\Service\Validation::class,
  'helper/validation/identifier' => \Concrete\Core\Utility\Service\Identifier::class,
  'helper/validation/ip' => \Concrete\Core\Permission\IPService::class,
  'helper/validation/numbers' => \Concrete\Core\Utility\Service\Validation\Numbers::class,
  'helper/validation/strings' => \Concrete\Core\Utility\Service\Validation\Strings::class,
  'helper/validation/token' => \Concrete\Core\Validation\CSRF\Token::class,
  'helper/xml' => \Concrete\Core\Utility\Service\Xml::class,
  'helper/zip' => \Concrete\Core\File\Service\Zip::class,
  'html/image' => \Concrete\Core\Html\Image::class,
  'http/client' => \Concrete\Core\Http\Client\Client::class,
  'http/client/curl' => \Concrete\Core\Http\Client\Client::class,
  'http/client/socket' => \Concrete\Core\Http\Client\Client::class,
  'image/gd' => \Imagine\Gd\Imagine::class,
  'image/thumbnailer' => \Concrete\Core\File\Image\BasicThumbnailer::class,
  'import/item/manager' => \Concrete\Core\Backup\ContentImporter\Importer\Manager::class,
  'import/value_inspector' => \Concrete\Core\Backup\ContentImporter\ValueInspector\ValueInspector::class,
  'import/value_inspector/core' => \Concrete\Core\Backup\ContentImporter\ValueInspector\ValueInspector::class,
  'ip' => \Concrete\Core\Permission\IPService::class,
  'lists/countries' => \Concrete\Core\Localization\Service\CountryList::class,
  'lists/states_provinces' => \Concrete\Core\Localization\Service\StatesProvincesList::class,
  'localization/countries' => \Concrete\Core\Localization\Service\CountryList::class,
  'localization/languages' => \Concrete\Core\Localization\Service\LanguageList::class,
  'localization/states_provinces' => \Concrete\Core\Localization\Service\StatesProvincesList::class,
  'log' => \Monolog\Logger::class,
  'log/application' => \Monolog\Logger::class,
  'log/exceptions' => \Monolog\Logger::class,
  'log/factory' => \Concrete\Core\Logging\LoggerFactory::class,
  'mail' => \Concrete\Core\Mail\Service::class,
  'manager/area_layout_preset_provider' => \Concrete\Core\Area\Layout\Preset\Provider\Manager::class,
  'manager/attribute/category' => \Concrete\Core\Attribute\Category\Manager::class,
  'manager/grid_framework' => \Concrete\Core\Page\Theme\GridFramework\Manager::class,
  'manager/notification/subscriptions' => \Concrete\Core\Notification\Subscription\Manager::class,
  'manager/notification/types' => \Concrete\Core\Notification\Type\Manager::class,
  'manager/page_type/saver' => \Concrete\Core\Page\Type\Saver\Manager::class,
  'manager/page_type/validator' => \Concrete\Core\Page\Type\Validator\Manager::class,
  'manager/search_field/express' => \Concrete\Core\Express\Search\Field\Manager::class,
  'manager/search_field/file' => \Concrete\Core\File\Search\Field\Manager::class,
  'manager/search_field/file_folder' => \Concrete\Core\File\Search\Field\FileFolderManager::class,
  'manager/search_field/page' => \Concrete\Core\Page\Search\Field\Manager::class,
  'manager/search_field/user' => \Concrete\Core\User\Search\Field\Manager::class,
  'manager/view/pagination' => \Concrete\Core\Search\Pagination\View\Manager::class,
  'manager/view/pagination/pager' => \Concrete\Core\Search\Pagination\View\PagerManager::class,
  'multilingual/detector' => \Concrete\Core\Multilingual\Service\Detector::class,
  'multilingual/extractor' => \Concrete\Core\Multilingual\Service\Extractor::class,
  'multilingual/interface/flag' => \Concrete\Core\Multilingual\Service\UserInterface\Flag::class,
  'oauth/factory/extractor' => \OAuth\UserData\ExtractorFactory::class,
  'oauth/factory/service' => \OAuth\ServiceFactory::class,
  'orm/cache' => \Concrete\Core\Cache\Adapter\DoctrineCacheDriver::class,
  'orm/cachedAnnotationReader' => \Doctrine\Common\Annotations\CachedReader::class,
  'orm/cachedSimpleAnnotationReader' => \Doctrine\Common\Annotations\CachedReader::class,
  'router' => \Concrete\Core\Routing\Router::class,
  'session' => \Symfony\Component\HttpFoundation\Session\Session::class,
  'site' => \Concrete\Core\Site\Service::class,
  'site/type' => \Concrete\Core\Site\Type\Service::class,
  'statistics/tracker' => \Concrete\Core\Statistics\UsageTracker\AggregateTracker::class,
  'token' => \Concrete\Core\Validation\CSRF\Token::class,
  'url/canonical' => \Concrete\Core\Url\UrlImmutable::class,
  'url/canonical/resolver' => \Concrete\Core\Url\Resolver\CanonicalUrlResolver::class,
  'url/manager' => \Concrete\Core\Url\Resolver\Manager\ResolverManager::class,
  'url/resolver/page' => \Concrete\Core\Url\Resolver\PageUrlResolver::class,
  'url/resolver/path' => \Concrete\Core\Url\Resolver\PathUrlResolver::class,
  'url/resolver/route' => \Concrete\Core\Url\Resolver\RouterUrlResolver::class,
  'user/avatar' => \Concrete\Core\User\Avatar\AvatarService::class,
  'user/registration' => \Concrete\Core\User\RegistrationService::class,
  'user/status' => \Concrete\Core\User\StatusService::class,
  'validator/password' => \Concrete\Core\Validator\ValidatorForSubjectManager::class,
  'validator/user/email' => \Concrete\Core\Validator\ValidatorForSubjectManager::class,
  'validator/user/name' => \Concrete\Core\Validator\ValidatorForSubjectManager::class,
]));

// $em->getRepository(EntityClass::class)
override(\Doctrine\ORM\EntityManagerInterface::getRepository(0), map([
  'Concrete\Core\Entity\Attribute\Key\UserKey' => \Concrete\Core\Entity\User\AttributeRepository::class,
  'Concrete\Core\Entity\Calendar\Calendar' => \Concrete\Core\Entity\Calendar\CalendarRepository::class,
  'Concrete\Core\Entity\Calendar\CalendarEvent' => \Concrete\Core\Entity\Calendar\CalendarEventRepository::class,
  'Concrete\Core\Entity\Express\Entity' => \Concrete\Core\Entity\Express\EntityRepository::class,
  'Concrete\Core\Entity\Express\Entry' => \Concrete\Core\Entity\Express\EntryRepository::class,
  'Concrete\Core\Entity\Notification\NotificationAlert' => \Concrete\Core\Entity\Notification\NotificationAlertRepository::class,
  'Concrete\Core\Entity\OAuth\AccessToken' => \Concrete\Core\Entity\OAuth\AccessTokenRepository::class,
  'Concrete\Core\Entity\OAuth\AuthCode' => \Concrete\Core\Entity\OAuth\AuthCodeRepository::class,
  'Concrete\Core\Entity\OAuth\Client' => \Concrete\Core\Entity\OAuth\ClientRepository::class,
  'Concrete\Core\Entity\OAuth\RefreshToken' => \Concrete\Core\Entity\OAuth\RefreshTokenRepository::class,
  'Concrete\Core\Entity\OAuth\Scope' => \Concrete\Core\Entity\OAuth\ScopeRepository::class,
  'Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRecord' => \Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRepository::class,
  'Concrete\Core\Entity\User\LoginAttempt' => \Concrete\Core\Entity\User\LoginAttemptRepository::class,
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\User\AttributeRepository::find(0), map([
  '' => 'Concrete\Core\Entity\Attribute\Key\UserKey|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\User\AttributeRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\Attribute\Key\UserKey|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\User\AttributeRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\Attribute\Key\UserKey[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\User\AttributeRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\Attribute\Key\UserKey[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\User\AttributeRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\Attribute\Key\UserKey[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Calendar\CalendarRepository::find(0), map([
  '' => 'Concrete\Core\Entity\Calendar\Calendar|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\Calendar\CalendarRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\Calendar\Calendar|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Calendar\CalendarRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\Calendar\Calendar[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Calendar\CalendarRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\Calendar\Calendar[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Calendar\CalendarRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\Calendar\Calendar[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Calendar\CalendarEventRepository::find(0), map([
  '' => 'Concrete\Core\Entity\Calendar\CalendarEvent|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\Calendar\CalendarEventRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\Calendar\CalendarEvent|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Calendar\CalendarEventRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\Calendar\CalendarEvent[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Calendar\CalendarEventRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\Calendar\CalendarEvent[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Calendar\CalendarEventRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\Calendar\CalendarEvent[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Express\EntityRepository::find(0), map([
  '' => 'Concrete\Core\Entity\Express\Entity|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\Express\EntityRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\Express\Entity|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Express\EntityRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\Express\Entity[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Express\EntityRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\Express\Entity[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Express\EntityRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\Express\Entity[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Express\EntryRepository::find(0), map([
  '' => 'Concrete\Core\Entity\Express\Entry|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\Express\EntryRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\Express\Entry|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Express\EntryRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\Express\Entry[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Express\EntryRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\Express\Entry[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Express\EntryRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\Express\Entry[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Notification\NotificationAlertRepository::find(0), map([
  '' => 'Concrete\Core\Entity\Notification\NotificationAlert|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\Notification\NotificationAlertRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\Notification\NotificationAlert|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Notification\NotificationAlertRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\Notification\NotificationAlert[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Notification\NotificationAlertRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\Notification\NotificationAlert[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Notification\NotificationAlertRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\Notification\NotificationAlert[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\AccessTokenRepository::find(0), map([
  '' => 'Concrete\Core\Entity\OAuth\AccessToken|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\OAuth\AccessTokenRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\AccessToken|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\AccessTokenRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\OAuth\AccessToken[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\AccessTokenRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\AccessToken[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\AccessTokenRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\OAuth\AccessToken[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\AuthCodeRepository::find(0), map([
  '' => 'Concrete\Core\Entity\OAuth\AuthCode|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\OAuth\AuthCodeRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\AuthCode|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\AuthCodeRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\OAuth\AuthCode[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\AuthCodeRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\AuthCode[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\AuthCodeRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\OAuth\AuthCode[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\ClientRepository::find(0), map([
  '' => 'Concrete\Core\Entity\OAuth\Client|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\OAuth\ClientRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\Client|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\ClientRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\OAuth\Client[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\ClientRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\Client[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\ClientRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\OAuth\Client[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\RefreshTokenRepository::find(0), map([
  '' => 'Concrete\Core\Entity\OAuth\RefreshToken|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\OAuth\RefreshTokenRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\RefreshToken|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\RefreshTokenRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\OAuth\RefreshToken[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\RefreshTokenRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\RefreshToken[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\RefreshTokenRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\OAuth\RefreshToken[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\ScopeRepository::find(0), map([
  '' => 'Concrete\Core\Entity\OAuth\Scope|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\OAuth\ScopeRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\Scope|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\ScopeRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\OAuth\Scope[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\ScopeRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\OAuth\Scope[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\OAuth\ScopeRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\OAuth\Scope[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRepository::find(0), map([
  '' => 'Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRecord|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRecord|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRecord[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRecord[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\Statistics\UsageTracker\FileUsageRecord[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\User\LoginAttemptRepository::find(0), map([
  '' => 'Concrete\Core\Entity\User\LoginAttempt|null',
]));

// $em->getRepository(EntityClass::class)->findOneBy()
override(\Concrete\Core\Entity\User\LoginAttemptRepository::findOneBy(0), map([
  '' => 'Concrete\Core\Entity\User\LoginAttempt|null',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\User\LoginAttemptRepository::findAll(0), map([
  '' => 'Concrete\Core\Entity\User\LoginAttempt[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\User\LoginAttemptRepository::findBy(0), map([
  '' => 'Concrete\Core\Entity\User\LoginAttempt[]',
]));

// $em->getRepository(EntityClass::class)->find()
override(\Concrete\Core\Entity\User\LoginAttemptRepository::matching(0), map([
  '' => 'Doctrine\Common\Collections\Collection|Concrete\Core\Entity\User\LoginAttempt[]',
]));

// $em->find(EntityClass::class, $id)
override(\Doctrine\ORM\EntityManagerInterface::find(0), map([
  '' => '@',
]));
