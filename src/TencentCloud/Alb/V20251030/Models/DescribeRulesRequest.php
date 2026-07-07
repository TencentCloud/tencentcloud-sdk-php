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
 * DescribeRules请求参数结构体
 *
 * @method string getListenerId() 获取监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method void setListenerId(string $ListenerId) 设置监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method array getFilters() 获取支持的过滤条件如下：
 * @method void setFilters(array $Filters) 设置支持的过滤条件如下：
 * @method integer getMaxResults() 获取返回列表的数量，默认为20，最大值为100。
 * @method void setMaxResults(integer $MaxResults) 设置返回列表的数量，默认为20，最大值为100。
 * @method string getNextToken() 获取下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
 * @method void setNextToken(string $NextToken) 设置下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
 * @method array getRuleIds() 获取转发规则 ID 列表，ID 格式为 rule- 后接 8 位字母数字。
 * @method void setRuleIds(array $RuleIds) 设置转发规则 ID 列表，ID 格式为 rule- 后接 8 位字母数字。
 */
class DescribeRulesRequest extends AbstractModel
{
    /**
     * @var string 监听器 ID，格式为 lst- 后接 8 位字母数字。
     */
    public $ListenerId;

    /**
     * @var string 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     */
    public $LoadBalancerId;

    /**
     * @var array 支持的过滤条件如下：
     */
    public $Filters;

    /**
     * @var integer 返回列表的数量，默认为20，最大值为100。
     */
    public $MaxResults;

    /**
     * @var string 下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
     */
    public $NextToken;

    /**
     * @var array 转发规则 ID 列表，ID 格式为 rule- 后接 8 位字母数字。
     */
    public $RuleIds;

    /**
     * @param string $ListenerId 监听器 ID，格式为 lst- 后接 8 位字母数字。
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     * @param array $Filters 支持的过滤条件如下：
     * @param integer $MaxResults 返回列表的数量，默认为20，最大值为100。
     * @param string $NextToken 下一次查询的Token值。第一次查询和没有下一次查询时，无需填写。如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。
     * @param array $RuleIds 转发规则 ID 列表，ID 格式为 rule- 后接 8 位字母数字。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
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

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }
    }
}
