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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method string getRegion() 获取地域标志，如 ap-guangzhou，ap-shanghai，ap-beijing
 * @method void setRegion(string $Region) 设置地域标志，如 ap-guangzhou，ap-shanghai，ap-beijing
 * @method string getRegionName() 获取地域中文名，如华南地区（广州），华东地区（上海金融），华北地区（北京）
 * @method void setRegionName(string $RegionName) 设置地域中文名，如华南地区（广州），华东地区（上海金融），华北地区（北京）
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getRegionCode() 获取地域代码，如 gz，sh，bj
 * @method void setRegionCode(string $RegionCode) 设置地域代码，如 gz，sh，bj
 * @method string getRegionNameEn() 获取地域英文名
 * @method void setRegionNameEn(string $RegionNameEn) 设置地域英文名
 */
class ScreenRegionInfo extends AbstractModel
{
    /**
     * @var string 地域标志，如 ap-guangzhou，ap-shanghai，ap-beijing
     */
    public $Region;

    /**
     * @var string 地域中文名，如华南地区（广州），华东地区（上海金融），华北地区（北京）
     */
    public $RegionName;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域代码，如 gz，sh，bj
     */
    public $RegionCode;

    /**
     * @var string 地域英文名
     */
    public $RegionNameEn;

    /**
     * @param string $Region 地域标志，如 ap-guangzhou，ap-shanghai，ap-beijing
     * @param string $RegionName 地域中文名，如华南地区（广州），华东地区（上海金融），华北地区（北京）
     * @param integer $RegionId 地域ID
     * @param string $RegionCode 地域代码，如 gz，sh，bj
     * @param string $RegionNameEn 地域英文名
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("RegionNameEn",$param) and $param["RegionNameEn"] !== null) {
            $this->RegionNameEn = $param["RegionNameEn"];
        }
    }
}
