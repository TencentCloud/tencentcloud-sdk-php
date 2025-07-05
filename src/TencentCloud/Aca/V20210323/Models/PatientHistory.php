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
 * 患者过往病史
 *
 * @method string getDiseaseHistory() 获取病史
 * @method void setDiseaseHistory(string $DiseaseHistory) 设置病史
 * @method string getTreatmentHistory() 获取治疗史
 * @method void setTreatmentHistory(string $TreatmentHistory) 设置治疗史
 */
class PatientHistory extends AbstractModel
{
    /**
     * @var string 病史
     */
    public $DiseaseHistory;

    /**
     * @var string 治疗史
     */
    public $TreatmentHistory;

    /**
     * @param string $DiseaseHistory 病史
     * @param string $TreatmentHistory 治疗史
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
        if (array_key_exists("DiseaseHistory",$param) and $param["DiseaseHistory"] !== null) {
            $this->DiseaseHistory = $param["DiseaseHistory"];
        }

        if (array_key_exists("TreatmentHistory",$param) and $param["TreatmentHistory"] !== null) {
            $this->TreatmentHistory = $param["TreatmentHistory"];
        }
    }
}
