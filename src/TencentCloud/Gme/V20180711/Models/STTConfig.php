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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音转文字参数
 *
 * @method string getLanguage() 获取
语音转文字支持识别的语言，默认是"zh" 中文

可通过购买「AI智能识别时长包」解锁或领取包月套餐体验版解锁不同语言. 

语音转文本不同套餐版本支持的语言如下：

**基础版**：
- "zh": 中文（简体）
- "zh-TW": 中文（繁体）
- "en": 英语

**标准版：**
- "8k_zh_large": 普方大模型引擎. 当前模型同时支持中文等语言的识别，模型参数量极大，语言模型性能增强，针对电话音频中各类场景、各类中文方言的识别准确率极大提升.
- "16k_zh_large": 普方英大模型引擎. 当前模型同时支持中文、英文、多种中文方言等语言的识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.
- "16k_multi_lang": 多语种大模型引擎. 当前模型同时支持英语、日语、韩语、阿拉伯语、菲律宾语、法语、印地语、印尼语、马来语、葡萄牙语、西班牙语、泰语、土耳其语、越南语、德语的识别，可实现15个语种的自动识别(句子/段落级别).
- "16k_zh_en": 中英大模型引擎. 当前模型同时支持中文、英语识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

**高级版：**
- "zh-dialect": 中国方言
- "zh-yue": 中国粤语
- "vi": 越南语
- "ja": 日语
- "ko": 韩语
- "id": 印度尼西亚语
- "th": 泰语
- "pt": 葡萄牙语
- "tr": 土耳其语
- "ar": 阿拉伯语
- "es": 西班牙语
- "hi": 印地语
- "fr": 法语
- "ms": 马来语
- "fil": 菲律宾语
- "de": 德语
- "it": 意大利语
- "ru": 俄语
- "sv": 瑞典语
- "da": 丹麦语
- "no": 挪威语

**注意：**
如果缺少满足您需求的语言，请联系我们技术人员。
 * @method void setLanguage(string $Language) 设置
语音转文字支持识别的语言，默认是"zh" 中文

可通过购买「AI智能识别时长包」解锁或领取包月套餐体验版解锁不同语言. 

语音转文本不同套餐版本支持的语言如下：

**基础版**：
- "zh": 中文（简体）
- "zh-TW": 中文（繁体）
- "en": 英语

**标准版：**
- "8k_zh_large": 普方大模型引擎. 当前模型同时支持中文等语言的识别，模型参数量极大，语言模型性能增强，针对电话音频中各类场景、各类中文方言的识别准确率极大提升.
- "16k_zh_large": 普方英大模型引擎. 当前模型同时支持中文、英文、多种中文方言等语言的识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.
- "16k_multi_lang": 多语种大模型引擎. 当前模型同时支持英语、日语、韩语、阿拉伯语、菲律宾语、法语、印地语、印尼语、马来语、葡萄牙语、西班牙语、泰语、土耳其语、越南语、德语的识别，可实现15个语种的自动识别(句子/段落级别).
- "16k_zh_en": 中英大模型引擎. 当前模型同时支持中文、英语识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

**高级版：**
- "zh-dialect": 中国方言
- "zh-yue": 中国粤语
- "vi": 越南语
- "ja": 日语
- "ko": 韩语
- "id": 印度尼西亚语
- "th": 泰语
- "pt": 葡萄牙语
- "tr": 土耳其语
- "ar": 阿拉伯语
- "es": 西班牙语
- "hi": 印地语
- "fr": 法语
- "ms": 马来语
- "fil": 菲律宾语
- "de": 德语
- "it": 意大利语
- "ru": 俄语
- "sv": 瑞典语
- "da": 丹麦语
- "no": 挪威语

**注意：**
如果缺少满足您需求的语言，请联系我们技术人员。
 * @method array getAlternativeLanguage() 获取**发起模糊识别为高级版能力,默认按照高级版收费,仅支持填写基础版和高级版语言.**
注意：不支持填写"zh-dialect"
 * @method void setAlternativeLanguage(array $AlternativeLanguage) 设置**发起模糊识别为高级版能力,默认按照高级版收费,仅支持填写基础版和高级版语言.**
