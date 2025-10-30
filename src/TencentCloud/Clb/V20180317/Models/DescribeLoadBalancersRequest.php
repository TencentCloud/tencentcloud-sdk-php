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
 * DescribeLoadBalancers请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取负载均衡实例ID。实例ID数量上限为20个。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置负载均衡实例ID。实例ID数量上限为20个。
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method integer getForward() 获取负载均衡实例的类型。1：通用的负载均衡实例，0：传统型负载均衡实例。如果不传此参数，则查询所有类型的负载均衡实例。
 * @method void setForward(integer $Forward) 设置负载均衡实例的类型。1：通用的负载均衡实例，0：传统型负载均衡实例。如果不传此参数，则查询所有类型的负载均衡实例。
 * @method string getLoadBalancerName() 获取负载均衡实例的名称，支持模糊查询。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称，支持模糊查询。
 * @method string getDomain() 获取腾讯云为负载均衡实例分配的域名，支持模糊查询。
 * @method void setDomain(string $Domain) 设置腾讯云为负载均衡实例分配的域名，支持模糊查询。
 * @method array getLoadBalancerVips() 获取负载均衡实例的 VIP 地址，支持多个。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡实例的 VIP 地址，支持多个。
 * @method array getBackendPublicIps() 获取负载均衡绑定的后端服务的外网 IP，只支持查询云服务器的公网 IP。
 * @method void setBackendPublicIps(array $BackendPublicIps) 设置负载均衡绑定的后端服务的外网 IP，只支持查询云服务器的公网 IP。
 * @method array getBackendPrivateIps() 获取负载均衡绑定的后端服务的内网 IP，只支持查询云服务器的内网 IP。
 * @method void setBackendPrivateIps(array $BackendPrivateIps) 设置负载均衡绑定的后端服务的内网 IP，只支持查询云服务器的内网 IP。
 * @method integer getOffset() 获取数据偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为0。
 * @method integer getLimit() 获取返回负载均衡实例的数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回负载均衡实例的数量，默认为20，最大值为100。
 * @method string getOrderBy() 获取排序参数，支持以下字段：
- LoadBalancerName
- CreateTime
- Domain
- LoadBalancerType

默认为 CreateTime。

 * @method void setOrderBy(string $OrderBy) 设置排序参数，支持以下字段：
- LoadBalancerName
- CreateTime
- Domain
- LoadBalancerType

