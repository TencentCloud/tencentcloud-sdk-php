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
 * 共享知识库配置
 *
 * @method string getKnowledgeBizId() 获取共享知识库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeBizId(string $KnowledgeBizId) 设置共享知识库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method SearchRange getSearchRange() 获取检索范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchRange(SearchRange $SearchRange) 设置检索范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeModelConfig getKnowledgeModelConfig() 获取知识库模型设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeModelConfig(KnowledgeModelConfig $KnowledgeModelConfig) 设置知识库模型设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method SearchStrategy getSearchStrategy() 获取检索策略配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchStrategy(SearchStrategy $SearchStrategy) 设置检索策略配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSearch() 获取检索配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearch(array $Search) 设置检索配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplyFlexibility() 获取// 问答-回复灵活度 1：已采纳答案直接回复 2：已采纳润色后回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplyFlexibility(integer $ReplyFlexibility) 设置// 问答-回复灵活度 1：已采纳答案直接回复 2：已采纳润色后回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKnowledgeName() 获取共享知识库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeName(string $KnowledgeName) 设置共享知识库名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShareKnowledgeBase extends AbstractModel
{
    /**
     * @var string 共享知识库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeBizId;

    /**
     * @var SearchRange 检索范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchRange;

    /**
     * @var KnowledgeModelConfig 知识库模型设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeModelConfig;

    /**
     * @var SearchStrategy 检索策略配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchStrategy;

    /**
     * @var array 检索配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Search;

    /**
     * @var integer // 问答-回复灵活度 1：已采纳答案直接回复 2：已采纳润色后回复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplyFlexibility;

    /**
     * @var string 共享知识库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeName;

    /**
     * @param string $KnowledgeBizId 共享知识库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param SearchRange $SearchRange 检索范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeModelConfig $KnowledgeModelConfig 知识库模型设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param SearchStrategy $SearchStrategy 检索策略配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Search 检索配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplyFlexibility // 问答-回复灵活度 1：已采纳答案直接回复 2：已采纳润色后回复
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KnowledgeName 共享知识库名称
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

        if (array_key_exists("SearchRange",$param) and $param["SearchRange"] !== null) {
            $this->SearchRange = new SearchRange();
            $this->SearchRange->deserialize($param["SearchRange"]);
        }

        if (array_key_exists("KnowledgeModelConfig",$param) and $param["KnowledgeModelConfig"] !== null) {
            $this->KnowledgeModelConfig = new KnowledgeModelConfig();
            $this->KnowledgeModelConfig->deserialize($param["KnowledgeModelConfig"]);
        }

        if (array_key_exists("SearchStrategy",$param) and $param["SearchStrategy"] !== null) {
            $this->SearchStrategy = new SearchStrategy();
            $this->SearchStrategy->deserialize($param["SearchStrategy"]);
        }

        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            $this->Search = [];
            foreach ($param["Search"] as $key => $value){
                $obj = new KnowledgeQaSearch();
                $obj->deserialize($value);
                array_push($this->Search, $obj);
            }
        }

        if (array_key_exists("ReplyFlexibility",$param) and $param["ReplyFlexibility"] !== null) {
            $this->ReplyFlexibility = $param["ReplyFlexibility"];
        }

        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }
    }
}
