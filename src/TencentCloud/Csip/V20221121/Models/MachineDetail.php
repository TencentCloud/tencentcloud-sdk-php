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
 * 主机列表
 *
 * @method string getAgentStatus() 获取<p>Agent状态</p>
 * @method void setAgentStatus(string $AgentStatus) 设置<p>Agent状态</p>
 * @method string getAgentVersion() 获取<p>Agent版本</p>
 * @method void setAgentVersion(string $AgentVersion) 设置<p>Agent版本</p>
 * @method integer getAppId() 获取<p>账号AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>账号AppId</p>
 * @method string getAssetTypeName() 获取<p>资产类型名称</p>
 * @method void setAssetTypeName(string $AssetTypeName) 设置<p>资产类型名称</p>
 * @method integer getBootTime() 获取<p>系统启动时间（Unix时间戳）</p>
 * @method void setBootTime(integer $BootTime) 设置<p>系统启动时间（Unix时间戳）</p>
 * @method integer getBuyTime() 获取<p>购买时间（Unix时间戳）</p>
 * @method void setBuyTime(integer $BuyTime) 设置<p>购买时间（Unix时间戳）</p>
 * @method string getCloudFromEnum() 获取<p>云服务商</p>
 * @method void setCloudFromEnum(string $CloudFromEnum) 设置<p>云服务商</p>
 * @method array getCloudTags() 获取<p>云标签列表</p>
 * @method void setCloudTags(array $CloudTags) 设置<p>云标签列表</p>
 * @method string getCoreVersion() 获取<p>内核版本</p>
 * @method void setCoreVersion(string $CoreVersion) 设置<p>内核版本</p>
 * @method string getCpu() 获取<p>CPU信息</p>
 * @method void setCpu(string $Cpu) 设置<p>CPU信息</p>
 * @method string getCpuLoad() 获取<p>CPU负载</p>
 * @method void setCpuLoad(string $CpuLoad) 设置<p>CPU负载</p>
 * @method integer getCpuSize() 获取<p>CPU核数</p>
 * @method void setCpuSize(integer $CpuSize) 设置<p>CPU核数</p>
 * @method string getDeviceVersion() 获取<p>设备型号</p>
 * @method void setDeviceVersion(string $DeviceVersion) 设置<p>设备型号</p>
 * @method array getDisks() 获取<p>磁盘分区信息</p>
 * @method void setDisks(array $Disks) 设置<p>磁盘分区信息</p>
 * @method integer getEndTime() 获取<p>到期时间（Unix时间戳）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>到期时间（Unix时间戳）</p>
 * @method string getExposedStatus() 获取<p>暴露状态</p>
 * @method void setExposedStatus(string $ExposedStatus) 设置<p>暴露状态</p>
 * @method integer getInstallTime() 获取<p>安装时间（Unix时间戳）</p>
 * @method void setInstallTime(integer $InstallTime) 设置<p>安装时间（Unix时间戳）</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getInstanceStatus() 获取<p>实例状态</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态</p>
 * @method string getKernelVersion() 获取<p>内核版本</p>
 * @method void setKernelVersion(string $KernelVersion) 设置<p>内核版本</p>
 * @method integer getLatestLiveTime() 获取<p>最近一次在线时间（Unix时间戳）</p>
 * @method void setLatestLiveTime(integer $LatestLiveTime) 设置<p>最近一次在线时间（Unix时间戳）</p>
 * @method integer getLatestOfflineTime() 获取<p>最近一次离线时间（Unix时间戳）</p>
 * @method void setLatestOfflineTime(integer $LatestOfflineTime) 设置<p>最近一次离线时间（Unix时间戳）</p>
 * @method string getMachineIp() 获取<p>内网IP</p>
 * @method void setMachineIp(string $MachineIp) 设置<p>内网IP</p>
 * @method string getMachineName() 获取<p>主机名称</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名称</p>
 * @method string getMachineOs() 获取<p>操作系统（云采集）</p>
 * @method void setMachineOs(string $MachineOs) 设置<p>操作系统（云采集）</p>
 * @method string getMachineStatus() 获取<p>主机状态</p>
 * @method void setMachineStatus(string $MachineStatus) 设置<p>主机状态</p>
 * @method string getMachineWanIp() 获取<p>外网IP</p>
 * @method void setMachineWanIp(string $MachineWanIp) 设置<p>外网IP</p>
 * @method integer getMemSize() 获取<p>内存大小(MB)</p>
 * @method void setMemSize(integer $MemSize) 设置<p>内存大小(MB)</p>
 * @method string getMemoryLoad() 获取<p>内存使用率</p>
 * @method void setMemoryLoad(string $MemoryLoad) 设置<p>内存使用率</p>
 * @method array getNetCards() 获取<p>网卡信息</p>
 * @method void setNetCards(array $NetCards) 设置<p>网卡信息</p>
 * @method string getOsByAgent() 获取<p>操作系统（端采集）</p>
 * @method void setOsByAgent(string $OsByAgent) 设置<p>操作系统（端采集）</p>
 * @method string getPayMode() 获取<p>付费模式</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method integer getProtectDays() 获取<p>已防护天数</p>
 * @method void setProtectDays(integer $ProtectDays) 设置<p>已防护天数</p>
 * @method string getProtectType() 获取<p>防护类型</p>
 * @method void setProtectType(string $ProtectType) 设置<p>防护类型</p>
 * @method string getQuuid() 获取<p>主机唯一标识</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机唯一标识</p>
 * @method RegionInfo getRegionInfo() 获取<p>地域信息</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置<p>地域信息</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getSerialNumber() 获取<p>序列号</p>
 * @method void setSerialNumber(string $SerialNumber) 设置<p>序列号</p>
 * @method array getTagItems() 获取<p>资产标签列表</p>
 * @method void setTagItems(array $TagItems) 设置<p>资产标签列表</p>
 * @method AssetTagModifyAssetItem getTagModifyInfo() 获取<p>标签修改信息</p>
 * @method void setTagModifyInfo(AssetTagModifyAssetItem $TagModifyInfo) 设置<p>标签修改信息</p>
 * @method string getUuid() 获取<p>Agent唯一标识</p>
 * @method void setUuid(string $Uuid) 设置<p>Agent唯一标识</p>
 * @method string getVpcCidrBlock() 获取<p>VPC CIDR</p>
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置<p>VPC CIDR</p>
 * @method string getVpcId() 获取<p>VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
 * @method string getVpcName() 获取<p>VPC名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>VPC名称</p>
 * @method string getNodeType() 获取<p>主机节点类型</p><p>枚举值：</p><ul><li>NONE： 主机节点</li><li>CLUSTER： 集群节点</li><li>CONTAINER： 容器节点</li></ul>
 * @method void setNodeType(string $NodeType) 设置<p>主机节点类型</p><p>枚举值：</p><ul><li>NONE： 主机节点</li><li>CLUSTER： 集群节点</li><li>CONTAINER： 容器节点</li></ul>
 * @method string getContainerDefendStatus() 获取<p>容器防护状态</p><p>枚举值：</p><ul><li>Enabled： 开启防护</li><li>Disabled： 关闭防护</li><li>Unknown： 未知</li></ul>
 * @method void setContainerDefendStatus(string $ContainerDefendStatus) 设置<p>容器防护状态</p><p>枚举值：</p><ul><li>Enabled： 开启防护</li><li>Disabled： 关闭防护</li><li>Unknown： 未知</li></ul>
 * @method string getClusterCaMd5() 获取<p>集群签证md5</p>
 * @method void setClusterCaMd5(string $ClusterCaMd5) 设置<p>集群签证md5</p>
 * @method ContainerEnvInfo getContainerEnvInfo() 获取<p>容器环境信息</p>
 * @method void setContainerEnvInfo(ContainerEnvInfo $ContainerEnvInfo) 设置<p>容器环境信息</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 */
