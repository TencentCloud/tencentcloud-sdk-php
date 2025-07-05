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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改源站配置参数。
 *
 * @method string getOriginType() 获取源站类型。取值有：
<li>IPDomain：IPV4、IPV6 或域名类型源站；</li>
<li>OriginGroup：源站组类型源站；</li>
<li>LoadBalance：负载均衡，该功能内测中，如需使用，请提工单或联系智能客服；</li>
<li>COS：腾讯云 COS 对象存储源站；</li>
<li>AWSS3：支持 AWS S3 协议的所有对象存储源站。</li>
 * @method void setOriginType(string $OriginType) 设置源站类型。取值有：
<li>IPDomain：IPV4、IPV6 或域名类型源站；</li>
<li>OriginGroup：源站组类型源站；</li>
<li>LoadBalance：负载均衡，该功能内测中，如需使用，请提工单或联系智能客服；</li>
<li>COS：腾讯云 COS 对象存储源站；</li>
<li>AWSS3：支持 AWS S3 协议的所有对象存储源站。</li>
 * @method string getOrigin() 获取源站地址，根据 OriginType 的取值分为以下情况：
<li>当 OriginType = IPDomain 时，该参数请填写 IPV4、IPV6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 OriginType = AWSS3，该参数请填写 S3 桶的访问域名；</li>
<li>当 OriginType = OriginGroup 时，该参数请填写源站组 ID；</li>
<li>当 OriginType = LoadBalance 时，该参数请填写负载均衡实例 ID，该功能当前仅白名单开放。</li>
 * @method void setOrigin(string $Origin) 设置源站地址，根据 OriginType 的取值分为以下情况：
<li>当 OriginType = IPDomain 时，该参数请填写 IPV4、IPV6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 OriginType = AWSS3，该参数请填写 S3 桶的访问域名；</li>
<li>当 OriginType = OriginGroup 时，该参数请填写源站组 ID；</li>
<li>当 OriginType = LoadBalance 时，该参数请填写负载均衡实例 ID，该功能当前仅白名单开放。</li>
 * @method string getOriginProtocol() 获取回源协议配置。当 OriginType 取值为 IPDomain、OriginGroup、LoadBalance 时该参数必填。取值有：
<li>http：使用 HTTP 协议；</li>
<li>https：使用 HTTPS 协议；</li>
<li>follow：协议跟随。</li>
 * @method void setOriginProtocol(string $OriginProtocol) 设置回源协议配置。当 OriginType 取值为 IPDomain、OriginGroup、LoadBalance 时该参数必填。取值有：
