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
 * 即时转码模板详情。
 *
 * @method string getTemplateId() 获取即时转码模板唯一标识。
 * @method void setTemplateId(string $TemplateId) 设置即时转码模板唯一标识。
 * @method string getTemplateName() 获取转码模板名称。
 * @method void setTemplateName(string $TemplateName) 设置转码模板名称。
 * @method string getComment() 获取模板描述信息。
 * @method void setComment(string $Comment) 设置模板描述信息。
 * @method string getType() 获取模板类型，取值：<li>preset：系统预置模板；</li><li>custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型，取值：<li>preset：系统预置模板；</li><li>custom：用户自定义模板。</li>
 * @method string getVideoStreamSwitch() 获取启用视频流开关，取值：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setVideoStreamSwitch(string $VideoStreamSwitch) 设置启用视频流开关，取值：<li>on：开启；</li><li>off：关闭。</li>
 * @method string getAudioStreamSwitch() 获取启用音频流开关，取值：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setAudioStreamSwitch(string $AudioStreamSwitch) 设置启用音频流开关，取值：<li>on：开启；</li><li>off：关闭。</li>
 * @method VideoTemplateInfo getVideoTemplate() 获取视频流配置参数，仅当 VideoStreamSwitch 为 on，该字段有效。
 * @method void setVideoTemplate(VideoTemplateInfo $VideoTemplate) 设置视频流配置参数，仅当 VideoStreamSwitch 为 on，该字段有效。
 * @method AudioTemplateInfo getAudioTemplate() 获取音频流配置参数，仅当 AudioStreamSwitch 为 on，该字段有效。
 * @method void setAudioTemplate(AudioTemplateInfo $AudioTemplate) 设置音频流配置参数，仅当 AudioStreamSwitch 为 on，该字段有效。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class JustInTimeTranscodeTemplate extends AbstractModel
{
    /**
     * @var string 即时转码模板唯一标识。
     */
    public $TemplateId;

    /**
     * @var string 转码模板名称。
     */
    public $TemplateName;

    /**
     * @var string 模板描述信息。
     */
    public $Comment;

    /**
     * @var string 模板类型，取值：<li>preset：系统预置模板；</li><li>custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string 启用视频流开关，取值：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $VideoStreamSwitch;

    /**
     * @var string 启用音频流开关，取值：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $AudioStreamSwitch;

    /**
     * @var VideoTemplateInfo 视频流配置参数，仅当 VideoStreamSwitch 为 on，该字段有效。
     */
    public $VideoTemplate;

    /**
     * @var AudioTemplateInfo 音频流配置参数，仅当 AudioStreamSwitch 为 on，该字段有效。
     */
    public $AudioTemplate;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @param string $TemplateId 即时转码模板唯一标识。
     * @param string $TemplateName 转码模板名称。
     * @param string $Comment 模板描述信息。
     * @param string $Type 模板类型，取值：<li>preset：系统预置模板；</li><li>custom：用户自定义模板。</li>
     * @param string $VideoStreamSwitch 启用视频流开关，取值：<li>on：开启；</li><li>off：关闭。</li>
     * @param string $AudioStreamSwitch 启用音频流开关，取值：<li>on：开启；</li><li>off：关闭。</li>
     * @param VideoTemplateInfo $VideoTemplate 视频流配置参数，仅当 VideoStreamSwitch 为 on，该字段有效。
     * @param AudioTemplateInfo $AudioTemplate 音频流配置参数，仅当 AudioStreamSwitch 为 on，该字段有效。
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
