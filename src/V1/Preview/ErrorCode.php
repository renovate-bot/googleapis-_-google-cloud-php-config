<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1\Preview;

use UnexpectedValueException;

/**
 * Possible errors that can occur with previews.
 *
 * Protobuf type <code>google.cloud.config.v1.Preview.ErrorCode</code>
 */
class ErrorCode
{
    /**
     * No error code was specified.
     *
     * Generated from protobuf enum <code>ERROR_CODE_UNSPECIFIED = 0;</code>
     */
    const ERROR_CODE_UNSPECIFIED = 0;
    /**
     * Cloud Build failed due to a permissions issue.
     *
     * Generated from protobuf enum <code>CLOUD_BUILD_PERMISSION_DENIED = 1;</code>
     */
    const CLOUD_BUILD_PERMISSION_DENIED = 1;
    /**
     * Cloud Storage bucket failed to create due to a permissions issue.
     *
     * Generated from protobuf enum <code>BUCKET_CREATION_PERMISSION_DENIED = 2;</code>
     */
    const BUCKET_CREATION_PERMISSION_DENIED = 2;
    /**
     * Cloud Storage bucket failed for a non-permissions-related issue.
     *
     * Generated from protobuf enum <code>BUCKET_CREATION_FAILED = 3;</code>
     */
    const BUCKET_CREATION_FAILED = 3;
    /**
     * Acquiring lock on provided deployment reference failed.
     *
     * Generated from protobuf enum <code>DEPLOYMENT_LOCK_ACQUIRE_FAILED = 4;</code>
     */
    const DEPLOYMENT_LOCK_ACQUIRE_FAILED = 4;
    /**
     * Preview encountered an error when trying to access Cloud Build API.
     *
     * Generated from protobuf enum <code>PREVIEW_BUILD_API_FAILED = 5;</code>
     */
    const PREVIEW_BUILD_API_FAILED = 5;
    /**
     * Preview created a build but build failed and logs were generated.
     *
     * Generated from protobuf enum <code>PREVIEW_BUILD_RUN_FAILED = 6;</code>
     */
    const PREVIEW_BUILD_RUN_FAILED = 6;

    private static $valueToName = [
        self::ERROR_CODE_UNSPECIFIED => 'ERROR_CODE_UNSPECIFIED',
        self::CLOUD_BUILD_PERMISSION_DENIED => 'CLOUD_BUILD_PERMISSION_DENIED',
        self::BUCKET_CREATION_PERMISSION_DENIED => 'BUCKET_CREATION_PERMISSION_DENIED',
        self::BUCKET_CREATION_FAILED => 'BUCKET_CREATION_FAILED',
        self::DEPLOYMENT_LOCK_ACQUIRE_FAILED => 'DEPLOYMENT_LOCK_ACQUIRE_FAILED',
        self::PREVIEW_BUILD_API_FAILED => 'PREVIEW_BUILD_API_FAILED',
        self::PREVIEW_BUILD_RUN_FAILED => 'PREVIEW_BUILD_RUN_FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

