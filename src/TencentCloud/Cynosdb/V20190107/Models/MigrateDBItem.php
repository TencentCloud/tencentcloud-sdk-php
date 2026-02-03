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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步库表对象
 *
 * @method string getDbName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbName(string $DbName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMigrateTableMode() 获取数据表迁移模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrateTableMode(string $MigrateTableMode) 设置数据表迁移模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTables() 获取数据表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTables(array $Tables) 设置数据表信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class MigrateDBItem extends AbstractModel
{
    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbName;

    /**
     * @var string 数据表迁移模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigrateTableMode;

    /**
     * @var array 数据表信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tables;

    /**
     * @param string $DbName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MigrateTableMode 数据表迁移模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tables 数据表信息
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("MigrateTableMode",$param) and $param["MigrateTableMode"] !== null) {
            $this->MigrateTableMode = $param["MigrateTableMode"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new MigrateTableItem();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }
    }
}
