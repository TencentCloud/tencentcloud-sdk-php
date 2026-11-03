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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVRSTask请求参数结构体
 *
 * @method string getSessionId() 获取<p>唯一请求 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>唯一请求 ID</p>
 * @method string getVoiceName() 获取<p>音色名称</p>
 * @method void setVoiceName(string $VoiceName) 设置<p>音色名称</p>
 * @method integer getVoiceGender() 获取<p>音色性别:</p><p>1-male</p><p>2-female</p>
 * @method void setVoiceGender(integer $VoiceGender) 设置<p>音色性别:</p><p>1-male</p><p>2-female</p>
 * @method integer getVoiceLanguage() 获取<p>语言类型：</p><p>1-中文</p>
 * @method void setVoiceLanguage(integer $VoiceLanguage) 设置<p>语言类型：</p><p>1-中文</p>
 * @method array getAudioIdList() 获取<p>音频ID集合。（一句话声音复刻仅需填写一个音质检测接口返回的AudioId）</p>
 * @method void setAudioIdList(array $AudioIdList) 设置<p>音频ID集合。（一句话声音复刻仅需填写一个音质检测接口返回的AudioId）</p>
 * @method integer getSampleRate() 获取<p>音频采样率：</p><p>16000：16k</p>
 * @method void setSampleRate(integer $SampleRate) 设置<p>音频采样率：</p><p>16000：16k</p>
 * @method string getCodec() 获取<p>音频格式，音频类型(wav,mp3,aac,m4a)</p>
 * @method void setCodec(string $Codec) 设置<p>音频格式，音频类型(wav,mp3,aac,m4a)</p>
 * @method string getCallbackUrl() 获取<p>回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。（注意：回调方式暂不支持一句话版声音复刻）<br>回调采用POST请求方式，Content-Type为application/json，回调数据格式如下:{&quot;TaskId&quot;:&quot;xxxxxxxxxxxxxx&quot;,&quot;Status&quot;:2,&quot;StatusStr&quot;:&quot;success&quot;,&quot;VoiceType&quot;:xxxxx,&quot;ErrorMsg&quot;:&quot;&quot;}</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。（注意：回调方式暂不支持一句话版声音复刻）<br>回调采用POST请求方式，Content-Type为application/json，回调数据格式如下:{&quot;TaskId&quot;:&quot;xxxxxxxxxxxxxx&quot;,&quot;Status&quot;:2,&quot;StatusStr&quot;:&quot;success&quot;,&quot;VoiceType&quot;:xxxxx,&quot;ErrorMsg&quot;:&quot;&quot;}</p>
 * @method integer getModelType() 获取<p>模型类型 1:在线 2:离线  默认为1</p>
 * @method void setModelType(integer $ModelType) 设置<p>模型类型 1:在线 2:离线  默认为1</p>
 * @method integer getTaskType() 获取<p>复刻类型。<br>5 - 一句话声音复刻。</p>
 * @method void setTaskType(integer $TaskType) 设置<p>复刻类型。<br>5 - 一句话声音复刻。</p>
 * @method string getVPRAudioId() 获取<p>校验音频ID。（仅基础版声音复刻使用）</p>
 * @method void setVPRAudioId(string $VPRAudioId) 设置<p>校验音频ID。（仅基础版声音复刻使用）</p>
 * @method integer getEnableVoiceEnhance() 获取<p>是否开启语音增强，0 - 关闭，1 - 开启 。默认关闭<br>语音增强仅适用于一句话复刻场景</p>
 * @method void setEnableVoiceEnhance(integer $EnableVoiceEnhance) 设置<p>是否开启语音增强，0 - 关闭，1 - 开启 。默认关闭<br>语音增强仅适用于一句话复刻场景</p>
 * @method string getEngineType() 获取<p>模型引擎，可选值：</p><ul><li><p>WXZL（默认）</p></li><li><p>YTLX_V2（新版）</p></li></ul><p>示例：YTLX_V2</p>
 * @method void setEngineType(string $EngineType) 设置<p>模型引擎，可选值：</p><ul><li><p>WXZL（默认）</p></li><li><p>YTLX_V2（新版）</p></li></ul><p>示例：YTLX_V2</p>
 */
