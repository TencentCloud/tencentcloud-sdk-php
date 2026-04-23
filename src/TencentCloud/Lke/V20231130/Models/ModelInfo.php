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
 * @method string getModelName() 获取<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelDesc() 获取<p>模型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelDesc(string $ModelDesc) 设置<p>模型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAliasName() 获取<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasName(string $AliasName) 设置<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceStatus() 获取<p>资源状态 1：资源可用；2：资源已用尽</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceStatus(integer $ResourceStatus) 设置<p>资源状态 1：资源可用；2：资源已用尽</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPromptWordsLimit() 获取<p>提示词内容字符限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromptWordsLimit(string $PromptWordsLimit) 设置<p>提示词内容字符限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelParameter getTopP() 获取<p>通过核心采样控制内容生成的多样性，较高的Top P值会导致生成更多样的内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopP(ModelParameter $TopP) 设置<p>通过核心采样控制内容生成的多样性，较高的Top P值会导致生成更多样的内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelParameter getTemperature() 获取<p>温度控制随机性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemperature(ModelParameter $Temperature) 设置<p>温度控制随机性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelParameter getMaxTokens() 获取<p>最多能生成的token数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxTokens(ModelParameter $MaxTokens) 设置<p>最多能生成的token数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取<p>模型来源 Hunyuan：腾讯混元大模型,Industry：腾讯云行业大模型,Experience：新模型体验,Custom自定义模型</p>
 * @method void setSource(string $Source) 设置<p>模型来源 Hunyuan：腾讯混元大模型,Industry：腾讯云行业大模型,Experience：新模型体验,Custom自定义模型</p>
 * @method string getIcon() 获取<p>模型图标</p>
 * @method void setIcon(string $Icon) 设置<p>模型图标</p>
 * @method boolean getIsFree() 获取<p>是否免费</p>
 * @method void setIsFree(boolean $IsFree) 设置<p>是否免费</p>
 * @method integer getInputLenLimit() 获取<p>模型对话框可输入的上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputLenLimit(integer $InputLenLimit) 设置<p>模型对话框可输入的上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSupportWorkflowStatus() 获取<p>支持工作流的类型 0:模型不支持; 1: 模型支持工作流； 2： 模型支持效果不佳；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportWorkflowStatus(integer $SupportWorkflowStatus) 设置<p>支持工作流的类型 0:模型不支持; 1: 模型支持工作流； 2： 模型支持效果不佳；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelCategory() 获取<p>模型类别 generate：生成模型，thought：思考模型</p>
 * @method void setModelCategory(string $ModelCategory) 设置<p>模型类别 generate：生成模型，thought：思考模型</p>
 * @method boolean getIsDefault() 获取<p>是否默认模型</p>
 * @method void setIsDefault(boolean $IsDefault) 设置<p>是否默认模型</p>
 * @method integer getRoleLenLimit() 获取<p>角色提示词输入长度限制</p>
 * @method void setRoleLenLimit(integer $RoleLenLimit) 设置<p>角色提示词输入长度限制</p>
 * @method boolean getIsExclusive() 获取<p>是否专属并发模型</p>
 * @method void setIsExclusive(boolean $IsExclusive) 设置<p>是否专属并发模型</p>
 * @method integer getSupportAiCallStatus() 获取<p>模型支持智能通话效果</p><p>枚举值：</p><ul><li>0： 模型不支持</li><li>1： 模型支持ai通话</li><li>2： 模型ai通话支持效果不佳</li></ul>
 * @method void setSupportAiCallStatus(integer $SupportAiCallStatus) 设置<p>模型支持智能通话效果</p><p>枚举值：</p><ul><li>0： 模型不支持</li><li>1： 模型支持ai通话</li><li>2： 模型ai通话支持效果不佳</li></ul>
 * @method integer getConcurrency() 获取<p>专属并发数</p>
 * @method void setConcurrency(integer $Concurrency) 设置<p>专属并发数</p>
 * @method array getModelTags() 获取<p>模型标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelTags(array $ModelTags) 设置<p>模型标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getModelParams() 获取<p>模型超参定义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelParams(array $ModelParams) 设置<p>模型超参定义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProviderName() 获取<p>提供商名称</p>
 * @method void setProviderName(string $ProviderName) 设置<p>提供商名称</p>
 * @method string getProviderAliasName() 获取<p>提供商别名</p>
 * @method void setProviderAliasName(string $ProviderAliasName) 设置<p>提供商别名</p>
 * @method string getProviderType() 获取<p>提供商类型 Self:提供商，Custom：自定义模型提供商，Third：第三方模型提供商</p>
 * @method void setProviderType(string $ProviderType) 设置<p>提供商类型 Self:提供商，Custom：自定义模型提供商，Third：第三方模型提供商</p>
 * @method boolean getIsCloseModelParams() 获取<p>是否关闭模型超参</p>
 * @method void setIsCloseModelParams(boolean $IsCloseModelParams) 设置<p>是否关闭模型超参</p>
 * @method boolean getIsDeepThinking() 获取<p>是否支持深度思考</p>
 * @method void setIsDeepThinking(boolean $IsDeepThinking) 设置<p>是否支持深度思考</p>
 */
