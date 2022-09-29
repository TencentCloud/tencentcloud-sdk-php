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
 * 删除员工结果
 *
 * @method array getSuccessEmployeeData() 获取删除员工的成功数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessEmployeeData(array $SuccessEmployeeData) 设置删除员工的成功数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailedEmployeeData() 获取删除员工的失败数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedEmployeeData(array $FailedEmployeeData) 设置删除员工的失败数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeleteStaffsResult extends AbstractModel
{
    /**
     * @var array 删除员工的成功数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessEmployeeData;

    /**
     * @var array 删除员工的失败数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedEmployeeData;

    /**
     * @param array $SuccessEmployeeData 删除员工的成功数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailedEmployeeData 删除员工的失败数据
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
        if (array_key_exists("SuccessEmployeeData",$param) and $param["SuccessEmployeeData"] !== null) {
            $this->SuccessEmployeeData = [];
            foreach ($param["SuccessEmployeeData"] as $key => $value){
                $obj = new SuccessDeleteStaffData();
                $obj->deserialize($value);
                array_push($this->SuccessEmployeeData, $obj);
            }
        }

        if (array_key_exists("FailedEmployeeData",$param) and $param["FailedEmployeeData"] !== null) {
            $this->FailedEmployeeData = [];
            foreach ($param["FailedEmployeeData"] as $key => $value){
                $obj = new FailedDeleteStaffData();
                $obj->deserialize($value);
                array_push($this->FailedEmployeeData, $obj);
            }
        }
    }
}
