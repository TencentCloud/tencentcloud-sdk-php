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
 * 指定时间窗口实例耗时排行
 *
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleUnit() 获取任务周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleUnit(string $CycleUnit) 设置任务周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunTime() 获取耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunTime(integer $RunTime) 设置耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurRunTime() 获取实例运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurRunTime(string $CurRunTime) 设置实例运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitScheduleTime() 获取等待调度耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitScheduleTime(integer $WaitScheduleTime) 设置等待调度耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuntimeInstanceCntTop extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var string 任务周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleUnit;

    /**
     * @var string 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer 耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunTime;

    /**
     * @var string 实例运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurRunTime;

    /**
     * @var integer 等待调度耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitScheduleTime;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleUnit 任务周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunTime 耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurRunTime 实例运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitScheduleTime 等待调度耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("RunTime",$param) and $param["RunTime"] !== null) {
            $this->RunTime = $param["RunTime"];
        }

        if (array_key_exists("CurRunTime",$param) and $param["CurRunTime"] !== null) {
            $this->CurRunTime = $param["CurRunTime"];
        }

        if (array_key_exists("WaitScheduleTime",$param) and $param["WaitScheduleTime"] !== null) {
            $this->WaitScheduleTime = $param["WaitScheduleTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
