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
 * @method void setDeviceType(string $DeviceType) 设置设备类型。
 * @method Placement getPlacement() 获取所属可用区
 * @method void setPlacement(Placement $Placement) 设置所属可用区
 * @method VirtualPrivateCloud getBmcVirtualPrivateCloud() 获取带外网络。
 * @method void setBmcVirtualPrivateCloud(VirtualPrivateCloud $BmcVirtualPrivateCloud) 设置带外网络。
 * @method string getBmcIp() 获取带外网络Ip。
 * @method void setBmcIp(string $BmcIp) 设置带外网络Ip。
 * @method array getBmcSecurityGroupIds() 获取带外网络安全组Id。
 * @method void setBmcSecurityGroupIds(array $BmcSecurityGroupIds) 设置带外网络安全组Id。
 * @method VirtualPrivateCloud getDeployVirtualPrivateCloud() 获取部署网络。
 * @method void setDeployVirtualPrivateCloud(VirtualPrivateCloud $DeployVirtualPrivateCloud) 设置部署网络。
 * @method string getDeployIp() 获取部署网络Ip。
 * @method void setDeployIp(string $DeployIp) 设置部署网络Ip。
 * @method array getDeploySecurityGroupIds() 获取部署网络安全组Id。
 * @method void setDeploySecurityGroupIds(array $DeploySecurityGroupIds) 设置部署网络安全组Id。
 * @method string getCvmInstanceId() 获取关联的云主机Id。
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置关联的云主机Id。
 * @method string getCreatedTime() 获取服务器导入的时间。
 * @method void setCreatedTime(string $CreatedTime) 设置服务器导入的时间。
 * @method string getHardwareDescription() 获取机型的硬件描述，分别为CPU核数，内存容量和磁盘容量
 * @method void setHardwareDescription(string $HardwareDescription) 设置机型的硬件描述，分别为CPU核数，内存容量和磁盘容量
 * @method integer getCPU() 获取CHC物理服务器的CPU核数
 * @method void setCPU(integer $CPU) 设置CHC物理服务器的CPU核数
 * @method integer getMemory() 获取CHC物理服务器的内存大小，单位为GB
 * @method void setMemory(integer $Memory) 设置CHC物理服务器的内存大小，单位为GB
 * @method string getDisk() 获取CHC物理服务器的磁盘信息
 * @method void setDisk(string $Disk) 设置CHC物理服务器的磁盘信息
 * @method string getBmcMAC() 获取带外网络下分配的MAC地址
 * @method void setBmcMAC(string $BmcMAC) 设置带外网络下分配的MAC地址
 * @method string getDeployMAC() 获取部署网络下分配的MAC地址
 * @method void setDeployMAC(string $DeployMAC) 设置部署网络下分配的MAC地址
 * @method string getTenantType() 获取设备托管类型。
HOSTING: 托管
TENANT: 租赁
 * @method void setTenantType(string $TenantType) 设置设备托管类型。
HOSTING: 托管
TENANT: 租赁
 * @method ChcDeployExtraConfig getDeployExtraConfig() 获取chc dhcp选项，用于minios调试。
 * @method void setDeployExtraConfig(ChcDeployExtraConfig $DeployExtraConfig) 设置chc dhcp选项，用于minios调试。
 * @method string getGpu() 获取GPU型号。
 * @method void setGpu(string $Gpu) 设置GPU型号。
 * @method string getNetworkCard() 获取网卡型号。主要指RDMA网卡。
 * @method void setNetworkCard(string $NetworkCard) 设置网卡型号。主要指RDMA网卡。
 * @method boolean getIsPredefinedType() 获取是否是预定义机型。
 * @method void setIsPredefinedType(boolean $IsPredefinedType) 设置是否是预定义机型。
 * @method string getChcInstanceType() 获取CHC云主机机型。
 * @method void setChcInstanceType(string $ChcInstanceType) 设置CHC云主机机型。
 * @method string getChcInstanceFamily() 获取CHC云主机机型簇。
 * @method void setChcInstanceFamily(string $ChcInstanceFamily) 设置CHC云主机机型簇。
 * @method string getChcInstanceFamilyName() 获取CHC云主机机型簇名称。
 * @method void setChcInstanceFamilyName(string $ChcInstanceFamilyName) 设置CHC云主机机型簇名称。
 * @method string getResaleAppId() 获取转售客户的AppId。
 * @method void setResaleAppId(string $ResaleAppId) 设置转售客户的AppId。
 * @method string getResaleAccountId() 获取转售客户的账号ID。
 * @method void setResaleAccountId(string $ResaleAccountId) 设置转售客户的账号ID。
 * @method string getSaleStatus() 获取售卖状态。<br/>