class CreateVRSTaskRequest extends AbstractModel
{
    /**
     * @var string <p>唯一请求 ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>音色名称</p>
     */
    public $VoiceName;

    /**
     * @var integer <p>音色性别:</p><p>1-male</p><p>2-female</p>
     */
    public $VoiceGender;

    /**
     * @var integer <p>语言类型：</p><p>1-中文</p>
     */
    public $VoiceLanguage;

    /**
     * @var array <p>音频ID集合。（一句话声音复刻仅需填写一个音质检测接口返回的AudioId）</p>
     */
    public $AudioIdList;

    /**
     * @var integer <p>音频采样率：</p><p>16000：16k</p>
     */
    public $SampleRate;

    /**
     * @var string <p>音频格式，音频类型(wav,mp3,aac,m4a)</p>
     */
    public $Codec;

    /**
     * @var string <p>回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。（注意：回调方式暂不支持一句话版声音复刻）<br>回调采用POST请求方式，Content-Type为application/json，回调数据格式如下:{&quot;TaskId&quot;:&quot;xxxxxxxxxxxxxx&quot;,&quot;Status&quot;:2,&quot;StatusStr&quot;:&quot;success&quot;,&quot;VoiceType&quot;:xxxxx,&quot;ErrorMsg&quot;:&quot;&quot;}</p>
     */
    public $CallbackUrl;

    /**
     * @var integer <p>模型类型 1:在线 2:离线  默认为1</p>
     */
    public $ModelType;

    /**
     * @var integer <p>复刻类型。<br>5 - 一句话声音复刻。</p>
     */
    public $TaskType;

    /**
     * @var string <p>校验音频ID。（仅基础版声音复刻使用）</p>
     */
    public $VPRAudioId;

    /**
     * @var integer <p>是否开启语音增强，0 - 关闭，1 - 开启 。默认关闭<br>语音增强仅适用于一句话复刻场景</p>
     */
    public $EnableVoiceEnhance;

    /**
     * @var string <p>模型引擎，可选值：</p><ul><li><p>WXZL（默认）</p></li><li><p>YTLX_V2（新版）</p></li></ul><p>示例：YTLX_V2</p>
     */
    public $EngineType;

    /**
     * @param string $SessionId <p>唯一请求 ID</p>
     * @param string $VoiceName <p>音色名称</p>
     * @param integer $VoiceGender <p>音色性别:</p><p>1-male</p><p>2-female</p>
     * @param integer $VoiceLanguage <p>语言类型：</p><p>1-中文</p>
     * @param array $AudioIdList <p>音频ID集合。（一句话声音复刻仅需填写一个音质检测接口返回的AudioId）</p>
     * @param integer $SampleRate <p>音频采样率：</p><p>16000：16k</p>
     * @param string $Codec <p>音频格式，音频类型(wav,mp3,aac,m4a)</p>
     * @param string $CallbackUrl <p>回调 URL，用户自行搭建的用于接收结果的服务URL。如果用户使用轮询方式获取识别结果，则无需提交该参数。（注意：回调方式暂不支持一句话版声音复刻）<br>回调采用POST请求方式，Content-Type为application/json，回调数据格式如下:{&quot;TaskId&quot;:&quot;xxxxxxxxxxxxxx&quot;,&quot;Status&quot;:2,&quot;StatusStr&quot;:&quot;success&quot;,&quot;VoiceType&quot;:xxxxx,&quot;ErrorMsg&quot;:&quot;&quot;}</p>
     * @param integer $ModelType <p>模型类型 1:在线 2:离线  默认为1</p>
     * @param integer $TaskType <p>复刻类型。<br>5 - 一句话声音复刻。</p>
     * @param string $VPRAudioId <p>校验音频ID。（仅基础版声音复刻使用）</p>
     * @param integer $EnableVoiceEnhance <p>是否开启语音增强，0 - 关闭，1 - 开启 。默认关闭<br>语音增强仅适用于一句话复刻场景</p>
     * @param string $EngineType <p>模型引擎，可选值：</p><ul><li><p>WXZL（默认）</p></li><li><p>YTLX_V2（新版）</p></li></ul><p>示例：YTLX_V2</p>
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

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}
