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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CHC物理服务器信息
 *
 * @method string getChcId() 获取CHC物理服务器ID。
 * @method void setChcId(string $ChcId) 设置CHC物理服务器ID。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getSerialNumber() 获取服务器序列号。
 * @method void setSerialNumber(string $SerialNumber) 设置服务器序列号。
 * @method string getInstanceState() 获取CHC的状态<br/>
<ul>
<li>INIT: 设备已录入。还未配置带外和部署网络</li>
<li>READY: 已配置带外和部署网络</li>
<li>PREPARED: 可分配云主机</li>
<li>ONLINE: 已分配云主机</li>
<li>OPERATING: 设备操作中，如正在配置带外网络等。</li>
<li>CLEAR_NETWORK_FAILED: 清理带外和部署网络失败</li>
</ul>
 * @method void setInstanceState(string $InstanceState) 设置CHC的状态<br/>
<ul>
<li>INIT: 设备已录入。还未配置带外和部署网络</li>
<li>READY: 已配置带外和部署网络</li>
<li>PREPARED: 可分配云主机</li>
<li>ONLINE: 已分配云主机</li>
<li>OPERATING: 设备操作中，如正在配置带外网络等。</li>
<li>CLEAR_NETWORK_FAILED: 清理带外和部署网络失败</li>
</ul>
 * @method string getDeviceType() 获取设备类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceType(string $DeviceType) 设置设备类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Placement getPlacement() 获取所属可用区
 * @method void setPlacement(Placement $Placement) 设置所属可用区
 * @method VirtualPrivateCloud getBmcVirtualPrivateCloud() 获取带外网络。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBmcVirtualPrivateCloud(VirtualPrivateCloud $BmcVirtualPrivateCloud) 设置带外网络。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBmcIp() 获取带外网络Ip。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBmcIp(string $BmcIp) 设置带外网络Ip。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBmcSecurityGroupIds() 获取带外网络安全组Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBmcSecurityGroupIds(array $BmcSecurityGroupIds) 设置带外网络安全组Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VirtualPrivateCloud getDeployVirtualPrivateCloud() 获取部署网络。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployVirtualPrivateCloud(VirtualPrivateCloud $DeployVirtualPrivateCloud) 设置部署网络。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployIp() 获取部署网络Ip。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployIp(string $DeployIp) 设置部署网络Ip。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeploySecurityGroupIds() 获取部署网络安全组Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeploySecurityGroupIds(array $DeploySecurityGroupIds) 设置部署网络安全组Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCvmInstanceId() 获取关联的云主机Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置关联的云主机Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取服务器导入的时间。
 * @method void setCreatedTime(string $CreatedTime) 设置服务器导入的时间。
 * @method string getHardwareDescription() 获取机型的硬件描述，分别为CPU核数，内存容量和磁盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHardwareDescription(string $HardwareDescription) 设置机型的硬件描述，分别为CPU核数，内存容量和磁盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCPU() 获取CHC物理服务器的CPU核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPU(integer $CPU) 设置CHC物理服务器的CPU核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取CHC物理服务器的内存大小，单位为GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置CHC物理服务器的内存大小，单位为GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisk() 获取CHC物理服务器的磁盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisk(string $Disk) 设置CHC物理服务器的磁盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBmcMAC() 获取带外网络下分配的MAC地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBmcMAC(string $BmcMAC) 设置带外网络下分配的MAC地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployMAC() 获取部署网络下分配的MAC地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployMAC(string $DeployMAC) 设置部署网络下分配的MAC地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantType() 获取设备托管类型。
