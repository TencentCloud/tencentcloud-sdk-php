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
 * @method array getReserveIpIds() 获取<p>内网保留IP唯一ID 列表</p>
 * @method void setReserveIpIds(array $ReserveIpIds) 设置<p>内网保留IP唯一ID 列表</p>
 * @method array getFilters() 获取<p>过滤条件，参数不支持同时指定ReserveIpIds和Filters。</p><p>reserve-ip-id  - String - （过滤条件）内网保留 IP唯一 ID，形如：rsvip-pvqgv9vi。<br>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。<br>subnet-id - String - （过滤条件）所属子网实例ID，形如：subnet-f49l6u0z。<br>reserve-address-ip - String - （过滤条件）内网保留 IP 地址，形如：192.168.0.10。<br>ip-type - String - （过滤条件）业务类型 ipType，0。<br>name - String - （过滤条件）名称。<br>state - String - （过滤条件）状态，可选值：Bind， UnBind。<br>resource-id - String - （过滤条件）绑定的实例资源，形如：eni-059qmnif。<br>tag-key - String -（过滤条件）按照标签键进行过滤。<br>tag:tag-key - String - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，参数不支持同时指定ReserveIpIds和Filters。</p><p>reserve-ip-id  - String - （过滤条件）内网保留 IP唯一 ID，形如：rsvip-pvqgv9vi。<br>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。<br>subnet-id - String - （过滤条件）所属子网实例ID，形如：subnet-f49l6u0z。<br>reserve-address-ip - String - （过滤条件）内网保留 IP 地址，形如：192.168.0.10。<br>ip-type - String - （过滤条件）业务类型 ipType，0。<br>name - String - （过滤条件）名称。<br>state - String - （过滤条件）状态，可选值：Bind， UnBind。<br>resource-id - String - （过滤条件）绑定的实例资源，形如：eni-059qmnif。<br>tag-key - String -（过滤条件）按照标签键进行过滤。<br>tag:tag-key - String - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</p>
 * @method integer getOffset() 获取<p>偏移量。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量。</p>
 * @method integer getLimit() 获取<p>请求对象个数。</p>
 * @method void setLimit(integer $Limit) 设置<p>请求对象个数。</p>
 */
class DescribeReserveIpAddressesRequest extends AbstractModel
{
    /**
     * @var array <p>内网保留IP唯一ID 列表</p>
     */
    public $ReserveIpIds;

    /**
     * @var array <p>过滤条件，参数不支持同时指定ReserveIpIds和Filters。</p><p>reserve-ip-id  - String - （过滤条件）内网保留 IP唯一 ID，形如：rsvip-pvqgv9vi。<br>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。<br>subnet-id - String - （过滤条件）所属子网实例ID，形如：subnet-f49l6u0z。<br>reserve-address-ip - String - （过滤条件）内网保留 IP 地址，形如：192.168.0.10。<br>ip-type - String - （过滤条件）业务类型 ipType，0。<br>name - String - （过滤条件）名称。<br>state - String - （过滤条件）状态，可选值：Bind， UnBind。<br>resource-id - String - （过滤条件）绑定的实例资源，形如：eni-059qmnif。<br>tag-key - String -（过滤条件）按照标签键进行过滤。<br>tag:tag-key - String - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量。</p>
     */
    public $Offset;

    /**
     * @var integer <p>请求对象个数。</p>
     */
    public $Limit;

    /**
     * @param array $ReserveIpIds <p>内网保留IP唯一ID 列表</p>
     * @param array $Filters <p>过滤条件，参数不支持同时指定ReserveIpIds和Filters。</p><p>reserve-ip-id  - String - （过滤条件）内网保留 IP唯一 ID，形如：rsvip-pvqgv9vi。<br>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。<br>subnet-id - String - （过滤条件）所属子网实例ID，形如：subnet-f49l6u0z。<br>reserve-address-ip - String - （过滤条件）内网保留 IP 地址，形如：192.168.0.10。<br>ip-type - String - （过滤条件）业务类型 ipType，0。<br>name - String - （过滤条件）名称。<br>state - String - （过滤条件）状态，可选值：Bind， UnBind。<br>resource-id - String - （过滤条件）绑定的实例资源，形如：eni-059qmnif。<br>tag-key - String -（过滤条件）按照标签键进行过滤。<br>tag:tag-key - String - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。</p>
     * @param integer $Offset <p>偏移量。</p>
     * @param integer $Limit <p>请求对象个数。</p>
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
