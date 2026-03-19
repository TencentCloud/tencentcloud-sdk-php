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
 * 智能擦除模板去字幕配置
 *
 * @method string getSubtitleEraseMethod() 获取<p>字幕擦除方式。<br><strong>自动擦除：</strong>通过AI模型自动识别视频中的字幕文本内容，进行无痕化擦除，生成新的视频。但画面干扰、特殊字幕样式可能会带来一定漏擦误擦问题，可以通过指定区域擦除处理。<br>当使用自动擦除时，若您不指定AutoAreas，将对默认区域（画面中下部）进行自动擦除；若指定AutoAreas，将改为对您指定的区域进行自动擦除。<br><strong>指定区域擦除：</strong>若您的字幕位置较固定，建议您直接指定擦除区域，最大程度减少漏擦的情况。<br>当您选择指定区域擦除时，请在CustomAreas中至少传入一个指定区域。</p><ul><li>auto 自动擦除</li><li>custom 指定区域擦除</li></ul>
 * @method void setSubtitleEraseMethod(string $SubtitleEraseMethod) 设置<p>字幕擦除方式。<br><strong>自动擦除：</strong>通过AI模型自动识别视频中的字幕文本内容，进行无痕化擦除，生成新的视频。但画面干扰、特殊字幕样式可能会带来一定漏擦误擦问题，可以通过指定区域擦除处理。<br>当使用自动擦除时，若您不指定AutoAreas，将对默认区域（画面中下部）进行自动擦除；若指定AutoAreas，将改为对您指定的区域进行自动擦除。<br><strong>指定区域擦除：</strong>若您的字幕位置较固定，建议您直接指定擦除区域，最大程度减少漏擦的情况。<br>当您选择指定区域擦除时，请在CustomAreas中至少传入一个指定区域。</p><ul><li>auto 自动擦除</li><li>custom 指定区域擦除</li></ul>
 * @method string getSubtitleModel() 获取<p>字幕擦除模型。<br><strong>标准版（推荐）：</strong>若您的字幕样式标准，通常建议选择该版本，细节无痕化效果更好。<br><strong>区域版：</strong>若您的字幕存在花体、阴影、动效等特殊样式，建议选择区域版，擦除面积更大，但细节效果不如标准版。</p><ul><li>standard 标准模型</li><li>area 区域模型</li></ul>
 * @method void setSubtitleModel(string $SubtitleModel) 设置<p>字幕擦除模型。<br><strong>标准版（推荐）：</strong>若您的字幕样式标准，通常建议选择该版本，细节无痕化效果更好。<br><strong>区域版：</strong>若您的字幕存在花体、阴影、动效等特殊样式，建议选择区域版，擦除面积更大，但细节效果不如标准版。</p><ul><li>standard 标准模型</li><li>area 区域模型</li></ul>
 * @method string getOcrSwitch() 获取<p>是否开启OCR字幕提取，默认取OFF。<br>当且仅当SubtitleEraseMethod取auto时支持开启OCR字幕提取，开启后将识别自动擦除区域内出现时间最长且最稳定的文字区域为字幕区域，对字幕区域中的文字进行提取和擦除。</p><ul><li>ON 开启</li><li>OFF 关闭</li></ul>
 * @method void setOcrSwitch(string $OcrSwitch) 设置<p>是否开启OCR字幕提取，默认取OFF。<br>当且仅当SubtitleEraseMethod取auto时支持开启OCR字幕提取，开启后将识别自动擦除区域内出现时间最长且最稳定的文字区域为字幕区域，对字幕区域中的文字进行提取和擦除。</p><ul><li>ON 开启</li><li>OFF 关闭</li></ul>
 * @method string getSubtitleLang() 获取<p>字幕语言，用于指导OCR识别，默认取zh_en；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>zh_en 中英文</li><li>multi 其他<br>其他具体支持识别如下语言：<br>中文、英文、日文、韩语、西班牙语、法语、德语、葡萄牙语、越南语、马来语、俄语、意大利语、荷兰语、瑞典语、芬兰语、丹麦语、挪威语、匈牙利语、泰语、印地语、阿拉伯语、印度-孟加拉语、印度-古吉拉特语、印度-卡纳达语 、印度-马拉亚拉姆语 、印度-泰米尔语、印度-泰卢固语、斯洛文尼亚语、波兰语、加泰罗尼亚语、波斯尼亚语、捷克语、爱沙尼亚语、克罗地亚语、旁遮普语、马拉地语、阿塞拜疆语、印尼语、卢森堡语 、立陶宛语、拉脱维亚语、马耳他语、斯洛伐克语、土耳其语、哈萨克语、希腊语、爱尔兰语、白俄罗斯语、高棉语、他加禄语、普什图语、波斯语、塔吉克斯坦语</li></ul>
 * @method void setSubtitleLang(string $SubtitleLang) 设置<p>字幕语言，用于指导OCR识别，默认取zh_en；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>zh_en 中英文</li><li>multi 其他<br>其他具体支持识别如下语言：<br>中文、英文、日文、韩语、西班牙语、法语、德语、葡萄牙语、越南语、马来语、俄语、意大利语、荷兰语、瑞典语、芬兰语、丹麦语、挪威语、匈牙利语、泰语、印地语、阿拉伯语、印度-孟加拉语、印度-古吉拉特语、印度-卡纳达语 、印度-马拉亚拉姆语 、印度-泰米尔语、印度-泰卢固语、斯洛文尼亚语、波兰语、加泰罗尼亚语、波斯尼亚语、捷克语、爱沙尼亚语、克罗地亚语、旁遮普语、马拉地语、阿塞拜疆语、印尼语、卢森堡语 、立陶宛语、拉脱维亚语、马耳他语、斯洛伐克语、土耳其语、哈萨克语、希腊语、爱尔兰语、白俄罗斯语、高棉语、他加禄语、普什图语、波斯语、塔吉克斯坦语</li></ul>
 * @method string getSubtitleFormat() 获取<p>字幕文件格式，默认取vtt；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>srt srt格式</li><li>vtt WebVTT格式</li><li>当填写SubtitleEmbedId时可以取值空字符串，表示不输出字幕文件</li></ul>
 * @method void setSubtitleFormat(string $SubtitleFormat) 设置<p>字幕文件格式，默认取vtt；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>srt srt格式</li><li>vtt WebVTT格式</li><li>当填写SubtitleEmbedId时可以取值空字符串，表示不输出字幕文件</li></ul>
 * @method string getTransSwitch() 获取<p>是否开启字幕翻译，默认取OFF；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>ON 开启</li><li>OFF 关闭</li></ul>
 * @method void setTransSwitch(string $TransSwitch) 设置<p>是否开启字幕翻译，默认取OFF；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>ON 开启</li><li>OFF 关闭</li></ul>
 * @method string getTransDstLang() 获取<p>字幕翻译目标语言，默认取en；仅当TransSwitch取&quot;ON&quot;时生效。<br>当前支持以下语言：<br>zh：简体中文<br>en：英语<br>ja：日语<br>ko：韩语<br>fr：法语<br>es：西班牙语<br>it：意大利语<br>de：德语<br>tr：土耳其语<br>ru：俄语<br>pt：葡萄牙语<br>vi：越南语<br>id：印度尼西亚语<br>ms：马来语<br>th：泰语<br>ar：阿拉伯语<br>hi：印地语</p>
 * @method void setTransDstLang(string $TransDstLang) 设置<p>字幕翻译目标语言，默认取en；仅当TransSwitch取&quot;ON&quot;时生效。<br>当前支持以下语言：<br>zh：简体中文<br>en：英语<br>ja：日语<br>ko：韩语<br>fr：法语<br>es：西班牙语<br>it：意大利语<br>de：德语<br>tr：土耳其语<br>ru：俄语<br>pt：葡萄牙语<br>vi：越南语<br>id：印度尼西亚语<br>ms：马来语<br>th：泰语<br>ar：阿拉伯语<br>hi：印地语</p>
 * @method array getAutoAreas() 获取<p>自动擦除自定义区域。<br>对选定区域，利用AI模型自动检测其中存在的擦除目标并擦除。<br>注意：当擦除方式选择custom时，此参数将不会生效；修改模板时，清除区域请传入[]，不传时将保持模板区域信息不变。</p>
 * @method void setAutoAreas(array $AutoAreas) 设置<p>自动擦除自定义区域。<br>对选定区域，利用AI模型自动检测其中存在的擦除目标并擦除。<br>注意：当擦除方式选择custom时，此参数将不会生效；修改模板时，清除区域请传入[]，不传时将保持模板区域信息不变。</p>
 * @method array getCustomAreas() 获取<p>指定擦除自定义区域。<br>对选定区域，在选定时间段内不进行检测识别直接进行擦除。<br>注意：修改模板时，清除区域请传入[]，不传时将保持模板区域信息不变。</p>
 * @method void setCustomAreas(array $CustomAreas) 设置<p>指定擦除自定义区域。<br>对选定区域，在选定时间段内不进行检测识别直接进行擦除。<br>注意：修改模板时，清除区域请传入[]，不传时将保持模板区域信息不变。</p>
 * @method integer getSubtitleEmbedId() 获取<p>字幕压制模板id，只有开启OCR翻译时可以填写</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) 设置<p>字幕压制模板id，只有开启OCR翻译时可以填写</p>
 * @method integer getUseOriginalPos() 获取<p>压制配置，默认开启1, 把字幕压制回原字幕位置。只有开启OCR翻译时可以填写，取0时表示不开启压回原位</p>
 * @method void setUseOriginalPos(integer $UseOriginalPos) 设置<p>压制配置，默认开启1, 把字幕压制回原字幕位置。只有开启OCR翻译时可以填写，取0时表示不开启压回原位</p>
 * @method integer getUseOriginalSize() 获取<p>压制配置，默认开启1, 开启后使用原字幕字号。只有开启OCR翻译时可以填写，取0时表示不使用原字号</p>
 * @method void setUseOriginalSize(integer $UseOriginalSize) 设置<p>压制配置，默认开启1, 开启后使用原字幕字号。只有开启OCR翻译时可以填写，取0时表示不使用原字号</p>
 */
