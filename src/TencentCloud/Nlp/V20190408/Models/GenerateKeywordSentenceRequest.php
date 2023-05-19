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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateKeywordSentence请求参数结构体
 *
 * @method array getWordList() 获取生成句子的关键词，关键词个数需不超过4个，中文关键词长度应不超过10字符，英文关键词长度不超过3个单词。关键词中不可包含标点符号。
 * @method void setWordList(array $WordList) 设置生成句子的关键词，关键词个数需不超过4个，中文关键词长度应不超过10字符，英文关键词长度不超过3个单词。关键词中不可包含标点符号。
 * @method integer getNumber() 获取返回生成句子的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
 * @method void setNumber(integer $Number) 设置返回生成句子的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
 * @method string getDomain() 获取指定生成句子的领域，支持领域如下：
general：通用领域，支持中英文
academic：学术领域，仅支持英文
默认为general（通用领域）。
 * @method void setDomain(string $Domain) 设置指定生成句子的领域，支持领域如下：
general：通用领域，支持中英文
academic：学术领域，仅支持英文
默认为general（通用领域）。
 */
class GenerateKeywordSentenceRequest extends AbstractModel
{
    /**
     * @var array 生成句子的关键词，关键词个数需不超过4个，中文关键词长度应不超过10字符，英文关键词长度不超过3个单词。关键词中不可包含标点符号。
     */
    public $WordList;

    /**
     * @var integer 返回生成句子的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
     */
    public $Number;

    /**
     * @var string 指定生成句子的领域，支持领域如下：
general：通用领域，支持中英文
academic：学术领域，仅支持英文
默认为general（通用领域）。
     */
    public $Domain;

    /**
     * @param array $WordList 生成句子的关键词，关键词个数需不超过4个，中文关键词长度应不超过10字符，英文关键词长度不超过3个单词。关键词中不可包含标点符号。
     * @param integer $Number 返回生成句子的个数。数量需>=1且<=5。
（注意实际结果可能小于指定个数）
     * @param string $Domain 指定生成句子的领域，支持领域如下：
general：通用领域，支持中英文
academic：学术领域，仅支持英文
默认为general（通用领域）。
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
        if (array_key_exists("WordList",$param) and $param["WordList"] !== null) {
            $this->WordList = $param["WordList"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
