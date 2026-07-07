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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用型负载均衡可用区子网映射中的 IP 信息数据结构
 *
 * @method array getIPv4Address() 获取IPv4 地址列表
 * @method void setIPv4Address(array $IPv4Address) 设置IPv4 地址列表
 * @method array getIPv6Address() 获取IPv6 地址列表
 * @method void setIPv6Address(array $IPv6Address) 设置IPv6 地址列表
 */
class LoadBalancerAddress extends AbstractModel
{
    /**
     * @var array IPv4 地址列表
     */
    public $IPv4Address;

    /**
     * @var array IPv6 地址列表
     */
    public $IPv6Address;

    /**
     * @param array $IPv4Address IPv4 地址列表
     * @param array $IPv6Address IPv6 地址列表
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
        if (array_key_exists("IPv4Address",$param) and $param["IPv4Address"] !== null) {
            $this->IPv4Address = [];
            foreach ($param["IPv4Address"] as $key => $value){
                $obj = new IPAddressInfo();
                $obj->deserialize($value);
                array_push($this->IPv4Address, $obj);
            }
        }

        if (array_key_exists("IPv6Address",$param) and $param["IPv6Address"] !== null) {
            $this->IPv6Address = [];
            foreach ($param["IPv6Address"] as $key => $value){
                $obj = new IPAddressInfo();
                $obj->deserialize($value);
                array_push($this->IPv6Address, $obj);
            }
        }
    }
}
