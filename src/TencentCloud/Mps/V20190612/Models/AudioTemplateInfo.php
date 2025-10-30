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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频流配置参数
 *
 * @method string getCodec() 获取音频流的编码格式。
当不需要对音频进行转码时，可选值为：
<li>copy。</li>
当外层参数 Container 为 mp3 时，可选值为：
<li>mp3。</li>
当外层参数 Container 为 ogg 或 flac 时，可选值为：
<li>flac。</li>
当外层参数 Container 为 m4a 时，可选值为：
<li>aac；</li>
<li>ac3。</li>
当外层参数 Container 为 mp4 或 flv 时，可选值为：
<li>aac：更适合 mp4；</li>
<li>mp3：更适合 flv；</li>
<li>mp2。</li>
当外层参数 Container 为 hls 时，可选值为：
<li>aac；</li>
<li>mp3;</li>
<li>eac3：自适应转码音轨合并时使用。</li>
 * @method void setCodec(string $Codec) 设置音频流的编码格式。
当不需要对音频进行转码时，可选值为：
<li>copy。</li>
当外层参数 Container 为 mp3 时，可选值为：
<li>mp3。</li>
当外层参数 Container 为 ogg 或 flac 时，可选值为：
<li>flac。</li>
当外层参数 Container 为 m4a 时，可选值为：
<li>aac；</li>
<li>ac3。</li>
当外层参数 Container 为 mp4 或 flv 时，可选值为：
<li>aac：更适合 mp4；</li>
<li>mp3：更适合 flv；</li>
<li>mp2。</li>
当外层参数 Container 为 hls 时，可选值为：
<li>aac；</li>
<li>mp3;</li>
<li>eac3：自适应转码音轨合并时使用。</li>
 * @method integer getBitrate() 获取音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。
当取值为 0，表示音频码率和原始音频保持一致。
注意：如果使用自适应转码音轨合并TrackChannelInfo参数，取值范围：
1）、不能填0；
2）、Codec为：aac时，取值范围：[26, 256];
3）、Codec为：ac3时，取值范围：[26, 640];
4)、Codec为：eac3时，取值范围：[26, 6144]，备注：当SampleRate为44100HZ，最大值为：5644，当SampleRate为48000HZ，最大值为：6144，


 * @method void setBitrate(integer $Bitrate) 设置音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。
当取值为 0，表示音频码率和原始音频保持一致。
注意：如果使用自适应转码音轨合并TrackChannelInfo参数，取值范围：
1）、不能填0；
2）、Codec为：aac时，取值范围：[26, 256];
3）、Codec为：ac3时，取值范围：[26, 640];
4)、Codec为：eac3时，取值范围：[26, 6144]，备注：当SampleRate为44100HZ，最大值为：5644，当SampleRate为48000HZ，最大值为：6144，


 * @method integer getSampleRate() 获取音频流的采样率，不同编码标准支持的采样率选项不同。填0代表使用源音频的采样率数值。
