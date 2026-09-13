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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内嵌工作流迭代中的任务运行简要信息
 *
 * @method string getWorkflowTaskRunId() 获取<p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowTaskRunId(string $WorkflowTaskRunId) 设置<p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIterationIndex() 获取<p>迭代序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIterationIndex(string $IterationIndex) 设置<p>迭代序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunStartTime() 获取<p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunStartTime(string $RunStartTime) 设置<p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunEndTime() 获取<p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunEndTime(string $RunEndTime) 设置<p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunState() 获取<p>运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunState(string $RunState) 设置<p>运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunCostTime() 获取<p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunCostTime(string $RunCostTime) 设置<p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskParams() 获取<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskParams(string $TaskParams) 设置<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeString() 获取<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeString(string $ErrorCodeString) 设置<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InnerWorkflowTaskRunIterationBrief extends AbstractModel
{
    /**
     * @var string <p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowTaskRunId;

    /**
     * @var string <p>迭代序号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IterationIndex;

    /**
     * @var string <p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunStartTime;

    /**
     * @var string <p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunEndTime;

    /**
     * @var string <p>运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunState;

    /**
     * @var string <p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunCostTime;

    /**
     * @var string <p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskParams;

    /**
     * @var string <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeString;

    /**
     * @param string $WorkflowTaskRunId <p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IterationIndex <p>迭代序号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunStartTime <p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunEndTime <p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunState <p>运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunCostTime <p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskParams <p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeString <p>错误码</p>
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
        if (array_key_exists("WorkflowTaskRunId",$param) and $param["WorkflowTaskRunId"] !== null) {
            $this->WorkflowTaskRunId = $param["WorkflowTaskRunId"];
        }

        if (array_key_exists("IterationIndex",$param) and $param["IterationIndex"] !== null) {
            $this->IterationIndex = $param["IterationIndex"];
        }

        if (array_key_exists("RunStartTime",$param) and $param["RunStartTime"] !== null) {
            $this->RunStartTime = $param["RunStartTime"];
        }

        if (array_key_exists("RunEndTime",$param) and $param["RunEndTime"] !== null) {
            $this->RunEndTime = $param["RunEndTime"];
        }

        if (array_key_exists("RunState",$param) and $param["RunState"] !== null) {
            $this->RunState = $param["RunState"];
        }

        if (array_key_exists("RunCostTime",$param) and $param["RunCostTime"] !== null) {
            $this->RunCostTime = $param["RunCostTime"];
        }

        if (array_key_exists("TaskParams",$param) and $param["TaskParams"] !== null) {
            $this->TaskParams = $param["TaskParams"];
        }

        if (array_key_exists("ErrorCodeString",$param) and $param["ErrorCodeString"] !== null) {
            $this->ErrorCodeString = $param["ErrorCodeString"];
        }
    }
}
