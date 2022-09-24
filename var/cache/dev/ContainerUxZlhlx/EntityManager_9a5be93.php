<?php

namespace ContainerUxZlhlx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5599c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9a3a9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0bbb0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getConnection', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getMetadataFactory', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getExpressionBuilder', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'beginTransaction', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getCache', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'transactional', array('func' => $func), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'commit', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->commit();
    }

    public function rollback()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'rollback', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getClassMetadata', array('className' => $className), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'createQuery', array('dql' => $dql), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'createNamedQuery', array('name' => $name), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'createQueryBuilder', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'flush', array('entity' => $entity), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'clear', array('entityName' => $entityName), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->clear($entityName);
    }

    public function close()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'close', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->close();
    }

    public function persist($entity)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'persist', array('entity' => $entity), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'remove', array('entity' => $entity), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'refresh', array('entity' => $entity), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'detach', array('entity' => $entity), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'merge', array('entity' => $entity), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'contains', array('entity' => $entity), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getEventManager', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getConfiguration', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'isOpen', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getUnitOfWork', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getProxyFactory', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'initializeObject', array('obj' => $obj), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'getFilters', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'isFiltersStateClean', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'hasFilters', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return $this->valueHolder5599c->hasFilters();
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

        $instance->initializer9a3a9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5599c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5599c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5599c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, '__get', ['name' => $name], $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        if (isset(self::$publicProperties0bbb0[$name])) {
            return $this->valueHolder5599c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5599c;

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

        $targetObject = $this->valueHolder5599c;
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
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5599c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5599c;
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
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, '__isset', array('name' => $name), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5599c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5599c;
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
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, '__unset', array('name' => $name), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5599c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5599c;
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
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, '__clone', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        $this->valueHolder5599c = clone $this->valueHolder5599c;
    }

    public function __sleep()
    {
        $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, '__sleep', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;

        return array('valueHolder5599c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9a3a9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9a3a9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9a3a9 && ($this->initializer9a3a9->__invoke($valueHolder5599c, $this, 'initializeProxy', array(), $this->initializer9a3a9) || 1) && $this->valueHolder5599c = $valueHolder5599c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5599c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5599c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
