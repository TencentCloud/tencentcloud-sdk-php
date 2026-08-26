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
 * LLM 审计规则对 LLM 审计系统规则的引用项
 *
 * @method string getSystemRuleID() 获取LLM 审计系统规则 ID（字符串）
 * @method void setSystemRuleID(string $SystemRuleID) 设置LLM 审计系统规则 ID（字符串）
 * @method string getSystemRuleName() 获取LLM 审计系统规则名称
 * @method void setSystemRuleName(string $SystemRuleName) 设置LLM 审计系统规则名称
 */
class TrafficSandboxLLMAuditRuleRef extends AbstractModel
{
    /**
     * @var string LLM 审计系统规则 ID（字符串）
     */
    public $SystemRuleID;

    /**
     * @var string LLM 审计系统规则名称
     */
    public $SystemRuleName;

    /**
     * @param string $SystemRuleID LLM 审计系统规则 ID（字符串）
     * @param string $SystemRuleName LLM 审计系统规则名称
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
        if (array_key_exists("SystemRuleID",$param) and $param["SystemRuleID"] !== null) {
            $this->SystemRuleID = $param["SystemRuleID"];
        }

        if (array_key_exists("SystemRuleName",$param) and $param["SystemRuleName"] !== null) {
            $this->SystemRuleName = $param["SystemRuleName"];
        }
    }
}
