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
 * 提取属性内容
 *
 * @method string getText() 获取原文文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置原文文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取标准化提取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置标准化提取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取对应上级文本位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置对应上级文本位置
注意：此字段可能返回 null，表示取不到有效值。
 */
class Attribute extends AbstractModel
{
    /**
     * @var string 原文文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 标准化提取值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer 对应上级文本位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @param string $Text 原文文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 标准化提取值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index 对应上级文本位置
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
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
