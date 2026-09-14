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
 * QA 元信息
 *
 * @method string getAnswer() 获取<p>答案</p>
 * @method void setAnswer(string $Answer) 设置<p>答案</p>
 * @method string getQaCharCount() 获取<p>问答字符数</p>
 * @method void setQaCharCount(string $QaCharCount) 设置<p>问答字符数</p>
 * @method string getQaSize() 获取<p>问答大小（字节，含相似问）</p>
 * @method void setQaSize(string $QaSize) 设置<p>问答大小（字节，含相似问）</p>
 * @method string getQuestion() 获取<p>问题</p>
 * @method void setQuestion(string $Question) 设置<p>问题</p>
 * @method array getRefFieldNameList() 获取<p>元数据引用字段名列表（用于显示问答哪些分类和属性被设置为元数据）</p>
 * @method void setRefFieldNameList(array $RefFieldNameList) 设置<p>元数据引用字段名列表（用于显示问答哪些分类和属性被设置为元数据）</p>
 */
class QAMetadata extends AbstractModel
{
    /**
     * @var string <p>答案</p>
     */
    public $Answer;

    /**
     * @var string <p>问答字符数</p>
     */
    public $QaCharCount;

    /**
     * @var string <p>问答大小（字节，含相似问）</p>
     */
    public $QaSize;

    /**
     * @var string <p>问题</p>
     */
    public $Question;

    /**
     * @var array <p>元数据引用字段名列表（用于显示问答哪些分类和属性被设置为元数据）</p>
     */
    public $RefFieldNameList;

    /**
     * @param string $Answer <p>答案</p>
     * @param string $QaCharCount <p>问答字符数</p>
     * @param string $QaSize <p>问答大小（字节，含相似问）</p>
     * @param string $Question <p>问题</p>
     * @param array $RefFieldNameList <p>元数据引用字段名列表（用于显示问答哪些分类和属性被设置为元数据）</p>
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
        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("QaCharCount",$param) and $param["QaCharCount"] !== null) {
            $this->QaCharCount = $param["QaCharCount"];
        }

        if (array_key_exists("QaSize",$param) and $param["QaSize"] !== null) {
            $this->QaSize = $param["QaSize"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("RefFieldNameList",$param) and $param["RefFieldNameList"] !== null) {
            $this->RefFieldNameList = $param["RefFieldNameList"];
        }
    }
}
