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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据表配置信息
 *
 * @method string getDatabaseName() 获取该数据表所属数据库名字
 * @method void setDatabaseName(string $DatabaseName) 设置该数据表所属数据库名字
 * @method string getTableName() 获取数据表名字
 * @method void setTableName(string $TableName) 设置数据表名字
 * @method string getDatasourceConnectionName() 获取该数据表所属数据源名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置该数据表所属数据源名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableComment() 获取该数据表备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableComment(string $TableComment) 设置该数据表备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取具体类型，表or视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置具体类型，表or视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableFormat() 获取数据格式类型，hive，iceberg等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableFormat(string $TableFormat) 设置数据格式类型，hive，iceberg等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAlias() 获取建表用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAlias(string $UserAlias) 设置建表用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserSubUin() 获取建表用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserSubUin(string $UserSubUin) 设置建表用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataGovernPolicy getGovernPolicy() 获取数据治理配置项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGovernPolicy(DataGovernPolicy $GovernPolicy) 设置数据治理配置项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbGovernPolicyIsDisable() 获取库数据治理是否关闭，关闭：true，开启：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbGovernPolicyIsDisable(string $DbGovernPolicyIsDisable) 设置库数据治理是否关闭，关闭：true，开启：false
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableBaseInfo extends AbstractModel
{
    /**
     * @var string 该数据表所属数据库名字
     */
    public $DatabaseName;

    /**
     * @var string 数据表名字
     */
    public $TableName;

    /**
     * @var string 该数据表所属数据源名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionName;

    /**
     * @var string 该数据表备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableComment;

    /**
     * @var string 具体类型，表or视图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 数据格式类型，hive，iceberg等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableFormat;

    /**
     * @var string 建表用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAlias;

    /**
     * @var string 建表用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserSubUin;

    /**
     * @var DataGovernPolicy 数据治理配置项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GovernPolicy;

    /**
     * @var string 库数据治理是否关闭，关闭：true，开启：false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbGovernPolicyIsDisable;

    /**
     * @param string $DatabaseName 该数据表所属数据库名字
     * @param string $TableName 数据表名字
     * @param string $DatasourceConnectionName 该数据表所属数据源名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableComment 该数据表备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 具体类型，表or视图
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableFormat 数据格式类型，hive，iceberg等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAlias 建表用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserSubUin 建表用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataGovernPolicy $GovernPolicy 数据治理配置项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbGovernPolicyIsDisable 库数据治理是否关闭，关闭：true，开启：false
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("TableComment",$param) and $param["TableComment"] !== null) {
            $this->TableComment = $param["TableComment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TableFormat",$param) and $param["TableFormat"] !== null) {
            $this->TableFormat = $param["TableFormat"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }

        if (array_key_exists("UserSubUin",$param) and $param["UserSubUin"] !== null) {
            $this->UserSubUin = $param["UserSubUin"];
        }

        if (array_key_exists("GovernPolicy",$param) and $param["GovernPolicy"] !== null) {
            $this->GovernPolicy = new DataGovernPolicy();
            $this->GovernPolicy->deserialize($param["GovernPolicy"]);
        }

        if (array_key_exists("DbGovernPolicyIsDisable",$param) and $param["DbGovernPolicyIsDisable"] !== null) {
            $this->DbGovernPolicyIsDisable = $param["DbGovernPolicyIsDisable"];
        }
    }
}
