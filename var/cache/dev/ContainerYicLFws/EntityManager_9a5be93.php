<?php

namespace ContainerYicLFws;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc7153 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer88733 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesec643 = [
        
    ];

    public function getConnection()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getConnection', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getMetadataFactory', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getExpressionBuilder', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'beginTransaction', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getCache', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getCache();
    }

    public function transactional($func)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'transactional', array('func' => $func), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'wrapInTransaction', array('func' => $func), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'commit', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->commit();
    }

    public function rollback()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'rollback', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getClassMetadata', array('className' => $className), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'createQuery', array('dql' => $dql), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'createNamedQuery', array('name' => $name), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'createQueryBuilder', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'flush', array('entity' => $entity), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'clear', array('entityName' => $entityName), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->clear($entityName);
    }

    public function close()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'close', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->close();
    }

    public function persist($entity)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'persist', array('entity' => $entity), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'remove', array('entity' => $entity), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'refresh', array('entity' => $entity), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'detach', array('entity' => $entity), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'merge', array('entity' => $entity), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getRepository', array('entityName' => $entityName), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'contains', array('entity' => $entity), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getEventManager', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getConfiguration', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'isOpen', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getUnitOfWork', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getProxyFactory', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'initializeObject', array('obj' => $obj), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'getFilters', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'isFiltersStateClean', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'hasFilters', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return $this->valueHolderc7153->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer88733 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc7153) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc7153 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc7153->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, '__get', ['name' => $name], $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        if (isset(self::$publicPropertiesec643[$name])) {
            return $this->valueHolderc7153->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7153;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc7153;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7153;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc7153;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, '__isset', array('name' => $name), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7153;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc7153;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, '__unset', array('name' => $name), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7153;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc7153;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, '__clone', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        $this->valueHolderc7153 = clone $this->valueHolderc7153;
    }

    public function __sleep()
    {
        $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, '__sleep', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;

        return array('valueHolderc7153');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer88733 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer88733;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer88733 && ($this->initializer88733->__invoke($valueHolderc7153, $this, 'initializeProxy', array(), $this->initializer88733) || 1) && $this->valueHolderc7153 = $valueHolderc7153;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc7153;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc7153;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
