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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户标签信息
 *
 * @method integer getId() 获取标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsExternalManage() 获取是否被托管
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsExternalManage(boolean $IsExternalManage) 设置是否被托管
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManagePlatform() 获取标签托管平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagePlatform(string $ManagePlatform) 设置标签托管平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImportType() 获取导入类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportType(string $ImportType) 设置导入类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserTagInfo extends AbstractModel
{
    /**
     * @var integer 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 标签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var boolean 是否被托管
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsExternalManage;

    /**
     * @var string 标签托管平台
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagePlatform;

    /**
     * @var string 导入类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportType;

    /**
     * @param integer $Id 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 标签名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 标签值
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsExternalManage 是否被托管
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManagePlatform 标签托管平台
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImportType 导入类型
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("IsExternalManage",$param) and $param["IsExternalManage"] !== null) {
            $this->IsExternalManage = $param["IsExternalManage"];
        }

        if (array_key_exists("ManagePlatform",$param) and $param["ManagePlatform"] !== null) {
            $this->ManagePlatform = $param["ManagePlatform"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }
    }
}
