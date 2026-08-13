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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索配置
 *
 * @method integer getType() 获取<p>检索类型：0:混合搜索 1：向量搜索 2：全文搜索</p>
 * @method void setType(integer $Type) 设置<p>检索类型：0:混合搜索 1：向量搜索 2：全文搜索</p>
 * @method integer getNum() 获取<p>召回数量最大值</p>
 * @method void setNum(integer $Num) 设置<p>召回数量最大值</p>
 * @method float getEmbeddingWeight() 获取<p>权重配置</p>
 * @method void setEmbeddingWeight(float $EmbeddingWeight) 设置<p>权重配置</p>
 * @method integer getRerank() 获取<p>0:关闭 1:开启，默认1</p>
 * @method void setRerank(integer $Rerank) 设置<p>0:关闭 1:开启，默认1</p>
 * @method integer getAutoRag() 获取<p>0:关闭 1:开启，默认0</p>
 * @method void setAutoRag(integer $AutoRag) 设置<p>0:关闭 1:开启，默认0</p>
 * @method array getKnowledgeBaseIds() 获取<p>AutoRag关联的知识库ID列表</p>
 * @method void setKnowledgeBaseIds(array $KnowledgeBaseIds) 设置<p>AutoRag关联的知识库ID列表</p>
 * @method integer getSearchStatus() 获取<p>AutoRag搜索状态：0-未完成，1-已完成。仅当AutoRag=1时，该字段有效</p>
 * @method void setSearchStatus(integer $SearchStatus) 设置<p>AutoRag搜索状态：0-未完成，1-已完成。仅当AutoRag=1时，该字段有效</p>
 * @method integer getEnableGraphSearch() 获取<p>0:关闭 1:开启图谱检索，默认0</p>
 * @method void setEnableGraphSearch(integer $EnableGraphSearch) 设置<p>0:关闭 1:开启图谱检索，默认0</p>
 * @method integer getEnableTreeSearch() 获取<p>0:关闭 1:开启树检索，默认0</p>
 * @method void setEnableTreeSearch(integer $EnableTreeSearch) 设置<p>0:关闭 1:开启树检索，默认0</p>
 */
class SearchConfig extends AbstractModel
{
    /**
     * @var integer <p>检索类型：0:混合搜索 1：向量搜索 2：全文搜索</p>
     */
    public $Type;

    /**
     * @var integer <p>召回数量最大值</p>
     */
    public $Num;

    /**
     * @var float <p>权重配置</p>
     */
    public $EmbeddingWeight;

    /**
     * @var integer <p>0:关闭 1:开启，默认1</p>
     */
    public $Rerank;

    /**
     * @var integer <p>0:关闭 1:开启，默认0</p>
     */
    public $AutoRag;

    /**
     * @var array <p>AutoRag关联的知识库ID列表</p>
     */
    public $KnowledgeBaseIds;

    /**
     * @var integer <p>AutoRag搜索状态：0-未完成，1-已完成。仅当AutoRag=1时，该字段有效</p>
     */
    public $SearchStatus;

    /**
     * @var integer <p>0:关闭 1:开启图谱检索，默认0</p>
     */
    public $EnableGraphSearch;

    /**
     * @var integer <p>0:关闭 1:开启树检索，默认0</p>
     */
    public $EnableTreeSearch;

    /**
     * @param integer $Type <p>检索类型：0:混合搜索 1：向量搜索 2：全文搜索</p>
     * @param integer $Num <p>召回数量最大值</p>
     * @param float $EmbeddingWeight <p>权重配置</p>
     * @param integer $Rerank <p>0:关闭 1:开启，默认1</p>
     * @param integer $AutoRag <p>0:关闭 1:开启，默认0</p>
     * @param array $KnowledgeBaseIds <p>AutoRag关联的知识库ID列表</p>
     * @param integer $SearchStatus <p>AutoRag搜索状态：0-未完成，1-已完成。仅当AutoRag=1时，该字段有效</p>
     * @param integer $EnableGraphSearch <p>0:关闭 1:开启图谱检索，默认0</p>
     * @param integer $EnableTreeSearch <p>0:关闭 1:开启树检索，默认0</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("EmbeddingWeight",$param) and $param["EmbeddingWeight"] !== null) {
            $this->EmbeddingWeight = $param["EmbeddingWeight"];
        }

        if (array_key_exists("Rerank",$param) and $param["Rerank"] !== null) {
            $this->Rerank = $param["Rerank"];
        }

        if (array_key_exists("AutoRag",$param) and $param["AutoRag"] !== null) {
            $this->AutoRag = $param["AutoRag"];
        }

        if (array_key_exists("KnowledgeBaseIds",$param) and $param["KnowledgeBaseIds"] !== null) {
            $this->KnowledgeBaseIds = $param["KnowledgeBaseIds"];
        }

        if (array_key_exists("SearchStatus",$param) and $param["SearchStatus"] !== null) {
            $this->SearchStatus = $param["SearchStatus"];
        }

        if (array_key_exists("EnableGraphSearch",$param) and $param["EnableGraphSearch"] !== null) {
            $this->EnableGraphSearch = $param["EnableGraphSearch"];
        }

        if (array_key_exists("EnableTreeSearch",$param) and $param["EnableTreeSearch"] !== null) {
            $this->EnableTreeSearch = $param["EnableTreeSearch"];
        }
    }
}
