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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自适应码流任务多语言音频流输入参数。
 *
 * @method string getFileId() 获取音频源的媒体 ID。固定取该媒体中的首个音频流，视频流和其它音频流（如有）将被忽略。
 * @method void setFileId(string $FileId) 设置音频源的媒体 ID。固定取该媒体中的首个音频流，视频流和其它音频流（如有）将被忽略。
 * @method string getName() 获取输出的自适应码流中的音频流名称，长度限制为16个字符。
 * @method void setName(string $Name) 设置输出的自适应码流中的音频流名称，长度限制为16个字符。
 * @method string getLanguage() 获取输出的自适应码流中的音频流语言，长度限制为16个字符。要求符合 RFC5646 规范。
 * @method void setLanguage(string $Language) 设置输出的自适应码流中的音频流语言，长度限制为16个字符。要求符合 RFC5646 规范。
 * @method string getDefault() 获取是否设置为自适应码流的默认音频。取值：
<li>YES：设置为默认音频；</li>
<li>NO：不设置为默认音频（默认值）。</li>

 * @method void setDefault(string $Default) 设置是否设置为自适应码流的默认音频。取值：
<li>YES：设置为默认音频；</li>
<li>NO：不设置为默认音频（默认值）。</li>
 */
class ComplexAdaptiveDynamicStreamingTaskAudioInput extends AbstractModel
{
    /**
     * @var string 音频源的媒体 ID。固定取该媒体中的首个音频流，视频流和其它音频流（如有）将被忽略。
     */
    public $FileId;

    /**
     * @var string 输出的自适应码流中的音频流名称，长度限制为16个字符。
     */
    public $Name;

    /**
     * @var string 输出的自适应码流中的音频流语言，长度限制为16个字符。要求符合 RFC5646 规范。
     */
    public $Language;

    /**
     * @var string 是否设置为自适应码流的默认音频。取值：
<li>YES：设置为默认音频；</li>
<li>NO：不设置为默认音频（默认值）。</li>

     */
    public $Default;

    /**
     * @param string $FileId 音频源的媒体 ID。固定取该媒体中的首个音频流，视频流和其它音频流（如有）将被忽略。
     * @param string $Name 输出的自适应码流中的音频流名称，长度限制为16个字符。
     * @param string $Language 输出的自适应码流中的音频流语言，长度限制为16个字符。要求符合 RFC5646 规范。
     * @param string $Default 是否设置为自适应码流的默认音频。取值：
<li>YES：设置为默认音频；</li>
<li>NO：不设置为默认音频（默认值）。</li>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }
    }
}
