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
 * 检索高级配置
 *
 * @method FinalRerankConfig getFinalRerankConfig() 获取<p>最终 rerank 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalRerankConfig(FinalRerankConfig $FinalRerankConfig) 设置<p>最终 rerank 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKbRetrievalList() 获取<p>各知识库的检索配置</p>
 * @method void setKbRetrievalList(array $KbRetrievalList) 设置<p>各知识库的检索配置</p>
 * @method integer getKnowledgeType() 获取<p>检索知识类型：1=文档和问答，2=拒答<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_DOC_QA</td><td>1</td><td>文档和问答</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_REJECTED_QUESTION</td><td>2</td><td>拒答</td></tr></tbody></table></p>
 * @method void setKnowledgeType(integer $KnowledgeType) 设置<p>检索知识类型：1=文档和问答，2=拒答<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_DOC_QA</td><td>1</td><td>文档和问答</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_REJECTED_QUESTION</td><td>2</td><td>拒答</td></tr></tbody></table></p>
 * @method integer getRecallCount() 获取<p>最终返回结果数</p>
 * @method void setRecallCount(integer $RecallCount) 设置<p>最终返回结果数</p>
 */
class SearchAdvancedConfig extends AbstractModel
{
    /**
     * @var FinalRerankConfig <p>最终 rerank 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalRerankConfig;

    /**
     * @var array <p>各知识库的检索配置</p>
     */
    public $KbRetrievalList;

    /**
     * @var integer <p>检索知识类型：1=文档和问答，2=拒答<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_DOC_QA</td><td>1</td><td>文档和问答</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_REJECTED_QUESTION</td><td>2</td><td>拒答</td></tr></tbody></table></p>
     */
    public $KnowledgeType;

    /**
     * @var integer <p>最终返回结果数</p>
     */
    public $RecallCount;

    /**
     * @param FinalRerankConfig $FinalRerankConfig <p>最终 rerank 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KbRetrievalList <p>各知识库的检索配置</p>
     * @param integer $KnowledgeType <p>检索知识类型：1=文档和问答，2=拒答<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_DOC_QA</td><td>1</td><td>文档和问答</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_REJECTED_QUESTION</td><td>2</td><td>拒答</td></tr></tbody></table></p>
     * @param integer $RecallCount <p>最终返回结果数</p>
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
        if (array_key_exists("FinalRerankConfig",$param) and $param["FinalRerankConfig"] !== null) {
            $this->FinalRerankConfig = new FinalRerankConfig();
            $this->FinalRerankConfig->deserialize($param["FinalRerankConfig"]);
        }

        if (array_key_exists("KbRetrievalList",$param) and $param["KbRetrievalList"] !== null) {
            $this->KbRetrievalList = [];
            foreach ($param["KbRetrievalList"] as $key => $value){
                $obj = new KBRetrievalConfig();
                $obj->deserialize($value);
                array_push($this->KbRetrievalList, $obj);
            }
        }

        if (array_key_exists("KnowledgeType",$param) and $param["KnowledgeType"] !== null) {
            $this->KnowledgeType = $param["KnowledgeType"];
        }

        if (array_key_exists("RecallCount",$param) and $param["RecallCount"] !== null) {
            $this->RecallCount = $param["RecallCount"];
        }
    }
}
