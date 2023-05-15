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
 * @method integer getSampleRate() 获取音频采样率：

16000：16k
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率：

16000：16k
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
 * @method string getCodec() 获取音频格式，音频类型(wav,mp3,aac,m4a)
 * @method void setCodec(string $Codec) 设置音频格式，音频类型(wav,mp3,aac,m4a)
 * @method array getAudioIdList() 获取音频ID集合
 * @method void setAudioIdList(array $AudioIdList) 设置音频ID集合
 * @method string getCallbackUrl() 获取回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。
回调采用POST请求方式，Content-Type为application/x-www-form-urlencoded，回调数据格式如下:callback_body=checksum=&data={"TaskId":"xxxxxxxxxxxxxx","Status":2,"StatusStr":"success","VoiceType":xxxxx,"ErrorMsg":""}
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。
回调采用POST请求方式，Content-Type为application/x-www-form-urlencoded，回调数据格式如下:callback_body=checksum=&data={"TaskId":"xxxxxxxxxxxxxx","Status":2,"StatusStr":"success","VoiceType":xxxxx,"ErrorMsg":""}
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
     * @var integer 音频采样率：

16000：16k
     */
    public $SampleRate;

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
     * @var string 音频格式，音频类型(wav,mp3,aac,m4a)
     */
    public $Codec;

    /**
     * @var array 音频ID集合
     */
    public $AudioIdList;

    /**
     * @var string 回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。
回调采用POST请求方式，Content-Type为application/x-www-form-urlencoded，回调数据格式如下:callback_body=checksum=&data={"TaskId":"xxxxxxxxxxxxxx","Status":2,"StatusStr":"success","VoiceType":xxxxx,"ErrorMsg":""}
     */
    public $CallbackUrl;

    /**
     * @param string $SessionId 唯一请求 ID
     * @param string $VoiceName 音色名称
     * @param integer $SampleRate 音频采样率：

16000：16k
     * @param integer $VoiceGender 音色性别:

1-male

2-female
     * @param integer $VoiceLanguage 语言类型：

1-中文
     * @param string $Codec 音频格式，音频类型(wav,mp3,aac,m4a)
     * @param array $AudioIdList 音频ID集合
     * @param string $CallbackUrl 回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。
回调采用POST请求方式，Content-Type为application/x-www-form-urlencoded，回调数据格式如下:callback_body=checksum=&data={"TaskId":"xxxxxxxxxxxxxx","Status":2,"StatusStr":"success","VoiceType":xxxxx,"ErrorMsg":""}
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

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("VoiceGender",$param) and $param["VoiceGender"] !== null) {
            $this->VoiceGender = $param["VoiceGender"];
        }

        if (array_key_exists("VoiceLanguage",$param) and $param["VoiceLanguage"] !== null) {
            $this->VoiceLanguage = $param["VoiceLanguage"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("AudioIdList",$param) and $param["AudioIdList"] !== null) {
            $this->AudioIdList = $param["AudioIdList"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
