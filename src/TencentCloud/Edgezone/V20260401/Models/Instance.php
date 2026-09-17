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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述物理机实例信息
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getMachineId() 获取<p>绑定的物理机ID</p>
 * @method void setMachineId(string $MachineId) 设置<p>绑定的物理机ID</p>
 * @method string getInstanceType() 获取<p>机型规格</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>机型规格</p>
 * @method string getZone() 获取<p>可用区代码</p>
 * @method void setZone(string $Zone) 设置<p>可用区代码</p>
 * @method string getImageId() 获取<p>镜像ID</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像ID</p>
 * @method string getVersionNumber() 获取<p>镜像版本号</p>
 * @method void setVersionNumber(string $VersionNumber) 设置<p>镜像版本号</p>
 * @method string getInstanceStatus() 获取<p>实例状态，可选值：allocating、running、isolating、isolated、terminating、error</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态，可选值：allocating、running、isolating、isolated、terminating、error</p>
 * @method string getOperateStatus() 获取<p>操作状态，可选值：normal、starting、stopping、stopped、rebooting</p>
 * @method void setOperateStatus(string $OperateStatus) 设置<p>操作状态，可选值：normal、starting、stopping、stopped、rebooting</p>
 * @method string getPrivateNetworkId() 获取<p>私有网络ID</p>
 * @method void setPrivateNetworkId(string $PrivateNetworkId) 设置<p>私有网络ID</p>
 * @method string getPrivateIp() 获取<p>私有IPv4地址</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>私有IPv4地址</p>
 * @method string getPrivateIpV6() 获取<p>私有IPv6地址</p>
 * @method void setPrivateIpV6(string $PrivateIpV6) 设置<p>私有IPv6地址</p>
 * @method string getPublicNetworkId() 获取<p>公网网络ID</p>
 * @method void setPublicNetworkId(string $PublicNetworkId) 设置<p>公网网络ID</p>
 * @method string getPublicIp() 获取<p>公网IPv4地址</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网IPv4地址</p>
 * @method string getPublicIpV6() 获取<p>公网IPv6地址</p>
 * @method void setPublicIpV6(string $PublicIpV6) 设置<p>公网IPv6地址</p>
 * @method string getFileSystemType() 获取<p>文件系统类型</p>
 * @method void setFileSystemType(string $FileSystemType) 设置<p>文件系统类型</p>
 * @method string getCreatedTime() 获取<p>创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。</p>
 * @method string getInstanceFamily() 获取<p>机型族标识</p>
 * @method void setInstanceFamily(string $InstanceFamily) 设置<p>机型族标识</p>
 * @method string getInstanceFamilyName() 获取<p>机型族名称</p>
 * @method void setInstanceFamilyName(string $InstanceFamilyName) 设置<p>机型族名称</p>
 * @method string getCpuType() 获取<p>CPU 型号</p>
 * @method void setCpuType(string $CpuType) 设置<p>CPU 型号</p>
 * @method integer getCpu() 获取<p>CPU 核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>CPU 核数</p>
 * @method integer getMemory() 获取<p>内存大小</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小</p>
 */
class Instance extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>绑定的物理机ID</p>
     */
    public $MachineId;

    /**
     * @var string <p>机型规格</p>
     */
    public $InstanceType;

    /**
     * @var string <p>可用区代码</p>
     */
    public $Zone;

    /**
     * @var string <p>镜像ID</p>
     */
    public $ImageId;

    /**
     * @var string <p>镜像版本号</p>
     * @deprecated
     */
    public $VersionNumber;

    /**
     * @var string <p>实例状态，可选值：allocating、running、isolating、isolated、terminating、error</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>操作状态，可选值：normal、starting、stopping、stopped、rebooting</p>
     */
    public $OperateStatus;

    /**
     * @var string <p>私有网络ID</p>
     */
    public $PrivateNetworkId;

    /**
     * @var string <p>私有IPv4地址</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>私有IPv6地址</p>
     */
    public $PrivateIpV6;

    /**
     * @var string <p>公网网络ID</p>
     */
    public $PublicNetworkId;

    /**
     * @var string <p>公网IPv4地址</p>
     */
    public $PublicIp;

    /**
     * @var string <p>公网IPv6地址</p>
     */
    public $PublicIpV6;

    /**
     * @var string <p>文件系统类型</p>
     */
    public $FileSystemType;

    /**
     * @var string <p>创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>机型族标识</p>
     */
    public $InstanceFamily;

    /**
     * @var string <p>机型族名称</p>
     */
    public $InstanceFamilyName;

    /**
     * @var string <p>CPU 型号</p>
     */
    public $CpuType;

    /**
     * @var integer <p>CPU 核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存大小</p>
     */
    public $Memory;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $MachineId <p>绑定的物理机ID</p>
     * @param string $InstanceType <p>机型规格</p>
     * @param string $Zone <p>可用区代码</p>
     * @param string $ImageId <p>镜像ID</p>
     * @param string $VersionNumber <p>镜像版本号</p>
     * @param string $InstanceStatus <p>实例状态，可选值：allocating、running、isolating、isolated、terminating、error</p>
     * @param string $OperateStatus <p>操作状态，可选值：normal、starting、stopping、stopped、rebooting</p>
     * @param string $PrivateNetworkId <p>私有网络ID</p>
     * @param string $PrivateIp <p>私有IPv4地址</p>
     * @param string $PrivateIpV6 <p>私有IPv6地址</p>
     * @param string $PublicNetworkId <p>公网网络ID</p>
     * @param string $PublicIp <p>公网IPv4地址</p>
     * @param string $PublicIpV6 <p>公网IPv6地址</p>
     * @param string $FileSystemType <p>文件系统类型</p>
     * @param string $CreatedTime <p>创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。</p>
     * @param string $InstanceFamily <p>机型族标识</p>
     * @param string $InstanceFamilyName <p>机型族名称</p>
     * @param string $CpuType <p>CPU 型号</p>
     * @param integer $Cpu <p>CPU 核数</p>
     * @param integer $Memory <p>内存大小</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("MachineId",$param) and $param["MachineId"] !== null) {
            $this->MachineId = $param["MachineId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("OperateStatus",$param) and $param["OperateStatus"] !== null) {
            $this->OperateStatus = $param["OperateStatus"];
        }

        if (array_key_exists("PrivateNetworkId",$param) and $param["PrivateNetworkId"] !== null) {
            $this->PrivateNetworkId = $param["PrivateNetworkId"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PrivateIpV6",$param) and $param["PrivateIpV6"] !== null) {
            $this->PrivateIpV6 = $param["PrivateIpV6"];
        }

        if (array_key_exists("PublicNetworkId",$param) and $param["PublicNetworkId"] !== null) {
            $this->PublicNetworkId = $param["PublicNetworkId"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PublicIpV6",$param) and $param["PublicIpV6"] !== null) {
            $this->PublicIpV6 = $param["PublicIpV6"];
        }

        if (array_key_exists("FileSystemType",$param) and $param["FileSystemType"] !== null) {
            $this->FileSystemType = $param["FileSystemType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("InstanceFamilyName",$param) and $param["InstanceFamilyName"] !== null) {
            $this->InstanceFamilyName = $param["InstanceFamilyName"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }
    }
}
