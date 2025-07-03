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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRotationPassword请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同
 * @method string getUser() 获取关闭密码轮转的实例账户名,例如root
 * @method void setUser(string $User) 设置关闭密码轮转的实例账户名,例如root
 * @method string getHost() 获取关闭密码轮转的实例账户域名，例如%
 * @method void setHost(string $Host) 设置关闭密码轮转的实例账户域名，例如%
 * @method string getPassword() 获取关闭密码轮转后实例账户的最新密码
 * @method void setPassword(string $Password) 设置关闭密码轮转后实例账户的最新密码
 * @method string getEncryptMethod() 获取传入不为空则对密码进行了加密处理
 * @method void setEncryptMethod(string $EncryptMethod) 设置传入不为空则对密码进行了加密处理
 */
class DeleteRotationPasswordRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同
     */
    public $InstanceId;

    /**
     * @var string 关闭密码轮转的实例账户名,例如root
     */
    public $User;

    /**
     * @var string 关闭密码轮转的实例账户域名，例如%
     */
    public $Host;

    /**
     * @var string 关闭密码轮转后实例账户的最新密码
     */
    public $Password;

    /**
     * @var string 传入不为空则对密码进行了加密处理
     */
    public $EncryptMethod;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同
     * @param string $User 关闭密码轮转的实例账户名,例如root
     * @param string $Host 关闭密码轮转的实例账户域名，例如%
     * @param string $Password 关闭密码轮转后实例账户的最新密码
     * @param string $EncryptMethod 传入不为空则对密码进行了加密处理
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }
    }
}
