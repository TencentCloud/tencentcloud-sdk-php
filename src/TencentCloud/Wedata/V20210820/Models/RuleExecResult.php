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
 * 规则执行结果
 *
 * @method integer getRuleExecId() 获取规则执行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleExecId(integer $RuleExecId) 设置规则执行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupExecId() 获取规则组执行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupExecId(integer $RuleGroupExecId) 设置规则组执行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupId() 获取规则组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleType() 获取规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(integer $RuleType) 设置规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceObjectDataTypeName() 获取源字段详细类型，int string
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectDataTypeName(string $SourceObjectDataTypeName) 设置源字段详细类型，int string
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceObjectValue() 获取源字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectValue(string $SourceObjectValue) 设置源字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConditionExpression() 获取条件扫描WHERE条件表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionExpression(string $ConditionExpression) 设置条件扫描WHERE条件表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecResultStatus() 获取检测结果（1:检测通过，2：触发规则，3：检测失败）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecResultStatus(integer $ExecResultStatus) 设置检测结果（1:检测通过，2：触发规则，3：检测失败）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerResult() 获取触发结果，告警发送成功, 阻断任务成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerResult(string $TriggerResult) 设置触发结果，告警发送成功, 阻断任务成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompareResult getCompareResult() 获取对比结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareResult(CompareResult $CompareResult) 设置对比结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateName() 获取模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateName(string $TemplateName) 设置模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQualityDim() 获取质量维度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityDim(integer $QualityDim) 设置质量维度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetDBTableName() 获取目标表-库表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetDBTableName(string $TargetDBTableName) 设置目标表-库表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetObjectValue() 获取目标表-字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetObjectValue(string $TargetObjectValue) 设置目标表-字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetObjectDataType() 获取目标表-字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetObjectDataType(string $TargetObjectDataType) 设置目标表-字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleFieldConfig getFieldConfig() 获取自定义模版sql表达式参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldConfig(RuleFieldConfig $FieldConfig) 设置自定义模版sql表达式参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelConditionExpr() 获取源字段与目标字段关联条件on表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelConditionExpr(string $RelConditionExpr) 设置源字段与目标字段关联条件on表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmLevel() 获取1/2/3:低/中/高
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置1/2/3:低/中/高
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerCondition() 获取触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerCondition(string $TriggerCondition) 设置触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleGroupName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupName(string $RuleGroupName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取模式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置模式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupExist() 获取判断是否屏蔽监控 0.屏蔽 1.不屏蔽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupExist(integer $RuleGroupExist) 设置判断是否屏蔽监控 0.屏蔽 1.不屏蔽
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(integer $DatasourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupTableId() 获取数据表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupTableId(integer $RuleGroupTableId) 设置数据表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorType() 获取监控方式 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置监控方式 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinishTime() 获取执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(string $FinishTime) 设置执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleExecResult extends AbstractModel
{
    /**
     * @var integer 规则执行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleExecId;

    /**
     * @var integer 规则组执行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupExecId;

    /**
     * @var integer 规则组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var integer 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string 源字段详细类型，int string
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectDataTypeName;

    /**
     * @var string 源字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectValue;

    /**
     * @var string 条件扫描WHERE条件表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionExpression;

    /**
     * @var integer 检测结果（1:检测通过，2：触发规则，3：检测失败）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecResultStatus;

    /**
     * @var string 触发结果，告警发送成功, 阻断任务成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerResult;

    /**
     * @var CompareResult 对比结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareResult;

    /**
     * @var string 模版名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateName;

    /**
     * @var integer 质量维度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityDim;

    /**
     * @var string 目标表-库表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetDBTableName;

    /**
     * @var string 目标表-字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetObjectValue;

    /**
     * @var string 目标表-字段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetObjectDataType;

    /**
     * @var RuleFieldConfig 自定义模版sql表达式参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldConfig;

    /**
     * @var string 源字段与目标字段关联条件on表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelConditionExpr;

    /**
     * @var string 执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 1/2/3:低/中/高
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmLevel;

    /**
     * @var string 触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerCondition;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupName;

    /**
     * @var string 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer 判断是否屏蔽监控 0.屏蔽 1.不屏蔽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupExist;

    /**
     * @var integer 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @var integer 数据表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupTableId;

    /**
     * @var integer 监控方式 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var string 执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @param integer $RuleExecId 规则执行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupExecId 规则组执行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupId 规则组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleType 规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceObjectDataTypeName 源字段详细类型，int string
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceObjectValue 源字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConditionExpression 条件扫描WHERE条件表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecResultStatus 检测结果（1:检测通过，2：触发规则，3：检测失败）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerResult 触发结果，告警发送成功, 阻断任务成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompareResult $CompareResult 对比结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateName 模版名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QualityDim 质量维度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetDBTableName 目标表-库表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetObjectValue 目标表-字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetObjectDataType 目标表-字段类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleFieldConfig $FieldConfig 自定义模版sql表达式参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelConditionExpr 源字段与目标字段关联条件on表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmLevel 1/2/3:低/中/高
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerCondition 触发条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleGroupName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupExist 判断是否屏蔽监控 0.屏蔽 1.不屏蔽
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupTableId 数据表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType 监控方式 1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinishTime 执行结束时间
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
        if (array_key_exists("RuleExecId",$param) and $param["RuleExecId"] !== null) {
            $this->RuleExecId = $param["RuleExecId"];
        }

        if (array_key_exists("RuleGroupExecId",$param) and $param["RuleGroupExecId"] !== null) {
            $this->RuleGroupExecId = $param["RuleGroupExecId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("SourceObjectDataTypeName",$param) and $param["SourceObjectDataTypeName"] !== null) {
            $this->SourceObjectDataTypeName = $param["SourceObjectDataTypeName"];
        }

        if (array_key_exists("SourceObjectValue",$param) and $param["SourceObjectValue"] !== null) {
            $this->SourceObjectValue = $param["SourceObjectValue"];
        }

        if (array_key_exists("ConditionExpression",$param) and $param["ConditionExpression"] !== null) {
            $this->ConditionExpression = $param["ConditionExpression"];
        }

        if (array_key_exists("ExecResultStatus",$param) and $param["ExecResultStatus"] !== null) {
            $this->ExecResultStatus = $param["ExecResultStatus"];
        }

        if (array_key_exists("TriggerResult",$param) and $param["TriggerResult"] !== null) {
            $this->TriggerResult = $param["TriggerResult"];
        }

        if (array_key_exists("CompareResult",$param) and $param["CompareResult"] !== null) {
            $this->CompareResult = new CompareResult();
            $this->CompareResult->deserialize($param["CompareResult"]);
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("TargetDBTableName",$param) and $param["TargetDBTableName"] !== null) {
            $this->TargetDBTableName = $param["TargetDBTableName"];
        }

        if (array_key_exists("TargetObjectValue",$param) and $param["TargetObjectValue"] !== null) {
            $this->TargetObjectValue = $param["TargetObjectValue"];
        }

        if (array_key_exists("TargetObjectDataType",$param) and $param["TargetObjectDataType"] !== null) {
            $this->TargetObjectDataType = $param["TargetObjectDataType"];
        }

        if (array_key_exists("FieldConfig",$param) and $param["FieldConfig"] !== null) {
            $this->FieldConfig = new RuleFieldConfig();
            $this->FieldConfig->deserialize($param["FieldConfig"]);
        }

        if (array_key_exists("RelConditionExpr",$param) and $param["RelConditionExpr"] !== null) {
            $this->RelConditionExpr = $param["RelConditionExpr"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("TriggerCondition",$param) and $param["TriggerCondition"] !== null) {
            $this->TriggerCondition = $param["TriggerCondition"];
        }

        if (array_key_exists("RuleGroupName",$param) and $param["RuleGroupName"] !== null) {
            $this->RuleGroupName = $param["RuleGroupName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
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

        if (array_key_exists("RuleGroupExist",$param) and $param["RuleGroupExist"] !== null) {
            $this->RuleGroupExist = $param["RuleGroupExist"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("RuleGroupTableId",$param) and $param["RuleGroupTableId"] !== null) {
            $this->RuleGroupTableId = $param["RuleGroupTableId"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
