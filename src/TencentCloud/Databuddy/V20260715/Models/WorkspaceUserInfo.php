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
 * 工作空间用户信息
 *
 * @method string getUserUin() 获取<p>用户UIN</p>
 * @method void setUserUin(string $UserUin) 设置<p>用户UIN</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getNickname() 获取<p>昵称</p>
 * @method void setNickname(string $Nickname) 设置<p>昵称</p>
 * @method array getRoles() 获取<p>角色列表</p>
 * @method void setRoles(array $Roles) 设置<p>角色列表</p>
 * @method string getUserSource() 获取<p>用户来源，group：用户组、user：用户</p>
 * @method void setUserSource(string $UserSource) 设置<p>用户来源，group：用户组、user：用户</p>
 * @method string getCreateTime() 获取<p>创建时间，毫秒时间戳</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，毫秒时间戳</p>
 * @method string getUpdateTime() 获取<p>更新时间，毫秒时间戳</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间，毫秒时间戳</p>
 * @method boolean getIsOwner() 获取<p>是否主账号</p>
 * @method void setIsOwner(boolean $IsOwner) 设置<p>是否主账号</p>
 * @method integer getUserTag() 获取<p>0: 普通用户 1: entraId用户</p>
 * @method void setUserTag(integer $UserTag) 设置<p>0: 普通用户 1: entraId用户</p>
 * @method boolean getIsAdmin() 获取<p>是否具有 admin 权限的子账号</p>
 * @method void setIsAdmin(boolean $IsAdmin) 设置<p>是否具有 admin 权限的子账号</p>
 * @method array getTags() 获取<p>合并后标签（用户直绑 + 用户组继承）</p>
 * @method void setTags(array $Tags) 设置<p>合并后标签（用户直绑 + 用户组继承）</p>
 */
class WorkspaceUserInfo extends AbstractModel
{
    /**
     * @var string <p>用户UIN</p>
     */
    public $UserUin;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>昵称</p>
     */
    public $Nickname;

    /**
     * @var array <p>角色列表</p>
     */
    public $Roles;

    /**
     * @var string <p>用户来源，group：用户组、user：用户</p>
     */
    public $UserSource;

    /**
     * @var string <p>创建时间，毫秒时间戳</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间，毫秒时间戳</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>是否主账号</p>
     */
    public $IsOwner;

    /**
     * @var integer <p>0: 普通用户 1: entraId用户</p>
     */
    public $UserTag;

    /**
     * @var boolean <p>是否具有 admin 权限的子账号</p>
     */
    public $IsAdmin;

    /**
     * @var array <p>合并后标签（用户直绑 + 用户组继承）</p>
     */
    public $Tags;

    /**
     * @param string $UserUin <p>用户UIN</p>
     * @param string $UserName <p>用户名</p>
     * @param string $Nickname <p>昵称</p>
     * @param array $Roles <p>角色列表</p>
     * @param string $UserSource <p>用户来源，group：用户组、user：用户</p>
     * @param string $CreateTime <p>创建时间，毫秒时间戳</p>
     * @param string $UpdateTime <p>更新时间，毫秒时间戳</p>
     * @param boolean $IsOwner <p>是否主账号</p>
     * @param integer $UserTag <p>0: 普通用户 1: entraId用户</p>
     * @param boolean $IsAdmin <p>是否具有 admin 权限的子账号</p>
     * @param array $Tags <p>合并后标签（用户直绑 + 用户组继承）</p>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new UserTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
