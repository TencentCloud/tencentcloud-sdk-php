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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRuleGroup请求参数结构体
 *
 * @method string getGroupName() 获取<p>规则组名称，不可为空，最长50字符（按字符数计，中文按1个字符计）</p>
 * @method void setGroupName(string $GroupName) 设置<p>规则组名称，不可为空，最长50字符（按字符数计，中文按1个字符计）</p>
 * @method string getProduct() 获取<p>规则组归属产品。enterprise_sg-企业安全组，cfw_vpc_acl-VPC边界防火墙，cfw_nat_acl-NAT边界防火墙，cfw_edge_acl-互联网边界防火墙。必填，不接受 all</p>
 * @method void setProduct(string $Product) 设置<p>规则组归属产品。enterprise_sg-企业安全组，cfw_vpc_acl-VPC边界防火墙，cfw_nat_acl-NAT边界防火墙，cfw_edge_acl-互联网边界防火墙。必填，不接受 all</p>
 */
class CreateRuleGroupRequest extends AbstractModel
{
    /**
     * @var string <p>规则组名称，不可为空，最长50字符（按字符数计，中文按1个字符计）</p>
     */
    public $GroupName;

    /**
     * @var string <p>规则组归属产品。enterprise_sg-企业安全组，cfw_vpc_acl-VPC边界防火墙，cfw_nat_acl-NAT边界防火墙，cfw_edge_acl-互联网边界防火墙。必填，不接受 all</p>
     */
    public $Product;

    /**
     * @param string $GroupName <p>规则组名称，不可为空，最长50字符（按字符数计，中文按1个字符计）</p>
     * @param string $Product <p>规则组归属产品。enterprise_sg-企业安全组，cfw_vpc_acl-VPC边界防火墙，cfw_nat_acl-NAT边界防火墙，cfw_edge_acl-互联网边界防火墙。必填，不接受 all</p>
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
