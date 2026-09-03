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
 * @method string getID() 获取<p>mcp server id</p>
 * @method void setID(string $ID) 设置<p>mcp server id</p>
 * @method boolean getNeedAuth() 获取<p>是否需要鉴权（已废弃，请勿使用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeedAuth(boolean $NeedAuth) 设置<p>是否需要鉴权（已废弃，请勿使用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentCredentialID() 获取<p>凭据代填的ID（已废弃，请勿使用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentCredentialID(string $AgentCredentialID) 设置<p>凭据代填的ID（已废弃，请勿使用）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSSEResourceIdentifier() 获取<p>应用为OAuth2认证时，sse模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSEResourceIdentifier(string $SSEResourceIdentifier) 设置<p>应用为OAuth2认证时，sse模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStreamableResourceIdentifier() 获取<p>应用为OAuth2认证时，streamable模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamableResourceIdentifier(string $StreamableResourceIdentifier) 设置<p>应用为OAuth2认证时，streamable模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentAppMcpServerDTO extends AbstractModel
{
    /**
     * @var string <p>mcp server id</p>
     */
    public $ID;

    /**
     * @var boolean <p>是否需要鉴权（已废弃，请勿使用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $NeedAuth;

    /**
     * @var string <p>凭据代填的ID（已废弃，请勿使用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $AgentCredentialID;

    /**
     * @var string <p>应用为OAuth2认证时，sse模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSEResourceIdentifier;

    /**
     * @var string <p>应用为OAuth2认证时，streamable模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamableResourceIdentifier;

    /**
     * @param string $ID <p>mcp server id</p>
     * @param boolean $NeedAuth <p>是否需要鉴权（已废弃，请勿使用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentCredentialID <p>凭据代填的ID（已废弃，请勿使用）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SSEResourceIdentifier <p>应用为OAuth2认证时，sse模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StreamableResourceIdentifier <p>应用为OAuth2认证时，streamable模式请求mcp时的资源标识</p>
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
