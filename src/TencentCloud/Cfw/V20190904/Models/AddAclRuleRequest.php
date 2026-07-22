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
 * AddAclRule请求参数结构体
 *
 * @method array getRules() 获取待添加的互联网边界规则列表，不能为空。每条规则都解析并校验方向、源目的、动作、范围、协议端口和模板；整个请求还会校验规则配额及可下发规则数量。批量覆盖的删除方向例外地只取首条规则。
 * @method void setRules(array $Rules) 设置待添加的互联网边界规则列表，不能为空。每条规则都解析并校验方向、源目的、动作、范围、协议端口和模板；整个请求还会校验规则配额及可下发规则数量。批量覆盖的删除方向例外地只取首条规则。
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method string getFrom() 获取添加方式。省略或空字符串执行普通新增；insert_rule 标记为指定位置新增；batch_import 标记为批量导入；batch_import_cover 执行覆盖导入，在独立事务中先删除首条规则 Direction 对应的当前账号可操作分区旧规则，再插入 Rules；删除提交后，插入失败不会恢复旧规则。覆盖导入不会校验 Rules 的 Direction 全部相同，删除范围仍只由首条规则决定。其它字符串未由入口统一拒绝，但不属于本接口定义的支持合同，调用方不得依赖其行为。
 * @method void setFrom(string $From) 设置添加方式。省略或空字符串执行普通新增；insert_rule 标记为指定位置新增；batch_import 标记为批量导入；batch_import_cover 执行覆盖导入，在独立事务中先删除首条规则 Direction 对应的当前账号可操作分区旧规则，再插入 Rules；删除提交后，插入失败不会恢复旧规则。覆盖导入不会校验 Rules 的 Direction 全部相同，删除范围仍只由首条规则决定。其它字符串未由入口统一拒绝，但不属于本接口定义的支持合同，调用方不得依赖其行为。
 */
class AddAclRuleRequest extends AbstractModel
{
    /**
     * @var array 待添加的互联网边界规则列表，不能为空。每条规则都解析并校验方向、源目的、动作、范围、协议端口和模板；整个请求还会校验规则配额及可下发规则数量。批量覆盖的删除方向例外地只取首条规则。
     */
    public $Rules;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var string 添加方式。省略或空字符串执行普通新增；insert_rule 标记为指定位置新增；batch_import 标记为批量导入；batch_import_cover 执行覆盖导入，在独立事务中先删除首条规则 Direction 对应的当前账号可操作分区旧规则，再插入 Rules；删除提交后，插入失败不会恢复旧规则。覆盖导入不会校验 Rules 的 Direction 全部相同，删除范围仍只由首条规则决定。其它字符串未由入口统一拒绝，但不属于本接口定义的支持合同，调用方不得依赖其行为。
     */
    public $From;

    /**
     * @param array $Rules 待添加的互联网边界规则列表，不能为空。每条规则都解析并校验方向、源目的、动作、范围、协议端口和模板；整个请求还会校验规则配额及可下发规则数量。批量覆盖的删除方向例外地只取首条规则。
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param string $From 添加方式。省略或空字符串执行普通新增；insert_rule 标记为指定位置新增；batch_import 标记为批量导入；batch_import_cover 执行覆盖导入，在独立事务中先删除首条规则 Direction 对应的当前账号可操作分区旧规则，再插入 Rules；删除提交后，插入失败不会恢复旧规则。覆盖导入不会校验 Rules 的 Direction 全部相同，删除范围仍只由首条规则决定。其它字符串未由入口统一拒绝，但不属于本接口定义的支持合同，调用方不得依赖其行为。
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new CreateRuleItem();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }
    }
}
