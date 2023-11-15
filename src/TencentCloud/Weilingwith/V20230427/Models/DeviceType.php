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
 * 设备类型
 *
 * @method string getCode() 获取设备类型编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置设备类型编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentCode() 获取父设备类型编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentCode(string $ParentCode) 设置父设备类型编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentName() 获取父设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentName(string $ParentName) 设置父设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSubsystem() 获取是否子系统，1是

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSubsystem(integer $IsSubsystem) 设置是否子系统，1是

注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceType extends AbstractModel
{
    /**
     * @var string 设备类型编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 父设备类型编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentCode;

    /**
     * @var string 父设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentName;

    /**
     * @var integer 是否子系统，1是

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSubsystem;

    /**
     * @param string $Code 设备类型编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentCode 父设备类型编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentName 父设备类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSubsystem 是否子系统，1是

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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentCode",$param) and $param["ParentCode"] !== null) {
            $this->ParentCode = $param["ParentCode"];
        }

        if (array_key_exists("ParentName",$param) and $param["ParentName"] !== null) {
            $this->ParentName = $param["ParentName"];
        }

        if (array_key_exists("IsSubsystem",$param) and $param["IsSubsystem"] !== null) {
            $this->IsSubsystem = $param["IsSubsystem"];
        }
    }
}
