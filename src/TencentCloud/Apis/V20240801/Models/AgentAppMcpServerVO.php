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
 * @method string getID() 获取<p>绑定ID</p>
 * @method void setID(string $ID) 设置<p>绑定ID</p>
 * @method boolean getNeedAuth() 获取<p>需要认证</p>
 * @method void setNeedAuth(boolean $NeedAuth) 设置<p>需要认证</p>
 * @method string getAgentCredentialID() 获取<p>凭据ID</p>
 * @method void setAgentCredentialID(string $AgentCredentialID) 设置<p>凭据ID</p>
 * @method DescribeAgentCredentialResp getAgentCredentialVO() 获取<p>凭据详情</p>
 * @method void setAgentCredentialVO(DescribeAgentCredentialResp $AgentCredentialVO) 设置<p>凭据详情</p>
 * @method DescribeMcpServerResponseVO getMcpServerVO() 获取<p>mcp详情</p>
 * @method void setMcpServerVO(DescribeMcpServerResponseVO $McpServerVO) 设置<p>mcp详情</p>
 * @method string getRelateTime() 获取<p>关联时间</p>
 * @method void setRelateTime(string $RelateTime) 设置<p>关联时间</p>
 * @method string getSSEResourceIdentifier() 获取<p>应用为OAuth2认证时，sse模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSEResourceIdentifier(string $SSEResourceIdentifier) 设置<p>应用为OAuth2认证时，sse模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStreamableResourceIdentifier() 获取<p>应用为OAuth2认证时，streamable模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamableResourceIdentifier(string $StreamableResourceIdentifier) 设置<p>应用为OAuth2认证时，streamable模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentAppID() 获取<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentAppID(string $AgentAppID) 设置<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMcpServerID() 获取<p>mcp ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMcpServerID(string $McpServerID) 设置<p>mcp ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeAgentAppResp getAgentAppVO() 获取<p>应用</p>
 * @method void setAgentAppVO(DescribeAgentAppResp $AgentAppVO) 设置<p>应用</p>
 */
class AgentAppMcpServerVO extends AbstractModel
{
    /**
     * @var string <p>绑定ID</p>
     */
    public $ID;

    /**
     * @var boolean <p>需要认证</p>
     */
    public $NeedAuth;

    /**
     * @var string <p>凭据ID</p>
     */
    public $AgentCredentialID;

    /**
     * @var DescribeAgentCredentialResp <p>凭据详情</p>
     */
    public $AgentCredentialVO;

    /**
     * @var DescribeMcpServerResponseVO <p>mcp详情</p>
     */
    public $McpServerVO;

    /**
     * @var string <p>关联时间</p>
     */
    public $RelateTime;

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
     * @var string <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentAppID;

    /**
     * @var string <p>mcp ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $McpServerID;

    /**
     * @var DescribeAgentAppResp <p>应用</p>
     */
    public $AgentAppVO;

    /**
     * @param string $ID <p>绑定ID</p>
     * @param boolean $NeedAuth <p>需要认证</p>
     * @param string $AgentCredentialID <p>凭据ID</p>
     * @param DescribeAgentCredentialResp $AgentCredentialVO <p>凭据详情</p>
     * @param DescribeMcpServerResponseVO $McpServerVO <p>mcp详情</p>
     * @param string $RelateTime <p>关联时间</p>
     * @param string $SSEResourceIdentifier <p>应用为OAuth2认证时，sse模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StreamableResourceIdentifier <p>应用为OAuth2认证时，streamable模式请求mcp时的资源标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentAppID <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $McpServerID <p>mcp ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeAgentAppResp $AgentAppVO <p>应用</p>
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

        if (array_key_exists("AgentAppVO",$param) and $param["AgentAppVO"] !== null) {
            $this->AgentAppVO = new DescribeAgentAppResp();
            $this->AgentAppVO->deserialize($param["AgentAppVO"]);
        }
    }
}