class ModelInfo extends AbstractModel
{
    /**
     * @var string <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var string <p>模型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelDesc;

    /**
     * @var string <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasName;

    /**
     * @var integer <p>资源状态 1：资源可用；2：资源已用尽</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceStatus;

    /**
     * @var string <p>提示词内容字符限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromptWordsLimit;

    /**
     * @var ModelParameter <p>通过核心采样控制内容生成的多样性，较高的Top P值会导致生成更多样的内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopP;

    /**
     * @var ModelParameter <p>温度控制随机性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Temperature;

    /**
     * @var ModelParameter <p>最多能生成的token数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxTokens;

    /**
     * @var string <p>模型来源 Hunyuan：腾讯混元大模型,Industry：腾讯云行业大模型,Experience：新模型体验,Custom自定义模型</p>
     */
    public $Source;

    /**
     * @var string <p>模型图标</p>
     */
    public $Icon;

    /**
     * @var boolean <p>是否免费</p>
     */
    public $IsFree;

    /**
     * @var integer <p>模型对话框可输入的上限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputLenLimit;

    /**
     * @var integer <p>支持工作流的类型 0:模型不支持; 1: 模型支持工作流； 2： 模型支持效果不佳；</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportWorkflowStatus;

    /**
     * @var string <p>模型类别 generate：生成模型，thought：思考模型</p>
     */
    public $ModelCategory;

    /**
     * @var boolean <p>是否默认模型</p>
     */
    public $IsDefault;

    /**
     * @var integer <p>角色提示词输入长度限制</p>
     */
    public $RoleLenLimit;

    /**
     * @var boolean <p>是否专属并发模型</p>
     */
    public $IsExclusive;

    /**
     * @var integer <p>模型支持智能通话效果</p><p>枚举值：</p><ul><li>0： 模型不支持</li><li>1： 模型支持ai通话</li><li>2： 模型ai通话支持效果不佳</li></ul>
     */
    public $SupportAiCallStatus;

    /**
     * @var integer <p>专属并发数</p>
     */
    public $Concurrency;

    /**
     * @var array <p>模型标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelTags;

    /**
     * @var array <p>模型超参定义</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelParams;

    /**
     * @var string <p>提供商名称</p>
     */
    public $ProviderName;

    /**
     * @var string <p>提供商别名</p>
     */
    public $ProviderAliasName;

    /**
     * @var string <p>提供商类型 Self:提供商，Custom：自定义模型提供商，Third：第三方模型提供商</p>
     */
    public $ProviderType;

    /**
     * @var boolean <p>是否关闭模型超参</p>
     */
    public $IsCloseModelParams;

    /**
     * @var boolean <p>是否支持深度思考</p>
     */
    public $IsDeepThinking;

    /**
     * @param string $ModelName <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelDesc <p>模型描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AliasName <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceStatus <p>资源状态 1：资源可用；2：资源已用尽</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PromptWordsLimit <p>提示词内容字符限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelParameter $TopP <p>通过核心采样控制内容生成的多样性，较高的Top P值会导致生成更多样的内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelParameter $Temperature <p>温度控制随机性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelParameter $MaxTokens <p>最多能生成的token数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source <p>模型来源 Hunyuan：腾讯混元大模型,Industry：腾讯云行业大模型,Experience：新模型体验,Custom自定义模型</p>
     * @param string $Icon <p>模型图标</p>
     * @param boolean $IsFree <p>是否免费</p>
     * @param integer $InputLenLimit <p>模型对话框可输入的上限</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SupportWorkflowStatus <p>支持工作流的类型 0:模型不支持; 1: 模型支持工作流； 2： 模型支持效果不佳；</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelCategory <p>模型类别 generate：生成模型，thought：思考模型</p>
     * @param boolean $IsDefault <p>是否默认模型</p>
     * @param integer $RoleLenLimit <p>角色提示词输入长度限制</p>
     * @param boolean $IsExclusive <p>是否专属并发模型</p>
     * @param integer $SupportAiCallStatus <p>模型支持智能通话效果</p><p>枚举值：</p><ul><li>0： 模型不支持</li><li>1： 模型支持ai通话</li><li>2： 模型ai通话支持效果不佳</li></ul>
     * @param integer $Concurrency <p>专属并发数</p>
     * @param array $ModelTags <p>模型标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ModelParams <p>模型超参定义</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProviderName <p>提供商名称</p>
     * @param string $ProviderAliasName <p>提供商别名</p>
     * @param string $ProviderType <p>提供商类型 Self:提供商，Custom：自定义模型提供商，Third：第三方模型提供商</p>
     * @param boolean $IsCloseModelParams <p>是否关闭模型超参</p>
     * @param boolean $IsDeepThinking <p>是否支持深度思考</p>
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
