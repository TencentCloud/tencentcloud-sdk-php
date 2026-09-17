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
 * 账号在可用区下的机型配额信息，包含可用区、机型详情和配额数量。
 *
 * @method string getZone() 获取可用区代码。
 * @method void setZone(string $Zone) 设置可用区代码。
 * @method string getInstanceType() 获取机型规格。
 * @method void setInstanceType(string $InstanceType) 设置机型规格。
 * @method string getInstanceFamily() 获取机型家族。
 * @method void setInstanceFamily(string $InstanceFamily) 设置机型家族。
 * @method string getInstanceFamilyName() 获取机型族名称
 * @method void setInstanceFamilyName(string $InstanceFamilyName) 设置机型族名称
 * @method integer getCpuCores() 获取CPU核数。
 * @method void setCpuCores(integer $CpuCores) 设置CPU核数。
 * @method string getCpuType() 获取CPU类型。
 * @method void setCpuType(string $CpuType) 设置CPU类型。
 * @method integer getMemoryGb() 获取内存大小（GB）。
 * @method void setMemoryGb(integer $MemoryGb) 设置内存大小（GB）。
 * @method string getSystemDiskType() 获取系统盘类型。
 * @method void setSystemDiskType(string $SystemDiskType) 设置系统盘类型。
 * @method integer getSystemDiskSize() 获取系统盘大小（GB）。
 * @method void setSystemDiskSize(integer $SystemDiskSize) 设置系统盘大小（GB）。
 * @method integer getSystemDiskCount() 获取系统盘数量。
 * @method void setSystemDiskCount(integer $SystemDiskCount) 设置系统盘数量。
 * @method string getDataDiskType() 获取数据盘类型。
 * @method void setDataDiskType(string $DataDiskType) 设置数据盘类型。
 * @method integer getDataDiskSize() 获取数据盘大小（GB）。
 * @method void setDataDiskSize(integer $DataDiskSize) 设置数据盘大小（GB）。
 * @method integer getDataDiskCount() 获取数据盘数量。
 * @method void setDataDiskCount(integer $DataDiskCount) 设置数据盘数量。
 * @method string getSecondaryDataDiskType() 获取第二组数据盘类型
 * @method void setSecondaryDataDiskType(string $SecondaryDataDiskType) 设置第二组数据盘类型
 * @method integer getSecondaryDataDiskSize() 获取第二组数据盘大小(GB)
 * @method void setSecondaryDataDiskSize(integer $SecondaryDataDiskSize) 设置第二组数据盘大小(GB)
 * @method integer getSecondaryDataDiskCount() 获取第二组数据盘数量
 * @method void setSecondaryDataDiskCount(integer $SecondaryDataDiskCount) 设置第二组数据盘数量
 * @method string getDiskType() 获取磁盘描述字符串（向后兼容）。
 * @method void setDiskType(string $DiskType) 设置磁盘描述字符串（向后兼容）。
 * @method string getNetworkInterfaceType() 获取网络接口类型。
 * @method void setNetworkInterfaceType(string $NetworkInterfaceType) 设置网络接口类型。
 * @method string getGpuType() 获取GPU类型，无GPU时为空字符串。
 * @method void setGpuType(string $GpuType) 设置GPU类型，无GPU时为空字符串。
 * @method integer getQuota() 获取配额数量
 * @method void setQuota(integer $Quota) 设置配额数量
 */
class InstanceTypeQuota extends AbstractModel
{
    /**
     * @var string 可用区代码。
     */
    public $Zone;

    /**
     * @var string 机型规格。
     */
    public $InstanceType;

    /**
     * @var string 机型家族。
     */
    public $InstanceFamily;

    /**
     * @var string 机型族名称
     */
    public $InstanceFamilyName;

    /**
     * @var integer CPU核数。
     */
    public $CpuCores;

    /**
     * @var string CPU类型。
     */
    public $CpuType;

    /**
     * @var integer 内存大小（GB）。
     */
    public $MemoryGb;

    /**
     * @var string 系统盘类型。
     */
    public $SystemDiskType;

    /**
     * @var integer 系统盘大小（GB）。
     */
    public $SystemDiskSize;

    /**
     * @var integer 系统盘数量。
     */
    public $SystemDiskCount;

