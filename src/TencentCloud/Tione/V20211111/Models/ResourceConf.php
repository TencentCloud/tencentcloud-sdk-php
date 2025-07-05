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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notebook资源参数
 *
 * @method integer getCpu() 获取cpu 处理器资源, 单位为1/1000核 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置cpu 处理器资源, 单位为1/1000核 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取memory 内存资源, 单位为1M (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置memory 内存资源, 单位为1M (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpu() 获取gpu Gpu卡资源，单位为1/100卡，例如GpuType=T4时，1 Gpu = 1/100 T4卡 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpu(integer $Gpu) 设置gpu Gpu卡资源，单位为1/100卡，例如GpuType=T4时，1 Gpu = 1/100 T4卡 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuType() 获取GpuType 卡类型，参考资源组上对应的卡类型。eg: H800,A800,A100,T4,P4,V100等 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuType(string $GpuType) 设置GpuType 卡类型，参考资源组上对应的卡类型。eg: H800,A800,A100,T4,P4,V100等 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取计算规格 (for后付费)，可选值如下：
TI.S.LARGE.POST: 4C8G 
TI.S.2XLARGE16.POST:  8C16G 
TI.S.2XLARGE32.POST:  8C32G 
TI.S.4XLARGE32.POST:  16C32G
TI.S.4XLARGE64.POST:  16C64G
TI.S.6XLARGE48.POST:  24C48G
TI.S.6XLARGE96.POST:  24C96G
TI.S.8XLARGE64.POST:  32C64G
TI.S.8XLARGE128.POST : 32C128G
TI.GN10.2XLARGE40.POST: 8C40G V100*1 
TI.GN10.5XLARGE80.POST:  18C80G V100*2 
TI.GN10.10XLARGE160.POST :  32C160G V100*4
TI.GN10.20XLARGE320.POST :  72C320G V100*8
TI.GN7.8XLARGE128.POST: 32C128G T4*1 
TI.GN7.10XLARGE160.POST: 40C160G T4*2 
TI.GN7.20XLARGE320.POST: 80C320G T4*4
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置计算规格 (for后付费)，可选值如下：
TI.S.LARGE.POST: 4C8G 
TI.S.2XLARGE16.POST:  8C16G 
TI.S.2XLARGE32.POST:  8C32G 
TI.S.4XLARGE32.POST:  16C32G
TI.S.4XLARGE64.POST:  16C64G
TI.S.6XLARGE48.POST:  24C48G
TI.S.6XLARGE96.POST:  24C96G
TI.S.8XLARGE64.POST:  32C64G
TI.S.8XLARGE128.POST : 32C128G
TI.GN10.2XLARGE40.POST: 8C40G V100*1 
TI.GN10.5XLARGE80.POST:  18C80G V100*2 
TI.GN10.10XLARGE160.POST :  32C160G V100*4
TI.GN10.20XLARGE320.POST :  72C320G V100*8
TI.GN7.8XLARGE128.POST: 32C128G T4*1 
TI.GN7.10XLARGE160.POST: 40C160G T4*2 
TI.GN7.20XLARGE320.POST: 80C320G T4*4
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceConf extends AbstractModel
{
    /**
     * @var integer cpu 处理器资源, 单位为1/1000核 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer memory 内存资源, 单位为1M (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer gpu Gpu卡资源，单位为1/100卡，例如GpuType=T4时，1 Gpu = 1/100 T4卡 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gpu;

    /**
     * @var string GpuType 卡类型，参考资源组上对应的卡类型。eg: H800,A800,A100,T4,P4,V100等 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuType;

    /**
     * @var string 计算规格 (for后付费)，可选值如下：
TI.S.LARGE.POST: 4C8G 
TI.S.2XLARGE16.POST:  8C16G 
TI.S.2XLARGE32.POST:  8C32G 
TI.S.4XLARGE32.POST:  16C32G
TI.S.4XLARGE64.POST:  16C64G
TI.S.6XLARGE48.POST:  24C48G
TI.S.6XLARGE96.POST:  24C96G
TI.S.8XLARGE64.POST:  32C64G
TI.S.8XLARGE128.POST : 32C128G
TI.GN10.2XLARGE40.POST: 8C40G V100*1 
TI.GN10.5XLARGE80.POST:  18C80G V100*2 
TI.GN10.10XLARGE160.POST :  32C160G V100*4
TI.GN10.20XLARGE320.POST :  72C320G V100*8
TI.GN7.8XLARGE128.POST: 32C128G T4*1 
TI.GN7.10XLARGE160.POST: 40C160G T4*2 
TI.GN7.20XLARGE320.POST: 80C320G T4*4
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @param integer $Cpu cpu 处理器资源, 单位为1/1000核 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory memory 内存资源, 单位为1M (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Gpu gpu Gpu卡资源，单位为1/100卡，例如GpuType=T4时，1 Gpu = 1/100 T4卡 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuType GpuType 卡类型，参考资源组上对应的卡类型。eg: H800,A800,A100,T4,P4,V100等 (for预付费)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 计算规格 (for后付费)，可选值如下：
TI.S.LARGE.POST: 4C8G 
TI.S.2XLARGE16.POST:  8C16G 
TI.S.2XLARGE32.POST:  8C32G 
TI.S.4XLARGE32.POST:  16C32G
TI.S.4XLARGE64.POST:  16C64G
TI.S.6XLARGE48.POST:  24C48G
TI.S.6XLARGE96.POST:  24C96G
TI.S.8XLARGE64.POST:  32C64G
TI.S.8XLARGE128.POST : 32C128G
TI.GN10.2XLARGE40.POST: 8C40G V100*1 
TI.GN10.5XLARGE80.POST:  18C80G V100*2 
TI.GN10.10XLARGE160.POST :  32C160G V100*4
TI.GN10.20XLARGE320.POST :  72C320G V100*8
TI.GN7.8XLARGE128.POST: 32C128G T4*1 
TI.GN7.10XLARGE160.POST: 40C160G T4*2 
TI.GN7.20XLARGE320.POST: 80C320G T4*4
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

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
