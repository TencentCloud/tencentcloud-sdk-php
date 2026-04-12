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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 整张试卷所有题目批改信息
 *
 * @method string getMarkItemTitle() 获取<p>题目的题干信息</p>
 * @method void setMarkItemTitle(string $MarkItemTitle) 设置<p>题目的题干信息</p>
 * @method array getAnswerInfos() 获取<p>批改答案列表（每个小题存在多个答案，比如多个填空区域答案，循序按照从左到右，从上到下排列）</p>
 * @method void setAnswerInfos(array $AnswerInfos) 设置<p>批改答案列表（每个小题存在多个答案，比如多个填空区域答案，循序按照从左到右，从上到下排列）</p>
 * @method array getMarkInfos() 获取<p>嵌套题目结构（如果有多层嵌套则会返回子题信息，如果没有嵌套题目则返回空）</p>
 * @method void setMarkInfos(array $MarkInfos) 设置<p>嵌套题目结构（如果有多层嵌套则会返回子题信息，如果没有嵌套题目则返回空）</p>
 * @method array getQuestionPositions() 获取<p>题干坐标</p><p>单位：px</p>
 * @method void setQuestionPositions(array $QuestionPositions) 设置<p>题干坐标</p><p>单位：px</p>
 * @method array getQuestionImagePositions() 获取<p>题干插图坐标列表，每个元素包含一张插图的4个角点坐标</p>
 * @method void setQuestionImagePositions(array $QuestionImagePositions) 设置<p>题干插图坐标列表，每个元素包含一张插图的4个角点坐标</p>
 * @method string getRightAnswer() 获取<p>题目级正确答案（步骤批改时使用，包含完整解题步骤）</p>
 * @method void setRightAnswer(string $RightAnswer) 设置<p>题目级正确答案（步骤批改时使用，包含完整解题步骤）</p>
 */
class MarkInfo extends AbstractModel
{
    /**
     * @var string <p>题目的题干信息</p>
     */
    public $MarkItemTitle;

    /**
     * @var array <p>批改答案列表（每个小题存在多个答案，比如多个填空区域答案，循序按照从左到右，从上到下排列）</p>
     */
    public $AnswerInfos;

    /**
     * @var array <p>嵌套题目结构（如果有多层嵌套则会返回子题信息，如果没有嵌套题目则返回空）</p>
     */
    public $MarkInfos;

    /**
     * @var array <p>题干坐标</p><p>单位：px</p>
     */
    public $QuestionPositions;

    /**
     * @var array <p>题干插图坐标列表，每个元素包含一张插图的4个角点坐标</p>
     */
    public $QuestionImagePositions;

    /**
     * @var string <p>题目级正确答案（步骤批改时使用，包含完整解题步骤）</p>
     */
    public $RightAnswer;

    /**
     * @param string $MarkItemTitle <p>题目的题干信息</p>
     * @param array $AnswerInfos <p>批改答案列表（每个小题存在多个答案，比如多个填空区域答案，循序按照从左到右，从上到下排列）</p>
     * @param array $MarkInfos <p>嵌套题目结构（如果有多层嵌套则会返回子题信息，如果没有嵌套题目则返回空）</p>
     * @param array $QuestionPositions <p>题干坐标</p><p>单位：px</p>
     * @param array $QuestionImagePositions <p>题干插图坐标列表，每个元素包含一张插图的4个角点坐标</p>
     * @param string $RightAnswer <p>题目级正确答案（步骤批改时使用，包含完整解题步骤）</p>
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
        if (array_key_exists("MarkItemTitle",$param) and $param["MarkItemTitle"] !== null) {
            $this->MarkItemTitle = $param["MarkItemTitle"];
        }

        if (array_key_exists("AnswerInfos",$param) and $param["AnswerInfos"] !== null) {
            $this->AnswerInfos = [];
            foreach ($param["AnswerInfos"] as $key => $value){
                $obj = new AnswerInfo();
                $obj->deserialize($value);
                array_push($this->AnswerInfos, $obj);
            }
        }

        if (array_key_exists("MarkInfos",$param) and $param["MarkInfos"] !== null) {
            $this->MarkInfos = [];
            foreach ($param["MarkInfos"] as $key => $value){
                $obj = new MarkInfo();
                $obj->deserialize($value);
                array_push($this->MarkInfos, $obj);
            }
        }

        if (array_key_exists("QuestionPositions",$param) and $param["QuestionPositions"] !== null) {
            $this->QuestionPositions = $param["QuestionPositions"];
        }

        if (array_key_exists("QuestionImagePositions",$param) and $param["QuestionImagePositions"] !== null) {
            $this->QuestionImagePositions = [];
            foreach ($param["QuestionImagePositions"] as $key => $value){
                $obj = new Positions();
                $obj->deserialize($value);
                array_push($this->QuestionImagePositions, $obj);
            }
        }

        if (array_key_exists("RightAnswer",$param) and $param["RightAnswer"] !== null) {
            $this->RightAnswer = $param["RightAnswer"];
        }
    }
}
