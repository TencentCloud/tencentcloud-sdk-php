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
 * 外挂字幕。
 *
 * @method string getType() 获取<p>插入形式，可选值：</p><li>subtitle-stream：插入字幕轨道</li><li>close-caption-708：CEA-708字幕编码到SEI帧</li><li>close-caption-608：CEA-608字幕编码到SEI帧</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>插入形式，可选值：</p><li>subtitle-stream：插入字幕轨道</li><li>close-caption-708：CEA-708字幕编码到SEI帧</li><li>close-caption-608：CEA-608字幕编码到SEI帧</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaInputInfo getSubtitle() 获取<p>字幕文件。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitle(MediaInputInfo $Subtitle) 设置<p>字幕文件。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubtitleName() 获取<p>字幕名称    。<br>注意：仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleName(string $SubtitleName) 设置<p>字幕名称    。<br>注意：仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubtitleLanguage() 获取<p>字幕语言，比如：eng</p>
 * @method void setSubtitleLanguage(string $SubtitleLanguage) 设置<p>字幕语言，比如：eng</p>
 * @method string getOutputFormat() 获取<p>字幕输出格式。取值{&quot;WebVTT&quot;,&quot;TTML&quot;}。<br>默认值：&quot;WebVTT&quot;</p>
 * @method void setOutputFormat(string $OutputFormat) 设置<p>字幕输出格式。取值{&quot;WebVTT&quot;,&quot;TTML&quot;}。<br>默认值：&quot;WebVTT&quot;</p>
 * @method boolean getDefaultTrack() 获取<p>默认字幕轨道。为true时指定当前字幕为默认字幕轨道，最多可指定1条默认字幕轨道。<br>默认值：false</p>
 * @method void setDefaultTrack(boolean $DefaultTrack) 设置<p>默认字幕轨道。为true时指定当前字幕为默认字幕轨道，最多可指定1条默认字幕轨道。<br>默认值：false</p>
 */
class AddOnSubtitle extends AbstractModel
{
    /**
     * @var string <p>插入形式，可选值：</p><li>subtitle-stream：插入字幕轨道</li><li>close-caption-708：CEA-708字幕编码到SEI帧</li><li>close-caption-608：CEA-608字幕编码到SEI帧</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var MediaInputInfo <p>字幕文件。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subtitle;

    /**
     * @var string <p>字幕名称    。<br>注意：仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleName;

    /**
     * @var string <p>字幕语言，比如：eng</p>
     */
    public $SubtitleLanguage;

    /**
     * @var string <p>字幕输出格式。取值{&quot;WebVTT&quot;,&quot;TTML&quot;}。<br>默认值：&quot;WebVTT&quot;</p>
     */
    public $OutputFormat;

    /**
     * @var boolean <p>默认字幕轨道。为true时指定当前字幕为默认字幕轨道，最多可指定1条默认字幕轨道。<br>默认值：false</p>
     */
    public $DefaultTrack;

    /**
     * @param string $Type <p>插入形式，可选值：</p><li>subtitle-stream：插入字幕轨道</li><li>close-caption-708：CEA-708字幕编码到SEI帧</li><li>close-caption-608：CEA-608字幕编码到SEI帧</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaInputInfo $Subtitle <p>字幕文件。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubtitleName <p>字幕名称    。<br>注意：仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubtitleLanguage <p>字幕语言，比如：eng</p>
     * @param string $OutputFormat <p>字幕输出格式。取值{&quot;WebVTT&quot;,&quot;TTML&quot;}。<br>默认值：&quot;WebVTT&quot;</p>
     * @param boolean $DefaultTrack <p>默认字幕轨道。为true时指定当前字幕为默认字幕轨道，最多可指定1条默认字幕轨道。<br>默认值：false</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = new MediaInputInfo();
            $this->Subtitle->deserialize($param["Subtitle"]);
        }

        if (array_key_exists("SubtitleName",$param) and $param["SubtitleName"] !== null) {
            $this->SubtitleName = $param["SubtitleName"];
        }

        if (array_key_exists("SubtitleLanguage",$param) and $param["SubtitleLanguage"] !== null) {
            $this->SubtitleLanguage = $param["SubtitleLanguage"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("DefaultTrack",$param) and $param["DefaultTrack"] !== null) {
            $this->DefaultTrack = $param["DefaultTrack"];
        }
    }
}
