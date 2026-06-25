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
 * Budget预算配置
 *
 * @method string getBudgetDuration() 获取<p>预算刷新周期。</p><p>枚举值：</p><ul><li>1d：按天刷新</li><li>7d：按周刷新</li><li>30d：按月刷新</li></ul><p>不传时默认30d。同一个Budget下每种刷新周期最多配置一次。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetDuration(string $BudgetDuration) 设置<p>预算刷新周期。</p><p>枚举值：</p><ul><li>1d：按天刷新</li><li>7d：按周刷新</li><li>30d：按月刷新</li></ul><p>不传时默认30d。同一个Budget下每种刷新周期最多配置一次。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBudgetResetAt() 获取<p>下一次刷新的时间</p>
 * @method void setBudgetResetAt(string $BudgetResetAt) 设置<p>下一次刷新的时间</p>
 * @method float getMaxBudget() 获取<p>最大预算。</p><p>单位：credit。取值需大于0且不超过10000000000；不传时默认100000。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxBudget(float $MaxBudget) 设置<p>最大预算。</p><p>单位：credit。取值需大于0且不超过10000000000；不传时默认100000。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BudgetConfig extends AbstractModel
{
    /**
     * @var string <p>预算刷新周期。</p><p>枚举值：</p><ul><li>1d：按天刷新</li><li>7d：按周刷新</li><li>30d：按月刷新</li></ul><p>不传时默认30d。同一个Budget下每种刷新周期最多配置一次。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetDuration;

    /**
     * @var string <p>下一次刷新的时间</p>
     */
    public $BudgetResetAt;

    /**
     * @var float <p>最大预算。</p><p>单位：credit。取值需大于0且不超过10000000000；不传时默认100000。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxBudget;

    /**
     * @param string $BudgetDuration <p>预算刷新周期。</p><p>枚举值：</p><ul><li>1d：按天刷新</li><li>7d：按周刷新</li><li>30d：按月刷新</li></ul><p>不传时默认30d。同一个Budget下每种刷新周期最多配置一次。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BudgetResetAt <p>下一次刷新的时间</p>
     * @param float $MaxBudget <p>最大预算。</p><p>单位：credit。取值需大于0且不超过10000000000；不传时默认100000。</p>
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
        if (array_key_exists("BudgetDuration",$param) and $param["BudgetDuration"] !== null) {
            $this->BudgetDuration = $param["BudgetDuration"];
        }

        if (array_key_exists("BudgetResetAt",$param) and $param["BudgetResetAt"] !== null) {
            $this->BudgetResetAt = $param["BudgetResetAt"];
        }

        if (array_key_exists("MaxBudget",$param) and $param["MaxBudget"] !== null) {
            $this->MaxBudget = $param["MaxBudget"];
        }
    }
}
