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
 * TestingTextGeneration请求参数结构体
 *
 * @method array getMessages() 获取会话内容,按对话时间从旧到新在数组中排列。
 * @method void setMessages(array $Messages) 设置会话内容,按对话时间从旧到新在数组中排列。
 * @method string getModel() 获取模型名称，当前固定为TestingModel
 * @method void setModel(string $Model) 设置模型名称，当前固定为TestingModel
 * @method string getQueryId() 获取会话id。
 * @method void setQueryId(string $QueryId) 设置会话id。
 * @method float getTemperature() 获取超参数temperature, 该参数用于控制生成文本中重复内容。取值区间为[0.0, 2.0], 非必要不建议使用, 不合理的取值会影响效果。默认为1.0。
 * @method void setTemperature(float $Temperature) 设置超参数temperature, 该参数用于控制生成文本中重复内容。取值区间为[0.0, 2.0], 非必要不建议使用, 不合理的取值会影响效果。默认为1.0。
 * @method float getTopP() 获取超参数top_p, 该参数用于控制生成文本的多样性。较小的"top_p"值会限制模型的选择范围，使生成的文本更加一致和确定性。较大的"top_p"值会扩大选择范围，使生成的文本更加多样化和随机。取值区间为[0.0, 1.0], 非必要不建议使用, 不合理的取值会影响效果。默认值为1.0。
 * @method void setTopP(float $TopP) 设置超参数top_p, 该参数用于控制生成文本的多样性。较小的"top_p"值会限制模型的选择范围，使生成的文本更加一致和确定性。较大的"top_p"值会扩大选择范围，使生成的文本更加多样化和随机。取值区间为[0.0, 1.0], 非必要不建议使用, 不合理的取值会影响效果。默认值为1.0。
 * @method float getTopK() 获取超参数top_k,该参数用于控制生成文本的多样性和可控性，较小的"top_k"值会限制模型的选择范围，使生成的文本更加一致和确定性。较大的"top_k"值会扩大选择范围，使生成的文本更加多样化和随机。取值区间为[1, 100]，默认值 40。
 * @method void setTopK(float $TopK) 设置超参数top_k,该参数用于控制生成文本的多样性和可控性，较小的"top_k"值会限制模型的选择范围，使生成的文本更加一致和确定性。较大的"top_k"值会扩大选择范围，使生成的文本更加多样化和随机。取值区间为[1, 100]，默认值 40。
 * @method float getRepetitionPenalty() 获取重复惩罚项,该参数用于用于控制生成文本中重复内容。建议范围[1.0, 1.05]非必要不建议使用, 不合理的取值会影响效果。默认为1。
 * @method void setRepetitionPenalty(float $RepetitionPenalty) 设置重复惩罚项,该参数用于用于控制生成文本中重复内容。建议范围[1.0, 1.05]非必要不建议使用, 不合理的取值会影响效果。默认为1。
 * @method integer getOutputSeqLen() 获取输出结果最大tokens数量。取值区间为(0, 1024]。默认值为768。
 * @method void setOutputSeqLen(integer $OutputSeqLen) 设置输出结果最大tokens数量。取值区间为(0, 1024]。默认值为768。
 * @method integer getMaxInputSeqLen() 获取输入文本的最大 tokens 数量。取值区间为(0, 1024]。默认值为256。
 * @method void setMaxInputSeqLen(integer $MaxInputSeqLen) 设置输入文本的最大 tokens 数量。取值区间为(0, 1024]。默认值为256。
 */
class TestingTextGenerationRequest extends AbstractModel
{
    /**
     * @var array 会话内容,按对话时间从旧到新在数组中排列。
     */
    public $Messages;

    /**
     * @var string 模型名称，当前固定为TestingModel
     */
    public $Model;

    /**
     * @var string 会话id。
     */
    public $QueryId;

    /**
     * @var float 超参数temperature, 该参数用于控制生成文本中重复内容。取值区间为[0.0, 2.0], 非必要不建议使用, 不合理的取值会影响效果。默认为1.0。
     */
    public $Temperature;

    /**
     * @var float 超参数top_p, 该参数用于控制生成文本的多样性。较小的"top_p"值会限制模型的选择范围，使生成的文本更加一致和确定性。较大的"top_p"值会扩大选择范围，使生成的文本更加多样化和随机。取值区间为[0.0, 1.0], 非必要不建议使用, 不合理的取值会影响效果。默认值为1.0。
     */
    public $TopP;

    /**
     * @var float 超参数top_k,该参数用于控制生成文本的多样性和可控性，较小的"top_k"值会限制模型的选择范围，使生成的文本更加一致和确定性。较大的"top_k"值会扩大选择范围，使生成的文本更加多样化和随机。取值区间为[1, 100]，默认值 40。
     */
    public $TopK;

    /**
     * @var float 重复惩罚项,该参数用于用于控制生成文本中重复内容。建议范围[1.0, 1.05]非必要不建议使用, 不合理的取值会影响效果。默认为1。
     */
    public $RepetitionPenalty;

    /**
     * @var integer 输出结果最大tokens数量。取值区间为(0, 1024]。默认值为768。
     */
    public $OutputSeqLen;

    /**
     * @var integer 输入文本的最大 tokens 数量。取值区间为(0, 1024]。默认值为256。
     */
    public $MaxInputSeqLen;

    /**
     * @param array $Messages 会话内容,按对话时间从旧到新在数组中排列。
     * @param string $Model 模型名称，当前固定为TestingModel
     * @param string $QueryId 会话id。
     * @param float $Temperature 超参数temperature, 该参数用于控制生成文本中重复内容。取值区间为[0.0, 2.0], 非必要不建议使用, 不合理的取值会影响效果。默认为1.0。
     * @param float $TopP 超参数top_p, 该参数用于控制生成文本的多样性。较小的"top_p"值会限制模型的选择范围，使生成的文本更加一致和确定性。较大的"top_p"值会扩大选择范围，使生成的文本更加多样化和随机。取值区间为[0.0, 1.0], 非必要不建议使用, 不合理的取值会影响效果。默认值为1.0。
     * @param float $TopK 超参数top_k,该参数用于控制生成文本的多样性和可控性，较小的"top_k"值会限制模型的选择范围，使生成的文本更加一致和确定性。较大的"top_k"值会扩大选择范围，使生成的文本更加多样化和随机。取值区间为[1, 100]，默认值 40。
     * @param float $RepetitionPenalty 重复惩罚项,该参数用于用于控制生成文本中重复内容。建议范围[1.0, 1.05]非必要不建议使用, 不合理的取值会影响效果。默认为1。
     * @param integer $OutputSeqLen 输出结果最大tokens数量。取值区间为(0, 1024]。默认值为768。
     * @param integer $MaxInputSeqLen 输入文本的最大 tokens 数量。取值区间为(0, 1024]。默认值为256。
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
        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new TextGenerationMessage();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("TopK",$param) and $param["TopK"] !== null) {
            $this->TopK = $param["TopK"];
        }

        if (array_key_exists("RepetitionPenalty",$param) and $param["RepetitionPenalty"] !== null) {
            $this->RepetitionPenalty = $param["RepetitionPenalty"];
        }

        if (array_key_exists("OutputSeqLen",$param) and $param["OutputSeqLen"] !== null) {
            $this->OutputSeqLen = $param["OutputSeqLen"];
        }

        if (array_key_exists("MaxInputSeqLen",$param) and $param["MaxInputSeqLen"] !== null) {
            $this->MaxInputSeqLen = $param["MaxInputSeqLen"];
        }
    }
}
