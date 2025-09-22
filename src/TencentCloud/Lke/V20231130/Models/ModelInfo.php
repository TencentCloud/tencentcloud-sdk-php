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
 * @method string getSource() 获取模型来源 Hunyuan：腾讯混元大模型,Industry：腾讯云行业大模型,Experience：新模型体验,Custom自定义模型
 * @method void setSource(string $Source) 设置模型来源 Hunyuan：腾讯混元大模型,Industry：腾讯云行业大模型,Experience：新模型体验,Custom自定义模型
 * @method string getIcon() 获取模型图标
 * @method void setIcon(string $Icon) 设置模型图标
 * @method boolean getIsFree() 获取是否免费
 * @method void setIsFree(boolean $IsFree) 设置是否免费
 * @method integer getInputLenLimit() 获取模型对话框可输入的上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputLenLimit(integer $InputLenLimit) 设置模型对话框可输入的上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSupportWorkflowStatus() 获取支持工作流的类型 0:模型不支持; 1: 模型支持工作流； 2： 模型支持效果不佳；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportWorkflowStatus(integer $SupportWorkflowStatus) 设置支持工作流的类型 0:模型不支持; 1: 模型支持工作流； 2： 模型支持效果不佳；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelCategory() 获取模型类别 generate：生成模型，thought：思考模型
 * @method void setModelCategory(string $ModelCategory) 设置模型类别 generate：生成模型，thought：思考模型
 * @method boolean getIsDefault() 获取是否默认模型
 * @method void setIsDefault(boolean $IsDefault) 设置是否默认模型
 * @method integer getRoleLenLimit() 获取角色提示词输入长度限制
 * @method void setRoleLenLimit(integer $RoleLenLimit) 设置角色提示词输入长度限制
 * @method boolean getIsExclusive() 获取是否专属并发模型
 * @method void setIsExclusive(boolean $IsExclusive) 设置是否专属并发模型
 * @method integer getSupportAiCallStatus() 获取模型支持智能通话效果
 * @method void setSupportAiCallStatus(integer $SupportAiCallStatus) 设置模型支持智能通话效果
 * @method integer getConcurrency() 获取专属并发数
 * @method void setConcurrency(integer $Concurrency) 设置专属并发数
 * @method array getModelTags() 获取模型标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelTags(array $ModelTags) 设置模型标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getModelParams() 获取模型超参定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelParams(array $ModelParams) 设置模型超参定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProviderName() 获取提供商名称
 * @method void setProviderName(string $ProviderName) 设置提供商名称
 * @method string getProviderAliasName() 获取提供商别名
 * @method void setProviderAliasName(string $ProviderAliasName) 设置提供商别名
 * @method string getProviderType() 获取提供商类型 Self:提供商，Custom：自定义模型提供商，Third：第三方模型提供商
 * @method void setProviderType(string $ProviderType) 设置提供商类型 Self:提供商，Custom：自定义模型提供商，Third：第三方模型提供商
 * @method boolean getIsCloseModelParams() 获取是否关闭模型超参
 * @method void setIsCloseModelParams(boolean $IsCloseModelParams) 设置是否关闭模型超参
 * @method boolean getIsDeepThinking() 获取是否支持深度思考
 * @method void setIsDeepThinking(boolean $IsDeepThinking) 设置是否支持深度思考
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
     * @var string 模型来源 Hunyuan：腾讯混元大模型,Industry：腾讯云行业大模型,Experience：新模型体验,Custom自定义模型
     */
    public $Source;

    /**
     * @var string 模型图标
     */
    public $Icon;

    /**
     * @var boolean 是否免费
     */
    public $IsFree;

    /**
     * @var integer 模型对话框可输入的上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputLenLimit;

    /**
     * @var integer 支持工作流的类型 0:模型不支持; 1: 模型支持工作流； 2： 模型支持效果不佳；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportWorkflowStatus;

    /**
     * @var string 模型类别 generate：生成模型，thought：思考模型
     */
    public $ModelCategory;

    /**
     * @var boolean 是否默认模型
     */
    public $IsDefault;

    /**
     * @var integer 角色提示词输入长度限制
     */
    public $RoleLenLimit;

    /**
     * @var boolean 是否专属并发模型
     */
    public $IsExclusive;

    /**
     * @var integer 模型支持智能通话效果
     */
    public $SupportAiCallStatus;

    /**
     * @var integer 专属并发数
     */
    public $Concurrency;

    /**
     * @var array 模型标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelTags;

    /**
     * @var array 模型超参定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelParams;

    /**
     * @var string 提供商名称
     */
    public $ProviderName;

    /**
     * @var string 提供商别名
     */
    public $ProviderAliasName;

    /**
     * @var string 提供商类型 Self:提供商，Custom：自定义模型提供商，Third：第三方模型提供商
     */
    public $ProviderType;

    /**
     * @var boolean 是否关闭模型超参
     */
    public $IsCloseModelParams;

    /**
     * @var boolean 是否支持深度思考
     */
    public $IsDeepThinking;

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
     * @param string $Source 模型来源 Hunyuan：腾讯混元大模型,Industry：腾讯云行业大模型,Experience：新模型体验,Custom自定义模型
     * @param string $Icon 模型图标
     * @param boolean $IsFree 是否免费
     * @param integer $InputLenLimit 模型对话框可输入的上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SupportWorkflowStatus 支持工作流的类型 0:模型不支持; 1: 模型支持工作流； 2： 模型支持效果不佳；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelCategory 模型类别 generate：生成模型，thought：思考模型
     * @param boolean $IsDefault 是否默认模型
     * @param integer $RoleLenLimit 角色提示词输入长度限制
     * @param boolean $IsExclusive 是否专属并发模型
     * @param integer $SupportAiCallStatus 模型支持智能通话效果
     * @param integer $Concurrency 专属并发数
     * @param array $ModelTags 模型标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ModelParams 模型超参定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProviderName 提供商名称
     * @param string $ProviderAliasName 提供商别名
     * @param string $ProviderType 提供商类型 Self:提供商，Custom：自定义模型提供商，Third：第三方模型提供商
     * @param boolean $IsCloseModelParams 是否关闭模型超参
     * @param boolean $IsDeepThinking 是否支持深度思考
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("IsFree",$param) and $param["IsFree"] !== null) {
            $this->IsFree = $param["IsFree"];
        }

        if (array_key_exists("InputLenLimit",$param) and $param["InputLenLimit"] !== null) {
            $this->InputLenLimit = $param["InputLenLimit"];
        }

        if (array_key_exists("SupportWorkflowStatus",$param) and $param["SupportWorkflowStatus"] !== null) {
            $this->SupportWorkflowStatus = $param["SupportWorkflowStatus"];
        }

        if (array_key_exists("ModelCategory",$param) and $param["ModelCategory"] !== null) {
            $this->ModelCategory = $param["ModelCategory"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("RoleLenLimit",$param) and $param["RoleLenLimit"] !== null) {
            $this->RoleLenLimit = $param["RoleLenLimit"];
        }

        if (array_key_exists("IsExclusive",$param) and $param["IsExclusive"] !== null) {
            $this->IsExclusive = $param["IsExclusive"];
        }

        if (array_key_exists("SupportAiCallStatus",$param) and $param["SupportAiCallStatus"] !== null) {
            $this->SupportAiCallStatus = $param["SupportAiCallStatus"];
        }

        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = $param["Concurrency"];
        }

        if (array_key_exists("ModelTags",$param) and $param["ModelTags"] !== null) {
            $this->ModelTags = $param["ModelTags"];
        }

        if (array_key_exists("ModelParams",$param) and $param["ModelParams"] !== null) {
            $this->ModelParams = [];
            foreach ($param["ModelParams"] as $key => $value){
                $obj = new ModelParameter();
                $obj->deserialize($value);
                array_push($this->ModelParams, $obj);
            }
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("ProviderAliasName",$param) and $param["ProviderAliasName"] !== null) {
            $this->ProviderAliasName = $param["ProviderAliasName"];
        }

        if (array_key_exists("ProviderType",$param) and $param["ProviderType"] !== null) {
            $this->ProviderType = $param["ProviderType"];
        }

        if (array_key_exists("IsCloseModelParams",$param) and $param["IsCloseModelParams"] !== null) {
            $this->IsCloseModelParams = $param["IsCloseModelParams"];
        }

        if (array_key_exists("IsDeepThinking",$param) and $param["IsDeepThinking"] !== null) {
            $this->IsDeepThinking = $param["IsDeepThinking"];
        }
    }
}
