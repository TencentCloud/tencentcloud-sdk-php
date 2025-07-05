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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 售卖配置详情
 *
 * @method integer getMemory() 获取内存大小，单位为MB
 * @method void setMemory(integer $Memory) 设置内存大小，单位为MB
 * @method integer getCpu() 获取CPU核心数
 * @method void setCpu(integer $Cpu) 设置CPU核心数
 * @method integer getVolumeMin() 获取磁盘最小规格，单位为GB
 * @method void setVolumeMin(integer $VolumeMin) 设置磁盘最小规格，单位为GB
 * @method integer getVolumeMax() 获取磁盘最大规格，单位为GB
 * @method void setVolumeMax(integer $VolumeMax) 设置磁盘最大规格，单位为GB
 * @method integer getVolumeStep() 获取磁盘步长，单位为GB
 * @method void setVolumeStep(integer $VolumeStep) 设置磁盘步长，单位为GB
 * @method integer getIops() 获取每秒IO数量
 * @method void setIops(integer $Iops) 设置每秒IO数量
 * @method string getInfo() 获取应用场景描述
 * @method void setInfo(string $Info) 设置应用场景描述
 * @method integer getStatus() 获取状态值，0 表示该规格对外售卖
 * @method void setStatus(integer $Status) 设置状态值，0 表示该规格对外售卖
 * @method string getDeviceType() 获取实例类型，可能的取值范围有：UNIVERSAL (通用型), EXCLUSIVE (独享型), BASIC (基础型), BASIC_V2 (基础型v2)
 * @method void setDeviceType(string $DeviceType) 设置实例类型，可能的取值范围有：UNIVERSAL (通用型), EXCLUSIVE (独享型), BASIC (基础型), BASIC_V2 (基础型v2)
 * @method string getEngineType() 获取引擎类型描述，可能的取值范围有：Innodb，RocksDB
 * @method void setEngineType(string $EngineType) 设置引擎类型描述，可能的取值范围有：Innodb，RocksDB
 * @method integer getId() 获取售卖规格Id
 * @method void setId(integer $Id) 设置售卖规格Id
 */
class CdbSellConfig extends AbstractModel
{
    /**
     * @var integer 内存大小，单位为MB
     */
    public $Memory;

    /**
     * @var integer CPU核心数
     */
    public $Cpu;

    /**
     * @var integer 磁盘最小规格，单位为GB
     */
    public $VolumeMin;

    /**
     * @var integer 磁盘最大规格，单位为GB
     */
    public $VolumeMax;

    /**
     * @var integer 磁盘步长，单位为GB
     */
    public $VolumeStep;

    /**
     * @var integer 每秒IO数量
     */
    public $Iops;

    /**
     * @var string 应用场景描述
     */
    public $Info;

    /**
     * @var integer 状态值，0 表示该规格对外售卖
     */
    public $Status;

    /**
     * @var string 实例类型，可能的取值范围有：UNIVERSAL (通用型), EXCLUSIVE (独享型), BASIC (基础型), BASIC_V2 (基础型v2)
     */
    public $DeviceType;

    /**
     * @var string 引擎类型描述，可能的取值范围有：Innodb，RocksDB
     */
    public $EngineType;

    /**
     * @var integer 售卖规格Id
     */
    public $Id;

    /**
     * @param integer $Memory 内存大小，单位为MB
     * @param integer $Cpu CPU核心数
     * @param integer $VolumeMin 磁盘最小规格，单位为GB
     * @param integer $VolumeMax 磁盘最大规格，单位为GB
     * @param integer $VolumeStep 磁盘步长，单位为GB
     * @param integer $Iops 每秒IO数量
     * @param string $Info 应用场景描述
     * @param integer $Status 状态值，0 表示该规格对外售卖
     * @param string $DeviceType 实例类型，可能的取值范围有：UNIVERSAL (通用型), EXCLUSIVE (独享型), BASIC (基础型), BASIC_V2 (基础型v2)
     * @param string $EngineType 引擎类型描述，可能的取值范围有：Innodb，RocksDB
     * @param integer $Id 售卖规格Id
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("VolumeMin",$param) and $param["VolumeMin"] !== null) {
            $this->VolumeMin = $param["VolumeMin"];
        }

        if (array_key_exists("VolumeMax",$param) and $param["VolumeMax"] !== null) {
            $this->VolumeMax = $param["VolumeMax"];
        }

        if (array_key_exists("VolumeStep",$param) and $param["VolumeStep"] !== null) {
            $this->VolumeStep = $param["VolumeStep"];
        }

        if (array_key_exists("Iops",$param) and $param["Iops"] !== null) {
            $this->Iops = $param["Iops"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
