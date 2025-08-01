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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点规格信息
 *
 * @method string getName() 获取规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCu() 获取当前规格的cu数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCu(integer $Cu) 设置当前规格的cu数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取当前规格的cpu数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置当前规格的cpu数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取当前规格的内存数，单位G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置当前规格的内存数，单位G
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpecInfo extends AbstractModel
{
    /**
     * @var string 规格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 当前规格的cu数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cu;

    /**
     * @var integer 当前规格的cpu数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 当前规格的内存数，单位G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @param string $Name 规格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cu 当前规格的cu数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu 当前规格的cpu数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 当前规格的内存数，单位G
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cu",$param) and $param["Cu"] !== null) {
            $this->Cu = $param["Cu"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }
    }
}
