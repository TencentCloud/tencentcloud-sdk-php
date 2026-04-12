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
 * 智能字幕输出信息
 *
 * @method integer getProgress() 获取<p>任务进度。</p>
 * @method void setProgress(integer $Progress) 设置<p>任务进度。</p>
 * @method string getStatus() 获取<p>任务状态，有 PROCESSING，SUCCESS，WAITING 和 FAIL 四种。</p>
 * @method void setStatus(string $Status) 设置<p>任务状态，有 PROCESSING，SUCCESS，WAITING 和 FAIL 四种。</p>
 * @method string getErrCodeExt() 获取<p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
 * @method void setErrCodeExt(string $ErrCodeExt) 设置<p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method SmartSubtitleTaskTransTextResultOutput getTransTextTask() 获取<p>翻译任务输出信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransTextTask(SmartSubtitleTaskTransTextResultOutput $TransTextTask) 设置<p>翻译任务输出信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartSubtitleTaskAsrFullTextResultOutput getAsrFullTextTask() 获取<p>语音全文识别任务输出信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrFullTextTask(SmartSubtitleTaskAsrFullTextResultOutput $AsrFullTextTask) 设置<p>语音全文识别任务输出信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartSubtitleTaskBatchOutput extends AbstractModel
{
    /**
     * @var integer <p>任务进度。</p>
     */
    public $Progress;

    /**
     * @var string <p>任务状态，有 PROCESSING，SUCCESS，WAITING 和 FAIL 四种。</p>
     */
    public $Status;

    /**
     * @var string <p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
     */
    public $ErrCodeExt;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @var SmartSubtitleTaskTransTextResultOutput <p>翻译任务输出信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransTextTask;

    /**
     * @var SmartSubtitleTaskAsrFullTextResultOutput <p>语音全文识别任务输出信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrFullTextTask;

    /**
     * @param integer $Progress <p>任务进度。</p>
     * @param string $Status <p>任务状态，有 PROCESSING，SUCCESS，WAITING 和 FAIL 四种。</p>
     * @param string $ErrCodeExt <p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
     * @param string $Message <p>错误信息。</p>
     * @param SmartSubtitleTaskTransTextResultOutput $TransTextTask <p>翻译任务输出信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartSubtitleTaskAsrFullTextResultOutput $AsrFullTextTask <p>语音全文识别任务输出信息。</p>
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
        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("TransTextTask",$param) and $param["TransTextTask"] !== null) {
            $this->TransTextTask = new SmartSubtitleTaskTransTextResultOutput();
            $this->TransTextTask->deserialize($param["TransTextTask"]);
        }

        if (array_key_exists("AsrFullTextTask",$param) and $param["AsrFullTextTask"] !== null) {
            $this->AsrFullTextTask = new SmartSubtitleTaskAsrFullTextResultOutput();
            $this->AsrFullTextTask->deserialize($param["AsrFullTextTask"]);
        }
    }
}
