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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 月份日期信息
 *
 * @method integer getMonth() 获取月份信息
 * @method void setMonth(integer $Month) 设置月份信息
 * @method integer getDay() 获取日期信息
 * @method void setDay(integer $Day) 设置日期信息
 */
class MonthDay extends AbstractModel
{
    /**
     * @var integer 月份信息
     */
    public $Month;

    /**
     * @var integer 日期信息
     */
    public $Day;

    /**
     * @param integer $Month 月份信息
     * @param integer $Day 日期信息
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

        if (array_key_exists("Day",$param) and $param["Day"] !== null) {
            $this->Day = $param["Day"];
        }
    }
}
