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
 * DescribeAddresses请求参数结构体
 *
 * @method array getAddressIds() 获取<p>标识 EIP 的唯一 ID 列表。EIP 唯一 ID 形如：<code>eip-11112222</code>。可以使用<a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a>接口获取AddressId。参数不支持同时指定<code>AddressIds</code>和<code>Filters.address-id</code>。</p><p>说明：当指定该参数进行查询时，接口返回的结果数量上限由 &nbsp;Limit&nbsp; 参数决定（默认 20 条）。响应中的 &nbsp;TotalCount&nbsp; 字段表示符合条件的记录总数。当 &nbsp;TotalCount&nbsp; 超出 &nbsp;Limit&nbsp; 限制时，接口仅返回当前页的数据，您需要结合 &nbsp;Offset&nbsp; 参数进行分页遍历，以获取完整的查询结果。</p>
 * @method void setAddressIds(array $AddressIds) 设置<p>标识 EIP 的唯一 ID 列表。EIP 唯一 ID 形如：<code>eip-11112222</code>。可以使用<a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a>接口获取AddressId。参数不支持同时指定<code>AddressIds</code>和<code>Filters.address-id</code>。</p><p>说明：当指定该参数进行查询时，接口返回的结果数量上限由 &nbsp;Limit&nbsp; 参数决定（默认 20 条）。响应中的 &nbsp;TotalCount&nbsp; 字段表示符合条件的记录总数。当 &nbsp;TotalCount&nbsp; 超出 &nbsp;Limit&nbsp; 限制时，接口仅返回当前页的数据，您需要结合 &nbsp;Offset&nbsp; 参数进行分页遍历，以获取完整的查询结果。</p>
 * @method array getFilters() 获取<p>每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为100。详细的过滤条件如下：</p><li> address-id - String - 是否必填：否 - （过滤条件）按照 EIP 的唯一 ID 过滤。EIP 唯一 ID 形如：eip-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-id。</li><li> address-name - String - 是否必填：否 - （过滤条件）按照 EIP 名称过滤。不支持模糊过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-name。注意：当指定 address-name 参数时，仅支持按第一个传入的 address-name 参数执行查询操作。</li><li> address-ip - String - 是否必填：否 - （过滤条件）按照 EIP 的 IP 地址过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-ip。</li><li> address-status - String - 是否必填：否 - （过滤条件）按照 EIP 的状态过滤。状态包含：'CREATING'：创建中，'BINDING'：绑定中，'BIND'：已绑，'UNBINDING'：解绑中，'UNBIND'：未绑定，'OFFLINING'：下线中，'BIND_ENI'：绑定了ENI。</li><li> instance-id - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的实例 ID 过滤。实例 ID 形如：ins-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取instance-id。</li><li> private-ip-address - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的内网 IP 过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取private-ip-address。注意：当指定 private-ip-address 参数时，仅支持按第一个传入的 private-ip-address 参数执行查询操作。</li><li> network-interface-id - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的弹性网卡 ID 过滤。弹性网卡 ID 形如：eni-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取network-interface-id。</li><li> is-arrears - String - 是否必填：否 - （过滤条件）按照 EIP 是否欠费进行过滤。（TRUE：EIP 处于欠费状态|FALSE：EIP 费用状态正常）</li><li> instance-type - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的实例类型进行过滤。绑定的实例类型可选值：'CVM'：云服务器，'NAT'：NAT 网关，'ENI'：弹性网卡，'CLB'：负载均衡，'HAVIP'：高可用虚拟IP，'DHCPIP'：弹性内网IP，'EKS'：弹性容器服务，'VPCE'：终端节点，'WAF'：Web 应用防火墙。注意：过滤条件仅使用 instance-type 时，系统默认返回所有EIP类型（包括EIP、AnycastEIP、HighQualityEIP、AntiDDoSEIP、ResidentialEIP）绑定的资源列表。若需查询特定EIP类型绑定的资源，或查询普通公网IP绑定的资源，请同时指定 instance-type 和 address-type 参数进行配置。</li><li> address-type - String - 是否必填：否 - （过滤条件）按照 IP类型 进行过滤。可选值：'WanIP'：普通公网 IP, 'EIP'：弹性公网 IP，'AnycastEIP'：加速 IP，'HighQualityEIP'：精品弹性公网 IP， 'AntiDDoSEIP'：高防 IP，'ResidentialEIP'：原生 IP。该参数用于指定需要查询的弹性公网 IP 类型。若不传入此参数，接口默认返回 EIP、AnycastEIP、HighQualityEIP、AntiDDoSEIP、ResidentialEIP 这五种类型的资源，不包含普通公网 IP（WanIP）。如需查询普通公网 IP，请务必显式传入 &nbsp;'WanIP' 。</li><li> address-isp - String - 是否必填：否 - （过滤条件）按照 运营商类型 进行过滤。可选值：'BGP'：常规BGP，'CMCC'：移动，'CUCC'：联通, 'CTCC'：电信</li><li> dedicated-cluster-id - String - 是否必填：否 - （过滤条件）按照 CDC 的唯一 ID 过滤。CDC 唯一 ID 形如：cluster-11112222。</li><li> tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。</li><li> tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。</li><li> tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。tag-key使用具体的标签键进行替换。</li>
 * @method void setFilters(array $Filters) 设置<p>每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为100。详细的过滤条件如下：</p><li> address-id - String - 是否必填：否 - （过滤条件）按照 EIP 的唯一 ID 过滤。EIP 唯一 ID 形如：eip-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-id。</li><li> address-name - String - 是否必填：否 - （过滤条件）按照 EIP 名称过滤。不支持模糊过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-name。注意：当指定 address-name 参数时，仅支持按第一个传入的 address-name 参数执行查询操作。</li><li> address-ip - String - 是否必填：否 - （过滤条件）按照 EIP 的 IP 地址过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-ip。</li><li> address-status - String - 是否必填：否 - （过滤条件）按照 EIP 的状态过滤。状态包含：'CREATING'：创建中，'BINDING'：绑定中，'BIND'：已绑，'UNBINDING'：解绑中，'UNBIND'：未绑定，'OFFLINING'：下线中，'BIND_ENI'：绑定了ENI。</li><li> instance-id - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的实例 ID 过滤。实例 ID 形如：ins-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取instance-id。</li><li> private-ip-address - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的内网 IP 过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取private-ip-address。注意：当指定 private-ip-address 参数时，仅支持按第一个传入的 private-ip-address 参数执行查询操作。</li><li> network-interface-id - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的弹性网卡 ID 过滤。弹性网卡 ID 形如：eni-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取network-interface-id。</li><li> is-arrears - String - 是否必填：否 - （过滤条件）按照 EIP 是否欠费进行过滤。（TRUE：EIP 处于欠费状态|FALSE：EIP 费用状态正常）</li><li> instance-type - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的实例类型进行过滤。绑定的实例类型可选值：'CVM'：云服务器，'NAT'：NAT 网关，'ENI'：弹性网卡，'CLB'：负载均衡，'HAVIP'：高可用虚拟IP，'DHCPIP'：弹性内网IP，'EKS'：弹性容器服务，'VPCE'：终端节点，'WAF'：Web 应用防火墙。注意：过滤条件仅使用 instance-type 时，系统默认返回所有EIP类型（包括EIP、AnycastEIP、HighQualityEIP、AntiDDoSEIP、ResidentialEIP）绑定的资源列表。若需查询特定EIP类型绑定的资源，或查询普通公网IP绑定的资源，请同时指定 instance-type 和 address-type 参数进行配置。</li><li> address-type - String - 是否必填：否 - （过滤条件）按照 IP类型 进行过滤。可选值：'WanIP'：普通公网 IP, 'EIP'：弹性公网 IP，'AnycastEIP'：加速 IP，'HighQualityEIP'：精品弹性公网 IP， 'AntiDDoSEIP'：高防 IP，'ResidentialEIP'：原生 IP。该参数用于指定需要查询的弹性公网 IP 类型。若不传入此参数，接口默认返回 EIP、AnycastEIP、HighQualityEIP、AntiDDoSEIP、ResidentialEIP 这五种类型的资源，不包含普通公网 IP（WanIP）。如需查询普通公网 IP，请务必显式传入 &nbsp;'WanIP' 。</li><li> address-isp - String - 是否必填：否 - （过滤条件）按照 运营商类型 进行过滤。可选值：'BGP'：常规BGP，'CMCC'：移动，'CUCC'：联通, 'CTCC'：电信</li><li> dedicated-cluster-id - String - 是否必填：否 - （过滤条件）按照 CDC 的唯一 ID 过滤。CDC 唯一 ID 形如：cluster-11112222。</li><li> tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。</li><li> tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。</li><li> tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。tag-key使用具体的标签键进行替换。</li>
 * @method integer getOffset() 获取<p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API 中的相关小节。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API 中的相关小节。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API 中的相关小节。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API 中的相关小节。</p>
 */
