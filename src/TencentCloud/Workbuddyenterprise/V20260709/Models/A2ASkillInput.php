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
 * A2A skill 录入项（注册外部 Agent 时传入）
 *
 * @method string getA2ASkillId() 获取<p>A2A skill ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2ASkillId(string $A2ASkillId) 设置<p>A2A skill ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>skill 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>skill 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>skill 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>skill 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExamples() 获取<p>示例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExamples(array $Examples) 设置<p>示例</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class A2ASkillInput extends AbstractModel
{
    /**
     * @var string <p>A2A skill ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2ASkillId;

    /**
     * @var string <p>skill 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>skill 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array <p>示例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Examples;

    /**
     * @param string $A2ASkillId <p>A2A skill ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>skill 名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>skill 描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Examples <p>示例</p>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Examples",$param) and $param["Examples"] !== null) {
            $this->Examples = $param["Examples"];
        }
    }
}
