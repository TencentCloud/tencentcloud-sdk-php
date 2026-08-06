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
 * ModifyWhiteRule请求参数结构体
 *
 * @method IdsWhiteRule getRule() 获取JSON object，提交完整策略。将 DescribeWhiteRule.Data[].WhiteId 写入 Rule.Info.WhiteId；RuleName、FwType、EndTime、Comment、Info 按本次请求整体保存，Id 和 IdsRuleName 由服务端管理。
 * @method void setRule(IdsWhiteRule $Rule) 设置JSON object，提交完整策略。将 DescribeWhiteRule.Data[].WhiteId 写入 Rule.Info.WhiteId；RuleName、FwType、EndTime、Comment、Info 按本次请求整体保存，Id 和 IdsRuleName 由服务端管理。
 * @method integer getRuleType() 获取使用 JSON integer，沿用 DescribeWhiteRule.Data[].RuleType：
- 2 精确外部 IP：Rule.Info.SrcIP、Rule.Info.DstIP 两个字段中恰好填写一个。
- 3 域名。
- 4 威胁情报。
- 5 资产：Rule.Info.SrcIP、Rule.Info.DstIP 两个字段中恰好填写一个。
- 6 IPS 自定义：Rule.Info.IdsRuleId 必填，Rule.Info.SrcIP、Rule.Info.DstIP 至少一项为具体 IP；Rule.FwType=16 时目的 IPv4 可带端口；Rule.FwType 包含 1 时具体 IP 至少一项属于当前账号资产。
- 8 IP 扩展：在 Rule.Info 中填写 CIDR、端口或源/目的组合。
- 9 NDR 扩展：Rule.FwType=16，Rule.Info 至少包含一个 NDR 专属条件；搭配 IdsRuleId 时同时填写 Rule.Info.SrcIP 或 Rule.Info.DstIP。
 * @method void setRuleType(integer $RuleType) 设置使用 JSON integer，沿用 DescribeWhiteRule.Data[].RuleType：
- 2 精确外部 IP：Rule.Info.SrcIP、Rule.Info.DstIP 两个字段中恰好填写一个。
- 3 域名。
- 4 威胁情报。
- 5 资产：Rule.Info.SrcIP、Rule.Info.DstIP 两个字段中恰好填写一个。
- 6 IPS 自定义：Rule.Info.IdsRuleId 必填，Rule.Info.SrcIP、Rule.Info.DstIP 至少一项为具体 IP；Rule.FwType=16 时目的 IPv4 可带端口；Rule.FwType 包含 1 时具体 IP 至少一项属于当前账号资产。
- 8 IP 扩展：在 Rule.Info 中填写 CIDR、端口或源/目的组合。
- 9 NDR 扩展：Rule.FwType=16，Rule.Info 至少包含一个 NDR 专属条件；搭配 IdsRuleId 时同时填写 Rule.Info.SrcIP 或 Rule.Info.DstIP。
 * @method integer getCoverDuplicate() 获取使用 JSON integer。仅 RuleType=2 使用：0 或省略表示保留冲突封禁；1 表示删除同 IP、同方向冲突封禁后保存，选择 1 前先确认该删除操作。其它 RuleType 省略本参数。
 * @method void setCoverDuplicate(integer $CoverDuplicate) 设置使用 JSON integer。仅 RuleType=2 使用：0 或省略表示保留冲突封禁；1 表示删除同 IP、同方向冲突封禁后保存，选择 1 前先确认该删除操作。其它 RuleType 省略本参数。
 */
class ModifyWhiteRuleRequest extends AbstractModel
{
    /**
     * @var IdsWhiteRule JSON object，提交完整策略。将 DescribeWhiteRule.Data[].WhiteId 写入 Rule.Info.WhiteId；RuleName、FwType、EndTime、Comment、Info 按本次请求整体保存，Id 和 IdsRuleName 由服务端管理。
     */
    public $Rule;

    /**
     * @var integer 使用 JSON integer，沿用 DescribeWhiteRule.Data[].RuleType：
- 2 精确外部 IP：Rule.Info.SrcIP、Rule.Info.DstIP 两个字段中恰好填写一个。
- 3 域名。
- 4 威胁情报。
- 5 资产：Rule.Info.SrcIP、Rule.Info.DstIP 两个字段中恰好填写一个。
- 6 IPS 自定义：Rule.Info.IdsRuleId 必填，Rule.Info.SrcIP、Rule.Info.DstIP 至少一项为具体 IP；Rule.FwType=16 时目的 IPv4 可带端口；Rule.FwType 包含 1 时具体 IP 至少一项属于当前账号资产。
- 8 IP 扩展：在 Rule.Info 中填写 CIDR、端口或源/目的组合。
- 9 NDR 扩展：Rule.FwType=16，Rule.Info 至少包含一个 NDR 专属条件；搭配 IdsRuleId 时同时填写 Rule.Info.SrcIP 或 Rule.Info.DstIP。
     */
    public $RuleType;

    /**
     * @var integer 使用 JSON integer。仅 RuleType=2 使用：0 或省略表示保留冲突封禁；1 表示删除同 IP、同方向冲突封禁后保存，选择 1 前先确认该删除操作。其它 RuleType 省略本参数。
     */
    public $CoverDuplicate;

    /**
     * @param IdsWhiteRule $Rule JSON object，提交完整策略。将 DescribeWhiteRule.Data[].WhiteId 写入 Rule.Info.WhiteId；RuleName、FwType、EndTime、Comment、Info 按本次请求整体保存，Id 和 IdsRuleName 由服务端管理。
     * @param integer $RuleType 使用 JSON integer，沿用 DescribeWhiteRule.Data[].RuleType：
- 2 精确外部 IP：Rule.Info.SrcIP、Rule.Info.DstIP 两个字段中恰好填写一个。
- 3 域名。
- 4 威胁情报。
- 5 资产：Rule.Info.SrcIP、Rule.Info.DstIP 两个字段中恰好填写一个。
- 6 IPS 自定义：Rule.Info.IdsRuleId 必填，Rule.Info.SrcIP、Rule.Info.DstIP 至少一项为具体 IP；Rule.FwType=16 时目的 IPv4 可带端口；Rule.FwType 包含 1 时具体 IP 至少一项属于当前账号资产。
- 8 IP 扩展：在 Rule.Info 中填写 CIDR、端口或源/目的组合。
- 9 NDR 扩展：Rule.FwType=16，Rule.Info 至少包含一个 NDR 专属条件；搭配 IdsRuleId 时同时填写 Rule.Info.SrcIP 或 Rule.Info.DstIP。
     * @param integer $CoverDuplicate 使用 JSON integer。仅 RuleType=2 使用：0 或省略表示保留冲突封禁；1 表示删除同 IP、同方向冲突封禁后保存，选择 1 前先确认该删除操作。其它 RuleType 省略本参数。
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
        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new IdsWhiteRule();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("CoverDuplicate",$param) and $param["CoverDuplicate"] !== null) {
            $this->CoverDuplicate = $param["CoverDuplicate"];
        }
    }
}
