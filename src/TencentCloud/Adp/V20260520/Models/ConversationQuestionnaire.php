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
 * Questionnaire 问卷信息
 *
 * @method string getTitle() 获取<p>问卷标题</p>
 * @method void setTitle(string $Title) 设置<p>问卷标题</p>
 * @method array getAnswerList() 获取<p>答案列表</p>
 * @method void setAnswerList(array $AnswerList) 设置<p>答案列表</p>
 * @method array getAnswers() 获取<p>答案列表</p>
 * @method void setAnswers(array $Answers) 设置<p>答案列表</p>
 * @method array getQuestionList() 获取<p>问题列表</p>
 * @method void setQuestionList(array $QuestionList) 设置<p>问题列表</p>
 * @method array getQuestions() 获取<p>问题列表</p>
 * @method void setQuestions(array $Questions) 设置<p>问题列表</p>
 */
class ConversationQuestionnaire extends AbstractModel
{
    /**
     * @var string <p>问卷标题</p>
     */
    public $Title;

    /**
     * @var array <p>答案列表</p>
     */
    public $AnswerList;

    /**
     * @var array <p>答案列表</p>
     */
    public $Answers;

    /**
     * @var array <p>问题列表</p>
     */
    public $QuestionList;

    /**
     * @var array <p>问题列表</p>
     */
    public $Questions;

    /**
     * @param string $Title <p>问卷标题</p>
     * @param array $AnswerList <p>答案列表</p>
     * @param array $Answers <p>答案列表</p>
     * @param array $QuestionList <p>问题列表</p>
     * @param array $Questions <p>问题列表</p>
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("AnswerList",$param) and $param["AnswerList"] !== null) {
            $this->AnswerList = [];
            foreach ($param["AnswerList"] as $key => $value){
                $obj = new ConversationQuestionAnswer();
                $obj->deserialize($value);
                array_push($this->AnswerList, $obj);
            }
        }

        if (array_key_exists("Answers",$param) and $param["Answers"] !== null) {
            $this->Answers = [];
            foreach ($param["Answers"] as $key => $value){
                $obj = new ConversationQuestionAnswer();
                $obj->deserialize($value);
                array_push($this->Answers, $obj);
            }
        }

        if (array_key_exists("QuestionList",$param) and $param["QuestionList"] !== null) {
            $this->QuestionList = [];
            foreach ($param["QuestionList"] as $key => $value){
                $obj = new ConversationQuestion();
                $obj->deserialize($value);
                array_push($this->QuestionList, $obj);
            }
        }

        if (array_key_exists("Questions",$param) and $param["Questions"] !== null) {
            $this->Questions = [];
            foreach ($param["Questions"] as $key => $value){
                $obj = new ConversationQuestion();
                $obj->deserialize($value);
                array_push($this->Questions, $obj);
            }
        }
    }
}
