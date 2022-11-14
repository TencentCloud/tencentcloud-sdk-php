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
 * 规则表变量替换
 *
 * @method string getDatabaseId() 获取数据库Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableKey() 获取表Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableKey(string $TableKey) 设置表Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFieldConfig() 获取字段变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldConfig(array $FieldConfig) 设置字段变量
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableConfig extends AbstractModel
{
    /**
     * @var string 数据库Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 表Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableKey;

    /**
     * @var array 字段变量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldConfig;

    /**
     * @param string $DatabaseId 数据库Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableKey 表Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FieldConfig 字段变量
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
        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableKey",$param) and $param["TableKey"] !== null) {
            $this->TableKey = $param["TableKey"];
        }

        if (array_key_exists("FieldConfig",$param) and $param["FieldConfig"] !== null) {
            $this->FieldConfig = [];
            foreach ($param["FieldConfig"] as $key => $value){
                $obj = new FieldConfig();
                $obj->deserialize($value);
                array_push($this->FieldConfig, $obj);
            }
        }
    }
}
