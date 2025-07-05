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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 治疗方案
 *
 * @method string getDoctorDiagnosis() 获取医生诊断
 * @method void setDoctorDiagnosis(string $DoctorDiagnosis) 设置医生诊断
 * @method string getDiseaseName() 获取疾病名称
 * @method void setDiseaseName(string $DiseaseName) 设置疾病名称
 * @method string getTreatDetailUrl() 获取治疗详情链接
 * @method void setTreatDetailUrl(string $TreatDetailUrl) 设置治疗详情链接
 * @method string getTreatPlan() 获取治疗方案
 * @method void setTreatPlan(string $TreatPlan) 设置治疗方案
 * @method string getTreatPrinciple() 获取治疗原则
 * @method void setTreatPrinciple(string $TreatPrinciple) 设置治疗原则
 */
class TreatmentGuide extends AbstractModel
{
    /**
     * @var string 医生诊断
     */
    public $DoctorDiagnosis;

    /**
     * @var string 疾病名称
     */
    public $DiseaseName;

    /**
     * @var string 治疗详情链接
     */
    public $TreatDetailUrl;

    /**
     * @var string 治疗方案
     */
    public $TreatPlan;

    /**
     * @var string 治疗原则
     */
    public $TreatPrinciple;

    /**
     * @param string $DoctorDiagnosis 医生诊断
     * @param string $DiseaseName 疾病名称
     * @param string $TreatDetailUrl 治疗详情链接
     * @param string $TreatPlan 治疗方案
     * @param string $TreatPrinciple 治疗原则
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
        if (array_key_exists("DoctorDiagnosis",$param) and $param["DoctorDiagnosis"] !== null) {
            $this->DoctorDiagnosis = $param["DoctorDiagnosis"];
        }

        if (array_key_exists("DiseaseName",$param) and $param["DiseaseName"] !== null) {
            $this->DiseaseName = $param["DiseaseName"];
        }

        if (array_key_exists("TreatDetailUrl",$param) and $param["TreatDetailUrl"] !== null) {
            $this->TreatDetailUrl = $param["TreatDetailUrl"];
        }

        if (array_key_exists("TreatPlan",$param) and $param["TreatPlan"] !== null) {
            $this->TreatPlan = $param["TreatPlan"];
        }

        if (array_key_exists("TreatPrinciple",$param) and $param["TreatPrinciple"] !== null) {
            $this->TreatPrinciple = $param["TreatPrinciple"];
        }
    }
}