class SmartEraseSubtitleConfig extends AbstractModel
{
    /**
     * @var string <p>字幕擦除方式。<br><strong>自动擦除：</strong>通过AI模型自动识别视频中的字幕文本内容，进行无痕化擦除，生成新的视频。但画面干扰、特殊字幕样式可能会带来一定漏擦误擦问题，可以通过指定区域擦除处理。<br>当使用自动擦除时，若您不指定AutoAreas，将对默认区域（画面中下部）进行自动擦除；若指定AutoAreas，将改为对您指定的区域进行自动擦除。<br><strong>指定区域擦除：</strong>若您的字幕位置较固定，建议您直接指定擦除区域，最大程度减少漏擦的情况。<br>当您选择指定区域擦除时，请在CustomAreas中至少传入一个指定区域。</p><ul><li>auto 自动擦除</li><li>custom 指定区域擦除</li></ul>
     */
    public $SubtitleEraseMethod;

    /**
     * @var string <p>字幕擦除模型。<br><strong>标准版（推荐）：</strong>若您的字幕样式标准，通常建议选择该版本，细节无痕化效果更好。<br><strong>区域版：</strong>若您的字幕存在花体、阴影、动效等特殊样式，建议选择区域版，擦除面积更大，但细节效果不如标准版。</p><ul><li>standard 标准模型</li><li>area 区域模型</li></ul>
     */
    public $SubtitleModel;

