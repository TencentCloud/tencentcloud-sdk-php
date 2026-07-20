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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlobalAcceleratorAclRule请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取全球加速实例ID。
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置全球加速实例ID。
 * @method string getGlobalAcceleratorAclPolicyId() 获取安全策略ID
 * @method void setGlobalAcceleratorAclPolicyId(string $GlobalAcceleratorAclPolicyId) 设置安全策略ID
 * @method array getAclEntries() 获取Acl信息。
 * @method void setAclEntries(array $AclEntries) 设置Acl信息。
 */
class CreateGlobalAcceleratorAclRuleRequest extends AbstractModel
{
    /**
     * @var string 全球加速实例ID。
     */
    public $GlobalAcceleratorId;

    /**
     * @var string 安全策略ID
     */
    public $GlobalAcceleratorAclPolicyId;

    /**
     * @var array Acl信息。
     */
    public $AclEntries;

    /**
     * @param string $GlobalAcceleratorId 全球加速实例ID。
     * @param string $GlobalAcceleratorAclPolicyId 安全策略ID
     * @param array $AclEntries Acl信息。
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("GlobalAcceleratorAclPolicyId",$param) and $param["GlobalAcceleratorAclPolicyId"] !== null) {
            $this->GlobalAcceleratorAclPolicyId = $param["GlobalAcceleratorAclPolicyId"];
        }

        if (array_key_exists("AclEntries",$param) and $param["AclEntries"] !== null) {
            $this->AclEntries = [];
            foreach ($param["AclEntries"] as $key => $value){
                $obj = new AclEntries();
                $obj->deserialize($value);
                array_push($this->AclEntries, $obj);
            }
        }
    }
}
