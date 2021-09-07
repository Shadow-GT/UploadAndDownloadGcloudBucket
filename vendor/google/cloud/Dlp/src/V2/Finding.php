<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a piece of potentially sensitive content.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Finding</code>
 */
class Finding extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name in format
     * projects/{project}/locations/{location}/findings/{finding} Populated only
     * when viewing persisted findings.
     *
     * Generated from protobuf field <code>string name = 14;</code>
     */
    private $name = '';
    /**
     * The content that was found. Even if the content is not textual, it
     * may be converted to a textual representation here.
     * Provided if `include_quote` is true and the finding is
     * less than or equal to 4096 bytes long. If the finding exceeds 4096 bytes
     * in length, the quote may be omitted.
     *
     * Generated from protobuf field <code>string quote = 1;</code>
     */
    private $quote = '';
    /**
     * The type of content that might have been found.
     * Provided if `excluded_types` is false.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 2;</code>
     */
    private $info_type = null;
    /**
     * Confidence of how likely it is that the `info_type` is correct.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood likelihood = 3;</code>
     */
    private $likelihood = 0;
    /**
     * Where the content was found.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Location location = 4;</code>
     */
    private $location = null;
    /**
     * Timestamp when finding was detected.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    private $create_time = null;
    /**
     * Contains data parsed from quotes. Only populated if include_quote was set
     * to true and a supported infoType was requested. Currently supported
     * infoTypes: DATE, DATE_OF_BIRTH and TIME.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.QuoteInfo quote_info = 7;</code>
     */
    private $quote_info = null;
    /**
     * The job that stored the finding.
     *
     * Generated from protobuf field <code>string resource_name = 8 [(.google.api.resource_reference) = {</code>
     */
    private $resource_name = '';
    /**
     * Job trigger name, if applicable, for this finding.
     *
     * Generated from protobuf field <code>string trigger_name = 9 [(.google.api.resource_reference) = {</code>
     */
    private $trigger_name = '';
    /**
     * The labels associated with this `Finding`.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     * No more than 10 labels can be associated with a given finding.
     * Examples:
     * * `"environment" : "production"`
     * * `"pipeline" : "etl"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     */
    private $labels;
    /**
     * Time the job started that produced this finding.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp job_create_time = 11;</code>
     */
    private $job_create_time = null;
    /**
     * The job that stored the finding.
     *
     * Generated from protobuf field <code>string job_name = 13 [(.google.api.resource_reference) = {</code>
     */
    private $job_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name in format
     *           projects/{project}/locations/{location}/findings/{finding} Populated only
     *           when viewing persisted findings.
     *     @type string $quote
     *           The content that was found. Even if the content is not textual, it
     *           may be converted to a textual representation here.
     *           Provided if `include_quote` is true and the finding is
     *           less than or equal to 4096 bytes long. If the finding exceeds 4096 bytes
     *           in length, the quote may be omitted.
     *     @type \Google\Cloud\Dlp\V2\InfoType $info_type
     *           The type of content that might have been found.
     *           Provided if `excluded_types` is false.
     *     @type int $likelihood
     *           Confidence of how likely it is that the `info_type` is correct.
     *     @type \Google\Cloud\Dlp\V2\Location $location
     *           Where the content was found.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Timestamp when finding was detected.
     *     @type \Google\Cloud\Dlp\V2\QuoteInfo $quote_info
     *           Contains data parsed from quotes. Only populated if include_quote was set
     *           to true and a supported infoType was requested. Currently supported
     *           infoTypes: DATE, DATE_OF_BIRTH and TIME.
     *     @type string $resource_name
     *           The job that stored the finding.
     *     @type string $trigger_name
     *           Job trigger name, if applicable, for this finding.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels associated with this `Finding`.
     *           Label keys must be between 1 and 63 characters long and must conform
     *           to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     *           Label values must be between 0 and 63 characters long and must conform
     *           to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     *           No more than 10 labels can be associated with a given finding.
     *           Examples:
     *           * `"environment" : "production"`
     *           * `"pipeline" : "etl"`
     *     @type \Google\Protobuf\Timestamp $job_create_time
     *           Time the job started that produced this finding.
     *     @type string $job_name
     *           The job that stored the finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name in format
     * projects/{project}/locations/{location}/findings/{finding} Populated only
     * when viewing persisted findings.
     *
     * Generated from protobuf field <code>string name = 14;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name in format
     * projects/{project}/locations/{location}/findings/{finding} Populated only
     * when viewing persisted findings.
     *
     * Generated from protobuf field <code>string name = 14;</code>
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
     * The content that was found. Even if the content is not textual, it
     * may be converted to a textual representation here.
     * Provided if `include_quote` is true and the finding is
     * less than or equal to 4096 bytes long. If the finding exceeds 4096 bytes
     * in length, the quote may be omitted.
     *
     * Generated from protobuf field <code>string quote = 1;</code>
     * @return string
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * The content that was found. Even if the content is not textual, it
     * may be converted to a textual representation here.
     * Provided if `include_quote` is true and the finding is
     * less than or equal to 4096 bytes long. If the finding exceeds 4096 bytes
     * in length, the quote may be omitted.
     *
     * Generated from protobuf field <code>string quote = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQuote($var)
    {
        GPBUtil::checkString($var, True);
        $this->quote = $var;

        return $this;
    }

    /**
     * The type of content that might have been found.
     * Provided if `excluded_types` is false.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 2;</code>
     * @return \Google\Cloud\Dlp\V2\InfoType|null
     */
    public function getInfoType()
    {
        return isset($this->info_type) ? $this->info_type : null;
    }

    public function hasInfoType()
    {
        return isset($this->info_type);
    }

    public function clearInfoType()
    {
        unset($this->info_type);
    }

    /**
     * The type of content that might have been found.
     * Provided if `excluded_types` is false.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 2;</code>
     * @param \Google\Cloud\Dlp\V2\InfoType $var
     * @return $this
     */
    public function setInfoType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InfoType::class);
        $this->info_type = $var;

        return $this;
    }

    /**
     * Confidence of how likely it is that the `info_type` is correct.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood likelihood = 3;</code>
     * @return int
     */
    public function getLikelihood()
    {
        return $this->likelihood;
    }

    /**
     * Confidence of how likely it is that the `info_type` is correct.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Likelihood likelihood = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\Likelihood::class);
        $this->likelihood = $var;

        return $this;
    }

    /**
     * Where the content was found.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Location location = 4;</code>
     * @return \Google\Cloud\Dlp\V2\Location|null
     */
    public function getLocation()
    {
        return isset($this->location) ? $this->location : null;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Where the content was found.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Location location = 4;</code>
     * @param \Google\Cloud\Dlp\V2\Location $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Location::class);
        $this->location = $var;

        return $this;
    }

    /**
     * Timestamp when finding was detected.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Timestamp when finding was detected.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Contains data parsed from quotes. Only populated if include_quote was set
     * to true and a supported infoType was requested. Currently supported
     * infoTypes: DATE, DATE_OF_BIRTH and TIME.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.QuoteInfo quote_info = 7;</code>
     * @return \Google\Cloud\Dlp\V2\QuoteInfo|null
     */
    public function getQuoteInfo()
    {
        return isset($this->quote_info) ? $this->quote_info : null;
    }

    public function hasQuoteInfo()
    {
        return isset($this->quote_info);
    }

    public function clearQuoteInfo()
    {
        unset($this->quote_info);
    }

    /**
     * Contains data parsed from quotes. Only populated if include_quote was set
     * to true and a supported infoType was requested. Currently supported
     * infoTypes: DATE, DATE_OF_BIRTH and TIME.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.QuoteInfo quote_info = 7;</code>
     * @param \Google\Cloud\Dlp\V2\QuoteInfo $var
     * @return $this
     */
    public function setQuoteInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\QuoteInfo::class);
        $this->quote_info = $var;

        return $this;
    }

    /**
     * The job that stored the finding.
     *
     * Generated from protobuf field <code>string resource_name = 8 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The job that stored the finding.
     *
     * Generated from protobuf field <code>string resource_name = 8 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Job trigger name, if applicable, for this finding.
     *
     * Generated from protobuf field <code>string trigger_name = 9 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTriggerName()
    {
        return $this->trigger_name;
    }

    /**
     * Job trigger name, if applicable, for this finding.
     *
     * Generated from protobuf field <code>string trigger_name = 9 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTriggerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->trigger_name = $var;

        return $this;
    }

    /**
     * The labels associated with this `Finding`.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     * No more than 10 labels can be associated with a given finding.
     * Examples:
     * * `"environment" : "production"`
     * * `"pipeline" : "etl"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels associated with this `Finding`.
     * Label keys must be between 1 and 63 characters long and must conform
     * to the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     * Label values must be between 0 and 63 characters long and must conform
     * to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     * No more than 10 labels can be associated with a given finding.
     * Examples:
     * * `"environment" : "production"`
     * * `"pipeline" : "etl"`
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Time the job started that produced this finding.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp job_create_time = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getJobCreateTime()
    {
        return isset($this->job_create_time) ? $this->job_create_time : null;
    }

    public function hasJobCreateTime()
    {
        return isset($this->job_create_time);
    }

    public function clearJobCreateTime()
    {
        unset($this->job_create_time);
    }

    /**
     * Time the job started that produced this finding.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp job_create_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setJobCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->job_create_time = $var;

        return $this;
    }

    /**
     * The job that stored the finding.
     *
     * Generated from protobuf field <code>string job_name = 13 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * The job that stored the finding.
     *
     * Generated from protobuf field <code>string job_name = 13 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;

        return $this;
    }

}

