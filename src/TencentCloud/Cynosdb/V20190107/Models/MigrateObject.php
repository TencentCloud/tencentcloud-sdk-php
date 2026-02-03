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
 * 同步数据对象
 *
 * @method string getMigrateDBMode() 获取数据库迁移模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrateDBMode(string $MigrateDBMode) 设置数据库迁移模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatabases() 获取数据库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabases(array $Databases) 设置数据库信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class MigrateObject extends AbstractModel
{
    /**
     * @var string 数据库迁移模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigrateDBMode;

    /**
     * @var array 数据库信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Databases;

    /**
     * @param string $MigrateDBMode 数据库迁移模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Databases 数据库信息
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
        if (array_key_exists("MigrateDBMode",$param) and $param["MigrateDBMode"] !== null) {
            $this->MigrateDBMode = $param["MigrateDBMode"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new MigrateDBItem();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }
    }
}
