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
 * 语音过程中断句的中间结果
 *
 * @method integer getSentenceId() 获取句子序号，在段落、自由说模式下有效，表示断句序号，最后的综合结果的为-1.
 * @method void setSentenceId(integer $SentenceId) 设置句子序号，在段落、自由说模式下有效，表示断句序号，最后的综合结果的为-1.
 * @method array getWords() 获取详细发音评估结果
 * @method void setWords(array $Words) 设置详细发音评估结果
 * @method float getPronAccuracy() 获取发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值，在reftext中但未识别出来的词不计入分数中。
 * @method void setPronAccuracy(float $PronAccuracy) 设置发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值，在reftext中但未识别出来的词不计入分数中。
 * @method float getPronFluency() 获取发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
 * @method void setPronFluency(float $PronFluency) 设置发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
 * @method float getPronCompletion() 获取发音完整度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
 * @method void setPronCompletion(float $PronCompletion) 设置发音完整度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
 * @method float getSuggestedScore() 获取建议评分，取值范围[0,100]，评分方式为建议评分 = 准确度（PronAccuracyfloat）* 完整度（PronCompletionfloat）*（2 - 完整度（PronCompletionfloat）），如若评分策略不符合请参考Words数组中的详细分数自定义评分逻辑。
 * @method void setSuggestedScore(float $SuggestedScore) 设置建议评分，取值范围[0,100]，评分方式为建议评分 = 准确度（PronAccuracyfloat）* 完整度（PronCompletionfloat）*（2 - 完整度（PronCompletionfloat）），如若评分策略不符合请参考Words数组中的详细分数自定义评分逻辑。
 * @method integer getRefTextId() 获取匹配候选文本的序号，在句子多分支、情景对 话、段落模式下表示匹配到的文本序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefTextId(integer $RefTextId) 设置匹配候选文本的序号，在句子多分支、情景对 话、段落模式下表示匹配到的文本序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeyWordHits() 获取主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWordHits(array $KeyWordHits) 设置主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUnKeyWordHits() 获取负向主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnKeyWordHits(array $UnKeyWordHits) 设置负向主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var float 发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值，在reftext中但未识别出来的词不计入分数中。
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
     * @var float 建议评分，取值范围[0,100]，评分方式为建议评分 = 准确度（PronAccuracyfloat）* 完整度（PronCompletionfloat）*（2 - 完整度（PronCompletionfloat）），如若评分策略不符合请参考Words数组中的详细分数自定义评分逻辑。
     */
    public $SuggestedScore;

    /**
     * @var integer 匹配候选文本的序号，在句子多分支、情景对 话、段落模式下表示匹配到的文本序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefTextId;

    /**
     * @var array 主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWordHits;

    /**
     * @var array 负向主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnKeyWordHits;

    /**
     * @param integer $SentenceId 句子序号，在段落、自由说模式下有效，表示断句序号，最后的综合结果的为-1.
     * @param array $Words 详细发音评估结果
     * @param float $PronAccuracy 发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值，在reftext中但未识别出来的词不计入分数中。
     * @param float $PronFluency 发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
     * @param float $PronCompletion 发音完整度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义
     * @param float $SuggestedScore 建议评分，取值范围[0,100]，评分方式为建议评分 = 准确度（PronAccuracyfloat）* 完整度（PronCompletionfloat）*（2 - 完整度（PronCompletionfloat）），如若评分策略不符合请参考Words数组中的详细分数自定义评分逻辑。
     * @param integer $RefTextId 匹配候选文本的序号，在句子多分支、情景对 话、段落模式下表示匹配到的文本序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeyWordHits 主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UnKeyWordHits 负向主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("SuggestedScore",$param) and $param["SuggestedScore"] !== null) {
            $this->SuggestedScore = $param["SuggestedScore"];
        }

        if (array_key_exists("RefTextId",$param) and $param["RefTextId"] !== null) {
            $this->RefTextId = $param["RefTextId"];
        }

        if (array_key_exists("KeyWordHits",$param) and $param["KeyWordHits"] !== null) {
            $this->KeyWordHits = $param["KeyWordHits"];
        }

        if (array_key_exists("UnKeyWordHits",$param) and $param["UnKeyWordHits"] !== null) {
            $this->UnKeyWordHits = $param["UnKeyWordHits"];
        }
    }
}
