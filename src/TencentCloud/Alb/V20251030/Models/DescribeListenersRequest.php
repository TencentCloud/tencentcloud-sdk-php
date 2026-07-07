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
 * DescribeListeners请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method array getFilters() 获取过滤条件列表，最大支持20个。支持以下几个字段
- **Protocol**: 协议类型
- **Tags**: 标签
 * @method void setFilters(array $Filters) 设置过滤条件列表，最大支持20个。支持以下几个字段
- **Protocol**: 协议类型
- **Tags**: 标签
 * @method array getListenerIds() 获取监听器 ID 列表，ID 格式为 lst- 后接 8 位字母数字。
 * @method void setListenerIds(array $ListenerIds) 设置监听器 ID 列表，ID 格式为 lst- 后接 8 位字母数字。
 * @method integer getMaxResults() 获取本次读取的最大数据记录数量。
取值: 1~100。
默认值: 20
 * @method void setMaxResults(integer $MaxResults) 设置本次读取的最大数据记录数量。
取值: 1~100。
默认值: 20
 * @method string getNextToken() 获取下一次查询的令牌（Token）。为空时查询第一页。
 * @method void setNextToken(string $NextToken) 设置下一次查询的令牌（Token）。为空时查询第一页。
 */
class DescribeListenersRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     */
    public $LoadBalancerId;

    /**
     * @var array 过滤条件列表，最大支持20个。支持以下几个字段
- **Protocol**: 协议类型
- **Tags**: 标签
     */
    public $Filters;

    /**
     * @var array 监听器 ID 列表，ID 格式为 lst- 后接 8 位字母数字。
     */
    public $ListenerIds;

    /**
     * @var integer 本次读取的最大数据记录数量。
取值: 1~100。
默认值: 20
     */
    public $MaxResults;

    /**
     * @var string 下一次查询的令牌（Token）。为空时查询第一页。
     */
    public $NextToken;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     * @param array $Filters 过滤条件列表，最大支持20个。支持以下几个字段
- **Protocol**: 协议类型
- **Tags**: 标签
     * @param array $ListenerIds 监听器 ID 列表，ID 格式为 lst- 后接 8 位字母数字。
     * @param integer $MaxResults 本次读取的最大数据记录数量。
取值: 1~100。
默认值: 20
     * @param string $NextToken 下一次查询的令牌（Token）。为空时查询第一页。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
