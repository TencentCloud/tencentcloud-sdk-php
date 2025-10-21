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
 * ModifyHostsCertificate请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getHosts() 获取需要修改证书配置的加速域名。
 * @method void setHosts(array $Hosts) 设置需要修改证书配置的加速域名。
 * @method string getMode() 获取配置服务端证书的模式，取值有：
<ul><li>disable：不配置服务端证书；</li>
<li>eofreecert：通过自动验证申请免费证书并部署。验证方式详见：[申请免费证书支持的验证方式](https://cloud.tencent.com/document/product/1552/90437)

- 在 NS 或者 DNSPod 托管接入模式下，仅支持自动验证的方式申请免费证书。
- 当免费证书申请失败时会导致证书部署失败，您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口获取申请失败原因。</li>
</ul><li>eofreecert_manual：部署 DNS 委派验证或者文件验证申请的免费证书。在部署免费证书前，您需要触发<a href = 'https://tcloud4api.woa.com/document/product/1657/927322?!preview&!document=1'>申请免费证书</a>接口申请免费证书。在免费证书申请成功后，你可以通过该枚举值对免费证书进行部署；</li>
<ul><li>注意：在对免费证书部署时，需要保证当前已存在申请成功的免费证书。您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口检查当前是否已存在申请成功的免费证书。</li>
</ul><li>sslcert：配置 SSL 托管服务端证书。</li>
 * @method void setMode(string $Mode) 设置配置服务端证书的模式，取值有：
<ul><li>disable：不配置服务端证书；</li>
<li>eofreecert：通过自动验证申请免费证书并部署。验证方式详见：[申请免费证书支持的验证方式](https://cloud.tencent.com/document/product/1552/90437)

- 在 NS 或者 DNSPod 托管接入模式下，仅支持自动验证的方式申请免费证书。
- 当免费证书申请失败时会导致证书部署失败，您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口获取申请失败原因。</li>
</ul><li>eofreecert_manual：部署 DNS 委派验证或者文件验证申请的免费证书。在部署免费证书前，您需要触发<a href = 'https://tcloud4api.woa.com/document/product/1657/927322?!preview&!document=1'>申请免费证书</a>接口申请免费证书。在免费证书申请成功后，你可以通过该枚举值对免费证书进行部署；</li>
<ul><li>注意：在对免费证书部署时，需要保证当前已存在申请成功的免费证书。您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口检查当前是否已存在申请成功的免费证书。</li>
</ul><li>sslcert：配置 SSL 托管服务端证书。</li>
 * @method array getServerCertInfo() 获取SSL 证书配置，本参数仅在 mode 为 sslcert 时生效，传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
 * @method void setServerCertInfo(array $ServerCertInfo) 设置SSL 证书配置，本参数仅在 mode 为 sslcert 时生效，传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
 * @method string getApplyType() 获取托管类型，取值有：
<li>none：不托管EO；</li>
<li>apply：托管EO</li>
不填，默认取值为none。
 * @method void setApplyType(string $ApplyType) 设置托管类型，取值有：
<li>none：不托管EO；</li>
<li>apply：托管EO</li>
不填，默认取值为none。
 * @method MutualTLS getClientCertInfo() 获取在边缘双向认证场景下，该字段为客户端的 CA 证书，部署在 EO 节点内，用于客户端对 EO 节点进行认证。默认关闭，不填写表示保持原有配置。
 * @method void setClientCertInfo(MutualTLS $ClientCertInfo) 设置在边缘双向认证场景下，该字段为客户端的 CA 证书，部署在 EO 节点内，用于客户端对 EO 节点进行认证。默认关闭，不填写表示保持原有配置。
 * @method UpstreamCertInfo getUpstreamCertInfo() 获取用于配置 EO 节点回源时携带的证书，用于回源双向认证握手，默认关闭，不填写表示保持原有配置。该配置当前为白名单内测中，如需使用，请[联系我们](https://cloud.tencent.com/online-service)。
 * @method void setUpstreamCertInfo(UpstreamCertInfo $UpstreamCertInfo) 设置用于配置 EO 节点回源时携带的证书，用于回源双向认证握手，默认关闭，不填写表示保持原有配置。该配置当前为白名单内测中，如需使用，请[联系我们](https://cloud.tencent.com/online-service)。
 */
class ModifyHostsCertificateRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 需要修改证书配置的加速域名。
     */
    public $Hosts;

    /**
     * @var string 配置服务端证书的模式，取值有：
<ul><li>disable：不配置服务端证书；</li>
<li>eofreecert：通过自动验证申请免费证书并部署。验证方式详见：[申请免费证书支持的验证方式](https://cloud.tencent.com/document/product/1552/90437)

- 在 NS 或者 DNSPod 托管接入模式下，仅支持自动验证的方式申请免费证书。
- 当免费证书申请失败时会导致证书部署失败，您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口获取申请失败原因。</li>
</ul><li>eofreecert_manual：部署 DNS 委派验证或者文件验证申请的免费证书。在部署免费证书前，您需要触发<a href = 'https://tcloud4api.woa.com/document/product/1657/927322?!preview&!document=1'>申请免费证书</a>接口申请免费证书。在免费证书申请成功后，你可以通过该枚举值对免费证书进行部署；</li>
<ul><li>注意：在对免费证书部署时，需要保证当前已存在申请成功的免费证书。您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口检查当前是否已存在申请成功的免费证书。</li>
</ul><li>sslcert：配置 SSL 托管服务端证书。</li>
     */
    public $Mode;

    /**
     * @var array SSL 证书配置，本参数仅在 mode 为 sslcert 时生效，传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
     */
    public $ServerCertInfo;

    /**
     * @var string 托管类型，取值有：
<li>none：不托管EO；</li>
<li>apply：托管EO</li>
不填，默认取值为none。
     * @deprecated
     */
    public $ApplyType;

    /**
     * @var MutualTLS 在边缘双向认证场景下，该字段为客户端的 CA 证书，部署在 EO 节点内，用于客户端对 EO 节点进行认证。默认关闭，不填写表示保持原有配置。
     */
    public $ClientCertInfo;

    /**
     * @var UpstreamCertInfo 用于配置 EO 节点回源时携带的证书，用于回源双向认证握手，默认关闭，不填写表示保持原有配置。该配置当前为白名单内测中，如需使用，请[联系我们](https://cloud.tencent.com/online-service)。
     */
    public $UpstreamCertInfo;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $Hosts 需要修改证书配置的加速域名。
     * @param string $Mode 配置服务端证书的模式，取值有：
<ul><li>disable：不配置服务端证书；</li>
<li>eofreecert：通过自动验证申请免费证书并部署。验证方式详见：[申请免费证书支持的验证方式](https://cloud.tencent.com/document/product/1552/90437)

- 在 NS 或者 DNSPod 托管接入模式下，仅支持自动验证的方式申请免费证书。
- 当免费证书申请失败时会导致证书部署失败，您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口获取申请失败原因。</li>
</ul><li>eofreecert_manual：部署 DNS 委派验证或者文件验证申请的免费证书。在部署免费证书前，您需要触发<a href = 'https://tcloud4api.woa.com/document/product/1657/927322?!preview&!document=1'>申请免费证书</a>接口申请免费证书。在免费证书申请成功后，你可以通过该枚举值对免费证书进行部署；</li>
<ul><li>注意：在对免费证书部署时，需要保证当前已存在申请成功的免费证书。您可以通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口检查当前是否已存在申请成功的免费证书。</li>
</ul><li>sslcert：配置 SSL 托管服务端证书。</li>
     * @param array $ServerCertInfo SSL 证书配置，本参数仅在 mode 为 sslcert 时生效，传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
     * @param string $ApplyType 托管类型，取值有：
<li>none：不托管EO；</li>
<li>apply：托管EO</li>
不填，默认取值为none。
     * @param MutualTLS $ClientCertInfo 在边缘双向认证场景下，该字段为客户端的 CA 证书，部署在 EO 节点内，用于客户端对 EO 节点进行认证。默认关闭，不填写表示保持原有配置。
     * @param UpstreamCertInfo $UpstreamCertInfo 用于配置 EO 节点回源时携带的证书，用于回源双向认证握手，默认关闭，不填写表示保持原有配置。该配置当前为白名单内测中，如需使用，请[联系我们](https://cloud.tencent.com/online-service)。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ServerCertInfo",$param) and $param["ServerCertInfo"] !== null) {
            $this->ServerCertInfo = [];
            foreach ($param["ServerCertInfo"] as $key => $value){
                $obj = new ServerCertInfo();
                $obj->deserialize($value);
                array_push($this->ServerCertInfo, $obj);
            }
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
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
