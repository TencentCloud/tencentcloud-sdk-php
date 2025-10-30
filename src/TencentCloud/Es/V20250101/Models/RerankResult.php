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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出结果
 *
 * @method integer getIndex() 获取对应的doc在输入候选doc数组中的位置索引值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置对应的doc在输入候选doc数组中的位置索引值
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRelevanceScore() 获取相似度分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelevanceScore(float $RelevanceScore) 设置相似度分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocument() 获取doc原文内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocument(string $Document) 设置doc原文内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class RerankResult extends AbstractModel
{
    /**
     * @var integer 对应的doc在输入候选doc数组中的位置索引值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var float 相似度分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelevanceScore;

    /**
     * @var string doc原文内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Document;

    /**
     * @param integer $Index 对应的doc在输入候选doc数组中的位置索引值
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RelevanceScore 相似度分数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Document doc原文内容
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("RelevanceScore",$param) and $param["RelevanceScore"] !== null) {
            $this->RelevanceScore = $param["RelevanceScore"];
        }

        if (array_key_exists("Document",$param) and $param["Document"] !== null) {
            $this->Document = $param["Document"];
        }
    }
}
