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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancers请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method array getLoadBalancerIds() 获取传统负载均衡器ID列表，目前长度上限为20，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置传统负载均衡器ID列表，目前长度上限为20，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method array getForwardLoadBalancers() 获取负载均衡器列表，目前长度上限为100，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setForwardLoadBalancers(array $ForwardLoadBalancers) 设置负载均衡器列表，目前长度上限为100，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method string getLoadBalancersCheckPolicy() 获取负载均衡器校验策略，取值包括 ALL 和 DIFF，默认取值为 ALL。
<li> ALL，所有负载均衡器都合法则通过校验，否则校验报错。</li> 
<li> DIFF，仅校验负载均衡器参数中实际变化的部分，如果合法则通过校验，否则校验报错。</li> 
 * @method void setLoadBalancersCheckPolicy(string $LoadBalancersCheckPolicy) 设置负载均衡器校验策略，取值包括 ALL 和 DIFF，默认取值为 ALL。
<li> ALL，所有负载均衡器都合法则通过校验，否则校验报错。</li> 
<li> DIFF，仅校验负载均衡器参数中实际变化的部分，如果合法则通过校验，否则校验报错。</li> 
 */
class ModifyLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var array 传统负载均衡器ID列表，目前长度上限为20，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $LoadBalancerIds;

    /**
     * @var array 负载均衡器列表，目前长度上限为100，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $ForwardLoadBalancers;

    /**
     * @var string 负载均衡器校验策略，取值包括 ALL 和 DIFF，默认取值为 ALL。
<li> ALL，所有负载均衡器都合法则通过校验，否则校验报错。</li> 
<li> DIFF，仅校验负载均衡器参数中实际变化的部分，如果合法则通过校验，否则校验报错。</li> 
     */
    public $LoadBalancersCheckPolicy;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     * @param array $LoadBalancerIds 传统负载均衡器ID列表，目前长度上限为20，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     * @param array $ForwardLoadBalancers 负载均衡器列表，目前长度上限为100，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     * @param string $LoadBalancersCheckPolicy 负载均衡器校验策略，取值包括 ALL 和 DIFF，默认取值为 ALL。
<li> ALL，所有负载均衡器都合法则通过校验，否则校验报错。</li> 
<li> DIFF，仅校验负载均衡器参数中实际变化的部分，如果合法则通过校验，否则校验报错。</li> 
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("ForwardLoadBalancers",$param) and $param["ForwardLoadBalancers"] !== null) {
            $this->ForwardLoadBalancers = [];
            foreach ($param["ForwardLoadBalancers"] as $key => $value){
                $obj = new ForwardLoadBalancer();
                $obj->deserialize($value);
                array_push($this->ForwardLoadBalancers, $obj);
            }
        }

        if (array_key_exists("LoadBalancersCheckPolicy",$param) and $param["LoadBalancersCheckPolicy"] !== null) {
            $this->LoadBalancersCheckPolicy = $param["LoadBalancersCheckPolicy"];
        }
    }
}
