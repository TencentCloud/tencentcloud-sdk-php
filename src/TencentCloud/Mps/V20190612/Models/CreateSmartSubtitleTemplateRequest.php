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
zh：简体中文
en：英语
ja：日语
ko：韩语
zh-PY：中英粤
zh-medical：中文医疗
yue：中文粤语
vi：越南语
ms：马来语
id：印度尼西亚语
fil：菲律宾语
th：泰语
pt：葡萄牙语
tr：土耳其语
ar：阿拉伯语
es：西班牙语
hi：印地语
fr：法语
de：德语
zh_dialect：中文方言
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) 设置智能字幕视频源语言
当前支持以下语言：
zh：简体中文
en：英语
ja：日语
ko：韩语
zh-PY：中英粤
zh-medical：中文医疗
yue：中文粤语
vi：越南语
ms：马来语
id：印度尼西亚语
fil：菲律宾语
th：泰语
pt：葡萄牙语
tr：土耳其语
ar：阿拉伯语
es：西班牙语
hi：印地语
fr：法语
de：德语
zh_dialect：中文方言
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
 * @method string getSubtitleFormat() 获取智能字幕文件格式
 vtt: WebVTT 格式
不填或填空：不生成字幕文件
 * @method void setSubtitleFormat(string $SubtitleFormat) 设置智能字幕文件格式
 vtt: WebVTT 格式
不填或填空：不生成字幕文件
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() 获取ASR热词库参数
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) 设置ASR热词库参数
 * @method string getTranslateSwitch() 获取字幕翻译开关
ON: 开启翻译
OFF: 关闭翻译
 * @method void setTranslateSwitch(string $TranslateSwitch) 设置字幕翻译开关
ON: 开启翻译
OFF: 关闭翻译
 * @method string getTranslateDstLanguage() 获取字幕翻译目标语言
当TranslateSwitch为ON的时候生效
当前支持以下语言：
zh：简体中文
en：英语
ja：日语
ko：韩语
fr：法语
es：西班牙语
it：意大利语
de：德语
tr：土耳其语
ru：俄语
pt：葡萄牙语
vi：越南语
id：印度尼西亚语
ms：马来语
th：泰语
ar：阿拉伯语
hi：印地语
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) 设置字幕翻译目标语言
当TranslateSwitch为ON的时候生效
当前支持以下语言：
zh：简体中文
en：英语
ja：日语
ko：韩语
fr：法语
es：西班牙语
it：意大利语
de：德语
tr：土耳其语
ru：俄语
pt：葡萄牙语
vi：越南语
id：印度尼西亚语
ms：马来语
th：泰语
ar：阿拉伯语
hi：印地语
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
zh：简体中文
en：英语
ja：日语
ko：韩语
zh-PY：中英粤
zh-medical：中文医疗
yue：中文粤语
vi：越南语
ms：马来语
id：印度尼西亚语
fil：菲律宾语
th：泰语
pt：葡萄牙语
tr：土耳其语
ar：阿拉伯语
es：西班牙语
hi：印地语
fr：法语
de：德语
zh_dialect：中文方言
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
     * @var string 智能字幕文件格式
 vtt: WebVTT 格式
不填或填空：不生成字幕文件
     */
    public $SubtitleFormat;

    /**
     * @var AsrHotWordsConfigure ASR热词库参数
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string 字幕翻译开关
ON: 开启翻译
OFF: 关闭翻译
     */
    public $TranslateSwitch;

    /**
     * @var string 字幕翻译目标语言
当TranslateSwitch为ON的时候生效
当前支持以下语言：
zh：简体中文
en：英语
ja：日语
ko：韩语
fr：法语
es：西班牙语
it：意大利语
de：德语
tr：土耳其语
ru：俄语
pt：葡萄牙语
vi：越南语
id：印度尼西亚语
ms：马来语
th：泰语
ar：阿拉伯语
hi：印地语
     */
    public $TranslateDstLanguage;

    /**
     * @param string $Name 智能字幕模板名称
长度限制：64 个字符。
     * @param string $VideoSrcLanguage 智能字幕视频源语言
当前支持以下语言：
zh：简体中文
en：英语
ja：日语
ko：韩语
zh-PY：中英粤
zh-medical：中文医疗
yue：中文粤语
vi：越南语
ms：马来语
id：印度尼西亚语
fil：菲律宾语
th：泰语
pt：葡萄牙语
tr：土耳其语
ar：阿拉伯语
es：西班牙语
hi：印地语
fr：法语
de：德语
zh_dialect：中文方言
     * @param integer $SubtitleType 智能字幕字幕语言类型
0: 源语言
1: 翻译语言
2: 源语言+翻译语言
当TranslateSwitch为OFF时仅支持取0
当TranslateSwitch为ON时仅支持取1或2
     * @param string $Comment 智能字幕模板描述信息
长度限制：256 个字符。
     * @param string $SubtitleFormat 智能字幕文件格式
 vtt: WebVTT 格式
不填或填空：不生成字幕文件
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure ASR热词库参数
     * @param string $TranslateSwitch 字幕翻译开关
ON: 开启翻译
OFF: 关闭翻译
     * @param string $TranslateDstLanguage 字幕翻译目标语言
当TranslateSwitch为ON的时候生效
当前支持以下语言：
zh：简体中文
en：英语
ja：日语
ko：韩语
fr：法语
es：西班牙语
it：意大利语
de：德语
tr：土耳其语
ru：俄语
pt：葡萄牙语
vi：越南语
id：印度尼西亚语
ms：马来语
th：泰语
ar：阿拉伯语
hi：印地语
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
    }
}
