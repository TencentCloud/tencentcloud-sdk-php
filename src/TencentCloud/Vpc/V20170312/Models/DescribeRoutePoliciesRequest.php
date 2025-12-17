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
 * DescribeRoutePolicies请求参数结构体
 *
 * @method array getRoutePolicyIds() 获取路由策略实例唯一ID。形如：rrp-q7ywkx31。每次请求的实例的上限为100。参数不支持同时指定RoutePolicyIds和Filters。
 * @method void setRoutePolicyIds(array $RoutePolicyIds) 设置路由策略实例唯一ID。形如：rrp-q7ywkx31。每次请求的实例的上限为100。参数不支持同时指定RoutePolicyIds和Filters。
 * @method array getFilters() 获取过滤条件，不支持同时指定RoutePolicyIds和Filters参数。
支持的过滤条件如下：
<li>route-policy-name：路由策略实例名称，支持模糊查询。</li>
<li>route-policy-description：路由策略实例描述，支持模糊查询。</li>
<li>route-policy-id ：路由策略实例ID，例如：rrp-q7ywkx3w。</li>

  **说明：**若同一个过滤条件（Filter）存在多个Values，则同一Filter下Values间的关系为逻辑或（OR）关系；若存在多个过滤条件（Filter），Filter之间的关系为逻辑与（AND）关系。
 * @method void setFilters(array $Filters) 设置过滤条件，不支持同时指定RoutePolicyIds和Filters参数。
支持的过滤条件如下：
<li>route-policy-name：路由策略实例名称，支持模糊查询。</li>
<li>route-policy-description：路由策略实例描述，支持模糊查询。</li>
<li>route-policy-id ：路由策略实例ID，例如：rrp-q7ywkx3w。</li>

  **说明：**若同一个过滤条件（Filter）存在多个Values，则同一Filter下Values间的关系为逻辑或（OR）关系；若存在多个过滤条件（Filter），Filter之间的关系为逻辑与（AND）关系。
 * @method string getOffset() 获取偏移量，默认为0。
 * @method void setOffset(string $Offset) 设置偏移量，默认为0。
 * @method string getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(string $Limit) 设置返回数量，默认为20，最大值为100。
 * @method boolean getNeedRoutePolicyEntry() 获取是否返回路由策略条目。默认为False。当该参数为False时，仍然会返回空的返回空的RoutePolicyEntrySet。
 * @method void setNeedRoutePolicyEntry(boolean $NeedRoutePolicyEntry) 设置是否返回路由策略条目。默认为False。当该参数为False时，仍然会返回空的返回空的RoutePolicyEntrySet。
 */
class DescribeRoutePoliciesRequest extends AbstractModel
{
    /**
     * @var array 路由策略实例唯一ID。形如：rrp-q7ywkx31。每次请求的实例的上限为100。参数不支持同时指定RoutePolicyIds和Filters。
     */
    public $RoutePolicyIds;

    /**
     * @var array 过滤条件，不支持同时指定RoutePolicyIds和Filters参数。
支持的过滤条件如下：
<li>route-policy-name：路由策略实例名称，支持模糊查询。</li>
<li>route-policy-description：路由策略实例描述，支持模糊查询。</li>
<li>route-policy-id ：路由策略实例ID，例如：rrp-q7ywkx3w。</li>

  **说明：**若同一个过滤条件（Filter）存在多个Values，则同一Filter下Values间的关系为逻辑或（OR）关系；若存在多个过滤条件（Filter），Filter之间的关系为逻辑与（AND）关系。
     */
    public $Filters;

    /**
     * @var string 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var boolean 是否返回路由策略条目。默认为False。当该参数为False时，仍然会返回空的返回空的RoutePolicyEntrySet。
     */
    public $NeedRoutePolicyEntry;

    /**
     * @param array $RoutePolicyIds 路由策略实例唯一ID。形如：rrp-q7ywkx31。每次请求的实例的上限为100。参数不支持同时指定RoutePolicyIds和Filters。
     * @param array $Filters 过滤条件，不支持同时指定RoutePolicyIds和Filters参数。
支持的过滤条件如下：
<li>route-policy-name：路由策略实例名称，支持模糊查询。</li>
<li>route-policy-description：路由策略实例描述，支持模糊查询。</li>
<li>route-policy-id ：路由策略实例ID，例如：rrp-q7ywkx3w。</li>

  **说明：**若同一个过滤条件（Filter）存在多个Values，则同一Filter下Values间的关系为逻辑或（OR）关系；若存在多个过滤条件（Filter），Filter之间的关系为逻辑与（AND）关系。
     * @param string $Offset 偏移量，默认为0。
     * @param string $Limit 返回数量，默认为20，最大值为100。
     * @param boolean $NeedRoutePolicyEntry 是否返回路由策略条目。默认为False。当该参数为False时，仍然会返回空的返回空的RoutePolicyEntrySet。
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
        if (array_key_exists("RoutePolicyIds",$param) and $param["RoutePolicyIds"] !== null) {
            $this->RoutePolicyIds = $param["RoutePolicyIds"];
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

        if (array_key_exists("NeedRoutePolicyEntry",$param) and $param["NeedRoutePolicyEntry"] !== null) {
            $this->NeedRoutePolicyEntry = $param["NeedRoutePolicyEntry"];
        }
    }
}
