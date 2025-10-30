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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库模型设置
 *
 * @method string getEmbeddingModel() 获取向量模型，该字段只有共享知识库有，应用知识库没有
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmbeddingModel(string $EmbeddingModel) 设置向量模型，该字段只有共享知识库有，应用知识库没有
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQaExtractModel() 获取问答对生成模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQaExtractModel(string $QaExtractModel) 设置问答对生成模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaModel() 获取schema生成模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaModel(string $SchemaModel) 设置schema生成模型
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeModelConfig extends AbstractModel
{
    /**
     * @var string 向量模型，该字段只有共享知识库有，应用知识库没有
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmbeddingModel;

    /**
     * @var string 问答对生成模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QaExtractModel;

    /**
     * @var string schema生成模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaModel;

    /**
     * @param string $EmbeddingModel 向量模型，该字段只有共享知识库有，应用知识库没有
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QaExtractModel 问答对生成模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaModel schema生成模型
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
        if (array_key_exists("EmbeddingModel",$param) and $param["EmbeddingModel"] !== null) {
            $this->EmbeddingModel = $param["EmbeddingModel"];
        }

        if (array_key_exists("QaExtractModel",$param) and $param["QaExtractModel"] !== null) {
            $this->QaExtractModel = $param["QaExtractModel"];
        }

        if (array_key_exists("SchemaModel",$param) and $param["SchemaModel"] !== null) {
            $this->SchemaModel = $param["SchemaModel"];
        }
    }
}
