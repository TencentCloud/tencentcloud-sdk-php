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
 * DescribeAgentSession返回参数结构体
 *
 * @method string getSessionId() 获取会话 ID
 * @method void setSessionId(string $SessionId) 设置会话 ID
 * @method string getSessionName() 获取会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀
 * @method void setSessionName(string $SessionName) 设置会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀
 * @method string getAgentId() 获取Agent 业务 ID
 * @method void setAgentId(string $AgentId) 设置Agent 业务 ID
 * @method string getAgentName() 获取Agent 名称
 * @method void setAgentName(string $AgentName) 设置Agent 名称
 * @method string getVersionId() 获取版本 ID
 * @method void setVersionId(string $VersionId) 设置版本 ID
 * @method string getVersionName() 获取会话使用的版本名称（与 VersionId 区分：此为版本名，非 ID）
 * @method void setVersionName(string $VersionName) 设置会话使用的版本名称（与 VersionId 区分：此为版本名，非 ID）
 * @method string getStatus() 获取版本状态：DRAFT / ENABLED / DISABLED
 * @method void setStatus(string $Status) 设置版本状态：DRAFT / ENABLED / DISABLED
 * @method string getCreator() 获取创建者 Uin
 * @method void setCreator(string $Creator) 设置创建者 Uin
 * @method string getSource() 获取连接器来源：ENTERPRISE_AGENT / ASSISTANT
 * @method void setSource(string $Source) 设置连接器来源：ENTERPRISE_AGENT / ASSISTANT
 * @method array getEndpointSet() 获取可用的聊天接入点列表（详情独有）
 * @method void setEndpointSet(array $EndpointSet) 设置可用的聊天接入点列表（详情独有）
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getModifiedTime() 获取更新时间（RFC3339）
 * @method void setModifiedTime(string $ModifiedTime) 设置更新时间（RFC3339）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentSessionResponse extends AbstractModel
{
    /**
     * @var string 会话 ID
     */
    public $SessionId;

    /**
     * @var string 会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀
     */
    public $SessionName;

    /**
     * @var string Agent 业务 ID
     */
    public $AgentId;

    /**
     * @var string Agent 名称
     */
    public $AgentName;

    /**
     * @var string 版本 ID
     */
    public $VersionId;

    /**
     * @var string 会话使用的版本名称（与 VersionId 区分：此为版本名，非 ID）
     */
    public $VersionName;

    /**
     * @var string 版本状态：DRAFT / ENABLED / DISABLED
     */
    public $Status;

    /**
     * @var string 创建者 Uin
     */
    public $Creator;

    /**
     * @var string 连接器来源：ENTERPRISE_AGENT / ASSISTANT
     */
    public $Source;

    /**
     * @var array 可用的聊天接入点列表（详情独有）
     */
    public $EndpointSet;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 更新时间（RFC3339）
     */
    public $ModifiedTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SessionId 会话 ID
     * @param string $SessionName 会话名称（AgentOS 侧生成的 AI 标题 / 用户改名）；缺失时为空，调用方可兜底展示 SessionId 后缀
     * @param string $AgentId Agent 业务 ID
     * @param string $AgentName Agent 名称
     * @param string $VersionId 版本 ID
     * @param string $VersionName 会话使用的版本名称（与 VersionId 区分：此为版本名，非 ID）
     * @param string $Status 版本状态：DRAFT / ENABLED / DISABLED
     * @param string $Creator 创建者 Uin
     * @param string $Source 连接器来源：ENTERPRISE_AGENT / ASSISTANT
     * @param array $EndpointSet 可用的聊天接入点列表（详情独有）
     * @param string $CreatedTime 创建时间
     * @param string $ModifiedTime 更新时间（RFC3339）
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("EndpointSet",$param) and $param["EndpointSet"] !== null) {
            $this->EndpointSet = [];
            foreach ($param["EndpointSet"] as $key => $value){
                $obj = new ChatEndpoint();
                $obj->deserialize($value);
                array_push($this->EndpointSet, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
