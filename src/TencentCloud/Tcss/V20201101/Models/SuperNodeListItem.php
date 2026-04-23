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
 * @method string getNodeID() 获取<p>超级节点ID</p>
 * @method void setNodeID(string $NodeID) 设置<p>超级节点ID</p>
 * @method string getNodeName() 获取<p>超级节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>超级节点名称</p>
 * @method string getClusterName() 获取<p>所属集群名</p>
 * @method void setClusterName(string $ClusterName) 设置<p>所属集群名</p>
 * @method string getClusterID() 获取<p>所属集群ID</p>
 * @method void setClusterID(string $ClusterID) 设置<p>所属集群ID</p>
 * @method string getStatus() 获取<p>节点状态:Running,Ready,Notready,Initializing,Failed,Error</p>
 * @method void setStatus(string $Status) 设置<p>节点状态:Running,Ready,Notready,Initializing,Failed,Error</p>
 * @method string getSubNetID() 获取<p>子网ID</p>
 * @method void setSubNetID(string $SubNetID) 设置<p>子网ID</p>
 * @method string getSubNetName() 获取<p>子网名称</p>
 * @method void setSubNetName(string $SubNetName) 设置<p>子网名称</p>
 * @method string getSubNetCidr() 获取<p>子网网段</p>
 * @method void setSubNetCidr(string $SubNetCidr) 设置<p>子网网段</p>
 * @method string getZoneID() 获取<p>可用区ID</p>
 * @method void setZoneID(string $ZoneID) 设置<p>可用区ID</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method integer getRelatePodCount() 获取<p>关联pod数</p>
 * @method void setRelatePodCount(integer $RelatePodCount) 设置<p>关联pod数</p>
 * @method integer getRelateContainerCount() 获取<p>关联容器数</p>
 * @method void setRelateContainerCount(integer $RelateContainerCount) 设置<p>关联容器数</p>
 * @method string getAgentStatus() 获取<p>agent安装状态UNINSTALL:未安装;INSTALLED:已安装;INSTALLING:安装中;</p>
 * @method void setAgentStatus(string $AgentStatus) 设置<p>agent安装状态UNINSTALL:未安装;INSTALLED:已安装;INSTALLING:安装中;</p>
 * @method string getNodeUniqueID() 获取<p>节点唯一id</p>
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置<p>节点唯一id</p>
 * @method string getClusterAccessedStatus() 获取<p>集群接入状态</p>
 * @method void setClusterAccessedStatus(string $ClusterAccessedStatus) 设置<p>集群接入状态</p>
 * @method integer getChargeCoresCnt() 获取<p>计费核数</p>
 * @method void setChargeCoresCnt(integer $ChargeCoresCnt) 设置<p>计费核数</p>
 * @method string getDefendStatus() 获取<p>防护状态:<br>已防护: Defended<br>未防护: UnDefended</p>
 * @method void setDefendStatus(string $DefendStatus) 设置<p>防护状态:<br>已防护: Defended<br>未防护: UnDefended</p>
 * @method string getClusterAccessedSubStatus() 获取<p>集群接入子状态</p><p>枚举值：</p><ul><li>AccessedSubNone： 无</li><li>AccessedSubUninstallException： 卸载异常</li><li>AccessedSubTimeout： 接入超时</li><li>AccessedSubUninstallTimeout： 卸载超时</li><li>AccessedSubResourceException： 集群组件检查异常-Deployment/DaemonSet等异常</li><li>AccessedSubCAMPermissionDenied： CAM权限不够</li></ul>
 * @method void setClusterAccessedSubStatus(string $ClusterAccessedSubStatus) 设置<p>集群接入子状态</p><p>枚举值：</p><ul><li>AccessedSubNone： 无</li><li>AccessedSubUninstallException： 卸载异常</li><li>AccessedSubTimeout： 接入超时</li><li>AccessedSubUninstallTimeout： 卸载超时</li><li>AccessedSubResourceException： 集群组件检查异常-Deployment/DaemonSet等异常</li><li>AccessedSubCAMPermissionDenied： CAM权限不够</li></ul>
 * @method string getClusterAccessedErrorReason() 获取<p>失败具体原因描述</p>
 * @method void setClusterAccessedErrorReason(string $ClusterAccessedErrorReason) 设置<p>失败具体原因描述</p>
 */
class SuperNodeListItem extends AbstractModel
{
    /**
     * @var string <p>超级节点ID</p>
     */
    public $NodeID;

