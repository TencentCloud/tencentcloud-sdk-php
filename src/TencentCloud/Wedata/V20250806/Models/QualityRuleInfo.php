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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据质量规则
 *
 * @method string getName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取规则类型 
1：系统模版
2：自定义模版
3：自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置规则类型 
1：系统模版
2：自定义模版
3：自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityCompareRule getCompareRule() 获取报警触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareRule(QualityCompareRule $CompareRule) 设置报警触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlarmLevel() 获取报警触发级别 1.低, 2.中, 3.高
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置报警触发级别 1.低, 2.中, 3.高
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceEngineTypes() 获取该规则支持的执行引擎列表，可选值如下：
1 - MYSQL
2 - HIVE
4 - SPARK
8 - LIVY
16 - DLC
32 - GBASE
64 - TCHouse-P
128 - DORIS
256 - TCHouse-D
512 - EMR_STARROCKS
1024 - TCHouse-X
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceEngineTypes(array $SourceEngineTypes) 设置该规则支持的执行引擎列表，可选值如下：
1 - MYSQL
2 - HIVE
4 - SPARK
8 - LIVY
16 - DLC
32 - GBASE
64 - TCHouse-P
128 - DORIS
256 - TCHouse-D
512 - EMR_STARROCKS
1024 - TCHouse-X
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称，TableId和TableName至少填一个
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称，TableId和TableName至少填一个
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleTemplateId() 获取规则模板id，【条件必填】当Type≠3（自定义SQL）时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTemplateId(integer $RuleTemplateId) 设置规则模板id，【条件必填】当Type≠3（自定义SQL）时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQualityDim() 获取规则所属质量维度，Type=3（自定义SQL）时必填（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityDim(integer $QualityDim) 设置规则所属质量维度，Type=3（自定义SQL）时必填（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupId() 获取规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取数据表ID，TableId和TableName至少要有一个
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置数据表ID，TableId和TableName至少要有一个
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceObjectDataTypeName() 获取源数据对象（表、字段等）详细类型，【条件必填】当Type=1（系统模板）时必填
表对应固定值“table”（模板是表级的）
字段则是对应字段类型：int、string等（模板是字段级的）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectDataTypeName(string $SourceObjectDataTypeName) 设置源数据对象（表、字段等）详细类型，【条件必填】当Type=1（系统模板）时必填
表对应固定值“table”（模板是表级的）
字段则是对应字段类型：int、string等（模板是字段级的）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceObjectValue() 获取源数据对象（表、字段等）名称，【条件必填】当Type=1（系统模板）时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceObjectValue(string $SourceObjectValue) 设置源数据对象（表、字段等）名称，【条件必填】当Type=1（系统模板）时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConditionType() 获取检测范围，【条件必填】当Type=1（系统模板）或2（自定义模板）时必填。 
1.全表
2.条件扫描
注意：CompareType为2（波动值）或 使用用户自定义模板时包含过滤条件${FILTER}时，检测范围必须为2条件扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionType(integer $ConditionType) 设置检测范围，【条件必填】当Type=1（系统模板）或2（自定义模板）时必填。 
1.全表
2.条件扫描
注意：CompareType为2（波动值）或 使用用户自定义模板时包含过滤条件${FILTER}时，检测范围必须为2条件扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConditionExpression() 获取条件扫描WHERE条件表达式，【条件必填】ConditionType=2(条件扫描)时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionExpression(string $ConditionExpression) 设置条件扫描WHERE条件表达式，【条件必填】ConditionType=2(条件扫描)时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomSql() 获取自定义SQL（Base64编码），【条件必填】Type=3（自定义SQL）时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomSql(string $CustomSql) 设置自定义SQL（Base64编码），【条件必填】Type=3（自定义SQL）时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetDatabaseId() 获取目标库Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetDatabaseId(string $TargetDatabaseId) 设置目标库Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetTableId() 获取目标表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTableId(string $TargetTableId) 设置目标表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetConditionExpr() 获取目标过滤条件表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetConditionExpr(string $TargetConditionExpr) 设置目标过滤条件表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelConditionExpr() 获取源字段与目标字段关联条件on表达式，【条件必填】仅在字段数据相关性规则时必填（ruleTemplate中qualityDim=4(一致性) 且 subQualityDim=3(字段数据相关性)），例如sourceTable.model_id=targetTable.model_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelConditionExpr(string $RelConditionExpr) 设置源字段与目标字段关联条件on表达式，【条件必填】仅在字段数据相关性规则时必填（ruleTemplate中qualityDim=4(一致性) 且 subQualityDim=3(字段数据相关性)），例如sourceTable.model_id=targetTable.model_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityRuleFieldConfig getFieldConfig() 获取自定义模版sql表达式字段替换参数，【条件必填】Type=2（自定义模板）时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldConfig(QualityRuleFieldConfig $FieldConfig) 设置自定义模版sql表达式字段替换参数，【条件必填】Type=2（自定义模板）时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetObjectValue() 获取目标字段名称  CITY
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetObjectValue(string $TargetObjectValue) 设置目标字段名称  CITY
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndex() 获取下标，新增时区分不同数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(string $Index) 设置下标，新增时区分不同数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取模式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置模式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSchemaName() 获取目标schema名称，【条件必填】仅在系统模板的“字段数据相关性”规则以及数据源为TCHouse-P时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSchemaName(string $TargetSchemaName) 设置目标schema名称，【条件必填】仅在系统模板的“字段数据相关性”规则以及数据源为TCHouse-P时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetDatabaseName() 获取目标库名称，【条件必填】仅在系统模板的“字段数据相关性”规则时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetDatabaseName(string $TargetDatabaseName) 设置目标库名称，【条件必填】仅在系统模板的“字段数据相关性”规则时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetTableName() 获取目标表名称，【条件必填】仅在系统模板的“字段数据相关性”规则时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetTableName(string $TargetTableName) 设置目标表名称，【条件必填】仅在系统模板的“字段数据相关性”规则时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取数据目录名称，主要用于dlc数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置数据目录名称，主要用于dlc数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetCatalogName() 获取目标数据目录名称，【条件必填】仅在系统模板的“字段数据相关性”规则以及数据源为DLC时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetCatalogName(string $TargetCatalogName) 设置目标数据目录名称，【条件必填】仅在系统模板的“字段数据相关性”规则以及数据源为DLC时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityRuleInfo extends AbstractModel
{
    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 规则类型 
1：系统模版
2：自定义模版
3：自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var QualityCompareRule 报警触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareRule;

    /**
     * @var integer 报警触发级别 1.低, 2.中, 3.高
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmLevel;

    /**
     * @var array 该规则支持的执行引擎列表，可选值如下：
1 - MYSQL
2 - HIVE
4 - SPARK
8 - LIVY
16 - DLC
32 - GBASE
64 - TCHouse-P
128 - DORIS
256 - TCHouse-D
512 - EMR_STARROCKS
1024 - TCHouse-X
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceEngineTypes;

    /**
     * @var string 表名称，TableId和TableName至少填一个
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer 规则模板id，【条件必填】当Type≠3（自定义SQL）时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTemplateId;

    /**
     * @var integer 规则所属质量维度，Type=3（自定义SQL）时必填（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityDim;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var string 数据表ID，TableId和TableName至少要有一个
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 源数据对象（表、字段等）详细类型，【条件必填】当Type=1（系统模板）时必填
表对应固定值“table”（模板是表级的）
字段则是对应字段类型：int、string等（模板是字段级的）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectDataTypeName;

    /**
     * @var string 源数据对象（表、字段等）名称，【条件必填】当Type=1（系统模板）时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceObjectValue;

    /**
     * @var integer 检测范围，【条件必填】当Type=1（系统模板）或2（自定义模板）时必填。 
1.全表
2.条件扫描
注意：CompareType为2（波动值）或 使用用户自定义模板时包含过滤条件${FILTER}时，检测范围必须为2条件扫描
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionType;

    /**
     * @var string 条件扫描WHERE条件表达式，【条件必填】ConditionType=2(条件扫描)时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionExpression;

    /**
     * @var string 自定义SQL（Base64编码），【条件必填】Type=3（自定义SQL）时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomSql;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 数据库Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 目标库Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetDatabaseId;

    /**
     * @var string 目标表Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTableId;

    /**
     * @var string 目标过滤条件表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetConditionExpr;

    /**
     * @var string 源字段与目标字段关联条件on表达式，【条件必填】仅在字段数据相关性规则时必填（ruleTemplate中qualityDim=4(一致性) 且 subQualityDim=3(字段数据相关性)），例如sourceTable.model_id=targetTable.model_id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelConditionExpr;

    /**
     * @var QualityRuleFieldConfig 自定义模版sql表达式字段替换参数，【条件必填】Type=2（自定义模板）时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldConfig;

    /**
     * @var string 目标字段名称  CITY
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetObjectValue;

    /**
     * @var string 下标，新增时区分不同数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var string 目标schema名称，【条件必填】仅在系统模板的“字段数据相关性”规则以及数据源为TCHouse-P时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSchemaName;

    /**
     * @var string 目标库名称，【条件必填】仅在系统模板的“字段数据相关性”规则时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetDatabaseName;

    /**
     * @var string 目标表名称，【条件必填】仅在系统模板的“字段数据相关性”规则时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetTableName;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 数据目录名称，主要用于dlc数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @var string 目标数据目录名称，【条件必填】仅在系统模板的“字段数据相关性”规则以及数据源为DLC时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetCatalogName;

    /**
     * @param string $Name 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 规则类型 
1：系统模版
2：自定义模版
3：自定义SQL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityCompareRule $CompareRule 报警触发条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlarmLevel 报警触发级别 1.低, 2.中, 3.高
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceEngineTypes 该规则支持的执行引擎列表，可选值如下：
1 - MYSQL
2 - HIVE
4 - SPARK
8 - LIVY
16 - DLC
32 - GBASE
64 - TCHouse-P
128 - DORIS
256 - TCHouse-D
512 - EMR_STARROCKS
1024 - TCHouse-X
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称，TableId和TableName至少填一个
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleTemplateId 规则模板id，【条件必填】当Type≠3（自定义SQL）时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QualityDim 规则所属质量维度，Type=3（自定义SQL）时必填（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupId 规则组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 数据表ID，TableId和TableName至少要有一个
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceObjectDataTypeName 源数据对象（表、字段等）详细类型，【条件必填】当Type=1（系统模板）时必填
表对应固定值“table”（模板是表级的）
字段则是对应字段类型：int、string等（模板是字段级的）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceObjectValue 源数据对象（表、字段等）名称，【条件必填】当Type=1（系统模板）时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConditionType 检测范围，【条件必填】当Type=1（系统模板）或2（自定义模板）时必填。 
1.全表
2.条件扫描
注意：CompareType为2（波动值）或 使用用户自定义模板时包含过滤条件${FILTER}时，检测范围必须为2条件扫描
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConditionExpression 条件扫描WHERE条件表达式，【条件必填】ConditionType=2(条件扫描)时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomSql 自定义SQL（Base64编码），【条件必填】Type=3（自定义SQL）时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetDatabaseId 目标库Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetTableId 目标表Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetConditionExpr 目标过滤条件表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelConditionExpr 源字段与目标字段关联条件on表达式，【条件必填】仅在字段数据相关性规则时必填（ruleTemplate中qualityDim=4(一致性) 且 subQualityDim=3(字段数据相关性)），例如sourceTable.model_id=targetTable.model_id
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityRuleFieldConfig $FieldConfig 自定义模版sql表达式字段替换参数，【条件必填】Type=2（自定义模板）时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetObjectValue 目标字段名称  CITY
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Index 下标，新增时区分不同数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSchemaName 目标schema名称，【条件必填】仅在系统模板的“字段数据相关性”规则以及数据源为TCHouse-P时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetDatabaseName 目标库名称，【条件必填】仅在系统模板的“字段数据相关性”规则时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetTableName 目标表名称，【条件必填】仅在系统模板的“字段数据相关性”规则时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName 数据目录名称，主要用于dlc数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetCatalogName 目标数据目录名称，【条件必填】仅在系统模板的“字段数据相关性”规则以及数据源为DLC时必填（ruleTemplate的qualityDim=4 且 subQualityDim=3）。用于校验和关联跨表数据
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("CompareRule",$param) and $param["CompareRule"] !== null) {
            $this->CompareRule = new QualityCompareRule();
            $this->CompareRule->deserialize($param["CompareRule"]);
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("SourceEngineTypes",$param) and $param["SourceEngineTypes"] !== null) {
            $this->SourceEngineTypes = $param["SourceEngineTypes"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
            $this->FieldConfig = new QualityRuleFieldConfig();
            $this->FieldConfig->deserialize($param["FieldConfig"]);
        }

        if (array_key_exists("TargetObjectValue",$param) and $param["TargetObjectValue"] !== null) {
            $this->TargetObjectValue = $param["TargetObjectValue"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TargetSchemaName",$param) and $param["TargetSchemaName"] !== null) {
            $this->TargetSchemaName = $param["TargetSchemaName"];
        }

        if (array_key_exists("TargetDatabaseName",$param) and $param["TargetDatabaseName"] !== null) {
            $this->TargetDatabaseName = $param["TargetDatabaseName"];
        }

        if (array_key_exists("TargetTableName",$param) and $param["TargetTableName"] !== null) {
            $this->TargetTableName = $param["TargetTableName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("TargetCatalogName",$param) and $param["TargetCatalogName"] !== null) {
            $this->TargetCatalogName = $param["TargetCatalogName"];
        }
    }
}
