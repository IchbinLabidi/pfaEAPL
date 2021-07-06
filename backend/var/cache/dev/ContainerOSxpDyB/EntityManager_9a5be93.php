<?php

namespace ContainerOSxpDyB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder504b4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb474c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesab57e = [
        
    ];

    public function getConnection()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getConnection', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getMetadataFactory', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getExpressionBuilder', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'beginTransaction', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getCache', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'transactional', array('func' => $func), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->transactional($func);
    }

    public function commit()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'commit', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->commit();
    }

    public function rollback()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'rollback', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getClassMetadata', array('className' => $className), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'createQuery', array('dql' => $dql), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'createNamedQuery', array('name' => $name), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'createQueryBuilder', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'flush', array('entity' => $entity), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'clear', array('entityName' => $entityName), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->clear($entityName);
    }

    public function close()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'close', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->close();
    }

    public function persist($entity)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'persist', array('entity' => $entity), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'remove', array('entity' => $entity), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'refresh', array('entity' => $entity), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'detach', array('entity' => $entity), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'merge', array('entity' => $entity), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'contains', array('entity' => $entity), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getEventManager', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getConfiguration', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'isOpen', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getUnitOfWork', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getProxyFactory', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'initializeObject', array('obj' => $obj), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'getFilters', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'isFiltersStateClean', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'hasFilters', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return $this->valueHolder504b4->hasFilters();
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

        $instance->initializerb474c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder504b4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder504b4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder504b4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, '__get', ['name' => $name], $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        if (isset(self::$publicPropertiesab57e[$name])) {
            return $this->valueHolder504b4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder504b4;

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

        $targetObject = $this->valueHolder504b4;
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
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder504b4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder504b4;
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
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, '__isset', array('name' => $name), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder504b4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder504b4;
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
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, '__unset', array('name' => $name), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder504b4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder504b4;
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
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, '__clone', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        $this->valueHolder504b4 = clone $this->valueHolder504b4;
    }

    public function __sleep()
    {
        $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, '__sleep', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;

        return array('valueHolder504b4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb474c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb474c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb474c && ($this->initializerb474c->__invoke($valueHolder504b4, $this, 'initializeProxy', array(), $this->initializerb474c) || 1) && $this->valueHolder504b4 = $valueHolder504b4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder504b4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder504b4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
