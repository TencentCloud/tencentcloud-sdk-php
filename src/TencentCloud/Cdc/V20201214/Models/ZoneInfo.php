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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区信息
 *
 * @method string getZone() 获取可用区名称
 * @method void setZone(string $Zone) 设置可用区名称
 * @method string getZoneName() 获取可用区描述
 * @method void setZoneName(string $ZoneName) 设置可用区描述
 * @method integer getZoneId() 获取可用区ID
 * @method void setZoneId(integer $ZoneId) 设置可用区ID
 * @method string getZoneState() 获取可用区状态，包含AVAILABLE和UNAVAILABLE。AVAILABLE代表可用，UNAVAILABLE代表不可用。
 * @method void setZoneState(string $ZoneState) 设置可用区状态，包含AVAILABLE和UNAVAILABLE。AVAILABLE代表可用，UNAVAILABLE代表不可用。
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 可用区名称
     */
    public $Zone;

    /**
     * @var string 可用区描述
     */
    public $ZoneName;

    /**
     * @var integer 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 可用区状态，包含AVAILABLE和UNAVAILABLE。AVAILABLE代表可用，UNAVAILABLE代表不可用。
     */
    public $ZoneState;

    /**
     * @param string $Zone 可用区名称
     * @param string $ZoneName 可用区描述
     * @param integer $ZoneId 可用区ID
     * @param string $ZoneState 可用区状态，包含AVAILABLE和UNAVAILABLE。AVAILABLE代表可用，UNAVAILABLE代表不可用。
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

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneState",$param) and $param["ZoneState"] !== null) {
            $this->ZoneState = $param["ZoneState"];
        }
    }
}
