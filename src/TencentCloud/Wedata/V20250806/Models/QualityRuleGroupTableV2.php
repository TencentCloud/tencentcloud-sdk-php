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
 * 规则表
 *
 * @method integer getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupId() 获取规则组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取模式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置模式名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableOwnerUserId() 获取表负责人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerUserId(integer $TableOwnerUserId) 设置表负责人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableOwnerName() 获取表负责人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableOwnerName(string $TableOwnerName) 设置表负责人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(integer $DatasourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupCount() 获取监控数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupCount(integer $RuleGroupCount) 设置监控数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleCount() 获取规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCount(integer $RuleCount) 设置规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableRuleGroupCount() 获取生效监控数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRuleGroupCount(integer $EnableRuleGroupCount) 设置生效监控数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityRuleGroupTableV2 extends AbstractModel
{
    /**
     * @var integer id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 规则组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var string 表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var integer 表负责人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerUserId;

    /**
     * @var string 表负责人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableOwnerName;

    /**
     * @var string 数据源id
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
    public $DatabaseId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var integer 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer 监控数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupCount;

    /**
     * @var integer 规则数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCount;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 生效监控数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRuleGroupCount;

    /**
     * @var string 数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @param integer $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupId 规则组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableOwnerUserId 表负责人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableOwnerName 表负责人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupCount 监控数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCount 规则数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableRuleGroupCount 生效监控数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName 数据目录名称
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableOwnerUserId",$param) and $param["TableOwnerUserId"] !== null) {
            $this->TableOwnerUserId = $param["TableOwnerUserId"];
        }

        if (array_key_exists("TableOwnerName",$param) and $param["TableOwnerName"] !== null) {
            $this->TableOwnerName = $param["TableOwnerName"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleGroupCount",$param) and $param["RuleGroupCount"] !== null) {
            $this->RuleGroupCount = $param["RuleGroupCount"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EnableRuleGroupCount",$param) and $param["EnableRuleGroupCount"] !== null) {
            $this->EnableRuleGroupCount = $param["EnableRuleGroupCount"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
