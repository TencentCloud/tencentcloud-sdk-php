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
 * 生命体征
 *
 * @method ValueUnitItem getText() 获取生命体征总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(ValueUnitItem $Text) 设置生命体征总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getBodyTemperature() 获取体温
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyTemperature(ValueUnitItem $BodyTemperature) 设置体温
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getPulse() 获取脉率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPulse(ValueUnitItem $Pulse) 设置脉率
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getHeartRate() 获取心率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeartRate(ValueUnitItem $HeartRate) 设置心率
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getBreathingRate() 获取呼吸频率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBreathingRate(ValueUnitItem $BreathingRate) 设置呼吸频率
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getBodyHeight() 获取身高
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyHeight(ValueUnitItem $BodyHeight) 设置身高
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getBodyWeight() 获取体重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyWeight(ValueUnitItem $BodyWeight) 设置体重
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getBodyMassIndex() 获取体质指数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyMassIndex(ValueUnitItem $BodyMassIndex) 设置体质指数
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getWaistline() 获取腰围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaistline(ValueUnitItem $Waistline) 设置腰围
注意：此字段可能返回 null，表示取不到有效值。
 * @method GeneralExaminationVitalSignBloodPressure getBloodPressure() 获取血压
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBloodPressure(GeneralExaminationVitalSignBloodPressure $BloodPressure) 设置血压
注意：此字段可能返回 null，表示取不到有效值。
 */
class GeneralExaminationVitalSign extends AbstractModel
{
    /**
     * @var ValueUnitItem 生命体征总体描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var ValueUnitItem 体温
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyTemperature;

    /**
     * @var ValueUnitItem 脉率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pulse;

    /**
     * @var ValueUnitItem 心率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeartRate;

    /**
     * @var ValueUnitItem 呼吸频率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BreathingRate;

    /**
     * @var ValueUnitItem 身高
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyHeight;

    /**
     * @var ValueUnitItem 体重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyWeight;

    /**
     * @var ValueUnitItem 体质指数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyMassIndex;

    /**
     * @var ValueUnitItem 腰围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Waistline;

    /**
     * @var GeneralExaminationVitalSignBloodPressure 血压
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BloodPressure;

    /**
     * @param ValueUnitItem $Text 生命体征总体描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $BodyTemperature 体温
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $Pulse 脉率
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $HeartRate 心率
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $BreathingRate 呼吸频率
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $BodyHeight 身高
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $BodyWeight 体重
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $BodyMassIndex 体质指数
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $Waistline 腰围
注意：此字段可能返回 null，表示取不到有效值。
     * @param GeneralExaminationVitalSignBloodPressure $BloodPressure 血压
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
            $this->Text = new ValueUnitItem();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("BodyTemperature",$param) and $param["BodyTemperature"] !== null) {
            $this->BodyTemperature = new ValueUnitItem();
            $this->BodyTemperature->deserialize($param["BodyTemperature"]);
        }

        if (array_key_exists("Pulse",$param) and $param["Pulse"] !== null) {
            $this->Pulse = new ValueUnitItem();
            $this->Pulse->deserialize($param["Pulse"]);
        }

        if (array_key_exists("HeartRate",$param) and $param["HeartRate"] !== null) {
            $this->HeartRate = new ValueUnitItem();
            $this->HeartRate->deserialize($param["HeartRate"]);
        }

        if (array_key_exists("BreathingRate",$param) and $param["BreathingRate"] !== null) {
            $this->BreathingRate = new ValueUnitItem();
            $this->BreathingRate->deserialize($param["BreathingRate"]);
        }

        if (array_key_exists("BodyHeight",$param) and $param["BodyHeight"] !== null) {
            $this->BodyHeight = new ValueUnitItem();
            $this->BodyHeight->deserialize($param["BodyHeight"]);
        }

        if (array_key_exists("BodyWeight",$param) and $param["BodyWeight"] !== null) {
            $this->BodyWeight = new ValueUnitItem();
            $this->BodyWeight->deserialize($param["BodyWeight"]);
        }

        if (array_key_exists("BodyMassIndex",$param) and $param["BodyMassIndex"] !== null) {
            $this->BodyMassIndex = new ValueUnitItem();
            $this->BodyMassIndex->deserialize($param["BodyMassIndex"]);
        }

        if (array_key_exists("Waistline",$param) and $param["Waistline"] !== null) {
            $this->Waistline = new ValueUnitItem();
            $this->Waistline->deserialize($param["Waistline"]);
        }

        if (array_key_exists("BloodPressure",$param) and $param["BloodPressure"] !== null) {
            $this->BloodPressure = new GeneralExaminationVitalSignBloodPressure();
            $this->BloodPressure->deserialize($param["BloodPressure"]);
        }
    }
}
