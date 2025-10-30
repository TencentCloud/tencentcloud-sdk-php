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
 * 分账账单趋势图
 *
 * @method AllocationAverageData getAverage() 获取费用平均信息
 * @method void setAverage(AllocationAverageData $Average) 设置费用平均信息
 */
class AllocationStat extends AbstractModel
{
    /**
     * @var AllocationAverageData 费用平均信息
     */
    public $Average;

    /**
     * @param AllocationAverageData $Average 费用平均信息
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
        if (array_key_exists("Average",$param) and $param["Average"] !== null) {
            $this->Average = new AllocationAverageData();
            $this->Average->deserialize($param["Average"]);
        }
    }
}
