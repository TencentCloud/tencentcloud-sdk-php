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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用选项
 *
 * @method string getLabelName() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelName(string $LabelName) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelValue() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValue(string $LabelValue) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 */
class CommonOption extends AbstractModel
{
    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelName;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValue;

    /**
     * @param string $LabelName -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelValue -
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
        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }
    }
}
