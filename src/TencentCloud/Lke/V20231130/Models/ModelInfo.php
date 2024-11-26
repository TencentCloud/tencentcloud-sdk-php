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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型信息
 *
 * @method string getModelName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelDesc() 获取模型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelDesc(string $ModelDesc) 设置模型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAliasName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasName(string $AliasName) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceStatus() 获取资源状态 1：资源可用；2：资源已用尽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceStatus(integer $ResourceStatus) 设置资源状态 1：资源可用；2：资源已用尽
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPromptWordsLimit() 获取提示词内容字符限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptWordsLimit(string $PromptWordsLimit) 设置提示词内容字符限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelParameter getTopP() 获取通过核心采样控制内容生成的多样性，较高的Top P值会导致生成更多样的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopP(ModelParameter $TopP) 设置通过核心采样控制内容生成的多样性，较高的Top P值会导致生成更多样的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelParameter getTemperature() 获取温度控制随机性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemperature(ModelParameter $Temperature) 设置温度控制随机性
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelParameter getMaxTokens() 获取最多能生成的token数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxTokens(ModelParameter $MaxTokens) 设置最多能生成的token数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelInfo extends AbstractModel
{
    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var string 模型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelDesc;

    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasName;

    /**
     * @var integer 资源状态 1：资源可用；2：资源已用尽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceStatus;

    /**
     * @var string 提示词内容字符限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptWordsLimit;

    /**
     * @var ModelParameter 通过核心采样控制内容生成的多样性，较高的Top P值会导致生成更多样的内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopP;

    /**
     * @var ModelParameter 温度控制随机性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Temperature;

    /**
     * @var ModelParameter 最多能生成的token数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxTokens;

    /**
     * @param string $ModelName 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelDesc 模型描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AliasName 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceStatus 资源状态 1：资源可用；2：资源已用尽
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PromptWordsLimit 提示词内容字符限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelParameter $TopP 通过核心采样控制内容生成的多样性，较高的Top P值会导致生成更多样的内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelParameter $Temperature 温度控制随机性
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelParameter $MaxTokens 最多能生成的token数量
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelDesc",$param) and $param["ModelDesc"] !== null) {
            $this->ModelDesc = $param["ModelDesc"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("PromptWordsLimit",$param) and $param["PromptWordsLimit"] !== null) {
            $this->PromptWordsLimit = $param["PromptWordsLimit"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = new ModelParameter();
            $this->TopP->deserialize($param["TopP"]);
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = new ModelParameter();
            $this->Temperature->deserialize($param["Temperature"]);
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = new ModelParameter();
            $this->MaxTokens->deserialize($param["MaxTokens"]);
        }
    }
}
