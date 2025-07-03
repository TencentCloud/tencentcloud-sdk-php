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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预测数据
 *
 * @method integer getCaseType() 获取处方类型 0:门诊处方；1:住院医嘱；2:急诊处方 
 * @method void setCaseType(integer $CaseType) 设置处方类型 0:门诊处方；1:住院医嘱；2:急诊处方 
 * @method string getChiefComplaint() 获取主诉
 * @method void setChiefComplaint(string $ChiefComplaint) 设置主诉
 * @method string getDepartment() 获取科室
 * @method void setDepartment(string $Department) 设置科室
 * @method string getCaseId() 获取病历文书ID
医生每次书写病历文书的ID，文书内容包含主诉，病史，当前诊断等内容<br />门诊场景：门诊病历文书（带有主诉、病史、诊断及药品的）只有一份，这个编号只有一个。<br/>住院场景：假设住院3天，医生每天都会写一份病历文书（带有主诉、病史、诊断及医嘱药品的文书），那么有对应三个病历文书编号，每次调用预测接口都要传入不同的病历文书编号。注意：如两次调用预测接口，传相同的caseid，则在药师端管理平台的上一次审方记录中的诊断会被本次接口传入的诊断更新。
 * @method void setCaseId(string $CaseId) 设置病历文书ID
医生每次书写病历文书的ID，文书内容包含主诉，病史，当前诊断等内容<br />门诊场景：门诊病历文书（带有主诉、病史、诊断及药品的）只有一份，这个编号只有一个。<br/>住院场景：假设住院3天，医生每天都会写一份病历文书（带有主诉、病史、诊断及医嘱药品的文书），那么有对应三个病历文书编号，每次调用预测接口都要传入不同的病历文书编号。注意：如两次调用预测接口，传相同的caseid，则在药师端管理平台的上一次审方记录中的诊断会被本次接口传入的诊断更新。
 * @method string getCaseTime() 获取病历更新时间
 * @method void setCaseTime(string $CaseTime) 设置病历更新时间
 * @method string getVisitId() 获取就诊ID
门诊处方传门诊号，住院医嘱传住院号；备注：门诊场景：用户挂一次号，看一个医生，这时候会有一个代表变成就诊的编号，下一次挂号就诊，这个编号会变。<br/>住院场景：用户本次办理入院，会有一个住院编号，仅代表本次住院，如果下次再住院，这个编号会变。
 * @method void setVisitId(string $VisitId) 设置就诊ID
门诊处方传门诊号，住院医嘱传住院号；备注：门诊场景：用户挂一次号，看一个医生，这时候会有一个代表变成就诊的编号，下一次挂号就诊，这个编号会变。<br/>住院场景：用户本次办理入院，会有一个住院编号，仅代表本次住院，如果下次再住院，这个编号会变。
 * @method PatientBaseInfo getPatientBaseinfo() 获取患者信息
 * @method void setPatientBaseinfo(PatientBaseInfo $PatientBaseinfo) 设置患者信息
 * @method DoctorInfo getDoctorInfo() 获取医生信息
 * @method void setDoctorInfo(DoctorInfo $DoctorInfo) 设置医生信息
 * @method string getPresentIllness() 获取现病史
 * @method void setPresentIllness(string $PresentIllness) 设置现病史
 * @method string getPatientOther() 获取患者其他信息，包含过敏史等
 * @method void setPatientOther(string $PatientOther) 设置患者其他信息，包含过敏史等
 * @method PatientHistory getPatientHistory() 获取患者过往病史
 * @method void setPatientHistory(PatientHistory $PatientHistory) 设置患者过往病史
 * @method PatientFamilyHistory getPatientFamilyHistory() 获取患者家族病史
 * @method void setPatientFamilyHistory(PatientFamilyHistory $PatientFamilyHistory) 设置患者家族病史
 * @method PhysicalExam getPhysicalExam() 获取体格检查
 * @method void setPhysicalExam(PhysicalExam $PhysicalExam) 设置体格检查
 * @method array getEmrDiagnosises() 获取诊断列表，第一个为首要诊断
 * @method void setEmrDiagnosises(array $EmrDiagnosises) 设置诊断列表，第一个为首要诊断
 * @method array getPrescriptions() 获取处方列表
 * @method void setPrescriptions(array $Prescriptions) 设置处方列表
 */
class RequestCase extends AbstractModel
{
    /**
     * @var integer 处方类型 0:门诊处方；1:住院医嘱；2:急诊处方 
     */
    public $CaseType;

    /**
     * @var string 主诉
     */
    public $ChiefComplaint;

    /**
     * @var string 科室
     */
    public $Department;

    /**
     * @var string 病历文书ID
医生每次书写病历文书的ID，文书内容包含主诉，病史，当前诊断等内容<br />门诊场景：门诊病历文书（带有主诉、病史、诊断及药品的）只有一份，这个编号只有一个。<br/>住院场景：假设住院3天，医生每天都会写一份病历文书（带有主诉、病史、诊断及医嘱药品的文书），那么有对应三个病历文书编号，每次调用预测接口都要传入不同的病历文书编号。注意：如两次调用预测接口，传相同的caseid，则在药师端管理平台的上一次审方记录中的诊断会被本次接口传入的诊断更新。
     */
    public $CaseId;

    /**
     * @var string 病历更新时间
     */
    public $CaseTime;

    /**
     * @var string 就诊ID
门诊处方传门诊号，住院医嘱传住院号；备注：门诊场景：用户挂一次号，看一个医生，这时候会有一个代表变成就诊的编号，下一次挂号就诊，这个编号会变。<br/>住院场景：用户本次办理入院，会有一个住院编号，仅代表本次住院，如果下次再住院，这个编号会变。
     */
    public $VisitId;

