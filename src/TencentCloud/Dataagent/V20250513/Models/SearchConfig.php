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
 * @method integer getType() 获取检索类型：0:混合搜索 1：向量搜索 2：全文搜索
 * @method void setType(integer $Type) 设置检索类型：0:混合搜索 1：向量搜索 2：全文搜索
 * @method integer getNum() 获取召回数量最大值
 * @method void setNum(integer $Num) 设置召回数量最大值
 * @method float getEmbeddingWeight() 获取权重配置
 * @method void setEmbeddingWeight(float $EmbeddingWeight) 设置权重配置
 * @method integer getRerank() 获取0:关闭 1:开启，默认1
 * @method void setRerank(integer $Rerank) 设置0:关闭 1:开启，默认1
 * @method integer getAutoRag() 获取0:关闭 1:开启，默认0
 * @method void setAutoRag(integer $AutoRag) 设置0:关闭 1:开启，默认0
 * @method array getKnowledgeBaseIds() 获取AutoRag关联的知识库ID列表
 * @method void setKnowledgeBaseIds(array $KnowledgeBaseIds) 设置AutoRag关联的知识库ID列表
 * @method integer getSearchStatus() 获取AutoRag搜索状态：0-未完成，1-已完成。仅当AutoRag=1时，该字段有效
 * @method void setSearchStatus(integer $SearchStatus) 设置AutoRag搜索状态：0-未完成，1-已完成。仅当AutoRag=1时，该字段有效
 */
class SearchConfig extends AbstractModel
{
    /**
     * @var integer 检索类型：0:混合搜索 1：向量搜索 2：全文搜索
     */
    public $Type;

    /**
     * @var integer 召回数量最大值
     */
    public $Num;

    /**
     * @var float 权重配置
     */
    public $EmbeddingWeight;

    /**
     * @var integer 0:关闭 1:开启，默认1
     */
    public $Rerank;

    /**
     * @var integer 0:关闭 1:开启，默认0
     */
    public $AutoRag;

    /**
     * @var array AutoRag关联的知识库ID列表
     */
    public $KnowledgeBaseIds;

    /**
     * @var integer AutoRag搜索状态：0-未完成，1-已完成。仅当AutoRag=1时，该字段有效
     */
    public $SearchStatus;

    /**
     * @param integer $Type 检索类型：0:混合搜索 1：向量搜索 2：全文搜索
     * @param integer $Num 召回数量最大值
     * @param float $EmbeddingWeight 权重配置
     * @param integer $Rerank 0:关闭 1:开启，默认1
     * @param integer $AutoRag 0:关闭 1:开启，默认0
     * @param array $KnowledgeBaseIds AutoRag关联的知识库ID列表
     * @param integer $SearchStatus AutoRag搜索状态：0-未完成，1-已完成。仅当AutoRag=1时，该字段有效
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
    }
}