注意：不支持填写"zh-dialect"
 * @method string getCustomParam() 获取自定义参数，联系后台使用

 * @method void setCustomParam(string $CustomParam) 设置自定义参数，联系后台使用

 * @method integer getVadSilenceTime() 获取语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
 * @method void setVadSilenceTime(integer $VadSilenceTime) 设置语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
 * @method string getHotWordList() 获取热词表：该参数用于提升识别准确率。 单个热词限制："热词|权重"，单个热词不超过30个字符（最多10个汉字），权重[1-11]或者100，如：“腾讯云|5” 或 “ASR|11”； 热词表限制：多个热词用英文逗号分割，最多支持128个热词，如：“腾讯云|10,语音识别|5,ASR|11”；
 * @method void setHotWordList(string $HotWordList) 设置热词表：该参数用于提升识别准确率。 单个热词限制："热词|权重"，单个热词不超过30个字符（最多10个汉字），权重[1-11]或者100，如：“腾讯云|5” 或 “ASR|11”； 热词表限制：多个热词用英文逗号分割，最多支持128个热词，如：“腾讯云|10,语音识别|5,ASR|11”；
 * @method integer getVadLevel() 获取vad的远场人声抑制能力（不会对asr识别效果造成影响），范围为[0, 3]，默认为0。推荐设置为2，有较好的远场人声抑制能力。	
 * @method void setVadLevel(integer $VadLevel) 设置vad的远场人声抑制能力（不会对asr识别效果造成影响），范围为[0, 3]，默认为0。推荐设置为2，有较好的远场人声抑制能力。	
 */
class STTConfig extends AbstractModel
{
    /**
     * @var string 
语音转文字支持识别的语言，默认是"zh" 中文

可通过购买「AI智能识别时长包」解锁或领取包月套餐体验版解锁不同语言. 

语音转文本不同套餐版本支持的语言如下：

**基础版**：
- "zh": 中文（简体）
- "zh-TW": 中文（繁体）
- "en": 英语

**标准版：**
- "8k_zh_large": 普方大模型引擎. 当前模型同时支持中文等语言的识别，模型参数量极大，语言模型性能增强，针对电话音频中各类场景、各类中文方言的识别准确率极大提升.
- "16k_zh_large": 普方英大模型引擎. 当前模型同时支持中文、英文、多种中文方言等语言的识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.
- "16k_multi_lang": 多语种大模型引擎. 当前模型同时支持英语、日语、韩语、阿拉伯语、菲律宾语、法语、印地语、印尼语、马来语、葡萄牙语、西班牙语、泰语、土耳其语、越南语、德语的识别，可实现15个语种的自动识别(句子/段落级别).
- "16k_zh_en": 中英大模型引擎. 当前模型同时支持中文、英语识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

**高级版：**
- "zh-dialect": 中国方言
- "zh-yue": 中国粤语
- "vi": 越南语
- "ja": 日语
- "ko": 韩语
- "id": 印度尼西亚语
- "th": 泰语
- "pt": 葡萄牙语
- "tr": 土耳其语
- "ar": 阿拉伯语
- "es": 西班牙语
- "hi": 印地语
- "fr": 法语
- "ms": 马来语
- "fil": 菲律宾语
- "de": 德语
- "it": 意大利语
- "ru": 俄语
- "sv": 瑞典语
- "da": 丹麦语
- "no": 挪威语

**注意：**
如果缺少满足您需求的语言，请联系我们技术人员。
     */
    public $Language;

    /**
     * @var array **发起模糊识别为高级版能力,默认按照高级版收费,仅支持填写基础版和高级版语言.**
注意：不支持填写"zh-dialect"
     */
    public $AlternativeLanguage;

    /**
     * @var string 自定义参数，联系后台使用

     */
    public $CustomParam;

    /**
     * @var integer 语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
     */
    public $VadSilenceTime;

