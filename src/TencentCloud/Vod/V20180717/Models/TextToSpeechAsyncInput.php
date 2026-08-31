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
 * 语音合成任务输入。
 *
 * @method string getVoiceId() 获取<p>音色ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色ID</p>
 * @method string getText() 获取<p>语音合成文本</p>
 * @method void setText(string $Text) 设置<p>语音合成文本</p>
 * @method string getLanguageBoost() 获取<p>语音合成语言</p>
 * @method void setLanguageBoost(string $LanguageBoost) 设置<p>语音合成语言</p>
 * @method string getExtParam() 获取<p>扩展参数，json字符串</p>
 * @method void setExtParam(string $ExtParam) 设置<p>扩展参数，json字符串</p>
 */
class TextToSpeechAsyncInput extends AbstractModel
{
    /**
     * @var string <p>音色ID</p>
     */
    public $VoiceId;

    /**
     * @var string <p>语音合成文本</p>
     */
    public $Text;

    /**
     * @var string <p>语音合成语言</p>
     */
    public $LanguageBoost;

    /**
     * @var string <p>扩展参数，json字符串</p>
     */
    public $ExtParam;

    /**
     * @param string $VoiceId <p>音色ID</p>
     * @param string $Text <p>语音合成文本</p>
     * @param string $LanguageBoost <p>语音合成语言</p>
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
        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("LanguageBoost",$param) and $param["LanguageBoost"] !== null) {
            $this->LanguageBoost = $param["LanguageBoost"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
