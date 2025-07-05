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
 * 共享知识库更新信息
 *
 * @method string getKnowledgeName() 获取共享知识库名称
 * @method void setKnowledgeName(string $KnowledgeName) 设置共享知识库名称
 * @method string getKnowledgeDescription() 获取共享知识库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeDescription(string $KnowledgeDescription) 设置共享知识库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmbeddingModel() 获取Embedding模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmbeddingModel(string $EmbeddingModel) 设置Embedding模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQaExtractModel() 获取问答提取模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQaExtractModel(string $QaExtractModel) 设置问答提取模型
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeUpdateInfo extends AbstractModel
{
    /**
     * @var string 共享知识库名称
     */
    public $KnowledgeName;

    /**
     * @var string 共享知识库描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeDescription;

    /**
     * @var string Embedding模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmbeddingModel;

    /**
     * @var string 问答提取模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QaExtractModel;

    /**
     * @param string $KnowledgeName 共享知识库名称
     * @param string $KnowledgeDescription 共享知识库描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EmbeddingModel Embedding模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QaExtractModel 问答提取模型
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
        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }

        if (array_key_exists("KnowledgeDescription",$param) and $param["KnowledgeDescription"] !== null) {
            $this->KnowledgeDescription = $param["KnowledgeDescription"];
        }

        if (array_key_exists("EmbeddingModel",$param) and $param["EmbeddingModel"] !== null) {
            $this->EmbeddingModel = $param["EmbeddingModel"];
        }

        if (array_key_exists("QaExtractModel",$param) and $param["QaExtractModel"] !== null) {
            $this->QaExtractModel = $param["QaExtractModel"];
        }
    }
}
