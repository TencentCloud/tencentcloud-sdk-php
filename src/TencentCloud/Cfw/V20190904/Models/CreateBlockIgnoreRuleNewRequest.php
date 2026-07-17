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
 * @method array getRules() 获取<p>非自定义类型规则列表</p>
 * @method void setRules(array $Rules) 设置<p>非自定义类型规则列表</p>
 * @method integer getRuleType() 获取<p>RuleType: 1黑名单 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则</p>
 * @method void setRuleType(integer $RuleType) 设置<p>RuleType: 1黑名单 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method integer getCoverDuplicate() 获取<p>删除白名单冲突地址并继续添加/删除封禁列表冲突地址并继续添加；表示是否覆盖重复数据，1为覆盖，非1不覆盖，跳过重复数据</p>
 * @method void setCoverDuplicate(integer $CoverDuplicate) 设置<p>删除白名单冲突地址并继续添加/删除封禁列表冲突地址并继续添加；表示是否覆盖重复数据，1为覆盖，非1不覆盖，跳过重复数据</p>
 */
class CreateBlockIgnoreRuleNewRequest extends AbstractModel
{
    /**
     * @var array <p>非自定义类型规则列表</p>
     */
    public $Rules;

    /**
     * @var integer <p>RuleType: 1黑名单 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则</p>
     */
    public $RuleType;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var integer <p>删除白名单冲突地址并继续添加/删除封禁列表冲突地址并继续添加；表示是否覆盖重复数据，1为覆盖，非1不覆盖，跳过重复数据</p>
     */
    public $CoverDuplicate;

    /**
     * @param array $Rules <p>非自定义类型规则列表</p>
     * @param integer $RuleType <p>RuleType: 1黑名单 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     * @param integer $CoverDuplicate <p>删除白名单冲突地址并继续添加/删除封禁列表冲突地址并继续添加；表示是否覆盖重复数据，1为覆盖，非1不覆盖，跳过重复数据</p>
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
                $obj = new BanAndAllowRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("CoverDuplicate",$param) and $param["CoverDuplicate"] !== null) {
            $this->CoverDuplicate = $param["CoverDuplicate"];
        }
    }
}
