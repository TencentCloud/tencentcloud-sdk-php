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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachLoadBalancers请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID
 * @method array getLoadBalancerIds() 获取传统型负载均衡器ID列表，每个伸缩组绑定传统型负载均衡器数量上限为20，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置传统型负载均衡器ID列表，每个伸缩组绑定传统型负载均衡器数量上限为20，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个
 * @method array getForwardLoadBalancers() 获取应用型负载均衡器列表，每个伸缩组绑定应用型负载均衡器数量上限为100，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个
 * @method void setForwardLoadBalancers(array $ForwardLoadBalancers) 设置应用型负载均衡器列表，每个伸缩组绑定应用型负载均衡器数量上限为100，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个
 */
class AttachLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID
     */
    public $AutoScalingGroupId;

    /**
     * @var array 传统型负载均衡器ID列表，每个伸缩组绑定传统型负载均衡器数量上限为20，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个
     */
    public $LoadBalancerIds;

    /**
     * @var array 应用型负载均衡器列表，每个伸缩组绑定应用型负载均衡器数量上限为100，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个
     */
    public $ForwardLoadBalancers;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID
     * @param array $LoadBalancerIds 传统型负载均衡器ID列表，每个伸缩组绑定传统型负载均衡器数量上限为20，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个
     * @param array $ForwardLoadBalancers 应用型负载均衡器列表，每个伸缩组绑定应用型负载均衡器数量上限为100，LoadBalancerIds 和 ForwardLoadBalancers 二者同时最多只能指定一个
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
    }
}
