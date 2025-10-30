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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构件地理坐标
 *
 * @method float getLongitude() 获取经度
 * @method void setLongitude(float $Longitude) 设置经度
 * @method float getLatitude() 获取纬度
 * @method void setLatitude(float $Latitude) 设置纬度
 * @method float getAltitude() 获取高程
 * @method void setAltitude(float $Altitude) 设置高程
 */
class ElementCoordinates extends AbstractModel
{
    /**
     * @var float 经度
     */
    public $Longitude;

    /**
     * @var float 纬度
     */
    public $Latitude;

    /**
     * @var float 高程
     */
    public $Altitude;

    /**
     * @param float $Longitude 经度
     * @param float $Latitude 纬度
     * @param float $Altitude 高程
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
        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("Altitude",$param) and $param["Altitude"] !== null) {
            $this->Altitude = $param["Altitude"];
        }
    }
}
