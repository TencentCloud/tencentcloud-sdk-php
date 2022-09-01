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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupPolicies请求参数结构体
 *
 * @method string getSecurityGroupId() 获取安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。
 * @method array getFilters() 获取过滤条件。
<li>security-group-id - String - 规则中的安全组ID。</li>
<li>ip - String - IP，支持IPV4和IPV6模糊匹配。</li>
<li>address-module - String - IP地址模板或IP地址组模板ID。</li>
<li>service-module - String - 协议端口模板或协议端口组模板ID。</li>
<li>protocol-type - String - 安全组策略支持的协议，可选值：`TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, `ALL`。</li>
<li>port - String - 是否必填：否 -协议端口，支持模糊匹配，值为`ALL`时，查询所有的端口。</li>
<li>poly - String - 协议策略，可选值：`ALL`，所有策略；`ACCEPT`，允许；`DROP`，拒绝。</li>
<li>direction - String - 协议规则，可选值：`ALL`，所有策略；`INBOUND`，入站规则；`OUTBOUND`，出站规则。</li>
<li>description - String - 协议描述，该过滤条件支持模糊匹配。</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>security-group-id - String - 规则中的安全组ID。</li>
<li>ip - String - IP，支持IPV4和IPV6模糊匹配。</li>
<li>address-module - String - IP地址模板或IP地址组模板ID。</li>
<li>service-module - String - 协议端口模板或协议端口组模板ID。</li>
<li>protocol-type - String - 安全组策略支持的协议，可选值：`TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, `ALL`。</li>
<li>port - String - 是否必填：否 -协议端口，支持模糊匹配，值为`ALL`时，查询所有的端口。</li>
<li>poly - String - 协议策略，可选值：`ALL`，所有策略；`ACCEPT`，允许；`DROP`，拒绝。</li>
<li>direction - String - 协议规则，可选值：`ALL`，所有策略；`INBOUND`，入站规则；`OUTBOUND`，出站规则。</li>
<li>description - String - 协议描述，该过滤条件支持模糊匹配。</li>
 */
class DescribeSecurityGroupPoliciesRequest extends AbstractModel
{
    /**
     * @var string 安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。
     */
    public $SecurityGroupId;

    /**
     * @var array 过滤条件。
<li>security-group-id - String - 规则中的安全组ID。</li>
<li>ip - String - IP，支持IPV4和IPV6模糊匹配。</li>
<li>address-module - String - IP地址模板或IP地址组模板ID。</li>
<li>service-module - String - 协议端口模板或协议端口组模板ID。</li>
<li>protocol-type - String - 安全组策略支持的协议，可选值：`TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, `ALL`。</li>
<li>port - String - 是否必填：否 -协议端口，支持模糊匹配，值为`ALL`时，查询所有的端口。</li>
<li>poly - String - 协议策略，可选值：`ALL`，所有策略；`ACCEPT`，允许；`DROP`，拒绝。</li>
<li>direction - String - 协议规则，可选值：`ALL`，所有策略；`INBOUND`，入站规则；`OUTBOUND`，出站规则。</li>
<li>description - String - 协议描述，该过滤条件支持模糊匹配。</li>
     */
    public $Filters;

    /**
     * @param string $SecurityGroupId 安全组实例ID，例如：sg-33ocnj9n，可通过DescribeSecurityGroups获取。
     * @param array $Filters 过滤条件。
<li>security-group-id - String - 规则中的安全组ID。</li>
<li>ip - String - IP，支持IPV4和IPV6模糊匹配。</li>
<li>address-module - String - IP地址模板或IP地址组模板ID。</li>
<li>service-module - String - 协议端口模板或协议端口组模板ID。</li>
<li>protocol-type - String - 安全组策略支持的协议，可选值：`TCP`, `UDP`, `ICMP`, `ICMPV6`, `GRE`, `ALL`。</li>
<li>port - String - 是否必填：否 -协议端口，支持模糊匹配，值为`ALL`时，查询所有的端口。</li>
<li>poly - String - 协议策略，可选值：`ALL`，所有策略；`ACCEPT`，允许；`DROP`，拒绝。</li>
<li>direction - String - 协议规则，可选值：`ALL`，所有策略；`INBOUND`，入站规则；`OUTBOUND`，出站规则。</li>
<li>description - String - 协议描述，该过滤条件支持模糊匹配。</li>
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
