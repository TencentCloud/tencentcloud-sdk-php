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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 围栏告警位置点
 *
 * @method integer getAlarmTime() 获取围栏告警时间
 * @method void setAlarmTime(integer $AlarmTime) 设置围栏告警时间
 * @method float getLongitude() 获取围栏告警位置的经度
 * @method void setLongitude(float $Longitude) 设置围栏告警位置的经度
 * @method float getLatitude() 获取围栏告警位置的纬度
 * @method void setLatitude(float $Latitude) 设置围栏告警位置的纬度
 */
class FenceAlarmPoint extends AbstractModel
{
    /**
     * @var integer 围栏告警时间
     */
    public $AlarmTime;

    /**
     * @var float 围栏告警位置的经度
     */
    public $Longitude;

    /**
     * @var float 围栏告警位置的纬度
     */
    public $Latitude;

    /**
     * @param integer $AlarmTime 围栏告警时间
     * @param float $Longitude 围栏告警位置的经度
     * @param float $Latitude 围栏告警位置的纬度
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
        if (array_key_exists("AlarmTime",$param) and $param["AlarmTime"] !== null) {
            $this->AlarmTime = $param["AlarmTime"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }
    }
}
