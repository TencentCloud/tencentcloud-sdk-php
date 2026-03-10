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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 算力详情
 *
 * @method string getBundleType() 获取算力套餐ID
 * @method void setBundleType(string $BundleType) 设置算力套餐ID
 * @method integer getCount() 获取节点数量
 * @method void setCount(integer $Count) 设置节点数量
 * @method string getGPUCount() 获取显卡数量
 * @method void setGPUCount(string $GPUCount) 设置显卡数量
 * @method string getGPUMemory() 获取显存
 * @method void setGPUMemory(string $GPUMemory) 设置显存
 * @method string getGPUPerformance() 获取算力
 * @method void setGPUPerformance(string $GPUPerformance) 设置算力
 * @method string getCPU() 获取CPU核数
 * @method void setCPU(string $CPU) 设置CPU核数
 * @method string getMemory() 获取内存
 * @method void setMemory(string $Memory) 设置内存
 */
class ComputeDetail extends AbstractModel
{
    /**
     * @var string 算力套餐ID
     */
    public $BundleType;

    /**
     * @var integer 节点数量
     */
    public $Count;

    /**
     * @var string 显卡数量
     */
    public $GPUCount;

    /**
     * @var string 显存
     */
    public $GPUMemory;

    /**
     * @var string 算力
     */
    public $GPUPerformance;

    /**
     * @var string CPU核数
     */
    public $CPU;

    /**
     * @var string 内存
     */
    public $Memory;

    /**
     * @param string $BundleType 算力套餐ID
     * @param integer $Count 节点数量
     * @param string $GPUCount 显卡数量
     * @param string $GPUMemory 显存
     * @param string $GPUPerformance 算力
     * @param string $CPU CPU核数
     * @param string $Memory 内存
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
        if (array_key_exists("BundleType",$param) and $param["BundleType"] !== null) {
            $this->BundleType = $param["BundleType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("GPUCount",$param) and $param["GPUCount"] !== null) {
            $this->GPUCount = $param["GPUCount"];
        }

        if (array_key_exists("GPUMemory",$param) and $param["GPUMemory"] !== null) {
            $this->GPUMemory = $param["GPUMemory"];
        }

        if (array_key_exists("GPUPerformance",$param) and $param["GPUPerformance"] !== null) {
            $this->GPUPerformance = $param["GPUPerformance"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }
    }
}
