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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGatewayLoadBalancerAttribute请求参数结构体
 *
 * @method string getLoadBalancerId() 获取<p>网关负载均衡的唯一ID。可通过<a href="https://cloud.tencent.com/document/api/1782/111683">DescribeGatewayLoadBalancers</a> 接口获取。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>网关负载均衡的唯一ID。可通过<a href="https://cloud.tencent.com/document/api/1782/111683">DescribeGatewayLoadBalancers</a> 接口获取。</p>
 * @method string getLoadBalancerName() 获取<p>网关负载均衡实例名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置<p>网关负载均衡实例名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method boolean getDeleteProtect() 获取<p>是否开启删除保护。</p>
 * @method void setDeleteProtect(boolean $DeleteProtect) 设置<p>是否开启删除保护。</p>
 */
class ModifyGatewayLoadBalancerAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>网关负载均衡的唯一ID。可通过<a href="https://cloud.tencent.com/document/api/1782/111683">DescribeGatewayLoadBalancers</a> 接口获取。</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>网关负载均衡实例名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     */
    public $LoadBalancerName;

    /**
     * @var boolean <p>是否开启删除保护。</p>
     */
    public $DeleteProtect;

    /**
     * @param string $LoadBalancerId <p>网关负载均衡的唯一ID。可通过<a href="https://cloud.tencent.com/document/api/1782/111683">DescribeGatewayLoadBalancers</a> 接口获取。</p>
     * @param string $LoadBalancerName <p>网关负载均衡实例名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     * @param boolean $DeleteProtect <p>是否开启删除保护。</p>
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
