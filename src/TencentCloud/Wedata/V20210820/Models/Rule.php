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
 * 数据质量规则
 *
 * @method integer getRuleId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupId() 获取规则组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取数据表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置数据表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleTemplateId() 获取规则模板Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTemplateId(integer $RuleTemplateId) 设置规则模板Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleTemplateContent() 获取规则模板概述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTemplateContent(string $RuleTemplateContent) 设置规则模板概述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQualityDim() 获取规则所属质量维度 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityDim(integer $QualityDim) 设置规则所属质量维度 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceObjectType() 获取规则适用的源数据对象类型（1：常量，2：离线表级，3：离线字段级别）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectType(integer $SourceObjectType) 设置规则适用的源数据对象类型（1：常量，2：离线表级，3：离线字段级别）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceObjectDataType() 获取规则适用的源数据对象类型（1：数值，2：字符串）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectDataType(integer $SourceObjectDataType) 设置规则适用的源数据对象类型（1：数值，2：字符串）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceObjectDataTypeName() 获取源字段详细类型，INT、STRING
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectDataTypeName(string $SourceObjectDataTypeName) 设置源字段详细类型，INT、STRING
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceObjectValue() 获取源字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectValue(string $SourceObjectValue) 设置源字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConditionType() 获取检测范围 1.全表, 2.条件扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionType(integer $ConditionType) 设置检测范围 1.全表, 2.条件扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConditionExpression() 获取条件扫描WHERE条件表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionExpression(string $ConditionExpression) 设置条件扫描WHERE条件表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomSql() 获取自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomSql(string $CustomSql) 设置自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompareRule getCompareRule() 获取报警触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareRule(CompareRule $CompareRule) 设置报警触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmLevel() 获取报警触发级别 1.低, 2.中, 3.高
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置报警触发级别 1.低, 2.中, 3.高
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取规则配置人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置规则配置人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetDatabaseId() 获取目标库Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetDatabaseId(string $TargetDatabaseId) 设置目标库Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetDatabaseName() 获取目标库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetDatabaseName(string $TargetDatabaseName) 设置目标库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetTableId() 获取目标表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTableId(string $TargetTableId) 设置目标表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetTableName() 获取目标表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTableName(string $TargetTableName) 设置目标表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetConditionExpr() 获取目标字段过滤条件表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetConditionExpr(string $TargetConditionExpr) 设置目标字段过滤条件表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelConditionExpr() 获取源字段与目标字段关联条件on表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelConditionExpr(string $RelConditionExpr) 设置源字段与目标字段关联条件on表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleFieldConfig getFieldConfig() 获取自定义模版sql表达式参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldConfig(RuleFieldConfig $FieldConfig) 设置自定义模版sql表达式参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMultiSourceFlag() 获取是否关联多表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiSourceFlag(boolean $MultiSourceFlag) 设置是否关联多表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getWhereFlag() 获取是否where参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWhereFlag(boolean $WhereFlag) 设置是否where参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Rule extends AbstractModel
{
    /**
     * @var integer 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var integer 规则组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var string 数据表Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 规则模板Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTemplateId;

    /**
     * @var string 规则模板概述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTemplateContent;

    /**
     * @var integer 规则所属质量维度 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityDim;

    /**
     * @var integer 规则适用的源数据对象类型（1：常量，2：离线表级，3：离线字段级别）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectType;

    /**
     * @var integer 规则适用的源数据对象类型（1：数值，2：字符串）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectDataType;

    /**
     * @var string 源字段详细类型，INT、STRING
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectDataTypeName;

    /**
     * @var string 源字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectValue;

    /**
     * @var integer 检测范围 1.全表, 2.条件扫描
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionType;

    /**
     * @var string 条件扫描WHERE条件表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionExpression;

    /**
     * @var string 自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomSql;

    /**
     * @var CompareRule 报警触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareRule;

    /**
     * @var integer 报警触发级别 1.低, 2.中, 3.高
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmLevel;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 规则配置人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 目标库Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetDatabaseId;

    /**
     * @var string 目标库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetDatabaseName;

    /**
     * @var string 目标表Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTableId;

    /**
     * @var string 目标表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTableName;

    /**
     * @var string 目标字段过滤条件表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetConditionExpr;

    /**
     * @var string 源字段与目标字段关联条件on表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelConditionExpr;

    /**
     * @var RuleFieldConfig 自定义模版sql表达式参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldConfig;

    /**
     * @var boolean 是否关联多表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiSourceFlag;

    /**
     * @var boolean 是否where参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WhereFlag;

    /**
     * @param integer $RuleId 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupId 规则组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 数据表Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleTemplateId 规则模板Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleTemplateContent 规则模板概述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QualityDim 规则所属质量维度 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceObjectType 规则适用的源数据对象类型（1：常量，2：离线表级，3：离线字段级别）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceObjectDataType 规则适用的源数据对象类型（1：数值，2：字符串）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceObjectDataTypeName 源字段详细类型，INT、STRING
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceObjectValue 源字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConditionType 检测范围 1.全表, 2.条件扫描
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConditionExpression 条件扫描WHERE条件表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomSql 自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompareRule $CompareRule 报警触发条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmLevel 报警触发级别 1.低, 2.中, 3.高
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 规则配置人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetDatabaseId 目标库Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetDatabaseName 目标库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetTableId 目标表Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetTableName 目标表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetConditionExpr 目标字段过滤条件表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelConditionExpr 源字段与目标字段关联条件on表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleFieldConfig $FieldConfig 自定义模版sql表达式参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $MultiSourceFlag 是否关联多表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $WhereFlag 是否where参数
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
        }

        if (array_key_exists("RuleTemplateContent",$param) and $param["RuleTemplateContent"] !== null) {
            $this->RuleTemplateContent = $param["RuleTemplateContent"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("SourceObjectType",$param) and $param["SourceObjectType"] !== null) {
            $this->SourceObjectType = $param["SourceObjectType"];
        }

        if (array_key_exists("SourceObjectDataType",$param) and $param["SourceObjectDataType"] !== null) {
            $this->SourceObjectDataType = $param["SourceObjectDataType"];
        }

        if (array_key_exists("SourceObjectDataTypeName",$param) and $param["SourceObjectDataTypeName"] !== null) {
            $this->SourceObjectDataTypeName = $param["SourceObjectDataTypeName"];
        }

        if (array_key_exists("SourceObjectValue",$param) and $param["SourceObjectValue"] !== null) {
            $this->SourceObjectValue = $param["SourceObjectValue"];
        }

        if (array_key_exists("ConditionType",$param) and $param["ConditionType"] !== null) {
            $this->ConditionType = $param["ConditionType"];
        }

        if (array_key_exists("ConditionExpression",$param) and $param["ConditionExpression"] !== null) {
            $this->ConditionExpression = $param["ConditionExpression"];
        }

        if (array_key_exists("CustomSql",$param) and $param["CustomSql"] !== null) {
            $this->CustomSql = $param["CustomSql"];
        }

        if (array_key_exists("CompareRule",$param) and $param["CompareRule"] !== null) {
            $this->CompareRule = new CompareRule();
            $this->CompareRule->deserialize($param["CompareRule"]);
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("TargetDatabaseId",$param) and $param["TargetDatabaseId"] !== null) {
            $this->TargetDatabaseId = $param["TargetDatabaseId"];
        }

        if (array_key_exists("TargetDatabaseName",$param) and $param["TargetDatabaseName"] !== null) {
            $this->TargetDatabaseName = $param["TargetDatabaseName"];
        }

        if (array_key_exists("TargetTableId",$param) and $param["TargetTableId"] !== null) {
            $this->TargetTableId = $param["TargetTableId"];
        }

        if (array_key_exists("TargetTableName",$param) and $param["TargetTableName"] !== null) {
            $this->TargetTableName = $param["TargetTableName"];
        }

        if (array_key_exists("TargetConditionExpr",$param) and $param["TargetConditionExpr"] !== null) {
            $this->TargetConditionExpr = $param["TargetConditionExpr"];
        }

        if (array_key_exists("RelConditionExpr",$param) and $param["RelConditionExpr"] !== null) {
            $this->RelConditionExpr = $param["RelConditionExpr"];
        }

        if (array_key_exists("FieldConfig",$param) and $param["FieldConfig"] !== null) {
            $this->FieldConfig = new RuleFieldConfig();
            $this->FieldConfig->deserialize($param["FieldConfig"]);
        }

        if (array_key_exists("MultiSourceFlag",$param) and $param["MultiSourceFlag"] !== null) {
            $this->MultiSourceFlag = $param["MultiSourceFlag"];
        }

        if (array_key_exists("WhereFlag",$param) and $param["WhereFlag"] !== null) {
            $this->WhereFlag = $param["WhereFlag"];
        }
    }
}
