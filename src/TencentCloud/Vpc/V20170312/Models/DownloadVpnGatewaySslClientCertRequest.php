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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadVpnGatewaySslClientCert请求参数结构体
 *
 * @method string getSslVpnClientId() 获取SSL-VPN-CLIENT 实例ID。
 * @method void setSslVpnClientId(string $SslVpnClientId) 设置SSL-VPN-CLIENT 实例ID。
 * @method string getSamlToken() 获取SAML-TOKEN
 * @method void setSamlToken(string $SamlToken) 设置SAML-TOKEN
 * @method boolean getIsVpnPortal() 获取VPN门户网站使用。默认Flase
 * @method void setIsVpnPortal(boolean $IsVpnPortal) 设置VPN门户网站使用。默认Flase
 */
class DownloadVpnGatewaySslClientCertRequest extends AbstractModel
{
    /**
     * @var string SSL-VPN-CLIENT 实例ID。
     */
    public $SslVpnClientId;

    /**
     * @var string SAML-TOKEN
     */
    public $SamlToken;

    /**
     * @var boolean VPN门户网站使用。默认Flase
     */
    public $IsVpnPortal;

    /**
     * @param string $SslVpnClientId SSL-VPN-CLIENT 实例ID。
     * @param string $SamlToken SAML-TOKEN
     * @param boolean $IsVpnPortal VPN门户网站使用。默认Flase
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
        if (array_key_exists("SslVpnClientId",$param) and $param["SslVpnClientId"] !== null) {
            $this->SslVpnClientId = $param["SslVpnClientId"];
        }

        if (array_key_exists("SamlToken",$param) and $param["SamlToken"] !== null) {
            $this->SamlToken = $param["SamlToken"];
        }

        if (array_key_exists("IsVpnPortal",$param) and $param["IsVpnPortal"] !== null) {
            $this->IsVpnPortal = $param["IsVpnPortal"];
        }
    }
}
