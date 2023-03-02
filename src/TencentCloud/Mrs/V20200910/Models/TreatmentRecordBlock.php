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
 * 治疗记录
 *
 * @method ImmunohistochemistryBlock getImmunohistochemistry() 获取免疫组化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImmunohistochemistry(ImmunohistochemistryBlock $Immunohistochemistry) 设置免疫组化
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChiefComplaintBlock getChiefComplaint() 获取主诉
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChiefComplaint(ChiefComplaintBlock $ChiefComplaint) 设置主诉
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdmissionConditionBlock getAdmissionCondition() 获取入院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionCondition(AdmissionConditionBlock $AdmissionCondition) 设置入院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method BodyExaminationBlock getBodyExamination() 获取查体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyExamination(BodyExaminationBlock $BodyExamination) 设置查体
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdmissionDiagnosisBlock getAdmissionDiagnosis() 获取入院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionDiagnosis(AdmissionDiagnosisBlock $AdmissionDiagnosis) 设置入院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdmissionDiagnosisBlock getAdmissionTraditionalDiagnosis() 获取入院中医诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionTraditionalDiagnosis(AdmissionDiagnosisBlock $AdmissionTraditionalDiagnosis) 设置入院中医诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdmissionDiagnosisBlock getAdmissionModernDiagnosis() 获取入院西医诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionModernDiagnosis(AdmissionDiagnosisBlock $AdmissionModernDiagnosis) 设置入院西医诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method PathologicalDiagnosisBlock getPathologicalDiagnosis() 获取病理诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathologicalDiagnosis(PathologicalDiagnosisBlock $PathologicalDiagnosis) 设置病理诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getDiseasePresent() 获取现病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiseasePresent(DiseasePresentBlock $DiseasePresent) 设置现病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getSymptomsAndSigns() 获取体征
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSymptomsAndSigns(DiseasePresentBlock $SymptomsAndSigns) 设置体征
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getAuxiliaryExamination() 获取辅助检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuxiliaryExamination(DiseasePresentBlock $AuxiliaryExamination) 设置辅助检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getSpecialistExamination() 获取特殊检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecialistExamination(DiseasePresentBlock $SpecialistExamination) 设置特殊检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getMentalExamination() 获取精神检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMentalExamination(DiseasePresentBlock $MentalExamination) 设置精神检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getCheckRecord() 获取检查记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckRecord(DiseasePresentBlock $CheckRecord) 设置检查记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getInspectResult() 获取检查结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInspectResult(DiseasePresentBlock $InspectResult) 设置检查结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getCheckAndTreatmentProcess() 获取治疗经过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckAndTreatmentProcess(DiseasePresentBlock $CheckAndTreatmentProcess) 设置治疗经过
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryConditionBlock getSurgeryCondition() 获取手术经过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurgeryCondition(SurgeryConditionBlock $SurgeryCondition) 设置手术经过
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getIncisionHealing() 获取切口愈合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncisionHealing(DiseasePresentBlock $IncisionHealing) 设置切口愈合
注意：此字段可能返回 null，表示取不到有效值。
 * @method DischargeDiagnosisBlock getDischargeDiagnosis() 获取出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeDiagnosis(DischargeDiagnosisBlock $DischargeDiagnosis) 设置出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getDischargeTraditionalDiagnosis() 获取出院中医诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeTraditionalDiagnosis(DiseasePresentBlock $DischargeTraditionalDiagnosis) 设置出院中医诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method DischargeDiagnosisBlock getDischargeModernDiagnosis() 获取出院西医诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeModernDiagnosis(DischargeDiagnosisBlock $DischargeModernDiagnosis) 设置出院西医诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method DischargeConditionBlock getDischargeCondition() 获取出院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeCondition(DischargeConditionBlock $DischargeCondition) 设置出院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getDischargeInstructions() 获取出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeInstructions(DiseasePresentBlock $DischargeInstructions) 设置出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getTreatmentSuggestion() 获取治疗建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTreatmentSuggestion(DiseasePresentBlock $TreatmentSuggestion) 设置治疗建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getFollowUpRequirements() 获取随访
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowUpRequirements(DiseasePresentBlock $FollowUpRequirements) 设置随访
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getConditionChanges() 获取治疗情况变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionChanges(DiseasePresentBlock $ConditionChanges) 设置治疗情况变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getPulmonaryArterySystolicPressure() 获取收缩压
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPulmonaryArterySystolicPressure(DiseasePresentBlock $PulmonaryArterySystolicPressure) 设置收缩压
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getBCLC() 获取bclc分期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBCLC(DiseasePresentBlock $BCLC) 设置bclc分期
注意：此字段可能返回 null，表示取不到有效值。
 * @method PTNMBlock getPTNM() 获取PTNM分期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPTNM(PTNMBlock $PTNM) 设置PTNM分期
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getECOG() 获取ECOG评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setECOG(DiseasePresentBlock $ECOG) 设置ECOG评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getNRS() 获取NRS评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNRS(DiseasePresentBlock $NRS) 设置NRS评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiseasePresentBlock getKPS() 获取kps评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKPS(DiseasePresentBlock $KPS) 设置kps评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClinicalStaging getCancerstaging() 获取癌症分期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCancerstaging(ClinicalStaging $Cancerstaging) 设置癌症分期
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeathDateBlock getDeathDate() 获取死亡时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeathDate(DeathDateBlock $DeathDate) 设置死亡时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method RelapseDateBlock getRelapseDate() 获取复发日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelapseDate(RelapseDateBlock $RelapseDate) 设置复发日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeathDateBlock getObservationDays() 获取观察日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObservationDays(DeathDateBlock $ObservationDays) 设置观察日期
注意：此字段可能返回 null，表示取不到有效值。
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
 */
