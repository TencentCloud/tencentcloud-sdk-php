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
 * 智能字幕模板详情
 *
 * @method integer getDefinition() 获取<p>智能字幕模板唯一标识</p>
 * @method void setDefinition(integer $Definition) 设置<p>智能字幕模板唯一标识</p>
 * @method string getName() 获取<p>智能字幕模板名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>智能字幕模板名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取<p>智能字幕模板描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置<p>智能字幕模板描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>模板类型，取值范围：</p><ul><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>模板类型，取值范围：</p><ul><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() 获取<p>ASR热词库参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) 设置<p>ASR热词库参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsrHotWordsLibraryName() 获取<p>模板关联热词库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrHotWordsLibraryName(string $AsrHotWordsLibraryName) 设置<p>模板关联热词库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideoSrcLanguage() 获取<p>智能字幕视频源语言列表：</p><p><code>zh</code>：简体中文<br><code>yue</code>：中文粵语<br><code>zh-PY</code>：中英粤<br><code>zh_medical</code>：中文医疗<br><code>zh_dialect</code>：中文方言<br><code>prime_zh</code>：中英方言<br><code>zh_en</code>：中英<br><code>en</code>：英语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>fr</code>：法语<br><code>es</code>：西班牙语<br><code>it</code>：意大利语<br><code>de</code>：德语<br><code>tr</code>：土耳其语<br><code>ru</code>：俄语<br><code>pt</code>：葡萄牙语（巴西）<br><code>pt-PT</code>：葡萄牙语（葡萄牙）<br><code>vi</code>：越南语<br><code>id</code>：印度尼西亚语<br><code>ms</code>：马来语<br><code>th</code>：泰语<br><code>ar</code>：阿拉伯语<br><code>hi</code>：印地语<br><code>fil</code>：菲律宾语<br><code>auto</code>：自动识别（仅在纯字幕翻译中支持）</p>
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) 设置<p>智能字幕视频源语言列表：</p><p><code>zh</code>：简体中文<br><code>yue</code>：中文粵语<br><code>zh-PY</code>：中英粤<br><code>zh_medical</code>：中文医疗<br><code>zh_dialect</code>：中文方言<br><code>prime_zh</code>：中英方言<br><code>zh_en</code>：中英<br><code>en</code>：英语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>fr</code>：法语<br><code>es</code>：西班牙语<br><code>it</code>：意大利语<br><code>de</code>：德语<br><code>tr</code>：土耳其语<br><code>ru</code>：俄语<br><code>pt</code>：葡萄牙语（巴西）<br><code>pt-PT</code>：葡萄牙语（葡萄牙）<br><code>vi</code>：越南语<br><code>id</code>：印度尼西亚语<br><code>ms</code>：马来语<br><code>th</code>：泰语<br><code>ar</code>：阿拉伯语<br><code>hi</code>：印地语<br><code>fil</code>：菲律宾语<br><code>auto</code>：自动识别（仅在纯字幕翻译中支持）</p>
 * @method string getSubtitleFormat() 获取<p>智能字幕文件格式</p><ul><li>vtt: WebVTT 格式</li><li>srt: SRT格式</li><li>original：与源字幕文件一致（用于纯字幕翻译模板）</li><li>不填或填空：不生成字幕文件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleFormat(string $SubtitleFormat) 设置<p>智能字幕文件格式</p><ul><li>vtt: WebVTT 格式</li><li>srt: SRT格式</li><li>original：与源字幕文件一致（用于纯字幕翻译模板）</li><li>不填或填空：不生成字幕文件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubtitleType() 获取<p>智能字幕字幕语言类型<br>0: 源语言<br>1: 翻译语言<br>2: 源语言+翻译语言<br>当TranslateSwitch为OFF时仅支持取0<br>当TranslateSwitch为ON时仅支持取1或2</p>
 * @method void setSubtitleType(integer $SubtitleType) 设置<p>智能字幕字幕语言类型<br>0: 源语言<br>1: 翻译语言<br>2: 源语言+翻译语言<br>当TranslateSwitch为OFF时仅支持取0<br>当TranslateSwitch为ON时仅支持取1或2</p>
 * @method string getTranslateSwitch() 获取<p>字幕翻译开关<br>ON: 开启翻译<br>OFF: 关闭翻译</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranslateSwitch(string $TranslateSwitch) 设置<p>字幕翻译开关<br>ON: 开启翻译<br>OFF: 关闭翻译</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranslateDstLanguage() 获取<p>字幕翻译目标语言<br>当TranslateSwitch为ON的时候生效<br><code>zh</code>：简体中文<br><code>zh-TW</code>：繁体中文<br><code>en</code>：英语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>fr</code>：法语<br><code>es</code>：西班牙语<br><code>it</code>：意大利语<br><code>de</code>：德语<br><code>tr</code>：土耳其语<br><code>ru</code>：俄语<br><code>pt</code>：葡萄牙语（巴西）<br><code>pt-PT</code>：葡萄牙语（葡萄牙）<br><code>vi</code>：越南语<br><code>id</code>：印度尼西亚语<br><code>ms</code>：马来语<br><code>th</code>：泰语<br><code>ar</code>：阿拉伯语<br><code>hi</code>：印地语<br><code>fil</code>：菲律宾语</p><p><strong>注意</strong>：多语言方式，则使用 <code>/</code> 分割，如：<code>en/ja</code>，表示英语和日语。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) 设置<p>字幕翻译目标语言<br>当TranslateSwitch为ON的时候生效<br><code>zh</code>：简体中文<br><code>zh-TW</code>：繁体中文<br><code>en</code>：英语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>fr</code>：法语<br><code>es</code>：西班牙语<br><code>it</code>：意大利语<br><code>de</code>：德语<br><code>tr</code>：土耳其语<br><code>ru</code>：俄语<br><code>pt</code>：葡萄牙语（巴西）<br><code>pt-PT</code>：葡萄牙语（葡萄牙）<br><code>vi</code>：越南语<br><code>id</code>：印度尼西亚语<br><code>ms</code>：马来语<br><code>th</code>：泰语<br><code>ar</code>：阿拉伯语<br><code>hi</code>：印地语<br><code>fil</code>：菲律宾语</p><p><strong>注意</strong>：多语言方式，则使用 <code>/</code> 分割，如：<code>en/ja</code>，表示英语和日语。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
 * @method string getUpdateTime() 获取<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
 * @method string getAliasName() 获取<p>智能字幕预设模板别名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasName(string $AliasName) 设置<p>智能字幕预设模板别名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcessType() 获取<p>字幕处理类型：</p><ul><li>0：ASR识别字幕</li><li>1：纯字幕翻译</li><li>2:  OCR识别字幕</li></ul>
 * @method void setProcessType(integer $ProcessType) 设置<p>字幕处理类型：</p><ul><li>0：ASR识别字幕</li><li>1：纯字幕翻译</li><li>2:  OCR识别字幕</li></ul>
 * @method SelectingSubtitleAreasConfig getSelectingSubtitleAreasConfig() 获取<p>字幕OCR提取框选区域配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectingSubtitleAreasConfig(SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig) 设置<p>字幕OCR提取框选区域配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubtitleEmbedId() 获取<p>字幕压制模板id</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) 设置<p>字幕压制模板id</p>
 * @method integer getSpeakerMode() 获取<p>说话人识别模式，可选值：<br>0：表示不开启说话人识别；<br>1：表示开启说话人识别；<br>默认值：0</p>
 * @method void setSpeakerMode(integer $SpeakerMode) 设置<p>说话人识别模式，可选值：<br>0：表示不开启说话人识别；<br>1：表示开启说话人识别；<br>默认值：0</p>
 * @method integer getSpeakerLabel() 获取<p>说话人识别输出到字幕文件，可选值：<br>0：表示不输出到字幕文件；<br>1：表示输出到vtt字幕文件<br>注意：使用此参数SpeakerMode的值不能为0；<br>默认值：0</p>
 * @method void setSpeakerLabel(integer $SpeakerLabel) 设置<p>说话人识别输出到字幕文件，可选值：<br>0：表示不输出到字幕文件；<br>1：表示输出到vtt字幕文件<br>注意：使用此参数SpeakerMode的值不能为0；<br>默认值：0</p>
 */
