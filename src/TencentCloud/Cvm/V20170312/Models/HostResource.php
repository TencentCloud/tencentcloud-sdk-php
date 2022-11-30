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
 * 专用宿主机实例的资源信息
 *
 * @method integer getCpuTotal() 获取专用宿主机实例总CPU核数
 * @method void setCpuTotal(integer $CpuTotal) 设置专用宿主机实例总CPU核数
 * @method integer getCpuAvailable() 获取专用宿主机实例可用CPU核数
 * @method void setCpuAvailable(integer $CpuAvailable) 设置专用宿主机实例可用CPU核数
 * @method float getMemTotal() 获取专用宿主机实例总内存大小（单位为:GiB）
 * @method void setMemTotal(float $MemTotal) 设置专用宿主机实例总内存大小（单位为:GiB）
 * @method float getMemAvailable() 获取专用宿主机实例可用内存大小（单位为:GiB）
 * @method void setMemAvailable(float $MemAvailable) 设置专用宿主机实例可用内存大小（单位为:GiB）
 * @method integer getDiskTotal() 获取专用宿主机实例总磁盘大小（单位为:GiB）
 * @method void setDiskTotal(integer $DiskTotal) 设置专用宿主机实例总磁盘大小（单位为:GiB）
 * @method integer getDiskAvailable() 获取专用宿主机实例可用磁盘大小（单位为:GiB）
 * @method void setDiskAvailable(integer $DiskAvailable) 设置专用宿主机实例可用磁盘大小（单位为:GiB）
 * @method string getDiskType() 获取专用宿主机实例磁盘类型
 * @method void setDiskType(string $DiskType) 设置专用宿主机实例磁盘类型
 * @method integer getGpuTotal() 获取专用宿主机实例总GPU卡数
 * @method void setGpuTotal(integer $GpuTotal) 设置专用宿主机实例总GPU卡数
 * @method integer getGpuAvailable() 获取专用宿主机实例可用GPU卡数
 * @method void setGpuAvailable(integer $GpuAvailable) 设置专用宿主机实例可用GPU卡数
 */
class HostResource extends AbstractModel
{
    /**
     * @var integer 专用宿主机实例总CPU核数
     */
    public $CpuTotal;

    /**
     * @var integer 专用宿主机实例可用CPU核数
     */
    public $CpuAvailable;

    /**
     * @var float 专用宿主机实例总内存大小（单位为:GiB）
     */
    public $MemTotal;

    /**
     * @var float 专用宿主机实例可用内存大小（单位为:GiB）
     */
    public $MemAvailable;

    /**
     * @var integer 专用宿主机实例总磁盘大小（单位为:GiB）
     */
    public $DiskTotal;

    /**
     * @var integer 专用宿主机实例可用磁盘大小（单位为:GiB）
     */
    public $DiskAvailable;

    /**
     * @var string 专用宿主机实例磁盘类型
     */
    public $DiskType;

    /**
     * @var integer 专用宿主机实例总GPU卡数
     */
    public $GpuTotal;

    /**
     * @var integer 专用宿主机实例可用GPU卡数
     */
    public $GpuAvailable;

    /**
     * @param integer $CpuTotal 专用宿主机实例总CPU核数
     * @param integer $CpuAvailable 专用宿主机实例可用CPU核数
     * @param float $MemTotal 专用宿主机实例总内存大小（单位为:GiB）
     * @param float $MemAvailable 专用宿主机实例可用内存大小（单位为:GiB）
     * @param integer $DiskTotal 专用宿主机实例总磁盘大小（单位为:GiB）
     * @param integer $DiskAvailable 专用宿主机实例可用磁盘大小（单位为:GiB）
     * @param string $DiskType 专用宿主机实例磁盘类型
     * @param integer $GpuTotal 专用宿主机实例总GPU卡数
     * @param integer $GpuAvailable 专用宿主机实例可用GPU卡数
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
        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }

        if (array_key_exists("DiskTotal",$param) and $param["DiskTotal"] !== null) {
            $this->DiskTotal = $param["DiskTotal"];
        }

        if (array_key_exists("DiskAvailable",$param) and $param["DiskAvailable"] !== null) {
            $this->DiskAvailable = $param["DiskAvailable"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("GpuTotal",$param) and $param["GpuTotal"] !== null) {
            $this->GpuTotal = $param["GpuTotal"];
        }

        if (array_key_exists("GpuAvailable",$param) and $param["GpuAvailable"] !== null) {
            $this->GpuAvailable = $param["GpuAvailable"];
        }
    }
}
