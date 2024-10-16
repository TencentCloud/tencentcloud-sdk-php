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
 * @method integer getNotifyDuration() 获取用户多久没说话提示时长,最小10秒,默认10秒
 * @method void setNotifyDuration(integer $NotifyDuration) 设置用户多久没说话提示时长,最小10秒,默认10秒
 * @method string getNotifyMessage() 获取用户NotifyDuration没说话，ai提示的语句，默认是"抱歉，我没听清。您可以重复下吗？"
 * @method void setNotifyMessage(string $NotifyMessage) 设置用户NotifyDuration没说话，ai提示的语句，默认是"抱歉，我没听清。您可以重复下吗？"
 * @method string getCustomTTSConfig() 获取和voiceType字段需要选填一个，这里是使用自己自定义的TTS，voiceType是系统内置的一些音色

tencent TTS:
{ 
       "TTSType": "tencent", // String TTS类型, 目前支持"tencent" 和 “minixmax”， 其他的厂商支持中
       "AppId": "您的应用ID", // String 必填
       "SecretId": "您的密钥ID", // String 必填
       "SecretKey":  "您的密钥Key", // String 必填
       "VoiceType": 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见语音合成计费概述。完整的音色 ID 列表请参见语音合成音色列表。
       "Speed": 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换，可参考 语速转换
       "Volume": 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。
       "PrimaryLanguage": 1, // Integer 可选 主要语言 1-中文（默认） 2-英文 3-日文
       "FastVoiceType": "xxxx"   //  可选参数， 快速声音复刻的参数 
  }

参考：https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823 

minimax TTS
{
        "TTSType": "minimax",  // String TTS类型, 
        "Model": "speech-01-turbo",
        "APIUrl": "https://api.minimax.chat/v1/t2a_v2",
        "APIKey": "eyxxxx",
        "GroupId": "181000000000000",
        "VoiceType":"female-tianmei-jingpin",
        "Speed": 1.2
}

参考：https://platform.minimaxi.com/document/T2A%20V2?key=66719005a427f0c8a5701643 
限频参考：https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572   可能会导致回答卡顿



volcengine TTS
{
    "TTSType": "volcengine",  // 必填：String TTS类型
    "AppId" : "xxxxxxxx",   // 必填：String 火山引擎分配的Appid
    "Token" : "TY9d4sQXHxxxxxxx", // 必填： String类型 火山引擎的访问token
    "Speed" : 1.0,            // 可选参数 语速，默认为1.0
    "Volume": 1.0,            // 可选参数， 音量大小， 默认为1.0
    "Cluster" : "volcano_tts", // 可选参数，业务集群, 默认是 volcano_tts
    "VoiceType" : "zh_male_aojiaobazong_moon_bigtts"   // 音色类型， 默认为大模型语音合成的音色。 如果使用普通语音合成，则需要填写对应的音色类型。 音色类型填写错误会导致没有声音。
}



火山引擎音色类型参考：
https://www.volcengine.com/docs/6561/162929 
语音合成音色列表--语音技术-火山引擎
大模型语音合成音色列表--语音技术-火山引擎


Azure TTS
{
    "TTSType": "azure", // 必填：String TTS类型
    "SubscriptionKey": "xxxxxxxx", // 必填：String 订阅的Key
    "Region": "chinanorth3",  // 必填：String 订阅的地区
    "VoiceName": "zh-CN-XiaoxiaoNeural", // 必填：String 音色名必填
    "Language": "zh-CN", // 必填：String 合成的语言  
    "Rate": 1 // 选填：float 语速  0.5～2 默认为 1
}

参考：
https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice 


自定义 TTS 
{
  "TTSType": "custom", // String 必填
  "APIKey": "ApiKey", // String 必填 用来鉴权
  "APIUrl": "http://0.0.0.0:8080/stream-audio" // String，必填，TTS API URL
  "AudioFormat": "wav", // String, 非必填，期望输出的音频格式，如mp3， ogg_opus，pcm，wav，默认为 wav，目前只支持pcm和wav，
  "SampleRate": 16000,  // Integer，非必填，音频采样率，默认为16000(16k)，推荐值为16000
  "AudioChannel": 1,    // Integer，非必填，音频通道数，取值：1 或 2  默认为1  
}


