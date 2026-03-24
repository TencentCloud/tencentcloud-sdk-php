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
 * @method array getLoadBalancerIds() 获取<p>要查询的负载均衡实例ID列表。数组大小最大支持30。</p>
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置<p>要查询的负载均衡实例ID列表。数组大小最大支持30。</p>
 * @method array getListenerIds() 获取<p>要查询的监听器ID列表。</p>
 * @method void setListenerIds(array $ListenerIds) 设置<p>要查询的监听器ID列表。</p>
 * @method array getLocationIds() 获取<p>要查询的转发规则ID列表。</p>
 * @method void setLocationIds(array $LocationIds) 设置<p>要查询的转发规则ID列表。</p>
 */
class DescribeTargetHealthRequest extends AbstractModel
{
    /**
     * @var array <p>要查询的负载均衡实例ID列表。数组大小最大支持30。</p>
     */
    public $LoadBalancerIds;

    /**
     * @var array <p>要查询的监听器ID列表。</p>
     */
    public $ListenerIds;

    /**
     * @var array <p>要查询的转发规则ID列表。</p>
     */
    public $LocationIds;

    /**
     * @param array $LoadBalancerIds <p>要查询的负载均衡实例ID列表。数组大小最大支持30。</p>
     * @param array $ListenerIds <p>要查询的监听器ID列表。</p>
     * @param array $LocationIds <p>要查询的转发规则ID列表。</p>
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
