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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作系统信息
 *
 * @method string getChipId() 获取芯片型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChipId(string $ChipId) 设置芯片型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChipManufacture() 获取芯片厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChipManufacture(string $ChipManufacture) 设置芯片厂商
注意：此字段可能返回 null，表示取不到有效值。
 */
class OsData extends AbstractModel
{
    /**
     * @var string 芯片型号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChipId;

    /**
     * @var string 芯片厂商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChipManufacture;

    /**
     * @param string $ChipId 芯片型号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChipManufacture 芯片厂商
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
        if (array_key_exists("ChipId",$param) and $param["ChipId"] !== null) {
            $this->ChipId = $param["ChipId"];
        }

        if (array_key_exists("ChipManufacture",$param) and $param["ChipManufacture"] !== null) {
            $this->ChipManufacture = $param["ChipManufacture"];
        }
    }
}
