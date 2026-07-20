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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP地理位置信息
 *
 * @method string getCountry() 获取<p>IP地址所属国家</p>
 * @method void setCountry(string $Country) 设置<p>IP地址所属国家</p>
 * @method string getRegion() 获取<p>IP地址所属省份</p>
 * @method void setRegion(string $Region) 设置<p>IP地址所属省份</p>
 * @method string getCity() 获取<p>IP地址所属城市</p>
 * @method void setCity(string $City) 设置<p>IP地址所属城市</p>
 * @method string getDistrict() 获取<p>IP地址所属地区</p>
 * @method void setDistrict(string $District) 设置<p>IP地址所属地区</p>
 * @method string getLongitude() 获取<p>IP地址的经度</p>
 * @method void setLongitude(string $Longitude) 设置<p>IP地址的经度</p>
 * @method string getLatitude() 获取<p>IP地址的纬度</p>
 * @method void setLatitude(string $Latitude) 设置<p>IP地址的纬度</p>
 * @method string getTimezone() 获取<p>IP地址所属时区</p>
 * @method void setTimezone(string $Timezone) 设置<p>IP地址所属时区</p>
 * @method string getZipCode() 获取<p>IP地址的邮政编码</p>
 * @method void setZipCode(string $ZipCode) 设置<p>IP地址的邮政编码</p>
 */
class IPLocation extends AbstractModel
{
    /**
     * @var string <p>IP地址所属国家</p>
     */
    public $Country;

    /**
     * @var string <p>IP地址所属省份</p>
     */
    public $Region;

    /**
     * @var string <p>IP地址所属城市</p>
     */
    public $City;

    /**
     * @var string <p>IP地址所属地区</p>
     */
    public $District;

    /**
     * @var string <p>IP地址的经度</p>
     */
    public $Longitude;

    /**
     * @var string <p>IP地址的纬度</p>
     */
    public $Latitude;

    /**
     * @var string <p>IP地址所属时区</p>
     */
    public $Timezone;

    /**
     * @var string <p>IP地址的邮政编码</p>
     */
    public $ZipCode;

    /**
     * @param string $Country <p>IP地址所属国家</p>
     * @param string $Region <p>IP地址所属省份</p>
     * @param string $City <p>IP地址所属城市</p>
     * @param string $District <p>IP地址所属地区</p>
     * @param string $Longitude <p>IP地址的经度</p>
     * @param string $Latitude <p>IP地址的纬度</p>
     * @param string $Timezone <p>IP地址所属时区</p>
     * @param string $ZipCode <p>IP地址的邮政编码</p>
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
        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }

        if (array_key_exists("ZipCode",$param) and $param["ZipCode"] !== null) {
            $this->ZipCode = $param["ZipCode"];
        }
    }
}