class MachineDetail extends AbstractModel
{
    /**
     * @var string <p>Agent状态</p>
     */
    public $AgentStatus;

    /**
     * @var string <p>Agent版本</p>
     */
    public $AgentVersion;

    /**
     * @var integer <p>账号AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>资产类型名称</p>
     */
    public $AssetTypeName;

    /**
     * @var integer <p>系统启动时间（Unix时间戳）</p>
     */
    public $BootTime;

    /**
     * @var integer <p>购买时间（Unix时间戳）</p>
     */
    public $BuyTime;

    /**
     * @var string <p>云服务商</p>
     */
    public $CloudFromEnum;

    /**
     * @var array <p>云标签列表</p>
     */
    public $CloudTags;

    /**
     * @var string <p>内核版本</p>
     */
    public $CoreVersion;

    /**
     * @var string <p>CPU信息</p>
     */
    public $Cpu;

    /**
     * @var string <p>CPU负载</p>
     */
    public $CpuLoad;

    /**
     * @var integer <p>CPU核数</p>
     */
    public $CpuSize;

    /**
     * @var string <p>设备型号</p>
     */
    public $DeviceVersion;

    /**
     * @var array <p>磁盘分区信息</p>
     */
    public $Disks;

    /**
     * @var integer <p>到期时间（Unix时间戳）</p>
     */
    public $EndTime;

    /**
     * @var string <p>暴露状态</p>
     */
    public $ExposedStatus;

