<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list all previews for a given project and location.
 *
 * Generated from protobuf message <code>google.cloud.config.v1.ListPreviewsRequest</code>
 */
class ListPreviewsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent in whose context the Previews are listed. The parent
     * value is in the format: 'projects/{project_id}/locations/{location}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. When requesting a page of resources, 'page_size' specifies number
     * of resources to return. If unspecified, at most 500 will be returned. The
     * maximum value is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Token returned by previous call to 'ListDeployments' which
     * specifies the position in the list from where to continue listing the
     * resources.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Lists the Deployments that match the filter expression. A filter
     * expression filters the resources listed in the response. The expression
     * must be of the form '{field} {operator} {value}' where operators: '<', '>',
     * '<=', '>=', '!=', '=', ':' are supported (colon ':' represents a HAS
     * operator which is roughly synonymous with equality). {field} can refer to a
     * proto or JSON field, or a synthetic field. Field names can be camelCase or
     * snake_case.
     * Examples:
     * - Filter by name:
     *   name = "projects/foo/locations/us-central1/deployments/bar
     * - Filter by labels:
     *   - Resources that have a key called 'foo'
     *     labels.foo:*
     *   - Resources that have a key called 'foo' whose value is 'bar'
     *     labels.foo = bar
     * - Filter by state:
     *   - Deployments in CREATING state.
     *     state=CREATING
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. Field to use to sort the list.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The parent in whose context the Previews are listed. The parent
     *                       value is in the format: 'projects/{project_id}/locations/{location}'. Please see
     *                       {@see ConfigClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Config\V1\ListPreviewsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent in whose context the Previews are listed. The parent
     *           value is in the format: 'projects/{project_id}/locations/{location}'.
     *     @type int $page_size
     *           Optional. When requesting a page of resources, 'page_size' specifies number
     *           of resources to return. If unspecified, at most 500 will be returned. The
     *           maximum value is 1000.
     *     @type string $page_token
     *           Optional. Token returned by previous call to 'ListDeployments' which
     *           specifies the position in the list from where to continue listing the
     *           resources.
     *     @type string $filter
     *           Optional. Lists the Deployments that match the filter expression. A filter
     *           expression filters the resources listed in the response. The expression
     *           must be of the form '{field} {operator} {value}' where operators: '<', '>',
     *           '<=', '>=', '!=', '=', ':' are supported (colon ':' represents a HAS
     *           operator which is roughly synonymous with equality). {field} can refer to a
     *           proto or JSON field, or a synthetic field. Field names can be camelCase or
     *           snake_case.
     *           Examples:
     *           - Filter by name:
     *             name = "projects/foo/locations/us-central1/deployments/bar
     *           - Filter by labels:
     *             - Resources that have a key called 'foo'
     *               labels.foo:*
     *             - Resources that have a key called 'foo' whose value is 'bar'
     *               labels.foo = bar
     *           - Filter by state:
     *             - Deployments in CREATING state.
     *               state=CREATING
     *     @type string $order_by
     *           Optional. Field to use to sort the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent in whose context the Previews are listed. The parent
     * value is in the format: 'projects/{project_id}/locations/{location}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent in whose context the Previews are listed. The parent
     * value is in the format: 'projects/{project_id}/locations/{location}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. When requesting a page of resources, 'page_size' specifies number
     * of resources to return. If unspecified, at most 500 will be returned. The
     * maximum value is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. When requesting a page of resources, 'page_size' specifies number
     * of resources to return. If unspecified, at most 500 will be returned. The
     * maximum value is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. Token returned by previous call to 'ListDeployments' which
     * specifies the position in the list from where to continue listing the
     * resources.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Token returned by previous call to 'ListDeployments' which
     * specifies the position in the list from where to continue listing the
     * resources.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Lists the Deployments that match the filter expression. A filter
     * expression filters the resources listed in the response. The expression
     * must be of the form '{field} {operator} {value}' where operators: '<', '>',
     * '<=', '>=', '!=', '=', ':' are supported (colon ':' represents a HAS
     * operator which is roughly synonymous with equality). {field} can refer to a
     * proto or JSON field, or a synthetic field. Field names can be camelCase or
     * snake_case.
     * Examples:
     * - Filter by name:
     *   name = "projects/foo/locations/us-central1/deployments/bar
     * - Filter by labels:
     *   - Resources that have a key called 'foo'
     *     labels.foo:*
     *   - Resources that have a key called 'foo' whose value is 'bar'
     *     labels.foo = bar
     * - Filter by state:
     *   - Deployments in CREATING state.
     *     state=CREATING
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Lists the Deployments that match the filter expression. A filter
     * expression filters the resources listed in the response. The expression
     * must be of the form '{field} {operator} {value}' where operators: '<', '>',
     * '<=', '>=', '!=', '=', ':' are supported (colon ':' represents a HAS
     * operator which is roughly synonymous with equality). {field} can refer to a
     * proto or JSON field, or a synthetic field. Field names can be camelCase or
     * snake_case.
     * Examples:
     * - Filter by name:
     *   name = "projects/foo/locations/us-central1/deployments/bar
     * - Filter by labels:
     *   - Resources that have a key called 'foo'
     *     labels.foo:*
     *   - Resources that have a key called 'foo' whose value is 'bar'
     *     labels.foo = bar
     * - Filter by state:
     *   - Deployments in CREATING state.
     *     state=CREATING
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Field to use to sort the list.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Field to use to sort the list.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

