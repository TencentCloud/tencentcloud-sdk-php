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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAICall请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method string getCallee() 获取被叫号码
 * @method void setCallee(string $Callee) 设置被叫号码
 * @method string getLLMType() 获取模型接口协议类型，目前兼容四种协议类型：

- OpenAI协议(包括GPT、混元、DeepSeek等)："openai"
- Azure协议："azure"
- Minimax协议："minimax"
- Dify协议: "dify"
 * @method void setLLMType(string $LLMType) 设置模型接口协议类型，目前兼容四种协议类型：

- OpenAI协议(包括GPT、混元、DeepSeek等)："openai"
- Azure协议："azure"
- Minimax协议："minimax"
- Dify协议: "dify"
 * @method string getAPIKey() 获取模型API密钥，获取鉴权信息方式请参见各模型官网

- OpenAI协议：[GPT](https://help.openai.com/en/articles/4936850-where-do-i-find-my-openai-api-key)，[混元](https://cloud.tencent.com/document/product/1729/111008)，[DeepSeek](https://api-docs.deepseek.com/zh-cn/)；

- Azure协议：[Azure GPT](https://learn.microsoft.com/en-us/azure/ai-services/openai/chatgpt-quickstart?tabs=command-line%2Ctypescript%2Cpython-new&pivots=programming-language-studio#key-settings)；

- Minimax：[Minimax](https://platform.minimaxi.com/document/Fast%20access?key=66701cf51d57f38758d581b2)
 * @method void setAPIKey(string $APIKey) 设置模型API密钥，获取鉴权信息方式请参见各模型官网

- OpenAI协议：[GPT](https://help.openai.com/en/articles/4936850-where-do-i-find-my-openai-api-key)，[混元](https://cloud.tencent.com/document/product/1729/111008)，[DeepSeek](https://api-docs.deepseek.com/zh-cn/)；

- Azure协议：[Azure GPT](https://learn.microsoft.com/en-us/azure/ai-services/openai/chatgpt-quickstart?tabs=command-line%2Ctypescript%2Cpython-new&pivots=programming-language-studio#key-settings)；

- Minimax：[Minimax](https://platform.minimaxi.com/document/Fast%20access?key=66701cf51d57f38758d581b2)
 * @method string getAPIUrl() 获取模型接口地址

- OpenAI协议
GPT："https://api.openai.com/v1/"
混元："https://api.hunyuan.cloud.tencent.com/v1"
Deepseek："https://api.deepseek.com/v1"

- Azure协议
 "https://{your-resource-name}.openai.azure.com?api-version={api-version}"

- Minimax协议
"https://api.minimax.chat/v1"
 * @method void setAPIUrl(string $APIUrl) 设置模型接口地址

- OpenAI协议
GPT："https://api.openai.com/v1/"
混元："https://api.hunyuan.cloud.tencent.com/v1"
Deepseek："https://api.deepseek.com/v1"

- Azure协议
 "https://{your-resource-name}.openai.azure.com?api-version={api-version}"

- Minimax协议
"https://api.minimax.chat/v1"
 * @method string getSystemPrompt() 获取用于设定AI人设、说话规则、任务等的全局提示词。示例：## 人设您是人民医院友善、和蔼的随访医生李医生，正在给患者小明的家长打电话，原因是医院要求小明2024-08-08回院复查手术恢复情况，但小明没有来。您需要按照任务流程对小明家长进行电话随访调查。## 要求简洁回复：使用简练语言，每次最多询问一个问题，不要在一个回复中询问多个问题。富有变化：尽量使表达富有变化，表达机械重复。自然亲切：使用日常语言，尽量显得专业并亲切。提到时间时使用口语表述，如下周三、6月18日。积极主动：尝试引导对话，每个回复通常以问题或下一步建议来结尾。询问清楚：如果对方部分回答了您的问题，或者回答很模糊，请通过追问来确保回答的完整明确。遵循任务：当对方的回答偏离了您的任务时，及时引导对方回到任务中。不要从头开始重复，从偏离的地方继续询问。诚实可靠：对于客户的提问，如果不确定请务必不要编造，礼貌告知对方不清楚。不要捏造患者未提及的症状史、用药史、治疗史。其他注意点：避免提到病情恶化、恢复不理想或疾病名称等使用会使患者感到紧张的表述。不要问患者已经直接或间接回答过的问题，例如患者已经说没有不适症状，那就不要再问手术部位是否有红肿疼痛症状的问题。##任务： 1.自我介绍您是人民医院负责随访的李医生，并说明致电的目的。2.询问被叫方是否是小明家长。 - 如果不是小明家长，请礼貌表达歉意，并使用 call_end 挂断电话。- 如果小明家长没空，请礼貌告诉对方稍后会重新致电，并使用 end_call 挂断电话。3.询问小明出院后水肿情况如何，较出院时是否有变化。- 如果水肿变严重，直接跳转步骤7。4.询问出院后是否给小朋友量过体温，是否出现过发烧情况。- 如果没有量过体温，请礼貌告诉家长出院后三个月内需要每天观察体温。- 如果出现过发烧，请直接跳转步骤7。5.询问出院后是否给小朋友按时服药。- 如果没有按时服药，请友善提醒家长严格按医嘱服用药物，避免影响手术效果。6.询问小朋友在饮食上是否做到低盐低脂，适量吃优质蛋白如鸡蛋、牛奶、瘦肉等。- 如果没有做到，请友善提醒家长低盐低脂和优质蛋白有助小朋友尽快恢复。7.告知家长医生要求6月18日回院复查，但没看到有相关复诊记录。提醒家长尽快前往医院体检复查血化验、尿常规。8.询问家长是否有问题需要咨询，如果没有请礼貌道别并用call_end挂断电话。
 * @method void setSystemPrompt(string $SystemPrompt) 设置用于设定AI人设、说话规则、任务等的全局提示词。示例：## 人设您是人民医院友善、和蔼的随访医生李医生，正在给患者小明的家长打电话，原因是医院要求小明2024-08-08回院复查手术恢复情况，但小明没有来。您需要按照任务流程对小明家长进行电话随访调查。## 要求简洁回复：使用简练语言，每次最多询问一个问题，不要在一个回复中询问多个问题。富有变化：尽量使表达富有变化，表达机械重复。自然亲切：使用日常语言，尽量显得专业并亲切。提到时间时使用口语表述，如下周三、6月18日。积极主动：尝试引导对话，每个回复通常以问题或下一步建议来结尾。询问清楚：如果对方部分回答了您的问题，或者回答很模糊，请通过追问来确保回答的完整明确。遵循任务：当对方的回答偏离了您的任务时，及时引导对方回到任务中。不要从头开始重复，从偏离的地方继续询问。诚实可靠：对于客户的提问，如果不确定请务必不要编造，礼貌告知对方不清楚。不要捏造患者未提及的症状史、用药史、治疗史。其他注意点：避免提到病情恶化、恢复不理想或疾病名称等使用会使患者感到紧张的表述。不要问患者已经直接或间接回答过的问题，例如患者已经说没有不适症状，那就不要再问手术部位是否有红肿疼痛症状的问题。##任务： 1.自我介绍您是人民医院负责随访的李医生，并说明致电的目的。2.询问被叫方是否是小明家长。 - 如果不是小明家长，请礼貌表达歉意，并使用 call_end 挂断电话。- 如果小明家长没空，请礼貌告诉对方稍后会重新致电，并使用 end_call 挂断电话。3.询问小明出院后水肿情况如何，较出院时是否有变化。- 如果水肿变严重，直接跳转步骤7。4.询问出院后是否给小朋友量过体温，是否出现过发烧情况。- 如果没有量过体温，请礼貌告诉家长出院后三个月内需要每天观察体温。- 如果出现过发烧，请直接跳转步骤7。5.询问出院后是否给小朋友按时服药。- 如果没有按时服药，请友善提醒家长严格按医嘱服用药物，避免影响手术效果。6.询问小朋友在饮食上是否做到低盐低脂，适量吃优质蛋白如鸡蛋、牛奶、瘦肉等。- 如果没有做到，请友善提醒家长低盐低脂和优质蛋白有助小朋友尽快恢复。7.告知家长医生要求6月18日回院复查，但没看到有相关复诊记录。提醒家长尽快前往医院体检复查血化验、尿常规。8.询问家长是否有问题需要咨询，如果没有请礼貌道别并用call_end挂断电话。
 * @method string getModel() 获取模型名称，如

- OpenAI协议
"gpt-4o-mini","gpt-4o"，"hunyuan-standard", "hunyuan-turbo"，"deepseek-chat"；

- Azure协议
"gpt-4o-mini", "gpt-4o"；

- Minmax协议
"deepseek-chat".
 * @method void setModel(string $Model) 设置模型名称，如

- OpenAI协议
"gpt-4o-mini","gpt-4o"，"hunyuan-standard", "hunyuan-turbo"，"deepseek-chat"；

- Azure协议
"gpt-4o-mini", "gpt-4o"；

- Minmax协议
"deepseek-chat".
 * @method string getVoiceType() 获取默认提供以下音色参数值可选择，如需自定义音色VoiceType请留空并在参数CustomTTSConfig中配置

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


 * @method void setVoiceType(string $VoiceType) 设置默认提供以下音色参数值可选择，如需自定义音色VoiceType请留空并在参数CustomTTSConfig中配置

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
 * @method integer getWelcomeMessagePriority() 获取0: 默认可打断， 2：高优先不可打断
 * @method void setWelcomeMessagePriority(integer $WelcomeMessagePriority) 设置0: 默认可打断， 2：高优先不可打断
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
 * @method integer getInterruptMode() 获取打断AI说话模式，默认为0，0表示自动打断，1表示不打断。
 * @method void setInterruptMode(integer $InterruptMode) 设置打断AI说话模式，默认为0，0表示自动打断，1表示不打断。
 * @method integer getInterruptSpeechDuration() 获取InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) 设置InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
 * @method boolean getEndFunctionEnable() 获取模型是否支持(或者开启)call_end function calling
 * @method void setEndFunctionEnable(boolean $EndFunctionEnable) 设置模型是否支持(或者开启)call_end function calling
 * @method string getEndFunctionDesc() 获取EndFunctionEnable为true时生效；call_end function calling的desc，默认为 "End the call when user has to leave (like says bye) or you are instructed to do so."
 * @method void setEndFunctionDesc(string $EndFunctionDesc) 设置EndFunctionEnable为true时生效；call_end function calling的desc，默认为 "End the call when user has to leave (like says bye) or you are instructed to do so."
 * @method boolean getTransferFunctionEnable() 获取模型是否支持(或者开启)transfer_to_human function calling
 * @method void setTransferFunctionEnable(boolean $TransferFunctionEnable) 设置模型是否支持(或者开启)transfer_to_human function calling
 * @method array getTransferItems() 获取TransferFunctionEnable为true的时候生效: 转人工配置
 * @method void setTransferItems(array $TransferItems) 设置TransferFunctionEnable为true的时候生效: 转人工配置
 * @method integer getNotifyDuration() 获取用户多久没说话提示时长,最小10秒,默认10秒
 * @method void setNotifyDuration(integer $NotifyDuration) 设置用户多久没说话提示时长,最小10秒,默认10秒
 * @method string getNotifyMessage() 获取用户NotifyDuration没说话，AI提示的语句，默认是"抱歉，我没听清。您可以重复下吗？"
 * @method void setNotifyMessage(string $NotifyMessage) 设置用户NotifyDuration没说话，AI提示的语句，默认是"抱歉，我没听清。您可以重复下吗？"
 * @method integer getNotifyMaxCount() 获取最大触发AI提示音次数，默认为不限制
 * @method void setNotifyMaxCount(integer $NotifyMaxCount) 设置最大触发AI提示音次数，默认为不限制
 * @method string getCustomTTSConfig() 获取<p>和VoiceType字段需要选填一个，这里是使用自己自定义的TTS，VoiceType是系统内置的一些音色</p>
<ul>
<li>Tencent TTS<br>
配置请参考<a href="https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823" target="_blank">腾讯云TTS文档链接</a></li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{ 
       &quot;TTSType&quot;: &quot;tencent&quot;, // String TTS类型, 目前支持&quot;tencent&quot; 和 “minixmax”， 其他的厂商支持中
       &quot;AppId&quot;: &quot;您的应用ID&quot;, // String 必填
       &quot;SecretId&quot;: &quot;您的密钥ID&quot;, // String 必填
       &quot;SecretKey&quot;:  &quot;您的密钥Key&quot;, // String 必填
       &quot;VoiceType&quot;: 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见语音合成计费概述。完整的音色 ID 列表请参见语音合成音色列表。
       &quot;Speed&quot;: 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换，可参考 语速转换
       &quot;Volume&quot;: 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。
       &quot;PrimaryLanguage&quot;: 1, // Integer 可选 主要语言 1-中文（默认） 2-英文 3-日文
       &quot;FastVoiceType&quot;: &quot;xxxx&quot;   //  可选参数， 快速声音复刻的参数 
  }
</code></pre>
 </div><ul>
<li>Minimax TTS<br>
配置请参考<a href="https://platform.minimaxi.com/document/T2A%20V2?key=66719005a427f0c8a5701643" target="_blank"> Minimax TTS 文档链接</a>。注意 Minimax TTS 存在频率限制，超频可能会导致回答卡顿，<a href="https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572" target="_blank">Minimax TTS频率限制相关文档链接</a>。</li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
        &quot;TTSType&quot;: &quot;minimax&quot;,  // String TTS类型, 
        &quot;Model&quot;: &quot;speech-01-turbo&quot;,
        &quot;APIUrl&quot;: &quot;https://api.minimax.chat/v1/t2a_v2&quot;,
        &quot;APIKey&quot;: &quot;eyxxxx&quot;,
        &quot;GroupId&quot;: &quot;181000000000000&quot;,
        &quot;VoiceType&quot;:&quot;female-tianmei&quot;,
        &quot;Speed&quot;: 1.2
}
</code></pre>
</div><ul>
<li>火山 TTS</li>
</ul>
<p>配置音色类型参考<a href="https://www.volcengine.com/docs/6561/162929" target="_blank">火山TTS文档链接</a><br>
语音合成音色列表–语音技术-火山引擎<br>
大模型语音合成音色列表–语音技术-火山引擎</p>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
    &quot;TTSType&quot;: &quot;volcengine&quot;,  // 必填：String TTS类型
    &quot;AppId&quot; : &quot;xxxxxxxx&quot;,   // 必填：String 火山引擎分配的Appid
    &quot;Token&quot; : &quot;TY9d4sQXHxxxxxxx&quot;, // 必填： String类型 火山引擎的访问token
    &quot;Speed&quot; : 1.0,            // 可选参数 语速，默认为1.0
    &quot;Volume&quot;: 1.0,            // 可选参数， 音量大小， 默认为1.0
    &quot;Cluster&quot; : &quot;volcano_tts&quot;, // 可选参数，业务集群, 默认是 volcano_tts
    &quot;VoiceType&quot; : &quot;zh_male_aojiaobazong_moon_bigtts&quot;   // 音色类型， 默认为大模型语音合成的音色。 如果使用普通语音合成，则需要填写对应的音色类型。 音色类型填写错误会导致没有声音。
}
</code></pre>
</div><ul>
<li>Azure TTS<br>
配置请参考<a href="https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice" target="_blank">AzureTTS文档链接</a></li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
    &quot;TTSType&quot;: &quot;azure&quot;, // 必填：String TTS类型
    &quot;SubscriptionKey&quot;: &quot;xxxxxxxx&quot;, // 必填：String 订阅的Key
    &quot;Region&quot;: &quot;chinanorth3&quot;,  // 必填：String 订阅的地区
    &quot;VoiceName&quot;: &quot;zh-CN-XiaoxiaoNeural&quot;, // 必填：String 音色名必填
    &quot;Language&quot;: &quot;zh-CN&quot;, // 必填：String 合成的语言  
    &quot;Rate&quot;: 1 // 选填：float 语速  0.5～2 默认为 1
}
</code></pre>
</div><ul>
<li>自定义TTS</li>
</ul>
<p>具体协议规范请参考<a href="https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw" target="_blank">腾讯文档</a></p>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
  &quot;TTSType&quot;: &quot;custom&quot;, // String 必填
  &quot;APIKey&quot;: &quot;ApiKey&quot;, // String 必填 用来鉴权
  &quot;APIUrl&quot;: &quot;http://0.0.0.0:8080/stream-audio&quot; // String，必填，TTS API URL
  &quot;AudioFormat&quot;: &quot;wav&quot;, // String, 非必填，期望输出的音频格式，如mp3， ogg_opus，pcm，wav，默认为 wav，目前只支持pcm和wav，
  &quot;SampleRate&quot;: 16000,  // Integer，非必填，音频采样率，默认为16000(16k)，推荐值为16000
  &quot;AudioChannel&quot;: 1,    // Integer，非必填，音频通道数，取值：1 或 2  默认为1  
}
</code></pre>
</div>
 * @method void setCustomTTSConfig(string $CustomTTSConfig) 设置<p>和VoiceType字段需要选填一个，这里是使用自己自定义的TTS，VoiceType是系统内置的一些音色</p>
<ul>
<li>Tencent TTS<br>
配置请参考<a href="https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823" target="_blank">腾讯云TTS文档链接</a></li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{ 
       &quot;TTSType&quot;: &quot;tencent&quot;, // String TTS类型, 目前支持&quot;tencent&quot; 和 “minixmax”， 其他的厂商支持中
       &quot;AppId&quot;: &quot;您的应用ID&quot;, // String 必填
       &quot;SecretId&quot;: &quot;您的密钥ID&quot;, // String 必填
       &quot;SecretKey&quot;:  &quot;您的密钥Key&quot;, // String 必填
       &quot;VoiceType&quot;: 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见语音合成计费概述。完整的音色 ID 列表请参见语音合成音色列表。
       &quot;Speed&quot;: 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换，可参考 语速转换
       &quot;Volume&quot;: 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。
       &quot;PrimaryLanguage&quot;: 1, // Integer 可选 主要语言 1-中文（默认） 2-英文 3-日文
       &quot;FastVoiceType&quot;: &quot;xxxx&quot;   //  可选参数， 快速声音复刻的参数 
  }
</code></pre>
 </div><ul>
<li>Minimax TTS<br>
配置请参考<a href="https://platform.minimaxi.com/document/T2A%20V2?key=66719005a427f0c8a5701643" target="_blank"> Minimax TTS 文档链接</a>。注意 Minimax TTS 存在频率限制，超频可能会导致回答卡顿，<a href="https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572" target="_blank">Minimax TTS频率限制相关文档链接</a>。</li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
        &quot;TTSType&quot;: &quot;minimax&quot;,  // String TTS类型, 
        &quot;Model&quot;: &quot;speech-01-turbo&quot;,
        &quot;APIUrl&quot;: &quot;https://api.minimax.chat/v1/t2a_v2&quot;,
        &quot;APIKey&quot;: &quot;eyxxxx&quot;,
        &quot;GroupId&quot;: &quot;181000000000000&quot;,
        &quot;VoiceType&quot;:&quot;female-tianmei&quot;,
        &quot;Speed&quot;: 1.2
}
</code></pre>
</div><ul>
<li>火山 TTS</li>
</ul>
<p>配置音色类型参考<a href="https://www.volcengine.com/docs/6561/162929" target="_blank">火山TTS文档链接</a><br>
语音合成音色列表–语音技术-火山引擎<br>
大模型语音合成音色列表–语音技术-火山引擎</p>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
    &quot;TTSType&quot;: &quot;volcengine&quot;,  // 必填：String TTS类型
    &quot;AppId&quot; : &quot;xxxxxxxx&quot;,   // 必填：String 火山引擎分配的Appid
    &quot;Token&quot; : &quot;TY9d4sQXHxxxxxxx&quot;, // 必填： String类型 火山引擎的访问token
    &quot;Speed&quot; : 1.0,            // 可选参数 语速，默认为1.0
    &quot;Volume&quot;: 1.0,            // 可选参数， 音量大小， 默认为1.0
    &quot;Cluster&quot; : &quot;volcano_tts&quot;, // 可选参数，业务集群, 默认是 volcano_tts
    &quot;VoiceType&quot; : &quot;zh_male_aojiaobazong_moon_bigtts&quot;   // 音色类型， 默认为大模型语音合成的音色。 如果使用普通语音合成，则需要填写对应的音色类型。 音色类型填写错误会导致没有声音。
}
</code></pre>
</div><ul>
<li>Azure TTS<br>
配置请参考<a href="https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice" target="_blank">AzureTTS文档链接</a></li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
    &quot;TTSType&quot;: &quot;azure&quot;, // 必填：String TTS类型
    &quot;SubscriptionKey&quot;: &quot;xxxxxxxx&quot;, // 必填：String 订阅的Key
    &quot;Region&quot;: &quot;chinanorth3&quot;,  // 必填：String 订阅的地区
    &quot;VoiceName&quot;: &quot;zh-CN-XiaoxiaoNeural&quot;, // 必填：String 音色名必填
    &quot;Language&quot;: &quot;zh-CN&quot;, // 必填：String 合成的语言  
    &quot;Rate&quot;: 1 // 选填：float 语速  0.5～2 默认为 1
}
</code></pre>
</div><ul>
<li>自定义TTS</li>
</ul>
<p>具体协议规范请参考<a href="https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw" target="_blank">腾讯文档</a></p>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
  &quot;TTSType&quot;: &quot;custom&quot;, // String 必填
  &quot;APIKey&quot;: &quot;ApiKey&quot;, // String 必填 用来鉴权
  &quot;APIUrl&quot;: &quot;http://0.0.0.0:8080/stream-audio&quot; // String，必填，TTS API URL
  &quot;AudioFormat&quot;: &quot;wav&quot;, // String, 非必填，期望输出的音频格式，如mp3， ogg_opus，pcm，wav，默认为 wav，目前只支持pcm和wav，
  &quot;SampleRate&quot;: 16000,  // Integer，非必填，音频采样率，默认为16000(16k)，推荐值为16000
  &quot;AudioChannel&quot;: 1,    // Integer，非必填，音频通道数，取值：1 或 2  默认为1  
}
</code></pre>
</div>
 * @method array getPromptVariables() 获取提示词变量
 * @method void setPromptVariables(array $PromptVariables) 设置提示词变量
 * @method integer getVadSilenceTime() 获取语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
 * @method void setVadSilenceTime(integer $VadSilenceTime) 设置语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
 * @method array getExtractConfig() 获取通话内容提取配置
 * @method void setExtractConfig(array $ExtractConfig) 设置通话内容提取配置
 * @method float getTemperature() 获取模型温度控制
 * @method void setTemperature(float $Temperature) 设置模型温度控制
 * @method array getVariables() 获取通用变量： <p>提示词变量</p> <p>欢迎语变量</p> <p> 欢迎语延迟播放(秒级)：welcome-message-delay</p>  <p> dify变量</p>  