    /**
     * @var string <p>是否开启OCR字幕提取，默认取OFF。<br>当且仅当SubtitleEraseMethod取auto时支持开启OCR字幕提取，开启后将识别自动擦除区域内出现时间最长且最稳定的文字区域为字幕区域，对字幕区域中的文字进行提取和擦除。</p><ul><li>ON 开启</li><li>OFF 关闭</li></ul>
     */
    public $OcrSwitch;

    /**
     * @var string <p>字幕语言，用于指导OCR识别，默认取zh_en；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>zh_en 中英文</li><li>multi 其他<br>其他具体支持识别如下语言：<br>中文、英文、日文、韩语、西班牙语、法语、德语、葡萄牙语、越南语、马来语、俄语、意大利语、荷兰语、瑞典语、芬兰语、丹麦语、挪威语、匈牙利语、泰语、印地语、阿拉伯语、印度-孟加拉语、印度-古吉拉特语、印度-卡纳达语 、印度-马拉亚拉姆语 、印度-泰米尔语、印度-泰卢固语、斯洛文尼亚语、波兰语、加泰罗尼亚语、波斯尼亚语、捷克语、爱沙尼亚语、克罗地亚语、旁遮普语、马拉地语、阿塞拜疆语、印尼语、卢森堡语 、立陶宛语、拉脱维亚语、马耳他语、斯洛伐克语、土耳其语、哈萨克语、希腊语、爱尔兰语、白俄罗斯语、高棉语、他加禄语、普什图语、波斯语、塔吉克斯坦语</li></ul>
     */
    public $SubtitleLang;

    /**
     * @var string <p>字幕文件格式，默认取vtt；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>srt srt格式</li><li>vtt WebVTT格式</li><li>当填写SubtitleEmbedId时可以取值空字符串，表示不输出字幕文件</li></ul>
     */
    public $SubtitleFormat;

