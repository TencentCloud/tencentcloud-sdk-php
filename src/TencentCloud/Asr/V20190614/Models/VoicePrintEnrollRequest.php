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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VoicePrintEnroll请求参数结构体
 *
 * @method integer getVoiceFormat() 获取音频格式 0: pcm, 1: wav
 * @method void setVoiceFormat(integer $VoiceFormat) 设置音频格式 0: pcm, 1: wav
 * @method integer getSampleRate() 获取音频采样率，目前支持16000，单位：Hz，必填
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率，目前支持16000，单位：Hz，必填
 * @method string getData() 获取音频数据, base64 编码, 音频时长不能超过30s，数据大小不超过2M
 * @method void setData(string $Data) 设置音频数据, base64 编码, 音频时长不能超过30s，数据大小不超过2M
 * @method string getSpeakerNick() 获取说话人昵称  不超过32字节
 * @method void setSpeakerNick(string $SpeakerNick) 设置说话人昵称  不超过32字节
 */
class VoicePrintEnrollRequest extends AbstractModel
{
    /**
     * @var integer 音频格式 0: pcm, 1: wav
     */
    public $VoiceFormat;

    /**
     * @var integer 音频采样率，目前支持16000，单位：Hz，必填
     */
    public $SampleRate;

    /**
     * @var string 音频数据, base64 编码, 音频时长不能超过30s，数据大小不超过2M
     */
    public $Data;

    /**
     * @var string 说话人昵称  不超过32字节
     */
    public $SpeakerNick;

    /**
     * @param integer $VoiceFormat 音频格式 0: pcm, 1: wav
     * @param integer $SampleRate 音频采样率，目前支持16000，单位：Hz，必填
     * @param string $Data 音频数据, base64 编码, 音频时长不能超过30s，数据大小不超过2M
     * @param string $SpeakerNick 说话人昵称  不超过32字节
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
        if (array_key_exists("VoiceFormat",$param) and $param["VoiceFormat"] !== null) {
            $this->VoiceFormat = $param["VoiceFormat"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("SpeakerNick",$param) and $param["SpeakerNick"] !== null) {
            $this->SpeakerNick = $param["SpeakerNick"];
        }
    }
}
