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
 * 问答列表
 *
 * @method string getQaBizId() 获取问答ID
 * @method void setQaBizId(string $QaBizId) 设置问答ID
 * @method boolean getIsAccepted() 获取是否采纳
 * @method void setIsAccepted(boolean $IsAccepted) 设置是否采纳
 * @method string getCateBizId() 获取分类ID
 * @method void setCateBizId(string $CateBizId) 设置分类ID
 * @method string getQuestion() 获取问题
 * @method void setQuestion(string $Question) 设置问题
 * @method string getAnswer() 获取答案
 * @method void setAnswer(string $Answer) 设置答案
 */
class QAList extends AbstractModel
{
    /**
     * @var string 问答ID
     */
    public $QaBizId;

    /**
     * @var boolean 是否采纳
     */
    public $IsAccepted;

    /**
     * @var string 分类ID
     */
    public $CateBizId;

    /**
     * @var string 问题
     */
    public $Question;

    /**
     * @var string 答案
     */
    public $Answer;

    /**
     * @param string $QaBizId 问答ID
     * @param boolean $IsAccepted 是否采纳
     * @param string $CateBizId 分类ID
     * @param string $Question 问题
     * @param string $Answer 答案
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
        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("IsAccepted",$param) and $param["IsAccepted"] !== null) {
            $this->IsAccepted = $param["IsAccepted"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }
    }
}
