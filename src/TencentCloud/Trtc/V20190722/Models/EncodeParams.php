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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCU混流输出流编码参数
 *
 * @method integer getAudioSampleRate() 获取混流-输出流音频采样率。取值为[48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000]。
 * @method void setAudioSampleRate(integer $AudioSampleRate) 设置混流-输出流音频采样率。取值为[48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000]。
 * @method integer getAudioBitrate() 获取混流-输出流音频码率。取值范围[8,500]，单位为Kbps。
 * @method void setAudioBitrate(integer $AudioBitrate) 设置混流-输出流音频码率。取值范围[8,500]，单位为Kbps。
 * @method integer getAudioChannels() 获取混流-输出流音频声道数，取值范围[1,2]。
 * @method void setAudioChannels(integer $AudioChannels) 设置混流-输出流音频声道数，取值范围[1,2]。
 * @method integer getVideoWidth() 获取混流-输出流宽，音视频输出时必填。取值范围[0,1920]，单位为像素值。
 * @method void setVideoWidth(integer $VideoWidth) 设置混流-输出流宽，音视频输出时必填。取值范围[0,1920]，单位为像素值。
 * @method integer getVideoHeight() 获取混流-输出流高，音视频输出时必填。取值范围[0,1080]，单位为像素值。
 * @method void setVideoHeight(integer $VideoHeight) 设置混流-输出流高，音视频输出时必填。取值范围[0,1080]，单位为像素值。
 * @method integer getVideoBitrate() 获取混流-输出流码率，音视频输出时必填。取值范围[1,10000]，单位为Kbps。
 * @method void setVideoBitrate(integer $VideoBitrate) 设置混流-输出流码率，音视频输出时必填。取值范围[1,10000]，单位为Kbps。
 * @method integer getVideoFramerate() 获取混流-输出流帧率，音视频输出时必填。取值为[6,12,15,24,30,48,60]，不在上述帧率值内系统会自动调整。
 * @method void setVideoFramerate(integer $VideoFramerate) 设置混流-输出流帧率，音视频输出时必填。取值为[6,12,15,24,30,48,60]，不在上述帧率值内系统会自动调整。
 * @method integer getVideoGop() 获取混流-输出流gop，音视频输出时必填。取值范围[1,5]，单位为秒。
 * @method void setVideoGop(integer $VideoGop) 设置混流-输出流gop，音视频输出时必填。取值范围[1,5]，单位为秒。
 * @method integer getBackgroundColor() 获取混流-输出流背景色。
 * @method void setBackgroundColor(integer $BackgroundColor) 设置混流-输出流背景色。
 * @method integer getBackgroundImageId() 获取混流-输出流背景图片，取值为实时音视频控制台上传的图片ID。
 * @method void setBackgroundImageId(integer $BackgroundImageId) 设置混流-输出流背景图片，取值为实时音视频控制台上传的图片ID。
 */
class EncodeParams extends AbstractModel
{
    /**
     * @var integer 混流-输出流音频采样率。取值为[48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000]。
     */
    public $AudioSampleRate;

    /**
     * @var integer 混流-输出流音频码率。取值范围[8,500]，单位为Kbps。
     */
    public $AudioBitrate;

    /**
     * @var integer 混流-输出流音频声道数，取值范围[1,2]。
     */
    public $AudioChannels;

    /**
     * @var integer 混流-输出流宽，音视频输出时必填。取值范围[0,1920]，单位为像素值。
     */
    public $VideoWidth;

    /**
     * @var integer 混流-输出流高，音视频输出时必填。取值范围[0,1080]，单位为像素值。
     */
    public $VideoHeight;

    /**
     * @var integer 混流-输出流码率，音视频输出时必填。取值范围[1,10000]，单位为Kbps。
     */
    public $VideoBitrate;

    /**
     * @var integer 混流-输出流帧率，音视频输出时必填。取值为[6,12,15,24,30,48,60]，不在上述帧率值内系统会自动调整。
     */
    public $VideoFramerate;

    /**
     * @var integer 混流-输出流gop，音视频输出时必填。取值范围[1,5]，单位为秒。
     */
    public $VideoGop;

    /**
     * @var integer 混流-输出流背景色。
     */
    public $BackgroundColor;

    /**
     * @var integer 混流-输出流背景图片，取值为实时音视频控制台上传的图片ID。
     */
    public $BackgroundImageId;

    /**
     * @param integer $AudioSampleRate 混流-输出流音频采样率。取值为[48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000]。
     * @param integer $AudioBitrate 混流-输出流音频码率。取值范围[8,500]，单位为Kbps。
     * @param integer $AudioChannels 混流-输出流音频声道数，取值范围[1,2]。
     * @param integer $VideoWidth 混流-输出流宽，音视频输出时必填。取值范围[0,1920]，单位为像素值。
     * @param integer $VideoHeight 混流-输出流高，音视频输出时必填。取值范围[0,1080]，单位为像素值。
     * @param integer $VideoBitrate 混流-输出流码率，音视频输出时必填。取值范围[1,10000]，单位为Kbps。
     * @param integer $VideoFramerate 混流-输出流帧率，音视频输出时必填。取值为[6,12,15,24,30,48,60]，不在上述帧率值内系统会自动调整。
     * @param integer $VideoGop 混流-输出流gop，音视频输出时必填。取值范围[1,5]，单位为秒。
     * @param integer $BackgroundColor 混流-输出流背景色。
     * @param integer $BackgroundImageId 混流-输出流背景图片，取值为实时音视频控制台上传的图片ID。
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
        if (array_key_exists("AudioSampleRate",$param) and $param["AudioSampleRate"] !== null) {
            $this->AudioSampleRate = $param["AudioSampleRate"];
        }

        if (array_key_exists("AudioBitrate",$param) and $param["AudioBitrate"] !== null) {
            $this->AudioBitrate = $param["AudioBitrate"];
        }

        if (array_key_exists("AudioChannels",$param) and $param["AudioChannels"] !== null) {
            $this->AudioChannels = $param["AudioChannels"];
        }

        if (array_key_exists("VideoWidth",$param) and $param["VideoWidth"] !== null) {
            $this->VideoWidth = $param["VideoWidth"];
        }

        if (array_key_exists("VideoHeight",$param) and $param["VideoHeight"] !== null) {
            $this->VideoHeight = $param["VideoHeight"];
        }

        if (array_key_exists("VideoBitrate",$param) and $param["VideoBitrate"] !== null) {
            $this->VideoBitrate = $param["VideoBitrate"];
        }

        if (array_key_exists("VideoFramerate",$param) and $param["VideoFramerate"] !== null) {
            $this->VideoFramerate = $param["VideoFramerate"];
        }

        if (array_key_exists("VideoGop",$param) and $param["VideoGop"] !== null) {
            $this->VideoGop = $param["VideoGop"];
        }

        if (array_key_exists("BackgroundColor",$param) and $param["BackgroundColor"] !== null) {
            $this->BackgroundColor = $param["BackgroundColor"];
        }

        if (array_key_exists("BackgroundImageId",$param) and $param["BackgroundImageId"] !== null) {
            $this->BackgroundImageId = $param["BackgroundImageId"];
        }
    }
}
