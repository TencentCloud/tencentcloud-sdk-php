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
 * @method string getInstanceId() 获取云数据库实例ID
 * @method void setInstanceId(string $instanceId) 设置云数据库实例ID
 * @method array getAccounts() 获取数据库的账号，包括用户名和域名
 * @method void setAccounts(array $accounts) 设置数据库的账号，包括用户名和域名
 * @method array getGlobalPrivileges() 获取全局权限
 * @method void setGlobalPrivileges(array $globalPrivileges) 设置全局权限
 * @method array getDatabasePrivileges() 获取数据库的权限
 * @method void setDatabasePrivileges(array $databasePrivileges) 设置数据库的权限
 * @method array getTablePrivileges() 获取数据库中表的权限
 * @method void setTablePrivileges(array $tablePrivileges) 设置数据库中表的权限
 * @method array getColumnPrivileges() 获取数据库表中列的权限
 * @method void setColumnPrivileges(array $columnPrivileges) 设置数据库表中列的权限
 */

/**
 *ModifyAccountPrivileges请求参数结构体
 */
class ModifyAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string 云数据库实例ID
     */
    public $instanceId;

    /**
     * @var array 数据库的账号，包括用户名和域名
     */
    public $accounts;

    /**
     * @var array 全局权限
     */
    public $globalPrivileges;

    /**
     * @var array 数据库的权限
     */
    public $databasePrivileges;

    /**
     * @var array 数据库中表的权限
     */
    public $tablePrivileges;

    /**
     * @var array 数据库表中列的权限
     */
    public $columnPrivileges;
    /**
     * @param string $instanceId 云数据库实例ID
     * @param array $accounts 数据库的账号，包括用户名和域名
     * @param array $globalPrivileges 全局权限
     * @param array $databasePrivileges 数据库的权限
     * @param array $tablePrivileges 数据库中表的权限
     * @param array $columnPrivileges 数据库表中列的权限
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

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->accounts = $param["Accounts"];
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->globalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->databasePrivileges = $param["DatabasePrivileges"];
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->tablePrivileges = $param["TablePrivileges"];
        }

        if (array_key_exists("ColumnPrivileges",$param) and $param["ColumnPrivileges"] !== null) {
            $this->columnPrivileges = $param["ColumnPrivileges"];
        }
    }
}
