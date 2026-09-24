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
 * 域名证书配置
 *
 * @method string getHost() 获取域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取配置证书的模式，取值有：
<li>disable：不配置证书；</li>
<li>eofreecert：配置 EdgeOne 免费证书；</li> 
<li>sslcert：配置 SSL 证书；</li> 
 * @method void setMode(string $Mode) 设置配置证书的模式，取值有：
<li>disable：不配置证书；</li>
<li>eofreecert：配置 EdgeOne 免费证书；</li> 
<li>sslcert：配置 SSL 证书；</li> 
 * @method array getHostCertInfo() 获取服务端证书配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCertInfo(array $HostCertInfo) 设置服务端证书配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplyType() 获取申请类型，取值有：
<li>apply：托管EdgeOne；</li>
<li>none：不托管EdgeOne。</li>不填，默认取值为none。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyType(string $ApplyType) 设置申请类型，取值有：
<li>apply：托管EdgeOne；</li>
<li>none：不托管EdgeOne。</li>不填，默认取值为none。
注意：此字段可能返回 null，表示取不到有效值。
 */
class HostsCertificate extends AbstractModel
{
    /**
     * @var string 域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string 配置证书的模式，取值有：
<li>disable：不配置证书；</li>
<li>eofreecert：配置 EdgeOne 免费证书；</li> 
<li>sslcert：配置 SSL 证书；</li> 
     */
    public $Mode;

    /**
     * @var array 服务端证书配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCertInfo;

    /**
     * @var string 申请类型，取值有：
<li>apply：托管EdgeOne；</li>
<li>none：不托管EdgeOne。</li>不填，默认取值为none。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ApplyType;

    /**
     * @param string $Host 域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode 配置证书的模式，取值有：
<li>disable：不配置证书；</li>
<li>eofreecert：配置 EdgeOne 免费证书；</li> 
<li>sslcert：配置 SSL 证书；</li> 
     * @param array $HostCertInfo 服务端证书配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplyType 申请类型，取值有：
<li>apply：托管EdgeOne；</li>
<li>none：不托管EdgeOne。</li>不填，默认取值为none。
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("HostCertInfo",$param) and $param["HostCertInfo"] !== null) {
            $this->HostCertInfo = [];
            foreach ($param["HostCertInfo"] as $key => $value){
                $obj = new HostCertInfo();
                $obj->deserialize($value);
                array_push($this->HostCertInfo, $obj);
            }
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }
    }
}
