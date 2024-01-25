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
 * DescribeTaskParentRunTime请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getParentConfigs() 获取父任务配置
 * @method void setParentConfigs(array $ParentConfigs) 设置父任务配置
 * @method string getCycleType() 获取周期类型
 * @method void setCycleType(string $CycleType) 设置周期类型
 * @method integer getCycleStep() 获取周期步长
 * @method void setCycleStep(integer $CycleStep) 设置周期步长
 * @method string getCurRunDate() 获取当前任务的数据时间，格式为 yyyy-MM-dd HH:mm:ss
 * @method void setCurRunDate(string $CurRunDate) 设置当前任务的数据时间，格式为 yyyy-MM-dd HH:mm:ss
 * @method integer getDelayTime() 获取延迟时间
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间
 * @method string getCrontabExpression() 获取Cron表达式
 * @method void setCrontabExpression(string $CrontabExpression) 设置Cron表达式
 * @method string getInstanceInitStrategy() 获取初始化策略
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置初始化策略
 * @method string getTaskAction() 获取任务Action
 * @method void setTaskAction(string $TaskAction) 设置任务Action
 * @method string getExecutionStartTime() 获取周期类型为小时的时候需要设置当天的开始时间
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置周期类型为小时的时候需要设置当天的开始时间
 * @method string getExecutionEndTime() 获取周期类型为小时的时候需要设置当天的结束时间
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置周期类型为小时的时候需要设置当天的结束时间
 */
class DescribeTaskParentRunTimeRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 父任务配置
     */
    public $ParentConfigs;

    /**
     * @var string 周期类型
     */
    public $CycleType;

    /**
     * @var integer 周期步长
     */
    public $CycleStep;

    /**
     * @var string 当前任务的数据时间，格式为 yyyy-MM-dd HH:mm:ss
     */
    public $CurRunDate;

    /**
     * @var integer 延迟时间
     */
    public $DelayTime;

    /**
     * @var string Cron表达式
     */
    public $CrontabExpression;

    /**
     * @var string 初始化策略
     */
    public $InstanceInitStrategy;

    /**
     * @var string 任务Action
     */
    public $TaskAction;

    /**
     * @var string 周期类型为小时的时候需要设置当天的开始时间
     */
    public $ExecutionStartTime;

    /**
     * @var string 周期类型为小时的时候需要设置当天的结束时间
     */
    public $ExecutionEndTime;

    /**
     * @param string $ProjectId 项目ID
     * @param array $ParentConfigs 父任务配置
     * @param string $CycleType 周期类型
     * @param integer $CycleStep 周期步长
     * @param string $CurRunDate 当前任务的数据时间，格式为 yyyy-MM-dd HH:mm:ss
     * @param integer $DelayTime 延迟时间
     * @param string $CrontabExpression Cron表达式
     * @param string $InstanceInitStrategy 初始化策略
     * @param string $TaskAction 任务Action
     * @param string $ExecutionStartTime 周期类型为小时的时候需要设置当天的开始时间
     * @param string $ExecutionEndTime 周期类型为小时的时候需要设置当天的结束时间
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

        if (array_key_exists("ParentConfigs",$param) and $param["ParentConfigs"] !== null) {
            $this->ParentConfigs = [];
            foreach ($param["ParentConfigs"] as $key => $value){
                $obj = new TaskParentSchedulerDependency();
                $obj->deserialize($value);
                array_push($this->ParentConfigs, $obj);
            }
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }
    }
}
