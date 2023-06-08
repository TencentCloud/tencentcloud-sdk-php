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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部门信息
 *
 * @method string getDeptId() 获取部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeptId(string $DeptId) 设置部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeptName() 获取部门名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeptName(string $DeptName) 设置部门名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentDeptId() 获取父部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentDeptId(string $ParentDeptId) 设置父部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeptOpenId() 获取客户系统部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeptOpenId(string $DeptOpenId) 设置客户系统部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrderNo() 获取序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderNo(integer $OrderNo) 设置序列号
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntegrationDepartment extends AbstractModel
{
    /**
     * @var string 部门ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeptId;

    /**
     * @var string 部门名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeptName;

    /**
     * @var string 父部门ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentDeptId;

    /**
     * @var string 客户系统部门ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeptOpenId;

    /**
     * @var integer 序列号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderNo;

    /**
     * @param string $DeptId 部门ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeptName 部门名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentDeptId 父部门ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeptOpenId 客户系统部门ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OrderNo 序列号
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
        if (array_key_exists("DeptId",$param) and $param["DeptId"] !== null) {
            $this->DeptId = $param["DeptId"];
        }

        if (array_key_exists("DeptName",$param) and $param["DeptName"] !== null) {
            $this->DeptName = $param["DeptName"];
        }

        if (array_key_exists("ParentDeptId",$param) and $param["ParentDeptId"] !== null) {
            $this->ParentDeptId = $param["ParentDeptId"];
        }

        if (array_key_exists("DeptOpenId",$param) and $param["DeptOpenId"] !== null) {
            $this->DeptOpenId = $param["DeptOpenId"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }
    }
}
