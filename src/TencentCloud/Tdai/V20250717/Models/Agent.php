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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体
 *
 * @method string getAgentId() 获取智能体Id
 * @method void setAgentId(string $AgentId) 设置智能体Id
 * @method string getAgentName() 获取智能体名称
 * @method void setAgentName(string $AgentName) 设置智能体名称
 * @method string getAgentInternalName() 获取智能体类型
 * @method void setAgentInternalName(string $AgentInternalName) 设置智能体类型
 * @method string getAgentStatus() 获取智能体状态
 * @method void setAgentStatus(string $AgentStatus) 设置智能体状态
 * @method string getDefaultVersion() 获取默认版本
 * @method void setDefaultVersion(string $DefaultVersion) 设置默认版本
 * @method string getAgentType() 获取智能体模式
 * @method void setAgentType(string $AgentType) 设置智能体模式
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getCreator() 获取创建者
 * @method void setCreator(string $Creator) 设置创建者
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdater() 获取更新者
 * @method void setUpdater(string $Updater) 设置更新者
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class Agent extends AbstractModel
{
    /**
     * @var string 智能体Id
     */
    public $AgentId;

    /**
     * @var string 智能体名称
     */
    public $AgentName;

    /**
     * @var string 智能体类型
     */
    public $AgentInternalName;

    /**
     * @var string 智能体状态
     */
    public $AgentStatus;

    /**
     * @var string 默认版本
     */
    public $DefaultVersion;

    /**
     * @var string 智能体模式
     */
    public $AgentType;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 创建者
     */
    public $Creator;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新者
     */
    public $Updater;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $AgentId 智能体Id
     * @param string $AgentName 智能体名称
     * @param string $AgentInternalName 智能体类型
     * @param string $AgentStatus 智能体状态
     * @param string $DefaultVersion 默认版本
     * @param string $AgentType 智能体模式
     * @param string $Description 描述
     * @param string $Creator 创建者
     * @param string $CreateTime 创建时间
     * @param string $Updater 更新者
     * @param string $UpdateTime 更新时间
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

        if (array_key_exists("AgentInternalName",$param) and $param["AgentInternalName"] !== null) {
            $this->AgentInternalName = $param["AgentInternalName"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("DefaultVersion",$param) and $param["DefaultVersion"] !== null) {
            $this->DefaultVersion = $param["DefaultVersion"];
        }

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