<li>http：使用 HTTP 协议；</li>
<li>https：使用 HTTPS 协议；</li>
<li>follow：协议跟随。</li>
 * @method integer getHTTPOriginPort() 获取HTTP 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 http 或者 follow 时该参数必填。
 * @method void setHTTPOriginPort(integer $HTTPOriginPort) 设置HTTP 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 http 或者 follow 时该参数必填。
 * @method integer getHTTPSOriginPort() 获取HTTPS 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 https 或者 follow 时该参数必填。
 * @method void setHTTPSOriginPort(integer $HTTPSOriginPort) 设置HTTPS 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 https 或者 follow 时该参数必填。
 * @method string getPrivateAccess() 获取指定是否允许访问私有对象存储源站，当源站类型 OriginType = COS 或 AWSS3 时该参数必填，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
 * @method void setPrivateAccess(string $PrivateAccess) 设置指定是否允许访问私有对象存储源站，当源站类型 OriginType = COS 或 AWSS3 时该参数必填，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
 * @method OriginPrivateParameters getPrivateParameters() 获取私有鉴权使用参数，该参数仅当 OriginType = AWSS3 且 PrivateAccess = on 时会生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateParameters(OriginPrivateParameters $PrivateParameters) 设置私有鉴权使用参数，该参数仅当 OriginType = AWSS3 且 PrivateAccess = on 时会生效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModifyOriginParameters extends AbstractModel
{
    /**
     * @var string 源站类型。取值有：
<li>IPDomain：IPV4、IPV6 或域名类型源站；</li>
<li>OriginGroup：源站组类型源站；</li>
<li>LoadBalance：负载均衡，该功能内测中，如需使用，请提工单或联系智能客服；</li>
<li>COS：腾讯云 COS 对象存储源站；</li>
<li>AWSS3：支持 AWS S3 协议的所有对象存储源站。</li>
     */
    public $OriginType;

    /**
     * @var string 源站地址，根据 OriginType 的取值分为以下情况：
<li>当 OriginType = IPDomain 时，该参数请填写 IPV4、IPV6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 OriginType = AWSS3，该参数请填写 S3 桶的访问域名；</li>
<li>当 OriginType = OriginGroup 时，该参数请填写源站组 ID；</li>
<li>当 OriginType = LoadBalance 时，该参数请填写负载均衡实例 ID，该功能当前仅白名单开放。</li>
     */
    public $Origin;

    /**
     * @var string 回源协议配置。当 OriginType 取值为 IPDomain、OriginGroup、LoadBalance 时该参数必填。取值有：
<li>http：使用 HTTP 协议；</li>
<li>https：使用 HTTPS 协议；</li>
<li>follow：协议跟随。</li>
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 http 或者 follow 时该参数必填。
     */
    public $HTTPOriginPort;

    /**
     * @var integer HTTPS 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 https 或者 follow 时该参数必填。
     */
    public $HTTPSOriginPort;

    /**
     * @var string 指定是否允许访问私有对象存储源站，当源站类型 OriginType = COS 或 AWSS3 时该参数必填，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
     */
    public $PrivateAccess;

    /**
     * @var OriginPrivateParameters 私有鉴权使用参数，该参数仅当 OriginType = AWSS3 且 PrivateAccess = on 时会生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateParameters;

    /**
     * @param string $OriginType 源站类型。取值有：
<li>IPDomain：IPV4、IPV6 或域名类型源站；</li>
<li>OriginGroup：源站组类型源站；</li>
<li>LoadBalance：负载均衡，该功能内测中，如需使用，请提工单或联系智能客服；</li>
<li>COS：腾讯云 COS 对象存储源站；</li>
<li>AWSS3：支持 AWS S3 协议的所有对象存储源站。</li>
     * @param string $Origin 源站地址，根据 OriginType 的取值分为以下情况：
<li>当 OriginType = IPDomain 时，该参数请填写 IPV4、IPV6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 OriginType = AWSS3，该参数请填写 S3 桶的访问域名；</li>
<li>当 OriginType = OriginGroup 时，该参数请填写源站组 ID；</li>
<li>当 OriginType = LoadBalance 时，该参数请填写负载均衡实例 ID，该功能当前仅白名单开放。</li>
     * @param string $OriginProtocol 回源协议配置。当 OriginType 取值为 IPDomain、OriginGroup、LoadBalance 时该参数必填。取值有：
<li>http：使用 HTTP 协议；</li>
<li>https：使用 HTTPS 协议；</li>
<li>follow：协议跟随。</li>
     * @param integer $HTTPOriginPort HTTP 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 http 或者 follow 时该参数必填。
     * @param integer $HTTPSOriginPort HTTPS 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 https 或者 follow 时该参数必填。
     * @param string $PrivateAccess 指定是否允许访问私有对象存储源站，当源站类型 OriginType = COS 或 AWSS3 时该参数必填，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
     * @param OriginPrivateParameters $PrivateParameters 私有鉴权使用参数，该参数仅当 OriginType = AWSS3 且 PrivateAccess = on 时会生效。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            $this->OriginProtocol = $param["OriginProtocol"];
        }

        if (array_key_exists("HTTPOriginPort",$param) and $param["HTTPOriginPort"] !== null) {
            $this->HTTPOriginPort = $param["HTTPOriginPort"];
        }

        if (array_key_exists("HTTPSOriginPort",$param) and $param["HTTPSOriginPort"] !== null) {
            $this->HTTPSOriginPort = $param["HTTPSOriginPort"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = new OriginPrivateParameters();
            $this->PrivateParameters->deserialize($param["PrivateParameters"]);
        }
    }
}
