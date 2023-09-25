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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewayCertificate请求参数结构体
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method array getBindDomains() 获取绑定的域名
 * @method void setBindDomains(array $BindDomains) 设置绑定的域名
 * @method string getCertId() 获取ssl平台证书 Id
 * @method void setCertId(string $CertId) 设置ssl平台证书 Id
 * @method string getName() 获取证书名称
 * @method void setName(string $Name) 设置证书名称
 * @method string getKey() 获取证书私钥
 * @method void setKey(string $Key) 设置证书私钥
 * @method string getCrt() 获取证书pem格式
 * @method void setCrt(string $Crt) 设置证书pem格式
 */
class CreateCloudNativeAPIGatewayCertificateRequest extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var array 绑定的域名
     */
    public $BindDomains;

    /**
     * @var string ssl平台证书 Id
     */
    public $CertId;

    /**
     * @var string 证书名称
     */
    public $Name;

    /**
     * @var string 证书私钥
     * @deprecated
     */
    public $Key;

    /**
     * @var string 证书pem格式
     * @deprecated
     */
    public $Crt;

    /**
     * @param string $GatewayId 网关ID
     * @param array $BindDomains 绑定的域名
     * @param string $CertId ssl平台证书 Id
     * @param string $Name 证书名称
     * @param string $Key 证书私钥
     * @param string $Crt 证书pem格式
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

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
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
    }
}
