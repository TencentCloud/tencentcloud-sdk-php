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
namespace TencentCloud\Tsi\V20210325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同传TTS请求参数
 *
 * @method string getCodec() 获取返回音频格式，可取值：wav，mp3，pcm
 * @method void setCodec(string $Codec) 设置返回音频格式，可取值：wav，mp3，pcm
 * @method integer getVoiceType() 获取音色 ID，只包括标准音色（注，日文只有一个固定音色）。
完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
 * @method void setVoiceType(integer $VoiceType) 设置音色 ID，只包括标准音色（注，日文只有一个固定音色）。
完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
 * @method float getVolume() 获取音量大小，范围[-10，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
 * @method void setVolume(float $Volume) 设置音量大小，范围[-10，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
 * @method float getSpeed() 获取语速，范围：[-2，6]，分别对应不同语速：

- -2代表0.6倍
- -1代表0.8倍
- 0代表1.0倍（默认）
- 1代表1.2倍
- 2代表1.5倍
- 6代表2.5倍

如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。
参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
 * @method void setSpeed(float $Speed) 设置语速，范围：[-2，6]，分别对应不同语速：

- -2代表0.6倍
- -1代表0.8倍
- 0代表1.0倍（默认）
- 1代表1.2倍
- 2代表1.5倍
- 6代表2.5倍

如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。
参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
 * @method integer getSampleRate() 获取音频采样率：

- 16000：16k（默认）
- 8000：8k
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率：

- 16000：16k（默认）
- 8000：8k
 */
class TTS extends AbstractModel
{
    /**
     * @var string 返回音频格式，可取值：wav，mp3，pcm
     */
    public $Codec;

    /**
     * @var integer 音色 ID，只包括标准音色（注，日文只有一个固定音色）。
完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
     */
    public $VoiceType;

    /**
     * @var float 音量大小，范围[-10，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
     */
    public $Volume;

    /**
     * @var float 语速，范围：[-2，6]，分别对应不同语速：

- -2代表0.6倍
- -1代表0.8倍
- 0代表1.0倍（默认）
- 1代表1.2倍
- 2代表1.5倍
- 6代表2.5倍

如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。
参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
     */
    public $Speed;

    /**
     * @var integer 音频采样率：

- 16000：16k（默认）
- 8000：8k
     */
    public $SampleRate;

    /**
     * @param string $Codec 返回音频格式，可取值：wav，mp3，pcm
     * @param integer $VoiceType 音色 ID，只包括标准音色（注，日文只有一个固定音色）。
完整的音色 ID 列表请参见[音色列表](https://cloud.tencent.com/document/product/1073/92668)。
     * @param float $Volume 音量大小，范围[-10，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
     * @param float $Speed 语速，范围：[-2，6]，分别对应不同语速：

- -2代表0.6倍
- -1代表0.8倍
- 0代表1.0倍（默认）
- 1代表1.2倍
- 2代表1.5倍
- 6代表2.5倍

如果需要更细化的语速，可以保留小数点后 2 位，例如0.5/1.25/2.81等。
参数值与实际语速转换，可参考[代码示例](https://sdk-1300466766.cos.ap-shanghai.myqcloud.com/sample/speed_sample.tar.gz)
     * @param integer $SampleRate 音频采样率：

- 16000：16k（默认）
- 8000：8k
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

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }
    }
}
