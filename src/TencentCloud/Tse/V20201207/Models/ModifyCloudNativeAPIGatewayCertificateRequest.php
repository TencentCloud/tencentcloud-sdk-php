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
 * ModifyCloudNativeAPIGatewayCertificate请求参数结构体
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method string getId() 获取证书id
 * @method void setId(string $Id) 设置证书id
 * @method string getName() 获取证书名称，即将废弃
 * @method void setName(string $Name) 设置证书名称，即将废弃
 * @method string getKey() 获取证书私钥，CertSource为native时必填。
 * @method void setKey(string $Key) 设置证书私钥，CertSource为native时必填。
 * @method string getCrt() 获取证书pem格式，CertSource为native时必填。
 * @method void setCrt(string $Crt) 设置证书pem格式，CertSource为native时必填。
 * @method array getBindDomains() 获取绑定的域名，即将废弃
 * @method void setBindDomains(array $BindDomains) 设置绑定的域名，即将废弃
 * @method string getCertId() 获取ssl平台证书 Id，CertSource为ssl时必填。
 * @method void setCertId(string $CertId) 设置ssl平台证书 Id，CertSource为ssl时必填。
 * @method string getCertSource() 获取证书来源
- ssl (ssl平台证书)，默认值
- native (kong自定义证书) 

 * @method void setCertSource(string $CertSource) 设置证书来源
- ssl (ssl平台证书)，默认值
- native (kong自定义证书) 
 */
class ModifyCloudNativeAPIGatewayCertificateRequest extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var string 证书id
     */
    public $Id;

    /**
     * @var string 证书名称，即将废弃
     * @deprecated
     */
    public $Name;

    /**
     * @var string 证书私钥，CertSource为native时必填。
     */
    public $Key;

    /**
     * @var string 证书pem格式，CertSource为native时必填。
     */
    public $Crt;

    /**
     * @var array 绑定的域名，即将废弃
     * @deprecated
     */
    public $BindDomains;

    /**
     * @var string ssl平台证书 Id，CertSource为ssl时必填。
     */
    public $CertId;

    /**
     * @var string 证书来源
- ssl (ssl平台证书)，默认值
- native (kong自定义证书) 

     */
    public $CertSource;

    /**
     * @param string $GatewayId 网关ID
     * @param string $Id 证书id
     * @param string $Name 证书名称，即将废弃
     * @param string $Key 证书私钥，CertSource为native时必填。
     * @param string $Crt 证书pem格式，CertSource为native时必填。
     * @param array $BindDomains 绑定的域名，即将废弃
     * @param string $CertId ssl平台证书 Id，CertSource为ssl时必填。
     * @param string $CertSource 证书来源
- ssl (ssl平台证书)，默认值
- native (kong自定义证书) 
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Crt",$param) and $param["Crt"] !== null) {
            $this->Crt = $param["Crt"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }
    }
}
