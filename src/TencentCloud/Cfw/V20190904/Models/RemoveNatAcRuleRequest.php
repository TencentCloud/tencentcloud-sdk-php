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
 * RemoveNatAcRule请求参数结构体
 *
 * @method array getRuleUuid() 获取<p>NAT 边界访问控制规则 ID 列表。具体规则 ID 通过 DescribeCfwRules 查询 RuleType=nat 和目标 RuleUuid，并使用返回的 rules[].uuid。数组仅含 -1 时删除 Direction 指定方向下当前账号的全部可操作规则，风险极高；其它数组按 ID 删除。至少匹配一条即成功；具体 ID 删除不按 Direction 筛选。成功响应回显请求中的 ID 列表。</p>
 * @method void setRuleUuid(array $RuleUuid) 设置<p>NAT 边界访问控制规则 ID 列表。具体规则 ID 通过 DescribeCfwRules 查询 RuleType=nat 和目标 RuleUuid，并使用返回的 rules[].uuid。数组仅含 -1 时删除 Direction 指定方向下当前账号的全部可操作规则，风险极高；其它数组按 ID 删除。至少匹配一条即成功；具体 ID 删除不按 Direction 筛选。成功响应回显请求中的 ID 列表。</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method integer getDirection() 获取<p>规则方向：1 表示入站，0 表示出站。仅 RuleUuid 恰好为 [-1] 时用于选择全删方向；按具体 ID 删除时可省略，Direction 不参与 ID 筛选。全删时必须使用 0 或 1。</p>
 * @method void setDirection(integer $Direction) 设置<p>规则方向：1 表示入站，0 表示出站。仅 RuleUuid 恰好为 [-1] 时用于选择全删方向；按具体 ID 删除时可省略，Direction 不参与 ID 筛选。全删时必须使用 0 或 1。</p>
 */
class RemoveNatAcRuleRequest extends AbstractModel
{
    /**
     * @var array <p>NAT 边界访问控制规则 ID 列表。具体规则 ID 通过 DescribeCfwRules 查询 RuleType=nat 和目标 RuleUuid，并使用返回的 rules[].uuid。数组仅含 -1 时删除 Direction 指定方向下当前账号的全部可操作规则，风险极高；其它数组按 ID 删除。至少匹配一条即成功；具体 ID 删除不按 Direction 筛选。成功响应回显请求中的 ID 列表。</p>
     */
    public $RuleUuid;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var integer <p>规则方向：1 表示入站，0 表示出站。仅 RuleUuid 恰好为 [-1] 时用于选择全删方向；按具体 ID 删除时可省略，Direction 不参与 ID 筛选。全删时必须使用 0 或 1。</p>
     */
    public $Direction;

    /**
     * @param array $RuleUuid <p>NAT 边界访问控制规则 ID 列表。具体规则 ID 通过 DescribeCfwRules 查询 RuleType=nat 和目标 RuleUuid，并使用返回的 rules[].uuid。数组仅含 -1 时删除 Direction 指定方向下当前账号的全部可操作规则，风险极高；其它数组按 ID 删除。至少匹配一条即成功；具体 ID 删除不按 Direction 筛选。成功响应回显请求中的 ID 列表。</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param integer $Direction <p>规则方向：1 表示入站，0 表示出站。仅 RuleUuid 恰好为 [-1] 时用于选择全删方向；按具体 ID 删除时可省略，Direction 不参与 ID 筛选。全删时必须使用 0 或 1。</p>
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
        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
