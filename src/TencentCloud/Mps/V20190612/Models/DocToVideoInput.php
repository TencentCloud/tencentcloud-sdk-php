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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 文档生成视频输入
 *
 * @method array getFileUrl() 获取<p>用于生成视频的文档链接。</p><p>支持的文档类型：pdf、pptx、docx、png、jpg<br>文档数量限制：3个<br>文档大小限制：10MB<br>文档页数限制：100页</p>
 * @method void setFileUrl(array $FileUrl) 设置<p>用于生成视频的文档链接。</p><p>支持的文档类型：pdf、pptx、docx、png、jpg<br>文档数量限制：3个<br>文档大小限制：10MB<br>文档页数限制：100页</p>
 * @method string getPrompt() 获取<p>用于生成视频的prompt信息。</p><p>prompt长度限制：2000字符。</p>
 * @method void setPrompt(string $Prompt) 设置<p>用于生成视频的prompt信息。</p><p>prompt长度限制：2000字符。</p>
 * @method string getModelName() 获取<p>文档生成视频模型名称</p><p>默认值：Wand</p>
 * @method void setModelName(string $ModelName) 设置<p>文档生成视频模型名称</p><p>默认值：Wand</p>
 * @method string getModelVersion() 获取<p>文档生成视频模型版本号</p><p>默认值：1.0</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>文档生成视频模型版本号</p><p>默认值：1.0</p>
 * @method string getRatio() 获取<p>生成视频的宽高比。</p><p>枚举值：</p><ul><li>16:9： 16:9</li><li>9:16： 9:16</li><li>1:1： 1:1</li></ul><p>默认值：16:9</p>
 * @method void setRatio(string $Ratio) 设置<p>生成视频的宽高比。</p><p>枚举值：</p><ul><li>16:9： 16:9</li><li>9:16： 9:16</li><li>1:1： 1:1</li></ul><p>默认值：16:9</p>
 * @method string getLanguage() 获取<p>生成视频的语言。</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>ru： 俄语</li><li>fr： 法语</li><li>es： 西班牙语</li><li>de： 德语</li></ul><p>默认值：zh</p>
 * @method void setLanguage(string $Language) 设置<p>生成视频的语言。</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>ru： 俄语</li><li>fr： 法语</li><li>es： 西班牙语</li><li>de： 德语</li></ul><p>默认值：zh</p>
 * @method integer getReferenceDuration() 获取<p>生成视频的时长参考。</p><p>非准确的视频时长，仅供大模型参考生成。</p><p>取值范围：[15, 1200]</p><p>单位：秒</p>
 * @method void setReferenceDuration(integer $ReferenceDuration) 设置<p>生成视频的时长参考。</p><p>非准确的视频时长，仅供大模型参考生成。</p><p>取值范围：[15, 1200]</p><p>单位：秒</p>
 * @method boolean getEnableTTS() 获取<p>是否开启AI配音功能。</p><p>默认值：false</p>
 * @method void setEnableTTS(boolean $EnableTTS) 设置<p>是否开启AI配音功能。</p><p>默认值：false</p>
 * @method string getVoiceId() 获取<p>音色ID。仅开启AI配音功能时有效。</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID。仅开启AI配音功能时有效。</p>
 */
class DocToVideoInput extends AbstractModel
{
    /**
     * @var array <p>用于生成视频的文档链接。</p><p>支持的文档类型：pdf、pptx、docx、png、jpg<br>文档数量限制：3个<br>文档大小限制：10MB<br>文档页数限制：100页</p>
     */
    public $FileUrl;

    /**
     * @var string <p>用于生成视频的prompt信息。</p><p>prompt长度限制：2000字符。</p>
     */
    public $Prompt;

    /**
     * @var string <p>文档生成视频模型名称</p><p>默认值：Wand</p>
     */
    public $ModelName;

    /**
     * @var string <p>文档生成视频模型版本号</p><p>默认值：1.0</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>生成视频的宽高比。</p><p>枚举值：</p><ul><li>16:9： 16:9</li><li>9:16： 9:16</li><li>1:1： 1:1</li></ul><p>默认值：16:9</p>
     */
    public $Ratio;

    /**
     * @var string <p>生成视频的语言。</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>ru： 俄语</li><li>fr： 法语</li><li>es： 西班牙语</li><li>de： 德语</li></ul><p>默认值：zh</p>
     */
    public $Language;

    /**
     * @var integer <p>生成视频的时长参考。</p><p>非准确的视频时长，仅供大模型参考生成。</p><p>取值范围：[15, 1200]</p><p>单位：秒</p>
     */
    public $ReferenceDuration;

    /**
     * @var boolean <p>是否开启AI配音功能。</p><p>默认值：false</p>
     */
    public $EnableTTS;

    /**
     * @var string <p>音色ID。仅开启AI配音功能时有效。</p>
     */
    public $VoiceId;

    /**
     * @param array $FileUrl <p>用于生成视频的文档链接。</p><p>支持的文档类型：pdf、pptx、docx、png、jpg<br>文档数量限制：3个<br>文档大小限制：10MB<br>文档页数限制：100页</p>
     * @param string $Prompt <p>用于生成视频的prompt信息。</p><p>prompt长度限制：2000字符。</p>
     * @param string $ModelName <p>文档生成视频模型名称</p><p>默认值：Wand</p>
     * @param string $ModelVersion <p>文档生成视频模型版本号</p><p>默认值：1.0</p>
     * @param string $Ratio <p>生成视频的宽高比。</p><p>枚举值：</p><ul><li>16:9： 16:9</li><li>9:16： 9:16</li><li>1:1： 1:1</li></ul><p>默认值：16:9</p>
     * @param string $Language <p>生成视频的语言。</p><p>枚举值：</p><ul><li>zh： 中文</li><li>en： 英文</li><li>ja： 日语</li><li>ko： 韩语</li><li>ru： 俄语</li><li>fr： 法语</li><li>es： 西班牙语</li><li>de： 德语</li></ul><p>默认值：zh</p>
     * @param integer $ReferenceDuration <p>生成视频的时长参考。</p><p>非准确的视频时长，仅供大模型参考生成。</p><p>取值范围：[15, 1200]</p><p>单位：秒</p>
     * @param boolean $EnableTTS <p>是否开启AI配音功能。</p><p>默认值：false</p>
     * @param string $VoiceId <p>音色ID。仅开启AI配音功能时有效。</p>
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
        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("ReferenceDuration",$param) and $param["ReferenceDuration"] !== null) {
            $this->ReferenceDuration = $param["ReferenceDuration"];
        }

        if (array_key_exists("EnableTTS",$param) and $param["EnableTTS"] !== null) {
            $this->EnableTTS = $param["EnableTTS"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }
    }
}
