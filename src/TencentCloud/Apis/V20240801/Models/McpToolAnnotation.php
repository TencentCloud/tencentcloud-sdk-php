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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mcp工具注解
 *
 * @method string getTitle() 获取title for the tool
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置title for the tool
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReadOnlyHint() 获取If true, the tool does not modify its environment
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadOnlyHint(boolean $ReadOnlyHint) 设置If true, the tool does not modify its environment
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDestructiveHint() 获取If true, the tool may perform destructive updates
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestructiveHint(boolean $DestructiveHint) 设置If true, the tool may perform destructive updates
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIdempotentHint() 获取If true, repeated calls with same args have no additional effect
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdempotentHint(boolean $IdempotentHint) 设置If true, repeated calls with same args have no additional effect
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOpenWorldHint() 获取If true, tool interacts with external entities
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenWorldHint(boolean $OpenWorldHint) 设置If true, tool interacts with external entities
注意：此字段可能返回 null，表示取不到有效值。
 */
class McpToolAnnotation extends AbstractModel
{
    /**
     * @var string title for the tool
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var boolean If true, the tool does not modify its environment
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadOnlyHint;

    /**
     * @var boolean If true, the tool may perform destructive updates
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestructiveHint;

    /**
     * @var boolean If true, repeated calls with same args have no additional effect
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdempotentHint;

    /**
     * @var boolean If true, tool interacts with external entities
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenWorldHint;

    /**
     * @param string $Title title for the tool
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ReadOnlyHint If true, the tool does not modify its environment
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DestructiveHint If true, the tool may perform destructive updates
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IdempotentHint If true, repeated calls with same args have no additional effect
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OpenWorldHint If true, tool interacts with external entities
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("ReadOnlyHint",$param) and $param["ReadOnlyHint"] !== null) {
            $this->ReadOnlyHint = $param["ReadOnlyHint"];
        }

        if (array_key_exists("DestructiveHint",$param) and $param["DestructiveHint"] !== null) {
            $this->DestructiveHint = $param["DestructiveHint"];
        }

        if (array_key_exists("IdempotentHint",$param) and $param["IdempotentHint"] !== null) {
            $this->IdempotentHint = $param["IdempotentHint"];
        }

        if (array_key_exists("OpenWorldHint",$param) and $param["OpenWorldHint"] !== null) {
            $this->OpenWorldHint = $param["OpenWorldHint"];
        }
    }
}
