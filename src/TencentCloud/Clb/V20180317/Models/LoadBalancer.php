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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡实例的信息
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
 * @method string getLoadBalancerName() 获取负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称。
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性；对于内网属性的负载均衡，可通过绑定EIP出公网，具体可参考EIP文档[绑定弹性公网IP](https://cloud.tencent.com/document/product/215/16700)。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性；对于内网属性的负载均衡，可通过绑定EIP出公网，具体可参考EIP文档[绑定弹性公网IP](https://cloud.tencent.com/document/product/215/16700)。
 * @method integer getForward() 获取负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
 * @method void setForward(integer $Forward) 设置负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
 * @method string getDomain() 获取负载均衡实例的域名，仅公网传统型和域名型负载均衡实例才提供该字段。逐步下线中，建议用LoadBalancerDomain替代。
 * @method void setDomain(string $Domain) 设置负载均衡实例的域名，仅公网传统型和域名型负载均衡实例才提供该字段。逐步下线中，建议用LoadBalancerDomain替代。
 * @method array getLoadBalancerVips() 获取负载均衡实例的 VIP 列表。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡实例的 VIP 列表。
 * @method integer getStatus() 获取负载均衡实例的状态，包括
0：创建中，1：正常运行。
 * @method void setStatus(integer $Status) 设置负载均衡实例的状态，包括
0：创建中，1：正常运行。
 * @method string getCreateTime() 获取负载均衡实例的创建时间。
格式：YYYY-MM-DD HH:mm:ss
 * @method void setCreateTime(string $CreateTime) 设置负载均衡实例的创建时间。
格式：YYYY-MM-DD HH:mm:ss
 * @method string getStatusTime() 获取负载均衡实例的上次状态转换时间。
格式：YYYY-MM-DD HH:mm:ss
 * @method void setStatusTime(string $StatusTime) 设置负载均衡实例的上次状态转换时间。
格式：YYYY-MM-DD HH:mm:ss
 * @method integer getProjectId() 获取负载均衡实例所属的项目 ID， 0 表示默认项目。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡实例所属的项目 ID， 0 表示默认项目。
 * @method string getVpcId() 获取私有网络的 ID
 * @method void setVpcId(string $VpcId) 设置私有网络的 ID
 * @method integer getOpenBgp() 获取高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
 * @method void setOpenBgp(integer $OpenBgp) 设置高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
 * @method boolean getSnat() 获取是否开启 SNAT，在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 SNAT 的。
 * @method void setSnat(boolean $Snat) 设置是否开启 SNAT，在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 SNAT 的。
 * @method integer getIsolation() 获取是否被隔离，0：表示未被隔离，1：表示被隔离。
 * @method void setIsolation(integer $Isolation) 设置是否被隔离，0：表示未被隔离，1：表示被隔离。
 * @method string getLog() 获取用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLog(string $Log) 设置用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取负载均衡实例所在的子网（仅对内网VPC型LB有意义）
 * @method void setSubnetId(string $SubnetId) 设置负载均衡实例所在的子网（仅对内网VPC型LB有意义）
 * @method array getTags() 获取负载均衡实例的标签信息
 * @method void setTags(array $Tags) 设置负载均衡实例的标签信息
 * @method array getSecureGroups() 获取负载均衡实例的安全组
 * @method void setSecureGroups(array $SecureGroups) 设置负载均衡实例的安全组
 * @method TargetRegionInfo getTargetRegionInfo() 获取负载均衡实例绑定的后端设备的基本信息
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) 设置负载均衡实例绑定的后端设备的基本信息
 * @method string getAnycastZone() 获取anycast负载均衡的发布域，对于非anycast的负载均衡，此字段返回为空字符串
 * @method void setAnycastZone(string $AnycastZone) 设置anycast负载均衡的发布域，对于非anycast的负载均衡，此字段返回为空字符串
 * @method string getAddressIPVersion() 获取IP版本，ipv4 | ipv6
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置IP版本，ipv4 | ipv6
 * @method integer getNumericalVpcId() 获取数值形式的私有网络 ID，可以通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
 * @method void setNumericalVpcId(integer $NumericalVpcId) 设置数值形式的私有网络 ID，可以通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
 * @method string getVipIsp() 获取负载均衡IP地址所属的运营商。

- BGP :  BGP（多线）
- CMCC：中国移动单线
- CTCC：中国电信单线
- CUCC：中国联通单线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipIsp(string $VipIsp) 设置负载均衡IP地址所属的运营商。

- BGP :  BGP（多线）
- CMCC：中国移动单线
- CTCC：中国电信单线
- CUCC：中国联通单线
注意：此字段可能返回 null，表示取不到有效值。
 * @method ZoneInfo getMasterZone() 获取主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterZone(ZoneInfo $MasterZone) 设置主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupZoneSet() 获取备可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupZoneSet(array $BackupZoneSet) 设置备可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTime() 获取负载均衡实例被隔离的时间。
