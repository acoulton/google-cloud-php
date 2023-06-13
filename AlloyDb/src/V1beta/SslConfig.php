<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace Google\Cloud\AlloyDb\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SSL configuration.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1beta.SslConfig</code>
 */
class SslConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. SSL mode. Specifies client-server SSL/TLS connection behavior.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1beta.SslConfig.SslMode ssl_mode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ssl_mode = 0;
    /**
     * Optional. Certificate Authority (CA) source. Only CA_SOURCE_MANAGED is
     * supported currently, and is the default value.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1beta.SslConfig.CaSource ca_source = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ca_source = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ssl_mode
     *           Optional. SSL mode. Specifies client-server SSL/TLS connection behavior.
     *     @type int $ca_source
     *           Optional. Certificate Authority (CA) source. Only CA_SOURCE_MANAGED is
     *           supported currently, and is the default value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. SSL mode. Specifies client-server SSL/TLS connection behavior.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1beta.SslConfig.SslMode ssl_mode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSslMode()
    {
        return $this->ssl_mode;
    }

    /**
     * Optional. SSL mode. Specifies client-server SSL/TLS connection behavior.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1beta.SslConfig.SslMode ssl_mode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSslMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1beta\SslConfig\SslMode::class);
        $this->ssl_mode = $var;

        return $this;
    }

    /**
     * Optional. Certificate Authority (CA) source. Only CA_SOURCE_MANAGED is
     * supported currently, and is the default value.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1beta.SslConfig.CaSource ca_source = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getCaSource()
    {
        return $this->ca_source;
    }

    /**
     * Optional. Certificate Authority (CA) source. Only CA_SOURCE_MANAGED is
     * supported currently, and is the default value.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1beta.SslConfig.CaSource ca_source = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setCaSource($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1beta\SslConfig\CaSource::class);
        $this->ca_source = $var;

        return $this;
    }

}

