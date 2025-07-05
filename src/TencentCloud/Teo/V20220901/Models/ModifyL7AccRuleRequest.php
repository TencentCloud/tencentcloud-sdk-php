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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyL7AccRule请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method RuleEngineItem getRule() 获取需要修改的规则。您可以先通过 DescribeL7AccRules 接口来获取需要修改的规则的 Ruleid，然后传入修改后的规则内容，原规则内容会被覆盖式更新。
 * @method void setRule(RuleEngineItem $Rule) 设置需要修改的规则。您可以先通过 DescribeL7AccRules 接口来获取需要修改的规则的 Ruleid，然后传入修改后的规则内容，原规则内容会被覆盖式更新。
 */
class ModifyL7AccRuleRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var RuleEngineItem 需要修改的规则。您可以先通过 DescribeL7AccRules 接口来获取需要修改的规则的 Ruleid，然后传入修改后的规则内容，原规则内容会被覆盖式更新。
     */
    public $Rule;

    /**
     * @param string $ZoneId 站点 ID。
     * @param RuleEngineItem $Rule 需要修改的规则。您可以先通过 DescribeL7AccRules 接口来获取需要修改的规则的 Ruleid，然后传入修改后的规则内容，原规则内容会被覆盖式更新。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new RuleEngineItem();
            $this->Rule->deserialize($param["Rule"]);
        }
    }
}
