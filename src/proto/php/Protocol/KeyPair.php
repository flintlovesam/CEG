<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.KeyPair</code>
 */
class KeyPair extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * Generated from protobuf field <code>string value = 2;</code>
     */
    private $value = '';
    /**
     * Generated from protobuf field <code>int64 version = 3;</code>
     */
    private $version = 0;

    public function __construct() {
        \GPBMetadata\Common::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 version = 3;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>int64 version = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

}

