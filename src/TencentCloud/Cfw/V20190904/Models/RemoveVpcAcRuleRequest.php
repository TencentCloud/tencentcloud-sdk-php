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
 * RemoveVpcAcRule请求参数结构体
 *
 * @method array getRuleUuids() 获取<p>待删除规则 ID 列表。具体规则 ID 通过 DescribeCfwRules 查询 RuleType=vpc 和目标 RuleUuid，并使用返回的 rules[].uuid。数组恰为 [-1] 时删除当前账号中 IpVersion 指定版本的全部可操作规则，风险极高；其它数组按 ID 批量删除。具体 ID 删除忽略 IpVersion；至少匹配一条即成功，全部未找到时返回 ResourceNotFound。成功响应回显请求中的 ID 列表。</p>
 * @method void setRuleUuids(array $RuleUuids) 设置<p>待删除规则 ID 列表。具体规则 ID 通过 DescribeCfwRules 查询 RuleType=vpc 和目标 RuleUuid，并使用返回的 rules[].uuid。数组恰为 [-1] 时删除当前账号中 IpVersion 指定版本的全部可操作规则，风险极高；其它数组按 ID 批量删除。具体 ID 删除忽略 IpVersion；至少匹配一条即成功，全部未找到时返回 ResourceNotFound。成功响应回显请求中的 ID 列表。</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method integer getIpVersion() 获取<p>IP 版本，仅 RuleUuids 恰为 [-1] 时生效：1 表示 IPv6，0、省略或其它整数表示 IPv4。按具体规则 ID 删除时忽略。</p>
 * @method void setIpVersion(integer $IpVersion) 设置<p>IP 版本，仅 RuleUuids 恰为 [-1] 时生效：1 表示 IPv6，0、省略或其它整数表示 IPv4。按具体规则 ID 删除时忽略。</p>
 */
class RemoveVpcAcRuleRequest extends AbstractModel
{
    /**
     * @var array <p>待删除规则 ID 列表。具体规则 ID 通过 DescribeCfwRules 查询 RuleType=vpc 和目标 RuleUuid，并使用返回的 rules[].uuid。数组恰为 [-1] 时删除当前账号中 IpVersion 指定版本的全部可操作规则，风险极高；其它数组按 ID 批量删除。具体 ID 删除忽略 IpVersion；至少匹配一条即成功，全部未找到时返回 ResourceNotFound。成功响应回显请求中的 ID 列表。</p>
     */
    public $RuleUuids;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var integer <p>IP 版本，仅 RuleUuids 恰为 [-1] 时生效：1 表示 IPv6，0、省略或其它整数表示 IPv4。按具体规则 ID 删除时忽略。</p>
     */
    public $IpVersion;

    /**
     * @param array $RuleUuids <p>待删除规则 ID 列表。具体规则 ID 通过 DescribeCfwRules 查询 RuleType=vpc 和目标 RuleUuid，并使用返回的 rules[].uuid。数组恰为 [-1] 时删除当前账号中 IpVersion 指定版本的全部可操作规则，风险极高；其它数组按 ID 批量删除。具体 ID 删除忽略 IpVersion；至少匹配一条即成功，全部未找到时返回 ResourceNotFound。成功响应回显请求中的 ID 列表。</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param integer $IpVersion <p>IP 版本，仅 RuleUuids 恰为 [-1] 时生效：1 表示 IPv6，0、省略或其它整数表示 IPv4。按具体规则 ID 删除时忽略。</p>
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
        if (array_key_exists("RuleUuids",$param) and $param["RuleUuids"] !== null) {
            $this->RuleUuids = $param["RuleUuids"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
