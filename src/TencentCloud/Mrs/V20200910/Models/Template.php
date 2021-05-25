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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPatientInfo(PatientInfo $PatientInfo) 设置患者信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ReportInfo getReportInfo() 获取报告信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportInfo(ReportInfo $ReportInfo) 设置报告信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Check getCheck() 获取检查报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheck(Check $Check) 设置检查报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method PathologyReport getPathology() 获取病理报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathology(PathologyReport $Pathology) 设置病理报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method MedDoc getMedDoc() 获取出院报告，入院报告，门诊病历
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMedDoc(MedDoc $MedDoc) 设置出院报告，入院报告，门诊病历
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiagCert getDiagCert() 获取诊断证明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagCert(DiagCert $DiagCert) 设置诊断证明
注意：此字段可能返回 null，表示取不到有效值。
 * @method FirstPage getFirstPage() 获取病案首页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstPage(FirstPage $FirstPage) 设置病案首页
注意：此字段可能返回 null，表示取不到有效值。
 * @method Indicator getIndicator() 获取检验报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicator(Indicator $Indicator) 设置检验报告
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportType() 获取报告类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportType(string $ReportType) 设置报告类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class Template extends AbstractModel
{
    /**
     * @var PatientInfo 患者信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PatientInfo;

    /**
     * @var ReportInfo 报告信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportInfo;

    /**
     * @var Check 检查报告
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Check;

    /**
     * @var PathologyReport 病理报告
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pathology;

    /**
     * @var MedDoc 出院报告，入院报告，门诊病历
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MedDoc;

    /**
     * @var DiagCert 诊断证明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiagCert;

    /**
     * @var FirstPage 病案首页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstPage;

    /**
     * @var Indicator 检验报告
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Indicator;

    /**
     * @var string 报告类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportType;

    /**
     * @param PatientInfo $PatientInfo 患者信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ReportInfo $ReportInfo 报告信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Check $Check 检查报告
注意：此字段可能返回 null，表示取不到有效值。
     * @param PathologyReport $Pathology 病理报告
注意：此字段可能返回 null，表示取不到有效值。
     * @param MedDoc $MedDoc 出院报告，入院报告，门诊病历
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiagCert $DiagCert 诊断证明
注意：此字段可能返回 null，表示取不到有效值。
     * @param FirstPage $FirstPage 病案首页
注意：此字段可能返回 null，表示取不到有效值。
     * @param Indicator $Indicator 检验报告
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportType 报告类型
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
    }
}
