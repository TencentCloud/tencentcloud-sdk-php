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
namespace TencentCloud\Tsi\V20210325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TongChuanRecognize请求参数结构体
 *
 * @method string getSessionUuid() 获取一段完整的语音对应一个SessionUuid
 * @method void setSessionUuid(string $SessionUuid) 设置一段完整的语音对应一个SessionUuid
 * @method string getSource() 获取音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setSource(string $Source) 设置音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method string getTarget() 获取翻译目标语言类型，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setTarget(string $Target) 设置翻译目标语言类型，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method integer getAudioFormat() 获取语音编码类型，1-pcm
 * @method void setAudioFormat(integer $AudioFormat) 设置语音编码类型，1-pcm
 * @method integer getSeq() 获取语音分片的序号，从0开始
 * @method void setSeq(integer $Seq) 设置语音分片的序号，从0开始
 * @method integer getUtc() 获取语音开始的时间戳
 * @method void setUtc(integer $Utc) 设置语音开始的时间戳
 * @method integer getIsEnd() 获取是否最后一片语音分片，0-否，1-是
 * @method void setIsEnd(integer $IsEnd) 设置是否最后一片语音分片，0-否，1-是
 * @method integer getTranslateTime() 获取翻译时机，0 -不翻译 1 - 句子结束时翻译，2 - 句子实时翻译
 * @method void setTranslateTime(integer $TranslateTime) 设置翻译时机，0 -不翻译 1 - 句子结束时翻译，2 - 句子实时翻译
 * @method string getData() 获取语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
 * @method void setData(string $Data) 设置语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
 */
class TongChuanRecognizeRequest extends AbstractModel
{
    /**
     * @var string 一段完整的语音对应一个SessionUuid
     */
    public $SessionUuid;

    /**
     * @var string 音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     */
    public $Source;

    /**
     * @var string 翻译目标语言类型，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
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
     * @var integer 翻译时机，0 -不翻译 1 - 句子结束时翻译，2 - 句子实时翻译
     */
    public $TranslateTime;

    /**
     * @var string 语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
     */
    public $Data;

    /**
     * @param string $SessionUuid 一段完整的语音对应一个SessionUuid
     * @param string $Source 音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param string $Target 翻译目标语言类型，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param integer $AudioFormat 语音编码类型，1-pcm
     * @param integer $Seq 语音分片的序号，从0开始
     * @param integer $Utc 语音开始的时间戳
     * @param integer $IsEnd 是否最后一片语音分片，0-否，1-是
     * @param integer $TranslateTime 翻译时机，0 -不翻译 1 - 句子结束时翻译，2 - 句子实时翻译
     * @param string $Data 语音分片内容进行 Base64 编码后的字符串。音频内容需包含有效并可识别的文本信息。
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
    }
}
