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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统计分析维度下的统计数据详情
 *
 * @method string getName() 获取统计维度的值。
 * @method void setName(string $Name) 设置统计维度的值。
 * @method float getTimeAvg() 获取平均时间。
 * @method void setTimeAvg(float $TimeAvg) 设置平均时间。
 * @method float getTimeSum() 获取总时间。
 * @method void setTimeSum(float $TimeSum) 设置总时间。
 * @method integer getCount() 获取数量。
 * @method void setCount(integer $Count) 设置数量。
 */
class StatisticDataInfo extends AbstractModel
{
    /**
     * @var string 统计维度的值。
     */
    public $Name;

    /**
     * @var float 平均时间。
     */
    public $TimeAvg;

    /**
     * @var float 总时间。
     */
    public $TimeSum;

    /**
     * @var integer 数量。
     */
    public $Count;

    /**
     * @param string $Name 统计维度的值。
     * @param float $TimeAvg 平均时间。
     * @param float $TimeSum 总时间。
     * @param integer $Count 数量。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TimeAvg",$param) and $param["TimeAvg"] !== null) {
            $this->TimeAvg = $param["TimeAvg"];
        }

        if (array_key_exists("TimeSum",$param) and $param["TimeSum"] !== null) {
            $this->TimeSum = $param["TimeSum"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
