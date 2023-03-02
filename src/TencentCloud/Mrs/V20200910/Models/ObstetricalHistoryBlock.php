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
 * 婚姻-生育史
 *
 * @method MenstrualHistoryDetailBlock getMarriageHistory() 获取婚姻史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarriageHistory(MenstrualHistoryDetailBlock $MarriageHistory) 设置婚姻史
注意：此字段可能返回 null，表示取不到有效值。
 * @method FertilityHistoryBlock getFertilityHistory() 获取婚育史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFertilityHistory(FertilityHistoryBlock $FertilityHistory) 设置婚育史
注意：此字段可能返回 null，表示取不到有效值。
 */
class ObstetricalHistoryBlock extends AbstractModel
{
    /**
     * @var MenstrualHistoryDetailBlock 婚姻史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MarriageHistory;

    /**
     * @var FertilityHistoryBlock 婚育史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FertilityHistory;

    /**
     * @param MenstrualHistoryDetailBlock $MarriageHistory 婚姻史
注意：此字段可能返回 null，表示取不到有效值。
     * @param FertilityHistoryBlock $FertilityHistory 婚育史
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
        if (array_key_exists("MarriageHistory",$param) and $param["MarriageHistory"] !== null) {
            $this->MarriageHistory = new MenstrualHistoryDetailBlock();
            $this->MarriageHistory->deserialize($param["MarriageHistory"]);
        }

        if (array_key_exists("FertilityHistory",$param) and $param["FertilityHistory"] !== null) {
            $this->FertilityHistory = new FertilityHistoryBlock();
            $this->FertilityHistory->deserialize($param["FertilityHistory"]);
        }
    }
}
