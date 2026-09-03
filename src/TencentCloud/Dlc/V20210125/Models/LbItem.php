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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡条目（字段严格对齐 CLB DescribeLoadBalancers）
 *
 * @method string getLoadBalancerId() 获取<p>负载均衡实例 ID，例如 lb-xxxxxxxx</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡实例 ID，例如 lb-xxxxxxxx</p>
 * @method string getLoadBalancerName() 获取<p>负载均衡实例名称</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置<p>负载均衡实例名称</p>
 * @method string getLoadBalancerType() 获取<p>网络类型：OPEN=公网属性；INTERNAL=内网属性</p>
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置<p>网络类型：OPEN=公网属性；INTERNAL=内网属性</p>
 */
class LbItem extends AbstractModel
{
    /**
     * @var string <p>负载均衡实例 ID，例如 lb-xxxxxxxx</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>负载均衡实例名称</p>
     */
    public $LoadBalancerName;

    /**
     * @var string <p>网络类型：OPEN=公网属性；INTERNAL=内网属性</p>
     */
    public $LoadBalancerType;

    /**
     * @param string $LoadBalancerId <p>负载均衡实例 ID，例如 lb-xxxxxxxx</p>
     * @param string $LoadBalancerName <p>负载均衡实例名称</p>
     * @param string $LoadBalancerType <p>网络类型：OPEN=公网属性；INTERNAL=内网属性</p>
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

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }
    }
}
