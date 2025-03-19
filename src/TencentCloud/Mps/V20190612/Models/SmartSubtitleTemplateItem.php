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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能字幕模板详情
 *
 * @method integer getDefinition() 获取智能字幕模板唯一标识
 * @method void setDefinition(integer $Definition) 设置智能字幕模板唯一标识
 * @method string getName() 获取智能字幕模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置智能字幕模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取智能字幕模板描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置智能字幕模板描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() 获取ASR热词库参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) 设置ASR热词库参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsrHotWordsLibraryName() 获取模板关联热词库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrHotWordsLibraryName(string $AsrHotWordsLibraryName) 设置模板关联热词库名称
注意：此字段可能返回 null，表示取不到有效值。
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
 * @method string getSubtitleFormat() 获取智能字幕文件格式
 vtt: WebVTT 格式
不填或填空：不生成字幕文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleFormat(string $SubtitleFormat) 设置智能字幕文件格式
 vtt: WebVTT 格式
不填或填空：不生成字幕文件
注意：此字段可能返回 null，表示取不到有效值。
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
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method string getAliasName() 获取智能字幕预设模板别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasName(string $AliasName) 设置智能字幕预设模板别名
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartSubtitleTemplateItem extends AbstractModel
{
    /**
     * @var integer 智能字幕模板唯一标识
     */
    public $Definition;

    /**
     * @var string 智能字幕模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 智能字幕模板描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var AsrHotWordsConfigure ASR热词库参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string 模板关联热词库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrHotWordsLibraryName;

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
     * @var string 智能字幕文件格式
 vtt: WebVTT 格式
不填或填空：不生成字幕文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleFormat;

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
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $UpdateTime;

    /**
     * @var string 智能字幕预设模板别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasName;

    /**
     * @param integer $Definition 智能字幕模板唯一标识
     * @param string $Name 智能字幕模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 智能字幕模板描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 模板类型，取值范围：
* Preset：系统预置模板；
* Custom：用户自定义模板。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure ASR热词库参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsrHotWordsLibraryName 模板关联热词库名称
注意：此字段可能返回 null，表示取不到有效值。
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
     * @param string $SubtitleFormat 智能字幕文件格式
 vtt: WebVTT 格式
不填或填空：不生成字幕文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubtitleType 智能字幕字幕语言类型
0: 源语言
1: 翻译语言
2: 源语言+翻译语言
当TranslateSwitch为OFF时仅支持取0
当TranslateSwitch为ON时仅支持取1或2
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
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param string $AliasName 智能字幕预设模板别名
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AsrHotWordsConfigure",$param) and $param["AsrHotWordsConfigure"] !== null) {
            $this->AsrHotWordsConfigure = new AsrHotWordsConfigure();
            $this->AsrHotWordsConfigure->deserialize($param["AsrHotWordsConfigure"]);
        }

        if (array_key_exists("AsrHotWordsLibraryName",$param) and $param["AsrHotWordsLibraryName"] !== null) {
            $this->AsrHotWordsLibraryName = $param["AsrHotWordsLibraryName"];
        }

        if (array_key_exists("VideoSrcLanguage",$param) and $param["VideoSrcLanguage"] !== null) {
            $this->VideoSrcLanguage = $param["VideoSrcLanguage"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("SubtitleType",$param) and $param["SubtitleType"] !== null) {
            $this->SubtitleType = $param["SubtitleType"];
        }

        if (array_key_exists("TranslateSwitch",$param) and $param["TranslateSwitch"] !== null) {
            $this->TranslateSwitch = $param["TranslateSwitch"];
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }
    }
}
