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
 * DescribeTargetHealth请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取要查询的负载均衡实例ID列表。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置要查询的负载均衡实例ID列表。
 * @method array getListenerIds() 获取要查询的监听器ID列表。
 * @method void setListenerIds(array $ListenerIds) 设置要查询的监听器ID列表。
 * @method array getLocationIds() 获取要查询的转发规则ID列表。
 * @method void setLocationIds(array $LocationIds) 设置要查询的转发规则ID列表。
 */
class DescribeTargetHealthRequest extends AbstractModel
{
    /**
     * @var array 要查询的负载均衡实例ID列表。
     */
    public $LoadBalancerIds;

    /**
     * @var array 要查询的监听器ID列表。
     */
    public $ListenerIds;

    /**
     * @var array 要查询的转发规则ID列表。
     */
    public $LocationIds;

    /**
     * @param array $LoadBalancerIds 要查询的负载均衡实例ID列表。
     * @param array $ListenerIds 要查询的监听器ID列表。
     * @param array $LocationIds 要查询的转发规则ID列表。
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

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("LocationIds",$param) and $param["LocationIds"] !== null) {
            $this->LocationIds = $param["LocationIds"];
        }
    }
}
