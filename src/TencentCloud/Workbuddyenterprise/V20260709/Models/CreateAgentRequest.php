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
 * CreateAgent请求参数结构体
 *
 * @method string getAgentName() 获取Agent 名称
 * @method void setAgentName(string $AgentName) 设置Agent 名称
 * @method string getDescription() 获取Agent 描述
 * @method void setDescription(string $Description) 设置Agent 描述
 * @method string getAvatarUrl() 获取头像 URL
 * @method void setAvatarUrl(string $AvatarUrl) 设置头像 URL
 * @method string getModel() 获取模型标识
 * @method void setModel(string $Model) 设置模型标识
 * @method string getManifest() 获取Manifest v2.0 原文（JSON 字符串），作为 default 版本初始内容。ConnectorSet 非空时 Manifest 不可为空，否则返回 InvalidParameter
 * @method void setManifest(string $Manifest) 设置Manifest v2.0 原文（JSON 字符串），作为 default 版本初始内容。ConnectorSet 非空时 Manifest 不可为空，否则返回 InvalidParameter
 * @method array getConnectorSet() 获取该 Agent 最终绑定的连接器集合（全量覆盖语义）：缺省 = 不绑定连接器；非空 = 物化为 manifest v2 mcp_servers 网关条目。ConnectorSet 非空时 Manifest 不可为空，否则返回 InvalidParameter
 * @method void setConnectorSet(array $ConnectorSet) 设置该 Agent 最终绑定的连接器集合（全量覆盖语义）：缺省 = 不绑定连接器；非空 = 物化为 manifest v2 mcp_servers 网关条目。ConnectorSet 非空时 Manifest 不可为空，否则返回 InvalidParameter
 * @method string getAccountId() 获取绑定的 OneID 企业账号 ID。非空时必须是当前主账号已在企业授权表（t_managed_agent_enterprise_authorization）中授权的租户，否则返回 UnauthorizedOperation.AccountNotAuthorized。绑定后不可修改。TrimSpace 后长度 1~64 字符
 * @method void setAccountId(string $AccountId) 设置绑定的 OneID 企业账号 ID。非空时必须是当前主账号已在企业授权表（t_managed_agent_enterprise_authorization）中授权的租户，否则返回 UnauthorizedOperation.AccountNotAuthorized。绑定后不可修改。TrimSpace 后长度 1~64 字符
 */
class CreateAgentRequest extends AbstractModel
{
    /**
     * @var string Agent 名称
     */
    public $AgentName;

    /**
     * @var string Agent 描述
     */
    public $Description;

    /**
     * @var string 头像 URL
     */
    public $AvatarUrl;

    /**
     * @var string 模型标识
     */
    public $Model;

    /**
     * @var string Manifest v2.0 原文（JSON 字符串），作为 default 版本初始内容。ConnectorSet 非空时 Manifest 不可为空，否则返回 InvalidParameter
     */
    public $Manifest;

    /**
     * @var array 该 Agent 最终绑定的连接器集合（全量覆盖语义）：缺省 = 不绑定连接器；非空 = 物化为 manifest v2 mcp_servers 网关条目。ConnectorSet 非空时 Manifest 不可为空，否则返回 InvalidParameter
     */
    public $ConnectorSet;

    /**
     * @var string 绑定的 OneID 企业账号 ID。非空时必须是当前主账号已在企业授权表（t_managed_agent_enterprise_authorization）中授权的租户，否则返回 UnauthorizedOperation.AccountNotAuthorized。绑定后不可修改。TrimSpace 后长度 1~64 字符
     */
    public $AccountId;

    /**
     * @param string $AgentName Agent 名称
     * @param string $Description Agent 描述
     * @param string $AvatarUrl 头像 URL
     * @param string $Model 模型标识
     * @param string $Manifest Manifest v2.0 原文（JSON 字符串），作为 default 版本初始内容。ConnectorSet 非空时 Manifest 不可为空，否则返回 InvalidParameter
     * @param array $ConnectorSet 该 Agent 最终绑定的连接器集合（全量覆盖语义）：缺省 = 不绑定连接器；非空 = 物化为 manifest v2 mcp_servers 网关条目。ConnectorSet 非空时 Manifest 不可为空，否则返回 InvalidParameter
     * @param string $AccountId 绑定的 OneID 企业账号 ID。非空时必须是当前主账号已在企业授权表（t_managed_agent_enterprise_authorization）中授权的租户，否则返回 UnauthorizedOperation.AccountNotAuthorized。绑定后不可修改。TrimSpace 后长度 1~64 字符
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
        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AvatarUrl",$param) and $param["AvatarUrl"] !== null) {
            $this->AvatarUrl = $param["AvatarUrl"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Manifest",$param) and $param["Manifest"] !== null) {
            $this->Manifest = $param["Manifest"];
        }

        if (array_key_exists("ConnectorSet",$param) and $param["ConnectorSet"] !== null) {
            $this->ConnectorSet = [];
            foreach ($param["ConnectorSet"] as $key => $value){
                $obj = new ConnectorRefInput();
                $obj->deserialize($value);
                array_push($this->ConnectorSet, $obj);
            }
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }
    }
}
