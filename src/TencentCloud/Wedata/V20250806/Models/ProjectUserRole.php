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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目的用户对象
 *
 * @method string getAppId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRootAccountId() 获取主账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootAccountId(string $RootAccountId) 设置主账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取显示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置显示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRoles() 获取用户角色对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoles(array $Roles) 设置用户角色对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCreator() 获取是否创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCreator(boolean $IsCreator) 设置是否创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsProjectOwner() 获取是否项目负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsProjectOwner(boolean $IsProjectOwner) 设置是否项目负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNum() 获取手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNum(string $PhoneNum) 设置手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置邮箱
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectUserRole extends AbstractModel
{
    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 主账号id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootAccountId;

    /**
     * @var string 用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 显示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var array 用户角色对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Roles;

    /**
     * @var boolean 是否创建者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCreator;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var boolean 是否项目负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsProjectOwner;

    /**
     * @var string 手机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNum;

    /**
     * @var string 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @param string $AppId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RootAccountId 主账号id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin 用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 显示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Roles 用户角色对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCreator 是否创建者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsProjectOwner 是否项目负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNum 手机号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 邮箱
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RootAccountId",$param) and $param["RootAccountId"] !== null) {
            $this->RootAccountId = $param["RootAccountId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new SystemRole();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("IsCreator",$param) and $param["IsCreator"] !== null) {
            $this->IsCreator = $param["IsCreator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsProjectOwner",$param) and $param["IsProjectOwner"] !== null) {
            $this->IsProjectOwner = $param["IsProjectOwner"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
