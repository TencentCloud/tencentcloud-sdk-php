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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewayCertificate请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关ID</p>
 * @method string getCertId() 获取<p>ssl平台证书 Id</p>
 * @method void setCertId(string $CertId) 设置<p>ssl平台证书 Id</p>
 * @method array getBindDomains() 获取<p>绑定的域名</p>
 * @method void setBindDomains(array $BindDomains) 设置<p>绑定的域名</p>
 * @method string getName() 获取<p>证书名称</p>
 * @method void setName(string $Name) 设置<p>证书名称</p>
 * @method string getCertType() 获取<p>证书类型</p><p>枚举值：</p><ul><li>SVR： 服务证书</li><li>CA： CA证书</li></ul>
 * @method void setCertType(string $CertType) 设置<p>证书类型</p><p>枚举值：</p><ul><li>SVR： 服务证书</li><li>CA： CA证书</li></ul>
 * @method string getCertUsage() 获取<p>证书用途</p><p>枚举值：</p><ul><li>SERVER： 用作服务端证书</li><li>CLIENT： 用作客户端证书</li></ul>
 * @method void setCertUsage(string $CertUsage) 设置<p>证书用途</p><p>枚举值：</p><ul><li>SERVER： 用作服务端证书</li><li>CLIENT： 用作客户端证书</li></ul>
 * @method string getKey() 获取<p>证书私钥</p>
 * @method void setKey(string $Key) 设置<p>证书私钥</p>
 * @method string getCrt() 获取<p>证书pem格式</p>
 * @method void setCrt(string $Crt) 设置<p>证书pem格式</p>
 */
class CreateCloudNativeAPIGatewayCertificateRequest extends AbstractModel
{
    /**
     * @var string <p>网关ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>ssl平台证书 Id</p>
     */
    public $CertId;

    /**
     * @var array <p>绑定的域名</p>
     */
    public $BindDomains;

    /**
     * @var string <p>证书名称</p>
     */
    public $Name;

    /**
     * @var string <p>证书类型</p><p>枚举值：</p><ul><li>SVR： 服务证书</li><li>CA： CA证书</li></ul>
     */
    public $CertType;

    /**
     * @var string <p>证书用途</p><p>枚举值：</p><ul><li>SERVER： 用作服务端证书</li><li>CLIENT： 用作客户端证书</li></ul>
     */
    public $CertUsage;

    /**
     * @var string <p>证书私钥</p>
     * @deprecated
     */
    public $Key;

    /**
     * @var string <p>证书pem格式</p>
     * @deprecated
     */
    public $Crt;

    /**
     * @param string $GatewayId <p>网关ID</p>
     * @param string $CertId <p>ssl平台证书 Id</p>
     * @param array $BindDomains <p>绑定的域名</p>
     * @param string $Name <p>证书名称</p>
     * @param string $CertType <p>证书类型</p><p>枚举值：</p><ul><li>SVR： 服务证书</li><li>CA： CA证书</li></ul>
     * @param string $CertUsage <p>证书用途</p><p>枚举值：</p><ul><li>SERVER： 用作服务端证书</li><li>CLIENT： 用作客户端证书</li></ul>
     * @param string $Key <p>证书私钥</p>
     * @param string $Crt <p>证书pem格式</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertUsage",$param) and $param["CertUsage"] !== null) {
            $this->CertUsage = $param["CertUsage"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Crt",$param) and $param["Crt"] !== null) {
            $this->Crt = $param["Crt"];
        }
    }
}
