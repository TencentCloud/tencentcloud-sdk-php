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
<li>disable：不配置服务端证书；</li>
<li>eofreecert：配置 EdgeOne 免费服务端证书；</li>
<li>sslcert：配置 SSL 托管服务端证书；</li>
不填写表示服务端证书保持原有配置。
 * @method void setMode(string $Mode) 设置配置服务端证书的模式，取值有：
<li>disable：不配置服务端证书；</li>
<li>eofreecert：配置 EdgeOne 免费服务端证书；</li>
<li>sslcert：配置 SSL 托管服务端证书；</li>
不填写表示服务端证书保持原有配置。
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
<li>disable：不配置服务端证书；</li>
<li>eofreecert：配置 EdgeOne 免费服务端证书；</li>
<li>sslcert：配置 SSL 托管服务端证书；</li>
不填写表示服务端证书保持原有配置。
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
     * @param string $ZoneId 站点 ID。
     * @param array $Hosts 需要修改证书配置的加速域名。
     * @param string $Mode 配置服务端证书的模式，取值有：
<li>disable：不配置服务端证书；</li>
<li>eofreecert：配置 EdgeOne 免费服务端证书；</li>
<li>sslcert：配置 SSL 托管服务端证书；</li>
不填写表示服务端证书保持原有配置。
     * @param array $ServerCertInfo SSL 证书配置，本参数仅在 mode 为 sslcert 时生效，传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
     * @param string $ApplyType 托管类型，取值有：
<li>none：不托管EO；</li>
<li>apply：托管EO</li>
不填，默认取值为none。
     * @param MutualTLS $ClientCertInfo 在边缘双向认证场景下，该字段为客户端的 CA 证书，部署在 EO 节点内，用于客户端对 EO 节点进行认证。默认关闭，不填写表示保持原有配置。
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
    }
}
