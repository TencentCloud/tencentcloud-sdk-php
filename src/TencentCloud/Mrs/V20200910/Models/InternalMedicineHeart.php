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
 * 体检报告-内科-心脏
 *
 * @method KeyValueItem getText() 获取心脏总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(KeyValueItem $Text) 设置心脏总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getHeartRhythm() 获取心律
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeartRhythm(KeyValueItem $HeartRhythm) 设置心律
注意：此字段可能返回 null，表示取不到有效值。
 * @method ValueUnitItem getHeartRate() 获取心率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeartRate(ValueUnitItem $HeartRate) 设置心率
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getHeartAuscultation() 获取心脏听诊
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeartAuscultation(KeyValueItem $HeartAuscultation) 设置心脏听诊
注意：此字段可能返回 null，表示取不到有效值。
 */
class InternalMedicineHeart extends AbstractModel
{
    /**
     * @var KeyValueItem 心脏总体描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var KeyValueItem 心律
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeartRhythm;

    /**
     * @var ValueUnitItem 心率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeartRate;

    /**
     * @var KeyValueItem 心脏听诊
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeartAuscultation;

    /**
     * @param KeyValueItem $Text 心脏总体描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $HeartRhythm 心律
注意：此字段可能返回 null，表示取不到有效值。
     * @param ValueUnitItem $HeartRate 心率
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $HeartAuscultation 心脏听诊
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new KeyValueItem();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("HeartRhythm",$param) and $param["HeartRhythm"] !== null) {
            $this->HeartRhythm = new KeyValueItem();
            $this->HeartRhythm->deserialize($param["HeartRhythm"]);
        }

        if (array_key_exists("HeartRate",$param) and $param["HeartRate"] !== null) {
            $this->HeartRate = new ValueUnitItem();
            $this->HeartRate->deserialize($param["HeartRate"]);
        }

        if (array_key_exists("HeartAuscultation",$param) and $param["HeartAuscultation"] !== null) {
            $this->HeartAuscultation = new KeyValueItem();
            $this->HeartAuscultation->deserialize($param["HeartAuscultation"]);
        }
    }
}
