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
 * tcc doris连接信息
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getJDBCUrl() 获取<p>JDBC连接地址</p>
 * @method void setJDBCUrl(string $JDBCUrl) 设置<p>JDBC连接地址</p>
 * @method string getUser() 获取<p>账号</p>
 * @method void setUser(string $User) 设置<p>账号</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 * @method NetWork getNetWork() 获取<p>网络信息</p>
 * @method void setNetWork(NetWork $NetWork) 设置<p>网络信息</p>
 */
class DorisConnection extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>JDBC连接地址</p>
     */
    public $JDBCUrl;

    /**
     * @var string <p>账号</p>
     */
    public $User;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @var NetWork <p>网络信息</p>
     */
    public $NetWork;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $JDBCUrl <p>JDBC连接地址</p>
     * @param string $User <p>账号</p>
     * @param string $Password <p>密码</p>
     * @param NetWork $NetWork <p>网络信息</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("JDBCUrl",$param) and $param["JDBCUrl"] !== null) {
            $this->JDBCUrl = $param["JDBCUrl"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("NetWork",$param) and $param["NetWork"] !== null) {
            $this->NetWork = new NetWork();
            $this->NetWork->deserialize($param["NetWork"]);
        }
    }
}
