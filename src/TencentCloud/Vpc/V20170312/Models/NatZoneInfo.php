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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT网关可用区集合
 *
 * @method string getZone() 获取可用区名称
 * @method void setZone(string $Zone) 设置可用区名称
 * @method integer getZoneId() 获取可用区id
 * @method void setZoneId(integer $ZoneId) 设置可用区id
 */
class NatZoneInfo extends AbstractModel
{
    /**
     * @var string 可用区名称
     */
    public $Zone;

    /**
     * @var integer 可用区id
     */
    public $ZoneId;

    /**
     * @param string $Zone 可用区名称
     * @param integer $ZoneId 可用区id
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
    }
}
