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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Grafana可视化服务 授权账户信息
 *
 * @method string getUserId() 获取用户账号ID
 * @method void setUserId(string $UserId) 设置用户账号ID
 * @method array getRole() 获取用户权限
 * @method void setRole(array $Role) 设置用户权限
 * @method string getNotes() 获取备注
 * @method void setNotes(string $Notes) 设置备注
 * @method string getCreateAt() 获取创建时间
 * @method void setCreateAt(string $CreateAt) 设置创建时间
 * @method string getInstanceId() 获取实例 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户主账号 UIN
 * @method void setUin(string $Uin) 设置用户主账号 UIN
 */
class GrafanaAccountInfo extends AbstractModel
{
    /**
     * @var string 用户账号ID
     */
    public $UserId;

    /**
     * @var array 用户权限
     */
    public $Role;

    /**
     * @var string 备注
     */
    public $Notes;

    /**
     * @var string 创建时间
     */
    public $CreateAt;

    /**
     * @var string 实例 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 用户主账号 UIN
     */
    public $Uin;

    /**
     * @param string $UserId 用户账号ID
     * @param array $Role 用户权限
     * @param string $Notes 备注
     * @param string $CreateAt 创建时间
     * @param string $InstanceId 实例 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户主账号 UIN
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
            $this->Role = [];
            foreach ($param["Role"] as $key => $value){
                $obj = new GrafanaAccountRole();
                $obj->deserialize($value);
                array_push($this->Role, $obj);
            }
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
