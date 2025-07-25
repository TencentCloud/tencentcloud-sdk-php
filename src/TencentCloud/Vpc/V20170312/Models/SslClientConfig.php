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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadVpnGatewaySslClientCert 使用
 *
 * @method string getSslVpnClientConfiguration() 获取客户端配置
 * @method void setSslVpnClientConfiguration(string $SslVpnClientConfiguration) 设置客户端配置
 * @method string getSslVpnRootCert() 获取更证书
 * @method void setSslVpnRootCert(string $SslVpnRootCert) 设置更证书
 * @method string getSslVpnKey() 获取客户端密钥
 * @method void setSslVpnKey(string $SslVpnKey) 设置客户端密钥
 * @method string getSslVpnCert() 获取客户端证书
 * @method void setSslVpnCert(string $SslVpnCert) 设置客户端证书
 * @method string getSslVpnClientId() 获取SSL-VPN-CLIENT 实例ID。
 * @method void setSslVpnClientId(string $SslVpnClientId) 设置SSL-VPN-CLIENT 实例ID。
 */
class SslClientConfig extends AbstractModel
{
    /**
     * @var string 客户端配置
     */
    public $SslVpnClientConfiguration;

    /**
     * @var string 更证书
     */
    public $SslVpnRootCert;

    /**
     * @var string 客户端密钥
     */
    public $SslVpnKey;

    /**
     * @var string 客户端证书
     */
    public $SslVpnCert;

    /**
     * @var string SSL-VPN-CLIENT 实例ID。
     */
    public $SslVpnClientId;

    /**
     * @param string $SslVpnClientConfiguration 客户端配置
     * @param string $SslVpnRootCert 更证书
     * @param string $SslVpnKey 客户端密钥
     * @param string $SslVpnCert 客户端证书
     * @param string $SslVpnClientId SSL-VPN-CLIENT 实例ID。
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
        if (array_key_exists("SslVpnClientConfiguration",$param) and $param["SslVpnClientConfiguration"] !== null) {
            $this->SslVpnClientConfiguration = $param["SslVpnClientConfiguration"];
        }

        if (array_key_exists("SslVpnRootCert",$param) and $param["SslVpnRootCert"] !== null) {
            $this->SslVpnRootCert = $param["SslVpnRootCert"];
        }

        if (array_key_exists("SslVpnKey",$param) and $param["SslVpnKey"] !== null) {
            $this->SslVpnKey = $param["SslVpnKey"];
        }

        if (array_key_exists("SslVpnCert",$param) and $param["SslVpnCert"] !== null) {
            $this->SslVpnCert = $param["SslVpnCert"];
        }

        if (array_key_exists("SslVpnClientId",$param) and $param["SslVpnClientId"] !== null) {
            $this->SslVpnClientId = $param["SslVpnClientId"];
        }
    }
}
