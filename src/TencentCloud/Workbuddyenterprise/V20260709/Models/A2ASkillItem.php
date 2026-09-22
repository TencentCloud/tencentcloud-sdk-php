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
 * A2A skill 列表项（出参用，来自 A2A card 解析结果）
 *
 * @method string getA2ASkillId() 获取A2A skill ID（加 A2A 前缀与内部 SkillId 概念区分）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2ASkillId(string $A2ASkillId) 设置A2A skill ID（加 A2A 前缀与内部 SkillId 概念区分）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取skill 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置skill 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取skill 描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置skill 描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class A2ASkillItem extends AbstractModel
{
    /**
     * @var string A2A skill ID（加 A2A 前缀与内部 SkillId 概念区分）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2ASkillId;

    /**
     * @var string skill 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string skill 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $A2ASkillId A2A skill ID（加 A2A 前缀与内部 SkillId 概念区分）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name skill 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description skill 描述
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
        if (array_key_exists("A2ASkillId",$param) and $param["A2ASkillId"] !== null) {
            $this->A2ASkillId = $param["A2ASkillId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
