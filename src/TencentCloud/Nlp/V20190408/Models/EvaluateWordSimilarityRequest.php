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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EvaluateWordSimilarity请求参数结构体
 *
 * @method string getSourceWord() 获取计算相似度的源词。（仅支持UTF-8格式，不超过10字符）

 * @method void setSourceWord(string $SourceWord) 设置计算相似度的源词。（仅支持UTF-8格式，不超过10字符）

 * @method string getTargetWord() 获取计算相似度的目标词。（仅支持UTF-8格式，不超过10字符）

 * @method void setTargetWord(string $TargetWord) 设置计算相似度的目标词。（仅支持UTF-8格式，不超过10字符）
 */
class EvaluateWordSimilarityRequest extends AbstractModel
{
    /**
     * @var string 计算相似度的源词。（仅支持UTF-8格式，不超过10字符）

     */
    public $SourceWord;

    /**
     * @var string 计算相似度的目标词。（仅支持UTF-8格式，不超过10字符）

     */
    public $TargetWord;

    /**
     * @param string $SourceWord 计算相似度的源词。（仅支持UTF-8格式，不超过10字符）

     * @param string $TargetWord 计算相似度的目标词。（仅支持UTF-8格式，不超过10字符）
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
        if (array_key_exists("SourceWord",$param) and $param["SourceWord"] !== null) {
            $this->SourceWord = $param["SourceWord"];
        }

        if (array_key_exists("TargetWord",$param) and $param["TargetWord"] !== null) {
            $this->TargetWord = $param["TargetWord"];
        }
    }
}
