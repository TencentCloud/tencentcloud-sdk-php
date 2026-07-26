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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveEnterpriseSecurityGroupRule请求参数结构体
 *
 * @method integer getRemoveType() 获取<p>必填的删除类型，只使用 0 或 1。0 表示删除 RuleUuid 指定的单条规则；1 表示删除当前账号的全部可操作企业安全组规则，风险极高。</p>
 * @method void setRemoveType(integer $RemoveType) 设置<p>必填的删除类型，只使用 0 或 1。0 表示删除 RuleUuid 指定的单条规则；1 表示删除当前账号的全部可操作企业安全组规则，风险极高。</p>
 * @method integer getRuleUuid() 获取<p>必填的规则数值 ID。RemoveType=0 时，调用 DescribeCfwRules，传 RuleType=enterprise_sg、RuleId=&lt;数值 RuleUuid&gt;，并使用返回的 rules[].uuid；规则不存在时返回 ResourceNotFound。RemoveType=1 时传 0，删除当前账号的全部可操作企业安全组规则。成功响应回显请求中的 RuleUuid。</p>
 * @method void setRuleUuid(integer $RuleUuid) 设置<p>必填的规则数值 ID。RemoveType=0 时，调用 DescribeCfwRules，传 RuleType=enterprise_sg、RuleId=&lt;数值 RuleUuid&gt;，并使用返回的 rules[].uuid；规则不存在时返回 ResourceNotFound。RemoveType=1 时传 0，删除当前账号的全部可操作企业安全组规则。成功响应回显请求中的 RuleUuid。</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 */
class RemoveEnterpriseSecurityGroupRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>必填的删除类型，只使用 0 或 1。0 表示删除 RuleUuid 指定的单条规则；1 表示删除当前账号的全部可操作企业安全组规则，风险极高。</p>
     */
    public $RemoveType;

    /**
     * @var integer <p>必填的规则数值 ID。RemoveType=0 时，调用 DescribeCfwRules，传 RuleType=enterprise_sg、RuleId=&lt;数值 RuleUuid&gt;，并使用返回的 rules[].uuid；规则不存在时返回 ResourceNotFound。RemoveType=1 时传 0，删除当前账号的全部可操作企业安全组规则。成功响应回显请求中的 RuleUuid。</p>
     */
    public $RuleUuid;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @param integer $RemoveType <p>必填的删除类型，只使用 0 或 1。0 表示删除 RuleUuid 指定的单条规则；1 表示删除当前账号的全部可操作企业安全组规则，风险极高。</p>
     * @param integer $RuleUuid <p>必填的规则数值 ID。RemoveType=0 时，调用 DescribeCfwRules，传 RuleType=enterprise_sg、RuleId=&lt;数值 RuleUuid&gt;，并使用返回的 rules[].uuid；规则不存在时返回 ResourceNotFound。RemoveType=1 时传 0，删除当前账号的全部可操作企业安全组规则。成功响应回显请求中的 RuleUuid。</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
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
        if (array_key_exists("RemoveType",$param) and $param["RemoveType"] !== null) {
            $this->RemoveType = $param["RemoveType"];
        }

        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }
    }
}