    /**
     * @var string 热词表：该参数用于提升识别准确率。 单个热词限制："热词|权重"，单个热词不超过30个字符（最多10个汉字），权重[1-11]或者100，如：“腾讯云|5” 或 “ASR|11”； 热词表限制：多个热词用英文逗号分割，最多支持128个热词，如：“腾讯云|10,语音识别|5,ASR|11”；
     */
    public $HotWordList;

    /**
     * @var integer vad的远场人声抑制能力（不会对asr识别效果造成影响），范围为[0, 3]，默认为0。推荐设置为2，有较好的远场人声抑制能力。	
     */
    public $VadLevel;

    /**
     * @param string $Language 
语音转文字支持识别的语言，默认是"zh" 中文

可通过购买「AI智能识别时长包」解锁或领取包月套餐体验版解锁不同语言. 

语音转文本不同套餐版本支持的语言如下：

**基础版**：
- "zh": 中文（简体）
- "zh-TW": 中文（繁体）
- "en": 英语

**标准版：**
- "8k_zh_large": 普方大模型引擎. 当前模型同时支持中文等语言的识别，模型参数量极大，语言模型性能增强，针对电话音频中各类场景、各类中文方言的识别准确率极大提升.
- "16k_zh_large": 普方英大模型引擎. 当前模型同时支持中文、英文、多种中文方言等语言的识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.
- "16k_multi_lang": 多语种大模型引擎. 当前模型同时支持英语、日语、韩语、阿拉伯语、菲律宾语、法语、印地语、印尼语、马来语、葡萄牙语、西班牙语、泰语、土耳其语、越南语、德语的识别，可实现15个语种的自动识别(句子/段落级别).
- "16k_zh_en": 中英大模型引擎. 当前模型同时支持中文、英语识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

**高级版：**
- "zh-dialect": 中国方言
- "zh-yue": 中国粤语
- "vi": 越南语
- "ja": 日语
- "ko": 韩语
- "id": 印度尼西亚语
- "th": 泰语
- "pt": 葡萄牙语
- "tr": 土耳其语
- "ar": 阿拉伯语
- "es": 西班牙语
- "hi": 印地语
- "fr": 法语
- "ms": 马来语
- "fil": 菲律宾语
- "de": 德语
- "it": 意大利语
- "ru": 俄语
- "sv": 瑞典语
- "da": 丹麦语
- "no": 挪威语

**注意：**
如果缺少满足您需求的语言，请联系我们技术人员。
     * @param array $AlternativeLanguage **发起模糊识别为高级版能力,默认按照高级版收费,仅支持填写基础版和高级版语言.**
注意：不支持填写"zh-dialect"
     * @param string $CustomParam 自定义参数，联系后台使用

     * @param integer $VadSilenceTime 语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
     * @param string $HotWordList 热词表：该参数用于提升识别准确率。 单个热词限制："热词|权重"，单个热词不超过30个字符（最多10个汉字），权重[1-11]或者100，如：“腾讯云|5” 或 “ASR|11”； 热词表限制：多个热词用英文逗号分割，最多支持128个热词，如：“腾讯云|10,语音识别|5,ASR|11”；
     * @param integer $VadLevel vad的远场人声抑制能力（不会对asr识别效果造成影响），范围为[0, 3]，默认为0。推荐设置为2，有较好的远场人声抑制能力。	
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("AlternativeLanguage",$param) and $param["AlternativeLanguage"] !== null) {
            $this->AlternativeLanguage = $param["AlternativeLanguage"];
        }

        if (array_key_exists("CustomParam",$param) and $param["CustomParam"] !== null) {
            $this->CustomParam = $param["CustomParam"];
        }

        if (array_key_exists("VadSilenceTime",$param) and $param["VadSilenceTime"] !== null) {
            $this->VadSilenceTime = $param["VadSilenceTime"];
        }

        if (array_key_exists("HotWordList",$param) and $param["HotWordList"] !== null) {
            $this->HotWordList = $param["HotWordList"];
        }

        if (array_key_exists("VadLevel",$param) and $param["VadLevel"] !== null) {
            $this->VadLevel = $param["VadLevel"];
        }
    }
}
