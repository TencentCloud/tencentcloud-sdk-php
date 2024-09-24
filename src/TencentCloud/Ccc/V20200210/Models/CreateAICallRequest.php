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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAICall请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method string getCallee() 获取被叫
 * @method void setCallee(string $Callee) 设置被叫
 * @method string getSystemPrompt() 获取用于设定AI座席人设、说话规则、任务等的全局提示词。
 * @method void setSystemPrompt(string $SystemPrompt) 设置用于设定AI座席人设、说话规则、任务等的全局提示词。
 * @method string getLLMType() 获取LLM类型
 * @method void setLLMType(string $LLMType) 设置LLM类型
 * @method string getModel() 获取模型（当前仅支持openai协议的模型）
 * @method void setModel(string $Model) 设置模型（当前仅支持openai协议的模型）
 * @method string getAPIKey() 获取API密钥
 * @method void setAPIKey(string $APIKey) 设置API密钥
 * @method string getAPIUrl() 获取API URL，仅支持兼容openai协议的模型，填写url时后缀不要带/chat/completions
 * @method void setAPIUrl(string $APIUrl) 设置API URL，仅支持兼容openai协议的模型，填写url时后缀不要带/chat/completions
 * @method string getVoiceType() 获取音色，目前仅支持以下音色:
汉语：
ZhiMei：智美，客服女声
ZhiXi： 智希 通用女声
ZhiQi：智琪 客服女声
ZhiTian：智甜 女童声
AiXiaoJing：爱小静 对话女声

英语:
WeRose：英文女声
Monika：英文女声

日语：
Nanami

韩语：
SunHi

印度尼西亚语(印度尼西亚)：
Gadis

马来语（马来西亚）:
Yasmin

 泰米尔语（马来西亚）:
Kani

泰语（泰国）:
Achara

越南语(越南):
HoaiMy


 * @method void setVoiceType(string $VoiceType) 设置音色，目前仅支持以下音色:
汉语：
ZhiMei：智美，客服女声
ZhiXi： 智希 通用女声
ZhiQi：智琪 客服女声
ZhiTian：智甜 女童声
AiXiaoJing：爱小静 对话女声

英语:
WeRose：英文女声
Monika：英文女声

日语：
Nanami

韩语：
SunHi

印度尼西亚语(印度尼西亚)：
Gadis

马来语（马来西亚）:
Yasmin

 泰米尔语（马来西亚）:
Kani

泰语（泰国）:
Achara

越南语(越南):
HoaiMy


 * @method array getCallers() 获取主叫号码列表
 * @method void setCallers(array $Callers) 设置主叫号码列表
 * @method string getWelcomeMessage() 获取用于设定AI座席欢迎语。
 * @method void setWelcomeMessage(string $WelcomeMessage) 设置用于设定AI座席欢迎语。
 * @method integer getWelcomeType() 获取0：使用welcomeMessage(为空时，被叫先说话；不为空时，机器人先说话)
1:   使用ai根据prompt自动生成welcomeMessage并先说话
 * @method void setWelcomeType(integer $WelcomeType) 设置0：使用welcomeMessage(为空时，被叫先说话；不为空时，机器人先说话)
1:   使用ai根据prompt自动生成welcomeMessage并先说话
 * @method integer getMaxDuration() 获取最大等待时长(毫秒)，默认60秒，超过这个时间用户没说话，自动挂断
 * @method void setMaxDuration(integer $MaxDuration) 设置最大等待时长(毫秒)，默认60秒，超过这个时间用户没说话，自动挂断
 * @method array getLanguages() 获取语音识别支持的语言, 默认是"zh" 中文,
填写数组,最长4个语言，第一个语言为主要识别语言，后面为可选语言，
注意:主要语言为中国方言时，可选语言无效
目前全量支持的语言如下，等号左面是语言英文名，右面是Language字段需要填写的值，该值遵循ISO639：
1. Chinese = "zh" # 中文
2. Chinese_TW = "zh-TW" # 中国台湾
3. Chinese_DIALECT = "zh-dialect" # 中国方言
4. English = "en" # 英语
5. Vietnamese = "vi" # 越南语
6. Japanese = "ja" # 日语
7. Korean = "ko" # 汉语
8. Indonesia = "id" # 印度尼西亚语
9. Thai = "th" # 泰语
10. Portuguese = "pt" # 葡萄牙语
11. Turkish = "tr" # 土耳其语
12. Arabic = "ar" # 阿拉伯语
13. Spanish = "es" # 西班牙语
14. Hindi = "hi" # 印地语
15. French = "fr" # 法语
16. Malay = "ms" # 马来语
17. Filipino = "fil" # 菲律宾语
18. German = "de" # 德语
19. Italian = "it" # 意大利语
20. Russian = "ru" # 俄语
 * @method void setLanguages(array $Languages) 设置语音识别支持的语言, 默认是"zh" 中文,
