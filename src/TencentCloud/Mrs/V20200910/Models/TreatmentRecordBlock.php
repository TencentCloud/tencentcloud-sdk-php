<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method void setImmunohistochemistry(ImmunohistochemistryBlock $Immunohistochemistry) 设置免疫组化
 * @method ChiefComplaintBlock getChiefComplaint() 获取主诉
 * @method void setChiefComplaint(ChiefComplaintBlock $ChiefComplaint) 设置主诉
 * @method AdmissionConditionBlock getAdmissionCondition() 获取入院情况
 * @method void setAdmissionCondition(AdmissionConditionBlock $AdmissionCondition) 设置入院情况
 * @method BodyExaminationBlock getBodyExamination() 获取查体
 * @method void setBodyExamination(BodyExaminationBlock $BodyExamination) 设置查体
 * @method AdmissionDiagnosisBlock getAdmissionDiagnosis() 获取入院诊断
 * @method void setAdmissionDiagnosis(AdmissionDiagnosisBlock $AdmissionDiagnosis) 设置入院诊断
 * @method AdmissionDiagnosisBlock getAdmissionTraditionalDiagnosis() 获取入院中医诊断
 * @method void setAdmissionTraditionalDiagnosis(AdmissionDiagnosisBlock $AdmissionTraditionalDiagnosis) 设置入院中医诊断
 * @method AdmissionDiagnosisBlock getAdmissionModernDiagnosis() 获取入院西医诊断
 * @method void setAdmissionModernDiagnosis(AdmissionDiagnosisBlock $AdmissionModernDiagnosis) 设置入院西医诊断
 * @method PathologicalDiagnosisBlock getPathologicalDiagnosis() 获取病理诊断
 * @method void setPathologicalDiagnosis(PathologicalDiagnosisBlock $PathologicalDiagnosis) 设置病理诊断
 * @method DiseasePresentBlock getDiseasePresent() 获取现病史
 * @method void setDiseasePresent(DiseasePresentBlock $DiseasePresent) 设置现病史
 * @method DiseasePresentBlock getSymptomsAndSigns() 获取体征
 * @method void setSymptomsAndSigns(DiseasePresentBlock $SymptomsAndSigns) 设置体征
 * @method DiseasePresentBlock getAuxiliaryExamination() 获取辅助检查
 * @method void setAuxiliaryExamination(DiseasePresentBlock $AuxiliaryExamination) 设置辅助检查
 * @method DiseasePresentBlock getSpecialistExamination() 获取特殊检查
 * @method void setSpecialistExamination(DiseasePresentBlock $SpecialistExamination) 设置特殊检查
 * @method DiseasePresentBlock getMentalExamination() 获取精神检查
 * @method void setMentalExamination(DiseasePresentBlock $MentalExamination) 设置精神检查
 * @method DiseasePresentBlock getCheckRecord() 获取检查记录
 * @method void setCheckRecord(DiseasePresentBlock $CheckRecord) 设置检查记录
 * @method DiseasePresentBlock getInspectResult() 获取检查结果
 * @method void setInspectResult(DiseasePresentBlock $InspectResult) 设置检查结果
 * @method DiseasePresentBlock getCheckAndTreatmentProcess() 获取治疗经过
 * @method void setCheckAndTreatmentProcess(DiseasePresentBlock $CheckAndTreatmentProcess) 设置治疗经过
 * @method SurgeryConditionBlock getSurgeryCondition() 获取手术经过
 * @method void setSurgeryCondition(SurgeryConditionBlock $SurgeryCondition) 设置手术经过
 * @method DiseasePresentBlock getIncisionHealing() 获取切口愈合
 * @method void setIncisionHealing(DiseasePresentBlock $IncisionHealing) 设置切口愈合
 * @method DischargeDiagnosisBlock getDischargeDiagnosis() 获取出院诊断
 * @method void setDischargeDiagnosis(DischargeDiagnosisBlock $DischargeDiagnosis) 设置出院诊断
 * @method DiseasePresentBlock getDischargeTraditionalDiagnosis() 获取出院中医诊断
 * @method void setDischargeTraditionalDiagnosis(DiseasePresentBlock $DischargeTraditionalDiagnosis) 设置出院中医诊断
 * @method DischargeDiagnosisBlock getDischargeModernDiagnosis() 获取出院西医诊断
 * @method void setDischargeModernDiagnosis(DischargeDiagnosisBlock $DischargeModernDiagnosis) 设置出院西医诊断
 * @method DischargeConditionBlock getDischargeCondition() 获取出院情况
 * @method void setDischargeCondition(DischargeConditionBlock $DischargeCondition) 设置出院情况
 * @method DiseasePresentBlock getDischargeInstructions() 获取出院医嘱
 * @method void setDischargeInstructions(DiseasePresentBlock $DischargeInstructions) 设置出院医嘱
 * @method DiseasePresentBlock getTreatmentSuggestion() 获取治疗建议
 * @method void setTreatmentSuggestion(DiseasePresentBlock $TreatmentSuggestion) 设置治疗建议
 * @method DiseasePresentBlock getFollowUpRequirements() 获取随访
 * @method void setFollowUpRequirements(DiseasePresentBlock $FollowUpRequirements) 设置随访
 * @method DiseasePresentBlock getConditionChanges() 获取治疗情况变化
 * @method void setConditionChanges(DiseasePresentBlock $ConditionChanges) 设置治疗情况变化
 * @method DiseasePresentBlock getPulmonaryArterySystolicPressure() 获取收缩压
 * @method void setPulmonaryArterySystolicPressure(DiseasePresentBlock $PulmonaryArterySystolicPressure) 设置收缩压
 * @method DiseasePresentBlock getBCLC() 获取bclc分期
 * @method void setBCLC(DiseasePresentBlock $BCLC) 设置bclc分期
 * @method PTNMBlock getPTNM() 获取PTNM分期
 * @method void setPTNM(PTNMBlock $PTNM) 设置PTNM分期
 * @method DiseasePresentBlock getECOG() 获取ECOG评分
 * @method void setECOG(DiseasePresentBlock $ECOG) 设置ECOG评分
 * @method DiseasePresentBlock getNRS() 获取NRS评分
 * @method void setNRS(DiseasePresentBlock $NRS) 设置NRS评分
 * @method DiseasePresentBlock getKPS() 获取kps评分
 * @method void setKPS(DiseasePresentBlock $KPS) 设置kps评分
 * @method ClinicalStaging getCancerstaging() 获取癌症分期
 * @method void setCancerstaging(ClinicalStaging $Cancerstaging) 设置癌症分期
 * @method DeathDateBlock getDeathDate() 获取死亡时间
 * @method void setDeathDate(DeathDateBlock $DeathDate) 设置死亡时间
 * @method RelapseDateBlock getRelapseDate() 获取复发日期
 * @method void setRelapseDate(RelapseDateBlock $RelapseDate) 设置复发日期
 * @method DeathDateBlock getObservationDays() 获取观察日期
 * @method void setObservationDays(DeathDateBlock $ObservationDays) 设置观察日期
 * @method string getIncisionHealingText() 获取切口愈合情况
 * @method void setIncisionHealingText(string $IncisionHealingText) 设置切口愈合情况
 * @method string getAuxiliaryExaminationText() 获取辅助检查
 * @method void setAuxiliaryExaminationText(string $AuxiliaryExaminationText) 设置辅助检查
 * @method string getSpecialExamText() 获取特殊检查
 * @method void setSpecialExamText(string $SpecialExamText) 设置特殊检查
 * @method string getOutpatientDiagnosisText() 获取门诊诊断
 * @method void setOutpatientDiagnosisText(string $OutpatientDiagnosisText) 设置门诊诊断
 * @method string getAdmissionConditionText() 获取入院情况
 * @method void setAdmissionConditionText(string $AdmissionConditionText) 设置入院情况
 * @method string getCheckAndTreatmentProcessText() 获取诊疗经过
 * @method void setCheckAndTreatmentProcessText(string $CheckAndTreatmentProcessText) 设置诊疗经过
 * @method string getSymptomsAndSignsText() 获取体征
 * @method void setSymptomsAndSignsText(string $SymptomsAndSignsText) 设置体征
 * @method string getDischargeInstructionsText() 获取出院医嘱
 * @method void setDischargeInstructionsText(string $DischargeInstructionsText) 设置出院医嘱
 * @method string getAdmissionDiagnosisText() 获取入院诊断
 * @method void setAdmissionDiagnosisText(string $AdmissionDiagnosisText) 设置入院诊断
 * @method string getSurgeryConditionText() 获取手术情况
 * @method void setSurgeryConditionText(string $SurgeryConditionText) 设置手术情况
 * @method string getPathologicalDiagnosisText() 获取病理诊断
 * @method void setPathologicalDiagnosisText(string $PathologicalDiagnosisText) 设置病理诊断
 * @method string getDischargeConditionText() 获取出院情况
 * @method void setDischargeConditionText(string $DischargeConditionText) 设置出院情况
 * @method string getCheckRecordText() 获取检查记录
 * @method void setCheckRecordText(string $CheckRecordText) 设置检查记录
 * @method string getChiefComplaintText() 获取主诉
 * @method void setChiefComplaintText(string $ChiefComplaintText) 设置主诉
 * @method string getDischargeDiagnosisText() 获取出院诊断
 * @method void setDischargeDiagnosisText(string $DischargeDiagnosisText) 设置出院诊断
 */
