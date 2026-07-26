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
 * CreateBlockIgnoreRuleNew请求参数结构体
 *
 * @method integer getRuleType() 获取规则类型：1 IP 封禁，2 IP 放通，3 域名放通，4 情报放通，5 资产放通，6 自定义放通。
 * @method void setRuleType(integer $RuleType) 设置规则类型：1 IP 封禁，2 IP 放通，3 域名放通，4 情报放通，5 资产放通，6 自定义放通。
 * @method array getRules() 获取待新增规则列表；可为空，空数组返回成功且不新增规则。
 * @method void setRules(array $Rules) 设置待新增规则列表；可为空，空数组返回成功且不新增规则。
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method integer getCoverDuplicate() 获取互斥列表冲突处理，仅 RuleType=1 或 2 生效。0 表示保留已有互斥规则并跳过冲突新增项；1 表示保留新增项并删除同 IP、同方向的互斥规则；省略时不处理互斥冲突。填写本字段时，同一请求内相同 Ioc 会合并为一项，DirectionList 按输入顺序合并，时间和备注采用首次出现项的值。已有同类型、同 Ioc 规则的方向会与本次方向合并，其它字段按本次请求更新。
 * @method void setCoverDuplicate(integer $CoverDuplicate) 设置互斥列表冲突处理，仅 RuleType=1 或 2 生效。0 表示保留已有互斥规则并跳过冲突新增项；1 表示保留新增项并删除同 IP、同方向的互斥规则；省略时不处理互斥冲突。填写本字段时，同一请求内相同 Ioc 会合并为一项，DirectionList 按输入顺序合并，时间和备注采用首次出现项的值。已有同类型、同 Ioc 规则的方向会与本次方向合并，其它字段按本次请求更新。
 */
class CreateBlockIgnoreRuleNewRequest extends AbstractModel
{
    /**
     * @var integer 规则类型：1 IP 封禁，2 IP 放通，3 域名放通，4 情报放通，5 资产放通，6 自定义放通。
     */
    public $RuleType;

    /**
     * @var array 待新增规则列表；可为空，空数组返回成功且不新增规则。
     */
    public $Rules;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var integer 互斥列表冲突处理，仅 RuleType=1 或 2 生效。0 表示保留已有互斥规则并跳过冲突新增项；1 表示保留新增项并删除同 IP、同方向的互斥规则；省略时不处理互斥冲突。填写本字段时，同一请求内相同 Ioc 会合并为一项，DirectionList 按输入顺序合并，时间和备注采用首次出现项的值。已有同类型、同 Ioc 规则的方向会与本次方向合并，其它字段按本次请求更新。
     */
    public $CoverDuplicate;

    /**
     * @param integer $RuleType 规则类型：1 IP 封禁，2 IP 放通，3 域名放通，4 情报放通，5 资产放通，6 自定义放通。
     * @param array $Rules 待新增规则列表；可为空，空数组返回成功且不新增规则。
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param integer $CoverDuplicate 互斥列表冲突处理，仅 RuleType=1 或 2 生效。0 表示保留已有互斥规则并跳过冲突新增项；1 表示保留新增项并删除同 IP、同方向的互斥规则；省略时不处理互斥冲突。填写本字段时，同一请求内相同 Ioc 会合并为一项，DirectionList 按输入顺序合并，时间和备注采用首次出现项的值。已有同类型、同 Ioc 规则的方向会与本次方向合并，其它字段按本次请求更新。
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new BanAndAllowRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("CoverDuplicate",$param) and $param["CoverDuplicate"] !== null) {
            $this->CoverDuplicate = $param["CoverDuplicate"];
        }
    }
}