class SmartSubtitleTemplateItem extends AbstractModel
{
    /**
     * @var integer <p>智能字幕模板唯一标识</p>
     */
    public $Definition;

    /**
     * @var string <p>智能字幕模板名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>智能字幕模板描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string <p>模板类型，取值范围：</p><ul><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var AsrHotWordsConfigure <p>ASR热词库参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string <p>模板关联热词库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrHotWordsLibraryName;

    /**
     * @var string <p>智能字幕视频源语言列表：</p><p><code>zh</code>：简体中文<br><code>yue</code>：中文粵语<br><code>zh-PY</code>：中英粤<br><code>zh_medical</code>：中文医疗<br><code>zh_dialect</code>：中文方言<br><code>prime_zh</code>：中英方言<br><code>zh_en</code>：中英<br><code>en</code>：英语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>fr</code>：法语<br><code>es</code>：西班牙语<br><code>it</code>：意大利语<br><code>de</code>：德语<br><code>tr</code>：土耳其语<br><code>ru</code>：俄语<br><code>pt</code>：葡萄牙语（巴西）<br><code>pt-PT</code>：葡萄牙语（葡萄牙）<br><code>vi</code>：越南语<br><code>id</code>：印度尼西亚语<br><code>ms</code>：马来语<br><code>th</code>：泰语<br><code>ar</code>：阿拉伯语<br><code>hi</code>：印地语<br><code>fil</code>：菲律宾语<br><code>auto</code>：自动识别（仅在纯字幕翻译中支持）</p>
     */
    public $VideoSrcLanguage;

