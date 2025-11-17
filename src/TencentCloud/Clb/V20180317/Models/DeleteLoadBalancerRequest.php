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
 * DeleteLoadBalancer请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取要删除的负载均衡实例 ID 数组，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取，数组大小最大支持20。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置要删除的负载均衡实例 ID 数组，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取，数组大小最大支持20。
 * @method boolean getForceDelete() 获取是否强制删除clb。true表示强制删除，false表示不是强制删除，需要做拦截校验。
默认为false。
以下几种情况会默认拦截删除操作，如果触发情况1、2但确认强制删除则需要传强制校验参数ForceDelete为true。
1、删除后端绑定大于等于 20 个 RS 的实例时。
2、删除后端有 RS 且 5 分钟 内“出/入带宽”峰值取大 > 10Mbps 的实例时。
3、单地域内 5 分钟 内删除大于等于 30 个实例时。
 * @method void setForceDelete(boolean $ForceDelete) 设置是否强制删除clb。true表示强制删除，false表示不是强制删除，需要做拦截校验。
默认为false。
以下几种情况会默认拦截删除操作，如果触发情况1、2但确认强制删除则需要传强制校验参数ForceDelete为true。
1、删除后端绑定大于等于 20 个 RS 的实例时。
2、删除后端有 RS 且 5 分钟 内“出/入带宽”峰值取大 > 10Mbps 的实例时。
3、单地域内 5 分钟 内删除大于等于 30 个实例时。
 */
class DeleteLoadBalancerRequest extends AbstractModel
{
    /**
     * @var array 要删除的负载均衡实例 ID 数组，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取，数组大小最大支持20。
     */
    public $LoadBalancerIds;

    /**
     * @var boolean 是否强制删除clb。true表示强制删除，false表示不是强制删除，需要做拦截校验。
默认为false。
以下几种情况会默认拦截删除操作，如果触发情况1、2但确认强制删除则需要传强制校验参数ForceDelete为true。
1、删除后端绑定大于等于 20 个 RS 的实例时。
2、删除后端有 RS 且 5 分钟 内“出/入带宽”峰值取大 > 10Mbps 的实例时。
3、单地域内 5 分钟 内删除大于等于 30 个实例时。
     */
    public $ForceDelete;

    /**
     * @param array $LoadBalancerIds 要删除的负载均衡实例 ID 数组，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取，数组大小最大支持20。
     * @param boolean $ForceDelete 是否强制删除clb。true表示强制删除，false表示不是强制删除，需要做拦截校验。
默认为false。
以下几种情况会默认拦截删除操作，如果触发情况1、2但确认强制删除则需要传强制校验参数ForceDelete为true。
1、删除后端绑定大于等于 20 个 RS 的实例时。
2、删除后端有 RS 且 5 分钟 内“出/入带宽”峰值取大 > 10Mbps 的实例时。
3、单地域内 5 分钟 内删除大于等于 30 个实例时。
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

        if (array_key_exists("ForceDelete",$param) and $param["ForceDelete"] !== null) {
            $this->ForceDelete = $param["ForceDelete"];
        }
    }
}
