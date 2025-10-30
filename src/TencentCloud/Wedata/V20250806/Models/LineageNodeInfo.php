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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LineageNodeInfo  血缘关系实体
 *
 * @method LineageResource getResource() 获取当前资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(LineageResource $Resource) 设置当前资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method LineageRelation getRelation() 获取关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelation(LineageRelation $Relation) 设置关系
注意：此字段可能返回 null，表示取不到有效值。
 */
class LineageNodeInfo extends AbstractModel
{
    /**
     * @var LineageResource 当前资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var LineageRelation 关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Relation;

    /**
     * @param LineageResource $Resource 当前资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param LineageRelation $Relation 关系
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new LineageResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = new LineageRelation();
            $this->Relation->deserialize($param["Relation"]);
        }
    }
}
