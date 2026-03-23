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
 * 应用关联的mcp响应
 *
 * @method string getID() 获取绑定ID
 * @method void setID(string $ID) 设置绑定ID
 * @method boolean getNeedAuth() 获取需要认证
 * @method void setNeedAuth(boolean $NeedAuth) 设置需要认证
 * @method string getAgentCredentialID() 获取凭据ID
 * @method void setAgentCredentialID(string $AgentCredentialID) 设置凭据ID
 * @method DescribeAgentCredentialResp getAgentCredentialVO() 获取凭据详情
 * @method void setAgentCredentialVO(DescribeAgentCredentialResp $AgentCredentialVO) 设置凭据详情
 * @method DescribeMcpServerResponseVO getMcpServerVO() 获取mcp详情
 * @method void setMcpServerVO(DescribeMcpServerResponseVO $McpServerVO) 设置mcp详情
 * @method string getRelateTime() 获取关联时间
 * @method void setRelateTime(string $RelateTime) 设置关联时间
 * @method string getSSEResourceIdentifier() 获取应用为OAuth2认证时，sse模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSEResourceIdentifier(string $SSEResourceIdentifier) 设置应用为OAuth2认证时，sse模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStreamableResourceIdentifier() 获取应用为OAuth2认证时，streamable模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamableResourceIdentifier(string $StreamableResourceIdentifier) 设置应用为OAuth2认证时，streamable模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentAppID() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentAppID(string $AgentAppID) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMcpServerID() 获取mcp ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMcpServerID(string $McpServerID) 设置mcp ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentAppMcpServerVO extends AbstractModel
{
    /**
     * @var string 绑定ID
     */
    public $ID;

    /**
     * @var boolean 需要认证
     */
    public $NeedAuth;

    /**
     * @var string 凭据ID
     */
    public $AgentCredentialID;

    /**
     * @var DescribeAgentCredentialResp 凭据详情
     */
    public $AgentCredentialVO;

    /**
     * @var DescribeMcpServerResponseVO mcp详情
     */
    public $McpServerVO;

    /**
     * @var string 关联时间
     */
    public $RelateTime;

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
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentAppID;

    /**
     * @var string mcp ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $McpServerID;

    /**
     * @param string $ID 绑定ID
     * @param boolean $NeedAuth 需要认证
     * @param string $AgentCredentialID 凭据ID
     * @param DescribeAgentCredentialResp $AgentCredentialVO 凭据详情
     * @param DescribeMcpServerResponseVO $McpServerVO mcp详情
     * @param string $RelateTime 关联时间
     * @param string $SSEResourceIdentifier 应用为OAuth2认证时，sse模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StreamableResourceIdentifier 应用为OAuth2认证时，streamable模式请求mcp时的资源标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentAppID 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $McpServerID mcp ID
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

        if (array_key_exists("AgentCredentialVO",$param) and $param["AgentCredentialVO"] !== null) {
            $this->AgentCredentialVO = new DescribeAgentCredentialResp();
            $this->AgentCredentialVO->deserialize($param["AgentCredentialVO"]);
        }

        if (array_key_exists("McpServerVO",$param) and $param["McpServerVO"] !== null) {
            $this->McpServerVO = new DescribeMcpServerResponseVO();
            $this->McpServerVO->deserialize($param["McpServerVO"]);
        }

        if (array_key_exists("RelateTime",$param) and $param["RelateTime"] !== null) {
            $this->RelateTime = $param["RelateTime"];
        }

        if (array_key_exists("SSEResourceIdentifier",$param) and $param["SSEResourceIdentifier"] !== null) {
            $this->SSEResourceIdentifier = $param["SSEResourceIdentifier"];
        }

        if (array_key_exists("StreamableResourceIdentifier",$param) and $param["StreamableResourceIdentifier"] !== null) {
            $this->StreamableResourceIdentifier = $param["StreamableResourceIdentifier"];
        }

        if (array_key_exists("AgentAppID",$param) and $param["AgentAppID"] !== null) {
            $this->AgentAppID = $param["AgentAppID"];
        }

        if (array_key_exists("McpServerID",$param) and $param["McpServerID"] !== null) {
            $this->McpServerID = $param["McpServerID"];
        }
    }
}