具体协议规范： 
https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw 



 * @method void setCustomTTSConfig(string $CustomTTSConfig) 设置和voiceType字段需要选填一个，这里是使用自己自定义的TTS，voiceType是系统内置的一些音色

tencent TTS:
{ 
       "TTSType": "tencent", // String TTS类型, 目前支持"tencent" 和 “minixmax”， 其他的厂商支持中
       "AppId": "您的应用ID", // String 必填
       "SecretId": "您的密钥ID", // String 必填
       "SecretKey":  "您的密钥Key", // String 必填
       "VoiceType": 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见语音合成计费概述。完整的音色 ID 列表请参见语音合成音色列表。
       "Speed": 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换，可参考 语速转换
       "Volume": 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。
       "PrimaryLanguage": 1, // Integer 可选 主要语言 1-中文（默认） 2-英文 3-日文
       "FastVoiceType": "xxxx"   //  可选参数， 快速声音复刻的参数 
  }

参考：https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823 

minimax TTS
{
        "TTSType": "minimax",  // String TTS类型, 
        "Model": "speech-01-turbo",
        "APIUrl": "https://api.minimax.chat/v1/t2a_v2",
        "APIKey": "eyxxxx",
        "GroupId": "181000000000000",
        "VoiceType":"female-tianmei-jingpin",
        "Speed": 1.2
}

参考：https://platform.minimaxi.com/document/T2A%20V2?key=66719005a427f0c8a5701643 
限频参考：https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572   可能会导致回答卡顿



volcengine TTS
{
    "TTSType": "volcengine",  // 必填：String TTS类型
    "AppId" : "xxxxxxxx",   // 必填：String 火山引擎分配的Appid
    "Token" : "TY9d4sQXHxxxxxxx", // 必填： String类型 火山引擎的访问token
    "Speed" : 1.0,            // 可选参数 语速，默认为1.0
    "Volume": 1.0,            // 可选参数， 音量大小， 默认为1.0
    "Cluster" : "volcano_tts", // 可选参数，业务集群, 默认是 volcano_tts
    "VoiceType" : "zh_male_aojiaobazong_moon_bigtts"   // 音色类型， 默认为大模型语音合成的音色。 如果使用普通语音合成，则需要填写对应的音色类型。 音色类型填写错误会导致没有声音。
}



火山引擎音色类型参考：
https://www.volcengine.com/docs/6561/162929 
语音合成音色列表--语音技术-火山引擎
大模型语音合成音色列表--语音技术-火山引擎


Azure TTS
{
    "TTSType": "azure", // 必填：String TTS类型
    "SubscriptionKey": "xxxxxxxx", // 必填：String 订阅的Key
    "Region": "chinanorth3",  // 必填：String 订阅的地区
    "VoiceName": "zh-CN-XiaoxiaoNeural", // 必填：String 音色名必填
    "Language": "zh-CN", // 必填：String 合成的语言  
    "Rate": 1 // 选填：float 语速  0.5～2 默认为 1
}

参考：
https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice 


自定义 TTS 
{
  "TTSType": "custom", // String 必填
  "APIKey": "ApiKey", // String 必填 用来鉴权
  "APIUrl": "http://0.0.0.0:8080/stream-audio" // String，必填，TTS API URL
  "AudioFormat": "wav", // String, 非必填，期望输出的音频格式，如mp3， ogg_opus，pcm，wav，默认为 wav，目前只支持pcm和wav，
  "SampleRate": 16000,  // Integer，非必填，音频采样率，默认为16000(16k)，推荐值为16000
  "AudioChannel": 1,    // Integer，非必填，音频通道数，取值：1 或 2  默认为1  
}


