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
 * DLP 规则内容。子规则 ID 由服务端内部管理不对外暴露，作用域由后端默认应用到全部范围
 *
 * @method string getRuleName() 获取子规则名称
入参限制：长度 1-128
 * @method void setRuleName(string $RuleName) 设置子规则名称
入参限制：长度 1-128
 * @method string getRuleContent() 获取规则内容
入参限制：正则表达式，最大长度 2048
 * @method void setRuleContent(string $RuleContent) 设置规则内容
入参限制：正则表达式，最大长度 2048
 */
class TrafficSandboxDLPRuleContentItem extends AbstractModel
{
    /**
     * @var string 子规则名称
入参限制：长度 1-128
     */
    public $RuleName;

    /**
     * @var string 规则内容
入参限制：正则表达式，最大长度 2048
     */
    public $RuleContent;

    /**
     * @param string $RuleName 子规则名称
入参限制：长度 1-128
     * @param string $RuleContent 规则内容
入参限制：正则表达式，最大长度 2048
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
