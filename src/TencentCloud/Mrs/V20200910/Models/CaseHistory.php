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
 * 病历资料
 *
 * @method Treatment getTreatment() 获取诊治信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTreatment(Treatment $Treatment) 设置诊治信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthHistory getHealthHistory() 获取健康史信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthHistory(HealthHistory $HealthHistory) 设置健康史信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCaseHistoryList() 获取病例时间轴
 * @method void setCaseHistoryList(array $CaseHistoryList) 设置病例时间轴
 */
class CaseHistory extends AbstractModel
{
    /**
     * @var Treatment 诊治信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Treatment;

    /**
     * @var HealthHistory 健康史信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthHistory;

    /**
     * @var array 病例时间轴
     */
    public $CaseHistoryList;

    /**
     * @param Treatment $Treatment 诊治信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthHistory $HealthHistory 健康史信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CaseHistoryList 病例时间轴
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
        if (array_key_exists("Treatment",$param) and $param["Treatment"] !== null) {
            $this->Treatment = new Treatment();
            $this->Treatment->deserialize($param["Treatment"]);
        }

        if (array_key_exists("HealthHistory",$param) and $param["HealthHistory"] !== null) {
            $this->HealthHistory = new HealthHistory();
            $this->HealthHistory->deserialize($param["HealthHistory"]);
        }

        if (array_key_exists("CaseHistoryList",$param) and $param["CaseHistoryList"] !== null) {
            $this->CaseHistoryList = [];
            foreach ($param["CaseHistoryList"] as $key => $value){
                $obj = new Case();
                $obj->deserialize($value);
                array_push($this->CaseHistoryList, $obj);
            }
        }
    }
}
