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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HPC实例
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getCPU() 获取CPU数量
 * @method void setCPU(integer $CPU) 设置CPU数量
 * @method integer getMemory() 获取内存
 * @method void setMemory(integer $Memory) 设置内存
 * @method string getState() 获取状态
 * @method void setState(string $State) 设置状态
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getChargeType() 获取计费类型
 * @method void setChargeType(string $ChargeType) 设置计费类型
 * @method string getOSName() 获取系统名称
 * @method void setOSName(string $OSName) 设置系统名称
 * @method HPCDisk getSystemDisk() 获取系统盘
 * @method void setSystemDisk(HPCDisk $SystemDisk) 设置系统盘
 * @method HPCGPUInfo getGPUInfo() 获取GPU
 * @method void setGPUInfo(HPCGPUInfo $GPUInfo) 设置GPU
 * @method array getPrivateIPAddresses() 获取内网IP地址
 * @method void setPrivateIPAddresses(array $PrivateIPAddresses) 设置内网IP地址
 * @method array getPublicIPAddresses() 获取公网IP地址
 * @method void setPublicIPAddresses(array $PublicIPAddresses) 设置公网IP地址
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireTime() 获取到期时间
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
 * @method string getUuid() 获取Uuid
 * @method void setUuid(string $Uuid) 设置Uuid
 * @method HPCInternetInfo getInternetInfo() 获取节点网络信息
 * @method void setInternetInfo(HPCInternetInfo $InternetInfo) 设置节点网络信息
 */
class HPCInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer CPU数量
     */
    public $CPU;

    /**
     * @var integer 内存
     */
    public $Memory;

    /**
     * @var string 状态
     */
    public $State;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 计费类型
     */
    public $ChargeType;

    /**
     * @var string 系统名称
     */
    public $OSName;

    /**
     * @var HPCDisk 系统盘
     */
    public $SystemDisk;

    /**
     * @var HPCGPUInfo GPU
     */
    public $GPUInfo;

    /**
     * @var array 内网IP地址
     */
    public $PrivateIPAddresses;

    /**
     * @var array 公网IP地址
     */
    public $PublicIPAddresses;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 到期时间
     */
    public $ExpireTime;

    /**
     * @var string Uuid
     */
    public $Uuid;

    /**
     * @var HPCInternetInfo 节点网络信息
     */
    public $InternetInfo;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Name 名称
     * @param integer $CPU CPU数量
     * @param integer $Memory 内存
     * @param string $State 状态
     * @param string $Type 类型
     * @param string $ChargeType 计费类型
     * @param string $OSName 系统名称
     * @param HPCDisk $SystemDisk 系统盘
     * @param HPCGPUInfo $GPUInfo GPU
     * @param array $PrivateIPAddresses 内网IP地址
     * @param array $PublicIPAddresses 公网IP地址
     * @param string $CreateTime 创建时间
     * @param string $ExpireTime 到期时间
     * @param string $Uuid Uuid
     * @param HPCInternetInfo $InternetInfo 节点网络信息
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("OSName",$param) and $param["OSName"] !== null) {
            $this->OSName = $param["OSName"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new HPCDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("GPUInfo",$param) and $param["GPUInfo"] !== null) {
            $this->GPUInfo = new HPCGPUInfo();
            $this->GPUInfo->deserialize($param["GPUInfo"]);
        }

        if (array_key_exists("PrivateIPAddresses",$param) and $param["PrivateIPAddresses"] !== null) {
            $this->PrivateIPAddresses = $param["PrivateIPAddresses"];
        }

        if (array_key_exists("PublicIPAddresses",$param) and $param["PublicIPAddresses"] !== null) {
            $this->PublicIPAddresses = $param["PublicIPAddresses"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("InternetInfo",$param) and $param["InternetInfo"] !== null) {
            $this->InternetInfo = new HPCInternetInfo();
            $this->InternetInfo->deserialize($param["InternetInfo"]);
        }
    }
}
