<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $instanceId) 设置实例ID
 * @method array getDatabaseTables() 获取实例的数据库表数组
 * @method void setDatabaseTables(array $databaseTables) 设置实例的数据库表数组
 * @method string getUser() 获取实例的用户名
 * @method void setUser(string $user) 设置实例的用户名
 * @method string getPassword() 获取实例的密码
 * @method void setPassword(string $password) 设置实例的密码
 */

/**
 *DropDatabaseTables请求参数结构体
 */
class DropDatabaseTablesRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $instanceId;

    /**
     * @var array 实例的数据库表数组
     */
    public $databaseTables;

    /**
     * @var string 实例的用户名
     */
    public $user;

    /**
     * @var string 实例的密码
     */
    public $password;
    /**
     * @param string $instanceId 实例ID
     * @param array $databaseTables 实例的数据库表数组
     * @param string $user 实例的用户名
     * @param string $password 实例的密码
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->instanceId = $param["InstanceId"];
        }

        if (array_key_exists("DatabaseTables",$param) and $param["DatabaseTables"] !== null) {
            $this->databaseTables = $param["DatabaseTables"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->user = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->password = $param["Password"];
        }
    }
}
