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
 * 报告模板
 *
 * @method PatientInfo getPatientInfo() 获取患者信息
 * @method void setPatientInfo(PatientInfo $PatientInfo) 设置患者信息
 * @method ReportInfo getReportInfo() 获取报告信息
 * @method void setReportInfo(ReportInfo $ReportInfo) 设置报告信息
 * @method Check getCheck() 获取检查报告
 * @method void setCheck(Check $Check) 设置检查报告
 * @method PathologyReport getPathology() 获取病理报告
 * @method void setPathology(PathologyReport $Pathology) 设置病理报告
 * @method MedDoc getMedDoc() 获取出院报告，入院报告，门诊病历
 * @method void setMedDoc(MedDoc $MedDoc) 设置出院报告，入院报告，门诊病历
 * @method DiagCert getDiagCert() 获取诊断证明
 * @method void setDiagCert(DiagCert $DiagCert) 设置诊断证明
 * @method FirstPage getFirstPage() 获取病案首页
 * @method void setFirstPage(FirstPage $FirstPage) 设置病案首页
 * @method Indicator getIndicator() 获取检验报告
 * @method void setIndicator(Indicator $Indicator) 设置检验报告
 * @method string getReportType() 获取报告类型
 * @method void setReportType(string $ReportType) 设置报告类型
 * @method MedicalRecordInfo getMedicalRecordInfo() 获取门诊病历信息
 * @method void setMedicalRecordInfo(MedicalRecordInfo $MedicalRecordInfo) 设置门诊病历信息
 * @method Hospitalization getHospitalization() 获取出入院信息
 * @method void setHospitalization(Hospitalization $Hospitalization) 设置出入院信息
 * @method Surgery getSurgery() 获取手术记录
 * @method void setSurgery(Surgery $Surgery) 设置手术记录
 * @method Electrocardiogram getElectrocardiogram() 获取心电图报告
 * @method void setElectrocardiogram(Electrocardiogram $Electrocardiogram) 设置心电图报告
 * @method Endoscopy getEndoscopy() 获取内窥镜报告
 * @method void setEndoscopy(Endoscopy $Endoscopy) 设置内窥镜报告
 * @method Prescription getPrescription() 获取处方单
 * @method void setPrescription(Prescription $Prescription) 设置处方单
 * @method VaccineCertificate getVaccineCertificate() 获取疫苗接种凭证
 * @method void setVaccineCertificate(VaccineCertificate $VaccineCertificate) 设置疫苗接种凭证
 * @method string getOcrText() 获取OCR文本
 * @method void setOcrText(string $OcrText) 设置OCR文本
 * @method string getOcrResult() 获取OCR拼接后文本
 * @method void setOcrResult(string $OcrResult) 设置OCR拼接后文本
 * @method string getReportTypeDesc() 获取报告类型
 * @method void setReportTypeDesc(string $ReportTypeDesc) 设置报告类型
 * @method PathologyV2 getPathologyV2() 获取病理报告v2
 * @method void setPathologyV2(PathologyV2 $PathologyV2) 设置病理报告v2
 * @method Indicator getC14() 获取碳14尿素呼气试验
 * @method void setC14(Indicator $C14) 设置碳14尿素呼气试验
 * @method Exame getExame() 获取体检结论
 * @method void setExame(Exame $Exame) 设置体检结论
 * @method DischargeInfoBlock getMedDocV2() 获取出院报告v2，入院报告v2，门诊病历v2
 * @method void setMedDocV2(DischargeInfoBlock $MedDocV2) 设置出院报告v2，入院报告v2，门诊病历v2
 * @method IndicatorV3 getIndicatorV3() 获取检验报告v3
 * @method void setIndicatorV3(IndicatorV3 $IndicatorV3) 设置检验报告v3
 * @method CovidItemsInfo getCovid() 获取核酸报告
 * @method void setCovid(CovidItemsInfo $Covid) 设置核酸报告
 * @method Maternity getMaternity() 获取孕产报告
 * @method void setMaternity(Maternity $Maternity) 设置孕产报告
 * @method EyeItemsInfo getEye() 获取眼科报告
 * @method void setEye(EyeItemsInfo $Eye) 设置眼科报告
 * @method BirthCert getBirthCert() 获取出生证明
 * @method void setBirthCert(BirthCert $BirthCert) 设置出生证明
 * @method TimelineInformation getTimeline() 获取时间轴
 * @method void setTimeline(TimelineInformation $Timeline) 设置时间轴
 * @method Check getEndoscopyV2() 获取内窥镜报告V2
 * @method void setEndoscopyV2(Check $EndoscopyV2) 设置内窥镜报告V2
 */
class Template extends AbstractModel
{
    /**
     * @var PatientInfo 患者信息
     */
    public $PatientInfo;

    /**
     * @var ReportInfo 报告信息
     */
    public $ReportInfo;

    /**
     * @var Check 检查报告
     */
    public $Check;

    /**
     * @var PathologyReport 病理报告
     */
    public $Pathology;

