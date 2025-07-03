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
 * 字典信息
 *
 * @method string getFreqCode() 获取给药频次编码
 * @method void setFreqCode(string $FreqCode) 设置给药频次编码
 * @method string getFreqName() 获取给药频次名称
 * @method void setFreqName(string $FreqName) 设置给药频次名称
 * @method integer getDisable() 获取是否禁用 0-启用 1-禁用
 * @method void setDisable(integer $Disable) 设置是否禁用 0-启用 1-禁用
 * @method string getUsageCode() 获取给药途径编码
 * @method void setUsageCode(string $UsageCode) 设置给药途径编码
 * @method string getUsageName() 获取给药途径名称
 * @method void setUsageName(string $UsageName) 设置给药途径名称
 * @method string getDeptId() 获取科室ID
 * @method void setDeptId(string $DeptId) 设置科室ID
 * @method string getDeptName() 获取科室名称
 * @method void setDeptName(string $DeptName) 设置科室名称
 * @method integer getScope() 获取科室区域类型 0:门诊  1:住院  2:门诊+住院
 * @method void setScope(integer $Scope) 设置科室区域类型 0:门诊  1:住院  2:门诊+住院
 * @method boolean getOutpatientOn() 获取门诊开关
 * @method void setOutpatientOn(boolean $OutpatientOn) 设置门诊开关
 * @method boolean getInHospitalOn() 获取住院
 * @method void setInHospitalOn(boolean $InHospitalOn) 设置住院
 * @method string getDiagCode() 获取诊断编码
 * @method void setDiagCode(string $DiagCode) 设置诊断编码
 * @method string getDiagName() 获取诊断名称
 * @method void setDiagName(string $DiagName) 设置诊断名称
 * @method string getIcdCode() 获取ICD代码
 * @method void setIcdCode(string $IcdCode) 设置ICD代码
 */
class Dict extends AbstractModel
{
    /**
     * @var string 给药频次编码
     */
    public $FreqCode;

    /**
     * @var string 给药频次名称
     */
    public $FreqName;

    /**
     * @var integer 是否禁用 0-启用 1-禁用
     */
    public $Disable;

    /**
     * @var string 给药途径编码
     */
    public $UsageCode;

    /**
     * @var string 给药途径名称
     */
    public $UsageName;

    /**
     * @var string 科室ID
     */
    public $DeptId;

    /**
     * @var string 科室名称
     */
    public $DeptName;

    /**
     * @var integer 科室区域类型 0:门诊  1:住院  2:门诊+住院
     */
    public $Scope;

    /**
     * @var boolean 门诊开关
     */
    public $OutpatientOn;

    /**
     * @var boolean 住院
     */
    public $InHospitalOn;

    /**
     * @var string 诊断编码
     */
    public $DiagCode;

    /**
     * @var string 诊断名称
     */
    public $DiagName;

    /**
     * @var string ICD代码
     */
    public $IcdCode;

    /**
     * @param string $FreqCode 给药频次编码
     * @param string $FreqName 给药频次名称
     * @param integer $Disable 是否禁用 0-启用 1-禁用
     * @param string $UsageCode 给药途径编码
     * @param string $UsageName 给药途径名称
     * @param string $DeptId 科室ID
     * @param string $DeptName 科室名称
     * @param integer $Scope 科室区域类型 0:门诊  1:住院  2:门诊+住院
     * @param boolean $OutpatientOn 门诊开关
     * @param boolean $InHospitalOn 住院
     * @param string $DiagCode 诊断编码
     * @param string $DiagName 诊断名称
     * @param string $IcdCode ICD代码
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
        if (array_key_exists("FreqCode",$param) and $param["FreqCode"] !== null) {
            $this->FreqCode = $param["FreqCode"];
        }

        if (array_key_exists("FreqName",$param) and $param["FreqName"] !== null) {
            $this->FreqName = $param["FreqName"];
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("UsageCode",$param) and $param["UsageCode"] !== null) {
            $this->UsageCode = $param["UsageCode"];
        }

        if (array_key_exists("UsageName",$param) and $param["UsageName"] !== null) {
            $this->UsageName = $param["UsageName"];
        }

        if (array_key_exists("DeptId",$param) and $param["DeptId"] !== null) {
            $this->DeptId = $param["DeptId"];
        }

        if (array_key_exists("DeptName",$param) and $param["DeptName"] !== null) {
            $this->DeptName = $param["DeptName"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("OutpatientOn",$param) and $param["OutpatientOn"] !== null) {
            $this->OutpatientOn = $param["OutpatientOn"];
        }

        if (array_key_exists("InHospitalOn",$param) and $param["InHospitalOn"] !== null) {
            $this->InHospitalOn = $param["InHospitalOn"];
        }

        if (array_key_exists("DiagCode",$param) and $param["DiagCode"] !== null) {
            $this->DiagCode = $param["DiagCode"];
        }

        if (array_key_exists("DiagName",$param) and $param["DiagName"] !== null) {
            $this->DiagName = $param["DiagName"];
        }

        if (array_key_exists("IcdCode",$param) and $param["IcdCode"] !== null) {
            $this->IcdCode = $param["IcdCode"];
        }
    }
}
