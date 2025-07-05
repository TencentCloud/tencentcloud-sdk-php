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
 * DetachLoadBalancers请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method array getLoadBalancerIds() 获取传统负载均衡器ID列表，列表长度上限为20，LoadBalancerIds 和 ForwardLoadBalancerIdentifications 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置传统负载均衡器ID列表，列表长度上限为20，LoadBalancerIds 和 ForwardLoadBalancerIdentifications 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method array getForwardLoadBalancerIdentifications() 获取负载均衡器标识信息列表，列表长度上限为100，LoadBalancerIds 和 ForwardLoadBalancerIdentifications二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setForwardLoadBalancerIdentifications(array $ForwardLoadBalancerIdentifications) 设置负载均衡器标识信息列表，列表长度上限为100，LoadBalancerIds 和 ForwardLoadBalancerIdentifications二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 */
class DetachLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var array 传统负载均衡器ID列表，列表长度上限为20，LoadBalancerIds 和 ForwardLoadBalancerIdentifications 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $LoadBalancerIds;

    /**
     * @var array 负载均衡器标识信息列表，列表长度上限为100，LoadBalancerIds 和 ForwardLoadBalancerIdentifications二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $ForwardLoadBalancerIdentifications;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     * @param array $LoadBalancerIds 传统负载均衡器ID列表，列表长度上限为20，LoadBalancerIds 和 ForwardLoadBalancerIdentifications 二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     * @param array $ForwardLoadBalancerIdentifications 负载均衡器标识信息列表，列表长度上限为100，LoadBalancerIds 和 ForwardLoadBalancerIdentifications二者同时最多只能指定一个。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
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

        if (array_key_exists("ForwardLoadBalancerIdentifications",$param) and $param["ForwardLoadBalancerIdentifications"] !== null) {
            $this->ForwardLoadBalancerIdentifications = [];
            foreach ($param["ForwardLoadBalancerIdentifications"] as $key => $value){
                $obj = new ForwardLoadBalancerIdentification();
                $obj->deserialize($value);
                array_push($this->ForwardLoadBalancerIdentifications, $obj);
            }
        }
    }
}
