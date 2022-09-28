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
 * 域名配置信息
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getStatus() 获取加速服务状态，取值为：
<li> process：部署中；</li>
<li> online：已启动；</li>
<li> offline：已关闭。</li>
 * @method void setStatus(string $Status) 设置加速服务状态，取值为：
<li> process：部署中；</li>
<li> online：已启动；</li>
<li> offline：已关闭。</li>
 * @method string getHost() 获取域名。
 * @method void setHost(string $Host) 设置域名。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method string getCname() 获取分配的Cname域名
 * @method void setCname(string $Cname) 设置分配的Cname域名
 * @method string getId() 获取资源ID。
 * @method void setId(string $Id) 设置资源ID。
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getLock() 获取锁状态。
 * @method void setLock(integer $Lock) 设置锁状态。
 * @method integer getMode() 获取域名状态类型。
 * @method void setMode(integer $Mode) 设置域名状态类型。
 * @method string getArea() 获取域名加速地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
 * @method void setArea(string $Area) 设置域名加速地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
 * @method AccelerateType getAccelerateType() 获取加速类型配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccelerateType(AccelerateType $AccelerateType) 设置加速类型配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Https getHttps() 获取Https配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttps(Https $Https) 设置Https配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheConfig getCacheConfig() 获取缓存配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheConfig(CacheConfig $CacheConfig) 设置缓存配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Origin getOrigin() 获取源站配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrigin(Origin $Origin) 设置源站配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SecurityType getSecurityType() 获取安全类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityType(SecurityType $SecurityType) 设置安全类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheKey getCacheKey() 获取缓存键配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheKey(CacheKey $CacheKey) 设置缓存键配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Compression getCompression() 获取智能压缩配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompression(Compression $Compression) 设置智能压缩配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Waf getWaf() 获取Waf防护配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaf(Waf $Waf) 设置Waf防护配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CC getCC() 获取CC防护配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCC(CC $CC) 设置CC防护配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DDoS getDDoS() 获取DDoS防护配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoS(DDoS $DDoS) 设置DDoS防护配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartRouting getSmartRouting() 获取智能路由配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartRouting(SmartRouting $SmartRouting) 设置智能路由配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ipv6 getIpv6() 获取Ipv6访问配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6(Ipv6 $Ipv6) 设置Ipv6访问配置项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientIpCountry getClientIpCountry() 获取回源时是否携带客户端IP所属地域信息的配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIpCountry(ClientIpCountry $ClientIpCountry) 设置回源时是否携带客户端IP所属地域信息的配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetailHost extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 加速服务状态，取值为：
<li> process：部署中；</li>
<li> online：已启动；</li>
<li> offline：已关闭。</li>
     */
    public $Status;

    /**
     * @var string 域名。
     */
    public $Host;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var string 分配的Cname域名
     */
    public $Cname;

    /**
     * @var string 资源ID。
     */
    public $Id;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 锁状态。
     */
    public $Lock;

    /**
     * @var integer 域名状态类型。
     */
    public $Mode;

    /**
     * @var string 域名加速地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
     */
    public $Area;

    /**
     * @var AccelerateType 加速类型配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccelerateType;

    /**
     * @var Https Https配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Https;

    /**
     * @var CacheConfig 缓存配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheConfig;

    /**
     * @var Origin 源站配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Origin;

    /**
     * @var SecurityType 安全类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityType;

    /**
     * @var CacheKey 缓存键配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheKey;

    /**
     * @var Compression 智能压缩配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compression;

    /**
     * @var Waf Waf防护配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Waf;

    /**
     * @var CC CC防护配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CC;

    /**
     * @var DDoS DDoS防护配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoS;

    /**
     * @var SmartRouting 智能路由配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartRouting;

    /**
     * @var Ipv6 Ipv6访问配置项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6;

    /**
     * @var ClientIpCountry 回源时是否携带客户端IP所属地域信息的配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIpCountry;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $Status 加速服务状态，取值为：
<li> process：部署中；</li>
<li> online：已启动；</li>
<li> offline：已关闭。</li>
     * @param string $Host 域名。
     * @param string $ZoneName 站点名称。
     * @param string $Cname 分配的Cname域名
     * @param string $Id 资源ID。
     * @param string $InstanceId 实例ID。
     * @param integer $Lock 锁状态。
     * @param integer $Mode 域名状态类型。
     * @param string $Area 域名加速地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>
     * @param AccelerateType $AccelerateType 加速类型配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Https $Https Https配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheConfig $CacheConfig 缓存配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Origin $Origin 源站配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SecurityType $SecurityType 安全类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheKey $CacheKey 缓存键配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Compression $Compression 智能压缩配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Waf $Waf Waf防护配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CC $CC CC防护配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DDoS $DDoS DDoS防护配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartRouting $SmartRouting 智能路由配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ipv6 $Ipv6 Ipv6访问配置项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientIpCountry $ClientIpCountry 回源时是否携带客户端IP所属地域信息的配置。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Lock",$param) and $param["Lock"] !== null) {
            $this->Lock = $param["Lock"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("AccelerateType",$param) and $param["AccelerateType"] !== null) {
            $this->AccelerateType = new AccelerateType();
            $this->AccelerateType->deserialize($param["AccelerateType"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new CacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = new SecurityType();
            $this->SecurityType->deserialize($param["SecurityType"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new Compression();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("Waf",$param) and $param["Waf"] !== null) {
            $this->Waf = new Waf();
            $this->Waf->deserialize($param["Waf"]);
        }

        if (array_key_exists("CC",$param) and $param["CC"] !== null) {
            $this->CC = new CC();
            $this->CC->deserialize($param["CC"]);
        }

        if (array_key_exists("DDoS",$param) and $param["DDoS"] !== null) {
            $this->DDoS = new DDoS();
            $this->DDoS->deserialize($param["DDoS"]);
        }

        if (array_key_exists("SmartRouting",$param) and $param["SmartRouting"] !== null) {
            $this->SmartRouting = new SmartRouting();
            $this->SmartRouting->deserialize($param["SmartRouting"]);
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("ClientIpCountry",$param) and $param["ClientIpCountry"] !== null) {
            $this->ClientIpCountry = new ClientIpCountry();
            $this->ClientIpCountry->deserialize($param["ClientIpCountry"]);
        }
    }
}
