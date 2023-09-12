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
 * 体检报告-外科-脊柱
 *
 * @method KeyValueItem getText() 获取脊柱四肢总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(KeyValueItem $Text) 设置脊柱四肢总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getSpinalColumn() 获取脊柱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpinalColumn(KeyValueItem $SpinalColumn) 设置脊柱
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getLimbJoint() 获取四肢和关节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimbJoint(KeyValueItem $LimbJoint) 设置四肢和关节
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getFoot() 获取平跛足
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFoot(KeyValueItem $Foot) 设置平跛足
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getBone() 获取骨骼
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBone(KeyValueItem $Bone) 设置骨骼
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getGait() 获取步态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGait(KeyValueItem $Gait) 设置步态
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getDeformity() 获取残疾或畸形
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeformity(KeyValueItem $Deformity) 设置残疾或畸形
注意：此字段可能返回 null，表示取不到有效值。
 */
class SurgerySpinalExtremities extends AbstractModel
{
    /**
     * @var KeyValueItem 脊柱四肢总体描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var KeyValueItem 脊柱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpinalColumn;

    /**
     * @var KeyValueItem 四肢和关节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimbJoint;

    /**
     * @var KeyValueItem 平跛足
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Foot;

    /**
     * @var KeyValueItem 骨骼
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bone;

    /**
     * @var KeyValueItem 步态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gait;

    /**
     * @var KeyValueItem 残疾或畸形
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deformity;

    /**
     * @param KeyValueItem $Text 脊柱四肢总体描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $SpinalColumn 脊柱
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $LimbJoint 四肢和关节
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Foot 平跛足
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Bone 骨骼
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Gait 步态
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Deformity 残疾或畸形
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

        if (array_key_exists("SpinalColumn",$param) and $param["SpinalColumn"] !== null) {
            $this->SpinalColumn = new KeyValueItem();
            $this->SpinalColumn->deserialize($param["SpinalColumn"]);
        }

        if (array_key_exists("LimbJoint",$param) and $param["LimbJoint"] !== null) {
            $this->LimbJoint = new KeyValueItem();
            $this->LimbJoint->deserialize($param["LimbJoint"]);
        }

        if (array_key_exists("Foot",$param) and $param["Foot"] !== null) {
            $this->Foot = new KeyValueItem();
            $this->Foot->deserialize($param["Foot"]);
        }

        if (array_key_exists("Bone",$param) and $param["Bone"] !== null) {
            $this->Bone = new KeyValueItem();
            $this->Bone->deserialize($param["Bone"]);
        }

        if (array_key_exists("Gait",$param) and $param["Gait"] !== null) {
            $this->Gait = new KeyValueItem();
            $this->Gait->deserialize($param["Gait"]);
        }

        if (array_key_exists("Deformity",$param) and $param["Deformity"] !== null) {
            $this->Deformity = new KeyValueItem();
            $this->Deformity->deserialize($param["Deformity"]);
        }
    }
}
