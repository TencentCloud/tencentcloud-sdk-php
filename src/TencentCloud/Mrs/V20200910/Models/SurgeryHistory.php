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
 * 手术史
 *
 * @method SurgeryAttr getSurgeryName() 获取手术名称
 * @method void setSurgeryName(SurgeryAttr $SurgeryName) 设置手术名称
 * @method SurgeryAttr getSurgeryDate() 获取手术日期
 * @method void setSurgeryDate(SurgeryAttr $SurgeryDate) 设置手术日期
 * @method SurgeryAttr getPreoperativePathology() 获取术前诊断
 * @method void setPreoperativePathology(SurgeryAttr $PreoperativePathology) 设置术前诊断
 * @method SurgeryAttr getIntraoperativePathology() 获取术中诊断
 * @method void setIntraoperativePathology(SurgeryAttr $IntraoperativePathology) 设置术中诊断
 * @method SurgeryAttr getPostoperativePathology() 获取术后诊断
 * @method void setPostoperativePathology(SurgeryAttr $PostoperativePathology) 设置术后诊断
 * @method SurgeryAttr getDischargeDiagnosis() 获取出院诊断
 * @method void setDischargeDiagnosis(SurgeryAttr $DischargeDiagnosis) 设置出院诊断
 */
class SurgeryHistory extends AbstractModel
{
    /**
     * @var SurgeryAttr 手术名称
     */
    public $SurgeryName;

    /**
     * @var SurgeryAttr 手术日期
     */
    public $SurgeryDate;

    /**
     * @var SurgeryAttr 术前诊断
     */
    public $PreoperativePathology;

    /**
     * @var SurgeryAttr 术中诊断
     */
    public $IntraoperativePathology;

    /**
     * @var SurgeryAttr 术后诊断
     */
    public $PostoperativePathology;

    /**
     * @var SurgeryAttr 出院诊断
     */
    public $DischargeDiagnosis;

    /**
     * @param SurgeryAttr $SurgeryName 手术名称
     * @param SurgeryAttr $SurgeryDate 手术日期
     * @param SurgeryAttr $PreoperativePathology 术前诊断
     * @param SurgeryAttr $IntraoperativePathology 术中诊断
     * @param SurgeryAttr $PostoperativePathology 术后诊断
     * @param SurgeryAttr $DischargeDiagnosis 出院诊断
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
        if (array_key_exists("SurgeryName",$param) and $param["SurgeryName"] !== null) {
            $this->SurgeryName = new SurgeryAttr();
            $this->SurgeryName->deserialize($param["SurgeryName"]);
        }

        if (array_key_exists("SurgeryDate",$param) and $param["SurgeryDate"] !== null) {
            $this->SurgeryDate = new SurgeryAttr();
            $this->SurgeryDate->deserialize($param["SurgeryDate"]);
        }

        if (array_key_exists("PreoperativePathology",$param) and $param["PreoperativePathology"] !== null) {
            $this->PreoperativePathology = new SurgeryAttr();
            $this->PreoperativePathology->deserialize($param["PreoperativePathology"]);
        }

        if (array_key_exists("IntraoperativePathology",$param) and $param["IntraoperativePathology"] !== null) {
            $this->IntraoperativePathology = new SurgeryAttr();
            $this->IntraoperativePathology->deserialize($param["IntraoperativePathology"]);
        }

        if (array_key_exists("PostoperativePathology",$param) and $param["PostoperativePathology"] !== null) {
            $this->PostoperativePathology = new SurgeryAttr();
            $this->PostoperativePathology->deserialize($param["PostoperativePathology"]);
        }

        if (array_key_exists("DischargeDiagnosis",$param) and $param["DischargeDiagnosis"] !== null) {
            $this->DischargeDiagnosis = new SurgeryAttr();
            $this->DischargeDiagnosis->deserialize($param["DischargeDiagnosis"]);
        }
    }
}
