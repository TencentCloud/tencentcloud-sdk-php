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
 * 智能问诊响应数据
 *
 * @method DiagnosisInfo getDiagnosisInfo() 获取诊断辅助内容
 * @method void setDiagnosisInfo(DiagnosisInfo $DiagnosisInfo) 设置诊断辅助内容
 * @method RationalDrugInfo getRationalDrugInfo() 获取用药风险信息
 * @method void setRationalDrugInfo(RationalDrugInfo $RationalDrugInfo) 设置用药风险信息
 */
class SmartPredictRespData extends AbstractModel
{
    /**
     * @var DiagnosisInfo 诊断辅助内容
     */
    public $DiagnosisInfo;

    /**
     * @var RationalDrugInfo 用药风险信息
     */
    public $RationalDrugInfo;

    /**
     * @param DiagnosisInfo $DiagnosisInfo 诊断辅助内容
     * @param RationalDrugInfo $RationalDrugInfo 用药风险信息
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
        if (array_key_exists("DiagnosisInfo",$param) and $param["DiagnosisInfo"] !== null) {
            $this->DiagnosisInfo = new DiagnosisInfo();
            $this->DiagnosisInfo->deserialize($param["DiagnosisInfo"]);
        }

        if (array_key_exists("RationalDrugInfo",$param) and $param["RationalDrugInfo"] !== null) {
            $this->RationalDrugInfo = new RationalDrugInfo();
            $this->RationalDrugInfo->deserialize($param["RationalDrugInfo"]);
        }
    }
}
