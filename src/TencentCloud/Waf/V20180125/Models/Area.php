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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method string getCountry() 获取国家，除了标准的国家外还支持国内、国外这两个特殊的标识
 * @method void setCountry(string $Country) 设置国家，除了标准的国家外还支持国内、国外这两个特殊的标识
 * @method string getRegion() 获取省份
 * @method void setRegion(string $Region) 设置省份
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 */
class Area extends AbstractModel
{
    /**
     * @var string 国家，除了标准的国家外还支持国内、国外这两个特殊的标识
     */
    public $Country;

    /**
     * @var string 省份
     */
    public $Region;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @param string $Country 国家，除了标准的国家外还支持国内、国外这两个特殊的标识
     * @param string $Region 省份
     * @param string $City 城市
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
    }
}
