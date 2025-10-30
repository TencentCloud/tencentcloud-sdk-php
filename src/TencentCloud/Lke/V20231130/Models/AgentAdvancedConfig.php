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
 * Agent高级设置
 *
 * @method boolean getEnableClarification() 获取是否开启澄清询问
 * @method void setEnableClarification(boolean $EnableClarification) 设置是否开启澄清询问
 * @method integer getThinkingMode() 获取思考模式，0为效果优先，1为速度优先
 * @method void setThinkingMode(integer $ThinkingMode) 设置思考模式，0为效果优先，1为速度优先
 * @method integer getMaxReasoningRound() 获取最大推理轮数
 * @method void setMaxReasoningRound(integer $MaxReasoningRound) 设置最大推理轮数
 * @method integer getHistoryLimit() 获取上下文轮数
 * @method void setHistoryLimit(integer $HistoryLimit) 设置上下文轮数
 * @method boolean getEnableStructuredOutput() 获取是否开启结构化输出
 * @method void setEnableStructuredOutput(boolean $EnableStructuredOutput) 设置是否开启结构化输出
 * @method StructuredOutputConfig getStructuredOutputConfig() 获取结构化输出配置
 * @method void setStructuredOutputConfig(StructuredOutputConfig $StructuredOutputConfig) 设置结构化输出配置
 */
class AgentAdvancedConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启澄清询问
     */
    public $EnableClarification;

    /**
     * @var integer 思考模式，0为效果优先，1为速度优先
     */
    public $ThinkingMode;

    /**
     * @var integer 最大推理轮数
     */
    public $MaxReasoningRound;

    /**
     * @var integer 上下文轮数
     */
    public $HistoryLimit;

    /**
     * @var boolean 是否开启结构化输出
     */
    public $EnableStructuredOutput;

    /**
     * @var StructuredOutputConfig 结构化输出配置
     */
    public $StructuredOutputConfig;

    /**
     * @param boolean $EnableClarification 是否开启澄清询问
     * @param integer $ThinkingMode 思考模式，0为效果优先，1为速度优先
     * @param integer $MaxReasoningRound 最大推理轮数
     * @param integer $HistoryLimit 上下文轮数
     * @param boolean $EnableStructuredOutput 是否开启结构化输出
     * @param StructuredOutputConfig $StructuredOutputConfig 结构化输出配置
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
        if (array_key_exists("EnableClarification",$param) and $param["EnableClarification"] !== null) {
            $this->EnableClarification = $param["EnableClarification"];
        }

        if (array_key_exists("ThinkingMode",$param) and $param["ThinkingMode"] !== null) {
            $this->ThinkingMode = $param["ThinkingMode"];
        }

        if (array_key_exists("MaxReasoningRound",$param) and $param["MaxReasoningRound"] !== null) {
            $this->MaxReasoningRound = $param["MaxReasoningRound"];
        }

        if (array_key_exists("HistoryLimit",$param) and $param["HistoryLimit"] !== null) {
            $this->HistoryLimit = $param["HistoryLimit"];
        }

        if (array_key_exists("EnableStructuredOutput",$param) and $param["EnableStructuredOutput"] !== null) {
            $this->EnableStructuredOutput = $param["EnableStructuredOutput"];
        }

        if (array_key_exists("StructuredOutputConfig",$param) and $param["StructuredOutputConfig"] !== null) {
            $this->StructuredOutputConfig = new StructuredOutputConfig();
            $this->StructuredOutputConfig->deserialize($param["StructuredOutputConfig"]);
        }
    }
}