    /**
     * @var string <p>智能字幕文件格式</p><ul><li>vtt: WebVTT 格式</li><li>srt: SRT格式</li><li>original：与源字幕文件一致（用于纯字幕翻译模板）</li><li>不填或填空：不生成字幕文件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleFormat;

    /**
     * @var integer <p>智能字幕字幕语言类型<br>0: 源语言<br>1: 翻译语言<br>2: 源语言+翻译语言<br>当TranslateSwitch为OFF时仅支持取0<br>当TranslateSwitch为ON时仅支持取1或2</p>
     */
    public $SubtitleType;

    /**
     * @var string <p>字幕翻译开关<br>ON: 开启翻译<br>OFF: 关闭翻译</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranslateSwitch;

    /**
     * @var string <p>字幕翻译目标语言<br>当TranslateSwitch为ON的时候生效<br><code>zh</code>：简体中文<br><code>zh-TW</code>：繁体中文<br><code>en</code>：英语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>fr</code>：法语<br><code>es</code>：西班牙语<br><code>it</code>：意大利语<br><code>de</code>：德语<br><code>tr</code>：土耳其语<br><code>ru</code>：俄语<br><code>pt</code>：葡萄牙语（巴西）<br><code>pt-PT</code>：葡萄牙语（葡萄牙）<br><code>vi</code>：越南语<br><code>id</code>：印度尼西亚语<br><code>ms</code>：马来语<br><code>th</code>：泰语<br><code>ar</code>：阿拉伯语<br><code>hi</code>：印地语<br><code>fil</code>：菲律宾语</p><p><strong>注意</strong>：多语言方式，则使用 <code>/</code> 分割，如：<code>en/ja</code>，表示英语和日语。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranslateDstLanguage;

    /**
     * @var string <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>智能字幕预设模板别名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasName;

    /**
     * @var integer <p>字幕处理类型：</p><ul><li>0：ASR识别字幕</li><li>1：纯字幕翻译</li><li>2:  OCR识别字幕</li></ul>
     */
    public $ProcessType;

    /**
     * @var SelectingSubtitleAreasConfig <p>字幕OCR提取框选区域配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectingSubtitleAreasConfig;

    /**
     * @var integer <p>字幕压制模板id</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>说话人识别模式，可选值：<br>0：表示不开启说话人识别；<br>1：表示开启说话人识别；<br>默认值：0</p>
     */
    public $SpeakerMode;

    /**
     * @var integer <p>说话人识别输出到字幕文件，可选值：<br>0：表示不输出到字幕文件；<br>1：表示输出到vtt字幕文件<br>注意：使用此参数SpeakerMode的值不能为0；<br>默认值：0</p>
     */
    public $SpeakerLabel;

