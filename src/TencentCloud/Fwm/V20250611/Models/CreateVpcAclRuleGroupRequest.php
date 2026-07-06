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
 * CreateVpcAclRuleGroup请求参数结构体
 *
 * @method string getGroupName() 获取规则组名称
 * @method void setGroupName(string $GroupName) 设置规则组名称
 * @method string getProduct() 获取产品类型，固定为 cfw_vpc_acl
 * @method void setProduct(string $Product) 设置产品类型，固定为 cfw_vpc_acl
 * @method array getRules() 获取规则列表
 * @method void setRules(array $Rules) 设置规则列表
 */
class CreateVpcAclRuleGroupRequest extends AbstractModel
{
    /**
     * @var string 规则组名称
     */
    public $GroupName;

    /**
     * @var string 产品类型，固定为 cfw_vpc_acl
     */
    public $Product;

    /**
     * @var array 规则列表
     */
    public $Rules;

    /**
     * @param string $GroupName 规则组名称
     * @param string $Product 产品类型，固定为 cfw_vpc_acl
     * @param array $Rules 规则列表
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

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new VpcAclRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
