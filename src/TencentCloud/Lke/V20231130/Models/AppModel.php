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
 * 应用模型配置
 *
 * @method string getName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取模型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置模型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContextLimit() 获取上下文指代轮次
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContextLimit(integer $ContextLimit) 设置上下文指代轮次
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAliasName() 获取模型别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasName(string $AliasName) 设置模型别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTokenBalance() 获取token余量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenBalance(float $TokenBalance) 设置token余量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUseContext() 获取是否使用上下文指代轮次
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUseContext(boolean $IsUseContext) 设置是否使用上下文指代轮次
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHistoryLimit() 获取上下文记忆轮数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHistoryLimit(integer $HistoryLimit) 设置上下文记忆轮数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsageType() 获取使用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsageType(string $UsageType) 设置使用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemperature() 获取模型温度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemperature(string $Temperature) 设置模型温度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopP() 获取模型TopP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopP(string $TopP) 设置模型TopP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceStatus() 获取模型资源状态 1：资源可用；2：资源已用尽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceStatus(integer $ResourceStatus) 设置模型资源状态 1：资源可用；2：资源已用尽
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelParams getModelParams() 获取模型参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelParams(ModelParams $ModelParams) 设置模型参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppModel extends AbstractModel
{
    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 模型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var integer 上下文指代轮次
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContextLimit;

    /**
     * @var string 模型别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasName;

    /**
     * @var float token余量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenBalance;

    /**
     * @var boolean 是否使用上下文指代轮次
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUseContext;

    /**
     * @var integer 上下文记忆轮数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HistoryLimit;

    /**
     * @var string 使用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsageType;

    /**
     * @var string 模型温度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Temperature;

    /**
     * @var string 模型TopP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopP;

    /**
     * @var integer 模型资源状态 1：资源可用；2：资源已用尽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceStatus;

    /**
     * @var ModelParams 模型参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelParams;

    /**
     * @param string $Name 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 模型描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContextLimit 上下文指代轮次
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AliasName 模型别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TokenBalance token余量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUseContext 是否使用上下文指代轮次
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HistoryLimit 上下文记忆轮数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsageType 使用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Temperature 模型温度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopP 模型TopP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceStatus 模型资源状态 1：资源可用；2：资源已用尽
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelParams $ModelParams 模型参数
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ContextLimit",$param) and $param["ContextLimit"] !== null) {
            $this->ContextLimit = $param["ContextLimit"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("TokenBalance",$param) and $param["TokenBalance"] !== null) {
            $this->TokenBalance = $param["TokenBalance"];
        }

        if (array_key_exists("IsUseContext",$param) and $param["IsUseContext"] !== null) {
            $this->IsUseContext = $param["IsUseContext"];
        }

        if (array_key_exists("HistoryLimit",$param) and $param["HistoryLimit"] !== null) {
            $this->HistoryLimit = $param["HistoryLimit"];
        }

        if (array_key_exists("UsageType",$param) and $param["UsageType"] !== null) {
            $this->UsageType = $param["UsageType"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("ModelParams",$param) and $param["ModelParams"] !== null) {
            $this->ModelParams = new ModelParams();
            $this->ModelParams->deserialize($param["ModelParams"]);
        }
    }
}
