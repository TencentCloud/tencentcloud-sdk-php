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
 * @method string getChcId() 获取<p>CHC物理服务器ID。</p>
 * @method void setChcId(string $ChcId) 设置<p>CHC物理服务器ID。</p>
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method string getSerialNumber() 获取<p>服务器序列号。</p>
 * @method void setSerialNumber(string $SerialNumber) 设置<p>服务器序列号。</p>
 * @method string getInstanceState() 获取<p>CHC的状态<br></p><ul><li>INIT: 设备已录入。还未配置带外和部署网络</li><li>READY: 已配置带外和部署网络</li><li>PREPARED: 可分配云主机</li><li>ONLINE: 已分配云主机</li><li>OPERATING: 设备操作中，如正在配置带外网络等。</li><li>CLEAR_NETWORK_FAILED: 清理带外和部署网络失败</li></ul>
 * @method void setInstanceState(string $InstanceState) 设置<p>CHC的状态<br></p><ul><li>INIT: 设备已录入。还未配置带外和部署网络</li><li>READY: 已配置带外和部署网络</li><li>PREPARED: 可分配云主机</li><li>ONLINE: 已分配云主机</li><li>OPERATING: 设备操作中，如正在配置带外网络等。</li><li>CLEAR_NETWORK_FAILED: 清理带外和部署网络失败</li></ul>
 * @method string getDeviceType() 获取<p>设备类型。</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>设备类型。</p>
 * @method Placement getPlacement() 获取<p>所属可用区。</p>
 * @method void setPlacement(Placement $Placement) 设置<p>所属可用区。</p>
 * @method VirtualPrivateCloud getBmcVirtualPrivateCloud() 获取<p>带外网络。</p>
 * @method void setBmcVirtualPrivateCloud(VirtualPrivateCloud $BmcVirtualPrivateCloud) 设置<p>带外网络。</p>
 * @method string getBmcIp() 获取<p>带外网络IP。</p>
 * @method void setBmcIp(string $BmcIp) 设置<p>带外网络IP。</p>
 * @method array getBmcSecurityGroupIds() 获取<p>带外网络安全组ID。</p>
 * @method void setBmcSecurityGroupIds(array $BmcSecurityGroupIds) 设置<p>带外网络安全组ID。</p>
 * @method VirtualPrivateCloud getDeployVirtualPrivateCloud() 获取<p>部署网络。</p>
 * @method void setDeployVirtualPrivateCloud(VirtualPrivateCloud $DeployVirtualPrivateCloud) 设置<p>部署网络。</p>
 * @method string getDeployIp() 获取<p>部署网络IP。</p>
 * @method void setDeployIp(string $DeployIp) 设置<p>部署网络IP。</p>
 * @method array getDeploySecurityGroupIds() 获取<p>部署网络安全组ID。</p>
 * @method void setDeploySecurityGroupIds(array $DeploySecurityGroupIds) 设置<p>部署网络安全组ID。</p>
 * @method string getCvmInstanceId() 获取<p>关联的云主机ID。</p>
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置<p>关联的云主机ID。</p>
 * @method string getCreatedTime() 获取<p>服务器导入的时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>服务器导入的时间。</p>
 * @method string getHardwareDescription() 获取<p>机型的硬件描述，分别为CPU核数，内存容量和磁盘容量。</p>
 * @method void setHardwareDescription(string $HardwareDescription) 设置<p>机型的硬件描述，分别为CPU核数，内存容量和磁盘容量。</p>
 * @method integer getCPU() 获取<p>CHC物理服务器的CPU核数。</p>
 * @method void setCPU(integer $CPU) 设置<p>CHC物理服务器的CPU核数。</p>
 * @method integer getMemory() 获取<p>CHC物理服务器的内存大小，单位为GB。</p>
 * @method void setMemory(integer $Memory) 设置<p>CHC物理服务器的内存大小，单位为GB。</p>
 * @method string getDisk() 获取<p>CHC物理服务器的磁盘信息。</p>
 * @method void setDisk(string $Disk) 设置<p>CHC物理服务器的磁盘信息。</p>
 * @method string getBmcMAC() 获取<p>带外网络下分配的MAC地址。</p>
 * @method void setBmcMAC(string $BmcMAC) 设置<p>带外网络下分配的MAC地址。</p>
 * @method string getDeployMAC() 获取<p>部署网络下分配的MAC地址。</p>
 * @method void setDeployMAC(string $DeployMAC) 设置<p>部署网络下分配的MAC地址。</p>
 * @method string getTenantType() 获取<p>设备托管类型。</p><p>枚举值：</p><ul><li>HOSTING： 托管类型。</li><li>TENANT： 租赁类型。</li></ul>
 * @method void setTenantType(string $TenantType) 设置<p>设备托管类型。</p><p>枚举值：</p><ul><li>HOSTING： 托管类型。</li><li>TENANT： 租赁类型。</li></ul>
 * @method ChcDeployExtraConfig getDeployExtraConfig() 获取<p>CHC DHCP选项，用于客户自建PXE环境。</p>
 * @method void setDeployExtraConfig(ChcDeployExtraConfig $DeployExtraConfig) 设置<p>CHC DHCP选项，用于客户自建PXE环境。</p>
 * @method string getGpu() 获取<p>GPU型号。</p>
 * @method void setGpu(string $Gpu) 设置<p>GPU型号。</p>
 * @method string getNetworkCard() 获取<p>网卡型号。主要指RDMA网卡。</p>
 * @method void setNetworkCard(string $NetworkCard) 设置<p>网卡型号。主要指RDMA网卡。</p>
 * @method boolean getIsPredefinedType() 获取<p>是否是预定义机型。</p>
 * @method void setIsPredefinedType(boolean $IsPredefinedType) 设置<p>是否是预定义机型。</p>
 * @method string getChcInstanceType() 获取<p>CHC云主机机型。</p>
 * @method void setChcInstanceType(string $ChcInstanceType) 设置<p>CHC云主机机型。</p>
 * @method string getChcInstanceFamily() 获取<p>CHC云主机机型簇。</p>
 * @method void setChcInstanceFamily(string $ChcInstanceFamily) 设置<p>CHC云主机机型簇。</p>
 * @method string getChcInstanceFamilyName() 获取<p>CHC云主机机型簇名称。</p>
 * @method void setChcInstanceFamilyName(string $ChcInstanceFamilyName) 设置<p>CHC云主机机型簇名称。</p>
 * @method string getResaleAppId() 获取<p>转售客户的AppID。</p>
 * @method void setResaleAppId(string $ResaleAppId) 设置<p>转售客户的AppID。</p>
 * @method string getResaleAccountId() 获取<p>转售客户的账号ID。</p>
 * @method void setResaleAccountId(string $ResaleAccountId) 设置<p>转售客户的账号ID。</p>
 * @method string getSaleStatus() 获取<p>售卖状态。<br></p><ul><li>NOT_FOR_SALE:不可售卖</li><li>AVAILABLE: 可售卖</li><li>SOLD: 已售卖</li></ul>
 * @method void setSaleStatus(string $SaleStatus) 设置<p>售卖状态。<br></p><ul><li>NOT_FOR_SALE:不可售卖</li><li>AVAILABLE: 可售卖</li><li>SOLD: 已售卖</li></ul>
 * @method array getTags() 获取<p>CHC物理服务器关联的标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>CHC物理服务器关联的标签列表。</p>
 * @method string getLatestOperation() 获取<p>最近操作。</p>
 * @method void setLatestOperation(string $LatestOperation) 设置<p>最近操作。</p>
 * @method string getLatestOperationErrorCode() 获取<p>最近操作错误码。</p>
 * @method void setLatestOperationErrorCode(string $LatestOperationErrorCode) 设置<p>最近操作错误码。</p>
 * @method string getLatestOperationErrorMsg() 获取<p>最近操作错误详情和建议项。</p>
 * @method void setLatestOperationErrorMsg(string $LatestOperationErrorMsg) 设置<p>最近操作错误详情和建议项。</p>
 * @method string getLatestOperationName() 获取<p>最近操作名称。</p>
 * @method void setLatestOperationName(string $LatestOperationName) 设置<p>最近操作名称。</p>
 * @method string getLatestOperationState() 获取<p>最近操作状态。</p><p>枚举值：</p><ul><li>SUCCESS： 成功。</li><li>FAILED： 失败。</li></ul>
 * @method void setLatestOperationState(string $LatestOperationState) 设置<p>最近操作状态。</p><p>枚举值：</p><ul><li>SUCCESS： 成功。</li><li>FAILED： 失败。</li></ul>
 * @method string getChcGatewayId() 获取<p>所在的CHC网关的ID，只有专属网关才会返回。</p>
 * @method void setChcGatewayId(string $ChcGatewayId) 设置<p>所在的CHC网关的ID，只有专属网关才会返回。</p>
 * @method string getDedicatedClusterId() 获取<p>所属的CDC集群ID。</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置<p>所属的CDC集群ID。</p>
 * @method string getNetworkMode() 获取<p>业务网卡网络模式。</p><p>枚举值：</p><ul><li>DEPLOY： 部署网络模式</li><li>BUSINESS： 业务网络模式</li></ul>
 * @method void setNetworkMode(string $NetworkMode) 设置<p>业务网卡网络模式。</p><p>枚举值：</p><ul><li>DEPLOY： 部署网络模式</li><li>BUSINESS： 业务网络模式</li></ul>
 */
