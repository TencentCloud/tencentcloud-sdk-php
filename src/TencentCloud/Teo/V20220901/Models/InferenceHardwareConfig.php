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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务硬件配置。
 *
 * @method float getGPUNum() 获取<p>推理服务单个实例分配的 GPU 卡数，当前仅支持整数值，且必须为 <code>HardwareSpecId</code> 对应规格的 <code>AllowedGPUNums</code> 中的可选值。</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 规格对应的默认 <code>GPUNum</code> 值。</p>
 * @method void setGPUNum(float $GPUNum) 设置<p>推理服务单个实例分配的 GPU 卡数，当前仅支持整数值，且必须为 <code>HardwareSpecId</code> 对应规格的 <code>AllowedGPUNums</code> 中的可选值。</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 规格对应的默认 <code>GPUNum</code> 值。</p>
 * @method float getCPUNum() 获取<p>推理服务单个实例分配的 CPU 核数，当前仅支持整数值。</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 规格对应的默认 <code>CPUNum</code> 值。</p>
 * @method void setCPUNum(float $CPUNum) 设置<p>推理服务单个实例分配的 CPU 核数，当前仅支持整数值。</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 规格对应的默认 <code>CPUNum</code> 值。</p>
 * @method integer getMemSize() 获取<p>推理服务单实例分配的内存大小。</p><p>单位：MB</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 对应规格的默认 <code>MemSize</code> 值；若填充，则必须为 <code>1024</code> 的整数倍。</p>
 * @method void setMemSize(integer $MemSize) 设置<p>推理服务单实例分配的内存大小。</p><p>单位：MB</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 对应规格的默认 <code>MemSize</code> 值；若填充，则必须为 <code>1024</code> 的整数倍。</p>
 * @method integer getDiskSize() 获取<p>推理服务单实例分配的临时磁盘大小。</p><p>单位：MB</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 对应规格的默认 <code>DiskSize</code> 值；若填充，则必须为 <code>1024</code> 的整数倍。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>推理服务单实例分配的临时磁盘大小。</p><p>单位：MB</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 对应规格的默认 <code>DiskSize</code> 值；若填充，则必须为 <code>1024</code> 的整数倍。</p>
 */
class InferenceHardwareConfig extends AbstractModel
{
    /**
     * @var float <p>推理服务单个实例分配的 GPU 卡数，当前仅支持整数值，且必须为 <code>HardwareSpecId</code> 对应规格的 <code>AllowedGPUNums</code> 中的可选值。</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 规格对应的默认 <code>GPUNum</code> 值。</p>
     */
    public $GPUNum;

    /**
     * @var float <p>推理服务单个实例分配的 CPU 核数，当前仅支持整数值。</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 规格对应的默认 <code>CPUNum</code> 值。</p>
     */
    public $CPUNum;

    /**
     * @var integer <p>推理服务单实例分配的内存大小。</p><p>单位：MB</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 对应规格的默认 <code>MemSize</code> 值；若填充，则必须为 <code>1024</code> 的整数倍。</p>
     */
    public $MemSize;

    /**
     * @var integer <p>推理服务单实例分配的临时磁盘大小。</p><p>单位：MB</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 对应规格的默认 <code>DiskSize</code> 值；若填充，则必须为 <code>1024</code> 的整数倍。</p>
     */
    public $DiskSize;

    /**
     * @param float $GPUNum <p>推理服务单个实例分配的 GPU 卡数，当前仅支持整数值，且必须为 <code>HardwareSpecId</code> 对应规格的 <code>AllowedGPUNums</code> 中的可选值。</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 规格对应的默认 <code>GPUNum</code> 值。</p>
     * @param float $CPUNum <p>推理服务单个实例分配的 CPU 核数，当前仅支持整数值。</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 规格对应的默认 <code>CPUNum</code> 值。</p>
     * @param integer $MemSize <p>推理服务单实例分配的内存大小。</p><p>单位：MB</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 对应规格的默认 <code>MemSize</code> 值；若填充，则必须为 <code>1024</code> 的整数倍。</p>
     * @param integer $DiskSize <p>推理服务单实例分配的临时磁盘大小。</p><p>单位：MB</p><p>若不填充，则使用所选 <code>HardwareSpecId</code> 对应规格的默认 <code>DiskSize</code> 值；若填充，则必须为 <code>1024</code> 的整数倍。</p>
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
        if (array_key_exists("GPUNum",$param) and $param["GPUNum"] !== null) {
            $this->GPUNum = $param["GPUNum"];
        }

        if (array_key_exists("CPUNum",$param) and $param["CPUNum"] !== null) {
            $this->CPUNum = $param["CPUNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
