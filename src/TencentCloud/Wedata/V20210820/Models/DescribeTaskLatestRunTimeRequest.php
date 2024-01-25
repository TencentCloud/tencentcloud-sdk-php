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
 * DescribeTaskLatestRunTime请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getBaseTime() 获取基准时间，非必填，如果不填，自动取当前的事件，如果要填，格式为 yyyy-MM-dd HH:mm:ss，如果格式不符合要求，则默认取当前时间
 * @method void setBaseTime(string $BaseTime) 设置基准时间，非必填，如果不填，自动取当前的事件，如果要填，格式为 yyyy-MM-dd HH:mm:ss，如果格式不符合要求，则默认取当前时间
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getCycleType() 获取周期类型
 * @method void setCycleType(string $CycleType) 设置周期类型
 * @method string getSelfDepend() 获取自依赖类型
 * @method void setSelfDepend(string $SelfDepend) 设置自依赖类型
 * @method string getTaskAction() 获取TaskAction
 * @method void setTaskAction(string $TaskAction) 设置TaskAction
 * @method integer getCycleStep() 获取循环步长
 * @method void setCycleStep(integer $CycleStep) 设置循环步长
 * @method integer getDelayTime() 获取延迟时间
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间
 * @method string getCronTabExpression() 获取Cron表达式
 * @method void setCronTabExpression(string $CronTabExpression) 设置Cron表达式
 * @method string getExecutionStartTime() 获取小时周期在一天中的开始时间
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置小时周期在一天中的开始时间
 * @method string getExecutionEndTime() 获取小时周期在一天中的结束时间
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置小时周期在一天中的结束时间
 */
class DescribeTaskLatestRunTimeRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 基准时间，非必填，如果不填，自动取当前的事件，如果要填，格式为 yyyy-MM-dd HH:mm:ss，如果格式不符合要求，则默认取当前时间
     */
    public $BaseTime;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 周期类型
     */
    public $CycleType;

    /**
     * @var string 自依赖类型
     */
    public $SelfDepend;

    /**
     * @var string TaskAction
     */
    public $TaskAction;

    /**
     * @var integer 循环步长
     */
    public $CycleStep;

    /**
     * @var integer 延迟时间
     */
    public $DelayTime;

    /**
     * @var string Cron表达式
     */
    public $CronTabExpression;

    /**
     * @var string 小时周期在一天中的开始时间
     */
    public $ExecutionStartTime;

    /**
     * @var string 小时周期在一天中的结束时间
     */
    public $ExecutionEndTime;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TaskId 任务ID
     * @param string $BaseTime 基准时间，非必填，如果不填，自动取当前的事件，如果要填，格式为 yyyy-MM-dd HH:mm:ss，如果格式不符合要求，则默认取当前时间
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $CycleType 周期类型
     * @param string $SelfDepend 自依赖类型
     * @param string $TaskAction TaskAction
     * @param integer $CycleStep 循环步长
     * @param integer $DelayTime 延迟时间
     * @param string $CronTabExpression Cron表达式
     * @param string $ExecutionStartTime 小时周期在一天中的开始时间
     * @param string $ExecutionEndTime 小时周期在一天中的结束时间
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BaseTime",$param) and $param["BaseTime"] !== null) {
            $this->BaseTime = $param["BaseTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CronTabExpression",$param) and $param["CronTabExpression"] !== null) {
            $this->CronTabExpression = $param["CronTabExpression"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }
    }
}
