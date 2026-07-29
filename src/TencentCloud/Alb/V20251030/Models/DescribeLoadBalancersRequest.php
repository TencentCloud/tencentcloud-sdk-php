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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoadBalancers请求参数结构体
 *
 * @method array getFilters() 获取<p>查询过滤条件，支持以下几个字段</p><ul><li><strong>LoadBalancerId</strong>: 负载均衡实例 ID</li><li><strong>LoadBalancerName</strong>: 负载均衡名称</li><li><strong>LoadBalancerStatus</strong>: 负载均衡状态</li><li><strong>VpcId</strong>: 私有网络 ID</li><li><strong>tag:tag-key</strong>：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 <code>tag:env</code> 表示按标签键 <code>env</code> 筛选。</li><li><strong>AddressType</strong>: 网络类型<ul><li><strong>Intranet</strong>: 内网</li><li><strong>Internet</strong>: 公网 </li></ul></li><li><strong>AddressIpVersion</strong>:<ul><li><strong>IPv4</strong>: IPv4 地址</li><li><strong>IPv6</strong> IPv6 地址</li></ul></li><li><strong>SecurityGroupId</strong>: 安全组ID</li></ul>
 * @method void setFilters(array $Filters) 设置<p>查询过滤条件，支持以下几个字段</p><ul><li><strong>LoadBalancerId</strong>: 负载均衡实例 ID</li><li><strong>LoadBalancerName</strong>: 负载均衡名称</li><li><strong>LoadBalancerStatus</strong>: 负载均衡状态</li><li><strong>VpcId</strong>: 私有网络 ID</li><li><strong>tag:tag-key</strong>：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 <code>tag:env</code> 表示按标签键 <code>env</code> 筛选。</li><li><strong>AddressType</strong>: 网络类型<ul><li><strong>Intranet</strong>: 内网</li><li><strong>Internet</strong>: 公网 </li></ul></li><li><strong>AddressIpVersion</strong>:<ul><li><strong>IPv4</strong>: IPv4 地址</li><li><strong>IPv6</strong> IPv6 地址</li></ul></li><li><strong>SecurityGroupId</strong>: 安全组ID</li></ul>
 * @method integer getMaxResults() 获取<p>分批次查询时每次显示的条目数。取值范围：<strong>1</strong>~<strong>100</strong>，默认值：<strong>20</strong>。</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>分批次查询时每次显示的条目数。取值范围：<strong>1</strong>~<strong>100</strong>，默认值：<strong>20</strong>。</p>
 * @method string getNextToken() 获取<p>是否拥有下一次查询的令牌（Token）。取值：</p><ul><li>第一次查询和没有下一次查询时，均无需填写。</li><li>如果有下一次查询，取值为上一次API调用返回的<strong>NextToken</strong>值。</li></ul>
 * @method void setNextToken(string $NextToken) 设置<p>是否拥有下一次查询的令牌（Token）。取值：</p><ul><li>第一次查询和没有下一次查询时，均无需填写。</li><li>如果有下一次查询，取值为上一次API调用返回的<strong>NextToken</strong>值。</li></ul>
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array <p>查询过滤条件，支持以下几个字段</p><ul><li><strong>LoadBalancerId</strong>: 负载均衡实例 ID</li><li><strong>LoadBalancerName</strong>: 负载均衡名称</li><li><strong>LoadBalancerStatus</strong>: 负载均衡状态</li><li><strong>VpcId</strong>: 私有网络 ID</li><li><strong>tag:tag-key</strong>：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 <code>tag:env</code> 表示按标签键 <code>env</code> 筛选。</li><li><strong>AddressType</strong>: 网络类型<ul><li><strong>Intranet</strong>: 内网</li><li><strong>Internet</strong>: 公网 </li></ul></li><li><strong>AddressIpVersion</strong>:<ul><li><strong>IPv4</strong>: IPv4 地址</li><li><strong>IPv6</strong> IPv6 地址</li></ul></li><li><strong>SecurityGroupId</strong>: 安全组ID</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>分批次查询时每次显示的条目数。取值范围：<strong>1</strong>~<strong>100</strong>，默认值：<strong>20</strong>。</p>
     */
    public $MaxResults;

    /**
     * @var string <p>是否拥有下一次查询的令牌（Token）。取值：</p><ul><li>第一次查询和没有下一次查询时，均无需填写。</li><li>如果有下一次查询，取值为上一次API调用返回的<strong>NextToken</strong>值。</li></ul>
     */
    public $NextToken;

    /**
     * @param array $Filters <p>查询过滤条件，支持以下几个字段</p><ul><li><strong>LoadBalancerId</strong>: 负载均衡实例 ID</li><li><strong>LoadBalancerName</strong>: 负载均衡名称</li><li><strong>LoadBalancerStatus</strong>: 负载均衡状态</li><li><strong>VpcId</strong>: 私有网络 ID</li><li><strong>tag:tag-key</strong>：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 <code>tag:env</code> 表示按标签键 <code>env</code> 筛选。</li><li><strong>AddressType</strong>: 网络类型<ul><li><strong>Intranet</strong>: 内网</li><li><strong>Internet</strong>: 公网 </li></ul></li><li><strong>AddressIpVersion</strong>:<ul><li><strong>IPv4</strong>: IPv4 地址</li><li><strong>IPv6</strong> IPv6 地址</li></ul></li><li><strong>SecurityGroupId</strong>: 安全组ID</li></ul>
     * @param integer $MaxResults <p>分批次查询时每次显示的条目数。取值范围：<strong>1</strong>~<strong>100</strong>，默认值：<strong>20</strong>。</p>
     * @param string $NextToken <p>是否拥有下一次查询的令牌（Token）。取值：</p><ul><li>第一次查询和没有下一次查询时，均无需填写。</li><li>如果有下一次查询，取值为上一次API调用返回的<strong>NextToken</strong>值。</li></ul>
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

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
