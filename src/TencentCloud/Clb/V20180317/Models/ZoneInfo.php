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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区相关信息
 *
 * @method integer getZoneId() 获取可用区数值形式的唯一ID，如：100001
 * @method void setZoneId(integer $ZoneId) 设置可用区数值形式的唯一ID，如：100001
 * @method string getZone() 获取可用区字符串形式的唯一ID，如：ap-guangzhou-1
 * @method void setZone(string $Zone) 设置可用区字符串形式的唯一ID，如：ap-guangzhou-1
 * @method string getZoneName() 获取可用区名称，如：广州一区
 * @method void setZoneName(string $ZoneName) 设置可用区名称，如：广州一区
 * @method string getZoneRegion() 获取可用区所属地域，如：ap-guangzhou
 * @method void setZoneRegion(string $ZoneRegion) 设置可用区所属地域，如：ap-guangzhou
 * @method boolean getLocalZone() 获取可用区是否是LocalZone可用区，如：false
 * @method void setLocalZone(boolean $LocalZone) 设置可用区是否是LocalZone可用区，如：false
 * @method boolean getEdgeZone() 获取可用区是否是EdgeZone可用区，如：false
 * @method void setEdgeZone(boolean $EdgeZone) 设置可用区是否是EdgeZone可用区，如：false
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var integer 可用区数值形式的唯一ID，如：100001
     */
    public $ZoneId;

    /**
     * @var string 可用区字符串形式的唯一ID，如：ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var string 可用区名称，如：广州一区
     */
    public $ZoneName;

    /**
     * @var string 可用区所属地域，如：ap-guangzhou
     */
    public $ZoneRegion;

    /**
     * @var boolean 可用区是否是LocalZone可用区，如：false
     */
    public $LocalZone;

    /**
     * @var boolean 可用区是否是EdgeZone可用区，如：false
     */
    public $EdgeZone;

    /**
     * @param integer $ZoneId 可用区数值形式的唯一ID，如：100001
     * @param string $Zone 可用区字符串形式的唯一ID，如：ap-guangzhou-1
     * @param string $ZoneName 可用区名称，如：广州一区
     * @param string $ZoneRegion 可用区所属地域，如：ap-guangzhou
     * @param boolean $LocalZone 可用区是否是LocalZone可用区，如：false
     * @param boolean $EdgeZone 可用区是否是EdgeZone可用区，如：false
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

        if (array_key_exists("ZoneRegion",$param) and $param["ZoneRegion"] !== null) {
            $this->ZoneRegion = $param["ZoneRegion"];
        }

        if (array_key_exists("LocalZone",$param) and $param["LocalZone"] !== null) {
            $this->LocalZone = $param["LocalZone"];
        }

        if (array_key_exists("EdgeZone",$param) and $param["EdgeZone"] !== null) {
            $this->EdgeZone = $param["EdgeZone"];
        }
    }
}
