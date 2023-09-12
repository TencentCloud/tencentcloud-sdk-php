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
 * 结构化信息
 *
 * @method array getCheck() 获取诊断信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheck(array $Check) 设置诊断信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPathology() 获取病理报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathology(array $Pathology) 设置病理报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMedDoc() 获取医学资料
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMedDoc(array $MedDoc) 设置医学资料
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDiagCert() 获取诊断证明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagCert(array $DiagCert) 设置诊断证明
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFirstPage() 获取病案首页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstPage(array $FirstPage) 设置病案首页
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndicator() 获取检验报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicator(array $Indicator) 设置检验报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMedicalRecordInfo() 获取门诊病历信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMedicalRecordInfo(array $MedicalRecordInfo) 设置门诊病历信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHospitalization() 获取出入院信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHospitalization(array $Hospitalization) 设置出入院信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSurgery() 获取手术记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurgery(array $Surgery) 设置手术记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrescription() 获取处方单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrescription(array $Prescription) 设置处方单
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVaccineCertificate() 获取免疫接种证明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVaccineCertificate(array $VaccineCertificate) 设置免疫接种证明
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getElectrocardiogram() 获取心电图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElectrocardiogram(array $Electrocardiogram) 设置心电图
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPathologyV2() 获取病理报告v2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathologyV2(array $PathologyV2) 设置病理报告v2
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEndoscopy() 获取内窥镜报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndoscopy(array $Endoscopy) 设置内窥镜报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getC14() 获取C14检验报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setC14(array $C14) 设置C14检验报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExame() 获取体检结论
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExame(array $Exame) 设置体检结论
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMedDocV2() 获取出入院结构体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMedDocV2(array $MedDocV2) 设置出入院结构体
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndicatorV3() 获取检验报告v3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicatorV3(array $IndicatorV3) 设置检验报告v3
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMaternity() 获取孕产报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaternity(array $Maternity) 设置孕产报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTimeline() 获取时间轴
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeline(array $Timeline) 设置时间轴
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCovid() 获取核酸报告结论
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCovid(array $Covid) 设置核酸报告结论
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEye() 获取眼科报告结构体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEye(array $Eye) 设置眼科报告结构体
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBirthCert() 获取出生证明结构化信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthCert(array $BirthCert) 设置出生证明结构化信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTextTypeListBlocks() 获取文本类型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextTypeListBlocks(array $TextTypeListBlocks) 设置文本类型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method PhysicalExaminationV1 getPhysicalExamination() 获取体检报告信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhysicalExamination(PhysicalExaminationV1 $PhysicalExamination) 设置体检报告信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Block extends AbstractModel
{
    /**
     * @var array 诊断信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Check;

    /**
     * @var array 病理报告
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pathology;

    /**
     * @var array 医学资料
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MedDoc;

    /**
     * @var array 诊断证明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiagCert;

    /**
     * @var array 病案首页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstPage;

    /**
     * @var array 检验报告
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Indicator;

    /**
     * @var array 门诊病历信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MedicalRecordInfo;

    /**
     * @var array 出入院信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hospitalization;

    /**
     * @var array 手术记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Surgery;

    /**
     * @var array 处方单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Prescription;

    /**
     * @var array 免疫接种证明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VaccineCertificate;

    /**
     * @var array 心电图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Electrocardiogram;

    /**
     * @var array 病理报告v2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathologyV2;

    /**
     * @var array 内窥镜报告
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endoscopy;

    /**
     * @var array C14检验报告
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $C14;

    /**
     * @var array 体检结论
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Exame;

    /**
     * @var array 出入院结构体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MedDocV2;

    /**
     * @var array 检验报告v3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndicatorV3;

    /**
     * @var array 孕产报告
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Maternity;

    /**
     * @var array 时间轴
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeline;

    /**
     * @var array 核酸报告结论
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Covid;

    /**
     * @var array 眼科报告结构体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Eye;

    /**
     * @var array 出生证明结构化信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthCert;

    /**
     * @var array 文本类型列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextTypeListBlocks;

    /**
     * @var PhysicalExaminationV1 体检报告信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhysicalExamination;

    /**
     * @param array $Check 诊断信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Pathology 病理报告
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MedDoc 医学资料
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DiagCert 诊断证明
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FirstPage 病案首页
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Indicator 检验报告
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MedicalRecordInfo 门诊病历信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Hospitalization 出入院信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Surgery 手术记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Prescription 处方单
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VaccineCertificate 免疫接种证明
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Electrocardiogram 心电图
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PathologyV2 病理报告v2
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Endoscopy 内窥镜报告
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $C14 C14检验报告
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Exame 体检结论
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MedDocV2 出入院结构体
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IndicatorV3 检验报告v3
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Maternity 孕产报告
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Timeline 时间轴
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Covid 核酸报告结论
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Eye 眼科报告结构体
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BirthCert 出生证明结构化信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TextTypeListBlocks 文本类型列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param PhysicalExaminationV1 $PhysicalExamination 体检报告信息
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
        if (array_key_exists("Check",$param) and $param["Check"] !== null) {
            $this->Check = [];
            foreach ($param["Check"] as $key => $value){
                $obj = new Check();
                $obj->deserialize($value);
                array_push($this->Check, $obj);
            }
        }

        if (array_key_exists("Pathology",$param) and $param["Pathology"] !== null) {
            $this->Pathology = [];
            foreach ($param["Pathology"] as $key => $value){
                $obj = new PathologyReport();
                $obj->deserialize($value);
                array_push($this->Pathology, $obj);
            }
        }

        if (array_key_exists("MedDoc",$param) and $param["MedDoc"] !== null) {
            $this->MedDoc = [];
            foreach ($param["MedDoc"] as $key => $value){
                $obj = new MedDoc();
                $obj->deserialize($value);
                array_push($this->MedDoc, $obj);
            }
        }

        if (array_key_exists("DiagCert",$param) and $param["DiagCert"] !== null) {
            $this->DiagCert = [];
            foreach ($param["DiagCert"] as $key => $value){
                $obj = new DiagCert();
                $obj->deserialize($value);
                array_push($this->DiagCert, $obj);
            }
        }

        if (array_key_exists("FirstPage",$param) and $param["FirstPage"] !== null) {
            $this->FirstPage = [];
            foreach ($param["FirstPage"] as $key => $value){
                $obj = new FirstPage();
                $obj->deserialize($value);
                array_push($this->FirstPage, $obj);
            }
        }

        if (array_key_exists("Indicator",$param) and $param["Indicator"] !== null) {
            $this->Indicator = [];
            foreach ($param["Indicator"] as $key => $value){
                $obj = new Indicator();
                $obj->deserialize($value);
                array_push($this->Indicator, $obj);
            }
        }

        if (array_key_exists("MedicalRecordInfo",$param) and $param["MedicalRecordInfo"] !== null) {
            $this->MedicalRecordInfo = [];
            foreach ($param["MedicalRecordInfo"] as $key => $value){
                $obj = new MedicalRecordInfo();
                $obj->deserialize($value);
                array_push($this->MedicalRecordInfo, $obj);
            }
        }

        if (array_key_exists("Hospitalization",$param) and $param["Hospitalization"] !== null) {
            $this->Hospitalization = [];
            foreach ($param["Hospitalization"] as $key => $value){
                $obj = new Hospitalization();
                $obj->deserialize($value);
                array_push($this->Hospitalization, $obj);
            }
        }

        if (array_key_exists("Surgery",$param) and $param["Surgery"] !== null) {
            $this->Surgery = [];
            foreach ($param["Surgery"] as $key => $value){
                $obj = new Surgery();
                $obj->deserialize($value);
                array_push($this->Surgery, $obj);
            }
        }

        if (array_key_exists("Prescription",$param) and $param["Prescription"] !== null) {
            $this->Prescription = [];
            foreach ($param["Prescription"] as $key => $value){
                $obj = new Prescription();
                $obj->deserialize($value);
                array_push($this->Prescription, $obj);
            }
        }

        if (array_key_exists("VaccineCertificate",$param) and $param["VaccineCertificate"] !== null) {
            $this->VaccineCertificate = [];
            foreach ($param["VaccineCertificate"] as $key => $value){
                $obj = new VaccineCertificate();
                $obj->deserialize($value);
                array_push($this->VaccineCertificate, $obj);
            }
        }

        if (array_key_exists("Electrocardiogram",$param) and $param["Electrocardiogram"] !== null) {
            $this->Electrocardiogram = [];
            foreach ($param["Electrocardiogram"] as $key => $value){
                $obj = new Electrocardiogram();
                $obj->deserialize($value);
                array_push($this->Electrocardiogram, $obj);
            }
        }

        if (array_key_exists("PathologyV2",$param) and $param["PathologyV2"] !== null) {
            $this->PathologyV2 = [];
            foreach ($param["PathologyV2"] as $key => $value){
                $obj = new PathologyV2();
                $obj->deserialize($value);
                array_push($this->PathologyV2, $obj);
            }
        }

        if (array_key_exists("Endoscopy",$param) and $param["Endoscopy"] !== null) {
            $this->Endoscopy = [];
            foreach ($param["Endoscopy"] as $key => $value){
                $obj = new Endoscopy();
                $obj->deserialize($value);
                array_push($this->Endoscopy, $obj);
            }
        }

        if (array_key_exists("C14",$param) and $param["C14"] !== null) {
            $this->C14 = [];
            foreach ($param["C14"] as $key => $value){
                $obj = new Indicator();
                $obj->deserialize($value);
                array_push($this->C14, $obj);
            }
        }

        if (array_key_exists("Exame",$param) and $param["Exame"] !== null) {
            $this->Exame = [];
            foreach ($param["Exame"] as $key => $value){
                $obj = new Exame();
                $obj->deserialize($value);
                array_push($this->Exame, $obj);
            }
        }

        if (array_key_exists("MedDocV2",$param) and $param["MedDocV2"] !== null) {
            $this->MedDocV2 = [];
            foreach ($param["MedDocV2"] as $key => $value){
                $obj = new DischargeInfoBlock();
                $obj->deserialize($value);
                array_push($this->MedDocV2, $obj);
            }
        }

        if (array_key_exists("IndicatorV3",$param) and $param["IndicatorV3"] !== null) {
            $this->IndicatorV3 = [];
            foreach ($param["IndicatorV3"] as $key => $value){
                $obj = new IndicatorV3();
                $obj->deserialize($value);
                array_push($this->IndicatorV3, $obj);
            }
        }

        if (array_key_exists("Maternity",$param) and $param["Maternity"] !== null) {
            $this->Maternity = [];
            foreach ($param["Maternity"] as $key => $value){
                $obj = new Maternity();
                $obj->deserialize($value);
                array_push($this->Maternity, $obj);
            }
        }

        if (array_key_exists("Timeline",$param) and $param["Timeline"] !== null) {
            $this->Timeline = [];
            foreach ($param["Timeline"] as $key => $value){
                $obj = new TimelineInformation();
                $obj->deserialize($value);
                array_push($this->Timeline, $obj);
            }
        }

        if (array_key_exists("Covid",$param) and $param["Covid"] !== null) {
            $this->Covid = [];
            foreach ($param["Covid"] as $key => $value){
                $obj = new CovidItemsInfo();
                $obj->deserialize($value);
                array_push($this->Covid, $obj);
            }
        }

        if (array_key_exists("Eye",$param) and $param["Eye"] !== null) {
            $this->Eye = [];
            foreach ($param["Eye"] as $key => $value){
                $obj = new EyeItemsInfo();
                $obj->deserialize($value);
                array_push($this->Eye, $obj);
            }
        }

        if (array_key_exists("BirthCert",$param) and $param["BirthCert"] !== null) {
            $this->BirthCert = [];
            foreach ($param["BirthCert"] as $key => $value){
                $obj = new BirthCert();
                $obj->deserialize($value);
                array_push($this->BirthCert, $obj);
            }
        }

        if (array_key_exists("TextTypeListBlocks",$param) and $param["TextTypeListBlocks"] !== null) {
            $this->TextTypeListBlocks = [];
            foreach ($param["TextTypeListBlocks"] as $key => $value){
                $obj = new TextTypeListBlock();
                $obj->deserialize($value);
                array_push($this->TextTypeListBlocks, $obj);
            }
        }

        if (array_key_exists("PhysicalExamination",$param) and $param["PhysicalExamination"] !== null) {
            $this->PhysicalExamination = new PhysicalExaminationV1();
            $this->PhysicalExamination->deserialize($param["PhysicalExamination"]);
        }
    }
}
