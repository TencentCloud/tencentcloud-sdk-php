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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可被预留券抵扣的 Pod 某种规格的抵扣率
 *
 * @method float getCpu() 获取Pod的 CPU
 * @method void setCpu(float $Cpu) 设置Pod的 CPU
 * @method float getMemory() 获取Pod 的内存
 * @method void setMemory(float $Memory) 设置Pod 的内存
 * @method string getType() 获取 Pod 的类型
 * @method void setType(string $Type) 设置 Pod 的类型
 * @method string getGpuNum() 获取 Pod 的 GPU 卡数，Pod 类型为 GPU 时有效。
 * @method void setGpuNum(string $GpuNum) 设置 Pod 的 GPU 卡数，Pod 类型为 GPU 时有效。
 * @method integer getTotalNum() 获取这种规格的 Pod总数
 * @method void setTotalNum(integer $TotalNum) 设置这种规格的 Pod总数
 * @method integer getDeductionNum() 获取这种规格的 Pod被预留券抵扣的数量
 * @method void setDeductionNum(integer $DeductionNum) 设置这种规格的 Pod被预留券抵扣的数量
 */
class PodDeductionRate extends AbstractModel
{
    /**
     * @var float Pod的 CPU
     */
    public $Cpu;

    /**
     * @var float Pod 的内存
     */
    public $Memory;

    /**
     * @var string  Pod 的类型
     */
    public $Type;

    /**
     * @var string  Pod 的 GPU 卡数，Pod 类型为 GPU 时有效。
     */
    public $GpuNum;

    /**
     * @var integer 这种规格的 Pod总数
     */
    public $TotalNum;

    /**
     * @var integer 这种规格的 Pod被预留券抵扣的数量
     */
    public $DeductionNum;

    /**
     * @param float $Cpu Pod的 CPU
     * @param float $Memory Pod 的内存
     * @param string $Type  Pod 的类型
     * @param string $GpuNum  Pod 的 GPU 卡数，Pod 类型为 GPU 时有效。
     * @param integer $TotalNum 这种规格的 Pod总数
     * @param integer $DeductionNum 这种规格的 Pod被预留券抵扣的数量
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GpuNum",$param) and $param["GpuNum"] !== null) {
            $this->GpuNum = $param["GpuNum"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("DeductionNum",$param) and $param["DeductionNum"] !== null) {
            $this->DeductionNum = $param["DeductionNum"];
        }
    }
}
