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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户角色
 *
 * @method integer getRoleId() 获取角色ID
 * @method void setRoleId(integer $RoleId) 设置角色ID
 * @method string getAppId() 获取用户app ID
 * @method void setAppId(string $AppId) 设置用户app ID
 * @method string getUin() 获取用户ID
 * @method void setUin(string $Uin) 设置用户ID
 * @method string getArn() 获取角色权限
 * @method void setArn(string $Arn) 设置角色权限
 * @method integer getModifyTime() 获取最近修改时间戳
 * @method void setModifyTime(integer $ModifyTime) 设置最近修改时间戳
 * @method string getDesc() 获取角色描述信息
 * @method void setDesc(string $Desc) 设置角色描述信息
 * @method string getRoleName() 获取角色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleName(string $RoleName) 设置角色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取创建者UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建者UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCosPermissionList() 获取cos授权路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosPermissionList(array $CosPermissionList) 设置cos授权路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPermissionJson() 获取cam策略json
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissionJson(string $PermissionJson) 设置cam策略json
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserRole extends AbstractModel
{
    /**
     * @var integer 角色ID
     */
    public $RoleId;

    /**
     * @var string 用户app ID
     */
    public $AppId;

    /**
     * @var string 用户ID
     */
    public $Uin;

    /**
     * @var string 角色权限
     */
    public $Arn;

    /**
     * @var integer 最近修改时间戳
     */
    public $ModifyTime;

    /**
     * @var string 角色描述信息
     */
    public $Desc;

    /**
     * @var string 角色名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleName;

    /**
     * @var string 创建者UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var array cos授权路径列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosPermissionList;

    /**
     * @var string cam策略json
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PermissionJson;

    /**
     * @param integer $RoleId 角色ID
     * @param string $AppId 用户app ID
     * @param string $Uin 用户ID
     * @param string $Arn 角色权限
     * @param integer $ModifyTime 最近修改时间戳
     * @param string $Desc 角色描述信息
     * @param string $RoleName 角色名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 创建者UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CosPermissionList cos授权路径列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PermissionJson cam策略json
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Arn",$param) and $param["Arn"] !== null) {
            $this->Arn = $param["Arn"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CosPermissionList",$param) and $param["CosPermissionList"] !== null) {
            $this->CosPermissionList = [];
            foreach ($param["CosPermissionList"] as $key => $value){
                $obj = new CosPermission();
                $obj->deserialize($value);
                array_push($this->CosPermissionList, $obj);
            }
        }

        if (array_key_exists("PermissionJson",$param) and $param["PermissionJson"] !== null) {
            $this->PermissionJson = $param["PermissionJson"];
        }
    }
}
