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
 * 大模型症状自查返回数据
 *
 * @method string getContent() 获取<p>大模型返回问答内容</p>
 * @method void setContent(string $Content) 设置<p>大模型返回问答内容</p>
 * @method string getThink() 获取<p>大模型返回思考内容</p>
 * @method void setThink(string $Think) 设置<p>大模型返回思考内容</p>
 * @method integer getSort() 获取<p>序号，无业务含义，标识流式结果的序号</p>
 * @method void setSort(integer $Sort) 设置<p>序号，无业务含义，标识流式结果的序号</p>
 * @method boolean getIsFinish() 获取<p>流式输出结束标识，false:未结束，true:结束</p>
 * @method void setIsFinish(boolean $IsFinish) 设置<p>流式输出结束标识，false:未结束，true:结束</p>
 * @method boolean getIsSensitive() 获取<p>是否命中敏感词，false:否，true:是；</p>
 * @method void setIsSensitive(boolean $IsSensitive) 设置<p>是否命中敏感词，false:否，true:是；</p>
 * @method boolean getIsSupportFile() 获取<p>是否支持报告类型，false:否，true:是； 默认返回true，不支持的报告类型返回false</p>
 * @method void setIsSupportFile(boolean $IsSupportFile) 设置<p>是否支持报告类型，false:否，true:是； 默认返回true，不支持的报告类型返回false</p>
 * @method array getReportInfos() 获取<p>返回的报告列表，和传入报告文件顺序一致</p>
 * @method void setReportInfos(array $ReportInfos) 设置<p>返回的报告列表，和传入报告文件顺序一致</p>
 * @method array getReferResourceItems() 获取<p>引用资料列表，流式输出方式，只在流式输出第一次返回；</p>
 * @method void setReferResourceItems(array $ReferResourceItems) 设置<p>引用资料列表，流式输出方式，只在流式输出第一次返回；</p>
 * @method array getGuessQuestions() 获取<p>猜你想问列表，流式输出方式，只在流式结束输出结果；</p>
 * @method void setGuessQuestions(array $GuessQuestions) 设置<p>猜你想问列表，流式输出方式，只在流式结束输出结果；</p>
 * @method array getHighlightWords() 获取<p>高亮词列表，流式输出方式在流式过程中输出结果。</p>
 * @method void setHighlightWords(array $HighlightWords) 设置<p>高亮词列表，流式输出方式在流式过程中输出结果。</p>
 */
class LLMReportInterpretationData extends AbstractModel
{
    /**
     * @var string <p>大模型返回问答内容</p>
     */
    public $Content;

    /**
     * @var string <p>大模型返回思考内容</p>
     */
    public $Think;

    /**
     * @var integer <p>序号，无业务含义，标识流式结果的序号</p>
     */
    public $Sort;

    /**
     * @var boolean <p>流式输出结束标识，false:未结束，true:结束</p>
     */
    public $IsFinish;

    /**
     * @var boolean <p>是否命中敏感词，false:否，true:是；</p>
     */
    public $IsSensitive;

    /**
     * @var boolean <p>是否支持报告类型，false:否，true:是； 默认返回true，不支持的报告类型返回false</p>
     */
    public $IsSupportFile;

    /**
     * @var array <p>返回的报告列表，和传入报告文件顺序一致</p>
     */
    public $ReportInfos;

    /**
     * @var array <p>引用资料列表，流式输出方式，只在流式输出第一次返回；</p>
     */
    public $ReferResourceItems;

    /**
     * @var array <p>猜你想问列表，流式输出方式，只在流式结束输出结果；</p>
     */
    public $GuessQuestions;

    /**
     * @var array <p>高亮词列表，流式输出方式在流式过程中输出结果。</p>
     */
    public $HighlightWords;

    /**
     * @param string $Content <p>大模型返回问答内容</p>
     * @param string $Think <p>大模型返回思考内容</p>
     * @param integer $Sort <p>序号，无业务含义，标识流式结果的序号</p>
     * @param boolean $IsFinish <p>流式输出结束标识，false:未结束，true:结束</p>
     * @param boolean $IsSensitive <p>是否命中敏感词，false:否，true:是；</p>
     * @param boolean $IsSupportFile <p>是否支持报告类型，false:否，true:是； 默认返回true，不支持的报告类型返回false</p>
     * @param array $ReportInfos <p>返回的报告列表，和传入报告文件顺序一致</p>
     * @param array $ReferResourceItems <p>引用资料列表，流式输出方式，只在流式输出第一次返回；</p>
     * @param array $GuessQuestions <p>猜你想问列表，流式输出方式，只在流式结束输出结果；</p>
     * @param array $HighlightWords <p>高亮词列表，流式输出方式在流式过程中输出结果。</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Think",$param) and $param["Think"] !== null) {
            $this->Think = $param["Think"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("IsFinish",$param) and $param["IsFinish"] !== null) {
            $this->IsFinish = $param["IsFinish"];
        }

        if (array_key_exists("IsSensitive",$param) and $param["IsSensitive"] !== null) {
            $this->IsSensitive = $param["IsSensitive"];
        }

        if (array_key_exists("IsSupportFile",$param) and $param["IsSupportFile"] !== null) {
            $this->IsSupportFile = $param["IsSupportFile"];
        }

        if (array_key_exists("ReportInfos",$param) and $param["ReportInfos"] !== null) {
            $this->ReportInfos = [];
            foreach ($param["ReportInfos"] as $key => $value){
                $obj = new ReportFileInfoRsp();
                $obj->deserialize($value);
                array_push($this->ReportInfos, $obj);
            }
        }

        if (array_key_exists("ReferResourceItems",$param) and $param["ReferResourceItems"] !== null) {
            $this->ReferResourceItems = [];
            foreach ($param["ReferResourceItems"] as $key => $value){
                $obj = new ReferResourceInfo();
                $obj->deserialize($value);
                array_push($this->ReferResourceItems, $obj);
            }
        }

        if (array_key_exists("GuessQuestions",$param) and $param["GuessQuestions"] !== null) {
            $this->GuessQuestions = [];
            foreach ($param["GuessQuestions"] as $key => $value){
                $obj = new GuessQuestion();
                $obj->deserialize($value);
                array_push($this->GuessQuestions, $obj);
            }
        }

        if (array_key_exists("HighlightWords",$param) and $param["HighlightWords"] !== null) {
            $this->HighlightWords = [];
            foreach ($param["HighlightWords"] as $key => $value){
                $obj = new HighlightWordInfo();
                $obj->deserialize($value);
                array_push($this->HighlightWords, $obj);
            }
        }
    }
}
