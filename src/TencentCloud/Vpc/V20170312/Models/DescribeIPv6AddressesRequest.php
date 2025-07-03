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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIPv6Addresses请求参数结构体
 *
 * @method array getIPv6AddressIds() 获取标识 IPv6 的唯一 ID 列。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。

- 传统弹性公网 IPv6 唯一 ID 形如：`eip-11112222`
- 弹性公网 IPv6 唯一 ID 形如：`eipv6-11112222`

注意：参数不支持同时指定`IPv6AddressIds`和`Filters`。
 * @method void setIPv6AddressIds(array $IPv6AddressIds) 设置标识 IPv6 的唯一 ID 列。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。

- 传统弹性公网 IPv6 唯一 ID 形如：`eip-11112222`
- 弹性公网 IPv6 唯一 ID 形如：`eipv6-11112222`

注意：参数不支持同时指定`IPv6AddressIds`和`Filters`。
 * @method array getFilters() 获取每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。参数不支持同时指定`IPv6AddressIds`和`Filters`。详细的过滤条件如下：

- address-id - String - 是否必填：否 - （过滤条件）按照弹性公网IPv6的唯一ID过滤。
- public-ipv6-address - String - 是否必填：否 - （过滤条件）按照公网 IPv6 的 IP 地址过滤。
- network-interface-id - String - 是否必填：否 - （过滤条件）按照弹性网卡的唯一ID过滤。
- instance-id - String - 是否必填：否 - （过滤条件）按照绑定实例的唯一ID过滤。
- charge-type - String - 是否必填：否 - （过滤条件）按照计费类型过滤。
- private-ipv6-address - String - 是否必填：否 - （过滤条件）按照绑定的内网 IPv6 地址过滤。
- egress - String - 是否必填：否 - （过滤条件）按照出口过滤。
- address-type - String - 是否必填：否 - （过滤条件）按照IPv6类型 进行过滤。可选值：'EIP6'：传统弹性公网 IPv6，'EIPv6'：弹性公网 IPv6，'WanIPv6'：普通公网 IPv6，'HighQualityEIPv6'：精品弹性公网 IPv6。默认值是'EIPv6'。
- address-isp - String - 是否必填：否 - （过滤条件）按照 运营商类型 进行过滤。可选值：'BGP'：常规BGP，'CMCC'：移动，'CUCC'：联通, 'CTCC'：电信。
- address-status - String - 是否必填：否 - （过滤条件）按照 EIP 的状态过滤。状态包含：'CREATING'：创建中，'BINDING'：绑定中，'BIND'：已绑，'UNBINDING'：解绑中，'UNBIND'：未绑定，'OFFLINING'：下线中，'BIND_ENI'：绑定了ENI，'PRIVATE'：仅开通内网的IPv6。
- address-name - String - 是否必填：否 - （过滤条件）按照 EIP 名称过滤。不支持模糊过滤。
- tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。
- tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。
- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。tag-key使用具体的标签键进行替换。
 * @method void setFilters(array $Filters) 设置每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。参数不支持同时指定`IPv6AddressIds`和`Filters`。详细的过滤条件如下：

- address-id - String - 是否必填：否 - （过滤条件）按照弹性公网IPv6的唯一ID过滤。
- public-ipv6-address - String - 是否必填：否 - （过滤条件）按照公网 IPv6 的 IP 地址过滤。
- network-interface-id - String - 是否必填：否 - （过滤条件）按照弹性网卡的唯一ID过滤。
- instance-id - String - 是否必填：否 - （过滤条件）按照绑定实例的唯一ID过滤。
- charge-type - String - 是否必填：否 - （过滤条件）按照计费类型过滤。
- private-ipv6-address - String - 是否必填：否 - （过滤条件）按照绑定的内网 IPv6 地址过滤。
- egress - String - 是否必填：否 - （过滤条件）按照出口过滤。
- address-type - String - 是否必填：否 - （过滤条件）按照IPv6类型 进行过滤。可选值：'EIP6'：传统弹性公网 IPv6，'EIPv6'：弹性公网 IPv6，'WanIPv6'：普通公网 IPv6，'HighQualityEIPv6'：精品弹性公网 IPv6。默认值是'EIPv6'。
- address-isp - String - 是否必填：否 - （过滤条件）按照 运营商类型 进行过滤。可选值：'BGP'：常规BGP，'CMCC'：移动，'CUCC'：联通, 'CTCC'：电信。
- address-status - String - 是否必填：否 - （过滤条件）按照 EIP 的状态过滤。状态包含：'CREATING'：创建中，'BINDING'：绑定中，'BIND'：已绑，'UNBINDING'：解绑中，'UNBIND'：未绑定，'OFFLINING'：下线中，'BIND_ENI'：绑定了ENI，'PRIVATE'：仅开通内网的IPv6。
- address-name - String - 是否必填：否 - （过滤条件）按照 EIP 名称过滤。不支持模糊过滤。
- tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。
- tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。
- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。tag-key使用具体的标签键进行替换。
 * @method boolean getTraditional() 获取是否查询传统型IPv6地址信息。可选值：
<li>True：查询传统型IPv6地址信息</li>
<li>False：不查询传统型IPv6地址信息</li>
默认值：False
 * @method void setTraditional(boolean $Traditional) 设置是否查询传统型IPv6地址信息。可选值：
<li>True：查询传统型IPv6地址信息</li>
<li>False：不查询传统型IPv6地址信息</li>
默认值：False
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/11646)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/11646)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/11646)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/11646)中的相关小节。
 */
