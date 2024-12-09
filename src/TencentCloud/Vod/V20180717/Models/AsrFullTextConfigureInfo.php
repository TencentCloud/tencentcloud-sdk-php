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
 * 语音全文识别任务控制参数。
<font color=red>注意：本参数已不再维护，推荐使用 AsrTranslateConfigure 参数发起语音翻译识别（当 DstLanguage 不填或填空字符串时，则不进行翻译，计费项和语音全文识别一致）。</font>
 *
 * @method string getSwitch() 获取语音全文识别任务开关，可选值：
<li>ON：开启智能语音全文识别任务；</li>
<li>OFF：关闭智能语音全文识别任务。</li>
 * @method void setSwitch(string $Switch) 设置语音全文识别任务开关，可选值：
<li>ON：开启智能语音全文识别任务；</li>
<li>OFF：关闭智能语音全文识别任务。</li>
 * @method array getSubtitleFormats() 获取生成的字幕文件格式列表，不填或者填空数组表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li><font color=red>注意：</font>云点播媒资信息仅支持添加 vtt 字幕，因此当且仅当 SubtitleFormats 包含 vtt 时，云点播将生成的字幕添加到媒资。
 * @method void setSubtitleFormats(array $SubtitleFormats) 设置生成的字幕文件格式列表，不填或者填空数组表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li><font color=red>注意：</font>云点播媒资信息仅支持添加 vtt 字幕，因此当且仅当 SubtitleFormats 包含 vtt 时，云点播将生成的字幕添加到媒资。
 * @method string getSubtitleFormat() 获取生成的字幕文件格式，不填或者填空字符串表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li>
<font color='red'>注意：此字段已废弃，建议使用 SubtitleFormats。</font>
 * @method void setSubtitleFormat(string $SubtitleFormat) 设置生成的字幕文件格式，不填或者填空字符串表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li>
<font color='red'>注意：此字段已废弃，建议使用 SubtitleFormats。</font>
 * @method string getSrcLanguage() 获取媒体源语言，取值范围：
<li>zh：中文普通话；</li>
<li>en：英语；</li>
<li>ja：日语；</li>
<li>zh-ca：粤语。</li>
<font color=red>注意：</font> 填空字符串，或者不填该参数，则自动识别（效果较难保证，推荐填写原始媒体对应的语言，以提高识别的准确率）。
 * @method void setSrcLanguage(string $SrcLanguage) 设置媒体源语言，取值范围：
<li>zh：中文普通话；</li>
<li>en：英语；</li>
<li>ja：日语；</li>
<li>zh-ca：粤语。</li>
<font color=red>注意：</font> 填空字符串，或者不填该参数，则自动识别（效果较难保证，推荐填写原始媒体对应的语言，以提高识别的准确率）。
 * @method string getSubtitleName() 获取指定字幕名称，长度限制：64 个字符。该值将用于播放器展示，若不填则云点播自动生成。
<font color=red>注意：</font>仅当 SubtitleFormats 包含 vtt 时，该字段有效。
 * @method void setSubtitleName(string $SubtitleName) 设置指定字幕名称，长度限制：64 个字符。该值将用于播放器展示，若不填则云点播自动生成。
<font color=red>注意：</font>仅当 SubtitleFormats 包含 vtt 时，该字段有效。
 */
class AsrFullTextConfigureInfo extends AbstractModel
{
    /**
     * @var string 语音全文识别任务开关，可选值：
<li>ON：开启智能语音全文识别任务；</li>
<li>OFF：关闭智能语音全文识别任务。</li>
     */
    public $Switch;

    /**
     * @var array 生成的字幕文件格式列表，不填或者填空数组表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li><font color=red>注意：</font>云点播媒资信息仅支持添加 vtt 字幕，因此当且仅当 SubtitleFormats 包含 vtt 时，云点播将生成的字幕添加到媒资。
     */
    public $SubtitleFormats;

    /**
     * @var string 生成的字幕文件格式，不填或者填空字符串表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li>
<font color='red'>注意：此字段已废弃，建议使用 SubtitleFormats。</font>
     */
    public $SubtitleFormat;

    /**
     * @var string 媒体源语言，取值范围：
<li>zh：中文普通话；</li>
<li>en：英语；</li>
<li>ja：日语；</li>
<li>zh-ca：粤语。</li>
<font color=red>注意：</font> 填空字符串，或者不填该参数，则自动识别（效果较难保证，推荐填写原始媒体对应的语言，以提高识别的准确率）。
     */
    public $SrcLanguage;

    /**
     * @var string 指定字幕名称，长度限制：64 个字符。该值将用于播放器展示，若不填则云点播自动生成。
<font color=red>注意：</font>仅当 SubtitleFormats 包含 vtt 时，该字段有效。
     */
    public $SubtitleName;

    /**
     * @param string $Switch 语音全文识别任务开关，可选值：
<li>ON：开启智能语音全文识别任务；</li>
<li>OFF：关闭智能语音全文识别任务。</li>
     * @param array $SubtitleFormats 生成的字幕文件格式列表，不填或者填空数组表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li><font color=red>注意：</font>云点播媒资信息仅支持添加 vtt 字幕，因此当且仅当 SubtitleFormats 包含 vtt 时，云点播将生成的字幕添加到媒资。
     * @param string $SubtitleFormat 生成的字幕文件格式，不填或者填空字符串表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li>
<font color='red'>注意：此字段已废弃，建议使用 SubtitleFormats。</font>
     * @param string $SrcLanguage 媒体源语言，取值范围：
<li>zh：中文普通话；</li>
<li>en：英语；</li>
<li>ja：日语；</li>
<li>zh-ca：粤语。</li>
<font color=red>注意：</font> 填空字符串，或者不填该参数，则自动识别（效果较难保证，推荐填写原始媒体对应的语言，以提高识别的准确率）。
     * @param string $SubtitleName 指定字幕名称，长度限制：64 个字符。该值将用于播放器展示，若不填则云点播自动生成。
<font color=red>注意：</font>仅当 SubtitleFormats 包含 vtt 时，该字段有效。
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

        if (array_key_exists("SubtitleFormats",$param) and $param["SubtitleFormats"] !== null) {
            $this->SubtitleFormats = $param["SubtitleFormats"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("SrcLanguage",$param) and $param["SrcLanguage"] !== null) {
            $this->SrcLanguage = $param["SrcLanguage"];
        }

        if (array_key_exists("SubtitleName",$param) and $param["SubtitleName"] !== null) {
            $this->SubtitleName = $param["SubtitleName"];
        }
    }
}
