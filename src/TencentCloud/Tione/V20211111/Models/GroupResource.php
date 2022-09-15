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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源信息
 *
 * @method integer getCpu() 获取CPU核数; 单位为1/1000核，比如100表示0.1核
 * @method void setCpu(integer $Cpu) 设置CPU核数; 单位为1/1000核，比如100表示0.1核
 * @method integer getMemory() 获取内存；单位为MB
 * @method void setMemory(integer $Memory) 设置内存；单位为MB
 * @method integer getGpu() 获取总卡数；GPUDetail 显卡数之和；单位为1/100卡，比如100代表1卡
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpu(integer $Gpu) 设置总卡数；GPUDetail 显卡数之和；单位为1/100卡，比如100代表1卡
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGpuDetailSet() 获取Gpu详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuDetailSet(array $GpuDetailSet) 设置Gpu详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupResource extends AbstractModel
{
    /**
     * @var integer CPU核数; 单位为1/1000核，比如100表示0.1核
     */
    public $Cpu;

    /**
     * @var integer 内存；单位为MB
     */
    public $Memory;

    /**
     * @var integer 总卡数；GPUDetail 显卡数之和；单位为1/100卡，比如100代表1卡
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gpu;

    /**
     * @var array Gpu详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuDetailSet;

    /**
     * @param integer $Cpu CPU核数; 单位为1/1000核，比如100表示0.1核
     * @param integer $Memory 内存；单位为MB
     * @param integer $Gpu 总卡数；GPUDetail 显卡数之和；单位为1/100卡，比如100代表1卡
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GpuDetailSet Gpu详情
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

        if (array_key_exists("GpuDetailSet",$param) and $param["GpuDetailSet"] !== null) {
            $this->GpuDetailSet = [];
            foreach ($param["GpuDetailSet"] as $key => $value){
                $obj = new GpuDetail();
                $obj->deserialize($value);
                array_push($this->GpuDetailSet, $obj);
            }
        }
    }
}
