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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlobalMaintenanceWindowAndExclusions请求参数结构体
 *
 * @method string getMaintenanceTime() 获取维护开始时间
 * @method void setMaintenanceTime(string $MaintenanceTime) 设置维护开始时间
 * @method integer getDuration() 获取维护时长(小时)
 * @method void setDuration(integer $Duration) 设置维护时长(小时)
 * @method array getDayOfWeek() 获取维护周期（一周中的哪几天）
 * @method void setDayOfWeek(array $DayOfWeek) 设置维护周期（一周中的哪几天）
 * @method array getTargetRegions() 获取地域
 * @method void setTargetRegions(array $TargetRegions) 设置地域
 * @method array getExclusions() 获取维护排除项
 * @method void setExclusions(array $Exclusions) 设置维护排除项
 */
class CreateGlobalMaintenanceWindowAndExclusionsRequest extends AbstractModel
{
    /**
     * @var string 维护开始时间
     */
    public $MaintenanceTime;

    /**
     * @var integer 维护时长(小时)
     */
    public $Duration;

    /**
     * @var array 维护周期（一周中的哪几天）
     */
    public $DayOfWeek;

    /**
     * @var array 地域
     */
    public $TargetRegions;

    /**
     * @var array 维护排除项
     */
    public $Exclusions;

    /**
     * @param string $MaintenanceTime 维护开始时间
     * @param integer $Duration 维护时长(小时)
     * @param array $DayOfWeek 维护周期（一周中的哪几天）
     * @param array $TargetRegions 地域
     * @param array $Exclusions 维护排除项
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
        if (array_key_exists("MaintenanceTime",$param) and $param["MaintenanceTime"] !== null) {
            $this->MaintenanceTime = $param["MaintenanceTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("TargetRegions",$param) and $param["TargetRegions"] !== null) {
            $this->TargetRegions = $param["TargetRegions"];
        }

        if (array_key_exists("Exclusions",$param) and $param["Exclusions"] !== null) {
            $this->Exclusions = [];
            foreach ($param["Exclusions"] as $key => $value){
                $obj = new MaintenanceExclusion();
                $obj->deserialize($value);
                array_push($this->Exclusions, $obj);
            }
        }
    }
}
