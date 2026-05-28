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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 症状自查追问问题
 *
 * @method string getPromptType() 获取<p>追问类型</p>
 * @method void setPromptType(string $PromptType) 设置<p>追问类型</p>
 * @method array getChoices() 获取<p>追问选项列表</p>
 * @method void setChoices(array $Choices) 设置<p>追问选项列表</p>
 * @method string getQuestionType() 获取<p>追问题型，单选或多选</p>
 * @method void setQuestionType(string $QuestionType) 设置<p>追问题型，单选或多选</p>
 * @method string getSpecialType() 获取<p>追问特殊类型，如部位题、时间题</p>
 * @method void setSpecialType(string $SpecialType) 设置<p>追问特殊类型，如部位题、时间题</p>
 * @method string getQuestion() 获取<p>追问问题内容</p>
 * @method void setQuestion(string $Question) 设置<p>追问问题内容</p>
 */
class HealthFollowUpQuestion extends AbstractModel
{
    /**
     * @var string <p>追问类型</p>
     */
    public $PromptType;

    /**
     * @var array <p>追问选项列表</p>
     */
    public $Choices;

    /**
     * @var string <p>追问题型，单选或多选</p>
     */
    public $QuestionType;

    /**
     * @var string <p>追问特殊类型，如部位题、时间题</p>
     */
    public $SpecialType;

    /**
     * @var string <p>追问问题内容</p>
     */
    public $Question;

    /**
     * @param string $PromptType <p>追问类型</p>
     * @param array $Choices <p>追问选项列表</p>
     * @param string $QuestionType <p>追问题型，单选或多选</p>
     * @param string $SpecialType <p>追问特殊类型，如部位题、时间题</p>
     * @param string $Question <p>追问问题内容</p>
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
        if (array_key_exists("PromptType",$param) and $param["PromptType"] !== null) {
            $this->PromptType = $param["PromptType"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = $param["Choices"];
        }

        if (array_key_exists("QuestionType",$param) and $param["QuestionType"] !== null) {
            $this->QuestionType = $param["QuestionType"];
        }

        if (array_key_exists("SpecialType",$param) and $param["SpecialType"] !== null) {
            $this->SpecialType = $param["SpecialType"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }
    }
}
