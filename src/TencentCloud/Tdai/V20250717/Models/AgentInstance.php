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
 * @method string getInstanceId() 获取<p>智能体实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>智能体实例ID</p>
 * @method string getInstanceName() 获取<p>智能体实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>智能体实例名称</p>
 * @method string getAgentId() 获取<p>智能体ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>智能体ID</p>
 * @method string getAgentName() 获取<p>智能体名称</p>
 * @method void setAgentName(string $AgentName) 设置<p>智能体名称</p>
 * @method string getAgentInternalName() 获取<p>智能体类型</p>
 * @method void setAgentInternalName(string $AgentInternalName) 设置<p>智能体类型</p>
 * @method string getAgentType() 获取<p>智能体服务模式</p>
 * @method void setAgentType(string $AgentType) 设置<p>智能体服务模式</p>
 * @method string getAgentVersion() 获取<p>智能体版本</p>
 * @method void setAgentVersion(string $AgentVersion) 设置<p>智能体版本</p>
 * @method string getStatus() 获取<p>智能体实例状态</p>
 * @method void setStatus(string $Status) 设置<p>智能体实例状态</p>
 * @method array getParameters() 获取<p>智能体实例参数列表</p>
 * @method void setParameters(array $Parameters) 设置<p>智能体实例参数列表</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>修改时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>修改时间</p>
 * @method array getTags() 获取<p>资源绑定Tag列表</p>
 * @method void setTags(array $Tags) 设置<p>资源绑定Tag列表</p>
 * @method string getDeployPlace() 获取<p>部署位置,intranet-共享版，userVpc-专享版</p>
 * @method void setDeployPlace(string $DeployPlace) 设置<p>部署位置,intranet-共享版，userVpc-专享版</p>
 * @method array getPolicyIds() 获取<p>关联的告警策略ID。</p>
 * @method void setPolicyIds(array $PolicyIds) 设置<p>关联的告警策略ID。</p>
 * @method ClawConfigInfo getClawConfig() 获取<p>无</p>
 * @method void setClawConfig(ClawConfigInfo $ClawConfig) 设置<p>无</p>
 * @method string getInstanceType() 获取<p>无</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>无</p>
 * @method array getAllowedActions() 获取<p>无</p>
 * @method void setAllowedActions(array $AllowedActions) 设置<p>无</p>
 * @method string getLastActiveTime() 获取<p>无</p>
 * @method void setLastActiveTime(string $LastActiveTime) 设置<p>无</p>
 * @method string getDescription() 获取<p>无</p>
 * @method void setDescription(string $Description) 设置<p>无</p>
 */
class AgentInstance extends AbstractModel
{
    /**
     * @var string <p>智能体实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>智能体实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>智能体ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>智能体名称</p>
     */
    public $AgentName;

    /**
     * @var string <p>智能体类型</p>
     */
    public $AgentInternalName;

    /**
     * @var string <p>智能体服务模式</p>
     */
    public $AgentType;

    /**
     * @var string <p>智能体版本</p>
     */
    public $AgentVersion;

    /**
     * @var string <p>智能体实例状态</p>
     */
    public $Status;

    /**
     * @var array <p>智能体实例参数列表</p>
     */
    public $Parameters;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>资源绑定Tag列表</p>
     */
    public $Tags;

    /**
     * @var string <p>部署位置,intranet-共享版，userVpc-专享版</p>
     */
    public $DeployPlace;

    /**
     * @var array <p>关联的告警策略ID。</p>
     */
    public $PolicyIds;

    /**
     * @var ClawConfigInfo <p>无</p>
     */
    public $ClawConfig;

    /**
     * @var string <p>无</p>
     */
    public $InstanceType;

    /**
     * @var array <p>无</p>
     */
    public $AllowedActions;

    /**
     * @var string <p>无</p>
     */
    public $LastActiveTime;

    /**
     * @var string <p>无</p>
     */
    public $Description;

    /**
     * @param string $InstanceId <p>智能体实例ID</p>
     * @param string $InstanceName <p>智能体实例名称</p>
     * @param string $AgentId <p>智能体ID</p>
     * @param string $AgentName <p>智能体名称</p>
     * @param string $AgentInternalName <p>智能体类型</p>
     * @param string $AgentType <p>智能体服务模式</p>
     * @param string $AgentVersion <p>智能体版本</p>
     * @param string $Status <p>智能体实例状态</p>
     * @param array $Parameters <p>智能体实例参数列表</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>修改时间</p>
     * @param array $Tags <p>资源绑定Tag列表</p>
     * @param string $DeployPlace <p>部署位置,intranet-共享版，userVpc-专享版</p>
     * @param array $PolicyIds <p>关联的告警策略ID。</p>
     * @param ClawConfigInfo $ClawConfig <p>无</p>
     * @param string $InstanceType <p>无</p>
     * @param array $AllowedActions <p>无</p>
     * @param string $LastActiveTime <p>无</p>
     * @param string $Description <p>无</p>
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

        if (array_key_exists("DeployPlace",$param) and $param["DeployPlace"] !== null) {
            $this->DeployPlace = $param["DeployPlace"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("ClawConfig",$param) and $param["ClawConfig"] !== null) {
            $this->ClawConfig = new ClawConfigInfo();
            $this->ClawConfig->deserialize($param["ClawConfig"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AllowedActions",$param) and $param["AllowedActions"] !== null) {
            $this->AllowedActions = $param["AllowedActions"];
        }

        if (array_key_exists("LastActiveTime",$param) and $param["LastActiveTime"] !== null) {
            $this->LastActiveTime = $param["LastActiveTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