<ul>
<li>NOT_FOR_SALE:不可售卖</li>
<li>AVAILABLE: 可售卖</li>
<li>SOLD: 已售卖</li>
</ul>

 * @method void setSaleStatus(string $SaleStatus) 设置售卖状态。<br/>
<ul>
<li>NOT_FOR_SALE:不可售卖</li>
<li>AVAILABLE: 可售卖</li>
<li>SOLD: 已售卖</li>
</ul>

 * @method array getTags() 获取CHC物理服务器关联的标签列表。
 * @method void setTags(array $Tags) 设置CHC物理服务器关联的标签列表。
 * @method string getLatestOperation() 获取最近操作
 * @method void setLatestOperation(string $LatestOperation) 设置最近操作
 * @method string getLatestOperationErrorCode() 获取最近操作错误码
 * @method void setLatestOperationErrorCode(string $LatestOperationErrorCode) 设置最近操作错误码
 * @method string getLatestOperationErrorMsg() 获取最近操作错误详情和建议项
 * @method void setLatestOperationErrorMsg(string $LatestOperationErrorMsg) 设置最近操作错误详情和建议项
 * @method string getLatestOperationName() 获取最近操作名称
 * @method void setLatestOperationName(string $LatestOperationName) 设置最近操作名称
 * @method string getLatestOperationState() 获取最近操作状态
 * @method void setLatestOperationState(string $LatestOperationState) 设置最近操作状态
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
     */
    public $DeviceType;

    /**
     * @var Placement 所属可用区
     */
    public $Placement;

    /**
     * @var VirtualPrivateCloud 带外网络。
     */
    public $BmcVirtualPrivateCloud;

    /**
     * @var string 带外网络Ip。
     */
    public $BmcIp;

    /**
     * @var array 带外网络安全组Id。
     */
    public $BmcSecurityGroupIds;

    /**
     * @var VirtualPrivateCloud 部署网络。
     */
    public $DeployVirtualPrivateCloud;

    /**
     * @var string 部署网络Ip。
     */
    public $DeployIp;

    /**
     * @var array 部署网络安全组Id。
     */
    public $DeploySecurityGroupIds;

    /**
     * @var string 关联的云主机Id。
     */
    public $CvmInstanceId;

    /**
     * @var string 服务器导入的时间。
     */
    public $CreatedTime;

    /**
     * @var string 机型的硬件描述，分别为CPU核数，内存容量和磁盘容量
     */
    public $HardwareDescription;

    /**
     * @var integer CHC物理服务器的CPU核数
     */
    public $CPU;

    /**
     * @var integer CHC物理服务器的内存大小，单位为GB
     */
    public $Memory;

    /**
     * @var string CHC物理服务器的磁盘信息
     */
    public $Disk;

    /**
     * @var string 带外网络下分配的MAC地址
     */
    public $BmcMAC;

    /**
     * @var string 部署网络下分配的MAC地址
     */
    public $DeployMAC;

    /**
     * @var string 设备托管类型。
HOSTING: 托管
TENANT: 租赁
     */
    public $TenantType;

    /**
     * @var ChcDeployExtraConfig chc dhcp选项，用于minios调试。
     */
    public $DeployExtraConfig;

    /**
     * @var string GPU型号。
     */
    public $Gpu;

    /**
     * @var string 网卡型号。主要指RDMA网卡。
     */
    public $NetworkCard;

    /**
     * @var boolean 是否是预定义机型。
     */
    public $IsPredefinedType;

    /**
     * @var string CHC云主机机型。
     */
    public $ChcInstanceType;

    /**
     * @var string CHC云主机机型簇。
     */
    public $ChcInstanceFamily;

    /**
     * @var string CHC云主机机型簇名称。
     */
    public $ChcInstanceFamilyName;

    /**
     * @var string 转售客户的AppId。
     */
    public $ResaleAppId;

    /**
     * @var string 转售客户的账号ID。
     */
    public $ResaleAccountId;

    /**
     * @var string 售卖状态。<br/>
<ul>
<li>NOT_FOR_SALE:不可售卖</li>
<li>AVAILABLE: 可售卖</li>
<li>SOLD: 已售卖</li>
</ul>

     */
    public $SaleStatus;

    /**
     * @var array CHC物理服务器关联的标签列表。
     */
    public $Tags;

    /**
     * @var string 最近操作
     */
    public $LatestOperation;

    /**
     * @var string 最近操作错误码
     */
    public $LatestOperationErrorCode;

    /**
     * @var string 最近操作错误详情和建议项
     */
    public $LatestOperationErrorMsg;

    /**
     * @var string 最近操作名称
     */
    public $LatestOperationName;

    /**
     * @var string 最近操作状态
     */
    public $LatestOperationState;

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
     * @param Placement $Placement 所属可用区
     * @param VirtualPrivateCloud $BmcVirtualPrivateCloud 带外网络。
     * @param string $BmcIp 带外网络Ip。
     * @param array $BmcSecurityGroupIds 带外网络安全组Id。
     * @param VirtualPrivateCloud $DeployVirtualPrivateCloud 部署网络。
     * @param string $DeployIp 部署网络Ip。
     * @param array $DeploySecurityGroupIds 部署网络安全组Id。
     * @param string $CvmInstanceId 关联的云主机Id。
     * @param string $CreatedTime 服务器导入的时间。
     * @param string $HardwareDescription 机型的硬件描述，分别为CPU核数，内存容量和磁盘容量
     * @param integer $CPU CHC物理服务器的CPU核数
     * @param integer $Memory CHC物理服务器的内存大小，单位为GB
     * @param string $Disk CHC物理服务器的磁盘信息
     * @param string $BmcMAC 带外网络下分配的MAC地址
     * @param string $DeployMAC 部署网络下分配的MAC地址
     * @param string $TenantType 设备托管类型。
