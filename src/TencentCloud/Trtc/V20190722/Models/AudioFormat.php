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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TTS音频输出的格式
 *
 * @method string getFormat() 获取生成的音频格式

- TextToSpeech流式接口

 支持 pcm, 默认: pcm

- TextToSpeech非流式接口

 支持 pcm,wav,  默认: pcm
 * @method void setFormat(string $Format) 设置生成的音频格式

- TextToSpeech流式接口

 支持 pcm, 默认: pcm

- TextToSpeech非流式接口

 支持 pcm,wav,  默认: pcm
 * @method integer getSampleRate() 获取生成的音频采样率，默认24000
可选
- 16000
- 24000 
 * @method void setSampleRate(integer $SampleRate) 设置生成的音频采样率，默认24000
可选
- 16000
- 24000 
 */
class AudioFormat extends AbstractModel
{
    /**
     * @var string 生成的音频格式

- TextToSpeech流式接口

 支持 pcm, 默认: pcm

- TextToSpeech非流式接口

 支持 pcm,wav,  默认: pcm
     */
    public $Format;

    /**
     * @var integer 生成的音频采样率，默认24000
可选
- 16000
- 24000 
     */
    public $SampleRate;

    /**
     * @param string $Format 生成的音频格式

- TextToSpeech流式接口

 支持 pcm, 默认: pcm

- TextToSpeech非流式接口

 支持 pcm,wav,  默认: pcm
     * @param integer $SampleRate 生成的音频采样率，默认24000
可选
- 16000
- 24000 
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }
    }
}
