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
 * DescribeBillAdjustInfo请求参数结构体
 *
 * @method string getMonth() 获取格式：yyyy-MM
账单月份，month和timeFrom&timeTo必传一个，如果有传timeFrom&timeTo则month字段无效
 * @method void setMonth(string $Month) 设置格式：yyyy-MM
账单月份，month和timeFrom&timeTo必传一个，如果有传timeFrom&timeTo则month字段无效
 * @method string getTimeFrom() 获取格式：yyyy-MM-dd
开始时间，month和timeFrom&timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据
 * @method void setTimeFrom(string $TimeFrom) 设置格式：yyyy-MM-dd
开始时间，month和timeFrom&timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据
 * @method string getTimeTo() 获取格式：yyyy-MM-dd
截止时间，month和timeFrom&timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据
 * @method void setTimeTo(string $TimeTo) 设置格式：yyyy-MM-dd
截止时间，month和timeFrom&timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据
 */
class DescribeBillAdjustInfoRequest extends AbstractModel
{
    /**
     * @var string 格式：yyyy-MM
账单月份，month和timeFrom&timeTo必传一个，如果有传timeFrom&timeTo则month字段无效
     */
    public $Month;

    /**
     * @var string 格式：yyyy-MM-dd
开始时间，month和timeFrom&timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据
     */
    public $TimeFrom;

    /**
     * @var string 格式：yyyy-MM-dd
截止时间，month和timeFrom&timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据
     */
    public $TimeTo;

    /**
     * @param string $Month 格式：yyyy-MM
账单月份，month和timeFrom&timeTo必传一个，如果有传timeFrom&timeTo则month字段无效
     * @param string $TimeFrom 格式：yyyy-MM-dd
开始时间，month和timeFrom&timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据
     * @param string $TimeTo 格式：yyyy-MM-dd
截止时间，month和timeFrom&timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据
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

        if (array_key_exists("TimeFrom",$param) and $param["TimeFrom"] !== null) {
            $this->TimeFrom = $param["TimeFrom"];
        }

        if (array_key_exists("TimeTo",$param) and $param["TimeTo"] !== null) {
            $this->TimeTo = $param["TimeTo"];
        }
    }
}
