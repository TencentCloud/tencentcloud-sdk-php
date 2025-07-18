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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用型负载均衡器标识信息
 *
 * @method string getLoadBalancerId() 获取负载均衡器ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡器ID
 * @method string getListenerId() 获取应用型负载均衡监听器 ID
 * @method void setListenerId(string $ListenerId) 设置应用型负载均衡监听器 ID
 * @method string getLocationId() 获取转发规则ID，注意：针对七层监听器此参数必填
 * @method void setLocationId(string $LocationId) 设置转发规则ID，注意：针对七层监听器此参数必填
 */
class ForwardLoadBalancerIdentification extends AbstractModel
{
    /**
     * @var string 负载均衡器ID
     */
    public $LoadBalancerId;

    /**
     * @var string 应用型负载均衡监听器 ID
     */
    public $ListenerId;

    /**
     * @var string 转发规则ID，注意：针对七层监听器此参数必填
     */
    public $LocationId;

    /**
     * @param string $LoadBalancerId 负载均衡器ID
     * @param string $ListenerId 应用型负载均衡监听器 ID
     * @param string $LocationId 转发规则ID，注意：针对七层监听器此参数必填
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

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }
    }
}
