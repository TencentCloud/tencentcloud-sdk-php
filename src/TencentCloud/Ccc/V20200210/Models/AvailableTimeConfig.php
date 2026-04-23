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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作时间配置
 *
 * @method string getDayType() 获取<p>日期类型，默认为每天</p><p>枚举值：</p><ul><li>EveryDay： 每天</li><li>BusinessDay： 法定工作日</li><li>Holiday： 法定休息日</li><li>Custom： 自定义</li></ul>
 * @method void setDayType(string $DayType) 设置<p>日期类型，默认为每天</p><p>枚举值：</p><ul><li>EveryDay： 每天</li><li>BusinessDay： 法定工作日</li><li>Holiday： 法定休息日</li><li>Custom： 自定义</li></ul>
 * @method array getDaysOfWeek() 获取<p>仅在 DayType 为 Custom 时生效，指定适用的星期几</p><p>枚举值：</p><ul><li>Monday： 星期一</li><li>Tuesday： 星期二</li><li>Wednesday： 星期三</li><li>Thursday： 星期四</li><li>Friday： 星期五</li><li>Saturday： 星期六</li><li>Sunday： 星期日</li></ul>
 * @method void setDaysOfWeek(array $DaysOfWeek) 设置<p>仅在 DayType 为 Custom 时生效，指定适用的星期几</p><p>枚举值：</p><ul><li>Monday： 星期一</li><li>Tuesday： 星期二</li><li>Wednesday： 星期三</li><li>Thursday： 星期四</li><li>Friday： 星期五</li><li>Saturday： 星期六</li><li>Sunday： 星期日</li></ul>
 * @method array getTimeRanges() 获取<p>该日期类型下的时间段列表</p>
 * @method void setTimeRanges(array $TimeRanges) 设置<p>该日期类型下的时间段列表</p>
 */
class AvailableTimeConfig extends AbstractModel
{
    /**
     * @var string <p>日期类型，默认为每天</p><p>枚举值：</p><ul><li>EveryDay： 每天</li><li>BusinessDay： 法定工作日</li><li>Holiday： 法定休息日</li><li>Custom： 自定义</li></ul>
     */
    public $DayType;

    /**
     * @var array <p>仅在 DayType 为 Custom 时生效，指定适用的星期几</p><p>枚举值：</p><ul><li>Monday： 星期一</li><li>Tuesday： 星期二</li><li>Wednesday： 星期三</li><li>Thursday： 星期四</li><li>Friday： 星期五</li><li>Saturday： 星期六</li><li>Sunday： 星期日</li></ul>
     */
    public $DaysOfWeek;

    /**
     * @var array <p>该日期类型下的时间段列表</p>
     */
    public $TimeRanges;

    /**
     * @param string $DayType <p>日期类型，默认为每天</p><p>枚举值：</p><ul><li>EveryDay： 每天</li><li>BusinessDay： 法定工作日</li><li>Holiday： 法定休息日</li><li>Custom： 自定义</li></ul>
     * @param array $DaysOfWeek <p>仅在 DayType 为 Custom 时生效，指定适用的星期几</p><p>枚举值：</p><ul><li>Monday： 星期一</li><li>Tuesday： 星期二</li><li>Wednesday： 星期三</li><li>Thursday： 星期四</li><li>Friday： 星期五</li><li>Saturday： 星期六</li><li>Sunday： 星期日</li></ul>
     * @param array $TimeRanges <p>该日期类型下的时间段列表</p>
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
        if (array_key_exists("DayType",$param) and $param["DayType"] !== null) {
            $this->DayType = $param["DayType"];
        }

        if (array_key_exists("DaysOfWeek",$param) and $param["DaysOfWeek"] !== null) {
            $this->DaysOfWeek = $param["DaysOfWeek"];
        }

        if (array_key_exists("TimeRanges",$param) and $param["TimeRanges"] !== null) {
            $this->TimeRanges = [];
            foreach ($param["TimeRanges"] as $key => $value){
                $obj = new TimeRange();
                $obj->deserialize($value);
                array_push($this->TimeRanges, $obj);
            }
        }
    }
}
