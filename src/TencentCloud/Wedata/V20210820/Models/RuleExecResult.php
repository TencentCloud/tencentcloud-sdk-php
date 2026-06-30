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
 * @method integer getRuleExecId() 获取<p>规则执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleExecId(integer $RuleExecId) 设置<p>规则执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupExecId() 获取<p>规则组执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupExecId(integer $RuleGroupExecId) 设置<p>规则组执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupId() 获取<p>规则组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置<p>规则组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取<p>规则ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置<p>规则ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取<p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleType() 获取<p>规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(integer $RuleType) 设置<p>规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceObjectDataTypeName() 获取<p>源字段详细类型，int string</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectDataTypeName(string $SourceObjectDataTypeName) 设置<p>源字段详细类型，int string</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceObjectValue() 获取<p>源字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectValue(string $SourceObjectValue) 设置<p>源字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConditionExpression() 获取<p>条件扫描WHERE条件表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionExpression(string $ConditionExpression) 设置<p>条件扫描WHERE条件表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecResultStatus() 获取<p>检测结果（1:检测通过，2：触发规则，3：检测失败）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecResultStatus(integer $ExecResultStatus) 设置<p>检测结果（1:检测通过，2：触发规则，3：检测失败）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerResult() 获取<p>触发结果，告警发送成功, 阻断任务成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerResult(string $TriggerResult) 设置<p>触发结果，告警发送成功, 阻断任务成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompareResult getCompareResult() 获取<p>对比结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareResult(CompareResult $CompareResult) 设置<p>对比结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateName() 获取<p>模版名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateName(string $TemplateName) 设置<p>模版名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQualityDim() 获取<p>质量维度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityDim(integer $QualityDim) 设置<p>质量维度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetDBTableName() 获取<p>目标表-库表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetDBTableName(string $TargetDBTableName) 设置<p>目标表-库表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetObjectValue() 获取<p>目标表-字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetObjectValue(string $TargetObjectValue) 设置<p>目标表-字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetObjectDataType() 获取<p>目标表-字段类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetObjectDataType(string $TargetObjectDataType) 设置<p>目标表-字段类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleFieldConfig getFieldConfig() 获取<p>自定义模版sql表达式参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldConfig(RuleFieldConfig $FieldConfig) 设置<p>自定义模版sql表达式参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelConditionExpr() 获取<p>源字段与目标字段关联条件on表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelConditionExpr(string $RelConditionExpr) 设置<p>源字段与目标字段关联条件on表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmLevel() 获取<p>1/2/3:低/中/高</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置<p>1/2/3:低/中/高</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerCondition() 获取<p>触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerCondition(string $TriggerCondition) 设置<p>触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleGroupName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupName(string $RuleGroupName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取<p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置<p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取<p>数据源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置<p>数据源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取<p>模式名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置<p>模式名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取<p>表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置<p>表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupExist() 获取<p>判断是否屏蔽监控 0.屏蔽 1.不屏蔽</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupExist(integer $RuleGroupExist) 设置<p>判断是否屏蔽监控 0.屏蔽 1.不屏蔽</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceType() 获取<p>数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(integer $DatasourceType) 设置<p>数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupTableId() 获取<p>数据表id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupTableId(integer $RuleGroupTableId) 设置<p>数据表id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorType() 获取<p>监控方式 1.未配置, 2.关联生产调度, 3.离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置<p>监控方式 1.未配置, 2.关联生产调度, 3.离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinishTime() 获取<p>执行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(string $FinishTime) 设置<p>执行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupType() 获取<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupType(string $GroupType) 设置<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAspectTaskId() 获取<p>编排任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAspectTaskId(string $AspectTaskId) 设置<p>编排任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取<p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置<p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleExecStatus() 获取<p>规则执行状态</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 运行中</li><li>2： 运行成功</li><li>3： 运行失败</li><li>4： 被杀死</li></ul>
 * @method void setRuleExecStatus(integer $RuleExecStatus) 设置<p>规则执行状态</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 运行中</li><li>2： 运行成功</li><li>3： 运行失败</li><li>4： 被杀死</li></ul>
 */
class RuleExecResult extends AbstractModel
{
    /**
     * @var integer <p>规则执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleExecId;

    /**
     * @var integer <p>规则组执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupExecId;

    /**
     * @var integer <p>规则组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var integer <p>规则ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string <p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer <p>规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string <p>源字段详细类型，int string</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectDataTypeName;

    /**
     * @var string <p>源字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectValue;

    /**
     * @var string <p>条件扫描WHERE条件表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionExpression;

    /**
     * @var integer <p>检测结果（1:检测通过，2：触发规则，3：检测失败）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecResultStatus;

    /**
     * @var string <p>触发结果，告警发送成功, 阻断任务成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerResult;

    /**
     * @var CompareResult <p>对比结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareResult;

    /**
     * @var string <p>模版名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateName;

    /**
     * @var integer <p>质量维度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityDim;

    /**
     * @var string <p>目标表-库表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetDBTableName;

    /**
     * @var string <p>目标表-字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetObjectValue;

    /**
     * @var string <p>目标表-字段类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetObjectDataType;

    /**
     * @var RuleFieldConfig <p>自定义模版sql表达式参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldConfig;

    /**
     * @var string <p>源字段与目标字段关联条件on表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelConditionExpr;

    /**
     * @var string <p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer <p>1/2/3:低/中/高</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmLevel;

    /**
     * @var string <p>触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerCondition;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupName;

    /**
     * @var string <p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string <p>数据源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceName;

    /**
     * @var string <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string <p>模式名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var string <p>表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer <p>判断是否屏蔽监控 0.屏蔽 1.不屏蔽</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupExist;

    /**
     * @var integer <p>数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @var integer <p>数据表id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupTableId;

    /**
     * @var integer <p>监控方式 1.未配置, 2.关联生产调度, 3.离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var string <p>执行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @var string <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupType;

    /**
     * @var string <p>编排任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AspectTaskId;

    /**
     * @var string <p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @var integer <p>规则执行状态</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 运行中</li><li>2： 运行成功</li><li>3： 运行失败</li><li>4： 被杀死</li></ul>
     */
    public $RuleExecStatus;

    /**
     * @param integer $RuleExecId <p>规则执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupExecId <p>规则组执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupId <p>规则组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId <p>规则ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName <p>规则名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleType <p>规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceObjectDataTypeName <p>源字段详细类型，int string</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceObjectValue <p>源字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConditionExpression <p>条件扫描WHERE条件表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecResultStatus <p>检测结果（1:检测通过，2：触发规则，3：检测失败）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerResult <p>触发结果，告警发送成功, 阻断任务成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompareResult $CompareResult <p>对比结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateName <p>模版名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QualityDim <p>质量维度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetDBTableName <p>目标表-库表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetObjectValue <p>目标表-字段名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetObjectDataType <p>目标表-字段类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleFieldConfig $FieldConfig <p>自定义模版sql表达式参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelConditionExpr <p>源字段与目标字段关联条件on表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmLevel <p>1/2/3:低/中/高</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerCondition <p>触发条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleGroupName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId <p>数据源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName <p>数据源名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName <p>模式名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName <p>表名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupExist <p>判断是否屏蔽监控 0.屏蔽 1.不屏蔽</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceType <p>数据源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupTableId <p>数据表id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType <p>监控方式 1.未配置, 2.关联生产调度, 3.离线周期检测</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinishTime <p>执行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupType <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AspectTaskId <p>编排任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName <p>目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleExecStatus <p>规则执行状态</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 运行中</li><li>2： 运行成功</li><li>3： 运行失败</li><li>4： 被杀死</li></ul>
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

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("AspectTaskId",$param) and $param["AspectTaskId"] !== null) {
            $this->AspectTaskId = $param["AspectTaskId"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("RuleExecStatus",$param) and $param["RuleExecStatus"] !== null) {
            $this->RuleExecStatus = $param["RuleExecStatus"];
        }
    }
}
