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
 * DescribeSpecificTrafficPackageUsedDetails请求参数结构体
 *
 * @method string getTrafficPackageId() 获取共享流量包唯一ID
 * @method void setTrafficPackageId(string $TrafficPackageId) 设置共享流量包唯一ID
 * @method array getFilters() 获取每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。详细的过滤条件如下：<li> resource-id - String - 是否必填：否 - （过滤条件）按照抵扣流量资源的唯一 ID 过滤。</li><li> resource-type - String - 是否必填：否 - （过滤条件）按照资源类型过滤，资源类型包括 CVM 和 EIP </li>
 * @method void setFilters(array $Filters) 设置每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。详细的过滤条件如下：<li> resource-id - String - 是否必填：否 - （过滤条件）按照抵扣流量资源的唯一 ID 过滤。</li><li> resource-type - String - 是否必填：否 - （过滤条件）按照资源类型过滤，资源类型包括 CVM 和 EIP </li>
 * @method string getOrderField() 获取排序条件。该参数仅支持根据抵扣量排序，传值为 deduction
 * @method void setOrderField(string $OrderField) 设置排序条件。该参数仅支持根据抵扣量排序，传值为 deduction
 * @method integer getOrderType() 获取排序类型，仅支持0和1，0-降序，1-升序。不传默认为0
 * @method void setOrderType(integer $OrderType) 设置排序类型，仅支持0和1，0-降序，1-升序。不传默认为0
 * @method string getStartTime() 获取开始时间。不传默认为当前时间往前推30天
 * @method void setStartTime(string $StartTime) 设置开始时间。不传默认为当前时间往前推30天
 * @method string getEndTime() 获取结束时间。不传默认为当前时间
 * @method void setEndTime(string $EndTime) 设置结束时间。不传默认为当前时间
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 * @method integer getLimit() 获取分页参数
 * @method void setLimit(integer $Limit) 设置分页参数
 */
class DescribeSpecificTrafficPackageUsedDetailsRequest extends AbstractModel
{
    /**
     * @var string 共享流量包唯一ID
     */
    public $TrafficPackageId;

    /**
     * @var array 每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。详细的过滤条件如下：<li> resource-id - String - 是否必填：否 - （过滤条件）按照抵扣流量资源的唯一 ID 过滤。</li><li> resource-type - String - 是否必填：否 - （过滤条件）按照资源类型过滤，资源类型包括 CVM 和 EIP </li>
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
     * @var string 开始时间。不传默认为当前时间往前推30天
     */
    public $StartTime;

    /**
     * @var string 结束时间。不传默认为当前时间
     */
    public $EndTime;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @var integer 分页参数
     */
    public $Limit;

    /**
     * @param string $TrafficPackageId 共享流量包唯一ID
     * @param array $Filters 每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。详细的过滤条件如下：<li> resource-id - String - 是否必填：否 - （过滤条件）按照抵扣流量资源的唯一 ID 过滤。</li><li> resource-type - String - 是否必填：否 - （过滤条件）按照资源类型过滤，资源类型包括 CVM 和 EIP </li>
     * @param string $OrderField 排序条件。该参数仅支持根据抵扣量排序，传值为 deduction
     * @param integer $OrderType 排序类型，仅支持0和1，0-降序，1-升序。不传默认为0
     * @param string $StartTime 开始时间。不传默认为当前时间往前推30天
     * @param string $EndTime 结束时间。不传默认为当前时间
     * @param integer $Offset 分页参数
     * @param integer $Limit 分页参数
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
