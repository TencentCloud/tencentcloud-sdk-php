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
 * 超级节点信息
 *
 * @method string getNodeID() 获取超级节点ID
 * @method void setNodeID(string $NodeID) 设置超级节点ID
 * @method string getNodeName() 获取超级节点名称
 * @method void setNodeName(string $NodeName) 设置超级节点名称
 * @method string getClusterName() 获取所属集群名
 * @method void setClusterName(string $ClusterName) 设置所属集群名
 * @method string getClusterID() 获取所属集群ID
 * @method void setClusterID(string $ClusterID) 设置所属集群ID
 * @method string getStatus() 获取节点状态:Running,Ready,Notready,Initializing,Failed,Error
 * @method void setStatus(string $Status) 设置节点状态:Running,Ready,Notready,Initializing,Failed,Error
 * @method string getSubNetID() 获取子网ID
 * @method void setSubNetID(string $SubNetID) 设置子网ID
 * @method string getSubNetName() 获取子网名称
 * @method void setSubNetName(string $SubNetName) 设置子网名称
 * @method string getSubNetCidr() 获取子网网段
 * @method void setSubNetCidr(string $SubNetCidr) 设置子网网段
 * @method string getZoneID() 获取可用区ID
 * @method void setZoneID(string $ZoneID) 设置可用区ID
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getRelatePodCount() 获取关联pod数
 * @method void setRelatePodCount(integer $RelatePodCount) 设置关联pod数
 * @method integer getRelateContainerCount() 获取关联容器数
 * @method void setRelateContainerCount(integer $RelateContainerCount) 设置关联容器数
 * @method string getAgentStatus() 获取agent安装状态UNINSTALL:未安装;INSTALLED:已安装;INSTALLING:安装中;
 * @method void setAgentStatus(string $AgentStatus) 设置agent安装状态UNINSTALL:未安装;INSTALLED:已安装;INSTALLING:安装中;
 * @method string getNodeUniqueID() 获取节点唯一id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置节点唯一id
 * @method string getClusterAccessedStatus() 获取集群接入状态
 * @method void setClusterAccessedStatus(string $ClusterAccessedStatus) 设置集群接入状态
 * @method integer getChargeCoresCnt() 获取计费核数
 * @method void setChargeCoresCnt(integer $ChargeCoresCnt) 设置计费核数
 * @method string getDefendStatus() 获取防护状态:
已防护: Defended
未防护: UnDefended
 * @method void setDefendStatus(string $DefendStatus) 设置防护状态:
已防护: Defended
未防护: UnDefended
 */
class SuperNodeListItem extends AbstractModel
{
    /**
     * @var string 超级节点ID
     */
    public $NodeID;

    /**
     * @var string 超级节点名称
     */
    public $NodeName;

    /**
     * @var string 所属集群名
     */
    public $ClusterName;

    /**
     * @var string 所属集群ID
     */
    public $ClusterID;

    /**
     * @var string 节点状态:Running,Ready,Notready,Initializing,Failed,Error
     */
    public $Status;

    /**
     * @var string 子网ID
     */
    public $SubNetID;

    /**
     * @var string 子网名称
     */
    public $SubNetName;

    /**
     * @var string 子网网段
     */
    public $SubNetCidr;

    /**
     * @var string 可用区ID
     */
    public $ZoneID;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 关联pod数
     */
    public $RelatePodCount;

    /**
     * @var integer 关联容器数
     */
    public $RelateContainerCount;

    /**
     * @var string agent安装状态UNINSTALL:未安装;INSTALLED:已安装;INSTALLING:安装中;
     */
    public $AgentStatus;

    /**
     * @var string 节点唯一id
     */
    public $NodeUniqueID;

    /**
     * @var string 集群接入状态
     */
    public $ClusterAccessedStatus;

    /**
     * @var integer 计费核数
     */
    public $ChargeCoresCnt;

    /**
     * @var string 防护状态:
已防护: Defended
未防护: UnDefended
     */
    public $DefendStatus;

    /**
     * @param string $NodeID 超级节点ID
     * @param string $NodeName 超级节点名称
     * @param string $ClusterName 所属集群名
     * @param string $ClusterID 所属集群ID
     * @param string $Status 节点状态:Running,Ready,Notready,Initializing,Failed,Error
     * @param string $SubNetID 子网ID
     * @param string $SubNetName 子网名称
     * @param string $SubNetCidr 子网网段
     * @param string $ZoneID 可用区ID
     * @param string $Zone 可用区
     * @param string $CreateTime 创建时间
     * @param integer $RelatePodCount 关联pod数
     * @param integer $RelateContainerCount 关联容器数
     * @param string $AgentStatus agent安装状态UNINSTALL:未安装;INSTALLED:已安装;INSTALLING:安装中;
     * @param string $NodeUniqueID 节点唯一id
     * @param string $ClusterAccessedStatus 集群接入状态
     * @param integer $ChargeCoresCnt 计费核数
     * @param string $DefendStatus 防护状态:
已防护: Defended
未防护: UnDefended
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
        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubNetID",$param) and $param["SubNetID"] !== null) {
            $this->SubNetID = $param["SubNetID"];
        }

        if (array_key_exists("SubNetName",$param) and $param["SubNetName"] !== null) {
            $this->SubNetName = $param["SubNetName"];
        }

        if (array_key_exists("SubNetCidr",$param) and $param["SubNetCidr"] !== null) {
            $this->SubNetCidr = $param["SubNetCidr"];
        }

        if (array_key_exists("ZoneID",$param) and $param["ZoneID"] !== null) {
            $this->ZoneID = $param["ZoneID"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RelatePodCount",$param) and $param["RelatePodCount"] !== null) {
            $this->RelatePodCount = $param["RelatePodCount"];
        }

        if (array_key_exists("RelateContainerCount",$param) and $param["RelateContainerCount"] !== null) {
            $this->RelateContainerCount = $param["RelateContainerCount"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("ClusterAccessedStatus",$param) and $param["ClusterAccessedStatus"] !== null) {
            $this->ClusterAccessedStatus = $param["ClusterAccessedStatus"];
        }

        if (array_key_exists("ChargeCoresCnt",$param) and $param["ChargeCoresCnt"] !== null) {
            $this->ChargeCoresCnt = $param["ChargeCoresCnt"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }
    }
}
