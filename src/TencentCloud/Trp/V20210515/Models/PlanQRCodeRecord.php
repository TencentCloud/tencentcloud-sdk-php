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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安心计划二维码扫码记录
 *
 * @method string getUrl() 获取二维码
 * @method void setUrl(string $Url) 设置二维码
 * @method string getOpenId() 获取OpenID
 * @method void setOpenId(string $OpenId) 设置OpenID
 * @method string getScanTime() 获取扫码时间
 * @method void setScanTime(string $ScanTime) 设置扫码时间
 * @method string getIp() 获取IP 地址
 * @method void setIp(string $Ip) 设置IP 地址
 * @method string getCountry() 获取国家
 * @method void setCountry(string $Country) 设置国家
 * @method string getProvince() 获取省份
 * @method void setProvince(string $Province) 设置省份
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 */
class PlanQRCodeRecord extends AbstractModel
{
    /**
     * @var string 二维码
     */
    public $Url;

    /**
     * @var string OpenID
     */
    public $OpenId;

    /**
     * @var string 扫码时间
     */
    public $ScanTime;

    /**
     * @var string IP 地址
     */
    public $Ip;

    /**
     * @var string 国家
     */
    public $Country;

    /**
     * @var string 省份
     */
    public $Province;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @param string $Url 二维码
     * @param string $OpenId OpenID
     * @param string $ScanTime 扫码时间
     * @param string $Ip IP 地址
     * @param string $Country 国家
     * @param string $Province 省份
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }
    }
}
