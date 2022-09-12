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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rum片区信息
 *
 * @method integer getAreaId() 获取片区Id
 * @method void setAreaId(integer $AreaId) 设置片区Id
 * @method integer getAreaStatus() 获取片区状态(1=有效，2=无效)
 * @method void setAreaStatus(integer $AreaStatus) 设置片区状态(1=有效，2=无效)
 * @method string getAreaName() 获取片区名称
 * @method void setAreaName(string $AreaName) 设置片区名称
 * @method string getAreaKey() 获取片区Key
 * @method void setAreaKey(string $AreaKey) 设置片区Key
 * @method string getAreaRegionID() 获取地域码表 id
 * @method void setAreaRegionID(string $AreaRegionID) 设置地域码表 id
 * @method string getAreaRegionCode() 获取地域码表 code 如 ap-xxx（xxx 为地域词）
 * @method void setAreaRegionCode(string $AreaRegionCode) 设置地域码表 code 如 ap-xxx（xxx 为地域词）
 * @method string getAreaAbbr() 获取地域缩写
 * @method void setAreaAbbr(string $AreaAbbr) 设置地域缩写
 */
class RumAreaInfo extends AbstractModel
{
    /**
     * @var integer 片区Id
     */
    public $AreaId;

    /**
     * @var integer 片区状态(1=有效，2=无效)
     */
    public $AreaStatus;

    /**
     * @var string 片区名称
     */
    public $AreaName;

    /**
     * @var string 片区Key
     */
    public $AreaKey;

    /**
     * @var string 地域码表 id
     */
    public $AreaRegionID;

    /**
     * @var string 地域码表 code 如 ap-xxx（xxx 为地域词）
     */
    public $AreaRegionCode;

    /**
     * @var string 地域缩写
     */
    public $AreaAbbr;

    /**
     * @param integer $AreaId 片区Id
     * @param integer $AreaStatus 片区状态(1=有效，2=无效)
     * @param string $AreaName 片区名称
     * @param string $AreaKey 片区Key
     * @param string $AreaRegionID 地域码表 id
     * @param string $AreaRegionCode 地域码表 code 如 ap-xxx（xxx 为地域词）
     * @param string $AreaAbbr 地域缩写
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
        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("AreaStatus",$param) and $param["AreaStatus"] !== null) {
            $this->AreaStatus = $param["AreaStatus"];
        }

        if (array_key_exists("AreaName",$param) and $param["AreaName"] !== null) {
            $this->AreaName = $param["AreaName"];
        }

        if (array_key_exists("AreaKey",$param) and $param["AreaKey"] !== null) {
            $this->AreaKey = $param["AreaKey"];
        }

        if (array_key_exists("AreaRegionID",$param) and $param["AreaRegionID"] !== null) {
            $this->AreaRegionID = $param["AreaRegionID"];
        }

        if (array_key_exists("AreaRegionCode",$param) and $param["AreaRegionCode"] !== null) {
            $this->AreaRegionCode = $param["AreaRegionCode"];
        }

        if (array_key_exists("AreaAbbr",$param) and $param["AreaAbbr"] !== null) {
            $this->AreaAbbr = $param["AreaAbbr"];
        }
    }
}
