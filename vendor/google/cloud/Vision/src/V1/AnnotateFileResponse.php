<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to a single file annotation request. A file may contain one or more
 * images, which individually have their own responses.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.AnnotateFileResponse</code>
 */
class AnnotateFileResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Information about the file for which this response is generated.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.InputConfig input_config = 1;</code>
     */
    private $input_config = null;
    /**
     * Individual responses to images found within the file. This field will be
     * empty if the `error` field is set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AnnotateImageResponse responses = 2;</code>
     */
    private $responses;
    /**
     * This field gives the total number of pages in the file.
     *
     * Generated from protobuf field <code>int32 total_pages = 3;</code>
     */
    private $total_pages = 0;
    /**
     * If set, represents the error message for the failed request. The
     * `responses` field will not be set in this case.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     */
    private $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\InputConfig $input_config
     *           Information about the file for which this response is generated.
     *     @type \Google\Cloud\Vision\V1\AnnotateImageResponse[]|\Google\Protobuf\Internal\RepeatedField $responses
     *           Individual responses to images found within the file. This field will be
     *           empty if the `error` field is set.
     *     @type int $total_pages
     *           This field gives the total number of pages in the file.
     *     @type \Google\Rpc\Status $error
     *           If set, represents the error message for the failed request. The
     *           `responses` field will not be set in this case.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * Information about the file for which this response is generated.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.InputConfig input_config = 1;</code>
     * @return \Google\Cloud\Vision\V1\InputConfig|null
     */
    public function getInputConfig()
    {
        return isset($this->input_config) ? $this->input_config : null;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * Information about the file for which this response is generated.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.InputConfig input_config = 1;</code>
     * @param \Google\Cloud\Vision\V1\InputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\InputConfig::class);
        $this->input_config = $var;

        return $this;
    }

    /**
     * Individual responses to images found within the file. This field will be
     * empty if the `error` field is set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AnnotateImageResponse responses = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * Individual responses to images found within the file. This field will be
     * empty if the `error` field is set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AnnotateImageResponse responses = 2;</code>
     * @param \Google\Cloud\Vision\V1\AnnotateImageResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\AnnotateImageResponse::class);
        $this->responses = $arr;

        return $this;
    }

    /**
     * This field gives the total number of pages in the file.
     *
     * Generated from protobuf field <code>int32 total_pages = 3;</code>
     * @return int
     */
    public function getTotalPages()
    {
        return $this->total_pages;
    }

    /**
     * This field gives the total number of pages in the file.
     *
     * Generated from protobuf field <code>int32 total_pages = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalPages($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_pages = $var;

        return $this;
    }

    /**
     * If set, represents the error message for the failed request. The
     * `responses` field will not be set in this case.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return isset($this->error) ? $this->error : null;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * If set, represents the error message for the failed request. The
     * `responses` field will not be set in this case.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 4;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

}

