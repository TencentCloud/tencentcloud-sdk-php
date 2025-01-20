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
 * DescribeRouteTableAssociatedInstances请求参数结构体
 *
 * @method array getFilters() 获取过滤条件：
<li>ccn-id - String -（过滤条件）CCN实例ID。</li>
<li>ccn-route-table-id - String -（过滤条件）路由表ID。</li>
<li>instance-type - String -（过滤条件）实例类型：
私有网络: `VPC`
专线网关: `DIRECTCONNECT`
黑石私有网络: `BMVPC`
EDGE设备: `EDGE`
EDGE隧道: `EDGE_TUNNEL`
EDGE网关: `EDGE_VPNGW`
VPN网关：`VPNGW`</li>
<li>instance-id- String -（过滤条件）实例ID。</li>
 * @method void setFilters(array $Filters) 设置过滤条件：
<li>ccn-id - String -（过滤条件）CCN实例ID。</li>
<li>ccn-route-table-id - String -（过滤条件）路由表ID。</li>
<li>instance-type - String -（过滤条件）实例类型：
私有网络: `VPC`
专线网关: `DIRECTCONNECT`
黑石私有网络: `BMVPC`
EDGE设备: `EDGE`
EDGE隧道: `EDGE_TUNNEL`
EDGE网关: `EDGE_VPNGW`
VPN网关：`VPNGW`</li>
<li>instance-id- String -（过滤条件）实例ID。</li>
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取一次查询最大返回的数量。
 * @method void setLimit(integer $Limit) 设置一次查询最大返回的数量。
 */
class DescribeRouteTableAssociatedInstancesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件：
<li>ccn-id - String -（过滤条件）CCN实例ID。</li>
<li>ccn-route-table-id - String -（过滤条件）路由表ID。</li>
<li>instance-type - String -（过滤条件）实例类型：
私有网络: `VPC`
专线网关: `DIRECTCONNECT`
黑石私有网络: `BMVPC`
EDGE设备: `EDGE`
EDGE隧道: `EDGE_TUNNEL`
EDGE网关: `EDGE_VPNGW`
VPN网关：`VPNGW`</li>
<li>instance-id- String -（过滤条件）实例ID。</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 一次查询最大返回的数量。
     */
    public $Limit;

    /**
     * @param array $Filters 过滤条件：
<li>ccn-id - String -（过滤条件）CCN实例ID。</li>
<li>ccn-route-table-id - String -（过滤条件）路由表ID。</li>
<li>instance-type - String -（过滤条件）实例类型：
私有网络: `VPC`
专线网关: `DIRECTCONNECT`
黑石私有网络: `BMVPC`
EDGE设备: `EDGE`
EDGE隧道: `EDGE_TUNNEL`
EDGE网关: `EDGE_VPNGW`
VPN网关：`VPNGW`</li>
<li>instance-id- String -（过滤条件）实例ID。</li>
     * @param integer $Offset 偏移量。
     * @param integer $Limit 一次查询最大返回的数量。
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
