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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyQA请求参数结构体
 *
 * @method string getKnowledgeBaseId() 获取知识库ID
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库ID
 * @method string getQaId() 获取问答对ID
 * @method void setQaId(string $QaId) 设置问答对ID
 * @method string getQuestion() 获取问题，最大1000个英文字符
 * @method void setQuestion(string $Question) 设置问题，最大1000个英文字符
 * @method string getAnswer() 获取答案，最大4000个英文字符
 * @method void setAnswer(string $Answer) 设置答案，最大4000个英文字符
 * @method array getAttributeLabels() 获取属性标签
 * @method void setAttributeLabels(array $AttributeLabels) 设置属性标签
 */
class ModifyQARequest extends AbstractModel
{
    /**
     * @var string 知识库ID
     */
    public $KnowledgeBaseId;

    /**
     * @var string 问答对ID
     */
    public $QaId;

    /**
     * @var string 问题，最大1000个英文字符
     */
    public $Question;

    /**
     * @var string 答案，最大4000个英文字符
     */
    public $Answer;

    /**
     * @var array 属性标签
     */
    public $AttributeLabels;

    /**
     * @param string $KnowledgeBaseId 知识库ID
     * @param string $QaId 问答对ID
     * @param string $Question 问题，最大1000个英文字符
     * @param string $Answer 答案，最大4000个英文字符
     * @param array $AttributeLabels 属性标签
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
        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("QaId",$param) and $param["QaId"] !== null) {
            $this->QaId = $param["QaId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("AttributeLabels",$param) and $param["AttributeLabels"] !== null) {
            $this->AttributeLabels = [];
            foreach ($param["AttributeLabels"] as $key => $value){
                $obj = new AttributeLabelReferItem();
                $obj->deserialize($value);
                array_push($this->AttributeLabels, $obj);
            }
        }
    }
}
