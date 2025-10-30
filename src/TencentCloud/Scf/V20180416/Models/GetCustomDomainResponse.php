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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCustomDomain返回参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method array getEndpointsConfig() 获取路由配置
 * @method void setEndpointsConfig(array $EndpointsConfig) 设置路由配置
 * @method CertConf getCertConfig() 获取证书配置信息
 * @method void setCertConfig(CertConf $CertConfig) 设置证书配置信息
 * @method WafConf getWafConfig() 获取web 应用防火墙配置
 * @method void setWafConfig(WafConf $WafConfig) 设置web 应用防火墙配置
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetCustomDomainResponse extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var array 路由配置
     */
    public $EndpointsConfig;

    /**
     * @var CertConf 证书配置信息
     */
    public $CertConfig;

    /**
     * @var WafConf web 应用防火墙配置
     */
    public $WafConfig;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 域名
     * @param string $Protocol 协议
     * @param array $EndpointsConfig 路由配置
     * @param CertConf $CertConfig 证书配置信息
     * @param WafConf $WafConfig web 应用防火墙配置
     * @param array $Tags 标签
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("EndpointsConfig",$param) and $param["EndpointsConfig"] !== null) {
            $this->EndpointsConfig = [];
            foreach ($param["EndpointsConfig"] as $key => $value){
                $obj = new EndpointsConf();
                $obj->deserialize($value);
                array_push($this->EndpointsConfig, $obj);
            }
        }

        if (array_key_exists("CertConfig",$param) and $param["CertConfig"] !== null) {
            $this->CertConfig = new CertConf();
            $this->CertConfig->deserialize($param["CertConfig"]);
        }

        if (array_key_exists("WafConfig",$param) and $param["WafConfig"] !== null) {
            $this->WafConfig = new WafConf();
            $this->WafConfig->deserialize($param["WafConfig"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
