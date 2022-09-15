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
 * DescribeIdleLoadBalancers请求参数结构体
 *
 * @method integer getOffset() 获取数据偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为0。
 * @method integer getLimit() 获取返回负载均衡实例的数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回负载均衡实例的数量，默认为20，最大值为100。
 * @method string getLoadBalancerRegion() 获取负载均衡所在地域。
 * @method void setLoadBalancerRegion(string $LoadBalancerRegion) 设置负载均衡所在地域。
 */
class DescribeIdleLoadBalancersRequest extends AbstractModel
{
    /**
     * @var integer 数据偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回负载均衡实例的数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var string 负载均衡所在地域。
     */
    public $LoadBalancerRegion;

    /**
     * @param integer $Offset 数据偏移量，默认为0。
     * @param integer $Limit 返回负载均衡实例的数量，默认为20，最大值为100。
     * @param string $LoadBalancerRegion 负载均衡所在地域。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LoadBalancerRegion",$param) and $param["LoadBalancerRegion"] !== null) {
            $this->LoadBalancerRegion = $param["LoadBalancerRegion"];
        }
    }
}
