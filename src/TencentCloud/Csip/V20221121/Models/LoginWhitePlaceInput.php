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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 常用登录地（入参）
 *
 * @method integer getCountryId() 获取<p>国家ID，当前仅支持国内：1</p>
 * @method void setCountryId(integer $CountryId) 设置<p>国家ID，当前仅支持国内：1</p>
 * @method integer getProvinceId() 获取<p>省份ID；99999 表示全部省份</p>
 * @method void setProvinceId(integer $ProvinceId) 设置<p>省份ID；99999 表示全部省份</p>
 * @method integer getCityId() 获取<p>城市ID；99999 表示全部城市</p>
 * @method void setCityId(integer $CityId) 设置<p>城市ID；99999 表示全部城市</p>
 */
class LoginWhitePlaceInput extends AbstractModel
{
    /**
     * @var integer <p>国家ID，当前仅支持国内：1</p>
     */
    public $CountryId;

    /**
     * @var integer <p>省份ID；99999 表示全部省份</p>
     */
    public $ProvinceId;

    /**
     * @var integer <p>城市ID；99999 表示全部城市</p>
     */
    public $CityId;

    /**
     * @param integer $CountryId <p>国家ID，当前仅支持国内：1</p>
     * @param integer $ProvinceId <p>省份ID；99999 表示全部省份</p>
     * @param integer $CityId <p>城市ID；99999 表示全部城市</p>
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
        if (array_key_exists("CountryId",$param) and $param["CountryId"] !== null) {
            $this->CountryId = $param["CountryId"];
        }

        if (array_key_exists("ProvinceId",$param) and $param["ProvinceId"] !== null) {
            $this->ProvinceId = $param["ProvinceId"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }
    }
}
