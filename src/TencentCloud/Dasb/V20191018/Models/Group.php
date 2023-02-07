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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组信息，用于用户组、主机组
 *
 * @method integer getId() 获取组ID
 * @method void setId(integer $Id) 设置组ID
 * @method string getName() 获取组名称
 * @method void setName(string $Name) 设置组名称
 * @method Department getDepartment() 获取所属部门信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartment(Department $Department) 设置所属部门信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Group extends AbstractModel
{
    /**
     * @var integer 组ID
     */
    public $Id;

    /**
     * @var string 组名称
     */
    public $Name;

    /**
     * @var Department 所属部门信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Department;

    /**
     * @var integer 个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param integer $Id 组ID
     * @param string $Name 组名称
     * @param Department $Department 所属部门信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 个数
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

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = new Department();
            $this->Department->deserialize($param["Department"]);
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
