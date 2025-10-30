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
 * ModifyBlockIgnoreRuleNew请求参数结构体
 *
 * @method BanAndAllowRule getRule() 获取规则
 * @method void setRule(BanAndAllowRule $Rule) 设置规则
 * @method integer getRuleType() 获取RuleType: 1放通列表 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则
 * @method void setRuleType(integer $RuleType) 设置RuleType: 1放通列表 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则
 */
class ModifyBlockIgnoreRuleNewRequest extends AbstractModel
{
    /**
     * @var BanAndAllowRule 规则
     */
    public $Rule;

    /**
     * @var integer RuleType: 1放通列表 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则
     */
    public $RuleType;

    /**
     * @param BanAndAllowRule $Rule 规则
     * @param integer $RuleType RuleType: 1放通列表 2外部IP 3域名 4情报 5资产 6自定义规则  7入侵防御规则
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
            $this->Rule = new BanAndAllowRule();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
