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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用使用容器部署时需要的额外资源
 *
 * @method string getCpu() 获取CPU 核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(string $Cpu) 设置CPU 核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMem() 获取内存 MiB 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMem(string $Mem) 设置内存 MiB 数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerAdditionalResourceRequirement extends AbstractModel
{
    /**
     * @var string CPU 核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var string 内存 MiB 数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mem;

    /**
     * @param string $Cpu CPU 核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mem 内存 MiB 数
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
    }
}
