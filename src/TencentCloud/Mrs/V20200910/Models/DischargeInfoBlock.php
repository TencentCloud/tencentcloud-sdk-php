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
 * 出入院结构体
 *
 * @method DiseaseHistoryBlock getDiseaseHistory() 获取疾病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiseaseHistory(DiseaseHistoryBlock $DiseaseHistory) 设置疾病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method PersonalHistoryBlock getPersonalHistory() 获取个人史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonalHistory(PersonalHistoryBlock $PersonalHistory) 设置个人史
注意：此字段可能返回 null，表示取不到有效值。
 * @method DrugHistoryBlock getDrugHistory() 获取药物史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrugHistory(DrugHistoryBlock $DrugHistory) 设置药物史
注意：此字段可能返回 null，表示取不到有效值。
 * @method TreatmentRecordBlock getTreatmentRecord() 获取治疗相关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTreatmentRecord(TreatmentRecordBlock $TreatmentRecord) 设置治疗相关
注意：此字段可能返回 null，表示取不到有效值。
 * @method ParagraphBlock getParagraphBlock() 获取文本段落
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParagraphBlock(ParagraphBlock $ParagraphBlock) 设置文本段落
注意：此字段可能返回 null，表示取不到有效值。
 */
class DischargeInfoBlock extends AbstractModel
{
    /**
     * @var DiseaseHistoryBlock 疾病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiseaseHistory;

    /**
     * @var PersonalHistoryBlock 个人史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonalHistory;

    /**
     * @var DrugHistoryBlock 药物史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrugHistory;

    /**
     * @var TreatmentRecordBlock 治疗相关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TreatmentRecord;

    /**
     * @var ParagraphBlock 文本段落
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParagraphBlock;

    /**
     * @param DiseaseHistoryBlock $DiseaseHistory 疾病史
注意：此字段可能返回 null，表示取不到有效值。
     * @param PersonalHistoryBlock $PersonalHistory 个人史
注意：此字段可能返回 null，表示取不到有效值。
     * @param DrugHistoryBlock $DrugHistory 药物史
注意：此字段可能返回 null，表示取不到有效值。
     * @param TreatmentRecordBlock $TreatmentRecord 治疗相关
注意：此字段可能返回 null，表示取不到有效值。
     * @param ParagraphBlock $ParagraphBlock 文本段落
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
            $this->DiseaseHistory = new DiseaseHistoryBlock();
            $this->DiseaseHistory->deserialize($param["DiseaseHistory"]);
        }

        if (array_key_exists("PersonalHistory",$param) and $param["PersonalHistory"] !== null) {
            $this->PersonalHistory = new PersonalHistoryBlock();
            $this->PersonalHistory->deserialize($param["PersonalHistory"]);
        }

        if (array_key_exists("DrugHistory",$param) and $param["DrugHistory"] !== null) {
            $this->DrugHistory = new DrugHistoryBlock();
            $this->DrugHistory->deserialize($param["DrugHistory"]);
        }

        if (array_key_exists("TreatmentRecord",$param) and $param["TreatmentRecord"] !== null) {
            $this->TreatmentRecord = new TreatmentRecordBlock();
            $this->TreatmentRecord->deserialize($param["TreatmentRecord"]);
        }

        if (array_key_exists("ParagraphBlock",$param) and $param["ParagraphBlock"] !== null) {
            $this->ParagraphBlock = new ParagraphBlock();
            $this->ParagraphBlock->deserialize($param["ParagraphBlock"]);
        }
    }
}
