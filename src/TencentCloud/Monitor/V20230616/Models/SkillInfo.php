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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 技能实体
 *
 * @method string getSkillId() 获取<p>技能 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillId(string $SkillId) 设置<p>技能 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>技能名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>技能名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>技能描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>技能描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取<p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SkillInfo extends AbstractModel
{
    /**
     * @var string <p>技能 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillId;

    /**
     * @var string <p>技能名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>技能描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var boolean <p>是否启用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @param string $SkillId <p>技能 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>技能名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>技能描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled <p>是否启用</p>
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
        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
