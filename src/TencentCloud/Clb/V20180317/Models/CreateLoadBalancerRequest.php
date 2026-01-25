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
 * CreateLoadBalancer请求参数结构体
 *
 * @method string getLoadBalancerType() 获取<p>负载均衡实例的网络类型：<br>OPEN：公网属性， INTERNAL：内网属性。</p>
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置<p>负载均衡实例的网络类型：<br>OPEN：公网属性， INTERNAL：内网属性。</p>
 * @method integer getForward() 获取<p>负载均衡实例的类型。1：通用的负载均衡实例，目前只支持传入1。</p>
 * @method void setForward(integer $Forward) 设置<p>负载均衡实例的类型。1：通用的负载均衡实例，目前只支持传入1。</p>
 * @method string getLoadBalancerName() 获取<p>负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置<p>负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。</p>
 * @method string getVpcId() 获取<p>负载均衡后端目标设备所属的网络 ID，如vpc-12345678，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> 接口获取。 不填此参数则默认为DefaultVPC。创建内网负载均衡实例时，此参数必填。</p>
 * @method void setVpcId(string $VpcId) 设置<p>负载均衡后端目标设备所属的网络 ID，如vpc-12345678，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> 接口获取。 不填此参数则默认为DefaultVPC。创建内网负载均衡实例时，此参数必填。</p>
 * @method string getSubnetId() 获取<p>在私有网络内购买内网负载均衡实例的情况下，必须指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。创建内网负载均衡实例时，此参数必填，创建公网IPv4负载均衡实例时，不支持指定该参数。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>在私有网络内购买内网负载均衡实例的情况下，必须指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。创建内网负载均衡实例时，此参数必填，创建公网IPv4负载均衡实例时，不支持指定该参数。</p>
 * @method integer getProjectId() 获取<p>负载均衡实例所属的项目 ID，默认项目 ID 为0。可以通过 <a href="https://cloud.tencent.com/document/api/651/78725">DescribeProject</a> 接口获取。不填此参数则视为默认项目。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>负载均衡实例所属的项目 ID，默认项目 ID 为0。可以通过 <a href="https://cloud.tencent.com/document/api/651/78725">DescribeProject</a> 接口获取。不填此参数则视为默认项目。</p>
 * @method string getAddressIPVersion() 获取<p>仅适用于公网负载均衡。IP版本，可取值：IPV4、IPV6、IPv6FullChain，不区分大小写，默认值 IPV4。说明：取值为IPV6表示为IPV6 NAT64版本；取值为IPv6FullChain，表示为IPv6版本。</p>
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置<p>仅适用于公网负载均衡。IP版本，可取值：IPV4、IPV6、IPv6FullChain，不区分大小写，默认值 IPV4。说明：取值为IPV6表示为IPV6 NAT64版本；取值为IPv6FullChain，表示为IPv6版本。</p>
 * @method integer getNumber() 获取<p>创建负载均衡的个数，默认值 1。创建个数不能超过账号所能创建的最大值，默认创建最大值为20。</p>
 * @method void setNumber(integer $Number) 设置<p>创建负载均衡的个数，默认值 1。创建个数不能超过账号所能创建的最大值，默认创建最大值为20。</p>
 * @method string getMasterZoneId() 获取<p>仅适用于公网且IP版本为IPv4的负载均衡。设置跨可用区容灾时的主可用区ID， 可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1<br>注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区。</p>
 * @method void setMasterZoneId(string $MasterZoneId) 设置<p>仅适用于公网且IP版本为IPv4的负载均衡。设置跨可用区容灾时的主可用区ID， 可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1<br>注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区。</p>
 * @method string getZoneId() 获取<p>仅适用于公网且IP版本为IPv4的负载均衡。可用区ID，可用区 ID 和名称均支持，指定可用区以创建负载均衡实例。如：100001 或 ap-guangzhou-1。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>仅适用于公网且IP版本为IPv4的负载均衡。可用区ID，可用区 ID 和名称均支持，指定可用区以创建负载均衡实例。如：100001 或 ap-guangzhou-1。</p>
 * @method InternetAccessible getInternetAccessible() 获取<p>网络计费模式，最大出带宽。仅对内网属性的性能容量型实例和公网属性的所有实例生效。API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>网络计费模式，最大出带宽。仅对内网属性的性能容量型实例和公网属性的所有实例生效。API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
 * @method string getVipIsp() 获取<p>仅适用于公网负载均衡。目前仅广州、上海、南京、济南、杭州、福州、北京、石家庄、武汉、长沙、成都、重庆地域支持静态单线 IP 线路类型，如需体验，请联系商务经理申请。申请通过后，即可选择中国移动（CMCC）、中国联通（CUCC）或中国电信（CTCC）的运营商类型，网络计费模式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。 如果不指定本参数，则默认使用BGP。可通过 <a href="https://cloud.tencent.com/document/api/214/70213">DescribeResources</a>  接口查询一个地域所支持的Isp。</p>
 * @method void setVipIsp(string $VipIsp) 设置<p>仅适用于公网负载均衡。目前仅广州、上海、南京、济南、杭州、福州、北京、石家庄、武汉、长沙、成都、重庆地域支持静态单线 IP 线路类型，如需体验，请联系商务经理申请。申请通过后，即可选择中国移动（CMCC）、中国联通（CUCC）或中国电信（CTCC）的运营商类型，网络计费模式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。 如果不指定本参数，则默认使用BGP。可通过 <a href="https://cloud.tencent.com/document/api/214/70213">DescribeResources</a>  接口查询一个地域所支持的Isp。</p>
 * @method array getTags() 获取<p>购买负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。</p>
 * @method void setTags(array $Tags) 设置<p>购买负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。</p>
 * @method string getVip() 获取<p>指定VIP申请负载均衡。此参数选填，不填写此参数时自动分配VIP。IPv4和IPv6类型支持此参数，IPv6 NAT64类型不支持。<br>注意：当指定VIP创建内网实例、或公网IPv6 BGP实例时，若VIP不属于指定VPC子网的网段内时，会创建失败；若VIP已被占用，也会创建失败。</p>
 * @method void setVip(string $Vip) 设置<p>指定VIP申请负载均衡。此参数选填，不填写此参数时自动分配VIP。IPv4和IPv6类型支持此参数，IPv6 NAT64类型不支持。<br>注意：当指定VIP创建内网实例、或公网IPv6 BGP实例时，若VIP不属于指定VPC子网的网段内时，会创建失败；若VIP已被占用，也会创建失败。</p>
 * @method string getBandwidthPackageId() 获取<p>带宽包ID，可以通过 <a href="https://cloud.tencent.com/document/api/215/19209">DescribeBandwidthPackages</a> 接口获取。指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE），带宽包的属性即为其结算方式。非上移用户购买的 IPv6 负载均衡实例，且运营商类型非 BGP 时 ，不支持指定具体带宽包id。</p>
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置<p>带宽包ID，可以通过 <a href="https://cloud.tencent.com/document/api/215/19209">DescribeBandwidthPackages</a> 接口获取。指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE），带宽包的属性即为其结算方式。非上移用户购买的 IPv6 负载均衡实例，且运营商类型非 BGP 时 ，不支持指定具体带宽包id。</p>
 * @method ExclusiveCluster getExclusiveCluster() 获取<p>独占型实例信息。若创建独占型的内网负载均衡实例，则此参数必填。</p>
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) 设置<p>独占型实例信息。若创建独占型的内网负载均衡实例，则此参数必填。</p>
 * @method string getSlaType() 获取<p>性能容量型规格。</p><ul><li>若需要创建性能容量型实例，则此参数必填，取值范围：<ul><li> clb.c2.medium：标准型规格 </li><li> clb.c3.small：高阶型1规格 </li><li> clb.c3.medium：高阶型2规格 </li><li> clb.c4.small：超强型1规格 </li><li> clb.c4.medium：超强型2规格 </li><li> clb.c4.large：超强型3规格 </li><li> clb.c4.xlarge：超强型4规格 </li></ul></li><li>若需要创建共享型实例，则无需填写此参数。</li></ul>如需了解规格详情，请参见[实例规格对比](https://cloud.tencent.com/document/product/214/84689)。
 * @method void setSlaType(string $SlaType) 设置<p>性能容量型规格。</p><ul><li>若需要创建性能容量型实例，则此参数必填，取值范围：<ul><li> clb.c2.medium：标准型规格 </li><li> clb.c3.small：高阶型1规格 </li><li> clb.c3.medium：高阶型2规格 </li><li> clb.c4.small：超强型1规格 </li><li> clb.c4.medium：超强型2规格 </li><li> clb.c4.large：超强型3规格 </li><li> clb.c4.xlarge：超强型4规格 </li></ul></li><li>若需要创建共享型实例，则无需填写此参数。</li></ul>如需了解规格详情，请参见[实例规格对比](https://cloud.tencent.com/document/product/214/84689)。
 * @method array getClusterIds() 获取<p>集群ID，集群标识，在需要配置公有云独占集群或本地专有集群时使用。公有云独占集群申请请<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>，本地专有集群请参考<a href="https://cloud.tencent.com/document/product/1346">本地专有集群</a>描述。</p>
 * @method void setClusterIds(array $ClusterIds) 设置<p>集群ID，集群标识，在需要配置公有云独占集群或本地专有集群时使用。公有云独占集群申请请<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>，本地专有集群请参考<a href="https://cloud.tencent.com/document/product/1346">本地专有集群</a>描述。</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method boolean getSnatPro() 获取<p>是否支持绑定跨地域/跨Vpc绑定IP的功能。</p>
 * @method void setSnatPro(boolean $SnatPro) 设置<p>是否支持绑定跨地域/跨Vpc绑定IP的功能。</p>
 * @method array getSnatIps() 获取<p>开启绑定跨地域/跨Vpc绑定IP的功能后，创建SnatIp。</p>
 * @method void setSnatIps(array $SnatIps) 设置<p>开启绑定跨地域/跨Vpc绑定IP的功能后，创建SnatIp。</p>
 * @method string getClusterTag() 获取<p>Stgw独占集群的标签。</p>
 * @method void setClusterTag(string $ClusterTag) 设置<p>Stgw独占集群的标签。</p>
 * @method string getSlaveZoneId() 获取<p>仅适用于公网且IP版本为IPv4的负载均衡。设置跨可用区容灾时的备可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1<br>注：备可用区是主可用区故障后，需要承载流量的可用区。可通过 <a href="https://cloud.tencent.com/document/api/214/70213">DescribeResources</a> 接口查询一个地域的主/备可用区的列表。【如果您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>】</p>
 * @method void setSlaveZoneId(string $SlaveZoneId) 设置<p>仅适用于公网且IP版本为IPv4的负载均衡。设置跨可用区容灾时的备可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1<br>注：备可用区是主可用区故障后，需要承载流量的可用区。可通过 <a href="https://cloud.tencent.com/document/api/214/70213">DescribeResources</a> 接口查询一个地域的主/备可用区的列表。【如果您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>】</p>
 * @method string getEipAddressId() 获取<p>EIP 的唯一 ID，可以通过 <a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a> 接口查询。形如：eip-qhx8udkc，仅适用于内网负载均衡绑定EIP。</p>
 * @method void setEipAddressId(string $EipAddressId) 设置<p>EIP 的唯一 ID，可以通过 <a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a> 接口查询。形如：eip-qhx8udkc，仅适用于内网负载均衡绑定EIP。</p>
 * @method boolean getLoadBalancerPassToTarget() 获取<p>Target是否放通来自CLB的流量。开启放通（true）：只验证CLB上的安全组；不开启放通（false）：需同时验证CLB和后端实例上的安全组。IPv6 CLB安全组默认放通，不需要传此参数。</p>
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) 设置<p>Target是否放通来自CLB的流量。开启放通（true）：只验证CLB上的安全组；不开启放通（false）：需同时验证CLB和后端实例上的安全组。IPv6 CLB安全组默认放通，不需要传此参数。</p>
 * @method boolean getDynamicVip() 获取<p>创建域名化负载均衡。</p>
 * @method void setDynamicVip(boolean $DynamicVip) 设置<p>创建域名化负载均衡。</p>
 * @method string getEgress() 获取<p>网络出口</p>
 * @method void setEgress(string $Egress) 设置<p>网络出口</p>
 * @method LBChargePrepaid getLBChargePrepaid() 获取<p>负载均衡实例的预付费相关属性，API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
 * @method void setLBChargePrepaid(LBChargePrepaid $LBChargePrepaid) 设置<p>负载均衡实例的预付费相关属性，API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
 * @method string getLBChargeType() 获取<p>负载均衡实例计费类型，取值：POSTPAID_BY_HOUR，PREPAID，默认是POSTPAID_BY_HOUR。API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
 * @method void setLBChargeType(string $LBChargeType) 设置<p>负载均衡实例计费类型，取值：POSTPAID_BY_HOUR，PREPAID，默认是POSTPAID_BY_HOUR。API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
 * @method string getAccessLogTopicId() 获取<p>七层访问日志主题ID</p>
 * @method void setAccessLogTopicId(string $AccessLogTopicId) 设置<p>七层访问日志主题ID</p>
 * @method boolean getAdvancedRoute() 获取<p>是否开启七层高级路由</p>
 * @method void setAdvancedRoute(boolean $AdvancedRoute) 设置<p>是否开启七层高级路由</p>
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string <p>负载均衡实例的网络类型：<br>OPEN：公网属性， INTERNAL：内网属性。</p>
     */
    public $LoadBalancerType;

    /**
     * @var integer <p>负载均衡实例的类型。1：通用的负载均衡实例，目前只支持传入1。</p>
     */
    public $Forward;

    /**
     * @var string <p>负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。</p>
     */
    public $LoadBalancerName;

    /**
     * @var string <p>负载均衡后端目标设备所属的网络 ID，如vpc-12345678，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> 接口获取。 不填此参数则默认为DefaultVPC。创建内网负载均衡实例时，此参数必填。</p>
     */
    public $VpcId;

    /**
     * @var string <p>在私有网络内购买内网负载均衡实例的情况下，必须指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。创建内网负载均衡实例时，此参数必填，创建公网IPv4负载均衡实例时，不支持指定该参数。</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>负载均衡实例所属的项目 ID，默认项目 ID 为0。可以通过 <a href="https://cloud.tencent.com/document/api/651/78725">DescribeProject</a> 接口获取。不填此参数则视为默认项目。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>仅适用于公网负载均衡。IP版本，可取值：IPV4、IPV6、IPv6FullChain，不区分大小写，默认值 IPV4。说明：取值为IPV6表示为IPV6 NAT64版本；取值为IPv6FullChain，表示为IPv6版本。</p>
     */
    public $AddressIPVersion;

    /**
     * @var integer <p>创建负载均衡的个数，默认值 1。创建个数不能超过账号所能创建的最大值，默认创建最大值为20。</p>
     */
    public $Number;

    /**
     * @var string <p>仅适用于公网且IP版本为IPv4的负载均衡。设置跨可用区容灾时的主可用区ID， 可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1<br>注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区。</p>
     */
    public $MasterZoneId;

    /**
     * @var string <p>仅适用于公网且IP版本为IPv4的负载均衡。可用区ID，可用区 ID 和名称均支持，指定可用区以创建负载均衡实例。如：100001 或 ap-guangzhou-1。</p>
     */
    public $ZoneId;

    /**
     * @var InternetAccessible <p>网络计费模式，最大出带宽。仅对内网属性的性能容量型实例和公网属性的所有实例生效。API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
     */
    public $InternetAccessible;

    /**
     * @var string <p>仅适用于公网负载均衡。目前仅广州、上海、南京、济南、杭州、福州、北京、石家庄、武汉、长沙、成都、重庆地域支持静态单线 IP 线路类型，如需体验，请联系商务经理申请。申请通过后，即可选择中国移动（CMCC）、中国联通（CUCC）或中国电信（CTCC）的运营商类型，网络计费模式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。 如果不指定本参数，则默认使用BGP。可通过 <a href="https://cloud.tencent.com/document/api/214/70213">DescribeResources</a>  接口查询一个地域所支持的Isp。</p>
     */
    public $VipIsp;

    /**
     * @var array <p>购买负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。</p>
     */
    public $Tags;

    /**
     * @var string <p>指定VIP申请负载均衡。此参数选填，不填写此参数时自动分配VIP。IPv4和IPv6类型支持此参数，IPv6 NAT64类型不支持。<br>注意：当指定VIP创建内网实例、或公网IPv6 BGP实例时，若VIP不属于指定VPC子网的网段内时，会创建失败；若VIP已被占用，也会创建失败。</p>
     */
    public $Vip;

    /**
     * @var string <p>带宽包ID，可以通过 <a href="https://cloud.tencent.com/document/api/215/19209">DescribeBandwidthPackages</a> 接口获取。指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE），带宽包的属性即为其结算方式。非上移用户购买的 IPv6 负载均衡实例，且运营商类型非 BGP 时 ，不支持指定具体带宽包id。</p>
     */
    public $BandwidthPackageId;

    /**
     * @var ExclusiveCluster <p>独占型实例信息。若创建独占型的内网负载均衡实例，则此参数必填。</p>
     */
    public $ExclusiveCluster;

    /**
     * @var string <p>性能容量型规格。</p><ul><li>若需要创建性能容量型实例，则此参数必填，取值范围：<ul><li> clb.c2.medium：标准型规格 </li><li> clb.c3.small：高阶型1规格 </li><li> clb.c3.medium：高阶型2规格 </li><li> clb.c4.small：超强型1规格 </li><li> clb.c4.medium：超强型2规格 </li><li> clb.c4.large：超强型3规格 </li><li> clb.c4.xlarge：超强型4规格 </li></ul></li><li>若需要创建共享型实例，则无需填写此参数。</li></ul>如需了解规格详情，请参见[实例规格对比](https://cloud.tencent.com/document/product/214/84689)。
     */
    public $SlaType;

    /**
     * @var array <p>集群ID，集群标识，在需要配置公有云独占集群或本地专有集群时使用。公有云独占集群申请请<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>，本地专有集群请参考<a href="https://cloud.tencent.com/document/product/1346">本地专有集群</a>描述。</p>
     */
    public $ClusterIds;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     */
    public $ClientToken;

    /**
     * @var boolean <p>是否支持绑定跨地域/跨Vpc绑定IP的功能。</p>
     */
    public $SnatPro;

    /**
     * @var array <p>开启绑定跨地域/跨Vpc绑定IP的功能后，创建SnatIp。</p>
     */
    public $SnatIps;

    /**
     * @var string <p>Stgw独占集群的标签。</p>
     */
    public $ClusterTag;

    /**
     * @var string <p>仅适用于公网且IP版本为IPv4的负载均衡。设置跨可用区容灾时的备可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1<br>注：备可用区是主可用区故障后，需要承载流量的可用区。可通过 <a href="https://cloud.tencent.com/document/api/214/70213">DescribeResources</a> 接口查询一个地域的主/备可用区的列表。【如果您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>】</p>
     */
    public $SlaveZoneId;

    /**
     * @var string <p>EIP 的唯一 ID，可以通过 <a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a> 接口查询。形如：eip-qhx8udkc，仅适用于内网负载均衡绑定EIP。</p>
     */
    public $EipAddressId;

    /**
     * @var boolean <p>Target是否放通来自CLB的流量。开启放通（true）：只验证CLB上的安全组；不开启放通（false）：需同时验证CLB和后端实例上的安全组。IPv6 CLB安全组默认放通，不需要传此参数。</p>
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var boolean <p>创建域名化负载均衡。</p>
     */
    public $DynamicVip;

    /**
     * @var string <p>网络出口</p>
     */
    public $Egress;

    /**
     * @var LBChargePrepaid <p>负载均衡实例的预付费相关属性，API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
     */
    public $LBChargePrepaid;

    /**
     * @var string <p>负载均衡实例计费类型，取值：POSTPAID_BY_HOUR，PREPAID，默认是POSTPAID_BY_HOUR。API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
     */
    public $LBChargeType;

    /**
     * @var string <p>七层访问日志主题ID</p>
     */
    public $AccessLogTopicId;

    /**
     * @var boolean <p>是否开启七层高级路由</p>
     */
    public $AdvancedRoute;

    /**
     * @param string $LoadBalancerType <p>负载均衡实例的网络类型：<br>OPEN：公网属性， INTERNAL：内网属性。</p>
     * @param integer $Forward <p>负载均衡实例的类型。1：通用的负载均衡实例，目前只支持传入1。</p>
     * @param string $LoadBalancerName <p>负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。</p>
     * @param string $VpcId <p>负载均衡后端目标设备所属的网络 ID，如vpc-12345678，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> 接口获取。 不填此参数则默认为DefaultVPC。创建内网负载均衡实例时，此参数必填。</p>
     * @param string $SubnetId <p>在私有网络内购买内网负载均衡实例的情况下，必须指定子网 ID，内网负载均衡实例的 VIP 将从这个子网中产生。创建内网负载均衡实例时，此参数必填，创建公网IPv4负载均衡实例时，不支持指定该参数。</p>
     * @param integer $ProjectId <p>负载均衡实例所属的项目 ID，默认项目 ID 为0。可以通过 <a href="https://cloud.tencent.com/document/api/651/78725">DescribeProject</a> 接口获取。不填此参数则视为默认项目。</p>
     * @param string $AddressIPVersion <p>仅适用于公网负载均衡。IP版本，可取值：IPV4、IPV6、IPv6FullChain，不区分大小写，默认值 IPV4。说明：取值为IPV6表示为IPV6 NAT64版本；取值为IPv6FullChain，表示为IPv6版本。</p>
     * @param integer $Number <p>创建负载均衡的个数，默认值 1。创建个数不能超过账号所能创建的最大值，默认创建最大值为20。</p>
     * @param string $MasterZoneId <p>仅适用于公网且IP版本为IPv4的负载均衡。设置跨可用区容灾时的主可用区ID， 可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1<br>注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区。</p>
     * @param string $ZoneId <p>仅适用于公网且IP版本为IPv4的负载均衡。可用区ID，可用区 ID 和名称均支持，指定可用区以创建负载均衡实例。如：100001 或 ap-guangzhou-1。</p>
     * @param InternetAccessible $InternetAccessible <p>网络计费模式，最大出带宽。仅对内网属性的性能容量型实例和公网属性的所有实例生效。API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
     * @param string $VipIsp <p>仅适用于公网负载均衡。目前仅广州、上海、南京、济南、杭州、福州、北京、石家庄、武汉、长沙、成都、重庆地域支持静态单线 IP 线路类型，如需体验，请联系商务经理申请。申请通过后，即可选择中国移动（CMCC）、中国联通（CUCC）或中国电信（CTCC）的运营商类型，网络计费模式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。 如果不指定本参数，则默认使用BGP。可通过 <a href="https://cloud.tencent.com/document/api/214/70213">DescribeResources</a>  接口查询一个地域所支持的Isp。</p>
     * @param array $Tags <p>购买负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。</p>
     * @param string $Vip <p>指定VIP申请负载均衡。此参数选填，不填写此参数时自动分配VIP。IPv4和IPv6类型支持此参数，IPv6 NAT64类型不支持。<br>注意：当指定VIP创建内网实例、或公网IPv6 BGP实例时，若VIP不属于指定VPC子网的网段内时，会创建失败；若VIP已被占用，也会创建失败。</p>
     * @param string $BandwidthPackageId <p>带宽包ID，可以通过 <a href="https://cloud.tencent.com/document/api/215/19209">DescribeBandwidthPackages</a> 接口获取。指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE），带宽包的属性即为其结算方式。非上移用户购买的 IPv6 负载均衡实例，且运营商类型非 BGP 时 ，不支持指定具体带宽包id。</p>
     * @param ExclusiveCluster $ExclusiveCluster <p>独占型实例信息。若创建独占型的内网负载均衡实例，则此参数必填。</p>
     * @param string $SlaType <p>性能容量型规格。</p><ul><li>若需要创建性能容量型实例，则此参数必填，取值范围：<ul><li> clb.c2.medium：标准型规格 </li><li> clb.c3.small：高阶型1规格 </li><li> clb.c3.medium：高阶型2规格 </li><li> clb.c4.small：超强型1规格 </li><li> clb.c4.medium：超强型2规格 </li><li> clb.c4.large：超强型3规格 </li><li> clb.c4.xlarge：超强型4规格 </li></ul></li><li>若需要创建共享型实例，则无需填写此参数。</li></ul>如需了解规格详情，请参见[实例规格对比](https://cloud.tencent.com/document/product/214/84689)。
     * @param array $ClusterIds <p>集群ID，集群标识，在需要配置公有云独占集群或本地专有集群时使用。公有云独占集群申请请<a href="https://console.cloud.tencent.com/workorder/category">提交工单</a>，本地专有集群请参考<a href="https://cloud.tencent.com/document/product/1346">本地专有集群</a>描述。</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     * @param boolean $SnatPro <p>是否支持绑定跨地域/跨Vpc绑定IP的功能。</p>
     * @param array $SnatIps <p>开启绑定跨地域/跨Vpc绑定IP的功能后，创建SnatIp。</p>
     * @param string $ClusterTag <p>Stgw独占集群的标签。</p>
     * @param string $SlaveZoneId <p>仅适用于公网且IP版本为IPv4的负载均衡。设置跨可用区容灾时的备可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1<br>注：备可用区是主可用区故障后，需要承载流量的可用区。可通过 <a href="https://cloud.tencent.com/document/api/214/70213">DescribeResources</a> 接口查询一个地域的主/备可用区的列表。【如果您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a>】</p>
     * @param string $EipAddressId <p>EIP 的唯一 ID，可以通过 <a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a> 接口查询。形如：eip-qhx8udkc，仅适用于内网负载均衡绑定EIP。</p>
     * @param boolean $LoadBalancerPassToTarget <p>Target是否放通来自CLB的流量。开启放通（true）：只验证CLB上的安全组；不开启放通（false）：需同时验证CLB和后端实例上的安全组。IPv6 CLB安全组默认放通，不需要传此参数。</p>
     * @param boolean $DynamicVip <p>创建域名化负载均衡。</p>
     * @param string $Egress <p>网络出口</p>
     * @param LBChargePrepaid $LBChargePrepaid <p>负载均衡实例的预付费相关属性，API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
     * @param string $LBChargeType <p>负载均衡实例计费类型，取值：POSTPAID_BY_HOUR，PREPAID，默认是POSTPAID_BY_HOUR。API接口购买包年包月实例还在灰度中，如您需要体验该功能，请通过 <a href="https://console.cloud.tencent.com/workorder/category">工单申请</a></p>
     * @param string $AccessLogTopicId <p>七层访问日志主题ID</p>
     * @param boolean $AdvancedRoute <p>是否开启七层高级路由</p>
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
        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("ExclusiveCluster",$param) and $param["ExclusiveCluster"] !== null) {
            $this->ExclusiveCluster = new ExclusiveCluster();
            $this->ExclusiveCluster->deserialize($param["ExclusiveCluster"]);
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
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

        if (array_key_exists("ClusterTag",$param) and $param["ClusterTag"] !== null) {
            $this->ClusterTag = $param["ClusterTag"];
        }

        if (array_key_exists("SlaveZoneId",$param) and $param["SlaveZoneId"] !== null) {
            $this->SlaveZoneId = $param["SlaveZoneId"];
        }

        if (array_key_exists("EipAddressId",$param) and $param["EipAddressId"] !== null) {
            $this->EipAddressId = $param["EipAddressId"];
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }

        if (array_key_exists("DynamicVip",$param) and $param["DynamicVip"] !== null) {
            $this->DynamicVip = $param["DynamicVip"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }

        if (array_key_exists("LBChargePrepaid",$param) and $param["LBChargePrepaid"] !== null) {
            $this->LBChargePrepaid = new LBChargePrepaid();
            $this->LBChargePrepaid->deserialize($param["LBChargePrepaid"]);
        }

        if (array_key_exists("LBChargeType",$param) and $param["LBChargeType"] !== null) {
            $this->LBChargeType = $param["LBChargeType"];
        }

        if (array_key_exists("AccessLogTopicId",$param) and $param["AccessLogTopicId"] !== null) {
            $this->AccessLogTopicId = $param["AccessLogTopicId"];
        }

        if (array_key_exists("AdvancedRoute",$param) and $param["AdvancedRoute"] !== null) {
            $this->AdvancedRoute = $param["AdvancedRoute"];
        }
    }
}