1. dify-inputs-xxx 为dify的inputs变量
2.  dify-inputs-user 为dify的user值
3.  dify-inputs-conversation_id 为dify的conversation_id值
 * @method void setVariables(array $Variables) 设置通用变量： <p>提示词变量</p> <p>欢迎语变量</p> <p> 欢迎语延迟播放(秒级)：welcome-message-delay</p>  <p> dify变量</p>  

1. dify-inputs-xxx 为dify的inputs变量
2.  dify-inputs-user 为dify的user值
3.  dify-inputs-conversation_id 为dify的conversation_id值
 * @method float getTopP() 获取模型topP
 * @method void setTopP(float $TopP) 设置模型topP
 * @method integer getVadLevel() 获取vad的远场人声抑制能力（不会对asr识别效果造成影响），范围为[0, 3]，默认为0。推荐设置为2，有较好的远场人声抑制能力。
 * @method void setVadLevel(integer $VadLevel) 设置vad的远场人声抑制能力（不会对asr识别效果造成影响），范围为[0, 3]，默认为0。推荐设置为2，有较好的远场人声抑制能力。
 * @method ToneWordInfo getToneWord() 获取衔接语
 * @method void setToneWord(ToneWordInfo $ToneWord) 设置衔接语
 * @method boolean getEnableComplianceAudio() 获取合规提示音， 
