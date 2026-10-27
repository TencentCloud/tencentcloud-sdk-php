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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘分区数据
 *
 * @method string getName() 获取磁盘名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置磁盘名
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotal() 获取总容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(float $Total) 设置总容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUsage() 获取使用量,39.31%
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsage(float $Usage) 设置使用量,39.31%
注意：此字段可能返回 null，表示取不到有效值。
 */
class Partition extends AbstractModel
{
    /**
     * @var string 磁盘名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var float 总容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var float 使用量,39.31%
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Usage;

    /**
     * @param string $Name 磁盘名
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Total 总容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Usage 使用量,39.31%
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

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }
    }
}
