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
 * 医学资料
 *
 * @method Advice getAdvice() 获取建议
 * @method void setAdvice(Advice $Advice) 设置建议
 * @method array getDiagnosis() 获取诊断结果
 * @method void setDiagnosis(array $Diagnosis) 设置诊断结果
 * @method DiseaseMedicalHistory getDiseaseMedicalHistory() 获取疾病史
 * @method void setDiseaseMedicalHistory(DiseaseMedicalHistory $DiseaseMedicalHistory) 设置疾病史
 * @method PersonalMedicalHistory getPersonalMedicalHistory() 获取个人史
 * @method void setPersonalMedicalHistory(PersonalMedicalHistory $PersonalMedicalHistory) 设置个人史
 * @method ObstericalMedicalHistory getObstericalMedicalHistory() 获取婚孕史
 * @method void setObstericalMedicalHistory(ObstericalMedicalHistory $ObstericalMedicalHistory) 设置婚孕史
 * @method FamilyMedicalHistory getFamilyMedicalHistory() 获取家族史
 * @method void setFamilyMedicalHistory(FamilyMedicalHistory $FamilyMedicalHistory) 设置家族史
 * @method MenstrualMedicalHistory getMenstrualMedicalHistory() 获取月经史
 * @method void setMenstrualMedicalHistory(MenstrualMedicalHistory $MenstrualMedicalHistory) 设置月经史
 * @method TreatmentRecord getTreatmentRecord() 获取诊疗记录
 * @method void setTreatmentRecord(TreatmentRecord $TreatmentRecord) 设置诊疗记录
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class MedDoc extends AbstractModel
{
    /**
     * @var Advice 建议
     */
    public $Advice;

    /**
     * @var array 诊断结果
     */
    public $Diagnosis;

    /**
     * @var DiseaseMedicalHistory 疾病史
     */
    public $DiseaseMedicalHistory;

    /**
     * @var PersonalMedicalHistory 个人史
     */
    public $PersonalMedicalHistory;

    /**
     * @var ObstericalMedicalHistory 婚孕史
     */
    public $ObstericalMedicalHistory;

    /**
     * @var FamilyMedicalHistory 家族史
     */
    public $FamilyMedicalHistory;

    /**
     * @var MenstrualMedicalHistory 月经史
     */
    public $MenstrualMedicalHistory;

    /**
     * @var TreatmentRecord 诊疗记录
     */
    public $TreatmentRecord;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param Advice $Advice 建议
     * @param array $Diagnosis 诊断结果
     * @param DiseaseMedicalHistory $DiseaseMedicalHistory 疾病史
     * @param PersonalMedicalHistory $PersonalMedicalHistory 个人史
     * @param ObstericalMedicalHistory $ObstericalMedicalHistory 婚孕史
     * @param FamilyMedicalHistory $FamilyMedicalHistory 家族史
     * @param MenstrualMedicalHistory $MenstrualMedicalHistory 月经史
     * @param TreatmentRecord $TreatmentRecord 诊疗记录
     * @param integer $Page 数据在原PDF文件中的第几页
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
        if (array_key_exists("Advice",$param) and $param["Advice"] !== null) {
            $this->Advice = new Advice();
            $this->Advice->deserialize($param["Advice"]);
        }

        if (array_key_exists("Diagnosis",$param) and $param["Diagnosis"] !== null) {
            $this->Diagnosis = [];
            foreach ($param["Diagnosis"] as $key => $value){
                $obj = new DiagCertItem();
                $obj->deserialize($value);
                array_push($this->Diagnosis, $obj);
            }
        }

        if (array_key_exists("DiseaseMedicalHistory",$param) and $param["DiseaseMedicalHistory"] !== null) {
            $this->DiseaseMedicalHistory = new DiseaseMedicalHistory();
            $this->DiseaseMedicalHistory->deserialize($param["DiseaseMedicalHistory"]);
        }

        if (array_key_exists("PersonalMedicalHistory",$param) and $param["PersonalMedicalHistory"] !== null) {
            $this->PersonalMedicalHistory = new PersonalMedicalHistory();
            $this->PersonalMedicalHistory->deserialize($param["PersonalMedicalHistory"]);
        }

        if (array_key_exists("ObstericalMedicalHistory",$param) and $param["ObstericalMedicalHistory"] !== null) {
            $this->ObstericalMedicalHistory = new ObstericalMedicalHistory();
            $this->ObstericalMedicalHistory->deserialize($param["ObstericalMedicalHistory"]);
        }

        if (array_key_exists("FamilyMedicalHistory",$param) and $param["FamilyMedicalHistory"] !== null) {
            $this->FamilyMedicalHistory = new FamilyMedicalHistory();
            $this->FamilyMedicalHistory->deserialize($param["FamilyMedicalHistory"]);
        }

        if (array_key_exists("MenstrualMedicalHistory",$param) and $param["MenstrualMedicalHistory"] !== null) {
            $this->MenstrualMedicalHistory = new MenstrualMedicalHistory();
            $this->MenstrualMedicalHistory->deserialize($param["MenstrualMedicalHistory"]);
        }

        if (array_key_exists("TreatmentRecord",$param) and $param["TreatmentRecord"] !== null) {
            $this->TreatmentRecord = new TreatmentRecord();
            $this->TreatmentRecord->deserialize($param["TreatmentRecord"]);
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
