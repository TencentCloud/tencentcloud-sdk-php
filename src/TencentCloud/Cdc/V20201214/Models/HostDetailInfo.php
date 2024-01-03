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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 宿主机资源的概览详细信息。
 *
 * @method string getHostTypeFamily() 获取类型族
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostTypeFamily(string $HostTypeFamily) 设置类型族
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpuTotal() 获取总CPU
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTotal(float $CpuTotal) 设置总CPU
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpuAvailable() 获取可用CPU
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuAvailable(float $CpuAvailable) 设置可用CPU
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemTotal() 获取总内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemTotal(float $MemTotal) 设置总内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemAvailable() 获取可用内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemAvailable(float $MemAvailable) 设置可用内存
注意：此字段可能返回 null，表示取不到有效值。
 */
class HostDetailInfo extends AbstractModel
{
    /**
     * @var string 类型族
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostTypeFamily;

    /**
     * @var float 总CPU
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTotal;

    /**
     * @var float 可用CPU
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuAvailable;

    /**
     * @var float 总内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemTotal;

    /**
     * @var float 可用内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemAvailable;

    /**
     * @param string $HostTypeFamily 类型族
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CpuTotal 总CPU
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CpuAvailable 可用CPU
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MemTotal 总内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MemAvailable 可用内存
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
        if (array_key_exists("HostTypeFamily",$param) and $param["HostTypeFamily"] !== null) {
            $this->HostTypeFamily = $param["HostTypeFamily"];
        }

        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }
    }
}
