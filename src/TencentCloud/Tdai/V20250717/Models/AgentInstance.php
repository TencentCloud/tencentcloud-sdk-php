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
 * 智能体实例
 *
 * @method string getInstanceId() 获取智能体实例ID
 * @method void setInstanceId(string $InstanceId) 设置智能体实例ID
 * @method string getInstanceName() 获取智能体实例名称
 * @method void setInstanceName(string $InstanceName) 设置智能体实例名称
 * @method string getAgentId() 获取智能体ID
 * @method void setAgentId(string $AgentId) 设置智能体ID
 * @method string getAgentName() 获取智能体名称
 * @method void setAgentName(string $AgentName) 设置智能体名称
 * @method string getAgentInternalName() 获取智能体类型
 * @method void setAgentInternalName(string $AgentInternalName) 设置智能体类型
 * @method string getAgentType() 获取智能体服务模式
 * @method void setAgentType(string $AgentType) 设置智能体服务模式
 * @method string getAgentVersion() 获取智能体版本
 * @method void setAgentVersion(string $AgentVersion) 设置智能体版本
 * @method string getStatus() 获取智能体实例状态
 * @method void setStatus(string $Status) 设置智能体实例状态
 * @method array getParameters() 获取智能体实例参数列表
 * @method void setParameters(array $Parameters) 设置智能体实例参数列表
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 * @method array getTags() 获取资源绑定Tag列表
 * @method void setTags(array $Tags) 设置资源绑定Tag列表
 */
class AgentInstance extends AbstractModel
{
    /**
     * @var string 智能体实例ID
     */
    public $InstanceId;

    /**
     * @var string 智能体实例名称
     */
    public $InstanceName;

    /**
     * @var string 智能体ID
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
     * @var string 智能体服务模式
     */
    public $AgentType;

    /**
     * @var string 智能体版本
     */
    public $AgentVersion;

    /**
     * @var string 智能体实例状态
     */
    public $Status;

    /**
     * @var array 智能体实例参数列表
     */
    public $Parameters;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @var array 资源绑定Tag列表
     */
    public $Tags;

    /**
     * @param string $InstanceId 智能体实例ID
     * @param string $InstanceName 智能体实例名称
     * @param string $AgentId 智能体ID
     * @param string $AgentName 智能体名称
     * @param string $AgentInternalName 智能体类型
     * @param string $AgentType 智能体服务模式
     * @param string $AgentVersion 智能体版本
     * @param string $Status 智能体实例状态
     * @param array $Parameters 智能体实例参数列表
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
     * @param array $Tags 资源绑定Tag列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
