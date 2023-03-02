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
 * 新生儿信息
 *
 * @method string getNeonatalName() 获取新生儿名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeonatalName(string $NeonatalName) 设置新生儿名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNeonatalGender() 获取新生儿性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeonatalGender(string $NeonatalGender) 设置新生儿性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthLength() 获取出生身长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthLength(string $BirthLength) 设置出生身长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthWeight() 获取出生体重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthWeight(string $BirthWeight) 设置出生体重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGestationalAge() 获取出生孕周
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGestationalAge(string $GestationalAge) 设置出生孕周
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthTime() 获取出生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthTime(string $BirthTime) 设置出生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthPlace() 获取出生地点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthPlace(string $BirthPlace) 设置出生地点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMedicalInstitutions() 获取医疗机构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMedicalInstitutions(string $MedicalInstitutions) 设置医疗机构
注意：此字段可能返回 null，表示取不到有效值。
 */
class NeonatalInfo extends AbstractModel
{
    /**
     * @var string 新生儿名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeonatalName;

    /**
     * @var string 新生儿性别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeonatalGender;

    /**
     * @var string 出生身长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthLength;

    /**
     * @var string 出生体重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthWeight;

    /**
     * @var string 出生孕周
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GestationalAge;

    /**
     * @var string 出生时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthTime;

    /**
     * @var string 出生地点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthPlace;

    /**
     * @var string 医疗机构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MedicalInstitutions;

    /**
     * @param string $NeonatalName 新生儿名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NeonatalGender 新生儿性别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BirthLength 出生身长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BirthWeight 出生体重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GestationalAge 出生孕周
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BirthTime 出生时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BirthPlace 出生地点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MedicalInstitutions 医疗机构
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
        if (array_key_exists("NeonatalName",$param) and $param["NeonatalName"] !== null) {
            $this->NeonatalName = $param["NeonatalName"];
        }

        if (array_key_exists("NeonatalGender",$param) and $param["NeonatalGender"] !== null) {
            $this->NeonatalGender = $param["NeonatalGender"];
        }

        if (array_key_exists("BirthLength",$param) and $param["BirthLength"] !== null) {
            $this->BirthLength = $param["BirthLength"];
        }

        if (array_key_exists("BirthWeight",$param) and $param["BirthWeight"] !== null) {
            $this->BirthWeight = $param["BirthWeight"];
        }

        if (array_key_exists("GestationalAge",$param) and $param["GestationalAge"] !== null) {
            $this->GestationalAge = $param["GestationalAge"];
        }

        if (array_key_exists("BirthTime",$param) and $param["BirthTime"] !== null) {
            $this->BirthTime = $param["BirthTime"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("MedicalInstitutions",$param) and $param["MedicalInstitutions"] !== null) {
            $this->MedicalInstitutions = $param["MedicalInstitutions"];
        }
    }
}
