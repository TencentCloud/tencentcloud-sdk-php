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
 * 疾病史
 *
 * @method MainDiseaseHistoryBlock getMainDiseaseHistory() 获取主要病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainDiseaseHistory(MainDiseaseHistoryBlock $MainDiseaseHistory) 设置主要病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method MainDiseaseHistoryBlock getAllergyHistory() 获取过敏史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllergyHistory(MainDiseaseHistoryBlock $AllergyHistory) 设置过敏史
注意：此字段可能返回 null，表示取不到有效值。
 * @method MainDiseaseHistoryBlock getInfectHistory() 获取注射史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfectHistory(MainDiseaseHistoryBlock $InfectHistory) 设置注射史
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryHistoryBlock getSurgeryHistory() 获取手术史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurgeryHistory(SurgeryHistoryBlock $SurgeryHistory) 设置手术史
注意：此字段可能返回 null，表示取不到有效值。
 * @method TransfusionHistoryBlock getTransfusionHistory() 获取输血史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransfusionHistory(TransfusionHistoryBlock $TransfusionHistory) 设置输血史
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiseaseHistoryBlock extends AbstractModel
{
    /**
     * @var MainDiseaseHistoryBlock 主要病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainDiseaseHistory;

    /**
     * @var MainDiseaseHistoryBlock 过敏史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllergyHistory;

    /**
     * @var MainDiseaseHistoryBlock 注射史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InfectHistory;

    /**
     * @var SurgeryHistoryBlock 手术史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SurgeryHistory;

    /**
     * @var TransfusionHistoryBlock 输血史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransfusionHistory;

    /**
     * @param MainDiseaseHistoryBlock $MainDiseaseHistory 主要病史
注意：此字段可能返回 null，表示取不到有效值。
     * @param MainDiseaseHistoryBlock $AllergyHistory 过敏史
注意：此字段可能返回 null，表示取不到有效值。
     * @param MainDiseaseHistoryBlock $InfectHistory 注射史
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryHistoryBlock $SurgeryHistory 手术史
注意：此字段可能返回 null，表示取不到有效值。
     * @param TransfusionHistoryBlock $TransfusionHistory 输血史
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
        if (array_key_exists("MainDiseaseHistory",$param) and $param["MainDiseaseHistory"] !== null) {
            $this->MainDiseaseHistory = new MainDiseaseHistoryBlock();
            $this->MainDiseaseHistory->deserialize($param["MainDiseaseHistory"]);
        }

        if (array_key_exists("AllergyHistory",$param) and $param["AllergyHistory"] !== null) {
            $this->AllergyHistory = new MainDiseaseHistoryBlock();
            $this->AllergyHistory->deserialize($param["AllergyHistory"]);
        }

        if (array_key_exists("InfectHistory",$param) and $param["InfectHistory"] !== null) {
            $this->InfectHistory = new MainDiseaseHistoryBlock();
            $this->InfectHistory->deserialize($param["InfectHistory"]);
        }

        if (array_key_exists("SurgeryHistory",$param) and $param["SurgeryHistory"] !== null) {
            $this->SurgeryHistory = new SurgeryHistoryBlock();
            $this->SurgeryHistory->deserialize($param["SurgeryHistory"]);
        }

        if (array_key_exists("TransfusionHistory",$param) and $param["TransfusionHistory"] !== null) {
            $this->TransfusionHistory = new TransfusionHistoryBlock();
            $this->TransfusionHistory->deserialize($param["TransfusionHistory"]);
        }
    }
}
