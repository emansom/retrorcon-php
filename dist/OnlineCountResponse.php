<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rcon.proto

namespace Kepler\Rcon;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kepler.rcon.OnlineCountResponse</code>
 */
class OnlineCountResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 online_count = 1;</code>
     */
    private $online_count = 0;

    public function __construct() {
        \GPBMetadata\Rcon::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 online_count = 1;</code>
     * @return int
     */
    public function getOnlineCount()
    {
        return $this->online_count;
    }

    /**
     * Generated from protobuf field <code>uint32 online_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOnlineCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->online_count = $var;

        return $this;
    }

}
