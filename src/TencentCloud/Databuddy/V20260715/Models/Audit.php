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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计信息
 *
 * @method string getCreator() 获取创建者。注意：此字段可能返回null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建者。注意：此字段可能返回null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifier() 获取最后修改者。注意：此字段可能返回null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifier(string $LastModifier) 设置最后修改者。注意：此字段可能返回null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifiedAt() 获取最后修改时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedAt(string $LastModifiedAt) 设置最后修改时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorName() 获取创建者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorName(string $CreatorName) 设置创建者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifierName() 获取最后修改者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifierName(string $LastModifierName) 设置最后修改者名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class Audit extends AbstractModel
{
    /**
     * @var string 创建者。注意：此字段可能返回null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 创建时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 最后修改者。注意：此字段可能返回null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifier;

    /**
     * @var string 最后修改时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedAt;

    /**
     * @var string 创建者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorName;

    /**
     * @var string 最后修改者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifierName;

    /**
     * @param string $Creator 创建者。注意：此字段可能返回null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifier 最后修改者。注意：此字段可能返回null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifiedAt 最后修改时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorName 创建者名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifierName 最后修改者名称
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
        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("LastModifier",$param) and $param["LastModifier"] !== null) {
            $this->LastModifier = $param["LastModifier"];
        }

        if (array_key_exists("LastModifiedAt",$param) and $param["LastModifiedAt"] !== null) {
            $this->LastModifiedAt = $param["LastModifiedAt"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("LastModifierName",$param) and $param["LastModifierName"] !== null) {
            $this->LastModifierName = $param["LastModifierName"];
        }
    }
}
