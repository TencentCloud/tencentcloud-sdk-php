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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NotebookSessionStatement详情。
 *
 * @method integer getCompleted() 获取完成时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompleted(integer $Completed) 设置完成时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStarted() 获取开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStarted(integer $Started) 设置开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProgress() 获取完成进度，百分制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(float $Progress) 设置完成进度，百分制
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatementId() 获取Session Statement唯一标识
 * @method void setStatementId(string $StatementId) 设置Session Statement唯一标识
 * @method string getState() 获取Session Statement状态，包含：waiting（排队中）、running（运行中）、available（正常）、error（异常）、cancelling（取消中）、cancelled（已取消）
 * @method void setState(string $State) 设置Session Statement状态，包含：waiting（排队中）、running（运行中）、available（正常）、error（异常）、cancelling（取消中）、cancelled（已取消）
 * @method StatementOutput getOutPut() 获取Statement输出信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutPut(StatementOutput $OutPut) 设置Statement输出信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchId() 获取批任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchId(string $BatchId) 设置批任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取运行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置运行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class NotebookSessionStatementInfo extends AbstractModel
{
    /**
     * @var integer 完成时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Completed;

    /**
     * @var integer 开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Started;

    /**
     * @var float 完成进度，百分制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var string Session Statement唯一标识
     */
    public $StatementId;

    /**
     * @var string Session Statement状态，包含：waiting（排队中）、running（运行中）、available（正常）、error（异常）、cancelling（取消中）、cancelled（已取消）
     */
    public $State;

    /**
     * @var StatementOutput Statement输出信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutPut;

    /**
     * @var string 批任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchId;

    /**
     * @var string 运行语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @param integer $Completed 完成时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Started 开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Progress 完成进度，百分制
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatementId Session Statement唯一标识
     * @param string $State Session Statement状态，包含：waiting（排队中）、running（运行中）、available（正常）、error（异常）、cancelling（取消中）、cancelled（已取消）
     * @param StatementOutput $OutPut Statement输出信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchId 批任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 运行语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID
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
        if (array_key_exists("Completed",$param) and $param["Completed"] !== null) {
            $this->Completed = $param["Completed"];
        }

        if (array_key_exists("Started",$param) and $param["Started"] !== null) {
            $this->Started = $param["Started"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StatementId",$param) and $param["StatementId"] !== null) {
            $this->StatementId = $param["StatementId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("OutPut",$param) and $param["OutPut"] !== null) {
            $this->OutPut = new StatementOutput();
            $this->OutPut->deserialize($param["OutPut"]);
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
