<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 分账账单趋势图平均值
 *
 * @method string getBeginMonth() 获取起始月份
 * @method void setBeginMonth(string $BeginMonth) 设置起始月份
 * @method string getEndMonth() 获取结束月份
 * @method void setEndMonth(string $EndMonth) 设置结束月份
 * @method string getRealTotalCost() 获取合计费用(折后总额)平均值
 * @method void setRealTotalCost(string $RealTotalCost) 设置合计费用(折后总额)平均值
 */
class AllocationAverageData extends AbstractModel
{
    /**
     * @var string 起始月份
     */
    public $BeginMonth;

    /**
     * @var string 结束月份
     */
    public $EndMonth;

    /**
     * @var string 合计费用(折后总额)平均值
     */
    public $RealTotalCost;

    /**
     * @param string $BeginMonth 起始月份
     * @param string $EndMonth 结束月份
     * @param string $RealTotalCost 合计费用(折后总额)平均值
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
        if (array_key_exists("BeginMonth",$param) and $param["BeginMonth"] !== null) {
            $this->BeginMonth = $param["BeginMonth"];
        }

        if (array_key_exists("EndMonth",$param) and $param["EndMonth"] !== null) {
            $this->EndMonth = $param["EndMonth"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }
    }
}
