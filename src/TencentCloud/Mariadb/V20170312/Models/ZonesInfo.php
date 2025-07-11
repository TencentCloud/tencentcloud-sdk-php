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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区信息
 *
 * @method string getZone() 获取可用区英文ID
 * @method void setZone(string $Zone) 设置可用区英文ID
 * @method integer getZoneId() 获取可用区数字ID
 * @method void setZoneId(integer $ZoneId) 设置可用区数字ID
 * @method string getZoneName() 获取可用区中文名
 * @method void setZoneName(string $ZoneName) 设置可用区中文名
 * @method boolean getOnSale() 获取是否在售
 * @method void setOnSale(boolean $OnSale) 设置是否在售
 */
class ZonesInfo extends AbstractModel
{
    /**
     * @var string 可用区英文ID
     */
    public $Zone;

    /**
     * @var integer 可用区数字ID
     */
    public $ZoneId;

    /**
     * @var string 可用区中文名
     */
    public $ZoneName;

    /**
     * @var boolean 是否在售
     */
    public $OnSale;

    /**
     * @param string $Zone 可用区英文ID
     * @param integer $ZoneId 可用区数字ID
     * @param string $ZoneName 可用区中文名
     * @param boolean $OnSale 是否在售
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

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("OnSale",$param) and $param["OnSale"] !== null) {
            $this->OnSale = $param["OnSale"];
        }
    }
}
