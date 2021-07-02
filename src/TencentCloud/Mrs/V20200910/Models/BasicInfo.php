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
 * 报告基本信息
 *
 * @method string getHospitalName() 获取医院名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHospitalName(string $HospitalName) 设置医院名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDepartmentName() 获取科室名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartmentName(string $DepartmentName) 设置科室名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportName() 获取报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportName(string $ReportName) 设置报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportTime() 获取报告时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportTime(string $ReportTime) 设置报告时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutpatientNum() 获取门诊号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutpatientNum(string $OutpatientNum) 设置门诊号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInHospitalNum() 获取住院号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInHospitalNum(string $InHospitalNum) 设置住院号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInspectionNum() 获取检查号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInspectionNum(string $InspectionNum) 设置检查号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageNum() 获取影像号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageNum(string $ImageNum) 设置影像号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRadiationNum() 获取放射号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRadiationNum(string $RadiationNum) 设置放射号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPathologyNum() 获取病理号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathologyNum(string $PathologyNum) 设置病理号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBedNum() 获取床位号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBedNum(string $BedNum) 设置床位号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInHospitalTime() 获取入院时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInHospitalTime(string $InHospitalTime) 设置入院时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutHospitalTime() 获取出院时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutHospitalTime(string $OutHospitalTime) 设置出院时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCureDuration() 获取住院治疗时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCureDuration(string $CureDuration) 设置住院治疗时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHospitalizationTimes() 获取住院次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHospitalizationTimes(string $HospitalizationTimes) 设置住院次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInspectionTime() 获取送检检查时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInspectionTime(string $InspectionTime) 设置送检检查时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BasicInfo extends AbstractModel
{
    /**
     * @var string 医院名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HospitalName;

    /**
     * @var string 科室名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DepartmentName;

    /**
     * @var string 报告名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportName;

    /**
     * @var string 报告时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportTime;

    /**
     * @var string 门诊号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutpatientNum;

    /**
     * @var string 住院号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InHospitalNum;

    /**
     * @var string 检查号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InspectionNum;

    /**
     * @var string 影像号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageNum;

    /**
     * @var string 放射号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RadiationNum;

    /**
     * @var string 病理号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathologyNum;

    /**
     * @var string 床位号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BedNum;

    /**
     * @var string 入院时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InHospitalTime;

    /**
     * @var string 出院时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutHospitalTime;

    /**
     * @var string 住院治疗时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CureDuration;

    /**
     * @var string 住院次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HospitalizationTimes;

    /**
     * @var string 送检检查时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InspectionTime;

    /**
     * @param string $HospitalName 医院名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DepartmentName 科室名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportName 报告名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportTime 报告时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutpatientNum 门诊号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InHospitalNum 住院号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InspectionNum 检查号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageNum 影像号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RadiationNum 放射号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PathologyNum 病理号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BedNum 床位号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InHospitalTime 入院时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutHospitalTime 出院时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CureDuration 住院治疗时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HospitalizationTimes 住院次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InspectionTime 送检检查时间
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
        if (array_key_exists("HospitalName",$param) and $param["HospitalName"] !== null) {
            $this->HospitalName = $param["HospitalName"];
        }

        if (array_key_exists("DepartmentName",$param) and $param["DepartmentName"] !== null) {
            $this->DepartmentName = $param["DepartmentName"];
        }

        if (array_key_exists("ReportName",$param) and $param["ReportName"] !== null) {
            $this->ReportName = $param["ReportName"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("OutpatientNum",$param) and $param["OutpatientNum"] !== null) {
            $this->OutpatientNum = $param["OutpatientNum"];
        }

        if (array_key_exists("InHospitalNum",$param) and $param["InHospitalNum"] !== null) {
            $this->InHospitalNum = $param["InHospitalNum"];
        }

        if (array_key_exists("InspectionNum",$param) and $param["InspectionNum"] !== null) {
            $this->InspectionNum = $param["InspectionNum"];
        }

        if (array_key_exists("ImageNum",$param) and $param["ImageNum"] !== null) {
            $this->ImageNum = $param["ImageNum"];
        }

        if (array_key_exists("RadiationNum",$param) and $param["RadiationNum"] !== null) {
            $this->RadiationNum = $param["RadiationNum"];
        }

        if (array_key_exists("PathologyNum",$param) and $param["PathologyNum"] !== null) {
            $this->PathologyNum = $param["PathologyNum"];
        }

        if (array_key_exists("BedNum",$param) and $param["BedNum"] !== null) {
            $this->BedNum = $param["BedNum"];
        }

        if (array_key_exists("InHospitalTime",$param) and $param["InHospitalTime"] !== null) {
            $this->InHospitalTime = $param["InHospitalTime"];
        }

        if (array_key_exists("OutHospitalTime",$param) and $param["OutHospitalTime"] !== null) {
            $this->OutHospitalTime = $param["OutHospitalTime"];
        }

        if (array_key_exists("CureDuration",$param) and $param["CureDuration"] !== null) {
            $this->CureDuration = $param["CureDuration"];
        }

        if (array_key_exists("HospitalizationTimes",$param) and $param["HospitalizationTimes"] !== null) {
            $this->HospitalizationTimes = $param["HospitalizationTimes"];
        }

        if (array_key_exists("InspectionTime",$param) and $param["InspectionTime"] !== null) {
            $this->InspectionTime = $param["InspectionTime"];
        }
    }
}
