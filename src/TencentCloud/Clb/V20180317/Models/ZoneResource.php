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
 * 可用区资源列表
 *
 * @method string getMasterZone() 获取主可用区，如"ap-guangzhou-1"。
 * @method void setMasterZone(string $MasterZone) 设置主可用区，如"ap-guangzhou-1"。
 * @method array getResourceSet() 获取资源列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceSet(array $ResourceSet) 设置资源列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSlaveZone() 获取备可用区，如"ap-guangzhou-2"，单可用区时，备可用区为null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveZone(string $SlaveZone) 设置备可用区，如"ap-guangzhou-2"，单可用区时，备可用区为null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIPVersion() 获取IP版本，如IPv4，IPv6，IPv6_Nat。
 * @method void setIPVersion(string $IPVersion) 设置IP版本，如IPv4，IPv6，IPv6_Nat。
 * @method string getZoneRegion() 获取可用区所属地域，如：ap-guangzhou
 * @method void setZoneRegion(string $ZoneRegion) 设置可用区所属地域，如：ap-guangzhou
 * @method boolean getLocalZone() 获取可用区是否是LocalZone可用区，如：false
 * @method void setLocalZone(boolean $LocalZone) 设置可用区是否是LocalZone可用区，如：false
 * @method string getZoneResourceType() 获取可用区资源的类型，SHARED表示共享资源，EXCLUSIVE表示独占资源。
 * @method void setZoneResourceType(string $ZoneResourceType) 设置可用区资源的类型，SHARED表示共享资源，EXCLUSIVE表示独占资源。
 * @method boolean getEdgeZone() 获取可用区是否是EdgeZone可用区，如：false
 * @method void setEdgeZone(boolean $EdgeZone) 设置可用区是否是EdgeZone可用区，如：false
 */
class ZoneResource extends AbstractModel
{
    /**
     * @var string 主可用区，如"ap-guangzhou-1"。
     */
    public $MasterZone;

    /**
     * @var array 资源列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceSet;

    /**
     * @var string 备可用区，如"ap-guangzhou-2"，单可用区时，备可用区为null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveZone;

    /**
     * @var string IP版本，如IPv4，IPv6，IPv6_Nat。
     */
    public $IPVersion;

    /**
     * @var string 可用区所属地域，如：ap-guangzhou
     */
    public $ZoneRegion;

    /**
     * @var boolean 可用区是否是LocalZone可用区，如：false
     */
    public $LocalZone;

    /**
     * @var string 可用区资源的类型，SHARED表示共享资源，EXCLUSIVE表示独占资源。
     */
    public $ZoneResourceType;

    /**
     * @var boolean 可用区是否是EdgeZone可用区，如：false
     */
    public $EdgeZone;

    /**
     * @param string $MasterZone 主可用区，如"ap-guangzhou-1"。
     * @param array $ResourceSet 资源列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SlaveZone 备可用区，如"ap-guangzhou-2"，单可用区时，备可用区为null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IPVersion IP版本，如IPv4，IPv6，IPv6_Nat。
     * @param string $ZoneRegion 可用区所属地域，如：ap-guangzhou
     * @param boolean $LocalZone 可用区是否是LocalZone可用区，如：false
     * @param string $ZoneResourceType 可用区资源的类型，SHARED表示共享资源，EXCLUSIVE表示独占资源。
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
        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("ResourceSet",$param) and $param["ResourceSet"] !== null) {
            $this->ResourceSet = [];
            foreach ($param["ResourceSet"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->ResourceSet, $obj);
            }
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("IPVersion",$param) and $param["IPVersion"] !== null) {
            $this->IPVersion = $param["IPVersion"];
        }

        if (array_key_exists("ZoneRegion",$param) and $param["ZoneRegion"] !== null) {
            $this->ZoneRegion = $param["ZoneRegion"];
        }

        if (array_key_exists("LocalZone",$param) and $param["LocalZone"] !== null) {
            $this->LocalZone = $param["LocalZone"];
        }

        if (array_key_exists("ZoneResourceType",$param) and $param["ZoneResourceType"] !== null) {
            $this->ZoneResourceType = $param["ZoneResourceType"];
        }

        if (array_key_exists("EdgeZone",$param) and $param["EdgeZone"] !== null) {
            $this->EdgeZone = $param["EdgeZone"];
        }
    }
}
