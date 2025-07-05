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
 * 母亲或父亲信息
 *
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getAge() 获取年龄
 * @method void setAge(string $Age) 设置年龄
 * @method string getIdCard() 获取证件号
 * @method void setIdCard(string $IdCard) 设置证件号
 * @method string getEthnicity() 获取民族
 * @method void setEthnicity(string $Ethnicity) 设置民族
 * @method string getNationality() 获取国籍
 * @method void setNationality(string $Nationality) 设置国籍
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 */
class ParentInfo extends AbstractModel
{
    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 年龄
     */
    public $Age;

    /**
     * @var string 证件号
     */
    public $IdCard;

    /**
     * @var string 民族
     */
    public $Ethnicity;

    /**
     * @var string 国籍
     */
    public $Nationality;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @param string $Name 名字
     * @param string $Age 年龄
     * @param string $IdCard 证件号
     * @param string $Ethnicity 民族
     * @param string $Nationality 国籍
     * @param string $Address 地址
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Ethnicity",$param) and $param["Ethnicity"] !== null) {
            $this->Ethnicity = $param["Ethnicity"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
