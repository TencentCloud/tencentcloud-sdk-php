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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生效时段
 *
 * @method string getBeginTime() 获取<p>开始时间</p><p>参数格式：hh:mm:ss</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>开始时间</p><p>参数格式：hh:mm:ss</p>
 * @method string getEndTime() 获取<p>结束时间</p><p>参数格式：hh:mm:ss</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p><p>参数格式：hh:mm:ss</p>
 * @method integer getWeekDay() 获取<p>重复周期： 1-周一 2-周二 3-周三 4-周四 5-周五 6-周六 7-周日</p><p>取值范围：[1, 7]</p>
 * @method void setWeekDay(integer $WeekDay) 设置<p>重复周期： 1-周一 2-周二 3-周三 4-周四 5-周五 6-周六 7-周日</p><p>取值范围：[1, 7]</p>
 */
class EffectiveTime extends AbstractModel
{
    /**
     * @var string <p>开始时间</p><p>参数格式：hh:mm:ss</p>
     */
    public $BeginTime;

    /**
     * @var string <p>结束时间</p><p>参数格式：hh:mm:ss</p>
     */
    public $EndTime;

    /**
     * @var integer <p>重复周期： 1-周一 2-周二 3-周三 4-周四 5-周五 6-周六 7-周日</p><p>取值范围：[1, 7]</p>
     */
    public $WeekDay;

    /**
     * @param string $BeginTime <p>开始时间</p><p>参数格式：hh:mm:ss</p>
     * @param string $EndTime <p>结束时间</p><p>参数格式：hh:mm:ss</p>
     * @param integer $WeekDay <p>重复周期： 1-周一 2-周二 3-周三 4-周四 5-周五 6-周六 7-周日</p><p>取值范围：[1, 7]</p>
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("WeekDay",$param) and $param["WeekDay"] !== null) {
            $this->WeekDay = $param["WeekDay"];
        }
    }
}
