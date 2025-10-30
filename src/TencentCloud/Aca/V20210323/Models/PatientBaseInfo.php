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
 * 患者信息
 *
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method string getHeight() 获取身高 单位cm
 * @method void setHeight(string $Height) 设置身高 单位cm
 * @method string getWeight() 获取体重 单位kg
 * @method void setWeight(string $Weight) 设置体重 单位kg
 * @method string getPatientId() 获取患者ID
 * @method void setPatientId(string $PatientId) 设置患者ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getAge() 获取年龄
 * @method void setAge(string $Age) 设置年龄
 * @method string getBirthPlace() 获取出生地
 * @method void setBirthPlace(string $BirthPlace) 设置出生地
 * @method string getLivePlace() 获取居住地
 * @method void setLivePlace(string $LivePlace) 设置居住地
 * @method string getBirthDay() 获取出生日期和年龄必须传一个
 * @method void setBirthDay(string $BirthDay) 设置出生日期和年龄必须传一个
 */
class PatientBaseInfo extends AbstractModel
{
    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var string 身高 单位cm
     */
    public $Height;

    /**
     * @var string 体重 单位kg
     */
    public $Weight;

    /**
     * @var string 患者ID
     */
    public $PatientId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 年龄
     */
    public $Age;

    /**
     * @var string 出生地
     */
    public $BirthPlace;

    /**
     * @var string 居住地
     */
    public $LivePlace;

    /**
     * @var string 出生日期和年龄必须传一个
     */
    public $BirthDay;

    /**
     * @param string $Sex 性别
     * @param string $Height 身高 单位cm
     * @param string $Weight 体重 单位kg
     * @param string $PatientId 患者ID
     * @param string $Name 名称
     * @param string $Age 年龄
     * @param string $BirthPlace 出生地
     * @param string $LivePlace 居住地
     * @param string $BirthDay 出生日期和年龄必须传一个
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
        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PatientId",$param) and $param["PatientId"] !== null) {
            $this->PatientId = $param["PatientId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("LivePlace",$param) and $param["LivePlace"] !== null) {
            $this->LivePlace = $param["LivePlace"];
        }

        if (array_key_exists("BirthDay",$param) and $param["BirthDay"] !== null) {
            $this->BirthDay = $param["BirthDay"];
        }
    }
}
