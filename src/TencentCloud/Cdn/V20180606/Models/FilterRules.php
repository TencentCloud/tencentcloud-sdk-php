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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防盗刷配置规则
 *
 * @method string getFilterType() 获取封禁类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterType(string $FilterType) 设置封禁类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取封禁规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置封禁规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRulePaths() 获取封禁规则路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRulePaths(array $RulePaths) 设置封禁规则路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class FilterRules extends AbstractModel
{
    /**
     * @var string 封禁类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterType;

    /**
     * @var string 封禁规则类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var array 封禁规则路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RulePaths;

    /**
     * @param string $FilterType 封禁类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType 封禁规则类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RulePaths 封禁规则路径
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }
    }
}
