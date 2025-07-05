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
 * ModifyBlockIgnoreRule请求参数结构体
 *
 * @method IntrusionDefenseRule getRule() 获取规则列表
 * @method void setRule(IntrusionDefenseRule $Rule) 设置规则列表
 * @method integer getRuleType() 获取规则类型，1封禁，2放通
 * @method void setRuleType(integer $RuleType) 设置规则类型，1封禁，2放通
 */
class ModifyBlockIgnoreRuleRequest extends AbstractModel
{
    /**
     * @var IntrusionDefenseRule 规则列表
     */
    public $Rule;

    /**
     * @var integer 规则类型，1封禁，2放通
     */
    public $RuleType;

    /**
     * @param IntrusionDefenseRule $Rule 规则列表
     * @param integer $RuleType 规则类型，1封禁，2放通
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
            $this->Rule = new IntrusionDefenseRule();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
