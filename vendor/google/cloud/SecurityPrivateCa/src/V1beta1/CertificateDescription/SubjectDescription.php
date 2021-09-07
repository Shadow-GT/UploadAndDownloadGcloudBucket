<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1\CertificateDescription;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * These values describe fields in an issued X.509 certificate such as the
 * distinguished name, subject alternative names, serial number, and lifetime.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.CertificateDescription.SubjectDescription</code>
 */
class SubjectDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Contains distinguished name fields such as the location and organization.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.Subject subject = 1;</code>
     */
    private $subject = null;
    /**
     * The "common name" of the distinguished name.
     *
     * Generated from protobuf field <code>string common_name = 2;</code>
     */
    private $common_name = '';
    /**
     * The subject alternative name fields.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.SubjectAltNames subject_alt_name = 3;</code>
     */
    private $subject_alt_name = null;
    /**
     * The serial number encoded in lowercase hexadecimal.
     *
     * Generated from protobuf field <code>string hex_serial_number = 4;</code>
     */
    private $hex_serial_number = '';
    /**
     * For convenience, the actual lifetime of an issued certificate.
     * Corresponds to 'not_after_time' - 'not_before_time'.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 5;</code>
     */
    private $lifetime = null;
    /**
     * The time at which the certificate becomes valid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_before_time = 6;</code>
     */
    private $not_before_time = null;
    /**
     * The time at which the certificate expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_after_time = 7;</code>
     */
    private $not_after_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\Subject $subject
     *           Contains distinguished name fields such as the location and organization.
     *     @type string $common_name
     *           The "common name" of the distinguished name.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\SubjectAltNames $subject_alt_name
     *           The subject alternative name fields.
     *     @type string $hex_serial_number
     *           The serial number encoded in lowercase hexadecimal.
     *     @type \Google\Protobuf\Duration $lifetime
     *           For convenience, the actual lifetime of an issued certificate.
     *           Corresponds to 'not_after_time' - 'not_before_time'.
     *     @type \Google\Protobuf\Timestamp $not_before_time
     *           The time at which the certificate becomes valid.
     *     @type \Google\Protobuf\Timestamp $not_after_time
     *           The time at which the certificate expires.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Contains distinguished name fields such as the location and organization.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.Subject subject = 1;</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\Subject|null
     */
    public function getSubject()
    {
        return isset($this->subject) ? $this->subject : null;
    }

    public function hasSubject()
    {
        return isset($this->subject);
    }

    public function clearSubject()
    {
        unset($this->subject);
    }

    /**
     * Contains distinguished name fields such as the location and organization.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.Subject subject = 1;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\Subject $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\Subject::class);
        $this->subject = $var;

        return $this;
    }

    /**
     * The "common name" of the distinguished name.
     *
     * Generated from protobuf field <code>string common_name = 2;</code>
     * @return string
     */
    public function getCommonName()
    {
        return $this->common_name;
    }

    /**
     * The "common name" of the distinguished name.
     *
     * Generated from protobuf field <code>string common_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCommonName($var)
    {
        GPBUtil::checkString($var, True);
        $this->common_name = $var;

        return $this;
    }

    /**
     * The subject alternative name fields.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.SubjectAltNames subject_alt_name = 3;</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\SubjectAltNames|null
     */
    public function getSubjectAltName()
    {
        return isset($this->subject_alt_name) ? $this->subject_alt_name : null;
    }

    public function hasSubjectAltName()
    {
        return isset($this->subject_alt_name);
    }

    public function clearSubjectAltName()
    {
        unset($this->subject_alt_name);
    }

    /**
     * The subject alternative name fields.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.SubjectAltNames subject_alt_name = 3;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\SubjectAltNames $var
     * @return $this
     */
    public function setSubjectAltName($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\SubjectAltNames::class);
        $this->subject_alt_name = $var;

        return $this;
    }

    /**
     * The serial number encoded in lowercase hexadecimal.
     *
     * Generated from protobuf field <code>string hex_serial_number = 4;</code>
     * @return string
     */
    public function getHexSerialNumber()
    {
        return $this->hex_serial_number;
    }

    /**
     * The serial number encoded in lowercase hexadecimal.
     *
     * Generated from protobuf field <code>string hex_serial_number = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHexSerialNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->hex_serial_number = $var;

        return $this;
    }

    /**
     * For convenience, the actual lifetime of an issued certificate.
     * Corresponds to 'not_after_time' - 'not_before_time'.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLifetime()
    {
        return isset($this->lifetime) ? $this->lifetime : null;
    }

    public function hasLifetime()
    {
        return isset($this->lifetime);
    }

    public function clearLifetime()
    {
        unset($this->lifetime);
    }

    /**
     * For convenience, the actual lifetime of an issued certificate.
     * Corresponds to 'not_after_time' - 'not_before_time'.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lifetime = $var;

        return $this;
    }

    /**
     * The time at which the certificate becomes valid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_before_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNotBeforeTime()
    {
        return isset($this->not_before_time) ? $this->not_before_time : null;
    }

    public function hasNotBeforeTime()
    {
        return isset($this->not_before_time);
    }

    public function clearNotBeforeTime()
    {
        unset($this->not_before_time);
    }

    /**
     * The time at which the certificate becomes valid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_before_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNotBeforeTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->not_before_time = $var;

        return $this;
    }

    /**
     * The time at which the certificate expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_after_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNotAfterTime()
    {
        return isset($this->not_after_time) ? $this->not_after_time : null;
    }

    public function hasNotAfterTime()
    {
        return isset($this->not_after_time);
    }

    public function clearNotAfterTime()
    {
        unset($this->not_after_time);
    }

    /**
     * The time at which the certificate expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_after_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNotAfterTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->not_after_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SubjectDescription::class, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateDescription_SubjectDescription::class);
