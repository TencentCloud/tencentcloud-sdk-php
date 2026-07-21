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
 * Acl规则信息
 *
 * @method string getGlobalAcceleratorPolicyId() 获取访问控制策略ID。
 * @method void setGlobalAcceleratorPolicyId(string $GlobalAcceleratorPolicyId) 设置访问控制策略ID。
 * @method string getGlobalAcceleratorAclRuleId() 获取Acl规则ID。
 * @method void setGlobalAcceleratorAclRuleId(string $GlobalAcceleratorAclRuleId) 设置Acl规则ID。
 * @method string getProtocol() 获取协议。
 * @method void setProtocol(string $Protocol) 设置协议。
 * @method string getPort() 获取端口。
 * @method void setPort(string $Port) 设置端口。
 * @method string getSourceCidrBlock() 获取网段。
 * @method void setSourceCidrBlock(string $SourceCidrBlock) 设置网段。
 * @method string getPolicy() 获取动作。
 * @method void setPolicy(string $Policy) 设置动作。
 * @method string getDescription() 获取描述。
 * @method void setDescription(string $Description) 设置描述。
 */
class GlobalAcceleratorAclRuleSet extends AbstractModel
{
    /**
     * @var string 访问控制策略ID。
     */
    public $GlobalAcceleratorPolicyId;

    /**
     * @var string Acl规则ID。
     */
    public $GlobalAcceleratorAclRuleId;

    /**
     * @var string 协议。
     */
    public $Protocol;

    /**
     * @var string 端口。
     */
    public $Port;

    /**
     * @var string 网段。
     */
    public $SourceCidrBlock;

    /**
     * @var string 动作。
     */
    public $Policy;

    /**
     * @var string 描述。
     */
    public $Description;

    /**
     * @param string $GlobalAcceleratorPolicyId 访问控制策略ID。
     * @param string $GlobalAcceleratorAclRuleId Acl规则ID。
     * @param string $Protocol 协议。
     * @param string $Port 端口。
     * @param string $SourceCidrBlock 网段。
     * @param string $Policy 动作。
     * @param string $Description 描述。
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
        if (array_key_exists("GlobalAcceleratorPolicyId",$param) and $param["GlobalAcceleratorPolicyId"] !== null) {
            $this->GlobalAcceleratorPolicyId = $param["GlobalAcceleratorPolicyId"];
        }

        if (array_key_exists("GlobalAcceleratorAclRuleId",$param) and $param["GlobalAcceleratorAclRuleId"] !== null) {
            $this->GlobalAcceleratorAclRuleId = $param["GlobalAcceleratorAclRuleId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SourceCidrBlock",$param) and $param["SourceCidrBlock"] !== null) {
            $this->SourceCidrBlock = $param["SourceCidrBlock"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
