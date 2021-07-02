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
 * 个人史
 *
 * @method string getBirthPlace() 获取出生地
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthPlace(string $BirthPlace) 设置出生地
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJob() 获取工作史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJob(string $Job) 设置工作史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLivePlace() 获取旅居史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivePlace(string $LivePlace) 设置旅居史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPersonal() 获取个人史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonal(string $Personal) 设置个人史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSmoke() 获取吸烟史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmoke(string $Smoke) 设置吸烟史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlcoholic() 获取饮酒史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlcoholic(string $Alcoholic) 设置饮酒史
注意：此字段可能返回 null，表示取不到有效值。
 */
class PersonalHistory extends AbstractModel
{
    /**
     * @var string 出生地
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthPlace;

    /**
     * @var string 工作史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Job;

    /**
     * @var string 旅居史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivePlace;

    /**
     * @var string 个人史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Personal;

    /**
     * @var string 吸烟史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Smoke;

    /**
     * @var string 饮酒史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alcoholic;

    /**
     * @param string $BirthPlace 出生地
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Job 工作史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LivePlace 旅居史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Personal 个人史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Smoke 吸烟史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alcoholic 饮酒史
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
        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = $param["Job"];
        }

        if (array_key_exists("LivePlace",$param) and $param["LivePlace"] !== null) {
            $this->LivePlace = $param["LivePlace"];
        }

        if (array_key_exists("Personal",$param) and $param["Personal"] !== null) {
            $this->Personal = $param["Personal"];
        }

        if (array_key_exists("Smoke",$param) and $param["Smoke"] !== null) {
            $this->Smoke = $param["Smoke"];
        }

        if (array_key_exists("Alcoholic",$param) and $param["Alcoholic"] !== null) {
            $this->Alcoholic = $param["Alcoholic"];
        }
    }
}