class ChcHost extends AbstractModel
{
    /**
     * @var string <p>CHC物理服务器ID。</p>
     */
    public $ChcId;

    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var string <p>服务器序列号。</p>
     */
    public $SerialNumber;

    /**
     * @var string <p>CHC的状态<br></p><ul><li>INIT: 设备已录入。还未配置带外和部署网络</li><li>READY: 已配置带外和部署网络</li><li>PREPARED: 可分配云主机</li><li>ONLINE: 已分配云主机</li><li>OPERATING: 设备操作中，如正在配置带外网络等。</li><li>CLEAR_NETWORK_FAILED: 清理带外和部署网络失败</li></ul>
     */
    public $InstanceState;

    /**
     * @var string <p>设备类型。</p>
     */
    public $DeviceType;

    /**
     * @var Placement <p>所属可用区。</p>
     */
    public $Placement;

    /**
     * @var VirtualPrivateCloud <p>带外网络。</p>
     */
    public $BmcVirtualPrivateCloud;

    /**
     * @var string <p>带外网络IP。</p>
     */
    public $BmcIp;

    /**
     * @var array <p>带外网络安全组ID。</p>
     */
    public $BmcSecurityGroupIds;

    /**
     * @var VirtualPrivateCloud <p>部署网络。</p>
     */
    public $DeployVirtualPrivateCloud;

