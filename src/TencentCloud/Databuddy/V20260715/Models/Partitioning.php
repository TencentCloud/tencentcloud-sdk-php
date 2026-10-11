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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分区结构
 *
 * @method string getStrategy() 获取转换策略
 * @method void setStrategy(string $Strategy) 设置转换策略
 * @method integer getNumBuckets() 获取分桶策略参数
 * @method void setNumBuckets(integer $NumBuckets) 设置分桶策略参数
 * @method array getFieldNames() 获取字段名称
 * @method void setFieldNames(array $FieldNames) 设置字段名称
 * @method integer getWidth() 获取策略参数
 * @method void setWidth(integer $Width) 设置策略参数
 * @method array getFieldName() 获取字段名称
 * @method void setFieldName(array $FieldName) 设置字段名称
 * @method SingleFieldPartitioning getYearPartitioning() 获取按年分区策略
 * @method void setYearPartitioning(SingleFieldPartitioning $YearPartitioning) 设置按年分区策略
 * @method SingleFieldPartitioning getMonthPartitioning() 获取按月分区策略
 * @method void setMonthPartitioning(SingleFieldPartitioning $MonthPartitioning) 设置按月分区策略
 * @method SingleFieldPartitioning getDayPartitioning() 获取按天分区策略
 * @method void setDayPartitioning(SingleFieldPartitioning $DayPartitioning) 设置按天分区策略
 * @method SingleFieldPartitioning getHourPartitioning() 获取按小时分区策略
 * @method void setHourPartitioning(SingleFieldPartitioning $HourPartitioning) 设置按小时分区策略
 * @method SingleFieldPartitioning getIdentityPartitioning() 获取按字段分区策略
 * @method void setIdentityPartitioning(SingleFieldPartitioning $IdentityPartitioning) 设置按字段分区策略
 * @method ListPartitioning getListPartitioning() 获取列表分区策略
 * @method void setListPartitioning(ListPartitioning $ListPartitioning) 设置列表分区策略
 * @method RangePartitioning getRangePartitioning() 获取范围分区策略
 * @method void setRangePartitioning(RangePartitioning $RangePartitioning) 设置范围分区策略
 * @method BucketPartitioning getBucketPartitioning() 获取分桶分区策略
 * @method void setBucketPartitioning(BucketPartitioning $BucketPartitioning) 设置分桶分区策略
 * @method TruncatePartitioning getTruncatePartitioning() 获取截断分区策略
 * @method void setTruncatePartitioning(TruncatePartitioning $TruncatePartitioning) 设置截断分区策略
 */
class Partitioning extends AbstractModel
{
    /**
     * @var string 转换策略
     */
    public $Strategy;

    /**
     * @var integer 分桶策略参数
     */
    public $NumBuckets;

    /**
     * @var array 字段名称
     */
    public $FieldNames;

    /**
     * @var integer 策略参数
     */
    public $Width;

    /**
     * @var array 字段名称
     */
    public $FieldName;

    /**
     * @var SingleFieldPartitioning 按年分区策略
     */
    public $YearPartitioning;

    /**
     * @var SingleFieldPartitioning 按月分区策略
     */
    public $MonthPartitioning;

    /**
     * @var SingleFieldPartitioning 按天分区策略
     */
    public $DayPartitioning;

    /**
     * @var SingleFieldPartitioning 按小时分区策略
     */
    public $HourPartitioning;

    /**
     * @var SingleFieldPartitioning 按字段分区策略
     */
    public $IdentityPartitioning;

    /**
     * @var ListPartitioning 列表分区策略
     */
    public $ListPartitioning;

    /**
     * @var RangePartitioning 范围分区策略
     */
    public $RangePartitioning;

    /**
     * @var BucketPartitioning 分桶分区策略
     */
    public $BucketPartitioning;

    /**
     * @var TruncatePartitioning 截断分区策略
     */
    public $TruncatePartitioning;

    /**
     * @param string $Strategy 转换策略
     * @param integer $NumBuckets 分桶策略参数
     * @param array $FieldNames 字段名称
     * @param integer $Width 策略参数
     * @param array $FieldName 字段名称
     * @param SingleFieldPartitioning $YearPartitioning 按年分区策略
     * @param SingleFieldPartitioning $MonthPartitioning 按月分区策略
     * @param SingleFieldPartitioning $DayPartitioning 按天分区策略
     * @param SingleFieldPartitioning $HourPartitioning 按小时分区策略
     * @param SingleFieldPartitioning $IdentityPartitioning 按字段分区策略
     * @param ListPartitioning $ListPartitioning 列表分区策略
     * @param RangePartitioning $RangePartitioning 范围分区策略
     * @param BucketPartitioning $BucketPartitioning 分桶分区策略
     * @param TruncatePartitioning $TruncatePartitioning 截断分区策略
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

        if (array_key_exists("NumBuckets",$param) and $param["NumBuckets"] !== null) {
            $this->NumBuckets = $param["NumBuckets"];
        }

        if (array_key_exists("FieldNames",$param) and $param["FieldNames"] !== null) {
            $this->FieldNames = $param["FieldNames"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
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
