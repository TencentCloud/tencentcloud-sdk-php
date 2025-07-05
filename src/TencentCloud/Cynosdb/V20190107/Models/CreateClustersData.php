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
 * 创建集群任务信息
 *
 * @method integer getCpu() 获取实例CPU
 * @method void setCpu(integer $Cpu) 设置实例CPU
 * @method integer getMemory() 获取实例内存
 * @method void setMemory(integer $Memory) 设置实例内存
 * @method integer getStorageLimit() 获取集群存储上限
 * @method void setStorageLimit(integer $StorageLimit) 设置集群存储上限
 */
class CreateClustersData extends AbstractModel
{
    /**
     * @var integer 实例CPU
     */
    public $Cpu;

    /**
     * @var integer 实例内存
     */
    public $Memory;

    /**
     * @var integer 集群存储上限
     */
    public $StorageLimit;

    /**
     * @param integer $Cpu 实例CPU
     * @param integer $Memory 实例内存
     * @param integer $StorageLimit 集群存储上限
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
    }
}
