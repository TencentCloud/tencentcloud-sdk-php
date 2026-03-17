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
 * 应用防护事件详情
 *
 * @method integer getId() 获取漏洞事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置漏洞事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除 5: 已加白
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除 5: 已加白
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuuid() 获取机器quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置机器quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceID() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceID(string $InstanceID) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIp() 获取公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHostTags() 获取资产tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostTags(array $HostTags) 设置资产tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取首次攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置首次攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMergeTime() 获取最近攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMergeTime(string $MergeTime) 设置最近攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackTypeName() 获取应用攻击类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackTypeName(string $AttackTypeName) 设置应用攻击类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackType() 获取应用攻击类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackType(integer $AttackType) 设置应用攻击类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取请求url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置请求url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulName() 获取漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulName(string $VulName) 设置漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取攻击次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置攻击次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCveId() 获取cve编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCveId(string $CveId) 设置cve编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceIp() 获取攻击源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceIp(string $SourceIp) 设置攻击源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取攻击源ip地址所在城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置攻击源ip地址所在城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackPort() 获取被攻击的端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackPort(integer $AttackPort) 设置被攻击的端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFix() 获取修复方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFix(string $Fix) 设置修复方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkPayload() 获取请求内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkPayload(string $NetworkPayload) 设置请求内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeId() 获取节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerId() 获取容器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerId(string $ContainerId) 设置容器id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerStatus() 获取容器运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerStatus(string $ContainerStatus) 设置容器运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerNetStatus() 获取容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerNetStatus(string $ContainerNetStatus) 设置容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageId() 获取镜像ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置镜像ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageName() 获取镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageName(string $ImageName) 设置镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置pod名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodIp() 获取podip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodIp(string $PodIp) 设置podip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPid() 获取进程id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPid(integer $Pid) 设置进程id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMainClass() 获取关联进程主类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainClass(string $MainClass) 设置关联进程主类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStackTrace() 获取堆栈信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStackTrace(string $StackTrace) 设置堆栈信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRaspDetail() 获取漏洞ID相关的事件详情(json array格式 rasp特有)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRaspDetail(string $RaspDetail) 设置漏洞ID相关的事件详情(json array格式 rasp特有)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventType() 获取入侵状态： 1 攻击事件，2 防御成功
 * @method void setEventType(integer $EventType) 设置入侵状态： 1 攻击事件，2 防御成功
 */
class RaspEventDetail extends AbstractModel
{
    /**
     * @var integer 漏洞事件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除 5: 已加白
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 机器quuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var string 主机名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceID;

    /**
     * @var string 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIp;

    /**
     * @var string 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var array 资产tag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostTags;

    /**
     * @var string 首次攻击时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最近攻击时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MergeTime;

    /**
     * @var string 应用攻击类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackTypeName;

    /**
     * @var integer 应用攻击类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackType;

    /**
     * @var string 请求url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulName;

    /**
     * @var integer 攻击次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var string cve编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CveId;

    /**
     * @var string 攻击源ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceIp;

    /**
     * @var string 攻击源ip地址所在城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var integer 被攻击的端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackPort;

    /**
     * @var string 漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 修复方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fix;

    /**
     * @var string 请求内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkPayload;

    /**
     * @var string 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var string 节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var string 容器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @var string 容器id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerId;

    /**
     * @var string 容器运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerStatus;

    /**
     * @var string 容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerNetStatus;

    /**
     * @var string 镜像ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var string 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageName;

    /**
     * @var string pod名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string podip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodIp;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var integer 进程id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pid;

    /**
     * @var string 关联进程主类名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainClass;

    /**
     * @var string 堆栈信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StackTrace;

    /**
     * @var string 漏洞ID相关的事件详情(json array格式 rasp特有)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RaspDetail;

    /**
     * @var integer 入侵状态： 1 攻击事件，2 防御成功
     */
    public $EventType;

    /**
     * @param integer $Id 漏洞事件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除 5: 已加白
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Quuid 机器quuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias 主机名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceID 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIp 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HostTags 资产tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 首次攻击时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MergeTime 最近攻击时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackTypeName 应用攻击类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackType 应用攻击类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 请求url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulName 漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 攻击次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CveId cve编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceIp 攻击源ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 攻击源ip地址所在城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackPort 被攻击的端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fix 修复方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkPayload 请求内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeId 节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName 容器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerId 容器id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerStatus 容器运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerNetStatus 容器隔离状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageId 镜像ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageName 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName pod名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodIp podip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Pid 进程id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MainClass 关联进程主类名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StackTrace 堆栈信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RaspDetail 漏洞ID相关的事件详情(json array格式 rasp特有)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventType 入侵状态： 1 攻击事件，2 防御成功
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("HostTags",$param) and $param["HostTags"] !== null) {
            $this->HostTags = $param["HostTags"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("AttackTypeName",$param) and $param["AttackTypeName"] !== null) {
            $this->AttackTypeName = $param["AttackTypeName"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("NetworkPayload",$param) and $param["NetworkPayload"] !== null) {
            $this->NetworkPayload = $param["NetworkPayload"];
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

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("StackTrace",$param) and $param["StackTrace"] !== null) {
            $this->StackTrace = $param["StackTrace"];
        }

        if (array_key_exists("RaspDetail",$param) and $param["RaspDetail"] !== null) {
            $this->RaspDetail = $param["RaspDetail"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }
    }
}
