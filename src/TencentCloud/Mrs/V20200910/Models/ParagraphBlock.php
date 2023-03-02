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
 * 文本块
 *
 * @method string getIncisionHealingText() 获取切口愈合情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncisionHealingText(string $IncisionHealingText) 设置切口愈合情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuxiliaryExaminationText() 获取辅助检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuxiliaryExaminationText(string $AuxiliaryExaminationText) 设置辅助检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecialExamText() 获取特殊检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecialExamText(string $SpecialExamText) 设置特殊检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutpatientDiagnosisText() 获取门诊诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutpatientDiagnosisText(string $OutpatientDiagnosisText) 设置门诊诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdmissionConditionText() 获取入院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionConditionText(string $AdmissionConditionText) 设置入院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckAndTreatmentProcessText() 获取诊疗经过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckAndTreatmentProcessText(string $CheckAndTreatmentProcessText) 设置诊疗经过
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSymptomsAndSignsText() 获取体征
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSymptomsAndSignsText(string $SymptomsAndSignsText) 设置体征
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDischargeInstructionsText() 获取出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeInstructionsText(string $DischargeInstructionsText) 设置出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdmissionDiagnosisText() 获取入院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionDiagnosisText(string $AdmissionDiagnosisText) 设置入院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSurgeryConditionText() 获取手术情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurgeryConditionText(string $SurgeryConditionText) 设置手术情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPathologicalDiagnosisText() 获取病理诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathologicalDiagnosisText(string $PathologicalDiagnosisText) 设置病理诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDischargeConditionText() 获取出院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeConditionText(string $DischargeConditionText) 设置出院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckRecordText() 获取检查记录

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckRecordText(string $CheckRecordText) 设置检查记录

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChiefComplaintText() 获取主诉
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChiefComplaintText(string $ChiefComplaintText) 设置主诉
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDischargeDiagnosisText() 获取出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeDiagnosisText(string $DischargeDiagnosisText) 设置出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMainDiseaseHistoryText() 获取既往史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainDiseaseHistoryText(string $MainDiseaseHistoryText) 设置既往史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiseasePresentText() 获取现病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiseasePresentText(string $DiseasePresentText) 设置现病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPersonalHistoryText() 获取个人史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonalHistoryText(string $PersonalHistoryText) 设置个人史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMenstruallHistoryText() 获取月经史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstruallHistoryText(string $MenstruallHistoryText) 设置月经史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObstericalHistoryText() 获取婚育史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObstericalHistoryText(string $ObstericalHistoryText) 设置婚育史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFamilyHistoryText() 获取家族史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFamilyHistoryText(string $FamilyHistoryText) 设置家族史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllergyHistoryText() 获取过敏史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllergyHistoryText(string $AllergyHistoryText) 设置过敏史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiseaseHistoryText() 获取病史信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiseaseHistoryText(string $DiseaseHistoryText) 设置病史信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtherDiagnosisText() 获取其它诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherDiagnosisText(string $OtherDiagnosisText) 设置其它诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBodyExaminationText() 获取体格检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyExaminationText(string $BodyExaminationText) 设置体格检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecialistExaminationText() 获取专科检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecialistExaminationText(string $SpecialistExaminationText) 设置专科检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTreatmentResultText() 获取治疗结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTreatmentResultText(string $TreatmentResultText) 设置治疗结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParagraphBlock extends AbstractModel
{
    /**
     * @var string 切口愈合情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncisionHealingText;

    /**
     * @var string 辅助检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuxiliaryExaminationText;

    /**
     * @var string 特殊检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecialExamText;

    /**
     * @var string 门诊诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutpatientDiagnosisText;

    /**
     * @var string 入院情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionConditionText;

    /**
     * @var string 诊疗经过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckAndTreatmentProcessText;

    /**
     * @var string 体征
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SymptomsAndSignsText;

    /**
     * @var string 出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeInstructionsText;

    /**
     * @var string 入院诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionDiagnosisText;

    /**
     * @var string 手术情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SurgeryConditionText;

    /**
     * @var string 病理诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathologicalDiagnosisText;

    /**
     * @var string 出院情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeConditionText;

    /**
     * @var string 检查记录

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckRecordText;

    /**
     * @var string 主诉
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChiefComplaintText;

    /**
     * @var string 出院诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeDiagnosisText;

    /**
     * @var string 既往史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainDiseaseHistoryText;

    /**
     * @var string 现病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiseasePresentText;

    /**
     * @var string 个人史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonalHistoryText;

    /**
     * @var string 月经史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstruallHistoryText;

    /**
     * @var string 婚育史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObstericalHistoryText;

    /**
     * @var string 家族史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FamilyHistoryText;

    /**
     * @var string 过敏史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllergyHistoryText;

    /**
     * @var string 病史信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiseaseHistoryText;

    /**
     * @var string 其它诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherDiagnosisText;

    /**
     * @var string 体格检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyExaminationText;

    /**
     * @var string 专科检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecialistExaminationText;

    /**
     * @var string 治疗结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TreatmentResultText;

    /**
     * @param string $IncisionHealingText 切口愈合情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuxiliaryExaminationText 辅助检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecialExamText 特殊检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutpatientDiagnosisText 门诊诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdmissionConditionText 入院情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckAndTreatmentProcessText 诊疗经过
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SymptomsAndSignsText 体征
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DischargeInstructionsText 出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdmissionDiagnosisText 入院诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SurgeryConditionText 手术情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PathologicalDiagnosisText 病理诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DischargeConditionText 出院情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckRecordText 检查记录

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChiefComplaintText 主诉
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DischargeDiagnosisText 出院诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MainDiseaseHistoryText 既往史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiseasePresentText 现病史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PersonalHistoryText 个人史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MenstruallHistoryText 月经史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObstericalHistoryText 婚育史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FamilyHistoryText 家族史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllergyHistoryText 过敏史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiseaseHistoryText 病史信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtherDiagnosisText 其它诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BodyExaminationText 体格检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecialistExaminationText 专科检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TreatmentResultText 治疗结果
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
        if (array_key_exists("IncisionHealingText",$param) and $param["IncisionHealingText"] !== null) {
            $this->IncisionHealingText = $param["IncisionHealingText"];
        }

        if (array_key_exists("AuxiliaryExaminationText",$param) and $param["AuxiliaryExaminationText"] !== null) {
            $this->AuxiliaryExaminationText = $param["AuxiliaryExaminationText"];
        }

        if (array_key_exists("SpecialExamText",$param) and $param["SpecialExamText"] !== null) {
            $this->SpecialExamText = $param["SpecialExamText"];
        }

        if (array_key_exists("OutpatientDiagnosisText",$param) and $param["OutpatientDiagnosisText"] !== null) {
            $this->OutpatientDiagnosisText = $param["OutpatientDiagnosisText"];
        }

        if (array_key_exists("AdmissionConditionText",$param) and $param["AdmissionConditionText"] !== null) {
            $this->AdmissionConditionText = $param["AdmissionConditionText"];
        }

        if (array_key_exists("CheckAndTreatmentProcessText",$param) and $param["CheckAndTreatmentProcessText"] !== null) {
            $this->CheckAndTreatmentProcessText = $param["CheckAndTreatmentProcessText"];
        }

        if (array_key_exists("SymptomsAndSignsText",$param) and $param["SymptomsAndSignsText"] !== null) {
            $this->SymptomsAndSignsText = $param["SymptomsAndSignsText"];
        }

        if (array_key_exists("DischargeInstructionsText",$param) and $param["DischargeInstructionsText"] !== null) {
            $this->DischargeInstructionsText = $param["DischargeInstructionsText"];
        }

        if (array_key_exists("AdmissionDiagnosisText",$param) and $param["AdmissionDiagnosisText"] !== null) {
            $this->AdmissionDiagnosisText = $param["AdmissionDiagnosisText"];
        }

        if (array_key_exists("SurgeryConditionText",$param) and $param["SurgeryConditionText"] !== null) {
            $this->SurgeryConditionText = $param["SurgeryConditionText"];
        }

        if (array_key_exists("PathologicalDiagnosisText",$param) and $param["PathologicalDiagnosisText"] !== null) {
            $this->PathologicalDiagnosisText = $param["PathologicalDiagnosisText"];
        }

        if (array_key_exists("DischargeConditionText",$param) and $param["DischargeConditionText"] !== null) {
            $this->DischargeConditionText = $param["DischargeConditionText"];
        }

        if (array_key_exists("CheckRecordText",$param) and $param["CheckRecordText"] !== null) {
            $this->CheckRecordText = $param["CheckRecordText"];
        }

        if (array_key_exists("ChiefComplaintText",$param) and $param["ChiefComplaintText"] !== null) {
            $this->ChiefComplaintText = $param["ChiefComplaintText"];
        }

        if (array_key_exists("DischargeDiagnosisText",$param) and $param["DischargeDiagnosisText"] !== null) {
            $this->DischargeDiagnosisText = $param["DischargeDiagnosisText"];
        }

        if (array_key_exists("MainDiseaseHistoryText",$param) and $param["MainDiseaseHistoryText"] !== null) {
            $this->MainDiseaseHistoryText = $param["MainDiseaseHistoryText"];
        }

        if (array_key_exists("DiseasePresentText",$param) and $param["DiseasePresentText"] !== null) {
            $this->DiseasePresentText = $param["DiseasePresentText"];
        }

        if (array_key_exists("PersonalHistoryText",$param) and $param["PersonalHistoryText"] !== null) {
            $this->PersonalHistoryText = $param["PersonalHistoryText"];
        }

        if (array_key_exists("MenstruallHistoryText",$param) and $param["MenstruallHistoryText"] !== null) {
            $this->MenstruallHistoryText = $param["MenstruallHistoryText"];
        }

        if (array_key_exists("ObstericalHistoryText",$param) and $param["ObstericalHistoryText"] !== null) {
            $this->ObstericalHistoryText = $param["ObstericalHistoryText"];
        }

        if (array_key_exists("FamilyHistoryText",$param) and $param["FamilyHistoryText"] !== null) {
            $this->FamilyHistoryText = $param["FamilyHistoryText"];
        }

        if (array_key_exists("AllergyHistoryText",$param) and $param["AllergyHistoryText"] !== null) {
            $this->AllergyHistoryText = $param["AllergyHistoryText"];
        }

        if (array_key_exists("DiseaseHistoryText",$param) and $param["DiseaseHistoryText"] !== null) {
            $this->DiseaseHistoryText = $param["DiseaseHistoryText"];
        }

        if (array_key_exists("OtherDiagnosisText",$param) and $param["OtherDiagnosisText"] !== null) {
            $this->OtherDiagnosisText = $param["OtherDiagnosisText"];
        }

        if (array_key_exists("BodyExaminationText",$param) and $param["BodyExaminationText"] !== null) {
            $this->BodyExaminationText = $param["BodyExaminationText"];
        }

        if (array_key_exists("SpecialistExaminationText",$param) and $param["SpecialistExaminationText"] !== null) {
            $this->SpecialistExaminationText = $param["SpecialistExaminationText"];
        }

        if (array_key_exists("TreatmentResultText",$param) and $param["TreatmentResultText"] !== null) {
            $this->TreatmentResultText = $param["TreatmentResultText"];
        }
    }
}
