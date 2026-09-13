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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高级依赖配置
 *
 * @method string getOperator() 获取逻辑运算符号OR / AND
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置逻辑运算符号OR / AND
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConditions() 获取任务运行条件规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置任务运行条件规则列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdvancedDependencyConfig extends AbstractModel
{
    /**
     * @var string 逻辑运算符号OR / AND
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var array 任务运行条件规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @param string $Operator 逻辑运算符号OR / AND
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Conditions 任务运行条件规则列表
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new TaskRunConditionRule();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
