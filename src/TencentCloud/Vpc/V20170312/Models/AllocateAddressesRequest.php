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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AllocateAddresses请求参数结构体
 *
 * @method integer getAddressCount() 获取<p>EIP数量。可申请的数量限制参考：<a href="https://cloud.tencent.com/document/product/1199/41648">EIP 配额限制</a>。默认值：1。</p>
 * @method void setAddressCount(integer $AddressCount) 设置<p>EIP数量。可申请的数量限制参考：<a href="https://cloud.tencent.com/document/product/1199/41648">EIP 配额限制</a>。默认值：1。</p>
 * @method string getInternetServiceProvider() 获取<p>EIP线路类型。各种线路类型详情可参考：<a href="https://cloud.tencent.com/document/product/1199/41646">EIP 的 IP 地址类型</a>。默认值：BGP。</p><ul style="margin:0"><li>BGP：常规 BGP 线路</li><li>已开通静态单线IP白名单的用户，可选值：<ul><li>CMCC：中国移动</li><li>CTCC：中国电信</li><li>CUCC：中国联通</li></ul></li>注意：仅部分地域支持静态单线IP。</ul>
 * @method void setInternetServiceProvider(string $InternetServiceProvider) 设置<p>EIP线路类型。各种线路类型详情可参考：<a href="https://cloud.tencent.com/document/product/1199/41646">EIP 的 IP 地址类型</a>。默认值：BGP。</p><ul style="margin:0"><li>BGP：常规 BGP 线路</li><li>已开通静态单线IP白名单的用户，可选值：<ul><li>CMCC：中国移动</li><li>CTCC：中国电信</li><li>CUCC：中国联通</li></ul></li>注意：仅部分地域支持静态单线IP。</ul>
 * @method string getInternetChargeType() 获取<p>EIP计费方式。</p><ul style="margin:0"><li>标准账户类型，可选值：<ul><li>BANDWIDTH_PACKAGE：[共享带宽包](https://cloud.tencent.com/document/product/684/15255)付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li><li>BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li></ul>默认值：TRAFFIC_POSTPAID_BY_HOUR。</li><li>传统账户类型，无需传递此参数，EIP计费方式与其绑定的实例的计费方式一致，无需传递此参数。</li></ul>
 * @method void setInternetChargeType(string $InternetChargeType) 设置<p>EIP计费方式。</p><ul style="margin:0"><li>标准账户类型，可选值：<ul><li>BANDWIDTH_PACKAGE：[共享带宽包](https://cloud.tencent.com/document/product/684/15255)付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li><li>BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li></ul>默认值：TRAFFIC_POSTPAID_BY_HOUR。</li><li>传统账户类型，无需传递此参数，EIP计费方式与其绑定的实例的计费方式一致，无需传递此参数。</li></ul>
 * @method string getIPChargeType() 获取<p>IP 资源计费模式，当前仅支持原生 IP。</p><ul style="margin:0"><li>账号为标准账户类型的用户，可选值：<ul><li>IP_POSTPAID_BY_HOUR：IP资源按小时后付费</li><li>IP_PREPAID_BY_MONTH：IP资源包月预付费</li></ul></li></ul>
 * @method void setIPChargeType(string $IPChargeType) 设置<p>IP 资源计费模式，当前仅支持原生 IP。</p><ul style="margin:0"><li>账号为标准账户类型的用户，可选值：<ul><li>IP_POSTPAID_BY_HOUR：IP资源按小时后付费</li><li>IP_PREPAID_BY_MONTH：IP资源包月预付费</li></ul></li></ul>
 * @method integer getInternetMaxBandwidthOut() 获取<p>EIP出带宽上限，单位：Mbps。</p><ul style="margin:0"><li>标准账户类型EIP出带宽上限，可选值范围取决于EIP计费方式：<ul><li>BANDWIDTH_PACKAGE：1 Mbps 至 2000 Mbps</li><li>BANDWIDTH_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li><li>BANDWIDTH_PREPAID_BY_MONTH：1 Mbps 至 200 Mbps</li><li>TRAFFIC_POSTPAID_BY_HOUR：1 Mbps 至 200 Mbps</li></ul>默认值：1 Mbps。</li><li>传统账户类型无需传递此参数，EIP出带宽上限取决于与其绑定的实例的公网出带宽上限，无需传递此参数。</li></ul>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置<p>EIP出带宽上限，单位：Mbps。</p><ul style="margin:0"><li>标准账户类型EIP出带宽上限，可选值范围取决于EIP计费方式：<ul><li>BANDWIDTH_PACKAGE：1 Mbps 至 2000 Mbps</li><li>BANDWIDTH_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li><li>BANDWIDTH_PREPAID_BY_MONTH：1 Mbps 至 200 Mbps</li><li>TRAFFIC_POSTPAID_BY_HOUR：1 Mbps 至 200 Mbps</li></ul>默认值：1 Mbps。</li><li>传统账户类型无需传递此参数，EIP出带宽上限取决于与其绑定的实例的公网出带宽上限，无需传递此参数。</li></ul>
 * @method AddressChargePrepaid getAddressChargePrepaid() 获取<p>包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递</p>
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) 设置<p>包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递</p>
 * @method string getAddressType() 获取<p>EIP类型。各种EIP类型详情可参考：<a href="https://cloud.tencent.com/document/product/1199/41646">EIP 的 IP 地址类型</a>。默认值：EIP。</p><li>EIP：弹性公网 IP。 </li><li>AnycastEIP：加速 IP，已开通 [Anycast 公网加速](https://cloud.tencent.com/document/product/644)白名单的用户可选。仅部分地域支持加速IP，详情可见Anycast公网加速[购买指南](https://cloud.tencent.com/document/product/644/12617)。</li><li>HighQualityEIP：精品 IP。仅新加坡和中国香港支持精品IP。</li><li>AntiDDoSEIP：高防 IP。仅部分地域支持高防IP。</li><li>ResidentialEIP：原生 IP。仅部分地域支持原生IP。</li>关于弹性公网 IP 支持的 IP 类型，请见[产品概述](https://cloud.tencent.com/document/product/1199/41646)。
 * @method void setAddressType(string $AddressType) 设置<p>EIP类型。各种EIP类型详情可参考：<a href="https://cloud.tencent.com/document/product/1199/41646">EIP 的 IP 地址类型</a>。默认值：EIP。</p><li>EIP：弹性公网 IP。 </li><li>AnycastEIP：加速 IP，已开通 [Anycast 公网加速](https://cloud.tencent.com/document/product/644)白名单的用户可选。仅部分地域支持加速IP，详情可见Anycast公网加速[购买指南](https://cloud.tencent.com/document/product/644/12617)。</li><li>HighQualityEIP：精品 IP。仅新加坡和中国香港支持精品IP。</li><li>AntiDDoSEIP：高防 IP。仅部分地域支持高防IP。</li><li>ResidentialEIP：原生 IP。仅部分地域支持原生IP。</li>关于弹性公网 IP 支持的 IP 类型，请见[产品概述](https://cloud.tencent.com/document/product/1199/41646)。
 * @method string getAnycastZone() 获取<p>Anycast发布域。</p><ul style="margin:0"><li>已开通Anycast公网加速白名单的用户，可选值：<ul><li>ANYCAST_ZONE_GLOBAL：全球发布域（需要额外开通Anycast全球加速白名单）</li><li>ANYCAST_ZONE_OVERSEAS：境外发布域</li></ul>默认值：ANYCAST_ZONE_OVERSEAS。</li></ul>
 * @method void setAnycastZone(string $AnycastZone) 设置<p>Anycast发布域。</p><ul style="margin:0"><li>已开通Anycast公网加速白名单的用户，可选值：<ul><li>ANYCAST_ZONE_GLOBAL：全球发布域（需要额外开通Anycast全球加速白名单）</li><li>ANYCAST_ZONE_OVERSEAS：境外发布域</li></ul>默认值：ANYCAST_ZONE_OVERSEAS。</li></ul>
 * @method array getVipCluster() 获取<p>指定IP地址申请EIP，每个账户每个月只有三次配额</p>
 * @method void setVipCluster(array $VipCluster) 设置<p>指定IP地址申请EIP，每个账户每个月只有三次配额</p>
 * @method boolean getApplicableForCLB() 获取<p><b>[已废弃]</b> AnycastEIP不再区分是否负载均衡。原参数说明如下：<br>AnycastEIP是否用于绑定负载均衡。</p><ul style="margin:0"><li>已开通Anycast公网加速白名单的用户，可选值：<ul><li>TRUE：AnycastEIP可绑定对象为负载均衡</li><li>FALSE：AnycastEIP可绑定对象为云服务器、NAT网关、高可用虚拟IP等</li></ul>默认值：FALSE。</li></ul>
 * @method void setApplicableForCLB(boolean $ApplicableForCLB) 设置<p><b>[已废弃]</b> AnycastEIP不再区分是否负载均衡。原参数说明如下：<br>AnycastEIP是否用于绑定负载均衡。</p><ul style="margin:0"><li>已开通Anycast公网加速白名单的用户，可选值：<ul><li>TRUE：AnycastEIP可绑定对象为负载均衡</li><li>FALSE：AnycastEIP可绑定对象为云服务器、NAT网关、高可用虚拟IP等</li></ul>默认值：FALSE。</li></ul>
 * @method array getTags() 获取<p>需要关联的标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>需要关联的标签列表。</p>
 * @method string getBandwidthPackageId() 获取<p>BGP带宽包唯一ID参数。设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费</p>
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置<p>BGP带宽包唯一ID参数。设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费</p>
 * @method string getAddressName() 获取<p>EIP名称，用于申请EIP时用户自定义该EIP的个性化名称，默认值：未命名</p>
 * @method void setAddressName(string $AddressName) 设置<p>EIP名称，用于申请EIP时用户自定义该EIP的个性化名称，默认值：未命名</p>
 * @method string getDedicatedClusterId() 获取<p>CDC唯一ID</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置<p>CDC唯一ID</p>
 * @method boolean getIsDedicatedAddressPool() 获取<p>是否使用独占资源池，默认值：True</p><ul><li>True：表示使用独占资源池</li><li>False：表示使用共享资源池</li></ul><p>说明：如需使用独占资源池，请 提交工单(https://console.cloud.tencent.com/workorder/category) 咨询，具体费用请咨询商务经理。</p>
 * @method void setIsDedicatedAddressPool(boolean $IsDedicatedAddressPool) 设置<p>是否使用独占资源池，默认值：True</p><ul><li>True：表示使用独占资源池</li><li>False：表示使用共享资源池</li></ul><p>说明：如需使用独占资源池，请 提交工单(https://console.cloud.tencent.com/workorder/category) 咨询，具体费用请咨询商务经理。</p>
 * @method string getEgress() 获取<p>网络出口，当前仅支持精品BGP、静态单线，这2种IP 地址类型的指定出口传入，默认值：center_egress1，其它可选值：center_egress2、center_egress3</p>
 * @method void setEgress(string $Egress) 设置<p>网络出口，当前仅支持精品BGP、静态单线，这2种IP 地址类型的指定出口传入，默认值：center_egress1，其它可选值：center_egress2、center_egress3</p>
 * @method string getAntiDDoSPackageId() 获取<p>高防包ID， 申请高防IP时，该字段必传。</p>
 * @method void setAntiDDoSPackageId(string $AntiDDoSPackageId) 设置<p>高防包ID， 申请高防IP时，该字段必传。</p>
 * @method string getClientToken() 获取<p>保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。</p>
 */
class AllocateAddressesRequest extends AbstractModel
{
    /**
     * @var integer <p>EIP数量。可申请的数量限制参考：<a href="https://cloud.tencent.com/document/product/1199/41648">EIP 配额限制</a>。默认值：1。</p>
     */
    public $AddressCount;

    /**
     * @var string <p>EIP线路类型。各种线路类型详情可参考：<a href="https://cloud.tencent.com/document/product/1199/41646">EIP 的 IP 地址类型</a>。默认值：BGP。</p><ul style="margin:0"><li>BGP：常规 BGP 线路</li><li>已开通静态单线IP白名单的用户，可选值：<ul><li>CMCC：中国移动</li><li>CTCC：中国电信</li><li>CUCC：中国联通</li></ul></li>注意：仅部分地域支持静态单线IP。</ul>
     */
    public $InternetServiceProvider;

    /**
     * @var string <p>EIP计费方式。</p><ul style="margin:0"><li>标准账户类型，可选值：<ul><li>BANDWIDTH_PACKAGE：[共享带宽包](https://cloud.tencent.com/document/product/684/15255)付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li><li>BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li></ul>默认值：TRAFFIC_POSTPAID_BY_HOUR。</li><li>传统账户类型，无需传递此参数，EIP计费方式与其绑定的实例的计费方式一致，无需传递此参数。</li></ul>
     */
    public $InternetChargeType;

    /**
     * @var string <p>IP 资源计费模式，当前仅支持原生 IP。</p><ul style="margin:0"><li>账号为标准账户类型的用户，可选值：<ul><li>IP_POSTPAID_BY_HOUR：IP资源按小时后付费</li><li>IP_PREPAID_BY_MONTH：IP资源包月预付费</li></ul></li></ul>
     */
    public $IPChargeType;

    /**
     * @var integer <p>EIP出带宽上限，单位：Mbps。</p><ul style="margin:0"><li>标准账户类型EIP出带宽上限，可选值范围取决于EIP计费方式：<ul><li>BANDWIDTH_PACKAGE：1 Mbps 至 2000 Mbps</li><li>BANDWIDTH_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li><li>BANDWIDTH_PREPAID_BY_MONTH：1 Mbps 至 200 Mbps</li><li>TRAFFIC_POSTPAID_BY_HOUR：1 Mbps 至 200 Mbps</li></ul>默认值：1 Mbps。</li><li>传统账户类型无需传递此参数，EIP出带宽上限取决于与其绑定的实例的公网出带宽上限，无需传递此参数。</li></ul>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var AddressChargePrepaid <p>包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递</p>
     */
    public $AddressChargePrepaid;

    /**
     * @var string <p>EIP类型。各种EIP类型详情可参考：<a href="https://cloud.tencent.com/document/product/1199/41646">EIP 的 IP 地址类型</a>。默认值：EIP。</p><li>EIP：弹性公网 IP。 </li><li>AnycastEIP：加速 IP，已开通 [Anycast 公网加速](https://cloud.tencent.com/document/product/644)白名单的用户可选。仅部分地域支持加速IP，详情可见Anycast公网加速[购买指南](https://cloud.tencent.com/document/product/644/12617)。</li><li>HighQualityEIP：精品 IP。仅新加坡和中国香港支持精品IP。</li><li>AntiDDoSEIP：高防 IP。仅部分地域支持高防IP。</li><li>ResidentialEIP：原生 IP。仅部分地域支持原生IP。</li>关于弹性公网 IP 支持的 IP 类型，请见[产品概述](https://cloud.tencent.com/document/product/1199/41646)。
     */
    public $AddressType;

    /**
     * @var string <p>Anycast发布域。</p><ul style="margin:0"><li>已开通Anycast公网加速白名单的用户，可选值：<ul><li>ANYCAST_ZONE_GLOBAL：全球发布域（需要额外开通Anycast全球加速白名单）</li><li>ANYCAST_ZONE_OVERSEAS：境外发布域</li></ul>默认值：ANYCAST_ZONE_OVERSEAS。</li></ul>
     */
    public $AnycastZone;

    /**
     * @var array <p>指定IP地址申请EIP，每个账户每个月只有三次配额</p>
     */
    public $VipCluster;

    /**
     * @var boolean <p><b>[已废弃]</b> AnycastEIP不再区分是否负载均衡。原参数说明如下：<br>AnycastEIP是否用于绑定负载均衡。</p><ul style="margin:0"><li>已开通Anycast公网加速白名单的用户，可选值：<ul><li>TRUE：AnycastEIP可绑定对象为负载均衡</li><li>FALSE：AnycastEIP可绑定对象为云服务器、NAT网关、高可用虚拟IP等</li></ul>默认值：FALSE。</li></ul>
     * @deprecated
     */
    public $ApplicableForCLB;

    /**
     * @var array <p>需要关联的标签列表。</p>
     */
    public $Tags;

    /**
     * @var string <p>BGP带宽包唯一ID参数。设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费</p>
     */
    public $BandwidthPackageId;

    /**
     * @var string <p>EIP名称，用于申请EIP时用户自定义该EIP的个性化名称，默认值：未命名</p>
     */
    public $AddressName;

    /**
     * @var string <p>CDC唯一ID</p>
     */
    public $DedicatedClusterId;

    /**
     * @var boolean <p>是否使用独占资源池，默认值：True</p><ul><li>True：表示使用独占资源池</li><li>False：表示使用共享资源池</li></ul><p>说明：如需使用独占资源池，请 提交工单(https://console.cloud.tencent.com/workorder/category) 咨询，具体费用请咨询商务经理。</p>
     */
    public $IsDedicatedAddressPool;

    /**
     * @var string <p>网络出口，当前仅支持精品BGP、静态单线，这2种IP 地址类型的指定出口传入，默认值：center_egress1，其它可选值：center_egress2、center_egress3</p>
     */
    public $Egress;

    /**
     * @var string <p>高防包ID， 申请高防IP时，该字段必传。</p>
     */
    public $AntiDDoSPackageId;

    /**
     * @var string <p>保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。</p>
     */
    public $ClientToken;

    /**
     * @param integer $AddressCount <p>EIP数量。可申请的数量限制参考：<a href="https://cloud.tencent.com/document/product/1199/41648">EIP 配额限制</a>。默认值：1。</p>
     * @param string $InternetServiceProvider <p>EIP线路类型。各种线路类型详情可参考：<a href="https://cloud.tencent.com/document/product/1199/41646">EIP 的 IP 地址类型</a>。默认值：BGP。</p><ul style="margin:0"><li>BGP：常规 BGP 线路</li><li>已开通静态单线IP白名单的用户，可选值：<ul><li>CMCC：中国移动</li><li>CTCC：中国电信</li><li>CUCC：中国联通</li></ul></li>注意：仅部分地域支持静态单线IP。</ul>
     * @param string $InternetChargeType <p>EIP计费方式。</p><ul style="margin:0"><li>标准账户类型，可选值：<ul><li>BANDWIDTH_PACKAGE：[共享带宽包](https://cloud.tencent.com/document/product/684/15255)付费</li><li>BANDWIDTH_POSTPAID_BY_HOUR：带宽按小时后付费</li><li>BANDWIDTH_PREPAID_BY_MONTH：包月按带宽预付费</li><li>TRAFFIC_POSTPAID_BY_HOUR：流量按小时后付费</li></ul>默认值：TRAFFIC_POSTPAID_BY_HOUR。</li><li>传统账户类型，无需传递此参数，EIP计费方式与其绑定的实例的计费方式一致，无需传递此参数。</li></ul>
     * @param string $IPChargeType <p>IP 资源计费模式，当前仅支持原生 IP。</p><ul style="margin:0"><li>账号为标准账户类型的用户，可选值：<ul><li>IP_POSTPAID_BY_HOUR：IP资源按小时后付费</li><li>IP_PREPAID_BY_MONTH：IP资源包月预付费</li></ul></li></ul>
     * @param integer $InternetMaxBandwidthOut <p>EIP出带宽上限，单位：Mbps。</p><ul style="margin:0"><li>标准账户类型EIP出带宽上限，可选值范围取决于EIP计费方式：<ul><li>BANDWIDTH_PACKAGE：1 Mbps 至 2000 Mbps</li><li>BANDWIDTH_POSTPAID_BY_HOUR：1 Mbps 至 100 Mbps</li><li>BANDWIDTH_PREPAID_BY_MONTH：1 Mbps 至 200 Mbps</li><li>TRAFFIC_POSTPAID_BY_HOUR：1 Mbps 至 200 Mbps</li></ul>默认值：1 Mbps。</li><li>传统账户类型无需传递此参数，EIP出带宽上限取决于与其绑定的实例的公网出带宽上限，无需传递此参数。</li></ul>
     * @param AddressChargePrepaid $AddressChargePrepaid <p>包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递</p>
     * @param string $AddressType <p>EIP类型。各种EIP类型详情可参考：<a href="https://cloud.tencent.com/document/product/1199/41646">EIP 的 IP 地址类型</a>。默认值：EIP。</p><li>EIP：弹性公网 IP。 </li><li>AnycastEIP：加速 IP，已开通 [Anycast 公网加速](https://cloud.tencent.com/document/product/644)白名单的用户可选。仅部分地域支持加速IP，详情可见Anycast公网加速[购买指南](https://cloud.tencent.com/document/product/644/12617)。</li><li>HighQualityEIP：精品 IP。仅新加坡和中国香港支持精品IP。</li><li>AntiDDoSEIP：高防 IP。仅部分地域支持高防IP。</li><li>ResidentialEIP：原生 IP。仅部分地域支持原生IP。</li>关于弹性公网 IP 支持的 IP 类型，请见[产品概述](https://cloud.tencent.com/document/product/1199/41646)。
     * @param string $AnycastZone <p>Anycast发布域。</p><ul style="margin:0"><li>已开通Anycast公网加速白名单的用户，可选值：<ul><li>ANYCAST_ZONE_GLOBAL：全球发布域（需要额外开通Anycast全球加速白名单）</li><li>ANYCAST_ZONE_OVERSEAS：境外发布域</li></ul>默认值：ANYCAST_ZONE_OVERSEAS。</li></ul>
     * @param array $VipCluster <p>指定IP地址申请EIP，每个账户每个月只有三次配额</p>
     * @param boolean $ApplicableForCLB <p><b>[已废弃]</b> AnycastEIP不再区分是否负载均衡。原参数说明如下：<br>AnycastEIP是否用于绑定负载均衡。</p><ul style="margin:0"><li>已开通Anycast公网加速白名单的用户，可选值：<ul><li>TRUE：AnycastEIP可绑定对象为负载均衡</li><li>FALSE：AnycastEIP可绑定对象为云服务器、NAT网关、高可用虚拟IP等</li></ul>默认值：FALSE。</li></ul>
     * @param array $Tags <p>需要关联的标签列表。</p>
     * @param string $BandwidthPackageId <p>BGP带宽包唯一ID参数。设定该参数且InternetChargeType为BANDWIDTH_PACKAGE，则表示创建的EIP加入该BGP带宽包并采用带宽包计费</p>
     * @param string $AddressName <p>EIP名称，用于申请EIP时用户自定义该EIP的个性化名称，默认值：未命名</p>
     * @param string $DedicatedClusterId <p>CDC唯一ID</p>
     * @param boolean $IsDedicatedAddressPool <p>是否使用独占资源池，默认值：True</p><ul><li>True：表示使用独占资源池</li><li>False：表示使用共享资源池</li></ul><p>说明：如需使用独占资源池，请 提交工单(https://console.cloud.tencent.com/workorder/category) 咨询，具体费用请咨询商务经理。</p>
     * @param string $Egress <p>网络出口，当前仅支持精品BGP、静态单线，这2种IP 地址类型的指定出口传入，默认值：center_egress1，其它可选值：center_egress2、center_egress3</p>
     * @param string $AntiDDoSPackageId <p>高防包ID， 申请高防IP时，该字段必传。</p>
     * @param string $ClientToken <p>保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。</p>
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
        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("IPChargeType",$param) and $param["IPChargeType"] !== null) {
            $this->IPChargeType = $param["IPChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("AddressChargePrepaid",$param) and $param["AddressChargePrepaid"] !== null) {
            $this->AddressChargePrepaid = new AddressChargePrepaid();
            $this->AddressChargePrepaid->deserialize($param["AddressChargePrepaid"]);
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("AnycastZone",$param) and $param["AnycastZone"] !== null) {
            $this->AnycastZone = $param["AnycastZone"];
        }

        if (array_key_exists("VipCluster",$param) and $param["VipCluster"] !== null) {
            $this->VipCluster = $param["VipCluster"];
        }

        if (array_key_exists("ApplicableForCLB",$param) and $param["ApplicableForCLB"] !== null) {
            $this->ApplicableForCLB = $param["ApplicableForCLB"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("IsDedicatedAddressPool",$param) and $param["IsDedicatedAddressPool"] !== null) {
            $this->IsDedicatedAddressPool = $param["IsDedicatedAddressPool"];
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = $param["Egress"];
        }

        if (array_key_exists("AntiDDoSPackageId",$param) and $param["AntiDDoSPackageId"] !== null) {
            $this->AntiDDoSPackageId = $param["AntiDDoSPackageId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
