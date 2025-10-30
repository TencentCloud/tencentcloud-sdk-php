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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息详情
 *
 * @method integer getTaskId() 获取任务Id
 * @method void setTaskId(integer $TaskId) 设置任务Id
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method integer getProjectId() 获取项目Id
 * @method void setProjectId(integer $ProjectId) 设置项目Id
 * @method float getProgress() 获取任务进度
 * @method void setProgress(float $Progress) 设置任务进度
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getResult() 获取任务状态
 * @method void setResult(integer $Result) 设置任务状态
 * @method string getOperatorUin() 获取操作者用户uin
 * @method void setOperatorUin(string $OperatorUin) 设置操作者用户uin
 */
class TaskInfoDetail extends AbstractModel
{
    /**
     * @var integer 任务Id
     */
    public $TaskId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var integer 项目Id
     */
    public $ProjectId;

    /**
     * @var float 任务进度
     */
    public $Progress;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 任务状态
     */
    public $Result;

    /**
     * @var string 操作者用户uin
     */
    public $OperatorUin;

    /**
     * @param integer $TaskId 任务Id
     * @param string $StartTime 开始时间
     * @param string $TaskType 任务类型
     * @param string $InstanceName 实例名称
     * @param string $InstanceId 实例Id
     * @param integer $ProjectId 项目Id
     * @param float $Progress 任务进度
     * @param string $EndTime 结束时间
     * @param integer $Result 任务状态
     * @param string $OperatorUin 操作者用户uin
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }
    }
}
