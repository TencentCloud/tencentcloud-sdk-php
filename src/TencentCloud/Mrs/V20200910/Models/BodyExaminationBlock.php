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
 * 查体
 *
 * @method BodyTemperatureBlock getBodyTemperature() 获取体温
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyTemperature(BodyTemperatureBlock $BodyTemperature) 设置体温
注意：此字段可能返回 null，表示取不到有效值。
 * @method BodyTemperatureBlock getPulse() 获取脉搏
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPulse(BodyTemperatureBlock $Pulse) 设置脉搏
注意：此字段可能返回 null，表示取不到有效值。
 * @method BodyTemperatureBlock getBreathe() 获取呼吸
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBreathe(BodyTemperatureBlock $Breathe) 设置呼吸
注意：此字段可能返回 null，表示取不到有效值。
 * @method BloodPressureBlock getBloodPressure() 获取血压
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBloodPressure(BloodPressureBlock $BloodPressure) 设置血压
注意：此字段可能返回 null，表示取不到有效值。
 */
class BodyExaminationBlock extends AbstractModel
{
    /**
     * @var BodyTemperatureBlock 体温
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyTemperature;

    /**
     * @var BodyTemperatureBlock 脉搏
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pulse;

    /**
     * @var BodyTemperatureBlock 呼吸
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Breathe;

    /**
     * @var BloodPressureBlock 血压
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BloodPressure;

    /**
     * @param BodyTemperatureBlock $BodyTemperature 体温
注意：此字段可能返回 null，表示取不到有效值。
     * @param BodyTemperatureBlock $Pulse 脉搏
注意：此字段可能返回 null，表示取不到有效值。
     * @param BodyTemperatureBlock $Breathe 呼吸
注意：此字段可能返回 null，表示取不到有效值。
     * @param BloodPressureBlock $BloodPressure 血压
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
        if (array_key_exists("BodyTemperature",$param) and $param["BodyTemperature"] !== null) {
            $this->BodyTemperature = new BodyTemperatureBlock();
            $this->BodyTemperature->deserialize($param["BodyTemperature"]);
        }

        if (array_key_exists("Pulse",$param) and $param["Pulse"] !== null) {
            $this->Pulse = new BodyTemperatureBlock();
            $this->Pulse->deserialize($param["Pulse"]);
        }

        if (array_key_exists("Breathe",$param) and $param["Breathe"] !== null) {
            $this->Breathe = new BodyTemperatureBlock();
            $this->Breathe->deserialize($param["Breathe"]);
        }

        if (array_key_exists("BloodPressure",$param) and $param["BloodPressure"] !== null) {
            $this->BloodPressure = new BloodPressureBlock();
            $this->BloodPressure->deserialize($param["BloodPressure"]);
        }
    }
}
