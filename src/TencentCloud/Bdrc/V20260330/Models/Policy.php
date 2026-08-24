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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份的执行策略详情
 *
 * @method array getDayOfWeek() 获取选定周一到周日中需要创建备份的日期，取值范围：[0, 6]。0表示周日触发，1表示周一触发，依次类推。
 * @method void setDayOfWeek(array $DayOfWeek) 设置选定周一到周日中需要创建备份的日期，取值范围：[0, 6]。0表示周日触发，1表示周一触发，依次类推。
 * @method array getHour() 获取指定定期备份策略的触发时间。单位为小时，取值范围：[0, 23]。00:00 ~ 23:00 共 24 个时间点可选，1表示 01:00，依此类推。
 * @method void setHour(array $Hour) 设置指定定期备份策略的触发时间。单位为小时，取值范围：[0, 23]。00:00 ~ 23:00 共 24 个时间点可选，1表示 01:00，依此类推。
 * @method array getDayOfMonth() 获取指定每月从月初到月底需要触发定期备份的日期,取值范围：[1, 31]，1-31分别表示每月的具体日期，比如5表示每月的5号。注：若设置29、30、31等部分月份不存在的日期，则对应不存在日期的月份会跳过不打定期备份。
 * @method void setDayOfMonth(array $DayOfMonth) 设置指定每月从月初到月底需要触发定期备份的日期,取值范围：[1, 31]，1-31分别表示每月的具体日期，比如5表示每月的5号。注：若设置29、30、31等部分月份不存在的日期，则对应不存在日期的月份会跳过不打定期备份。
 * @method integer getIntervalDays() 获取指定创建定期备份的间隔天数，取值范围：[1, 365]，例如设置为5，则间隔5天即触发定期备份创建。注：当选择按天备份时，理论上第一次备份的时间为备份策略创建当天。如果当天备份策略创建的时间已经晚于设置的备份时间，那么将会等到第二个备份周期再进行第一次备份。
 * @method void setIntervalDays(integer $IntervalDays) 设置指定创建定期备份的间隔天数，取值范围：[1, 365]，例如设置为5，则间隔5天即触发定期备份创建。注：当选择按天备份时，理论上第一次备份的时间为备份策略创建当天。如果当天备份策略创建的时间已经晚于设置的备份时间，那么将会等到第二个备份周期再进行第一次备份。
 */
class Policy extends AbstractModel
{
    /**
     * @var array 选定周一到周日中需要创建备份的日期，取值范围：[0, 6]。0表示周日触发，1表示周一触发，依次类推。
     */
    public $DayOfWeek;

    /**
     * @var array 指定定期备份策略的触发时间。单位为小时，取值范围：[0, 23]。00:00 ~ 23:00 共 24 个时间点可选，1表示 01:00，依此类推。
     */
    public $Hour;

    /**
     * @var array 指定每月从月初到月底需要触发定期备份的日期,取值范围：[1, 31]，1-31分别表示每月的具体日期，比如5表示每月的5号。注：若设置29、30、31等部分月份不存在的日期，则对应不存在日期的月份会跳过不打定期备份。
     */
    public $DayOfMonth;

    /**
     * @var integer 指定创建定期备份的间隔天数，取值范围：[1, 365]，例如设置为5，则间隔5天即触发定期备份创建。注：当选择按天备份时，理论上第一次备份的时间为备份策略创建当天。如果当天备份策略创建的时间已经晚于设置的备份时间，那么将会等到第二个备份周期再进行第一次备份。
     */
    public $IntervalDays;

    /**
     * @param array $DayOfWeek 选定周一到周日中需要创建备份的日期，取值范围：[0, 6]。0表示周日触发，1表示周一触发，依次类推。
     * @param array $Hour 指定定期备份策略的触发时间。单位为小时，取值范围：[0, 23]。00:00 ~ 23:00 共 24 个时间点可选，1表示 01:00，依此类推。
     * @param array $DayOfMonth 指定每月从月初到月底需要触发定期备份的日期,取值范围：[1, 31]，1-31分别表示每月的具体日期，比如5表示每月的5号。注：若设置29、30、31等部分月份不存在的日期，则对应不存在日期的月份会跳过不打定期备份。
     * @param integer $IntervalDays 指定创建定期备份的间隔天数，取值范围：[1, 365]，例如设置为5，则间隔5天即触发定期备份创建。注：当选择按天备份时，理论上第一次备份的时间为备份策略创建当天。如果当天备份策略创建的时间已经晚于设置的备份时间，那么将会等到第二个备份周期再进行第一次备份。
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
        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("IntervalDays",$param) and $param["IntervalDays"] !== null) {
            $this->IntervalDays = $param["IntervalDays"];
        }
    }
}
