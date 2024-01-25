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
 * UpdateBatchTaskSchedule请求参数结构体
 *
 * @method array getTaskIds() 获取待更新的任务ID
 * @method void setTaskIds(array $TaskIds) 设置待更新的任务ID
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getSelfDepend() 获取任务依赖
 * @method void setSelfDepend(string $SelfDepend) 设置任务依赖
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getDelayTime() 获取延迟时间
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间
 * @method string getTaskAction() 获取指定运行时间
 * @method void setTaskAction(string $TaskAction) 设置指定运行时间
 * @method string getCycleType() 获取调度周期时间单位
 * @method void setCycleType(string $CycleType) 设置调度周期时间单位
 * @method integer getCycleStep() 获取调度周期
 * @method void setCycleStep(integer $CycleStep) 设置调度周期
 * @method string getCrontabExpression() 获取Crontab表达式
 * @method void setCrontabExpression(string $CrontabExpression) 设置Crontab表达式
 * @method string getExecutionStartTime() 获取执行时间左闭区间
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间左闭区间
 * @method string getExecutionEndTime() 获取执行时间右闭区间
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间右闭区间
 */
class UpdateBatchTaskScheduleRequest extends AbstractModel
{
    /**
     * @var array 待更新的任务ID
     */
    public $TaskIds;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 任务依赖
     */
    public $SelfDepend;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 延迟时间
     */
    public $DelayTime;

    /**
     * @var string 指定运行时间
     */
    public $TaskAction;

    /**
     * @var string 调度周期时间单位
     */
    public $CycleType;

    /**
     * @var integer 调度周期
     */
    public $CycleStep;

    /**
     * @var string Crontab表达式
     */
    public $CrontabExpression;

    /**
     * @var string 执行时间左闭区间
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行时间右闭区间
     */
    public $ExecutionEndTime;

    /**
     * @param array $TaskIds 待更新的任务ID
     * @param string $ProjectId 项目ID
     * @param string $SelfDepend 任务依赖
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $DelayTime 延迟时间
     * @param string $TaskAction 指定运行时间
     * @param string $CycleType 调度周期时间单位
     * @param integer $CycleStep 调度周期
     * @param string $CrontabExpression Crontab表达式
     * @param string $ExecutionStartTime 执行时间左闭区间
     * @param string $ExecutionEndTime 执行时间右闭区间
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }
    }
}
