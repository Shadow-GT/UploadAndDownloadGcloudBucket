<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/reachability.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `GetConnectivityTest` method.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.GetConnectivityTestRequest</code>
 */
class GetConnectivityTestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. `ConnectivityTest` resource name using the form:
     *     `projects/{project_id}/locations/global/connectivityTests/{test_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. `ConnectivityTest` resource name using the form:
     *               `projects/{project_id}/locations/global/connectivityTests/{test_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Reachability::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. `ConnectivityTest` resource name using the form:
     *     `projects/{project_id}/locations/global/connectivityTests/{test_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. `ConnectivityTest` resource name using the form:
     *     `projects/{project_id}/locations/global/connectivityTests/{test_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

