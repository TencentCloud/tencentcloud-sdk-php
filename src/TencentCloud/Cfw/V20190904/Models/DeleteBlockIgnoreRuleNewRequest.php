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
 * DeleteBlockIgnoreRuleNew请求参数结构体
 *
 * @method integer getDeleteAll() 获取删除模式，必传且只接受整数 0 或 1。0 表示按 Rules 中的 RuleType 与 Ioc 删除匹配记录；1 表示按 ShowType 清空对应列表，其中 blocklist 删除全部 RuleType=1 记录，whitelist 删除全部 RuleType>=2 记录，风险极高。
 * @method void setDeleteAll(integer $DeleteAll) 设置删除模式，必传且只接受整数 0 或 1。0 表示按 Rules 中的 RuleType 与 Ioc 删除匹配记录；1 表示按 ShowType 清空对应列表，其中 blocklist 删除全部 RuleType=1 记录，whitelist 删除全部 RuleType>=2 记录，风险极高。
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method integer getRuleType() 获取可省略。当前处理逻辑不读取该顶层字段；传入值不参与精确删除或整表删除的目标选择。
 * @method void setRuleType(integer $RuleType) 设置可省略。当前处理逻辑不读取该顶层字段；传入值不参与精确删除或整表删除的目标选择。
 * @method array getRules() 获取待删除规则列表。DeleteAll=0 时必填，每项删除所有与 RuleType、Ioc 匹配的记录；DirectionList 不参与目标匹配，但 RuleType=1、2、3 时必须使用 DescribeBlockIgnoreList 返回的完整方向列表。同一请求混合 RuleType 时，引擎更新使用最后一项的 RuleType。DeleteAll=1 时省略。
 * @method void setRules(array $Rules) 设置待删除规则列表。DeleteAll=0 时必填，每项删除所有与 RuleType、Ioc 匹配的记录；DirectionList 不参与目标匹配，但 RuleType=1、2、3 时必须使用 DescribeBlockIgnoreList 返回的完整方向列表。同一请求混合 RuleType 时，引擎更新使用最后一项的 RuleType。DeleteAll=1 时省略。
 * @method string getShowType() 获取列表类型，处理时必传且只接受 blocklist 或 whitelist。DeleteAll=1 时，blocklist 选择全部 RuleType=1 记录，whitelist 选择全部 RuleType>=2 记录；DeleteAll=0 时该字段仅校验取值，不限制 Rules 指定的删除目标。
 * @method void setShowType(string $ShowType) 设置列表类型，处理时必传且只接受 blocklist 或 whitelist。DeleteAll=1 时，blocklist 选择全部 RuleType=1 记录，whitelist 选择全部 RuleType>=2 记录；DeleteAll=0 时该字段仅校验取值，不限制 Rules 指定的删除目标。
 */
class DeleteBlockIgnoreRuleNewRequest extends AbstractModel
{
    /**
     * @var integer 删除模式，必传且只接受整数 0 或 1。0 表示按 Rules 中的 RuleType 与 Ioc 删除匹配记录；1 表示按 ShowType 清空对应列表，其中 blocklist 删除全部 RuleType=1 记录，whitelist 删除全部 RuleType>=2 记录，风险极高。
     */
    public $DeleteAll;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var integer 可省略。当前处理逻辑不读取该顶层字段；传入值不参与精确删除或整表删除的目标选择。
     */
    public $RuleType;

    /**
     * @var array 待删除规则列表。DeleteAll=0 时必填，每项删除所有与 RuleType、Ioc 匹配的记录；DirectionList 不参与目标匹配，但 RuleType=1、2、3 时必须使用 DescribeBlockIgnoreList 返回的完整方向列表。同一请求混合 RuleType 时，引擎更新使用最后一项的 RuleType。DeleteAll=1 时省略。
     */
    public $Rules;

    /**
     * @var string 列表类型，处理时必传且只接受 blocklist 或 whitelist。DeleteAll=1 时，blocklist 选择全部 RuleType=1 记录，whitelist 选择全部 RuleType>=2 记录；DeleteAll=0 时该字段仅校验取值，不限制 Rules 指定的删除目标。
     */
    public $ShowType;

    /**
     * @param integer $DeleteAll 删除模式，必传且只接受整数 0 或 1。0 表示按 Rules 中的 RuleType 与 Ioc 删除匹配记录；1 表示按 ShowType 清空对应列表，其中 blocklist 删除全部 RuleType=1 记录，whitelist 删除全部 RuleType>=2 记录，风险极高。
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param integer $RuleType 可省略。当前处理逻辑不读取该顶层字段；传入值不参与精确删除或整表删除的目标选择。
     * @param array $Rules 待删除规则列表。DeleteAll=0 时必填，每项删除所有与 RuleType、Ioc 匹配的记录；DirectionList 不参与目标匹配，但 RuleType=1、2、3 时必须使用 DescribeBlockIgnoreList 返回的完整方向列表。同一请求混合 RuleType 时，引擎更新使用最后一项的 RuleType。DeleteAll=1 时省略。
     * @param string $ShowType 列表类型，处理时必传且只接受 blocklist 或 whitelist。DeleteAll=1 时，blocklist 选择全部 RuleType=1 记录，whitelist 选择全部 RuleType>=2 记录；DeleteAll=0 时该字段仅校验取值，不限制 Rules 指定的删除目标。
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
        if (array_key_exists("DeleteAll",$param) and $param["DeleteAll"] !== null) {
            $this->DeleteAll = $param["DeleteAll"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new BanAndAllowRuleDel();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("ShowType",$param) and $param["ShowType"] !== null) {
            $this->ShowType = $param["ShowType"];
        }
    }
}
