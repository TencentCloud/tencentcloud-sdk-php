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
 * @method integer getDeleteAll() 获取<p>是否删除全部</p>
 * @method void setDeleteAll(integer $DeleteAll) 设置<p>是否删除全部</p>
 * @method string getShowType() 获取<p>blocklist 封禁列表 whitelist 白名单列表</p>
 * @method void setShowType(string $ShowType) 设置<p>blocklist 封禁列表 whitelist 白名单列表</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method array getRules() 获取<p>规则列表</p>
 * @method void setRules(array $Rules) 设置<p>规则列表</p>
 * @method integer getRuleType() 获取<p>封禁：1，放通：100，<br>主要用于全部删除时区分列表类型</p>
 * @method void setRuleType(integer $RuleType) 设置<p>封禁：1，放通：100，<br>主要用于全部删除时区分列表类型</p>
 */
class DeleteBlockIgnoreRuleNewRequest extends AbstractModel
{
    /**
     * @var integer <p>是否删除全部</p>
     */
    public $DeleteAll;

    /**
     * @var string <p>blocklist 封禁列表 whitelist 白名单列表</p>
     */
    public $ShowType;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var array <p>规则列表</p>
     */
    public $Rules;

    /**
     * @var integer <p>封禁：1，放通：100，<br>主要用于全部删除时区分列表类型</p>
     */
    public $RuleType;

    /**
     * @param integer $DeleteAll <p>是否删除全部</p>
     * @param string $ShowType <p>blocklist 封禁列表 whitelist 白名单列表</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     * @param array $Rules <p>规则列表</p>
     * @param integer $RuleType <p>封禁：1，放通：100，<br>主要用于全部删除时区分列表类型</p>
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

        if (array_key_exists("ShowType",$param) and $param["ShowType"] !== null) {
            $this->ShowType = $param["ShowType"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new BanAndAllowRuleDel();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
