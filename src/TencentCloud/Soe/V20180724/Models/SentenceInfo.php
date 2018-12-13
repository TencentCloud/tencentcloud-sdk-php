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
namespace TencentCloud\Soe\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getSentenceId() 获取句子序号，在段落、自由说模式下有效，表示断句序号，最后的综合结果的为-1.
 * @method void setSentenceId(integer $SentenceId) 设置句子序号，在段落、自由说模式下有效，表示断句序号，最后的综合结果的为-1.
 * @method array getWords() 获取详细发音评估结果
 * @method void setWords(array $Words) 设置详细发音评估结果
 * @method float getPronAccuracy() 获取发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值。当为流式模式且请求中IsEnd未置1时，取值无意义
 * @method void setPronAccuracy(float $PronAccuracy) 设置发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值。当为流式模式且请求中IsEnd未置1时，取值无意义
 * @method float getPronFluency() 获取发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
 * @method void setPronFluency(float $PronFluency) 设置发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
 * @method float getPronCompletion() 获取发音完整度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
 * @method void setPronCompletion(float $PronCompletion) 设置发音完整度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
 */

/**
 *语音过程中断句的中间结果
 */
class SentenceInfo extends AbstractModel
{
    /**
     * @var integer 句子序号，在段落、自由说模式下有效，表示断句序号，最后的综合结果的为-1.
     */
    public $SentenceId;

    /**
     * @var array 详细发音评估结果
     */
    public $Words;

    /**
     * @var float 发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值。当为流式模式且请求中IsEnd未置1时，取值无意义
     */
    public $PronAccuracy;

    /**
     * @var float 发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
     */
    public $PronFluency;

    /**
     * @var float 发音完整度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
     */
    public $PronCompletion;
    /**
     * @param integer $SentenceId 句子序号，在段落、自由说模式下有效，表示断句序号，最后的综合结果的为-1.
     * @param array $Words 详细发音评估结果
     * @param float $PronAccuracy 发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值。当为流式模式且请求中IsEnd未置1时，取值无意义
     * @param float $PronFluency 发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
     * @param float $PronCompletion 发音完整度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SentenceId",$param) and $param["SentenceId"] !== null) {
            $this->SentenceId = $param["SentenceId"];
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new WordRsp();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }

        if (array_key_exists("PronAccuracy",$param) and $param["PronAccuracy"] !== null) {
            $this->PronAccuracy = $param["PronAccuracy"];
        }

        if (array_key_exists("PronFluency",$param) and $param["PronFluency"] !== null) {
            $this->PronFluency = $param["PronFluency"];
        }

        if (array_key_exists("PronCompletion",$param) and $param["PronCompletion"] !== null) {
            $this->PronCompletion = $param["PronCompletion"];
        }
    }
}
