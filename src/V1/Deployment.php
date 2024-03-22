<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Deployment is a group of resources and configs managed and provisioned by
 * Infra Manager.
 *
 * Generated from protobuf message <code>google.cloud.config.v1.Deployment</code>
 */
class Deployment extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the deployment.
     * Format: `projects/{project}/locations/{location}/deployments/{deployment}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. Time when the deployment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time when the deployment was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * User-defined metadata for the deployment.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * Output only. Current state of the deployment.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Revision name that was most recently applied.
     * Format: `projects/{project}/locations/{location}/deployments/{deployment}/
     * revisions/{revision}`
     *
     * Generated from protobuf field <code>string latest_revision = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $latest_revision = '';
    /**
     * Output only. Additional information regarding the current state.
     *
     * Generated from protobuf field <code>string state_detail = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_detail = '';
    /**
     * Output only. Error code describing errors that may have occurred.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment.ErrorCode error_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error_code = 0;
    /**
     * Output only. Location of artifacts from a DeleteDeployment operation.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.ApplyResults delete_results = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delete_results = null;
    /**
     * Output only. Cloud Build instance UUID associated with deleting this
     * deployment.
     *
     * Generated from protobuf field <code>string delete_build = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delete_build = '';
    /**
     * Output only. Location of Cloud Build logs in Google Cloud Storage,
     * populated when deleting this deployment. Format: `gs://{bucket}/{object}`.
     *
     * Generated from protobuf field <code>string delete_logs = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delete_logs = '';
    /**
     * Output only. Errors encountered when deleting this deployment.
     * Errors are truncated to 10 entries, see `delete_results` and `error_logs`
     * for full details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.config.v1.TerraformError tf_errors = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $tf_errors;
    /**
     * Output only. Location of Terraform error logs in Google Cloud Storage.
     * Format: `gs://{bucket}/{object}`.
     *
     * Generated from protobuf field <code>string error_logs = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error_logs = '';
    /**
     * Optional. User-defined location of Cloud Build logs and artifacts in Google
     * Cloud Storage. Format: `gs://{bucket}/{folder}`
     * A default bucket will be bootstrapped if the field is not set or empty.
     * Default bucket format: `gs://<project number>-<region>-blueprint-config`
     * Constraints:
     * - The bucket needs to be in the same project as the deployment
     * - The path cannot be within the path of `gcs_source`
     * - The field cannot be updated, including changing its presence
     *
     * Generated from protobuf field <code>optional string artifacts_gcs_bucket = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $artifacts_gcs_bucket = null;
    /**
     * Optional. User-specified Service Account (SA) credentials to be used when
     * actuating resources.
     * Format: `projects/{projectID}/serviceAccounts/{serviceAccount}`
     *
     * Generated from protobuf field <code>optional string service_account = 16 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $service_account = null;
    /**
     * By default, Infra Manager will return a failure when
     * Terraform encounters a 409 code (resource conflict error) during actuation.
     * If this flag is set to true, Infra Manager will instead
     * attempt to automatically import the resource into the Terraform state (for
     * supported resource types) and continue actuation.
     * Not all resource types are supported, refer to documentation.
     *
     * Generated from protobuf field <code>optional bool import_existing_resources = 17;</code>
     */
    protected $import_existing_resources = null;
    /**
     * Optional. The user-specified Cloud Build worker pool resource in which the
     * Cloud Build job will execute. Format:
     * `projects/{project}/locations/{location}/workerPools/{workerPoolId}`.
     * If this field is unspecified, the default Cloud Build worker pool will be
     * used.
     *
     * Generated from protobuf field <code>optional string worker_pool = 19 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $worker_pool = null;
    /**
     * Output only. Current lock state of the deployment.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment.LockState lock_state = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $lock_state = 0;
    /**
     * Optional. The user-specified Terraform version constraint.
     * Example: "=1.3.10".
     *
     * Generated from protobuf field <code>optional string tf_version_constraint = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $tf_version_constraint = null;
    /**
     * Output only. The current Terraform version set on the deployment.
     * It is in the format of "Major.Minor.Patch", for example, "1.3.10".
     *
     * Generated from protobuf field <code>string tf_version = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $tf_version = '';
    /**
     * Optional. Input to control quota checks for resources in terraform
     * configuration files. There are limited resources on which quota validation
     * applies.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.QuotaValidation quota_validation = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $quota_validation = 0;
    protected $blueprint;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Config\V1\TerraformBlueprint $terraform_blueprint
     *           A blueprint described using Terraform's HashiCorp Configuration Language
     *           as a root module.
     *     @type string $name
     *           Resource name of the deployment.
     *           Format: `projects/{project}/locations/{location}/deployments/{deployment}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the deployment was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when the deployment was last modified.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           User-defined metadata for the deployment.
     *     @type int $state
     *           Output only. Current state of the deployment.
     *     @type string $latest_revision
     *           Output only. Revision name that was most recently applied.
     *           Format: `projects/{project}/locations/{location}/deployments/{deployment}/
     *           revisions/{revision}`
     *     @type string $state_detail
     *           Output only. Additional information regarding the current state.
     *     @type int $error_code
     *           Output only. Error code describing errors that may have occurred.
     *     @type \Google\Cloud\Config\V1\ApplyResults $delete_results
     *           Output only. Location of artifacts from a DeleteDeployment operation.
     *     @type string $delete_build
     *           Output only. Cloud Build instance UUID associated with deleting this
     *           deployment.
     *     @type string $delete_logs
     *           Output only. Location of Cloud Build logs in Google Cloud Storage,
     *           populated when deleting this deployment. Format: `gs://{bucket}/{object}`.
     *     @type array<\Google\Cloud\Config\V1\TerraformError>|\Google\Protobuf\Internal\RepeatedField $tf_errors
     *           Output only. Errors encountered when deleting this deployment.
     *           Errors are truncated to 10 entries, see `delete_results` and `error_logs`
     *           for full details.
     *     @type string $error_logs
     *           Output only. Location of Terraform error logs in Google Cloud Storage.
     *           Format: `gs://{bucket}/{object}`.
     *     @type string $artifacts_gcs_bucket
     *           Optional. User-defined location of Cloud Build logs and artifacts in Google
     *           Cloud Storage. Format: `gs://{bucket}/{folder}`
     *           A default bucket will be bootstrapped if the field is not set or empty.
     *           Default bucket format: `gs://<project number>-<region>-blueprint-config`
     *           Constraints:
     *           - The bucket needs to be in the same project as the deployment
     *           - The path cannot be within the path of `gcs_source`
     *           - The field cannot be updated, including changing its presence
     *     @type string $service_account
     *           Optional. User-specified Service Account (SA) credentials to be used when
     *           actuating resources.
     *           Format: `projects/{projectID}/serviceAccounts/{serviceAccount}`
     *     @type bool $import_existing_resources
     *           By default, Infra Manager will return a failure when
     *           Terraform encounters a 409 code (resource conflict error) during actuation.
     *           If this flag is set to true, Infra Manager will instead
     *           attempt to automatically import the resource into the Terraform state (for
     *           supported resource types) and continue actuation.
     *           Not all resource types are supported, refer to documentation.
     *     @type string $worker_pool
     *           Optional. The user-specified Cloud Build worker pool resource in which the
     *           Cloud Build job will execute. Format:
     *           `projects/{project}/locations/{location}/workerPools/{workerPoolId}`.
     *           If this field is unspecified, the default Cloud Build worker pool will be
     *           used.
     *     @type int $lock_state
     *           Output only. Current lock state of the deployment.
     *     @type string $tf_version_constraint
     *           Optional. The user-specified Terraform version constraint.
     *           Example: "=1.3.10".
     *     @type string $tf_version
     *           Output only. The current Terraform version set on the deployment.
     *           It is in the format of "Major.Minor.Patch", for example, "1.3.10".
     *     @type int $quota_validation
     *           Optional. Input to control quota checks for resources in terraform
     *           configuration files. There are limited resources on which quota validation
     *           applies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * A blueprint described using Terraform's HashiCorp Configuration Language
     * as a root module.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.TerraformBlueprint terraform_blueprint = 6;</code>
     * @return \Google\Cloud\Config\V1\TerraformBlueprint|null
     */
    public function getTerraformBlueprint()
    {
        return $this->readOneof(6);
    }

    public function hasTerraformBlueprint()
    {
        return $this->hasOneof(6);
    }

    /**
     * A blueprint described using Terraform's HashiCorp Configuration Language
     * as a root module.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.TerraformBlueprint terraform_blueprint = 6;</code>
     * @param \Google\Cloud\Config\V1\TerraformBlueprint $var
     * @return $this
     */
    public function setTerraformBlueprint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Config\V1\TerraformBlueprint::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Resource name of the deployment.
     * Format: `projects/{project}/locations/{location}/deployments/{deployment}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the deployment.
     * Format: `projects/{project}/locations/{location}/deployments/{deployment}`
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
     * Output only. Time when the deployment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
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
     * Output only. Time when the deployment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the deployment was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when the deployment was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * User-defined metadata for the deployment.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * User-defined metadata for the deployment.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
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
     * Output only. Current state of the deployment.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the deployment.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\Deployment\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Revision name that was most recently applied.
     * Format: `projects/{project}/locations/{location}/deployments/{deployment}/
     * revisions/{revision}`
     *
     * Generated from protobuf field <code>string latest_revision = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLatestRevision()
    {
        return $this->latest_revision;
    }

    /**
     * Output only. Revision name that was most recently applied.
     * Format: `projects/{project}/locations/{location}/deployments/{deployment}/
     * revisions/{revision}`
     *
     * Generated from protobuf field <code>string latest_revision = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLatestRevision($var)
    {
        GPBUtil::checkString($var, True);
        $this->latest_revision = $var;

        return $this;
    }

    /**
     * Output only. Additional information regarding the current state.
     *
     * Generated from protobuf field <code>string state_detail = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateDetail()
    {
        return $this->state_detail;
    }

    /**
     * Output only. Additional information regarding the current state.
     *
     * Generated from protobuf field <code>string state_detail = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_detail = $var;

        return $this;
    }

    /**
     * Output only. Error code describing errors that may have occurred.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment.ErrorCode error_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * Output only. Error code describing errors that may have occurred.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment.ErrorCode error_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\Deployment\ErrorCode::class);
        $this->error_code = $var;

        return $this;
    }

    /**
     * Output only. Location of artifacts from a DeleteDeployment operation.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.ApplyResults delete_results = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Config\V1\ApplyResults|null
     */
    public function getDeleteResults()
    {
        return $this->delete_results;
    }

    public function hasDeleteResults()
    {
        return isset($this->delete_results);
    }

    public function clearDeleteResults()
    {
        unset($this->delete_results);
    }

    /**
     * Output only. Location of artifacts from a DeleteDeployment operation.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.ApplyResults delete_results = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Config\V1\ApplyResults $var
     * @return $this
     */
    public function setDeleteResults($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Config\V1\ApplyResults::class);
        $this->delete_results = $var;

        return $this;
    }

    /**
     * Output only. Cloud Build instance UUID associated with deleting this
     * deployment.
     *
     * Generated from protobuf field <code>string delete_build = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDeleteBuild()
    {
        return $this->delete_build;
    }

    /**
     * Output only. Cloud Build instance UUID associated with deleting this
     * deployment.
     *
     * Generated from protobuf field <code>string delete_build = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDeleteBuild($var)
    {
        GPBUtil::checkString($var, True);
        $this->delete_build = $var;

        return $this;
    }

    /**
     * Output only. Location of Cloud Build logs in Google Cloud Storage,
     * populated when deleting this deployment. Format: `gs://{bucket}/{object}`.
     *
     * Generated from protobuf field <code>string delete_logs = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDeleteLogs()
    {
        return $this->delete_logs;
    }

    /**
     * Output only. Location of Cloud Build logs in Google Cloud Storage,
     * populated when deleting this deployment. Format: `gs://{bucket}/{object}`.
     *
     * Generated from protobuf field <code>string delete_logs = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDeleteLogs($var)
    {
        GPBUtil::checkString($var, True);
        $this->delete_logs = $var;

        return $this;
    }

    /**
     * Output only. Errors encountered when deleting this deployment.
     * Errors are truncated to 10 entries, see `delete_results` and `error_logs`
     * for full details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.config.v1.TerraformError tf_errors = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTfErrors()
    {
        return $this->tf_errors;
    }

    /**
     * Output only. Errors encountered when deleting this deployment.
     * Errors are truncated to 10 entries, see `delete_results` and `error_logs`
     * for full details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.config.v1.TerraformError tf_errors = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Config\V1\TerraformError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTfErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Config\V1\TerraformError::class);
        $this->tf_errors = $arr;

        return $this;
    }

    /**
     * Output only. Location of Terraform error logs in Google Cloud Storage.
     * Format: `gs://{bucket}/{object}`.
     *
     * Generated from protobuf field <code>string error_logs = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getErrorLogs()
    {
        return $this->error_logs;
    }

    /**
     * Output only. Location of Terraform error logs in Google Cloud Storage.
     * Format: `gs://{bucket}/{object}`.
     *
     * Generated from protobuf field <code>string error_logs = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setErrorLogs($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_logs = $var;

        return $this;
    }

    /**
     * Optional. User-defined location of Cloud Build logs and artifacts in Google
     * Cloud Storage. Format: `gs://{bucket}/{folder}`
     * A default bucket will be bootstrapped if the field is not set or empty.
     * Default bucket format: `gs://<project number>-<region>-blueprint-config`
     * Constraints:
     * - The bucket needs to be in the same project as the deployment
     * - The path cannot be within the path of `gcs_source`
     * - The field cannot be updated, including changing its presence
     *
     * Generated from protobuf field <code>optional string artifacts_gcs_bucket = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getArtifactsGcsBucket()
    {
        return isset($this->artifacts_gcs_bucket) ? $this->artifacts_gcs_bucket : '';
    }

    public function hasArtifactsGcsBucket()
    {
        return isset($this->artifacts_gcs_bucket);
    }

    public function clearArtifactsGcsBucket()
    {
        unset($this->artifacts_gcs_bucket);
    }

    /**
     * Optional. User-defined location of Cloud Build logs and artifacts in Google
     * Cloud Storage. Format: `gs://{bucket}/{folder}`
     * A default bucket will be bootstrapped if the field is not set or empty.
     * Default bucket format: `gs://<project number>-<region>-blueprint-config`
     * Constraints:
     * - The bucket needs to be in the same project as the deployment
     * - The path cannot be within the path of `gcs_source`
     * - The field cannot be updated, including changing its presence
     *
     * Generated from protobuf field <code>optional string artifacts_gcs_bucket = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactsGcsBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifacts_gcs_bucket = $var;

        return $this;
    }

    /**
     * Optional. User-specified Service Account (SA) credentials to be used when
     * actuating resources.
     * Format: `projects/{projectID}/serviceAccounts/{serviceAccount}`
     *
     * Generated from protobuf field <code>optional string service_account = 16 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return isset($this->service_account) ? $this->service_account : '';
    }

    public function hasServiceAccount()
    {
        return isset($this->service_account);
    }

    public function clearServiceAccount()
    {
        unset($this->service_account);
    }

    /**
     * Optional. User-specified Service Account (SA) credentials to be used when
     * actuating resources.
     * Format: `projects/{projectID}/serviceAccounts/{serviceAccount}`
     *
     * Generated from protobuf field <code>optional string service_account = 16 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * By default, Infra Manager will return a failure when
     * Terraform encounters a 409 code (resource conflict error) during actuation.
     * If this flag is set to true, Infra Manager will instead
     * attempt to automatically import the resource into the Terraform state (for
     * supported resource types) and continue actuation.
     * Not all resource types are supported, refer to documentation.
     *
     * Generated from protobuf field <code>optional bool import_existing_resources = 17;</code>
     * @return bool
     */
    public function getImportExistingResources()
    {
        return isset($this->import_existing_resources) ? $this->import_existing_resources : false;
    }

    public function hasImportExistingResources()
    {
        return isset($this->import_existing_resources);
    }

    public function clearImportExistingResources()
    {
        unset($this->import_existing_resources);
    }

    /**
     * By default, Infra Manager will return a failure when
     * Terraform encounters a 409 code (resource conflict error) during actuation.
     * If this flag is set to true, Infra Manager will instead
     * attempt to automatically import the resource into the Terraform state (for
     * supported resource types) and continue actuation.
     * Not all resource types are supported, refer to documentation.
     *
     * Generated from protobuf field <code>optional bool import_existing_resources = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setImportExistingResources($var)
    {
        GPBUtil::checkBool($var);
        $this->import_existing_resources = $var;

        return $this;
    }

    /**
     * Optional. The user-specified Cloud Build worker pool resource in which the
     * Cloud Build job will execute. Format:
     * `projects/{project}/locations/{location}/workerPools/{workerPoolId}`.
     * If this field is unspecified, the default Cloud Build worker pool will be
     * used.
     *
     * Generated from protobuf field <code>optional string worker_pool = 19 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWorkerPool()
    {
        return isset($this->worker_pool) ? $this->worker_pool : '';
    }

    public function hasWorkerPool()
    {
        return isset($this->worker_pool);
    }

    public function clearWorkerPool()
    {
        unset($this->worker_pool);
    }

    /**
     * Optional. The user-specified Cloud Build worker pool resource in which the
     * Cloud Build job will execute. Format:
     * `projects/{project}/locations/{location}/workerPools/{workerPoolId}`.
     * If this field is unspecified, the default Cloud Build worker pool will be
     * used.
     *
     * Generated from protobuf field <code>optional string worker_pool = 19 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerPool($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_pool = $var;

        return $this;
    }

    /**
     * Output only. Current lock state of the deployment.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment.LockState lock_state = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLockState()
    {
        return $this->lock_state;
    }

    /**
     * Output only. Current lock state of the deployment.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment.LockState lock_state = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLockState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\Deployment\LockState::class);
        $this->lock_state = $var;

        return $this;
    }

    /**
     * Optional. The user-specified Terraform version constraint.
     * Example: "=1.3.10".
     *
     * Generated from protobuf field <code>optional string tf_version_constraint = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTfVersionConstraint()
    {
        return isset($this->tf_version_constraint) ? $this->tf_version_constraint : '';
    }

    public function hasTfVersionConstraint()
    {
        return isset($this->tf_version_constraint);
    }

    public function clearTfVersionConstraint()
    {
        unset($this->tf_version_constraint);
    }

    /**
     * Optional. The user-specified Terraform version constraint.
     * Example: "=1.3.10".
     *
     * Generated from protobuf field <code>optional string tf_version_constraint = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTfVersionConstraint($var)
    {
        GPBUtil::checkString($var, True);
        $this->tf_version_constraint = $var;

        return $this;
    }

    /**
     * Output only. The current Terraform version set on the deployment.
     * It is in the format of "Major.Minor.Patch", for example, "1.3.10".
     *
     * Generated from protobuf field <code>string tf_version = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTfVersion()
    {
        return $this->tf_version;
    }

    /**
     * Output only. The current Terraform version set on the deployment.
     * It is in the format of "Major.Minor.Patch", for example, "1.3.10".
     *
     * Generated from protobuf field <code>string tf_version = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTfVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->tf_version = $var;

        return $this;
    }

    /**
     * Optional. Input to control quota checks for resources in terraform
     * configuration files. There are limited resources on which quota validation
     * applies.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.QuotaValidation quota_validation = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getQuotaValidation()
    {
        return $this->quota_validation;
    }

    /**
     * Optional. Input to control quota checks for resources in terraform
     * configuration files. There are limited resources on which quota validation
     * applies.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.QuotaValidation quota_validation = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setQuotaValidation($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\QuotaValidation::class);
        $this->quota_validation = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getBlueprint()
    {
        return $this->whichOneof("blueprint");
    }

}

