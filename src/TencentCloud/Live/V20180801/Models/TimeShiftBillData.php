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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时移计费明细数据。
 *
 * @method string getDomain() 获取推流域名。
 * @method void setDomain(string $Domain) 设置推流域名。
 * @method float getDuration() 获取时移文件时长，单位分钟。
 * @method void setDuration(float $Duration) 设置时移文件时长，单位分钟。
 * @method float getStoragePeriod() 获取时移配置天数，单位天。
 * @method void setStoragePeriod(float $StoragePeriod) 设置时移配置天数，单位天。
 * @method string getTime() 获取时间点，格式: yyyy-mm-ddTHH:MM:SSZ。
 * @method void setTime(string $Time) 设置时间点，格式: yyyy-mm-ddTHH:MM:SSZ。
 * @method float getTotalDuration() 获取时移总时长，单位分钟。
 * @method void setTotalDuration(float $TotalDuration) 设置时移总时长，单位分钟。
 */
class TimeShiftBillData extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $Domain;

    /**
     * @var float 时移文件时长，单位分钟。
     */
    public $Duration;

    /**
     * @var float 时移配置天数，单位天。
     */
    public $StoragePeriod;

    /**
     * @var string 时间点，格式: yyyy-mm-ddTHH:MM:SSZ。
     */
    public $Time;

    /**
     * @var float 时移总时长，单位分钟。
     */
    public $TotalDuration;

    /**
     * @param string $Domain 推流域名。
     * @param float $Duration 时移文件时长，单位分钟。
     * @param float $StoragePeriod 时移配置天数，单位天。
     * @param string $Time 时间点，格式: yyyy-mm-ddTHH:MM:SSZ。
     * @param float $TotalDuration 时移总时长，单位分钟。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("StoragePeriod",$param) and $param["StoragePeriod"] !== null) {
            $this->StoragePeriod = $param["StoragePeriod"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TotalDuration",$param) and $param["TotalDuration"] !== null) {
            $this->TotalDuration = $param["TotalDuration"];
        }
    }
}
