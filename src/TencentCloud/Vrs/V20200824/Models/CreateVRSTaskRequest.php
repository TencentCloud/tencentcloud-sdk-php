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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVRSTask请求参数结构体
 *
 * @method string getSessionId() 获取唯一请求 ID
 * @method void setSessionId(string $SessionId) 设置唯一请求 ID
 * @method string getVoiceName() 获取音色名称
 * @method void setVoiceName(string $VoiceName) 设置音色名称
 * @method integer getVoiceGender() 获取音色性别:

1-male

2-female
 * @method void setVoiceGender(integer $VoiceGender) 设置音色性别:

1-male

2-female
 * @method integer getVoiceLanguage() 获取语言类型：

1-中文
 * @method void setVoiceLanguage(integer $VoiceLanguage) 设置语言类型：

1-中文
 * @method array getAudioIdList() 获取音频ID集合。（一句话声音复刻仅需填写一个音质检测接口返回的AudioId）
 * @method void setAudioIdList(array $AudioIdList) 设置音频ID集合。（一句话声音复刻仅需填写一个音质检测接口返回的AudioId）
 * @method integer getSampleRate() 获取音频采样率：

16000：16k
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率：

16000：16k
 * @method string getCodec() 获取音频格式，音频类型(wav,mp3,aac,m4a)
 * @method void setCodec(string $Codec) 设置音频格式，音频类型(wav,mp3,aac,m4a)
 * @method string getCallbackUrl() 获取回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。（注意：回调方式目前仅支持轻量版声音复刻）
回调采用POST请求方式，Content-Type为application/json，回调数据格式如下:{"TaskId":"xxxxxxxxxxxxxx","Status":2,"StatusStr":"success","VoiceType":xxxxx,"ErrorMsg":""}
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。（注意：回调方式目前仅支持轻量版声音复刻）
回调采用POST请求方式，Content-Type为application/json，回调数据格式如下:{"TaskId":"xxxxxxxxxxxxxx","Status":2,"StatusStr":"success","VoiceType":xxxxx,"ErrorMsg":""}
 * @method integer getModelType() 获取模型类型 1:在线 2:离线  默认为1
 * @method void setModelType(integer $ModelType) 设置模型类型 1:在线 2:离线  默认为1
 * @method integer getTaskType() 获取复刻类型。
0 - 轻量版声音复刻（默认）；
5 - 一句话声音复刻。
 * @method void setTaskType(integer $TaskType) 设置复刻类型。
0 - 轻量版声音复刻（默认）；
5 - 一句话声音复刻。
 * @method string getVPRAudioId() 获取校验音频ID。（仅基础版声音复刻使用）
 * @method void setVPRAudioId(string $VPRAudioId) 设置校验音频ID。（仅基础版声音复刻使用）
 * @method integer getEnableVoiceEnhance() 获取是否开启语音增强，0 - 关闭，1 - 开启 。默认关闭
语音增强仅适用于一句话复刻场景
 * @method void setEnableVoiceEnhance(integer $EnableVoiceEnhance) 设置是否开启语音增强，0 - 关闭，1 - 开启 。默认关闭
语音增强仅适用于一句话复刻场景
 */
class CreateVRSTaskRequest extends AbstractModel
{
    /**
     * @var string 唯一请求 ID
     */
    public $SessionId;

    /**
     * @var string 音色名称
     */
    public $VoiceName;

    /**
     * @var integer 音色性别:

1-male

2-female
     */
    public $VoiceGender;

    /**
     * @var integer 语言类型：

1-中文
     */
    public $VoiceLanguage;

    /**
     * @var array 音频ID集合。（一句话声音复刻仅需填写一个音质检测接口返回的AudioId）
     */
    public $AudioIdList;

    /**
     * @var integer 音频采样率：

16000：16k
     */
    public $SampleRate;

    /**
     * @var string 音频格式，音频类型(wav,mp3,aac,m4a)
     */
    public $Codec;

    /**
     * @var string 回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。（注意：回调方式目前仅支持轻量版声音复刻）
回调采用POST请求方式，Content-Type为application/json，回调数据格式如下:{"TaskId":"xxxxxxxxxxxxxx","Status":2,"StatusStr":"success","VoiceType":xxxxx,"ErrorMsg":""}
     */
    public $CallbackUrl;

    /**
     * @var integer 模型类型 1:在线 2:离线  默认为1
     */
    public $ModelType;

    /**
     * @var integer 复刻类型。
0 - 轻量版声音复刻（默认）；
5 - 一句话声音复刻。
     */
    public $TaskType;

    /**
     * @var string 校验音频ID。（仅基础版声音复刻使用）
     */
    public $VPRAudioId;

    /**
     * @var integer 是否开启语音增强，0 - 关闭，1 - 开启 。默认关闭
语音增强仅适用于一句话复刻场景
     */
    public $EnableVoiceEnhance;

    /**
     * @param string $SessionId 唯一请求 ID
     * @param string $VoiceName 音色名称
     * @param integer $VoiceGender 音色性别:

1-male

2-female
     * @param integer $VoiceLanguage 语言类型：

1-中文
     * @param array $AudioIdList 音频ID集合。（一句话声音复刻仅需填写一个音质检测接口返回的AudioId）
     * @param integer $SampleRate 音频采样率：

16000：16k
     * @param string $Codec 音频格式，音频类型(wav,mp3,aac,m4a)
     * @param string $CallbackUrl 回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。（注意：回调方式目前仅支持轻量版声音复刻）
回调采用POST请求方式，Content-Type为application/json，回调数据格式如下:{"TaskId":"xxxxxxxxxxxxxx","Status":2,"StatusStr":"success","VoiceType":xxxxx,"ErrorMsg":""}
     * @param integer $ModelType 模型类型 1:在线 2:离线  默认为1
     * @param integer $TaskType 复刻类型。
0 - 轻量版声音复刻（默认）；
5 - 一句话声音复刻。
     * @param string $VPRAudioId 校验音频ID。（仅基础版声音复刻使用）
     * @param integer $EnableVoiceEnhance 是否开启语音增强，0 - 关闭，1 - 开启 。默认关闭
语音增强仅适用于一句话复刻场景
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("VoiceGender",$param) and $param["VoiceGender"] !== null) {
            $this->VoiceGender = $param["VoiceGender"];
        }

        if (array_key_exists("VoiceLanguage",$param) and $param["VoiceLanguage"] !== null) {
            $this->VoiceLanguage = $param["VoiceLanguage"];
        }

        if (array_key_exists("AudioIdList",$param) and $param["AudioIdList"] !== null) {
            $this->AudioIdList = $param["AudioIdList"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("VPRAudioId",$param) and $param["VPRAudioId"] !== null) {
            $this->VPRAudioId = $param["VPRAudioId"];
        }

        if (array_key_exists("EnableVoiceEnhance",$param) and $param["EnableVoiceEnhance"] !== null) {
            $this->EnableVoiceEnhance = $param["EnableVoiceEnhance"];
        }
    }
}
