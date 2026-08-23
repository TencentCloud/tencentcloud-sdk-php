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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像扫描周期配置
 *
 * @method string getCycleType() 获取<p>周期类型</p><p>枚举值：</p><ul><li>DAILY： 每天</li><li>WEEKLY： 每周</li><li>MONTHLY： 每月</li></ul>
 * @method void setCycleType(string $CycleType) 设置<p>周期类型</p><p>枚举值：</p><ul><li>DAILY： 每天</li><li>WEEKLY： 每周</li><li>MONTHLY： 每月</li></ul>
 * @method array getCycleDays() 获取<p>具体日期。周类型时: 1-7 (周一到周日); 月类型时: 1-31; 日类型时不生效。</p>
 * @method void setCycleDays(array $CycleDays) 设置<p>具体日期。周类型时: 1-7 (周一到周日); 月类型时: 1-31; 日类型时不生效。</p>
 * @method string getStartTime() 获取<p>扫描开始时间</p><p>参数格式：hh:mm</p>
 * @method void setStartTime(string $StartTime) 设置<p>扫描开始时间</p><p>参数格式：hh:mm</p>
 * @method string getTimezone() 获取<p>时区</p>
 * @method void setTimezone(string $Timezone) 设置<p>时区</p>
 */
class ImageScanScheduleConfig extends AbstractModel
{
    /**
     * @var string <p>周期类型</p><p>枚举值：</p><ul><li>DAILY： 每天</li><li>WEEKLY： 每周</li><li>MONTHLY： 每月</li></ul>
     */
    public $CycleType;

    /**
     * @var array <p>具体日期。周类型时: 1-7 (周一到周日); 月类型时: 1-31; 日类型时不生效。</p>
     */
    public $CycleDays;

    /**
     * @var string <p>扫描开始时间</p><p>参数格式：hh:mm</p>
     */
    public $StartTime;

    /**
     * @var string <p>时区</p>
     */
    public $Timezone;

    /**
     * @param string $CycleType <p>周期类型</p><p>枚举值：</p><ul><li>DAILY： 每天</li><li>WEEKLY： 每周</li><li>MONTHLY： 每月</li></ul>
     * @param array $CycleDays <p>具体日期。周类型时: 1-7 (周一到周日); 月类型时: 1-31; 日类型时不生效。</p>
     * @param string $StartTime <p>扫描开始时间</p><p>参数格式：hh:mm</p>
     * @param string $Timezone <p>时区</p>
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
        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleDays",$param) and $param["CycleDays"] !== null) {
            $this->CycleDays = $param["CycleDays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }
    }
}