    /**
     * @param integer $Definition <p>智能字幕模板唯一标识</p>
     * @param string $Name <p>智能字幕模板名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment <p>智能字幕模板描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>模板类型，取值范围：</p><ul><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure <p>ASR热词库参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsrHotWordsLibraryName <p>模板关联热词库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VideoSrcLanguage <p>智能字幕视频源语言列表：</p><p><code>zh</code>：简体中文<br><code>yue</code>：中文粵语<br><code>zh-PY</code>：中英粤<br><code>zh_medical</code>：中文医疗<br><code>zh_dialect</code>：中文方言<br><code>prime_zh</code>：中英方言<br><code>zh_en</code>：中英<br><code>en</code>：英语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>fr</code>：法语<br><code>es</code>：西班牙语<br><code>it</code>：意大利语<br><code>de</code>：德语<br><code>tr</code>：土耳其语<br><code>ru</code>：俄语<br><code>pt</code>：葡萄牙语（巴西）<br><code>pt-PT</code>：葡萄牙语（葡萄牙）<br><code>vi</code>：越南语<br><code>id</code>：印度尼西亚语<br><code>ms</code>：马来语<br><code>th</code>：泰语<br><code>ar</code>：阿拉伯语<br><code>hi</code>：印地语<br><code>fil</code>：菲律宾语<br><code>auto</code>：自动识别（仅在纯字幕翻译中支持）</p>
     * @param string $SubtitleFormat <p>智能字幕文件格式</p><ul><li>vtt: WebVTT 格式</li><li>srt: SRT格式</li><li>original：与源字幕文件一致（用于纯字幕翻译模板）</li><li>不填或填空：不生成字幕文件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubtitleType <p>智能字幕字幕语言类型<br>0: 源语言<br>1: 翻译语言<br>2: 源语言+翻译语言<br>当TranslateSwitch为OFF时仅支持取0<br>当TranslateSwitch为ON时仅支持取1或2</p>
     * @param string $TranslateSwitch <p>字幕翻译开关<br>ON: 开启翻译<br>OFF: 关闭翻译</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranslateDstLanguage <p>字幕翻译目标语言<br>当TranslateSwitch为ON的时候生效<br><code>zh</code>：简体中文<br><code>zh-TW</code>：繁体中文<br><code>en</code>：英语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>fr</code>：法语<br><code>es</code>：西班牙语<br><code>it</code>：意大利语<br><code>de</code>：德语<br><code>tr</code>：土耳其语<br><code>ru</code>：俄语<br><code>pt</code>：葡萄牙语（巴西）<br><code>pt-PT</code>：葡萄牙语（葡萄牙）<br><code>vi</code>：越南语<br><code>id</code>：印度尼西亚语<br><code>ms</code>：马来语<br><code>th</code>：泰语<br><code>ar</code>：阿拉伯语<br><code>hi</code>：印地语<br><code>fil</code>：菲律宾语</p><p><strong>注意</strong>：多语言方式，则使用 <code>/</code> 分割，如：<code>en/ja</code>，表示英语和日语。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
     * @param string $UpdateTime <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
     * @param string $AliasName <p>智能字幕预设模板别名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProcessType <p>字幕处理类型：</p><ul><li>0：ASR识别字幕</li><li>1：纯字幕翻译</li><li>2:  OCR识别字幕</li></ul>
     * @param SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig <p>字幕OCR提取框选区域配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubtitleEmbedId <p>字幕压制模板id</p>
     * @param integer $SpeakerMode <p>说话人识别模式，可选值：<br>0：表示不开启说话人识别；<br>1：表示开启说话人识别；<br>默认值：0</p>
     * @param integer $SpeakerLabel <p>说话人识别输出到字幕文件，可选值：<br>0：表示不输出到字幕文件；<br>1：表示输出到vtt字幕文件<br>注意：使用此参数SpeakerMode的值不能为0；<br>默认值：0</p>
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

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("SelectingSubtitleAreasConfig",$param) and $param["SelectingSubtitleAreasConfig"] !== null) {
            $this->SelectingSubtitleAreasConfig = new SelectingSubtitleAreasConfig();
            $this->SelectingSubtitleAreasConfig->deserialize($param["SelectingSubtitleAreasConfig"]);
        }

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("SpeakerMode",$param) and $param["SpeakerMode"] !== null) {
            $this->SpeakerMode = $param["SpeakerMode"];
        }

        if (array_key_exists("SpeakerLabel",$param) and $param["SpeakerLabel"] !== null) {
            $this->SpeakerLabel = $param["SpeakerLabel"];
        }
    }
}
