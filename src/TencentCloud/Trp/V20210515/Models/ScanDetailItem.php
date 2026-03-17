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
 * 扫码信息
 *
 * @method string getUid() 获取<p>用户ID，也可以为手机号</p>
 * @method void setUid(string $Uid) 设置<p>用户ID，也可以为手机号</p>
 * @method string getTime() 获取<p>时间</p><p>参数格式：YYYYMMDDHHMMSS</p>
 * @method void setTime(string $Time) 设置<p>时间</p><p>参数格式：YYYYMMDDHHMMSS</p>
 * @method string getProvinceName() 获取<p>省</p>
 * @method void setProvinceName(string $ProvinceName) 设置<p>省</p>
 * @method string getCityName() 获取<p>市</p>
 * @method void setCityName(string $CityName) 设置<p>市</p>
 * @method string getRegionName() 获取<p>区</p>
 * @method void setRegionName(string $RegionName) 设置<p>区</p>
 * @method string getBrandName() 获取<p>品牌</p>
 * @method void setBrandName(string $BrandName) 设置<p>品牌</p>
 * @method string getSpecName() 获取<p>品规</p>
 * @method void setSpecName(string $SpecName) 设置<p>品规</p>
 * @method string getIP() 获取<p>IP，可选，需符合IP格式</p>
 * @method void setIP(string $IP) 设置<p>IP，可选，需符合IP格式</p>
 * @method string getCode() 获取<p>码</p>
 * @method void setCode(string $Code) 设置<p>码</p>
 */
class ScanDetailItem extends AbstractModel
{
    /**
     * @var string <p>用户ID，也可以为手机号</p>
     */
    public $Uid;

    /**
     * @var string <p>时间</p><p>参数格式：YYYYMMDDHHMMSS</p>
     */
    public $Time;

    /**
     * @var string <p>省</p>
     */
    public $ProvinceName;

    /**
     * @var string <p>市</p>
     */
    public $CityName;

    /**
     * @var string <p>区</p>
     */
    public $RegionName;

    /**
     * @var string <p>品牌</p>
     */
    public $BrandName;

    /**
     * @var string <p>品规</p>
     */
    public $SpecName;

    /**
     * @var string <p>IP，可选，需符合IP格式</p>
     */
    public $IP;

    /**
     * @var string <p>码</p>
     */
    public $Code;

    /**
     * @param string $Uid <p>用户ID，也可以为手机号</p>
     * @param string $Time <p>时间</p><p>参数格式：YYYYMMDDHHMMSS</p>
     * @param string $ProvinceName <p>省</p>
     * @param string $CityName <p>市</p>
     * @param string $RegionName <p>区</p>
     * @param string $BrandName <p>品牌</p>
     * @param string $SpecName <p>品规</p>
     * @param string $IP <p>IP，可选，需符合IP格式</p>
     * @param string $Code <p>码</p>
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }

        if (array_key_exists("CityName",$param) and $param["CityName"] !== null) {
            $this->CityName = $param["CityName"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
