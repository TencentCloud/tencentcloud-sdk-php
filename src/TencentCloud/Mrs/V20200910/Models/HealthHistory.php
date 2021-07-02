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
 * 健康史信息
 *
 * @method DiseaseHistory getDiseaseHistory() 获取疾病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiseaseHistory(DiseaseHistory $DiseaseHistory) 设置疾病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method FamilyHistory getFamilyHistory() 获取家族史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFamilyHistory(FamilyHistory $FamilyHistory) 设置家族史
注意：此字段可能返回 null，表示取不到有效值。
 * @method MarryHistory getMarryHistory() 获取婚育史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarryHistory(MarryHistory $MarryHistory) 设置婚育史
注意：此字段可能返回 null，表示取不到有效值。
 * @method PersonalHistory getPersonalHistory() 获取个人史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonalHistory(PersonalHistory $PersonalHistory) 设置个人史
注意：此字段可能返回 null，表示取不到有效值。
 * @method MenstrualHistory getMenstrualHistory() 获取月经史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstrualHistory(MenstrualHistory $MenstrualHistory) 设置月经史
注意：此字段可能返回 null，表示取不到有效值。
 */
class HealthHistory extends AbstractModel
{
    /**
     * @var DiseaseHistory 疾病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiseaseHistory;

    /**
     * @var FamilyHistory 家族史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FamilyHistory;

    /**
     * @var MarryHistory 婚育史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MarryHistory;

    /**
     * @var PersonalHistory 个人史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonalHistory;

    /**
     * @var MenstrualHistory 月经史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstrualHistory;

    /**
     * @param DiseaseHistory $DiseaseHistory 疾病史
注意：此字段可能返回 null，表示取不到有效值。
     * @param FamilyHistory $FamilyHistory 家族史
注意：此字段可能返回 null，表示取不到有效值。
     * @param MarryHistory $MarryHistory 婚育史
注意：此字段可能返回 null，表示取不到有效值。
     * @param PersonalHistory $PersonalHistory 个人史
注意：此字段可能返回 null，表示取不到有效值。
     * @param MenstrualHistory $MenstrualHistory 月经史
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
        if (array_key_exists("DiseaseHistory",$param) and $param["DiseaseHistory"] !== null) {
            $this->DiseaseHistory = new DiseaseHistory();
            $this->DiseaseHistory->deserialize($param["DiseaseHistory"]);
        }

        if (array_key_exists("FamilyHistory",$param) and $param["FamilyHistory"] !== null) {
            $this->FamilyHistory = new FamilyHistory();
            $this->FamilyHistory->deserialize($param["FamilyHistory"]);
        }

        if (array_key_exists("MarryHistory",$param) and $param["MarryHistory"] !== null) {
            $this->MarryHistory = new MarryHistory();
            $this->MarryHistory->deserialize($param["MarryHistory"]);
        }

        if (array_key_exists("PersonalHistory",$param) and $param["PersonalHistory"] !== null) {
            $this->PersonalHistory = new PersonalHistory();
            $this->PersonalHistory->deserialize($param["PersonalHistory"]);
        }

        if (array_key_exists("MenstrualHistory",$param) and $param["MenstrualHistory"] !== null) {
            $this->MenstrualHistory = new MenstrualHistory();
            $this->MenstrualHistory->deserialize($param["MenstrualHistory"]);
        }
    }
}
