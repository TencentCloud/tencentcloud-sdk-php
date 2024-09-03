<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * CreateQA请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getQuestion() 获取问题
 * @method void setQuestion(string $Question) 设置问题
 * @method string getAnswer() 获取答案
 * @method void setAnswer(string $Answer) 设置答案
 * @method integer getAttrRange() 获取属性标签适用范围 1：全部，2：按条件
 * @method void setAttrRange(integer $AttrRange) 设置属性标签适用范围 1：全部，2：按条件
 * @method string getCustomParam() 获取自定义参数
 * @method void setCustomParam(string $CustomParam) 设置自定义参数
 * @method array getAttrLabels() 获取属性标签引用
 * @method void setAttrLabels(array $AttrLabels) 设置属性标签引用
 * @method string getDocBizId() 获取文档ID
 * @method void setDocBizId(string $DocBizId) 设置文档ID
 * @method string getCateBizId() 获取分类ID
 * @method void setCateBizId(string $CateBizId) 设置分类ID
 * @method string getExpireStart() 获取有效开始时间，unix时间戳
 * @method void setExpireStart(string $ExpireStart) 设置有效开始时间，unix时间戳
 * @method string getExpireEnd() 获取有效结束时间，unix时间戳，0代表永久有效
 * @method void setExpireEnd(string $ExpireEnd) 设置有效结束时间，unix时间戳，0代表永久有效
 * @method array getSimilarQuestions() 获取相似问内容
 * @method void setSimilarQuestions(array $SimilarQuestions) 设置相似问内容
 */
class CreateQARequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 问题
     */
    public $Question;

    /**
     * @var string 答案
     */
    public $Answer;

    /**
     * @var integer 属性标签适用范围 1：全部，2：按条件
     */
    public $AttrRange;

    /**
     * @var string 自定义参数
     */
    public $CustomParam;

    /**
     * @var array 属性标签引用
     */
    public $AttrLabels;

    /**
     * @var string 文档ID
     */
    public $DocBizId;

    /**
     * @var string 分类ID
     */
    public $CateBizId;

    /**
     * @var string 有效开始时间，unix时间戳
     */
    public $ExpireStart;

    /**
     * @var string 有效结束时间，unix时间戳，0代表永久有效
     */
    public $ExpireEnd;

    /**
     * @var array 相似问内容
     */
    public $SimilarQuestions;

    /**
     * @param string $BotBizId 应用ID
     * @param string $Question 问题
     * @param string $Answer 答案
     * @param integer $AttrRange 属性标签适用范围 1：全部，2：按条件
     * @param string $CustomParam 自定义参数
     * @param array $AttrLabels 属性标签引用
     * @param string $DocBizId 文档ID
     * @param string $CateBizId 分类ID
     * @param string $ExpireStart 有效开始时间，unix时间戳
     * @param string $ExpireEnd 有效结束时间，unix时间戳，0代表永久有效
     * @param array $SimilarQuestions 相似问内容
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("CustomParam",$param) and $param["CustomParam"] !== null) {
            $this->CustomParam = $param["CustomParam"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabelRefer();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("SimilarQuestions",$param) and $param["SimilarQuestions"] !== null) {
            $this->SimilarQuestions = $param["SimilarQuestions"];
        }
    }
}