详细参考[音频采样率支持范围文档](https://cloud.tencent.com/document/product/862/77166#f3b039f1-d817-4a96-b4e4-90132d31cd53)
单位：Hz
注意：请确保源音频流的采样率在上述选项范围内，否则可能导致转码失败！
 * @method void setSampleRate(integer $SampleRate) 设置音频流的采样率，不同编码标准支持的采样率选项不同。填0代表使用源音频的采样率数值。
详细参考[音频采样率支持范围文档](https://cloud.tencent.com/document/product/862/77166#f3b039f1-d817-4a96-b4e4-90132d31cd53)
单位：Hz
注意：请确保源音频流的采样率在上述选项范围内，否则可能导致转码失败！
 * @method integer getAudioChannel() 获取音频通道方式，可选值：
<li>1：单通道</li>
<li>2：双通道</li>
<li>6：5.1声道</li>
当媒体的封装格式是音频格式时（flac，ogg，mp3，m4a）时，声道数不允许设为5.1声道。
默认值：2。
 * @method void setAudioChannel(integer $AudioChannel) 设置音频通道方式，可选值：
<li>1：单通道</li>
<li>2：双通道</li>
<li>6：5.1声道</li>
当媒体的封装格式是音频格式时（flac，ogg，mp3，m4a）时，声道数不允许设为5.1声道。
默认值：2。
 * @method AudioTrackChannelInfo getTrackChannelInfo() 获取合并音轨信息。
注意：此字段只是自适应转码生效，
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrackChannelInfo(AudioTrackChannelInfo $TrackChannelInfo) 设置合并音轨信息。
注意：此字段只是自适应转码生效，
注意：此字段可能返回 null，表示取不到有效值。
 */
class AudioTemplateInfo extends AbstractModel
{
    /**
     * @var string 音频流的编码格式。
当不需要对音频进行转码时，可选值为：
<li>copy。</li>
当外层参数 Container 为 mp3 时，可选值为：
<li>mp3。</li>
当外层参数 Container 为 ogg 或 flac 时，可选值为：
<li>flac。</li>
当外层参数 Container 为 m4a 时，可选值为：
<li>aac；</li>
<li>ac3。</li>
当外层参数 Container 为 mp4 或 flv 时，可选值为：
<li>aac：更适合 mp4；</li>
<li>mp3：更适合 flv；</li>
<li>mp2。</li>
当外层参数 Container 为 hls 时，可选值为：
<li>aac；</li>
<li>mp3;</li>
<li>eac3：自适应转码音轨合并时使用。</li>
     */
    public $Codec;

    /**
     * @var integer 音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。
当取值为 0，表示音频码率和原始音频保持一致。
注意：如果使用自适应转码音轨合并TrackChannelInfo参数，取值范围：
1）、不能填0；
2）、Codec为：aac时，取值范围：[26, 256];
3）、Codec为：ac3时，取值范围：[26, 640];
4)、Codec为：eac3时，取值范围：[26, 6144]，备注：当SampleRate为44100HZ，最大值为：5644，当SampleRate为48000HZ，最大值为：6144，


     */
    public $Bitrate;

    /**
     * @var integer 音频流的采样率，不同编码标准支持的采样率选项不同。填0代表使用源音频的采样率数值。
详细参考[音频采样率支持范围文档](https://cloud.tencent.com/document/product/862/77166#f3b039f1-d817-4a96-b4e4-90132d31cd53)
单位：Hz
注意：请确保源音频流的采样率在上述选项范围内，否则可能导致转码失败！
     */
    public $SampleRate;

    /**
     * @var integer 音频通道方式，可选值：
<li>1：单通道</li>
<li>2：双通道</li>
<li>6：5.1声道</li>
当媒体的封装格式是音频格式时（flac，ogg，mp3，m4a）时，声道数不允许设为5.1声道。
默认值：2。
     */
    public $AudioChannel;

    /**
     * @var AudioTrackChannelInfo 合并音轨信息。
注意：此字段只是自适应转码生效，
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrackChannelInfo;

    /**
     * @param string $Codec 音频流的编码格式。
当不需要对音频进行转码时，可选值为：
<li>copy。</li>
当外层参数 Container 为 mp3 时，可选值为：
<li>mp3。</li>
当外层参数 Container 为 ogg 或 flac 时，可选值为：
<li>flac。</li>
当外层参数 Container 为 m4a 时，可选值为：
<li>aac；</li>
<li>ac3。</li>
当外层参数 Container 为 mp4 或 flv 时，可选值为：
<li>aac：更适合 mp4；</li>
<li>mp3：更适合 flv；</li>
<li>mp2。</li>
当外层参数 Container 为 hls 时，可选值为：
<li>aac；</li>
<li>mp3;</li>
<li>eac3：自适应转码音轨合并时使用。</li>
     * @param integer $Bitrate 音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。
当取值为 0，表示音频码率和原始音频保持一致。
注意：如果使用自适应转码音轨合并TrackChannelInfo参数，取值范围：
1）、不能填0；
2）、Codec为：aac时，取值范围：[26, 256];
3）、Codec为：ac3时，取值范围：[26, 640];
4)、Codec为：eac3时，取值范围：[26, 6144]，备注：当SampleRate为44100HZ，最大值为：5644，当SampleRate为48000HZ，最大值为：6144，


     * @param integer $SampleRate 音频流的采样率，不同编码标准支持的采样率选项不同。填0代表使用源音频的采样率数值。
详细参考[音频采样率支持范围文档](https://cloud.tencent.com/document/product/862/77166#f3b039f1-d817-4a96-b4e4-90132d31cd53)
单位：Hz
注意：请确保源音频流的采样率在上述选项范围内，否则可能导致转码失败！
     * @param integer $AudioChannel 音频通道方式，可选值：
<li>1：单通道</li>
<li>2：双通道</li>
<li>6：5.1声道</li>
当媒体的封装格式是音频格式时（flac，ogg，mp3，m4a）时，声道数不允许设为5.1声道。
默认值：2。
     * @param AudioTrackChannelInfo $TrackChannelInfo 合并音轨信息。
注意：此字段只是自适应转码生效，
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }

        if (array_key_exists("TrackChannelInfo",$param) and $param["TrackChannelInfo"] !== null) {
            $this->TrackChannelInfo = new AudioTrackChannelInfo();
            $this->TrackChannelInfo->deserialize($param["TrackChannelInfo"]);
        }
    }
}