    /**
     * @var string 数据盘类型。
     */
    public $DataDiskType;

    /**
     * @var integer 数据盘大小（GB）。
     */
    public $DataDiskSize;

    /**
     * @var integer 数据盘数量。
     */
    public $DataDiskCount;

    /**
     * @var string 第二组数据盘类型
     */
    public $SecondaryDataDiskType;

    /**
     * @var integer 第二组数据盘大小(GB)
     */
    public $SecondaryDataDiskSize;

    /**
     * @var integer 第二组数据盘数量
     */
    public $SecondaryDataDiskCount;

    /**
     * @var string 磁盘描述字符串（向后兼容）。
     */
    public $DiskType;

    /**
     * @var string 网络接口类型。
     */
    public $NetworkInterfaceType;

    /**
     * @var string GPU类型，无GPU时为空字符串。
     */
    public $GpuType;

    /**
     * @var integer 配额数量
     */
    public $Quota;

    /**
     * @param string $Zone 可用区代码。
     * @param string $InstanceType 机型规格。
     * @param string $InstanceFamily 机型家族。
     * @param string $InstanceFamilyName 机型族名称
     * @param integer $CpuCores CPU核数。
     * @param string $CpuType CPU类型。
     * @param integer $MemoryGb 内存大小（GB）。
     * @param string $SystemDiskType 系统盘类型。
     * @param integer $SystemDiskSize 系统盘大小（GB）。
     * @param integer $SystemDiskCount 系统盘数量。
     * @param string $DataDiskType 数据盘类型。
     * @param integer $DataDiskSize 数据盘大小（GB）。
     * @param integer $DataDiskCount 数据盘数量。
     * @param string $SecondaryDataDiskType 第二组数据盘类型
     * @param integer $SecondaryDataDiskSize 第二组数据盘大小(GB)
     * @param integer $SecondaryDataDiskCount 第二组数据盘数量
     * @param string $DiskType 磁盘描述字符串（向后兼容）。
     * @param string $NetworkInterfaceType 网络接口类型。
     * @param string $GpuType GPU类型，无GPU时为空字符串。
     * @param integer $Quota 配额数量
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("InstanceFamilyName",$param) and $param["InstanceFamilyName"] !== null) {
            $this->InstanceFamilyName = $param["InstanceFamilyName"];
        }

        if (array_key_exists("CpuCores",$param) and $param["CpuCores"] !== null) {
            $this->CpuCores = $param["CpuCores"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("MemoryGb",$param) and $param["MemoryGb"] !== null) {
            $this->MemoryGb = $param["MemoryGb"];
        }

        if (array_key_exists("SystemDiskType",$param) and $param["SystemDiskType"] !== null) {
            $this->SystemDiskType = $param["SystemDiskType"];
        }

        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
        }

        if (array_key_exists("SystemDiskCount",$param) and $param["SystemDiskCount"] !== null) {
            $this->SystemDiskCount = $param["SystemDiskCount"];
        }

        if (array_key_exists("DataDiskType",$param) and $param["DataDiskType"] !== null) {
            $this->DataDiskType = $param["DataDiskType"];
        }

        if (array_key_exists("DataDiskSize",$param) and $param["DataDiskSize"] !== null) {
            $this->DataDiskSize = $param["DataDiskSize"];
        }

        if (array_key_exists("DataDiskCount",$param) and $param["DataDiskCount"] !== null) {
            $this->DataDiskCount = $param["DataDiskCount"];
        }

        if (array_key_exists("SecondaryDataDiskType",$param) and $param["SecondaryDataDiskType"] !== null) {
            $this->SecondaryDataDiskType = $param["SecondaryDataDiskType"];
        }

        if (array_key_exists("SecondaryDataDiskSize",$param) and $param["SecondaryDataDiskSize"] !== null) {
            $this->SecondaryDataDiskSize = $param["SecondaryDataDiskSize"];
        }

        if (array_key_exists("SecondaryDataDiskCount",$param) and $param["SecondaryDataDiskCount"] !== null) {
            $this->SecondaryDataDiskCount = $param["SecondaryDataDiskCount"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("NetworkInterfaceType",$param) and $param["NetworkInterfaceType"] !== null) {
            $this->NetworkInterfaceType = $param["NetworkInterfaceType"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }
    }
}
