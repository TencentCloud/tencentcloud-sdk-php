<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 下拉框选项
 *
 * @method string getText() 获取文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCharSize() 获取文件字符数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCharSize(string $CharSize) 设置文件字符数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置文件类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class Option extends AbstractModel
{
    /**
     * @var string 文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 文件字符数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CharSize;

    /**
     * @var string 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @param string $Text 文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CharSize 文件字符数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType 文件类型
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

        if (array_key_exists("CharSize",$param) and $param["CharSize"] !== null) {
            $this->CharSize = $param["CharSize"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
