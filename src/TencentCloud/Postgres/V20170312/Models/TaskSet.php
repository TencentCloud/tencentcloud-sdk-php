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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务列表信息
 *
 * @method integer getTaskId() 获取任务ID。
 * @method void setTaskId(integer $TaskId) 设置任务ID。
 * @method string getTaskType() 获取任务的类型。
 * @method void setTaskType(string $TaskType) 设置任务的类型。
 * @method string getDBInstanceId() 获取任务实例的实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置任务实例的实例ID。
 * @method string getStartTime() 获取任务的开始时间。
 * @method void setStartTime(string $StartTime) 设置任务的开始时间。
 * @method string getEndTime() 获取任务的结束时间。
 * @method void setEndTime(string $EndTime) 设置任务的结束时间。
 * @method string getStatus() 获取任务的运行状态，包括Running,Success,WaitSwitch,Fail,Pause。
 * @method void setStatus(string $Status) 设置任务的运行状态，包括Running,Success,WaitSwitch,Fail,Pause。
 * @method integer getProgress() 获取任务的执行进度，取值范围0-100。
 * @method void setProgress(integer $Progress) 设置任务的执行进度，取值范围0-100。
 * @method TaskDetail getTaskDetail() 获取任务的详情信息
 * @method void setTaskDetail(TaskDetail $TaskDetail) 设置任务的详情信息
 */
class TaskSet extends AbstractModel
{
    /**
     * @var integer 任务ID。
     */
    public $TaskId;

    /**
     * @var string 任务的类型。
     */
    public $TaskType;

    /**
     * @var string 任务实例的实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 任务的开始时间。
     */
    public $StartTime;

    /**
     * @var string 任务的结束时间。
     */
    public $EndTime;

    /**
     * @var string 任务的运行状态，包括Running,Success,WaitSwitch,Fail,Pause。
     */
    public $Status;

    /**
     * @var integer 任务的执行进度，取值范围0-100。
     */
    public $Progress;

    /**
     * @var TaskDetail 任务的详情信息
     */
    public $TaskDetail;

    /**
     * @param integer $TaskId 任务ID。
     * @param string $TaskType 任务的类型。
     * @param string $DBInstanceId 任务实例的实例ID。
     * @param string $StartTime 任务的开始时间。
     * @param string $EndTime 任务的结束时间。
     * @param string $Status 任务的运行状态，包括Running,Success,WaitSwitch,Fail,Pause。
     * @param integer $Progress 任务的执行进度，取值范围0-100。
     * @param TaskDetail $TaskDetail 任务的详情信息
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TaskDetail",$param) and $param["TaskDetail"] !== null) {
            $this->TaskDetail = new TaskDetail();
            $this->TaskDetail->deserialize($param["TaskDetail"]);
        }
    }
}
