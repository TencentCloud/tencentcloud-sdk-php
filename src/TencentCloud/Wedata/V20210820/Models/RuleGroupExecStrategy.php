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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 质量规则执行策略
 *
 * @method integer getRuleGroupId() 获取<p>规则组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置<p>规则组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorType() 获取监控类型：1-未配置，2-关联生产调度，3-离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置监控类型：1-未配置，2-关联生产调度，3-离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecQueue() 获取<p>计算队列</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecQueue(string $ExecQueue) 设置<p>计算队列</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取<p>执行资源组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置<p>执行资源组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取<p>执行资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置<p>执行资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取<p>关联的生产调度任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置<p>关联的生产调度任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>周期开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>周期开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>周期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>周期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取周期类型：MINUTE-分钟，HOUR-小时，DAY-天，WEEK-周，MONTH-月，YEAR-年
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置周期类型：MINUTE-分钟，HOUR-小时，DAY-天，WEEK-周，MONTH-月，YEAR-年
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取<p>延迟调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置<p>延迟调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取<p>间隔</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置<p>间隔</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取<p>时间指定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置<p>时间指定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecEngineType() 获取执行引擎类型，可选值：MYSQL, HIVE, SPARK, LIVY, DLC, GBASE, CDW_PG, TCHouse-P, DORIS, TCHouse-D
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecEngineType(string $ExecEngineType) 设置执行引擎类型，可选值：MYSQL, HIVE, SPARK, LIVY, DLC, GBASE, CDW_PG, TCHouse-P, DORIS, TCHouse-D
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecPlan() 获取<p>执行计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecPlan(string $ExecPlan) 设置<p>执行计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取<p>规则id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置<p>规则id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取<p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTriggerTypes() 获取触发类型数组：1-手动触发，2-调度事件触发，3-周期调度触发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerTypes(array $TriggerTypes) 设置触发类型数组：1-手动触发，2-调度事件触发，3-周期调度触发
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDlcGroupName() 获取<p>DLC资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDlcGroupName(string $DlcGroupName) 设置<p>DLC资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleGroupName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupName(string $RuleGroupName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取<p>schema名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置<p>schema名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取<p>表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置<p>表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取<p>数据源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置<p>数据源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleGroupConfig getGroupConfig() 获取<p>任务监控参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupConfig(RuleGroupConfig $GroupConfig) 设置<p>任务监控参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineParam() 获取<p>引擎参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineParam(string $EngineParam) 设置<p>引擎参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取<p>catalog名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置<p>catalog名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecFailBlock() 获取<p>执行失败是否阻塞下游</p><p>枚举值：</p><ul><li>0： 失败不阻塞（默认）</li><li>1： 失败阻塞</li></ul><p>默认值：0</p><p>仅作用于“关联生产调度”类型的质量监控</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecFailBlock(integer $ExecFailBlock) 设置<p>执行失败是否阻塞下游</p><p>枚举值：</p><ul><li>0： 失败不阻塞（默认）</li><li>1： 失败阻塞</li></ul><p>默认值：0</p><p>仅作用于“关联生产调度”类型的质量监控</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupExecStrategy extends AbstractModel
{
    /**
     * @var integer <p>规则组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var integer 监控类型：1-未配置，2-关联生产调度，3-离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var string <p>计算队列</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecQueue;

    /**
     * @var string <p>执行资源组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string <p>执行资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var array <p>关联的生产调度任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var string <p>周期开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>周期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 周期类型：MINUTE-分钟，HOUR-小时，DAY-天，WEEK-周，MONTH-月，YEAR-年
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer <p>延迟调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var integer <p>间隔</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var string <p>时间指定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var string 执行引擎类型，可选值：MYSQL, HIVE, SPARK, LIVY, DLC, GBASE, CDW_PG, TCHouse-P, DORIS, TCHouse-D
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecEngineType;

    /**
     * @var string <p>执行计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecPlan;

    /**
     * @var integer <p>规则id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string <p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var array 触发类型数组：1-手动触发，2-调度事件触发，3-周期调度触发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerTypes;

    /**
     * @var string <p>DLC资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DlcGroupName;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupName;

    /**
     * @var string <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string <p>schema名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var string <p>表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string <p>数据源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var RuleGroupConfig <p>任务监控参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupConfig;

    /**
     * @var string <p>引擎参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineParam;

    /**
     * @var string <p>catalog名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @var integer <p>执行失败是否阻塞下游</p><p>枚举值：</p><ul><li>0： 失败不阻塞（默认）</li><li>1： 失败阻塞</li></ul><p>默认值：0</p><p>仅作用于“关联生产调度”类型的质量监控</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecFailBlock;

    /**
     * @param integer $RuleGroupId <p>规则组Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType 监控类型：1-未配置，2-关联生产调度，3-离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecQueue <p>计算队列</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId <p>执行资源组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName <p>执行资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks <p>关联的生产调度任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>周期开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>周期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 周期类型：MINUTE-分钟，HOUR-小时，DAY-天，WEEK-周，MONTH-月，YEAR-年
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime <p>延迟调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep <p>间隔</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction <p>时间指定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecEngineType 执行引擎类型，可选值：MYSQL, HIVE, SPARK, LIVY, DLC, GBASE, CDW_PG, TCHouse-P, DORIS, TCHouse-D
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecPlan <p>执行计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId <p>规则id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName <p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TriggerTypes 触发类型数组：1-手动触发，2-调度事件触发，3-周期调度触发
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DlcGroupName <p>DLC资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleGroupName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName <p>schema名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName <p>表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId <p>数据源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>任务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleGroupConfig $GroupConfig <p>任务监控参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineParam <p>引擎参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName <p>catalog名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecFailBlock <p>执行失败是否阻塞下游</p><p>枚举值：</p><ul><li>0： 失败不阻塞（默认）</li><li>1： 失败阻塞</li></ul><p>默认值：0</p><p>仅作用于“关联生产调度”类型的质量监控</p>
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

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("GroupConfig",$param) and $param["GroupConfig"] !== null) {
            $this->GroupConfig = new RuleGroupConfig();
            $this->GroupConfig->deserialize($param["GroupConfig"]);
        }

        if (array_key_exists("EngineParam",$param) and $param["EngineParam"] !== null) {
            $this->EngineParam = $param["EngineParam"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("ExecFailBlock",$param) and $param["ExecFailBlock"] !== null) {
            $this->ExecFailBlock = $param["ExecFailBlock"];
        }
    }
}
