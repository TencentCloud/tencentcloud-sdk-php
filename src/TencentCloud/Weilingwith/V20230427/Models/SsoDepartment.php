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
 * 部门用户
 *
 * @method string getDepartmentId() 获取部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartmentId(string $DepartmentId) 设置部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取部门名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置部门名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentDepartmentId() 获取父级部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentDepartmentId(string $ParentDepartmentId) 设置父级部门ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class SsoDepartment extends AbstractModel
{
    /**
     * @var string 部门ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DepartmentId;

    /**
     * @var string 部门名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 父级部门ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentDepartmentId;

    /**
     * @param string $DepartmentId 部门ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 部门名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentDepartmentId 父级部门ID
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
        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentDepartmentId",$param) and $param["ParentDepartmentId"] !== null) {
            $this->ParentDepartmentId = $param["ParentDepartmentId"];
        }
    }
}
