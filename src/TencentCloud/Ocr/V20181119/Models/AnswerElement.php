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
 * 试题识别结果-答案元素内容
 *
 * @method boolean getIsCorrect() 获取<p>答案是否正确</p>
 * @method void setIsCorrect(boolean $IsCorrect) 设置<p>答案是否正确</p>
 * @method string getAnswerAnalysis() 获取<p>答案分析结果</p>
 * @method void setAnswerAnalysis(string $AnswerAnalysis) 设置<p>答案分析结果</p>
 * @method string getRightAnswer() 获取<p>返回正确答案内容</p>
 * @method void setRightAnswer(string $RightAnswer) 设置<p>返回正确答案内容</p>
 */
class AnswerElement extends AbstractModel
{
    /**
     * @var boolean <p>答案是否正确</p>
     */
    public $IsCorrect;

    /**
     * @var string <p>答案分析结果</p>
     */
    public $AnswerAnalysis;

    /**
     * @var string <p>返回正确答案内容</p>
     */
    public $RightAnswer;

    /**
     * @param boolean $IsCorrect <p>答案是否正确</p>
     * @param string $AnswerAnalysis <p>答案分析结果</p>
     * @param string $RightAnswer <p>返回正确答案内容</p>
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
        if (array_key_exists("IsCorrect",$param) and $param["IsCorrect"] !== null) {
            $this->IsCorrect = $param["IsCorrect"];
        }

        if (array_key_exists("AnswerAnalysis",$param) and $param["AnswerAnalysis"] !== null) {
            $this->AnswerAnalysis = $param["AnswerAnalysis"];
        }

        if (array_key_exists("RightAnswer",$param) and $param["RightAnswer"] !== null) {
            $this->RightAnswer = $param["RightAnswer"];
        }
    }
}
