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
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取数量，最大值为100
 * @method void setLimit(integer $Limit) 设置数量，最大值为100
 * @method string getPeriodType() 获取周期类型，byPayTime按扣费周期/byUsedTime按计费周期
 * @method void setPeriodType(string $PeriodType) 设置周期类型，byPayTime按扣费周期/byUsedTime按计费周期
 * @method string getMonth() 获取月份，格式为yyyy-mm
 * @method void setMonth(string $Month) 设置月份，格式为yyyy-mm
 * @method string getBeginTime() 获取周期开始时间，格式为Y-m-d H:i:s，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传
 * @method void setBeginTime(string $BeginTime) 设置周期开始时间，格式为Y-m-d H:i:s，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传
 * @method string getEndTime() 获取周期结束时间，格式为Y-m-d H:i:s，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传
 * @method void setEndTime(string $EndTime) 设置周期结束时间，格式为Y-m-d H:i:s，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传
 */

/**
 *DescribeBillDetail请求参数结构体
 */
class DescribeBillDetailRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 数量，最大值为100
     */
    public $Limit;

    /**
     * @var string 周期类型，byPayTime按扣费周期/byUsedTime按计费周期
     */
    public $PeriodType;

    /**
     * @var string 月份，格式为yyyy-mm
     */
    public $Month;

    /**
     * @var string 周期开始时间，格式为Y-m-d H:i:s，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传
     */
    public $BeginTime;

    /**
     * @var string 周期结束时间，格式为Y-m-d H:i:s，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传
     */
    public $EndTime;
    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 数量，最大值为100
     * @param string $PeriodType 周期类型，byPayTime按扣费周期/byUsedTime按计费周期
     * @param string $Month 月份，格式为yyyy-mm
     * @param string $BeginTime 周期开始时间，格式为Y-m-d H:i:s，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传
     * @param string $EndTime 周期结束时间，格式为Y-m-d H:i:s，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
