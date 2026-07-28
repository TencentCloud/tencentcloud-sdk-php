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
 * ReloadBalanceDBProxyNode请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例ID</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID</p>
 * @method string getProxyGroupId() 获取<p>Proxy代理组ID（不传则默认操作该实例下唯一的代理）</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>Proxy代理组ID（不传则默认操作该实例下唯一的代理）</p>
 * @method string getAddressId() 获取<p>Proxy地址ID。传入时校验归属，实际重平衡为代理组维度</p>
 * @method void setAddressId(string $AddressId) 设置<p>Proxy地址ID。传入时校验归属，实际重平衡为代理组维度</p>
 */
class ReloadBalanceDBProxyNodeRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>Proxy代理组ID（不传则默认操作该实例下唯一的代理）</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>Proxy地址ID。传入时校验归属，实际重平衡为代理组维度</p>
     */
    public $AddressId;

    /**
     * @param string $DBInstanceId <p>实例ID</p>
     * @param string $ProxyGroupId <p>Proxy代理组ID（不传则默认操作该实例下唯一的代理）</p>
     * @param string $AddressId <p>Proxy地址ID。传入时校验归属，实际重平衡为代理组维度</p>
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

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }
    }
}
