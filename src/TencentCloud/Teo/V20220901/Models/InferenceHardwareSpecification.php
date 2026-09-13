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
 * 推理硬件规格信息。
 *
 * @method string getSpec() 获取<p>规格标识。已废弃，参考使用字段 <code>HardwareSpecId</code>。</p>
 * @method void setSpec(string $Spec) 设置<p>规格标识。已废弃，参考使用字段 <code>HardwareSpecId</code>。</p>
 * @method string getHardwareSpecId() 获取<p>规格唯一标识 ID。</p>
 * @method void setHardwareSpecId(string $HardwareSpecId) 设置<p>规格唯一标识 ID。</p>
 * @method string getName() 获取<p>规格名称。</p>
 * @method void setName(string $Name) 设置<p>规格名称。</p>
 * @method float getGPUNum() 获取<p>规格默认分配的 GPU 卡数。</p>
 * @method void setGPUNum(float $GPUNum) 设置<p>规格默认分配的 GPU 卡数。</p>
 * @method float getCPUNum() 获取<p>规格默认分配的 CPU 核数。</p>
 * @method void setCPUNum(float $CPUNum) 设置<p>规格默认分配的 CPU 核数。</p>
 * @method integer getMemSize() 获取<p>规格默认分配的内存大小。</p><p>单位：MB</p>
 * @method void setMemSize(integer $MemSize) 设置<p>规格默认分配的内存大小。</p><p>单位：MB</p>
 * @method integer getGPUMemSize() 获取<p>规格默认分配的显存大小。</p><p>单位：MB</p>
 * @method void setGPUMemSize(integer $GPUMemSize) 设置<p>规格默认分配的显存大小。</p><p>单位：MB</p>
 * @method integer getDiskSize() 获取<p>规格默认分配的磁盘大小。</p><p>单位：MB</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>规格默认分配的磁盘大小。</p><p>单位：MB</p>
 * @method array getAllowedGPUNums() 获取<p>规格当前支持的 GPU 卡数列表。</p><p>若不填充或填充空数组，则仅支持规格默认分配的 GPU 卡数。</p>
 * @method void setAllowedGPUNums(array $AllowedGPUNums) 设置<p>规格当前支持的 GPU 卡数列表。</p><p>若不填充或填充空数组，则仅支持规格默认分配的 GPU 卡数。</p>
 */
class InferenceHardwareSpecification extends AbstractModel
{
    /**
     * @var string <p>规格标识。已废弃，参考使用字段 <code>HardwareSpecId</code>。</p>
     * @deprecated
     */
    public $Spec;

    /**
     * @var string <p>规格唯一标识 ID。</p>
     */
    public $HardwareSpecId;

    /**
     * @var string <p>规格名称。</p>
     */
    public $Name;

    /**
     * @var float <p>规格默认分配的 GPU 卡数。</p>
     */
    public $GPUNum;

    /**
     * @var float <p>规格默认分配的 CPU 核数。</p>
     */
    public $CPUNum;

    /**
     * @var integer <p>规格默认分配的内存大小。</p><p>单位：MB</p>
     */
    public $MemSize;

    /**
     * @var integer <p>规格默认分配的显存大小。</p><p>单位：MB</p>
     */
    public $GPUMemSize;

    /**
     * @var integer <p>规格默认分配的磁盘大小。</p><p>单位：MB</p>
     */
    public $DiskSize;

    /**
     * @var array <p>规格当前支持的 GPU 卡数列表。</p><p>若不填充或填充空数组，则仅支持规格默认分配的 GPU 卡数。</p>
     */
    public $AllowedGPUNums;

    /**
     * @param string $Spec <p>规格标识。已废弃，参考使用字段 <code>HardwareSpecId</code>。</p>
     * @param string $HardwareSpecId <p>规格唯一标识 ID。</p>
     * @param string $Name <p>规格名称。</p>
     * @param float $GPUNum <p>规格默认分配的 GPU 卡数。</p>
     * @param float $CPUNum <p>规格默认分配的 CPU 核数。</p>
     * @param integer $MemSize <p>规格默认分配的内存大小。</p><p>单位：MB</p>
     * @param integer $GPUMemSize <p>规格默认分配的显存大小。</p><p>单位：MB</p>
     * @param integer $DiskSize <p>规格默认分配的磁盘大小。</p><p>单位：MB</p>
     * @param array $AllowedGPUNums <p>规格当前支持的 GPU 卡数列表。</p><p>若不填充或填充空数组，则仅支持规格默认分配的 GPU 卡数。</p>
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("HardwareSpecId",$param) and $param["HardwareSpecId"] !== null) {
            $this->HardwareSpecId = $param["HardwareSpecId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("GPUMemSize",$param) and $param["GPUMemSize"] !== null) {
            $this->GPUMemSize = $param["GPUMemSize"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AllowedGPUNums",$param) and $param["AllowedGPUNums"] !== null) {
            $this->AllowedGPUNums = $param["AllowedGPUNums"];
        }
    }
}
