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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外发内容检测行（名称 + 正则）
 *
 * @method string getRuleName() 获取子规则名称
 * @method void setRuleName(string $RuleName) 设置子规则名称
 * @method string getRuleContent() 获取正则内容（Hyperscan 兼容）
 * @method void setRuleContent(string $RuleContent) 设置正则内容（Hyperscan 兼容）
 */
class TrafficSandboxDLPTrafficRuleItem extends AbstractModel
{
    /**
     * @var string 子规则名称
     */
    public $RuleName;

    /**
     * @var string 正则内容（Hyperscan 兼容）
     */
    public $RuleContent;

    /**
     * @param string $RuleName 子规则名称
     * @param string $RuleContent 正则内容（Hyperscan 兼容）
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }
    }
}
