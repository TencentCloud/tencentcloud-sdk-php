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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 属性列表。
 *
 * @method string getLabel() 获取属性值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置属性值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getConfidence() 获取置信度，取值0-1之间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfidence(float $Confidence) 设置置信度，取值0-1之间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取属性名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置属性名称。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BodyAttributes extends AbstractModel
{
    /**
     * @var string 属性值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var float 置信度，取值0-1之间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Confidence;

    /**
     * @var string 属性名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param string $Label 属性值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Confidence 置信度，取值0-1之间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 属性名称。
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
