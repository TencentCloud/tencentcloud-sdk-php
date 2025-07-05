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
 * 向量内容
 *
 * @method array getEmbedding() 获取embedding 内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmbedding(array $Embedding) 设置embedding 内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取索引序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置索引序号
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmbeddingData extends AbstractModel
{
    /**
     * @var array embedding 内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Embedding;

    /**
     * @var integer 索引序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @param array $Embedding embedding 内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index 索引序号
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
        if (array_key_exists("Embedding",$param) and $param["Embedding"] !== null) {
            $this->Embedding = $param["Embedding"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
