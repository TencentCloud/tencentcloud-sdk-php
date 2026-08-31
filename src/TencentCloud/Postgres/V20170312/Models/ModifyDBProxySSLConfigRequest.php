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
 * ModifyDBProxySSLConfig请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例 ID，指定要修改 SSL 配置的数据库代理所属的目标实例
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例 ID，指定要修改 SSL 配置的数据库代理所属的目标实例
 * @method string getProxyGroupId() 获取代理组 ID，指定要修改 SSL 配置的代理组
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组 ID，指定要修改 SSL 配置的代理组
 * @method string getProxyAddressId() 获取代理地址 ID，指定要修改 SSL 配置的代理连接地址
 * @method void setProxyAddressId(string $ProxyAddressId) 设置代理地址 ID，指定要修改 SSL 配置的代理连接地址
 * @method boolean getSSLEnabled() 获取SSL 开关。true：开启 SSL；false：关闭 SSL
 * @method void setSSLEnabled(boolean $SSLEnabled) 设置SSL 开关。true：开启 SSL；false：关闭 SSL
 * @method string getConnectAddress() 获取连接地址。SSLEnabled 为 true 时必填，需与代理地址的 Vip 保持一致，用于 SSL 证书校验
 * @method void setConnectAddress(string $ConnectAddress) 设置连接地址。SSLEnabled 为 true 时必填，需与代理地址的 Vip 保持一致，用于 SSL 证书校验
 */
class ModifyDBProxySSLConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，指定要修改 SSL 配置的数据库代理所属的目标实例
     */
    public $DBInstanceId;

    /**
     * @var string 代理组 ID，指定要修改 SSL 配置的代理组
     */
    public $ProxyGroupId;

    /**
     * @var string 代理地址 ID，指定要修改 SSL 配置的代理连接地址
     */
    public $ProxyAddressId;

    /**
     * @var boolean SSL 开关。true：开启 SSL；false：关闭 SSL
     */
    public $SSLEnabled;

    /**
     * @var string 连接地址。SSLEnabled 为 true 时必填，需与代理地址的 Vip 保持一致，用于 SSL 证书校验
     */
    public $ConnectAddress;

    /**
     * @param string $DBInstanceId 实例 ID，指定要修改 SSL 配置的数据库代理所属的目标实例
     * @param string $ProxyGroupId 代理组 ID，指定要修改 SSL 配置的代理组
     * @param string $ProxyAddressId 代理地址 ID，指定要修改 SSL 配置的代理连接地址
     * @param boolean $SSLEnabled SSL 开关。true：开启 SSL；false：关闭 SSL
     * @param string $ConnectAddress 连接地址。SSLEnabled 为 true 时必填，需与代理地址的 Vip 保持一致，用于 SSL 证书校验
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

        if (array_key_exists("ProxyAddressId",$param) and $param["ProxyAddressId"] !== null) {
            $this->ProxyAddressId = $param["ProxyAddressId"];
        }

        if (array_key_exists("SSLEnabled",$param) and $param["SSLEnabled"] !== null) {
            $this->SSLEnabled = $param["SSLEnabled"];
        }

        if (array_key_exists("ConnectAddress",$param) and $param["ConnectAddress"] !== null) {
            $this->ConnectAddress = $param["ConnectAddress"];
        }
    }
}
