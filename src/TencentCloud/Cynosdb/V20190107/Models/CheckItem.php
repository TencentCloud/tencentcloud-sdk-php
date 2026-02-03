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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 校验项
 *
 * @method string getItem() 获取校验项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItem(string $Item) 设置校验项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取该项的校验结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置该项的校验结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrentValue() 获取校验不通过的详细说明和修改建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentValue(string $CurrentValue) 设置校验不通过的详细说明和修改建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpectedValue() 获取校验不通过的详细说明和修改建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpectedValue(string $ExpectedValue) 设置校验不通过的详细说明和修改建议
注意：此字段可能返回 null，表示取不到有效值。
 */
class CheckItem extends AbstractModel
{
    /**
     * @var string 校验项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Item;

    /**
     * @var string 该项的校验结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 校验不通过的详细说明和修改建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentValue;

    /**
     * @var string 校验不通过的详细说明和修改建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpectedValue;

    /**
     * @param string $Item 校验项名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 该项的校验结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrentValue 校验不通过的详细说明和修改建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpectedValue 校验不通过的详细说明和修改建议
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("ExpectedValue",$param) and $param["ExpectedValue"] !== null) {
            $this->ExpectedValue = $param["ExpectedValue"];
        }
    }
}
