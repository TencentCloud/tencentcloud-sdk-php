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
 * 处方药品信息
 *
 * @method string getDrugId() 获取药品ID
 * @method void setDrugId(string $DrugId) 设置药品ID
 * @method string getDrugName() 获取药品名称
 * @method void setDrugName(string $DrugName) 设置药品名称
 * @method string getTimePerDay() 获取日服药频次
 * @method void setTimePerDay(string $TimePerDay) 设置日服药频次
 * @method string getUsage() 获取给药途径
 * @method void setUsage(string $Usage) 设置给药途径
 * @method string getPrescriptionId() 获取处方ID，药品不同分组是传不同的处方ID
 * @method void setPrescriptionId(string $PrescriptionId) 设置处方ID，药品不同分组是传不同的处方ID
 * @method string getDosagePerTime() 获取每次剂量
 * @method void setDosagePerTime(string $DosagePerTime) 设置每次剂量
 * @method string getDosagePerTimeUnit() 获取每次剂量单位
 * @method void setDosagePerTimeUnit(string $DosagePerTimeUnit) 设置每次剂量单位
 * @method string getTime() 获取单次服药时间
 * @method void setTime(string $Time) 设置单次服药时间
 * @method string getCycle() 获取给药周期
 * @method void setCycle(string $Cycle) 设置给药周期
 * @method string getDosagePerDay() 获取单日剂量
 * @method void setDosagePerDay(string $DosagePerDay) 设置单日剂量
 * @method string getCourse() 获取疗程
 * @method void setCourse(string $Course) 设置疗程
 * @method string getSpeed() 获取给药速度
 * @method void setSpeed(string $Speed) 设置给药速度
 * @method integer getBeginTime() 获取处方生效时间戳，住院医嘱必须传(caseType =1)
 * @method void setBeginTime(integer $BeginTime) 设置处方生效时间戳，住院医嘱必须传(caseType =1)
 * @method integer getEndTime() 获取处方失效时间戳，住院医嘱必须传(caseType =1)
 * @method void setEndTime(integer $EndTime) 设置处方失效时间戳，住院医嘱必须传(caseType =1)
 * @method string getPackage() 获取开具数量
 * @method void setPackage(string $Package) 设置开具数量
 * @method string getPackageUnit() 获取开具数量单位
 * @method void setPackageUnit(string $PackageUnit) 设置开具数量单位
 * @method string getGroupInj() 获取相同标志液体间进行配伍禁忌审核，不同标志间液体不进行配伍禁忌审核
 * @method void setGroupInj(string $GroupInj) 设置相同标志液体间进行配伍禁忌审核，不同标志间液体不进行配伍禁忌审核
 * @method string getPrescriptionCharge() 获取处方金额
 * @method void setPrescriptionCharge(string $PrescriptionCharge) 设置处方金额
 * @method string getMedicationDays() 获取用药天数
 * @method void setMedicationDays(string $MedicationDays) 设置用药天数
 */
class DrugUsage extends AbstractModel
{
    /**
     * @var string 药品ID
     */
    public $DrugId;

    /**
     * @var string 药品名称
     */
    public $DrugName;

    /**
     * @var string 日服药频次
     */
    public $TimePerDay;

    /**
     * @var string 给药途径
     */
    public $Usage;

    /**
     * @var string 处方ID，药品不同分组是传不同的处方ID
     */
    public $PrescriptionId;

    /**
     * @var string 每次剂量
     */
    public $DosagePerTime;

    /**
     * @var string 每次剂量单位
     */
    public $DosagePerTimeUnit;

    /**
     * @var string 单次服药时间
     */
    public $Time;

    /**
     * @var string 给药周期
     */
    public $Cycle;

    /**
     * @var string 单日剂量
     */
    public $DosagePerDay;

    /**
     * @var string 疗程
     */
    public $Course;

    /**
     * @var string 给药速度
     */
    public $Speed;

    /**
     * @var integer 处方生效时间戳，住院医嘱必须传(caseType =1)
     */
    public $BeginTime;

    /**
     * @var integer 处方失效时间戳，住院医嘱必须传(caseType =1)
     */
    public $EndTime;

    /**
     * @var string 开具数量
     */
    public $Package;

    /**
     * @var string 开具数量单位
     */
    public $PackageUnit;

    /**
     * @var string 相同标志液体间进行配伍禁忌审核，不同标志间液体不进行配伍禁忌审核
     */
    public $GroupInj;

    /**
     * @var string 处方金额
     */
    public $PrescriptionCharge;

    /**
     * @var string 用药天数
     */
    public $MedicationDays;

    /**
     * @param string $DrugId 药品ID
     * @param string $DrugName 药品名称
     * @param string $TimePerDay 日服药频次
     * @param string $Usage 给药途径
     * @param string $PrescriptionId 处方ID，药品不同分组是传不同的处方ID
     * @param string $DosagePerTime 每次剂量
     * @param string $DosagePerTimeUnit 每次剂量单位
     * @param string $Time 单次服药时间
     * @param string $Cycle 给药周期
     * @param string $DosagePerDay 单日剂量
     * @param string $Course 疗程
     * @param string $Speed 给药速度
     * @param integer $BeginTime 处方生效时间戳，住院医嘱必须传(caseType =1)
     * @param integer $EndTime 处方失效时间戳，住院医嘱必须传(caseType =1)
     * @param string $Package 开具数量
     * @param string $PackageUnit 开具数量单位
     * @param string $GroupInj 相同标志液体间进行配伍禁忌审核，不同标志间液体不进行配伍禁忌审核
     * @param string $PrescriptionCharge 处方金额
     * @param string $MedicationDays 用药天数
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
        if (array_key_exists("DrugId",$param) and $param["DrugId"] !== null) {
            $this->DrugId = $param["DrugId"];
        }

        if (array_key_exists("DrugName",$param) and $param["DrugName"] !== null) {
            $this->DrugName = $param["DrugName"];
        }

        if (array_key_exists("TimePerDay",$param) and $param["TimePerDay"] !== null) {
            $this->TimePerDay = $param["TimePerDay"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("PrescriptionId",$param) and $param["PrescriptionId"] !== null) {
            $this->PrescriptionId = $param["PrescriptionId"];
        }

        if (array_key_exists("DosagePerTime",$param) and $param["DosagePerTime"] !== null) {
            $this->DosagePerTime = $param["DosagePerTime"];
        }

        if (array_key_exists("DosagePerTimeUnit",$param) and $param["DosagePerTimeUnit"] !== null) {
            $this->DosagePerTimeUnit = $param["DosagePerTimeUnit"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Cycle",$param) and $param["Cycle"] !== null) {
            $this->Cycle = $param["Cycle"];
        }

        if (array_key_exists("DosagePerDay",$param) and $param["DosagePerDay"] !== null) {
            $this->DosagePerDay = $param["DosagePerDay"];
        }

        if (array_key_exists("Course",$param) and $param["Course"] !== null) {
            $this->Course = $param["Course"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("PackageUnit",$param) and $param["PackageUnit"] !== null) {
            $this->PackageUnit = $param["PackageUnit"];
        }

        if (array_key_exists("GroupInj",$param) and $param["GroupInj"] !== null) {
            $this->GroupInj = $param["GroupInj"];
        }

        if (array_key_exists("PrescriptionCharge",$param) and $param["PrescriptionCharge"] !== null) {
            $this->PrescriptionCharge = $param["PrescriptionCharge"];
        }

        if (array_key_exists("MedicationDays",$param) and $param["MedicationDays"] !== null) {
            $this->MedicationDays = $param["MedicationDays"];
        }
    }
}
