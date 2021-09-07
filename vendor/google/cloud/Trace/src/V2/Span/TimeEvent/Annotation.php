<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v2/trace.proto

namespace Google\Cloud\Trace\V2\Span\TimeEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Text annotation with a set of attributes.
 *
 * Generated from protobuf message <code>google.devtools.cloudtrace.v2.Span.TimeEvent.Annotation</code>
 */
class Annotation extends \Google\Protobuf\Internal\Message
{
    /**
     * A user-supplied message describing the event. The maximum length for
     * the description is 256 bytes.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.TruncatableString description = 1;</code>
     */
    private $description = null;
    /**
     * A set of attributes on the annotation. You can have up to 4 attributes
     * per Annotation.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.Attributes attributes = 2;</code>
     */
    private $attributes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Trace\V2\TruncatableString $description
     *           A user-supplied message describing the event. The maximum length for
     *           the description is 256 bytes.
     *     @type \Google\Cloud\Trace\V2\Span\Attributes $attributes
     *           A set of attributes on the annotation. You can have up to 4 attributes
     *           per Annotation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudtrace\V2\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * A user-supplied message describing the event. The maximum length for
     * the description is 256 bytes.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.TruncatableString description = 1;</code>
     * @return \Google\Cloud\Trace\V2\TruncatableString|null
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : null;
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
     * A user-supplied message describing the event. The maximum length for
     * the description is 256 bytes.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.TruncatableString description = 1;</code>
     * @param \Google\Cloud\Trace\V2\TruncatableString $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Trace\V2\TruncatableString::class);
        $this->description = $var;

        return $this;
    }

    /**
     * A set of attributes on the annotation. You can have up to 4 attributes
     * per Annotation.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.Attributes attributes = 2;</code>
     * @return \Google\Cloud\Trace\V2\Span\Attributes|null
     */
    public function getAttributes()
    {
        return isset($this->attributes) ? $this->attributes : null;
    }

    public function hasAttributes()
    {
        return isset($this->attributes);
    }

    public function clearAttributes()
    {
        unset($this->attributes);
    }

    /**
     * A set of attributes on the annotation. You can have up to 4 attributes
     * per Annotation.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.Attributes attributes = 2;</code>
     * @param \Google\Cloud\Trace\V2\Span\Attributes $var
     * @return $this
     */
    public function setAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Trace\V2\Span\Attributes::class);
        $this->attributes = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Annotation::class, \Google\Cloud\Trace\V2\Span_TimeEvent_Annotation::class);
