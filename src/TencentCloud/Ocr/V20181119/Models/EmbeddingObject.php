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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本向量化结果
 *
 * @method integer getIndex() 获取输入文本在 Inputs 列表中的索引，从 0 开始。
 * @method void setIndex(integer $Index) 设置输入文本在 Inputs 列表中的索引，从 0 开始。
 * @method array getEmbedding() 获取向量化结果，维度由所选模型决定。
 * @method void setEmbedding(array $Embedding) 设置向量化结果，维度由所选模型决定。
 */
class EmbeddingObject extends AbstractModel
{
    /**
     * @var integer 输入文本在 Inputs 列表中的索引，从 0 开始。
     */
    public $Index;

    /**
     * @var array 向量化结果，维度由所选模型决定。
     */
    public $Embedding;

    /**
     * @param integer $Index 输入文本在 Inputs 列表中的索引，从 0 开始。
     * @param array $Embedding 向量化结果，维度由所选模型决定。
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

        if (array_key_exists("Embedding",$param) and $param["Embedding"] !== null) {
            $this->Embedding = $param["Embedding"];
        }
    }
}
