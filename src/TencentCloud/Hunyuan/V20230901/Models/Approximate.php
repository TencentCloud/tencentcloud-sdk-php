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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户位置信息
 *
 * @method string getCountry() 获取表示 ISO 国家代码
 * @method void setCountry(string $Country) 设置表示 ISO 国家代码
 * @method string getCity() 获取表示城市名称
 * @method void setCity(string $City) 设置表示城市名称
 * @method string getRegion() 获取表示区域名称
 * @method void setRegion(string $Region) 设置表示区域名称
 * @method string getTimezone() 获取表示IANA时区
 * @method void setTimezone(string $Timezone) 设置表示IANA时区
 * @method string getAddress() 获取表示详细地址
 * @method void setAddress(string $Address) 设置表示详细地址
 */
class Approximate extends AbstractModel
{
    /**
     * @var string 表示 ISO 国家代码
     */
    public $Country;

    /**
     * @var string 表示城市名称
     */
    public $City;

    /**
     * @var string 表示区域名称
     */
    public $Region;

    /**
     * @var string 表示IANA时区
     */
    public $Timezone;

    /**
     * @var string 表示详细地址
     */
    public $Address;

    /**
     * @param string $Country 表示 ISO 国家代码
     * @param string $City 表示城市名称
     * @param string $Region 表示区域名称
     * @param string $Timezone 表示IANA时区
     * @param string $Address 表示详细地址
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

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