具体协议规范： 
https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw 
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
     * @var integer 用户多久没说话提示时长,最小10秒,默认10秒
     */
    public $NotifyDuration;

    /**
     * @var string 用户NotifyDuration没说话，ai提示的语句，默认是"抱歉，我没听清。您可以重复下吗？"
     */
    public $NotifyMessage;

    /**
     * @var string 和voiceType字段需要选填一个，这里是使用自己自定义的TTS，voiceType是系统内置的一些音色

tencent TTS:
{ 
       "TTSType": "tencent", // String TTS类型, 目前支持"tencent" 和 “minixmax”， 其他的厂商支持中
       "AppId": "您的应用ID", // String 必填
       "SecretId": "您的密钥ID", // String 必填
       "SecretKey":  "您的密钥Key", // String 必填
       "VoiceType": 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见语音合成计费概述。完整的音色 ID 列表请参见语音合成音色列表。
       "Speed": 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换，可参考 语速转换
       "Volume": 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。
       "PrimaryLanguage": 1, // Integer 可选 主要语言 1-中文（默认） 2-英文 3-日文
       "FastVoiceType": "xxxx"   //  可选参数， 快速声音复刻的参数 
  }

参考：https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823 

minimax TTS
{
        "TTSType": "minimax",  // String TTS类型, 
        "Model": "speech-01-turbo",
        "APIUrl": "https://api.minimax.chat/v1/t2a_v2",
        "APIKey": "eyxxxx",
        "GroupId": "181000000000000",
        "VoiceType":"female-tianmei-jingpin",
        "Speed": 1.2
}

参考：https://platform.minimaxi.com/document/T2A%20V2?key=66719005a427f0c8a5701643 
限频参考：https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572   可能会导致回答卡顿



volcengine TTS
{
    "TTSType": "volcengine",  // 必填：String TTS类型
    "AppId" : "xxxxxxxx",   // 必填：String 火山引擎分配的Appid
    "Token" : "TY9d4sQXHxxxxxxx", // 必填： String类型 火山引擎的访问token
    "Speed" : 1.0,            // 可选参数 语速，默认为1.0
    "Volume": 1.0,            // 可选参数， 音量大小， 默认为1.0
    "Cluster" : "volcano_tts", // 可选参数，业务集群, 默认是 volcano_tts
    "VoiceType" : "zh_male_aojiaobazong_moon_bigtts"   // 音色类型， 默认为大模型语音合成的音色。 如果使用普通语音合成，则需要填写对应的音色类型。 音色类型填写错误会导致没有声音。
}



火山引擎音色类型参考：
https://www.volcengine.com/docs/6561/162929 
语音合成音色列表--语音技术-火山引擎
大模型语音合成音色列表--语音技术-火山引擎


Azure TTS
{
    "TTSType": "azure", // 必填：String TTS类型
    "SubscriptionKey": "xxxxxxxx", // 必填：String 订阅的Key
    "Region": "chinanorth3",  // 必填：String 订阅的地区
    "VoiceName": "zh-CN-XiaoxiaoNeural", // 必填：String 音色名必填
    "Language": "zh-CN", // 必填：String 合成的语言  
    "Rate": 1 // 选填：float 语速  0.5～2 默认为 1
}

参考：
https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice 


自定义 TTS 
{
  "TTSType": "custom", // String 必填
  "APIKey": "ApiKey", // String 必填 用来鉴权
  "APIUrl": "http://0.0.0.0:8080/stream-audio" // String，必填，TTS API URL
  "AudioFormat": "wav", // String, 非必填，期望输出的音频格式，如mp3， ogg_opus，pcm，wav，默认为 wav，目前只支持pcm和wav，
  "SampleRate": 16000,  // Integer，非必填，音频采样率，默认为16000(16k)，推荐值为16000
  "AudioChannel": 1,    // Integer，非必填，音频通道数，取值：1 或 2  默认为1  
}


具体协议规范： 
https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw 



     */
    public $CustomTTSConfig;

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
     * @param integer $NotifyDuration 用户多久没说话提示时长,最小10秒,默认10秒
     * @param string $NotifyMessage 用户NotifyDuration没说话，ai提示的语句，默认是"抱歉，我没听清。您可以重复下吗？"
     * @param string $CustomTTSConfig 和voiceType字段需要选填一个，这里是使用自己自定义的TTS，voiceType是系统内置的一些音色

