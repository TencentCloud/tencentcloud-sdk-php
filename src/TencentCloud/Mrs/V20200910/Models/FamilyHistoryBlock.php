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
 * 家族史
 *
 * @method RelativeHistoryBlock getRelativeHistory() 获取家庭成员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelativeHistory(RelativeHistoryBlock $RelativeHistory) 设置家庭成员
注意：此字段可能返回 null，表示取不到有效值。
 * @method RelativeCancerHistoryBlock getRelativeCancerHistory() 获取家族肿瘤史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelativeCancerHistory(RelativeCancerHistoryBlock $RelativeCancerHistory) 设置家族肿瘤史
注意：此字段可能返回 null，表示取不到有效值。
 * @method GeneticHistoryBlock getGeneticHistory() 获取家族遗传史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGeneticHistory(GeneticHistoryBlock $GeneticHistory) 设置家族遗传史
注意：此字段可能返回 null，表示取不到有效值。
 */
class FamilyHistoryBlock extends AbstractModel
{
    /**
     * @var RelativeHistoryBlock 家庭成员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelativeHistory;

    /**
     * @var RelativeCancerHistoryBlock 家族肿瘤史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelativeCancerHistory;

    /**
     * @var GeneticHistoryBlock 家族遗传史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GeneticHistory;

    /**
     * @param RelativeHistoryBlock $RelativeHistory 家庭成员
注意：此字段可能返回 null，表示取不到有效值。
     * @param RelativeCancerHistoryBlock $RelativeCancerHistory 家族肿瘤史
注意：此字段可能返回 null，表示取不到有效值。
     * @param GeneticHistoryBlock $GeneticHistory 家族遗传史
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
        if (array_key_exists("RelativeHistory",$param) and $param["RelativeHistory"] !== null) {
            $this->RelativeHistory = new RelativeHistoryBlock();
            $this->RelativeHistory->deserialize($param["RelativeHistory"]);
        }

        if (array_key_exists("RelativeCancerHistory",$param) and $param["RelativeCancerHistory"] !== null) {
            $this->RelativeCancerHistory = new RelativeCancerHistoryBlock();
            $this->RelativeCancerHistory->deserialize($param["RelativeCancerHistory"]);
        }

        if (array_key_exists("GeneticHistory",$param) and $param["GeneticHistory"] !== null) {
            $this->GeneticHistory = new GeneticHistoryBlock();
            $this->GeneticHistory->deserialize($param["GeneticHistory"]);
        }
    }
}
