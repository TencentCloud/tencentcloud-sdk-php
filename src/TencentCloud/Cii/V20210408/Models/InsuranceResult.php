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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 包含险种的各个核保结论
 *
 * @method string getInsuranceType() 获取险种:CriticalDiseaseInsurance(重疾险);LifeInsurance(寿险);AccidentInsurance(意外险);MedicalInsurance(医疗险)
 * @method void setInsuranceType(string $InsuranceType) 设置险种:CriticalDiseaseInsurance(重疾险);LifeInsurance(寿险);AccidentInsurance(意外险);MedicalInsurance(医疗险)
 * @method array getResult() 获取对应险种的机器核保结果
 * @method void setResult(array $Result) 设置对应险种的机器核保结果
 */
class InsuranceResult extends AbstractModel
{
    /**
     * @var string 险种:CriticalDiseaseInsurance(重疾险);LifeInsurance(寿险);AccidentInsurance(意外险);MedicalInsurance(医疗险)
     */
    public $InsuranceType;

    /**
     * @var array 对应险种的机器核保结果
     */
    public $Result;

    /**
     * @param string $InsuranceType 险种:CriticalDiseaseInsurance(重疾险);LifeInsurance(寿险);AccidentInsurance(意外险);MedicalInsurance(医疗险)
     * @param array $Result 对应险种的机器核保结果
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
        if (array_key_exists("InsuranceType",$param) and $param["InsuranceType"] !== null) {
            $this->InsuranceType = $param["InsuranceType"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = [];
            foreach ($param["Result"] as $key => $value){
                $obj = new MachinePredict();
                $obj->deserialize($value);
                array_push($this->Result, $obj);
            }
        }
    }
}