HOSTING: 托管
TENANT: 租赁
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantType(string $TenantType) 设置设备托管类型。
HOSTING: 托管
TENANT: 租赁
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChcDeployExtraConfig getDeployExtraConfig() 获取chc dhcp选项，用于minios调试
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployExtraConfig(ChcDeployExtraConfig $DeployExtraConfig) 设置chc dhcp选项，用于minios调试
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChcHost extends AbstractModel
{
    /**
     * @var string CHC物理服务器ID。
     */
    public $ChcId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 服务器序列号。
     */
    public $SerialNumber;

    /**
     * @var string CHC的状态<br/>
<ul>
<li>INIT: 设备已录入。还未配置带外和部署网络</li>
<li>READY: 已配置带外和部署网络</li>
<li>PREPARED: 可分配云主机</li>
<li>ONLINE: 已分配云主机</li>
<li>OPERATING: 设备操作中，如正在配置带外网络等。</li>
<li>CLEAR_NETWORK_FAILED: 清理带外和部署网络失败</li>
</ul>
     */
    public $InstanceState;

    /**
     * @var string 设备类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceType;

    /**
     * @var Placement 所属可用区
     */
    public $Placement;

    /**
     * @var VirtualPrivateCloud 带外网络。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BmcVirtualPrivateCloud;

    /**
     * @var string 带外网络Ip。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BmcIp;

    /**
     * @var array 带外网络安全组Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BmcSecurityGroupIds;

    /**
     * @var VirtualPrivateCloud 部署网络。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployVirtualPrivateCloud;

    /**
     * @var string 部署网络Ip。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployIp;

    /**
     * @var array 部署网络安全组Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeploySecurityGroupIds;

    /**
     * @var string 关联的云主机Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvmInstanceId;

    /**
     * @var string 服务器导入的时间。
     */
    public $CreatedTime;

    /**
     * @var string 机型的硬件描述，分别为CPU核数，内存容量和磁盘容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HardwareDescription;

    /**
     * @var integer CHC物理服务器的CPU核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPU;

    /**
     * @var integer CHC物理服务器的内存大小，单位为GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var string CHC物理服务器的磁盘信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disk;

    /**
     * @var string 带外网络下分配的MAC地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BmcMAC;

    /**
     * @var string 部署网络下分配的MAC地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployMAC;

    /**
     * @var string 设备托管类型。
HOSTING: 托管
TENANT: 租赁
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantType;

    /**
     * @var ChcDeployExtraConfig chc dhcp选项，用于minios调试
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployExtraConfig;

    /**
     * @param string $ChcId CHC物理服务器ID。
     * @param string $InstanceName 实例名称。
     * @param string $SerialNumber 服务器序列号。
     * @param string $InstanceState CHC的状态<br/>
<ul>
<li>INIT: 设备已录入。还未配置带外和部署网络</li>
<li>READY: 已配置带外和部署网络</li>
<li>PREPARED: 可分配云主机</li>
<li>ONLINE: 已分配云主机</li>
<li>OPERATING: 设备操作中，如正在配置带外网络等。</li>
<li>CLEAR_NETWORK_FAILED: 清理带外和部署网络失败</li>
</ul>
     * @param string $DeviceType 设备类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Placement $Placement 所属可用区
     * @param VirtualPrivateCloud $BmcVirtualPrivateCloud 带外网络。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BmcIp 带外网络Ip。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BmcSecurityGroupIds 带外网络安全组Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VirtualPrivateCloud $DeployVirtualPrivateCloud 部署网络。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployIp 部署网络Ip。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeploySecurityGroupIds 部署网络安全组Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CvmInstanceId 关联的云主机Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 服务器导入的时间。
     * @param string $HardwareDescription 机型的硬件描述，分别为CPU核数，内存容量和磁盘容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CPU CHC物理服务器的CPU核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory CHC物理服务器的内存大小，单位为GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Disk CHC物理服务器的磁盘信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BmcMAC 带外网络下分配的MAC地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployMAC 部署网络下分配的MAC地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantType 设备托管类型。
HOSTING: 托管
TENANT: 租赁
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChcDeployExtraConfig $DeployExtraConfig chc dhcp选项，用于minios调试
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
        if (array_key_exists("ChcId",$param) and $param["ChcId"] !== null) {
            $this->ChcId = $param["ChcId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("BmcVirtualPrivateCloud",$param) and $param["BmcVirtualPrivateCloud"] !== null) {
            $this->BmcVirtualPrivateCloud = new VirtualPrivateCloud();
            $this->BmcVirtualPrivateCloud->deserialize($param["BmcVirtualPrivateCloud"]);
        }

        if (array_key_exists("BmcIp",$param) and $param["BmcIp"] !== null) {
            $this->BmcIp = $param["BmcIp"];
        }

        if (array_key_exists("BmcSecurityGroupIds",$param) and $param["BmcSecurityGroupIds"] !== null) {
            $this->BmcSecurityGroupIds = $param["BmcSecurityGroupIds"];
        }

        if (array_key_exists("DeployVirtualPrivateCloud",$param) and $param["DeployVirtualPrivateCloud"] !== null) {
            $this->DeployVirtualPrivateCloud = new VirtualPrivateCloud();
            $this->DeployVirtualPrivateCloud->deserialize($param["DeployVirtualPrivateCloud"]);
        }

        if (array_key_exists("DeployIp",$param) and $param["DeployIp"] !== null) {
            $this->DeployIp = $param["DeployIp"];
        }

        if (array_key_exists("DeploySecurityGroupIds",$param) and $param["DeploySecurityGroupIds"] !== null) {
            $this->DeploySecurityGroupIds = $param["DeploySecurityGroupIds"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("HardwareDescription",$param) and $param["HardwareDescription"] !== null) {
            $this->HardwareDescription = $param["HardwareDescription"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("BmcMAC",$param) and $param["BmcMAC"] !== null) {
            $this->BmcMAC = $param["BmcMAC"];
        }

        if (array_key_exists("DeployMAC",$param) and $param["DeployMAC"] !== null) {
            $this->DeployMAC = $param["DeployMAC"];
        }

        if (array_key_exists("TenantType",$param) and $param["TenantType"] !== null) {
            $this->TenantType = $param["TenantType"];
        }

        if (array_key_exists("DeployExtraConfig",$param) and $param["DeployExtraConfig"] !== null) {
            $this->DeployExtraConfig = new ChcDeployExtraConfig();
            $this->DeployExtraConfig->deserialize($param["DeployExtraConfig"]);
        }
    }
}
