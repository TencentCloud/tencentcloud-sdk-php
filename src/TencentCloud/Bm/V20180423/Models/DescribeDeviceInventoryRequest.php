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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getDeviceClassCode() 获取设备型号
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置设备型号
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method integer getCpuId() 获取CpuId，自定义机型时需传入
 * @method void setCpuId(integer $CpuId) 设置CpuId，自定义机型时需传入
 * @method string getDiskType() 获取硬盘类型，自定义机型时需传入
 * @method void setDiskType(string $DiskType) 设置硬盘类型，自定义机型时需传入
 * @method integer getDiskSize() 获取单块硬盘大小，自定义机型时需传入
 * @method void setDiskSize(integer $DiskSize) 设置单块硬盘大小，自定义机型时需传入
 * @method integer getDiskNum() 获取硬盘数量，自定义机型时需传入
 * @method void setDiskNum(integer $DiskNum) 设置硬盘数量，自定义机型时需传入
 * @method integer getMem() 获取内存总大小，自定义机型时需传入
 * @method void setMem(integer $Mem) 设置内存总大小，自定义机型时需传入
 * @method integer getHaveRaidCard() 获取是否支持raid，自定义机型时需传入
 * @method void setHaveRaidCard(integer $HaveRaidCard) 设置是否支持raid，自定义机型时需传入
 */

/**
 *DescribeDeviceInventory请求参数结构体
 */
class DescribeDeviceInventoryRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 设备型号
     */
    public $DeviceClassCode;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var integer CpuId，自定义机型时需传入
     */
    public $CpuId;

    /**
     * @var string 硬盘类型，自定义机型时需传入
     */
    public $DiskType;

    /**
     * @var integer 单块硬盘大小，自定义机型时需传入
     */
    public $DiskSize;

    /**
     * @var integer 硬盘数量，自定义机型时需传入
     */
    public $DiskNum;

    /**
     * @var integer 内存总大小，自定义机型时需传入
     */
    public $Mem;

    /**
     * @var integer 是否支持raid，自定义机型时需传入
     */
    public $HaveRaidCard;
    /**
     * @param string $Zone 可用区
     * @param string $DeviceClassCode 设备型号
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param integer $CpuId CpuId，自定义机型时需传入
     * @param string $DiskType 硬盘类型，自定义机型时需传入
     * @param integer $DiskSize 单块硬盘大小，自定义机型时需传入
     * @param integer $DiskNum 硬盘数量，自定义机型时需传入
     * @param integer $Mem 内存总大小，自定义机型时需传入
     * @param integer $HaveRaidCard 是否支持raid，自定义机型时需传入
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CpuId",$param) and $param["CpuId"] !== null) {
            $this->CpuId = $param["CpuId"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskNum",$param) and $param["DiskNum"] !== null) {
            $this->DiskNum = $param["DiskNum"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("HaveRaidCard",$param) and $param["HaveRaidCard"] !== null) {
            $this->HaveRaidCard = $param["HaveRaidCard"];
        }
    }
}
