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
 * InvokeTWeSeeComprehension请求参数结构体
 *
 * @method string getInputURL() 获取<p>输入视频 / 图片的 URL</p>
 * @method void setInputURL(string $InputURL) 设置<p>输入视频 / 图片的 URL</p>
 * @method string getServiceType() 获取<p>算法类型。可选值：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li></ul>
 * @method void setServiceType(string $ServiceType) 设置<p>算法类型。可选值：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li></ul>
 * @method SeeTaskMetadata getMetadata() 获取<p>任务元数据</p>
 * @method void setMetadata(SeeTaskMetadata $Metadata) 设置<p>任务元数据</p>
 * @method SeeComprehensionConfig getComprehensionConfig() 获取<p>视觉理解配置项</p>
 * @method void setComprehensionConfig(SeeComprehensionConfig $ComprehensionConfig) 设置<p>视觉理解配置项</p>
 * @method integer getWaitResultTimeout() 获取<p>等待结果的超时时间（单位：秒）。填 0 表示无需等待结果。最大超时时长 25 秒，默认超时时长 20 秒。</p>
 * @method void setWaitResultTimeout(integer $WaitResultTimeout) 设置<p>等待结果的超时时间（单位：秒）。填 0 表示无需等待结果。最大超时时长 25 秒，默认超时时长 20 秒。</p>
 * @method string getCallbackId() 获取<p>回调目标 ID</p>
 * @method void setCallbackId(string $CallbackId) 设置<p>回调目标 ID</p>
 */
class InvokeTWeSeeComprehensionRequest extends AbstractModel
{
    /**
     * @var string <p>输入视频 / 图片的 URL</p>
     */
    public $InputURL;

    /**
     * @var string <p>算法类型。可选值：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li></ul>
     */
    public $ServiceType;

    /**
     * @var SeeTaskMetadata <p>任务元数据</p>
     */
    public $Metadata;

    /**
     * @var SeeComprehensionConfig <p>视觉理解配置项</p>
     */
    public $ComprehensionConfig;

    /**
     * @var integer <p>等待结果的超时时间（单位：秒）。填 0 表示无需等待结果。最大超时时长 25 秒，默认超时时长 20 秒。</p>
     */
    public $WaitResultTimeout;

    /**
     * @var string <p>回调目标 ID</p>
     */
    public $CallbackId;

    /**
     * @param string $InputURL <p>输入视频 / 图片的 URL</p>
     * @param string $ServiceType <p>算法类型。可选值：</p><ul><li><code>VID_COMP</code>：视频理解</li><li><code>IMG_COMP</code>：图片理解</li></ul>
     * @param SeeTaskMetadata $Metadata <p>任务元数据</p>
     * @param SeeComprehensionConfig $ComprehensionConfig <p>视觉理解配置项</p>
     * @param integer $WaitResultTimeout <p>等待结果的超时时间（单位：秒）。填 0 表示无需等待结果。最大超时时长 25 秒，默认超时时长 20 秒。</p>
     * @param string $CallbackId <p>回调目标 ID</p>
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
        if (array_key_exists("InputURL",$param) and $param["InputURL"] !== null) {
            $this->InputURL = $param["InputURL"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new SeeTaskMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("ComprehensionConfig",$param) and $param["ComprehensionConfig"] !== null) {
            $this->ComprehensionConfig = new SeeComprehensionConfig();
            $this->ComprehensionConfig->deserialize($param["ComprehensionConfig"]);
        }

        if (array_key_exists("WaitResultTimeout",$param) and $param["WaitResultTimeout"] !== null) {
            $this->WaitResultTimeout = $param["WaitResultTimeout"];
        }

        if (array_key_exists("CallbackId",$param) and $param["CallbackId"] !== null) {
            $this->CallbackId = $param["CallbackId"];
        }
    }
}
