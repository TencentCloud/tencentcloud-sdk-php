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
 * 资源
 *
 * @method string getResourceName() 获取资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getResourceValue() 获取资源值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceValue(boolean $ResourceValue) 设置资源值
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanChange() 获取是否可变更
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanChange(boolean $CanChange) 设置是否可变更
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTips() 获取提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTips(string $Tips) 设置提示信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceItem extends AbstractModel
{
    /**
     * @var string 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var boolean 资源值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceValue;

    /**
     * @var boolean 是否可变更
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanChange;

    /**
     * @var string 提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tips;

    /**
     * @param string $ResourceName 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ResourceValue 资源值
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanChange 是否可变更
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tips 提示信息
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
        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceValue",$param) and $param["ResourceValue"] !== null) {
            $this->ResourceValue = $param["ResourceValue"];
        }

        if (array_key_exists("CanChange",$param) and $param["CanChange"] !== null) {
            $this->CanChange = $param["CanChange"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }
    }
}
