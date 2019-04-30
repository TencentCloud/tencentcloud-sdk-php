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
namespace TencentCloud\Tbp\V20190311\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getBotId() 获取机器人标识
 * @method void setBotId(string $BotId) 设置机器人标识
 * @method string getEngineModelType() 获取语音识别引擎类型,{8k_0、16k_0、16k_en}
 * @method void setEngineModelType(string $EngineModelType) 设置语音识别引擎类型,{8k_0、16k_0、16k_en}
 * @method integer getAsrVoiceFormat() 获取输入音频文件编码格式。1：wav(pcm)；4：speex(sp)；6：silk
 * @method void setAsrVoiceFormat(integer $AsrVoiceFormat) 设置输入音频文件编码格式。1：wav(pcm)；4：speex(sp)；6：silk
 * @method string getVoiceId() 获取asr请求Id。长度为16位的字符串，同一句话VoiceId保持一致
 * @method void setVoiceId(string $VoiceId) 设置asr请求Id。长度为16位的字符串，同一句话VoiceId保持一致
 * @method integer getSeq() 获取语音分片序列号。同一句话必须从0开始，依次递增
 * @method void setSeq(integer $Seq) 设置语音分片序列号。同一句话必须从0开始，依次递增
 * @method boolean getIsEnd() 获取是否为尾包。传递最后一个语音分片时为true，其他为false
 * @method void setIsEnd(boolean $IsEnd) 设置是否为尾包。传递最后一个语音分片时为true，其他为false
 * @method string getWaveData() 获取待识别音频字节流
 * @method void setWaveData(string $WaveData) 设置待识别音频字节流
 * @method string getUserId() 获取子账户id，每个终端对应一个
 * @method void setUserId(string $UserId) 设置子账户id，每个终端对应一个
 * @method string getBotVersion() 获取机器人版本号。BotVersion/BotEnv二选一：二者均填，仅BotVersion有效；二者均不填，默认BotEnv=dev
 * @method void setBotVersion(string $BotVersion) 设置机器人版本号。BotVersion/BotEnv二选一：二者均填，仅BotVersion有效；二者均不填，默认BotEnv=dev
 * @method integer getResultTextFormat() 获取识别返回文本编码格式	0：UTF-8（默认）；1：GB2312；2：GBK；3：BIG5
 * @method void setResultTextFormat(integer $ResultTextFormat) 设置识别返回文本编码格式	0：UTF-8（默认）；1：GB2312；2：GBK；3：BIG5
 * @method string getSessionAttributes() 获取透传字段，传递给后台
 * @method void setSessionAttributes(string $SessionAttributes) 设置透传字段，传递给后台
 * @method boolean getNeedTts() 获取是否将机器人回答合成音频并返回url
 * @method void setNeedTts(boolean $NeedTts) 设置是否将机器人回答合成音频并返回url
 * @method integer getVolume() 获取音量大小，范围：[0，10]。默认值为0，代表正常音量
 * @method void setVolume(integer $Volume) 设置音量大小，范围：[0，10]。默认值为0，代表正常音量
 * @method integer getSpeed() 获取语速，范围：[-2，2]。0代表1.0倍
 * @method void setSpeed(integer $Speed) 设置语速，范围：[-2，2]。0代表1.0倍
 * @method integer getVoiceType() 获取音色,{0：女声,1:男声}
 * @method void setVoiceType(integer $VoiceType) 设置音色,{0：女声,1:男声}
 * @method string getSampleRate() 获取返回音频的采样率{8k,16k}。默认16k
 * @method void setSampleRate(string $SampleRate) 设置返回音频的采样率{8k,16k}。默认16k
 * @method string getBotEnv() 获取机器人环境{dev:测试;release:线上}。BotVersion/BotEnv二选一：二者均填，仅BotVersion有效；二者均不填，默认BotEnv=dev
 * @method void setBotEnv(string $BotEnv) 设置机器人环境{dev:测试;release:线上}。BotVersion/BotEnv二选一：二者均填，仅BotVersion有效；二者均不填，默认BotEnv=dev
 * @method integer getTtsVoiceFormat() 获取TTS合成音频格式，{0：wav}。该字段在当前版本仅支持取值为0。
 * @method void setTtsVoiceFormat(integer $TtsVoiceFormat) 设置TTS合成音频格式，{0：wav}。该字段在当前版本仅支持取值为0。
 */

/**
 *PostAudio请求参数结构体
 */
class PostAudioRequest extends AbstractModel
{
    /**
     * @var string 机器人标识
     */
    public $BotId;

    /**
     * @var string 语音识别引擎类型,{8k_0、16k_0、16k_en}
     */
    public $EngineModelType;

    /**
     * @var integer 输入音频文件编码格式。1：wav(pcm)；4：speex(sp)；6：silk
     */
    public $AsrVoiceFormat;

    /**
     * @var string asr请求Id。长度为16位的字符串，同一句话VoiceId保持一致
     */
    public $VoiceId;