    /**
     * @var MedDoc 出院报告，入院报告，门诊病历
     */
    public $MedDoc;

    /**
     * @var DiagCert 诊断证明
     */
    public $DiagCert;

    /**
     * @var FirstPage 病案首页
     */
    public $FirstPage;

    /**
     * @var Indicator 检验报告
     */
    public $Indicator;

    /**
     * @var string 报告类型
     */
    public $ReportType;

    /**
     * @var MedicalRecordInfo 门诊病历信息
     */
    public $MedicalRecordInfo;

    /**
     * @var Hospitalization 出入院信息
     */
    public $Hospitalization;

    /**
     * @var Surgery 手术记录
     */
    public $Surgery;

    /**
     * @var Electrocardiogram 心电图报告
     */
    public $Electrocardiogram;

    /**
     * @var Endoscopy 内窥镜报告
     */
    public $Endoscopy;

    /**
     * @var Prescription 处方单
     */
    public $Prescription;

    /**
     * @var VaccineCertificate 疫苗接种凭证
     */
    public $VaccineCertificate;

    /**
     * @var string OCR文本
     */
    public $OcrText;

    /**
     * @var string OCR拼接后文本
     */
    public $OcrResult;

    /**
     * @var string 报告类型
     */
    public $ReportTypeDesc;

    /**
     * @var PathologyV2 病理报告v2
     */
    public $PathologyV2;

    /**
     * @var Indicator 碳14尿素呼气试验
     */
    public $C14;

    /**
     * @var Exame 体检结论
     */
    public $Exame;

    /**
     * @var DischargeInfoBlock 出院报告v2，入院报告v2，门诊病历v2
     */
    public $MedDocV2;

    /**
     * @var IndicatorV3 检验报告v3
     */
    public $IndicatorV3;

    /**
     * @var CovidItemsInfo 核酸报告
     */
    public $Covid;

    /**
     * @var Maternity 孕产报告
     */
    public $Maternity;

    /**
     * @var EyeItemsInfo 眼科报告
     */
    public $Eye;

    /**
     * @var BirthCert 出生证明
     */
    public $BirthCert;

    /**
     * @var TimelineInformation 时间轴
     */
    public $Timeline;

    /**
     * @var Check 内窥镜报告V2
     */
    public $EndoscopyV2;

