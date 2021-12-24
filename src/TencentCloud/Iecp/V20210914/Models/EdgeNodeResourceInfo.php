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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘节点资源信息
 *
 * @method string getAllocatedCPU() 获取可使用的CPU 单位: m核
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllocatedCPU(string $AllocatedCPU) 设置可使用的CPU 单位: m核
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalCPU() 获取CPU总量 单位:m核
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCPU(string $TotalCPU) 设置CPU总量 单位:m核
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllocatedMemory() 获取已分配的内存 单位G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllocatedMemory(string $AllocatedMemory) 设置已分配的内存 单位G
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalMemory() 获取内存总量 单位G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalMemory(string $TotalMemory) 设置内存总量 单位G
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllocatedGPU() 获取已分配的GPU资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllocatedGPU(string $AllocatedGPU) 设置已分配的GPU资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalGPU() 获取GPU总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalGPU(string $TotalGPU) 设置GPU总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvailableCPU() 获取可使用的CPU 单位: m核
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableCPU(string $AvailableCPU) 设置可使用的CPU 单位: m核
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvailableMemory() 获取可使用的内存 单位: G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableMemory(string $AvailableMemory) 设置可使用的内存 单位: G
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvailableGPU() 获取可使用的GPU资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableGPU(string $AvailableGPU) 设置可使用的GPU资源
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeNodeResourceInfo extends AbstractModel
{
    /**
     * @var string 可使用的CPU 单位: m核
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllocatedCPU;

    /**
     * @var string CPU总量 单位:m核
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCPU;

    /**
     * @var string 已分配的内存 单位G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllocatedMemory;

    /**
     * @var string 内存总量 单位G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalMemory;

    /**
     * @var string 已分配的GPU资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllocatedGPU;

    /**
     * @var string GPU总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalGPU;

    /**
     * @var string 可使用的CPU 单位: m核
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableCPU;

    /**
     * @var string 可使用的内存 单位: G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableMemory;

    /**
     * @var string 可使用的GPU资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableGPU;

    /**
     * @param string $AllocatedCPU 可使用的CPU 单位: m核
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalCPU CPU总量 单位:m核
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllocatedMemory 已分配的内存 单位G
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalMemory 内存总量 单位G
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllocatedGPU 已分配的GPU资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalGPU GPU总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AvailableCPU 可使用的CPU 单位: m核
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AvailableMemory 可使用的内存 单位: G
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AvailableGPU 可使用的GPU资源
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
        if (array_key_exists("AllocatedCPU",$param) and $param["AllocatedCPU"] !== null) {
            $this->AllocatedCPU = $param["AllocatedCPU"];
        }

        if (array_key_exists("TotalCPU",$param) and $param["TotalCPU"] !== null) {
            $this->TotalCPU = $param["TotalCPU"];
        }

        if (array_key_exists("AllocatedMemory",$param) and $param["AllocatedMemory"] !== null) {
            $this->AllocatedMemory = $param["AllocatedMemory"];
        }

        if (array_key_exists("TotalMemory",$param) and $param["TotalMemory"] !== null) {
            $this->TotalMemory = $param["TotalMemory"];
        }

        if (array_key_exists("AllocatedGPU",$param) and $param["AllocatedGPU"] !== null) {
            $this->AllocatedGPU = $param["AllocatedGPU"];
        }

        if (array_key_exists("TotalGPU",$param) and $param["TotalGPU"] !== null) {
            $this->TotalGPU = $param["TotalGPU"];
        }

        if (array_key_exists("AvailableCPU",$param) and $param["AvailableCPU"] !== null) {
            $this->AvailableCPU = $param["AvailableCPU"];
        }

        if (array_key_exists("AvailableMemory",$param) and $param["AvailableMemory"] !== null) {
            $this->AvailableMemory = $param["AvailableMemory"];
        }

        if (array_key_exists("AvailableGPU",$param) and $param["AvailableGPU"] !== null) {
            $this->AvailableGPU = $param["AvailableGPU"];
        }
    }
}
