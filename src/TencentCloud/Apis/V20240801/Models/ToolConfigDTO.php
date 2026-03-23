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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工具级别配置
 *
 * @method string getToolName() 获取工具名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolName(string $ToolName) 设置工具名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInvokeLimitConfigStatus() 获取是否开启限流配置
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置是否开启限流配置
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取限流配置
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置限流配置
 * @method array getMcpSecurityRules() 获取绑定安全规则
 * @method void setMcpSecurityRules(array $McpSecurityRules) 设置绑定安全规则
 */
class ToolConfigDTO extends AbstractModel
{
    /**
     * @var string 工具名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolName;

    /**
     * @var boolean 是否开启限流配置
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO 限流配置
     */
    public $InvokeLimitConfig;

    /**
     * @var array 绑定安全规则
     */
    public $McpSecurityRules;

    /**
     * @param string $ToolName 工具名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InvokeLimitConfigStatus 是否开启限流配置
     * @param InvokeLimitConfigDTO $InvokeLimitConfig 限流配置
     * @param array $McpSecurityRules 绑定安全规则
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
        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("InvokeLimitConfigStatus",$param) and $param["InvokeLimitConfigStatus"] !== null) {
            $this->InvokeLimitConfigStatus = $param["InvokeLimitConfigStatus"];
        }

        if (array_key_exists("InvokeLimitConfig",$param) and $param["InvokeLimitConfig"] !== null) {
            $this->InvokeLimitConfig = new InvokeLimitConfigDTO();
            $this->InvokeLimitConfig->deserialize($param["InvokeLimitConfig"]);
        }

        if (array_key_exists("McpSecurityRules",$param) and $param["McpSecurityRules"] !== null) {
            $this->McpSecurityRules = [];
            foreach ($param["McpSecurityRules"] as $key => $value){
                $obj = new BindMcpSecurityRuleDTO();
                $obj->deserialize($value);
                array_push($this->McpSecurityRules, $obj);
            }
        }
    }
}
