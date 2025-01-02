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
 * 科室信息
 *
 * @method string getId() 获取科室ID
 * @method void setId(string $Id) 设置科室ID
 * @method string getName() 获取科室名称
 * @method void setName(string $Name) 设置科室名称
 * @method integer getScope() 获取科室类型 0:门诊  1:住院  2:门诊+住院
 * @method void setScope(integer $Scope) 设置科室类型 0:门诊  1:住院  2:门诊+住院
 * @method boolean getOutpatientOn() 获取门诊区开关 true:此科室对应的门诊区开启智能审方功能, false:此科室对应的门诊区关闭智能审方功能; 仅对scope为0/2的科室生效
 * @method void setOutpatientOn(boolean $OutpatientOn) 设置门诊区开关 true:此科室对应的门诊区开启智能审方功能, false:此科室对应的门诊区关闭智能审方功能; 仅对scope为0/2的科室生效
 * @method boolean getInHospitalOn() 获取住院区开关 true:此科室对应的住院区开启智能审方功能, false:此科室对应的住院区关闭智能审方功能; 仅对scope为1/2的科室生效
 * @method void setInHospitalOn(boolean $InHospitalOn) 设置住院区开关 true:此科室对应的住院区开启智能审方功能, false:此科室对应的住院区关闭智能审方功能; 仅对scope为1/2的科室生效
 */
class Department extends AbstractModel
{
    /**
     * @var string 科室ID
     */
    public $Id;

    /**
     * @var string 科室名称
     */
    public $Name;

    /**
     * @var integer 科室类型 0:门诊  1:住院  2:门诊+住院
     */
    public $Scope;

    /**
     * @var boolean 门诊区开关 true:此科室对应的门诊区开启智能审方功能, false:此科室对应的门诊区关闭智能审方功能; 仅对scope为0/2的科室生效
     */
    public $OutpatientOn;

    /**
     * @var boolean 住院区开关 true:此科室对应的住院区开启智能审方功能, false:此科室对应的住院区关闭智能审方功能; 仅对scope为1/2的科室生效
     */
    public $InHospitalOn;

    /**
     * @param string $Id 科室ID
     * @param string $Name 科室名称
     * @param integer $Scope 科室类型 0:门诊  1:住院  2:门诊+住院
     * @param boolean $OutpatientOn 门诊区开关 true:此科室对应的门诊区开启智能审方功能, false:此科室对应的门诊区关闭智能审方功能; 仅对scope为0/2的科室生效
     * @param boolean $InHospitalOn 住院区开关 true:此科室对应的住院区开启智能审方功能, false:此科室对应的住院区关闭智能审方功能; 仅对scope为1/2的科室生效
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("OutpatientOn",$param) and $param["OutpatientOn"] !== null) {
            $this->OutpatientOn = $param["OutpatientOn"];
        }

        if (array_key_exists("InHospitalOn",$param) and $param["InHospitalOn"] !== null) {
            $this->InHospitalOn = $param["InHospitalOn"];
        }
    }
}
