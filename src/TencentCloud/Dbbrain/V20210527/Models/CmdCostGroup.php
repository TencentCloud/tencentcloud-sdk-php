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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * redis延迟分布区间详情
 *
 * @method float getPercent() 获取该延迟区间内命令数占总命令数百分比
 * @method void setPercent(float $Percent) 设置该延迟区间内命令数占总命令数百分比
 * @method string getCostUpperLimit() 获取延迟区间上界，单位ms
 * @method void setCostUpperLimit(string $CostUpperLimit) 设置延迟区间上界，单位ms
 * @method string getCostLowerLimit() 获取延迟区间下界，单位ms
 * @method void setCostLowerLimit(string $CostLowerLimit) 设置延迟区间下界，单位ms
 * @method integer getCount() 获取该延迟区间内命令次数
 * @method void setCount(integer $Count) 设置该延迟区间内命令次数
 */
class CmdCostGroup extends AbstractModel
{
    /**
     * @var float 该延迟区间内命令数占总命令数百分比
     */
    public $Percent;

    /**
     * @var string 延迟区间上界，单位ms
     */
    public $CostUpperLimit;

    /**
     * @var string 延迟区间下界，单位ms
     */
    public $CostLowerLimit;

    /**
     * @var integer 该延迟区间内命令次数
     */
    public $Count;

    /**
     * @param float $Percent 该延迟区间内命令数占总命令数百分比
     * @param string $CostUpperLimit 延迟区间上界，单位ms
     * @param string $CostLowerLimit 延迟区间下界，单位ms
     * @param integer $Count 该延迟区间内命令次数
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
        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CostUpperLimit",$param) and $param["CostUpperLimit"] !== null) {
            $this->CostUpperLimit = $param["CostUpperLimit"];
        }

        if (array_key_exists("CostLowerLimit",$param) and $param["CostLowerLimit"] !== null) {
            $this->CostLowerLimit = $param["CostLowerLimit"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
