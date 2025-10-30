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
 * 加速域名所对应的证书信息。
 *
 * @method string getMode() 获取配置服务端证书的模式，取值有： <ul><li>disable：不配置服务端证书；</li> <li>eofreecert：通过自动验证申请免费证书并部署。验证方式详见：[申请免费证书支持的验证方式](https://cloud.tencent.com/document/product/1552/90437) - 在 NS 或者 DNSPod 托管接入模式下，仅支持自动验证的方式申请免费证书。 - 当免费证书申请失败时会导致证书部署失败，您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口获取申请失败原因。</li><li>eofreecert_manual：部署 DNS 委派验证或者文件验证申请的免费证书。在部署免费证书前，您需要触发<a href = 'https://tcloud4api.woa.com/document/product/1657/927322?!preview&!document=1'>申请免费证书</a>接口申请免费证书。在免费证书申请成功后，你可以通过该枚举值对免费证书进行部署；</li> <ul><li>注意：在对免费证书部署时，需要保证当前已存在申请成功的免费证书。您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口检查当前是否已存在申请成功的免费证书。</li> </ul> <li>sslcert：配置 SSL 托管服务端证书。</li></ul>
 * @method void setMode(string $Mode) 设置配置服务端证书的模式，取值有： <ul><li>disable：不配置服务端证书；</li> <li>eofreecert：通过自动验证申请免费证书并部署。验证方式详见：[申请免费证书支持的验证方式](https://cloud.tencent.com/document/product/1552/90437) - 在 NS 或者 DNSPod 托管接入模式下，仅支持自动验证的方式申请免费证书。 - 当免费证书申请失败时会导致证书部署失败，您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口获取申请失败原因。</li><li>eofreecert_manual：部署 DNS 委派验证或者文件验证申请的免费证书。在部署免费证书前，您需要触发<a href = 'https://tcloud4api.woa.com/document/product/1657/927322?!preview&!document=1'>申请免费证书</a>接口申请免费证书。在免费证书申请成功后，你可以通过该枚举值对免费证书进行部署；</li> <ul><li>注意：在对免费证书部署时，需要保证当前已存在申请成功的免费证书。您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口检查当前是否已存在申请成功的免费证书。</li> </ul> <li>sslcert：配置 SSL 托管服务端证书。</li></ul>
 * @method array getList() 获取服务端证书列表，相关证书部署在 EO 的入口侧。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置服务端证书列表，相关证书部署在 EO 的入口侧。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MutualTLS getClientCertInfo() 获取在边缘双向认证场景下，该字段为客户端的 CA 证书，部署在 EO 节点内，用于 EO 节点认证客户端证书。
 * @method void setClientCertInfo(MutualTLS $ClientCertInfo) 设置在边缘双向认证场景下，该字段为客户端的 CA 证书，部署在 EO 节点内，用于 EO 节点认证客户端证书。
 * @method UpstreamCertInfo getUpstreamCertInfo() 获取用于 EO 节点回源时携带的证书，源站启用双向认证握手时使用，用于源站认证客户端证书是否有效，确保请求来源于受信任的 EO 节点。
 * @method void setUpstreamCertInfo(UpstreamCertInfo $UpstreamCertInfo) 设置用于 EO 节点回源时携带的证书，源站启用双向认证握手时使用，用于源站认证客户端证书是否有效，确保请求来源于受信任的 EO 节点。
 */
class AccelerationDomainCertificate extends AbstractModel
{
    /**
     * @var string 配置服务端证书的模式，取值有： <ul><li>disable：不配置服务端证书；</li> <li>eofreecert：通过自动验证申请免费证书并部署。验证方式详见：[申请免费证书支持的验证方式](https://cloud.tencent.com/document/product/1552/90437) - 在 NS 或者 DNSPod 托管接入模式下，仅支持自动验证的方式申请免费证书。 - 当免费证书申请失败时会导致证书部署失败，您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口获取申请失败原因。</li><li>eofreecert_manual：部署 DNS 委派验证或者文件验证申请的免费证书。在部署免费证书前，您需要触发<a href = 'https://tcloud4api.woa.com/document/product/1657/927322?!preview&!document=1'>申请免费证书</a>接口申请免费证书。在免费证书申请成功后，你可以通过该枚举值对免费证书进行部署；</li> <ul><li>注意：在对免费证书部署时，需要保证当前已存在申请成功的免费证书。您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口检查当前是否已存在申请成功的免费证书。</li> </ul> <li>sslcert：配置 SSL 托管服务端证书。</li></ul>
     */
    public $Mode;

    /**
     * @var array 服务端证书列表，相关证书部署在 EO 的入口侧。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @var MutualTLS 在边缘双向认证场景下，该字段为客户端的 CA 证书，部署在 EO 节点内，用于 EO 节点认证客户端证书。
     */
    public $ClientCertInfo;

    /**
     * @var UpstreamCertInfo 用于 EO 节点回源时携带的证书，源站启用双向认证握手时使用，用于源站认证客户端证书是否有效，确保请求来源于受信任的 EO 节点。
     */
    public $UpstreamCertInfo;

    /**
     * @param string $Mode 配置服务端证书的模式，取值有： <ul><li>disable：不配置服务端证书；</li> <li>eofreecert：通过自动验证申请免费证书并部署。验证方式详见：[申请免费证书支持的验证方式](https://cloud.tencent.com/document/product/1552/90437) - 在 NS 或者 DNSPod 托管接入模式下，仅支持自动验证的方式申请免费证书。 - 当免费证书申请失败时会导致证书部署失败，您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口获取申请失败原因。</li><li>eofreecert_manual：部署 DNS 委派验证或者文件验证申请的免费证书。在部署免费证书前，您需要触发<a href = 'https://tcloud4api.woa.com/document/product/1657/927322?!preview&!document=1'>申请免费证书</a>接口申请免费证书。在免费证书申请成功后，你可以通过该枚举值对免费证书进行部署；</li> <ul><li>注意：在对免费证书部署时，需要保证当前已存在申请成功的免费证书。您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口检查当前是否已存在申请成功的免费证书。</li> </ul> <li>sslcert：配置 SSL 托管服务端证书。</li></ul>
     * @param array $List 服务端证书列表，相关证书部署在 EO 的入口侧。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MutualTLS $ClientCertInfo 在边缘双向认证场景下，该字段为客户端的 CA 证书，部署在 EO 节点内，用于 EO 节点认证客户端证书。
     * @param UpstreamCertInfo $UpstreamCertInfo 用于 EO 节点回源时携带的证书，源站启用双向认证握手时使用，用于源站认证客户端证书是否有效，确保请求来源于受信任的 EO 节点。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("ClientCertInfo",$param) and $param["ClientCertInfo"] !== null) {
            $this->ClientCertInfo = new MutualTLS();
            $this->ClientCertInfo->deserialize($param["ClientCertInfo"]);
        }

        if (array_key_exists("UpstreamCertInfo",$param) and $param["UpstreamCertInfo"] !== null) {
            $this->UpstreamCertInfo = new UpstreamCertInfo();
            $this->UpstreamCertInfo->deserialize($param["UpstreamCertInfo"]);
        }
    }
}
