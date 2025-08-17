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
 * MPS 任务模板详情。
 *
 * @method string getTaskType() 获取MPS 模板的类型。取值：
<li>Transcode: 转码模板。</li>
 * @method void setTaskType(string $TaskType) 设置MPS 模板的类型。取值：
<li>Transcode: 转码模板。</li>
 * @method string getMPSTemplateInfo() 获取MPS 任务模板详情内容。
示例：{"Definition":24214,"Name":"test","Comment":"","Type":"Preset","EnhanceConfig":{"VideoEnhance":{"FrameRate":{"Switch":"ON","Fps":50},"SuperResolution":{"Switch":"ON","Type":"lq"}}}}
 * @method void setMPSTemplateInfo(string $MPSTemplateInfo) 设置MPS 任务模板详情内容。
示例：{"Definition":24214,"Name":"test","Comment":"","Type":"Preset","EnhanceConfig":{"VideoEnhance":{"FrameRate":{"Switch":"ON","Fps":50},"SuperResolution":{"Switch":"ON","Type":"lq"}}}}
 */
class MPSTemplate extends AbstractModel
{
    /**
     * @var string MPS 模板的类型。取值：
<li>Transcode: 转码模板。</li>
     */
    public $TaskType;

    /**
     * @var string MPS 任务模板详情内容。
示例：{"Definition":24214,"Name":"test","Comment":"","Type":"Preset","EnhanceConfig":{"VideoEnhance":{"FrameRate":{"Switch":"ON","Fps":50},"SuperResolution":{"Switch":"ON","Type":"lq"}}}}
     */
    public $MPSTemplateInfo;

    /**
     * @param string $TaskType MPS 模板的类型。取值：
<li>Transcode: 转码模板。</li>
     * @param string $MPSTemplateInfo MPS 任务模板详情内容。
示例：{"Definition":24214,"Name":"test","Comment":"","Type":"Preset","EnhanceConfig":{"VideoEnhance":{"FrameRate":{"Switch":"ON","Fps":50},"SuperResolution":{"Switch":"ON","Type":"lq"}}}}
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("MPSTemplateInfo",$param) and $param["MPSTemplateInfo"] !== null) {
            $this->MPSTemplateInfo = $param["MPSTemplateInfo"];
        }
    }
}
