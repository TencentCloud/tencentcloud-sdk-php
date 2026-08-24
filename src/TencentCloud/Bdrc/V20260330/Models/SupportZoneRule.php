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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区级容灾规则，描述某个生产可用区可容灾到的目标可用区集合。
 *
 * @method string getSourceZone() 获取生产可用区。
 * @method void setSourceZone(string $SourceZone) 设置生产可用区。
 * @method boolean getIsAllZoneSupport() 获取是否支持容灾到生产地域内的全部可用区。true 时 TargetZones 可忽略。
 * @method void setIsAllZoneSupport(boolean $IsAllZoneSupport) 设置是否支持容灾到生产地域内的全部可用区。true 时 TargetZones 可忽略。
 * @method array getTargetZones() 获取目标可用区列表。当 IsAllZoneSupport=false 时枚举具体可容灾到的可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetZones(array $TargetZones) 设置目标可用区列表。当 IsAllZoneSupport=false 时枚举具体可容灾到的可用区。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SupportZoneRule extends AbstractModel
{
    /**
     * @var string 生产可用区。
     */
    public $SourceZone;

    /**
     * @var boolean 是否支持容灾到生产地域内的全部可用区。true 时 TargetZones 可忽略。
     */
    public $IsAllZoneSupport;

    /**
     * @var array 目标可用区列表。当 IsAllZoneSupport=false 时枚举具体可容灾到的可用区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetZones;

    /**
     * @param string $SourceZone 生产可用区。
     * @param boolean $IsAllZoneSupport 是否支持容灾到生产地域内的全部可用区。true 时 TargetZones 可忽略。
     * @param array $TargetZones 目标可用区列表。当 IsAllZoneSupport=false 时枚举具体可容灾到的可用区。
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
        if (array_key_exists("SourceZone",$param) and $param["SourceZone"] !== null) {
            $this->SourceZone = $param["SourceZone"];
        }

        if (array_key_exists("IsAllZoneSupport",$param) and $param["IsAllZoneSupport"] !== null) {
            $this->IsAllZoneSupport = $param["IsAllZoneSupport"];
        }

        if (array_key_exists("TargetZones",$param) and $param["TargetZones"] !== null) {
            $this->TargetZones = $param["TargetZones"];
        }
    }
}
