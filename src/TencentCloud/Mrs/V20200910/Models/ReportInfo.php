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
 * 报告基本信息
 *
 * @method string getHospital() 获取医院名称
 * @method void setHospital(string $Hospital) 设置医院名称
 * @method string getDepartmentName() 获取科室名称
 * @method void setDepartmentName(string $DepartmentName) 设置科室名称
 * @method string getBillingTime() 获取申请时间
 * @method void setBillingTime(string $BillingTime) 设置申请时间
 * @method string getReportTime() 获取报告时间
 * @method void setReportTime(string $ReportTime) 设置报告时间
 * @method string getInspectTime() 获取检查时间
 * @method void setInspectTime(string $InspectTime) 设置检查时间
 * @method string getCheckNum() 获取检查号
 * @method void setCheckNum(string $CheckNum) 设置检查号
 * @method string getImageNum() 获取影像号
 * @method void setImageNum(string $ImageNum) 设置影像号
 * @method string getRadiationNum() 获取放射号
 * @method void setRadiationNum(string $RadiationNum) 设置放射号
 * @method string getTestNum() 获取检验号
 * @method void setTestNum(string $TestNum) 设置检验号
 * @method string getOutpatientNum() 获取门诊号
 * @method void setOutpatientNum(string $OutpatientNum) 设置门诊号
 * @method string getPathologyNum() 获取病理号
 * @method void setPathologyNum(string $PathologyNum) 设置病理号
 * @method string getInHospitalNum() 获取住院号
 * @method void setInHospitalNum(string $InHospitalNum) 设置住院号
 * @method string getSampleNum() 获取样本号
 * @method void setSampleNum(string $SampleNum) 设置样本号
 * @method string getSampleType() 获取标本种类
 * @method void setSampleType(string $SampleType) 设置标本种类
 * @method string getMedicalRecordNum() 获取病历号
 * @method void setMedicalRecordNum(string $MedicalRecordNum) 设置病历号
 * @method string getReportName() 获取报告名称
 * @method void setReportName(string $ReportName) 设置报告名称
 * @method string getUltraNum() 获取超声号
 * @method void setUltraNum(string $UltraNum) 设置超声号
 * @method string getDiagnose() 获取临床诊断
 * @method void setDiagnose(string $Diagnose) 设置临床诊断
 * @method string getCheckItem() 获取检查项目
 * @method void setCheckItem(string $CheckItem) 设置检查项目
 * @method string getCheckMethod() 获取检查方法
 * @method void setCheckMethod(string $CheckMethod) 设置检查方法
 * @method string getDiagnoseTime() 获取诊断时间
 * @method void setDiagnoseTime(string $DiagnoseTime) 设置诊断时间
 * @method string getHealthCheckupNum() 获取体检号
 * @method void setHealthCheckupNum(string $HealthCheckupNum) 设置体检号
 * @method string getOtherTime() 获取其它时间
 * @method void setOtherTime(string $OtherTime) 设置其它时间
 * @method string getPrintTime() 获取打印时间
 * @method void setPrintTime(string $PrintTime) 设置打印时间
 * @method array getTimes() 获取未归类时间
 * @method void setTimes(array $Times) 设置未归类时间
 * @method string getBedNo() 获取床号
 * @method void setBedNo(string $BedNo) 设置床号
 */
class ReportInfo extends AbstractModel
{
    /**
     * @var string 医院名称
     */
    public $Hospital;

    /**
     * @var string 科室名称
     */
    public $DepartmentName;

    /**
     * @var string 申请时间
     */
    public $BillingTime;

    /**
     * @var string 报告时间
     */
    public $ReportTime;

    /**
     * @var string 检查时间
     */
    public $InspectTime;

    /**
     * @var string 检查号
     */
    public $CheckNum;

    /**
     * @var string 影像号
     */
    public $ImageNum;

    /**
     * @var string 放射号
     */
    public $RadiationNum;

    /**
     * @var string 检验号
     */
    public $TestNum;

    /**
     * @var string 门诊号
     */
    public $OutpatientNum;

    /**
     * @var string 病理号
     */
    public $PathologyNum;

    /**
     * @var string 住院号
     */
    public $InHospitalNum;

    /**
     * @var string 样本号
     */
    public $SampleNum;

    /**
     * @var string 标本种类
     */
    public $SampleType;

    /**
     * @var string 病历号
     */
    public $MedicalRecordNum;

    /**
     * @var string 报告名称
     */
    public $ReportName;

    /**
     * @var string 超声号
     */
    public $UltraNum;

    /**
     * @var string 临床诊断
     */
    public $Diagnose;

    /**
     * @var string 检查项目
     */
    public $CheckItem;

    /**
     * @var string 检查方法
     */
    public $CheckMethod;

    /**
     * @var string 诊断时间
     */
    public $DiagnoseTime;

    /**
     * @var string 体检号
     */
    public $HealthCheckupNum;

    /**
     * @var string 其它时间
     */
    public $OtherTime;

