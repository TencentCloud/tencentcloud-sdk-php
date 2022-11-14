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
 * CreateRule请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getRuleGroupId() 获取规则组Id
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组Id
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getTableId() 获取数据表ID
 * @method void setTableId(string $TableId) 设置数据表ID
 * @method integer getRuleTemplateId() 获取规则模板列表
 * @method void setRuleTemplateId(integer $RuleTemplateId) 设置规则模板列表
 * @method integer getType() 获取规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
 * @method void setType(integer $Type) 设置规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
 * @method integer getQualityDim() 获取规则所属质量维度（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
 * @method void setQualityDim(integer $QualityDim) 设置规则所属质量维度（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
 * @method string getSourceObjectDataTypeName() 获取源字段详细类型，int、string
 * @method void setSourceObjectDataTypeName(string $SourceObjectDataTypeName) 设置源字段详细类型，int、string
 * @method string getSourceObjectValue() 获取源字段名称
 * @method void setSourceObjectValue(string $SourceObjectValue) 设置源字段名称
 * @method integer getConditionType() 获取检测范围 1.全表   2.条件扫描
 * @method void setConditionType(integer $ConditionType) 设置检测范围 1.全表   2.条件扫描
 * @method string getConditionExpression() 获取条件扫描WHERE条件表达式
 * @method void setConditionExpression(string $ConditionExpression) 设置条件扫描WHERE条件表达式
 * @method string getCustomSql() 获取自定义SQL
 * @method void setCustomSql(string $CustomSql) 设置自定义SQL
 * @method CompareRule getCompareRule() 获取报警触发条件
 * @method void setCompareRule(CompareRule $CompareRule) 设置报警触发条件
 * @method integer getAlarmLevel() 获取报警触发级别 1.低, 2.中, 3.高
 * @method void setAlarmLevel(integer $AlarmLevel) 设置报警触发级别 1.低, 2.中, 3.高
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method string getDatasourceId() 获取数据源Id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源Id
 * @method string getDatabaseId() 获取数据库Id
 * @method void setDatabaseId(string $DatabaseId) 设置数据库Id
 * @method string getTargetDatabaseId() 获取目标库Id
 * @method void setTargetDatabaseId(string $TargetDatabaseId) 设置目标库Id
 * @method string getTargetTableId() 获取目标表Id
 * @method void setTargetTableId(string $TargetTableId) 设置目标表Id
 * @method string getTargetConditionExpr() 获取目标过滤条件表达式
 * @method void setTargetConditionExpr(string $TargetConditionExpr) 设置目标过滤条件表达式
 * @method string getRelConditionExpr() 获取源字段与目标字段关联条件on表达式
 * @method void setRelConditionExpr(string $RelConditionExpr) 设置源字段与目标字段关联条件on表达式
 * @method RuleFieldConfig getFieldConfig() 获取自定义模版sql表达式字段替换参数
 * @method void setFieldConfig(RuleFieldConfig $FieldConfig) 设置自定义模版sql表达式字段替换参数
 * @method string getTargetObjectValue() 获取目标字段名称  CITY
 * @method void setTargetObjectValue(string $TargetObjectValue) 设置目标字段名称  CITY
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 规则组Id
     */
    public $RuleGroupId;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 数据表ID
     */
    public $TableId;

    /**
     * @var integer 规则模板列表
     */
    public $RuleTemplateId;

    /**
     * @var integer 规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
     */
    public $Type;

    /**
     * @var integer 规则所属质量维度（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
     */
    public $QualityDim;

    /**
     * @var string 源字段详细类型，int、string
     */
    public $SourceObjectDataTypeName;

    /**
     * @var string 源字段名称
     */
    public $SourceObjectValue;

    /**
     * @var integer 检测范围 1.全表   2.条件扫描
     */
    public $ConditionType;

    /**
     * @var string 条件扫描WHERE条件表达式
     */
    public $ConditionExpression;

    /**
     * @var string 自定义SQL
     */
    public $CustomSql;

    /**
     * @var CompareRule 报警触发条件
     */
    public $CompareRule;

    /**
     * @var integer 报警触发级别 1.低, 2.中, 3.高
     */
    public $AlarmLevel;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var string 数据源Id
     */
    public $DatasourceId;

    /**
     * @var string 数据库Id
     */
    public $DatabaseId;

    /**
     * @var string 目标库Id
     */
    public $TargetDatabaseId;

    /**
     * @var string 目标表Id
     */
    public $TargetTableId;

    /**
     * @var string 目标过滤条件表达式
     */
    public $TargetConditionExpr;

    /**
     * @var string 源字段与目标字段关联条件on表达式
     */
    public $RelConditionExpr;

    /**
     * @var RuleFieldConfig 自定义模版sql表达式字段替换参数
     */
    public $FieldConfig;

    /**
     * @var string 目标字段名称  CITY
     */
    public $TargetObjectValue;

    /**
     * @param string $ProjectId 项目id
     * @param integer $RuleGroupId 规则组Id
     * @param string $Name 规则名称
     * @param string $TableId 数据表ID
     * @param integer $RuleTemplateId 规则模板列表
     * @param integer $Type 规则类型 1.系统模版, 2.自定义模版, 3.自定义SQL
     * @param integer $QualityDim 规则所属质量维度（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
     * @param string $SourceObjectDataTypeName 源字段详细类型，int、string
     * @param string $SourceObjectValue 源字段名称
     * @param integer $ConditionType 检测范围 1.全表   2.条件扫描
     * @param string $ConditionExpression 条件扫描WHERE条件表达式
     * @param string $CustomSql 自定义SQL
     * @param CompareRule $CompareRule 报警触发条件
     * @param integer $AlarmLevel 报警触发级别 1.低, 2.中, 3.高
     * @param string $Description 规则描述
     * @param string $DatasourceId 数据源Id
     * @param string $DatabaseId 数据库Id
     * @param string $TargetDatabaseId 目标库Id
     * @param string $TargetTableId 目标表Id
     * @param string $TargetConditionExpr 目标过滤条件表达式
     * @param string $RelConditionExpr 源字段与目标字段关联条件on表达式
     * @param RuleFieldConfig $FieldConfig 自定义模版sql表达式字段替换参数
     * @param string $TargetObjectValue 目标字段名称  CITY
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

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
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

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("TargetDatabaseId",$param) and $param["TargetDatabaseId"] !== null) {
            $this->TargetDatabaseId = $param["TargetDatabaseId"];
        }

        if (array_key_exists("TargetTableId",$param) and $param["TargetTableId"] !== null) {
            $this->TargetTableId = $param["TargetTableId"];
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

        if (array_key_exists("TargetObjectValue",$param) and $param["TargetObjectValue"] !== null) {
            $this->TargetObjectValue = $param["TargetObjectValue"];
        }
    }
}
