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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancerMixIpTarget请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取负载均衡实例ID数组，默认支持20个负载均衡实例ID。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置负载均衡实例ID数组，默认支持20个负载均衡实例ID。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
 * @method boolean getMixIpTarget() 获取开启/关闭IPv6FullChain负载均衡7层监听器支持混绑IPv4/IPv6目标特性。
 * @method void setMixIpTarget(boolean $MixIpTarget) 设置开启/关闭IPv6FullChain负载均衡7层监听器支持混绑IPv4/IPv6目标特性。
 */
class ModifyLoadBalancerMixIpTargetRequest extends AbstractModel
{
    /**
     * @var array 负载均衡实例ID数组，默认支持20个负载均衡实例ID。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
     */
    public $LoadBalancerIds;

    /**
     * @var boolean 开启/关闭IPv6FullChain负载均衡7层监听器支持混绑IPv4/IPv6目标特性。
     */
    public $MixIpTarget;

    /**
     * @param array $LoadBalancerIds 负载均衡实例ID数组，默认支持20个负载均衡实例ID。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
     * @param boolean $MixIpTarget 开启/关闭IPv6FullChain负载均衡7层监听器支持混绑IPv4/IPv6目标特性。
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("MixIpTarget",$param) and $param["MixIpTarget"] !== null) {
            $this->MixIpTarget = $param["MixIpTarget"];
        }
    }
}
