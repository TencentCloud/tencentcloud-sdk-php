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
 * @method string getUpgradeType() 获取升级方式。升级完成后切换或维护时间内切换
 * @method void setUpgradeType(string $UpgradeType) 设置升级方式。升级完成后切换或维护时间内切换
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
     * @var string 升级方式。升级完成后切换或维护时间内切换
     */
    public $UpgradeType;

    /**
     * @param integer $Cpu 变配后CPU
     * @param integer $Memory 变配后内存
     * @param integer $StorageLimit 变配后存储上限
     * @param integer $OldCpu 变配前CPU
     * @param integer $OldMemory 变配前内存
     * @param integer $OldStorageLimit 变配前存储上限
     * @param string $UpgradeType 升级方式。升级完成后切换或维护时间内切换
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

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }
    }
}
