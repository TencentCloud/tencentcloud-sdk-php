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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Credit使用情况。该结构用于 CreditUsageSet 数组中的逐周期用量。
 *
 * @method string getBudgetDuration() 获取<p>Budget刷新周期。</p><p>枚举值：</p><ul><li>1d：按天刷新</li><li>7d：按周刷新</li><li>30d：按月刷新</li></ul><p>仅在 CreditUsageSet 数组元素中返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetDuration(string $BudgetDuration) 设置<p>Budget刷新周期。</p><p>枚举值：</p><ul><li>1d：按天刷新</li><li>7d：按周刷新</li><li>30d：按月刷新</li></ul><p>仅在 CreditUsageSet 数组元素中返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBudgetResetAt() 获取<p>下次刷新时间。</p><p>用户组关联Budget且Budget设置重置周期时返回；未关联Budget或未设置重置周期时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetResetAt(string $BudgetResetAt) 设置<p>下次刷新时间。</p><p>用户组关联Budget且Budget设置重置周期时返回；未关联Budget或未设置重置周期时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLimit() 获取<p>Credit上限。</p><p>用户组关联Budget且Budget设置最大预算时返回；未设置最大预算时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimit(float $Limit) 设置<p>Credit上限。</p><p>用户组关联Budget且Budget设置最大预算时返回；未设置最大预算时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUsed() 获取<p>用户组已使用的Credit数量。</p>
 * @method void setUsed(float $Used) 设置<p>用户组已使用的Credit数量。</p>
 */
class CreditUsage extends AbstractModel
{
    /**
     * @var string <p>Budget刷新周期。</p><p>枚举值：</p><ul><li>1d：按天刷新</li><li>7d：按周刷新</li><li>30d：按月刷新</li></ul><p>仅在 CreditUsageSet 数组元素中返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetDuration;

    /**
     * @var string <p>下次刷新时间。</p><p>用户组关联Budget且Budget设置重置周期时返回；未关联Budget或未设置重置周期时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetResetAt;

    /**
     * @var float <p>Credit上限。</p><p>用户组关联Budget且Budget设置最大预算时返回；未设置最大预算时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Limit;

    /**
     * @var float <p>用户组已使用的Credit数量。</p>
     */
    public $Used;

    /**
     * @param string $BudgetDuration <p>Budget刷新周期。</p><p>枚举值：</p><ul><li>1d：按天刷新</li><li>7d：按周刷新</li><li>30d：按月刷新</li></ul><p>仅在 CreditUsageSet 数组元素中返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BudgetResetAt <p>下次刷新时间。</p><p>用户组关联Budget且Budget设置重置周期时返回；未关联Budget或未设置重置周期时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Limit <p>Credit上限。</p><p>用户组关联Budget且Budget设置最大预算时返回；未设置最大预算时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Used <p>用户组已使用的Credit数量。</p>
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
        if (array_key_exists("BudgetDuration",$param) and $param["BudgetDuration"] !== null) {
            $this->BudgetDuration = $param["BudgetDuration"];
        }

        if (array_key_exists("BudgetResetAt",$param) and $param["BudgetResetAt"] !== null) {
            $this->BudgetResetAt = $param["BudgetResetAt"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
