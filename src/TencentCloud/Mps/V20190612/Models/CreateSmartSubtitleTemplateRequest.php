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
 * CreateSmartSubtitleTemplate请求参数结构体
 *
 * @method string getName() 获取智能字幕模板名称
长度限制：64 个字符。
 * @method void setName(string $Name) 设置智能字幕模板名称
长度限制：64 个字符。
 * @method string getVideoSrcLanguage() 获取智能字幕视频源语言
当前支持以下语言：
`zh`：简体中文
`yue`：中文粵语
`zh-PY`：中英粤
`zh_medical`：中文医疗
`zh_dialect`：中文方言
`prime_zh`：中英方言
`zh_en`：中英
`en`：英语
`ja`：日语
`ko`：韩语
`fr`：法语
`es`：西班牙语
`it`：意大利语
`de`：德语
`tr`：土耳其语
`ru`：俄语
`pt`：葡萄牙语（巴西）
`pt-PT`：葡萄牙语（葡萄牙）
`vi`：越南语
`id`：印度尼西亚语
`ms`：马来语
`th`：泰语
`ar`：阿拉伯语
`hi`：印地语
`fil`：菲律宾语
`auto`：自动识别（仅在纯字幕翻译中支持）
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) 设置智能字幕视频源语言
当前支持以下语言：
`zh`：简体中文
`yue`：中文粵语
`zh-PY`：中英粤
`zh_medical`：中文医疗
`zh_dialect`：中文方言
`prime_zh`：中英方言
`zh_en`：中英
`en`：英语
`ja`：日语
`ko`：韩语
`fr`：法语
`es`：西班牙语
`it`：意大利语
`de`：德语
`tr`：土耳其语
`ru`：俄语
`pt`：葡萄牙语（巴西）
`pt-PT`：葡萄牙语（葡萄牙）
`vi`：越南语
`id`：印度尼西亚语
`ms`：马来语
`th`：泰语
`ar`：阿拉伯语
`hi`：印地语
`fil`：菲律宾语
`auto`：自动识别（仅在纯字幕翻译中支持）
 * @method integer getSubtitleType() 获取智能字幕字幕语言类型
0: 源语言
1: 翻译语言
2: 源语言+翻译语言
当TranslateSwitch为OFF时仅支持取0
当TranslateSwitch为ON时仅支持取1或2
 * @method void setSubtitleType(integer $SubtitleType) 设置智能字幕字幕语言类型
0: 源语言
1: 翻译语言
2: 源语言+翻译语言
当TranslateSwitch为OFF时仅支持取0
当TranslateSwitch为ON时仅支持取1或2
 * @method string getComment() 获取智能字幕模板描述信息
长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置智能字幕模板描述信息
长度限制：256 个字符。
 * @method string getSubtitleFormat() 获取智能字幕文件格式:
- ASR识别翻译处理类型下：
     - vtt: WebVTT 格式字幕
     - srt: SRT 格式字幕
     - 不填或填空：不生成字幕文件
- 纯字幕翻译处理类型下：
    - original：与源文件一致
    - vtt: WebVTT 格式字幕
    - srt: SRT 格式字幕

**注意**：
- ASR识别方式下，翻译大于等于2种语言时不允许传空或不传；
- 纯字幕翻译方式下，不允许传空或不传
 * @method void setSubtitleFormat(string $SubtitleFormat) 设置智能字幕文件格式:
- ASR识别翻译处理类型下：
     - vtt: WebVTT 格式字幕
     - srt: SRT 格式字幕
     - 不填或填空：不生成字幕文件
- 纯字幕翻译处理类型下：
    - original：与源文件一致
    - vtt: WebVTT 格式字幕
    - srt: SRT 格式字幕

**注意**：
- ASR识别方式下，翻译大于等于2种语言时不允许传空或不传；
- 纯字幕翻译方式下，不允许传空或不传
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() 获取ASR热词库参数
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) 设置ASR热词库参数
 * @method string getTranslateSwitch() 获取字幕翻译开关
`ON`: 开启翻译
`OFF`: 关闭翻译

**注意**：纯字幕翻译方式下，不传默认是打开的，不允许传空或`OFF`；
 * @method void setTranslateSwitch(string $TranslateSwitch) 设置字幕翻译开关
`ON`: 开启翻译
`OFF`: 关闭翻译

**注意**：纯字幕翻译方式下，不传默认是打开的，不允许传空或`OFF`；
 * @method string getTranslateDstLanguage() 获取字幕翻译目标语言，当TranslateSwitch为`ON`的时候生效
