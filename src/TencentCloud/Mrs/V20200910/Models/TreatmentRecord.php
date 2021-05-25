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
 * 病历
 *
 * @method string getDmissionCondition() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDmissionCondition(string $DmissionCondition) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChiefComplaint() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChiefComplaint(string $ChiefComplaint) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiseasePresent() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiseasePresent(string $DiseasePresent) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSymptomsAndSigns() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSymptomsAndSigns(string $SymptomsAndSigns) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuxiliaryExamination() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuxiliaryExamination(string $AuxiliaryExamination) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBodyExamination() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyExamination(string $BodyExamination) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecialistExamination() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecialistExamination(string $SpecialistExamination) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMentalExamination() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMentalExamination(string $MentalExamination) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckRecord() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckRecord(string $CheckRecord) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInspectResult() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInspectResult(string $InspectResult) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncisionHealing() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncisionHealing(string $IncisionHealing) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTreatmentSuggestion() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTreatmentSuggestion(string $TreatmentSuggestion) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFollowUpRequirements() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowUpRequirements(string $FollowUpRequirements) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckAndTreatmentProcess() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckAndTreatmentProcess(string $CheckAndTreatmentProcess) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSurgeryCondition() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurgeryCondition(string $SurgeryCondition) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConditionChanges() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionChanges(string $ConditionChanges) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDischargeCondition() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeCondition(string $DischargeCondition) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPTNM() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPTNM(string $PTNM) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPTNMM() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPTNMM(string $PTNMM) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPTNMN() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPTNMN(string $PTNMN) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPTNMT() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPTNMT(string $PTNMT) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getECOG() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setECOG(string $ECOG) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNRS() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNRS(string $NRS) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKPS() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKPS(string $KPS) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeathDate() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeathDate(string $DeathDate) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelapseDate() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelapseDate(string $RelapseDate) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObservationDays() 获取“”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObservationDays(string $ObservationDays) 设置“”
注意：此字段可能返回 null，表示取不到有效值。
 */
class TreatmentRecord extends AbstractModel
{
    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DmissionCondition;

    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChiefComplaint;

    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiseasePresent;

    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SymptomsAndSigns;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuxiliaryExamination;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyExamination;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecialistExamination;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MentalExamination;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckRecord;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InspectResult;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncisionHealing;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TreatmentSuggestion;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowUpRequirements;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckAndTreatmentProcess;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SurgeryCondition;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionChanges;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeCondition;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PTNM;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PTNMM;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PTNMN;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PTNMT;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ECOG;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NRS;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KPS;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeathDate;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelapseDate;