tencent TTS:
{ 
       "TTSType": "tencent", // String TTS类型, 目前支持"tencent" 和 “minixmax”， 其他的厂商支持中
       "AppId": "您的应用ID", // String 必填
       "SecretId": "您的密钥ID", // String 必填
       "SecretKey":  "您的密钥Key", // String 必填
       "VoiceType": 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见语音合成计费概述。完整的音色 ID 列表请参见语音合成音色列表。
       "Speed": 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换，可参考 语速转换
       "Volume": 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。
       "PrimaryLanguage": 1, // Integer 可选 主要语言 1-中文（默认） 2-英文 3-日文
       "FastVoiceType": "xxxx"   //  可选参数， 快速声音复刻的参数 
  }

参考：https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823 

minimax TTS
{
        "TTSType": "minimax",  // String TTS类型, 
        "Model": "speech-01-turbo",
        "APIUrl": "https://api.minimax.chat/v1/t2a_v2",
        "APIKey": "eyxxxx",
        "GroupId": "181000000000000",
        "VoiceType":"female-tianmei-jingpin",
        "Speed": 1.2
}

参考：https://platform.minimaxi.com/document/T2A%20V2?key=66719005a427f0c8a5701643 
限频参考：https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572   可能会导致回答卡顿



volcengine TTS
{
    "TTSType": "volcengine",  // 必填：String TTS类型
    "AppId" : "xxxxxxxx",   // 必填：String 火山引擎分配的Appid
    "Token" : "TY9d4sQXHxxxxxxx", // 必填： String类型 火山引擎的访问token
    "Speed" : 1.0,            // 可选参数 语速，默认为1.0
    "Volume": 1.0,            // 可选参数， 音量大小， 默认为1.0
    "Cluster" : "volcano_tts", // 可选参数，业务集群, 默认是 volcano_tts
    "VoiceType" : "zh_male_aojiaobazong_moon_bigtts"   // 音色类型， 默认为大模型语音合成的音色。 如果使用普通语音合成，则需要填写对应的音色类型。 音色类型填写错误会导致没有声音。
}



火山引擎音色类型参考：
https://www.volcengine.com/docs/6561/162929 
语音合成音色列表--语音技术-火山引擎
大模型语音合成音色列表--语音技术-火山引擎


Azure TTS
{
    "TTSType": "azure", // 必填：String TTS类型
    "SubscriptionKey": "xxxxxxxx", // 必填：String 订阅的Key
    "Region": "chinanorth3",  // 必填：String 订阅的地区
    "VoiceName": "zh-CN-XiaoxiaoNeural", // 必填：String 音色名必填
    "Language": "zh-CN", // 必填：String 合成的语言  
    "Rate": 1 // 选填：float 语速  0.5～2 默认为 1
}

参考：
https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice 


自定义 TTS 
{
  "TTSType": "custom", // String 必填
  "APIKey": "ApiKey", // String 必填 用来鉴权
  "APIUrl": "http://0.0.0.0:8080/stream-audio" // String，必填，TTS API URL
  "AudioFormat": "wav", // String, 非必填，期望输出的音频格式，如mp3， ogg_opus，pcm，wav，默认为 wav，目前只支持pcm和wav，
  "SampleRate": 16000,  // Integer，非必填，音频采样率，默认为16000(16k)，推荐值为16000
  "AudioChannel": 1,    // Integer，非必填，音频通道数，取值：1 或 2  默认为1  
}


具体协议规范： 
https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw 
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

        if (array_key_exists("NotifyDuration",$param) and $param["NotifyDuration"] !== null) {
            $this->NotifyDuration = $param["NotifyDuration"];
        }

        if (array_key_exists("NotifyMessage",$param) and $param["NotifyMessage"] !== null) {
            $this->NotifyMessage = $param["NotifyMessage"];
        }

        if (array_key_exists("CustomTTSConfig",$param) and $param["CustomTTSConfig"] !== null) {
            $this->CustomTTSConfig = $param["CustomTTSConfig"];
        }
    }
}
