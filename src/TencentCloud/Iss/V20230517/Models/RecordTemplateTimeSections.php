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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上云模板的时间片段数据格式
 *
 * @method integer getDayOfWeek() 获取周日期，取值范围1～7（对应周一～周日
 * @method void setDayOfWeek(integer $DayOfWeek) 设置周日期，取值范围1～7（对应周一～周日
 * @method string getStartTime() 获取开始时间，格式：HH:MM:SS，范围：[00:00:00～23:59:59]
 * @method void setStartTime(string $StartTime) 设置开始时间，格式：HH:MM:SS，范围：[00:00:00～23:59:59]
 * @method string getEndTime() 获取结束时间，格式：HH:MM:SS，范围：[00:00:00～23:59:59] 
 * @method void setEndTime(string $EndTime) 设置结束时间，格式：HH:MM:SS，范围：[00:00:00～23:59:59] 
 */
class RecordTemplateTimeSections extends AbstractModel
{
    /**
     * @var integer 周日期，取值范围1～7（对应周一～周日
     */
    public $DayOfWeek;

    /**
     * @var string 开始时间，格式：HH:MM:SS，范围：[00:00:00～23:59:59]
     */
    public $StartTime;

    /**
     * @var string 结束时间，格式：HH:MM:SS，范围：[00:00:00～23:59:59] 
     */
    public $EndTime;

    /**
     * @param integer $DayOfWeek 周日期，取值范围1～7（对应周一～周日
     * @param string $StartTime 开始时间，格式：HH:MM:SS，范围：[00:00:00～23:59:59]
     * @param string $EndTime 结束时间，格式：HH:MM:SS，范围：[00:00:00～23:59:59] 
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
