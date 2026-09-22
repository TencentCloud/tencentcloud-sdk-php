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
 * ModifyAgentA2AConfig返回参数结构体
 *
 * @method string getAgentId() 获取<p>Agent 业务 ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent 业务 ID</p>
 * @method string getAgentName() 获取<p>Agent 名称</p>
 * @method void setAgentName(string $AgentName) 设置<p>Agent 名称</p>
 * @method string getDescription() 获取<p>Agent 描述</p>
 * @method void setDescription(string $Description) 设置<p>Agent 描述</p>
 * @method string getAvatarUrl() 获取<p>头像 URL</p>
 * @method void setAvatarUrl(string $AvatarUrl) 设置<p>头像 URL</p>
 * @method boolean getIsDebug() 获取<p>是否调试 Agent</p>
 * @method void setIsDebug(boolean $IsDebug) 设置<p>是否调试 Agent</p>
 * @method string getCreatedTime() 获取<p>创建时间（RFC3339）</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间（RFC3339）</p>
 * @method string getModifiedTime() 获取<p>更新时间（RFC3339）</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>更新时间（RFC3339）</p>
 * @method array getRoutingSet() 获取<p>流量路由配置（VersionId 恒为字符串，防 JS 精度丢失）</p>
 * @method void setRoutingSet(array $RoutingSet) 设置<p>流量路由配置（VersionId 恒为字符串，防 JS 精度丢失）</p>
 * @method A2AConfig getA2AConfig() 获取<p>A2A 对外互通配置与注册态（只读回显；原四个平铺字段收进结构）</p>
 * @method void setA2AConfig(A2AConfig $A2AConfig) 设置<p>A2A 对外互通配置与注册态（只读回显；原四个平铺字段收进结构）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyAgentA2AConfigResponse extends AbstractModel
{
    /**
     * @var string <p>Agent 业务 ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>Agent 名称</p>
     */
    public $AgentName;

    /**
     * @var string <p>Agent 描述</p>
     */
    public $Description;

    /**
     * @var string <p>头像 URL</p>
     */
    public $AvatarUrl;

    /**
     * @var boolean <p>是否调试 Agent</p>
     */
    public $IsDebug;

    /**
     * @var string <p>创建时间（RFC3339）</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>更新时间（RFC3339）</p>
     */
    public $ModifiedTime;

    /**
     * @var array <p>流量路由配置（VersionId 恒为字符串，防 JS 精度丢失）</p>
     */
    public $RoutingSet;

    /**
     * @var A2AConfig <p>A2A 对外互通配置与注册态（只读回显；原四个平铺字段收进结构）</p>
     */
    public $A2AConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AgentId <p>Agent 业务 ID</p>
     * @param string $AgentName <p>Agent 名称</p>
     * @param string $Description <p>Agent 描述</p>
     * @param string $AvatarUrl <p>头像 URL</p>
     * @param boolean $IsDebug <p>是否调试 Agent</p>
     * @param string $CreatedTime <p>创建时间（RFC3339）</p>
     * @param string $ModifiedTime <p>更新时间（RFC3339）</p>
     * @param array $RoutingSet <p>流量路由配置（VersionId 恒为字符串，防 JS 精度丢失）</p>
     * @param A2AConfig $A2AConfig <p>A2A 对外互通配置与注册态（只读回显；原四个平铺字段收进结构）</p>
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
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

        if (array_key_exists("IsDebug",$param) and $param["IsDebug"] !== null) {
            $this->IsDebug = $param["IsDebug"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("RoutingSet",$param) and $param["RoutingSet"] !== null) {
            $this->RoutingSet = [];
            foreach ($param["RoutingSet"] as $key => $value){
                $obj = new RoutingItem();
                $obj->deserialize($value);
                array_push($this->RoutingSet, $obj);
            }
        }

        if (array_key_exists("A2AConfig",$param) and $param["A2AConfig"] !== null) {
            $this->A2AConfig = new A2AConfig();
            $this->A2AConfig->deserialize($param["A2AConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
