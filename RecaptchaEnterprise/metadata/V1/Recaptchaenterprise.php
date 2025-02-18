<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace GPBMetadata\Google\Cloud\Recaptchaenterprise\V1;

class Recaptchaenterprise
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�*
=google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto#google.cloud.recaptchaenterprise.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateAssessmentRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectH

assessment (2/.google.cloud.recaptchaenterprise.v1.AssessmentB�A"�
AnnotateAssessmentRequestC
name (	B5�A�A/
-recaptchaenterprise.googleapis.com/Assessmentb

annotation (2I.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest.AnnotationB�A"v

Annotation
ANNOTATION_UNSPECIFIED 

LEGITIMATE

FRAUDULENT
PASSWORD_CORRECT
PASSWORD_INCORRECT"
AnnotateAssessmentResponse"�

Assessment
name (	B�A9
event (2*.google.cloud.recaptchaenterprise.v1.EventM
risk_analysis (21.google.cloud.recaptchaenterprise.v1.RiskAnalysisB�AS
token_properties (24.google.cloud.recaptchaenterprise.v1.TokenPropertiesB�A:_�A\\
-recaptchaenterprise.googleapis.com/Assessment+projects/{project}/assessments/{assessment}"�
Event
token (	B�A
site_key (	B�A

user_agent (	B�A
user_ip_address (	B�A
expected_action (	B�A"�
RiskAnalysis
score (W
reasons (2F.google.cloud.recaptchaenterprise.v1.RiskAnalysis.ClassificationReason"�
ClassificationReason%
!CLASSIFICATION_REASON_UNSPECIFIED 

AUTOMATION
UNEXPECTED_ENVIRONMENT
TOO_MUCH_TRAFFIC
UNEXPECTED_USAGE_PATTERNS
LOW_CONFIDENCE_SCORE"�
TokenProperties
valid (Z
invalid_reason (2B.google.cloud.recaptchaenterprise.v1.TokenProperties.InvalidReason/
create_time (2.google.protobuf.Timestamp
hostname (	
action (	"~
InvalidReason
INVALID_REASON_UNSPECIFIED 
UNKNOWN_INVALID_REASON
	MALFORMED
EXPIRED
DUPE
MISSING"�
CreateKeyRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project:
key (2(.google.cloud.recaptchaenterprise.v1.KeyB�A"�
ListKeysRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (B�A

page_token (	B�A"c
ListKeysResponse6
keys (2(.google.cloud.recaptchaenterprise.v1.Key
next_page_token (	"M
GetKeyRequest<
name (	B.�A�A(
&recaptchaenterprise.googleapis.com/Key"�
UpdateKeyRequest:
key (2(.google.cloud.recaptchaenterprise.v1.KeyB�A4
update_mask (2.google.protobuf.FieldMaskB�A"P
DeleteKeyRequest<
name (	B.�A�A(
&recaptchaenterprise.googleapis.com/Key"�
Key
name (	
display_name (	K
web_settings (23.google.cloud.recaptchaenterprise.v1.WebKeySettingsH S
android_settings (27.google.cloud.recaptchaenterprise.v1.AndroidKeySettingsH K
ios_settings (23.google.cloud.recaptchaenterprise.v1.IOSKeySettingsH I
labels (24.google.cloud.recaptchaenterprise.v1.Key.LabelsEntryB�A/
create_time (2.google.protobuf.Timestamp-
LabelsEntry
key (	
value (	:8:J�AG
&recaptchaenterprise.googleapis.com/Keyprojects/{project}/keys/{key}B
platform_settings"�
WebKeySettings
allow_all_domains (
allowed_domains (	
allow_amp_traffic (B�Ab
integration_type (2C.google.cloud.recaptchaenterprise.v1.WebKeySettings.IntegrationTypeB�Av
challenge_security_preference (2O.google.cloud.recaptchaenterprise.v1.WebKeySettings.ChallengeSecurityPreference"[
IntegrationType 
INTEGRATION_TYPE_UNSPECIFIED 	
SCORE
CHECKBOX
	INVISIBLE"v
ChallengeSecurityPreference-
)CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED 
	USABILITY
BALANCE
SECURITY"3
AndroidKeySettings
allowed_package_names (	",
IOSKeySettings
allowed_bundle_ids (	2�

RecaptchaEnterpriseService�
CreateAssessment<.google.cloud.recaptchaenterprise.v1.CreateAssessmentRequest/.google.cloud.recaptchaenterprise.v1.Assessment"K���1"#/v1/{parent=projects/*}/assessments:
assessment�Aparent,assessment�
AnnotateAssessment>.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest?.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentResponse"I���1",/v1/{name=projects/*/assessments/*}:annotate:*�Aname,annotation�
	CreateKey5.google.cloud.recaptchaenterprise.v1.CreateKeyRequest(.google.cloud.recaptchaenterprise.v1.Key")���#"/v1/{parent=projects/*}/keys:key�
ListKeys4.google.cloud.recaptchaenterprise.v1.ListKeysRequest5.google.cloud.recaptchaenterprise.v1.ListKeysResponse"$���/v1/{parent=projects/*}/keys�
GetKey2.google.cloud.recaptchaenterprise.v1.GetKeyRequest(.google.cloud.recaptchaenterprise.v1.Key"$���/v1/{name=projects/*/keys/*}�
	UpdateKey5.google.cloud.recaptchaenterprise.v1.UpdateKeyRequest(.google.cloud.recaptchaenterprise.v1.Key"-���\'2 /v1/{key.name=projects/*/keys/*}:key�
	DeleteKey5.google.cloud.recaptchaenterprise.v1.DeleteKeyRequest.google.protobuf.Empty"$���*/v1/{name=projects/*/keys/*}V�A"recaptchaenterprise.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.recaptchaenterprise.v1BRecaptchaEnterpriseProtoPZVgoogle.golang.org/genproto/googleapis/cloud/recaptchaenterprise/v1;recaptchaenterprise�GCRE�#Google.Cloud.RecaptchaEnterprise.V1�#Google\\Cloud\\RecaptchaEnterprise\\V1�&Google::Cloud::RecaptchaEnterprise::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

