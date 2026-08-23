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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIAgentSkillList请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method string getAgentName() 获取Agent 名称
 * @method void setAgentName(string $AgentName) 设置Agent 名称
 * @method string getInstanceID() 获取实例 ID
 * @method void setInstanceID(string $InstanceID) 设置实例 ID
 * @method string getContainerID() 获取容器 ID
 * @method void setContainerID(string $ContainerID) 设置容器 ID
 */
class DescribeAIAgentSkillListRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var string Agent 名称
     */
    public $AgentName;

    /**
     * @var string 实例 ID
     */
    public $InstanceID;

    /**
     * @var string 容器 ID
     */
    public $ContainerID;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param string $AgentName Agent 名称
     * @param string $InstanceID 实例 ID
     * @param string $ContainerID 容器 ID
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }
    }
}
