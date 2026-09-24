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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tcc PostgreSQL连接信息
 *
 * @method string getIp() 获取<p>IP地址</p>
 * @method void setIp(string $Ip) 设置<p>IP地址</p>
 * @method string getPort() 获取<p>端口</p>
 * @method void setPort(string $Port) 设置<p>端口</p>
 * @method string getUser() 获取<p>用户名</p>
 * @method void setUser(string $User) 设置<p>用户名</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名字</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名字</p>
 * @method NetWork getNetWork() 获取<p>网络信息</p>
 * @method void setNetWork(NetWork $NetWork) 设置<p>网络信息</p>
 * @method string getDatabase() 获取<p>数据库</p>
 * @method void setDatabase(string $Database) 设置<p>数据库</p>
 */
class PostgreSQLConnection extends AbstractModel
{
    /**
     * @var string <p>IP地址</p>
     */
    public $Ip;

    /**
     * @var string <p>端口</p>
     */
    public $Port;

    /**
     * @var string <p>用户名</p>
     */
    public $User;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名字</p>
     */
    public $InstanceName;

    /**
     * @var NetWork <p>网络信息</p>
     */
    public $NetWork;

    /**
     * @var string <p>数据库</p>
     */
    public $Database;

    /**
     * @param string $Ip <p>IP地址</p>
     * @param string $Port <p>端口</p>
     * @param string $User <p>用户名</p>
     * @param string $Password <p>密码</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名字</p>
     * @param NetWork $NetWork <p>网络信息</p>
     * @param string $Database <p>数据库</p>
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NetWork",$param) and $param["NetWork"] !== null) {
            $this->NetWork = new NetWork();
            $this->NetWork->deserialize($param["NetWork"]);
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }
    }
}
