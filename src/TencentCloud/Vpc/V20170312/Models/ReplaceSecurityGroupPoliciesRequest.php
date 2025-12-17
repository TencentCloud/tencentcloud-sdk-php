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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceSecurityGroupPolicies请求参数结构体
 *
 * @method string getSecurityGroupId() 获取安全组实例ID，例如sg-33ocnj9n，可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>获取。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组实例ID，例如sg-33ocnj9n，可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>获取。
 * @method SecurityGroupPolicySet getSecurityGroupPolicySet() 获取安全组规则集合对象。
 * @method void setSecurityGroupPolicySet(SecurityGroupPolicySet $SecurityGroupPolicySet) 设置安全组规则集合对象。
 * @method SecurityGroupPolicySet getOriginalSecurityGroupPolicySet() 获取旧的安全组规则集合对象，当更新优先级时为必选，且修改顺序与SecurityGroupPolicySet参数顺序一一对应，入参长度需要与SecurityGroupPolicySet参数保持一致。
 * @method void setOriginalSecurityGroupPolicySet(SecurityGroupPolicySet $OriginalSecurityGroupPolicySet) 设置旧的安全组规则集合对象，当更新优先级时为必选，且修改顺序与SecurityGroupPolicySet参数顺序一一对应，入参长度需要与SecurityGroupPolicySet参数保持一致。
 * @method string getUpdateType() 获取更新类型，默认 Policy  Policy：只更新内容  Priority：只更新优先级  Both：内容和优先级都更新
 * @method void setUpdateType(string $UpdateType) 设置更新类型，默认 Policy  Policy：只更新内容  Priority：只更新优先级  Both：内容和优先级都更新
 */
class ReplaceSecurityGroupPoliciesRequest extends AbstractModel
{
    /**
     * @var string 安全组实例ID，例如sg-33ocnj9n，可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>获取。
     */
    public $SecurityGroupId;

    /**
     * @var SecurityGroupPolicySet 安全组规则集合对象。
     */
    public $SecurityGroupPolicySet;

    /**
     * @var SecurityGroupPolicySet 旧的安全组规则集合对象，当更新优先级时为必选，且修改顺序与SecurityGroupPolicySet参数顺序一一对应，入参长度需要与SecurityGroupPolicySet参数保持一致。
     */
    public $OriginalSecurityGroupPolicySet;

    /**
     * @var string 更新类型，默认 Policy  Policy：只更新内容  Priority：只更新优先级  Both：内容和优先级都更新
     */
    public $UpdateType;

    /**
     * @param string $SecurityGroupId 安全组实例ID，例如sg-33ocnj9n，可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>获取。
     * @param SecurityGroupPolicySet $SecurityGroupPolicySet 安全组规则集合对象。
     * @param SecurityGroupPolicySet $OriginalSecurityGroupPolicySet 旧的安全组规则集合对象，当更新优先级时为必选，且修改顺序与SecurityGroupPolicySet参数顺序一一对应，入参长度需要与SecurityGroupPolicySet参数保持一致。
     * @param string $UpdateType 更新类型，默认 Policy  Policy：只更新内容  Priority：只更新优先级  Both：内容和优先级都更新
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

        if (array_key_exists("SecurityGroupPolicySet",$param) and $param["SecurityGroupPolicySet"] !== null) {
            $this->SecurityGroupPolicySet = new SecurityGroupPolicySet();
            $this->SecurityGroupPolicySet->deserialize($param["SecurityGroupPolicySet"]);
        }

        if (array_key_exists("OriginalSecurityGroupPolicySet",$param) and $param["OriginalSecurityGroupPolicySet"] !== null) {
            $this->OriginalSecurityGroupPolicySet = new SecurityGroupPolicySet();
            $this->OriginalSecurityGroupPolicySet->deserialize($param["OriginalSecurityGroupPolicySet"]);
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }
    }
}
