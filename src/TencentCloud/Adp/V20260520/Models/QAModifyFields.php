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
 * QA 可修改字段集合（配合 update_mask 使用）
 *
 * @method string getAnswer() 获取<p>答案</p>
 * @method void setAnswer(string $Answer) 设置<p>答案</p>
 * @method string getCategoryId() 获取<p>分类 ID</p>
 * @method void setCategoryId(string $CategoryId) 设置<p>分类 ID</p>
 * @method string getDocId() 获取<p>关联文档 ID</p>
 * @method void setDocId(string $DocId) 设置<p>关联文档 ID</p>
 * @method integer getEffectiveDomain() 获取<p>知识生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
 * @method void setEffectiveDomain(integer $EffectiveDomain) 设置<p>知识生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
 * @method ExpirationPolicy getExpirationPolicy() 获取<p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpirationPolicy(ExpirationPolicy $ExpirationPolicy) 设置<p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAccepted() 获取<p>是否采纳（校验通过）</p>
 * @method void setIsAccepted(boolean $IsAccepted) 设置<p>是否采纳（校验通过）</p>
 * @method array getLabelRefList() 获取<p>适用范围（标签条件）</p>
 * @method void setLabelRefList(array $LabelRefList) 设置<p>适用范围（标签条件）</p>
 * @method string getQuestion() 获取<p>问题</p>
 * @method void setQuestion(string $Question) 设置<p>问题</p>
 * @method string getQuestionDescription() 获取<p>问题描述</p>
 * @method void setQuestionDescription(string $QuestionDescription) 设置<p>问题描述</p>
 * @method array getSimilarQuestionList() 获取<p>相似问修改列表</p>
 * @method void setSimilarQuestionList(array $SimilarQuestionList) 设置<p>相似问修改列表</p>
 */
class QAModifyFields extends AbstractModel
{
    /**
     * @var string <p>答案</p>
     */
    public $Answer;

    /**
     * @var string <p>分类 ID</p>
     */
    public $CategoryId;

    /**
     * @var string <p>关联文档 ID</p>
     */
    public $DocId;

    /**
     * @var integer <p>知识生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
     */
    public $EffectiveDomain;

    /**
     * @var ExpirationPolicy <p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpirationPolicy;

    /**
     * @var boolean <p>是否采纳（校验通过）</p>
     */
    public $IsAccepted;

    /**
     * @var array <p>适用范围（标签条件）</p>
     */
    public $LabelRefList;

    /**
     * @var string <p>问题</p>
     */
    public $Question;

    /**
     * @var string <p>问题描述</p>
     */
    public $QuestionDescription;

    /**
     * @var array <p>相似问修改列表</p>
     */
    public $SimilarQuestionList;

    /**
     * @param string $Answer <p>答案</p>
     * @param string $CategoryId <p>分类 ID</p>
     * @param string $DocId <p>关联文档 ID</p>
     * @param integer $EffectiveDomain <p>知识生效作用域<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_NONE</td><td>1</td><td>停用</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_DEV</td><td>2</td><td>仅开发域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_RELEASE</td><td>3</td><td>仅发布域</td></tr><tr><td>KNOWLEDGE_EFFECTIVE_DOMAIN_ALL</td><td>4</td><td>全域</td></tr></tbody></table></p>
     * @param ExpirationPolicy $ExpirationPolicy <p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAccepted <p>是否采纳（校验通过）</p>
     * @param array $LabelRefList <p>适用范围（标签条件）</p>
     * @param string $Question <p>问题</p>
     * @param string $QuestionDescription <p>问题描述</p>
     * @param array $SimilarQuestionList <p>相似问修改列表</p>
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
        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("EffectiveDomain",$param) and $param["EffectiveDomain"] !== null) {
            $this->EffectiveDomain = $param["EffectiveDomain"];
        }

        if (array_key_exists("ExpirationPolicy",$param) and $param["ExpirationPolicy"] !== null) {
            $this->ExpirationPolicy = new ExpirationPolicy();
            $this->ExpirationPolicy->deserialize($param["ExpirationPolicy"]);
        }

        if (array_key_exists("IsAccepted",$param) and $param["IsAccepted"] !== null) {
            $this->IsAccepted = $param["IsAccepted"];
        }

        if (array_key_exists("LabelRefList",$param) and $param["LabelRefList"] !== null) {
            $this->LabelRefList = [];
            foreach ($param["LabelRefList"] as $key => $value){
                $obj = new LabelRefIdentity();
                $obj->deserialize($value);
                array_push($this->LabelRefList, $obj);
            }
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("QuestionDescription",$param) and $param["QuestionDescription"] !== null) {
            $this->QuestionDescription = $param["QuestionDescription"];
        }

        if (array_key_exists("SimilarQuestionList",$param) and $param["SimilarQuestionList"] !== null) {
            $this->SimilarQuestionList = [];
            foreach ($param["SimilarQuestionList"] as $key => $value){
                $obj = new SimilarQuestionModifySpec();
                $obj->deserialize($value);
                array_push($this->SimilarQuestionList, $obj);
            }
        }
    }
}
