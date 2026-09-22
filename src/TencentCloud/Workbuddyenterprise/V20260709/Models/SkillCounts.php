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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全局技能计数
 *
 * @method integer getBuiltin() 获取内置技能数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuiltin(integer $Builtin) 设置内置技能数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCustom() 获取自建技能数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustom(integer $Custom) 设置自建技能数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class SkillCounts extends AbstractModel
{
    /**
     * @var integer 内置技能数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Builtin;

    /**
     * @var integer 自建技能数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Custom;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @param integer $Builtin 内置技能数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Custom 自建技能数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 总数
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
        if (array_key_exists("Builtin",$param) and $param["Builtin"] !== null) {
            $this->Builtin = $param["Builtin"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = $param["Custom"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
