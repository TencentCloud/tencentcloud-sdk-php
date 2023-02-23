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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡状态信息
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID
 * @method string getLoadBalancerName() 获取负载均衡实例名字
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例名字
 * @method string getLoadBalancerVip() 获取负载均衡实例 VIP
 * @method void setLoadBalancerVip(string $LoadBalancerVip) 设置负载均衡实例 VIP
 * @method string getLoadBalancerHostname() 获取负载均衡实例 Hostname
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerHostname(string $LoadBalancerHostname) 设置负载均衡实例 Hostname
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadBalancerStatus extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡实例名字
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡实例 VIP
     */
    public $LoadBalancerVip;

    /**
     * @var string 负载均衡实例 Hostname
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerHostname;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID
     * @param string $LoadBalancerName 负载均衡实例名字
     * @param string $LoadBalancerVip 负载均衡实例 VIP
     * @param string $LoadBalancerHostname 负载均衡实例 Hostname
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("LoadBalancerVip",$param) and $param["LoadBalancerVip"] !== null) {
            $this->LoadBalancerVip = $param["LoadBalancerVip"];
        }

        if (array_key_exists("LoadBalancerHostname",$param) and $param["LoadBalancerHostname"] !== null) {
            $this->LoadBalancerHostname = $param["LoadBalancerHostname"];
        }
    }
}
