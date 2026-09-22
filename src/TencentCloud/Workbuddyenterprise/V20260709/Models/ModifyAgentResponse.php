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
 * ModifyAgent返回参数结构体
 *
 * @method string getAgentId() 获取Agent 业务 ID
 * @method void setAgentId(string $AgentId) 设置Agent 业务 ID
 * @method string getAgentName() 获取Agent 名称
 * @method void setAgentName(string $AgentName) 设置Agent 名称
 * @method string getDescription() 获取Agent 描述
 * @method void setDescription(string $Description) 设置Agent 描述
 * @method string getAvatarUrl() 获取头像 URL
 * @method void setAvatarUrl(string $AvatarUrl) 设置头像 URL
 * @method boolean getIsDebug() 获取是否调试 Agent
 * @method void setIsDebug(boolean $IsDebug) 设置是否调试 Agent
 * @method string getCreatedTime() 获取创建时间（RFC3339）
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间（RFC3339）
 * @method string getModifiedTime() 获取更新时间（RFC3339）
 * @method void setModifiedTime(string $ModifiedTime) 设置更新时间（RFC3339）
 * @method array getRoutingSet() 获取流量路由配置（VersionId 恒为字符串，防 JS 精度丢失）
 * @method void setRoutingSet(array $RoutingSet) 设置流量路由配置（VersionId 恒为字符串，防 JS 精度丢失）
 * @method A2AConfig getA2AConfig() 获取A2A 对外互通配置与注册态（只读回显；原四个平铺字段收进结构）
 * @method void setA2AConfig(A2AConfig $A2AConfig) 设置A2A 对外互通配置与注册态（只读回显；原四个平铺字段收进结构）
 * @method string getAccountId() 获取绑定的 OneID 企业账号 ID。允许为空：未绑定的存量与新建 Agent 该字段缺省，绑定后回显绑定值
 * @method void setAccountId(string $AccountId) 设置绑定的 OneID 企业账号 ID。允许为空：未绑定的存量与新建 Agent 该字段缺省，绑定后回显绑定值
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyAgentResponse extends AbstractModel
{
    /**
     * @var string Agent 业务 ID
     */
    public $AgentId;

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
     * @var boolean 是否调试 Agent
     */
    public $IsDebug;

    /**
     * @var string 创建时间（RFC3339）
     */
    public $CreatedTime;

    /**
     * @var string 更新时间（RFC3339）
     */
    public $ModifiedTime;

    /**
     * @var array 流量路由配置（VersionId 恒为字符串，防 JS 精度丢失）
     */
    public $RoutingSet;

    /**
     * @var A2AConfig A2A 对外互通配置与注册态（只读回显；原四个平铺字段收进结构）
     */
    public $A2AConfig;

    /**
     * @var string 绑定的 OneID 企业账号 ID。允许为空：未绑定的存量与新建 Agent 该字段缺省，绑定后回显绑定值
     */
    public $AccountId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AgentId Agent 业务 ID
     * @param string $AgentName Agent 名称
     * @param string $Description Agent 描述
     * @param string $AvatarUrl 头像 URL
     * @param boolean $IsDebug 是否调试 Agent
     * @param string $CreatedTime 创建时间（RFC3339）
     * @param string $ModifiedTime 更新时间（RFC3339）
     * @param array $RoutingSet 流量路由配置（VersionId 恒为字符串，防 JS 精度丢失）
     * @param A2AConfig $A2AConfig A2A 对外互通配置与注册态（只读回显；原四个平铺字段收进结构）
     * @param string $AccountId 绑定的 OneID 企业账号 ID。允许为空：未绑定的存量与新建 Agent 该字段缺省，绑定后回显绑定值
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

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
