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
 * 共享知识库基础信息
 *
 * @method string getKnowledgeBizId() 获取共享知识库业务ID
 * @method void setKnowledgeBizId(string $KnowledgeBizId) 设置共享知识库业务ID
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
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKnowledgeType() 获取共享知识库类型，0普通，1公众号
 * @method void setKnowledgeType(integer $KnowledgeType) 设置共享知识库类型，0普通，1公众号
 * @method string getOwnerStaffId() 获取拥有者id
 * @method void setOwnerStaffId(string $OwnerStaffId) 设置拥有者id
 * @method integer getDocTotal() 获取知识库文档数量,当前仅支持公众号知识库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocTotal(integer $DocTotal) 设置知识库文档数量,当前仅支持公众号知识库
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcessingFlags() 获取知识库处理中状态标记，1：向量embedding变更中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessingFlags(array $ProcessingFlags) 设置知识库处理中状态标记，1：向量embedding变更中
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeBaseInfo extends AbstractModel
{
    /**
     * @var string 共享知识库业务ID
     */
    public $KnowledgeBizId;

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
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 共享知识库类型，0普通，1公众号
     */
    public $KnowledgeType;

    /**
     * @var string 拥有者id
     */
    public $OwnerStaffId;

    /**
     * @var integer 知识库文档数量,当前仅支持公众号知识库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocTotal;

    /**
     * @var array 知识库处理中状态标记，1：向量embedding变更中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessingFlags;

    /**
     * @param string $KnowledgeBizId 共享知识库业务ID
     * @param string $KnowledgeName 共享知识库名称
     * @param string $KnowledgeDescription 共享知识库描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EmbeddingModel Embedding模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QaExtractModel 问答提取模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KnowledgeType 共享知识库类型，0普通，1公众号
     * @param string $OwnerStaffId 拥有者id
     * @param integer $DocTotal 知识库文档数量,当前仅支持公众号知识库
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProcessingFlags 知识库处理中状态标记，1：向量embedding变更中
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
        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("KnowledgeType",$param) and $param["KnowledgeType"] !== null) {
            $this->KnowledgeType = $param["KnowledgeType"];
        }

        if (array_key_exists("OwnerStaffId",$param) and $param["OwnerStaffId"] !== null) {
            $this->OwnerStaffId = $param["OwnerStaffId"];
        }

        if (array_key_exists("DocTotal",$param) and $param["DocTotal"] !== null) {
            $this->DocTotal = $param["DocTotal"];
        }

        if (array_key_exists("ProcessingFlags",$param) and $param["ProcessingFlags"] !== null) {
            $this->ProcessingFlags = $param["ProcessingFlags"];
        }
    }
}
