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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tcc Partition分区定义
 *
 * @method string getStrategy() 获取<p>转换策略</p>
 * @method void setStrategy(string $Strategy) 设置<p>转换策略</p>
 * @method SingleFieldPartitioning getYearPartitioning() 获取<p>按年分区策略</p>
 * @method void setYearPartitioning(SingleFieldPartitioning $YearPartitioning) 设置<p>按年分区策略</p>
 * @method SingleFieldPartitioning getMonthPartitioning() 获取<p>按月分区策略</p>
 * @method void setMonthPartitioning(SingleFieldPartitioning $MonthPartitioning) 设置<p>按月分区策略</p>
 * @method SingleFieldPartitioning getDayPartitioning() 获取<p>按天分区策略</p>
 * @method void setDayPartitioning(SingleFieldPartitioning $DayPartitioning) 设置<p>按天分区策略</p>
 * @method SingleFieldPartitioning getHourPartitioning() 获取<p>按小时分区策略</p>
 * @method void setHourPartitioning(SingleFieldPartitioning $HourPartitioning) 设置<p>按小时分区策略</p>
 * @method SingleFieldPartitioning getIdentityPartitioning() 获取<p>按字段分区策略</p>
 * @method void setIdentityPartitioning(SingleFieldPartitioning $IdentityPartitioning) 设置<p>按字段分区策略</p>
 * @method ListPartitioning getListPartitioning() 获取<p>列表分区策略</p>
 * @method void setListPartitioning(ListPartitioning $ListPartitioning) 设置<p>列表分区策略</p>
 * @method RangePartitioning getRangePartitioning() 获取<p>范围分区策略</p>
 * @method void setRangePartitioning(RangePartitioning $RangePartitioning) 设置<p>范围分区策略</p>
 * @method BucketPartitioning getBucketPartitioning() 获取<p>分桶分区策略</p>
 * @method void setBucketPartitioning(BucketPartitioning $BucketPartitioning) 设置<p>分桶分区策略</p>
 * @method TruncatePartitioning getTruncatePartitioning() 获取<p>截断分区策略</p>
 * @method void setTruncatePartitioning(TruncatePartitioning $TruncatePartitioning) 设置<p>截断分区策略</p>
 */
class Partitioning extends AbstractModel
{
    /**
     * @var string <p>转换策略</p>
     */
    public $Strategy;

    /**
     * @var SingleFieldPartitioning <p>按年分区策略</p>
     */
    public $YearPartitioning;

    /**
     * @var SingleFieldPartitioning <p>按月分区策略</p>
     */
    public $MonthPartitioning;

    /**
     * @var SingleFieldPartitioning <p>按天分区策略</p>
     */
    public $DayPartitioning;

    /**
     * @var SingleFieldPartitioning <p>按小时分区策略</p>
     */
    public $HourPartitioning;

    /**
     * @var SingleFieldPartitioning <p>按字段分区策略</p>
     */
    public $IdentityPartitioning;

    /**
     * @var ListPartitioning <p>列表分区策略</p>
     */
    public $ListPartitioning;

    /**
     * @var RangePartitioning <p>范围分区策略</p>
     */
    public $RangePartitioning;

    /**
     * @var BucketPartitioning <p>分桶分区策略</p>
     */
    public $BucketPartitioning;

    /**
     * @var TruncatePartitioning <p>截断分区策略</p>
     */
    public $TruncatePartitioning;

    /**
     * @param string $Strategy <p>转换策略</p>
     * @param SingleFieldPartitioning $YearPartitioning <p>按年分区策略</p>
     * @param SingleFieldPartitioning $MonthPartitioning <p>按月分区策略</p>
     * @param SingleFieldPartitioning $DayPartitioning <p>按天分区策略</p>
     * @param SingleFieldPartitioning $HourPartitioning <p>按小时分区策略</p>
     * @param SingleFieldPartitioning $IdentityPartitioning <p>按字段分区策略</p>
     * @param ListPartitioning $ListPartitioning <p>列表分区策略</p>
     * @param RangePartitioning $RangePartitioning <p>范围分区策略</p>
     * @param BucketPartitioning $BucketPartitioning <p>分桶分区策略</p>
     * @param TruncatePartitioning $TruncatePartitioning <p>截断分区策略</p>
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
        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("YearPartitioning",$param) and $param["YearPartitioning"] !== null) {
            $this->YearPartitioning = new SingleFieldPartitioning();
            $this->YearPartitioning->deserialize($param["YearPartitioning"]);
        }

        if (array_key_exists("MonthPartitioning",$param) and $param["MonthPartitioning"] !== null) {
            $this->MonthPartitioning = new SingleFieldPartitioning();
            $this->MonthPartitioning->deserialize($param["MonthPartitioning"]);
        }

        if (array_key_exists("DayPartitioning",$param) and $param["DayPartitioning"] !== null) {
            $this->DayPartitioning = new SingleFieldPartitioning();
            $this->DayPartitioning->deserialize($param["DayPartitioning"]);
        }

        if (array_key_exists("HourPartitioning",$param) and $param["HourPartitioning"] !== null) {
            $this->HourPartitioning = new SingleFieldPartitioning();
            $this->HourPartitioning->deserialize($param["HourPartitioning"]);
        }

        if (array_key_exists("IdentityPartitioning",$param) and $param["IdentityPartitioning"] !== null) {
            $this->IdentityPartitioning = new SingleFieldPartitioning();
            $this->IdentityPartitioning->deserialize($param["IdentityPartitioning"]);
        }

        if (array_key_exists("ListPartitioning",$param) and $param["ListPartitioning"] !== null) {
            $this->ListPartitioning = new ListPartitioning();
            $this->ListPartitioning->deserialize($param["ListPartitioning"]);
        }

        if (array_key_exists("RangePartitioning",$param) and $param["RangePartitioning"] !== null) {
            $this->RangePartitioning = new RangePartitioning();
            $this->RangePartitioning->deserialize($param["RangePartitioning"]);
        }

        if (array_key_exists("BucketPartitioning",$param) and $param["BucketPartitioning"] !== null) {
            $this->BucketPartitioning = new BucketPartitioning();
            $this->BucketPartitioning->deserialize($param["BucketPartitioning"]);
        }

        if (array_key_exists("TruncatePartitioning",$param) and $param["TruncatePartitioning"] !== null) {
            $this->TruncatePartitioning = new TruncatePartitioning();
            $this->TruncatePartitioning->deserialize($param["TruncatePartitioning"]);
        }
    }
}
