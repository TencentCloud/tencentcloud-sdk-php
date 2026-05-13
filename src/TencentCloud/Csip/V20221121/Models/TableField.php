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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库字段描述
 *
 * @method string getDB() 获取数据库名
 * @method void setDB(string $DB) 设置数据库名
 * @method string getSchema() 获取数据库视图名
 * @method void setSchema(string $Schema) 设置数据库视图名
 * @method string getTable() 获取数据库表名
 * @method void setTable(string $Table) 设置数据库表名
 * @method string getField() 获取数据库字段名
 * @method void setField(string $Field) 设置数据库字段名
 * @method SensitiveDetail getSensitive() 获取字段敏感信息
 * @method void setSensitive(SensitiveDetail $Sensitive) 设置字段敏感信息
 */
class TableField extends AbstractModel
{
    /**
     * @var string 数据库名
     */
    public $DB;

    /**
     * @var string 数据库视图名
     */
    public $Schema;

    /**
     * @var string 数据库表名
     */
    public $Table;

    /**
     * @var string 数据库字段名
     */
    public $Field;

    /**
     * @var SensitiveDetail 字段敏感信息
     */
    public $Sensitive;

    /**
     * @param string $DB 数据库名
     * @param string $Schema 数据库视图名
     * @param string $Table 数据库表名
     * @param string $Field 数据库字段名
     * @param SensitiveDetail $Sensitive 字段敏感信息
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
        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Sensitive",$param) and $param["Sensitive"] !== null) {
            $this->Sensitive = new SensitiveDetail();
            $this->Sensitive->deserialize($param["Sensitive"]);
        }
    }
}
