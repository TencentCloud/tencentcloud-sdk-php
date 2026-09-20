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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 控制台用户信息（规范化，与内部 UserDetailInfo 解耦）
 *
 * @method string getUserUin() 获取用户 UIN
 * @method void setUserUin(string $UserUin) 设置用户 UIN
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getNickname() 获取昵称
 * @method void setNickname(string $Nickname) 设置昵称
 * @method array getRoles() 获取角色列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoles(array $Roles) 设置角色列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserSource() 获取用户来源，group：用户组、user:用户
 * @method void setUserSource(string $UserSource) 设置用户来源，group：用户组、user:用户
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method boolean getIsOwner() 获取是否主账号
 * @method void setIsOwner(boolean $IsOwner) 设置是否主账号
 * @method integer getUserTag() 获取0: 普通用户 1: entraId用户
 * @method void setUserTag(integer $UserTag) 设置0: 普通用户 1: entraId用户
 * @method boolean getIsAdmin() 获取是否具有 admin 权限的子账号
 * @method void setIsAdmin(boolean $IsAdmin) 设置是否具有 admin 权限的子账号
 */
class ConsoleUserInfo extends AbstractModel
{
    /**
     * @var string 用户 UIN
     */
    public $UserUin;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 昵称
     */
    public $Nickname;

    /**
     * @var array 角色列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Roles;

    /**
     * @var string 用户来源，group：用户组、user:用户
     */
    public $UserSource;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var boolean 是否主账号
     */
    public $IsOwner;

    /**
     * @var integer 0: 普通用户 1: entraId用户
     */
    public $UserTag;

    /**
     * @var boolean 是否具有 admin 权限的子账号
     */
    public $IsAdmin;

    /**
     * @param string $UserUin 用户 UIN
     * @param string $UserName 用户名
     * @param string $Nickname 昵称
     * @param array $Roles 角色列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserSource 用户来源，group：用户组、user:用户
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param boolean $IsOwner 是否主账号
     * @param integer $UserTag 0: 普通用户 1: entraId用户
     * @param boolean $IsAdmin 是否具有 admin 权限的子账号
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
        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RoleBasicInfo();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("UserSource",$param) and $param["UserSource"] !== null) {
            $this->UserSource = $param["UserSource"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsOwner",$param) and $param["IsOwner"] !== null) {
            $this->IsOwner = $param["IsOwner"];
        }

        if (array_key_exists("UserTag",$param) and $param["UserTag"] !== null) {
            $this->UserTag = $param["UserTag"];
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }
    }
}
