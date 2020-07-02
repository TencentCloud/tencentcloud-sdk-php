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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeL4Listeners请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method array getListenerIds() 获取四层监听器实例ID数组，可通过接口DescribeL4Listeners查询。
 * @method void setListenerIds(array $ListenerIds) 设置四层监听器实例ID数组，可通过接口DescribeL4Listeners查询。
 */
class DescribeL4ListenersRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     */
    public $LoadBalancerId;

    /**
     * @var array 四层监听器实例ID数组，可通过接口DescribeL4Listeners查询。
     */
    public $ListenerIds;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     * @param array $ListenerIds 四层监听器实例ID数组，可通过接口DescribeL4Listeners查询。
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
        if (array_key_exists('LoadBalancerId',$param) and $param['LoadBalancerId'] !== null) {
            $this->LoadBalancerId = $param['LoadBalancerId'];
        }

        if (array_key_exists('ListenerIds',$param) and $param['ListenerIds'] !== null) {
            $this->ListenerIds = $param['ListenerIds'];
        }
    }
}
