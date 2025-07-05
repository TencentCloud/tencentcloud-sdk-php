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
 * 升级为性能容量型参数
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
 * @method string getSlaType() 获取性能容量型规格，取值范围：
<li> clb.c2.medium：标准型规格 </li>
<li> clb.c3.small：高阶型1规格 </li>
<li> clb.c3.medium：高阶型2规格 </li>
<li> clb.c4.small：超强型1规格 </li>
<li> clb.c4.medium：超强型2规格 </li>
<li> clb.c4.large：超强型3规格 </li>
<li> clb.c4.xlarge：超强型4规格 </li>如需了解规格详情，请参见[实例规格对比](https://cloud.tencent.com/document/product/214/84689)
 * @method void setSlaType(string $SlaType) 设置性能容量型规格，取值范围：
<li> clb.c2.medium：标准型规格 </li>
<li> clb.c3.small：高阶型1规格 </li>
<li> clb.c3.medium：高阶型2规格 </li>
<li> clb.c4.small：超强型1规格 </li>
<li> clb.c4.medium：超强型2规格 </li>
<li> clb.c4.large：超强型3规格 </li>
<li> clb.c4.xlarge：超强型4规格 </li>如需了解规格详情，请参见[实例规格对比](https://cloud.tencent.com/document/product/214/84689)
 */
class SlaUpdateParam extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
     */
    public $LoadBalancerId;

    /**
     * @var string 性能容量型规格，取值范围：
<li> clb.c2.medium：标准型规格 </li>
<li> clb.c3.small：高阶型1规格 </li>
<li> clb.c3.medium：高阶型2规格 </li>
<li> clb.c4.small：超强型1规格 </li>
<li> clb.c4.medium：超强型2规格 </li>
<li> clb.c4.large：超强型3规格 </li>
<li> clb.c4.xlarge：超强型4规格 </li>如需了解规格详情，请参见[实例规格对比](https://cloud.tencent.com/document/product/214/84689)
     */
    public $SlaType;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
     * @param string $SlaType 性能容量型规格，取值范围：
<li> clb.c2.medium：标准型规格 </li>
<li> clb.c3.small：高阶型1规格 </li>
<li> clb.c3.medium：高阶型2规格 </li>
<li> clb.c4.small：超强型1规格 </li>
<li> clb.c4.medium：超强型2规格 </li>
<li> clb.c4.large：超强型3规格 </li>
<li> clb.c4.xlarge：超强型4规格 </li>如需了解规格详情，请参见[实例规格对比](https://cloud.tencent.com/document/product/214/84689)
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

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }
    }
}
