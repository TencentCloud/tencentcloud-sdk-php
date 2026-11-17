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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * [获取录音识别结果的返回参数](https://cloud.tencent.com/document/product/1093/37822#3.-.E8.BE.93.E5.87.BA.E5.8F.82.E6.95.B0)
 *
 * @method integer getTaskId() 获取<p>任务标识。注意：TaskId数据类型为uint64。</p>
 * @method void setTaskId(integer $TaskId) 设置<p>任务标识。注意：TaskId数据类型为uint64。</p>
 * @method integer getStatus() 获取<p>任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。</p>
 * @method void setStatus(integer $Status) 设置<p>任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。</p>
 * @method string getStatusStr() 获取<p>任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。</p>
 * @method void setStatusStr(string $StatusStr) 设置<p>任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。</p>
 * @method string getResult() 获取<p>识别结果。</p>
 * @method void setResult(string $Result) 设置<p>识别结果。</p>
 * @method string getErrorMsg() 获取<p>失败原因说明。</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>失败原因说明。</p>
 * @method array getResultDetail() 获取<p>识别结果详情，包含每个句子中的词时间偏移，一般用于生成字幕的场景。(录音识别请求中ResTextFormat=1时该字段不为空)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultDetail(array $ResultDetail) 设置<p>识别结果详情，包含每个句子中的词时间偏移，一般用于生成字幕的场景。(录音识别请求中ResTextFormat=1时该字段不为空)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAudioDuration() 获取<p>音频时长(秒)。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioDuration(float $AudioDuration) 设置<p>音频时长(秒)。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLlmResults() 获取<p>大模型后处理结果</p>
 * @method void setLlmResults(array $LlmResults) 设置<p>大模型后处理结果</p>
 * @method string getSpeakerContextId() 获取<p>说话人上下文 ID</p>
 * @method void setSpeakerContextId(string $SpeakerContextId) 设置<p>说话人上下文 ID</p>
 */
class TaskStatus extends AbstractModel
{
    /**
     * @var integer <p>任务标识。注意：TaskId数据类型为uint64。</p>
     */
    public $TaskId;

    /**
     * @var integer <p>任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。</p>
     */
    public $Status;

    /**
     * @var string <p>任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。</p>
     */
    public $StatusStr;

    /**
     * @var string <p>识别结果。</p>
     */
    public $Result;

    /**
     * @var string <p>失败原因说明。</p>
     */
    public $ErrorMsg;

    /**
     * @var array <p>识别结果详情，包含每个句子中的词时间偏移，一般用于生成字幕的场景。(录音识别请求中ResTextFormat=1时该字段不为空)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultDetail;

    /**
     * @var float <p>音频时长(秒)。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioDuration;

    /**
     * @var array <p>大模型后处理结果</p>
     */
    public $LlmResults;

    /**
     * @var string <p>说话人上下文 ID</p>
     */
    public $SpeakerContextId;

    /**
     * @param integer $TaskId <p>任务标识。注意：TaskId数据类型为uint64。</p>
     * @param integer $Status <p>任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。</p>
     * @param string $StatusStr <p>任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。</p>
     * @param string $Result <p>识别结果。</p>
     * @param string $ErrorMsg <p>失败原因说明。</p>
     * @param array $ResultDetail <p>识别结果详情，包含每个句子中的词时间偏移，一般用于生成字幕的场景。(录音识别请求中ResTextFormat=1时该字段不为空)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AudioDuration <p>音频时长(秒)。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LlmResults <p>大模型后处理结果</p>
     * @param string $SpeakerContextId <p>说话人上下文 ID</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusStr",$param) and $param["StatusStr"] !== null) {
            $this->StatusStr = $param["StatusStr"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("ResultDetail",$param) and $param["ResultDetail"] !== null) {
            $this->ResultDetail = [];
            foreach ($param["ResultDetail"] as $key => $value){
                $obj = new SentenceDetail();
                $obj->deserialize($value);
                array_push($this->ResultDetail, $obj);
            }
        }

        if (array_key_exists("AudioDuration",$param) and $param["AudioDuration"] !== null) {
            $this->AudioDuration = $param["AudioDuration"];
        }

        if (array_key_exists("LlmResults",$param) and $param["LlmResults"] !== null) {
            $this->LlmResults = [];
            foreach ($param["LlmResults"] as $key => $value){
                $obj = new LlmResult();
                $obj->deserialize($value);
                array_push($this->LlmResults, $obj);
            }
        }

        if (array_key_exists("SpeakerContextId",$param) and $param["SpeakerContextId"] !== null) {
            $this->SpeakerContextId = $param["SpeakerContextId"];
        }
    }
}
