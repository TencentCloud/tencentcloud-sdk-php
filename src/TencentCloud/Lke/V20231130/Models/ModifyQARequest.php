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
 * ModifyQA请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
若要操作共享知识库，传KnowledgeBizId
 * @method void setBotBizId(string $BotBizId) 设置应用ID
若要操作共享知识库，传KnowledgeBizId
 * @method string getQaBizId() 获取问答ID
 * @method void setQaBizId(string $QaBizId) 设置问答ID
 * @method string getQuestion() 获取问题
 * @method void setQuestion(string $Question) 设置问题
 * @method string getAnswer() 获取答案
 * @method void setAnswer(string $Answer) 设置答案
 * @method string getCustomParam() 获取自定义参数
 * @method void setCustomParam(string $CustomParam) 设置自定义参数
 * @method integer getAttrRange() 获取标签适用范围 1：全部，2：按条件
默认值：当没有属性标签，labelRefers为空时，默认值为1
有属性标签，labelRefers不为空，默认值为2
 * @method void setAttrRange(integer $AttrRange) 设置标签适用范围 1：全部，2：按条件
默认值：当没有属性标签，labelRefers为空时，默认值为1
有属性标签，labelRefers不为空，默认值为2
 * @method array getAttrLabels() 获取标签引用
 * @method void setAttrLabels(array $AttrLabels) 设置标签引用
 * @method string getDocBizId() 获取文档ID
 * @method void setDocBizId(string $DocBizId) 设置文档ID
 * @method string getCateBizId() 获取分类ID
 * @method void setCateBizId(string $CateBizId) 设置分类ID
 * @method string getExpireStart() 获取有效开始时间，单位是unix时间戳，默认值为0，代表永久有效
 * @method void setExpireStart(string $ExpireStart) 设置有效开始时间，单位是unix时间戳，默认值为0，代表永久有效
 * @method string getExpireEnd() 获取有效结束时间，单位是unix时间戳，默认值为0，代表永久有效
 * @method void setExpireEnd(string $ExpireEnd) 设置有效结束时间，单位是unix时间戳，默认值为0，代表永久有效
 * @method SimilarQuestionModify getSimilarQuestionModify() 获取相似问修改信息(相似问没有修改则不传)
 * @method void setSimilarQuestionModify(SimilarQuestionModify $SimilarQuestionModify) 设置相似问修改信息(相似问没有修改则不传)
 * @method string getQuestionDesc() 获取问题描述
 * @method void setQuestionDesc(string $QuestionDesc) 设置问题描述
 * @method integer getEnableScope() 获取问答生效范围: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效。若不传该字段，则不修改问答的生效范围。
 * @method void setEnableScope(integer $EnableScope) 设置问答生效范围: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效。若不传该字段，则不修改问答的生效范围。
 */
class ModifyQARequest extends AbstractModel
{
    /**
     * @var string 应用ID
若要操作共享知识库，传KnowledgeBizId
     */
    public $BotBizId;

    /**
     * @var string 问答ID
     */
    public $QaBizId;

    /**
     * @var string 问题
     */
    public $Question;

    /**
     * @var string 答案
     */
    public $Answer;

    /**
     * @var string 自定义参数
     */
    public $CustomParam;

    /**
     * @var integer 标签适用范围 1：全部，2：按条件
默认值：当没有属性标签，labelRefers为空时，默认值为1
有属性标签，labelRefers不为空，默认值为2
     */
    public $AttrRange;

    /**
     * @var array 标签引用
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
     * @var string 有效开始时间，单位是unix时间戳，默认值为0，代表永久有效
     */
    public $ExpireStart;

    /**
     * @var string 有效结束时间，单位是unix时间戳，默认值为0，代表永久有效
     */
    public $ExpireEnd;

    /**
     * @var SimilarQuestionModify 相似问修改信息(相似问没有修改则不传)
     */
    public $SimilarQuestionModify;

    /**
     * @var string 问题描述
     */
    public $QuestionDesc;

    /**
     * @var integer 问答生效范围: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效。若不传该字段，则不修改问答的生效范围。
     */
    public $EnableScope;

    /**
     * @param string $BotBizId 应用ID
若要操作共享知识库，传KnowledgeBizId
     * @param string $QaBizId 问答ID
     * @param string $Question 问题
     * @param string $Answer 答案
     * @param string $CustomParam 自定义参数
     * @param integer $AttrRange 标签适用范围 1：全部，2：按条件
默认值：当没有属性标签，labelRefers为空时，默认值为1
有属性标签，labelRefers不为空，默认值为2
     * @param array $AttrLabels 标签引用
     * @param string $DocBizId 文档ID
     * @param string $CateBizId 分类ID
     * @param string $ExpireStart 有效开始时间，单位是unix时间戳，默认值为0，代表永久有效
     * @param string $ExpireEnd 有效结束时间，单位是unix时间戳，默认值为0，代表永久有效
     * @param SimilarQuestionModify $SimilarQuestionModify 相似问修改信息(相似问没有修改则不传)
     * @param string $QuestionDesc 问题描述
     * @param integer $EnableScope 问答生效范围: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效。若不传该字段，则不修改问答的生效范围。
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

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("CustomParam",$param) and $param["CustomParam"] !== null) {
            $this->CustomParam = $param["CustomParam"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
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

        if (array_key_exists("SimilarQuestionModify",$param) and $param["SimilarQuestionModify"] !== null) {
            $this->SimilarQuestionModify = new SimilarQuestionModify();
            $this->SimilarQuestionModify->deserialize($param["SimilarQuestionModify"]);
        }

        if (array_key_exists("QuestionDesc",$param) and $param["QuestionDesc"] !== null) {
            $this->QuestionDesc = $param["QuestionDesc"];
        }

        if (array_key_exists("EnableScope",$param) and $param["EnableScope"] !== null) {
            $this->EnableScope = $param["EnableScope"];
        }
    }
}
