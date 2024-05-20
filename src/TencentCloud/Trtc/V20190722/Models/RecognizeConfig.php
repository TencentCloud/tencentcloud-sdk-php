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
 * 语音识别使用的配置
 *
 * @method string getLanguage() 获取支持的语言，目前支持语言如下：
    Chinese = "zh"
    Chinese_TW = "zh-TW"
    English = "en"
    Vietnamese = "vi"
    Japanese = "ja"
    Korean = "ko"
    Indonesia = "id"
    Thai = "th"
    Portuguese = "pt"
    Turkish = "tr"
    Arabic = "ar"
    Spanish = "es"
    Hindi = "hi"
    French = "fr"
 * @method void setLanguage(string $Language) 设置支持的语言，目前支持语言如下：
    Chinese = "zh"
    Chinese_TW = "zh-TW"
    English = "en"
    Vietnamese = "vi"
    Japanese = "ja"
    Korean = "ko"
    Indonesia = "id"
    Thai = "th"
    Portuguese = "pt"
    Turkish = "tr"
    Arabic = "ar"
    Spanish = "es"
    Hindi = "hi"
    French = "fr"
 * @method string getTranslationLanguage() 获取选填，如果填写，则会启用翻译，不填则忽略。支持语言同Language字段。
 * @method void setTranslationLanguage(string $TranslationLanguage) 设置选填，如果填写，则会启用翻译，不填则忽略。支持语言同Language字段。
 */
class RecognizeConfig extends AbstractModel
{
    /**
     * @var string 支持的语言，目前支持语言如下：
    Chinese = "zh"
    Chinese_TW = "zh-TW"
    English = "en"
    Vietnamese = "vi"
    Japanese = "ja"
    Korean = "ko"
    Indonesia = "id"
    Thai = "th"
    Portuguese = "pt"
    Turkish = "tr"
    Arabic = "ar"
    Spanish = "es"
    Hindi = "hi"
    French = "fr"
     */
    public $Language;

    /**
     * @var string 选填，如果填写，则会启用翻译，不填则忽略。支持语言同Language字段。
     */
    public $TranslationLanguage;

    /**
     * @param string $Language 支持的语言，目前支持语言如下：
    Chinese = "zh"
    Chinese_TW = "zh-TW"
    English = "en"
    Vietnamese = "vi"
    Japanese = "ja"
    Korean = "ko"
    Indonesia = "id"
    Thai = "th"
    Portuguese = "pt"
    Turkish = "tr"
    Arabic = "ar"
    Spanish = "es"
    Hindi = "hi"
    French = "fr"
     * @param string $TranslationLanguage 选填，如果填写，则会启用翻译，不填则忽略。支持语言同Language字段。
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

        if (array_key_exists("TranslationLanguage",$param) and $param["TranslationLanguage"] !== null) {
            $this->TranslationLanguage = $param["TranslationLanguage"];
        }
    }
}
