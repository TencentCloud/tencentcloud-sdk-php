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
 * @method array getFilters() 获取查询过滤条件，支持以下几个字段
- **LoadBalancerId**: 负载均衡实例 ID
- **LoadBalancerName**: 负载均衡名称
- **LoadBalancerStatus**: 负载均衡状态
- **VpcId**: 私有网络 ID
- **tag:tag-key**：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 `tag:env` 表示按标签键 `env` 筛选。
- **AddressType**: 网络类型
    - **Intranet**: 内网
    - **Internet**: 公网 
- **AddressIpVersion**:
    - **IPv4**: IPv4 地址
    - **IPv6** IPv6 地址
 * @method void setFilters(array $Filters) 设置查询过滤条件，支持以下几个字段
- **LoadBalancerId**: 负载均衡实例 ID
- **LoadBalancerName**: 负载均衡名称
- **LoadBalancerStatus**: 负载均衡状态
- **VpcId**: 私有网络 ID
- **tag:tag-key**：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 `tag:env` 表示按标签键 `env` 筛选。
- **AddressType**: 网络类型
    - **Intranet**: 内网
    - **Internet**: 公网 
- **AddressIpVersion**:
    - **IPv4**: IPv4 地址
    - **IPv6** IPv6 地址
 * @method integer getMaxResults() 获取分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值：**20**。


 * @method void setMaxResults(integer $MaxResults) 设置分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值：**20**。


 * @method string getNextToken() 获取是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。
 * @method void setNextToken(string $NextToken) 设置是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。
 */
class DescribeLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array 查询过滤条件，支持以下几个字段
- **LoadBalancerId**: 负载均衡实例 ID
- **LoadBalancerName**: 负载均衡名称
- **LoadBalancerStatus**: 负载均衡状态
- **VpcId**: 私有网络 ID
- **tag:tag-key**：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 `tag:env` 表示按标签键 `env` 筛选。
- **AddressType**: 网络类型
    - **Intranet**: 内网
    - **Internet**: 公网 
- **AddressIpVersion**:
    - **IPv4**: IPv4 地址
    - **IPv6** IPv6 地址
     */
    public $Filters;

    /**
     * @var integer 分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值：**20**。


     */
    public $MaxResults;

    /**
     * @var string 是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。
     */
    public $NextToken;

    /**
     * @param array $Filters 查询过滤条件，支持以下几个字段
- **LoadBalancerId**: 负载均衡实例 ID
- **LoadBalancerName**: 负载均衡名称
- **LoadBalancerStatus**: 负载均衡状态
- **VpcId**: 私有网络 ID
- **tag:tag-key**：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 `tag:env` 表示按标签键 `env` 筛选。
- **AddressType**: 网络类型
    - **Intranet**: 内网
    - **Internet**: 公网 
- **AddressIpVersion**:
    - **IPv4**: IPv4 地址
    - **IPv6** IPv6 地址
     * @param integer $MaxResults 分批次查询时每次显示的条目数。取值范围：**1**~**100**，默认值：**20**。


     * @param string $NextToken 是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。
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
