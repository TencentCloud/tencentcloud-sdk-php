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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * weda用户
 *
 * @method integer getUin() 获取腾讯云主账号uin
 * @method void setUin(integer $Uin) 设置腾讯云主账号uin
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method integer getEnv() 获取环境
 * @method void setEnv(integer $Env) 设置环境
 * @method integer getType() 获取类型
 * @method void setType(integer $Type) 设置类型
 * @method string getNickName() 获取昵称
 * @method void setNickName(string $NickName) 设置昵称
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 * @method integer getProjectId() 获取项目id
 * @method void setProjectId(integer $ProjectId) 设置项目id
 * @method string getUuid() 获取用户uuid
 * @method void setUuid(string $Uuid) 设置用户uuid
 * @method integer getSource() 获取渠道，1:自建；2:企业微信导入
 * @method void setSource(integer $Source) 设置渠道，1:自建；2:企业微信导入
 * @method string getOpenId() 获取微信openid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置微信openid
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedRoles() 获取关联角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedRoles(array $RelatedRoles) 设置关联角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatUserId() 获取企业微信userid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatUserId(string $WechatUserId) 设置企业微信userid
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternalUserType() 获取内部用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalUserType(integer $InternalUserType) 设置内部用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserId() 获取微搭用户id
 * @method void setUserId(integer $UserId) 设置微搭用户id
 * @method string getOrgName() 获取所属部门名称
 * @method void setOrgName(string $OrgName) 设置所属部门名称
 * @method string getUserSchema() 获取用户schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserSchema(string $UserSchema) 设置用户schema
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserExtend() 获取用户扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserExtend(string $UserExtend) 设置用户扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLicensed() 获取用户是否授权License
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLicensed(boolean $IsLicensed) 设置用户是否授权License
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedRoleGroups() 获取权限组数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedRoleGroups(array $RelatedRoleGroups) 设置权限组数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrgs() 获取兼岗部门
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgs(array $Orgs) 设置兼岗部门
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMainOrg() 获取主岗部门
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainOrg(array $MainOrg) 设置主岗部门
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParentUserId() 获取直属上级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentUserId(integer $ParentUserId) 设置直属上级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrimaryColumn() 获取主列字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrimaryColumn(string $PrimaryColumn) 设置主列字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvatarUrl() 获取用户头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvatarUrl(string $AvatarUrl) 设置用户头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLoginTime() 获取最后登录时间
 * @method void setLastLoginTime(string $LastLoginTime) 设置最后登录时间
 */
class WedaUser extends AbstractModel
{
    /**
     * @var integer 腾讯云主账号uin
     */
    public $Uin;

    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var integer 环境
     */
    public $Env;

    /**
     * @var integer 类型
     */
    public $Type;

    /**
     * @var string 昵称
     */
    public $NickName;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @var integer 项目id
     */
    public $ProjectId;

    /**
     * @var string 用户uuid
     */
    public $Uuid;

    /**
     * @var integer 渠道，1:自建；2:企业微信导入
     */
    public $Source;

    /**
     * @var string 微信openid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var array 关联角色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedRoles;

    /**
     * @var string 企业微信userid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatUserId;

    /**
     * @var integer 内部用户类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalUserType;

    /**
     * @var integer 微搭用户id
     */
    public $UserId;

    /**
     * @var string 所属部门名称
     */
    public $OrgName;

    /**
     * @var string 用户schema
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserSchema;

    /**
     * @var string 用户扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserExtend;

    /**
     * @var boolean 用户是否授权License
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLicensed;

    /**
     * @var array 权限组数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedRoleGroups;

    /**
     * @var array 兼岗部门
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Orgs;

    /**
     * @var array 主岗部门
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainOrg;

    /**
     * @var integer 直属上级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentUserId;

    /**
     * @var string 主列字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrimaryColumn;

    /**
     * @var string 用户头像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvatarUrl;

    /**
     * @var string 最后登录时间
     */
    public $LastLoginTime;

    /**
     * @param integer $Uin 腾讯云主账号uin
     * @param string $Name 名字
     * @param integer $Env 环境
     * @param integer $Type 类型
     * @param string $NickName 昵称
     * @param string $Email 邮箱
     * @param string $Phone 手机号
     * @param integer $ProjectId 项目id
     * @param string $Uuid 用户uuid
     * @param integer $Source 渠道，1:自建；2:企业微信导入
     * @param string $OpenId 微信openid
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedRoles 关联角色
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatUserId 企业微信userid
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternalUserType 内部用户类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserId 微搭用户id
     * @param string $OrgName 所属部门名称
     * @param string $UserSchema 用户schema
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserExtend 用户扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLicensed 用户是否授权License
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedRoleGroups 权限组数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Orgs 兼岗部门
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MainOrg 主岗部门
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParentUserId 直属上级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrimaryColumn 主列字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AvatarUrl 用户头像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLoginTime 最后登录时间
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("RelatedRoles",$param) and $param["RelatedRoles"] !== null) {
            $this->RelatedRoles = [];
            foreach ($param["RelatedRoles"] as $key => $value){
                $obj = new WedaRole();
                $obj->deserialize($value);
                array_push($this->RelatedRoles, $obj);
            }
        }

        if (array_key_exists("WechatUserId",$param) and $param["WechatUserId"] !== null) {
            $this->WechatUserId = $param["WechatUserId"];
        }

        if (array_key_exists("InternalUserType",$param) and $param["InternalUserType"] !== null) {
            $this->InternalUserType = $param["InternalUserType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OrgName",$param) and $param["OrgName"] !== null) {
            $this->OrgName = $param["OrgName"];
        }

        if (array_key_exists("UserSchema",$param) and $param["UserSchema"] !== null) {
            $this->UserSchema = $param["UserSchema"];
        }

        if (array_key_exists("UserExtend",$param) and $param["UserExtend"] !== null) {
            $this->UserExtend = $param["UserExtend"];
        }

        if (array_key_exists("IsLicensed",$param) and $param["IsLicensed"] !== null) {
            $this->IsLicensed = $param["IsLicensed"];
        }

        if (array_key_exists("RelatedRoleGroups",$param) and $param["RelatedRoleGroups"] !== null) {
            $this->RelatedRoleGroups = [];
            foreach ($param["RelatedRoleGroups"] as $key => $value){
                $obj = new RoleGroup();
                $obj->deserialize($value);
                array_push($this->RelatedRoleGroups, $obj);
            }
        }

        if (array_key_exists("Orgs",$param) and $param["Orgs"] !== null) {
            $this->Orgs = [];
            foreach ($param["Orgs"] as $key => $value){
                $obj = new OrgResp();
                $obj->deserialize($value);
                array_push($this->Orgs, $obj);
            }
        }

        if (array_key_exists("MainOrg",$param) and $param["MainOrg"] !== null) {
            $this->MainOrg = [];
            foreach ($param["MainOrg"] as $key => $value){
                $obj = new OrgResp();
                $obj->deserialize($value);
                array_push($this->MainOrg, $obj);
            }
        }

        if (array_key_exists("ParentUserId",$param) and $param["ParentUserId"] !== null) {
            $this->ParentUserId = $param["ParentUserId"];
        }

        if (array_key_exists("PrimaryColumn",$param) and $param["PrimaryColumn"] !== null) {
            $this->PrimaryColumn = $param["PrimaryColumn"];
        }

        if (array_key_exists("AvatarUrl",$param) and $param["AvatarUrl"] !== null) {
            $this->AvatarUrl = $param["AvatarUrl"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }
    }
}
