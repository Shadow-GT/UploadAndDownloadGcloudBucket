<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [CloudChannelService.ListEntitlements][google.cloud.channel.v1.CloudChannelService.ListEntitlements].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListEntitlementsResponse</code>
 */
class ListEntitlementsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The reseller customer's entitlements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Entitlement entitlements = 1;</code>
     */
    private $entitlements;
    /**
     * A token to list the next page of results.
     * Pass to [ListEntitlementsRequest.page_token][google.cloud.channel.v1.ListEntitlementsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\Entitlement[]|\Google\Protobuf\Internal\RepeatedField $entitlements
     *           The reseller customer's entitlements.
     *     @type string $next_page_token
     *           A token to list the next page of results.
     *           Pass to [ListEntitlementsRequest.page_token][google.cloud.channel.v1.ListEntitlementsRequest.page_token] to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The reseller customer's entitlements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Entitlement entitlements = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntitlements()
    {
        return $this->entitlements;
    }

    /**
     * The reseller customer's entitlements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Entitlement entitlements = 1;</code>
     * @param \Google\Cloud\Channel\V1\Entitlement[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntitlements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\Entitlement::class);
        $this->entitlements = $arr;

        return $this;
    }

    /**
     * A token to list the next page of results.
     * Pass to [ListEntitlementsRequest.page_token][google.cloud.channel.v1.ListEntitlementsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to list the next page of results.
     * Pass to [ListEntitlementsRequest.page_token][google.cloud.channel.v1.ListEntitlementsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
