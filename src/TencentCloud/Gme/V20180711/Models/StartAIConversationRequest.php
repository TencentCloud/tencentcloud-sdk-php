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
 * StartAIConversation请求参数结构体
 *
 * @method integer getSdkAppId() 获取GME的SdkAppId和开启转录任务的房间使用的SdkAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置GME的SdkAppId和开启转录任务的房间使用的SdkAppId相同。
 * @method string getRoomId() 获取GME的RoomId表示开启对话任务的房间号。
 * @method void setRoomId(string $RoomId) 设置GME的RoomId表示开启对话任务的房间号。
 * @method AgentConfig getAgentConfig() 获取机器人参数
 * @method void setAgentConfig(AgentConfig $AgentConfig) 设置机器人参数
 * @method STTConfig getSTTConfig() 获取语音识别配置。
 * @method void setSTTConfig(STTConfig $STTConfig) 设置语音识别配置。
 * @method string getLLMConfig() 获取LLM配置。需符合openai规范，为JSON字符串，示例如下：
<pre> { <br> &emsp;  "LLMType": "大模型类型",  // String 必填，如："openai" <br> &emsp;  "Model": "您的模型名称", // String 必填，指定使用的模型<br>    "APIKey": "您的LLM API密钥", // String 必填 <br> &emsp;  "APIUrl": "https://api.xxx.com/chat/completions", // String 必填，LLM API访问的URL<br> &emsp;  "Streaming": true // Boolean 非必填，指定是否使用流式传输<br> &emsp;} </pre>

 * @method void setLLMConfig(string $LLMConfig) 设置LLM配置。需符合openai规范，为JSON字符串，示例如下：
<pre> { <br> &emsp;  "LLMType": "大模型类型",  // String 必填，如："openai" <br> &emsp;  "Model": "您的模型名称", // String 必填，指定使用的模型<br>    "APIKey": "您的LLM API密钥", // String 必填 <br> &emsp;  "APIUrl": "https://api.xxx.com/chat/completions", // String 必填，LLM API访问的URL<br> &emsp;  "Streaming": true // Boolean 非必填，指定是否使用流式传输<br> &emsp;} </pre>

 * @method string getTTSConfig() 获取                                        "description": "TTS配置，为JSON字符串，腾讯云TTS示例如下： <pre>{ <br> &emsp; \"AppId\": 您的应用ID, // Integer 必填<br> &emsp; \"TTSType\": \"TTS类型\", // String TTS类型, 固定为\"tencent\"<br> &emsp; \"SecretId\": \"您的密钥ID\", // String 必填<br> &emsp; \"SecretKey\":  \"您的密钥Key\", // String 必填<br> &emsp; \"VoiceType\": 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色。<br> &emsp; \"Speed\": 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换\"Volume\": 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。<br> &emsp; \"EmotionCategory\":  \"angry\", // String 非必填 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、sajiao(撒娇)、disgusted(厌恶)、amaze(震惊)、peaceful(平静)、exciting(兴奋)、aojiao(傲娇)、jieshuo(解说)。<br> &emsp; \"EmotionIntensity\":  150 // Integer 非必填 控制合成音频情感程度，取值范围为 [50,200]，默认为 100；只有 EmotionCategory 不为空时生效。<br> &emsp; }</pre>",
 * @method void setTTSConfig(string $TTSConfig) 设置                                        "description": "TTS配置，为JSON字符串，腾讯云TTS示例如下： <pre>{ <br> &emsp; \"AppId\": 您的应用ID, // Integer 必填<br> &emsp; \"TTSType\": \"TTS类型\", // String TTS类型, 固定为\"tencent\"<br> &emsp; \"SecretId\": \"您的密钥ID\", // String 必填<br> &emsp; \"SecretKey\":  \"您的密钥Key\", // String 必填<br> &emsp; \"VoiceType\": 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色。<br> &emsp; \"Speed\": 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换\"Volume\": 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。<br> &emsp; \"EmotionCategory\":  \"angry\", // String 非必填 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、sajiao(撒娇)、disgusted(厌恶)、amaze(震惊)、peaceful(平静)、exciting(兴奋)、aojiao(傲娇)、jieshuo(解说)。<br> &emsp; \"EmotionIntensity\":  150 // Integer 非必填 控制合成音频情感程度，取值范围为 [50,200]，默认为 100；只有 EmotionCategory 不为空时生效。<br> &emsp; }</pre>",
 * @method string getAvatarConfig() 获取数字人配置，为JSON字符串。**数字人配置需要提工单加白后才能使用**
 * @method void setAvatarConfig(string $AvatarConfig) 设置数字人配置，为JSON字符串。**数字人配置需要提工单加白后才能使用**
 * @method string getExperimentalParams() 获取实验性参数,联系后台使用
 * @method void setExperimentalParams(string $ExperimentalParams) 设置实验性参数,联系后台使用
 */
class StartAIConversationRequest extends AbstractModel
{
    /**
     * @var integer GME的SdkAppId和开启转录任务的房间使用的SdkAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string GME的RoomId表示开启对话任务的房间号。
     */
    public $RoomId;

    /**
     * @var AgentConfig 机器人参数
     */
    public $AgentConfig;

    /**
     * @var STTConfig 语音识别配置。
     */
    public $STTConfig;

    /**
     * @var string LLM配置。需符合openai规范，为JSON字符串，示例如下：
<pre> { <br> &emsp;  "LLMType": "大模型类型",  // String 必填，如："openai" <br> &emsp;  "Model": "您的模型名称", // String 必填，指定使用的模型<br>    "APIKey": "您的LLM API密钥", // String 必填 <br> &emsp;  "APIUrl": "https://api.xxx.com/chat/completions", // String 必填，LLM API访问的URL<br> &emsp;  "Streaming": true // Boolean 非必填，指定是否使用流式传输<br> &emsp;} </pre>

     */
    public $LLMConfig;

    /**
     * @var string                                         "description": "TTS配置，为JSON字符串，腾讯云TTS示例如下： <pre>{ <br> &emsp; \"AppId\": 您的应用ID, // Integer 必填<br> &emsp; \"TTSType\": \"TTS类型\", // String TTS类型, 固定为\"tencent\"<br> &emsp; \"SecretId\": \"您的密钥ID\", // String 必填<br> &emsp; \"SecretKey\":  \"您的密钥Key\", // String 必填<br> &emsp; \"VoiceType\": 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色。<br> &emsp; \"Speed\": 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换\"Volume\": 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。<br> &emsp; \"EmotionCategory\":  \"angry\", // String 非必填 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、sajiao(撒娇)、disgusted(厌恶)、amaze(震惊)、peaceful(平静)、exciting(兴奋)、aojiao(傲娇)、jieshuo(解说)。<br> &emsp; \"EmotionIntensity\":  150 // Integer 非必填 控制合成音频情感程度，取值范围为 [50,200]，默认为 100；只有 EmotionCategory 不为空时生效。<br> &emsp; }</pre>",
     */
    public $TTSConfig;

    /**
     * @var string 数字人配置，为JSON字符串。**数字人配置需要提工单加白后才能使用**
     */
    public $AvatarConfig;

    /**
     * @var string 实验性参数,联系后台使用
     */
    public $ExperimentalParams;

    /**
     * @param integer $SdkAppId GME的SdkAppId和开启转录任务的房间使用的SdkAppId相同。
     * @param string $RoomId GME的RoomId表示开启对话任务的房间号。
     * @param AgentConfig $AgentConfig 机器人参数
     * @param STTConfig $STTConfig 语音识别配置。
     * @param string $LLMConfig LLM配置。需符合openai规范，为JSON字符串，示例如下：
<pre> { <br> &emsp;  "LLMType": "大模型类型",  // String 必填，如："openai" <br> &emsp;  "Model": "您的模型名称", // String 必填，指定使用的模型<br>    "APIKey": "您的LLM API密钥", // String 必填 <br> &emsp;  "APIUrl": "https://api.xxx.com/chat/completions", // String 必填，LLM API访问的URL<br> &emsp;  "Streaming": true // Boolean 非必填，指定是否使用流式传输<br> &emsp;} </pre>

     * @param string $TTSConfig                                         "description": "TTS配置，为JSON字符串，腾讯云TTS示例如下： <pre>{ <br> &emsp; \"AppId\": 您的应用ID, // Integer 必填<br> &emsp; \"TTSType\": \"TTS类型\", // String TTS类型, 固定为\"tencent\"<br> &emsp; \"SecretId\": \"您的密钥ID\", // String 必填<br> &emsp; \"SecretKey\":  \"您的密钥Key\", // String 必填<br> &emsp; \"VoiceType\": 101001, // Integer  必填，音色 ID，包括标准音色与精品音色，精品音色拟真度更高，价格不同于标准音色。<br> &emsp; \"Speed\": 1.25, // Integer 非必填，语速，范围：[-2，6]，分别对应不同语速： -2: 代表0.6倍 -1: 代表0.8倍 0: 代表1.0倍（默认） 1: 代表1.2倍 2: 代表1.5倍  6: 代表2.5倍  如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。 参数值与实际语速转换\"Volume\": 5, // Integer 非必填，音量大小，范围：[0，10]，分别对应11个等级的音量，默认值为0，代表正常音量。<br> &emsp; \"EmotionCategory\":  \"angry\", // String 非必填 控制合成音频的情感，仅支持多情感音色使用。取值: neutral(中性)、sad(悲伤)、happy(高兴)、angry(生气)、fear(恐惧)、news(新闻)、story(故事)、radio(广播)、poetry(诗歌)、call(客服)、sajiao(撒娇)、disgusted(厌恶)、amaze(震惊)、peaceful(平静)、exciting(兴奋)、aojiao(傲娇)、jieshuo(解说)。<br> &emsp; \"EmotionIntensity\":  150 // Integer 非必填 控制合成音频情感程度，取值范围为 [50,200]，默认为 100；只有 EmotionCategory 不为空时生效。<br> &emsp; }</pre>",
     * @param string $AvatarConfig 数字人配置，为JSON字符串。**数字人配置需要提工单加白后才能使用**
     * @param string $ExperimentalParams 实验性参数,联系后台使用
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("AgentConfig",$param) and $param["AgentConfig"] !== null) {
            $this->AgentConfig = new AgentConfig();
            $this->AgentConfig->deserialize($param["AgentConfig"]);
        }

        if (array_key_exists("STTConfig",$param) and $param["STTConfig"] !== null) {
            $this->STTConfig = new STTConfig();
            $this->STTConfig->deserialize($param["STTConfig"]);
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = $param["LLMConfig"];
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = $param["TTSConfig"];
        }

        if (array_key_exists("AvatarConfig",$param) and $param["AvatarConfig"] !== null) {
            $this->AvatarConfig = $param["AvatarConfig"];
        }

        if (array_key_exists("ExperimentalParams",$param) and $param["ExperimentalParams"] !== null) {
            $this->ExperimentalParams = $param["ExperimentalParams"];
        }
    }
}