填写数组,最长4个语言，第一个语言为主要识别语言，后面为可选语言，
注意:主要语言为中国方言时，可选语言无效
目前全量支持的语言如下，等号左面是语言英文名，右面是Language字段需要填写的值，该值遵循ISO639：
1. Chinese = "zh" # 中文
2. Chinese_TW = "zh-TW" # 中国台湾
3. Chinese_DIALECT = "zh-dialect" # 中国方言
4. English = "en" # 英语
5. Vietnamese = "vi" # 越南语
6. Japanese = "ja" # 日语
7. Korean = "ko" # 汉语
8. Indonesia = "id" # 印度尼西亚语
9. Thai = "th" # 泰语
10. Portuguese = "pt" # 葡萄牙语
11. Turkish = "tr" # 土耳其语
12. Arabic = "ar" # 阿拉伯语
13. Spanish = "es" # 西班牙语
14. Hindi = "hi" # 印地语
15. French = "fr" # 法语
16. Malay = "ms" # 马来语
17. Filipino = "fil" # 菲律宾语
18. German = "de" # 德语
19. Italian = "it" # 意大利语
20. Russian = "ru" # 俄语
 * @method integer getInterruptMode() 获取打断AI说话模式，默认为0，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
 * @method void setInterruptMode(integer $InterruptMode) 设置打断AI说话模式，默认为0，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
 * @method integer getInterruptSpeechDuration() 获取InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) 设置InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
 * @method boolean getEndFunctionEnable() 获取模型是否支持(或者开启)call_end function calling
 * @method void setEndFunctionEnable(boolean $EndFunctionEnable) 设置模型是否支持(或者开启)call_end function calling
 * @method string getEndFunctionDesc() 获取EndFunctionEnable为true时生效；call_end function calling的desc，默认为 "End the call when user has to leave (like says bye) or you are instructed to do so."
 * @method void setEndFunctionDesc(string $EndFunctionDesc) 设置EndFunctionEnable为true时生效；call_end function calling的desc，默认为 "End the call when user has to leave (like says bye) or you are instructed to do so."
 */
class CreateAICallRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var string 被叫
     */
    public $Callee;

    /**
     * @var string 用于设定AI座席人设、说话规则、任务等的全局提示词。
     */
    public $SystemPrompt;

    /**
     * @var string LLM类型
     */
    public $LLMType;

    /**
     * @var string 模型（当前仅支持openai协议的模型）
     */
    public $Model;

    /**
     * @var string API密钥
     */
    public $APIKey;

    /**
     * @var string API URL，仅支持兼容openai协议的模型，填写url时后缀不要带/chat/completions
     */
    public $APIUrl;

    /**
     * @var string 音色，目前仅支持以下音色:
汉语：
ZhiMei：智美，客服女声
ZhiXi： 智希 通用女声
ZhiQi：智琪 客服女声
ZhiTian：智甜 女童声
AiXiaoJing：爱小静 对话女声

英语:
WeRose：英文女声
Monika：英文女声

日语：
Nanami

韩语：
SunHi

印度尼西亚语(印度尼西亚)：
Gadis

马来语（马来西亚）:
Yasmin

 泰米尔语（马来西亚）:
Kani

泰语（泰国）:
Achara

越南语(越南):
HoaiMy


     */
    public $VoiceType;

    /**
     * @var array 主叫号码列表
     */
    public $Callers;

    /**
     * @var string 用于设定AI座席欢迎语。
     */
    public $WelcomeMessage;

    /**
     * @var integer 0：使用welcomeMessage(为空时，被叫先说话；不为空时，机器人先说话)
1:   使用ai根据prompt自动生成welcomeMessage并先说话
     */
    public $WelcomeType;

    /**
     * @var integer 最大等待时长(毫秒)，默认60秒，超过这个时间用户没说话，自动挂断
     */
    public $MaxDuration;

    /**
     * @var array 语音识别支持的语言, 默认是"zh" 中文,
填写数组,最长4个语言，第一个语言为主要识别语言，后面为可选语言，
注意:主要语言为中国方言时，可选语言无效
目前全量支持的语言如下，等号左面是语言英文名，右面是Language字段需要填写的值，该值遵循ISO639：
1. Chinese = "zh" # 中文
2. Chinese_TW = "zh-TW" # 中国台湾
3. Chinese_DIALECT = "zh-dialect" # 中国方言
4. English = "en" # 英语
5. Vietnamese = "vi" # 越南语
6. Japanese = "ja" # 日语
7. Korean = "ko" # 汉语
8. Indonesia = "id" # 印度尼西亚语
9. Thai = "th" # 泰语
10. Portuguese = "pt" # 葡萄牙语
11. Turkish = "tr" # 土耳其语
12. Arabic = "ar" # 阿拉伯语
13. Spanish = "es" # 西班牙语
14. Hindi = "hi" # 印地语
15. French = "fr" # 法语
16. Malay = "ms" # 马来语
17. Filipino = "fil" # 菲律宾语
18. German = "de" # 德语
19. Italian = "it" # 意大利语
20. Russian = "ru" # 俄语
     */
    public $Languages;

    /**
     * @var integer 打断AI说话模式，默认为0，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
     */
    public $InterruptMode;

    /**
     * @var integer InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
     */
    public $InterruptSpeechDuration;

    /**
     * @var boolean 模型是否支持(或者开启)call_end function calling
     */
    public $EndFunctionEnable;

    /**
     * @var string EndFunctionEnable为true时生效；call_end function calling的desc，默认为 "End the call when user has to leave (like says bye) or you are instructed to do so."
     */
    public $EndFunctionDesc;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $Callee 被叫
     * @param string $SystemPrompt 用于设定AI座席人设、说话规则、任务等的全局提示词。
     * @param string $LLMType LLM类型
     * @param string $Model 模型（当前仅支持openai协议的模型）
     * @param string $APIKey API密钥
     * @param string $APIUrl API URL，仅支持兼容openai协议的模型，填写url时后缀不要带/chat/completions
     * @param string $VoiceType 音色，目前仅支持以下音色:
