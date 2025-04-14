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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGatewayLoadBalancerAttribute请求参数结构体
 *
 * @method string getLoadBalancerId() 获取网关负载均衡的唯一ID。可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/api/1782/111683) 接口获取。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置网关负载均衡的唯一ID。可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/api/1782/111683) 接口获取。
 * @method string getLoadBalancerName() 获取网关负载均衡实例名称。可支持输入1-60个字符。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置网关负载均衡实例名称。可支持输入1-60个字符。
 * @method boolean getDeleteProtect() 获取是否开启删除保护。
 * @method void setDeleteProtect(boolean $DeleteProtect) 设置是否开启删除保护。
 */
class ModifyGatewayLoadBalancerAttributeRequest extends AbstractModel
{
    /**
     * @var string 网关负载均衡的唯一ID。可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/api/1782/111683) 接口获取。
     */
    public $LoadBalancerId;

    /**
     * @var string 网关负载均衡实例名称。可支持输入1-60个字符。
     */
    public $LoadBalancerName;

    /**
     * @var boolean 是否开启删除保护。
     */
    public $DeleteProtect;

    /**
     * @param string $LoadBalancerId 网关负载均衡的唯一ID。可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/api/1782/111683) 接口获取。
     * @param string $LoadBalancerName 网关负载均衡实例名称。可支持输入1-60个字符。
     * @param boolean $DeleteProtect 是否开启删除保护。
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

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }
    }
}
