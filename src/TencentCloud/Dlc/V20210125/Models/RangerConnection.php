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
 * tcc ranger连接信息
 *
 * @method string getServiceName() 获取<p>服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称</p>
 * @method string getServiceUrl() 获取<p>服务url</p>
 * @method void setServiceUrl(string $ServiceUrl) 设置<p>服务url</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 */
class RangerConnection extends AbstractModel
{
    /**
     * @var string <p>服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>服务url</p>
     */
    public $ServiceUrl;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @param string $ServiceName <p>服务名称</p>
     * @param string $ServiceUrl <p>服务url</p>
     * @param string $UserName <p>用户名</p>
     * @param string $Password <p>密码</p>
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceUrl",$param) and $param["ServiceUrl"] !== null) {
            $this->ServiceUrl = $param["ServiceUrl"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
