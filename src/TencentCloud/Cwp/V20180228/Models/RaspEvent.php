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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用防护事件
 *
 * @method integer getId() 获取漏洞事件id
 * @method void setId(integer $Id) 设置漏洞事件id
 * @method string getUuid() 获取机器uuid
 * @method void setUuid(string $Uuid) 设置机器uuid
 * @method string getQuuid() 获取机器quuid
 * @method void setQuuid(string $Quuid) 设置机器quuid
 * @method string getAlias() 获取主机名
 * @method void setAlias(string $Alias) 设置主机名
 * @method string getInstanceID() 获取实例id
 * @method void setInstanceID(string $InstanceID) 设置实例id
 * @method string getPrivateIp() 获取内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
 * @method string getPublicIp() 获取公网ip
 * @method void setPublicIp(string $PublicIp) 设置公网ip
 * @method integer getVulId() 获取漏洞ID
 * @method void setVulId(integer $VulId) 设置漏洞ID
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getCveId() 获取cve编号
 * @method void setCveId(string $CveId) 设置cve编号
 * @method string getSourceIp() 获取攻击源ip
 * @method void setSourceIp(string $SourceIp) 设置攻击源ip
 * @method string getCity() 获取攻击源ip地址所在城市
 * @method void setCity(string $City) 设置攻击源ip地址所在城市
 * @method integer getAttackPort() 获取被攻击的端口
 * @method void setAttackPort(integer $AttackPort) 设置被攻击的端口
 * @method string getCreateTime() 获取首次攻击时间
 * @method void setCreateTime(string $CreateTime) 设置首次攻击时间
 * @method string getMergeTime() 获取最近攻击时间
 * @method void setMergeTime(string $MergeTime) 设置最近攻击时间
 * @method integer getCount() 获取攻击次数
 * @method void setCount(integer $Count) 设置攻击次数
 * @method integer getStatus() 获取状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除 5: 已加白
 * @method void setStatus(integer $Status) 设置状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除 5: 已加白
 * @method string getAttackTypeName() 获取应用攻击类型
 * @method void setAttackTypeName(string $AttackTypeName) 设置应用攻击类型
 * @method integer getAttackType() 获取应用攻击类型id
 * @method void setAttackType(integer $AttackType) 设置应用攻击类型id
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getNodeId() 获取节点id
 * @method void setNodeId(string $NodeId) 设置节点id
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getContainerId() 获取容器id
 * @method void setContainerId(string $ContainerId) 设置容器id
 * @method string getContainerStatus() 获取容器运行状态
 * @method void setContainerStatus(string $ContainerStatus) 设置容器运行状态
 * @method string getContainerNetStatus() 获取容器隔离状态
 * @method void setContainerNetStatus(string $ContainerNetStatus) 设置容器隔离状态
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getPodName() 获取pod名称
 * @method void setPodName(string $PodName) 设置pod名称
 * @method string getPodIp() 获取podip
 * @method void setPodIp(string $PodIp) 设置podip
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getRaspDetail() 获取事件详情，包括poc
 * @method void setRaspDetail(string $RaspDetail) 设置事件详情，包括poc
 * @method string getNodeType() 获取普通节点：NORMAL
超级节点：SUPER
 * @method void setNodeType(string $NodeType) 设置普通节点：NORMAL
超级节点：SUPER
 * @method integer getEventType() 获取事件类型 1:攻击时间 2:防御成功
 * @method void setEventType(integer $EventType) 设置事件类型 1:攻击时间 2:防御成功
 * @method string getNodeUniqueID() 获取超级节点的唯一id
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置超级节点的唯一id
 * @method string getPocID() 获取poc id
 * @method void setPocID(string $PocID) 设置poc id
 * @method string getUrl() 获取请求url
 * @method void setUrl(string $Url) 设置请求url
 * @method string getPoc() 获取恶意特征
 * @method void setPoc(string $Poc) 设置恶意特征
 */
class RaspEvent extends AbstractModel
{
    /**
     * @var integer 漏洞事件id
     */
    public $Id;

    /**
     * @var string 机器uuid
     */
    public $Uuid;

    /**
     * @var string 机器quuid
     */
    public $Quuid;

    /**
     * @var string 主机名
     */
    public $Alias;

    /**
     * @var string 实例id
     */
    public $InstanceID;

    /**
     * @var string 内网ip
     */
    public $PrivateIp;