当前支持以下语言：

`zh`：简体中文
`zh-TW`：繁体中文
`en`：英语
`ja`：日语
`ko`：韩语
`fr`：法语
`es`：西班牙语 
`it`：意大利语
`de`：德语
`tr`：土耳其语
`ru`：俄语
`pt`：葡萄牙语（巴西）
`pt-PT`：葡萄牙语（葡萄牙）
`vi`：越南语
`id`：印度尼西亚语 
`ms`：马来语
`th`：泰语
`ar`：阿拉伯语
`hi`：印地语
`fil`：菲律宾语

**注意**：多语言方式，则使用 `/` 分割，如：`en/ja`，表示英语和日语。
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) 设置字幕翻译目标语言，当TranslateSwitch为`ON`的时候生效
当前支持以下语言：

`zh`：简体中文
`zh-TW`：繁体中文
`en`：英语
`ja`：日语
`ko`：韩语
`fr`：法语
`es`：西班牙语 
`it`：意大利语
`de`：德语
`tr`：土耳其语
`ru`：俄语
`pt`：葡萄牙语（巴西）
`pt-PT`：葡萄牙语（葡萄牙）
`vi`：越南语
`id`：印度尼西亚语 
`ms`：马来语
`th`：泰语
`ar`：阿拉伯语
`hi`：印地语
`fil`：菲律宾语

**注意**：多语言方式，则使用 `/` 分割，如：`en/ja`，表示英语和日语。
 * @method integer getProcessType() 获取字幕处理类型：
- 0：ASR识别字幕
- 1：纯字幕翻译

**注意**：不传的情况下默认类型为 ASR识别字幕
 * @method void setProcessType(integer $ProcessType) 设置字幕处理类型：
- 0：ASR识别字幕
- 1：纯字幕翻译

**注意**：不传的情况下默认类型为 ASR识别字幕
 */
class CreateSmartSubtitleTemplateRequest extends AbstractModel
{
    /**
     * @var string 智能字幕模板名称
长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 智能字幕视频源语言
当前支持以下语言：
`zh`：简体中文
`yue`：中文粵语
`zh-PY`：中英粤
`zh_medical`：中文医疗
`zh_dialect`：中文方言
`prime_zh`：中英方言
`zh_en`：中英
`en`：英语
`ja`：日语
`ko`：韩语
`fr`：法语
`es`：西班牙语
`it`：意大利语
`de`：德语
`tr`：土耳其语
`ru`：俄语
`pt`：葡萄牙语（巴西）
`pt-PT`：葡萄牙语（葡萄牙）
`vi`：越南语
`id`：印度尼西亚语
`ms`：马来语
`th`：泰语
`ar`：阿拉伯语
`hi`：印地语
`fil`：菲律宾语
`auto`：自动识别（仅在纯字幕翻译中支持）
     */
    public $VideoSrcLanguage;

    /**
     * @var integer 智能字幕字幕语言类型
0: 源语言
1: 翻译语言
2: 源语言+翻译语言
当TranslateSwitch为OFF时仅支持取0
当TranslateSwitch为ON时仅支持取1或2
     */
    public $SubtitleType;

    /**
     * @var string 智能字幕模板描述信息
长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var string 智能字幕文件格式:
- ASR识别翻译处理类型下：
     - vtt: WebVTT 格式字幕
     - srt: SRT 格式字幕
     - 不填或填空：不生成字幕文件
- 纯字幕翻译处理类型下：
    - original：与源文件一致
    - vtt: WebVTT 格式字幕
    - srt: SRT 格式字幕

**注意**：
- ASR识别方式下，翻译大于等于2种语言时不允许传空或不传；
- 纯字幕翻译方式下，不允许传空或不传
     */
    public $SubtitleFormat;

    /**
     * @var AsrHotWordsConfigure ASR热词库参数
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string 字幕翻译开关
`ON`: 开启翻译
`OFF`: 关闭翻译

**注意**：纯字幕翻译方式下，不传默认是打开的，不允许传空或`OFF`；
     */
    public $TranslateSwitch;

    /**
     * @var string 字幕翻译目标语言，当TranslateSwitch为`ON`的时候生效
当前支持以下语言：

`zh`：简体中文
`zh-TW`：繁体中文
`en`：英语
`ja`：日语
`ko`：韩语
`fr`：法语
`es`：西班牙语 
`it`：意大利语
`de`：德语
`tr`：土耳其语
`ru`：俄语
`pt`：葡萄牙语（巴西）
`pt-PT`：葡萄牙语（葡萄牙）
`vi`：越南语
`id`：印度尼西亚语 
`ms`：马来语
`th`：泰语
`ar`：阿拉伯语
`hi`：印地语
`fil`：菲律宾语

**注意**：多语言方式，则使用 `/` 分割，如：`en/ja`，表示英语和日语。
     */
    public $TranslateDstLanguage;

