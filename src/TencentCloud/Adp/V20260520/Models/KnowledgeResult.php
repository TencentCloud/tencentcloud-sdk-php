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
 * 单条检索结果
 *
 * @method float getConfidence() 获取<p>置信度</p>
 * @method void setConfidence(float $Confidence) 设置<p>置信度</p>
 * @method integer getKnowledgeType() 获取<p>命中知识类型：1=问答，2=文档片段，3=数据库，4=图谱<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_QA</td><td>1</td><td>问答</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DOC</td><td>2</td><td>文档片段</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DB</td><td>3</td><td>数据库</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_GRAPH</td><td>4</td><td>图谱</td></tr></tbody></table></p>
 * @method void setKnowledgeType(integer $KnowledgeType) 设置<p>命中知识类型：1=问答，2=文档片段，3=数据库，4=图谱<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_QA</td><td>1</td><td>问答</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DOC</td><td>2</td><td>文档片段</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DB</td><td>3</td><td>数据库</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_GRAPH</td><td>4</td><td>图谱</td></tr></tbody></table></p>
 * @method array getRecallTypeList() 获取<p>召回类型列表</p>
 * @method void setRecallTypeList(array $RecallTypeList) 设置<p>召回类型列表</p>
 * @method SearchResultPayload getResultPayload() 获取<p>结果负载</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultPayload(SearchResultPayload $ResultPayload) 设置<p>结果负载</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResultType() 获取<p>检索结果类型<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_RESULT_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_RETRIEVAL</td><td>1</td><td>普通检索结果</td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_TO_SQL</td><td>2</td><td>text2sql 结果</td></tr><tr><td>SEARCH_RESULT_TYPE_IMAGE_SEARCH_IMAGE</td><td>3</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_SEARCH_IMAGE</td><td>4</td><td></td></tr></tbody></table></p>
 * @method void setResultType(integer $ResultType) 设置<p>检索结果类型<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_RESULT_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_RETRIEVAL</td><td>1</td><td>普通检索结果</td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_TO_SQL</td><td>2</td><td>text2sql 结果</td></tr><tr><td>SEARCH_RESULT_TYPE_IMAGE_SEARCH_IMAGE</td><td>3</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_SEARCH_IMAGE</td><td>4</td><td></td></tr></tbody></table></p>
 * @method SimilarQuestionExtra getSimilarQuestionExtra() 获取<p>相似问额外信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimilarQuestionExtra(SimilarQuestionExtra $SimilarQuestionExtra) 设置<p>相似问额外信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeSnippetProfile getSnippetProfile() 获取<p>知识片段基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnippetProfile(KnowledgeSnippetProfile $SnippetProfile) 设置<p>知识片段基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeSource getSourceInfo() 获取<p>知识来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceInfo(KnowledgeSource $SourceInfo) 设置<p>知识来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeResult extends AbstractModel
{
    /**
     * @var float <p>置信度</p>
     */
    public $Confidence;

    /**
     * @var integer <p>命中知识类型：1=问答，2=文档片段，3=数据库，4=图谱<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_QA</td><td>1</td><td>问答</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DOC</td><td>2</td><td>文档片段</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DB</td><td>3</td><td>数据库</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_GRAPH</td><td>4</td><td>图谱</td></tr></tbody></table></p>
     */
    public $KnowledgeType;

    /**
     * @var array <p>召回类型列表</p>
     */
    public $RecallTypeList;

    /**
     * @var SearchResultPayload <p>结果负载</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultPayload;

    /**
     * @var integer <p>检索结果类型<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_RESULT_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_RETRIEVAL</td><td>1</td><td>普通检索结果</td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_TO_SQL</td><td>2</td><td>text2sql 结果</td></tr><tr><td>SEARCH_RESULT_TYPE_IMAGE_SEARCH_IMAGE</td><td>3</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_SEARCH_IMAGE</td><td>4</td><td></td></tr></tbody></table></p>
     */
    public $ResultType;

    /**
     * @var SimilarQuestionExtra <p>相似问额外信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimilarQuestionExtra;

    /**
     * @var KnowledgeSnippetProfile <p>知识片段基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnippetProfile;

    /**
     * @var KnowledgeSource <p>知识来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceInfo;

    /**
     * @param float $Confidence <p>置信度</p>
     * @param integer $KnowledgeType <p>命中知识类型：1=问答，2=文档片段，3=数据库，4=图谱<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_QA</td><td>1</td><td>问答</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DOC</td><td>2</td><td>文档片段</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DB</td><td>3</td><td>数据库</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_GRAPH</td><td>4</td><td>图谱</td></tr></tbody></table></p>
     * @param array $RecallTypeList <p>召回类型列表</p>
     * @param SearchResultPayload $ResultPayload <p>结果负载</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResultType <p>检索结果类型<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_RESULT_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_RETRIEVAL</td><td>1</td><td>普通检索结果</td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_TO_SQL</td><td>2</td><td>text2sql 结果</td></tr><tr><td>SEARCH_RESULT_TYPE_IMAGE_SEARCH_IMAGE</td><td>3</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_SEARCH_IMAGE</td><td>4</td><td></td></tr></tbody></table></p>
     * @param SimilarQuestionExtra $SimilarQuestionExtra <p>相似问额外信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeSnippetProfile $SnippetProfile <p>知识片段基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeSource $SourceInfo <p>知识来源信息</p>
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("KnowledgeType",$param) and $param["KnowledgeType"] !== null) {
            $this->KnowledgeType = $param["KnowledgeType"];
        }

        if (array_key_exists("RecallTypeList",$param) and $param["RecallTypeList"] !== null) {
            $this->RecallTypeList = $param["RecallTypeList"];
        }

        if (array_key_exists("ResultPayload",$param) and $param["ResultPayload"] !== null) {
            $this->ResultPayload = new SearchResultPayload();
            $this->ResultPayload->deserialize($param["ResultPayload"]);
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("SimilarQuestionExtra",$param) and $param["SimilarQuestionExtra"] !== null) {
            $this->SimilarQuestionExtra = new SimilarQuestionExtra();
            $this->SimilarQuestionExtra->deserialize($param["SimilarQuestionExtra"]);
        }

        if (array_key_exists("SnippetProfile",$param) and $param["SnippetProfile"] !== null) {
            $this->SnippetProfile = new KnowledgeSnippetProfile();
            $this->SnippetProfile->deserialize($param["SnippetProfile"]);
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new KnowledgeSource();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }
    }
}