    /**
     * @var string 公网ip
     */
    public $PublicIp;

    /**
     * @var integer 漏洞ID
     */
    public $VulId;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string cve编号
     */
    public $CveId;

    /**
     * @var string 攻击源ip
     */
    public $SourceIp;

    /**
     * @var string 攻击源ip地址所在城市
     */
    public $City;

    /**
     * @var integer 被攻击的端口
     */
    public $AttackPort;

    /**
     * @var string 首次攻击时间
     */
    public $CreateTime;

    /**
     * @var string 最近攻击时间
     */
    public $MergeTime;

    /**
     * @var integer 攻击次数
     */
    public $Count;

    /**
     * @var integer 状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除 5: 已加白
     */
    public $Status;

    /**
     * @var string 应用攻击类型
     */
    public $AttackTypeName;

    /**
     * @var integer 应用攻击类型id
     */
    public $AttackType;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string 节点id
     */
    public $NodeId;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 容器id
     */
    public $ContainerId;

    /**
     * @var string 容器运行状态
     */
    public $ContainerStatus;

    /**
     * @var string 容器隔离状态
     */
    public $ContainerNetStatus;

    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string pod名称
     */
    public $PodName;

    /**
     * @var string podip
     */
    public $PodIp;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 事件详情，包括poc
     */
    public $RaspDetail;

    /**
     * @var string 普通节点：NORMAL
超级节点：SUPER
     */
    public $NodeType;

    /**
     * @var integer 事件类型 1:攻击时间 2:防御成功
     */
    public $EventType;

    /**
     * @var string 超级节点的唯一id
     */
    public $NodeUniqueID;

    /**
     * @var string poc id
     */
    public $PocID;

    /**
     * @var string 请求url
     */
    public $Url;

    /**
     * @var string 恶意特征
     */
    public $Poc;

    /**
     * @param integer $Id 漏洞事件id
     * @param string $Uuid 机器uuid
     * @param string $Quuid 机器quuid
     * @param string $Alias 主机名
     * @param string $InstanceID 实例id
     * @param string $PrivateIp 内网ip
     * @param string $PublicIp 公网ip
     * @param integer $VulId 漏洞ID
     * @param string $VulName 漏洞名称
     * @param string $CveId cve编号
     * @param string $SourceIp 攻击源ip
     * @param string $City 攻击源ip地址所在城市
     * @param integer $AttackPort 被攻击的端口
     * @param string $CreateTime 首次攻击时间
     * @param string $MergeTime 最近攻击时间
     * @param integer $Count 攻击次数
     * @param integer $Status 状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除 5: 已加白
     * @param string $AttackTypeName 应用攻击类型
     * @param integer $AttackType 应用攻击类型id
     * @param string $NodeName 节点名称
     * @param string $NodeId 节点id
     * @param string $ContainerName 容器名称
     * @param string $ContainerId 容器id
     * @param string $ContainerStatus 容器运行状态
     * @param string $ContainerNetStatus 容器隔离状态
     * @param string $ImageId 镜像ID
     * @param string $ImageName 镜像名称
     * @param string $PodName pod名称
     * @param string $PodIp podip
     * @param string $ClusterName 集群名称
     * @param string $ClusterId 集群id
     * @param string $RaspDetail 事件详情，包括poc
     * @param string $NodeType 普通节点：NORMAL
超级节点：SUPER
     * @param integer $EventType 事件类型 1:攻击时间 2:防御成功
     * @param string $NodeUniqueID 超级节点的唯一id
     * @param string $PocID poc id
     * @param string $Url 请求url
     * @param string $Poc 恶意特征
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("AttackPort",$param) and $param["AttackPort"] !== null) {
            $this->AttackPort = $param["AttackPort"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AttackTypeName",$param) and $param["AttackTypeName"] !== null) {
            $this->AttackTypeName = $param["AttackTypeName"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerStatus",$param) and $param["ContainerStatus"] !== null) {
            $this->ContainerStatus = $param["ContainerStatus"];
        }

        if (array_key_exists("ContainerNetStatus",$param) and $param["ContainerNetStatus"] !== null) {
            $this->ContainerNetStatus = $param["ContainerNetStatus"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RaspDetail",$param) and $param["RaspDetail"] !== null) {
            $this->RaspDetail = $param["RaspDetail"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Poc",$param) and $param["Poc"] !== null) {
            $this->Poc = $param["Poc"];
        }
    }
}
