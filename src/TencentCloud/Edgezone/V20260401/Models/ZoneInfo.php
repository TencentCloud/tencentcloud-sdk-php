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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨地域聚合后的可用区信息。
 *
 * @method integer getZoneId() 获取可用区ID。
 * @method void setZoneId(integer $ZoneId) 设置可用区ID。
 * @method string getZone() 获取可用区代码。
 * @method void setZone(string $Zone) 设置可用区代码。
 * @method string getZoneName() 获取可用区中文名称。
 * @method void setZoneName(string $ZoneName) 设置可用区中文名称。
 * @method string getZoneNameEn() 获取可用区英文名称。
 * @method void setZoneNameEn(string $ZoneNameEn) 设置可用区英文名称。
 * @method string getRegion() 获取地域代码。
 * @method void setRegion(string $Region) 设置地域代码。
 * @method string getLocation() 获取区域代码。
 * @method void setLocation(string $Location) 设置区域代码。
 * @method string getLocationName() 获取区域名称。
 * @method void setLocationName(string $LocationName) 设置区域名称。
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var integer 可用区ID。
     */
    public $ZoneId;

    /**
     * @var string 可用区代码。
     */
    public $Zone;

    /**
     * @var string 可用区中文名称。
     */
    public $ZoneName;

    /**
     * @var string 可用区英文名称。
     */
    public $ZoneNameEn;

    /**
     * @var string 地域代码。
     */
    public $Region;

    /**
     * @var string 区域代码。
     */
    public $Location;

    /**
     * @var string 区域名称。
     */
    public $LocationName;

    /**
     * @param integer $ZoneId 可用区ID。
     * @param string $Zone 可用区代码。
     * @param string $ZoneName 可用区中文名称。
     * @param string $ZoneNameEn 可用区英文名称。
     * @param string $Region 地域代码。
     * @param string $Location 区域代码。
     * @param string $LocationName 区域名称。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneNameEn",$param) and $param["ZoneNameEn"] !== null) {
            $this->ZoneNameEn = $param["ZoneNameEn"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("LocationName",$param) and $param["LocationName"] !== null) {
            $this->LocationName = $param["LocationName"];
        }
    }
}
