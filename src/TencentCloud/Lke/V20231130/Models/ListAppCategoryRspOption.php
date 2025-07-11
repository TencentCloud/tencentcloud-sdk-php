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
 * 应用类型详情
 *
 * @method string getText() 获取类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取类型值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置类型值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogo() 获取类型log
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogo(string $Logo) 设置类型log
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListAppCategoryRspOption extends AbstractModel
{
    /**
     * @var string 类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 类型值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 类型log
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logo;

    /**
     * @param string $Text 类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 类型值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Logo 类型log
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

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }
    }
}
