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
 * @method BirthPlaceBlock getBirthPlace() 获取出生地
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthPlace(BirthPlaceBlock $BirthPlace) 设置出生地
注意：此字段可能返回 null，表示取不到有效值。
 * @method BirthPlaceBlock getLivePlace() 获取居住地
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivePlace(BirthPlaceBlock $LivePlace) 设置居住地
注意：此字段可能返回 null，表示取不到有效值。
 * @method BirthPlaceBlock getJob() 获取职业
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJob(BirthPlaceBlock $Job) 设置职业
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmokeHistoryBlock getSmokeHistory() 获取吸烟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmokeHistory(SmokeHistoryBlock $SmokeHistory) 设置吸烟
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmokeHistoryBlock getAlcoholicHistory() 获取喝酒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlcoholicHistory(SmokeHistoryBlock $AlcoholicHistory) 设置喝酒
注意：此字段可能返回 null，表示取不到有效值。
 * @method MenstrualHistoryBlock getMenstrualHistory() 获取月经史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstrualHistory(MenstrualHistoryBlock $MenstrualHistory) 设置月经史
注意：此字段可能返回 null，表示取不到有效值。
 * @method ObstetricalHistoryBlock getObstericalHistory() 获取婚姻-生育史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObstericalHistory(ObstetricalHistoryBlock $ObstericalHistory) 设置婚姻-生育史
注意：此字段可能返回 null，表示取不到有效值。
 * @method FamilyHistoryBlock getFamilyHistory() 获取家族史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFamilyHistory(FamilyHistoryBlock $FamilyHistory) 设置家族史
注意：此字段可能返回 null，表示取不到有效值。
 */
class PersonalHistoryBlock extends AbstractModel
{
    /**
     * @var BirthPlaceBlock 出生地
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthPlace;

    /**
     * @var BirthPlaceBlock 居住地
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivePlace;

    /**
     * @var BirthPlaceBlock 职业
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Job;

    /**
     * @var SmokeHistoryBlock 吸烟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmokeHistory;

    /**
     * @var SmokeHistoryBlock 喝酒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlcoholicHistory;

    /**
     * @var MenstrualHistoryBlock 月经史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstrualHistory;

    /**
     * @var ObstetricalHistoryBlock 婚姻-生育史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObstericalHistory;

    /**
     * @var FamilyHistoryBlock 家族史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FamilyHistory;

    /**
     * @param BirthPlaceBlock $BirthPlace 出生地
注意：此字段可能返回 null，表示取不到有效值。
     * @param BirthPlaceBlock $LivePlace 居住地
注意：此字段可能返回 null，表示取不到有效值。
     * @param BirthPlaceBlock $Job 职业
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmokeHistoryBlock $SmokeHistory 吸烟
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmokeHistoryBlock $AlcoholicHistory 喝酒
注意：此字段可能返回 null，表示取不到有效值。
     * @param MenstrualHistoryBlock $MenstrualHistory 月经史
注意：此字段可能返回 null，表示取不到有效值。
     * @param ObstetricalHistoryBlock $ObstericalHistory 婚姻-生育史
注意：此字段可能返回 null，表示取不到有效值。
     * @param FamilyHistoryBlock $FamilyHistory 家族史
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
            $this->BirthPlace = new BirthPlaceBlock();
            $this->BirthPlace->deserialize($param["BirthPlace"]);
        }

        if (array_key_exists("LivePlace",$param) and $param["LivePlace"] !== null) {
            $this->LivePlace = new BirthPlaceBlock();
            $this->LivePlace->deserialize($param["LivePlace"]);
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = new BirthPlaceBlock();
            $this->Job->deserialize($param["Job"]);
        }

        if (array_key_exists("SmokeHistory",$param) and $param["SmokeHistory"] !== null) {
            $this->SmokeHistory = new SmokeHistoryBlock();
            $this->SmokeHistory->deserialize($param["SmokeHistory"]);
        }

        if (array_key_exists("AlcoholicHistory",$param) and $param["AlcoholicHistory"] !== null) {
            $this->AlcoholicHistory = new SmokeHistoryBlock();
            $this->AlcoholicHistory->deserialize($param["AlcoholicHistory"]);
        }

        if (array_key_exists("MenstrualHistory",$param) and $param["MenstrualHistory"] !== null) {
            $this->MenstrualHistory = new MenstrualHistoryBlock();
            $this->MenstrualHistory->deserialize($param["MenstrualHistory"]);
        }

        if (array_key_exists("ObstericalHistory",$param) and $param["ObstericalHistory"] !== null) {
            $this->ObstericalHistory = new ObstetricalHistoryBlock();
            $this->ObstericalHistory->deserialize($param["ObstericalHistory"]);
        }

        if (array_key_exists("FamilyHistory",$param) and $param["FamilyHistory"] !== null) {
            $this->FamilyHistory = new FamilyHistoryBlock();
            $this->FamilyHistory->deserialize($param["FamilyHistory"]);
        }
    }
}
