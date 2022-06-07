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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getCountry() 获取国家名
 * @method void setCountry(string $Country) 设置国家名
 * @method string getContinent() 获取洲
 * @method void setContinent(string $Continent) 设置洲
 * @method string getCountryEn() 获取国家英文名
 * @method void setCountryEn(string $CountryEn) 设置国家英文名
 * @method string getContinentEn() 获取洲
 * @method void setContinentEn(string $ContinentEn) 设置洲
 */
class GeoIp extends AbstractModel
{
    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 国家名
     */
    public $Country;

    /**
     * @var string 洲
     */
    public $Continent;

    /**
     * @var string 国家英文名
     */
    public $CountryEn;

    /**
     * @var string 洲
     */
    public $ContinentEn;

    /**
     * @param integer $RegionId 地域ID
     * @param string $Country 国家名
     * @param string $Continent 洲
     * @param string $CountryEn 国家英文名
     * @param string $ContinentEn 洲
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Continent",$param) and $param["Continent"] !== null) {
            $this->Continent = $param["Continent"];
        }

        if (array_key_exists("CountryEn",$param) and $param["CountryEn"] !== null) {
            $this->CountryEn = $param["CountryEn"];
        }

        if (array_key_exists("ContinentEn",$param) and $param["ContinentEn"] !== null) {
            $this->ContinentEn = $param["ContinentEn"];
        }
    }
}
