<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/ad_group_extension_setting_service.proto

namespace Google\Ads\GoogleAds\V9\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create, update, remove) on an ad group extension setting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.services.AdGroupExtensionSettingOperation</code>
 */
class AdGroupExtensionSettingOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     */
    protected $update_mask = null;
    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned post mutation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 5;</code>
     */
    protected $response_content_type = 0;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           FieldMask that determines which resource fields are modified in an update.
     *     @type int $response_content_type
     *           The response content type setting. Determines whether the mutable resource
     *           or just the resource name should be returned post mutation.
     *     @type \Google\Ads\GoogleAds\V9\Resources\AdGroupExtensionSetting $create
     *           Create operation: No resource name is expected for the new ad group
     *           extension setting.
     *     @type \Google\Ads\GoogleAds\V9\Resources\AdGroupExtensionSetting $update
     *           Update operation: The ad group extension setting is expected to have a
     *           valid resource name.
     *     @type string $remove
     *           Remove operation: A resource name for the removed ad group extension
     *           setting is expected, in this format:
     *           `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Services\AdGroupExtensionSettingService::initOnce();
        parent::__construct($data);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned post mutation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 5;</code>
     * @return int
     */
    public function getResponseContentType()
    {
        return $this->response_content_type;
    }

    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned post mutation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseContentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\ResponseContentTypeEnum\ResponseContentType::class);
        $this->response_content_type = $var;

        return $this;
    }

    /**
     * Create operation: No resource name is expected for the new ad group
     * extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.resources.AdGroupExtensionSetting create = 1;</code>
     * @return \Google\Ads\GoogleAds\V9\Resources\AdGroupExtensionSetting|null
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    public function hasCreate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new ad group
     * extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.resources.AdGroupExtensionSetting create = 1;</code>
     * @param \Google\Ads\GoogleAds\V9\Resources\AdGroupExtensionSetting $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Resources\AdGroupExtensionSetting::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Update operation: The ad group extension setting is expected to have a
     * valid resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.resources.AdGroupExtensionSetting update = 2;</code>
     * @return \Google\Ads\GoogleAds\V9\Resources\AdGroupExtensionSetting|null
     */
    public function getUpdate()
    {
        return $this->readOneof(2);
    }

    public function hasUpdate()
    {
        return $this->hasOneof(2);
    }

    /**
     * Update operation: The ad group extension setting is expected to have a
     * valid resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.resources.AdGroupExtensionSetting update = 2;</code>
     * @param \Google\Ads\GoogleAds\V9\Resources\AdGroupExtensionSetting $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Resources\AdGroupExtensionSetting::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed ad group extension
     * setting is expected, in this format:
     * `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string remove = 3;</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(3);
    }

    public function hasRemove()
    {
        return $this->hasOneof(3);
    }

    /**
     * Remove operation: A resource name for the removed ad group extension
     * setting is expected, in this format:
     * `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string remove = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

