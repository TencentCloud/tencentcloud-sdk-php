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
 * EvaluateSentenceSimilarity请求参数结构体
 *
 * @method array getSentencePairList() 获取待分析的句子对数组。句子对应不超过1对，仅支持中文文本，原句子与目标句子均应不超过500字符。
 * @method void setSentencePairList(array $SentencePairList) 设置待分析的句子对数组。句子对应不超过1对，仅支持中文文本，原句子与目标句子均应不超过500字符。
 */
class EvaluateSentenceSimilarityRequest extends AbstractModel
{
    /**
     * @var array 待分析的句子对数组。句子对应不超过1对，仅支持中文文本，原句子与目标句子均应不超过500字符。
     */
    public $SentencePairList;

    /**
     * @param array $SentencePairList 待分析的句子对数组。句子对应不超过1对，仅支持中文文本，原句子与目标句子均应不超过500字符。
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
        if (array_key_exists("SentencePairList",$param) and $param["SentencePairList"] !== null) {
            $this->SentencePairList = [];
            foreach ($param["SentencePairList"] as $key => $value){
                $obj = new SentencePair();
                $obj->deserialize($value);
                array_push($this->SentencePairList, $obj);
            }
        }
    }
}
