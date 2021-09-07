<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/column_spec.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of a column in a relational table. When listing them, column specs are returned in the same order in which they were
 * given on import .
 * Used by:
 *   *   Tables
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ColumnSpec</code>
 */
class ColumnSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the column specs.
     * Form:
     * `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/tableSpecs/{table_spec_id}/columnSpecs/{column_spec_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The data type of elements stored in the column.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DataType data_type = 2;</code>
     */
    private $data_type = null;
    /**
     * Output only. The name of the column to show in the interface. The name can
     * be up to 100 characters long and can consist only of ASCII Latin letters
     * A-Z and a-z, ASCII digits 0-9, underscores(_), and forward slashes(/), and
     * must start with a letter or a digit.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * Output only. Stats of the series of values in the column.
     * This field may be stale, see the ancestor's
     * Dataset.tables_dataset_metadata.stats_update_time field
     * for the timestamp at which these stats were last updated.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DataStats data_stats = 4;</code>
     */
    private $data_stats = null;
    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.ColumnSpec.CorrelatedColumn top_correlated_columns = 5;</code>
     */
    private $top_correlated_columns;
    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the column specs.
     *           Form:
     *           `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/tableSpecs/{table_spec_id}/columnSpecs/{column_spec_id}`
     *     @type \Google\Cloud\AutoMl\V1beta1\DataType $data_type
     *           The data type of elements stored in the column.
     *     @type string $display_name
     *           Output only. The name of the column to show in the interface. The name can
     *           be up to 100 characters long and can consist only of ASCII Latin letters
     *           A-Z and a-z, ASCII digits 0-9, underscores(_), and forward slashes(/), and
     *           must start with a letter or a digit.
     *     @type \Google\Cloud\AutoMl\V1beta1\DataStats $data_stats
     *           Output only. Stats of the series of values in the column.
     *           This field may be stale, see the ancestor's
     *           Dataset.tables_dataset_metadata.stats_update_time field
     *           for the timestamp at which these stats were last updated.
     *     @type \Google\Cloud\AutoMl\V1beta1\ColumnSpec\CorrelatedColumn[]|\Google\Protobuf\Internal\RepeatedField $top_correlated_columns
     *           Deprecated.
     *     @type string $etag
     *           Used to perform consistent read-modify-write updates. If not set, a blind
     *           "overwrite" update happens.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\ColumnSpec::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the column specs.
     * Form:
     * `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/tableSpecs/{table_spec_id}/columnSpecs/{column_spec_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the column specs.
     * Form:
     * `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/tableSpecs/{table_spec_id}/columnSpecs/{column_spec_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The data type of elements stored in the column.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DataType data_type = 2;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\DataType|null
     */
    public function getDataType()
    {
        return isset($this->data_type) ? $this->data_type : null;
    }

    public function hasDataType()
    {
        return isset($this->data_type);
    }

    public function clearDataType()
    {
        unset($this->data_type);
    }

    /**
     * The data type of elements stored in the column.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DataType data_type = 2;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\DataType $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\DataType::class);
        $this->data_type = $var;

        return $this;
    }

    /**
     * Output only. The name of the column to show in the interface. The name can
     * be up to 100 characters long and can consist only of ASCII Latin letters
     * A-Z and a-z, ASCII digits 0-9, underscores(_), and forward slashes(/), and
     * must start with a letter or a digit.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The name of the column to show in the interface. The name can
     * be up to 100 characters long and can consist only of ASCII Latin letters
     * A-Z and a-z, ASCII digits 0-9, underscores(_), and forward slashes(/), and
     * must start with a letter or a digit.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Stats of the series of values in the column.
     * This field may be stale, see the ancestor's
     * Dataset.tables_dataset_metadata.stats_update_time field
     * for the timestamp at which these stats were last updated.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DataStats data_stats = 4;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\DataStats|null
     */
    public function getDataStats()
    {
        return isset($this->data_stats) ? $this->data_stats : null;
    }

    public function hasDataStats()
    {
        return isset($this->data_stats);
    }

    public function clearDataStats()
    {
        unset($this->data_stats);
    }

    /**
     * Output only. Stats of the series of values in the column.
     * This field may be stale, see the ancestor's
     * Dataset.tables_dataset_metadata.stats_update_time field
     * for the timestamp at which these stats were last updated.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DataStats data_stats = 4;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\DataStats $var
     * @return $this
     */
    public function setDataStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\DataStats::class);
        $this->data_stats = $var;

        return $this;
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.ColumnSpec.CorrelatedColumn top_correlated_columns = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopCorrelatedColumns()
    {
        return $this->top_correlated_columns;
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.ColumnSpec.CorrelatedColumn top_correlated_columns = 5;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\ColumnSpec\CorrelatedColumn[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopCorrelatedColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1beta1\ColumnSpec\CorrelatedColumn::class);
        $this->top_correlated_columns = $arr;

        return $this;
    }

    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