    /**
     * @var integer 语音分片序列号。同一句话必须从0开始，依次递增
     */
    public $Seq;

    /**
     * @var boolean 是否为尾包。传递最后一个语音分片时为true，其他为false
     */
    public $IsEnd;

    /**
     * @var string 待识别音频字节流
     */
    public $WaveData;

    /**
     * @var string 子账户id，每个终端对应一个
     */
    public $UserId;

    /**
     * @var string 机器人版本号。BotVersion/BotEnv二选一：二者均填，仅BotVersion有效；二者均不填，默认BotEnv=dev
     */
    public $BotVersion;

    /**
     * @var integer 识别返回文本编码格式	0：UTF-8（默认）；1：GB2312；2：GBK；3：BIG5
     */
    public $ResultTextFormat;

    /**
     * @var string 透传字段，传递给后台
     */
    public $SessionAttributes;

    /**
     * @var boolean 是否将机器人回答合成音频并返回url
     */
    public $NeedTts;

    /**
     * @var integer 音量大小，范围：[0，10]。默认值为0，代表正常音量
     */
    public $Volume;

    /**
     * @var integer 语速，范围：[-2，2]。0代表1.0倍
     */
    public $Speed;

    /**
     * @var integer 音色,{0：女声,1:男声}
     */
    public $VoiceType;

    /**
     * @var string 返回音频的采样率{8k,16k}。默认16k
     */
    public $SampleRate;

    /**
     * @var string 机器人环境{dev:测试;release:线上}。BotVersion/BotEnv二选一：二者均填，仅BotVersion有效；二者均不填，默认BotEnv=dev
     */
    public $BotEnv;

    /**
     * @var integer TTS合成音频格式，{0：wav}。该字段在当前版本仅支持取值为0。
     */
    public $TtsVoiceFormat;
    /**
     * @param string $BotId 机器人标识
     * @param string $EngineModelType 语音识别引擎类型,{8k_0、16k_0、16k_en}
     * @param integer $AsrVoiceFormat 输入音频文件编码格式。1：wav(pcm)；4：speex(sp)；6：silk
     * @param string $VoiceId asr请求Id。长度为16位的字符串，同一句话VoiceId保持一致
     * @param integer $Seq 语音分片序列号。同一句话必须从0开始，依次递增
     * @param boolean $IsEnd 是否为尾包。传递最后一个语音分片时为true，其他为false
     * @param string $WaveData 待识别音频字节流
     * @param string $UserId 子账户id，每个终端对应一个
     * @param string $BotVersion 机器人版本号。BotVersion/BotEnv二选一：二者均填，仅BotVersion有效；二者均不填，默认BotEnv=dev
     * @param integer $ResultTextFormat 识别返回文本编码格式	0：UTF-8（默认）；1：GB2312；2：GBK；3：BIG5
     * @param string $SessionAttributes 透传字段，传递给后台
     * @param boolean $NeedTts 是否将机器人回答合成音频并返回url
     * @param integer $Volume 音量大小，范围：[0，10]。默认值为0，代表正常音量
     * @param integer $Speed 语速，范围：[-2，2]。0代表1.0倍
     * @param integer $VoiceType 音色,{0：女声,1:男声}
     * @param string $SampleRate 返回音频的采样率{8k,16k}。默认16k
     * @param string $BotEnv 机器人环境{dev:测试;release:线上}。BotVersion/BotEnv二选一：二者均填，仅BotVersion有效；二者均不填，默认BotEnv=dev
     * @param integer $TtsVoiceFormat TTS合成音频格式，{0：wav}。该字段在当前版本仅支持取值为0。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("EngineModelType",$param) and $param["EngineModelType"] !== null) {
            $this->EngineModelType = $param["EngineModelType"];
        }

        if (array_key_exists("AsrVoiceFormat",$param) and $param["AsrVoiceFormat"] !== null) {
            $this->AsrVoiceFormat = $param["AsrVoiceFormat"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("WaveData",$param) and $param["WaveData"] !== null) {
            $this->WaveData = $param["WaveData"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("BotVersion",$param) and $param["BotVersion"] !== null) {
            $this->BotVersion = $param["BotVersion"];
        }

        if (array_key_exists("ResultTextFormat",$param) and $param["ResultTextFormat"] !== null) {
            $this->ResultTextFormat = $param["ResultTextFormat"];
        }

        if (array_key_exists("SessionAttributes",$param) and $param["SessionAttributes"] !== null) {
            $this->SessionAttributes = $param["SessionAttributes"];
        }

        if (array_key_exists("NeedTts",$param) and $param["NeedTts"] !== null) {
            $this->NeedTts = $param["NeedTts"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("BotEnv",$param) and $param["BotEnv"] !== null) {
            $this->BotEnv = $param["BotEnv"];
        }

        if (array_key_exists("TtsVoiceFormat",$param) and $param["TtsVoiceFormat"] !== null) {
            $this->TtsVoiceFormat = $param["TtsVoiceFormat"];
        }
    }
}
