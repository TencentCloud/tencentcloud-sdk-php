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
 * @method string getInputURL() 获取输入视频 / 图片的 URL
 * @method void setInputURL(string $InputURL) 设置输入视频 / 图片的 URL
 * @method string getServiceType() 获取算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
 * @method void setServiceType(string $ServiceType) 设置算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
 * @method SeeTaskMetadata getMetadata() 获取任务元数据
 * @method void setMetadata(SeeTaskMetadata $Metadata) 设置任务元数据
 * @method SeeComprehensionConfig getComprehensionConfig() 获取视觉理解配置项
 * @method void setComprehensionConfig(SeeComprehensionConfig $ComprehensionConfig) 设置视觉理解配置项
 * @method integer getWaitResultTimeout() 获取等待结果的超时时间（单位：秒）。填 0 表示无需等待结果。最大超时时长 25 秒，默认超时时长 20 秒。
 * @method void setWaitResultTimeout(integer $WaitResultTimeout) 设置等待结果的超时时间（单位：秒）。填 0 表示无需等待结果。最大超时时长 25 秒，默认超时时长 20 秒。
 * @method string getCallbackId() 获取回调目标 ID
 * @method void setCallbackId(string $CallbackId) 设置回调目标 ID
 */
class InvokeTWeSeeComprehensionRequest extends AbstractModel
{
    /**
     * @var string 输入视频 / 图片的 URL
     */
    public $InputURL;

    /**
     * @var string 算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
     */
    public $ServiceType;

    /**
     * @var SeeTaskMetadata 任务元数据
     */
    public $Metadata;

    /**
     * @var SeeComprehensionConfig 视觉理解配置项
     */
    public $ComprehensionConfig;

    /**
     * @var integer 等待结果的超时时间（单位：秒）。填 0 表示无需等待结果。最大超时时长 25 秒，默认超时时长 20 秒。
     */
    public $WaitResultTimeout;

    /**
     * @var string 回调目标 ID
     */
    public $CallbackId;

    /**
     * @param string $InputURL 输入视频 / 图片的 URL
     * @param string $ServiceType 算法类型。可选值：

- `VID_COMP`：视频理解
- `IMG_COMP`：图片理解
     * @param SeeTaskMetadata $Metadata 任务元数据
     * @param SeeComprehensionConfig $ComprehensionConfig 视觉理解配置项
     * @param integer $WaitResultTimeout 等待结果的超时时间（单位：秒）。填 0 表示无需等待结果。最大超时时长 25 秒，默认超时时长 20 秒。
     * @param string $CallbackId 回调目标 ID
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
