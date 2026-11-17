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
 * Question 问卷问题信息
 *
 * @method integer getIndex() 获取<p>问题序号</p>
 * @method void setIndex(integer $Index) 设置<p>问题序号</p>
 * @method string getQuestion() 获取<p>问题内容</p>
 * @method void setQuestion(string $Question) 设置<p>问题内容</p>
 * @method boolean getRequired() 获取<p>是否必答</p>
 * @method void setRequired(boolean $Required) 设置<p>是否必答</p>
 * @method integer getType() 获取<p>问题类型 枚举值: 0-QUESTION_TYPE_UNSPECIFIED(未指定), 1-QUESTION_TYPE_SINGLE(单选), 2-QUESTION_TYPE_MULTIPLE(多选)</p>
 * @method void setType(integer $Type) 设置<p>问题类型 枚举值: 0-QUESTION_TYPE_UNSPECIFIED(未指定), 1-QUESTION_TYPE_SINGLE(单选), 2-QUESTION_TYPE_MULTIPLE(多选)</p>
 * @method array getOptionList() 获取<p>选项列表</p>
 * @method void setOptionList(array $OptionList) 设置<p>选项列表</p>
 * @method array getOptions() 获取<p>选项列表</p>
 * @method void setOptions(array $Options) 设置<p>选项列表</p>
 */
class ConversationQuestion extends AbstractModel
{
    /**
     * @var integer <p>问题序号</p>
     */
    public $Index;

    /**
     * @var string <p>问题内容</p>
     */
    public $Question;

    /**
     * @var boolean <p>是否必答</p>
     */
    public $Required;

    /**
     * @var integer <p>问题类型 枚举值: 0-QUESTION_TYPE_UNSPECIFIED(未指定), 1-QUESTION_TYPE_SINGLE(单选), 2-QUESTION_TYPE_MULTIPLE(多选)</p>
     */
    public $Type;

    /**
     * @var array <p>选项列表</p>
     */
    public $OptionList;

    /**
     * @var array <p>选项列表</p>
     */
    public $Options;

    /**
     * @param integer $Index <p>问题序号</p>
     * @param string $Question <p>问题内容</p>
     * @param boolean $Required <p>是否必答</p>
     * @param integer $Type <p>问题类型 枚举值: 0-QUESTION_TYPE_UNSPECIFIED(未指定), 1-QUESTION_TYPE_SINGLE(单选), 2-QUESTION_TYPE_MULTIPLE(多选)</p>
     * @param array $OptionList <p>选项列表</p>
     * @param array $Options <p>选项列表</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OptionList",$param) and $param["OptionList"] !== null) {
            $this->OptionList = [];
            foreach ($param["OptionList"] as $key => $value){
                $obj = new ConversationQuestionOption();
                $obj->deserialize($value);
                array_push($this->OptionList, $obj);
            }
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new ConversationQuestionOption();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }
    }
}
