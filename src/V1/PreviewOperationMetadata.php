<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Ephemeral metadata content describing the state of a preview operation.
 *
 * Generated from protobuf message <code>google.cloud.config.v1.PreviewOperationMetadata</code>
 */
class PreviewOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The current step the preview operation is running.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.PreviewOperationMetadata.PreviewStep step = 1;</code>
     */
    protected $step = 0;
    /**
     * Artifacts from preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.PreviewArtifacts preview_artifacts = 2;</code>
     */
    protected $preview_artifacts = null;
    /**
     * Output only. Location of preview logs in `gs://{bucket}/{object}` format.
     *
     * Generated from protobuf field <code>string logs = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $logs = '';
    /**
     * Output only. Cloud Build instance UUID associated with this preview.
     *
     * Generated from protobuf field <code>string build = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $build = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $step
     *           The current step the preview operation is running.
     *     @type \Google\Cloud\Config\V1\PreviewArtifacts $preview_artifacts
     *           Artifacts from preview.
     *     @type string $logs
     *           Output only. Location of preview logs in `gs://{bucket}/{object}` format.
     *     @type string $build
     *           Output only. Cloud Build instance UUID associated with this preview.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * The current step the preview operation is running.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.PreviewOperationMetadata.PreviewStep step = 1;</code>
     * @return int
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * The current step the preview operation is running.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.PreviewOperationMetadata.PreviewStep step = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStep($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\PreviewOperationMetadata\PreviewStep::class);
        $this->step = $var;

        return $this;
    }

    /**
     * Artifacts from preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.PreviewArtifacts preview_artifacts = 2;</code>
     * @return \Google\Cloud\Config\V1\PreviewArtifacts|null
     */
    public function getPreviewArtifacts()
    {
        return $this->preview_artifacts;
    }

    public function hasPreviewArtifacts()
    {
        return isset($this->preview_artifacts);
    }

    public function clearPreviewArtifacts()
    {
        unset($this->preview_artifacts);
    }

    /**
     * Artifacts from preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.PreviewArtifacts preview_artifacts = 2;</code>
     * @param \Google\Cloud\Config\V1\PreviewArtifacts $var
     * @return $this
     */
    public function setPreviewArtifacts($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Config\V1\PreviewArtifacts::class);
        $this->preview_artifacts = $var;

        return $this;
    }

    /**
     * Output only. Location of preview logs in `gs://{bucket}/{object}` format.
     *
     * Generated from protobuf field <code>string logs = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Output only. Location of preview logs in `gs://{bucket}/{object}` format.
     *
     * Generated from protobuf field <code>string logs = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLogs($var)
    {
        GPBUtil::checkString($var, True);
        $this->logs = $var;

        return $this;
    }

    /**
     * Output only. Cloud Build instance UUID associated with this preview.
     *
     * Generated from protobuf field <code>string build = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Output only. Cloud Build instance UUID associated with this preview.
     *
     * Generated from protobuf field <code>string build = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setBuild($var)
    {
        GPBUtil::checkString($var, True);
        $this->build = $var;

        return $this;
    }

}
