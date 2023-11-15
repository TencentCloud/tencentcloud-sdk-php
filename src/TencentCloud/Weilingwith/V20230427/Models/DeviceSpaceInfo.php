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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备位置信息
 *
 * @method string getId() 获取空间Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置空间Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取空间名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置空间名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取空间级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置空间级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取空间编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置空间编码
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceSpaceInfo extends AbstractModel
{
    /**
     * @var string 空间Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 空间名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 空间级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 空间编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @param string $Id 空间Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 空间名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 空间级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 空间编码
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
