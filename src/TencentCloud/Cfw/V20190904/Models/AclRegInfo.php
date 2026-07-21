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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ACL 地理位置支持地域数据
 *
 * @method string getRegionCode() 获取地域KEY
 * @method void setRegionCode(string $RegionCode) 设置地域KEY
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method string getParent() 获取上级地域信息
 * @method void setParent(string $Parent) 设置上级地域信息
 * @method string getZhKey() 获取中文拼音首字母
 * @method void setZhKey(string $ZhKey) 设置中文拼音首字母
 * @method string getEnKey() 获取英文首字母
 * @method void setEnKey(string $EnKey) 设置英文首字母
 * @method integer getArea() 获取是否为地区
 * @method void setArea(integer $Area) 设置是否为地区
 * @method integer getIsCity() 获取是否为省份、城市
 * @method void setIsCity(integer $IsCity) 设置是否为省份、城市
 * @method integer getNum() 获取序号
 * @method void setNum(integer $Num) 设置序号
 * @method integer getForBypass() 获取是否支持旁路
 * @method void setForBypass(integer $ForBypass) 设置是否支持旁路
 * @method integer getForSerial() 获取是否支持串行
 * @method void setForSerial(integer $ForSerial) 设置是否支持串行
 * @method integer getForNat() 获取是否支持NAT
 * @method void setForNat(integer $ForNat) 设置是否支持NAT
 */
class AclRegInfo extends AbstractModel
{
    /**
     * @var string 地域KEY
     */
    public $RegionCode;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var string 上级地域信息
     */
    public $Parent;

    /**
     * @var string 中文拼音首字母
     */
    public $ZhKey;

    /**
     * @var string 英文首字母
     */
    public $EnKey;

    /**
     * @var integer 是否为地区
     */
    public $Area;

    /**
     * @var integer 是否为省份、城市
     */
    public $IsCity;

    /**
     * @var integer 序号
     */
    public $Num;

    /**
     * @var integer 是否支持旁路
     */
    public $ForBypass;

    /**
     * @var integer 是否支持串行
     */
    public $ForSerial;

    /**
     * @var integer 是否支持NAT
     */
    public $ForNat;

    /**
     * @param string $RegionCode 地域KEY
     * @param string $RegionName 地域名称
     * @param string $Parent 上级地域信息
     * @param string $ZhKey 中文拼音首字母
     * @param string $EnKey 英文首字母
     * @param integer $Area 是否为地区
     * @param integer $IsCity 是否为省份、城市
     * @param integer $Num 序号
     * @param integer $ForBypass 是否支持旁路
     * @param integer $ForSerial 是否支持串行
     * @param integer $ForNat 是否支持NAT
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
        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Parent",$param) and $param["Parent"] !== null) {
            $this->Parent = $param["Parent"];
        }

        if (array_key_exists("ZhKey",$param) and $param["ZhKey"] !== null) {
            $this->ZhKey = $param["ZhKey"];
        }

        if (array_key_exists("EnKey",$param) and $param["EnKey"] !== null) {
            $this->EnKey = $param["EnKey"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("IsCity",$param) and $param["IsCity"] !== null) {
            $this->IsCity = $param["IsCity"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("ForBypass",$param) and $param["ForBypass"] !== null) {
            $this->ForBypass = $param["ForBypass"];
        }

        if (array_key_exists("ForSerial",$param) and $param["ForSerial"] !== null) {
            $this->ForSerial = $param["ForSerial"];
        }

        if (array_key_exists("ForNat",$param) and $param["ForNat"] !== null) {
            $this->ForNat = $param["ForNat"];
        }
    }
}