格式：YYYY-MM-DD HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置负载均衡实例被隔离的时间。
格式：YYYY-MM-DD HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取负载均衡实例的过期时间，仅对预付费负载均衡生效。
格式：YYYY-MM-DD HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置负载均衡实例的过期时间，仅对预付费负载均衡生效。
格式：YYYY-MM-DD HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取负载均衡实例的计费类型，PREPAID：包年包月，POSTPAID_BY_HOUR：按量计费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置负载均衡实例的计费类型，PREPAID：包年包月，POSTPAID_BY_HOUR：按量计费
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternetAccessible getNetworkAttributes() 获取负载均衡实例的网络属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkAttributes(InternetAccessible $NetworkAttributes) 设置负载均衡实例的网络属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method LBChargePrepaid getPrepaidAttributes() 获取负载均衡实例的预付费相关属性，仅在 ChargeType=PREPAID 时显示。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepaidAttributes(LBChargePrepaid $PrepaidAttributes) 设置负载均衡实例的预付费相关属性，仅在 ChargeType=PREPAID 时显示。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogSetId() 获取负载均衡日志服务(CLS)的日志集ID
 * @method void setLogSetId(string $LogSetId) 设置负载均衡日志服务(CLS)的日志集ID
 * @method string getLogTopicId() 获取负载均衡日志服务(CLS)的日志主题ID
 * @method void setLogTopicId(string $LogTopicId) 设置负载均衡日志服务(CLS)的日志主题ID
 * @method string getAddressIPv6() 获取负载均衡实例的IPv6地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressIPv6(string $AddressIPv6) 设置负载均衡实例的IPv6地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtraInfo getExtraInfo() 获取暂做保留，一般用户无需关注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) 设置暂做保留，一般用户无需关注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDDos() 获取是否可绑定高防包
 * @method void setIsDDos(boolean $IsDDos) 设置是否可绑定高防包
 * @method string getConfigId() 获取负载均衡维度的个性化配置ID
 * @method void setConfigId(string $ConfigId) 设置负载均衡维度的个性化配置ID
 * @method boolean getLoadBalancerPassToTarget() 获取后端服务是否放通来自LB的流量
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) 设置后端服务是否放通来自LB的流量
 * @method ExclusiveCluster getExclusiveCluster() 获取内网独占集群
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) 设置内网独占集群
 * @method string getIPv6Mode() 获取IP地址版本为ipv6时此字段有意义，IPv6Nat64 | IPv6FullChain。
IPv6Nat64: 基于 NAT64 IPv6 过渡技术实现的负载均衡器。
IPv6FullChain：基于 IPv6 单栈技术实现的负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPv6Mode(string $IPv6Mode) 设置IP地址版本为ipv6时此字段有意义，IPv6Nat64 | IPv6FullChain。
IPv6Nat64: 基于 NAT64 IPv6 过渡技术实现的负载均衡器。
IPv6FullChain：基于 IPv6 单栈技术实现的负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSnatPro() 获取是否开启SnatPro。
 * @method void setSnatPro(boolean $SnatPro) 设置是否开启SnatPro。
 * @method array getSnatIps() 获取开启SnatPro负载均衡后，SnatIp列表。
 * @method void setSnatIps(array $SnatIps) 设置开启SnatPro负载均衡后，SnatIp列表。
 * @method string getSlaType() 获取性能容量型规格。<ul><li> clb.c1.small：简约型规格 </li><li> clb.c2.medium：标准型规格 </li><li> clb.c3.small：高阶型1规格 </li><li> clb.c3.medium：高阶型2规格 </li><li> clb.c4.small：超强型1规格 </li><li> clb.c4.medium：超强型2规格 </li><li> clb.c4.large：超强型3规格 </li><li> clb.c4.xlarge：超强型4规格 </li><li>""：非性能容量型实例</li></ul>
 * @method void setSlaType(string $SlaType) 设置性能容量型规格。<ul><li> clb.c1.small：简约型规格 </li><li> clb.c2.medium：标准型规格 </li><li> clb.c3.small：高阶型1规格 </li><li> clb.c3.medium：高阶型2规格 </li><li> clb.c4.small：超强型1规格 </li><li> clb.c4.medium：超强型2规格 </li><li> clb.c4.large：超强型3规格 </li><li> clb.c4.xlarge：超强型4规格 </li><li>""：非性能容量型实例</li></ul>
 * @method boolean getIsBlock() 获取vip是否被封堵
 * @method void setIsBlock(boolean $IsBlock) 设置vip是否被封堵
 * @method string getIsBlockTime() 获取封堵或解封时间。
