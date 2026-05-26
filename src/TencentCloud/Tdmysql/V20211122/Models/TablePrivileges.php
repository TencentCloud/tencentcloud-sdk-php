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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表级别权限
 *
 * @method string getDatabase() 获取DATABASE名
 * @method void setDatabase(string $Database) 设置DATABASE名
 * @method string getTable() 获取表名
 * @method void setTable(string $Table) 设置表名
 * @method array getPrivileges() 获取权限列表
 * @method void setPrivileges(array $Privileges) 设置权限列表
 */
class TablePrivileges extends AbstractModel
{
    /**
     * @var string DATABASE名
     */
    public $Database;

    /**
     * @var string 表名
     */
    public $Table;

    /**
     * @var array 权限列表
     */
    public $Privileges;

    /**
     * @param string $Database DATABASE名
     * @param string $Table 表名
     * @param array $Privileges 权限列表
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}
