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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SlotSharingGroup的规格描述
 *
 * @method float getCPU() 获取适用的cpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPU(float $CPU) 设置适用的cpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHeapMemory() 获取默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeapMemory(string $HeapMemory) 设置默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOffHeapMemory() 获取默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffHeapMemory(string $OffHeapMemory) 设置默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManagedMemory() 获取默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagedMemory(string $ManagedMemory) 设置默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
 */
class SlotSharingGroupSpec extends AbstractModel
{
    /**
     * @var float 适用的cpu
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPU;

    /**
     * @var string 默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeapMemory;

    /**
     * @var string 默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffHeapMemory;

    /**
     * @var string 默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagedMemory;

    /**
     * @param float $CPU 适用的cpu
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HeapMemory 默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OffHeapMemory 默认为b, 支持单位有 b, kb, mb, gb
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManagedMemory 默认为b, 支持单位有 b, kb, mb, gb
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
        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("HeapMemory",$param) and $param["HeapMemory"] !== null) {
            $this->HeapMemory = $param["HeapMemory"];
        }

        if (array_key_exists("OffHeapMemory",$param) and $param["OffHeapMemory"] !== null) {
            $this->OffHeapMemory = $param["OffHeapMemory"];
        }

        if (array_key_exists("ManagedMemory",$param) and $param["ManagedMemory"] !== null) {
            $this->ManagedMemory = $param["ManagedMemory"];
        }
    }
}
