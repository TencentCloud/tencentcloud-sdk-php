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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份表对象
 *
 * @method string getTableName() 获取表名。
 * @method void setTableName(string $TableName) 设置表名。
 * @method string getNewTableName() 获取重命名后的表名。
 * @method void setNewTableName(string $NewTableName) 设置重命名后的表名。
 * @method array getColumns() 获取列对象。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置列对象。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupTableItem extends AbstractModel
{
    /**
     * @var string 表名。
     */
    public $TableName;

    /**
     * @var string 重命名后的表名。
     */
    public $NewTableName;

    /**
     * @var array 列对象。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @param string $TableName 表名。
     * @param string $NewTableName 重命名后的表名。
     * @param array $Columns 列对象。
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new BackupColumnItem();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }
    }
}
