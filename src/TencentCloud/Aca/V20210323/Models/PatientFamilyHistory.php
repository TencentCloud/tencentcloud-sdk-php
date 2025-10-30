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
 * 患者家族病史
 *
 * @method string getFamilyDiseaseHistory() 获取家族病史 如家族病史不能分开，可传入此字段
 * @method void setFamilyDiseaseHistory(string $FamilyDiseaseHistory) 设置家族病史 如家族病史不能分开，可传入此字段
 * @method string getRelation() 获取关系
 * @method void setRelation(string $Relation) 设置关系
 * @method string getCurrentSituation() 获取当前情况
 * @method void setCurrentSituation(string $CurrentSituation) 设置当前情况
 */
class PatientFamilyHistory extends AbstractModel
{
    /**
     * @var string 家族病史 如家族病史不能分开，可传入此字段
     */
    public $FamilyDiseaseHistory;

    /**
     * @var string 关系
     */
    public $Relation;

    /**
     * @var string 当前情况
     */
    public $CurrentSituation;

    /**
     * @param string $FamilyDiseaseHistory 家族病史 如家族病史不能分开，可传入此字段
     * @param string $Relation 关系
     * @param string $CurrentSituation 当前情况
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
        if (array_key_exists("FamilyDiseaseHistory",$param) and $param["FamilyDiseaseHistory"] !== null) {
            $this->FamilyDiseaseHistory = $param["FamilyDiseaseHistory"];
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }

        if (array_key_exists("CurrentSituation",$param) and $param["CurrentSituation"] !== null) {
            $this->CurrentSituation = $param["CurrentSituation"];
        }
    }
}
