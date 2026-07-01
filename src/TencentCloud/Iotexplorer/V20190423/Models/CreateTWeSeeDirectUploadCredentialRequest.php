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
 * CreateTWeSeeDirectUploadCredential请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p><p>非 IoT 设备可传 <code>default</code></p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p><p>非 IoT 设备可传 <code>default</code></p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getServiceType() 获取<p>算法类型</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解（支持视频文件或多帧图片）</li><li>IMG_COMP： 图片理解（单帧图片）</li></ul>
 * @method void setServiceType(string $ServiceType) 设置<p>算法类型</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解（支持视频文件或多帧图片）</li><li>IMG_COMP： 图片理解（单帧图片）</li></ul>
 * @method integer getChannelId() 获取<p>通道 ID</p><p>默认值：0</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道 ID</p><p>默认值：0</p>
 * @method string getCallbackId() 获取<p>回调目标 ID</p>
 * @method void setCallbackId(string $CallbackId) 设置<p>回调目标 ID</p>
 * @method SeeComprehensionConfig getComprehensionConfig() 获取<p>视觉理解配置项</p>
 * @method void setComprehensionConfig(SeeComprehensionConfig $ComprehensionConfig) 设置<p>视觉理解配置项</p>
 * @method string getCustomId() 获取<p>自定义事件 ID，会透传到任务元数据与回调中</p>
 * @method void setCustomId(string $CustomId) 设置<p>自定义事件 ID，会透传到任务元数据与回调中</p>
 * @method integer getDurationSeconds() 获取<p>临时密钥有效期，单位：秒。默认 300 秒，取值范围 5 到 86400。</p>
 * @method void setDurationSeconds(integer $DurationSeconds) 设置<p>临时密钥有效期，单位：秒。默认 300 秒，取值范围 5 到 86400。</p>
 * @method integer getMaxInvokeCount() 获取<p>该直传凭据最多可触发的分析次数</p><p>取值范围：[1, 10000]</p><p>默认值：1</p>
 * @method void setMaxInvokeCount(integer $MaxInvokeCount) 设置<p>该直传凭据最多可触发的分析次数</p><p>取值范围：[1, 10000]</p><p>默认值：1</p>
 * @method string getStorageRegion() 获取<p>上传 COS 存储桶所在地域。不填时使用默认地域。</p>
 * @method void setStorageRegion(string $StorageRegion) 设置<p>上传 COS 存储桶所在地域。不填时使用默认地域。</p>
 * @method string getUploadMethod() 获取<p>上传方式</p><p>枚举值：</p><ul><li>single： 单文件上传</li><li>manifest： 上传源文件与 Manifest（先上传多个源文件，然后上传 Manifest JSON 触发分析）</li></ul><p>默认值：single</p>
 * @method void setUploadMethod(string $UploadMethod) 设置<p>上传方式</p><p>枚举值：</p><ul><li>single： 单文件上传</li><li>manifest： 上传源文件与 Manifest（先上传多个源文件，然后上传 Manifest JSON 触发分析）</li></ul><p>默认值：single</p>
 */
class CreateTWeSeeDirectUploadCredentialRequest extends AbstractModel
{
    /**
     * @var string <p>产品 ID</p><p>非 IoT 设备可传 <code>default</code></p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>算法类型</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解（支持视频文件或多帧图片）</li><li>IMG_COMP： 图片理解（单帧图片）</li></ul>
     */
    public $ServiceType;

    /**
     * @var integer <p>通道 ID</p><p>默认值：0</p>
     */
    public $ChannelId;

    /**
     * @var string <p>回调目标 ID</p>
     */
    public $CallbackId;

    /**
     * @var SeeComprehensionConfig <p>视觉理解配置项</p>
     */
    public $ComprehensionConfig;

    /**
     * @var string <p>自定义事件 ID，会透传到任务元数据与回调中</p>
     */
    public $CustomId;

    /**
     * @var integer <p>临时密钥有效期，单位：秒。默认 300 秒，取值范围 5 到 86400。</p>
     */
    public $DurationSeconds;

    /**
     * @var integer <p>该直传凭据最多可触发的分析次数</p><p>取值范围：[1, 10000]</p><p>默认值：1</p>
     */
    public $MaxInvokeCount;

    /**
     * @var string <p>上传 COS 存储桶所在地域。不填时使用默认地域。</p>
     */
    public $StorageRegion;

    /**
     * @var string <p>上传方式</p><p>枚举值：</p><ul><li>single： 单文件上传</li><li>manifest： 上传源文件与 Manifest（先上传多个源文件，然后上传 Manifest JSON 触发分析）</li></ul><p>默认值：single</p>
     */
    public $UploadMethod;

    /**
     * @param string $ProductId <p>产品 ID</p><p>非 IoT 设备可传 <code>default</code></p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $ServiceType <p>算法类型</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解（支持视频文件或多帧图片）</li><li>IMG_COMP： 图片理解（单帧图片）</li></ul>
     * @param integer $ChannelId <p>通道 ID</p><p>默认值：0</p>
     * @param string $CallbackId <p>回调目标 ID</p>
     * @param SeeComprehensionConfig $ComprehensionConfig <p>视觉理解配置项</p>
     * @param string $CustomId <p>自定义事件 ID，会透传到任务元数据与回调中</p>
     * @param integer $DurationSeconds <p>临时密钥有效期，单位：秒。默认 300 秒，取值范围 5 到 86400。</p>
     * @param integer $MaxInvokeCount <p>该直传凭据最多可触发的分析次数</p><p>取值范围：[1, 10000]</p><p>默认值：1</p>
     * @param string $StorageRegion <p>上传 COS 存储桶所在地域。不填时使用默认地域。</p>
     * @param string $UploadMethod <p>上传方式</p><p>枚举值：</p><ul><li>single： 单文件上传</li><li>manifest： 上传源文件与 Manifest（先上传多个源文件，然后上传 Manifest JSON 触发分析）</li></ul><p>默认值：single</p>
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

        if (array_key_exists("CallbackId",$param) and $param["CallbackId"] !== null) {
            $this->CallbackId = $param["CallbackId"];
        }

        if (array_key_exists("ComprehensionConfig",$param) and $param["ComprehensionConfig"] !== null) {
            $this->ComprehensionConfig = new SeeComprehensionConfig();
            $this->ComprehensionConfig->deserialize($param["ComprehensionConfig"]);
        }

        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }

        if (array_key_exists("MaxInvokeCount",$param) and $param["MaxInvokeCount"] !== null) {
            $this->MaxInvokeCount = $param["MaxInvokeCount"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("UploadMethod",$param) and $param["UploadMethod"] !== null) {
            $this->UploadMethod = $param["UploadMethod"];
        }
    }
}