汉语：
ZhiMei：智美，客服女声
ZhiXi： 智希 通用女声
ZhiQi：智琪 客服女声
ZhiTian：智甜 女童声
AiXiaoJing：爱小静 对话女声

英语:
WeRose：英文女声
Monika：英文女声

日语：
Nanami

韩语：
SunHi

印度尼西亚语(印度尼西亚)：
Gadis

马来语（马来西亚）:
Yasmin

 泰米尔语（马来西亚）:
Kani

泰语（泰国）:
Achara

越南语(越南):
HoaiMy


     * @param array $Callers 主叫号码列表
     * @param string $WelcomeMessage 用于设定AI座席欢迎语。
     * @param integer $WelcomeType 0：使用welcomeMessage(为空时，被叫先说话；不为空时，机器人先说话)
1:   使用ai根据prompt自动生成welcomeMessage并先说话
     * @param integer $MaxDuration 最大等待时长(毫秒)，默认60秒，超过这个时间用户没说话，自动挂断
     * @param array $Languages 语音识别支持的语言, 默认是"zh" 中文,
填写数组,最长4个语言，第一个语言为主要识别语言，后面为可选语言，
注意:主要语言为中国方言时，可选语言无效
目前全量支持的语言如下，等号左面是语言英文名，右面是Language字段需要填写的值，该值遵循ISO639：
1. Chinese = "zh" # 中文
2. Chinese_TW = "zh-TW" # 中国台湾
3. Chinese_DIALECT = "zh-dialect" # 中国方言
4. English = "en" # 英语
5. Vietnamese = "vi" # 越南语
6. Japanese = "ja" # 日语
7. Korean = "ko" # 汉语
8. Indonesia = "id" # 印度尼西亚语
9. Thai = "th" # 泰语
10. Portuguese = "pt" # 葡萄牙语
11. Turkish = "tr" # 土耳其语
12. Arabic = "ar" # 阿拉伯语
13. Spanish = "es" # 西班牙语
14. Hindi = "hi" # 印地语
15. French = "fr" # 法语
16. Malay = "ms" # 马来语
17. Filipino = "fil" # 菲律宾语
18. German = "de" # 德语
19. Italian = "it" # 意大利语
20. Russian = "ru" # 俄语
     * @param integer $InterruptMode 打断AI说话模式，默认为0，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
     * @param integer $InterruptSpeechDuration InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
     * @param boolean $EndFunctionEnable 模型是否支持(或者开启)call_end function calling
     * @param string $EndFunctionDesc EndFunctionEnable为true时生效；call_end function calling的desc，默认为 "End the call when user has to leave (like says bye) or you are instructed to do so."
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("SystemPrompt",$param) and $param["SystemPrompt"] !== null) {
            $this->SystemPrompt = $param["SystemPrompt"];
        }

        if (array_key_exists("LLMType",$param) and $param["LLMType"] !== null) {
            $this->LLMType = $param["LLMType"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("APIUrl",$param) and $param["APIUrl"] !== null) {
            $this->APIUrl = $param["APIUrl"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("WelcomeMessage",$param) and $param["WelcomeMessage"] !== null) {
            $this->WelcomeMessage = $param["WelcomeMessage"];
        }

        if (array_key_exists("WelcomeType",$param) and $param["WelcomeType"] !== null) {
            $this->WelcomeType = $param["WelcomeType"];
        }

        if (array_key_exists("MaxDuration",$param) and $param["MaxDuration"] !== null) {
            $this->MaxDuration = $param["MaxDuration"];
        }

        if (array_key_exists("Languages",$param) and $param["Languages"] !== null) {
            $this->Languages = $param["Languages"];
        }

        if (array_key_exists("InterruptMode",$param) and $param["InterruptMode"] !== null) {
            $this->InterruptMode = $param["InterruptMode"];
        }

        if (array_key_exists("InterruptSpeechDuration",$param) and $param["InterruptSpeechDuration"] !== null) {
            $this->InterruptSpeechDuration = $param["InterruptSpeechDuration"];
        }

        if (array_key_exists("EndFunctionEnable",$param) and $param["EndFunctionEnable"] !== null) {
            $this->EndFunctionEnable = $param["EndFunctionEnable"];
        }

        if (array_key_exists("EndFunctionDesc",$param) and $param["EndFunctionDesc"] !== null) {
            $this->EndFunctionDesc = $param["EndFunctionDesc"];
        }
    }
}
