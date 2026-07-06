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
 * @method string getCodec() 获取<p>音频流的编码格式。<br>当不需要对音频进行转码时，可选值为：</p><li>copy。</li>当外层参数 Container 为 mp3 时，可选值为：<li>mp3。</li>当外层参数 Container 为 ogg 或 flac 时，可选值为：<li>flac。</li>当外层参数 Container 为 m4a 时，可选值为：<li>aac；</li><li>ac3。</li>当外层参数 Container 为 mp4 或 flv 时，可选值为：<li>aac：更适合 mp4；</li><li>mp3：更适合 flv；</li><li>mp2。</li>当外层参数 Container 为 hls 时，可选值为：<li>aac；</li><li>mp3;</li><li>eac3：自适应转码音轨合并时使用。</li>当外层参数 Container 为 wav时，可选值为：<li>pcm16, pcm24；</li>
 * @method void setCodec(string $Codec) 设置<p>音频流的编码格式。<br>当不需要对音频进行转码时，可选值为：</p><li>copy。</li>当外层参数 Container 为 mp3 时，可选值为：<li>mp3。</li>当外层参数 Container 为 ogg 或 flac 时，可选值为：<li>flac。</li>当外层参数 Container 为 m4a 时，可选值为：<li>aac；</li><li>ac3。</li>当外层参数 Container 为 mp4 或 flv 时，可选值为：<li>aac：更适合 mp4；</li><li>mp3：更适合 flv；</li><li>mp2。</li>当外层参数 Container 为 hls 时，可选值为：<li>aac；</li><li>mp3;</li><li>eac3：自适应转码音轨合并时使用。</li>当外层参数 Container 为 wav时，可选值为：<li>pcm16, pcm24；</li>
 * @method integer getBitrate() 获取<p>音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。<br>当取值为 0，表示音频码率和原始音频保持一致。<br>注意：如果使用自适应转码音轨合并TrackChannelInfo参数，取值范围：<br>1）、不能填0；<br>2）、Codec为：aac时，取值范围：[26, 256];<br>3）、Codec为：ac3时，取值范围：[26, 640];<br>4)、Codec为：eac3时，取值范围：[26, 6144]，备注：当SampleRate为44100HZ，最大值为：5644，当SampleRate为48000HZ，最大值为：6144，</p>
 * @method void setBitrate(integer $Bitrate) 设置<p>音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。<br>当取值为 0，表示音频码率和原始音频保持一致。<br>注意：如果使用自适应转码音轨合并TrackChannelInfo参数，取值范围：<br>1）、不能填0；<br>2）、Codec为：aac时，取值范围：[26, 256];<br>3）、Codec为：ac3时，取值范围：[26, 640];<br>4)、Codec为：eac3时，取值范围：[26, 6144]，备注：当SampleRate为44100HZ，最大值为：5644，当SampleRate为48000HZ，最大值为：6144，</p>
 * @method integer getSampleRate() 获取<p>音频流的采样率，不同编码标准支持的采样率选项不同。填0代表使用源音频的采样率数值。<br>详细参考<a href="https://cloud.tencent.com/document/product/862/77166#f3b039f1-d817-4a96-b4e4-90132d31cd53">音频采样率支持范围文档</a><br>单位：Hz<br>注意：请确保源音频流的采样率在上述选项范围内，否则可能导致转码失败！</p>
 * @method void setSampleRate(integer $SampleRate) 设置<p>音频流的采样率，不同编码标准支持的采样率选项不同。填0代表使用源音频的采样率数值。<br>详细参考<a href="https://cloud.tencent.com/document/product/862/77166#f3b039f1-d817-4a96-b4e4-90132d31cd53">音频采样率支持范围文档</a><br>单位：Hz<br>注意：请确保源音频流的采样率在上述选项范围内，否则可能导致转码失败！</p>
 * @method integer getAudioChannel() 获取<p>音频通道方式，可选值：</p><li>0：声道数随源</li><li>1：单通道</li><li>2：双通道</li><li>6：5.1声道</li>当媒体的封装格式是音频格式（mp3）时，声道数不允许设为5.1声道。<p>默认值：2。<br>注意：设置音频声道随源时，如果转码音频编码格式不支持当前声道，转码任务可能会失败。</p>
 * @method void setAudioChannel(integer $AudioChannel) 设置<p>音频通道方式，可选值：</p><li>0：声道数随源</li><li>1：单通道</li><li>2：双通道</li><li>6：5.1声道</li>当媒体的封装格式是音频格式（mp3）时，声道数不允许设为5.1声道。<p>默认值：2。<br>注意：设置音频声道随源时，如果转码音频编码格式不支持当前声道，转码任务可能会失败。</p>
 * @method AudioTrackChannelInfo getTrackChannelInfo() 获取<p>合并音轨信息。<br>注意：此字段只是自适应转码生效，</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrackChannelInfo(AudioTrackChannelInfo $TrackChannelInfo) 设置<p>合并音轨信息。<br>注意：此字段只是自适应转码生效，</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAudioLanguage() 获取<p>音频轨道语言，比如：chi、eng  注意：（1）遵循 ISO 639-2；（2）仅适用于自适应码流模板；（3）值为 source 表示保留源language</p>
 * @method void setAudioLanguage(string $AudioLanguage) 设置<p>音频轨道语言，比如：chi、eng  注意：（1）遵循 ISO 639-2；（2）仅适用于自适应码流模板；（3）值为 source 表示保留源language</p>
 * @method string getAudioName() 获取<p>音频轨道名称，比如：中文、English  注意：（1）仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符；（2）仅适用于自适应码流模板；（3）值为source表示保留源name</p>
 * @method void setAudioName(string $AudioName) 设置<p>音频轨道名称，比如：中文、English  注意：（1）仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符；（2）仅适用于自适应码流模板；（3）值为source表示保留源name</p>
 * @method boolean getDefaultTrack() 获取<p>默认音频轨道。为true时指定当前音轨为默认音轨轨道，最多可指定1条默认轨道。  </p><p>默认值：false</p>
 * @method void setDefaultTrack(boolean $DefaultTrack) 设置<p>默认音频轨道。为true时指定当前音轨为默认音轨轨道，最多可指定1条默认轨道。  </p><p>默认值：false</p>
 */
