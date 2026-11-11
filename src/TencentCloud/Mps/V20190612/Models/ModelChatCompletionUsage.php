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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型调用的 token 用量统计。
 *
 * @method integer getPromptTokens() 获取<p>输入 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptTokens(integer $PromptTokens) 设置<p>输入 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompletionTokens() 获取<p>输出 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompletionTokens(integer $CompletionTokens) 设置<p>输出 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalTokens() 获取<p>总 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>总 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelChatCompletionUsage extends AbstractModel
{
    /**
     * @var integer <p>输入 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptTokens;

    /**
     * @var integer <p>输出 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompletionTokens;

    /**
     * @var integer <p>总 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTokens;

    /**
     * @param integer $PromptTokens <p>输入 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompletionTokens <p>输出 token 数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalTokens <p>总 token 数</p>
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
        if (array_key_exists("PromptTokens",$param) and $param["PromptTokens"] !== null) {
            $this->PromptTokens = $param["PromptTokens"];
        }

        if (array_key_exists("CompletionTokens",$param) and $param["CompletionTokens"] !== null) {
            $this->CompletionTokens = $param["CompletionTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