    /**
     * @var integer <p>安装时间（Unix时间戳）</p>
     */
    public $InstallTime;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>实例状态</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>内核版本</p>
     */
    public $KernelVersion;

    /**
     * @var integer <p>最近一次在线时间（Unix时间戳）</p>
     */
    public $LatestLiveTime;

    /**
     * @var integer <p>最近一次离线时间（Unix时间戳）</p>
     */
    public $LatestOfflineTime;

    /**
     * @var string <p>内网IP</p>
     */
    public $MachineIp;

    /**
     * @var string <p>主机名称</p>
     */
    public $MachineName;

    /**
     * @var string <p>操作系统（云采集）</p>
     */
    public $MachineOs;

    /**
     * @var string <p>主机状态</p>
     */
    public $MachineStatus;

    /**
     * @var string <p>外网IP</p>
     */
    public $MachineWanIp;

    /**
     * @var integer <p>内存大小(MB)</p>
     */
    public $MemSize;

    /**
     * @var string <p>内存使用率</p>
     */
    public $MemoryLoad;

    /**
     * @var array <p>网卡信息</p>
     */
    public $NetCards;

    /**
     * @var string <p>操作系统（端采集）</p>
     */
    public $OsByAgent;

    /**
     * @var string <p>付费模式</p>
     */
    public $PayMode;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>已防护天数</p>
     */
    public $ProtectDays;

    /**
     * @var string <p>防护类型</p>
     */
    public $ProtectType;

    /**
     * @var string <p>主机唯一标识</p>
     */
    public $Quuid;

    /**
     * @var RegionInfo <p>地域信息</p>
     */
    public $RegionInfo;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>序列号</p>
     */
    public $SerialNumber;

    /**
     * @var array <p>资产标签列表</p>
     */
    public $TagItems;

    /**
     * @var AssetTagModifyAssetItem <p>标签修改信息</p>
     */
    public $TagModifyInfo;

    /**
     * @var string <p>Agent唯一标识</p>
     */
    public $Uuid;

    /**
     * @var string <p>VPC CIDR</p>
     */
    public $VpcCidrBlock;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>VPC名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>主机节点类型</p><p>枚举值：</p><ul><li>NONE： 主机节点</li><li>CLUSTER： 集群节点</li><li>CONTAINER： 容器节点</li></ul>
     */
    public $NodeType;

    /**
     * @var string <p>容器防护状态</p><p>枚举值：</p><ul><li>Enabled： 开启防护</li><li>Disabled： 关闭防护</li><li>Unknown： 未知</li></ul>
     */
    public $ContainerDefendStatus;

    /**
     * @var string <p>集群签证md5</p>
     */
    public $ClusterCaMd5;

