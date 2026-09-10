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
 * AI配音任务结果
 *
 * @method string getStatus() 获取<p>任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。</p>
 * @method void setStatus(string $Status) 设置<p>任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。</p>
 * @method string getErrCodeExt() 获取<p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
 * @method void setErrCodeExt(string $ErrCodeExt) 设置<p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method AIDubbingTaskInput getInput() 获取<p>AI配音任务输入。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(AIDubbingTaskInput $Input) 设置<p>AI配音任务输入。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AIDubbingTaskOutput getOutput() 获取<p>AI配音任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(AIDubbingTaskOutput $Output) 设置<p>AI配音任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取<p>任务进度。</p>
 * @method void setProgress(integer $Progress) 设置<p>任务进度。</p>
 * @method string getBeginProcessTime() 获取<p>任务开始执行的时间，采用 ISO 日期格式。</p>
 * @method void setBeginProcessTime(string $BeginProcessTime) 设置<p>任务开始执行的时间，采用 ISO 日期格式。</p>
 * @method string getFinishTime() 获取<p>任务执行完毕的时间，采用 ISO 日期格式。</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>任务执行完毕的时间，采用 ISO 日期格式。</p>
 */
class AIDubbingTaskResult extends AbstractModel
{
    /**
     * @var string <p>任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。</p>
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
     * @var AIDubbingTaskInput <p>AI配音任务输入。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @var AIDubbingTaskOutput <p>AI配音任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var integer <p>任务进度。</p>
     */
    public $Progress;

    /**
     * @var string <p>任务开始执行的时间，采用 ISO 日期格式。</p>
     */
    public $BeginProcessTime;

    /**
     * @var string <p>任务执行完毕的时间，采用 ISO 日期格式。</p>
     */
    public $FinishTime;

    /**
     * @param string $Status <p>任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。</p>
     * @param string $ErrCodeExt <p>错误码，空字符串表示成功，其他值表示失败，取值请参考 <a href="https://cloud.tencent.com/document/product/862/50369#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81">媒体处理类错误码</a> 列表。</p>
     * @param string $Message <p>错误信息。</p>
     * @param AIDubbingTaskInput $Input <p>AI配音任务输入。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AIDubbingTaskOutput $Output <p>AI配音任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress <p>任务进度。</p>
     * @param string $BeginProcessTime <p>任务开始执行的时间，采用 ISO 日期格式。</p>
     * @param string $FinishTime <p>任务执行完毕的时间，采用 ISO 日期格式。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AIDubbingTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AIDubbingTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
