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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PrometheusZoneItem 响应结构体内的地域信息
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getZoneId() 获取可用区 ID
 * @method void setZoneId(integer $ZoneId) 设置可用区 ID
 * @method integer getZoneState() 获取可用区状态( 0: 不可用；1: 可用)
 * @method void setZoneState(integer $ZoneState) 设置可用区状态( 0: 不可用；1: 可用)
 * @method integer getRegionId() 获取地域 ID
 * @method void setRegionId(integer $RegionId) 设置地域 ID
 * @method string getZoneName() 获取可用区名（目前为中文）
 * @method void setZoneName(string $ZoneName) 设置可用区名（目前为中文）
 */
class PrometheusZoneItem extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 可用区 ID
     */
    public $ZoneId;

    /**
     * @var integer 可用区状态( 0: 不可用；1: 可用)
     */
    public $ZoneState;

    /**
     * @var integer 地域 ID
     */
    public $RegionId;

    /**
     * @var string 可用区名（目前为中文）
     */
    public $ZoneName;

    /**
     * @param string $Zone 可用区
     * @param integer $ZoneId 可用区 ID
     * @param integer $ZoneState 可用区状态( 0: 不可用；1: 可用)
     * @param integer $RegionId 地域 ID
     * @param string $ZoneName 可用区名（目前为中文）
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneState",$param) and $param["ZoneState"] !== null) {
            $this->ZoneState = $param["ZoneState"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
