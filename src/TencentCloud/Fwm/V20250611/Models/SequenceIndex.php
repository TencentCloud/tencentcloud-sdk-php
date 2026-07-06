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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则序号调整结构
 *
 * @method integer getOrderIndex() 获取原规则序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderIndex(integer $OrderIndex) 设置原规则序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNewOrderIndex() 获取新规则序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewOrderIndex(integer $NewOrderIndex) 设置新规则序号
注意：此字段可能返回 null，表示取不到有效值。
 */
class SequenceIndex extends AbstractModel
{
    /**
     * @var integer 原规则序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderIndex;

    /**
     * @var integer 新规则序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewOrderIndex;

    /**
     * @param integer $OrderIndex 原规则序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NewOrderIndex 新规则序号
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
        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("NewOrderIndex",$param) and $param["NewOrderIndex"] !== null) {
            $this->NewOrderIndex = $param["NewOrderIndex"];
        }
    }
}
