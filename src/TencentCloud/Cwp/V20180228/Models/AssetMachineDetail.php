<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 资产指纹中服务器列表的基本信息
 *
 * @method string getQuuid() 获取服务器Quuid
 * @method void setQuuid(string $Quuid) 设置服务器Quuid
 * @method string getUuid() 获取服务器uuid
 * @method void setUuid(string $Uuid) 设置服务器uuid
 * @method string getMachineIp() 获取服务器内网IP
 * @method void setMachineIp(string $MachineIp) 设置服务器内网IP
 * @method string getMachineName() 获取服务器名称
 * @method void setMachineName(string $MachineName) 设置服务器名称
 * @method string getOsInfo() 获取操作系统名称
 * @method void setOsInfo(string $OsInfo) 设置操作系统名称
 * @method string getCpu() 获取CPU信息
 * @method void setCpu(string $Cpu) 设置CPU信息
 * @method integer getMemSize() 获取内存容量：单位G
 * @method void setMemSize(integer $MemSize) 设置内存容量：单位G
 * @method string getMemLoad() 获取内存使用率百分比
 * @method void setMemLoad(string $MemLoad) 设置内存使用率百分比
 * @method integer getDiskSize() 获取硬盘容量：单位G
 * @method void setDiskSize(integer $DiskSize) 设置硬盘容量：单位G
 * @method string getDiskLoad() 获取硬盘使用率百分比
 * @method void setDiskLoad(string $DiskLoad) 设置硬盘使用率百分比
 * @method integer getPartitionCount() 获取分区数
 * @method void setPartitionCount(integer $PartitionCount) 设置分区数
 * @method string getMachineWanIp() 获取主机外网IP
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网IP
 * @method integer getCpuSize() 获取Cpu数量
 * @method void setCpuSize(integer $CpuSize) 设置Cpu数量
 * @method string getCpuLoad() 获取Cpu使用率百分比
 * @method void setCpuLoad(string $CpuLoad) 设置Cpu使用率百分比
 * @method integer getProtectLevel() 获取防护级别：0基础版，1专业版，2旗舰版，3普惠版
 * @method void setProtectLevel(integer $ProtectLevel) 设置防护级别：0基础版，1专业版，2旗舰版，3普惠版
 * @method string getRiskStatus() 获取风险状态：UNKNOW-未知，RISK-风险，SAFT-安全
 * @method void setRiskStatus(string $RiskStatus) 设置风险状态：UNKNOW-未知，RISK-风险，SAFT-安全
 * @method integer getProtectDays() 获取已防护天数
 * @method void setProtectDays(integer $ProtectDays) 设置已防护天数
 * @method string getBuyTime() 获取专业版开通时间
 * @method void setBuyTime(string $BuyTime) 设置专业版开通时间
 * @method string getEndTime() 获取专业版到期时间
 * @method void setEndTime(string $EndTime) 设置专业版到期时间
 * @method string getCoreVersion() 获取内核版本
 * @method void setCoreVersion(string $CoreVersion) 设置内核版本
 * @method string getOsType() 获取linux/windows
 * @method void setOsType(string $OsType) 设置linux/windows
 * @method string getAgentVersion() 获取agent版本
 * @method void setAgentVersion(string $AgentVersion) 设置agent版本
 * @method string getInstallTime() 获取安装时间
 * @method void setInstallTime(string $InstallTime) 设置安装时间
 * @method string getBootTime() 获取系统启动时间
 * @method void setBootTime(string $BootTime) 设置系统启动时间
 * @method string getLastLiveTime() 获取最后上线时间
 * @method void setLastLiveTime(string $LastLiveTime) 设置最后上线时间
 * @method string getProducer() 获取生产商
 * @method void setProducer(string $Producer) 设置生产商
 * @method string getSerialNumber() 获取序列号
 * @method void setSerialNumber(string $SerialNumber) 设置序列号
 * @method array getNetCards() 获取网卡
 * @method void setNetCards(array $NetCards) 设置网卡
 * @method array getDisks() 获取分区
 * @method void setDisks(array $Disks) 设置分区
 * @method integer getStatus() 获取0在线，1已离线
 * @method void setStatus(integer $Status) 设置0在线，1已离线
 * @method integer getProjectId() 获取业务组ID
 * @method void setProjectId(integer $ProjectId) 设置业务组ID
 * @method string getDeviceVersion() 获取设备型号
 * @method void setDeviceVersion(string $DeviceVersion) 设置设备型号
 * @method string getOfflineTime() 获取离线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTime(string $OfflineTime) 设置离线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取主机ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置主机ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机二外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机二外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetMachineDetail extends AbstractModel
{
    /**
     * @var string 服务器Quuid
     */
    public $Quuid;

    /**
     * @var string 服务器uuid
     */
    public $Uuid;

    /**
     * @var string 服务器内网IP
     */
    public $MachineIp;

    /**
     * @var string 服务器名称
     */
    public $MachineName;

    /**
     * @var string 操作系统名称
     */
    public $OsInfo;

    /**
     * @var string CPU信息
     */
    public $Cpu;

    /**
     * @var integer 内存容量：单位G
     */
    public $MemSize;

    /**
     * @var string 内存使用率百分比
     */
    public $MemLoad;

    /**
     * @var integer 硬盘容量：单位G
     */
    public $DiskSize;

    /**
     * @var string 硬盘使用率百分比
     */
    public $DiskLoad;

    /**
     * @var integer 分区数
     */
    public $PartitionCount;

    /**
     * @var string 主机外网IP
     */
    public $MachineWanIp;

    /**
     * @var integer Cpu数量
     */
    public $CpuSize;

    /**
     * @var string Cpu使用率百分比
     */
    public $CpuLoad;

    /**
     * @var integer 防护级别：0基础版，1专业版，2旗舰版，3普惠版
     */
    public $ProtectLevel;

    /**
     * @var string 风险状态：UNKNOW-未知，RISK-风险，SAFT-安全
     */
    public $RiskStatus;

    /**
     * @var integer 已防护天数
     */
    public $ProtectDays;

    /**
     * @var string 专业版开通时间
     */
    public $BuyTime;

    /**
     * @var string 专业版到期时间
     */
    public $EndTime;

    /**
     * @var string 内核版本
     */
    public $CoreVersion;

    /**
     * @var string linux/windows
     */
    public $OsType;

    /**
     * @var string agent版本
     */
    public $AgentVersion;

    /**
     * @var string 安装时间
     */
    public $InstallTime;

    /**
     * @var string 系统启动时间
     */
    public $BootTime;

    /**
     * @var string 最后上线时间
     */
    public $LastLiveTime;

    /**
     * @var string 生产商
     */
    public $Producer;

    /**
     * @var string 序列号
     */
    public $SerialNumber;

    /**
     * @var array 网卡
     */
    public $NetCards;

    /**
     * @var array 分区
     */
    public $Disks;

    /**
     * @var integer 0在线，1已离线
     */
    public $Status;

    /**
     * @var integer 业务组ID
     */
    public $ProjectId;

    /**
     * @var string 设备型号
     */
    public $DeviceVersion;

    /**
     * @var string 离线时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTime;

    /**
     * @var string 主机ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var MachineExtraInfo 主机二外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $Quuid 服务器Quuid
     * @param string $Uuid 服务器uuid
     * @param string $MachineIp 服务器内网IP
     * @param string $MachineName 服务器名称
     * @param string $OsInfo 操作系统名称
     * @param string $Cpu CPU信息
     * @param integer $MemSize 内存容量：单位G
     * @param string $MemLoad 内存使用率百分比
     * @param integer $DiskSize 硬盘容量：单位G
     * @param string $DiskLoad 硬盘使用率百分比
     * @param integer $PartitionCount 分区数
     * @param string $MachineWanIp 主机外网IP
     * @param integer $CpuSize Cpu数量
     * @param string $CpuLoad Cpu使用率百分比
     * @param integer $ProtectLevel 防护级别：0基础版，1专业版，2旗舰版，3普惠版
     * @param string $RiskStatus 风险状态：UNKNOW-未知，RISK-风险，SAFT-安全
     * @param integer $ProtectDays 已防护天数
     * @param string $BuyTime 专业版开通时间
     * @param string $EndTime 专业版到期时间
     * @param string $CoreVersion 内核版本
     * @param string $OsType linux/windows
     * @param string $AgentVersion agent版本
     * @param string $InstallTime 安装时间
     * @param string $BootTime 系统启动时间
     * @param string $LastLiveTime 最后上线时间
     * @param string $Producer 生产商
     * @param string $SerialNumber 序列号
     * @param array $NetCards 网卡
     * @param array $Disks 分区
     * @param integer $Status 0在线，1已离线
     * @param integer $ProjectId 业务组ID
     * @param string $DeviceVersion 设备型号
     * @param string $OfflineTime 离线时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 主机ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param MachineExtraInfo $MachineExtraInfo 主机二外信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemLoad",$param) and $param["MemLoad"] !== null) {
            $this->MemLoad = $param["MemLoad"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskLoad",$param) and $param["DiskLoad"] !== null) {
            $this->DiskLoad = $param["DiskLoad"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("CpuSize",$param) and $param["CpuSize"] !== null) {
            $this->CpuSize = $param["CpuSize"];
        }

        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = $param["CpuLoad"];
        }

        if (array_key_exists("ProtectLevel",$param) and $param["ProtectLevel"] !== null) {
            $this->ProtectLevel = $param["ProtectLevel"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("ProtectDays",$param) and $param["ProtectDays"] !== null) {
            $this->ProtectDays = $param["ProtectDays"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CoreVersion",$param) and $param["CoreVersion"] !== null) {
            $this->CoreVersion = $param["CoreVersion"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("InstallTime",$param) and $param["InstallTime"] !== null) {
            $this->InstallTime = $param["InstallTime"];
        }

        if (array_key_exists("BootTime",$param) and $param["BootTime"] !== null) {
            $this->BootTime = $param["BootTime"];
        }

        if (array_key_exists("LastLiveTime",$param) and $param["LastLiveTime"] !== null) {
            $this->LastLiveTime = $param["LastLiveTime"];
        }

        if (array_key_exists("Producer",$param) and $param["Producer"] !== null) {
            $this->Producer = $param["Producer"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("NetCards",$param) and $param["NetCards"] !== null) {
            $this->NetCards = [];
            foreach ($param["NetCards"] as $key => $value){
                $obj = new AssetNetworkCardInfo();
                $obj->deserialize($value);
                array_push($this->NetCards, $obj);
            }
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = [];
            foreach ($param["Disks"] as $key => $value){
                $obj = new AssetDiskPartitionInfo();
                $obj->deserialize($value);
                array_push($this->Disks, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceVersion",$param) and $param["DeviceVersion"] !== null) {
            $this->DeviceVersion = $param["DeviceVersion"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