    /**
     * @var integer 字幕处理类型：
- 0：ASR识别字幕
- 1：纯字幕翻译

**注意**：不传的情况下默认类型为 ASR识别字幕
     */
    public $ProcessType;

    /**
     * @param string $Name 智能字幕模板名称
长度限制：64 个字符。
     * @param string $VideoSrcLanguage 智能字幕视频源语言
当前支持以下语言：
`zh`：简体中文
`yue`：中文粵语
`zh-PY`：中英粤
`zh_medical`：中文医疗
`zh_dialect`：中文方言
`prime_zh`：中英方言
`zh_en`：中英
`en`：英语
`ja`：日语
`ko`：韩语
`fr`：法语
`es`：西班牙语
`it`：意大利语
`de`：德语
`tr`：土耳其语
`ru`：俄语
`pt`：葡萄牙语（巴西）
`pt-PT`：葡萄牙语（葡萄牙）
`vi`：越南语
`id`：印度尼西亚语
`ms`：马来语
`th`：泰语
`ar`：阿拉伯语
`hi`：印地语
`fil`：菲律宾语
`auto`：自动识别（仅在纯字幕翻译中支持）
     * @param integer $SubtitleType 智能字幕字幕语言类型
0: 源语言
1: 翻译语言
2: 源语言+翻译语言
当TranslateSwitch为OFF时仅支持取0
当TranslateSwitch为ON时仅支持取1或2
     * @param string $Comment 智能字幕模板描述信息
长度限制：256 个字符。
     * @param string $SubtitleFormat 智能字幕文件格式:
- ASR识别翻译处理类型下：
     - vtt: WebVTT 格式字幕
     - srt: SRT 格式字幕
     - 不填或填空：不生成字幕文件
- 纯字幕翻译处理类型下：
    - original：与源文件一致
    - vtt: WebVTT 格式字幕
    - srt: SRT 格式字幕

**注意**：
- ASR识别方式下，翻译大于等于2种语言时不允许传空或不传；
- 纯字幕翻译方式下，不允许传空或不传
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure ASR热词库参数
     * @param string $TranslateSwitch 字幕翻译开关
`ON`: 开启翻译
`OFF`: 关闭翻译

**注意**：纯字幕翻译方式下，不传默认是打开的，不允许传空或`OFF`；
     * @param string $TranslateDstLanguage 字幕翻译目标语言，当TranslateSwitch为`ON`的时候生效
当前支持以下语言：

`zh`：简体中文
`zh-TW`：繁体中文
`en`：英语
`ja`：日语
`ko`：韩语
`fr`：法语
`es`：西班牙语 
`it`：意大利语
`de`：德语
`tr`：土耳其语
`ru`：俄语
`pt`：葡萄牙语（巴西）
`pt-PT`：葡萄牙语（葡萄牙）
`vi`：越南语
`id`：印度尼西亚语 
`ms`：马来语
`th`：泰语
`ar`：阿拉伯语
`hi`：印地语
`fil`：菲律宾语

**注意**：多语言方式，则使用 `/` 分割，如：`en/ja`，表示英语和日语。
     * @param integer $ProcessType 字幕处理类型：
- 0：ASR识别字幕
- 1：纯字幕翻译

**注意**：不传的情况下默认类型为 ASR识别字幕
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VideoSrcLanguage",$param) and $param["VideoSrcLanguage"] !== null) {
            $this->VideoSrcLanguage = $param["VideoSrcLanguage"];
        }

        if (array_key_exists("SubtitleType",$param) and $param["SubtitleType"] !== null) {
            $this->SubtitleType = $param["SubtitleType"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("AsrHotWordsConfigure",$param) and $param["AsrHotWordsConfigure"] !== null) {
            $this->AsrHotWordsConfigure = new AsrHotWordsConfigure();
            $this->AsrHotWordsConfigure->deserialize($param["AsrHotWordsConfigure"]);
        }

        if (array_key_exists("TranslateSwitch",$param) and $param["TranslateSwitch"] !== null) {
            $this->TranslateSwitch = $param["TranslateSwitch"];
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }
    }
}
