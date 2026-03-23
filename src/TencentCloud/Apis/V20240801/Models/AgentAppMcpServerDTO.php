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
 * 关联的mcp服务配置
 *
 * @method string getID() 获取mcp server id
 * @method void setID(string $ID) 设置mcp server id
 * @method boolean getNeedAuth() 获取是否需要鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeedAuth(boolean $NeedAuth) 设置是否需要鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentCredentialID() 获取凭据代填的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentCredentialID(string $AgentCredentialID) 设置凭据代填的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSSEResourceIdentifier() 获取应用为OAuth2认证时，sse模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSEResourceIdentifier(string $SSEResourceIdentifier) 设置应用为OAuth2认证时，sse模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStreamableResourceIdentifier() 获取应用为OAuth2认证时，streamable模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamableResourceIdentifier(string $StreamableResourceIdentifier) 设置应用为OAuth2认证时，streamable模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentAppMcpServerDTO extends AbstractModel
{
    /**
     * @var string mcp server id
     */
    public $ID;

    /**
     * @var boolean 是否需要鉴权
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeedAuth;

    /**
     * @var string 凭据代填的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentCredentialID;

    /**
     * @var string 应用为OAuth2认证时，sse模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSEResourceIdentifier;

    /**
     * @var string 应用为OAuth2认证时，streamable模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamableResourceIdentifier;

    /**
     * @param string $ID mcp server id
     * @param boolean $NeedAuth 是否需要鉴权
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentCredentialID 凭据代填的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SSEResourceIdentifier 应用为OAuth2认证时，sse模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StreamableResourceIdentifier 应用为OAuth2认证时，streamable模式请求mcp时的资源标识
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("NeedAuth",$param) and $param["NeedAuth"] !== null) {
            $this->NeedAuth = $param["NeedAuth"];
        }

        if (array_key_exists("AgentCredentialID",$param) and $param["AgentCredentialID"] !== null) {
            $this->AgentCredentialID = $param["AgentCredentialID"];
        }

        if (array_key_exists("SSEResourceIdentifier",$param) and $param["SSEResourceIdentifier"] !== null) {
            $this->SSEResourceIdentifier = $param["SSEResourceIdentifier"];
        }

        if (array_key_exists("StreamableResourceIdentifier",$param) and $param["StreamableResourceIdentifier"] !== null) {
            $this->StreamableResourceIdentifier = $param["StreamableResourceIdentifier"];
        }
    }
}
