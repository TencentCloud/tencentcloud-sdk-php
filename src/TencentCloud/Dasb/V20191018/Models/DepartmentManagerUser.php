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
 * 部门管理员信息
 *
 * @method string getManagerId() 获取管理员Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagerId(string $ManagerId) 设置管理员Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManagerName() 获取管理员姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagerName(string $ManagerName) 设置管理员姓名
注意：此字段可能返回 null，表示取不到有效值。
 */
class DepartmentManagerUser extends AbstractModel
{
    /**
     * @var string 管理员Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagerId;

    /**
     * @var string 管理员姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagerName;

    /**
     * @param string $ManagerId 管理员Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManagerName 管理员姓名
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
        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("ManagerName",$param) and $param["ManagerName"] !== null) {
            $this->ManagerName = $param["ManagerName"];
        }
    }
}
