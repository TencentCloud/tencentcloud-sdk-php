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
 * 自定义智能字幕参数
 *
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
zh_en: 中英
prime_zh: 中英方言
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
zh_en: 中英
prime_zh: 中英方言
 * @method string getSubtitleFormat() 获取智能字幕文件格式
 vtt: WebVTT 格式
srt: SRT格式
不填或填空：不生成字幕文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleFormat(string $SubtitleFormat) 设置智能字幕文件格式
 vtt: WebVTT 格式
srt: SRT格式
不填或填空：不生成字幕文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranslateSwitch() 获取字幕翻译开关
ON: 开启翻译
OFF: 关闭翻译
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranslateSwitch(string $TranslateSwitch) 设置字幕翻译开关
ON: 开启翻译
OFF: 关闭翻译
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() 获取ASR热词库参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) 设置ASR热词库参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtInfo() 获取自定义参数
 * @method void setExtInfo(string $ExtInfo) 设置自定义参数
 */
class RawSmartSubtitleParameter extends AbstractModel
{
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
zh_en: 中英
prime_zh: 中英方言
     */
    public $VideoSrcLanguage;

    /**
     * @var string 智能字幕文件格式
 vtt: WebVTT 格式
srt: SRT格式
不填或填空：不生成字幕文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleFormat;

    /**
     * @var string 字幕翻译开关
ON: 开启翻译
OFF: 关闭翻译
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranslateDstLanguage;

    /**
     * @var AsrHotWordsConfigure ASR热词库参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string 自定义参数
     */
    public $ExtInfo;

    /**
     * @param integer $SubtitleType 智能字幕字幕语言类型
0: 源语言
1: 翻译语言
2: 源语言+翻译语言
当TranslateSwitch为OFF时仅支持取0
当TranslateSwitch为ON时仅支持取1或2
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
zh_en: 中英
prime_zh: 中英方言
     * @param string $SubtitleFormat 智能字幕文件格式
 vtt: WebVTT 格式
srt: SRT格式
不填或填空：不生成字幕文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranslateSwitch 字幕翻译开关
ON: 开启翻译
OFF: 关闭翻译
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure ASR热词库参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtInfo 自定义参数
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
        if (array_key_exists("SubtitleType",$param) and $param["SubtitleType"] !== null) {
            $this->SubtitleType = $param["SubtitleType"];
        }

        if (array_key_exists("VideoSrcLanguage",$param) and $param["VideoSrcLanguage"] !== null) {
            $this->VideoSrcLanguage = $param["VideoSrcLanguage"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("TranslateSwitch",$param) and $param["TranslateSwitch"] !== null) {
            $this->TranslateSwitch = $param["TranslateSwitch"];
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }

        if (array_key_exists("AsrHotWordsConfigure",$param) and $param["AsrHotWordsConfigure"] !== null) {
            $this->AsrHotWordsConfigure = new AsrHotWordsConfigure();
            $this->AsrHotWordsConfigure->deserialize($param["AsrHotWordsConfigure"]);
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
