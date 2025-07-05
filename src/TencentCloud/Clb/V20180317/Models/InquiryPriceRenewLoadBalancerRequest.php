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
 * InquiryPriceRenewLoadBalancer请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
 * @method LBChargePrepaid getLoadBalancerChargePrepaid() 获取续费周期
 * @method void setLoadBalancerChargePrepaid(LBChargePrepaid $LoadBalancerChargePrepaid) 设置续费周期
 */
class InquiryPriceRenewLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
     */
    public $LoadBalancerId;

    /**
     * @var LBChargePrepaid 续费周期
     */
    public $LoadBalancerChargePrepaid;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
     * @param LBChargePrepaid $LoadBalancerChargePrepaid 续费周期
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

        if (array_key_exists("LoadBalancerChargePrepaid",$param) and $param["LoadBalancerChargePrepaid"] !== null) {
            $this->LoadBalancerChargePrepaid = new LBChargePrepaid();
            $this->LoadBalancerChargePrepaid->deserialize($param["LoadBalancerChargePrepaid"]);
        }
    }
}
