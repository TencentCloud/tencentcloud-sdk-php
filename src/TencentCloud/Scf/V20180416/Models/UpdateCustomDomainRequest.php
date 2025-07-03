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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCustomDomain请求参数结构体
 *
 * @method string getDomain() 获取自定义域名
 * @method void setDomain(string $Domain) 设置自定义域名
 * @method string getProtocol() 获取协议，取值范围：HTTP, HTTPS, HTTP&HTTPS
 * @method void setProtocol(string $Protocol) 设置协议，取值范围：HTTP, HTTPS, HTTP&HTTPS
 * @method CertConf getCertConfig() 获取证书配置信息，HTTPS协议必穿
 * @method void setCertConfig(CertConf $CertConfig) 设置证书配置信息，HTTPS协议必穿
 * @method WafConf getWafConfig() 获取web 应用防火墙配置
 * @method void setWafConfig(WafConf $WafConfig) 设置web 应用防火墙配置
 * @method array getEndpointsConfig() 获取路由配置
 * @method void setEndpointsConfig(array $EndpointsConfig) 设置路由配置
 */
class UpdateCustomDomainRequest extends AbstractModel
{
    /**
     * @var string 自定义域名
     */
    public $Domain;

    /**
     * @var string 协议，取值范围：HTTP, HTTPS, HTTP&HTTPS
     */
    public $Protocol;

    /**
     * @var CertConf 证书配置信息，HTTPS协议必穿
     */
    public $CertConfig;

    /**
     * @var WafConf web 应用防火墙配置
     */
    public $WafConfig;

    /**
     * @var array 路由配置
     */
    public $EndpointsConfig;

    /**
     * @param string $Domain 自定义域名
     * @param string $Protocol 协议，取值范围：HTTP, HTTPS, HTTP&HTTPS
     * @param CertConf $CertConfig 证书配置信息，HTTPS协议必穿
     * @param WafConf $WafConfig web 应用防火墙配置
     * @param array $EndpointsConfig 路由配置
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CertConfig",$param) and $param["CertConfig"] !== null) {
            $this->CertConfig = new CertConf();
            $this->CertConfig->deserialize($param["CertConfig"]);
        }

        if (array_key_exists("WafConfig",$param) and $param["WafConfig"] !== null) {
            $this->WafConfig = new WafConf();
            $this->WafConfig->deserialize($param["WafConfig"]);
        }

        if (array_key_exists("EndpointsConfig",$param) and $param["EndpointsConfig"] !== null) {
            $this->EndpointsConfig = [];
            foreach ($param["EndpointsConfig"] as $key => $value){
                $obj = new EndpointsConf();
                $obj->deserialize($value);
                array_push($this->EndpointsConfig, $obj);
            }
        }
    }
}
