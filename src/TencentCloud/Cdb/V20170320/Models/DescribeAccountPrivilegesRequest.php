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
 * @method string getUser() 获取数据库的账号名称
 * @method void setUser(string $user) 设置数据库的账号名称
 * @method string getHost() 获取数据库的账号域名
 * @method void setHost(string $host) 设置数据库的账号域名
 */

/**
 *DescribeAccountPrivileges请求参数结构体
 */
class DescribeAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string 云数据库实例ID
     */
    public $instanceId;

    /**
     * @var string 数据库的账号名称
     */
    public $user;

    /**
     * @var string 数据库的账号域名
     */
    public $host;
    /**
     * @param string $instanceId 云数据库实例ID
     * @param string $user 数据库的账号名称
     * @param string $host 数据库的账号域名
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->user = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->host = $param["Host"];
        }
    }
}
