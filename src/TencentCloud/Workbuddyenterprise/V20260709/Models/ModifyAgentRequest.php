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
 * ModifyAgent请求参数结构体
 *
 * @method string getAgentId() 获取Agent 业务 ID
 * @method void setAgentId(string $AgentId) 设置Agent 业务 ID
 * @method string getAgentName() 获取Agent 名称（可选，仅传递需要更新的字段）
 * @method void setAgentName(string $AgentName) 设置Agent 名称（可选，仅传递需要更新的字段）
 * @method string getDescription() 获取Agent 描述（可选）
 * @method void setDescription(string $Description) 设置Agent 描述（可选）
 * @method string getAvatarUrl() 获取头像 URL（可选）
 * @method void setAvatarUrl(string $AvatarUrl) 设置头像 URL（可选）
 */
class ModifyAgentRequest extends AbstractModel
{
    /**
     * @var string Agent 业务 ID
     */
    public $AgentId;

    /**
     * @var string Agent 名称（可选，仅传递需要更新的字段）
     */
    public $AgentName;

    /**
     * @var string Agent 描述（可选）
     */
    public $Description;

    /**
     * @var string 头像 URL（可选）
     */
    public $AvatarUrl;

    /**
     * @param string $AgentId Agent 业务 ID
     * @param string $AgentName Agent 名称（可选，仅传递需要更新的字段）
     * @param string $Description Agent 描述（可选）
     * @param string $AvatarUrl 头像 URL（可选）
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
    }
}