class AudioTemplateInfo extends AbstractModel
{
    /**
     * @var string <p>音频流的编码格式。<br>当不需要对音频进行转码时，可选值为：</p><li>copy。</li>当外层参数 Container 为 mp3 时，可选值为：<li>mp3。</li>当外层参数 Container 为 ogg 或 flac 时，可选值为：<li>flac。</li>当外层参数 Container 为 m4a 时，可选值为：<li>aac；</li><li>ac3。</li>当外层参数 Container 为 mp4 或 flv 时，可选值为：<li>aac：更适合 mp4；</li><li>mp3：更适合 flv；</li><li>mp2。</li>当外层参数 Container 为 hls 时，可选值为：<li>aac；</li><li>mp3;</li><li>eac3：自适应转码音轨合并时使用。</li>当外层参数 Container 为 wav时，可选值为：<li>pcm16, pcm24；</li>
     */
    public $Codec;

    /**
     * @var integer <p>音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。<br>当取值为 0，表示音频码率和原始音频保持一致。<br>注意：如果使用自适应转码音轨合并TrackChannelInfo参数，取值范围：<br>1）、不能填0；<br>2）、Codec为：aac时，取值范围：[26, 256];<br>3）、Codec为：ac3时，取值范围：[26, 640];<br>4)、Codec为：eac3时，取值范围：[26, 6144]，备注：当SampleRate为44100HZ，最大值为：5644，当SampleRate为48000HZ，最大值为：6144，</p>
     */
    public $Bitrate;

    /**
     * @var integer <p>音频流的采样率，不同编码标准支持的采样率选项不同。填0代表使用源音频的采样率数值。<br>详细参考<a href="https://cloud.tencent.com/document/product/862/77166#f3b039f1-d817-4a96-b4e4-90132d31cd53">音频采样率支持范围文档</a><br>单位：Hz<br>注意：请确保源音频流的采样率在上述选项范围内，否则可能导致转码失败！</p>
     */
    public $SampleRate;

    /**
     * @var integer <p>音频通道方式，可选值：</p><li>0：声道数随源</li><li>1：单通道</li><li>2：双通道</li><li>6：5.1声道</li>当媒体的封装格式是音频格式（mp3）时，声道数不允许设为5.1声道。<p>默认值：2。<br>注意：设置音频声道随源时，如果转码音频编码格式不支持当前声道，转码任务可能会失败。</p>
     */
    public $AudioChannel;

