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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略过滤条件
 *
 * @method string getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpression() 获取表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpression(string $Expression) 设置表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimensions() 获取过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensions(string $Dimensions) 设置过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmConditionFilter extends AbstractModel
{
    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expression;

    /**
     * @var string 过滤条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dimensions;

    /**
     * @param string $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Expression 表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Dimensions 过滤条件
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

        if (array_key_exists("Expression",$param) and $param["Expression"] !== null) {
            $this->Expression = $param["Expression"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }
    }
}
