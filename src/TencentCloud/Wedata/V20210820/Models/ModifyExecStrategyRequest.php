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
 * ModifyExecStrategy请求参数结构体
 *
 * @method integer getRuleGroupId() 获取规则组ID
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组ID
 * @method integer getMonitorType() 获取监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
 * @method void setMonitorType(integer $MonitorType) 设置监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
 * @method string getExecQueue() 获取计算队列
 * @method void setExecQueue(string $ExecQueue) 设置计算队列
 * @method string getExecutorGroupId() 获取执行资源组ID
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组ID
 * @method string getExecutorGroupName() 获取执行资源组名称
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置执行资源组名称
 * @method array getTasks() 获取关联的生产调度任务列表
 * @method void setTasks(array $Tasks) 设置关联的生产调度任务列表
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getStartTime() 获取离线周期模式下,生效日期-开始时间
 * @method void setStartTime(string $StartTime) 设置离线周期模式下,生效日期-开始时间
 * @method string getEndTime() 获取离线周期模式下,生效日期-结束时间
 * @method void setEndTime(string $EndTime) 设置离线周期模式下,生效日期-结束时间
 * @method string getCycleType() 获取离线周期模式下,调度周期 
MINUTE_CYCLE:I,
HOUR_CYCLE:H,
DAY_CYCLE:D,
WEEK_CYCLE:W,
MONTH_CYCLE:M
 * @method void setCycleType(string $CycleType) 设置离线周期模式下,调度周期 
MINUTE_CYCLE:I,
HOUR_CYCLE:H,
DAY_CYCLE:D,
WEEK_CYCLE:W,
MONTH_CYCLE:M
 * @method integer getCycleStep() 获取离线周期模式下,调度步长
 * @method void setCycleStep(integer $CycleStep) 设置离线周期模式下,调度步长
 * @method string getTaskAction() 获取离线周期模式下,指定时间
 * @method void setTaskAction(string $TaskAction) 设置离线周期模式下,指定时间
 * @method integer getDelayTime() 获取延时执行时间，单位分钟，可选: <0-1439
 * @method void setDelayTime(integer $DelayTime) 设置延时执行时间，单位分钟，可选: <0-1439
 * @method string getDatabaseId() 获取数据库Id
 * @method void setDatabaseId(string $DatabaseId) 设置数据库Id
 * @method string getDatasourceId() 获取数据源Id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源Id
 * @method string getTableId() 获取数据表Id
 * @method void setTableId(string $TableId) 设置数据表Id
 */
class ModifyExecStrategyRequest extends AbstractModel
{
    /**
     * @var integer 规则组ID
     */
    public $RuleGroupId;

    /**
     * @var integer 监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
     */
    public $MonitorType;

    /**
     * @var string 计算队列
     */
    public $ExecQueue;

    /**
     * @var string 执行资源组ID
     */
    public $ExecutorGroupId;

    /**
     * @var string 执行资源组名称
     */
    public $ExecutorGroupName;

    /**
     * @var array 关联的生产调度任务列表
     */
    public $Tasks;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 离线周期模式下,生效日期-开始时间
     */
    public $StartTime;

    /**
     * @var string 离线周期模式下,生效日期-结束时间
     */
    public $EndTime;

    /**
     * @var string 离线周期模式下,调度周期 
MINUTE_CYCLE:I,
HOUR_CYCLE:H,
DAY_CYCLE:D,
WEEK_CYCLE:W,
MONTH_CYCLE:M
     */
    public $CycleType;

    /**
     * @var integer 离线周期模式下,调度步长
     */
    public $CycleStep;

    /**
     * @var string 离线周期模式下,指定时间
     */
    public $TaskAction;

    /**
     * @var integer 延时执行时间，单位分钟，可选: <0-1439
     */
    public $DelayTime;

    /**
     * @var string 数据库Id
     */
    public $DatabaseId;

    /**
     * @var string 数据源Id
     */
    public $DatasourceId;

    /**
     * @var string 数据表Id
     */
    public $TableId;

    /**
     * @param integer $RuleGroupId 规则组ID
     * @param integer $MonitorType 监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
     * @param string $ExecQueue 计算队列
     * @param string $ExecutorGroupId 执行资源组ID
     * @param string $ExecutorGroupName 执行资源组名称
     * @param array $Tasks 关联的生产调度任务列表
     * @param string $ProjectId 项目ID
     * @param string $StartTime 离线周期模式下,生效日期-开始时间
     * @param string $EndTime 离线周期模式下,生效日期-结束时间
     * @param string $CycleType 离线周期模式下,调度周期 
MINUTE_CYCLE:I,
HOUR_CYCLE:H,
DAY_CYCLE:D,
WEEK_CYCLE:W,
MONTH_CYCLE:M
     * @param integer $CycleStep 离线周期模式下,调度步长
     * @param string $TaskAction 离线周期模式下,指定时间
     * @param integer $DelayTime 延时执行时间，单位分钟，可选: <0-1439
     * @param string $DatabaseId 数据库Id
     * @param string $DatasourceId 数据源Id
     * @param string $TableId 数据表Id
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("ExecQueue",$param) and $param["ExecQueue"] !== null) {
            $this->ExecQueue = $param["ExecQueue"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ProdSchedulerTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }
    }
}