    /**
     * @var string <p>部署网络IP。</p>
     */
    public $DeployIp;

    /**
     * @var array <p>部署网络安全组ID。</p>
     */
    public $DeploySecurityGroupIds;

    /**
     * @var string <p>关联的云主机ID。</p>
     */
    public $CvmInstanceId;

    /**
     * @var string <p>服务器导入的时间。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>机型的硬件描述，分别为CPU核数，内存容量和磁盘容量。</p>
     */
    public $HardwareDescription;

    /**
     * @var integer <p>CHC物理服务器的CPU核数。</p>
     */
    public $CPU;

    /**
     * @var integer <p>CHC物理服务器的内存大小，单位为GB。</p>
     */
    public $Memory;

    /**
     * @var string <p>CHC物理服务器的磁盘信息。</p>
     */
    public $Disk;

    /**
     * @var string <p>带外网络下分配的MAC地址。</p>
     */
    public $BmcMAC;

    /**
     * @var string <p>部署网络下分配的MAC地址。</p>
     */
    public $DeployMAC;

    /**
     * @var string <p>设备托管类型。</p><p>枚举值：</p><ul><li>HOSTING： 托管类型。</li><li>TENANT： 租赁类型。</li></ul>
     */
    public $TenantType;

    /**
     * @var ChcDeployExtraConfig <p>CHC DHCP选项，用于客户自建PXE环境。</p>
     */
    public $DeployExtraConfig;

    /**
     * @var string <p>GPU型号。</p>
     */
    public $Gpu;

    /**
     * @var string <p>网卡型号。主要指RDMA网卡。</p>
     */
    public $NetworkCard;

    /**
     * @var boolean <p>是否是预定义机型。</p>
     */
    public $IsPredefinedType;

    /**
     * @var string <p>CHC云主机机型。</p>
     */
    public $ChcInstanceType;

    /**
     * @var string <p>CHC云主机机型簇。</p>
     */
    public $ChcInstanceFamily;

    /**
     * @var string <p>CHC云主机机型簇名称。</p>
     */
    public $ChcInstanceFamilyName;

    /**
     * @var string <p>转售客户的AppID。</p>
     */
    public $ResaleAppId;

    /**
     * @var string <p>转售客户的账号ID。</p>
     */
    public $ResaleAccountId;

    /**
     * @var string <p>售卖状态。<br></p><ul><li>NOT_FOR_SALE:不可售卖</li><li>AVAILABLE: 可售卖</li><li>SOLD: 已售卖</li></ul>
     */
    public $SaleStatus;

    /**
     * @var array <p>CHC物理服务器关联的标签列表。</p>
     */
    public $Tags;

    /**
     * @var string <p>最近操作。</p>
     */
    public $LatestOperation;

    /**
     * @var string <p>最近操作错误码。</p>
     */
    public $LatestOperationErrorCode;

    /**
     * @var string <p>最近操作错误详情和建议项。</p>
     */
    public $LatestOperationErrorMsg;

    /**
     * @var string <p>最近操作名称。</p>
     */
    public $LatestOperationName;

    /**
     * @var string <p>最近操作状态。</p><p>枚举值：</p><ul><li>SUCCESS： 成功。</li><li>FAILED： 失败。</li></ul>
     */
    public $LatestOperationState;

    /**
     * @var string <p>所在的CHC网关的ID，只有专属网关才会返回。</p>
     */
    public $ChcGatewayId;