    /**
     * @var PatientBaseInfo 患者信息
     */
    public $PatientBaseinfo;

    /**
     * @var DoctorInfo 医生信息
     */
    public $DoctorInfo;

    /**
     * @var string 现病史
     */
    public $PresentIllness;

    /**
     * @var string 患者其他信息，包含过敏史等
     */
    public $PatientOther;

    /**
     * @var PatientHistory 患者过往病史
     */
    public $PatientHistory;

    /**
     * @var PatientFamilyHistory 患者家族病史
     */
    public $PatientFamilyHistory;

    /**
     * @var PhysicalExam 体格检查
     */
    public $PhysicalExam;

    /**
     * @var array 诊断列表，第一个为首要诊断
     */
    public $EmrDiagnosises;

    /**
     * @var array 处方列表
     */
    public $Prescriptions;

    /**
     * @param integer $CaseType 处方类型 0:门诊处方；1:住院医嘱；2:急诊处方 
     * @param string $ChiefComplaint 主诉
     * @param string $Department 科室
     * @param string $CaseId 病历文书ID
医生每次书写病历文书的ID，文书内容包含主诉，病史，当前诊断等内容<br />门诊场景：门诊病历文书（带有主诉、病史、诊断及药品的）只有一份，这个编号只有一个。<br/>住院场景：假设住院3天，医生每天都会写一份病历文书（带有主诉、病史、诊断及医嘱药品的文书），那么有对应三个病历文书编号，每次调用预测接口都要传入不同的病历文书编号。注意：如两次调用预测接口，传相同的caseid，则在药师端管理平台的上一次审方记录中的诊断会被本次接口传入的诊断更新。
     * @param string $CaseTime 病历更新时间
     * @param string $VisitId 就诊ID
门诊处方传门诊号，住院医嘱传住院号；备注：门诊场景：用户挂一次号，看一个医生，这时候会有一个代表变成就诊的编号，下一次挂号就诊，这个编号会变。<br/>住院场景：用户本次办理入院，会有一个住院编号，仅代表本次住院，如果下次再住院，这个编号会变。
     * @param PatientBaseInfo $PatientBaseinfo 患者信息
     * @param DoctorInfo $DoctorInfo 医生信息
     * @param string $PresentIllness 现病史
     * @param string $PatientOther 患者其他信息，包含过敏史等
     * @param PatientHistory $PatientHistory 患者过往病史
     * @param PatientFamilyHistory $PatientFamilyHistory 患者家族病史
     * @param PhysicalExam $PhysicalExam 体格检查
     * @param array $EmrDiagnosises 诊断列表，第一个为首要诊断
     * @param array $Prescriptions 处方列表
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
        if (array_key_exists("CaseType",$param) and $param["CaseType"] !== null) {
            $this->CaseType = $param["CaseType"];
        }

        if (array_key_exists("ChiefComplaint",$param) and $param["ChiefComplaint"] !== null) {
            $this->ChiefComplaint = $param["ChiefComplaint"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }

        if (array_key_exists("CaseId",$param) and $param["CaseId"] !== null) {
            $this->CaseId = $param["CaseId"];
        }

        if (array_key_exists("CaseTime",$param) and $param["CaseTime"] !== null) {
            $this->CaseTime = $param["CaseTime"];
        }

        if (array_key_exists("VisitId",$param) and $param["VisitId"] !== null) {
            $this->VisitId = $param["VisitId"];
        }

        if (array_key_exists("PatientBaseinfo",$param) and $param["PatientBaseinfo"] !== null) {
            $this->PatientBaseinfo = new PatientBaseInfo();
            $this->PatientBaseinfo->deserialize($param["PatientBaseinfo"]);
        }

        if (array_key_exists("DoctorInfo",$param) and $param["DoctorInfo"] !== null) {
            $this->DoctorInfo = new DoctorInfo();
            $this->DoctorInfo->deserialize($param["DoctorInfo"]);
        }

        if (array_key_exists("PresentIllness",$param) and $param["PresentIllness"] !== null) {
            $this->PresentIllness = $param["PresentIllness"];
        }

        if (array_key_exists("PatientOther",$param) and $param["PatientOther"] !== null) {
            $this->PatientOther = $param["PatientOther"];
        }

        if (array_key_exists("PatientHistory",$param) and $param["PatientHistory"] !== null) {
            $this->PatientHistory = new PatientHistory();
            $this->PatientHistory->deserialize($param["PatientHistory"]);
        }

        if (array_key_exists("PatientFamilyHistory",$param) and $param["PatientFamilyHistory"] !== null) {
            $this->PatientFamilyHistory = new PatientFamilyHistory();
            $this->PatientFamilyHistory->deserialize($param["PatientFamilyHistory"]);
        }

        if (array_key_exists("PhysicalExam",$param) and $param["PhysicalExam"] !== null) {
            $this->PhysicalExam = new PhysicalExam();
            $this->PhysicalExam->deserialize($param["PhysicalExam"]);
        }

        if (array_key_exists("EmrDiagnosises",$param) and $param["EmrDiagnosises"] !== null) {
            $this->EmrDiagnosises = [];
            foreach ($param["EmrDiagnosises"] as $key => $value){
                $obj = new EmrDiagnosises();
                $obj->deserialize($value);
                array_push($this->EmrDiagnosises, $obj);
            }
        }

        if (array_key_exists("Prescriptions",$param) and $param["Prescriptions"] !== null) {
            $this->Prescriptions = [];
            foreach ($param["Prescriptions"] as $key => $value){
                $obj = new DrugUsage();
                $obj->deserialize($value);
                array_push($this->Prescriptions, $obj);
            }
        }
    }
}
