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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRIUtilizationDetail请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method array getFilters() 获取reserved-instance-id
按照**【预留实例ID**】进行过滤。预留实例ID形如：eksri-xxxxxxxx。
类型：String
必选：否

begin-time
按照**【抵扣开始时间**】进行过滤。形如：2023-06-28 15:27:40。
类型：String
必选：否

end-time
按照**【抵扣结束时间**】进行过滤。形如：2023-06-28 15:27:40。
类型：String
必选：否
 * @method void setFilters(array $Filters) 设置reserved-instance-id
按照**【预留实例ID**】进行过滤。预留实例ID形如：eksri-xxxxxxxx。
类型：String
必选：否

begin-time
按照**【抵扣开始时间**】进行过滤。形如：2023-06-28 15:27:40。
类型：String
必选：否

end-time
按照**【抵扣结束时间**】进行过滤。形如：2023-06-28 15:27:40。
类型：String
必选：否
 */
class DescribeRIUtilizationDetailRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var array reserved-instance-id
按照**【预留实例ID**】进行过滤。预留实例ID形如：eksri-xxxxxxxx。
类型：String
必选：否

begin-time
按照**【抵扣开始时间**】进行过滤。形如：2023-06-28 15:27:40。
类型：String
必选：否

end-time
按照**【抵扣结束时间**】进行过滤。形如：2023-06-28 15:27:40。
类型：String
必选：否
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量，默认0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param array $Filters reserved-instance-id
按照**【预留实例ID**】进行过滤。预留实例ID形如：eksri-xxxxxxxx。
类型：String
必选：否

begin-time
按照**【抵扣开始时间**】进行过滤。形如：2023-06-28 15:27:40。
类型：String
必选：否

end-time
按照**【抵扣结束时间**】进行过滤。形如：2023-06-28 15:27:40。
类型：String
必选：否
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
