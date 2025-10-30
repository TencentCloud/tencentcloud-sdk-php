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
 * 语音翻译任务控制参数
 *
 * @method string getSwitch() 获取语音翻译任务开关，可选值：
<li>ON：开启智能语音翻译任务；</li>
<li>OFF：关闭智能语音翻译任务。</li>
 * @method void setSwitch(string $Switch) 设置语音翻译任务开关，可选值：
<li>ON：开启智能语音翻译任务；</li>
<li>OFF：关闭智能语音翻译任务。</li>
 * @method string getSourceLanguage() 获取视频源语言。
 * @method void setSourceLanguage(string $SourceLanguage) 设置视频源语言。
 * @method string getDestinationLanguage() 获取翻译目标语言。
 * @method void setDestinationLanguage(string $DestinationLanguage) 设置翻译目标语言。
 * @method string getSubtitleFormat() 获取生成的字幕文件格式，填空字符串表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleFormat(string $SubtitleFormat) 设置生成的字幕文件格式，填空字符串表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件。</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TranslateConfigureInfo extends AbstractModel
{
    /**
     * @var string 语音翻译任务开关，可选值：
<li>ON：开启智能语音翻译任务；</li>
<li>OFF：关闭智能语音翻译任务。</li>
     */
    public $Switch;

    /**
     * @var string 视频源语言。
     */
    public $SourceLanguage;

    /**
     * @var string 翻译目标语言。
     */
    public $DestinationLanguage;

    /**
     * @var string 生成的字幕文件格式，填空字符串表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleFormat;

    /**
     * @param string $Switch 语音翻译任务开关，可选值：
<li>ON：开启智能语音翻译任务；</li>
<li>OFF：关闭智能语音翻译任务。</li>
     * @param string $SourceLanguage 视频源语言。
     * @param string $DestinationLanguage 翻译目标语言。
     * @param string $SubtitleFormat 生成的字幕文件格式，填空字符串表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件。</li>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("SourceLanguage",$param) and $param["SourceLanguage"] !== null) {
            $this->SourceLanguage = $param["SourceLanguage"];
        }

        if (array_key_exists("DestinationLanguage",$param) and $param["DestinationLanguage"] !== null) {
            $this->DestinationLanguage = $param["DestinationLanguage"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }
    }
}
