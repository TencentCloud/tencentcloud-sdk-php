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
 * Agent 配置里面的模型定义
 *
 * @method string getModelId() 获取<p>模型唯一id</p>
 * @method void setModelId(string $ModelId) 设置<p>模型唯一id</p>
 * @method string getAlias() 获取<p>模型别名</p>
 * @method void setAlias(string $Alias) 设置<p>模型别名</p>
 * @method integer getContextWordsLimit() 获取<p>模型上下文长度字符限制</p>
 * @method void setContextWordsLimit(integer $ContextWordsLimit) 设置<p>模型上下文长度字符限制</p>
 * @method integer getInstructionsWordsLimit() 获取<p>指令长度字符限制</p>
 * @method void setInstructionsWordsLimit(integer $InstructionsWordsLimit) 设置<p>指令长度字符限制</p>
 * @method ModelParams getModelParameters() 获取<p>模型参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelParameters(ModelParams $ModelParameters) 设置<p>模型参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentModelConfig extends AbstractModel
{
    /**
     * @var string <p>模型唯一id</p>
     */
    public $ModelId;

    /**
     * @var string <p>模型别名</p>
     */
    public $Alias;

    /**
     * @var integer <p>模型上下文长度字符限制</p>
     */
    public $ContextWordsLimit;

    /**
     * @var integer <p>指令长度字符限制</p>
     */
    public $InstructionsWordsLimit;

    /**
     * @var ModelParams <p>模型参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelParameters;

    /**
     * @param string $ModelId <p>模型唯一id</p>
     * @param string $Alias <p>模型别名</p>
     * @param integer $ContextWordsLimit <p>模型上下文长度字符限制</p>
     * @param integer $InstructionsWordsLimit <p>指令长度字符限制</p>
     * @param ModelParams $ModelParameters <p>模型参数</p>
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("ContextWordsLimit",$param) and $param["ContextWordsLimit"] !== null) {
            $this->ContextWordsLimit = $param["ContextWordsLimit"];
        }

        if (array_key_exists("InstructionsWordsLimit",$param) and $param["InstructionsWordsLimit"] !== null) {
            $this->InstructionsWordsLimit = $param["InstructionsWordsLimit"];
        }

        if (array_key_exists("ModelParameters",$param) and $param["ModelParameters"] !== null) {
            $this->ModelParameters = new ModelParams();
            $this->ModelParameters->deserialize($param["ModelParameters"]);
        }
    }
}
