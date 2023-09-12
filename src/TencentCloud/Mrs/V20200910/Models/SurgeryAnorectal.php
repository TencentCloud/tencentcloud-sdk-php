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
 * 体检报告-外科-肛门直肠
 *
 * @method KeyValueItem getText() 获取肛门直肠总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(KeyValueItem $Text) 设置肛门直肠总体描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getDigitalRectalExamination() 获取直肠指检
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDigitalRectalExamination(KeyValueItem $DigitalRectalExamination) 设置直肠指检
注意：此字段可能返回 null，表示取不到有效值。
 * @method KeyValueItem getHemorrhoid() 获取痔疮
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHemorrhoid(KeyValueItem $Hemorrhoid) 设置痔疮
注意：此字段可能返回 null，表示取不到有效值。
 */
class SurgeryAnorectal extends AbstractModel
{
    /**
     * @var KeyValueItem 肛门直肠总体描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var KeyValueItem 直肠指检
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DigitalRectalExamination;

    /**
     * @var KeyValueItem 痔疮
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hemorrhoid;

    /**
     * @param KeyValueItem $Text 肛门直肠总体描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $DigitalRectalExamination 直肠指检
注意：此字段可能返回 null，表示取不到有效值。
     * @param KeyValueItem $Hemorrhoid 痔疮
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

        if (array_key_exists("DigitalRectalExamination",$param) and $param["DigitalRectalExamination"] !== null) {
            $this->DigitalRectalExamination = new KeyValueItem();
            $this->DigitalRectalExamination->deserialize($param["DigitalRectalExamination"]);
        }

        if (array_key_exists("Hemorrhoid",$param) and $param["Hemorrhoid"] !== null) {
            $this->Hemorrhoid = new KeyValueItem();
            $this->Hemorrhoid->deserialize($param["Hemorrhoid"]);
        }
    }
}
