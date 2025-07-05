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
 * DescribeReserveIpAddresses请求参数结构体
 *
 * @method array getReserveIpIds() 获取内网保留IP唯一ID 列表
 * @method void setReserveIpIds(array $ReserveIpIds) 设置内网保留IP唯一ID 列表
 * @method array getFilters() 获取过滤条件，参数不支持同时指定ReserveIpIds和Filters。

reserve-ip-id  - String - （过滤条件）内网保留 IP唯一 ID，形如：rsvip-pvqgv9vi。
vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。
subnet-id - String - （过滤条件）所属子网实例ID，形如：subnet-f49l6u0z。
address-ip - String - （过滤条件）内网保留 IP 地址，形如：192.168.0.10。
ip-type - String - （过滤条件）业务类型 ipType，0。
name - String - （过滤条件）名称。
state - String - （过滤条件）状态，可选值：Bind， UnBind。
resource-id - String - （过滤条件）绑定的实例资源，形如：eni-059qmnif。
tag-key - String -（过滤条件）按照标签键进行过滤。
tag:tag-key - String - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。

 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定ReserveIpIds和Filters。

reserve-ip-id  - String - （过滤条件）内网保留 IP唯一 ID，形如：rsvip-pvqgv9vi。
vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。
subnet-id - String - （过滤条件）所属子网实例ID，形如：subnet-f49l6u0z。
address-ip - String - （过滤条件）内网保留 IP 地址，形如：192.168.0.10。
ip-type - String - （过滤条件）业务类型 ipType，0。
name - String - （过滤条件）名称。
state - String - （过滤条件）状态，可选值：Bind， UnBind。
resource-id - String - （过滤条件）绑定的实例资源，形如：eni-059qmnif。
tag-key - String -（过滤条件）按照标签键进行过滤。
tag:tag-key - String - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。

 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取请求对象个数。
 * @method void setLimit(integer $Limit) 设置请求对象个数。
 */
class DescribeReserveIpAddressesRequest extends AbstractModel
{
    /**
     * @var array 内网保留IP唯一ID 列表
     */
    public $ReserveIpIds;

    /**
     * @var array 过滤条件，参数不支持同时指定ReserveIpIds和Filters。

reserve-ip-id  - String - （过滤条件）内网保留 IP唯一 ID，形如：rsvip-pvqgv9vi。
vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。
subnet-id - String - （过滤条件）所属子网实例ID，形如：subnet-f49l6u0z。
address-ip - String - （过滤条件）内网保留 IP 地址，形如：192.168.0.10。
ip-type - String - （过滤条件）业务类型 ipType，0。
name - String - （过滤条件）名称。
state - String - （过滤条件）状态，可选值：Bind， UnBind。
resource-id - String - （过滤条件）绑定的实例资源，形如：eni-059qmnif。
tag-key - String -（过滤条件）按照标签键进行过滤。
tag:tag-key - String - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。

     */
    public $Filters;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 请求对象个数。
     */
    public $Limit;

    /**
     * @param array $ReserveIpIds 内网保留IP唯一ID 列表
     * @param array $Filters 过滤条件，参数不支持同时指定ReserveIpIds和Filters。

reserve-ip-id  - String - （过滤条件）内网保留 IP唯一 ID，形如：rsvip-pvqgv9vi。
vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。
subnet-id - String - （过滤条件）所属子网实例ID，形如：subnet-f49l6u0z。
address-ip - String - （过滤条件）内网保留 IP 地址，形如：192.168.0.10。
ip-type - String - （过滤条件）业务类型 ipType，0。
name - String - （过滤条件）名称。
state - String - （过滤条件）状态，可选值：Bind， UnBind。
resource-id - String - （过滤条件）绑定的实例资源，形如：eni-059qmnif。
tag-key - String -（过滤条件）按照标签键进行过滤。
tag:tag-key - String - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。

     * @param integer $Offset 偏移量。
     * @param integer $Limit 请求对象个数。
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
        if (array_key_exists("ReserveIpIds",$param) and $param["ReserveIpIds"] !== null) {
            $this->ReserveIpIds = $param["ReserveIpIds"];
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
