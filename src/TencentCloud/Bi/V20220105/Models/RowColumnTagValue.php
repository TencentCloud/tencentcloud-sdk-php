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
 * 行列权限标签出入参
 *
 * @method integer getId() 获取标签id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置标签id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取标签值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置标签值列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RowColumnTagValue extends AbstractModel
{
    /**
     * @var integer 标签id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 标签值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param integer $Id 标签id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 标签值列表
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
