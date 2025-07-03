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
 * ReplaceSecurityGroupPolicies请求参数结构体
 *
 * @method string getSecurityGroupId() 获取安全组实例ID，例如sg-33ocnj9n，可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>获取。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组实例ID，例如sg-33ocnj9n，可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>获取。
 * @method SecurityGroupPolicySet getSecurityGroupPolicySet() 获取安全组规则集合对象。
 * @method void setSecurityGroupPolicySet(SecurityGroupPolicySet $SecurityGroupPolicySet) 设置安全组规则集合对象。
 * @method SecurityGroupPolicySet getOriginalSecurityGroupPolicySet() 获取旧的安全组规则集合对象，可选，日志记录用。
 * @method void setOriginalSecurityGroupPolicySet(SecurityGroupPolicySet $OriginalSecurityGroupPolicySet) 设置旧的安全组规则集合对象，可选，日志记录用。
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
     * @var SecurityGroupPolicySet 旧的安全组规则集合对象，可选，日志记录用。
     */
    public $OriginalSecurityGroupPolicySet;

    /**
     * @param string $SecurityGroupId 安全组实例ID，例如sg-33ocnj9n，可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>获取。
     * @param SecurityGroupPolicySet $SecurityGroupPolicySet 安全组规则集合对象。
     * @param SecurityGroupPolicySet $OriginalSecurityGroupPolicySet 旧的安全组规则集合对象，可选，日志记录用。
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
    }
}
