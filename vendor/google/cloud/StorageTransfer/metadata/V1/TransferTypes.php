<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace GPBMetadata\Google\Storagetransfer\V1;

class TransferTypes
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Code::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        $pool->internalAddGeneratedFile(
            '
�&
.google/storagetransfer/v1/transfer_types.protogoogle.storagetransfer.v1google/api/field_behavior.protogoogle/protobuf/any.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/rpc/code.protogoogle/type/date.protogoogle/type/timeofday.proto"A
GoogleServiceAccount
account_email (	

subject_id (	"J
AwsAccessKey
access_key_id (	B�A
secret_access_key (	B�A"*
AzureCredentials
	sas_token (	B�A"�
ObjectConditionsK
(min_time_elapsed_since_last_modification (2.google.protobuf.DurationK
(max_time_elapsed_since_last_modification (2.google.protobuf.Duration
include_prefixes (	
exclude_prefixes (	7
last_modified_since (2.google.protobuf.Timestamp8
last_modified_before (2.google.protobuf.Timestamp"1
GcsData
bucket_name (	B�A
path (	"�
	AwsS3Data
bucket_name (	B�AD
aws_access_key (2\'.google.storagetransfer.v1.AwsAccessKeyB�A
path (	
role_arn (	B�A"�
AzureBlobStorageData
storage_account (	B�AN
azure_credentials (2+.google.storagetransfer.v1.AzureCredentialsB�A�A
	container (	B�A
path (	"!
HttpData
list_url (	B�A"�
TransferOptions2
*overwrite_objects_already_existing_in_sink (%
delete_objects_unique_in_sink (1
)delete_objects_from_source_after_transfer ("�
TransferSpec;
gcs_data_sink (2".google.storagetransfer.v1.GcsDataH =
gcs_data_source (2".google.storagetransfer.v1.GcsDataHB
aws_s3_data_source (2$.google.storagetransfer.v1.AwsS3DataH?
http_data_source (2#.google.storagetransfer.v1.HttpDataHY
azure_blob_storage_data_source (2/.google.storagetransfer.v1.AzureBlobStorageDataHF
object_conditions (2+.google.storagetransfer.v1.ObjectConditionsD
transfer_options (2*.google.storagetransfer.v1.TransferOptionsB
	data_sinkB
data_source"�
Schedule3
schedule_start_date (2.google.type.DateB�A,
schedule_end_date (2.google.type.Date1
start_time_of_day (2.google.type.TimeOfDay/
end_time_of_day (2.google.type.TimeOfDay2
repeat_interval (2.google.protobuf.Duration"�
TransferJob
name (	
description (	

project_id (	>
transfer_spec (2\'.google.storagetransfer.v1.TransferSpecJ
notification_config (2-.google.storagetransfer.v1.NotificationConfig5
schedule (2#.google.storagetransfer.v1.Schedule=
status (2-.google.storagetransfer.v1.TransferJob.Status6
creation_time (2.google.protobuf.TimestampB�A?
last_modification_time (2.google.protobuf.TimestampB�A6
deletion_time	 (2.google.protobuf.TimestampB�A
latest_operation_name (	"H
Status
STATUS_UNSPECIFIED 
ENABLED
DISABLED
DELETED"8
ErrorLogEntry
url (	B�A
error_details (	"�
ErrorSummary)

error_code (2.google.rpc.CodeB�A
error_count (B�AC
error_log_entries (2(.google.storagetransfer.v1.ErrorLogEntry"�
TransferCounters!
objects_found_from_source (
bytes_found_from_source ($
objects_found_only_from_sink ("
bytes_found_only_from_sink (+
#objects_from_source_skipped_by_sync ()
!bytes_from_source_skipped_by_sync (
objects_copied_to_sink (
bytes_copied_to_sink (#
objects_deleted_from_source	 (!
bytes_deleted_from_source
 (!
objects_deleted_from_sink (
bytes_deleted_from_sink ("
objects_from_source_failed ( 
bytes_from_source_failed (*
"objects_failed_to_delete_from_sink ((
 bytes_failed_to_delete_from_sink ("�
NotificationConfig
pubsub_topic (	B�AL
event_types (27.google.storagetransfer.v1.NotificationConfig.EventTypeX
payload_format (2;.google.storagetransfer.v1.NotificationConfig.PayloadFormatB�A"�
	EventType
EVENT_TYPE_UNSPECIFIED 
TRANSFER_OPERATION_SUCCESS
TRANSFER_OPERATION_FAILED
TRANSFER_OPERATION_ABORTED"C
PayloadFormat
PAYLOAD_FORMAT_UNSPECIFIED 
NONE
JSON"�
TransferOperation
name (	

project_id (	>
transfer_spec (2\'.google.storagetransfer.v1.TransferSpecJ
notification_config
 (2-.google.storagetransfer.v1.NotificationConfig.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.TimestampC
status (23.google.storagetransfer.v1.TransferOperation.Status=
counters (2+.google.storagetransfer.v1.TransferCountersA
error_breakdowns (2\'.google.storagetransfer.v1.ErrorSummary
transfer_job_name	 (	"o
Status
STATUS_UNSPECIFIED 
IN_PROGRESS

PAUSED
SUCCESS

FAILED
ABORTED

QUEUEDB�
#com.google.storagetransfer.v1.protoBTransferTypesZHgoogle.golang.org/genproto/googleapis/storagetransfer/v1;storagetransfer��Google.Cloud.StorageTransfer.V1�Google\\Cloud\\StorageTransfer\\V1�"Google::Cloud::StorageTransfer::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

