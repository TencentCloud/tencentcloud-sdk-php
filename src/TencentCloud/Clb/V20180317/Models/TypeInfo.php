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
 * 运营商类型信息
 *
 * @method string getType() 获取运营商类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置运营商类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSpecAvailabilitySet() 获取规格可用性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecAvailabilitySet(array $SpecAvailabilitySet) 设置规格可用性
注意：此字段可能返回 null，表示取不到有效值。
 */
class TypeInfo extends AbstractModel
{
    /**
     * @var string 运营商类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array 规格可用性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecAvailabilitySet;

    /**
     * @param string $Type 运营商类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SpecAvailabilitySet 规格可用性
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

        if (array_key_exists("SpecAvailabilitySet",$param) and $param["SpecAvailabilitySet"] !== null) {
            $this->SpecAvailabilitySet = [];
            foreach ($param["SpecAvailabilitySet"] as $key => $value){
                $obj = new SpecAvailability();
                $obj->deserialize($value);
                array_push($this->SpecAvailabilitySet, $obj);
            }
        }
    }
}
