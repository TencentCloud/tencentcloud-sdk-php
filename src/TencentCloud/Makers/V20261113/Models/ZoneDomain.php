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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点下的自定义域名
 *
 * @method string getType() 获取<p>Custom 或 Preset</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>Custom 或 Preset</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取<p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置<p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>域名状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>域名状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnv() 获取<p>绑定的环境 slug，默认 Production</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnv(string $Env) 设置<p>绑定的环境 slug，默认 Production</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneId() 获取<p>站点 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取<p>加速区域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置<p>加速区域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCname() 获取<p>CNAME</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置<p>CNAME</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMainDomain() 获取<p>主域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainDomain(string $MainDomain) 设置<p>主域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SwitchConfig getIpv6() 获取<p>IPv6</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6(SwitchConfig $Ipv6) 设置<p>IPv6</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SwitchConfig getHttp2() 获取<p>HTTP/2</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttp2(SwitchConfig $Http2) 设置<p>HTTP/2</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SwitchConfig getOcspStapling() 获取<p>OCSP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcspStapling(SwitchConfig $OcspStapling) 设置<p>OCSP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ForceRedirectConfig getForceRedirect() 获取<p>强制 HTTPS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceRedirect(ForceRedirectConfig $ForceRedirect) 设置<p>强制 HTTPS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HstsConfig getHsts() 获取<p>HSTS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHsts(HstsConfig $Hsts) 设置<p>HSTS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OwnershipVerification getOwnershipVerification() 获取<p>归属校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) 设置<p>归属校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ZoneDomain extends AbstractModel
{
    /**
     * @var string <p>Custom 或 Preset</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string <p>域名状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>绑定的环境 slug，默认 Production</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Env;

    /**
     * @var string <p>站点 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string <p>加速区域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @var string <p>CNAME</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @var string <p>主域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainDomain;

    /**
     * @var SwitchConfig <p>IPv6</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6;

    /**
     * @var SwitchConfig <p>HTTP/2</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Http2;

    /**
     * @var SwitchConfig <p>OCSP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcspStapling;

    /**
     * @var ForceRedirectConfig <p>强制 HTTPS</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceRedirect;

    /**
     * @var HstsConfig <p>HSTS</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hsts;

    /**
     * @var OwnershipVerification <p>归属校验</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnershipVerification;

    /**
     * @param string $Type <p>Custom 或 Preset</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain <p>域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>域名状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Env <p>绑定的环境 slug，默认 Production</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneId <p>站点 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area <p>加速区域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cname <p>CNAME</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MainDomain <p>主域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SwitchConfig $Ipv6 <p>IPv6</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SwitchConfig $Http2 <p>HTTP/2</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SwitchConfig $OcspStapling <p>OCSP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ForceRedirectConfig $ForceRedirect <p>强制 HTTPS</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HstsConfig $Hsts <p>HSTS</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OwnershipVerification $OwnershipVerification <p>归属校验</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("MainDomain",$param) and $param["MainDomain"] !== null) {
            $this->MainDomain = $param["MainDomain"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new SwitchConfig();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = new SwitchConfig();
            $this->Http2->deserialize($param["Http2"]);
        }

        if (array_key_exists("OcspStapling",$param) and $param["OcspStapling"] !== null) {
            $this->OcspStapling = new SwitchConfig();
            $this->OcspStapling->deserialize($param["OcspStapling"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirectConfig();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Hsts",$param) and $param["Hsts"] !== null) {
            $this->Hsts = new HstsConfig();
            $this->Hsts->deserialize($param["Hsts"]);
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }
    }
}
