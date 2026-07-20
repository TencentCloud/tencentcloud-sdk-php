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
 * ModifyGlobalAcceleratorAclRule请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method string getGlobalAcceleratorAclPolicyId() 获取<p>安全策略ID</p>
 * @method void setGlobalAcceleratorAclPolicyId(string $GlobalAcceleratorAclPolicyId) 设置<p>安全策略ID</p>
 * @method string getGlobalAcceleratorAclRuleId() 获取<p>Acl规则ID。</p>
 * @method void setGlobalAcceleratorAclRuleId(string $GlobalAcceleratorAclRuleId) 设置<p>Acl规则ID。</p>
 * @method string getProtocol() 获取<p>协议。</p><p>入参限制：支持选择&#39;TCP&#39;, &#39;UDP&#39;, &#39;ALL&#39;。</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议。</p><p>入参限制：支持选择&#39;TCP&#39;, &#39;UDP&#39;, &#39;ALL&#39;。</p>
 * @method string getPort() 获取<p>端口。</p>
 * @method void setPort(string $Port) 设置<p>端口。</p>
 * @method string getSourceCidrBlock() 获取<p>网段。</p>
 * @method void setSourceCidrBlock(string $SourceCidrBlock) 设置<p>网段。</p>
 * @method string getPolicy() 获取<p>动作。</p><p>入参限制：支持选择&#39;ACCEPT&#39;, &#39;DROP&#39;。</p><p>枚举值：</p><ul><li>ACCEPT： 允许。</li><li>DROP： 拒绝。</li></ul>
 * @method void setPolicy(string $Policy) 设置<p>动作。</p><p>入参限制：支持选择&#39;ACCEPT&#39;, &#39;DROP&#39;。</p><p>枚举值：</p><ul><li>ACCEPT： 允许。</li><li>DROP： 拒绝。</li></ul>
 * @method string getDescription() 获取<p>描述信息，最大长度不能超过100个字节。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息，最大长度不能超过100个字节。</p>
 */
class ModifyGlobalAcceleratorAclRuleRequest extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>安全策略ID</p>
     */
    public $GlobalAcceleratorAclPolicyId;

    /**
     * @var string <p>Acl规则ID。</p>
     */
    public $GlobalAcceleratorAclRuleId;

    /**
     * @var string <p>协议。</p><p>入参限制：支持选择&#39;TCP&#39;, &#39;UDP&#39;, &#39;ALL&#39;。</p>
     */
    public $Protocol;

    /**
     * @var string <p>端口。</p>
     */
    public $Port;

    /**
     * @var string <p>网段。</p>
     */
    public $SourceCidrBlock;

    /**
     * @var string <p>动作。</p><p>入参限制：支持选择&#39;ACCEPT&#39;, &#39;DROP&#39;。</p><p>枚举值：</p><ul><li>ACCEPT： 允许。</li><li>DROP： 拒绝。</li></ul>
     */
    public $Policy;

    /**
     * @var string <p>描述信息，最大长度不能超过100个字节。</p>
     */
    public $Description;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param string $GlobalAcceleratorAclPolicyId <p>安全策略ID</p>
     * @param string $GlobalAcceleratorAclRuleId <p>Acl规则ID。</p>
     * @param string $Protocol <p>协议。</p><p>入参限制：支持选择&#39;TCP&#39;, &#39;UDP&#39;, &#39;ALL&#39;。</p>
     * @param string $Port <p>端口。</p>
     * @param string $SourceCidrBlock <p>网段。</p>
     * @param string $Policy <p>动作。</p><p>入参限制：支持选择&#39;ACCEPT&#39;, &#39;DROP&#39;。</p><p>枚举值：</p><ul><li>ACCEPT： 允许。</li><li>DROP： 拒绝。</li></ul>
     * @param string $Description <p>描述信息，最大长度不能超过100个字节。</p>
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
