<?php

namespace Doctrine\ORM\Mapping;

use Doctrine\Common\Persistence\Mapping\ReflectionService;
use Doctrine\DBAL\Types\Type;

interface PropertyMetadata
{
    /**
     * @return ClassMetadata
     */
    public function getDeclaringClass();

    /**
     * @param object $object
     * @param mixed  $value
     */
    public function setValue($object, $value);

    /**
     * @param object $object
     *
     * @return mixed
     */
    public function getValue($object);

    /**
     * @return string
     */
    public function getFieldName();

    /**
     * @return Type
     */
    public function getType();

    /**
     * @return string
     */
    public function getTypeName();

    /**
     * @param string $tableName
     */
    public function setTableName($tableName);

    /**
     * @return string
     */
    public function getTableName();

    /**
     * @return boolean
     */
    public function isInherited();

    /**
     * @return boolean
     */
    public function isPrimaryKey();

    /**
     * @return boolean
     */
    public function isAssociation();

    /**
     * @return boolean
     */
    public function isField();

    /**
     * @param ReflectionService $reflectionService
     */
    public function wakeupReflection(ReflectionService $reflectionService);
}