class DescribeIPv6AddressesRequest extends AbstractModel
{
    /**
     * @var array 标识 IPv6 的唯一 ID 列。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。

- 传统弹性公网 IPv6 唯一 ID 形如：`eip-11112222`
- 弹性公网 IPv6 唯一 ID 形如：`eipv6-11112222`

注意：参数不支持同时指定`IPv6AddressIds`和`Filters`。
     */
    public $IPv6AddressIds;

    /**
     * @var array 每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。参数不支持同时指定`IPv6AddressIds`和`Filters`。详细的过滤条件如下：

- address-id - String - 是否必填：否 - （过滤条件）按照弹性公网IPv6的唯一ID过滤。
- public-ipv6-address - String - 是否必填：否 - （过滤条件）按照公网 IPv6 的 IP 地址过滤。
- network-interface-id - String - 是否必填：否 - （过滤条件）按照弹性网卡的唯一ID过滤。
- instance-id - String - 是否必填：否 - （过滤条件）按照绑定实例的唯一ID过滤。
- charge-type - String - 是否必填：否 - （过滤条件）按照计费类型过滤。
- private-ipv6-address - String - 是否必填：否 - （过滤条件）按照绑定的内网 IPv6 地址过滤。
- egress - String - 是否必填：否 - （过滤条件）按照出口过滤。
- address-type - String - 是否必填：否 - （过滤条件）按照IPv6类型 进行过滤。可选值：'EIP6'：传统弹性公网 IPv6，'EIPv6'：弹性公网 IPv6，'WanIPv6'：普通公网 IPv6，'HighQualityEIPv6'：精品弹性公网 IPv6。默认值是'EIPv6'。
- address-isp - String - 是否必填：否 - （过滤条件）按照 运营商类型 进行过滤。可选值：'BGP'：常规BGP，'CMCC'：移动，'CUCC'：联通, 'CTCC'：电信。
- address-status - String - 是否必填：否 - （过滤条件）按照 EIP 的状态过滤。状态包含：'CREATING'：创建中，'BINDING'：绑定中，'BIND'：已绑，'UNBINDING'：解绑中，'UNBIND'：未绑定，'OFFLINING'：下线中，'BIND_ENI'：绑定了ENI，'PRIVATE'：仅开通内网的IPv6。
- address-name - String - 是否必填：否 - （过滤条件）按照 EIP 名称过滤。不支持模糊过滤。
- tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。
- tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。
- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。tag-key使用具体的标签键进行替换。
     */
    public $Filters;

    /**
     * @var boolean 是否查询传统型IPv6地址信息。可选值：
<li>True：查询传统型IPv6地址信息</li>
<li>False：不查询传统型IPv6地址信息</li>
默认值：False
     */
    public $Traditional;

    /**
     * @var integer 偏移量，默认为0。关于Offset的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/11646)中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/11646)中的相关小节。
     */
    public $Limit;

    /**
     * @param array $IPv6AddressIds 标识 IPv6 的唯一 ID 列。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。

- 传统弹性公网 IPv6 唯一 ID 形如：`eip-11112222`
- 弹性公网 IPv6 唯一 ID 形如：`eipv6-11112222`

注意：参数不支持同时指定`IPv6AddressIds`和`Filters`。
     * @param array $Filters 每次请求的`Filters`的上限为10，`Filter.Values`的上限为100。参数不支持同时指定`IPv6AddressIds`和`Filters`。详细的过滤条件如下：

- address-id - String - 是否必填：否 - （过滤条件）按照弹性公网IPv6的唯一ID过滤。
- public-ipv6-address - String - 是否必填：否 - （过滤条件）按照公网 IPv6 的 IP 地址过滤。
- network-interface-id - String - 是否必填：否 - （过滤条件）按照弹性网卡的唯一ID过滤。
- instance-id - String - 是否必填：否 - （过滤条件）按照绑定实例的唯一ID过滤。
- charge-type - String - 是否必填：否 - （过滤条件）按照计费类型过滤。
- private-ipv6-address - String - 是否必填：否 - （过滤条件）按照绑定的内网 IPv6 地址过滤。
- egress - String - 是否必填：否 - （过滤条件）按照出口过滤。
- address-type - String - 是否必填：否 - （过滤条件）按照IPv6类型 进行过滤。可选值：'EIP6'：传统弹性公网 IPv6，'EIPv6'：弹性公网 IPv6，'WanIPv6'：普通公网 IPv6，'HighQualityEIPv6'：精品弹性公网 IPv6。默认值是'EIPv6'。
- address-isp - String - 是否必填：否 - （过滤条件）按照 运营商类型 进行过滤。可选值：'BGP'：常规BGP，'CMCC'：移动，'CUCC'：联通, 'CTCC'：电信。
- address-status - String - 是否必填：否 - （过滤条件）按照 EIP 的状态过滤。状态包含：'CREATING'：创建中，'BINDING'：绑定中，'BIND'：已绑，'UNBINDING'：解绑中，'UNBIND'：未绑定，'OFFLINING'：下线中，'BIND_ENI'：绑定了ENI，'PRIVATE'：仅开通内网的IPv6。
- address-name - String - 是否必填：否 - （过滤条件）按照 EIP 名称过滤。不支持模糊过滤。
- tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。
- tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。
- tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。tag-key使用具体的标签键进行替换。
     * @param boolean $Traditional 是否查询传统型IPv6地址信息。可选值：
<li>True：查询传统型IPv6地址信息</li>
<li>False：不查询传统型IPv6地址信息</li>
默认值：False
     * @param integer $Offset 偏移量，默认为0。关于Offset的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/11646)中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/11646)中的相关小节。
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
        if (array_key_exists("IPv6AddressIds",$param) and $param["IPv6AddressIds"] !== null) {
            $this->IPv6AddressIds = $param["IPv6AddressIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Traditional",$param) and $param["Traditional"] !== null) {
            $this->Traditional = $param["Traditional"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
