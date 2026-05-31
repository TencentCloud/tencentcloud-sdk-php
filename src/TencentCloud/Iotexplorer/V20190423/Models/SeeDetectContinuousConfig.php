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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 标签持续检测配置
 *
 * @method string getDetectType() 获取检测标签。可选值：
- `person_motionless`：人物静止
 * @method void setDetectType(string $DetectType) 设置检测标签。可选值：
- `person_motionless`：人物静止
 * @method integer getDailyStartTime() 获取启用检测的按日周期起始时间分钟数。取值范围：0 ~ 1440
 * @method void setDailyStartTime(integer $DailyStartTime) 设置启用检测的按日周期起始时间分钟数。取值范围：0 ~ 1440
 * @method integer getDailyEndTime() 获取启用检测的按日周期结束时间分钟数。取值范围：0 ~ 1440
 * @method void setDailyEndTime(integer $DailyEndTime) 设置启用检测的按日周期结束时间分钟数。取值范围：0 ~ 1440
 * @method integer getInterval() 获取检测间隔分钟数。取值范围：5 ~ 60。
 * @method void setInterval(integer $Interval) 设置检测间隔分钟数。取值范围：5 ~ 60。
 */
class SeeDetectContinuousConfig extends AbstractModel
{
    /**
     * @var string 检测标签。可选值：
- `person_motionless`：人物静止
     */
    public $DetectType;

    /**
     * @var integer 启用检测的按日周期起始时间分钟数。取值范围：0 ~ 1440
     */
    public $DailyStartTime;

    /**
     * @var integer 启用检测的按日周期结束时间分钟数。取值范围：0 ~ 1440
     */
    public $DailyEndTime;

    /**
     * @var integer 检测间隔分钟数。取值范围：5 ~ 60。
     */
    public $Interval;

    /**
     * @param string $DetectType 检测标签。可选值：
- `person_motionless`：人物静止
     * @param integer $DailyStartTime 启用检测的按日周期起始时间分钟数。取值范围：0 ~ 1440
     * @param integer $DailyEndTime 启用检测的按日周期结束时间分钟数。取值范围：0 ~ 1440
     * @param integer $Interval 检测间隔分钟数。取值范围：5 ~ 60。
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
        if (array_key_exists("DetectType",$param) and $param["DetectType"] !== null) {
            $this->DetectType = $param["DetectType"];
        }

        if (array_key_exists("DailyStartTime",$param) and $param["DailyStartTime"] !== null) {
            $this->DailyStartTime = $param["DailyStartTime"];
        }

        if (array_key_exists("DailyEndTime",$param) and $param["DailyEndTime"] !== null) {
            $this->DailyEndTime = $param["DailyEndTime"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