格式：YYYY-MM-DD HH:mm:ss。
 * @method void setIsBlockTime(string $IsBlockTime) 设置封堵或解封时间。
格式：YYYY-MM-DD HH:mm:ss。
 * @method boolean getLocalBgp() 获取IP类型是否是本地BGP
 * @method void setLocalBgp(boolean $LocalBgp) 设置IP类型是否是本地BGP
 * @method string getClusterTag() 获取7层独占标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterTag(string $ClusterTag) 设置7层独占标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMixIpTarget() 获取开启IPv6FullChain负载均衡7层监听器支持混绑IPv4/IPv6目标功能。
 * @method void setMixIpTarget(boolean $MixIpTarget) 设置开启IPv6FullChain负载均衡7层监听器支持混绑IPv4/IPv6目标功能。
 * @method array getZones() 获取私有网络内网负载均衡，就近接入模式下规则所落在的可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZones(array $Zones) 设置私有网络内网负载均衡，就近接入模式下规则所落在的可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNfvInfo() 获取CLB是否为NFV，空：不是，l7nfv：七层是NFV。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNfvInfo(string $NfvInfo) 设置CLB是否为NFV，空：不是，l7nfv：七层是NFV。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealthLogSetId() 获取负载均衡日志服务(CLS)的健康检查日志集ID
 * @method void setHealthLogSetId(string $HealthLogSetId) 设置负载均衡日志服务(CLS)的健康检查日志集ID
 * @method string getHealthLogTopicId() 获取负载均衡日志服务(CLS)的健康检查日志主题ID
 * @method void setHealthLogTopicId(string $HealthLogTopicId) 设置负载均衡日志服务(CLS)的健康检查日志主题ID
 * @method array getClusterIds() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIds(array $ClusterIds) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttributeFlags() 获取负载均衡的属性，传入字符串数组来决定是否开启
DeleteProtect: 删除保护，开启后防止负载均衡被误删除。 
UserInVisible: 用户不可见，控制负载均衡对用户的可见性。 
BlockStatus: 阻塞状态，用于限制负载均衡的某些操作或流量。 
NoLBNat: 禁用负载均衡的NAT功能，用于特定场景下的流量直接转发。 
BanStatus: 封禁状态，用于暂停负载均衡服务或限制访问。 
ShiftupFlag: 升配标志，用于标识负载均衡需要升级配置或性能。 
Stop: 停止状态，开启后负载均衡暂停服务。 
NoVpcGw: 不使用VPC网关，用于绕过VPC网关直接处理流量。 
SgInTgw: 安全组在TGW（Transit Gateway）中，涉及网络安全策略配置。 
SharedLimitFlag: 共享限制标志，用于控制负载均衡的共享资源限制。 
WafFlag: Web应用防火墙（WAF）标志，开启后启用WAF保护。 
IsDomainCLB: 域名型负载均衡，标识负载均衡是否基于域名进行流量分发。 
IPv6Snat: IPv6源地址转换（SNAT），用于IPv6网络的源地址处理。 
HideDomain: 隐藏域名，用于隐私保护或特定场景下不暴露域名。 
JumboFrame: 巨型帧支持，开启后支持更大的数据帧以提高网络效率。 
NoLBNatL4IPdc: 四层IP直连无NAT，用于四层负载均衡直接转发IP流量。 
VpcGwL3Service: VPC网关三层服务，涉及三层网络服务的网关功能。 
Ipv62Flag: IPv6扩展标志，用于特定的IPv6功能支持。 
Ipv62ExclusiveFlag: IPv6独占标志，用于专属IPv6流量处理。 
BgpPro: BGP Pro 支持。 
ToaClean: TOA（TCP Option Address）清理，清除TCP选项中的地址信息。 

 * @method void setAttributeFlags(array $AttributeFlags) 设置负载均衡的属性，传入字符串数组来决定是否开启
