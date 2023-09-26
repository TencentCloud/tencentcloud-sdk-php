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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHostsCertificate请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getHosts() 获取需要修改证书配置的加速域名。
 * @method void setHosts(array $Hosts) 设置需要修改证书配置的加速域名。
 * @method string getMode() 获取配置证书的模式，取值有：
<li>disable：不配置证书；</li>
<li>eofreecert：配置 EdgeOne 免费证书；</li>
<li>sslcert：配置 SSL 证书。</li>不填时默认取值为 disable。
 * @method void setMode(string $Mode) 设置配置证书的模式，取值有：
<li>disable：不配置证书；</li>
<li>eofreecert：配置 EdgeOne 免费证书；</li>
<li>sslcert：配置 SSL 证书。</li>不填时默认取值为 disable。
 * @method array getServerCertInfo() 获取SSL 证书配置，本参数仅在 mode = sslcert 时生效，传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/certoverview) 查看 CertId。
 * @method void setServerCertInfo(array $ServerCertInfo) 设置SSL 证书配置，本参数仅在 mode = sslcert 时生效，传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/certoverview) 查看 CertId。
 * @method string getApplyType() 获取托管类型，取值有：
<li>none：不托管EO；</li>
<li>apply：托管EO</li>
不填，默认取值为none。
 * @method void setApplyType(string $ApplyType) 设置托管类型，取值有：
<li>none：不托管EO；</li>
<li>apply：托管EO</li>
不填，默认取值为none。
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
     * @var string 配置证书的模式，取值有：
<li>disable：不配置证书；</li>
<li>eofreecert：配置 EdgeOne 免费证书；</li>
<li>sslcert：配置 SSL 证书。</li>不填时默认取值为 disable。
     */
    public $Mode;

    /**
     * @var array SSL 证书配置，本参数仅在 mode = sslcert 时生效，传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/certoverview) 查看 CertId。
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
     * @param string $ZoneId 站点 ID。
     * @param array $Hosts 需要修改证书配置的加速域名。
     * @param string $Mode 配置证书的模式，取值有：
<li>disable：不配置证书；</li>
<li>eofreecert：配置 EdgeOne 免费证书；</li>
<li>sslcert：配置 SSL 证书。</li>不填时默认取值为 disable。
     * @param array $ServerCertInfo SSL 证书配置，本参数仅在 mode = sslcert 时生效，传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/certoverview) 查看 CertId。
     * @param string $ApplyType 托管类型，取值有：
<li>none：不托管EO；</li>
<li>apply：托管EO</li>
不填，默认取值为none。
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
    }
}