该参数传true（默认）表示通话开始播放摩斯码，提示对话内容为 AI 生成。
该参数传false表示关闭合规提示音。该参数传false则代表您知晓并同意以下协议：
我方充分知悉和理解，根据[《网络安全法》](https://www.cac.gov.cn/2016-11/07/c_1119867116.htm)[《互联网信息服务深度合成管理规定》](https://www.gov.cn/zhengce/zhengceku/2022-12/12/content_5731431.htm)[《生成式人工智能服务管理暂行办法》](https://www.gov.cn/zhengce/zhengceku/202307/content_6891752.htm)[《人工智能生成合成内容标识办法》](https://www.gov.cn/zhengce/zhengceku/202503/content_7014286.htm)的法律法规的规定，对人工智能生成合成内容应当添加显式标识和隐式标识。我方基于业务需求，请腾讯云对生成合成内容不添加显式标识，我方承诺合法合规使用生成合成内容，避免造成混淆、误认；如果使用生成合成内容对公众提供服务的，或通过网络传播的，我方将自觉主动添加符合法律规定和国家标准要求的显式标识，承担人工智能生成合成内容标识的法律义务。我方未能恰当、合理地履行人工智能内容标识义务造成不良后果的，或遭受主管部门责罚的，相关责任由我方完全承担。
 * @method void setEnableComplianceAudio(boolean $EnableComplianceAudio) 设置合规提示音， 
该参数传true（默认）表示通话开始播放摩斯码，提示对话内容为 AI 生成。
该参数传false表示关闭合规提示音。该参数传false则代表您知晓并同意以下协议：
我方充分知悉和理解，根据[《网络安全法》](https://www.cac.gov.cn/2016-11/07/c_1119867116.htm)[《互联网信息服务深度合成管理规定》](https://www.gov.cn/zhengce/zhengceku/2022-12/12/content_5731431.htm)[《生成式人工智能服务管理暂行办法》](https://www.gov.cn/zhengce/zhengceku/202307/content_6891752.htm)[《人工智能生成合成内容标识办法》](https://www.gov.cn/zhengce/zhengceku/202503/content_7014286.htm)的法律法规的规定，对人工智能生成合成内容应当添加显式标识和隐式标识。我方基于业务需求，请腾讯云对生成合成内容不添加显式标识，我方承诺合法合规使用生成合成内容，避免造成混淆、误认；如果使用生成合成内容对公众提供服务的，或通过网络传播的，我方将自觉主动添加符合法律规定和国家标准要求的显式标识，承担人工智能生成合成内容标识的法律义务。我方未能恰当、合理地履行人工智能内容标识义务造成不良后果的，或遭受主管部门责罚的，相关责任由我方完全承担。
 * @method boolean getEnableVoicemailDetection() 获取是否开启语音信箱识别
 * @method void setEnableVoicemailDetection(boolean $EnableVoicemailDetection) 设置是否开启语音信箱识别
 * @method integer getVoicemailAction() 获取识别到对端为语音信箱时的行为，当EnableVoicemailDetection为True时生效
0: 挂断电话（默认）
 * @method void setVoicemailAction(integer $VoicemailAction) 设置识别到对端为语音信箱时的行为，当EnableVoicemailDetection为True时生效
0: 挂断电话（默认）
 * @method string getLLMExtraBody() 获取大模型拓展参数， 格式为json字符串
 * @method void setLLMExtraBody(string $LLMExtraBody) 设置大模型拓展参数， 格式为json字符串
 * @method integer getMaxCallDurationMs() 获取最大通话时长， 默认不限制。单位毫秒(ms)
 * @method void setMaxCallDurationMs(integer $MaxCallDurationMs) 设置最大通话时长， 默认不限制。单位毫秒(ms)
 * @method integer getMaxRingTimeoutSecond() 获取最大振铃时长，达到时长阈值自动挂断。 **仅自携号码支持当前参数**
 * @method void setMaxRingTimeoutSecond(integer $MaxRingTimeoutSecond) 设置最大振铃时长，达到时长阈值自动挂断。 **仅自携号码支持当前参数**
 */
class CreateAICallRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var string 被叫号码
     */
    public $Callee;

    /**
     * @var string 模型接口协议类型，目前兼容四种协议类型：

- OpenAI协议(包括GPT、混元、DeepSeek等)："openai"
- Azure协议："azure"
- Minimax协议："minimax"
- Dify协议: "dify"
     */
    public $LLMType;

    /**
     * @var string 模型API密钥，获取鉴权信息方式请参见各模型官网

- OpenAI协议：[GPT](https://help.openai.com/en/articles/4936850-where-do-i-find-my-openai-api-key)，[混元](https://cloud.tencent.com/document/product/1729/111008)，[DeepSeek](https://api-docs.deepseek.com/zh-cn/)；

- Azure协议：[Azure GPT](https://learn.microsoft.com/en-us/azure/ai-services/openai/chatgpt-quickstart?tabs=command-line%2Ctypescript%2Cpython-new&pivots=programming-language-studio#key-settings)；

- Minimax：[Minimax](https://platform.minimaxi.com/document/Fast%20access?key=66701cf51d57f38758d581b2)
     */
    public $APIKey;

    /**
     * @var string 模型接口地址

- OpenAI协议
GPT："https://api.openai.com/v1/"
混元："https://api.hunyuan.cloud.tencent.com/v1"
Deepseek："https://api.deepseek.com/v1"

- Azure协议
 "https://{your-resource-name}.openai.azure.com?api-version={api-version}"

- Minimax协议
"https://api.minimax.chat/v1"
     */
    public $APIUrl;

    /**
     * @var string 用于设定AI人设、说话规则、任务等的全局提示词。示例：## 人设您是人民医院友善、和蔼的随访医生李医生，正在给患者小明的家长打电话，原因是医院要求小明2024-08-08回院复查手术恢复情况，但小明没有来。您需要按照任务流程对小明家长进行电话随访调查。## 要求简洁回复：使用简练语言，每次最多询问一个问题，不要在一个回复中询问多个问题。富有变化：尽量使表达富有变化，表达机械重复。自然亲切：使用日常语言，尽量显得专业并亲切。提到时间时使用口语表述，如下周三、6月18日。积极主动：尝试引导对话，每个回复通常以问题或下一步建议来结尾。询问清楚：如果对方部分回答了您的问题，或者回答很模糊，请通过追问来确保回答的完整明确。遵循任务：当对方的回答偏离了您的任务时，及时引导对方回到任务中。不要从头开始重复，从偏离的地方继续询问。诚实可靠：对于客户的提问，如果不确定请务必不要编造，礼貌告知对方不清楚。不要捏造患者未提及的症状史、用药史、治疗史。其他注意点：避免提到病情恶化、恢复不理想或疾病名称等使用会使患者感到紧张的表述。不要问患者已经直接或间接回答过的问题，例如患者已经说没有不适症状，那就不要再问手术部位是否有红肿疼痛症状的问题。##任务： 1.自我介绍您是人民医院负责随访的李医生，并说明致电的目的。2.询问被叫方是否是小明家长。 - 如果不是小明家长，请礼貌表达歉意，并使用 call_end 挂断电话。- 如果小明家长没空，请礼貌告诉对方稍后会重新致电，并使用 end_call 挂断电话。3.询问小明出院后水肿情况如何，较出院时是否有变化。- 如果水肿变严重，直接跳转步骤7。4.询问出院后是否给小朋友量过体温，是否出现过发烧情况。- 如果没有量过体温，请礼貌告诉家长出院后三个月内需要每天观察体温。- 如果出现过发烧，请直接跳转步骤7。5.询问出院后是否给小朋友按时服药。- 如果没有按时服药，请友善提醒家长严格按医嘱服用药物，避免影响手术效果。6.询问小朋友在饮食上是否做到低盐低脂，适量吃优质蛋白如鸡蛋、牛奶、瘦肉等。- 如果没有做到，请友善提醒家长低盐低脂和优质蛋白有助小朋友尽快恢复。7.告知家长医生要求6月18日回院复查，但没看到有相关复诊记录。提醒家长尽快前往医院体检复查血化验、尿常规。8.询问家长是否有问题需要咨询，如果没有请礼貌道别并用call_end挂断电话。
     */
    public $SystemPrompt;

    /**
     * @var string 模型名称，如

- OpenAI协议
"gpt-4o-mini","gpt-4o"，"hunyuan-standard", "hunyuan-turbo"，"deepseek-chat"；

- Azure协议
"gpt-4o-mini", "gpt-4o"；

- Minmax协议
"deepseek-chat".
     */
    public $Model;

    /**
     * @var string 默认提供以下音色参数值可选择，如需自定义音色VoiceType请留空并在参数CustomTTSConfig中配置

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
     * @var integer 0: 默认可打断， 2：高优先不可打断
     */
    public $WelcomeMessagePriority;

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
     * @var integer 打断AI说话模式，默认为0，0表示自动打断，1表示不打断。
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
     * @var boolean 模型是否支持(或者开启)transfer_to_human function calling
     */
    public $TransferFunctionEnable;

    /**
     * @var array TransferFunctionEnable为true的时候生效: 转人工配置
     */
    public $TransferItems;

    /**
     * @var integer 用户多久没说话提示时长,最小10秒,默认10秒
     */
    public $NotifyDuration;

    /**
     * @var string 用户NotifyDuration没说话，AI提示的语句，默认是"抱歉，我没听清。您可以重复下吗？"
     */
    public $NotifyMessage;

    /**
     * @var integer 最大触发AI提示音次数，默认为不限制
     */
    public $NotifyMaxCount;

    /**
     * @var string <p>和VoiceType字段需要选填一个，这里是使用自己自定义的TTS，VoiceType是系统内置的一些音色</p>
<ul>
<li>Tencent TTS<br>
配置请参考<a href="https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823" target="_blank">腾讯云TTS文档链接</a></li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{ 
       &quot;TTSType&quot;: &quot;tencent&quot;, // String TTS类型, 目前支持&quot;tencent&quot; 和 “minixmax”， 其他的厂商支持中
       &quot;AppId&quot;: &quot;您的应用ID&quot;, // String 必填
       &quot;SecretId&quot;: &quot;您的密钥ID&quot;, // String 必填
       &quot;SecretKey&quot;:  &quot;您的密钥Key&quot;, // String 必填
       &quot;VoiceType&quot;: 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见语音合成计费概述。完整的音色 ID 列表请参见语音合成音色列表。
       &quot;Speed&quot;: 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换，可参考 语速转换
       &quot;Volume&quot;: 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。
       &quot;PrimaryLanguage&quot;: 1, // Integer 可选 主要语言 1-中文（默认） 2-英文 3-日文
       &quot;FastVoiceType&quot;: &quot;xxxx&quot;   //  可选参数， 快速声音复刻的参数 
  }
</code></pre>
 </div><ul>
<li>Minimax TTS<br>
配置请参考<a href="https://platform.minimaxi.com/document/T2A%20V2?key=66719005a427f0c8a5701643" target="_blank"> Minimax TTS 文档链接</a>。注意 Minimax TTS 存在频率限制，超频可能会导致回答卡顿，<a href="https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572" target="_blank">Minimax TTS频率限制相关文档链接</a>。</li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
        &quot;TTSType&quot;: &quot;minimax&quot;,  // String TTS类型, 
        &quot;Model&quot;: &quot;speech-01-turbo&quot;,
        &quot;APIUrl&quot;: &quot;https://api.minimax.chat/v1/t2a_v2&quot;,
        &quot;APIKey&quot;: &quot;eyxxxx&quot;,
        &quot;GroupId&quot;: &quot;181000000000000&quot;,
        &quot;VoiceType&quot;:&quot;female-tianmei&quot;,
        &quot;Speed&quot;: 1.2
}
</code></pre>
</div><ul>
<li>火山 TTS</li>
</ul>
<p>配置音色类型参考<a href="https://www.volcengine.com/docs/6561/162929" target="_blank">火山TTS文档链接</a><br>
语音合成音色列表–语音技术-火山引擎<br>
大模型语音合成音色列表–语音技术-火山引擎</p>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
    &quot;TTSType&quot;: &quot;volcengine&quot;,  // 必填：String TTS类型
    &quot;AppId&quot; : &quot;xxxxxxxx&quot;,   // 必填：String 火山引擎分配的Appid
    &quot;Token&quot; : &quot;TY9d4sQXHxxxxxxx&quot;, // 必填： String类型 火山引擎的访问token
    &quot;Speed&quot; : 1.0,            // 可选参数 语速，默认为1.0
    &quot;Volume&quot;: 1.0,            // 可选参数， 音量大小， 默认为1.0
    &quot;Cluster&quot; : &quot;volcano_tts&quot;, // 可选参数，业务集群, 默认是 volcano_tts
    &quot;VoiceType&quot; : &quot;zh_male_aojiaobazong_moon_bigtts&quot;   // 音色类型， 默认为大模型语音合成的音色。 如果使用普通语音合成，则需要填写对应的音色类型。 音色类型填写错误会导致没有声音。
}
</code></pre>
</div><ul>
<li>Azure TTS<br>
配置请参考<a href="https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice" target="_blank">AzureTTS文档链接</a></li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
    &quot;TTSType&quot;: &quot;azure&quot;, // 必填：String TTS类型
    &quot;SubscriptionKey&quot;: &quot;xxxxxxxx&quot;, // 必填：String 订阅的Key
    &quot;Region&quot;: &quot;chinanorth3&quot;,  // 必填：String 订阅的地区
    &quot;VoiceName&quot;: &quot;zh-CN-XiaoxiaoNeural&quot;, // 必填：String 音色名必填
    &quot;Language&quot;: &quot;zh-CN&quot;, // 必填：String 合成的语言  
    &quot;Rate&quot;: 1 // 选填：float 语速  0.5～2 默认为 1
}
</code></pre>
</div><ul>
<li>自定义TTS</li>
</ul>
<p>具体协议规范请参考<a href="https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw" target="_blank">腾讯文档</a></p>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
  &quot;TTSType&quot;: &quot;custom&quot;, // String 必填
  &quot;APIKey&quot;: &quot;ApiKey&quot;, // String 必填 用来鉴权
  &quot;APIUrl&quot;: &quot;http://0.0.0.0:8080/stream-audio&quot; // String，必填，TTS API URL
  &quot;AudioFormat&quot;: &quot;wav&quot;, // String, 非必填，期望输出的音频格式，如mp3， ogg_opus，pcm，wav，默认为 wav，目前只支持pcm和wav，
  &quot;SampleRate&quot;: 16000,  // Integer，非必填，音频采样率，默认为16000(16k)，推荐值为16000
  &quot;AudioChannel&quot;: 1,    // Integer，非必填，音频通道数，取值：1 或 2  默认为1  
}
</code></pre>
</div>
     */
    public $CustomTTSConfig;

    /**
     * @var array 提示词变量
     * @deprecated
     */
    public $PromptVariables;

    /**
     * @var integer 语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
     */
    public $VadSilenceTime;

    /**
     * @var array 通话内容提取配置
     */
    public $ExtractConfig;

    /**
     * @var float 模型温度控制
     */
    public $Temperature;

    /**
     * @var array 通用变量： <p>提示词变量</p> <p>欢迎语变量</p> <p> 欢迎语延迟播放(秒级)：welcome-message-delay</p>  <p> dify变量</p>  

1. dify-inputs-xxx 为dify的inputs变量
2.  dify-inputs-user 为dify的user值
3.  dify-inputs-conversation_id 为dify的conversation_id值
     */
    public $Variables;

    /**
     * @var float 模型topP
     */
    public $TopP;

    /**
     * @var integer vad的远场人声抑制能力（不会对asr识别效果造成影响），范围为[0, 3]，默认为0。推荐设置为2，有较好的远场人声抑制能力。
     */
    public $VadLevel;

    /**
     * @var ToneWordInfo 衔接语
     */
    public $ToneWord;

    /**
     * @var boolean 合规提示音， 
该参数传true（默认）表示通话开始播放摩斯码，提示对话内容为 AI 生成。
该参数传false表示关闭合规提示音。该参数传false则代表您知晓并同意以下协议：
我方充分知悉和理解，根据[《网络安全法》](https://www.cac.gov.cn/2016-11/07/c_1119867116.htm)[《互联网信息服务深度合成管理规定》](https://www.gov.cn/zhengce/zhengceku/2022-12/12/content_5731431.htm)[《生成式人工智能服务管理暂行办法》](https://www.gov.cn/zhengce/zhengceku/202307/content_6891752.htm)[《人工智能生成合成内容标识办法》](https://www.gov.cn/zhengce/zhengceku/202503/content_7014286.htm)的法律法规的规定，对人工智能生成合成内容应当添加显式标识和隐式标识。我方基于业务需求，请腾讯云对生成合成内容不添加显式标识，我方承诺合法合规使用生成合成内容，避免造成混淆、误认；如果使用生成合成内容对公众提供服务的，或通过网络传播的，我方将自觉主动添加符合法律规定和国家标准要求的显式标识，承担人工智能生成合成内容标识的法律义务。我方未能恰当、合理地履行人工智能内容标识义务造成不良后果的，或遭受主管部门责罚的，相关责任由我方完全承担。
     */
    public $EnableComplianceAudio;

    /**
     * @var boolean 是否开启语音信箱识别
     */
    public $EnableVoicemailDetection;

    /**
     * @var integer 识别到对端为语音信箱时的行为，当EnableVoicemailDetection为True时生效
0: 挂断电话（默认）
     */
    public $VoicemailAction;

    /**
     * @var string 大模型拓展参数， 格式为json字符串
     */
    public $LLMExtraBody;

    /**
     * @var integer 最大通话时长， 默认不限制。单位毫秒(ms)
     */
    public $MaxCallDurationMs;

    /**
     * @var integer 最大振铃时长，达到时长阈值自动挂断。 **仅自携号码支持当前参数**
     */
    public $MaxRingTimeoutSecond;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $Callee 被叫号码
     * @param string $LLMType 模型接口协议类型，目前兼容四种协议类型：

- OpenAI协议(包括GPT、混元、DeepSeek等)："openai"
- Azure协议："azure"
- Minimax协议："minimax"
- Dify协议: "dify"
     * @param string $APIKey 模型API密钥，获取鉴权信息方式请参见各模型官网

- OpenAI协议：[GPT](https://help.openai.com/en/articles/4936850-where-do-i-find-my-openai-api-key)，[混元](https://cloud.tencent.com/document/product/1729/111008)，[DeepSeek](https://api-docs.deepseek.com/zh-cn/)；

- Azure协议：[Azure GPT](https://learn.microsoft.com/en-us/azure/ai-services/openai/chatgpt-quickstart?tabs=command-line%2Ctypescript%2Cpython-new&pivots=programming-language-studio#key-settings)；

- Minimax：[Minimax](https://platform.minimaxi.com/document/Fast%20access?key=66701cf51d57f38758d581b2)
     * @param string $APIUrl 模型接口地址

- OpenAI协议
GPT："https://api.openai.com/v1/"
混元："https://api.hunyuan.cloud.tencent.com/v1"
Deepseek："https://api.deepseek.com/v1"

- Azure协议
 "https://{your-resource-name}.openai.azure.com?api-version={api-version}"

- Minimax协议
"https://api.minimax.chat/v1"
     * @param string $SystemPrompt 用于设定AI人设、说话规则、任务等的全局提示词。示例：## 人设您是人民医院友善、和蔼的随访医生李医生，正在给患者小明的家长打电话，原因是医院要求小明2024-08-08回院复查手术恢复情况，但小明没有来。您需要按照任务流程对小明家长进行电话随访调查。## 要求简洁回复：使用简练语言，每次最多询问一个问题，不要在一个回复中询问多个问题。富有变化：尽量使表达富有变化，表达机械重复。自然亲切：使用日常语言，尽量显得专业并亲切。提到时间时使用口语表述，如下周三、6月18日。积极主动：尝试引导对话，每个回复通常以问题或下一步建议来结尾。询问清楚：如果对方部分回答了您的问题，或者回答很模糊，请通过追问来确保回答的完整明确。遵循任务：当对方的回答偏离了您的任务时，及时引导对方回到任务中。不要从头开始重复，从偏离的地方继续询问。诚实可靠：对于客户的提问，如果不确定请务必不要编造，礼貌告知对方不清楚。不要捏造患者未提及的症状史、用药史、治疗史。其他注意点：避免提到病情恶化、恢复不理想或疾病名称等使用会使患者感到紧张的表述。不要问患者已经直接或间接回答过的问题，例如患者已经说没有不适症状，那就不要再问手术部位是否有红肿疼痛症状的问题。##任务： 1.自我介绍您是人民医院负责随访的李医生，并说明致电的目的。2.询问被叫方是否是小明家长。 - 如果不是小明家长，请礼貌表达歉意，并使用 call_end 挂断电话。- 如果小明家长没空，请礼貌告诉对方稍后会重新致电，并使用 end_call 挂断电话。3.询问小明出院后水肿情况如何，较出院时是否有变化。- 如果水肿变严重，直接跳转步骤7。4.询问出院后是否给小朋友量过体温，是否出现过发烧情况。- 如果没有量过体温，请礼貌告诉家长出院后三个月内需要每天观察体温。- 如果出现过发烧，请直接跳转步骤7。5.询问出院后是否给小朋友按时服药。- 如果没有按时服药，请友善提醒家长严格按医嘱服用药物，避免影响手术效果。6.询问小朋友在饮食上是否做到低盐低脂，适量吃优质蛋白如鸡蛋、牛奶、瘦肉等。- 如果没有做到，请友善提醒家长低盐低脂和优质蛋白有助小朋友尽快恢复。7.告知家长医生要求6月18日回院复查，但没看到有相关复诊记录。提醒家长尽快前往医院体检复查血化验、尿常规。8.询问家长是否有问题需要咨询，如果没有请礼貌道别并用call_end挂断电话。
     * @param string $Model 模型名称，如

- OpenAI协议
"gpt-4o-mini","gpt-4o"，"hunyuan-standard", "hunyuan-turbo"，"deepseek-chat"；

- Azure协议
"gpt-4o-mini", "gpt-4o"；

- Minmax协议
"deepseek-chat".
     * @param string $VoiceType 默认提供以下音色参数值可选择，如需自定义音色VoiceType请留空并在参数CustomTTSConfig中配置

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
     * @param integer $WelcomeMessagePriority 0: 默认可打断， 2：高优先不可打断
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
     * @param integer $InterruptMode 打断AI说话模式，默认为0，0表示自动打断，1表示不打断。
     * @param integer $InterruptSpeechDuration InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
     * @param boolean $EndFunctionEnable 模型是否支持(或者开启)call_end function calling
     * @param string $EndFunctionDesc EndFunctionEnable为true时生效；call_end function calling的desc，默认为 "End the call when user has to leave (like says bye) or you are instructed to do so."
     * @param boolean $TransferFunctionEnable 模型是否支持(或者开启)transfer_to_human function calling
     * @param array $TransferItems TransferFunctionEnable为true的时候生效: 转人工配置
     * @param integer $NotifyDuration 用户多久没说话提示时长,最小10秒,默认10秒
     * @param string $NotifyMessage 用户NotifyDuration没说话，AI提示的语句，默认是"抱歉，我没听清。您可以重复下吗？"
     * @param integer $NotifyMaxCount 最大触发AI提示音次数，默认为不限制
     * @param string $CustomTTSConfig <p>和VoiceType字段需要选填一个，这里是使用自己自定义的TTS，VoiceType是系统内置的一些音色</p>
<ul>
<li>Tencent TTS<br>
配置请参考<a href="https://cloud.tencent.com/document/product/1073/92668#55924b56-1a73-4663-a7a1-a8dd82d6e823" target="_blank">腾讯云TTS文档链接</a></li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{ 
       &quot;TTSType&quot;: &quot;tencent&quot;, // String TTS类型, 目前支持&quot;tencent&quot; 和 “minixmax”， 其他的厂商支持中
       &quot;AppId&quot;: &quot;您的应用ID&quot;, // String 必填
       &quot;SecretId&quot;: &quot;您的密钥ID&quot;, // String 必填
       &quot;SecretKey&quot;:  &quot;您的密钥Key&quot;, // String 必填
       &quot;VoiceType&quot;: 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色，请参见语音合成计费概述。完整的音色 ID 列表请参见语音合成音色列表。
       &quot;Speed&quot;: 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换，可参考 语速转换
       &quot;Volume&quot;: 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。
       &quot;PrimaryLanguage&quot;: 1, // Integer 可选 主要语言 1-中文（默认） 2-英文 3-日文
       &quot;FastVoiceType&quot;: &quot;xxxx&quot;   //  可选参数， 快速声音复刻的参数 
  }
</code></pre>
 </div><ul>
<li>Minimax TTS<br>
配置请参考<a href="https://platform.minimaxi.com/document/T2A%20V2?key=66719005a427f0c8a5701643" target="_blank"> Minimax TTS 文档链接</a>。注意 Minimax TTS 存在频率限制，超频可能会导致回答卡顿，<a href="https://platform.minimaxi.com/document/Rate%20limits?key=66b19417290299a26b234572" target="_blank">Minimax TTS频率限制相关文档链接</a>。</li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
        &quot;TTSType&quot;: &quot;minimax&quot;,  // String TTS类型, 
        &quot;Model&quot;: &quot;speech-01-turbo&quot;,
        &quot;APIUrl&quot;: &quot;https://api.minimax.chat/v1/t2a_v2&quot;,
        &quot;APIKey&quot;: &quot;eyxxxx&quot;,
        &quot;GroupId&quot;: &quot;181000000000000&quot;,
        &quot;VoiceType&quot;:&quot;female-tianmei&quot;,
        &quot;Speed&quot;: 1.2
}
</code></pre>
</div><ul>
<li>火山 TTS</li>
</ul>
<p>配置音色类型参考<a href="https://www.volcengine.com/docs/6561/162929" target="_blank">火山TTS文档链接</a><br>
语音合成音色列表–语音技术-火山引擎<br>
大模型语音合成音色列表–语音技术-火山引擎</p>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
    &quot;TTSType&quot;: &quot;volcengine&quot;,  // 必填：String TTS类型
    &quot;AppId&quot; : &quot;xxxxxxxx&quot;,   // 必填：String 火山引擎分配的Appid
    &quot;Token&quot; : &quot;TY9d4sQXHxxxxxxx&quot;, // 必填： String类型 火山引擎的访问token
    &quot;Speed&quot; : 1.0,            // 可选参数 语速，默认为1.0
    &quot;Volume&quot;: 1.0,            // 可选参数， 音量大小， 默认为1.0
    &quot;Cluster&quot; : &quot;volcano_tts&quot;, // 可选参数，业务集群, 默认是 volcano_tts
    &quot;VoiceType&quot; : &quot;zh_male_aojiaobazong_moon_bigtts&quot;   // 音色类型， 默认为大模型语音合成的音色。 如果使用普通语音合成，则需要填写对应的音色类型。 音色类型填写错误会导致没有声音。
}
</code></pre>
</div><ul>
<li>Azure TTS<br>
配置请参考<a href="https://docs.azure.cn/zh-cn/ai-services/speech-service/speech-synthesis-markup-voice" target="_blank">AzureTTS文档链接</a></li>
</ul>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
    &quot;TTSType&quot;: &quot;azure&quot;, // 必填：String TTS类型
    &quot;SubscriptionKey&quot;: &quot;xxxxxxxx&quot;, // 必填：String 订阅的Key
    &quot;Region&quot;: &quot;chinanorth3&quot;,  // 必填：String 订阅的地区
    &quot;VoiceName&quot;: &quot;zh-CN-XiaoxiaoNeural&quot;, // 必填：String 音色名必填
    &quot;Language&quot;: &quot;zh-CN&quot;, // 必填：String 合成的语言  
    &quot;Rate&quot;: 1 // 选填：float 语速  0.5～2 默认为 1
}
</code></pre>
</div><ul>
<li>自定义TTS</li>
</ul>
<p>具体协议规范请参考<a href="https://doc.weixin.qq.com/doc/w3_ANQAiAbdAFwHILbJBmtSqSbV1WZ3L?scode=AJEAIQdfAAo5a1xajYANQAiAbdAFw" target="_blank">腾讯文档</a></p>
<div class="v-md-pre-wrapper copy-code-mode v-md-pre-wrapper- extra-class"><pre class="v-md-prism-"><code>{
  &quot;TTSType&quot;: &quot;custom&quot;, // String 必填
  &quot;APIKey&quot;: &quot;ApiKey&quot;, // String 必填 用来鉴权
  &quot;APIUrl&quot;: &quot;http://0.0.0.0:8080/stream-audio&quot; // String，必填，TTS API URL
  &quot;AudioFormat&quot;: &quot;wav&quot;, // String, 非必填，期望输出的音频格式，如mp3， ogg_opus，pcm，wav，默认为 wav，目前只支持pcm和wav，
  &quot;SampleRate&quot;: 16000,  // Integer，非必填，音频采样率，默认为16000(16k)，推荐值为16000
  &quot;AudioChannel&quot;: 1,    // Integer，非必填，音频通道数，取值：1 或 2  默认为1  
}
</code></pre>
</div>
     * @param array $PromptVariables 提示词变量
     * @param integer $VadSilenceTime 语音识别vad的时间，范围为240-2000，默认为1000，单位为ms。更小的值会让语音识别分句更快。
     * @param array $ExtractConfig 通话内容提取配置
     * @param float $Temperature 模型温度控制
     * @param array $Variables 通用变量： <p>提示词变量</p> <p>欢迎语变量</p> <p> 欢迎语延迟播放(秒级)：welcome-message-delay</p>  <p> dify变量</p>  

1. dify-inputs-xxx 为dify的inputs变量
2.  dify-inputs-user 为dify的user值
3.  dify-inputs-conversation_id 为dify的conversation_id值
     * @param float $TopP 模型topP
     * @param integer $VadLevel vad的远场人声抑制能力（不会对asr识别效果造成影响），范围为[0, 3]，默认为0。推荐设置为2，有较好的远场人声抑制能力。
     * @param ToneWordInfo $ToneWord 衔接语
     * @param boolean $EnableComplianceAudio 合规提示音， 
该参数传true（默认）表示通话开始播放摩斯码，提示对话内容为 AI 生成。
该参数传false表示关闭合规提示音。该参数传false则代表您知晓并同意以下协议：
我方充分知悉和理解，根据[《网络安全法》](https://www.cac.gov.cn/2016-11/07/c_1119867116.htm)[《互联网信息服务深度合成管理规定》](https://www.gov.cn/zhengce/zhengceku/2022-12/12/content_5731431.htm)[《生成式人工智能服务管理暂行办法》](https://www.gov.cn/zhengce/zhengceku/202307/content_6891752.htm)[《人工智能生成合成内容标识办法》](https://www.gov.cn/zhengce/zhengceku/202503/content_7014286.htm)的法律法规的规定，对人工智能生成合成内容应当添加显式标识和隐式标识。我方基于业务需求，请腾讯云对生成合成内容不添加显式标识，我方承诺合法合规使用生成合成内容，避免造成混淆、误认；如果使用生成合成内容对公众提供服务的，或通过网络传播的，我方将自觉主动添加符合法律规定和国家标准要求的显式标识，承担人工智能生成合成内容标识的法律义务。我方未能恰当、合理地履行人工智能内容标识义务造成不良后果的，或遭受主管部门责罚的，相关责任由我方完全承担。
     * @param boolean $EnableVoicemailDetection 是否开启语音信箱识别
     * @param integer $VoicemailAction 识别到对端为语音信箱时的行为，当EnableVoicemailDetection为True时生效
0: 挂断电话（默认）
     * @param string $LLMExtraBody 大模型拓展参数， 格式为json字符串
     * @param integer $MaxCallDurationMs 最大通话时长， 默认不限制。单位毫秒(ms)
     * @param integer $MaxRingTimeoutSecond 最大振铃时长，达到时长阈值自动挂断。 **仅自携号码支持当前参数**
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

        if (array_key_exists("LLMType",$param) and $param["LLMType"] !== null) {
            $this->LLMType = $param["LLMType"];
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("APIUrl",$param) and $param["APIUrl"] !== null) {
            $this->APIUrl = $param["APIUrl"];
        }

        if (array_key_exists("SystemPrompt",$param) and $param["SystemPrompt"] !== null) {
            $this->SystemPrompt = $param["SystemPrompt"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
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

        if (array_key_exists("WelcomeMessagePriority",$param) and $param["WelcomeMessagePriority"] !== null) {
            $this->WelcomeMessagePriority = $param["WelcomeMessagePriority"];
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

        if (array_key_exists("TransferFunctionEnable",$param) and $param["TransferFunctionEnable"] !== null) {
            $this->TransferFunctionEnable = $param["TransferFunctionEnable"];
        }

        if (array_key_exists("TransferItems",$param) and $param["TransferItems"] !== null) {
            $this->TransferItems = [];
            foreach ($param["TransferItems"] as $key => $value){
                $obj = new AITransferItem();
                $obj->deserialize($value);
                array_push($this->TransferItems, $obj);
            }
        }

        if (array_key_exists("NotifyDuration",$param) and $param["NotifyDuration"] !== null) {
            $this->NotifyDuration = $param["NotifyDuration"];
        }

        if (array_key_exists("NotifyMessage",$param) and $param["NotifyMessage"] !== null) {
            $this->NotifyMessage = $param["NotifyMessage"];
        }

        if (array_key_exists("NotifyMaxCount",$param) and $param["NotifyMaxCount"] !== null) {
            $this->NotifyMaxCount = $param["NotifyMaxCount"];
        }

        if (array_key_exists("CustomTTSConfig",$param) and $param["CustomTTSConfig"] !== null) {
            $this->CustomTTSConfig = $param["CustomTTSConfig"];
        }

        if (array_key_exists("PromptVariables",$param) and $param["PromptVariables"] !== null) {
            $this->PromptVariables = [];
            foreach ($param["PromptVariables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->PromptVariables, $obj);
            }
        }

        if (array_key_exists("VadSilenceTime",$param) and $param["VadSilenceTime"] !== null) {
            $this->VadSilenceTime = $param["VadSilenceTime"];
        }

        if (array_key_exists("ExtractConfig",$param) and $param["ExtractConfig"] !== null) {
            $this->ExtractConfig = [];
            foreach ($param["ExtractConfig"] as $key => $value){
                $obj = new AICallExtractConfigElement();
                $obj->deserialize($value);
                array_push($this->ExtractConfig, $obj);
            }
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("Variables",$param) and $param["Variables"] !== null) {
            $this->Variables = [];
            foreach ($param["Variables"] as $key => $value){
                $obj = new Variable();
                $obj->deserialize($value);
                array_push($this->Variables, $obj);
            }
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("VadLevel",$param) and $param["VadLevel"] !== null) {
            $this->VadLevel = $param["VadLevel"];
        }

        if (array_key_exists("ToneWord",$param) and $param["ToneWord"] !== null) {
            $this->ToneWord = new ToneWordInfo();
            $this->ToneWord->deserialize($param["ToneWord"]);
        }

        if (array_key_exists("EnableComplianceAudio",$param) and $param["EnableComplianceAudio"] !== null) {
            $this->EnableComplianceAudio = $param["EnableComplianceAudio"];
        }

        if (array_key_exists("EnableVoicemailDetection",$param) and $param["EnableVoicemailDetection"] !== null) {
            $this->EnableVoicemailDetection = $param["EnableVoicemailDetection"];
        }

        if (array_key_exists("VoicemailAction",$param) and $param["VoicemailAction"] !== null) {
            $this->VoicemailAction = $param["VoicemailAction"];
        }

        if (array_key_exists("LLMExtraBody",$param) and $param["LLMExtraBody"] !== null) {
            $this->LLMExtraBody = $param["LLMExtraBody"];
        }

        if (array_key_exists("MaxCallDurationMs",$param) and $param["MaxCallDurationMs"] !== null) {
            $this->MaxCallDurationMs = $param["MaxCallDurationMs"];
        }

        if (array_key_exists("MaxRingTimeoutSecond",$param) and $param["MaxRingTimeoutSecond"] !== null) {
            $this->MaxRingTimeoutSecond = $param["MaxRingTimeoutSecond"];
        }
    }
}
