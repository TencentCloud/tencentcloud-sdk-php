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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PrometheusZoneItem 响应结构体内的地域信息
 *
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method integer getZoneId() 获取<p>可用区 ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区 ID</p>
 * @method integer getZoneState() 获取<p>可用区状态( 0: 不可用；1: 可用)</p>
 * @method void setZoneState(integer $ZoneState) 设置<p>可用区状态( 0: 不可用；1: 可用)</p>
 * @method integer getRegionId() 获取<p>地域 ID</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域 ID</p>
 * @method string getZoneName() 获取<p>可用区名（目前为中文）</p>
 * @method void setZoneName(string $ZoneName) 设置<p>可用区名（目前为中文）</p>
 * @method integer getZoneResourceState() 获取<p>可用区资源状态(0:资源不足，不可使用；1:资源足够)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneResourceState(integer $ZoneResourceState) 设置<p>可用区资源状态(0:资源不足，不可使用；1:资源足够)</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusZoneItem extends AbstractModel
{
    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var integer <p>可用区 ID</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>可用区状态( 0: 不可用；1: 可用)</p>
     */
    public $ZoneState;

    /**
     * @var integer <p>地域 ID</p>
     */
    public $RegionId;

    /**
     * @var string <p>可用区名（目前为中文）</p>
     */
    public $ZoneName;

    /**
     * @var integer <p>可用区资源状态(0:资源不足，不可使用；1:资源足够)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneResourceState;

    /**
     * @param string $Zone <p>可用区</p>
     * @param integer $ZoneId <p>可用区 ID</p>
     * @param integer $ZoneState <p>可用区状态( 0: 不可用；1: 可用)</p>
     * @param integer $RegionId <p>地域 ID</p>
     * @param string $ZoneName <p>可用区名（目前为中文）</p>
     * @param integer $ZoneResourceState <p>可用区资源状态(0:资源不足，不可使用；1:资源足够)</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ZoneResourceState",$param) and $param["ZoneResourceState"] !== null) {
            $this->ZoneResourceState = $param["ZoneResourceState"];
        }
    }
}
