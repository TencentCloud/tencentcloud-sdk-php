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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunSql请求参数结构体
 *
 * @method string getSql() 获取要执行的SQL语句
 * @method void setSql(string $Sql) 设置要执行的SQL语句
 * @method string getEnvId() 获取云开发环境ID
 * @method void setEnvId(string $EnvId) 设置云开发环境ID
 * @method DbInstance getDbInstance() 获取数据库连接器实例信息
 * @method void setDbInstance(DbInstance $DbInstance) 设置数据库连接器实例信息
 * @method boolean getReadOnly() 获取是否只读；当 `true` 时仅允许以 `SELECT/WITH/SHOW/DESCRIBE/DESC/EXPLAIN` 开头的 SQL
 * @method void setReadOnly(boolean $ReadOnly) 设置是否只读；当 `true` 时仅允许以 `SELECT/WITH/SHOW/DESCRIBE/DESC/EXPLAIN` 开头的 SQL
 */
class RunSqlRequest extends AbstractModel
{
    /**
     * @var string 要执行的SQL语句
     */
    public $Sql;

    /**
     * @var string 云开发环境ID
     */
    public $EnvId;

    /**
     * @var DbInstance 数据库连接器实例信息
     */
    public $DbInstance;

    /**
     * @var boolean 是否只读；当 `true` 时仅允许以 `SELECT/WITH/SHOW/DESCRIBE/DESC/EXPLAIN` 开头的 SQL
     */
    public $ReadOnly;

    /**
     * @param string $Sql 要执行的SQL语句
     * @param string $EnvId 云开发环境ID
     * @param DbInstance $DbInstance 数据库连接器实例信息
     * @param boolean $ReadOnly 是否只读；当 `true` 时仅允许以 `SELECT/WITH/SHOW/DESCRIBE/DESC/EXPLAIN` 开头的 SQL
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
        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("DbInstance",$param) and $param["DbInstance"] !== null) {
            $this->DbInstance = new DbInstance();
            $this->DbInstance->deserialize($param["DbInstance"]);
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }
    }
}