默认为 CreateTime。

 * @method integer getOrderType() 获取1：倒序，0：顺序，默认为1，按照创建时间倒序。
 * @method void setOrderType(integer $OrderType) 设置1：倒序，0：顺序，默认为1，按照创建时间倒序。
 * @method string getSearchKey() 获取模糊搜索字段，模糊匹配负载均衡实例的名称、域名、负载均衡实例的 VIP 地址，负载均衡实例ID。
 * @method void setSearchKey(string $SearchKey) 设置模糊搜索字段，模糊匹配负载均衡实例的名称、域名、负载均衡实例的 VIP 地址，负载均衡实例ID。
 * @method integer getProjectId() 获取负载均衡实例所属的项目 ID，可以通过[DescribeProject](https://cloud.tencent.com/document/api/651/78725)接口获取，不传默认所有项目。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡实例所属的项目 ID，可以通过[DescribeProject](https://cloud.tencent.com/document/api/651/78725)接口获取，不传默认所有项目。
 * @method integer getWithRs() 获取负载均衡是否绑定后端服务，0：没有绑定后端服务，1：绑定后端服务，-1：查询全部。
 * @method void setWithRs(integer $WithRs) 设置负载均衡是否绑定后端服务，0：没有绑定后端服务，1：绑定后端服务，-1：查询全部。
 * @method string getVpcId() 获取负载均衡实例所属私有网络唯一ID，如 vpc-bhqkbhdx，可以通过[DescribeVpcs](https://cloud.tencent.com/document/api/215/15778)接口获取。
查找基础网络类型的负载均衡可传入'0'。
 * @method void setVpcId(string $VpcId) 设置负载均衡实例所属私有网络唯一ID，如 vpc-bhqkbhdx，可以通过[DescribeVpcs](https://cloud.tencent.com/document/api/215/15778)接口获取。
查找基础网络类型的负载均衡可传入'0'。
 * @method string getSecurityGroup() 获取安全组ID，如 sg-m1cc****，可以通过接口[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)获取。
 * @method void setSecurityGroup(string $SecurityGroup) 设置安全组ID，如 sg-m1cc****，可以通过接口[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)获取。
 * @method string getMasterZone() 获取主可用区ID，如 ："100001" （对应的是广州一区）。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)获取可用区列表。
 * @method void setMasterZone(string $MasterZone) 设置主可用区ID，如 ："100001" （对应的是广州一区）。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)获取可用区列表。
 * @method array getFilters() 获取每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。<br/>`Filter.Name`和`Filter.Values`皆为必填项。详细的过滤条件如下：
- charge-type
按照【实例计费模式】进行过滤。实例计费模式例如：PREPAID。
类型：String
必选：否
可选项：PREPAID(预付费)、POSTPAID_BY_HOUR(后付费)
- internet-charge-type
按照【网络计费模式】进行过滤。网络计费模式例如：BANDWIDTH_PREPAID。
类型：String
必选：否
可选项：BANDWIDTH_PREPAID(预付费按带宽结算)、 TRAFFIC_POSTPAID_BY_HOUR(流量按小时后付费)、BANDWIDTH_POSTPAID_BY_HOUR(带宽按小时后付费)、BANDWIDTH_PACKAGE(带宽包用户)
- master-zone-id
按照【CLB主可用区ID】进行过滤。例如：100001（对应的是广州一区）。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- tag-key
按照【CLB 标签的键】进行过滤，例如：tag-key。
类型：String
必选：否
获取方式：[DescribeTags](https://cloud.tencent.com/document/api/651/35316)
- tag:tag-key
按照【CLB标签键值】进行过滤，例如：tag-test。
类型：String
必选：否
获取方式：[DescribeTagKeys](https://cloud.tencent.com/document/api/651/35318)
- function-name
按照【后端绑定SCF云函数的函数名称】进行过滤，例如：helloworld-1744958255。
类型：String
必选：否
获取方式：[ListFunctions](https://cloud.tencent.com/document/api/583/18582)
- vip-isp
按照【CLB VIP的运营商类型】进行过滤，例如：BGP。
类型：String
必选：否
公网类型可选项：BGP(多线)、CMCC(中国移动)、CTCC(中国电信)、CUCC(中国联通)
内网类型可选项：INTERNAL(内网)
- sla-type
按照【CLB 的性能容量型规格】进行过滤，例如：clb.c4.xlarge。
类型：String
必选：否
可选项：clb.c2.medium(标准型)、clb.c3.small(高阶型1)、clb.c3.medium(高阶型2)、clb.c4.small(超强型1)、clb.c4.medium(超强型2)、clb.c4.large(超强型3)、clb.c4.xlarge(超强型4)
具体规格参数参考：
- exclusive
按照【独占实例】进行过滤。例如：1，代表筛选独占型实例。
类型：String
必选：否
可选项：0、1
 * @method void setFilters(array $Filters) 设置每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。<br/>`Filter.Name`和`Filter.Values`皆为必填项。详细的过滤条件如下：
- charge-type
按照【实例计费模式】进行过滤。实例计费模式例如：PREPAID。
类型：String
必选：否
可选项：PREPAID(预付费)、POSTPAID_BY_HOUR(后付费)
- internet-charge-type
按照【网络计费模式】进行过滤。网络计费模式例如：BANDWIDTH_PREPAID。
类型：String
必选：否
可选项：BANDWIDTH_PREPAID(预付费按带宽结算)、 TRAFFIC_POSTPAID_BY_HOUR(流量按小时后付费)、BANDWIDTH_POSTPAID_BY_HOUR(带宽按小时后付费)、BANDWIDTH_PACKAGE(带宽包用户)
- master-zone-id
按照【CLB主可用区ID】进行过滤。例如：100001（对应的是广州一区）。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- tag-key
按照【CLB 标签的键】进行过滤，例如：tag-key。
类型：String
必选：否
获取方式：[DescribeTags](https://cloud.tencent.com/document/api/651/35316)
- tag:tag-key
按照【CLB标签键值】进行过滤，例如：tag-test。
类型：String
必选：否
获取方式：[DescribeTagKeys](https://cloud.tencent.com/document/api/651/35318)
- function-name
按照【后端绑定SCF云函数的函数名称】进行过滤，例如：helloworld-1744958255。
类型：String
必选：否
获取方式：[ListFunctions](https://cloud.tencent.com/document/api/583/18582)
- vip-isp
按照【CLB VIP的运营商类型】进行过滤，例如：BGP。
类型：String
必选：否
公网类型可选项：BGP(多线)、CMCC(中国移动)、CTCC(中国电信)、CUCC(中国联通)
内网类型可选项：INTERNAL(内网)
- sla-type
按照【CLB 的性能容量型规格】进行过滤，例如：clb.c4.xlarge。
类型：String
必选：否
可选项：clb.c2.medium(标准型)、clb.c3.small(高阶型1)、clb.c3.medium(高阶型2)、clb.c4.small(超强型1)、clb.c4.medium(超强型2)、clb.c4.large(超强型3)、clb.c4.xlarge(超强型4)
具体规格参数参考：
- exclusive
按照【独占实例】进行过滤。例如：1，代表筛选独占型实例。
类型：String
必选：否
可选项：0、1
 * @method array getAdditionalFields() 获取选择返回的扩充字段，不指定时，扩充字段默认不返回。详细支持的扩充字段如下：
<li> TargetCount：绑定的后端服务数量</li>
 * @method void setAdditionalFields(array $AdditionalFields) 设置选择返回的扩充字段，不指定时，扩充字段默认不返回。详细支持的扩充字段如下：
<li> TargetCount：绑定的后端服务数量</li>
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array 负载均衡实例ID。实例ID数量上限为20个。
     */
    public $LoadBalancerIds;

    /**
     * @var string 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     */
    public $LoadBalancerType;

    /**
     * @var integer 负载均衡实例的类型。1：通用的负载均衡实例，0：传统型负载均衡实例。如果不传此参数，则查询所有类型的负载均衡实例。
     */
    public $Forward;

    /**
     * @var string 负载均衡实例的名称，支持模糊查询。
     */
    public $LoadBalancerName;

    /**
     * @var string 腾讯云为负载均衡实例分配的域名，支持模糊查询。
     */
    public $Domain;

    /**
     * @var array 负载均衡实例的 VIP 地址，支持多个。
     */
    public $LoadBalancerVips;

    /**
     * @var array 负载均衡绑定的后端服务的外网 IP，只支持查询云服务器的公网 IP。
     */
    public $BackendPublicIps;

    /**
     * @var array 负载均衡绑定的后端服务的内网 IP，只支持查询云服务器的内网 IP。
     */
    public $BackendPrivateIps;

    /**
     * @var integer 数据偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回负载均衡实例的数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var string 排序参数，支持以下字段：
- LoadBalancerName
- CreateTime
- Domain
- LoadBalancerType

默认为 CreateTime。

     */
    public $OrderBy;

    /**
     * @var integer 1：倒序，0：顺序，默认为1，按照创建时间倒序。
     */
    public $OrderType;

    /**
     * @var string 模糊搜索字段，模糊匹配负载均衡实例的名称、域名、负载均衡实例的 VIP 地址，负载均衡实例ID。
     */
    public $SearchKey;

    /**
     * @var integer 负载均衡实例所属的项目 ID，可以通过[DescribeProject](https://cloud.tencent.com/document/api/651/78725)接口获取，不传默认所有项目。
     */
    public $ProjectId;

    /**
     * @var integer 负载均衡是否绑定后端服务，0：没有绑定后端服务，1：绑定后端服务，-1：查询全部。
     */
    public $WithRs;

    /**
     * @var string 负载均衡实例所属私有网络唯一ID，如 vpc-bhqkbhdx，可以通过[DescribeVpcs](https://cloud.tencent.com/document/api/215/15778)接口获取。
查找基础网络类型的负载均衡可传入'0'。
     */
    public $VpcId;

    /**
     * @var string 安全组ID，如 sg-m1cc****，可以通过接口[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)获取。
     */
    public $SecurityGroup;

    /**
     * @var string 主可用区ID，如 ："100001" （对应的是广州一区）。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)获取可用区列表。
     */
    public $MasterZone;

    /**
     * @var array 每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。<br/>`Filter.Name`和`Filter.Values`皆为必填项。详细的过滤条件如下：
- charge-type
按照【实例计费模式】进行过滤。实例计费模式例如：PREPAID。
类型：String
必选：否
可选项：PREPAID(预付费)、POSTPAID_BY_HOUR(后付费)
- internet-charge-type
按照【网络计费模式】进行过滤。网络计费模式例如：BANDWIDTH_PREPAID。
类型：String
必选：否
可选项：BANDWIDTH_PREPAID(预付费按带宽结算)、 TRAFFIC_POSTPAID_BY_HOUR(流量按小时后付费)、BANDWIDTH_POSTPAID_BY_HOUR(带宽按小时后付费)、BANDWIDTH_PACKAGE(带宽包用户)
- master-zone-id
按照【CLB主可用区ID】进行过滤。例如：100001（对应的是广州一区）。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- tag-key
按照【CLB 标签的键】进行过滤，例如：tag-key。
类型：String
必选：否
获取方式：[DescribeTags](https://cloud.tencent.com/document/api/651/35316)
- tag:tag-key
按照【CLB标签键值】进行过滤，例如：tag-test。
类型：String
必选：否
获取方式：[DescribeTagKeys](https://cloud.tencent.com/document/api/651/35318)
- function-name
按照【后端绑定SCF云函数的函数名称】进行过滤，例如：helloworld-1744958255。
类型：String
必选：否
获取方式：[ListFunctions](https://cloud.tencent.com/document/api/583/18582)
- vip-isp
按照【CLB VIP的运营商类型】进行过滤，例如：BGP。
类型：String
必选：否
公网类型可选项：BGP(多线)、CMCC(中国移动)、CTCC(中国电信)、CUCC(中国联通)
内网类型可选项：INTERNAL(内网)
- sla-type
按照【CLB 的性能容量型规格】进行过滤，例如：clb.c4.xlarge。
类型：String
必选：否
可选项：clb.c2.medium(标准型)、clb.c3.small(高阶型1)、clb.c3.medium(高阶型2)、clb.c4.small(超强型1)、clb.c4.medium(超强型2)、clb.c4.large(超强型3)、clb.c4.xlarge(超强型4)
具体规格参数参考：
- exclusive
按照【独占实例】进行过滤。例如：1，代表筛选独占型实例。
类型：String
必选：否
可选项：0、1
     */
    public $Filters;

    /**
     * @var array 选择返回的扩充字段，不指定时，扩充字段默认不返回。详细支持的扩充字段如下：
<li> TargetCount：绑定的后端服务数量</li>
     */
    public $AdditionalFields;

    /**
     * @param array $LoadBalancerIds 负载均衡实例ID。实例ID数量上限为20个。
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     * @param integer $Forward 负载均衡实例的类型。1：通用的负载均衡实例，0：传统型负载均衡实例。如果不传此参数，则查询所有类型的负载均衡实例。
     * @param string $LoadBalancerName 负载均衡实例的名称，支持模糊查询。
     * @param string $Domain 腾讯云为负载均衡实例分配的域名，支持模糊查询。
     * @param array $LoadBalancerVips 负载均衡实例的 VIP 地址，支持多个。
     * @param array $BackendPublicIps 负载均衡绑定的后端服务的外网 IP，只支持查询云服务器的公网 IP。
     * @param array $BackendPrivateIps 负载均衡绑定的后端服务的内网 IP，只支持查询云服务器的内网 IP。
     * @param integer $Offset 数据偏移量，默认为0。
     * @param integer $Limit 返回负载均衡实例的数量，默认为20，最大值为100。
     * @param string $OrderBy 排序参数，支持以下字段：
- LoadBalancerName
- CreateTime
- Domain
- LoadBalancerType

默认为 CreateTime。

     * @param integer $OrderType 1：倒序，0：顺序，默认为1，按照创建时间倒序。
     * @param string $SearchKey 模糊搜索字段，模糊匹配负载均衡实例的名称、域名、负载均衡实例的 VIP 地址，负载均衡实例ID。
     * @param integer $ProjectId 负载均衡实例所属的项目 ID，可以通过[DescribeProject](https://cloud.tencent.com/document/api/651/78725)接口获取，不传默认所有项目。
     * @param integer $WithRs 负载均衡是否绑定后端服务，0：没有绑定后端服务，1：绑定后端服务，-1：查询全部。
     * @param string $VpcId 负载均衡实例所属私有网络唯一ID，如 vpc-bhqkbhdx，可以通过[DescribeVpcs](https://cloud.tencent.com/document/api/215/15778)接口获取。
查找基础网络类型的负载均衡可传入'0'。
     * @param string $SecurityGroup 安全组ID，如 sg-m1cc****，可以通过接口[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)获取。
     * @param string $MasterZone 主可用区ID，如 ："100001" （对应的是广州一区）。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)获取可用区列表。
     * @param array $Filters 每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。<br/>`Filter.Name`和`Filter.Values`皆为必填项。详细的过滤条件如下：
- charge-type
按照【实例计费模式】进行过滤。实例计费模式例如：PREPAID。
类型：String
必选：否
可选项：PREPAID(预付费)、POSTPAID_BY_HOUR(后付费)
- internet-charge-type
按照【网络计费模式】进行过滤。网络计费模式例如：BANDWIDTH_PREPAID。
类型：String
必选：否
可选项：BANDWIDTH_PREPAID(预付费按带宽结算)、 TRAFFIC_POSTPAID_BY_HOUR(流量按小时后付费)、BANDWIDTH_POSTPAID_BY_HOUR(带宽按小时后付费)、BANDWIDTH_PACKAGE(带宽包用户)
- master-zone-id
按照【CLB主可用区ID】进行过滤。例如：100001（对应的是广州一区）。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- tag-key
按照【CLB 标签的键】进行过滤，例如：tag-key。
类型：String
必选：否
获取方式：[DescribeTags](https://cloud.tencent.com/document/api/651/35316)
- tag:tag-key
按照【CLB标签键值】进行过滤，例如：tag-test。
类型：String
必选：否
获取方式：[DescribeTagKeys](https://cloud.tencent.com/document/api/651/35318)
- function-name
按照【后端绑定SCF云函数的函数名称】进行过滤，例如：helloworld-1744958255。
类型：String
必选：否
获取方式：[ListFunctions](https://cloud.tencent.com/document/api/583/18582)
- vip-isp
按照【CLB VIP的运营商类型】进行过滤，例如：BGP。
类型：String
必选：否
公网类型可选项：BGP(多线)、CMCC(中国移动)、CTCC(中国电信)、CUCC(中国联通)
内网类型可选项：INTERNAL(内网)
- sla-type
按照【CLB 的性能容量型规格】进行过滤，例如：clb.c4.xlarge。
类型：String
必选：否
可选项：clb.c2.medium(标准型)、clb.c3.small(高阶型1)、clb.c3.medium(高阶型2)、clb.c4.small(超强型1)、clb.c4.medium(超强型2)、clb.c4.large(超强型3)、clb.c4.xlarge(超强型4)
具体规格参数参考：
- exclusive
按照【独占实例】进行过滤。例如：1，代表筛选独占型实例。
类型：String
必选：否
可选项：0、1
     * @param array $AdditionalFields 选择返回的扩充字段，不指定时，扩充字段默认不返回。详细支持的扩充字段如下：
<li> TargetCount：绑定的后端服务数量</li>
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("BackendPublicIps",$param) and $param["BackendPublicIps"] !== null) {
            $this->BackendPublicIps = $param["BackendPublicIps"];
        }

        if (array_key_exists("BackendPrivateIps",$param) and $param["BackendPrivateIps"] !== null) {
            $this->BackendPrivateIps = $param["BackendPrivateIps"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WithRs",$param) and $param["WithRs"] !== null) {
            $this->WithRs = $param["WithRs"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("AdditionalFields",$param) and $param["AdditionalFields"] !== null) {
            $this->AdditionalFields = $param["AdditionalFields"];
        }
    }
}
