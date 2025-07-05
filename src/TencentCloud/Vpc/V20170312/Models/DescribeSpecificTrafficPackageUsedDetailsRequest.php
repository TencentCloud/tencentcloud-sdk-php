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
 * DescribeSpecificTrafficPackageUsedDetails请求参数结构体
 *
 * @method string getTrafficPackageId() 获取共享流量包唯一ID。可以使用[DescribeTrafficPackages](https://cloud.tencent.com/document/product/215/80090?locationSource=from%3Ddoc-search%26scope%3Dcurrent%26keyword%3D%E6%B5%81%E9%87%8F%E5%8C%85)接口获取TrafficPackageId。
 * @method void setTrafficPackageId(string $TrafficPackageId) 设置共享流量包唯一ID。可以使用[DescribeTrafficPackages](https://cloud.tencent.com/document/product/215/80090?locationSource=from%3Ddoc-search%26scope%3Dcurrent%26keyword%3D%E6%B5%81%E9%87%8F%E5%8C%85)接口获取TrafficPackageId。
 * @method array getFilters() 获取每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。详细的过滤条件如下：<ul style="margin:0"><li> resource-type - String - 是否必填：否 - （过滤条件）按照资源类型过滤，资源类型包括 EIP、BWP、LB。 </li>
<li> resource-id - String - 是否必填：否 - （过滤条件）按照抵扣流量资源的唯一 ID 过滤。以下补充资源ID获取方式：<ul><li>EIP：可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取资源ID。</li>
<li>BWP：可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口获取资源ID。</li>
<li>LB：可以使用[DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685)接口获取资源ID。</li></ul></li></ul>
 * @method void setFilters(array $Filters) 设置每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。详细的过滤条件如下：<ul style="margin:0"><li> resource-type - String - 是否必填：否 - （过滤条件）按照资源类型过滤，资源类型包括 EIP、BWP、LB。 </li>
<li> resource-id - String - 是否必填：否 - （过滤条件）按照抵扣流量资源的唯一 ID 过滤。以下补充资源ID获取方式：<ul><li>EIP：可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取资源ID。</li>
<li>BWP：可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口获取资源ID。</li>
<li>LB：可以使用[DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685)接口获取资源ID。</li></ul></li></ul>
 * @method string getOrderField() 获取排序条件。该参数仅支持根据抵扣量排序，传值为 deduction
 * @method void setOrderField(string $OrderField) 设置排序条件。该参数仅支持根据抵扣量排序，传值为 deduction
 * @method integer getOrderType() 获取排序类型，仅支持0和1，0-降序，1-升序。不传默认为0
 * @method void setOrderType(integer $OrderType) 设置排序类型，仅支持0和1，0-降序，1-升序。不传默认为0
 * @method string getStartTime() 获取开始时间。待查询的共享流量包用量开始时间。不传默认为当前时间往前推30天。
时间格式：YYYY-MM-DD hh:mm:ss
 * @method void setStartTime(string $StartTime) 设置开始时间。待查询的共享流量包用量开始时间。不传默认为当前时间往前推30天。
时间格式：YYYY-MM-DD hh:mm:ss
 * @method string getEndTime() 获取结束时间。待查询的共享流量包用量结束时间。不传默认为当前时间。
时间格式：YYYY-MM-DD hh:mm:ss
 * @method void setEndTime(string $EndTime) 设置结束时间。待查询的共享流量包用量结束时间。不传默认为当前时间。
时间格式：YYYY-MM-DD hh:mm:ss
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset的更进一步介绍请参考 API 中的相关小节
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset的更进一步介绍请参考 API 中的相关小节
 * @method integer getLimit() 获取返回数量，默认为20。关于Limit的更进一步介绍请参考 API 中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20。关于Limit的更进一步介绍请参考 API 中的相关小节。
 */
class DescribeSpecificTrafficPackageUsedDetailsRequest extends AbstractModel
{
    /**
     * @var string 共享流量包唯一ID。可以使用[DescribeTrafficPackages](https://cloud.tencent.com/document/product/215/80090?locationSource=from%3Ddoc-search%26scope%3Dcurrent%26keyword%3D%E6%B5%81%E9%87%8F%E5%8C%85)接口获取TrafficPackageId。
     */
    public $TrafficPackageId;

    /**
     * @var array 每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。详细的过滤条件如下：<ul style="margin:0"><li> resource-type - String - 是否必填：否 - （过滤条件）按照资源类型过滤，资源类型包括 EIP、BWP、LB。 </li>
<li> resource-id - String - 是否必填：否 - （过滤条件）按照抵扣流量资源的唯一 ID 过滤。以下补充资源ID获取方式：<ul><li>EIP：可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取资源ID。</li>
<li>BWP：可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口获取资源ID。</li>
<li>LB：可以使用[DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685)接口获取资源ID。</li></ul></li></ul>
     */
    public $Filters;

    /**
     * @var string 排序条件。该参数仅支持根据抵扣量排序，传值为 deduction
     */
    public $OrderField;

    /**
     * @var integer 排序类型，仅支持0和1，0-降序，1-升序。不传默认为0
     */
    public $OrderType;

    /**
     * @var string 开始时间。待查询的共享流量包用量开始时间。不传默认为当前时间往前推30天。
时间格式：YYYY-MM-DD hh:mm:ss
     */
    public $StartTime;

    /**
     * @var string 结束时间。待查询的共享流量包用量结束时间。不传默认为当前时间。
时间格式：YYYY-MM-DD hh:mm:ss
     */
    public $EndTime;

    /**
     * @var integer 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 中的相关小节
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20。关于Limit的更进一步介绍请参考 API 中的相关小节。
     */
    public $Limit;

    /**
     * @param string $TrafficPackageId 共享流量包唯一ID。可以使用[DescribeTrafficPackages](https://cloud.tencent.com/document/product/215/80090?locationSource=from%3Ddoc-search%26scope%3Dcurrent%26keyword%3D%E6%B5%81%E9%87%8F%E5%8C%85)接口获取TrafficPackageId。
     * @param array $Filters 每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。详细的过滤条件如下：<ul style="margin:0"><li> resource-type - String - 是否必填：否 - （过滤条件）按照资源类型过滤，资源类型包括 EIP、BWP、LB。 </li>
<li> resource-id - String - 是否必填：否 - （过滤条件）按照抵扣流量资源的唯一 ID 过滤。以下补充资源ID获取方式：<ul><li>EIP：可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取资源ID。</li>
<li>BWP：可以使用[DescribeBandwidthPackages](https://cloud.tencent.com/document/product/215/19209)接口获取资源ID。</li>
<li>LB：可以使用[DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685)接口获取资源ID。</li></ul></li></ul>
     * @param string $OrderField 排序条件。该参数仅支持根据抵扣量排序，传值为 deduction
     * @param integer $OrderType 排序类型，仅支持0和1，0-降序，1-升序。不传默认为0
     * @param string $StartTime 开始时间。待查询的共享流量包用量开始时间。不传默认为当前时间往前推30天。
时间格式：YYYY-MM-DD hh:mm:ss
     * @param string $EndTime 结束时间。待查询的共享流量包用量结束时间。不传默认为当前时间。
时间格式：YYYY-MM-DD hh:mm:ss
     * @param integer $Offset 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 中的相关小节
     * @param integer $Limit 返回数量，默认为20。关于Limit的更进一步介绍请参考 API 中的相关小节。
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
        if (array_key_exists("TrafficPackageId",$param) and $param["TrafficPackageId"] !== null) {
            $this->TrafficPackageId = $param["TrafficPackageId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
