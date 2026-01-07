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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartAIConversation请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和开启转录任务的房间使用的SdkAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和开启转录任务的房间使用的SdkAppId相同。
 * @method string getRoomId() 获取TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，表示开启对话任务的房间号。
 * @method void setRoomId(string $RoomId) 设置TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，表示开启对话任务的房间号。
 * @method AgentConfig getAgentConfig() 获取机器人参数
 * @method void setAgentConfig(AgentConfig $AgentConfig) 设置机器人参数
 * @method string getSessionId() 获取调用方传入的唯一Id，可用于客户侧防止重复发起任务以及可以通过该字段查询任务状态。
 * @method void setSessionId(string $SessionId) 设置调用方传入的唯一Id，可用于客户侧防止重复发起任务以及可以通过该字段查询任务状态。
 * @method integer getRoomIdType() 获取TRTC房间号的类型，0代表数字房间号，1代表字符串房间号。不填默认是数字房间号。
 * @method void setRoomIdType(integer $RoomIdType) 设置TRTC房间号的类型，0代表数字房间号，1代表字符串房间号。不填默认是数字房间号。
 * @method STTConfig getSTTConfig() 获取语音识别配置。
 * @method void setSTTConfig(STTConfig $STTConfig) 设置语音识别配置。
 * @method string getLLMConfig() 获取必填参数，LLM配置。需符合openai规范，为JSON字符串，示例如下：<pre> { <br> &emsp;  "LLMType": "大模型类型",  // String 必填，如："openai" <br> &emsp;  "Model": "您的模型名称", // String 必填，指定使用的模型<br>    "APIKey": "您的LLM API密钥", // String 必填 <br> &emsp;  "APIUrl": "https://api.xxx.com/chat/completions", // String 必填，LLM API访问的URL<br> &emsp;  "History": 10, // Integer 选填，设置 LLM 的上下文轮次，默认值为0，最大值50<br> &emsp;  "HistoryMode": 1, // Integer 选填，1表示LLM上下文中的内容会和播放音频做同步，没有播放的音频对应的文本不会出现在上下文中。0表示不会做同步，默认值为0<br> &emsp;  "Streaming": true // Boolean 非必填，指定是否使用流式传输<br> &emsp;} </pre>
 * @method void setLLMConfig(string $LLMConfig) 设置必填参数，LLM配置。需符合openai规范，为JSON字符串，示例如下：<pre> { <br> &emsp;  "LLMType": "大模型类型",  // String 必填，如："openai" <br> &emsp;  "Model": "您的模型名称", // String 必填，指定使用的模型<br>    "APIKey": "您的LLM API密钥", // String 必填 <br> &emsp;  "APIUrl": "https://api.xxx.com/chat/completions", // String 必填，LLM API访问的URL<br> &emsp;  "History": 10, // Integer 选填，设置 LLM 的上下文轮次，默认值为0，最大值50<br> &emsp;  "HistoryMode": 1, // Integer 选填，1表示LLM上下文中的内容会和播放音频做同步，没有播放的音频对应的文本不会出现在上下文中。0表示不会做同步，默认值为0<br> &emsp;  "Streaming": true // Boolean 非必填，指定是否使用流式传输<br> &emsp;} </pre>
 * @method string getTTSConfig() 获取必填参数，TTS配置，详见 [TTS配置说明](https://cloud.tencent.com/document/product/647/115414 )， 为JSON字符串: TRTC TTS的配置如下：  

```
{  
   "TTSType": "flow",  // 【必填】固定为此值 
   "VoiceId": "v-female-R2s4N9qJ", // 【必填】精品音色 ID /克隆音色 ID, 可选择  不同音色, ID 库参考下方音色列表  
   "Model": "flow_01_turbo", // 【必填】当前默认的 TTS 模型版本（对应 Flash 版本） 
   "Speed": 1.0,    //【可选】调节语速 范围 [0.5-2.0],默认 1.0; 取值越大，语速越快
   "Volume": 1.0,   // 【可选】调节音量 [0, 10] 默认值 1.0; 取值越大，音量越高  
   "Pitch": 0,   // 【可选】调节语调 [-12,12],默认值为 0,其中 0 为原音色输出。
   "Language": "zh" //【可选】建议填写，目前支持填写中文：zh 英文：en 粤语方言：yue; 参数参考：(ISO 639-1)
}
```
 * @method void setTTSConfig(string $TTSConfig) 设置必填参数，TTS配置，详见 [TTS配置说明](https://cloud.tencent.com/document/product/647/115414 )， 为JSON字符串: TRTC TTS的配置如下：  

```
{  
   "TTSType": "flow",  // 【必填】固定为此值 
   "VoiceId": "v-female-R2s4N9qJ", // 【必填】精品音色 ID /克隆音色 ID, 可选择  不同音色, ID 库参考下方音色列表  
   "Model": "flow_01_turbo", // 【必填】当前默认的 TTS 模型版本（对应 Flash 版本） 
   "Speed": 1.0,    //【可选】调节语速 范围 [0.5-2.0],默认 1.0; 取值越大，语速越快
   "Volume": 1.0,   // 【可选】调节音量 [0, 10] 默认值 1.0; 取值越大，音量越高  
   "Pitch": 0,   // 【可选】调节语调 [-12,12],默认值为 0,其中 0 为原音色输出。
   "Language": "zh" //【可选】建议填写，目前支持填写中文：zh 英文：en 粤语方言：yue; 参数参考：(ISO 639-1)
}
```
 * @method string getAvatarConfig() 获取数字人配置，为JSON字符串。**数字人配置需要提工单加白后才能使用**
 * @method void setAvatarConfig(string $AvatarConfig) 设置数字人配置，为JSON字符串。**数字人配置需要提工单加白后才能使用**
 * @method string getExperimentalParams() 获取实验性参数,联系后台使用
 * @method void setExperimentalParams(string $ExperimentalParams) 设置实验性参数,联系后台使用
 */
class StartAIConversationRequest extends AbstractModel
{
    /**
     * @var integer TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和开启转录任务的房间使用的SdkAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，表示开启对话任务的房间号。
     */
    public $RoomId;

    /**
     * @var AgentConfig 机器人参数
     */
    public $AgentConfig;

    /**
     * @var string 调用方传入的唯一Id，可用于客户侧防止重复发起任务以及可以通过该字段查询任务状态。
     */
    public $SessionId;

    /**
     * @var integer TRTC房间号的类型，0代表数字房间号，1代表字符串房间号。不填默认是数字房间号。
     */
    public $RoomIdType;

    /**
     * @var STTConfig 语音识别配置。
     */
    public $STTConfig;

    /**
     * @var string 必填参数，LLM配置。需符合openai规范，为JSON字符串，示例如下：<pre> { <br> &emsp;  "LLMType": "大模型类型",  // String 必填，如："openai" <br> &emsp;  "Model": "您的模型名称", // String 必填，指定使用的模型<br>    "APIKey": "您的LLM API密钥", // String 必填 <br> &emsp;  "APIUrl": "https://api.xxx.com/chat/completions", // String 必填，LLM API访问的URL<br> &emsp;  "History": 10, // Integer 选填，设置 LLM 的上下文轮次，默认值为0，最大值50<br> &emsp;  "HistoryMode": 1, // Integer 选填，1表示LLM上下文中的内容会和播放音频做同步，没有播放的音频对应的文本不会出现在上下文中。0表示不会做同步，默认值为0<br> &emsp;  "Streaming": true // Boolean 非必填，指定是否使用流式传输<br> &emsp;} </pre>
     */
    public $LLMConfig;

    /**
     * @var string 必填参数，TTS配置，详见 [TTS配置说明](https://cloud.tencent.com/document/product/647/115414 )， 为JSON字符串: TRTC TTS的配置如下：  

```
{  
   "TTSType": "flow",  // 【必填】固定为此值 
   "VoiceId": "v-female-R2s4N9qJ", // 【必填】精品音色 ID /克隆音色 ID, 可选择  不同音色, ID 库参考下方音色列表  
   "Model": "flow_01_turbo", // 【必填】当前默认的 TTS 模型版本（对应 Flash 版本） 
   "Speed": 1.0,    //【可选】调节语速 范围 [0.5-2.0],默认 1.0; 取值越大，语速越快
   "Volume": 1.0,   // 【可选】调节音量 [0, 10] 默认值 1.0; 取值越大，音量越高  
   "Pitch": 0,   // 【可选】调节语调 [-12,12],默认值为 0,其中 0 为原音色输出。
   "Language": "zh" //【可选】建议填写，目前支持填写中文：zh 英文：en 粤语方言：yue; 参数参考：(ISO 639-1)
}
```
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
     * @param integer $SdkAppId TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和开启转录任务的房间使用的SdkAppId相同。
     * @param string $RoomId TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，表示开启对话任务的房间号。
     * @param AgentConfig $AgentConfig 机器人参数
     * @param string $SessionId 调用方传入的唯一Id，可用于客户侧防止重复发起任务以及可以通过该字段查询任务状态。
     * @param integer $RoomIdType TRTC房间号的类型，0代表数字房间号，1代表字符串房间号。不填默认是数字房间号。
     * @param STTConfig $STTConfig 语音识别配置。
     * @param string $LLMConfig 必填参数，LLM配置。需符合openai规范，为JSON字符串，示例如下：<pre> { <br> &emsp;  "LLMType": "大模型类型",  // String 必填，如："openai" <br> &emsp;  "Model": "您的模型名称", // String 必填，指定使用的模型<br>    "APIKey": "您的LLM API密钥", // String 必填 <br> &emsp;  "APIUrl": "https://api.xxx.com/chat/completions", // String 必填，LLM API访问的URL<br> &emsp;  "History": 10, // Integer 选填，设置 LLM 的上下文轮次，默认值为0，最大值50<br> &emsp;  "HistoryMode": 1, // Integer 选填，1表示LLM上下文中的内容会和播放音频做同步，没有播放的音频对应的文本不会出现在上下文中。0表示不会做同步，默认值为0<br> &emsp;  "Streaming": true // Boolean 非必填，指定是否使用流式传输<br> &emsp;} </pre>
     * @param string $TTSConfig 必填参数，TTS配置，详见 [TTS配置说明](https://cloud.tencent.com/document/product/647/115414 )， 为JSON字符串: TRTC TTS的配置如下：  

```
{  
   "TTSType": "flow",  // 【必填】固定为此值 
   "VoiceId": "v-female-R2s4N9qJ", // 【必填】精品音色 ID /克隆音色 ID, 可选择  不同音色, ID 库参考下方音色列表  
   "Model": "flow_01_turbo", // 【必填】当前默认的 TTS 模型版本（对应 Flash 版本） 
   "Speed": 1.0,    //【可选】调节语速 范围 [0.5-2.0],默认 1.0; 取值越大，语速越快
   "Volume": 1.0,   // 【可选】调节音量 [0, 10] 默认值 1.0; 取值越大，音量越高  
   "Pitch": 0,   // 【可选】调节语调 [-12,12],默认值为 0,其中 0 为原音色输出。
   "Language": "zh" //【可选】建议填写，目前支持填写中文：zh 英文：en 粤语方言：yue; 参数参考：(ISO 639-1)
}
```
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
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
