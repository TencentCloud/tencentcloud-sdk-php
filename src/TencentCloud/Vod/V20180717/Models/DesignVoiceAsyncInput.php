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
 * 音色设计任务输入。
 *
 * @method string getPrompt() 获取<p>音色描述</p>
 * @method void setPrompt(string $Prompt) 设置<p>音色描述</p>
 * @method VoiceSettings getVoiceSettings() 获取<p>音色信息</p>
 * @method void setVoiceSettings(VoiceSettings $VoiceSettings) 设置<p>音色信息</p>
 * @method string getPreviewText() 获取<p>试听文本</p>
 * @method void setPreviewText(string $PreviewText) 设置<p>试听文本</p>
 * @method string getExtParam() 获取<p>扩展参数，json字符串</p>
 * @method void setExtParam(string $ExtParam) 设置<p>扩展参数，json字符串</p>
 */
class DesignVoiceAsyncInput extends AbstractModel
{
    /**
     * @var string <p>音色描述</p>
     */
    public $Prompt;

    /**
     * @var VoiceSettings <p>音色信息</p>
     */
    public $VoiceSettings;

    /**
     * @var string <p>试听文本</p>
     */
    public $PreviewText;

    /**
     * @var string <p>扩展参数，json字符串</p>
     */
    public $ExtParam;

    /**
     * @param string $Prompt <p>音色描述</p>
     * @param VoiceSettings $VoiceSettings <p>音色信息</p>
     * @param string $PreviewText <p>试听文本</p>
     * @param string $ExtParam <p>扩展参数，json字符串</p>
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("VoiceSettings",$param) and $param["VoiceSettings"] !== null) {
            $this->VoiceSettings = new VoiceSettings();
            $this->VoiceSettings->deserialize($param["VoiceSettings"]);
        }

        if (array_key_exists("PreviewText",$param) and $param["PreviewText"] !== null) {
            $this->PreviewText = $param["PreviewText"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
