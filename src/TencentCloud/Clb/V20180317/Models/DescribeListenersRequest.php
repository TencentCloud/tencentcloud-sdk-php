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
 * DescribeListeners请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685) 接口获取。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685) 接口获取。
 * @method array getListenerIds() 获取要查询的负载均衡监听器 ID 数组，最大为100个，可以通过 [DescribeListeners](https://cloud.tencent.com/document/api/214/30686) 接口获取。
 * @method void setListenerIds(array $ListenerIds) 设置要查询的负载均衡监听器 ID 数组，最大为100个，可以通过 [DescribeListeners](https://cloud.tencent.com/document/api/214/30686) 接口获取。
 * @method string getProtocol() 获取要查询的监听器协议类型，取值 TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。
 * @method void setProtocol(string $Protocol) 设置要查询的监听器协议类型，取值 TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。
 * @method integer getPort() 获取要查询的监听器的端口，端口范围：1-65535
 * @method void setPort(integer $Port) 设置要查询的监听器的端口，端口范围：1-65535
 */
class DescribeListenersRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685) 接口获取。
     */
    public $LoadBalancerId;

    /**
     * @var array 要查询的负载均衡监听器 ID 数组，最大为100个，可以通过 [DescribeListeners](https://cloud.tencent.com/document/api/214/30686) 接口获取。
     */
    public $ListenerIds;

    /**
     * @var string 要查询的监听器协议类型，取值 TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。
     */
    public $Protocol;

    /**
     * @var integer 要查询的监听器的端口，端口范围：1-65535
     */
    public $Port;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/api/214/30685) 接口获取。
     * @param array $ListenerIds 要查询的负载均衡监听器 ID 数组，最大为100个，可以通过 [DescribeListeners](https://cloud.tencent.com/document/api/214/30686) 接口获取。
     * @param string $Protocol 要查询的监听器协议类型，取值 TCP | UDP | HTTP | HTTPS | TCP_SSL | QUIC。
     * @param integer $Port 要查询的监听器的端口，端口范围：1-65535
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

        if (array_key_exists("ListenerIds",$param) and $param["ListenerIds"] !== null) {
            $this->ListenerIds = $param["ListenerIds"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
