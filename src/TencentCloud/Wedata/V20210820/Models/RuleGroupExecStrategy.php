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
 * 质量规则执行策略
 *
 * @method integer getRuleGroupId() 获取规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorType() 获取监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecQueue() 获取计算队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecQueue(string $ExecQueue) 设置计算队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取执行资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置执行资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取关联的生产调度任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置关联的生产调度任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取周期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置周期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取周期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置周期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取调度周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置调度周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取延迟调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置延迟调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取时间指定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置时间指定
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecEngineType() 获取运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecEngineType(string $ExecEngineType) 设置运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecPlan() 获取执行计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecPlan(string $ExecPlan) 设置执行计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTriggerTypes() 获取触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerTypes(array $TriggerTypes) 设置触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDlcGroupName() 获取DLC资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDlcGroupName(string $DlcGroupName) 设置DLC资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleGroupName() 获取任务名称
 * @method void setRuleGroupName(string $RuleGroupName) 设置任务名称
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getSchemaName() 获取schema名称
 * @method void setSchemaName(string $SchemaName) 设置schema名称
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 * @method string getDatasourceId() 获取数据源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
 * @method string getDescription() 获取任务描述
 * @method void setDescription(string $Description) 设置任务描述
 */
class RuleGroupExecStrategy extends AbstractModel
{
    /**
     * @var integer 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var integer 监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var string 计算队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecQueue;

    /**
     * @var string 执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string 执行资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var array 关联的生产调度任务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var string 周期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 周期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 调度周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer 延迟调度时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var integer 间隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var string 时间指定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var string 运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecEngineType;

    /**
     * @var string 执行计划
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecPlan;

    /**
     * @var integer 规则id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var array 触发类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerTypes;

    /**
     * @var string DLC资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DlcGroupName;

    /**
     * @var string 任务名称
     */
    public $RuleGroupName;

    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string schema名称
     */
    public $SchemaName;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @var string 数据源id
     */
    public $DatasourceId;

    /**
     * @var string 任务描述
     */
    public $Description;

    /**
     * @param integer $RuleGroupId 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType 监控类型 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecQueue 计算队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId 执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName 执行资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 关联的生产调度任务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 周期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 周期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 调度周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime 延迟调度时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep 间隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction 时间指定
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecEngineType 运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecPlan 执行计划
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TriggerTypes 触发类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DlcGroupName DLC资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleGroupName 任务名称
     * @param string $DatabaseName 数据库名称
     * @param string $SchemaName schema名称
     * @param string $TableName 表名称
     * @param string $DatasourceId 数据源id
     * @param string $Description 任务描述
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("ExecEngineType",$param) and $param["ExecEngineType"] !== null) {
            $this->ExecEngineType = $param["ExecEngineType"];
        }

        if (array_key_exists("ExecPlan",$param) and $param["ExecPlan"] !== null) {
            $this->ExecPlan = $param["ExecPlan"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("TriggerTypes",$param) and $param["TriggerTypes"] !== null) {
            $this->TriggerTypes = $param["TriggerTypes"];
        }

        if (array_key_exists("DlcGroupName",$param) and $param["DlcGroupName"] !== null) {
            $this->DlcGroupName = $param["DlcGroupName"];
        }

        if (array_key_exists("RuleGroupName",$param) and $param["RuleGroupName"] !== null) {
            $this->RuleGroupName = $param["RuleGroupName"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
