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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据导出任务详情
 *
 * @method integer getExportTaskId() 获取导出任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExportTaskId(integer $ExportTaskId) 设置导出任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskType() 获取导出任务类型(1.全部,2.触发行,3.通过行)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(integer $TaskType) 设置导出任务类型(1.全部,2.触发行,3.通过行)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperatorId() 获取任务创建人 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorId(integer $OperatorId) 设置任务创建人 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorName() 获取任务创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorName(string $OperatorName) 设置任务创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取导出状态(1.已提交 2.导出中 3.导出成功 4.导出失败)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置导出状态(1.已提交 2.导出中 3.导出成功 4.导出失败)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerTaskId() 获取调度任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerTaskId(string $SchedulerTaskId) 设置调度任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerCurRunDate() 获取调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerCurRunDate(string $SchedulerCurRunDate) 设置调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilePath() 获取文件相对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePath(string $FilePath) 设置文件相对路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExportTaskInfo extends AbstractModel
{
    /**
     * @var integer 导出任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExportTaskId;

    /**
     * @var integer 导出任务类型(1.全部,2.触发行,3.通过行)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var integer 任务创建人 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorId;

    /**
     * @var string 任务创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorName;

    /**
     * @var string 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 导出状态(1.已提交 2.导出中 3.导出成功 4.导出失败)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 调度任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerTaskId;

    /**
     * @var string 调度时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerCurRunDate;

    /**
     * @var string 文件相对路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePath;

    /**
     * @param integer $ExportTaskId 导出任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskType 导出任务类型(1.全部,2.触发行,3.通过行)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperatorId 任务创建人 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorName 任务创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 导出状态(1.已提交 2.导出中 3.导出成功 4.导出失败)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerTaskId 调度任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerCurRunDate 调度时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilePath 文件相对路径
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
        if (array_key_exists("ExportTaskId",$param) and $param["ExportTaskId"] !== null) {
            $this->ExportTaskId = $param["ExportTaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("OperatorId",$param) and $param["OperatorId"] !== null) {
            $this->OperatorId = $param["OperatorId"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SchedulerTaskId",$param) and $param["SchedulerTaskId"] !== null) {
            $this->SchedulerTaskId = $param["SchedulerTaskId"];
        }

        if (array_key_exists("SchedulerCurRunDate",$param) and $param["SchedulerCurRunDate"] !== null) {
            $this->SchedulerCurRunDate = $param["SchedulerCurRunDate"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }
    }
}
