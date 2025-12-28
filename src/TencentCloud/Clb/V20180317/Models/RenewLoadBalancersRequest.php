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
 * RenewLoadBalancers请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取负载均衡实例唯一ID数组，最多支持20个。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置负载均衡实例唯一ID数组，最多支持20个。
 * @method LBChargePrepaid getLBChargePrepaid() 获取负载均衡实例的预付费相关属性。
 * @method void setLBChargePrepaid(LBChargePrepaid $LBChargePrepaid) 设置负载均衡实例的预付费相关属性。
 */
class RenewLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array 负载均衡实例唯一ID数组，最多支持20个。
     */
    public $LoadBalancerIds;

    /**
     * @var LBChargePrepaid 负载均衡实例的预付费相关属性。
     */
    public $LBChargePrepaid;

    /**
     * @param array $LoadBalancerIds 负载均衡实例唯一ID数组，最多支持20个。
     * @param LBChargePrepaid $LBChargePrepaid 负载均衡实例的预付费相关属性。
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

        if (array_key_exists("LBChargePrepaid",$param) and $param["LBChargePrepaid"] !== null) {
            $this->LBChargePrepaid = new LBChargePrepaid();
            $this->LBChargePrepaid->deserialize($param["LBChargePrepaid"]);
        }
    }
}
