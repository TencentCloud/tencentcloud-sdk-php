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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegionIpv6Addresses请求参数结构体
 *
 * @method string getEcmRegion() 获取ECM 地域，为空时返回所有地域的IPv6地址。
 * @method void setEcmRegion(string $EcmRegion) 设置ECM 地域，为空时返回所有地域的IPv6地址。
 * @method array getFilters() 获取详细的过滤条件如下：
address-id - String - 是否必填：否 - （过滤条件）按照 EIP 的 ID 过滤。
address-ip - String - 是否必填：否 - （过滤条件）按照 EIP 的 IP 地址过滤。
network-interface-id - String - 是否必填：否 - （过滤条件）按照弹性网卡的唯一ID过滤。
instance-id - String - 是否必填：否 - （过滤条件）按照 EIP 所绑定的实例 ID 过滤。
vpc-id - String - 是否必填：否 - （过滤条件）按照 EIP 所在 VPC 的 ID 进行过滤。
address-isp - String - 是否必填：否 - （过滤条件）按照 EIP 的运营商进行过滤。
address-status  - String - 是否必填：否 - （过滤条件）按照 EIP  的状态信息进行过滤。
 * @method void setFilters(array $Filters) 设置详细的过滤条件如下：
address-id - String - 是否必填：否 - （过滤条件）按照 EIP 的 ID 过滤。
address-ip - String - 是否必填：否 - （过滤条件）按照 EIP 的 IP 地址过滤。
network-interface-id - String - 是否必填：否 - （过滤条件）按照弹性网卡的唯一ID过滤。
instance-id - String - 是否必填：否 - （过滤条件）按照 EIP 所绑定的实例 ID 过滤。
vpc-id - String - 是否必填：否 - （过滤条件）按照 EIP 所在 VPC 的 ID 进行过滤。
address-isp - String - 是否必填：否 - （过滤条件）按照 EIP 的运营商进行过滤。
address-status  - String - 是否必填：否 - （过滤条件）按照 EIP  的状态信息进行过滤。
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
 */
class DescribeRegionIpv6AddressesRequest extends AbstractModel
{
    /**
     * @var string ECM 地域，为空时返回所有地域的IPv6地址。
     */
    public $EcmRegion;

    /**
     * @var array 详细的过滤条件如下：
address-id - String - 是否必填：否 - （过滤条件）按照 EIP 的 ID 过滤。
address-ip - String - 是否必填：否 - （过滤条件）按照 EIP 的 IP 地址过滤。
network-interface-id - String - 是否必填：否 - （过滤条件）按照弹性网卡的唯一ID过滤。
instance-id - String - 是否必填：否 - （过滤条件）按照 EIP 所绑定的实例 ID 过滤。
vpc-id - String - 是否必填：否 - （过滤条件）按照 EIP 所在 VPC 的 ID 进行过滤。
address-isp - String - 是否必填：否 - （过滤条件）按照 EIP 的运营商进行过滤。
address-status  - String - 是否必填：否 - （过滤条件）按照 EIP  的状态信息进行过滤。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
     */
    public $Limit;

    /**
     * @param string $EcmRegion ECM 地域，为空时返回所有地域的IPv6地址。
     * @param array $Filters 详细的过滤条件如下：
address-id - String - 是否必填：否 - （过滤条件）按照 EIP 的 ID 过滤。
address-ip - String - 是否必填：否 - （过滤条件）按照 EIP 的 IP 地址过滤。
network-interface-id - String - 是否必填：否 - （过滤条件）按照弹性网卡的唯一ID过滤。
instance-id - String - 是否必填：否 - （过滤条件）按照 EIP 所绑定的实例 ID 过滤。
vpc-id - String - 是否必填：否 - （过滤条件）按照 EIP 所在 VPC 的 ID 进行过滤。
address-isp - String - 是否必填：否 - （过滤条件）按照 EIP 的运营商进行过滤。
address-status  - String - 是否必填：否 - （过滤条件）按照 EIP  的状态信息进行过滤。
     * @param integer $Offset 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
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
