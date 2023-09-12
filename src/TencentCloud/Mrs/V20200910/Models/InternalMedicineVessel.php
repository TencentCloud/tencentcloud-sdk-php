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
 * 体检报告-内科-血管
 *
 * @method KeyValueItem getText() 获取血管总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(KeyValueItem $Text) 设置血管总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getVascularMurmur() 获取血管杂音
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVascularMurmur(KeyValueItem $VascularMurmur) 设置血管杂音
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getPeripheralVessel() 获取外周血管
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeripheralVessel(KeyValueItem $PeripheralVessel) 设置外周血管
注意：此字段可能返回 null，表示取不到有效值。
 */
class InternalMedicineVessel extends AbstractModel
{
    /**
     * @var KeyValueItem 血管总体描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var KeyValueItem 血管杂音
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VascularMurmur;

    /**
     * @var KeyValueItem 外周血管
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeripheralVessel;

    /**
     * @param KeyValueItem $Text 血管总体描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $VascularMurmur 血管杂音
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $PeripheralVessel 外周血管
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

        if (array_key_exists("VascularMurmur",$param) and $param["VascularMurmur"] !== null) {
            $this->VascularMurmur = new KeyValueItem();
            $this->VascularMurmur->deserialize($param["VascularMurmur"]);
        }

        if (array_key_exists("PeripheralVessel",$param) and $param["PeripheralVessel"] !== null) {
            $this->PeripheralVessel = new KeyValueItem();
            $this->PeripheralVessel->deserialize($param["PeripheralVessel"]);
        }
    }
}