    /**
     * @var string <p>超级节点名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>所属集群名</p>
     */
    public $ClusterName;

    /**
     * @var string <p>所属集群ID</p>
     */
    public $ClusterID;

    /**
     * @var string <p>节点状态:Running,Ready,Notready,Initializing,Failed,Error</p>
     */
    public $Status;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubNetID;

    /**
     * @var string <p>子网名称</p>
     */
    public $SubNetName;

    /**
     * @var string <p>子网网段</p>
     */
    public $SubNetCidr;

    /**
     * @var string <p>可用区ID</p>
     */
    public $ZoneID;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>关联pod数</p>
     */
    public $RelatePodCount;

    /**
     * @var integer <p>关联容器数</p>
     */
    public $RelateContainerCount;

    /**
     * @var string <p>agent安装状态UNINSTALL:未安装;INSTALLED:已安装;INSTALLING:安装中;</p>
     */
    public $AgentStatus;

    /**
     * @var string <p>节点唯一id</p>
     */
    public $NodeUniqueID;

    /**
     * @var string <p>集群接入状态</p>
     */
    public $ClusterAccessedStatus;

    /**
     * @var integer <p>计费核数</p>
     */
    public $ChargeCoresCnt;

    /**
     * @var string <p>防护状态:<br>已防护: Defended<br>未防护: UnDefended</p>
     */
    public $DefendStatus;

    /**
     * @var string <p>集群接入子状态</p><p>枚举值：</p><ul><li>AccessedSubNone： 无</li><li>AccessedSubUninstallException： 卸载异常</li><li>AccessedSubTimeout： 接入超时</li><li>AccessedSubUninstallTimeout： 卸载超时</li><li>AccessedSubResourceException： 集群组件检查异常-Deployment/DaemonSet等异常</li><li>AccessedSubCAMPermissionDenied： CAM权限不够</li></ul>
     */
    public $ClusterAccessedSubStatus;

    /**
     * @var string <p>失败具体原因描述</p>
     */
    public $ClusterAccessedErrorReason;

    /**
     * @param string $NodeID <p>超级节点ID</p>
     * @param string $NodeName <p>超级节点名称</p>
     * @param string $ClusterName <p>所属集群名</p>
     * @param string $ClusterID <p>所属集群ID</p>
     * @param string $Status <p>节点状态:Running,Ready,Notready,Initializing,Failed,Error</p>
     * @param string $SubNetID <p>子网ID</p>
     * @param string $SubNetName <p>子网名称</p>
     * @param string $SubNetCidr <p>子网网段</p>
     * @param string $ZoneID <p>可用区ID</p>
     * @param string $Zone <p>可用区</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param integer $RelatePodCount <p>关联pod数</p>
     * @param integer $RelateContainerCount <p>关联容器数</p>
     * @param string $AgentStatus <p>agent安装状态UNINSTALL:未安装;INSTALLED:已安装;INSTALLING:安装中;</p>
     * @param string $NodeUniqueID <p>节点唯一id</p>
     * @param string $ClusterAccessedStatus <p>集群接入状态</p>
     * @param integer $ChargeCoresCnt <p>计费核数</p>
     * @param string $DefendStatus <p>防护状态:<br>已防护: Defended<br>未防护: UnDefended</p>
     * @param string $ClusterAccessedSubStatus <p>集群接入子状态</p><p>枚举值：</p><ul><li>AccessedSubNone： 无</li><li>AccessedSubUninstallException： 卸载异常</li><li>AccessedSubTimeout： 接入超时</li><li>AccessedSubUninstallTimeout： 卸载超时</li><li>AccessedSubResourceException： 集群组件检查异常-Deployment/DaemonSet等异常</li><li>AccessedSubCAMPermissionDenied： CAM权限不够</li></ul>
     * @param string $ClusterAccessedErrorReason <p>失败具体原因描述</p>
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

        if (array_key_exists("ClusterAccessedSubStatus",$param) and $param["ClusterAccessedSubStatus"] !== null) {
            $this->ClusterAccessedSubStatus = $param["ClusterAccessedSubStatus"];
        }

        if (array_key_exists("ClusterAccessedErrorReason",$param) and $param["ClusterAccessedErrorReason"] !== null) {
            $this->ClusterAccessedErrorReason = $param["ClusterAccessedErrorReason"];
        }
    }
}
