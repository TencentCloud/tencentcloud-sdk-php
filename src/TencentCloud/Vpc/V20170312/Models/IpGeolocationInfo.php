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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP地理位置信息
 *
 * @method string getCountry() 获取国家信息
 * @method void setCountry(string $Country) 设置国家信息
 * @method string getProvince() 获取省、州、郡一级行政区域信息
 * @method void setProvince(string $Province) 设置省、州、郡一级行政区域信息
 * @method string getCity() 获取市一级行政区域信息
 * @method void setCity(string $City) 设置市一级行政区域信息
 * @method string getRegion() 获取市内区域信息
 * @method void setRegion(string $Region) 设置市内区域信息
 * @method string getIsp() 获取接入运营商信息
 * @method void setIsp(string $Isp) 设置接入运营商信息
 * @method string getAsName() 获取骨干运营商名称
 * @method void setAsName(string $AsName) 设置骨干运营商名称
 * @method string getAsId() 获取骨干运营商AS号
 * @method void setAsId(string $AsId) 设置骨干运营商AS号
 * @method string getComment() 获取注释信息。目前的填充值为移动接入用户的APN值，如无APN属性则为空
 * @method void setComment(string $Comment) 设置注释信息。目前的填充值为移动接入用户的APN值，如无APN属性则为空
 * @method string getAddressIp() 获取IP地址
 * @method void setAddressIp(string $AddressIp) 设置IP地址
 */
class IpGeolocationInfo extends AbstractModel
{
    /**
     * @var string 国家信息
     */
    public $Country;

    /**
     * @var string 省、州、郡一级行政区域信息
     */
    public $Province;

    /**
     * @var string 市一级行政区域信息
     */
    public $City;

    /**
     * @var string 市内区域信息
     */
    public $Region;

    /**
     * @var string 接入运营商信息
     */
    public $Isp;

    /**
     * @var string 骨干运营商名称
     */
    public $AsName;

    /**
     * @var string 骨干运营商AS号
     */
    public $AsId;

    /**
     * @var string 注释信息。目前的填充值为移动接入用户的APN值，如无APN属性则为空
     */
    public $Comment;

    /**
     * @var string IP地址
     */
    public $AddressIp;

    /**
     * @param string $Country 国家信息
     * @param string $Province 省、州、郡一级行政区域信息
     * @param string $City 市一级行政区域信息
     * @param string $Region 市内区域信息
     * @param string $Isp 接入运营商信息
     * @param string $AsName 骨干运营商名称
     * @param string $AsId 骨干运营商AS号
     * @param string $Comment 注释信息。目前的填充值为移动接入用户的APN值，如无APN属性则为空
     * @param string $AddressIp IP地址
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

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("AsName",$param) and $param["AsName"] !== null) {
            $this->AsName = $param["AsName"];
        }

        if (array_key_exists("AsId",$param) and $param["AsId"] !== null) {
            $this->AsId = $param["AsId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }
    }
}
