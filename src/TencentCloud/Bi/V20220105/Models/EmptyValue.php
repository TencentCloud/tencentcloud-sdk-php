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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空值展示样式配置值结构
 *
 * @method string getType() 获取空值展示样式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置空值展示样式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustom() 获取空值展示样式类型对应具体的展示字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustom(string $Custom) 设置空值展示样式类型对应具体的展示字符串
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmptyValue extends AbstractModel
{
    /**
     * @var string 空值展示样式类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 空值展示样式类型对应具体的展示字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Custom;

    /**
     * @param string $Type 空值展示样式类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Custom 空值展示样式类型对应具体的展示字符串
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = $param["Custom"];
        }
    }
}