    /**
     * @param PatientInfo $PatientInfo 患者信息
     * @param ReportInfo $ReportInfo 报告信息
     * @param Check $Check 检查报告
     * @param PathologyReport $Pathology 病理报告
     * @param MedDoc $MedDoc 出院报告，入院报告，门诊病历
     * @param DiagCert $DiagCert 诊断证明
     * @param FirstPage $FirstPage 病案首页
     * @param Indicator $Indicator 检验报告
     * @param string $ReportType 报告类型
     * @param MedicalRecordInfo $MedicalRecordInfo 门诊病历信息
     * @param Hospitalization $Hospitalization 出入院信息
     * @param Surgery $Surgery 手术记录
     * @param Electrocardiogram $Electrocardiogram 心电图报告
     * @param Endoscopy $Endoscopy 内窥镜报告
     * @param Prescription $Prescription 处方单
     * @param VaccineCertificate $VaccineCertificate 疫苗接种凭证
     * @param string $OcrText OCR文本
     * @param string $OcrResult OCR拼接后文本
     * @param string $ReportTypeDesc 报告类型
     * @param PathologyV2 $PathologyV2 病理报告v2
     * @param Indicator $C14 碳14尿素呼气试验
     * @param Exame $Exame 体检结论
     * @param DischargeInfoBlock $MedDocV2 出院报告v2，入院报告v2，门诊病历v2
     * @param IndicatorV3 $IndicatorV3 检验报告v3
     * @param CovidItemsInfo $Covid 核酸报告
     * @param Maternity $Maternity 孕产报告
     * @param EyeItemsInfo $Eye 眼科报告
     * @param BirthCert $BirthCert 出生证明
     * @param TimelineInformation $Timeline 时间轴
     * @param Check $EndoscopyV2 内窥镜报告V2
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
        if (array_key_exists("PatientInfo",$param) and $param["PatientInfo"] !== null) {
            $this->PatientInfo = new PatientInfo();
            $this->PatientInfo->deserialize($param["PatientInfo"]);
        }

        if (array_key_exists("ReportInfo",$param) and $param["ReportInfo"] !== null) {
            $this->ReportInfo = new ReportInfo();
            $this->ReportInfo->deserialize($param["ReportInfo"]);
        }

        if (array_key_exists("Check",$param) and $param["Check"] !== null) {
            $this->Check = new Check();
            $this->Check->deserialize($param["Check"]);
        }

        if (array_key_exists("Pathology",$param) and $param["Pathology"] !== null) {
            $this->Pathology = new PathologyReport();
            $this->Pathology->deserialize($param["Pathology"]);
        }

        if (array_key_exists("MedDoc",$param) and $param["MedDoc"] !== null) {
            $this->MedDoc = new MedDoc();
            $this->MedDoc->deserialize($param["MedDoc"]);
        }

        if (array_key_exists("DiagCert",$param) and $param["DiagCert"] !== null) {
            $this->DiagCert = new DiagCert();
            $this->DiagCert->deserialize($param["DiagCert"]);
        }

        if (array_key_exists("FirstPage",$param) and $param["FirstPage"] !== null) {
            $this->FirstPage = new FirstPage();
            $this->FirstPage->deserialize($param["FirstPage"]);
        }

        if (array_key_exists("Indicator",$param) and $param["Indicator"] !== null) {
            $this->Indicator = new Indicator();
            $this->Indicator->deserialize($param["Indicator"]);
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("MedicalRecordInfo",$param) and $param["MedicalRecordInfo"] !== null) {
            $this->MedicalRecordInfo = new MedicalRecordInfo();
            $this->MedicalRecordInfo->deserialize($param["MedicalRecordInfo"]);
        }

        if (array_key_exists("Hospitalization",$param) and $param["Hospitalization"] !== null) {
            $this->Hospitalization = new Hospitalization();
            $this->Hospitalization->deserialize($param["Hospitalization"]);
        }

        if (array_key_exists("Surgery",$param) and $param["Surgery"] !== null) {
            $this->Surgery = new Surgery();
            $this->Surgery->deserialize($param["Surgery"]);
        }

        if (array_key_exists("Electrocardiogram",$param) and $param["Electrocardiogram"] !== null) {
            $this->Electrocardiogram = new Electrocardiogram();
            $this->Electrocardiogram->deserialize($param["Electrocardiogram"]);
        }

        if (array_key_exists("Endoscopy",$param) and $param["Endoscopy"] !== null) {
            $this->Endoscopy = new Endoscopy();
            $this->Endoscopy->deserialize($param["Endoscopy"]);
        }

        if (array_key_exists("Prescription",$param) and $param["Prescription"] !== null) {
            $this->Prescription = new Prescription();
            $this->Prescription->deserialize($param["Prescription"]);
        }

        if (array_key_exists("VaccineCertificate",$param) and $param["VaccineCertificate"] !== null) {
            $this->VaccineCertificate = new VaccineCertificate();
            $this->VaccineCertificate->deserialize($param["VaccineCertificate"]);
        }

        if (array_key_exists("OcrText",$param) and $param["OcrText"] !== null) {
            $this->OcrText = $param["OcrText"];
        }

        if (array_key_exists("OcrResult",$param) and $param["OcrResult"] !== null) {
            $this->OcrResult = $param["OcrResult"];
        }

        if (array_key_exists("ReportTypeDesc",$param) and $param["ReportTypeDesc"] !== null) {
            $this->ReportTypeDesc = $param["ReportTypeDesc"];
        }

        if (array_key_exists("PathologyV2",$param) and $param["PathologyV2"] !== null) {
            $this->PathologyV2 = new PathologyV2();
            $this->PathologyV2->deserialize($param["PathologyV2"]);
        }

        if (array_key_exists("C14",$param) and $param["C14"] !== null) {
            $this->C14 = new Indicator();
            $this->C14->deserialize($param["C14"]);
        }

        if (array_key_exists("Exame",$param) and $param["Exame"] !== null) {
            $this->Exame = new Exame();
            $this->Exame->deserialize($param["Exame"]);
        }

        if (array_key_exists("MedDocV2",$param) and $param["MedDocV2"] !== null) {
            $this->MedDocV2 = new DischargeInfoBlock();
            $this->MedDocV2->deserialize($param["MedDocV2"]);
        }

        if (array_key_exists("IndicatorV3",$param) and $param["IndicatorV3"] !== null) {
            $this->IndicatorV3 = new IndicatorV3();
            $this->IndicatorV3->deserialize($param["IndicatorV3"]);
        }

        if (array_key_exists("Covid",$param) and $param["Covid"] !== null) {
            $this->Covid = new CovidItemsInfo();
            $this->Covid->deserialize($param["Covid"]);
        }

        if (array_key_exists("Maternity",$param) and $param["Maternity"] !== null) {
            $this->Maternity = new Maternity();
            $this->Maternity->deserialize($param["Maternity"]);
        }

        if (array_key_exists("Eye",$param) and $param["Eye"] !== null) {
            $this->Eye = new EyeItemsInfo();
            $this->Eye->deserialize($param["Eye"]);
        }

        if (array_key_exists("BirthCert",$param) and $param["BirthCert"] !== null) {
            $this->BirthCert = new BirthCert();
            $this->BirthCert->deserialize($param["BirthCert"]);
        }

        if (array_key_exists("Timeline",$param) and $param["Timeline"] !== null) {
            $this->Timeline = new TimelineInformation();
            $this->Timeline->deserialize($param["Timeline"]);
        }

        if (array_key_exists("EndoscopyV2",$param) and $param["EndoscopyV2"] !== null) {
            $this->EndoscopyV2 = new Check();
            $this->EndoscopyV2->deserialize($param["EndoscopyV2"]);
        }
    }
}
