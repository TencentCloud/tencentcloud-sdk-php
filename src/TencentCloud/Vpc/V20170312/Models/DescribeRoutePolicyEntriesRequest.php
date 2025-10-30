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
 * DescribeRoutePolicyEntries请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，参数不支持同时指定RoutePolicyEntryIds和Filters。
<li>route-policy-id - String - （过滤条件）路由接收策略实例ID，形如：rrp-f49l6u0z。</li>
<li>cidr-block - String - （过滤条件）CIDR(只取掩码前的子网部分)，形如：10.0.0.0/8。</li>
<li>priority - Integer - （过滤条件）优先级，形如：20。</li>
<li>gateway-type - String - （过滤条件）下一跳类型，形如：CVM。</li>
<li>gateway-id - String - （过滤条件）下一跳实例唯一ID，形如：ccn-f49l6u0z。</li>
<li>route-type - String - （过滤条件）路由类型，取值：USER（用户路由），NETD（网络探测下发的路由），CCN（云联网路由）。</li>
<li>action - String - （过滤条件）动作，取值：DROP（丢弃），DISABLE（接收且禁用），ACCEPT（接收且启用）。</li>
<li>description - String - （过滤条件）描述，形如：TEST。</li>
<li>route-policy-item-id - String - （过滤条件）路由接收策略条目唯一ID，形如：rrpi-dq782kw7。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定RoutePolicyEntryIds和Filters。
<li>route-policy-id - String - （过滤条件）路由接收策略实例ID，形如：rrp-f49l6u0z。</li>
<li>cidr-block - String - （过滤条件）CIDR(只取掩码前的子网部分)，形如：10.0.0.0/8。</li>
<li>priority - Integer - （过滤条件）优先级，形如：20。</li>
<li>gateway-type - String - （过滤条件）下一跳类型，形如：CVM。</li>
<li>gateway-id - String - （过滤条件）下一跳实例唯一ID，形如：ccn-f49l6u0z。</li>
<li>route-type - String - （过滤条件）路由类型，取值：USER（用户路由），NETD（网络探测下发的路由），CCN（云联网路由）。</li>
<li>action - String - （过滤条件）动作，取值：DROP（丢弃），DISABLE（接收且禁用），ACCEPT（接收且启用）。</li>
<li>description - String - （过滤条件）描述，形如：TEST。</li>
<li>route-policy-item-id - String - （过滤条件）路由接收策略条目唯一ID，形如：rrpi-dq782kw7。</li>
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取请求对象个数。
 * @method void setLimit(integer $Limit) 设置请求对象个数。
 * @method string getOrderField() 获取排序字段。当前只支持优先级Prioriry字段。
 * @method void setOrderField(string $OrderField) 设置排序字段。当前只支持优先级Prioriry字段。
 * @method string getOrderDirection() 获取排序方向。
ASC：升序。
DESC：降序。
 * @method void setOrderDirection(string $OrderDirection) 设置排序方向。
ASC：升序。
DESC：降序。
 * @method array getRoutePolicyEntryIds() 获取路由策略条目ID。
 * @method void setRoutePolicyEntryIds(array $RoutePolicyEntryIds) 设置路由策略条目ID。
 */
class DescribeRoutePolicyEntriesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，参数不支持同时指定RoutePolicyEntryIds和Filters。
<li>route-policy-id - String - （过滤条件）路由接收策略实例ID，形如：rrp-f49l6u0z。</li>
<li>cidr-block - String - （过滤条件）CIDR(只取掩码前的子网部分)，形如：10.0.0.0/8。</li>
<li>priority - Integer - （过滤条件）优先级，形如：20。</li>
<li>gateway-type - String - （过滤条件）下一跳类型，形如：CVM。</li>
<li>gateway-id - String - （过滤条件）下一跳实例唯一ID，形如：ccn-f49l6u0z。</li>
<li>route-type - String - （过滤条件）路由类型，取值：USER（用户路由），NETD（网络探测下发的路由），CCN（云联网路由）。</li>
<li>action - String - （过滤条件）动作，取值：DROP（丢弃），DISABLE（接收且禁用），ACCEPT（接收且启用）。</li>
<li>description - String - （过滤条件）描述，形如：TEST。</li>
<li>route-policy-item-id - String - （过滤条件）路由接收策略条目唯一ID，形如：rrpi-dq782kw7。</li>
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
     * @var string 排序字段。当前只支持优先级Prioriry字段。
     */
    public $OrderField;

    /**
     * @var string 排序方向。
ASC：升序。
DESC：降序。
     */
    public $OrderDirection;

    /**
     * @var array 路由策略条目ID。
     */
    public $RoutePolicyEntryIds;

    /**
     * @param array $Filters 过滤条件，参数不支持同时指定RoutePolicyEntryIds和Filters。
<li>route-policy-id - String - （过滤条件）路由接收策略实例ID，形如：rrp-f49l6u0z。</li>
<li>cidr-block - String - （过滤条件）CIDR(只取掩码前的子网部分)，形如：10.0.0.0/8。</li>
<li>priority - Integer - （过滤条件）优先级，形如：20。</li>
<li>gateway-type - String - （过滤条件）下一跳类型，形如：CVM。</li>
<li>gateway-id - String - （过滤条件）下一跳实例唯一ID，形如：ccn-f49l6u0z。</li>
<li>route-type - String - （过滤条件）路由类型，取值：USER（用户路由），NETD（网络探测下发的路由），CCN（云联网路由）。</li>
<li>action - String - （过滤条件）动作，取值：DROP（丢弃），DISABLE（接收且禁用），ACCEPT（接收且启用）。</li>
<li>description - String - （过滤条件）描述，形如：TEST。</li>
<li>route-policy-item-id - String - （过滤条件）路由接收策略条目唯一ID，形如：rrpi-dq782kw7。</li>
     * @param integer $Offset 偏移量。
     * @param integer $Limit 请求对象个数。
     * @param string $OrderField 排序字段。当前只支持优先级Prioriry字段。
     * @param string $OrderDirection 排序方向。
ASC：升序。
DESC：降序。
     * @param array $RoutePolicyEntryIds 路由策略条目ID。
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("RoutePolicyEntryIds",$param) and $param["RoutePolicyEntryIds"] !== null) {
            $this->RoutePolicyEntryIds = $param["RoutePolicyEntryIds"];
        }
    }
}
