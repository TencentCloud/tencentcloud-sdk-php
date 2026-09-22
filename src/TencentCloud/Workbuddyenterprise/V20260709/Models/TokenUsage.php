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
 * Token用量
 *
 * @method integer getInputTokens() 获取<p>输入Token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputTokens(integer $InputTokens) 设置<p>输入Token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputTokens() 获取<p>输出Token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputTokens(integer $OutputTokens) 设置<p>输出Token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalTokens() 获取<p>总Token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>总Token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScope() 获取<p>统计口径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScope(string $Scope) 设置<p>统计口径</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TokenUsage extends AbstractModel
{
    /**
     * @var integer <p>输入Token</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputTokens;

    /**
     * @var integer <p>输出Token</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputTokens;

    /**
     * @var integer <p>总Token</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTokens;

    /**
     * @var string <p>统计口径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scope;

    /**
     * @param integer $InputTokens <p>输入Token</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputTokens <p>输出Token</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalTokens <p>总Token</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scope <p>统计口径</p>
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
        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }
    }
}
