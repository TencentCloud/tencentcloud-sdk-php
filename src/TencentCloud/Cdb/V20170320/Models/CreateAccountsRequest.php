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
 * @method array getAccounts() 获取云数据库账号
 * @method void setAccounts(array $accounts) 设置云数据库账号
 * @method string getPassword() 获取新账户的密码
 * @method void setPassword(string $password) 设置新账户的密码
 * @method string getDescription() 获取备注信息
 * @method void setDescription(string $description) 设置备注信息
 */

/**
 *CreateAccounts请求参数结构体
 */
class CreateAccountsRequest extends AbstractModel
{
    /**
     * @var string 云数据库实例ID
     */
    public $instanceId;

    /**
     * @var array 云数据库账号
     */
    public $accounts;

    /**
     * @var string 新账户的密码
     */
    public $password;

    /**
     * @var string 备注信息
     */
    public $description;
    /**
     * @param string $instanceId 云数据库实例ID
     * @param array $accounts 云数据库账号
     * @param string $password 新账户的密码
     * @param string $description 备注信息
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->description = $param["Description"];
        }
    }
}
