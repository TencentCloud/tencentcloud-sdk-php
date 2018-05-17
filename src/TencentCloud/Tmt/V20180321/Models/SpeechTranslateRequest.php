<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSessionUuid() 获取一段完整的语音对应一个SessionUuid
 * @method void setSessionUuid(string $SessionUuid) 设置一段完整的语音对应一个SessionUuid
 * @method string getSource() 获取音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setSource(string $Source) 设置音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method string getTarget() 获取翻译目标语⾔言类型 ，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setTarget(string $Target) 设置翻译目标语⾔言类型 ，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method integer getAudioFormat() 获取pcm : 146   amr : 33554432   mp3 : 83886080
 * @method void setAudioFormat(integer $AudioFormat) 设置pcm : 146   amr : 33554432   mp3 : 83886080
 * @method integer getSeq() 获取语音分片后的第几片
 * @method void setSeq(integer $Seq) 设置语音分片后的第几片
 * @method integer getIsEnd() 获取是否最后一片
 * @method void setIsEnd(integer $IsEnd) 设置是否最后一片
 * @method string getData() 获取语音分片内容的base64字符串
 * @method void setData(string $Data) 设置语音分片内容的base64字符串
 * @method integer getProjectId() 获取项目id
 * @method void setProjectId(integer $ProjectId) 设置项目id
 */

/**
 *SpeechTranslate请求参数结构体
 */
class SpeechTranslateRequest extends AbstractModel
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
     * @var string 翻译目标语⾔言类型 ，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     */
    public $Target;

    /**
     * @var integer pcm : 146   amr : 33554432   mp3 : 83886080
     */
    public $AudioFormat;

    /**
     * @var integer 语音分片后的第几片
     */
    public $Seq;

    /**
     * @var integer 是否最后一片
     */
    public $IsEnd;

    /**
     * @var string 语音分片内容的base64字符串
     */
    public $Data;

    /**
     * @var integer 项目id
     */
    public $ProjectId;
    /**
     * @param string $SessionUuid 一段完整的语音对应一个SessionUuid
     * @param string $Source 音频中的语言类型，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param string $Target 翻译目标语⾔言类型 ，支持的语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param integer $AudioFormat pcm : 146   amr : 33554432   mp3 : 83886080
     * @param integer $Seq 语音分片后的第几片
     * @param integer $IsEnd 是否最后一片
     * @param string $Data 语音分片内容的base64字符串
     * @param integer $ProjectId 项目id
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
