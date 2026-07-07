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
 * DescribeListenerHealthStatus请求参数结构体
 *
 * @method string getListenerId() 获取监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method void setListenerId(string $ListenerId) 设置监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method boolean getIncludeRule() 获取是否包含转发规则的健康检查结果。为false时只返回默认转发规则的健康状态，为true时返回全部规则的健康状态(包含默认规则)。
取值：
true：是。
false（默认值）：否。
 * @method void setIncludeRule(boolean $IncludeRule) 设置是否包含转发规则的健康检查结果。为false时只返回默认转发规则的健康状态，为true时返回全部规则的健康状态(包含默认规则)。
取值：
true：是。
false（默认值）：否。
 * @method integer getMaxResults() 获取本次读取的最大数据记录数量。
取值: 1~100。
默认值: 20
 * @method void setMaxResults(integer $MaxResults) 设置本次读取的最大数据记录数量。
取值: 1~100。
默认值: 20
 * @method string getNextToken() 获取下一页查询的Token值。第一次查询时，无需填写。
 * @method void setNextToken(string $NextToken) 设置下一页查询的Token值。第一次查询时，无需填写。
 */
class DescribeListenerHealthStatusRequest extends AbstractModel
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
     * @var boolean 是否包含转发规则的健康检查结果。为false时只返回默认转发规则的健康状态，为true时返回全部规则的健康状态(包含默认规则)。
取值：
true：是。
false（默认值）：否。
     */
    public $IncludeRule;

    /**
     * @var integer 本次读取的最大数据记录数量。
取值: 1~100。
默认值: 20
     */
    public $MaxResults;

    /**
     * @var string 下一页查询的Token值。第一次查询时，无需填写。
     */
    public $NextToken;

    /**
     * @param string $ListenerId 监听器 ID，格式为 lst- 后接 8 位字母数字。
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     * @param boolean $IncludeRule 是否包含转发规则的健康检查结果。为false时只返回默认转发规则的健康状态，为true时返回全部规则的健康状态(包含默认规则)。
取值：
true：是。
false（默认值）：否。
     * @param integer $MaxResults 本次读取的最大数据记录数量。
取值: 1~100。
默认值: 20
     * @param string $NextToken 下一页查询的Token值。第一次查询时，无需填写。
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

        if (array_key_exists("IncludeRule",$param) and $param["IncludeRule"] !== null) {
            $this->IncludeRule = $param["IncludeRule"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
