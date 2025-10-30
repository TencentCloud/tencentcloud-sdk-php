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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线自定规则ID和名字
 *
 * @method integer getRuleId() 获取自定义规则ID　
 * @method void setRuleId(integer $RuleId) 设置自定义规则ID　
 * @method string getRuleName() 获取自定义规则名字
 * @method void setRuleName(string $RuleName) 设置自定义规则名字
 */
class BaselineCustomRuleIdName extends AbstractModel
{
    /**
     * @var integer 自定义规则ID　
     */
    public $RuleId;

    /**
     * @var string 自定义规则名字
     */
    public $RuleName;

    /**
     * @param integer $RuleId 自定义规则ID　
     * @param string $RuleName 自定义规则名字
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
