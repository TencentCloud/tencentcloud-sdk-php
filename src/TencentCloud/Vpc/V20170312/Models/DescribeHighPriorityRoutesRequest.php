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
 * DescribeHighPriorityRoutes请求参数结构体
 *
 * @method string getHighPriorityRouteTableId() 获取高优路由表唯一 ID。
 * @method void setHighPriorityRouteTableId(string $HighPriorityRouteTableId) 设置高优路由表唯一 ID。
 * @method array getFilters() 获取<li>gateway-id - String - （过滤条件）网关ID。</li>
<li>description - String - （过滤条件）路由描述。</li>
<li>dest-cidr - String - （过滤条件）目的端地址，支持模糊左匹配。</li>
<li>subnet-route-algorithm - String - （过滤条件）现在支持的算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。</li>
<li>is-cdc - String - （过滤条件）CDC属性高优路由表。</li>
<li>cdc-id - String - （过滤条件）CDC 集群唯一 ID 。</li>

 * @method void setFilters(array $Filters) 设置<li>gateway-id - String - （过滤条件）网关ID。</li>
<li>description - String - （过滤条件）路由描述。</li>
<li>dest-cidr - String - （过滤条件）目的端地址，支持模糊左匹配。</li>
<li>subnet-route-algorithm - String - （过滤条件）现在支持的算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。</li>
<li>is-cdc - String - （过滤条件）CDC属性高优路由表。</li>
<li>cdc-id - String - （过滤条件）CDC 集群唯一 ID 。</li>

 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取请求对象个数。
 * @method void setLimit(integer $Limit) 设置请求对象个数。
 */
class DescribeHighPriorityRoutesRequest extends AbstractModel
{
    /**
     * @var string 高优路由表唯一 ID。
     */
    public $HighPriorityRouteTableId;

    /**
     * @var array <li>gateway-id - String - （过滤条件）网关ID。</li>
<li>description - String - （过滤条件）路由描述。</li>
<li>dest-cidr - String - （过滤条件）目的端地址，支持模糊左匹配。</li>
<li>subnet-route-algorithm - String - （过滤条件）现在支持的算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。</li>
<li>is-cdc - String - （过滤条件）CDC属性高优路由表。</li>
<li>cdc-id - String - （过滤条件）CDC 集群唯一 ID 。</li>

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
     * @param string $HighPriorityRouteTableId 高优路由表唯一 ID。
     * @param array $Filters <li>gateway-id - String - （过滤条件）网关ID。</li>
<li>description - String - （过滤条件）路由描述。</li>
<li>dest-cidr - String - （过滤条件）目的端地址，支持模糊左匹配。</li>
<li>subnet-route-algorithm - String - （过滤条件）现在支持的算法有：ECMP_QUINTUPLE_HASH：五元组hash，ECMP_SOURCE_DESTINATION_IP_HASH：源和目的IP hash，ECMP_DESTINATION_IP_HASH：目的IP hash，ECMP_SOURCE_IP_HASH：源IP hash。</li>
<li>is-cdc - String - （过滤条件）CDC属性高优路由表。</li>
<li>cdc-id - String - （过滤条件）CDC 集群唯一 ID 。</li>

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
        if (array_key_exists("HighPriorityRouteTableId",$param) and $param["HighPriorityRouteTableId"] !== null) {
            $this->HighPriorityRouteTableId = $param["HighPriorityRouteTableId"];
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
