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
 * DetectEnvAndSoundQuality请求参数结构体
 *
 * @method string getTextId() 获取<p>标注文本信息 ID</p>
 * @method void setTextId(string $TextId) 设置<p>标注文本信息 ID</p>
 * @method string getAudioData() 获取<p>语音数据 要使用base64编码(采用python语言时注意读取文件时需要转成base64字符串编码，例如：str(base64.b64encode(open(&quot;input.aac&quot;, mode=&quot;rb&quot;).read()), encoding=&#39;utf-8&#39;) )。</p>
 * @method void setAudioData(string $AudioData) 设置<p>语音数据 要使用base64编码(采用python语言时注意读取文件时需要转成base64字符串编码，例如：str(base64.b64encode(open(&quot;input.aac&quot;, mode=&quot;rb&quot;).read()), encoding=&#39;utf-8&#39;) )。</p>
 * @method integer getTypeId() 获取<p>1:环境检测 2:音质检测</p>
 * @method void setTypeId(integer $TypeId) 设置<p>1:环境检测 2:音质检测</p>
 * @method string getCodec() 获取<p>音频格式，音频类型(wav,mp3,aac,m4a)</p>
 * @method void setCodec(string $Codec) 设置<p>音频格式，音频类型(wav,mp3,aac,m4a)</p>
 * @method integer getSampleRate() 获取<p>音频采样率。<br>16000：16k（默认）；<br>24000：24k（仅一句话声音复刻支持）；<br>48000：48k（仅一句话声音复刻支持）。</p>
 * @method void setSampleRate(integer $SampleRate) 设置<p>音频采样率。<br>16000：16k（默认）；<br>24000：24k（仅一句话声音复刻支持）；<br>48000：48k（仅一句话声音复刻支持）。</p>
 * @method integer getTaskType() 获取<p>复刻类型。5 - 一句话声音复刻。</p>
 * @method void setTaskType(integer $TaskType) 设置<p>复刻类型。5 - 一句话声音复刻。</p>
 */
class DetectEnvAndSoundQualityRequest extends AbstractModel
{
    /**
     * @var string <p>标注文本信息 ID</p>
     */
    public $TextId;

    /**
     * @var string <p>语音数据 要使用base64编码(采用python语言时注意读取文件时需要转成base64字符串编码，例如：str(base64.b64encode(open(&quot;input.aac&quot;, mode=&quot;rb&quot;).read()), encoding=&#39;utf-8&#39;) )。</p>
     */
    public $AudioData;

    /**
     * @var integer <p>1:环境检测 2:音质检测</p>
     */
    public $TypeId;

    /**
     * @var string <p>音频格式，音频类型(wav,mp3,aac,m4a)</p>
     */
    public $Codec;

    /**
     * @var integer <p>音频采样率。<br>16000：16k（默认）；<br>24000：24k（仅一句话声音复刻支持）；<br>48000：48k（仅一句话声音复刻支持）。</p>
     */
    public $SampleRate;

    /**
     * @var integer <p>复刻类型。5 - 一句话声音复刻。</p>
     */
    public $TaskType;

    /**
     * @param string $TextId <p>标注文本信息 ID</p>
     * @param string $AudioData <p>语音数据 要使用base64编码(采用python语言时注意读取文件时需要转成base64字符串编码，例如：str(base64.b64encode(open(&quot;input.aac&quot;, mode=&quot;rb&quot;).read()), encoding=&#39;utf-8&#39;) )。</p>
     * @param integer $TypeId <p>1:环境检测 2:音质检测</p>
     * @param string $Codec <p>音频格式，音频类型(wav,mp3,aac,m4a)</p>
     * @param integer $SampleRate <p>音频采样率。<br>16000：16k（默认）；<br>24000：24k（仅一句话声音复刻支持）；<br>48000：48k（仅一句话声音复刻支持）。</p>
     * @param integer $TaskType <p>复刻类型。5 - 一句话声音复刻。</p>
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

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
