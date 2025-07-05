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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混元生图多轮对话历史记录。
 *
 * @method string getChatId() 获取对话的 ID，用于唯一标识一轮对话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChatId(string $ChatId) 设置对话的 ID，用于唯一标识一轮对话
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrompt() 获取原始输入的 Prompt 文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrompt(string $Prompt) 设置原始输入的 Prompt 文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRevisedPrompt() 获取扩写后的 Prompt 文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRevisedPrompt(string $RevisedPrompt) 设置扩写后的 Prompt 文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSeed() 获取生成图的随机种子
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeed(integer $Seed) 设置生成图的随机种子
注意：此字段可能返回 null，表示取不到有效值。
 */
class History extends AbstractModel
{
    /**
     * @var string 对话的 ID，用于唯一标识一轮对话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChatId;

    /**
     * @var string 原始输入的 Prompt 文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Prompt;

    /**
     * @var string 扩写后的 Prompt 文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RevisedPrompt;

    /**
     * @var integer 生成图的随机种子
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seed;

    /**
     * @param string $ChatId 对话的 ID，用于唯一标识一轮对话
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Prompt 原始输入的 Prompt 文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RevisedPrompt 扩写后的 Prompt 文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Seed 生成图的随机种子
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
        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("RevisedPrompt",$param) and $param["RevisedPrompt"] !== null) {
            $this->RevisedPrompt = $param["RevisedPrompt"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }
    }
}