class DescribeAddressesRequest extends AbstractModel
{
    /**
     * @var array <p>标识 EIP 的唯一 ID 列表。EIP 唯一 ID 形如：<code>eip-11112222</code>。可以使用<a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a>接口获取AddressId。参数不支持同时指定<code>AddressIds</code>和<code>Filters.address-id</code>。</p><p>说明：当指定该参数进行查询时，接口返回的结果数量上限由 &nbsp;Limit&nbsp; 参数决定（默认 20 条）。响应中的 &nbsp;TotalCount&nbsp; 字段表示符合条件的记录总数。当 &nbsp;TotalCount&nbsp; 超出 &nbsp;Limit&nbsp; 限制时，接口仅返回当前页的数据，您需要结合 &nbsp;Offset&nbsp; 参数进行分页遍历，以获取完整的查询结果。</p>
     */
    public $AddressIds;

    /**
     * @var array <p>每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为100。详细的过滤条件如下：</p><li> address-id - String - 是否必填：否 - （过滤条件）按照 EIP 的唯一 ID 过滤。EIP 唯一 ID 形如：eip-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-id。</li><li> address-name - String - 是否必填：否 - （过滤条件）按照 EIP 名称过滤。不支持模糊过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-name。注意：当指定 address-name 参数时，仅支持按第一个传入的 address-name 参数执行查询操作。</li><li> address-ip - String - 是否必填：否 - （过滤条件）按照 EIP 的 IP 地址过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-ip。</li><li> address-status - String - 是否必填：否 - （过滤条件）按照 EIP 的状态过滤。状态包含：'CREATING'：创建中，'BINDING'：绑定中，'BIND'：已绑，'UNBINDING'：解绑中，'UNBIND'：未绑定，'OFFLINING'：下线中，'BIND_ENI'：绑定了ENI。</li><li> instance-id - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的实例 ID 过滤。实例 ID 形如：ins-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取instance-id。</li><li> private-ip-address - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的内网 IP 过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取private-ip-address。注意：当指定 private-ip-address 参数时，仅支持按第一个传入的 private-ip-address 参数执行查询操作。</li><li> network-interface-id - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的弹性网卡 ID 过滤。弹性网卡 ID 形如：eni-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取network-interface-id。</li><li> is-arrears - String - 是否必填：否 - （过滤条件）按照 EIP 是否欠费进行过滤。（TRUE：EIP 处于欠费状态|FALSE：EIP 费用状态正常）</li><li> instance-type - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的实例类型进行过滤。绑定的实例类型可选值：'CVM'：云服务器，'NAT'：NAT 网关，'ENI'：弹性网卡，'CLB'：负载均衡，'HAVIP'：高可用虚拟IP，'DHCPIP'：弹性内网IP，'EKS'：弹性容器服务，'VPCE'：终端节点，'WAF'：Web 应用防火墙。注意：过滤条件仅使用 instance-type 时，系统默认返回所有EIP类型（包括EIP、AnycastEIP、HighQualityEIP、AntiDDoSEIP、ResidentialEIP）绑定的资源列表。若需查询特定EIP类型绑定的资源，或查询普通公网IP绑定的资源，请同时指定 instance-type 和 address-type 参数进行配置。</li><li> address-type - String - 是否必填：否 - （过滤条件）按照 IP类型 进行过滤。可选值：'WanIP'：普通公网 IP, 'EIP'：弹性公网 IP，'AnycastEIP'：加速 IP，'HighQualityEIP'：精品弹性公网 IP， 'AntiDDoSEIP'：高防 IP，'ResidentialEIP'：原生 IP。该参数用于指定需要查询的弹性公网 IP 类型。若不传入此参数，接口默认返回 EIP、AnycastEIP、HighQualityEIP、AntiDDoSEIP、ResidentialEIP 这五种类型的资源，不包含普通公网 IP（WanIP）。如需查询普通公网 IP，请务必显式传入 &nbsp;'WanIP' 。</li><li> address-isp - String - 是否必填：否 - （过滤条件）按照 运营商类型 进行过滤。可选值：'BGP'：常规BGP，'CMCC'：移动，'CUCC'：联通, 'CTCC'：电信</li><li> dedicated-cluster-id - String - 是否必填：否 - （过滤条件）按照 CDC 的唯一 ID 过滤。CDC 唯一 ID 形如：cluster-11112222。</li><li> tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。</li><li> tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。</li><li> tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。tag-key使用具体的标签键进行替换。</li>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API 中的相关小节。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API 中的相关小节。</p>
     */
    public $Limit;