    /**
     * @var string <p>是否开启字幕翻译，默认取OFF；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>ON 开启</li><li>OFF 关闭</li></ul>
     */
    public $TransSwitch;

    /**
     * @var string <p>字幕翻译目标语言，默认取en；仅当TransSwitch取&quot;ON&quot;时生效。<br>当前支持以下语言：<br>zh：简体中文<br>en：英语<br>ja：日语<br>ko：韩语<br>fr：法语<br>es：西班牙语<br>it：意大利语<br>de：德语<br>tr：土耳其语<br>ru：俄语<br>pt：葡萄牙语<br>vi：越南语<br>id：印度尼西亚语<br>ms：马来语<br>th：泰语<br>ar：阿拉伯语<br>hi：印地语</p>
     */
    public $TransDstLang;

    /**
     * @var array <p>自动擦除自定义区域。<br>对选定区域，利用AI模型自动检测其中存在的擦除目标并擦除。<br>注意：当擦除方式选择custom时，此参数将不会生效；修改模板时，清除区域请传入[]，不传时将保持模板区域信息不变。</p>
     */
    public $AutoAreas;

    /**
     * @var array <p>指定擦除自定义区域。<br>对选定区域，在选定时间段内不进行检测识别直接进行擦除。<br>注意：修改模板时，清除区域请传入[]，不传时将保持模板区域信息不变。</p>
     */
    public $CustomAreas;

    /**
     * @var integer <p>字幕压制模板id，只有开启OCR翻译时可以填写</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>压制配置，默认开启1, 把字幕压制回原字幕位置。只有开启OCR翻译时可以填写，取0时表示不开启压回原位</p>
     */
    public $UseOriginalPos;

    /**
     * @var integer <p>压制配置，默认开启1, 开启后使用原字幕字号。只有开启OCR翻译时可以填写，取0时表示不使用原字号</p>
     */
    public $UseOriginalSize;

