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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 血压
 *
 * @method BloodPressureItem getText() 获取血压
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(BloodPressureItem $Text) 设置血压
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSystolicDiastolicPressure() 获取收缩压/舒张压
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystolicDiastolicPressure(array $SystolicDiastolicPressure) 设置收缩压/舒张压
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSystolicPressure() 获取收缩压
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystolicPressure(array $SystolicPressure) 设置收缩压
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDiastolicPressure() 获取舒张压
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiastolicPressure(array $DiastolicPressure) 设置舒张压
注意：此字段可能返回 null，表示取不到有效值。
 */
class GeneralExaminationVitalSignBloodPressure extends AbstractModel
{
    /**
     * @var BloodPressureItem 血压
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var array 收缩压/舒张压
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystolicDiastolicPressure;

    /**
     * @var array 收缩压
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystolicPressure;

    /**
     * @var array 舒张压
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiastolicPressure;

    /**
     * @param BloodPressureItem $Text 血压
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SystolicDiastolicPressure 收缩压/舒张压
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SystolicPressure 收缩压
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DiastolicPressure 舒张压
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new BloodPressureItem();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("SystolicDiastolicPressure",$param) and $param["SystolicDiastolicPressure"] !== null) {
            $this->SystolicDiastolicPressure = [];
            foreach ($param["SystolicDiastolicPressure"] as $key => $value){
                $obj = new BloodPressureItem();
                $obj->deserialize($value);
                array_push($this->SystolicDiastolicPressure, $obj);
            }
        }

        if (array_key_exists("SystolicPressure",$param) and $param["SystolicPressure"] !== null) {
            $this->SystolicPressure = [];
            foreach ($param["SystolicPressure"] as $key => $value){
                $obj = new BloodPressureItem();
                $obj->deserialize($value);
                array_push($this->SystolicPressure, $obj);
            }
        }

        if (array_key_exists("DiastolicPressure",$param) and $param["DiastolicPressure"] !== null) {
            $this->DiastolicPressure = [];
            foreach ($param["DiastolicPressure"] as $key => $value){
                $obj = new BloodPressureItem();
                $obj->deserialize($value);
                array_push($this->DiastolicPressure, $obj);
            }
        }
    }
}