DeleteProtect: 删除保护，开启后防止负载均衡被误删除。 
UserInVisible: 用户不可见，控制负载均衡对用户的可见性。 
BlockStatus: 阻塞状态，用于限制负载均衡的某些操作或流量。 
NoLBNat: 禁用负载均衡的NAT功能，用于特定场景下的流量直接转发。 
BanStatus: 封禁状态，用于暂停负载均衡服务或限制访问。 
ShiftupFlag: 升配标志，用于标识负载均衡需要升级配置或性能。 
Stop: 停止状态，开启后负载均衡暂停服务。 
NoVpcGw: 不使用VPC网关，用于绕过VPC网关直接处理流量。 
SgInTgw: 安全组在TGW（Transit Gateway）中，涉及网络安全策略配置。 
SharedLimitFlag: 共享限制标志，用于控制负载均衡的共享资源限制。 
WafFlag: Web应用防火墙（WAF）标志，开启后启用WAF保护。 
IsDomainCLB: 域名型负载均衡，标识负载均衡是否基于域名进行流量分发。 
IPv6Snat: IPv6源地址转换（SNAT），用于IPv6网络的源地址处理。 
HideDomain: 隐藏域名，用于隐私保护或特定场景下不暴露域名。 
JumboFrame: 巨型帧支持，开启后支持更大的数据帧以提高网络效率。 
NoLBNatL4IPdc: 四层IP直连无NAT，用于四层负载均衡直接转发IP流量。 
VpcGwL3Service: VPC网关三层服务，涉及三层网络服务的网关功能。 
Ipv62Flag: IPv6扩展标志，用于特定的IPv6功能支持。 
Ipv62ExclusiveFlag: IPv6独占标志，用于专属IPv6流量处理。 
BgpPro: BGP Pro 支持。 
ToaClean: TOA（TCP Option Address）清理，清除TCP选项中的地址信息。 

 * @method string getLoadBalancerDomain() 获取负载均衡实例的域名。
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) 设置负载均衡实例的域名。
 * @method string getEgress() 获取网络出口
 * @method void setEgress(string $Egress) 设置网络出口
 * @method integer getExclusive() 获取实例类型是否为独占型。1：独占型实例。0：非独占型实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExclusive(integer $Exclusive) 设置实例类型是否为独占型。1：独占型实例。0：非独占型实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetCount() 获取已绑定的后端服务数量。
 * @method void setTargetCount(integer $TargetCount) 设置已绑定的后端服务数量。
 * @method string getAssociateEndpoint() 获取负载均衡实例关联的Endpoint id。
 * @method void setAssociateEndpoint(string $AssociateEndpoint) 设置负载均衡实例关联的Endpoint id。
 * @method AvailableZoneAffinityInfo getAvailableZoneAffinityInfo() 获取可用区转发亲和信息
 * @method void setAvailableZoneAffinityInfo(AvailableZoneAffinityInfo $AvailableZoneAffinityInfo) 设置可用区转发亲和信息
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性；对于内网属性的负载均衡，可通过绑定EIP出公网，具体可参考EIP文档[绑定弹性公网IP](https://cloud.tencent.com/document/product/215/16700)。
     */
    public $LoadBalancerType;

    /**
     * @var integer 负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
     */
    public $Forward;

    /**
     * @var string 负载均衡实例的域名，仅公网传统型和域名型负载均衡实例才提供该字段。逐步下线中，建议用LoadBalancerDomain替代。
     */
    public $Domain;

    /**
     * @var array 负载均衡实例的 VIP 列表。
     */
    public $LoadBalancerVips;

    /**
     * @var integer 负载均衡实例的状态，包括
0：创建中，1：正常运行。
     */
    public $Status;

    /**
     * @var string 负载均衡实例的创建时间。
格式：YYYY-MM-DD HH:mm:ss
     */
    public $CreateTime;

    /**
     * @var string 负载均衡实例的上次状态转换时间。
格式：YYYY-MM-DD HH:mm:ss
     */
    public $StatusTime;

    /**
     * @var integer 负载均衡实例所属的项目 ID， 0 表示默认项目。
     */
    public $ProjectId;

    /**
     * @var string 私有网络的 ID
     */
    public $VpcId;

    /**
     * @var integer 高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
     */
    public $OpenBgp;

    /**
     * @var boolean 是否开启 SNAT，在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 SNAT 的。
     */
    public $Snat;

    /**
     * @var integer 是否被隔离，0：表示未被隔离，1：表示被隔离。
     */
    public $Isolation;

    /**
     * @var string 用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Log;

    /**
     * @var string 负载均衡实例所在的子网（仅对内网VPC型LB有意义）
     */
    public $SubnetId;

    /**
     * @var array 负载均衡实例的标签信息
     */
    public $Tags;

    /**
     * @var array 负载均衡实例的安全组
     */
    public $SecureGroups;

    /**
     * @var TargetRegionInfo 负载均衡实例绑定的后端设备的基本信息
     */
    public $TargetRegionInfo;

    /**
     * @var string anycast负载均衡的发布域，对于非anycast的负载均衡，此字段返回为空字符串
     */
    public $AnycastZone;

    /**
     * @var string IP版本，ipv4 | ipv6
     */
    public $AddressIPVersion;

    /**
     * @var integer 数值形式的私有网络 ID，可以通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
     */
    public $NumericalVpcId;

    /**
     * @var string 负载均衡IP地址所属的运营商。

- BGP :  BGP（多线）
- CMCC：中国移动单线
- CTCC：中国电信单线
- CUCC：中国联通单线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VipIsp;

    /**
     * @var ZoneInfo 主可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterZone;

    /**
     * @var array 备可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupZoneSet;

    /**
     * @var string 负载均衡实例被隔离的时间。
格式：YYYY-MM-DD HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @var string 负载均衡实例的过期时间，仅对预付费负载均衡生效。
格式：YYYY-MM-DD HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 负载均衡实例的计费类型，PREPAID：包年包月，POSTPAID_BY_HOUR：按量计费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var InternetAccessible 负载均衡实例的网络属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkAttributes;

    /**
     * @var LBChargePrepaid 负载均衡实例的预付费相关属性，仅在 ChargeType=PREPAID 时显示。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepaidAttributes;

    /**
     * @var string 负载均衡日志服务(CLS)的日志集ID
     */
    public $LogSetId;

    /**
     * @var string 负载均衡日志服务(CLS)的日志主题ID
     */
    public $LogTopicId;

    /**
     * @var string 负载均衡实例的IPv6地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressIPv6;

    /**
     * @var ExtraInfo 暂做保留，一般用户无需关注。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var boolean 是否可绑定高防包
     */
    public $IsDDos;

    /**
     * @var string 负载均衡维度的个性化配置ID
     */
    public $ConfigId;

    /**
     * @var boolean 后端服务是否放通来自LB的流量
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var ExclusiveCluster 内网独占集群
     */
    public $ExclusiveCluster;

    /**
     * @var string IP地址版本为ipv6时此字段有意义，IPv6Nat64 | IPv6FullChain。
IPv6Nat64: 基于 NAT64 IPv6 过渡技术实现的负载均衡器。
IPv6FullChain：基于 IPv6 单栈技术实现的负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPv6Mode;

    /**
     * @var boolean 是否开启SnatPro。
     */
    public $SnatPro;

    /**
     * @var array 开启SnatPro负载均衡后，SnatIp列表。
     */
    public $SnatIps;

    /**
     * @var string 性能容量型规格。<ul><li> clb.c1.small：简约型规格 </li><li> clb.c2.medium：标准型规格 </li><li> clb.c3.small：高阶型1规格 </li><li> clb.c3.medium：高阶型2规格 </li><li> clb.c4.small：超强型1规格 </li><li> clb.c4.medium：超强型2规格 </li><li> clb.c4.large：超强型3规格 </li><li> clb.c4.xlarge：超强型4规格 </li><li>""：非性能容量型实例</li></ul>
     */
    public $SlaType;

    /**
     * @var boolean vip是否被封堵
     */
    public $IsBlock;

    /**
     * @var string 封堵或解封时间。
格式：YYYY-MM-DD HH:mm:ss。
     */
    public $IsBlockTime;

    /**
     * @var boolean IP类型是否是本地BGP
     */
    public $LocalBgp;

    /**
     * @var string 7层独占标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterTag;

    /**
     * @var boolean 开启IPv6FullChain负载均衡7层监听器支持混绑IPv4/IPv6目标功能。
     */
    public $MixIpTarget;

    /**
     * @var array 私有网络内网负载均衡，就近接入模式下规则所落在的可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zones;

    /**
     * @var string CLB是否为NFV，空：不是，l7nfv：七层是NFV。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NfvInfo;

    /**
     * @var string 负载均衡日志服务(CLS)的健康检查日志集ID
     */
    public $HealthLogSetId;

    /**
     * @var string 负载均衡日志服务(CLS)的健康检查日志主题ID
     */
    public $HealthLogTopicId;

    /**
     * @var array 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIds;

    /**
     * @var array 负载均衡的属性，传入字符串数组来决定是否开启
DeleteProtect: 删除保护，开启后防止负载均衡被误删除。 
UserInVisible: 用户不可见，控制负载均衡对用户的可见性。 
BlockStatus: 阻塞状态，用于限制负载均衡的某些操作或流量。 
NoLBNat: 禁用负载均衡的NAT功能，用于特定场景下的流量直接转发。 
BanStatus: 封禁状态，用于暂停负载均衡服务或限制访问。 
ShiftupFlag: 升配标志，用于标识负载均衡需要升级配置或性能。 
Stop: 停止状态，开启后负载均衡暂停服务。 
NoVpcGw: 不使用VPC网关，用于绕过VPC网关直接处理流量。 
SgInTgw: 安全组在TGW（Transit Gateway）中，涉及网络安全策略配置。 
SharedLimitFlag: 共享限制标志，用于控制负载均衡的共享资源限制。 
WafFlag: Web应用防火墙（WAF）标志，开启后启用WAF保护。 
IsDomainCLB: 域名型负载均衡，标识负载均衡是否基于域名进行流量分发。 
IPv6Snat: IPv6源地址转换（SNAT），用于IPv6网络的源地址处理。 
HideDomain: 隐藏域名，用于隐私保护或特定场景下不暴露域名。 
JumboFrame: 巨型帧支持，开启后支持更大的数据帧以提高网络效率。 
NoLBNatL4IPdc: 四层IP直连无NAT，用于四层负载均衡直接转发IP流量。 
VpcGwL3Service: VPC网关三层服务，涉及三层网络服务的网关功能。 
Ipv62Flag: IPv6扩展标志，用于特定的IPv6功能支持。 
Ipv62ExclusiveFlag: IPv6独占标志，用于专属IPv6流量处理。 
BgpPro: BGP Pro 支持。 
ToaClean: TOA（TCP Option Address）清理，清除TCP选项中的地址信息。 

     */
    public $AttributeFlags;

    /**
     * @var string 负载均衡实例的域名。
     */
    public $LoadBalancerDomain;

    /**
     * @var string 网络出口
     */
    public $Egress;

    /**
     * @var integer 实例类型是否为独占型。1：独占型实例。0：非独占型实例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Exclusive;

    /**
     * @var integer 已绑定的后端服务数量。
     */
    public $TargetCount;

    /**
     * @var string 负载均衡实例关联的Endpoint id。
     */
    public $AssociateEndpoint;

    /**
     * @var AvailableZoneAffinityInfo 可用区转发亲和信息
     */
    public $AvailableZoneAffinityInfo;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID。
     * @param string $LoadBalancerName 负载均衡实例的名称。
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性；对于内网属性的负载均衡，可通过绑定EIP出公网，具体可参考EIP文档[绑定弹性公网IP](https://cloud.tencent.com/document/product/215/16700)。
     * @param integer $Forward 负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
     * @param string $Domain 负载均衡实例的域名，仅公网传统型和域名型负载均衡实例才提供该字段。逐步下线中，建议用LoadBalancerDomain替代。
     * @param array $LoadBalancerVips 负载均衡实例的 VIP 列表。
     * @param integer $Status 负载均衡实例的状态，包括
0：创建中，1：正常运行。
     * @param string $CreateTime 负载均衡实例的创建时间。
格式：YYYY-MM-DD HH:mm:ss
     * @param string $StatusTime 负载均衡实例的上次状态转换时间。
格式：YYYY-MM-DD HH:mm:ss
     * @param integer $ProjectId 负载均衡实例所属的项目 ID， 0 表示默认项目。
     * @param string $VpcId 私有网络的 ID
     * @param integer $OpenBgp 高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
     * @param boolean $Snat 是否开启 SNAT，在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 SNAT 的。
     * @param integer $Isolation 是否被隔离，0：表示未被隔离，1：表示被隔离。
     * @param string $Log 用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 负载均衡实例所在的子网（仅对内网VPC型LB有意义）
     * @param array $Tags 负载均衡实例的标签信息
     * @param array $SecureGroups 负载均衡实例的安全组
     * @param TargetRegionInfo $TargetRegionInfo 负载均衡实例绑定的后端设备的基本信息
     * @param string $AnycastZone anycast负载均衡的发布域，对于非anycast的负载均衡，此字段返回为空字符串
     * @param string $AddressIPVersion IP版本，ipv4 | ipv6
     * @param integer $NumericalVpcId 数值形式的私有网络 ID，可以通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
     * @param string $VipIsp 负载均衡IP地址所属的运营商。

- BGP :  BGP（多线）
- CMCC：中国移动单线
- CTCC：中国电信单线
- CUCC：中国联通单线
注意：此字段可能返回 null，表示取不到有效值。
     * @param ZoneInfo $MasterZone 主可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupZoneSet 备可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTime 负载均衡实例被隔离的时间。
格式：YYYY-MM-DD HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 负载均衡实例的过期时间，仅对预付费负载均衡生效。
格式：YYYY-MM-DD HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 负载均衡实例的计费类型，PREPAID：包年包月，POSTPAID_BY_HOUR：按量计费
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternetAccessible $NetworkAttributes 负载均衡实例的网络属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param LBChargePrepaid $PrepaidAttributes 负载均衡实例的预付费相关属性，仅在 ChargeType=PREPAID 时显示。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogSetId 负载均衡日志服务(CLS)的日志集ID
     * @param string $LogTopicId 负载均衡日志服务(CLS)的日志主题ID
     * @param string $AddressIPv6 负载均衡实例的IPv6地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtraInfo $ExtraInfo 暂做保留，一般用户无需关注。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDDos 是否可绑定高防包
     * @param string $ConfigId 负载均衡维度的个性化配置ID
     * @param boolean $LoadBalancerPassToTarget 后端服务是否放通来自LB的流量
     * @param ExclusiveCluster $ExclusiveCluster 内网独占集群
     * @param string $IPv6Mode IP地址版本为ipv6时此字段有意义，IPv6Nat64 | IPv6FullChain。
IPv6Nat64: 基于 NAT64 IPv6 过渡技术实现的负载均衡器。
IPv6FullChain：基于 IPv6 单栈技术实现的负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SnatPro 是否开启SnatPro。
     * @param array $SnatIps 开启SnatPro负载均衡后，SnatIp列表。
     * @param string $SlaType 性能容量型规格。<ul><li> clb.c1.small：简约型规格 </li><li> clb.c2.medium：标准型规格 </li><li> clb.c3.small：高阶型1规格 </li><li> clb.c3.medium：高阶型2规格 </li><li> clb.c4.small：超强型1规格 </li><li> clb.c4.medium：超强型2规格 </li><li> clb.c4.large：超强型3规格 </li><li> clb.c4.xlarge：超强型4规格 </li><li>""：非性能容量型实例</li></ul>
     * @param boolean $IsBlock vip是否被封堵
     * @param string $IsBlockTime 封堵或解封时间。
格式：YYYY-MM-DD HH:mm:ss。
     * @param boolean $LocalBgp IP类型是否是本地BGP
     * @param string $ClusterTag 7层独占标签。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $MixIpTarget 开启IPv6FullChain负载均衡7层监听器支持混绑IPv4/IPv6目标功能。
     * @param array $Zones 私有网络内网负载均衡，就近接入模式下规则所落在的可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NfvInfo CLB是否为NFV，空：不是，l7nfv：七层是NFV。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HealthLogSetId 负载均衡日志服务(CLS)的健康检查日志集ID
     * @param string $HealthLogTopicId 负载均衡日志服务(CLS)的健康检查日志主题ID
     * @param array $ClusterIds 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AttributeFlags 负载均衡的属性，传入字符串数组来决定是否开启
DeleteProtect: 删除保护，开启后防止负载均衡被误删除。 
UserInVisible: 用户不可见，控制负载均衡对用户的可见性。 
BlockStatus: 阻塞状态，用于限制负载均衡的某些操作或流量。 
NoLBNat: 禁用负载均衡的NAT功能，用于特定场景下的流量直接转发。 
BanStatus: 封禁状态，用于暂停负载均衡服务或限制访问。 
ShiftupFlag: 升配标志，用于标识负载均衡需要升级配置或性能。 
Stop: 停止状态，开启后负载均衡暂停服务。 
NoVpcGw: 不使用VPC网关，用于绕过VPC网关直接处理流量。 
SgInTgw: 安全组在TGW（Transit Gateway）中，涉及网络安全策略配置。 
SharedLimitFlag: 共享限制标志，用于控制负载均衡的共享资源限制。 
WafFlag: Web应用防火墙（WAF）标志，开启后启用WAF保护。 
IsDomainCLB: 域名型负载均衡，标识负载均衡是否基于域名进行流量分发。 
IPv6Snat: IPv6源地址转换（SNAT），用于IPv6网络的源地址处理。 
HideDomain: 隐藏域名，用于隐私保护或特定场景下不暴露域名。 
JumboFrame: 巨型帧支持，开启后支持更大的数据帧以提高网络效率。 
NoLBNatL4IPdc: 四层IP直连无NAT，用于四层负载均衡直接转发IP流量。 
VpcGwL3Service: VPC网关三层服务，涉及三层网络服务的网关功能。 
Ipv62Flag: IPv6扩展标志，用于特定的IPv6功能支持。 
Ipv62ExclusiveFlag: IPv6独占标志，用于专属IPv6流量处理。 
BgpPro: BGP Pro 支持。 
ToaClean: TOA（TCP Option Address）清理，清除TCP选项中的地址信息。 

     * @param string $LoadBalancerDomain 负载均衡实例的域名。
     * @param string $Egress 网络出口
     * @param integer $Exclusive 实例类型是否为独占型。1：独占型实例。0：非独占型实例。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetCount 已绑定的后端服务数量。
     * @param string $AssociateEndpoint 负载均衡实例关联的Endpoint id。
     * @param AvailableZoneAffinityInfo $AvailableZoneAffinityInfo 可用区转发亲和信息
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StatusTime",$param) and $param["StatusTime"] !== null) {
            $this->StatusTime = $param["StatusTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("OpenBgp",$param) and $param["OpenBgp"] !== null) {
            $this->OpenBgp = $param["OpenBgp"];
        }

        if (array_key_exists("Snat",$param) and $param["Snat"] !== null) {
            $this->Snat = $param["Snat"];
        }

        if (array_key_exists("Isolation",$param) and $param["Isolation"] !== null) {
            $this->Isolation = $param["Isolation"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SecureGroups",$param) and $param["SecureGroups"] !== null) {
            $this->SecureGroups = $param["SecureGroups"];
        }

        if (array_key_exists("TargetRegionInfo",$param) and $param["TargetRegionInfo"] !== null) {
            $this->TargetRegionInfo = new TargetRegionInfo();
            $this->TargetRegionInfo->deserialize($param["TargetRegionInfo"]);
        }

        if (array_key_exists("AnycastZone",$param) and $param["AnycastZone"] !== null) {
            $this->AnycastZone = $param["AnycastZone"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = new ZoneInfo();
            $this->MasterZone->deserialize($param["MasterZone"]);
        }

        if (array_key_exists("BackupZoneSet",$param) and $param["BackupZoneSet"] !== null) {
            $this->BackupZoneSet = [];
            foreach ($param["BackupZoneSet"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->BackupZoneSet, $obj);
            }
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("NetworkAttributes",$param) and $param["NetworkAttributes"] !== null) {
            $this->NetworkAttributes = new InternetAccessible();
            $this->NetworkAttributes->deserialize($param["NetworkAttributes"]);
        }

        if (array_key_exists("PrepaidAttributes",$param) and $param["PrepaidAttributes"] !== null) {
            $this->PrepaidAttributes = new LBChargePrepaid();
            $this->PrepaidAttributes->deserialize($param["PrepaidAttributes"]);
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("AddressIPv6",$param) and $param["AddressIPv6"] !== null) {
            $this->AddressIPv6 = $param["AddressIPv6"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new ExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("IsDDos",$param) and $param["IsDDos"] !== null) {
            $this->IsDDos = $param["IsDDos"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }

        if (array_key_exists("ExclusiveCluster",$param) and $param["ExclusiveCluster"] !== null) {
            $this->ExclusiveCluster = new ExclusiveCluster();
            $this->ExclusiveCluster->deserialize($param["ExclusiveCluster"]);
        }

        if (array_key_exists("IPv6Mode",$param) and $param["IPv6Mode"] !== null) {
            $this->IPv6Mode = $param["IPv6Mode"];
        }

        if (array_key_exists("SnatPro",$param) and $param["SnatPro"] !== null) {
            $this->SnatPro = $param["SnatPro"];
        }

        if (array_key_exists("SnatIps",$param) and $param["SnatIps"] !== null) {
            $this->SnatIps = [];
            foreach ($param["SnatIps"] as $key => $value){
                $obj = new SnatIp();
                $obj->deserialize($value);
                array_push($this->SnatIps, $obj);
            }
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("IsBlock",$param) and $param["IsBlock"] !== null) {
            $this->IsBlock = $param["IsBlock"];
        }

        if (array_key_exists("IsBlockTime",$param) and $param["IsBlockTime"] !== null) {
            $this->IsBlockTime = $param["IsBlockTime"];
        }

        if (array_key_exists("LocalBgp",$param) and $param["LocalBgp"] !== null) {
            $this->LocalBgp = $param["LocalBgp"];
        }

        if (array_key_exists("ClusterTag",$param) and $param["ClusterTag"] !== null) {
            $this->ClusterTag = $param["ClusterTag"];
        }

        if (array_key_exists("MixIpTarget",$param) and $param["MixIpTarget"] !== null) {
            $this->MixIpTarget = $param["MixIpTarget"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("NfvInfo",$param) and $param["NfvInfo"] !== null) {
            $this->NfvInfo = $param["NfvInfo"];
        }

        if (array_key_exists("HealthLogSetId",$param) and $param["HealthLogSetId"] !== null) {
            $this->HealthLogSetId = $param["HealthLogSetId"];
        }

        if (array_key_exists("HealthLogTopicId",$param) and $param["HealthLogTopicId"] !== null) {
            $this->HealthLogTopicId = $param["HealthLogTopicId"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("AttributeFlags",$param) and $param["AttributeFlags"] !== null) {
            $this->AttributeFlags = $param["AttributeFlags"];
        }

        if (array_key_exists("LoadBalancerDomain",$param) and $param["LoadBalancerDomain"] !== null) {
            $this->LoadBalancerDomain = $param["LoadBalancerDomain"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("TargetCount",$param) and $param["TargetCount"] !== null) {
            $this->TargetCount = $param["TargetCount"];
        }

        if (array_key_exists("AssociateEndpoint",$param) and $param["AssociateEndpoint"] !== null) {
            $this->AssociateEndpoint = $param["AssociateEndpoint"];
        }

        if (array_key_exists("AvailableZoneAffinityInfo",$param) and $param["AvailableZoneAffinityInfo"] !== null) {
            $this->AvailableZoneAffinityInfo = new AvailableZoneAffinityInfo();
            $this->AvailableZoneAffinityInfo->deserialize($param["AvailableZoneAffinityInfo"]);
        }
    }
}