    /**
     * @var AudioTrackChannelInfo <p>合并音轨信息。<br>注意：此字段只是自适应转码生效，</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrackChannelInfo;

    /**
     * @var string <p>音频轨道语言，比如：chi、eng  注意：（1）遵循 ISO 639-2；（2）仅适用于自适应码流模板；（3）值为 source 表示保留源language</p>
     */
    public $AudioLanguage;

    /**
     * @var string <p>音频轨道名称，比如：中文、English  注意：（1）仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符；（2）仅适用于自适应码流模板；（3）值为source表示保留源name</p>
     */
    public $AudioName;

    /**
     * @var boolean <p>默认音频轨道。为true时指定当前音轨为默认音轨轨道，最多可指定1条默认轨道。  </p><p>默认值：false</p>
     */
    public $DefaultTrack;

    /**
     * @param string $Codec <p>音频流的编码格式。<br>当不需要对音频进行转码时，可选值为：</p><li>copy。</li>当外层参数 Container 为 mp3 时，可选值为：<li>mp3。</li>当外层参数 Container 为 ogg 或 flac 时，可选值为：<li>flac。</li>当外层参数 Container 为 m4a 时，可选值为：<li>aac；</li><li>ac3。</li>当外层参数 Container 为 mp4 或 flv 时，可选值为：<li>aac：更适合 mp4；</li><li>mp3：更适合 flv；</li><li>mp2。</li>当外层参数 Container 为 hls 时，可选值为：<li>aac；</li><li>mp3;</li><li>eac3：自适应转码音轨合并时使用。</li>当外层参数 Container 为 wav时，可选值为：<li>pcm16, pcm24；</li>
     * @param integer $Bitrate <p>音频流的码率，取值范围：0 和 [26, 256]，单位：kbps。<br>当取值为 0，表示音频码率和原始音频保持一致。<br>注意：如果使用自适应转码音轨合并TrackChannelInfo参数，取值范围：<br>1）、不能填0；<br>2）、Codec为：aac时，取值范围：[26, 256];<br>3）、Codec为：ac3时，取值范围：[26, 640];<br>4)、Codec为：eac3时，取值范围：[26, 6144]，备注：当SampleRate为44100HZ，最大值为：5644，当SampleRate为48000HZ，最大值为：6144，</p>
     * @param integer $SampleRate <p>音频流的采样率，不同编码标准支持的采样率选项不同。填0代表使用源音频的采样率数值。<br>详细参考<a href="https://cloud.tencent.com/document/product/862/77166#f3b039f1-d817-4a96-b4e4-90132d31cd53">音频采样率支持范围文档</a><br>单位：Hz<br>注意：请确保源音频流的采样率在上述选项范围内，否则可能导致转码失败！</p>
     * @param integer $AudioChannel <p>音频通道方式，可选值：</p><li>0：声道数随源</li><li>1：单通道</li><li>2：双通道</li><li>6：5.1声道</li>当媒体的封装格式是音频格式（mp3）时，声道数不允许设为5.1声道。<p>默认值：2。<br>注意：设置音频声道随源时，如果转码音频编码格式不支持当前声道，转码任务可能会失败。</p>
     * @param AudioTrackChannelInfo $TrackChannelInfo <p>合并音轨信息。<br>注意：此字段只是自适应转码生效，</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AudioLanguage <p>音频轨道语言，比如：chi、eng  注意：（1）遵循 ISO 639-2；（2）仅适用于自适应码流模板；（3）值为 source 表示保留源language</p>
     * @param string $AudioName <p>音频轨道名称，比如：中文、English  注意：（1）仅支持中文、英文、数字、空格、下划线(_)、短横线(-)、句点(.)和中英文括号，长度不能超过64个字符；（2）仅适用于自适应码流模板；（3）值为source表示保留源name</p>
     * @param boolean $DefaultTrack <p>默认音频轨道。为true时指定当前音轨为默认音轨轨道，最多可指定1条默认轨道。  </p><p>默认值：false</p>
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

        if (array_key_exists("AudioLanguage",$param) and $param["AudioLanguage"] !== null) {
            $this->AudioLanguage = $param["AudioLanguage"];
        }

        if (array_key_exists("AudioName",$param) and $param["AudioName"] !== null) {
            $this->AudioName = $param["AudioName"];
        }

        if (array_key_exists("DefaultTrack",$param) and $param["DefaultTrack"] !== null) {
            $this->DefaultTrack = $param["DefaultTrack"];
        }
    }
}
