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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mysql表权限
 *
 * @method string getDb() 获取数据库名
 * @method void setDb(string $Db) 设置数据库名
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method array getPrivileges() 获取权限列表
 * @method void setPrivileges(array $Privileges) 设置权限列表
 */
class TablePrivileges extends AbstractModel
{
    /**
     * @var string 数据库名
     */
    public $Db;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var array 权限列表
     */
    public $Privileges;

    /**
     * @param string $Db 数据库名
     * @param string $TableName 表名
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
        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}
