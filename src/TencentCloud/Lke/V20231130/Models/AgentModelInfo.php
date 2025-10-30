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
 * Agent 配置里面的模型定义
 *
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method string getModelAliasName() 获取模型别名
 * @method void setModelAliasName(string $ModelAliasName) 设置模型别名
 * @method float getTemperature() 获取模型温度
 * @method void setTemperature(float $Temperature) 设置模型温度
 * @method float getTopP() 获取模型TopP
 * @method void setTopP(float $TopP) 设置模型TopP
 * @method boolean getIsEnabled() 获取模型是否可用
 * @method void setIsEnabled(boolean $IsEnabled) 设置模型是否可用
 * @method integer getHistoryLimit() 获取对话历史条数限制
 * @method void setHistoryLimit(integer $HistoryLimit) 设置对话历史条数限制
 * @method string getModelContextWordsLimit() 获取模型上下文长度字符限制
 * @method void setModelContextWordsLimit(string $ModelContextWordsLimit) 设置模型上下文长度字符限制
 * @method integer getInstructionsWordsLimit() 获取指令长度字符限制
 * @method void setInstructionsWordsLimit(integer $InstructionsWordsLimit) 设置指令长度字符限制
 * @method integer getMaxReasoningRound() 获取单次会话最大推理轮数
 * @method void setMaxReasoningRound(integer $MaxReasoningRound) 设置单次会话最大推理轮数
 * @method ModelParams getModelParams() 获取模型参数
 * @method void setModelParams(ModelParams $ModelParams) 设置模型参数
 */
class AgentModelInfo extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var string 模型别名
     */
    public $ModelAliasName;

    /**
     * @var float 模型温度
     */
    public $Temperature;

    /**
     * @var float 模型TopP
     */
    public $TopP;

    /**
     * @var boolean 模型是否可用
     */
    public $IsEnabled;

    /**
     * @var integer 对话历史条数限制
     */
    public $HistoryLimit;

    /**
     * @var string 模型上下文长度字符限制
     */
    public $ModelContextWordsLimit;

    /**
     * @var integer 指令长度字符限制
     */
    public $InstructionsWordsLimit;

    /**
     * @var integer 单次会话最大推理轮数
     */
    public $MaxReasoningRound;

    /**
     * @var ModelParams 模型参数
     */
    public $ModelParams;

    /**
     * @param string $ModelName 模型名称
     * @param string $ModelAliasName 模型别名
     * @param float $Temperature 模型温度
     * @param float $TopP 模型TopP
     * @param boolean $IsEnabled 模型是否可用
     * @param integer $HistoryLimit 对话历史条数限制
     * @param string $ModelContextWordsLimit 模型上下文长度字符限制
     * @param integer $InstructionsWordsLimit 指令长度字符限制
     * @param integer $MaxReasoningRound 单次会话最大推理轮数
     * @param ModelParams $ModelParams 模型参数
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelAliasName",$param) and $param["ModelAliasName"] !== null) {
            $this->ModelAliasName = $param["ModelAliasName"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("HistoryLimit",$param) and $param["HistoryLimit"] !== null) {
            $this->HistoryLimit = $param["HistoryLimit"];
        }

        if (array_key_exists("ModelContextWordsLimit",$param) and $param["ModelContextWordsLimit"] !== null) {
            $this->ModelContextWordsLimit = $param["ModelContextWordsLimit"];
        }

        if (array_key_exists("InstructionsWordsLimit",$param) and $param["InstructionsWordsLimit"] !== null) {
            $this->InstructionsWordsLimit = $param["InstructionsWordsLimit"];
        }

        if (array_key_exists("MaxReasoningRound",$param) and $param["MaxReasoningRound"] !== null) {
            $this->MaxReasoningRound = $param["MaxReasoningRound"];
        }

        if (array_key_exists("ModelParams",$param) and $param["ModelParams"] !== null) {
            $this->ModelParams = new ModelParams();
            $this->ModelParams->deserialize($param["ModelParams"]);
        }
    }
}
