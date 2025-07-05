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
 * TongChuanRecognize请求参数结构体
 *
 * @method string getSessionUuid() 获取一段完整的语音对应一个SessionUuid
 * @method void setSessionUuid(string $SessionUuid) 设置一段完整的语音对应一个SessionUuid
 * @method string getSource() 获取源语言，支持：
zh：中文
en：英语
ja：日语
ko：韩语
yue：粤语
 * @method void setSource(string $Source) 设置源语言，支持：
zh：中文
en：英语
ja：日语
ko：韩语
yue：粤语
 * @method string getTarget() 获取目标语言，各源语言的目标语言支持列表如下
<li>zh（中文）：en（英语）、ja（日语）、ko（韩语）、yue（粤语）</li>
<li>en（英语）：zh（中文）</li>
<li>ja（日语）：zh（中文）</li>
<li>ko（韩语）：zh（中文）</li>
<li>yue（粤语）：zh（中文）</li>
 * @method void setTarget(string $Target) 设置目标语言，各源语言的目标语言支持列表如下
<li>zh（中文）：en（英语）、ja（日语）、ko（韩语）、yue（粤语）</li>
<li>en（英语）：zh（中文）</li>
<li>ja（日语）：zh（中文）</li>
<li>ko（韩语）：zh（中文）</li>
<li>yue（粤语）：zh（中文）</li>
 * @method integer getAudioFormat() 获取语音编码类型，1-pcm
 * @method void setAudioFormat(integer $AudioFormat) 设置语音编码类型，1-pcm
 * @method integer getSeq() 获取语音分片的序号，从0开始
 * @method void setSeq(integer $Seq) 设置语音分片的序号，从0开始
 * @method integer getUtc() 获取语音开始的时间戳
 * @method void setUtc(integer $Utc) 设置语音开始的时间戳
 * @method integer getIsEnd() 获取是否最后一片语音分片，0-否，1-是
 * @method void setIsEnd(integer $IsEnd) 设置是否最后一片语音分片，0-否，1-是
 * @method integer getTranslateTime() 获取翻译时机，0-不翻译 2-句子实时翻译
 * @method void setTranslateTime(integer $TranslateTime) 设置翻译时机，0-不翻译 2-句子实时翻译
 * @method string getData() 获取语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
 * @method void setData(string $Data) 设置语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
 * @method TTS getTTS() 获取TTS播报控制参数	
 * @method void setTTS(TTS $TTS) 设置TTS播报控制参数	
 */
class TongChuanRecognizeRequest extends AbstractModel
{
    /**
     * @var string 一段完整的语音对应一个SessionUuid
     */
    public $SessionUuid;

    /**
     * @var string 源语言，支持：
zh：中文
en：英语
ja：日语
ko：韩语
yue：粤语
     */
    public $Source;

    /**
     * @var string 目标语言，各源语言的目标语言支持列表如下
<li>zh（中文）：en（英语）、ja（日语）、ko（韩语）、yue（粤语）</li>
<li>en（英语）：zh（中文）</li>
<li>ja（日语）：zh（中文）</li>
<li>ko（韩语）：zh（中文）</li>
<li>yue（粤语）：zh（中文）</li>
     */
    public $Target;

    /**
     * @var integer 语音编码类型，1-pcm
     */
    public $AudioFormat;

    /**
     * @var integer 语音分片的序号，从0开始
     */
    public $Seq;

    /**
     * @var integer 语音开始的时间戳
     */
    public $Utc;

    /**
     * @var integer 是否最后一片语音分片，0-否，1-是
     */
    public $IsEnd;

    /**
     * @var integer 翻译时机，0-不翻译 2-句子实时翻译
     */
    public $TranslateTime;

    /**
     * @var string 语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
     */
    public $Data;

    /**
     * @var TTS TTS播报控制参数	
     */
    public $TTS;

    /**
     * @param string $SessionUuid 一段完整的语音对应一个SessionUuid
     * @param string $Source 源语言，支持：
zh：中文
en：英语
ja：日语
ko：韩语
yue：粤语
     * @param string $Target 目标语言，各源语言的目标语言支持列表如下
<li>zh（中文）：en（英语）、ja（日语）、ko（韩语）、yue（粤语）</li>
<li>en（英语）：zh（中文）</li>
<li>ja（日语）：zh（中文）</li>
<li>ko（韩语）：zh（中文）</li>
<li>yue（粤语）：zh（中文）</li>
     * @param integer $AudioFormat 语音编码类型，1-pcm
     * @param integer $Seq 语音分片的序号，从0开始
     * @param integer $Utc 语音开始的时间戳
     * @param integer $IsEnd 是否最后一片语音分片，0-否，1-是
     * @param integer $TranslateTime 翻译时机，0-不翻译 2-句子实时翻译
     * @param string $Data 语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
     * @param TTS $TTS TTS播报控制参数	
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
        if (array_key_exists("SessionUuid",$param) and $param["SessionUuid"] !== null) {
            $this->SessionUuid = $param["SessionUuid"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("AudioFormat",$param) and $param["AudioFormat"] !== null) {
            $this->AudioFormat = $param["AudioFormat"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("Utc",$param) and $param["Utc"] !== null) {
            $this->Utc = $param["Utc"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("TranslateTime",$param) and $param["TranslateTime"] !== null) {
            $this->TranslateTime = $param["TranslateTime"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("TTS",$param) and $param["TTS"] !== null) {
            $this->TTS = new TTS();
            $this->TTS->deserialize($param["TTS"]);
        }
    }
}
