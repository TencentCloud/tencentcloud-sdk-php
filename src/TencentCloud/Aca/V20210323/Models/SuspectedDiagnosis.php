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
 * 疑似诊断
 *
 * @method string getDiseaseName() 获取疾病名称
 * @method void setDiseaseName(string $DiseaseName) 设置疾病名称
 * @method string getIcdCode() 获取ICD代码
 * @method void setIcdCode(string $IcdCode) 设置ICD代码
 * @method string getSymptom() 获取症状
 * @method void setSymptom(string $Symptom) 设置症状
 * @method string getPhysi() 获取体征
 * @method void setPhysi(string $Physi) 设置体征
 * @method string getInspection() 获取检查
 * @method void setInspection(string $Inspection) 设置检查
 * @method string getDiseaseGuideInfo() 获取疾病指南信息
 * @method void setDiseaseGuideInfo(string $DiseaseGuideInfo) 设置疾病指南信息
 * @method float getProbability() 获取置信度
 * @method void setProbability(float $Probability) 设置置信度
 */
class SuspectedDiagnosis extends AbstractModel
{
    /**
     * @var string 疾病名称
     */
    public $DiseaseName;

    /**
     * @var string ICD代码
     */
    public $IcdCode;

    /**
     * @var string 症状
     */
    public $Symptom;

    /**
     * @var string 体征
     */
    public $Physi;

    /**
     * @var string 检查
     */
    public $Inspection;

    /**
     * @var string 疾病指南信息
     */
    public $DiseaseGuideInfo;

    /**
     * @var float 置信度
     */
    public $Probability;

    /**
     * @param string $DiseaseName 疾病名称
     * @param string $IcdCode ICD代码
     * @param string $Symptom 症状
     * @param string $Physi 体征
     * @param string $Inspection 检查
     * @param string $DiseaseGuideInfo 疾病指南信息
     * @param float $Probability 置信度
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
        if (array_key_exists("DiseaseName",$param) and $param["DiseaseName"] !== null) {
            $this->DiseaseName = $param["DiseaseName"];
        }

        if (array_key_exists("IcdCode",$param) and $param["IcdCode"] !== null) {
            $this->IcdCode = $param["IcdCode"];
        }

        if (array_key_exists("Symptom",$param) and $param["Symptom"] !== null) {
            $this->Symptom = $param["Symptom"];
        }

        if (array_key_exists("Physi",$param) and $param["Physi"] !== null) {
            $this->Physi = $param["Physi"];
        }

        if (array_key_exists("Inspection",$param) and $param["Inspection"] !== null) {
            $this->Inspection = $param["Inspection"];
        }

        if (array_key_exists("DiseaseGuideInfo",$param) and $param["DiseaseGuideInfo"] !== null) {
            $this->DiseaseGuideInfo = $param["DiseaseGuideInfo"];
        }

        if (array_key_exists("Probability",$param) and $param["Probability"] !== null) {
            $this->Probability = $param["Probability"];
        }
    }
}
