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
 * CreateTWeSeeRecognitionTask请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getInputURL() 获取输入视频 / 图片的 URL
 * @method void setInputURL(string $InputURL) 设置输入视频 / 图片的 URL
 * @method string getCustomId() 获取自定义事件 ID
 * @method void setCustomId(string $CustomId) 设置自定义事件 ID
 * @method boolean getEnableSearch() 获取是否保存该事件使其可被搜索
 * @method void setEnableSearch(boolean $EnableSearch) 设置是否保存该事件使其可被搜索
 * @method integer getStartTimeMs() 获取事件起始时间事件起始时间（毫秒级 UNIX 时间戳，若不传则默认为接口调用时间）
 * @method void setStartTimeMs(integer $StartTimeMs) 设置事件起始时间事件起始时间（毫秒级 UNIX 时间戳，若不传则默认为接口调用时间）
 * @method integer getEndTimeMs() 获取事件结束时间事件起始时间（毫秒级 UNIX 时间戳，若不传则默认为接口调用时间）
 * @method void setEndTimeMs(integer $EndTimeMs) 设置事件结束时间事件起始时间（毫秒级 UNIX 时间戳，若不传则默认为接口调用时间）
 * @method string getConfig() 获取算法配置
 * @method void setConfig(string $Config) 设置算法配置
 * @method boolean getIsCustomDevice() 获取是否自定义设备，为 true 时不检查设备存在性，默认为 false
 * @method void setIsCustomDevice(boolean $IsCustomDevice) 设置是否自定义设备，为 true 时不检查设备存在性，默认为 false
 * @method string getInputType() 获取输入类型。可选值：

- `video`：视频（默认值）
- `image`：图片
 * @method void setInputType(string $InputType) 设置输入类型。可选值：

- `video`：视频（默认值）
- `image`：图片
 * @method string getSummaryQOS() 获取摘要服务质量。可选值：

- `minutely`：分钟级（默认值）
- `immediate`：立即
 * @method void setSummaryQOS(string $SummaryQOS) 设置摘要服务质量。可选值：

- `minutely`：分钟级（默认值）
- `immediate`：立即
 * @method VisionSummaryConfig getSummaryConfig() 获取摘要输出配置
 * @method void setSummaryConfig(VisionSummaryConfig $SummaryConfig) 设置摘要输出配置
 * @method string getServiceType() 获取算法类型，可能取值：
- `Summary`：视频/图片摘要
- `ObjectDetect`：目标检测
 * @method void setServiceType(string $ServiceType) 设置算法类型，可能取值：
- `Summary`：视频/图片摘要
- `ObjectDetect`：目标检测
 * @method VisionObjectDetectConfig getObjectDetectConfig() 获取目标检测配置
 * @method void setObjectDetectConfig(VisionObjectDetectConfig $ObjectDetectConfig) 设置目标检测配置
 */
class CreateTWeSeeRecognitionTaskRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 输入视频 / 图片的 URL
     */
    public $InputURL;

    /**
     * @var string 自定义事件 ID
     */
    public $CustomId;

    /**
     * @var boolean 是否保存该事件使其可被搜索
     */
    public $EnableSearch;

    /**
     * @var integer 事件起始时间事件起始时间（毫秒级 UNIX 时间戳，若不传则默认为接口调用时间）
     */
    public $StartTimeMs;

    /**
     * @var integer 事件结束时间事件起始时间（毫秒级 UNIX 时间戳，若不传则默认为接口调用时间）
     */
    public $EndTimeMs;

    /**
     * @var string 算法配置
     */
    public $Config;

    /**
     * @var boolean 是否自定义设备，为 true 时不检查设备存在性，默认为 false
     */
    public $IsCustomDevice;

    /**
     * @var string 输入类型。可选值：

- `video`：视频（默认值）
- `image`：图片
     */
    public $InputType;

    /**
     * @var string 摘要服务质量。可选值：

- `minutely`：分钟级（默认值）
- `immediate`：立即
     */
    public $SummaryQOS;

    /**
     * @var VisionSummaryConfig 摘要输出配置
     */
    public $SummaryConfig;

    /**
     * @var string 算法类型，可能取值：
- `Summary`：视频/图片摘要
- `ObjectDetect`：目标检测
     */
    public $ServiceType;

    /**
     * @var VisionObjectDetectConfig 目标检测配置
     */
    public $ObjectDetectConfig;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $InputURL 输入视频 / 图片的 URL
     * @param string $CustomId 自定义事件 ID
     * @param boolean $EnableSearch 是否保存该事件使其可被搜索
     * @param integer $StartTimeMs 事件起始时间事件起始时间（毫秒级 UNIX 时间戳，若不传则默认为接口调用时间）
     * @param integer $EndTimeMs 事件结束时间事件起始时间（毫秒级 UNIX 时间戳，若不传则默认为接口调用时间）
     * @param string $Config 算法配置
     * @param boolean $IsCustomDevice 是否自定义设备，为 true 时不检查设备存在性，默认为 false
     * @param string $InputType 输入类型。可选值：

- `video`：视频（默认值）
- `image`：图片
     * @param string $SummaryQOS 摘要服务质量。可选值：

- `minutely`：分钟级（默认值）
- `immediate`：立即
     * @param VisionSummaryConfig $SummaryConfig 摘要输出配置
     * @param string $ServiceType 算法类型，可能取值：
- `Summary`：视频/图片摘要
- `ObjectDetect`：目标检测
     * @param VisionObjectDetectConfig $ObjectDetectConfig 目标检测配置
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

        if (array_key_exists("InputURL",$param) and $param["InputURL"] !== null) {
            $this->InputURL = $param["InputURL"];
        }

        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }

        if (array_key_exists("EnableSearch",$param) and $param["EnableSearch"] !== null) {
            $this->EnableSearch = $param["EnableSearch"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("IsCustomDevice",$param) and $param["IsCustomDevice"] !== null) {
            $this->IsCustomDevice = $param["IsCustomDevice"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("SummaryQOS",$param) and $param["SummaryQOS"] !== null) {
            $this->SummaryQOS = $param["SummaryQOS"];
        }

        if (array_key_exists("SummaryConfig",$param) and $param["SummaryConfig"] !== null) {
            $this->SummaryConfig = new VisionSummaryConfig();
            $this->SummaryConfig->deserialize($param["SummaryConfig"]);
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ObjectDetectConfig",$param) and $param["ObjectDetectConfig"] !== null) {
            $this->ObjectDetectConfig = new VisionObjectDetectConfig();
            $this->ObjectDetectConfig->deserialize($param["ObjectDetectConfig"]);
        }
    }
}