HOSTING: 托管
TENANT: 租赁
     * @param ChcDeployExtraConfig $DeployExtraConfig chc dhcp选项，用于minios调试。
     * @param string $Gpu GPU型号。
     * @param string $NetworkCard 网卡型号。主要指RDMA网卡。
     * @param boolean $IsPredefinedType 是否是预定义机型。
     * @param string $ChcInstanceType CHC云主机机型。
     * @param string $ChcInstanceFamily CHC云主机机型簇。
     * @param string $ChcInstanceFamilyName CHC云主机机型簇名称。
     * @param string $ResaleAppId 转售客户的AppId。
     * @param string $ResaleAccountId 转售客户的账号ID。
     * @param string $SaleStatus 售卖状态。<br/>
<ul>
<li>NOT_FOR_SALE:不可售卖</li>
<li>AVAILABLE: 可售卖</li>
<li>SOLD: 已售卖</li>
</ul>

     * @param array $Tags CHC物理服务器关联的标签列表。
     * @param string $LatestOperation 最近操作
     * @param string $LatestOperationErrorCode 最近操作错误码
     * @param string $LatestOperationErrorMsg 最近操作错误详情和建议项
     * @param string $LatestOperationName 最近操作名称
     * @param string $LatestOperationState 最近操作状态
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

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }

        if (array_key_exists("IsPredefinedType",$param) and $param["IsPredefinedType"] !== null) {
            $this->IsPredefinedType = $param["IsPredefinedType"];
        }

        if (array_key_exists("ChcInstanceType",$param) and $param["ChcInstanceType"] !== null) {
            $this->ChcInstanceType = $param["ChcInstanceType"];
        }

        if (array_key_exists("ChcInstanceFamily",$param) and $param["ChcInstanceFamily"] !== null) {
            $this->ChcInstanceFamily = $param["ChcInstanceFamily"];
        }

        if (array_key_exists("ChcInstanceFamilyName",$param) and $param["ChcInstanceFamilyName"] !== null) {
            $this->ChcInstanceFamilyName = $param["ChcInstanceFamilyName"];
        }

        if (array_key_exists("ResaleAppId",$param) and $param["ResaleAppId"] !== null) {
            $this->ResaleAppId = $param["ResaleAppId"];
        }

        if (array_key_exists("ResaleAccountId",$param) and $param["ResaleAccountId"] !== null) {
            $this->ResaleAccountId = $param["ResaleAccountId"];
        }

        if (array_key_exists("SaleStatus",$param) and $param["SaleStatus"] !== null) {
            $this->SaleStatus = $param["SaleStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationErrorCode",$param) and $param["LatestOperationErrorCode"] !== null) {
            $this->LatestOperationErrorCode = $param["LatestOperationErrorCode"];
        }

        if (array_key_exists("LatestOperationErrorMsg",$param) and $param["LatestOperationErrorMsg"] !== null) {
            $this->LatestOperationErrorMsg = $param["LatestOperationErrorMsg"];
        }

        if (array_key_exists("LatestOperationName",$param) and $param["LatestOperationName"] !== null) {
            $this->LatestOperationName = $param["LatestOperationName"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }
    }
}
