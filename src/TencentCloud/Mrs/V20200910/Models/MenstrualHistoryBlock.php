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
 * 月经史
 *
 * @method LastMenstrualPeriodBlock getLastMenstrualPeriod() 获取末次月经
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastMenstrualPeriod(LastMenstrualPeriodBlock $LastMenstrualPeriod) 设置末次月经
注意：此字段可能返回 null，表示取不到有效值。
 * @method MenstrualFlowBlock getMenstrualFlow() 获取月经量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstrualFlow(MenstrualFlowBlock $MenstrualFlow) 设置月经量
注意：此字段可能返回 null，表示取不到有效值。
 * @method LastMenstrualPeriodBlock getMenarcheAge() 获取初潮时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenarcheAge(LastMenstrualPeriodBlock $MenarcheAge) 设置初潮时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method MenstruationOrNotBlock getMenstruationOrNot() 获取是否绝经
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstruationOrNot(MenstruationOrNotBlock $MenstruationOrNot) 设置是否绝经
注意：此字段可能返回 null，表示取不到有效值。
 * @method LastMenstrualPeriodBlock getMenstrualCycles() 获取月经周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstrualCycles(LastMenstrualPeriodBlock $MenstrualCycles) 设置月经周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method MenstrualPeriodBlock getMenstrualPeriod() 获取月经经期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstrualPeriod(MenstrualPeriodBlock $MenstrualPeriod) 设置月经经期
注意：此字段可能返回 null，表示取不到有效值。
 */
class MenstrualHistoryBlock extends AbstractModel
{
    /**
     * @var LastMenstrualPeriodBlock 末次月经
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastMenstrualPeriod;

    /**
     * @var MenstrualFlowBlock 月经量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstrualFlow;

    /**
     * @var LastMenstrualPeriodBlock 初潮时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenarcheAge;

    /**
     * @var MenstruationOrNotBlock 是否绝经
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstruationOrNot;

    /**
     * @var LastMenstrualPeriodBlock 月经周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstrualCycles;

    /**
     * @var MenstrualPeriodBlock 月经经期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstrualPeriod;

    /**
     * @param LastMenstrualPeriodBlock $LastMenstrualPeriod 末次月经
注意：此字段可能返回 null，表示取不到有效值。
     * @param MenstrualFlowBlock $MenstrualFlow 月经量
注意：此字段可能返回 null，表示取不到有效值。
     * @param LastMenstrualPeriodBlock $MenarcheAge 初潮时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param MenstruationOrNotBlock $MenstruationOrNot 是否绝经
注意：此字段可能返回 null，表示取不到有效值。
     * @param LastMenstrualPeriodBlock $MenstrualCycles 月经周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param MenstrualPeriodBlock $MenstrualPeriod 月经经期
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
        if (array_key_exists("LastMenstrualPeriod",$param) and $param["LastMenstrualPeriod"] !== null) {
            $this->LastMenstrualPeriod = new LastMenstrualPeriodBlock();
            $this->LastMenstrualPeriod->deserialize($param["LastMenstrualPeriod"]);
        }

        if (array_key_exists("MenstrualFlow",$param) and $param["MenstrualFlow"] !== null) {
            $this->MenstrualFlow = new MenstrualFlowBlock();
            $this->MenstrualFlow->deserialize($param["MenstrualFlow"]);
        }

        if (array_key_exists("MenarcheAge",$param) and $param["MenarcheAge"] !== null) {
            $this->MenarcheAge = new LastMenstrualPeriodBlock();
            $this->MenarcheAge->deserialize($param["MenarcheAge"]);
        }

        if (array_key_exists("MenstruationOrNot",$param) and $param["MenstruationOrNot"] !== null) {
            $this->MenstruationOrNot = new MenstruationOrNotBlock();
            $this->MenstruationOrNot->deserialize($param["MenstruationOrNot"]);
        }

        if (array_key_exists("MenstrualCycles",$param) and $param["MenstrualCycles"] !== null) {
            $this->MenstrualCycles = new LastMenstrualPeriodBlock();
            $this->MenstrualCycles->deserialize($param["MenstrualCycles"]);
        }

        if (array_key_exists("MenstrualPeriod",$param) and $param["MenstrualPeriod"] !== null) {
            $this->MenstrualPeriod = new MenstrualPeriodBlock();
            $this->MenstrualPeriod->deserialize($param["MenstrualPeriod"]);
        }
    }
}
