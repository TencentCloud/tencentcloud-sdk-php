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
 * DetectEnvAndSoundQuality请求参数结构体
 *
 * @method string getTextId() 获取标注文本信息 ID
 * @method void setTextId(string $TextId) 设置标注文本信息 ID
 * @method string getAudioData() 获取语音数据 要使用base64编码(采用python语言时注意读取文件时需要转成base64字符串编码，例如：str(base64.b64encode(open("input.aac", mode="rb").read()), encoding='utf-8') )。
 * @method void setAudioData(string $AudioData) 设置语音数据 要使用base64编码(采用python语言时注意读取文件时需要转成base64字符串编码，例如：str(base64.b64encode(open("input.aac", mode="rb").read()), encoding='utf-8') )。
 * @method string getCodec() 获取音频格式，音频类型(wav,mp3,aac,m4a)
 * @method void setCodec(string $Codec) 设置音频格式，音频类型(wav,mp3,aac,m4a)
 * @method integer getTypeId() 获取1:环境检测 2:音质检测
 * @method void setTypeId(integer $TypeId) 设置1:环境检测 2:音质检测
 * @method integer getSampleRate() 获取音频采样率：

16000：16k（默认）
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率：

16000：16k（默认）
 */
class DetectEnvAndSoundQualityRequest extends AbstractModel
{
    /**
     * @var string 标注文本信息 ID
     */
    public $TextId;

    /**
     * @var string 语音数据 要使用base64编码(采用python语言时注意读取文件时需要转成base64字符串编码，例如：str(base64.b64encode(open("input.aac", mode="rb").read()), encoding='utf-8') )。
     */
    public $AudioData;

    /**
     * @var string 音频格式，音频类型(wav,mp3,aac,m4a)
     */
    public $Codec;

    /**
     * @var integer 1:环境检测 2:音质检测
     */
    public $TypeId;

    /**
     * @var integer 音频采样率：

16000：16k（默认）
     */
    public $SampleRate;

    /**
     * @param string $TextId 标注文本信息 ID
     * @param string $AudioData 语音数据 要使用base64编码(采用python语言时注意读取文件时需要转成base64字符串编码，例如：str(base64.b64encode(open("input.aac", mode="rb").read()), encoding='utf-8') )。
     * @param string $Codec 音频格式，音频类型(wav,mp3,aac,m4a)
     * @param integer $TypeId 1:环境检测 2:音质检测
     * @param integer $SampleRate 音频采样率：

16000：16k（默认）
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
        if (array_key_exists("TextId",$param) and $param["TextId"] !== null) {
            $this->TextId = $param["TextId"];
        }

        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }
    }
}
