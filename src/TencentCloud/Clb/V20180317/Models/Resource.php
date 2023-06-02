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
 * 资源详细信息
 *
 * @method array getType() 获取运营商内具体资源信息，如"CMCC", "CUCC", "CTCC", "BGP", "INTERNAL"。
 * @method void setType(array $Type) 设置运营商内具体资源信息，如"CMCC", "CUCC", "CTCC", "BGP", "INTERNAL"。
 * @method string getIsp() 获取运营商信息，如"CMCC", "CUCC", "CTCC", "BGP", "INTERNAL"。
 * @method void setIsp(string $Isp) 设置运营商信息，如"CMCC", "CUCC", "CTCC", "BGP", "INTERNAL"。
 * @method array getAvailabilitySet() 获取可用资源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailabilitySet(array $AvailabilitySet) 设置可用资源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTypeSet() 获取运营商类型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeSet(array $TypeSet) 设置运营商类型信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Resource extends AbstractModel
{
    /**
     * @var array 运营商内具体资源信息，如"CMCC", "CUCC", "CTCC", "BGP", "INTERNAL"。
     */
    public $Type;

    /**
     * @var string 运营商信息，如"CMCC", "CUCC", "CTCC", "BGP", "INTERNAL"。
     */
    public $Isp;

    /**
     * @var array 可用资源。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailabilitySet;

    /**
     * @var array 运营商类型信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeSet;

    /**
     * @param array $Type 运营商内具体资源信息，如"CMCC", "CUCC", "CTCC", "BGP", "INTERNAL"。
     * @param string $Isp 运营商信息，如"CMCC", "CUCC", "CTCC", "BGP", "INTERNAL"。
     * @param array $AvailabilitySet 可用资源。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TypeSet 运营商类型信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("AvailabilitySet",$param) and $param["AvailabilitySet"] !== null) {
            $this->AvailabilitySet = [];
            foreach ($param["AvailabilitySet"] as $key => $value){
                $obj = new ResourceAvailability();
                $obj->deserialize($value);
                array_push($this->AvailabilitySet, $obj);
            }
        }

        if (array_key_exists("TypeSet",$param) and $param["TypeSet"] !== null) {
            $this->TypeSet = [];
            foreach ($param["TypeSet"] as $key => $value){
                $obj = new TypeInfo();
                $obj->deserialize($value);
                array_push($this->TypeSet, $obj);
            }
        }
    }
}
