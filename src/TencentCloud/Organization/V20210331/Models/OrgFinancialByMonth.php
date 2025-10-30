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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按月获取组织财务信息
 *
 * @method integer getId() 获取记录ID。
 * @method void setId(integer $Id) 设置记录ID。
 * @method string getMonth() 获取月份，格式：yyyy-mm，示例：2021-01。
 * @method void setMonth(string $Month) 设置月份，格式：yyyy-mm，示例：2021-01。
 * @method float getTotalCost() 获取消耗金额，单元：元。
 * @method void setTotalCost(float $TotalCost) 设置消耗金额，单元：元。
 * @method string getGrowthRate() 获取比上月增长率%。正数增长，负数下降，空值无法统计。
 * @method void setGrowthRate(string $GrowthRate) 设置比上月增长率%。正数增长，负数下降，空值无法统计。
 */
class OrgFinancialByMonth extends AbstractModel
{
    /**
     * @var integer 记录ID。
     */
    public $Id;

    /**
     * @var string 月份，格式：yyyy-mm，示例：2021-01。
     */
    public $Month;

    /**
     * @var float 消耗金额，单元：元。
     */
    public $TotalCost;

    /**
     * @var string 比上月增长率%。正数增长，负数下降，空值无法统计。
     */
    public $GrowthRate;

    /**
     * @param integer $Id 记录ID。
     * @param string $Month 月份，格式：yyyy-mm，示例：2021-01。
     * @param float $TotalCost 消耗金额，单元：元。
     * @param string $GrowthRate 比上月增长率%。正数增长，负数下降，空值无法统计。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("GrowthRate",$param) and $param["GrowthRate"] !== null) {
            $this->GrowthRate = $param["GrowthRate"];
        }
    }
}
