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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 链路详情扫描目标和ID
 *
 * @method integer getId() 获取详情ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置详情ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取目标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置目标
注意：此字段可能返回 null，表示取不到有效值。
 */
class IdndValue extends AbstractModel
{
    /**
     * @var integer 详情ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 目标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param integer $Id 详情ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 目标
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
