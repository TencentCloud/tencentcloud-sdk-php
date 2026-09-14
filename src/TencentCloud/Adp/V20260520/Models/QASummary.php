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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QA 摘要信息
 *
 * @method CategoryPath getCategoryPath() 获取<p>所属分类路径（包含分类 ID、从根节点开始的分类 ID 路径和分类名称路径）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryPath(CategoryPath $CategoryPath) 设置<p>所属分类路径（包含分类 ID、从根节点开始的分类 ID 路径和分类名称路径）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeScope getKnowledgeScope() 获取<p>知识生效范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeScope(KnowledgeScope $KnowledgeScope) 设置<p>知识生效范围</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QALifecycle getLifecycle() 获取<p>生命周期信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycle(QALifecycle $Lifecycle) 设置<p>生命周期信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QAMetadata getMetadata() 获取<p>元信息（问题/答案/大小统计）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(QAMetadata $Metadata) 设置<p>元信息（问题/答案/大小统计）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QAOperator getOperatorInfo() 获取<p>操作者信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorInfo(QAOperator $OperatorInfo) 设置<p>操作者信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQaId() 获取<p>QA ID</p>
 * @method void setQaId(string $QaId) 设置<p>QA ID</p>
 * @method SimilarQuestionStat getSimilarQuestion() 获取<p>相似问统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimilarQuestion(SimilarQuestionStat $SimilarQuestion) 设置<p>相似问统计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QASourceInfo getSourceInfo() 获取<p>来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceInfo(QASourceInfo $SourceInfo) 设置<p>来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class QASummary extends AbstractModel
{
    /**
     * @var CategoryPath <p>所属分类路径（包含分类 ID、从根节点开始的分类 ID 路径和分类名称路径）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryPath;

    /**
     * @var KnowledgeScope <p>知识生效范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeScope;

    /**
     * @var QALifecycle <p>生命周期信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lifecycle;

    /**
     * @var QAMetadata <p>元信息（问题/答案/大小统计）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var QAOperator <p>操作者信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorInfo;

    /**
     * @var string <p>QA ID</p>
     */
    public $QaId;

    /**
     * @var SimilarQuestionStat <p>相似问统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimilarQuestion;

    /**
     * @var QASourceInfo <p>来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceInfo;

    /**
     * @param CategoryPath $CategoryPath <p>所属分类路径（包含分类 ID、从根节点开始的分类 ID 路径和分类名称路径）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeScope $KnowledgeScope <p>知识生效范围</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QALifecycle $Lifecycle <p>生命周期信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QAMetadata $Metadata <p>元信息（问题/答案/大小统计）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QAOperator $OperatorInfo <p>操作者信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QaId <p>QA ID</p>
     * @param SimilarQuestionStat $SimilarQuestion <p>相似问统计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QASourceInfo $SourceInfo <p>来源信息</p>
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
        if (array_key_exists("CategoryPath",$param) and $param["CategoryPath"] !== null) {
            $this->CategoryPath = new CategoryPath();
            $this->CategoryPath->deserialize($param["CategoryPath"]);
        }

        if (array_key_exists("KnowledgeScope",$param) and $param["KnowledgeScope"] !== null) {
            $this->KnowledgeScope = new KnowledgeScope();
            $this->KnowledgeScope->deserialize($param["KnowledgeScope"]);
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new QALifecycle();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new QAMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("OperatorInfo",$param) and $param["OperatorInfo"] !== null) {
            $this->OperatorInfo = new QAOperator();
            $this->OperatorInfo->deserialize($param["OperatorInfo"]);
        }

        if (array_key_exists("QaId",$param) and $param["QaId"] !== null) {
            $this->QaId = $param["QaId"];
        }

        if (array_key_exists("SimilarQuestion",$param) and $param["SimilarQuestion"] !== null) {
            $this->SimilarQuestion = new SimilarQuestionStat();
            $this->SimilarQuestion->deserialize($param["SimilarQuestion"]);
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new QASourceInfo();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }
    }
}
