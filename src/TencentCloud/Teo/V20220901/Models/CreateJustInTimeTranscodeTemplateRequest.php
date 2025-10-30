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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateJustInTimeTranscodeTemplate请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getTemplateName() 获取即时转码模板名称，长度限制：64 个字符。
 * @method void setTemplateName(string $TemplateName) 设置即时转码模板名称，长度限制：64 个字符。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。默认为空。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。默认为空。
 * @method string getVideoStreamSwitch() 获取启用视频流开关，取值：
<li>on：开启；</li>
<li>off：关闭。</li>默认值：on。
 * @method void setVideoStreamSwitch(string $VideoStreamSwitch) 设置启用视频流开关，取值：
<li>on：开启；</li>
<li>off：关闭。</li>默认值：on。
 * @method string getAudioStreamSwitch() 获取启用音频流开关，取值：
<li>on：开启；</li>
<li>off：关闭。</li>默认值：on。
 * @method void setAudioStreamSwitch(string $AudioStreamSwitch) 设置启用音频流开关，取值：
<li>on：开启；</li>
<li>off：关闭。</li>默认值：on。
 * @method VideoTemplateInfo getVideoTemplate() 获取视频流配置参数，当 VideoStreamSwitch 为 on，该字段必填。
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) 设置视频流配置参数，当 VideoStreamSwitch 为 on，该字段必填。
 * @method AudioTemplateInfo getAudioTemplate() 获取音频流配置参数，当 AudioStreamSwitch 为 on，该字段必填。
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) 设置音频流配置参数，当 AudioStreamSwitch 为 on，该字段必填。
 */
class CreateJustInTimeTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 即时转码模板名称，长度限制：64 个字符。
     */
    public $TemplateName;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。默认为空。
     */
    public $Comment;

    /**
     * @var string 启用视频流开关，取值：
<li>on：开启；</li>
<li>off：关闭。</li>默认值：on。
     */
    public $VideoStreamSwitch;

    /**
     * @var string 启用音频流开关，取值：
<li>on：开启；</li>
<li>off：关闭。</li>默认值：on。
     */
    public $AudioStreamSwitch;

    /**
     * @var VideoTemplateInfo 视频流配置参数，当 VideoStreamSwitch 为 on，该字段必填。
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo 音频流配置参数，当 AudioStreamSwitch 为 on，该字段必填。
     */
    public $AudioTemplate;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $TemplateName 即时转码模板名称，长度限制：64 个字符。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。默认为空。
     * @param string $VideoStreamSwitch 启用视频流开关，取值：
<li>on：开启；</li>
<li>off：关闭。</li>默认值：on。
     * @param string $AudioStreamSwitch 启用音频流开关，取值：
<li>on：开启；</li>
<li>off：关闭。</li>默认值：on。
     * @param VideoTemplateInfo $VideoTemplate 视频流配置参数，当 VideoStreamSwitch 为 on，该字段必填。
     * @param AudioTemplateInfo $AudioTemplate 音频流配置参数，当 AudioStreamSwitch 为 on，该字段必填。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("VideoStreamSwitch",$param) and $param["VideoStreamSwitch"] !== null) {
            $this->VideoStreamSwitch = $param["VideoStreamSwitch"];
        }

        if (array_key_exists("AudioStreamSwitch",$param) and $param["AudioStreamSwitch"] !== null) {
            $this->AudioStreamSwitch = $param["AudioStreamSwitch"];
        }

        if (array_key_exists("VideoTemplate",$param) and $param["VideoTemplate"] !== null) {
            $this->VideoTemplate = new VideoTemplateInfo();
            $this->VideoTemplate->deserialize($param["VideoTemplate"]);
        }

        if (array_key_exists("AudioTemplate",$param) and $param["AudioTemplate"] !== null) {
            $this->AudioTemplate = new AudioTemplateInfo();
            $this->AudioTemplate->deserialize($param["AudioTemplate"]);
        }
    }
}
