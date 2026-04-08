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
 * 问卷信息
 *
 * @method string getTitle() 获取<p>问卷的标题</p>
 * @method void setTitle(string $Title) 设置<p>问卷的标题</p>
 * @method array getQuestions() 获取<p>问卷的问题列表</p>
 * @method void setQuestions(array $Questions) 设置<p>问卷的问题列表</p>
 * @method array getAnswers() 获取<p>问卷的答案列表</p>
 * @method void setAnswers(array $Answers) 设置<p>问卷的答案列表</p>
 */
class Questionnaire extends AbstractModel
{
    /**
     * @var string <p>问卷的标题</p>
     */
    public $Title;

    /**
     * @var array <p>问卷的问题列表</p>
     */
    public $Questions;

    /**
     * @var array <p>问卷的答案列表</p>
     */
    public $Answers;

    /**
     * @param string $Title <p>问卷的标题</p>
     * @param array $Questions <p>问卷的问题列表</p>
     * @param array $Answers <p>问卷的答案列表</p>
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

        if (array_key_exists("Questions",$param) and $param["Questions"] !== null) {
            $this->Questions = [];
            foreach ($param["Questions"] as $key => $value){
                $obj = new QuestionnaireQuestion();
                $obj->deserialize($value);
                array_push($this->Questions, $obj);
            }
        }

        if (array_key_exists("Answers",$param) and $param["Answers"] !== null) {
            $this->Answers = [];
            foreach ($param["Answers"] as $key => $value){
                $obj = new QuestionnaireQuestionAnswer();
                $obj->deserialize($value);
                array_push($this->Answers, $obj);
            }
        }
    }
}
