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
 * 备份对象详情
 *
 * @method string getDBName() 获取库名。
 * @method void setDBName(string $DBName) 设置库名。
 * @method string getNewDBName() 获取重命名后的库名。
 * @method void setNewDBName(string $NewDBName) 设置重命名后的库名。
 * @method string getSchemaName() 获取schema 名。
 * @method void setSchemaName(string $SchemaName) 设置schema 名。
 * @method string getNewSchemaName() 获取重命名后的 schema 名。
 * @method void setNewSchemaName(string $NewSchemaName) 设置重命名后的 schema 名。
 * @method string getDbMode() 获取库选择模式，可能的取值为：
"all" - 当前对象下的所有对象;
"partial" - 当前对象下的部分对象。
 * @method void setDbMode(string $DbMode) 设置库选择模式，可能的取值为：
"all" - 当前对象下的所有对象;
"partial" - 当前对象下的部分对象。
 * @method string getTableMode() 获取表选择模式，可能的取值为:
"all" - 当前对象下的所有对象;
"partial" - 当前对象下的部分对象。
 * @method void setTableMode(string $TableMode) 设置表选择模式，可能的取值为:
"all" - 当前对象下的所有对象;
"partial" - 当前对象下的部分对象。
 * @method array getTables() 获取表对象详情。当 TableMode 为 partial，即选择部分表备份时，此参数需要填写。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTables(array $Tables) 设置表对象详情。当 TableMode 为 partial，即选择部分表备份时，此参数需要填写。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupObjectItem extends AbstractModel
{
    /**
     * @var string 库名。
     */
    public $DBName;

    /**
     * @var string 重命名后的库名。
     */
    public $NewDBName;

    /**
     * @var string schema 名。
     */
    public $SchemaName;

    /**
     * @var string 重命名后的 schema 名。
     */
    public $NewSchemaName;

    /**
     * @var string 库选择模式，可能的取值为：
"all" - 当前对象下的所有对象;
"partial" - 当前对象下的部分对象。
     */
    public $DbMode;

    /**
     * @var string 表选择模式，可能的取值为:
"all" - 当前对象下的所有对象;
"partial" - 当前对象下的部分对象。
     */
    public $TableMode;

    /**
     * @var array 表对象详情。当 TableMode 为 partial，即选择部分表备份时，此参数需要填写。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tables;

    /**
     * @param string $DBName 库名。
     * @param string $NewDBName 重命名后的库名。
     * @param string $SchemaName schema 名。
     * @param string $NewSchemaName 重命名后的 schema 名。
     * @param string $DbMode 库选择模式，可能的取值为：
"all" - 当前对象下的所有对象;
"partial" - 当前对象下的部分对象。
     * @param string $TableMode 表选择模式，可能的取值为:
"all" - 当前对象下的所有对象;
"partial" - 当前对象下的部分对象。
     * @param array $Tables 表对象详情。当 TableMode 为 partial，即选择部分表备份时，此参数需要填写。
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
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("NewDBName",$param) and $param["NewDBName"] !== null) {
            $this->NewDBName = $param["NewDBName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("NewSchemaName",$param) and $param["NewSchemaName"] !== null) {
            $this->NewSchemaName = $param["NewSchemaName"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("TableMode",$param) and $param["TableMode"] !== null) {
            $this->TableMode = $param["TableMode"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new BackupTableItem();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }
    }
}
