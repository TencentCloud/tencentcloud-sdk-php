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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneLoadBalancer请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method string getLoadBalancerName() 获取克隆出负载均衡实例的名称，规则：1-60 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置克隆出负载均衡实例的名称，规则：1-60 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
 * @method integer getProjectId() 获取负载均衡实例所属的项目 ID，默认项目 ID 为0，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。不传此参数则视为默认项目。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡实例所属的项目 ID，默认项目 ID 为0，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。不传此参数则视为默认项目。
 * @method string getMasterZoneId() 获取仅适用于公网负载均衡。设置跨可用区容灾时的主可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1。
注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区，平台将为您自动选择最佳备可用区。可通过 [DescribeResources](https://cloud.tencent.com/document/api/214/70213) 接口查询一个地域的主可用区的列表。
 * @method void setMasterZoneId(string $MasterZoneId) 设置仅适用于公网负载均衡。设置跨可用区容灾时的主可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1。
注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区，平台将为您自动选择最佳备可用区。可通过 [DescribeResources](https://cloud.tencent.com/document/api/214/70213) 接口查询一个地域的主可用区的列表。
 * @method string getSlaveZoneId() 获取仅适用于公网负载均衡。设置跨可用区容灾时的备可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1。
注：备可用区是主可用区故障后，需要承载流量的可用区。可通过 [DescribeResources](https://cloud.tencent.com/document/api/214/70213) 接口查询一个地域的主/备可用区的列表。
 * @method void setSlaveZoneId(string $SlaveZoneId) 设置仅适用于公网负载均衡。设置跨可用区容灾时的备可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1。
注：备可用区是主可用区故障后，需要承载流量的可用区。可通过 [DescribeResources](https://cloud.tencent.com/document/api/214/70213) 接口查询一个地域的主/备可用区的列表。
 * @method string getZoneId() 获取仅适用于公网负载均衡。可用区ID，可用区 ID 和名称均支持，指定可用区以创建负载均衡实例。如：100001 或 ap-guangzhou-1。不传则查询所有可用区的 CVM 实例。如需指定可用区，可调用查询可用区列表 [DescribeZones](https://cloud.tencent.com/document/product/213/15707) 接口查询。
 * @method void setZoneId(string $ZoneId) 设置仅适用于公网负载均衡。可用区ID，可用区 ID 和名称均支持，指定可用区以创建负载均衡实例。如：100001 或 ap-guangzhou-1。不传则查询所有可用区的 CVM 实例。如需指定可用区，可调用查询可用区列表 [DescribeZones](https://cloud.tencent.com/document/product/213/15707) 接口查询。
 * @method InternetAccessible getInternetAccessible() 获取仅适用于公网负载均衡。负载均衡的网络计费模式。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置仅适用于公网负载均衡。负载均衡的网络计费模式。
 * @method string getVipIsp() 获取仅适用于公网负载均衡。目前仅广州、上海、南京、济南、杭州、福州、北京、石家庄、武汉、长沙、成都、重庆地域支持静态单线 IP 线路类型，如需体验，请联系商务经理申请。申请通过后，即可选择中国移动（CMCC）、中国联通（CUCC）或中国电信（CTCC）的运营商类型，网络计费模式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。 如果不指定本参数，则默认使用BGP。可通过 DescribeResources 接口查询一个地域所支持的Isp。
 * @method void setVipIsp(string $VipIsp) 设置仅适用于公网负载均衡。目前仅广州、上海、南京、济南、杭州、福州、北京、石家庄、武汉、长沙、成都、重庆地域支持静态单线 IP 线路类型，如需体验，请联系商务经理申请。申请通过后，即可选择中国移动（CMCC）、中国联通（CUCC）或中国电信（CTCC）的运营商类型，网络计费模式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。 如果不指定本参数，则默认使用BGP。可通过 DescribeResources 接口查询一个地域所支持的Isp。
 * @method string getVip() 获取指定Vip申请负载均衡。
 * @method void setVip(string $Vip) 设置指定Vip申请负载均衡。
 * @method array getTags() 获取购买负载均衡同时，给负载均衡打上标签。
 * @method void setTags(array $Tags) 设置购买负载均衡同时，给负载均衡打上标签。
 * @method ExclusiveCluster getExclusiveCluster() 获取独占集群信息。
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) 设置独占集群信息。
 * @method string getBandwidthPackageId() 获取带宽包ID，可以通过 [DescribeBandwidthPackages](https://cloud.tencent.com/document/api/215/19209) 接口获取。指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE）。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包ID，可以通过 [DescribeBandwidthPackages](https://cloud.tencent.com/document/api/215/19209) 接口获取。指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE）。
 * @method boolean getSnatPro() 获取是否支持绑定跨地域/跨Vpc绑定IP的功能。
 * @method void setSnatPro(boolean $SnatPro) 设置是否支持绑定跨地域/跨Vpc绑定IP的功能。
 * @method array getSnatIps() 获取开启绑定跨地域/跨Vpc绑定IP的功能后，创建SnatIp。
 * @method void setSnatIps(array $SnatIps) 设置开启绑定跨地域/跨Vpc绑定IP的功能后，创建SnatIp。
 * @method array getClusterIds() 获取公网独占集群ID或者CDCId，可以通过 [DescribeExclusiveClusters](https://cloud.tencent.com/document/product/214/49278) 接口获取。
 * @method void setClusterIds(array $ClusterIds) 设置公网独占集群ID或者CDCId，可以通过 [DescribeExclusiveClusters](https://cloud.tencent.com/document/product/214/49278) 接口获取。
 * @method string getSlaType() 获取性能容量型规格。<li>clb.c2.medium（标准型）</li><li>clb.c3.small（高阶型1）</li><li>clb.c3.medium（高阶型2）</li><li>clb.c4.small（超强型1）</li><li>clb.c4.medium（超强型2）</li><li>clb.c4.large（超强型3）</li><li>clb.c4.xlarge（超强型4）</li>
 * @method void setSlaType(string $SlaType) 设置性能容量型规格。<li>clb.c2.medium（标准型）</li><li>clb.c3.small（高阶型1）</li><li>clb.c3.medium（高阶型2）</li><li>clb.c4.small（超强型1）</li><li>clb.c4.medium（超强型2）</li><li>clb.c4.large（超强型3）</li><li>clb.c4.xlarge（超强型4）</li>
 * @method string getClusterTag() 获取Stgw独占集群的标签。
 * @method void setClusterTag(string $ClusterTag) 设置Stgw独占集群的标签。
 * @method array getZones() 获取仅适用于私有网络内网负载均衡。内网就近接入时，选择可用区下发。可调用[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口查询可用区列表。
 * @method void setZones(array $Zones) 设置仅适用于私有网络内网负载均衡。内网就近接入时，选择可用区下发。可调用[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口查询可用区列表。
 * @method string getEipAddressId() 获取EIP 的唯一 ID，形如：eip-qhx8udkc，仅适用于内网负载均衡绑定EIP，可以通过 [DescribeAddresses](https://cloud.tencent.com/document/product/215/16702) 接口查询。
 * @method void setEipAddressId(string $EipAddressId) 设置EIP 的唯一 ID，形如：eip-qhx8udkc，仅适用于内网负载均衡绑定EIP，可以通过 [DescribeAddresses](https://cloud.tencent.com/document/product/215/16702) 接口查询。
 */
class CloneLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 负载均衡ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $LoadBalancerId;

    /**
     * @var string 克隆出负载均衡实例的名称，规则：1-60 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var integer 负载均衡实例所属的项目 ID，默认项目 ID 为0，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。不传此参数则视为默认项目。
     */
    public $ProjectId;

    /**
     * @var string 仅适用于公网负载均衡。设置跨可用区容灾时的主可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1。
注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区，平台将为您自动选择最佳备可用区。可通过 [DescribeResources](https://cloud.tencent.com/document/api/214/70213) 接口查询一个地域的主可用区的列表。
     */
    public $MasterZoneId;

    /**
     * @var string 仅适用于公网负载均衡。设置跨可用区容灾时的备可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1。
注：备可用区是主可用区故障后，需要承载流量的可用区。可通过 [DescribeResources](https://cloud.tencent.com/document/api/214/70213) 接口查询一个地域的主/备可用区的列表。
     */
    public $SlaveZoneId;

    /**
     * @var string 仅适用于公网负载均衡。可用区ID，可用区 ID 和名称均支持，指定可用区以创建负载均衡实例。如：100001 或 ap-guangzhou-1。不传则查询所有可用区的 CVM 实例。如需指定可用区，可调用查询可用区列表 [DescribeZones](https://cloud.tencent.com/document/product/213/15707) 接口查询。
     */
    public $ZoneId;

    /**
     * @var InternetAccessible 仅适用于公网负载均衡。负载均衡的网络计费模式。
     */
    public $InternetAccessible;

    /**
     * @var string 仅适用于公网负载均衡。目前仅广州、上海、南京、济南、杭州、福州、北京、石家庄、武汉、长沙、成都、重庆地域支持静态单线 IP 线路类型，如需体验，请联系商务经理申请。申请通过后，即可选择中国移动（CMCC）、中国联通（CUCC）或中国电信（CTCC）的运营商类型，网络计费模式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。 如果不指定本参数，则默认使用BGP。可通过 DescribeResources 接口查询一个地域所支持的Isp。
     */
    public $VipIsp;

    /**
     * @var string 指定Vip申请负载均衡。
     */
    public $Vip;

    /**
     * @var array 购买负载均衡同时，给负载均衡打上标签。
     */
    public $Tags;

    /**
     * @var ExclusiveCluster 独占集群信息。
     */
    public $ExclusiveCluster;

    /**
     * @var string 带宽包ID，可以通过 [DescribeBandwidthPackages](https://cloud.tencent.com/document/api/215/19209) 接口获取。指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE）。
     */
    public $BandwidthPackageId;

    /**
     * @var boolean 是否支持绑定跨地域/跨Vpc绑定IP的功能。
     */
    public $SnatPro;

    /**
     * @var array 开启绑定跨地域/跨Vpc绑定IP的功能后，创建SnatIp。
     */
    public $SnatIps;

    /**
     * @var array 公网独占集群ID或者CDCId，可以通过 [DescribeExclusiveClusters](https://cloud.tencent.com/document/product/214/49278) 接口获取。
     */
    public $ClusterIds;

    /**
     * @var string 性能容量型规格。<li>clb.c2.medium（标准型）</li><li>clb.c3.small（高阶型1）</li><li>clb.c3.medium（高阶型2）</li><li>clb.c4.small（超强型1）</li><li>clb.c4.medium（超强型2）</li><li>clb.c4.large（超强型3）</li><li>clb.c4.xlarge（超强型4）</li>
     */
    public $SlaType;

    /**
     * @var string Stgw独占集群的标签。
     */
    public $ClusterTag;

    /**
     * @var array 仅适用于私有网络内网负载均衡。内网就近接入时，选择可用区下发。可调用[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口查询可用区列表。
     */
    public $Zones;

    /**
     * @var string EIP 的唯一 ID，形如：eip-qhx8udkc，仅适用于内网负载均衡绑定EIP，可以通过 [DescribeAddresses](https://cloud.tencent.com/document/product/215/16702) 接口查询。
     */
    public $EipAddressId;

    /**
     * @param string $LoadBalancerId 负载均衡ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     * @param string $LoadBalancerName 克隆出负载均衡实例的名称，规则：1-60 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
     * @param integer $ProjectId 负载均衡实例所属的项目 ID，默认项目 ID 为0，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。不传此参数则视为默认项目。
     * @param string $MasterZoneId 仅适用于公网负载均衡。设置跨可用区容灾时的主可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1。
注：主可用区是需要承载流量的可用区，备可用区默认不承载流量，主可用区不可用时才使用备可用区，平台将为您自动选择最佳备可用区。可通过 [DescribeResources](https://cloud.tencent.com/document/api/214/70213) 接口查询一个地域的主可用区的列表。
     * @param string $SlaveZoneId 仅适用于公网负载均衡。设置跨可用区容灾时的备可用区ID，可用区 ID 和名称均支持，例如 100001 或 ap-guangzhou-1。
注：备可用区是主可用区故障后，需要承载流量的可用区。可通过 [DescribeResources](https://cloud.tencent.com/document/api/214/70213) 接口查询一个地域的主/备可用区的列表。
     * @param string $ZoneId 仅适用于公网负载均衡。可用区ID，可用区 ID 和名称均支持，指定可用区以创建负载均衡实例。如：100001 或 ap-guangzhou-1。不传则查询所有可用区的 CVM 实例。如需指定可用区，可调用查询可用区列表 [DescribeZones](https://cloud.tencent.com/document/product/213/15707) 接口查询。
     * @param InternetAccessible $InternetAccessible 仅适用于公网负载均衡。负载均衡的网络计费模式。
     * @param string $VipIsp 仅适用于公网负载均衡。目前仅广州、上海、南京、济南、杭州、福州、北京、石家庄、武汉、长沙、成都、重庆地域支持静态单线 IP 线路类型，如需体验，请联系商务经理申请。申请通过后，即可选择中国移动（CMCC）、中国联通（CUCC）或中国电信（CTCC）的运营商类型，网络计费模式只能使用按带宽包计费(BANDWIDTH_PACKAGE)。 如果不指定本参数，则默认使用BGP。可通过 DescribeResources 接口查询一个地域所支持的Isp。
     * @param string $Vip 指定Vip申请负载均衡。
     * @param array $Tags 购买负载均衡同时，给负载均衡打上标签。
     * @param ExclusiveCluster $ExclusiveCluster 独占集群信息。
     * @param string $BandwidthPackageId 带宽包ID，可以通过 [DescribeBandwidthPackages](https://cloud.tencent.com/document/api/215/19209) 接口获取。指定此参数时，网络计费方式（InternetAccessible.InternetChargeType）只支持按带宽包计费（BANDWIDTH_PACKAGE）。
     * @param boolean $SnatPro 是否支持绑定跨地域/跨Vpc绑定IP的功能。
     * @param array $SnatIps 开启绑定跨地域/跨Vpc绑定IP的功能后，创建SnatIp。
     * @param array $ClusterIds 公网独占集群ID或者CDCId，可以通过 [DescribeExclusiveClusters](https://cloud.tencent.com/document/product/214/49278) 接口获取。
     * @param string $SlaType 性能容量型规格。<li>clb.c2.medium（标准型）</li><li>clb.c3.small（高阶型1）</li><li>clb.c3.medium（高阶型2）</li><li>clb.c4.small（超强型1）</li><li>clb.c4.medium（超强型2）</li><li>clb.c4.large（超强型3）</li><li>clb.c4.xlarge（超强型4）</li>
     * @param string $ClusterTag Stgw独占集群的标签。
     * @param array $Zones 仅适用于私有网络内网负载均衡。内网就近接入时，选择可用区下发。可调用[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口查询可用区列表。
     * @param string $EipAddressId EIP 的唯一 ID，形如：eip-qhx8udkc，仅适用于内网负载均衡绑定EIP，可以通过 [DescribeAddresses](https://cloud.tencent.com/document/product/215/16702) 接口查询。
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("SlaveZoneId",$param) and $param["SlaveZoneId"] !== null) {
            $this->SlaveZoneId = $param["SlaveZoneId"];
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ExclusiveCluster",$param) and $param["ExclusiveCluster"] !== null) {
            $this->ExclusiveCluster = new ExclusiveCluster();
            $this->ExclusiveCluster->deserialize($param["ExclusiveCluster"]);
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
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

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("ClusterTag",$param) and $param["ClusterTag"] !== null) {
            $this->ClusterTag = $param["ClusterTag"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("EipAddressId",$param) and $param["EipAddressId"] !== null) {
            $this->EipAddressId = $param["EipAddressId"];
        }
    }
}
