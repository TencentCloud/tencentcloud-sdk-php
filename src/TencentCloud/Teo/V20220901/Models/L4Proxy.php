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
 * 四层代理实例。
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getProxyId() 获取四层代理实例 ID。
 * @method void setProxyId(string $ProxyId) 设置四层代理实例 ID。
 * @method string getProxyName() 获取四层代理实例名称。
 * @method void setProxyName(string $ProxyName) 设置四层代理实例名称。
 * @method string getArea() 获取四层代理实例的加速区域。 
<li>mainland：中国大陆可用区；</li>
<li>overseas： 全球可用区（不含中国大陆）；</li>
 <li>global：全球可用区。</li>	
 * @method void setArea(string $Area) 设置四层代理实例的加速区域。 
<li>mainland：中国大陆可用区；</li>
<li>overseas： 全球可用区（不含中国大陆）；</li>
 <li>global：全球可用区。</li>	
 * @method string getCname() 获取接入 CNAME。
 * @method void setCname(string $Cname) 设置接入 CNAME。
 * @method array getIps() 获取开启固定 IP 后，该值会返回对应的接入 IP；未开启时，该值为空。
 * @method void setIps(array $Ips) 设置开启固定 IP 后，该值会返回对应的接入 IP；未开启时，该值为空。
 * @method string getStatus() 获取四层代理实例状态。
<li>online：已启用；</li>
<li>offline：已停用；</li>
<li>progress：部署中；</li>	
<li>stopping：停用中；</li>
<li>banned：已封禁；</li>
<li>fail：部署失败/停用失败。</li>	
 * @method void setStatus(string $Status) 设置四层代理实例状态。
<li>online：已启用；</li>
<li>offline：已停用；</li>
<li>progress：部署中；</li>	
<li>stopping：停用中；</li>
<li>banned：已封禁；</li>
<li>fail：部署失败/停用失败。</li>	
 * @method string getIpv6() 获取是否开启 IPv6 访问。 
<li>on：开启；</li> 
<li>off：关闭。</li>
 * @method void setIpv6(string $Ipv6) 设置是否开启 IPv6 访问。 
<li>on：开启；</li> 
<li>off：关闭。</li>
 * @method string getStaticIp() 获取是否开启固定 IP。
 <li>on：开启；</li> <li>off：关闭。</li>
 * @method void setStaticIp(string $StaticIp) 设置是否开启固定 IP。
 <li>on：开启；</li> <li>off：关闭。</li>
 * @method string getAccelerateMainland() 获取是否开启中国大陆网络优化。
 <li>on：开启</li> <li>off：关闭</li>
 * @method void setAccelerateMainland(string $AccelerateMainland) 设置是否开启中国大陆网络优化。
 <li>on：开启</li> <li>off：关闭</li>
 * @method DDosProtectionConfig getDDosProtectionConfig() 获取安全防护配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDosProtectionConfig(DDosProtectionConfig $DDosProtectionConfig) 设置安全防护配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getL4ProxyRuleCount() 获取四层代理实例下的转发规则数量。
 * @method void setL4ProxyRuleCount(integer $L4ProxyRuleCount) 设置四层代理实例下的转发规则数量。
 * @method string getUpdateTime() 获取最新变更时间。
 * @method void setUpdateTime(string $UpdateTime) 设置最新变更时间。
 */
class L4Proxy extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 四层代理实例 ID。
     */
    public $ProxyId;

    /**
     * @var string 四层代理实例名称。
     */
    public $ProxyName;

    /**
     * @var string 四层代理实例的加速区域。 
<li>mainland：中国大陆可用区；</li>
<li>overseas： 全球可用区（不含中国大陆）；</li>
 <li>global：全球可用区。</li>	
     */
    public $Area;

    /**
     * @var string 接入 CNAME。
     */
    public $Cname;

    /**
     * @var array 开启固定 IP 后，该值会返回对应的接入 IP；未开启时，该值为空。
     */
    public $Ips;

    /**
     * @var string 四层代理实例状态。
<li>online：已启用；</li>
<li>offline：已停用；</li>
<li>progress：部署中；</li>	
<li>stopping：停用中；</li>
<li>banned：已封禁；</li>
<li>fail：部署失败/停用失败。</li>	
     */
    public $Status;

    /**
     * @var string 是否开启 IPv6 访问。 
<li>on：开启；</li> 
<li>off：关闭。</li>
     */
    public $Ipv6;

    /**
     * @var string 是否开启固定 IP。
 <li>on：开启；</li> <li>off：关闭。</li>
     */
    public $StaticIp;

    /**
     * @var string 是否开启中国大陆网络优化。
 <li>on：开启</li> <li>off：关闭</li>
     */
    public $AccelerateMainland;

    /**
     * @var DDosProtectionConfig 安全防护配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDosProtectionConfig;

    /**
     * @var integer 四层代理实例下的转发规则数量。
     */
    public $L4ProxyRuleCount;

    /**
     * @var string 最新变更时间。
     */
    public $UpdateTime;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $ProxyId 四层代理实例 ID。
     * @param string $ProxyName 四层代理实例名称。
     * @param string $Area 四层代理实例的加速区域。 
<li>mainland：中国大陆可用区；</li>
<li>overseas： 全球可用区（不含中国大陆）；</li>
 <li>global：全球可用区。</li>	
     * @param string $Cname 接入 CNAME。
     * @param array $Ips 开启固定 IP 后，该值会返回对应的接入 IP；未开启时，该值为空。
     * @param string $Status 四层代理实例状态。
<li>online：已启用；</li>
<li>offline：已停用；</li>
<li>progress：部署中；</li>	
<li>stopping：停用中；</li>
<li>banned：已封禁；</li>
<li>fail：部署失败/停用失败。</li>	
     * @param string $Ipv6 是否开启 IPv6 访问。 
<li>on：开启；</li> 
<li>off：关闭。</li>
     * @param string $StaticIp 是否开启固定 IP。
 <li>on：开启；</li> <li>off：关闭。</li>
     * @param string $AccelerateMainland 是否开启中国大陆网络优化。
 <li>on：开启</li> <li>off：关闭</li>
     * @param DDosProtectionConfig $DDosProtectionConfig 安全防护配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $L4ProxyRuleCount 四层代理实例下的转发规则数量。
     * @param string $UpdateTime 最新变更时间。
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

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            $this->Ips = $param["Ips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("StaticIp",$param) and $param["StaticIp"] !== null) {
            $this->StaticIp = $param["StaticIp"];
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = $param["AccelerateMainland"];
        }

        if (array_key_exists("DDosProtectionConfig",$param) and $param["DDosProtectionConfig"] !== null) {
            $this->DDosProtectionConfig = new DDosProtectionConfig();
            $this->DDosProtectionConfig->deserialize($param["DDosProtectionConfig"]);
        }

        if (array_key_exists("L4ProxyRuleCount",$param) and $param["L4ProxyRuleCount"] !== null) {
            $this->L4ProxyRuleCount = $param["L4ProxyRuleCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