class TreatmentRecordBlock extends AbstractModel
{
    /**
     * @var ImmunohistochemistryBlock 免疫组化
     */
    public $Immunohistochemistry;

    /**
     * @var ChiefComplaintBlock 主诉
     */
    public $ChiefComplaint;

    /**
     * @var AdmissionConditionBlock 入院情况
     */
    public $AdmissionCondition;

    /**
     * @var BodyExaminationBlock 查体
     */
    public $BodyExamination;

    /**
     * @var AdmissionDiagnosisBlock 入院诊断
     */
    public $AdmissionDiagnosis;

    /**
     * @var AdmissionDiagnosisBlock 入院中医诊断
     */
    public $AdmissionTraditionalDiagnosis;

    /**
     * @var AdmissionDiagnosisBlock 入院西医诊断
     */
    public $AdmissionModernDiagnosis;

    /**
     * @var PathologicalDiagnosisBlock 病理诊断
     */
    public $PathologicalDiagnosis;

    /**
     * @var DiseasePresentBlock 现病史
     */
    public $DiseasePresent;

    /**
     * @var DiseasePresentBlock 体征
     */
    public $SymptomsAndSigns;

    /**
     * @var DiseasePresentBlock 辅助检查
     */
    public $AuxiliaryExamination;

    /**
     * @var DiseasePresentBlock 特殊检查
     */
    public $SpecialistExamination;

