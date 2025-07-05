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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VoicePrintCompare请求参数结构体
 *
 * @method integer getVoiceFormat() 获取音频格式 0: pcm, 1: wav；pcm和wav音频无损压缩，识别准确度更高
 * @method void setVoiceFormat(integer $VoiceFormat) 设置音频格式 0: pcm, 1: wav；pcm和wav音频无损压缩，识别准确度更高
 * @method integer getSampleRate() 获取音频采样率，目前仅支持16k，请填写16000
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率，目前仅支持16k，请填写16000
 * @method string getSrcAudioData() 获取对比源音频数据, 音频要求：base64 编码,16k采样率， 16bit位深，pcm或者wav格式， 单声道，音频时长不超过30秒的音频，base64编码数据大小不超过2M
 * @method void setSrcAudioData(string $SrcAudioData) 设置对比源音频数据, 音频要求：base64 编码,16k采样率， 16bit位深，pcm或者wav格式， 单声道，音频时长不超过30秒的音频，base64编码数据大小不超过2M
 * @method string getDestAudioData() 获取对比目标音频数据, 音频要求：base64 编码,16k采样率， 16bit位深，pcm或者wav格式， 单声道，音频时长不超过30秒的音频，base64编码数据大小不超过2M
 * @method void setDestAudioData(string $DestAudioData) 设置对比目标音频数据, 音频要求：base64 编码,16k采样率， 16bit位深，pcm或者wav格式， 单声道，音频时长不超过30秒的音频，base64编码数据大小不超过2M
 */
class VoicePrintCompareRequest extends AbstractModel
{
    /**
     * @var integer 音频格式 0: pcm, 1: wav；pcm和wav音频无损压缩，识别准确度更高
     */
    public $VoiceFormat;

    /**
     * @var integer 音频采样率，目前仅支持16k，请填写16000
     */
    public $SampleRate;

    /**
     * @var string 对比源音频数据, 音频要求：base64 编码,16k采样率， 16bit位深，pcm或者wav格式， 单声道，音频时长不超过30秒的音频，base64编码数据大小不超过2M
     */
    public $SrcAudioData;

    /**
     * @var string 对比目标音频数据, 音频要求：base64 编码,16k采样率， 16bit位深，pcm或者wav格式， 单声道，音频时长不超过30秒的音频，base64编码数据大小不超过2M
     */
    public $DestAudioData;

    /**
     * @param integer $VoiceFormat 音频格式 0: pcm, 1: wav；pcm和wav音频无损压缩，识别准确度更高
     * @param integer $SampleRate 音频采样率，目前仅支持16k，请填写16000
     * @param string $SrcAudioData 对比源音频数据, 音频要求：base64 编码,16k采样率， 16bit位深，pcm或者wav格式， 单声道，音频时长不超过30秒的音频，base64编码数据大小不超过2M
     * @param string $DestAudioData 对比目标音频数据, 音频要求：base64 编码,16k采样率， 16bit位深，pcm或者wav格式， 单声道，音频时长不超过30秒的音频，base64编码数据大小不超过2M
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

        if (array_key_exists("SrcAudioData",$param) and $param["SrcAudioData"] !== null) {
            $this->SrcAudioData = $param["SrcAudioData"];
        }

        if (array_key_exists("DestAudioData",$param) and $param["DestAudioData"] !== null) {
            $this->DestAudioData = $param["DestAudioData"];
        }
    }
}