    /**
     * @var string 打印时间
     */
    public $PrintTime;

    /**
     * @var array 未归类时间
     */
    public $Times;

    /**
     * @var string 床号
     */
    public $BedNo;

    /**
     * @param string $Hospital 医院名称
     * @param string $DepartmentName 科室名称
     * @param string $BillingTime 申请时间
     * @param string $ReportTime 报告时间
     * @param string $InspectTime 检查时间
     * @param string $CheckNum 检查号
     * @param string $ImageNum 影像号
     * @param string $RadiationNum 放射号
     * @param string $TestNum 检验号
     * @param string $OutpatientNum 门诊号
     * @param string $PathologyNum 病理号
     * @param string $InHospitalNum 住院号
     * @param string $SampleNum 样本号
     * @param string $SampleType 标本种类
     * @param string $MedicalRecordNum 病历号
     * @param string $ReportName 报告名称
     * @param string $UltraNum 超声号
     * @param string $Diagnose 临床诊断
     * @param string $CheckItem 检查项目
     * @param string $CheckMethod 检查方法
     * @param string $DiagnoseTime 诊断时间
     * @param string $HealthCheckupNum 体检号
     * @param string $OtherTime 其它时间
     * @param string $PrintTime 打印时间
     * @param array $Times 未归类时间
     * @param string $BedNo 床号
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
        if (array_key_exists("Hospital",$param) and $param["Hospital"] !== null) {
            $this->Hospital = $param["Hospital"];
        }

        if (array_key_exists("DepartmentName",$param) and $param["DepartmentName"] !== null) {
            $this->DepartmentName = $param["DepartmentName"];
        }

        if (array_key_exists("BillingTime",$param) and $param["BillingTime"] !== null) {
            $this->BillingTime = $param["BillingTime"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("InspectTime",$param) and $param["InspectTime"] !== null) {
            $this->InspectTime = $param["InspectTime"];
        }

        if (array_key_exists("CheckNum",$param) and $param["CheckNum"] !== null) {
            $this->CheckNum = $param["CheckNum"];
        }

        if (array_key_exists("ImageNum",$param) and $param["ImageNum"] !== null) {
            $this->ImageNum = $param["ImageNum"];
        }

        if (array_key_exists("RadiationNum",$param) and $param["RadiationNum"] !== null) {
            $this->RadiationNum = $param["RadiationNum"];
        }

        if (array_key_exists("TestNum",$param) and $param["TestNum"] !== null) {
            $this->TestNum = $param["TestNum"];
        }

        if (array_key_exists("OutpatientNum",$param) and $param["OutpatientNum"] !== null) {
            $this->OutpatientNum = $param["OutpatientNum"];
        }

        if (array_key_exists("PathologyNum",$param) and $param["PathologyNum"] !== null) {
            $this->PathologyNum = $param["PathologyNum"];
        }

        if (array_key_exists("InHospitalNum",$param) and $param["InHospitalNum"] !== null) {
            $this->InHospitalNum = $param["InHospitalNum"];
        }

        if (array_key_exists("SampleNum",$param) and $param["SampleNum"] !== null) {
            $this->SampleNum = $param["SampleNum"];
        }

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("MedicalRecordNum",$param) and $param["MedicalRecordNum"] !== null) {
            $this->MedicalRecordNum = $param["MedicalRecordNum"];
        }

        if (array_key_exists("ReportName",$param) and $param["ReportName"] !== null) {
            $this->ReportName = $param["ReportName"];
        }

        if (array_key_exists("UltraNum",$param) and $param["UltraNum"] !== null) {
            $this->UltraNum = $param["UltraNum"];
        }

        if (array_key_exists("Diagnose",$param) and $param["Diagnose"] !== null) {
            $this->Diagnose = $param["Diagnose"];
        }

        if (array_key_exists("CheckItem",$param) and $param["CheckItem"] !== null) {
            $this->CheckItem = $param["CheckItem"];
        }

        if (array_key_exists("CheckMethod",$param) and $param["CheckMethod"] !== null) {
            $this->CheckMethod = $param["CheckMethod"];
        }

        if (array_key_exists("DiagnoseTime",$param) and $param["DiagnoseTime"] !== null) {
            $this->DiagnoseTime = $param["DiagnoseTime"];
        }

        if (array_key_exists("HealthCheckupNum",$param) and $param["HealthCheckupNum"] !== null) {
            $this->HealthCheckupNum = $param["HealthCheckupNum"];
        }

        if (array_key_exists("OtherTime",$param) and $param["OtherTime"] !== null) {
            $this->OtherTime = $param["OtherTime"];
        }

        if (array_key_exists("PrintTime",$param) and $param["PrintTime"] !== null) {
            $this->PrintTime = $param["PrintTime"];
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new Time();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }

        if (array_key_exists("BedNo",$param) and $param["BedNo"] !== null) {
            $this->BedNo = $param["BedNo"];
        }
    }
}