    /**
     * @var string <p>所属的CDC集群ID。</p>
     */
    public $DedicatedClusterId;

    /**
     * @var string <p>业务网卡网络模式。</p><p>枚举值：</p><ul><li>DEPLOY： 部署网络模式</li><li>BUSINESS： 业务网络模式</li></ul>
     */
    public $NetworkMode;

    /**
     * @param string $ChcId <p>CHC物理服务器ID。</p>
     * @param string $InstanceName <p>实例名称。</p>
     * @param string $SerialNumber <p>服务器序列号。</p>
     * @param string $InstanceState <p>CHC的状态<br></p><ul><li>INIT: 设备已录入。还未配置带外和部署网络</li><li>READY: 已配置带外和部署网络</li><li>PREPARED: 可分配云主机</li><li>ONLINE: 已分配云主机</li><li>OPERATING: 设备操作中，如正在配置带外网络等。</li><li>CLEAR_NETWORK_FAILED: 清理带外和部署网络失败</li></ul>
     * @param string $DeviceType <p>设备类型。</p>
     * @param Placement $Placement <p>所属可用区。</p>
     * @param VirtualPrivateCloud $BmcVirtualPrivateCloud <p>带外网络。</p>
     * @param string $BmcIp <p>带外网络IP。</p>
     * @param array $BmcSecurityGroupIds <p>带外网络安全组ID。</p>
     * @param VirtualPrivateCloud $DeployVirtualPrivateCloud <p>部署网络。</p>
     * @param string $DeployIp <p>部署网络IP。</p>
     * @param array $DeploySecurityGroupIds <p>部署网络安全组ID。</p>
     * @param string $CvmInstanceId <p>关联的云主机ID。</p>
     * @param string $CreatedTime <p>服务器导入的时间。</p>
     * @param string $HardwareDescription <p>机型的硬件描述，分别为CPU核数，内存容量和磁盘容量。</p>
     * @param integer $CPU <p>CHC物理服务器的CPU核数。</p>
     * @param integer $Memory <p>CHC物理服务器的内存大小，单位为GB。</p>
     * @param string $Disk <p>CHC物理服务器的磁盘信息。</p>
     * @param string $BmcMAC <p>带外网络下分配的MAC地址。</p>
     * @param string $DeployMAC <p>部署网络下分配的MAC地址。</p>
     * @param string $TenantType <p>设备托管类型。</p><p>枚举值：</p><ul><li>HOSTING： 托管类型。</li><li>TENANT： 租赁类型。</li></ul>
     * @param ChcDeployExtraConfig $DeployExtraConfig <p>CHC DHCP选项，用于客户自建PXE环境。</p>
     * @param string $Gpu <p>GPU型号。</p>
     * @param string $NetworkCard <p>网卡型号。主要指RDMA网卡。</p>
     * @param boolean $IsPredefinedType <p>是否是预定义机型。</p>
     * @param string $ChcInstanceType <p>CHC云主机机型。</p>
     * @param string $ChcInstanceFamily <p>CHC云主机机型簇。</p>
     * @param string $ChcInstanceFamilyName <p>CHC云主机机型簇名称。</p>
     * @param string $ResaleAppId <p>转售客户的AppID。</p>
     * @param string $ResaleAccountId <p>转售客户的账号ID。</p>
     * @param string $SaleStatus <p>售卖状态。<br></p><ul><li>NOT_FOR_SALE:不可售卖</li><li>AVAILABLE: 可售卖</li><li>SOLD: 已售卖</li></ul>
     * @param array $Tags <p>CHC物理服务器关联的标签列表。</p>
     * @param string $LatestOperation <p>最近操作。</p>
     * @param string $LatestOperationErrorCode <p>最近操作错误码。</p>
     * @param string $LatestOperationErrorMsg <p>最近操作错误详情和建议项。</p>
     * @param string $LatestOperationName <p>最近操作名称。</p>
     * @param string $LatestOperationState <p>最近操作状态。</p><p>枚举值：</p><ul><li>SUCCESS： 成功。</li><li>FAILED： 失败。</li></ul>
     * @param string $ChcGatewayId <p>所在的CHC网关的ID，只有专属网关才会返回。</p>
     * @param string $DedicatedClusterId <p>所属的CDC集群ID。</p>
     * @param string $NetworkMode <p>业务网卡网络模式。</p><p>枚举值：</p><ul><li>DEPLOY： 部署网络模式</li><li>BUSINESS： 业务网络模式</li></ul>
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

        if (array_key_exists("ChcGatewayId",$param) and $param["ChcGatewayId"] !== null) {
            $this->ChcGatewayId = $param["ChcGatewayId"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("NetworkMode",$param) and $param["NetworkMode"] !== null) {
            $this->NetworkMode = $param["NetworkMode"];
        }
    }
}
