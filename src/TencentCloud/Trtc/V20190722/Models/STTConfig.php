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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音转文字参数
 *
 * @method string getLanguage() 获取语音识别支持的语言，默认是"zh" 中文
目前全量支持的语言如下，等号左面是语言英文名，右面是Language字段需要填写的值，该值遵循[ISO639](https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes)：
1.     Chinese = "zh" # 中文
2.     Chinese_TW = "zh-TW" # 中国台湾
3.     Chinese_DIALECT = "zh-dialect" # 中国方言
4.     English = "en" # 英语
5.     Vietnamese = "vi" # 越南语
6.     Japanese = "ja" # 日语
7.     Korean = "ko" # 韩语
8.     Indonesia = "id" # 印度尼西亚语
9.     Thai = "th" # 泰语
10.     Portuguese = "pt" # 葡萄牙语
11.     Turkish = "tr" # 土耳其语
12.     Arabic = "ar" # 阿拉伯语
13.     Spanish = "es" # 西班牙语
14.     Hindi = "hi" # 印地语
15.     French = "fr" # 法语
16.     Malay = "ms" # 马来语
17.     Filipino = "fil" # 菲律宾语
18.     German = "de" # 德语
19.     Italian = "it" # 意大利语
20.     Russian = "ru" # 俄语
21.     Swedish = "sv" # 瑞典语
22.     Danish = "da" # 丹麦语
23.     Norwegian = "no" # 挪威语

注意：
如果缺少满足您需求的语言，请联系我们技术人员。
 * @method void setLanguage(string $Language) 设置语音识别支持的语言，默认是"zh" 中文
目前全量支持的语言如下，等号左面是语言英文名，右面是Language字段需要填写的值，该值遵循[ISO639](https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes)：
1.     Chinese = "zh" # 中文
2.     Chinese_TW = "zh-TW" # 中国台湾
3.     Chinese_DIALECT = "zh-dialect" # 中国方言
4.     English = "en" # 英语
5.     Vietnamese = "vi" # 越南语
6.     Japanese = "ja" # 日语
7.     Korean = "ko" # 韩语
8.     Indonesia = "id" # 印度尼西亚语
9.     Thai = "th" # 泰语
10.     Portuguese = "pt" # 葡萄牙语
11.     Turkish = "tr" # 土耳其语
12.     Arabic = "ar" # 阿拉伯语
13.     Spanish = "es" # 西班牙语
14.     Hindi = "hi" # 印地语
15.     French = "fr" # 法语
16.     Malay = "ms" # 马来语
17.     Filipino = "fil" # 菲律宾语
18.     German = "de" # 德语
19.     Italian = "it" # 意大利语
20.     Russian = "ru" # 俄语
21.     Swedish = "sv" # 瑞典语
22.     Danish = "da" # 丹麦语
23.     Norwegian = "no" # 挪威语

注意：
如果缺少满足您需求的语言，请联系我们技术人员。
 * @method array getAlternativeLanguage() 获取发起模糊识别额外可能替代语言类型,最多填写3种语言类型, 
注：Language指定为"zh-dialect" # 中国方言 时，不支持模糊识别，该字段无效

 * @method void setAlternativeLanguage(array $AlternativeLanguage) 设置发起模糊识别额外可能替代语言类型,最多填写3种语言类型, 
注：Language指定为"zh-dialect" # 中国方言 时，不支持模糊识别，该字段无效

 * @method string getCustomParam() 获取自定义参数，联系后台使用

 * @method void setCustomParam(string $CustomParam) 设置自定义参数，联系后台使用

 * @method integer getVadSilenceTime() 获取语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
 * @method void setVadSilenceTime(integer $VadSilenceTime) 设置语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
 */
class STTConfig extends AbstractModel
{
    /**
     * @var string 语音识别支持的语言，默认是"zh" 中文
目前全量支持的语言如下，等号左面是语言英文名，右面是Language字段需要填写的值，该值遵循[ISO639](https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes)：
1.     Chinese = "zh" # 中文
2.     Chinese_TW = "zh-TW" # 中国台湾
3.     Chinese_DIALECT = "zh-dialect" # 中国方言
4.     English = "en" # 英语
5.     Vietnamese = "vi" # 越南语
6.     Japanese = "ja" # 日语
7.     Korean = "ko" # 韩语
8.     Indonesia = "id" # 印度尼西亚语
9.     Thai = "th" # 泰语
10.     Portuguese = "pt" # 葡萄牙语
11.     Turkish = "tr" # 土耳其语
12.     Arabic = "ar" # 阿拉伯语
13.     Spanish = "es" # 西班牙语
14.     Hindi = "hi" # 印地语
15.     French = "fr" # 法语
16.     Malay = "ms" # 马来语
17.     Filipino = "fil" # 菲律宾语
18.     German = "de" # 德语
19.     Italian = "it" # 意大利语
20.     Russian = "ru" # 俄语
21.     Swedish = "sv" # 瑞典语
22.     Danish = "da" # 丹麦语
23.     Norwegian = "no" # 挪威语

注意：
如果缺少满足您需求的语言，请联系我们技术人员。
     */
    public $Language;

    /**
     * @var array 发起模糊识别额外可能替代语言类型,最多填写3种语言类型, 
注：Language指定为"zh-dialect" # 中国方言 时，不支持模糊识别，该字段无效

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
     * @param string $Language 语音识别支持的语言，默认是"zh" 中文
目前全量支持的语言如下，等号左面是语言英文名，右面是Language字段需要填写的值，该值遵循[ISO639](https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes)：
1.     Chinese = "zh" # 中文
2.     Chinese_TW = "zh-TW" # 中国台湾
3.     Chinese_DIALECT = "zh-dialect" # 中国方言
4.     English = "en" # 英语
5.     Vietnamese = "vi" # 越南语
6.     Japanese = "ja" # 日语
7.     Korean = "ko" # 韩语
8.     Indonesia = "id" # 印度尼西亚语
9.     Thai = "th" # 泰语
10.     Portuguese = "pt" # 葡萄牙语
11.     Turkish = "tr" # 土耳其语
12.     Arabic = "ar" # 阿拉伯语
13.     Spanish = "es" # 西班牙语
14.     Hindi = "hi" # 印地语
15.     French = "fr" # 法语
16.     Malay = "ms" # 马来语
17.     Filipino = "fil" # 菲律宾语
18.     German = "de" # 德语
19.     Italian = "it" # 意大利语
20.     Russian = "ru" # 俄语
21.     Swedish = "sv" # 瑞典语
22.     Danish = "da" # 丹麦语
23.     Norwegian = "no" # 挪威语

注意：
如果缺少满足您需求的语言，请联系我们技术人员。
     * @param array $AlternativeLanguage 发起模糊识别额外可能替代语言类型,最多填写3种语言类型, 
注：Language指定为"zh-dialect" # 中国方言 时，不支持模糊识别，该字段无效

     * @param string $CustomParam 自定义参数，联系后台使用

     * @param integer $VadSilenceTime 语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
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
    }
}
