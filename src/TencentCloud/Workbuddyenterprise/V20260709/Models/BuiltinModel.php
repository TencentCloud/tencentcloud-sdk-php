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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内置模型信息
 *
 * @method string getModelId() 获取模型唯一标识
 * @method void setModelId(string $ModelId) 设置模型唯一标识
 * @method string getName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVendor() 获取供应商，如 TENCENT、OPENAI、ANTHROPIC、DEEPSEEK 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVendor(string $Vendor) 设置供应商，如 TENCENT、OPENAI、ANTHROPIC、DEEPSEEK 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxOutputTokens() 获取最大输出 Token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxOutputTokens(integer $MaxOutputTokens) 设置最大输出 Token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxInputTokens() 获取最大输入 Token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxInputTokens(integer $MaxInputTokens) 设置最大输入 Token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportsToolCall() 获取是否支持函数调用（Tool Call）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportsToolCall(boolean $SupportsToolCall) 设置是否支持函数调用（Tool Call）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportsImages() 获取是否支持视觉（图片输入）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportsImages(boolean $SupportsImages) 设置是否支持视觉（图片输入）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescriptionZh() 获取模型中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptionZh(string $DescriptionZh) 设置模型中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescriptionEn() 获取模型英文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptionEn(string $DescriptionEn) 设置模型英文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取模型标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置模型标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClients() 获取支持的客户端列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClients(array $Clients) 设置支持的客户端列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceEndpoint() 获取服务接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceEndpoint(string $ServiceEndpoint) 设置服务接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态：ENABLED（已启用）/ DISABLED（已停用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态：ENABLED（已启用）/ DISABLED（已停用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAgentCount() 获取本企业内绑定该模型的 Agent 数（过滤软删除 Agent/版本与调试 Agent）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentCount(integer $AgentCount) 设置本企业内绑定该模型的 Agent 数（过滤软删除 Agent/版本与调试 Agent）
注意：此字段可能返回 null，表示取不到有效值。
 */
class BuiltinModel extends AbstractModel
{
    /**
     * @var string 模型唯一标识
     */
    public $ModelId;

    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 供应商，如 TENCENT、OPENAI、ANTHROPIC、DEEPSEEK 等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vendor;

    /**
     * @var integer 最大输出 Token 数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxOutputTokens;

    /**
     * @var integer 最大输入 Token 数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxInputTokens;

    /**
     * @var boolean 是否支持函数调用（Tool Call）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportsToolCall;

    /**
     * @var boolean 是否支持视觉（图片输入）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportsImages;

    /**
     * @var string 模型中文描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescriptionZh;

    /**
     * @var string 模型英文描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescriptionEn;

    /**
     * @var array 模型标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 支持的客户端列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Clients;

    /**
     * @var string 服务接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceEndpoint;

    /**
     * @var string 状态：ENABLED（已启用）/ DISABLED（已停用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 本企业内绑定该模型的 Agent 数（过滤软删除 Agent/版本与调试 Agent）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentCount;

    /**
     * @param string $ModelId 模型唯一标识
     * @param string $Name 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vendor 供应商，如 TENCENT、OPENAI、ANTHROPIC、DEEPSEEK 等
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxOutputTokens 最大输出 Token 数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxInputTokens 最大输入 Token 数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportsToolCall 是否支持函数调用（Tool Call）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportsImages 是否支持视觉（图片输入）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DescriptionZh 模型中文描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DescriptionEn 模型英文描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 模型标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Clients 支持的客户端列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceEndpoint 服务接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态：ENABLED（已启用）/ DISABLED（已停用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AgentCount 本企业内绑定该模型的 Agent 数（过滤软删除 Agent/版本与调试 Agent）
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("MaxOutputTokens",$param) and $param["MaxOutputTokens"] !== null) {
            $this->MaxOutputTokens = $param["MaxOutputTokens"];
        }

        if (array_key_exists("MaxInputTokens",$param) and $param["MaxInputTokens"] !== null) {
            $this->MaxInputTokens = $param["MaxInputTokens"];
        }

        if (array_key_exists("SupportsToolCall",$param) and $param["SupportsToolCall"] !== null) {
            $this->SupportsToolCall = $param["SupportsToolCall"];
        }

        if (array_key_exists("SupportsImages",$param) and $param["SupportsImages"] !== null) {
            $this->SupportsImages = $param["SupportsImages"];
        }

        if (array_key_exists("DescriptionZh",$param) and $param["DescriptionZh"] !== null) {
            $this->DescriptionZh = $param["DescriptionZh"];
        }

        if (array_key_exists("DescriptionEn",$param) and $param["DescriptionEn"] !== null) {
            $this->DescriptionEn = $param["DescriptionEn"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Clients",$param) and $param["Clients"] !== null) {
            $this->Clients = $param["Clients"];
        }

        if (array_key_exists("ServiceEndpoint",$param) and $param["ServiceEndpoint"] !== null) {
            $this->ServiceEndpoint = $param["ServiceEndpoint"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AgentCount",$param) and $param["AgentCount"] !== null) {
            $this->AgentCount = $param["AgentCount"];
        }
    }
}
