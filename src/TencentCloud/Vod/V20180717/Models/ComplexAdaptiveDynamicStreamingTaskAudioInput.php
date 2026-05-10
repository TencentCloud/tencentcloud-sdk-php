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
 * 自适应码流任务多语言音频流输入参数。
 *
 * @method string getFileId() 获取<p>音频源的媒体 ID。固定取该媒体源文件中的首个音频流，视频流和其它音频流（如有）将被忽略。</p>
 * @method void setFileId(string $FileId) 设置<p>音频源的媒体 ID。固定取该媒体源文件中的首个音频流，视频流和其它音频流（如有）将被忽略。</p>
 * @method string getName() 获取<p>输出的自适应码流中的音频流名称，长度限制为16个字符。</p>
 * @method void setName(string $Name) 设置<p>输出的自适应码流中的音频流名称，长度限制为16个字符。</p>
 * @method string getLanguage() 获取<p>输出的自适应码流中的音频流语言，长度限制为16个字符。要求符合 RFC5646 规范。</p>
 * @method void setLanguage(string $Language) 设置<p>输出的自适应码流中的音频流语言，长度限制为16个字符。要求符合 RFC5646 规范。</p>
 * @method string getDefault() 获取<p>是否设置为自适应码流的默认音频。取值：</p><li>YES：设置为默认音频；</li><li>NO：不设置为默认音频（默认值）。</li>
 * @method void setDefault(string $Default) 设置<p>是否设置为自适应码流的默认音频。取值：</p><li>YES：设置为默认音频；</li><li>NO：不设置为默认音频（默认值）。</li>
 * @method integer getAudioTrackIdx() 获取<p>音轨序号，表示选择音频源中的第几个音轨，从0开始计数。默认值为0，表示选择最靠前的音轨。</p>
 * @method void setAudioTrackIdx(integer $AudioTrackIdx) 设置<p>音轨序号，表示选择音频源中的第几个音轨，从0开始计数。默认值为0，表示选择最靠前的音轨。</p>
 */
class ComplexAdaptiveDynamicStreamingTaskAudioInput extends AbstractModel
{
    /**
     * @var string <p>音频源的媒体 ID。固定取该媒体源文件中的首个音频流，视频流和其它音频流（如有）将被忽略。</p>
     */
    public $FileId;

    /**
     * @var string <p>输出的自适应码流中的音频流名称，长度限制为16个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>输出的自适应码流中的音频流语言，长度限制为16个字符。要求符合 RFC5646 规范。</p>
     */
    public $Language;

    /**
     * @var string <p>是否设置为自适应码流的默认音频。取值：</p><li>YES：设置为默认音频；</li><li>NO：不设置为默认音频（默认值）。</li>
     */
    public $Default;

    /**
     * @var integer <p>音轨序号，表示选择音频源中的第几个音轨，从0开始计数。默认值为0，表示选择最靠前的音轨。</p>
     */
    public $AudioTrackIdx;

    /**
     * @param string $FileId <p>音频源的媒体 ID。固定取该媒体源文件中的首个音频流，视频流和其它音频流（如有）将被忽略。</p>
     * @param string $Name <p>输出的自适应码流中的音频流名称，长度限制为16个字符。</p>
     * @param string $Language <p>输出的自适应码流中的音频流语言，长度限制为16个字符。要求符合 RFC5646 规范。</p>
     * @param string $Default <p>是否设置为自适应码流的默认音频。取值：</p><li>YES：设置为默认音频；</li><li>NO：不设置为默认音频（默认值）。</li>
     * @param integer $AudioTrackIdx <p>音轨序号，表示选择音频源中的第几个音轨，从0开始计数。默认值为0，表示选择最靠前的音轨。</p>
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

        if (array_key_exists("AudioTrackIdx",$param) and $param["AudioTrackIdx"] !== null) {
            $this->AudioTrackIdx = $param["AudioTrackIdx"];
        }
    }
}
