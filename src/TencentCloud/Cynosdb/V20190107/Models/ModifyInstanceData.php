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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例变配任务信息
 *
 * @method integer getCpu() 获取变配后CPU
 * @method void setCpu(integer $Cpu) 设置变配后CPU
 * @method integer getMemory() 获取变配后内存
 * @method void setMemory(integer $Memory) 设置变配后内存
 * @method integer getStorageLimit() 获取变配后存储上限
 * @method void setStorageLimit(integer $StorageLimit) 设置变配后存储上限
 * @method integer getOldCpu() 获取变配前CPU
 * @method void setOldCpu(integer $OldCpu) 设置变配前CPU
 * @method integer getOldMemory() 获取变配前内存
 * @method void setOldMemory(integer $OldMemory) 设置变配前内存
 * @method integer getOldStorageLimit() 获取变配前存储上限
 * @method void setOldStorageLimit(integer $OldStorageLimit) 设置变配前存储上限
 * @method string getOldDeviceType() 获取变配前实例机器类型
1. common，通用型。
2. exclusive，独享型。
 * @method void setOldDeviceType(string $OldDeviceType) 设置变配前实例机器类型
1. common，通用型。
2. exclusive，独享型。
 * @method string getDeviceType() 获取变配后实例机器类型
1. common，通用型。
2. exclusive，独享型。
 * @method void setDeviceType(string $DeviceType) 设置变配后实例机器类型
1. common，通用型。
2. exclusive，独享型。
 * @method string getUpgradeType() 获取升级方式。升级完成后切换或维护时间内切换
 * @method void setUpgradeType(string $UpgradeType) 设置升级方式。升级完成后切换或维护时间内切换
 * @method integer getLibraNodeCount() 获取libra节点数量
 * @method void setLibraNodeCount(integer $LibraNodeCount) 设置libra节点数量
 * @method integer getOldLibraNodeCount() 获取原libra节点数量
 * @method void setOldLibraNodeCount(integer $OldLibraNodeCount) 设置原libra节点数量
 */
class ModifyInstanceData extends AbstractModel
{
    /**
     * @var integer 变配后CPU
     */
    public $Cpu;

    /**
     * @var integer 变配后内存
     */
    public $Memory;

    /**
     * @var integer 变配后存储上限
     */
    public $StorageLimit;

    /**
     * @var integer 变配前CPU
     */
    public $OldCpu;

    /**
     * @var integer 变配前内存
     */
    public $OldMemory;

    /**
     * @var integer 变配前存储上限
     */
    public $OldStorageLimit;

    /**
     * @var string 变配前实例机器类型
1. common，通用型。
2. exclusive，独享型。
     */
    public $OldDeviceType;

    /**
     * @var string 变配后实例机器类型
1. common，通用型。
2. exclusive，独享型。
     */
    public $DeviceType;

    /**
     * @var string 升级方式。升级完成后切换或维护时间内切换
     */
    public $UpgradeType;

    /**
     * @var integer libra节点数量
     */
    public $LibraNodeCount;

    /**
     * @var integer 原libra节点数量
     */
    public $OldLibraNodeCount;

    /**
     * @param integer $Cpu 变配后CPU
     * @param integer $Memory 变配后内存
     * @param integer $StorageLimit 变配后存储上限
     * @param integer $OldCpu 变配前CPU
     * @param integer $OldMemory 变配前内存
     * @param integer $OldStorageLimit 变配前存储上限
     * @param string $OldDeviceType 变配前实例机器类型
1. common，通用型。
2. exclusive，独享型。
     * @param string $DeviceType 变配后实例机器类型
1. common，通用型。
2. exclusive，独享型。
     * @param string $UpgradeType 升级方式。升级完成后切换或维护时间内切换
     * @param integer $LibraNodeCount libra节点数量
     * @param integer $OldLibraNodeCount 原libra节点数量
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("OldCpu",$param) and $param["OldCpu"] !== null) {
            $this->OldCpu = $param["OldCpu"];
        }

        if (array_key_exists("OldMemory",$param) and $param["OldMemory"] !== null) {
            $this->OldMemory = $param["OldMemory"];
        }

        if (array_key_exists("OldStorageLimit",$param) and $param["OldStorageLimit"] !== null) {
            $this->OldStorageLimit = $param["OldStorageLimit"];
        }

        if (array_key_exists("OldDeviceType",$param) and $param["OldDeviceType"] !== null) {
            $this->OldDeviceType = $param["OldDeviceType"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("LibraNodeCount",$param) and $param["LibraNodeCount"] !== null) {
            $this->LibraNodeCount = $param["LibraNodeCount"];
        }

        if (array_key_exists("OldLibraNodeCount",$param) and $param["OldLibraNodeCount"] !== null) {
            $this->OldLibraNodeCount = $param["OldLibraNodeCount"];
        }
    }
}
