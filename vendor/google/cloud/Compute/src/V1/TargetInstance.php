<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Target Instance resource.
 * You can use a target instance to handle traffic for one or more forwarding rules, which is ideal for forwarding protocol traffic that is managed by a single source. For example, ESP, AH, TCP, or UDP. For more information, read Target instances. (== resource_for {$api_version}.targetInstances ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetInstance</code>
 */
class TargetInstance extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    private $description = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = null;
    /**
     * A URL to the virtual machine instance that handles traffic for this target instance. When creating a target instance, you can provide the fully-qualified URL or a valid partial URL to the desired virtual machine. For example, the following are all valid URLs:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/instance
     * - projects/project/zones/zone/instances/instance
     * - zones/zone/instances/instance
     *
     * Generated from protobuf field <code>string instance = 18257045;</code>
     */
    private $instance = null;
    /**
     * [Output Only] The type of the resource. Always compute#targetInstance for target instances.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = null;
    /**
     * NAT option controlling how IPs are NAT'ed to the instance. Currently only NO_NAT (default value) is supported.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetInstance.NatPolicy nat_policy = 509780496;</code>
     */
    private $nat_policy = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] URL of the zone where the target instance resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     */
    private $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $instance
     *           A URL to the virtual machine instance that handles traffic for this target instance. When creating a target instance, you can provide the fully-qualified URL or a valid partial URL to the desired virtual machine. For example, the following are all valid URLs:
     *           - https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/instance
     *           - projects/project/zones/zone/instances/instance
     *           - zones/zone/instances/instance
     *     @type string $kind
     *           [Output Only] The type of the resource. Always compute#targetInstance for target instances.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type int $nat_policy
     *           NAT option controlling how IPs are NAT'ed to the instance. Currently only NO_NAT (default value) is supported.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $zone
     *           [Output Only] URL of the zone where the target instance resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * A URL to the virtual machine instance that handles traffic for this target instance. When creating a target instance, you can provide the fully-qualified URL or a valid partial URL to the desired virtual machine. For example, the following are all valid URLs:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/instance
     * - projects/project/zones/zone/instances/instance
     * - zones/zone/instances/instance
     *
     * Generated from protobuf field <code>string instance = 18257045;</code>
     * @return string
     */
    public function getInstance()
    {
        return isset($this->instance) ? $this->instance : '';
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * A URL to the virtual machine instance that handles traffic for this target instance. When creating a target instance, you can provide the fully-qualified URL or a valid partial URL to the desired virtual machine. For example, the following are all valid URLs:
     * - https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/instance
     * - projects/project/zones/zone/instances/instance
     * - zones/zone/instances/instance
     *
     * Generated from protobuf field <code>string instance = 18257045;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * [Output Only] The type of the resource. Always compute#targetInstance for target instances.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] The type of the resource. Always compute#targetInstance for target instances.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * NAT option controlling how IPs are NAT'ed to the instance. Currently only NO_NAT (default value) is supported.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetInstance.NatPolicy nat_policy = 509780496;</code>
     * @return int
     */
    public function getNatPolicy()
    {
        return isset($this->nat_policy) ? $this->nat_policy : 0;
    }

    public function hasNatPolicy()
    {
        return isset($this->nat_policy);
    }

    public function clearNatPolicy()
    {
        unset($this->nat_policy);
    }

    /**
     * NAT option controlling how IPs are NAT'ed to the instance. Currently only NO_NAT (default value) is supported.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetInstance.NatPolicy nat_policy = 509780496;</code>
     * @param int $var
     * @return $this
     */
    public function setNatPolicy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\TargetInstance\NatPolicy::class);
        $this->nat_policy = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the zone where the target instance resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] URL of the zone where the target instance resides. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

