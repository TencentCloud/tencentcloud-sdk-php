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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 患者信息
 *
 * @method string getName() 获取患者姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置患者姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSex() 获取患者性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSex(string $Sex) 设置患者性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAge() 获取患者年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAge(string $Age) 设置患者年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取患者手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置患者手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取患者地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置患者地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCard() 获取患者身份证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCard(string $IdCard) 设置患者身份证
注意：此字段可能返回 null，表示取不到有效值。
 */
class PatientInfo extends AbstractModel
{
    /**
     * @var string 患者姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 患者性别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sex;

    /**
     * @var string 患者年龄
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Age;

    /**
     * @var string 患者手机号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var string 患者地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 患者身份证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCard;

    /**
     * @param string $Name 患者姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sex 患者性别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Age 患者年龄
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 患者手机号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 患者地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCard 患者身份证
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }
    }
}
