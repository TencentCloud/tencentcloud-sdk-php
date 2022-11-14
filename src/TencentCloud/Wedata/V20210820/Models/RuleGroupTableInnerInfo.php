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
 * 规则组关联表信息
 *
 * @method string getTableId() 获取表ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(integer $DatasourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseId() 获取数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserId() 获取责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(integer $UserId) 设置责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleGroupTableInnerInfo extends AbstractModel
{
    /**
     * @var string 表ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

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
     * @var integer 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @var string 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var integer 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @param string $TableId 表ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasourceType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseId 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserId 责任人ID
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
