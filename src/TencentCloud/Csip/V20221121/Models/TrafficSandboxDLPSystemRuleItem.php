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
 * DLP 系统规则数据结构
 *
 * @method integer getID() 获取系统规则 ID
 * @method void setID(integer $ID) 设置系统规则 ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getRuleContent() 获取规则内容，Hyperscan 兼容的正则表达式（仅供展示给用户查看，不可编辑）
 * @method void setRuleContent(string $RuleContent) 设置规则内容，Hyperscan 兼容的正则表达式（仅供展示给用户查看，不可编辑）
 */
class TrafficSandboxDLPSystemRuleItem extends AbstractModel
{
    /**
     * @var integer 系统规则 ID
     */
    public $ID;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 规则内容，Hyperscan 兼容的正则表达式（仅供展示给用户查看，不可编辑）
     */
    public $RuleContent;

    /**
     * @param integer $ID 系统规则 ID
     * @param string $RuleName 规则名称
     * @param string $RuleContent 规则内容，Hyperscan 兼容的正则表达式（仅供展示给用户查看，不可编辑）
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }
    }
}
