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
 * ModifyL7AccRulePriority请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getRuleIds() 获取站点 ID 下完整的规则 ID 列表，规则 ID 列表可以通过 [查询七层加速规则](https://cloud.tencent.com/document/product/1552/115820) 获取，最终优先级顺序将调整成规则 ID 列表的顺序，从前往后依次执行。
 * @method void setRuleIds(array $RuleIds) 设置站点 ID 下完整的规则 ID 列表，规则 ID 列表可以通过 [查询七层加速规则](https://cloud.tencent.com/document/product/1552/115820) 获取，最终优先级顺序将调整成规则 ID 列表的顺序，从前往后依次执行。
 */
class ModifyL7AccRulePriorityRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 站点 ID 下完整的规则 ID 列表，规则 ID 列表可以通过 [查询七层加速规则](https://cloud.tencent.com/document/product/1552/115820) 获取，最终优先级顺序将调整成规则 ID 列表的顺序，从前往后依次执行。
     */
    public $RuleIds;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $RuleIds 站点 ID 下完整的规则 ID 列表，规则 ID 列表可以通过 [查询七层加速规则](https://cloud.tencent.com/document/product/1552/115820) 获取，最终优先级顺序将调整成规则 ID 列表的顺序，从前往后依次执行。
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

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }
    }
}
