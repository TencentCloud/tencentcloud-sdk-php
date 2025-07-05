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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分账趋势图详情数据
 *
 * @method string getMonth() 获取账单月份
 * @method void setMonth(string $Month) 设置账单月份
 * @method string getName() 获取账单月份展示名称
 * @method void setName(string $Name) 设置账单月份展示名称
 * @method string getRealTotalCost() 获取合计费用(折后总额)：分账单元总费用，归集费用(折后总额) + 分摊费用(折后总额)
 * @method void setRealTotalCost(string $RealTotalCost) 设置合计费用(折后总额)：分账单元总费用，归集费用(折后总额) + 分摊费用(折后总额)
 */
class AllocationBillTrendDetail extends AbstractModel
{
    /**
     * @var string 账单月份
     */
    public $Month;

    /**
     * @var string 账单月份展示名称
     */
    public $Name;

    /**
     * @var string 合计费用(折后总额)：分账单元总费用，归集费用(折后总额) + 分摊费用(折后总额)
     */
    public $RealTotalCost;

    /**
     * @param string $Month 账单月份
     * @param string $Name 账单月份展示名称
     * @param string $RealTotalCost 合计费用(折后总额)：分账单元总费用，归集费用(折后总额) + 分摊费用(折后总额)
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }
    }
}
