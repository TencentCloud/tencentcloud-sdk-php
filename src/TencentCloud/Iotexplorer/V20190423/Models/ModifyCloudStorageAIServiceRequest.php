<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ModifyCloudStorageAIService请求参数结构体
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getServiceType() 获取云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `SimpleHighlight`：TrueX SimpleHighlight
 * @method void setServiceType(string $ServiceType) 设置云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `SimpleHighlight`：TrueX SimpleHighlight
 * @method boolean getEnabled() 获取视频分析启用状态
 * @method void setEnabled(boolean $Enabled) 设置视频分析启用状态
 * @method string getROI() 获取视频分析识别区域
 * @method void setROI(string $ROI) 设置视频分析识别区域
 * @method string getConfig() 获取视频分析配置参数
 * @method void setConfig(string $Config) 设置视频分析配置参数
 * @method DiarySHLConfig getSHLConfig() 获取SimpleHighlight 算法配置参数
 * @method void setSHLConfig(DiarySHLConfig $SHLConfig) 设置SimpleHighlight 算法配置参数
 */
class ModifyCloudStorageAIServiceRequest extends AbstractModel
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
     * @var string 云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `SimpleHighlight`：TrueX SimpleHighlight
     */
    public $ServiceType;

    /**
     * @var boolean 视频分析启用状态
     */
    public $Enabled;

    /**
     * @var string 视频分析识别区域
     */
    public $ROI;

    /**
     * @var string 视频分析配置参数
     */
    public $Config;

    /**
     * @var DiarySHLConfig SimpleHighlight 算法配置参数
     */
    public $SHLConfig;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param string $ServiceType 云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `SimpleHighlight`：TrueX SimpleHighlight
     * @param boolean $Enabled 视频分析启用状态
     * @param string $ROI 视频分析识别区域
     * @param string $Config 视频分析配置参数
     * @param DiarySHLConfig $SHLConfig SimpleHighlight 算法配置参数
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

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ROI",$param) and $param["ROI"] !== null) {
            $this->ROI = $param["ROI"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("SHLConfig",$param) and $param["SHLConfig"] !== null) {
            $this->SHLConfig = new DiarySHLConfig();
            $this->SHLConfig->deserialize($param["SHLConfig"]);
        }
    }
}