class TreatmentRecordBlock extends AbstractModel
{
    /**
     * @var ImmunohistochemistryBlock 免疫组化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Immunohistochemistry;

    /**
     * @var ChiefComplaintBlock 主诉
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChiefComplaint;

    /**
     * @var AdmissionConditionBlock 入院情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionCondition;

    /**
     * @var BodyExaminationBlock 查体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyExamination;

    /**
     * @var AdmissionDiagnosisBlock 入院诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionDiagnosis;

    /**
     * @var AdmissionDiagnosisBlock 入院中医诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionTraditionalDiagnosis;

    /**
     * @var AdmissionDiagnosisBlock 入院西医诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionModernDiagnosis;

    /**
     * @var PathologicalDiagnosisBlock 病理诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathologicalDiagnosis;

    /**
     * @var DiseasePresentBlock 现病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiseasePresent;

    /**
     * @var DiseasePresentBlock 体征
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SymptomsAndSigns;

    /**
     * @var DiseasePresentBlock 辅助检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuxiliaryExamination;

    /**
     * @var DiseasePresentBlock 特殊检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecialistExamination;

    /**
     * @var DiseasePresentBlock 精神检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MentalExamination;

    /**
     * @var DiseasePresentBlock 检查记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckRecord;

    /**
     * @var DiseasePresentBlock 检查结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InspectResult;

    /**
     * @var DiseasePresentBlock 治疗经过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckAndTreatmentProcess;

    /**
     * @var SurgeryConditionBlock 手术经过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SurgeryCondition;

    /**
     * @var DiseasePresentBlock 切口愈合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncisionHealing;

    /**
     * @var DischargeDiagnosisBlock 出院诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeDiagnosis;

    /**
     * @var DiseasePresentBlock 出院中医诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeTraditionalDiagnosis;

    /**
     * @var DischargeDiagnosisBlock 出院西医诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeModernDiagnosis;

    /**
     * @var DischargeConditionBlock 出院情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeCondition;

    /**
     * @var DiseasePresentBlock 出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeInstructions;

    /**
     * @var DiseasePresentBlock 治疗建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TreatmentSuggestion;

    /**
     * @var DiseasePresentBlock 随访
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowUpRequirements;

    /**
     * @var DiseasePresentBlock 治疗情况变化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionChanges;

    /**
     * @var DiseasePresentBlock 收缩压
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PulmonaryArterySystolicPressure;

    /**
     * @var DiseasePresentBlock bclc分期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BCLC;

    /**
     * @var PTNMBlock PTNM分期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PTNM;

    /**
     * @var DiseasePresentBlock ECOG评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ECOG;

    /**
     * @var DiseasePresentBlock NRS评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NRS;

    /**
     * @var DiseasePresentBlock kps评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KPS;

    /**
     * @var ClinicalStaging 癌症分期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cancerstaging;

    /**
     * @var DeathDateBlock 死亡时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeathDate;

    /**
     * @var RelapseDateBlock 复发日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelapseDate;

    /**
     * @var DeathDateBlock 观察日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObservationDays;

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
     * @param ImmunohistochemistryBlock $Immunohistochemistry 免疫组化
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChiefComplaintBlock $ChiefComplaint 主诉
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdmissionConditionBlock $AdmissionCondition 入院情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param BodyExaminationBlock $BodyExamination 查体
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdmissionDiagnosisBlock $AdmissionDiagnosis 入院诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdmissionDiagnosisBlock $AdmissionTraditionalDiagnosis 入院中医诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdmissionDiagnosisBlock $AdmissionModernDiagnosis 入院西医诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param PathologicalDiagnosisBlock $PathologicalDiagnosis 病理诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $DiseasePresent 现病史
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $SymptomsAndSigns 体征
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $AuxiliaryExamination 辅助检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $SpecialistExamination 特殊检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $MentalExamination 精神检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $CheckRecord 检查记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $InspectResult 检查结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $CheckAndTreatmentProcess 治疗经过
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryConditionBlock $SurgeryCondition 手术经过
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $IncisionHealing 切口愈合
注意：此字段可能返回 null，表示取不到有效值。
     * @param DischargeDiagnosisBlock $DischargeDiagnosis 出院诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $DischargeTraditionalDiagnosis 出院中医诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param DischargeDiagnosisBlock $DischargeModernDiagnosis 出院西医诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param DischargeConditionBlock $DischargeCondition 出院情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $DischargeInstructions 出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $TreatmentSuggestion 治疗建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $FollowUpRequirements 随访
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $ConditionChanges 治疗情况变化
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $PulmonaryArterySystolicPressure 收缩压
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $BCLC bclc分期
注意：此字段可能返回 null，表示取不到有效值。
     * @param PTNMBlock $PTNM PTNM分期
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $ECOG ECOG评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $NRS NRS评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiseasePresentBlock $KPS kps评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClinicalStaging $Cancerstaging 癌症分期
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeathDateBlock $DeathDate 死亡时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param RelapseDateBlock $RelapseDate 复发日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeathDateBlock $ObservationDays 观察日期
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Immunohistochemistry",$param) and $param["Immunohistochemistry"] !== null) {
            $this->Immunohistochemistry = new ImmunohistochemistryBlock();
            $this->Immunohistochemistry->deserialize($param["Immunohistochemistry"]);
        }

        if (array_key_exists("ChiefComplaint",$param) and $param["ChiefComplaint"] !== null) {
            $this->ChiefComplaint = new ChiefComplaintBlock();
            $this->ChiefComplaint->deserialize($param["ChiefComplaint"]);
        }

        if (array_key_exists("AdmissionCondition",$param) and $param["AdmissionCondition"] !== null) {
            $this->AdmissionCondition = new AdmissionConditionBlock();
            $this->AdmissionCondition->deserialize($param["AdmissionCondition"]);
        }

        if (array_key_exists("BodyExamination",$param) and $param["BodyExamination"] !== null) {
            $this->BodyExamination = new BodyExaminationBlock();
            $this->BodyExamination->deserialize($param["BodyExamination"]);
        }

        if (array_key_exists("AdmissionDiagnosis",$param) and $param["AdmissionDiagnosis"] !== null) {
            $this->AdmissionDiagnosis = new AdmissionDiagnosisBlock();
            $this->AdmissionDiagnosis->deserialize($param["AdmissionDiagnosis"]);
        }

        if (array_key_exists("AdmissionTraditionalDiagnosis",$param) and $param["AdmissionTraditionalDiagnosis"] !== null) {
            $this->AdmissionTraditionalDiagnosis = new AdmissionDiagnosisBlock();
            $this->AdmissionTraditionalDiagnosis->deserialize($param["AdmissionTraditionalDiagnosis"]);
        }

        if (array_key_exists("AdmissionModernDiagnosis",$param) and $param["AdmissionModernDiagnosis"] !== null) {
            $this->AdmissionModernDiagnosis = new AdmissionDiagnosisBlock();
            $this->AdmissionModernDiagnosis->deserialize($param["AdmissionModernDiagnosis"]);
        }

        if (array_key_exists("PathologicalDiagnosis",$param) and $param["PathologicalDiagnosis"] !== null) {
            $this->PathologicalDiagnosis = new PathologicalDiagnosisBlock();
            $this->PathologicalDiagnosis->deserialize($param["PathologicalDiagnosis"]);
        }

        if (array_key_exists("DiseasePresent",$param) and $param["DiseasePresent"] !== null) {
            $this->DiseasePresent = new DiseasePresentBlock();
            $this->DiseasePresent->deserialize($param["DiseasePresent"]);
        }

        if (array_key_exists("SymptomsAndSigns",$param) and $param["SymptomsAndSigns"] !== null) {
            $this->SymptomsAndSigns = new DiseasePresentBlock();
            $this->SymptomsAndSigns->deserialize($param["SymptomsAndSigns"]);
        }

        if (array_key_exists("AuxiliaryExamination",$param) and $param["AuxiliaryExamination"] !== null) {
            $this->AuxiliaryExamination = new DiseasePresentBlock();
            $this->AuxiliaryExamination->deserialize($param["AuxiliaryExamination"]);
        }

        if (array_key_exists("SpecialistExamination",$param) and $param["SpecialistExamination"] !== null) {
            $this->SpecialistExamination = new DiseasePresentBlock();
            $this->SpecialistExamination->deserialize($param["SpecialistExamination"]);
        }

        if (array_key_exists("MentalExamination",$param) and $param["MentalExamination"] !== null) {
            $this->MentalExamination = new DiseasePresentBlock();
            $this->MentalExamination->deserialize($param["MentalExamination"]);
        }

        if (array_key_exists("CheckRecord",$param) and $param["CheckRecord"] !== null) {
            $this->CheckRecord = new DiseasePresentBlock();
            $this->CheckRecord->deserialize($param["CheckRecord"]);
        }

        if (array_key_exists("InspectResult",$param) and $param["InspectResult"] !== null) {
            $this->InspectResult = new DiseasePresentBlock();
            $this->InspectResult->deserialize($param["InspectResult"]);
        }

        if (array_key_exists("CheckAndTreatmentProcess",$param) and $param["CheckAndTreatmentProcess"] !== null) {
            $this->CheckAndTreatmentProcess = new DiseasePresentBlock();
            $this->CheckAndTreatmentProcess->deserialize($param["CheckAndTreatmentProcess"]);
        }

        if (array_key_exists("SurgeryCondition",$param) and $param["SurgeryCondition"] !== null) {
            $this->SurgeryCondition = new SurgeryConditionBlock();
            $this->SurgeryCondition->deserialize($param["SurgeryCondition"]);
        }

        if (array_key_exists("IncisionHealing",$param) and $param["IncisionHealing"] !== null) {
            $this->IncisionHealing = new DiseasePresentBlock();
            $this->IncisionHealing->deserialize($param["IncisionHealing"]);
        }

        if (array_key_exists("DischargeDiagnosis",$param) and $param["DischargeDiagnosis"] !== null) {
            $this->DischargeDiagnosis = new DischargeDiagnosisBlock();
            $this->DischargeDiagnosis->deserialize($param["DischargeDiagnosis"]);
        }

        if (array_key_exists("DischargeTraditionalDiagnosis",$param) and $param["DischargeTraditionalDiagnosis"] !== null) {
            $this->DischargeTraditionalDiagnosis = new DiseasePresentBlock();
            $this->DischargeTraditionalDiagnosis->deserialize($param["DischargeTraditionalDiagnosis"]);
        }

        if (array_key_exists("DischargeModernDiagnosis",$param) and $param["DischargeModernDiagnosis"] !== null) {
            $this->DischargeModernDiagnosis = new DischargeDiagnosisBlock();
            $this->DischargeModernDiagnosis->deserialize($param["DischargeModernDiagnosis"]);
        }

        if (array_key_exists("DischargeCondition",$param) and $param["DischargeCondition"] !== null) {
            $this->DischargeCondition = new DischargeConditionBlock();
            $this->DischargeCondition->deserialize($param["DischargeCondition"]);
        }

        if (array_key_exists("DischargeInstructions",$param) and $param["DischargeInstructions"] !== null) {
            $this->DischargeInstructions = new DiseasePresentBlock();
            $this->DischargeInstructions->deserialize($param["DischargeInstructions"]);
        }

        if (array_key_exists("TreatmentSuggestion",$param) and $param["TreatmentSuggestion"] !== null) {
            $this->TreatmentSuggestion = new DiseasePresentBlock();
            $this->TreatmentSuggestion->deserialize($param["TreatmentSuggestion"]);
        }

        if (array_key_exists("FollowUpRequirements",$param) and $param["FollowUpRequirements"] !== null) {
            $this->FollowUpRequirements = new DiseasePresentBlock();
            $this->FollowUpRequirements->deserialize($param["FollowUpRequirements"]);
        }

        if (array_key_exists("ConditionChanges",$param) and $param["ConditionChanges"] !== null) {
            $this->ConditionChanges = new DiseasePresentBlock();
            $this->ConditionChanges->deserialize($param["ConditionChanges"]);
        }

        if (array_key_exists("PulmonaryArterySystolicPressure",$param) and $param["PulmonaryArterySystolicPressure"] !== null) {
            $this->PulmonaryArterySystolicPressure = new DiseasePresentBlock();
            $this->PulmonaryArterySystolicPressure->deserialize($param["PulmonaryArterySystolicPressure"]);
        }

        if (array_key_exists("BCLC",$param) and $param["BCLC"] !== null) {
            $this->BCLC = new DiseasePresentBlock();
            $this->BCLC->deserialize($param["BCLC"]);
        }

        if (array_key_exists("PTNM",$param) and $param["PTNM"] !== null) {
            $this->PTNM = new PTNMBlock();
            $this->PTNM->deserialize($param["PTNM"]);
        }

        if (array_key_exists("ECOG",$param) and $param["ECOG"] !== null) {
            $this->ECOG = new DiseasePresentBlock();
            $this->ECOG->deserialize($param["ECOG"]);
        }

        if (array_key_exists("NRS",$param) and $param["NRS"] !== null) {
            $this->NRS = new DiseasePresentBlock();
            $this->NRS->deserialize($param["NRS"]);
        }

        if (array_key_exists("KPS",$param) and $param["KPS"] !== null) {
            $this->KPS = new DiseasePresentBlock();
            $this->KPS->deserialize($param["KPS"]);
        }

        if (array_key_exists("Cancerstaging",$param) and $param["Cancerstaging"] !== null) {
            $this->Cancerstaging = new ClinicalStaging();
            $this->Cancerstaging->deserialize($param["Cancerstaging"]);
        }

        if (array_key_exists("DeathDate",$param) and $param["DeathDate"] !== null) {
            $this->DeathDate = new DeathDateBlock();
            $this->DeathDate->deserialize($param["DeathDate"]);
        }

        if (array_key_exists("RelapseDate",$param) and $param["RelapseDate"] !== null) {
            $this->RelapseDate = new RelapseDateBlock();
            $this->RelapseDate->deserialize($param["RelapseDate"]);
        }

        if (array_key_exists("ObservationDays",$param) and $param["ObservationDays"] !== null) {
            $this->ObservationDays = new DeathDateBlock();
            $this->ObservationDays->deserialize($param["ObservationDays"]);
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
    }
}
