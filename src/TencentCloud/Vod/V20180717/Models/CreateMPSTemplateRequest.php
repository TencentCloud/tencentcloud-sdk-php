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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMPSTemplate请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method string getTemplateType() 获取需要创建的 MPS 模板的类型。取值：
<li>Transcode: 创建转码模板，目前仅支持创建增强模板。</li>
 * @method void setTemplateType(string $TemplateType) 设置需要创建的 MPS 模板的类型。取值：
<li>Transcode: 创建转码模板，目前仅支持创建增强模板。</li>
 * @method string getMPSCreateTemplateParams() 获取MPS 创建模板参数。该参数用于透传至媒体处理服务（MPS），从云点播侧创建用户自定义的 MPS 任务模板。
目前仅支持通过此方式创建以下任务类型的模板：
1. 音视频增强：仅支持填写“[创建转码模板](https://cloud.tencent.com/document/product/862/37605)”接口中的 Container 、Name、Comment、RemoveVideo、RemoveAudio、VideoTemplate、AudioTemplate 和 EnhanceConfig 几个参数。其中 EnhanceConfig 此处必填，且 Container 目前暂不支持 hls。

目前模板中仅支持配置以上参数，其他参数无需填写。若包含其它参数，系统将自动忽略。以上透传参数以JSON形式表示。

 * @method void setMPSCreateTemplateParams(string $MPSCreateTemplateParams) 设置MPS 创建模板参数。该参数用于透传至媒体处理服务（MPS），从云点播侧创建用户自定义的 MPS 任务模板。
目前仅支持通过此方式创建以下任务类型的模板：
1. 音视频增强：仅支持填写“[创建转码模板](https://cloud.tencent.com/document/product/862/37605)”接口中的 Container 、Name、Comment、RemoveVideo、RemoveAudio、VideoTemplate、AudioTemplate 和 EnhanceConfig 几个参数。其中 EnhanceConfig 此处必填，且 Container 目前暂不支持 hls。

目前模板中仅支持配置以上参数，其他参数无需填写。若包含其它参数，系统将自动忽略。以上透传参数以JSON形式表示。
 */
class CreateMPSTemplateRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 需要创建的 MPS 模板的类型。取值：
<li>Transcode: 创建转码模板，目前仅支持创建增强模板。</li>
     */
    public $TemplateType;

    /**
     * @var string MPS 创建模板参数。该参数用于透传至媒体处理服务（MPS），从云点播侧创建用户自定义的 MPS 任务模板。
目前仅支持通过此方式创建以下任务类型的模板：
1. 音视频增强：仅支持填写“[创建转码模板](https://cloud.tencent.com/document/product/862/37605)”接口中的 Container 、Name、Comment、RemoveVideo、RemoveAudio、VideoTemplate、AudioTemplate 和 EnhanceConfig 几个参数。其中 EnhanceConfig 此处必填，且 Container 目前暂不支持 hls。

目前模板中仅支持配置以上参数，其他参数无需填写。若包含其它参数，系统将自动忽略。以上透传参数以JSON形式表示。

     */
    public $MPSCreateTemplateParams;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。</b>
     * @param string $TemplateType 需要创建的 MPS 模板的类型。取值：
<li>Transcode: 创建转码模板，目前仅支持创建增强模板。</li>
     * @param string $MPSCreateTemplateParams MPS 创建模板参数。该参数用于透传至媒体处理服务（MPS），从云点播侧创建用户自定义的 MPS 任务模板。
目前仅支持通过此方式创建以下任务类型的模板：
1. 音视频增强：仅支持填写“[创建转码模板](https://cloud.tencent.com/document/product/862/37605)”接口中的 Container 、Name、Comment、RemoveVideo、RemoveAudio、VideoTemplate、AudioTemplate 和 EnhanceConfig 几个参数。其中 EnhanceConfig 此处必填，且 Container 目前暂不支持 hls。

目前模板中仅支持配置以上参数，其他参数无需填写。若包含其它参数，系统将自动忽略。以上透传参数以JSON形式表示。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("MPSCreateTemplateParams",$param) and $param["MPSCreateTemplateParams"] !== null) {
            $this->MPSCreateTemplateParams = $param["MPSCreateTemplateParams"];
        }
    }
}
