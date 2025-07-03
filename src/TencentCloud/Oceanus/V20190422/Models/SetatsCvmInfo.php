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
 * setats 机器规格
 *
 * @method float getCpu() 获取setats机器cpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(float $Cpu) 设置setats机器cpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMem() 获取setats机器内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMem(float $Mem) 设置setats机器内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefaultParallelism() 获取setats worker 并行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultParallelism(integer $DefaultParallelism) 设置setats worker 并行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method SetatsDisk getDisk() 获取setats 机器磁盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisk(SetatsDisk $Disk) 设置setats 机器磁盘
注意：此字段可能返回 null，表示取不到有效值。
 */
class SetatsCvmInfo extends AbstractModel
{
    /**
     * @var float setats机器cpu
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var float setats机器内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mem;

    /**
     * @var integer setats worker 并行度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultParallelism;

    /**
     * @var SetatsDisk setats 机器磁盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disk;

    /**
     * @param float $Cpu setats机器cpu
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Mem setats机器内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefaultParallelism setats worker 并行度
注意：此字段可能返回 null，表示取不到有效值。
     * @param SetatsDisk $Disk setats 机器磁盘
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

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("DefaultParallelism",$param) and $param["DefaultParallelism"] !== null) {
            $this->DefaultParallelism = $param["DefaultParallelism"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = new SetatsDisk();
            $this->Disk->deserialize($param["Disk"]);
        }
    }
}