    /**
     * @param array $AddressIds <p>标识 EIP 的唯一 ID 列表。EIP 唯一 ID 形如：<code>eip-11112222</code>。可以使用<a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a>接口获取AddressId。参数不支持同时指定<code>AddressIds</code>和<code>Filters.address-id</code>。</p><p>说明：当指定该参数进行查询时，接口返回的结果数量上限由 &nbsp;Limit&nbsp; 参数决定（默认 20 条）。响应中的 &nbsp;TotalCount&nbsp; 字段表示符合条件的记录总数。当 &nbsp;TotalCount&nbsp; 超出 &nbsp;Limit&nbsp; 限制时，接口仅返回当前页的数据，您需要结合 &nbsp;Offset&nbsp; 参数进行分页遍历，以获取完整的查询结果。</p>
     * @param array $Filters <p>每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为100。详细的过滤条件如下：</p><li> address-id - String - 是否必填：否 - （过滤条件）按照 EIP 的唯一 ID 过滤。EIP 唯一 ID 形如：eip-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-id。</li><li> address-name - String - 是否必填：否 - （过滤条件）按照 EIP 名称过滤。不支持模糊过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-name。注意：当指定 address-name 参数时，仅支持按第一个传入的 address-name 参数执行查询操作。</li><li> address-ip - String - 是否必填：否 - （过滤条件）按照 EIP 的 IP 地址过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取address-ip。</li><li> address-status - String - 是否必填：否 - （过滤条件）按照 EIP 的状态过滤。状态包含：'CREATING'：创建中，'BINDING'：绑定中，'BIND'：已绑，'UNBINDING'：解绑中，'UNBIND'：未绑定，'OFFLINING'：下线中，'BIND_ENI'：绑定了ENI。</li><li> instance-id - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的实例 ID 过滤。实例 ID 形如：ins-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取instance-id。</li><li> private-ip-address - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的内网 IP 过滤。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取private-ip-address。注意：当指定 private-ip-address 参数时，仅支持按第一个传入的 private-ip-address 参数执行查询操作。</li><li> network-interface-id - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的弹性网卡 ID 过滤。弹性网卡 ID 形如：eni-11112222。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取network-interface-id。</li><li> is-arrears - String - 是否必填：否 - （过滤条件）按照 EIP 是否欠费进行过滤。（TRUE：EIP 处于欠费状态|FALSE：EIP 费用状态正常）</li><li> instance-type - String - 是否必填：否 - （过滤条件）按照 EIP 绑定的实例类型进行过滤。绑定的实例类型可选值：'CVM'：云服务器，'NAT'：NAT 网关，'ENI'：弹性网卡，'CLB'：负载均衡，'HAVIP'：高可用虚拟IP，'DHCPIP'：弹性内网IP，'EKS'：弹性容器服务，'VPCE'：终端节点，'WAF'：Web 应用防火墙。注意：过滤条件仅使用 instance-type 时，系统默认返回所有EIP类型（包括EIP、AnycastEIP、HighQualityEIP、AntiDDoSEIP、ResidentialEIP）绑定的资源列表。若需查询特定EIP类型绑定的资源，或查询普通公网IP绑定的资源，请同时指定 instance-type 和 address-type 参数进行配置。</li><li> address-type - String - 是否必填：否 - （过滤条件）按照 IP类型 进行过滤。可选值：'WanIP'：普通公网 IP, 'EIP'：弹性公网 IP，'AnycastEIP'：加速 IP，'HighQualityEIP'：精品弹性公网 IP， 'AntiDDoSEIP'：高防 IP，'ResidentialEIP'：原生 IP。该参数用于指定需要查询的弹性公网 IP 类型。若不传入此参数，接口默认返回 EIP、AnycastEIP、HighQualityEIP、AntiDDoSEIP、ResidentialEIP 这五种类型的资源，不包含普通公网 IP（WanIP）。如需查询普通公网 IP，请务必显式传入 &nbsp;'WanIP' 。</li><li> address-isp - String - 是否必填：否 - （过滤条件）按照 运营商类型 进行过滤。可选值：'BGP'：常规BGP，'CMCC'：移动，'CUCC'：联通, 'CTCC'：电信</li><li> dedicated-cluster-id - String - 是否必填：否 - （过滤条件）按照 CDC 的唯一 ID 过滤。CDC 唯一 ID 形如：cluster-11112222。</li><li> tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。</li><li> tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。</li><li> tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。tag-key使用具体的标签键进行替换。</li>
     * @param integer $Offset <p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API 中的相关小节。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API 中的相关小节。</p>
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
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
