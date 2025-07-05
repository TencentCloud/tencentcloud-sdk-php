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
 * 门诊病历信息
 *
 * @method string getDiagnosisTime() 获取就诊日期
 * @method void setDiagnosisTime(string $DiagnosisTime) 设置就诊日期
 * @method string getDiagnosisDepartmentName() 获取就诊科室
 * @method void setDiagnosisDepartmentName(string $DiagnosisDepartmentName) 设置就诊科室
 * @method string getDiagnosisDoctorName() 获取就诊医生
 * @method void setDiagnosisDoctorName(string $DiagnosisDoctorName) 设置就诊医生
 * @method string getClinicalDiagnosis() 获取临床诊断
 * @method void setClinicalDiagnosis(string $ClinicalDiagnosis) 设置临床诊断
 * @method string getMainNarration() 获取主述
 * @method void setMainNarration(string $MainNarration) 设置主述
 * @method string getPhysicalExamination() 获取体格检查
 * @method void setPhysicalExamination(string $PhysicalExamination) 设置体格检查
 * @method string getInspectionFindings() 获取检查结论
 * @method void setInspectionFindings(string $InspectionFindings) 设置检查结论
 * @method string getTreatmentOpinion() 获取治疗意见
 * @method void setTreatmentOpinion(string $TreatmentOpinion) 设置治疗意见
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class MedicalRecordInfo extends AbstractModel
{
    /**
     * @var string 就诊日期
     */
    public $DiagnosisTime;

    /**
     * @var string 就诊科室
     */
    public $DiagnosisDepartmentName;

    /**
     * @var string 就诊医生
     */
    public $DiagnosisDoctorName;

    /**
     * @var string 临床诊断
     */
    public $ClinicalDiagnosis;

    /**
     * @var string 主述
     */
    public $MainNarration;

    /**
     * @var string 体格检查
     */
    public $PhysicalExamination;

    /**
     * @var string 检查结论
     */
    public $InspectionFindings;

    /**
     * @var string 治疗意见
     */
    public $TreatmentOpinion;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param string $DiagnosisTime 就诊日期
     * @param string $DiagnosisDepartmentName 就诊科室
     * @param string $DiagnosisDoctorName 就诊医生
     * @param string $ClinicalDiagnosis 临床诊断
     * @param string $MainNarration 主述
     * @param string $PhysicalExamination 体格检查
     * @param string $InspectionFindings 检查结论
     * @param string $TreatmentOpinion 治疗意见
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
        if (array_key_exists("DiagnosisTime",$param) and $param["DiagnosisTime"] !== null) {
            $this->DiagnosisTime = $param["DiagnosisTime"];
        }

        if (array_key_exists("DiagnosisDepartmentName",$param) and $param["DiagnosisDepartmentName"] !== null) {
            $this->DiagnosisDepartmentName = $param["DiagnosisDepartmentName"];
        }

        if (array_key_exists("DiagnosisDoctorName",$param) and $param["DiagnosisDoctorName"] !== null) {
            $this->DiagnosisDoctorName = $param["DiagnosisDoctorName"];
        }

        if (array_key_exists("ClinicalDiagnosis",$param) and $param["ClinicalDiagnosis"] !== null) {
            $this->ClinicalDiagnosis = $param["ClinicalDiagnosis"];
        }

        if (array_key_exists("MainNarration",$param) and $param["MainNarration"] !== null) {
            $this->MainNarration = $param["MainNarration"];
        }

        if (array_key_exists("PhysicalExamination",$param) and $param["PhysicalExamination"] !== null) {
            $this->PhysicalExamination = $param["PhysicalExamination"];
        }

        if (array_key_exists("InspectionFindings",$param) and $param["InspectionFindings"] !== null) {
            $this->InspectionFindings = $param["InspectionFindings"];
        }

        if (array_key_exists("TreatmentOpinion",$param) and $param["TreatmentOpinion"] !== null) {
            $this->TreatmentOpinion = $param["TreatmentOpinion"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
