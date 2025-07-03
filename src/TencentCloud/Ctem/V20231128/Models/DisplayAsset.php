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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机资产详情
 *
 * @method integer getId() 获取主机资产Id
 * @method void setId(integer $Id) 设置主机资产Id
 * @method string getOs() 获取操作系统类型
 * @method void setOs(string $Os) 设置操作系统类型
 * @method string getIp() 获取主机地址
 * @method void setIp(string $Ip) 设置主机地址
 * @method string getCountry() 获取国家
 * @method void setCountry(string $Country) 设置国家
 * @method string getProvince() 获取省份
 * @method void setProvince(string $Province) 设置省份
 * @method string getCity() 获取地域
 * @method void setCity(string $City) 设置地域
 * @method string getIsp() 获取运营商
 * @method void setIsp(string $Isp) 设置运营商
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 */
class DisplayAsset extends AbstractModel
{
    /**
     * @var integer 主机资产Id
     */
    public $Id;

    /**
     * @var string 操作系统类型
     */
    public $Os;

    /**
     * @var string 主机地址
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
     * @var string 地域
     */
    public $City;

    /**
     * @var string 运营商
     */
    public $Isp;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @param integer $Id 主机资产Id
     * @param string $Os 操作系统类型
     * @param string $Ip 主机地址
     * @param string $Country 国家
     * @param string $Province 省份
     * @param string $City 地域
     * @param string $Isp 运营商
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
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

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }
    }
}
