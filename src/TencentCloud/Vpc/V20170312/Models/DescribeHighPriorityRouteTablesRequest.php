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
 * DescribeHighPriorityRouteTables请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，参数不支持同时指定HighPriorityRouteTableIds和Filters。
<li>high-priority-route-table-id - String - （过滤条件）高优路由表实例ID。</li>
<li>name - String - （过滤条件）高优路由表名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>tag-key - String -是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li>next-hop-type - String - 是否必填：否 - （过滤条件）按下一跳类型进行过滤。使用next-hop-type进行过滤时，必须同时携带route-table-id与vpc-id。
目前我们支持的类型有：
HAVIP：高可用虚拟IP；
NORMAL_CVM：普通云服务器；
</li>
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定HighPriorityRouteTableIds和Filters。
<li>high-priority-route-table-id - String - （过滤条件）高优路由表实例ID。</li>
<li>name - String - （过滤条件）高优路由表名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>tag-key - String -是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li>next-hop-type - String - 是否必填：否 - （过滤条件）按下一跳类型进行过滤。使用next-hop-type进行过滤时，必须同时携带route-table-id与vpc-id。
目前我们支持的类型有：
HAVIP：高可用虚拟IP；
NORMAL_CVM：普通云服务器；
</li>
 * @method array getHighPriorityRouteTableIds() 获取高优路由表实例ID，例如：hprtb-18mot1fm。
 * @method void setHighPriorityRouteTableIds(array $HighPriorityRouteTableIds) 设置高优路由表实例ID，例如：hprtb-18mot1fm。
 * @method string getOffset() 获取偏移量。
 * @method void setOffset(string $Offset) 设置偏移量。
 * @method string getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(string $Limit) 设置返回数量，默认为20，最大值为100。
 * @method boolean getNeedRouterInfo() 获取是否需要获取路由策略信息，默认获取，当控制台不需要拉取路由策略信息时，改为False。
 * @method void setNeedRouterInfo(boolean $NeedRouterInfo) 设置是否需要获取路由策略信息，默认获取，当控制台不需要拉取路由策略信息时，改为False。
 */
class DescribeHighPriorityRouteTablesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，参数不支持同时指定HighPriorityRouteTableIds和Filters。
<li>high-priority-route-table-id - String - （过滤条件）高优路由表实例ID。</li>
<li>name - String - （过滤条件）高优路由表名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>tag-key - String -是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li>next-hop-type - String - 是否必填：否 - （过滤条件）按下一跳类型进行过滤。使用next-hop-type进行过滤时，必须同时携带route-table-id与vpc-id。
目前我们支持的类型有：
HAVIP：高可用虚拟IP；
NORMAL_CVM：普通云服务器；
</li>
     */
    public $Filters;

    /**
     * @var array 高优路由表实例ID，例如：hprtb-18mot1fm。
     */
    public $HighPriorityRouteTableIds;

    /**
     * @var string 偏移量。
     */
    public $Offset;

    /**
     * @var string 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var boolean 是否需要获取路由策略信息，默认获取，当控制台不需要拉取路由策略信息时，改为False。
     */
    public $NeedRouterInfo;

    /**
     * @param array $Filters 过滤条件，参数不支持同时指定HighPriorityRouteTableIds和Filters。
<li>high-priority-route-table-id - String - （过滤条件）高优路由表实例ID。</li>
<li>name - String - （过滤条件）高优路由表名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>tag-key - String -是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li>next-hop-type - String - 是否必填：否 - （过滤条件）按下一跳类型进行过滤。使用next-hop-type进行过滤时，必须同时携带route-table-id与vpc-id。
目前我们支持的类型有：
HAVIP：高可用虚拟IP；
NORMAL_CVM：普通云服务器；
</li>
     * @param array $HighPriorityRouteTableIds 高优路由表实例ID，例如：hprtb-18mot1fm。
     * @param string $Offset 偏移量。
     * @param string $Limit 返回数量，默认为20，最大值为100。
     * @param boolean $NeedRouterInfo 是否需要获取路由策略信息，默认获取，当控制台不需要拉取路由策略信息时，改为False。
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

        if (array_key_exists("HighPriorityRouteTableIds",$param) and $param["HighPriorityRouteTableIds"] !== null) {
            $this->HighPriorityRouteTableIds = $param["HighPriorityRouteTableIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NeedRouterInfo",$param) and $param["NeedRouterInfo"] !== null) {
            $this->NeedRouterInfo = $param["NeedRouterInfo"];
        }
    }
}
