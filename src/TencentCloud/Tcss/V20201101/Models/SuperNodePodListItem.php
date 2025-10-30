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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 超级节点Pod列表Item信息
 *
 * @method string getPodName() 获取pod名称
 * @method void setPodName(string $PodName) 设置pod名称
 * @method string getPodIP() 获取podIP
 * @method void setPodIP(string $PodIP) 设置podIP
 * @method string getNodeUniqueID() 获取节点唯一id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置节点唯一id
 * @method string getStatus() 获取运行状态
 * @method void setStatus(string $Status) 设置运行状态
 * @method integer getCpuRequest() 获取cpu需求核数
 * @method void setCpuRequest(integer $CpuRequest) 设置cpu需求核数
 * @method integer getCpuLimit() 获取cpu限制核数
 * @method void setCpuLimit(integer $CpuLimit) 设置cpu限制核数
 * @method integer getMemRequest() 获取内存需求大小
 * @method void setMemRequest(integer $MemRequest) 设置内存需求大小
 * @method integer getMemLimit() 获取内存限制大小
 * @method void setMemLimit(integer $MemLimit) 设置内存限制大小
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getDeploymentName() 获取工作负载名称
 * @method void setDeploymentName(string $DeploymentName) 设置工作负载名称
 * @method string getDeploymentID() 获取工作负载id
 * @method void setDeploymentID(string $DeploymentID) 设置工作负载id
 * @method string getStartTime() 获取启动时间
 * @method void setStartTime(string $StartTime) 设置启动时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getRelateContainerCount() 获取关联容器个数
 * @method void setRelateContainerCount(integer $RelateContainerCount) 设置关联容器个数
 * @method string getRunningTime() 获取运行时间
 * @method void setRunningTime(string $RunningTime) 设置运行时间
 * @method string getPodUid() 获取PodUid
 * @method void setPodUid(string $PodUid) 设置PodUid
 * @method integer getChargeCoresCnt() 获取计费核数
 * @method void setChargeCoresCnt(integer $ChargeCoresCnt) 设置计费核数
 * @method string getDefendStatus() 获取防护状态
 * @method void setDefendStatus(string $DefendStatus) 设置防护状态
 */
class SuperNodePodListItem extends AbstractModel
{
    /**
     * @var string pod名称
     */
    public $PodName;

    /**
     * @var string podIP
     */
    public $PodIP;

    /**
     * @var string 节点唯一id
     */
    public $NodeUniqueID;

    /**
     * @var string 运行状态
     */
    public $Status;

    /**
     * @var integer cpu需求核数
     */
    public $CpuRequest;

    /**
     * @var integer cpu限制核数
     */
    public $CpuLimit;

    /**
     * @var integer 内存需求大小
     */
    public $MemRequest;

    /**
     * @var integer 内存限制大小
     */
    public $MemLimit;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 工作负载名称
     */
    public $DeploymentName;

    /**
     * @var string 工作负载id
     */
    public $DeploymentID;

    /**
     * @var string 启动时间
     */
    public $StartTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 关联容器个数
     */
    public $RelateContainerCount;

    /**
     * @var string 运行时间
     */
    public $RunningTime;

    /**
     * @var string PodUid
     */
    public $PodUid;

    /**
     * @var integer 计费核数
     */
    public $ChargeCoresCnt;

    /**
     * @var string 防护状态
     */
    public $DefendStatus;

    /**
     * @param string $PodName pod名称
     * @param string $PodIP podIP
     * @param string $NodeUniqueID 节点唯一id
     * @param string $Status 运行状态
     * @param integer $CpuRequest cpu需求核数
     * @param integer $CpuLimit cpu限制核数
     * @param integer $MemRequest 内存需求大小
     * @param integer $MemLimit 内存限制大小
     * @param string $Namespace 命名空间
     * @param string $DeploymentName 工作负载名称
     * @param string $DeploymentID 工作负载id
     * @param string $StartTime 启动时间
     * @param string $CreateTime 创建时间
     * @param integer $RelateContainerCount 关联容器个数
     * @param string $RunningTime 运行时间
     * @param string $PodUid PodUid
     * @param integer $ChargeCoresCnt 计费核数
     * @param string $DefendStatus 防护状态
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
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemRequest",$param) and $param["MemRequest"] !== null) {
            $this->MemRequest = $param["MemRequest"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("DeploymentName",$param) and $param["DeploymentName"] !== null) {
            $this->DeploymentName = $param["DeploymentName"];
        }

        if (array_key_exists("DeploymentID",$param) and $param["DeploymentID"] !== null) {
            $this->DeploymentID = $param["DeploymentID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RelateContainerCount",$param) and $param["RelateContainerCount"] !== null) {
            $this->RelateContainerCount = $param["RelateContainerCount"];
        }

        if (array_key_exists("RunningTime",$param) and $param["RunningTime"] !== null) {
            $this->RunningTime = $param["RunningTime"];
        }

        if (array_key_exists("PodUid",$param) and $param["PodUid"] !== null) {
            $this->PodUid = $param["PodUid"];
        }

        if (array_key_exists("ChargeCoresCnt",$param) and $param["ChargeCoresCnt"] !== null) {
            $this->ChargeCoresCnt = $param["ChargeCoresCnt"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }
    }
}
