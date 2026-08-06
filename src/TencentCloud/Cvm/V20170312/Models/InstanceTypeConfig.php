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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例机型配置信息
 *
 * @method string getZone() 获取<p>可用区。</p>
 * @method void setZone(string $Zone) 设置<p>可用区。</p>
 * @method string getInstanceType() 获取<p>实例机型。</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例机型。</p>
 * @method string getInstanceFamily() 获取<p>实例机型系列。</p>
 * @method void setInstanceFamily(string $InstanceFamily) 设置<p>实例机型系列。</p>
 * @method integer getGPU() 获取<p>GPU核数，单位：核。</p>
 * @method void setGPU(integer $GPU) 设置<p>GPU核数，单位：核。</p>
 * @method integer getCPU() 获取<p>CPU核数，单位：核。</p>
 * @method void setCPU(integer $CPU) 设置<p>CPU核数，单位：核。</p>
 * @method integer getMemory() 获取<p>内存容量，单位：<code>GiB</code>。</p>
 * @method void setMemory(integer $Memory) 设置<p>内存容量，单位：<code>GiB</code>。</p>
 * @method integer getFPGA() 获取<p>FPGA核数，单位：核。</p>
 * @method void setFPGA(integer $FPGA) 设置<p>FPGA核数，单位：核。</p>
 * @method float getGpuCount() 获取<p>实例机型映射的物理GPU卡数，单位：卡。vGPU卡型小于1，直通卡型大于等于1。vGPU是通过分片虚拟化技术，将物理GPU卡重新划分，同一块GPU卡经虚拟化分割后可分配至不同的实例使用。直通卡型会将GPU设备直接挂载给实例使用。</p>
 * @method void setGpuCount(float $GpuCount) 设置<p>实例机型映射的物理GPU卡数，单位：卡。vGPU卡型小于1，直通卡型大于等于1。vGPU是通过分片虚拟化技术，将物理GPU卡重新划分，同一块GPU卡经虚拟化分割后可分配至不同的实例使用。直通卡型会将GPU设备直接挂载给实例使用。</p>
 * @method string getGpuType() 获取<p>实例GPU类型</p>
 * @method void setGpuType(string $GpuType) 设置<p>实例GPU类型</p>
 * @method float getGpuMemory() 获取<p>实例GPU单块显存,单位：GiB。</p>
 * @method void setGpuMemory(float $GpuMemory) 设置<p>实例GPU单块显存,单位：GiB。</p>
 */
class InstanceTypeConfig extends AbstractModel
{
    /**
     * @var string <p>可用区。</p>
     */
    public $Zone;

    /**
     * @var string <p>实例机型。</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例机型系列。</p>
     */
    public $InstanceFamily;

    /**
     * @var integer <p>GPU核数，单位：核。</p>
     */
    public $GPU;

    /**
     * @var integer <p>CPU核数，单位：核。</p>
     */
    public $CPU;

    /**
     * @var integer <p>内存容量，单位：<code>GiB</code>。</p>
     */
    public $Memory;

    /**
     * @var integer <p>FPGA核数，单位：核。</p>
     */
    public $FPGA;

    /**
     * @var float <p>实例机型映射的物理GPU卡数，单位：卡。vGPU卡型小于1，直通卡型大于等于1。vGPU是通过分片虚拟化技术，将物理GPU卡重新划分，同一块GPU卡经虚拟化分割后可分配至不同的实例使用。直通卡型会将GPU设备直接挂载给实例使用。</p>
     */
    public $GpuCount;

    /**
     * @var string <p>实例GPU类型</p>
     */
    public $GpuType;

    /**
     * @var float <p>实例GPU单块显存,单位：GiB。</p>
     */
    public $GpuMemory;

    /**
     * @param string $Zone <p>可用区。</p>
     * @param string $InstanceType <p>实例机型。</p>
     * @param string $InstanceFamily <p>实例机型系列。</p>
     * @param integer $GPU <p>GPU核数，单位：核。</p>
     * @param integer $CPU <p>CPU核数，单位：核。</p>
     * @param integer $Memory <p>内存容量，单位：<code>GiB</code>。</p>
     * @param integer $FPGA <p>FPGA核数，单位：核。</p>
     * @param float $GpuCount <p>实例机型映射的物理GPU卡数，单位：卡。vGPU卡型小于1，直通卡型大于等于1。vGPU是通过分片虚拟化技术，将物理GPU卡重新划分，同一块GPU卡经虚拟化分割后可分配至不同的实例使用。直通卡型会将GPU设备直接挂载给实例使用。</p>
     * @param string $GpuType <p>实例GPU类型</p>
     * @param float $GpuMemory <p>实例GPU单块显存,单位：GiB。</p>
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

        if (array_key_exists("GPU",$param) and $param["GPU"] !== null) {
            $this->GPU = $param["GPU"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("FPGA",$param) and $param["FPGA"] !== null) {
            $this->FPGA = $param["FPGA"];
        }

        if (array_key_exists("GpuCount",$param) and $param["GpuCount"] !== null) {
            $this->GpuCount = $param["GpuCount"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("GpuMemory",$param) and $param["GpuMemory"] !== null) {
            $this->GpuMemory = $param["GpuMemory"];
        }
    }
}
