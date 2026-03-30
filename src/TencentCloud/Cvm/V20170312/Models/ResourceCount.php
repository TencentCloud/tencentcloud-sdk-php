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
 * 实例资源池容量
 *
 * @method integer getCpu() 获取vCPU核数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置vCPU核数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取内存大小，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置内存大小，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpu() 获取GPU数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpu(integer $Gpu) 设置GPU数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisk() 获取本地盘大小，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisk(integer $Disk) 设置本地盘大小，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceCount extends AbstractModel
{
    /**
     * @var integer vCPU核数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer GPU数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gpu;

    /**
     * @var integer 本地盘大小，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disk;

    /**
     * @param integer $Cpu vCPU核数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 内存大小，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Gpu GPU数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Disk 本地盘大小，单位：GB。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }
    }
}