    /**
     * @var string “”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObservationDays;

    /**
     * @param string $DmissionCondition ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChiefComplaint ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiseasePresent ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SymptomsAndSigns ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuxiliaryExamination “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BodyExamination “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecialistExamination “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MentalExamination “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckRecord “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InspectResult “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IncisionHealing “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TreatmentSuggestion “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FollowUpRequirements “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckAndTreatmentProcess “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SurgeryCondition “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConditionChanges “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DischargeCondition “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PTNM “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PTNMM “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PTNMN “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PTNMT “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ECOG “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NRS “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KPS “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeathDate “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelapseDate “”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObservationDays “”
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
        if (array_key_exists("DmissionCondition",$param) and $param["DmissionCondition"] !== null) {
            $this->DmissionCondition = $param["DmissionCondition"];
        }

        if (array_key_exists("ChiefComplaint",$param) and $param["ChiefComplaint"] !== null) {
            $this->ChiefComplaint = $param["ChiefComplaint"];
        }

        if (array_key_exists("DiseasePresent",$param) and $param["DiseasePresent"] !== null) {
            $this->DiseasePresent = $param["DiseasePresent"];
        }

        if (array_key_exists("SymptomsAndSigns",$param) and $param["SymptomsAndSigns"] !== null) {
            $this->SymptomsAndSigns = $param["SymptomsAndSigns"];
        }

        if (array_key_exists("AuxiliaryExamination",$param) and $param["AuxiliaryExamination"] !== null) {
            $this->AuxiliaryExamination = $param["AuxiliaryExamination"];
        }

        if (array_key_exists("BodyExamination",$param) and $param["BodyExamination"] !== null) {
            $this->BodyExamination = $param["BodyExamination"];
        }

        if (array_key_exists("SpecialistExamination",$param) and $param["SpecialistExamination"] !== null) {
            $this->SpecialistExamination = $param["SpecialistExamination"];
        }

        if (array_key_exists("MentalExamination",$param) and $param["MentalExamination"] !== null) {
            $this->MentalExamination = $param["MentalExamination"];
        }

        if (array_key_exists("CheckRecord",$param) and $param["CheckRecord"] !== null) {
            $this->CheckRecord = $param["CheckRecord"];
        }

        if (array_key_exists("InspectResult",$param) and $param["InspectResult"] !== null) {
            $this->InspectResult = $param["InspectResult"];
        }

        if (array_key_exists("IncisionHealing",$param) and $param["IncisionHealing"] !== null) {
            $this->IncisionHealing = $param["IncisionHealing"];
        }

        if (array_key_exists("TreatmentSuggestion",$param) and $param["TreatmentSuggestion"] !== null) {
            $this->TreatmentSuggestion = $param["TreatmentSuggestion"];
        }

        if (array_key_exists("FollowUpRequirements",$param) and $param["FollowUpRequirements"] !== null) {
            $this->FollowUpRequirements = $param["FollowUpRequirements"];
        }

        if (array_key_exists("CheckAndTreatmentProcess",$param) and $param["CheckAndTreatmentProcess"] !== null) {
            $this->CheckAndTreatmentProcess = $param["CheckAndTreatmentProcess"];
        }

        if (array_key_exists("SurgeryCondition",$param) and $param["SurgeryCondition"] !== null) {
            $this->SurgeryCondition = $param["SurgeryCondition"];
        }

        if (array_key_exists("ConditionChanges",$param) and $param["ConditionChanges"] !== null) {
            $this->ConditionChanges = $param["ConditionChanges"];
        }

        if (array_key_exists("DischargeCondition",$param) and $param["DischargeCondition"] !== null) {
            $this->DischargeCondition = $param["DischargeCondition"];
        }

        if (array_key_exists("PTNM",$param) and $param["PTNM"] !== null) {
            $this->PTNM = $param["PTNM"];
        }

        if (array_key_exists("PTNMM",$param) and $param["PTNMM"] !== null) {
            $this->PTNMM = $param["PTNMM"];
        }

        if (array_key_exists("PTNMN",$param) and $param["PTNMN"] !== null) {
            $this->PTNMN = $param["PTNMN"];
        }

        if (array_key_exists("PTNMT",$param) and $param["PTNMT"] !== null) {
            $this->PTNMT = $param["PTNMT"];
        }

        if (array_key_exists("ECOG",$param) and $param["ECOG"] !== null) {
            $this->ECOG = $param["ECOG"];
        }

        if (array_key_exists("NRS",$param) and $param["NRS"] !== null) {
            $this->NRS = $param["NRS"];
        }

        if (array_key_exists("KPS",$param) and $param["KPS"] !== null) {
            $this->KPS = $param["KPS"];
        }

        if (array_key_exists("DeathDate",$param) and $param["DeathDate"] !== null) {
            $this->DeathDate = $param["DeathDate"];
        }

        if (array_key_exists("RelapseDate",$param) and $param["RelapseDate"] !== null) {
            $this->RelapseDate = $param["RelapseDate"];
        }

        if (array_key_exists("ObservationDays",$param) and $param["ObservationDays"] !== null) {
            $this->ObservationDays = $param["ObservationDays"];
        }
    }
}
