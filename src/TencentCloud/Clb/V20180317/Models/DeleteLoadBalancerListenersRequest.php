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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLoadBalancerListeners请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
 * @method array getListenerIds() 获取指定删除的监听器ID数组，最大为20个。若不填则删除负载均衡的所有监听器，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
 * @method void setListenerIds(array $ListenerIds) 设置指定删除的监听器ID数组，最大为20个。若不填则删除负载均衡的所有监听器，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
 */
class DeleteLoadBalancerListenersRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
     */
    public $LoadBalancerId;

    /**
     * @var array 指定删除的监听器ID数组，最大为20个。若不填则删除负载均衡的所有监听器，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
     */
    public $ListenerIds;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口查询。
     * @param array $ListenerIds 指定删除的监听器ID数组，最大为20个。若不填则删除负载均衡的所有监听器，可以通过 [DescribeListeners](https://cloud.tencent.com/document/product/214/30686) 接口查询。
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

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }
    }
}