    /**
     * @var DiseasePresentBlock 精神检查
     */
    public $MentalExamination;

    /**
     * @var DiseasePresentBlock 检查记录
     */
    public $CheckRecord;

    /**
     * @var DiseasePresentBlock 检查结果
     */
    public $InspectResult;

    /**
     * @var DiseasePresentBlock 治疗经过
     */
    public $CheckAndTreatmentProcess;

    /**
     * @var SurgeryConditionBlock 手术经过
     */
    public $SurgeryCondition;

    /**
     * @var DiseasePresentBlock 切口愈合
     */
    public $IncisionHealing;

    /**
     * @var DischargeDiagnosisBlock 出院诊断
     */
    public $DischargeDiagnosis;

    /**
     * @var DiseasePresentBlock 出院中医诊断
     */
    public $DischargeTraditionalDiagnosis;

    /**
     * @var DischargeDiagnosisBlock 出院西医诊断
     */
    public $DischargeModernDiagnosis;

    /**
     * @var DischargeConditionBlock 出院情况
     */
    public $DischargeCondition;

    /**
     * @var DiseasePresentBlock 出院医嘱
     */
    public $DischargeInstructions;

    /**
     * @var DiseasePresentBlock 治疗建议
     */
    public $TreatmentSuggestion;

    /**
     * @var DiseasePresentBlock 随访
     */
    public $FollowUpRequirements;

    /**
     * @var DiseasePresentBlock 治疗情况变化
     */
    public $ConditionChanges;

    /**
     * @var DiseasePresentBlock 收缩压
     */
    public $PulmonaryArterySystolicPressure;

    /**
     * @var DiseasePresentBlock bclc分期
     */
    public $BCLC;

    /**
     * @var PTNMBlock PTNM分期
     */
    public $PTNM;

    /**
     * @var DiseasePresentBlock ECOG评分
     */
    public $ECOG;

    /**
     * @var DiseasePresentBlock NRS评分
     */
    public $NRS;

    /**
     * @var DiseasePresentBlock kps评分
     */
    public $KPS;

    /**
     * @var ClinicalStaging 癌症分期
     */
    public $Cancerstaging;

    /**
     * @var DeathDateBlock 死亡时间
     */
    public $DeathDate;

    /**
     * @var RelapseDateBlock 复发日期
     */
    public $RelapseDate;

    /**
     * @var DeathDateBlock 观察日期
     */
    public $ObservationDays;

    /**
     * @var string 切口愈合情况
     */
    public $IncisionHealingText;

    /**
     * @var string 辅助检查
     */
    public $AuxiliaryExaminationText;

    /**
     * @var string 特殊检查
     */
    public $SpecialExamText;

    /**
     * @var string 门诊诊断
     */
    public $OutpatientDiagnosisText;

