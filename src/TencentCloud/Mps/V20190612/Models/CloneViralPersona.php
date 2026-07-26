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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 爆款复刻模特形象
 *
 * @method string getGender() 获取<p>模特性别。male/female/any</p>
 * @method void setGender(string $Gender) 设置<p>模特性别。male/female/any</p>
 * @method string getAge() 获取<p>年龄段。teenager/youth/middle_aged/senior</p>
 * @method void setAge(string $Age) 设置<p>年龄段。teenager/youth/middle_aged/senior</p>
 * @method string getEthnicity() 获取<p>外观特征。caucasian/asian/latino/african/middle_eastern</p>
 * @method void setEthnicity(string $Ethnicity) 设置<p>外观特征。caucasian/asian/latino/african/middle_eastern</p>
 * @method string getBodyType() 获取<p>体型。slim / standard / athletic / chubby</p>
 * @method void setBodyType(string $BodyType) 设置<p>体型。slim / standard / athletic / chubby</p>
 */
class CloneViralPersona extends AbstractModel
{
    /**
     * @var string <p>模特性别。male/female/any</p>
     */
    public $Gender;

    /**
     * @var string <p>年龄段。teenager/youth/middle_aged/senior</p>
     */
    public $Age;

    /**
     * @var string <p>外观特征。caucasian/asian/latino/african/middle_eastern</p>
     */
    public $Ethnicity;

    /**
     * @var string <p>体型。slim / standard / athletic / chubby</p>
     */
    public $BodyType;

    /**
     * @param string $Gender <p>模特性别。male/female/any</p>
     * @param string $Age <p>年龄段。teenager/youth/middle_aged/senior</p>
     * @param string $Ethnicity <p>外观特征。caucasian/asian/latino/african/middle_eastern</p>
     * @param string $BodyType <p>体型。slim / standard / athletic / chubby</p>
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
        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Ethnicity",$param) and $param["Ethnicity"] !== null) {
            $this->Ethnicity = $param["Ethnicity"];
        }

        if (array_key_exists("BodyType",$param) and $param["BodyType"] !== null) {
            $this->BodyType = $param["BodyType"];
        }
    }
}
