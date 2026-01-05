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
 * 任务创建结果
 *
 * @method integer getId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupTableId() 获取监控表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupTableId(integer $RuleGroupTableId) 设置监控表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
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
 * @method integer getMonitorType() 获取监控类型：1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorType(integer $MonitorType) 设置监控类型：1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecDetail() 获取执行描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecDetail(string $ExecDetail) 设置执行描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailMsg() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailMsg(string $FailMsg) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityRuleGroupResult extends AbstractModel
{
    /**
     * @var integer 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 监控表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupTableId;

    /**
     * @var string 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

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
     * @var integer 监控类型：1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorType;

    /**
     * @var string 执行描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecDetail;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailMsg;

    /**
     * @var string 数据目录名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @param integer $Id 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupTableId 监控表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName 模式名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorType 监控类型：1.未配置, 2.关联生产调度, 3.离线周期检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecDetail 执行描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailMsg 失败原因
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RuleGroupTableId",$param) and $param["RuleGroupTableId"] !== null) {
            $this->RuleGroupTableId = $param["RuleGroupTableId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
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

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("ExecDetail",$param) and $param["ExecDetail"] !== null) {
            $this->ExecDetail = $param["ExecDetail"];
        }

        if (array_key_exists("FailMsg",$param) and $param["FailMsg"] !== null) {
            $this->FailMsg = $param["FailMsg"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
