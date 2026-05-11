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
 * @method string getName() 获取<p>智能字幕模板名称<br>长度限制：64 个字符。</p>
 * @method void setName(string $Name) 设置<p>智能字幕模板名称<br>长度限制：64 个字符。</p>
 * @method string getVideoSrcLanguage() 获取<p>智能字幕视频源语言</p><p>ASR识别和纯字幕翻译取值参考文档：<a href="https://cloud.tencent.com/document/product/862/116243#ASRlanguages">ASR 识别支持语种</a></p><p>下面列举部分常用取值</p><p><code>auto</code>：自动识别，<code>zh</code>：简体中文，<code>en</code>：英语，<code>ja</code>：日语，<code>ko</code>：韩语，<code>zh-PY</code>：中英粤，<code>zh_medical</code>：中文医疗，<code>vi</code>：越南语，<code>ms</code>：马来语，<code>id</code>：印度尼西亚语，<code>fil</code>：菲律宾语，<code>th</code>：泰语，<code>pt</code>：葡萄牙语，<code>tr</code>：土耳其语，<code>ar</code>：阿拉伯语，<code>es</code>：西班牙语，<code>hi</code>：印地语，<code>fr</code>：法语，<code>de</code>：德语，<code>it</code>：意大利语，<code>zh_dialect</code>：中文方言，<code>zh_en</code>：中英，<code>yue</code>：粤语，<code>ru</code>：俄语，<code>prime_zh</code>：中英方言</p><p>OCR 识别仅支持以下取值：</p><p><code>zh_en</code>：中英<br><code>multi</code>：其他</p><p>不同取值支持的语种参考文档：<a href="https://cloud.tencent.com/document/product/862/116243#OCRlanguages">OCR 识别支持语种</a></p>
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) 设置<p>智能字幕视频源语言</p><p>ASR识别和纯字幕翻译取值参考文档：<a href="https://cloud.tencent.com/document/product/862/116243#ASRlanguages">ASR 识别支持语种</a></p><p>下面列举部分常用取值</p><p><code>auto</code>：自动识别，<code>zh</code>：简体中文，<code>en</code>：英语，<code>ja</code>：日语，<code>ko</code>：韩语，<code>zh-PY</code>：中英粤，<code>zh_medical</code>：中文医疗，<code>vi</code>：越南语，<code>ms</code>：马来语，<code>id</code>：印度尼西亚语，<code>fil</code>：菲律宾语，<code>th</code>：泰语，<code>pt</code>：葡萄牙语，<code>tr</code>：土耳其语，<code>ar</code>：阿拉伯语，<code>es</code>：西班牙语，<code>hi</code>：印地语，<code>fr</code>：法语，<code>de</code>：德语，<code>it</code>：意大利语，<code>zh_dialect</code>：中文方言，<code>zh_en</code>：中英，<code>yue</code>：粤语，<code>ru</code>：俄语，<code>prime_zh</code>：中英方言</p><p>OCR 识别仅支持以下取值：</p><p><code>zh_en</code>：中英<br><code>multi</code>：其他</p><p>不同取值支持的语种参考文档：<a href="https://cloud.tencent.com/document/product/862/116243#OCRlanguages">OCR 识别支持语种</a></p>
 * @method integer getSubtitleType() 获取<p>智能字幕字幕语言类型<br>0: 源语言<br>1: 翻译语言<br>2: 源语言+翻译语言<br>当TranslateSwitch为OFF时仅支持取0<br>当TranslateSwitch为ON时仅支持取1或2</p>
 * @method void setSubtitleType(integer $SubtitleType) 设置<p>智能字幕字幕语言类型<br>0: 源语言<br>1: 翻译语言<br>2: 源语言+翻译语言<br>当TranslateSwitch为OFF时仅支持取0<br>当TranslateSwitch为ON时仅支持取1或2</p>
 * @method string getComment() 获取<p>智能字幕模板描述信息<br>长度限制：256 个字符。</p>
 * @method void setComment(string $Comment) 设置<p>智能字幕模板描述信息<br>长度限制：256 个字符。</p>
 * @method string getSubtitleFormat() 获取<p>智能字幕文件格式:</p><ul><li>ASR识别翻译处理类型下：<ul><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li><li>不填或填空：不生成字幕文件</li></ul></li><li>纯字幕翻译处理类型下：<ul><li>original：与源文件一致</li><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li></ul></li><li>OCR识别翻译处理类型下：<ul><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li></ul></li></ul><p><strong>注意</strong>：</p><ul><li>ASR识别方式下，翻译大于等于2种语言时不允许传空或不传；</li><li>纯字幕翻译方式下，不允许传空或不传</li><li>OCR类型的任务，在开启压制时，允许不传或传空</li></ul>
 * @method void setSubtitleFormat(string $SubtitleFormat) 设置<p>智能字幕文件格式:</p><ul><li>ASR识别翻译处理类型下：<ul><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li><li>不填或填空：不生成字幕文件</li></ul></li><li>纯字幕翻译处理类型下：<ul><li>original：与源文件一致</li><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li></ul></li><li>OCR识别翻译处理类型下：<ul><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li></ul></li></ul><p><strong>注意</strong>：</p><ul><li>ASR识别方式下，翻译大于等于2种语言时不允许传空或不传；</li><li>纯字幕翻译方式下，不允许传空或不传</li><li>OCR类型的任务，在开启压制时，允许不传或传空</li></ul>
 * @method AsrHotWordsConfigure getAsrHotWordsConfigure() 获取<p>ASR热词库参数</p>
 * @method void setAsrHotWordsConfigure(AsrHotWordsConfigure $AsrHotWordsConfigure) 设置<p>ASR热词库参数</p>
 * @method string getTranslateSwitch() 获取<p>字幕翻译开关<br><code>ON</code>: 开启翻译<br><code>OFF</code>: 关闭翻译</p><p><strong>注意</strong>：纯字幕翻译方式下，不传默认是打开的，不允许传空或<code>OFF</code>；</p>
 * @method void setTranslateSwitch(string $TranslateSwitch) 设置<p>字幕翻译开关<br><code>ON</code>: 开启翻译<br><code>OFF</code>: 关闭翻译</p><p><strong>注意</strong>：纯字幕翻译方式下，不传默认是打开的，不允许传空或<code>OFF</code>；</p>
 * @method string getTranslateDstLanguage() 获取<p>字幕翻译目标语言当TranslateSwitch为ON的时候生效，翻译语言列表：</p><p>ASR 提取翻译参考语种列表：<a href="https://cloud.tencent.com/document/product/862/116243#ASRlanguages">ASR 翻译支持语种</a><br>OCR 提取翻译参考语种列表：<a href="https://cloud.tencent.com/document/product/862/116243#OCRlanguages">OCR 翻译支持语种</a></p><p><strong>注意</strong>：多语言方式，则使用 <code>/</code> 分割，如：<code>en/ja</code>，表示英语和日语。</p><p>部分常用语种示例：</p><p><code>ar</code>：阿拉伯语<br><code>en</code>：英语<br><code>fr</code>：法语<br><code>it</code>：意大利语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>ru</code>：俄语<br><code>th</code>：泰语<br><code>tr</code>：土耳其语<br><code>vi</code>：越南语<br><code>yue</code>：粤语<br><code>zh</code>：简体中文<br><code>zh-TW</code>：繁体中文</p>
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) 设置<p>字幕翻译目标语言当TranslateSwitch为ON的时候生效，翻译语言列表：</p><p>ASR 提取翻译参考语种列表：<a href="https://cloud.tencent.com/document/product/862/116243#ASRlanguages">ASR 翻译支持语种</a><br>OCR 提取翻译参考语种列表：<a href="https://cloud.tencent.com/document/product/862/116243#OCRlanguages">OCR 翻译支持语种</a></p><p><strong>注意</strong>：多语言方式，则使用 <code>/</code> 分割，如：<code>en/ja</code>，表示英语和日语。</p><p>部分常用语种示例：</p><p><code>ar</code>：阿拉伯语<br><code>en</code>：英语<br><code>fr</code>：法语<br><code>it</code>：意大利语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>ru</code>：俄语<br><code>th</code>：泰语<br><code>tr</code>：土耳其语<br><code>vi</code>：越南语<br><code>yue</code>：粤语<br><code>zh</code>：简体中文<br><code>zh-TW</code>：繁体中文</p>
 * @method integer getProcessType() 获取<p>字幕处理类型：</p><ul><li>0：ASR识别字幕</li><li>1：纯字幕翻译</li><li>2：OCR识别字幕</li></ul><p><strong>注意</strong>：不传的情况下默认类型为 ASR识别字幕</p>
 * @method void setProcessType(integer $ProcessType) 设置<p>字幕处理类型：</p><ul><li>0：ASR识别字幕</li><li>1：纯字幕翻译</li><li>2：OCR识别字幕</li></ul><p><strong>注意</strong>：不传的情况下默认类型为 ASR识别字幕</p>
 * @method SelectingSubtitleAreasConfig getSelectingSubtitleAreasConfig() 获取<p>字幕OCR提取框选区域配置</p>
 * @method void setSelectingSubtitleAreasConfig(SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig) 设置<p>字幕OCR提取框选区域配置</p>
 * @method integer getSubtitleEmbedId() 获取<p>压制模板id，只有ProcessType为0或2（任务类型为ASR或OCR）时才允许填写。开启多个翻译语言时，不允许填写。</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) 设置<p>压制模板id，只有ProcessType为0或2（任务类型为ASR或OCR）时才允许填写。开启多个翻译语言时，不允许填写。</p>
 * @method integer getSpeakerMode() 获取<p>说话人识别开关，可选值：<br>0：表示不开启说话人识别；<br>1：表示开启说话人识别；<br>默认不开启说话人识别。</p>
 * @method void setSpeakerMode(integer $SpeakerMode) 设置<p>说话人识别开关，可选值：<br>0：表示不开启说话人识别；<br>1：表示开启说话人识别；<br>默认不开启说话人识别。</p>
 * @method integer getSpeakerLabel() 获取<p>说话人识别输出到字幕文件，可选值：<br>0：表示不输出到字幕文件；<br>1：表示输出到vtt字幕文件<br>注意：使用此参数SpeakerMode的值不能为0；<br>默认不输出到字幕文件。</p>
 * @method void setSpeakerLabel(integer $SpeakerLabel) 设置<p>说话人识别输出到字幕文件，可选值：<br>0：表示不输出到字幕文件；<br>1：表示输出到vtt字幕文件<br>注意：使用此参数SpeakerMode的值不能为0；<br>默认不输出到字幕文件。</p>
 */
class CreateSmartSubtitleTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>智能字幕模板名称<br>长度限制：64 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>智能字幕视频源语言</p><p>ASR识别和纯字幕翻译取值参考文档：<a href="https://cloud.tencent.com/document/product/862/116243#ASRlanguages">ASR 识别支持语种</a></p><p>下面列举部分常用取值</p><p><code>auto</code>：自动识别，<code>zh</code>：简体中文，<code>en</code>：英语，<code>ja</code>：日语，<code>ko</code>：韩语，<code>zh-PY</code>：中英粤，<code>zh_medical</code>：中文医疗，<code>vi</code>：越南语，<code>ms</code>：马来语，<code>id</code>：印度尼西亚语，<code>fil</code>：菲律宾语，<code>th</code>：泰语，<code>pt</code>：葡萄牙语，<code>tr</code>：土耳其语，<code>ar</code>：阿拉伯语，<code>es</code>：西班牙语，<code>hi</code>：印地语，<code>fr</code>：法语，<code>de</code>：德语，<code>it</code>：意大利语，<code>zh_dialect</code>：中文方言，<code>zh_en</code>：中英，<code>yue</code>：粤语，<code>ru</code>：俄语，<code>prime_zh</code>：中英方言</p><p>OCR 识别仅支持以下取值：</p><p><code>zh_en</code>：中英<br><code>multi</code>：其他</p><p>不同取值支持的语种参考文档：<a href="https://cloud.tencent.com/document/product/862/116243#OCRlanguages">OCR 识别支持语种</a></p>
     */
    public $VideoSrcLanguage;

    /**
     * @var integer <p>智能字幕字幕语言类型<br>0: 源语言<br>1: 翻译语言<br>2: 源语言+翻译语言<br>当TranslateSwitch为OFF时仅支持取0<br>当TranslateSwitch为ON时仅支持取1或2</p>
     */
    public $SubtitleType;

    /**
     * @var string <p>智能字幕模板描述信息<br>长度限制：256 个字符。</p>
     */
    public $Comment;

    /**
     * @var string <p>智能字幕文件格式:</p><ul><li>ASR识别翻译处理类型下：<ul><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li><li>不填或填空：不生成字幕文件</li></ul></li><li>纯字幕翻译处理类型下：<ul><li>original：与源文件一致</li><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li></ul></li><li>OCR识别翻译处理类型下：<ul><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li></ul></li></ul><p><strong>注意</strong>：</p><ul><li>ASR识别方式下，翻译大于等于2种语言时不允许传空或不传；</li><li>纯字幕翻译方式下，不允许传空或不传</li><li>OCR类型的任务，在开启压制时，允许不传或传空</li></ul>
     */
    public $SubtitleFormat;

    /**
     * @var AsrHotWordsConfigure <p>ASR热词库参数</p>
     */
    public $AsrHotWordsConfigure;

    /**
     * @var string <p>字幕翻译开关<br><code>ON</code>: 开启翻译<br><code>OFF</code>: 关闭翻译</p><p><strong>注意</strong>：纯字幕翻译方式下，不传默认是打开的，不允许传空或<code>OFF</code>；</p>
     */
    public $TranslateSwitch;

    /**
     * @var string <p>字幕翻译目标语言当TranslateSwitch为ON的时候生效，翻译语言列表：</p><p>ASR 提取翻译参考语种列表：<a href="https://cloud.tencent.com/document/product/862/116243#ASRlanguages">ASR 翻译支持语种</a><br>OCR 提取翻译参考语种列表：<a href="https://cloud.tencent.com/document/product/862/116243#OCRlanguages">OCR 翻译支持语种</a></p><p><strong>注意</strong>：多语言方式，则使用 <code>/</code> 分割，如：<code>en/ja</code>，表示英语和日语。</p><p>部分常用语种示例：</p><p><code>ar</code>：阿拉伯语<br><code>en</code>：英语<br><code>fr</code>：法语<br><code>it</code>：意大利语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>ru</code>：俄语<br><code>th</code>：泰语<br><code>tr</code>：土耳其语<br><code>vi</code>：越南语<br><code>yue</code>：粤语<br><code>zh</code>：简体中文<br><code>zh-TW</code>：繁体中文</p>
     */
    public $TranslateDstLanguage;

    /**
     * @var integer <p>字幕处理类型：</p><ul><li>0：ASR识别字幕</li><li>1：纯字幕翻译</li><li>2：OCR识别字幕</li></ul><p><strong>注意</strong>：不传的情况下默认类型为 ASR识别字幕</p>
     */
    public $ProcessType;

    /**
     * @var SelectingSubtitleAreasConfig <p>字幕OCR提取框选区域配置</p>
     */
    public $SelectingSubtitleAreasConfig;

    /**
     * @var integer <p>压制模板id，只有ProcessType为0或2（任务类型为ASR或OCR）时才允许填写。开启多个翻译语言时，不允许填写。</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>说话人识别开关，可选值：<br>0：表示不开启说话人识别；<br>1：表示开启说话人识别；<br>默认不开启说话人识别。</p>
     */
    public $SpeakerMode;

    /**
     * @var integer <p>说话人识别输出到字幕文件，可选值：<br>0：表示不输出到字幕文件；<br>1：表示输出到vtt字幕文件<br>注意：使用此参数SpeakerMode的值不能为0；<br>默认不输出到字幕文件。</p>
     */
    public $SpeakerLabel;

    /**
     * @param string $Name <p>智能字幕模板名称<br>长度限制：64 个字符。</p>
     * @param string $VideoSrcLanguage <p>智能字幕视频源语言</p><p>ASR识别和纯字幕翻译取值参考文档：<a href="https://cloud.tencent.com/document/product/862/116243#ASRlanguages">ASR 识别支持语种</a></p><p>下面列举部分常用取值</p><p><code>auto</code>：自动识别，<code>zh</code>：简体中文，<code>en</code>：英语，<code>ja</code>：日语，<code>ko</code>：韩语，<code>zh-PY</code>：中英粤，<code>zh_medical</code>：中文医疗，<code>vi</code>：越南语，<code>ms</code>：马来语，<code>id</code>：印度尼西亚语，<code>fil</code>：菲律宾语，<code>th</code>：泰语，<code>pt</code>：葡萄牙语，<code>tr</code>：土耳其语，<code>ar</code>：阿拉伯语，<code>es</code>：西班牙语，<code>hi</code>：印地语，<code>fr</code>：法语，<code>de</code>：德语，<code>it</code>：意大利语，<code>zh_dialect</code>：中文方言，<code>zh_en</code>：中英，<code>yue</code>：粤语，<code>ru</code>：俄语，<code>prime_zh</code>：中英方言</p><p>OCR 识别仅支持以下取值：</p><p><code>zh_en</code>：中英<br><code>multi</code>：其他</p><p>不同取值支持的语种参考文档：<a href="https://cloud.tencent.com/document/product/862/116243#OCRlanguages">OCR 识别支持语种</a></p>
     * @param integer $SubtitleType <p>智能字幕字幕语言类型<br>0: 源语言<br>1: 翻译语言<br>2: 源语言+翻译语言<br>当TranslateSwitch为OFF时仅支持取0<br>当TranslateSwitch为ON时仅支持取1或2</p>
     * @param string $Comment <p>智能字幕模板描述信息<br>长度限制：256 个字符。</p>
     * @param string $SubtitleFormat <p>智能字幕文件格式:</p><ul><li>ASR识别翻译处理类型下：<ul><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li><li>不填或填空：不生成字幕文件</li></ul></li><li>纯字幕翻译处理类型下：<ul><li>original：与源文件一致</li><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li></ul></li><li>OCR识别翻译处理类型下：<ul><li>vtt: WebVTT 格式字幕</li><li>srt: SRT 格式字幕</li></ul></li></ul><p><strong>注意</strong>：</p><ul><li>ASR识别方式下，翻译大于等于2种语言时不允许传空或不传；</li><li>纯字幕翻译方式下，不允许传空或不传</li><li>OCR类型的任务，在开启压制时，允许不传或传空</li></ul>
     * @param AsrHotWordsConfigure $AsrHotWordsConfigure <p>ASR热词库参数</p>
     * @param string $TranslateSwitch <p>字幕翻译开关<br><code>ON</code>: 开启翻译<br><code>OFF</code>: 关闭翻译</p><p><strong>注意</strong>：纯字幕翻译方式下，不传默认是打开的，不允许传空或<code>OFF</code>；</p>
     * @param string $TranslateDstLanguage <p>字幕翻译目标语言当TranslateSwitch为ON的时候生效，翻译语言列表：</p><p>ASR 提取翻译参考语种列表：<a href="https://cloud.tencent.com/document/product/862/116243#ASRlanguages">ASR 翻译支持语种</a><br>OCR 提取翻译参考语种列表：<a href="https://cloud.tencent.com/document/product/862/116243#OCRlanguages">OCR 翻译支持语种</a></p><p><strong>注意</strong>：多语言方式，则使用 <code>/</code> 分割，如：<code>en/ja</code>，表示英语和日语。</p><p>部分常用语种示例：</p><p><code>ar</code>：阿拉伯语<br><code>en</code>：英语<br><code>fr</code>：法语<br><code>it</code>：意大利语<br><code>ja</code>：日语<br><code>ko</code>：韩语<br><code>ru</code>：俄语<br><code>th</code>：泰语<br><code>tr</code>：土耳其语<br><code>vi</code>：越南语<br><code>yue</code>：粤语<br><code>zh</code>：简体中文<br><code>zh-TW</code>：繁体中文</p>
     * @param integer $ProcessType <p>字幕处理类型：</p><ul><li>0：ASR识别字幕</li><li>1：纯字幕翻译</li><li>2：OCR识别字幕</li></ul><p><strong>注意</strong>：不传的情况下默认类型为 ASR识别字幕</p>
     * @param SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig <p>字幕OCR提取框选区域配置</p>
     * @param integer $SubtitleEmbedId <p>压制模板id，只有ProcessType为0或2（任务类型为ASR或OCR）时才允许填写。开启多个翻译语言时，不允许填写。</p>
     * @param integer $SpeakerMode <p>说话人识别开关，可选值：<br>0：表示不开启说话人识别；<br>1：表示开启说话人识别；<br>默认不开启说话人识别。</p>
     * @param integer $SpeakerLabel <p>说话人识别输出到字幕文件，可选值：<br>0：表示不输出到字幕文件；<br>1：表示输出到vtt字幕文件<br>注意：使用此参数SpeakerMode的值不能为0；<br>默认不输出到字幕文件。</p>
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
