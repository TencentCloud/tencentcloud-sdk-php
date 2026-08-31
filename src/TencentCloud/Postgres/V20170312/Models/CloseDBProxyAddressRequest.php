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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseDBProxyAddress请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例 ID，指定要关闭代理地址的目标实例</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例 ID，指定要关闭代理地址的目标实例</p>
 * @method string getAddressId() 获取<p>代理地址 ID，指定要关闭（删除）的代理地址</p>
 * @method void setAddressId(string $AddressId) 设置<p>代理地址 ID，指定要关闭（删除）的代理地址</p>
 * @method string getProxyGroupId() 获取<p>代理组 ID。不传则按实例自动查找其默认代理组</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>代理组 ID。不传则按实例自动查找其默认代理组</p>
 */
class CloseDBProxyAddressRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，指定要关闭代理地址的目标实例</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>代理地址 ID，指定要关闭（删除）的代理地址</p>
     */
    public $AddressId;

    /**
     * @var string <p>代理组 ID。不传则按实例自动查找其默认代理组</p>
     */
    public $ProxyGroupId;

    /**
     * @param string $DBInstanceId <p>实例 ID，指定要关闭代理地址的目标实例</p>
     * @param string $AddressId <p>代理地址 ID，指定要关闭（删除）的代理地址</p>
     * @param string $ProxyGroupId <p>代理组 ID。不传则按实例自动查找其默认代理组</p>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }
    }
}
