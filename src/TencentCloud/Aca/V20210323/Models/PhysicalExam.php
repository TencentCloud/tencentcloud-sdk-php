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
 * 体格检查
 *
 * @method string getPulse() 获取脉搏，单位：次/分
 * @method void setPulse(string $Pulse) 设置脉搏，单位：次/分
 * @method string getBreathe() 获取呼吸，单位：次/分
 * @method void setBreathe(string $Breathe) 设置呼吸，单位：次/分
 * @method string getWeight() 获取体重，单位KG
 * @method void setWeight(string $Weight) 设置体重，单位KG
 * @method string getBodyTemperature() 获取体温，单位：℃ 
 * @method void setBodyTemperature(string $BodyTemperature) 设置体温，单位：℃ 
 * @method string getDiastolicPressure() 获取舒张压， 单位：mmHg
 * @method void setDiastolicPressure(string $DiastolicPressure) 设置舒张压， 单位：mmHg
 * @method string getSystolicPressure() 获取收缩压， 单位：mmHg
 * @method void setSystolicPressure(string $SystolicPressure) 设置收缩压， 单位：mmHg
 */
class PhysicalExam extends AbstractModel
{
    /**
     * @var string 脉搏，单位：次/分
     */
    public $Pulse;

    /**
     * @var string 呼吸，单位：次/分
     */
    public $Breathe;

    /**
     * @var string 体重，单位KG
     */
    public $Weight;

    /**
     * @var string 体温，单位：℃ 
     */
    public $BodyTemperature;

    /**
     * @var string 舒张压， 单位：mmHg
     */
    public $DiastolicPressure;

    /**
     * @var string 收缩压， 单位：mmHg
     */
    public $SystolicPressure;

    /**
     * @param string $Pulse 脉搏，单位：次/分
     * @param string $Breathe 呼吸，单位：次/分
     * @param string $Weight 体重，单位KG
     * @param string $BodyTemperature 体温，单位：℃ 
     * @param string $DiastolicPressure 舒张压， 单位：mmHg
     * @param string $SystolicPressure 收缩压， 单位：mmHg
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
        if (array_key_exists("Pulse",$param) and $param["Pulse"] !== null) {
            $this->Pulse = $param["Pulse"];
        }

        if (array_key_exists("Breathe",$param) and $param["Breathe"] !== null) {
            $this->Breathe = $param["Breathe"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("BodyTemperature",$param) and $param["BodyTemperature"] !== null) {
            $this->BodyTemperature = $param["BodyTemperature"];
        }

        if (array_key_exists("DiastolicPressure",$param) and $param["DiastolicPressure"] !== null) {
            $this->DiastolicPressure = $param["DiastolicPressure"];
        }

        if (array_key_exists("SystolicPressure",$param) and $param["SystolicPressure"] !== null) {
            $this->SystolicPressure = $param["SystolicPressure"];
        }
    }
}
