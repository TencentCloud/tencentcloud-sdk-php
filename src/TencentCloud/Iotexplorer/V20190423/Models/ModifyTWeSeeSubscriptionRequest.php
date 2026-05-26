<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTWeSeeSubscription请求参数结构体
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getServiceType() 获取算法类型。可选值：

- `VID_COMP`：视频理解
 * @method void setServiceType(string $ServiceType) 设置算法类型。可选值：

- `VID_COMP`：视频理解
 * @method integer getChannelId() 获取通道 ID
 * @method void setChannelId(integer $ChannelId) 设置通道 ID
 * @method boolean getEnabled() 获取功能开关。`true` 为开启，`false` 为关闭；不传表示不修改
 * @method void setEnabled(boolean $Enabled) 设置功能开关。`true` 为开启，`false` 为关闭；不传表示不修改
 * @method SeeComprehensionConfig getComprehensionConfig() 获取视觉理解配置（适用于视频理解、图片理解），不传则不修改
 * @method void setComprehensionConfig(SeeComprehensionConfig $ComprehensionConfig) 设置视觉理解配置（适用于视频理解、图片理解），不传则不修改
 * @method SeeCompHighlightConfig getCompHighlightConfig() 获取视频语义浓缩配置（适用于视频语义浓缩），不传则不修改
 * @method void setCompHighlightConfig(SeeCompHighlightConfig $CompHighlightConfig) 设置视频语义浓缩配置（适用于视频语义浓缩），不传则不修改
 * @method SeeEventIdFilterConfig getEventIdFilterConfig() 获取云存事件 ID 过滤规则配置，不传则不修改
 * @method void setEventIdFilterConfig(SeeEventIdFilterConfig $EventIdFilterConfig) 设置云存事件 ID 过滤规则配置，不传则不修改
 */
class ModifyTWeSeeSubscriptionRequest extends AbstractModel
{
    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 算法类型。可选值：

- `VID_COMP`：视频理解
     */
    public $ServiceType;

    /**
     * @var integer 通道 ID
     */
    public $ChannelId;

    /**
     * @var boolean 功能开关。`true` 为开启，`false` 为关闭；不传表示不修改
     */
    public $Enabled;

    /**
     * @var SeeComprehensionConfig 视觉理解配置（适用于视频理解、图片理解），不传则不修改
     */
    public $ComprehensionConfig;

    /**
     * @var SeeCompHighlightConfig 视频语义浓缩配置（适用于视频语义浓缩），不传则不修改
     */
    public $CompHighlightConfig;

    /**
     * @var SeeEventIdFilterConfig 云存事件 ID 过滤规则配置，不传则不修改
     */
    public $EventIdFilterConfig;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param string $ServiceType 算法类型。可选值：

- `VID_COMP`：视频理解
     * @param integer $ChannelId 通道 ID
     * @param boolean $Enabled 功能开关。`true` 为开启，`false` 为关闭；不传表示不修改
     * @param SeeComprehensionConfig $ComprehensionConfig 视觉理解配置（适用于视频理解、图片理解），不传则不修改
     * @param SeeCompHighlightConfig $CompHighlightConfig 视频语义浓缩配置（适用于视频语义浓缩），不传则不修改
     * @param SeeEventIdFilterConfig $EventIdFilterConfig 云存事件 ID 过滤规则配置，不传则不修改
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ComprehensionConfig",$param) and $param["ComprehensionConfig"] !== null) {
            $this->ComprehensionConfig = new SeeComprehensionConfig();
            $this->ComprehensionConfig->deserialize($param["ComprehensionConfig"]);
        }

        if (array_key_exists("CompHighlightConfig",$param) and $param["CompHighlightConfig"] !== null) {
            $this->CompHighlightConfig = new SeeCompHighlightConfig();
            $this->CompHighlightConfig->deserialize($param["CompHighlightConfig"]);
        }

        if (array_key_exists("EventIdFilterConfig",$param) and $param["EventIdFilterConfig"] !== null) {
            $this->EventIdFilterConfig = new SeeEventIdFilterConfig();
            $this->EventIdFilterConfig->deserialize($param["EventIdFilterConfig"]);
        }
    }
}
