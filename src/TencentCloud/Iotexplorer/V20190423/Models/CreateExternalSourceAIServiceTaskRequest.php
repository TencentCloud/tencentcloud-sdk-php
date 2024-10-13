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
 * CreateExternalSourceAIServiceTask请求参数结构体
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getServiceType() 获取云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
 * @method void setServiceType(string $ServiceType) 设置云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
 * @method array getVideoURLs() 获取分析外部传入的视频 URL 列表，支持 HLS 点播（m3u8）及常见视频格式（mp4 等）
 * @method void setVideoURLs(array $VideoURLs) 设置分析外部传入的视频 URL 列表，支持 HLS 点播（m3u8）及常见视频格式（mp4 等）
 * @method string getCustomId() 获取自定义任务 ID
 * @method void setCustomId(string $CustomId) 设置自定义任务 ID
 * @method string getConfig() 获取视频分析配置参数
 * @method void setConfig(string $Config) 设置视频分析配置参数
 * @method string getROI() 获取视频分析识别区域
 * @method void setROI(string $ROI) 设置视频分析识别区域
 */
class CreateExternalSourceAIServiceTaskRequest extends AbstractModel
{
    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var string 云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
     */
    public $ServiceType;

    /**
     * @var array 分析外部传入的视频 URL 列表，支持 HLS 点播（m3u8）及常见视频格式（mp4 等）
     */
    public $VideoURLs;

    /**
     * @var string 自定义任务 ID
     */
    public $CustomId;

    /**
     * @var string 视频分析配置参数
     */
    public $Config;

    /**
     * @var string 视频分析识别区域
     */
    public $ROI;

    /**
     * @param string $ProductId 产品 ID
     * @param string $ServiceType 云存 AI 服务类型。可选值：
- `RealtimeObjectDetect`：目标检测
- `Highlight`：视频浓缩
- `VideoToText`：视频语义理解
     * @param array $VideoURLs 分析外部传入的视频 URL 列表，支持 HLS 点播（m3u8）及常见视频格式（mp4 等）
     * @param string $CustomId 自定义任务 ID
     * @param string $Config 视频分析配置参数
     * @param string $ROI 视频分析识别区域
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

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("VideoURLs",$param) and $param["VideoURLs"] !== null) {
            $this->VideoURLs = $param["VideoURLs"];
        }

        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ROI",$param) and $param["ROI"] !== null) {
            $this->ROI = $param["ROI"];
        }
    }
}
