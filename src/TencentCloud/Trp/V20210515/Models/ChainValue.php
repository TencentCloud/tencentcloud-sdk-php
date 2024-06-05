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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上链数据 key-value
 *
 * @method string getLabel() 获取标题名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置标题名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型，文字："text"，图片："image"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型，文字："text"，图片："image"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取值，文字类型："abc"，图片类型：""/images/img.png"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置值，文字类型："abc"，图片类型：""/images/img.png"
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChainValue extends AbstractModel
{
    /**
     * @var string 标题名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string 类型，文字："text"，图片："image"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 值，文字类型："abc"，图片类型：""/images/img.png"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Label 标题名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型，文字："text"，图片："image"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 值，文字类型："abc"，图片类型：""/images/img.png"
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
