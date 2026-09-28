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
 * git检出规则
 *
 * @method boolean getEnabled() 获取<p>是否启用稀疏检出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用稀疏检出</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getConeMode() 获取<p>是否使用 cone 模式（推荐 true，按目录匹配更高效）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConeMode(boolean $ConeMode) 设置<p>是否使用 cone 模式（推荐 true，按目录匹配更高效）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPatterns() 获取<p>稀疏检出路径列表（如 [&quot;src/module-a/&quot;, &quot;docs/&quot;]）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPatterns(array $Patterns) 设置<p>稀疏检出路径列表（如 [&quot;src/module-a/&quot;, &quot;docs/&quot;]）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SparseCheckoutConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否启用稀疏检出</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var boolean <p>是否使用 cone 模式（推荐 true，按目录匹配更高效）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConeMode;

    /**
     * @var array <p>稀疏检出路径列表（如 [&quot;src/module-a/&quot;, &quot;docs/&quot;]）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Patterns;

    /**
     * @param boolean $Enabled <p>是否启用稀疏检出</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ConeMode <p>是否使用 cone 模式（推荐 true，按目录匹配更高效）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Patterns <p>稀疏检出路径列表（如 [&quot;src/module-a/&quot;, &quot;docs/&quot;]）</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ConeMode",$param) and $param["ConeMode"] !== null) {
            $this->ConeMode = $param["ConeMode"];
        }

        if (array_key_exists("Patterns",$param) and $param["Patterns"] !== null) {
            $this->Patterns = $param["Patterns"];
        }
    }
}