    /**
     * @param string $SubtitleEraseMethod <p>字幕擦除方式。<br><strong>自动擦除：</strong>通过AI模型自动识别视频中的字幕文本内容，进行无痕化擦除，生成新的视频。但画面干扰、特殊字幕样式可能会带来一定漏擦误擦问题，可以通过指定区域擦除处理。<br>当使用自动擦除时，若您不指定AutoAreas，将对默认区域（画面中下部）进行自动擦除；若指定AutoAreas，将改为对您指定的区域进行自动擦除。<br><strong>指定区域擦除：</strong>若您的字幕位置较固定，建议您直接指定擦除区域，最大程度减少漏擦的情况。<br>当您选择指定区域擦除时，请在CustomAreas中至少传入一个指定区域。</p><ul><li>auto 自动擦除</li><li>custom 指定区域擦除</li></ul>
     * @param string $SubtitleModel <p>字幕擦除模型。<br><strong>标准版（推荐）：</strong>若您的字幕样式标准，通常建议选择该版本，细节无痕化效果更好。<br><strong>区域版：</strong>若您的字幕存在花体、阴影、动效等特殊样式，建议选择区域版，擦除面积更大，但细节效果不如标准版。</p><ul><li>standard 标准模型</li><li>area 区域模型</li></ul>
     * @param string $OcrSwitch <p>是否开启OCR字幕提取，默认取OFF。<br>当且仅当SubtitleEraseMethod取auto时支持开启OCR字幕提取，开启后将识别自动擦除区域内出现时间最长且最稳定的文字区域为字幕区域，对字幕区域中的文字进行提取和擦除。</p><ul><li>ON 开启</li><li>OFF 关闭</li></ul>
     * @param string $SubtitleLang <p>字幕语言，用于指导OCR识别，默认取zh_en；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>zh_en 中英文</li><li>multi 其他<br>其他具体支持识别如下语言：<br>中文、英文、日文、韩语、西班牙语、法语、德语、葡萄牙语、越南语、马来语、俄语、意大利语、荷兰语、瑞典语、芬兰语、丹麦语、挪威语、匈牙利语、泰语、印地语、阿拉伯语、印度-孟加拉语、印度-古吉拉特语、印度-卡纳达语 、印度-马拉亚拉姆语 、印度-泰米尔语、印度-泰卢固语、斯洛文尼亚语、波兰语、加泰罗尼亚语、波斯尼亚语、捷克语、爱沙尼亚语、克罗地亚语、旁遮普语、马拉地语、阿塞拜疆语、印尼语、卢森堡语 、立陶宛语、拉脱维亚语、马耳他语、斯洛伐克语、土耳其语、哈萨克语、希腊语、爱尔兰语、白俄罗斯语、高棉语、他加禄语、普什图语、波斯语、塔吉克斯坦语</li></ul>
     * @param string $SubtitleFormat <p>字幕文件格式，默认取vtt；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>srt srt格式</li><li>vtt WebVTT格式</li><li>当填写SubtitleEmbedId时可以取值空字符串，表示不输出字幕文件</li></ul>
     * @param string $TransSwitch <p>是否开启字幕翻译，默认取OFF；仅当OcrSwitch取&quot;ON&quot;时生效。</p><ul><li>ON 开启</li><li>OFF 关闭</li></ul>
     * @param string $TransDstLang <p>字幕翻译目标语言，默认取en；仅当TransSwitch取&quot;ON&quot;时生效。<br>当前支持以下语言：<br>zh：简体中文<br>en：英语<br>ja：日语<br>ko：韩语<br>fr：法语<br>es：西班牙语<br>it：意大利语<br>de：德语<br>tr：土耳其语<br>ru：俄语<br>pt：葡萄牙语<br>vi：越南语<br>id：印度尼西亚语<br>ms：马来语<br>th：泰语<br>ar：阿拉伯语<br>hi：印地语</p>
     * @param array $AutoAreas <p>自动擦除自定义区域。<br>对选定区域，利用AI模型自动检测其中存在的擦除目标并擦除。<br>注意：当擦除方式选择custom时，此参数将不会生效；修改模板时，清除区域请传入[]，不传时将保持模板区域信息不变。</p>
     * @param array $CustomAreas <p>指定擦除自定义区域。<br>对选定区域，在选定时间段内不进行检测识别直接进行擦除。<br>注意：修改模板时，清除区域请传入[]，不传时将保持模板区域信息不变。</p>
     * @param integer $SubtitleEmbedId <p>字幕压制模板id，只有开启OCR翻译时可以填写</p>
     * @param integer $UseOriginalPos <p>压制配置，默认开启1, 把字幕压制回原字幕位置。只有开启OCR翻译时可以填写，取0时表示不开启压回原位</p>
     * @param integer $UseOriginalSize <p>压制配置，默认开启1, 开启后使用原字幕字号。只有开启OCR翻译时可以填写，取0时表示不使用原字号</p>
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
        if (array_key_exists("SubtitleEraseMethod",$param) and $param["SubtitleEraseMethod"] !== null) {
            $this->SubtitleEraseMethod = $param["SubtitleEraseMethod"];
        }

        if (array_key_exists("SubtitleModel",$param) and $param["SubtitleModel"] !== null) {
            $this->SubtitleModel = $param["SubtitleModel"];
        }

        if (array_key_exists("OcrSwitch",$param) and $param["OcrSwitch"] !== null) {
            $this->OcrSwitch = $param["OcrSwitch"];
        }

        if (array_key_exists("SubtitleLang",$param) and $param["SubtitleLang"] !== null) {
            $this->SubtitleLang = $param["SubtitleLang"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }

        if (array_key_exists("TransSwitch",$param) and $param["TransSwitch"] !== null) {
            $this->TransSwitch = $param["TransSwitch"];
        }

        if (array_key_exists("TransDstLang",$param) and $param["TransDstLang"] !== null) {
            $this->TransDstLang = $param["TransDstLang"];
        }

        if (array_key_exists("AutoAreas",$param) and $param["AutoAreas"] !== null) {
            $this->AutoAreas = [];
            foreach ($param["AutoAreas"] as $key => $value){
                $obj = new EraseArea();
                $obj->deserialize($value);
                array_push($this->AutoAreas, $obj);
            }
        }

        if (array_key_exists("CustomAreas",$param) and $param["CustomAreas"] !== null) {
            $this->CustomAreas = [];
            foreach ($param["CustomAreas"] as $key => $value){
                $obj = new EraseTimeArea();
                $obj->deserialize($value);
                array_push($this->CustomAreas, $obj);
            }
        }

        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("UseOriginalPos",$param) and $param["UseOriginalPos"] !== null) {
            $this->UseOriginalPos = $param["UseOriginalPos"];
        }

        if (array_key_exists("UseOriginalSize",$param) and $param["UseOriginalSize"] !== null) {
            $this->UseOriginalSize = $param["UseOriginalSize"];
        }
    }
}