    /**
     * @var ContainerEnvInfo <p>容器环境信息</p>
     */
    public $ContainerEnvInfo;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @param string $AgentStatus <p>Agent状态</p>
     * @param string $AgentVersion <p>Agent版本</p>
     * @param integer $AppId <p>账号AppId</p>
     * @param string $AssetTypeName <p>资产类型名称</p>
     * @param integer $BootTime <p>系统启动时间（Unix时间戳）</p>
     * @param integer $BuyTime <p>购买时间（Unix时间戳）</p>
     * @param string $CloudFromEnum <p>云服务商</p>
     * @param array $CloudTags <p>云标签列表</p>
     * @param string $CoreVersion <p>内核版本</p>
     * @param string $Cpu <p>CPU信息</p>
     * @param string $CpuLoad <p>CPU负载</p>
     * @param integer $CpuSize <p>CPU核数</p>
     * @param string $DeviceVersion <p>设备型号</p>
     * @param array $Disks <p>磁盘分区信息</p>
     * @param integer $EndTime <p>到期时间（Unix时间戳）</p>
     * @param string $ExposedStatus <p>暴露状态</p>
     * @param integer $InstallTime <p>安装时间（Unix时间戳）</p>
     * @param string $InstanceID <p>实例ID</p>
     * @param string $InstanceStatus <p>实例状态</p>
     * @param string $KernelVersion <p>内核版本</p>
     * @param integer $LatestLiveTime <p>最近一次在线时间（Unix时间戳）</p>
     * @param integer $LatestOfflineTime <p>最近一次离线时间（Unix时间戳）</p>
     * @param string $MachineIp <p>内网IP</p>
     * @param string $MachineName <p>主机名称</p>
     * @param string $MachineOs <p>操作系统（云采集）</p>
     * @param string $MachineStatus <p>主机状态</p>
     * @param string $MachineWanIp <p>外网IP</p>
     * @param integer $MemSize <p>内存大小(MB)</p>
     * @param string $MemoryLoad <p>内存使用率</p>
     * @param array $NetCards <p>网卡信息</p>
     * @param string $OsByAgent <p>操作系统（端采集）</p>
     * @param string $PayMode <p>付费模式</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param integer $ProtectDays <p>已防护天数</p>
     * @param string $ProtectType <p>防护类型</p>
     * @param string $Quuid <p>主机唯一标识</p>
     * @param RegionInfo $RegionInfo <p>地域信息</p>
     * @param string $Remark <p>备注</p>
     * @param string $SerialNumber <p>序列号</p>
     * @param array $TagItems <p>资产标签列表</p>
     * @param AssetTagModifyAssetItem $TagModifyInfo <p>标签修改信息</p>
     * @param string $Uuid <p>Agent唯一标识</p>
     * @param string $VpcCidrBlock <p>VPC CIDR</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $VpcName <p>VPC名称</p>
     * @param string $NodeType <p>主机节点类型</p><p>枚举值：</p><ul><li>NONE： 主机节点</li><li>CLUSTER： 集群节点</li><li>CONTAINER： 容器节点</li></ul>
     * @param string $ContainerDefendStatus <p>容器防护状态</p><p>枚举值：</p><ul><li>Enabled： 开启防护</li><li>Disabled： 关闭防护</li><li>Unknown： 未知</li></ul>
     * @param string $ClusterCaMd5 <p>集群签证md5</p>
     * @param ContainerEnvInfo $ContainerEnvInfo <p>容器环境信息</p>
     * @param string $ClusterId <p>集群id</p>
     * @param string $ClusterName <p>集群名称</p>
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
        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("BootTime",$param) and $param["BootTime"] !== null) {
            $this->BootTime = $param["BootTime"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("CloudFromEnum",$param) and $param["CloudFromEnum"] !== null) {
            $this->CloudFromEnum = $param["CloudFromEnum"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("CoreVersion",$param) and $param["CoreVersion"] !== null) {
            $this->CoreVersion = $param["CoreVersion"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = $param["CpuLoad"];
        }

        if (array_key_exists("CpuSize",$param) and $param["CpuSize"] !== null) {
            $this->CpuSize = $param["CpuSize"];
        }

        if (array_key_exists("DeviceVersion",$param) and $param["DeviceVersion"] !== null) {
            $this->DeviceVersion = $param["DeviceVersion"];
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = [];
            foreach ($param["Disks"] as $key => $value){
                $obj = new DiskPartitionInfo();
                $obj->deserialize($value);
                array_push($this->Disks, $obj);
            }
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExposedStatus",$param) and $param["ExposedStatus"] !== null) {
            $this->ExposedStatus = $param["ExposedStatus"];
        }

        if (array_key_exists("InstallTime",$param) and $param["InstallTime"] !== null) {
            $this->InstallTime = $param["InstallTime"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("LatestLiveTime",$param) and $param["LatestLiveTime"] !== null) {
            $this->LatestLiveTime = $param["LatestLiveTime"];
        }

        if (array_key_exists("LatestOfflineTime",$param) and $param["LatestOfflineTime"] !== null) {
            $this->LatestOfflineTime = $param["LatestOfflineTime"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemoryLoad",$param) and $param["MemoryLoad"] !== null) {
            $this->MemoryLoad = $param["MemoryLoad"];
        }

        if (array_key_exists("NetCards",$param) and $param["NetCards"] !== null) {
            $this->NetCards = [];
            foreach ($param["NetCards"] as $key => $value){
                $obj = new NetworkCardInfo();
                $obj->deserialize($value);
                array_push($this->NetCards, $obj);
            }
        }

        if (array_key_exists("OsByAgent",$param) and $param["OsByAgent"] !== null) {
            $this->OsByAgent = $param["OsByAgent"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProtectDays",$param) and $param["ProtectDays"] !== null) {
            $this->ProtectDays = $param["ProtectDays"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new MiniTagItem();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }

        if (array_key_exists("TagModifyInfo",$param) and $param["TagModifyInfo"] !== null) {
            $this->TagModifyInfo = new AssetTagModifyAssetItem();
            $this->TagModifyInfo->deserialize($param["TagModifyInfo"]);
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ContainerDefendStatus",$param) and $param["ContainerDefendStatus"] !== null) {
            $this->ContainerDefendStatus = $param["ContainerDefendStatus"];
        }

        if (array_key_exists("ClusterCaMd5",$param) and $param["ClusterCaMd5"] !== null) {
            $this->ClusterCaMd5 = $param["ClusterCaMd5"];
        }

        if (array_key_exists("ContainerEnvInfo",$param) and $param["ContainerEnvInfo"] !== null) {
            $this->ContainerEnvInfo = new ContainerEnvInfo();
            $this->ContainerEnvInfo->deserialize($param["ContainerEnvInfo"]);
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
