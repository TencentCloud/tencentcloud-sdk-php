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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (Address) 用于描述住址或通讯地址。
 *
 * @method string getProvince() 获取省份
 * @method void setProvince(string $Province) 设置省份
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 * @method string getCounty() 获取区县
 * @method void setCounty(string $County) 设置区县
 * @method string getDetails() 获取详细地址
 * @method void setDetails(string $Details) 设置详细地址
 * @method string getCountry() 获取国家，默认中国
 * @method void setCountry(string $Country) 设置国家，默认中国
 */
class Address extends AbstractModel
{
    /**
     * @var string 省份
     */
    public $Province;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @var string 区县
     */
    public $County;

    /**
     * @var string 详细地址
     */
    public $Details;

    /**
     * @var string 国家，默认中国
     */
    public $Country;

    /**
     * @param string $Province 省份
     * @param string $City 城市
     * @param string $County 区县
     * @param string $Details 详细地址
     * @param string $Country 国家，默认中国
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
        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("County",$param) and $param["County"] !== null) {
            $this->County = $param["County"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = $param["Details"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }
    }
}
