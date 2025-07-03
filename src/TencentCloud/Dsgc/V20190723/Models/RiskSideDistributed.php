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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险面的分布
 *
 * @method Note getAssessmentRiskSide() 获取风险面
 * @method void setAssessmentRiskSide(Note $AssessmentRiskSide) 设置风险面
 * @method array getAssessmentRisk() 获取风险类型
 * @method void setAssessmentRisk(array $AssessmentRisk) 设置风险类型
 */
class RiskSideDistributed extends AbstractModel
{
    /**
     * @var Note 风险面
     */
    public $AssessmentRiskSide;

    /**
     * @var array 风险类型
     */
    public $AssessmentRisk;

    /**
     * @param Note $AssessmentRiskSide 风险面
     * @param array $AssessmentRisk 风险类型
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
        if (array_key_exists("AssessmentRiskSide",$param) and $param["AssessmentRiskSide"] !== null) {
            $this->AssessmentRiskSide = new Note();
            $this->AssessmentRiskSide->deserialize($param["AssessmentRiskSide"]);
        }

        if (array_key_exists("AssessmentRisk",$param) and $param["AssessmentRisk"] !== null) {
            $this->AssessmentRisk = [];
            foreach ($param["AssessmentRisk"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->AssessmentRisk, $obj);
            }
        }
    }
}
