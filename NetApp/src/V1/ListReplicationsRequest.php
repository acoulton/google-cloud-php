<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/replication.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListReplications lists replications.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.ListReplicationsRequest</code>
 */
class ListReplicationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The volume for which to retrieve replication information,
     * in the format
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value to use if there are additional
     * results to retrieve for this list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Sort results. Supported values are "name", "name desc" or "" (unsorted).
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     */
    protected $order_by = '';
    /**
     * List filter.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. The volume for which to retrieve replication information,
     *                       in the format
     *                       `projects/{project_id}/locations/{location}/volumes/{volume_id}`. Please see
     *                       {@see NetAppClient::volumeName()} for help formatting this field.
     *
     * @return \Google\Cloud\NetApp\V1\ListReplicationsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The volume for which to retrieve replication information,
     *           in the format
     *           `projects/{project_id}/locations/{location}/volumes/{volume_id}`.
     *     @type int $page_size
     *           The maximum number of items to return.
     *     @type string $page_token
     *           The next_page_token value to use if there are additional
     *           results to retrieve for this list request.
     *     @type string $order_by
     *           Sort results. Supported values are "name", "name desc" or "" (unsorted).
     *     @type string $filter
     *           List filter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Replication::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The volume for which to retrieve replication information,
     * in the format
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The volume for which to retrieve replication information,
     * in the format
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value to use if there are additional
     * results to retrieve for this list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value to use if there are additional
     * results to retrieve for this list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Sort results. Supported values are "name", "name desc" or "" (unsorted).
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Sort results. Supported values are "name", "name desc" or "" (unsorted).
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * List filter.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * List filter.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