    /**
     * @var string 入院情况
     */
    public $AdmissionConditionText;

    /**
     * @var string 诊疗经过
     */
    public $CheckAndTreatmentProcessText;

    /**
     * @var string 体征
     */
    public $SymptomsAndSignsText;

    /**
     * @var string 出院医嘱
     */
    public $DischargeInstructionsText;

    /**
     * @var string 入院诊断
     */
    public $AdmissionDiagnosisText;

    /**
     * @var string 手术情况
     */
    public $SurgeryConditionText;

    /**
     * @var string 病理诊断
     */
    public $PathologicalDiagnosisText;

    /**
     * @var string 出院情况
     */
    public $DischargeConditionText;

    /**
     * @var string 检查记录
     */
    public $CheckRecordText;

    /**
     * @var string 主诉
     */
    public $ChiefComplaintText;

    /**
     * @var string 出院诊断
     */
    public $DischargeDiagnosisText;

    /**
     * @param ImmunohistochemistryBlock $Immunohistochemistry 免疫组化
     * @param ChiefComplaintBlock $ChiefComplaint 主诉
     * @param AdmissionConditionBlock $AdmissionCondition 入院情况
     * @param BodyExaminationBlock $BodyExamination 查体
     * @param AdmissionDiagnosisBlock $AdmissionDiagnosis 入院诊断
     * @param AdmissionDiagnosisBlock $AdmissionTraditionalDiagnosis 入院中医诊断
     * @param AdmissionDiagnosisBlock $AdmissionModernDiagnosis 入院西医诊断
     * @param PathologicalDiagnosisBlock $PathologicalDiagnosis 病理诊断
     * @param DiseasePresentBlock $DiseasePresent 现病史
     * @param DiseasePresentBlock $SymptomsAndSigns 体征
     * @param DiseasePresentBlock $AuxiliaryExamination 辅助检查
     * @param DiseasePresentBlock $SpecialistExamination 特殊检查
     * @param DiseasePresentBlock $MentalExamination 精神检查
     * @param DiseasePresentBlock $CheckRecord 检查记录
     * @param DiseasePresentBlock $InspectResult 检查结果
     * @param DiseasePresentBlock $CheckAndTreatmentProcess 治疗经过
     * @param SurgeryConditionBlock $SurgeryCondition 手术经过
     * @param DiseasePresentBlock $IncisionHealing 切口愈合
     * @param DischargeDiagnosisBlock $DischargeDiagnosis 出院诊断
     * @param DiseasePresentBlock $DischargeTraditionalDiagnosis 出院中医诊断
     * @param DischargeDiagnosisBlock $DischargeModernDiagnosis 出院西医诊断
     * @param DischargeConditionBlock $DischargeCondition 出院情况
     * @param DiseasePresentBlock $DischargeInstructions 出院医嘱
     * @param DiseasePresentBlock $TreatmentSuggestion 治疗建议
     * @param DiseasePresentBlock $FollowUpRequirements 随访
     * @param DiseasePresentBlock $ConditionChanges 治疗情况变化
     * @param DiseasePresentBlock $PulmonaryArterySystolicPressure 收缩压
     * @param DiseasePresentBlock $BCLC bclc分期
     * @param PTNMBlock $PTNM PTNM分期
     * @param DiseasePresentBlock $ECOG ECOG评分
     * @param DiseasePresentBlock $NRS NRS评分
     * @param DiseasePresentBlock $KPS kps评分
     * @param ClinicalStaging $Cancerstaging 癌症分期
     * @param DeathDateBlock $DeathDate 死亡时间
     * @param RelapseDateBlock $RelapseDate 复发日期
     * @param DeathDateBlock $ObservationDays 观察日期
     * @param string $IncisionHealingText 切口愈合情况
     * @param string $AuxiliaryExaminationText 辅助检查
     * @param string $SpecialExamText 特殊检查
     * @param string $OutpatientDiagnosisText 门诊诊断
     * @param string $AdmissionConditionText 入院情况
     * @param string $CheckAndTreatmentProcessText 诊疗经过
     * @param string $SymptomsAndSignsText 体征
     * @param string $DischargeInstructionsText 出院医嘱
     * @param string $AdmissionDiagnosisText 入院诊断
     * @param string $SurgeryConditionText 手术情况
     * @param string $PathologicalDiagnosisText 病理诊断
     * @param string $DischargeConditionText 出院情况
     * @param string $CheckRecordText 检查记录
     * @param string $ChiefComplaintText 主诉
     * @param string $DischargeDiagnosisText 出院诊断
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
