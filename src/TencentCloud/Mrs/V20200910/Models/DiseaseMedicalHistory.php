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
 * 疾病史
 *
 * @method string getMainDiseaseHistory() 获取主病史
 * @method void setMainDiseaseHistory(string $MainDiseaseHistory) 设置主病史
 * @method string getAllergyHistory() 获取过敏史
 * @method void setAllergyHistory(string $AllergyHistory) 设置过敏史
 * @method string getInfectHistory() 获取传染疾病史
 * @method void setInfectHistory(string $InfectHistory) 设置传染疾病史
 * @method string getOperationHistory() 获取手术史
 * @method void setOperationHistory(string $OperationHistory) 设置手术史
 * @method string getTransfusionHistory() 获取输血史
 * @method void setTransfusionHistory(string $TransfusionHistory) 设置输血史
 * @method string getDiseasePresent() 获取现病史
 * @method void setDiseasePresent(string $DiseasePresent) 设置现病史
 */
class DiseaseMedicalHistory extends AbstractModel
{
    /**
     * @var string 主病史
     */
    public $MainDiseaseHistory;

    /**
     * @var string 过敏史
     */
    public $AllergyHistory;

    /**
     * @var string 传染疾病史
     */
    public $InfectHistory;

    /**
     * @var string 手术史
     */
    public $OperationHistory;

    /**
     * @var string 输血史
     */
    public $TransfusionHistory;

    /**
     * @var string 现病史
     */
    public $DiseasePresent;

    /**
     * @param string $MainDiseaseHistory 主病史
     * @param string $AllergyHistory 过敏史
     * @param string $InfectHistory 传染疾病史
     * @param string $OperationHistory 手术史
     * @param string $TransfusionHistory 输血史
     * @param string $DiseasePresent 现病史
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
        if (array_key_exists("MainDiseaseHistory",$param) and $param["MainDiseaseHistory"] !== null) {
            $this->MainDiseaseHistory = $param["MainDiseaseHistory"];
        }

        if (array_key_exists("AllergyHistory",$param) and $param["AllergyHistory"] !== null) {
            $this->AllergyHistory = $param["AllergyHistory"];
        }

        if (array_key_exists("InfectHistory",$param) and $param["InfectHistory"] !== null) {
            $this->InfectHistory = $param["InfectHistory"];
        }

        if (array_key_exists("OperationHistory",$param) and $param["OperationHistory"] !== null) {
            $this->OperationHistory = $param["OperationHistory"];
        }

        if (array_key_exists("TransfusionHistory",$param) and $param["TransfusionHistory"] !== null) {
            $this->TransfusionHistory = $param["TransfusionHistory"];
        }

        if (array_key_exists("DiseasePresent",$param) and $param["DiseasePresent"] !== null) {
            $this->DiseasePresent = $param["DiseasePresent"];
        }
    }
}
