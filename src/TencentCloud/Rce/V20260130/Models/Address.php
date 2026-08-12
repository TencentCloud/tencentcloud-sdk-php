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
 * 地址
 *
 * @method string getCountry() 获取<p>国家</p><p>参数格式：符合ISO 3166标准</p>
 * @method void setCountry(string $Country) 设置<p>国家</p><p>参数格式：符合ISO 3166标准</p>
 * @method string getRegion() 获取<p>省份</p>
 * @method void setRegion(string $Region) 设置<p>省份</p>
 * @method string getCity() 获取<p>城市</p>
 * @method void setCity(string $City) 设置<p>城市</p>
 * @method string getDistrict() 获取<p>地区</p>
 * @method void setDistrict(string $District) 设置<p>地区</p>
 * @method string getDetail() 获取<p>详细地址</p>
 * @method void setDetail(string $Detail) 设置<p>详细地址</p>
 * @method string getZipCode() 获取<p>邮政编码</p>
 * @method void setZipCode(string $ZipCode) 设置<p>邮政编码</p>
 */
class Address extends AbstractModel
{
    /**
     * @var string <p>国家</p><p>参数格式：符合ISO 3166标准</p>
     */
    public $Country;

    /**
     * @var string <p>省份</p>
     */
    public $Region;

    /**
     * @var string <p>城市</p>
     */
    public $City;

    /**
     * @var string <p>地区</p>
     */
    public $District;

    /**
     * @var string <p>详细地址</p>
     */
    public $Detail;

    /**
     * @var string <p>邮政编码</p>
     */
    public $ZipCode;

    /**
     * @param string $Country <p>国家</p><p>参数格式：符合ISO 3166标准</p>
     * @param string $Region <p>省份</p>
     * @param string $City <p>城市</p>
     * @param string $District <p>地区</p>
     * @param string $Detail <p>详细地址</p>
     * @param string $ZipCode <p>邮政编码</p>
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

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("ZipCode",$param) and $param["ZipCode"] !== null) {
            $this->ZipCode = $param["ZipCode"];
        }
    }
}
