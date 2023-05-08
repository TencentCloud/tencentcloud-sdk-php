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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备的用户
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method integer getRole() 获取用户角色 1所有者，0：其他分享者
 * @method void setRole(integer $Role) 设置用户角色 1所有者，0：其他分享者
 * @method string getFamilyId() 获取家庭ID，所有者带该参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFamilyId(string $FamilyId) 设置家庭ID，所有者带该参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFamilyName() 获取家庭名称，所有者带该参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFamilyName(string $FamilyName) 设置家庭名称，所有者带该参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceUser extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var integer 用户角色 1所有者，0：其他分享者
     */
    public $Role;

    /**
     * @var string 家庭ID，所有者带该参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FamilyId;

    /**
     * @var string 家庭名称，所有者带该参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FamilyName;

    /**
     * @param string $UserId 用户ID
     * @param integer $Role 用户角色 1所有者，0：其他分享者
     * @param string $FamilyId 家庭ID，所有者带该参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FamilyName 家庭名称，所有者带该参数
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("FamilyId",$param) and $param["FamilyId"] !== null) {
            $this->FamilyId = $param["FamilyId"];
        }

        if (array_key_exists("FamilyName",$param) and $param["FamilyName"] !== null) {
            $this->FamilyName = $param["FamilyName"];
        }
    }
}
