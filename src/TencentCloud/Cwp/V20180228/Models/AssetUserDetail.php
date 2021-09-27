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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源管理账号基本信息
 *
 * @method string getMachineIp() 获取主机内网IP
 * @method void setMachineIp(string $MachineIp) 设置主机内网IP
 * @method string getMachineName() 获取主机名称
 * @method void setMachineName(string $MachineName) 设置主机名称
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getUid() 获取账号UID
 * @method void setUid(string $Uid) 设置账号UID
 * @method string getGid() 获取账号GID
 * @method void setGid(string $Gid) 设置账号GID
 * @method integer getStatus() 获取账号状态：0-禁用；1-启用
 * @method void setStatus(integer $Status) 设置账号状态：0-禁用；1-启用
 * @method integer getIsRoot() 获取是否有root权限：0-否；1是，999为空: 仅linux
 * @method void setIsRoot(integer $IsRoot) 设置是否有root权限：0-否；1是，999为空: 仅linux
 * @method string getLastLoginTime() 获取上次登录时间
 * @method void setLastLoginTime(string $LastLoginTime) 设置上次登录时间
 * @method string getName() 获取账号名称
 * @method void setName(string $Name) 设置账号名称
 * @method integer getUserType() 获取账号类型：0访客用户，1标准用户，2管理员用户 ,999为空,仅windows
 * @method void setUserType(integer $UserType) 设置账号类型：0访客用户，1标准用户，2管理员用户 ,999为空,仅windows
 * @method integer getIsDomain() 获取是否域账号：0否， 1是, 999为空  仅windows
 * @method void setIsDomain(integer $IsDomain) 设置是否域账号：0否， 1是, 999为空  仅windows
 * @method integer getIsSshLogin() 获取是否允许ssh登录，1是，0否, 999为空, 仅linux
 * @method void setIsSshLogin(integer $IsSshLogin) 设置是否允许ssh登录，1是，0否, 999为空, 仅linux
 * @method string getHomePath() 获取Home目录
 * @method void setHomePath(string $HomePath) 设置Home目录
 * @method string getShell() 获取Shell路径  仅linux
 * @method void setShell(string $Shell) 设置Shell路径  仅linux
 * @method integer getShellLoginStatus() 获取是否shell登录性，0不是；1是 仅linux
 * @method void setShellLoginStatus(integer $ShellLoginStatus) 设置是否shell登录性，0不是；1是 仅linux
 * @method string getPasswordChangeTime() 获取密码修改时间
 * @method void setPasswordChangeTime(string $PasswordChangeTime) 设置密码修改时间
 * @method string getPasswordDueTime() 获取密码过期时间  仅linux
 * @method void setPasswordDueTime(string $PasswordDueTime) 设置密码过期时间  仅linux
 * @method integer getPasswordLockDays() 获取密码锁定时间：单位天, -1为永不锁定 999为空，仅linux
 * @method void setPasswordLockDays(integer $PasswordLockDays) 设置密码锁定时间：单位天, -1为永不锁定 999为空，仅linux
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getGroupName() 获取用户组名
 * @method void setGroupName(string $GroupName) 设置用户组名
 * @method string getDisableTime() 获取账号到期时间
 * @method void setDisableTime(string $DisableTime) 设置账号到期时间
 * @method string getLastLoginTerminal() 获取最近登录终端
 * @method void setLastLoginTerminal(string $LastLoginTerminal) 设置最近登录终端
 * @method string getLastLoginLoc() 获取最近登录位置
 * @method void setLastLoginLoc(string $LastLoginLoc) 设置最近登录位置
 * @method string getLastLoginIp() 获取最近登录IP
 * @method void setLastLoginIp(string $LastLoginIp) 设置最近登录IP
 * @method integer getPasswordWarnDays() 获取密码过期提醒：单位天
 * @method void setPasswordWarnDays(integer $PasswordWarnDays) 设置密码过期提醒：单位天
 * @method integer getPasswordChangeType() 获取密码修改设置：0-不可修改，1-可修改
 * @method void setPasswordChangeType(integer $PasswordChangeType) 设置密码修改设置：0-不可修改，1-可修改
 * @method array getKeys() 获取用户公钥列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(array $Keys) 设置用户公钥列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetUserDetail extends AbstractModel
{
    /**
     * @var string 主机内网IP
     */
    public $MachineIp;

    /**
     * @var string 主机名称
     */
    public $MachineName;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 账号UID
     */
    public $Uid;

    /**
     * @var string 账号GID
     */
    public $Gid;

    /**
     * @var integer 账号状态：0-禁用；1-启用
     */
    public $Status;

    /**
     * @var integer 是否有root权限：0-否；1是，999为空: 仅linux
     */
    public $IsRoot;

    /**
     * @var string 上次登录时间
     */
    public $LastLoginTime;

    /**
     * @var string 账号名称
     */
    public $Name;

    /**
     * @var integer 账号类型：0访客用户，1标准用户，2管理员用户 ,999为空,仅windows
     */
    public $UserType;

    /**
     * @var integer 是否域账号：0否， 1是, 999为空  仅windows
     */
    public $IsDomain;

    /**
     * @var integer 是否允许ssh登录，1是，0否, 999为空, 仅linux
     */
    public $IsSshLogin;

    /**
     * @var string Home目录
     */
    public $HomePath;

    /**
     * @var string Shell路径  仅linux
     */
    public $Shell;

    /**
     * @var integer 是否shell登录性，0不是；1是 仅linux
     */
    public $ShellLoginStatus;

    /**
     * @var string 密码修改时间
     */
    public $PasswordChangeTime;

    /**
     * @var string 密码过期时间  仅linux
     */
    public $PasswordDueTime;

    /**
     * @var integer 密码锁定时间：单位天, -1为永不锁定 999为空，仅linux
     */
    public $PasswordLockDays;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 用户组名
     */
    public $GroupName;

    /**
     * @var string 账号到期时间
     */
    public $DisableTime;

    /**
     * @var string 最近登录终端
     */
    public $LastLoginTerminal;

    /**
     * @var string 最近登录位置
     */
    public $LastLoginLoc;

    /**
     * @var string 最近登录IP
     */
    public $LastLoginIp;

    /**
     * @var integer 密码过期提醒：单位天
     */
    public $PasswordWarnDays;

    /**
     * @var integer 密码修改设置：0-不可修改，1-可修改
     */
    public $PasswordChangeType;

    /**
     * @var array 用户公钥列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @var string 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $MachineIp 主机内网IP
     * @param string $MachineName 主机名称
     * @param string $Uuid 主机Uuid
     * @param string $Quuid 主机Quuid
     * @param string $Uid 账号UID
     * @param string $Gid 账号GID
     * @param integer $Status 账号状态：0-禁用；1-启用
     * @param integer $IsRoot 是否有root权限：0-否；1是，999为空: 仅linux
     * @param string $LastLoginTime 上次登录时间
     * @param string $Name 账号名称
     * @param integer $UserType 账号类型：0访客用户，1标准用户，2管理员用户 ,999为空,仅windows
     * @param integer $IsDomain 是否域账号：0否， 1是, 999为空  仅windows
     * @param integer $IsSshLogin 是否允许ssh登录，1是，0否, 999为空, 仅linux
     * @param string $HomePath Home目录
     * @param string $Shell Shell路径  仅linux
     * @param integer $ShellLoginStatus 是否shell登录性，0不是；1是 仅linux
     * @param string $PasswordChangeTime 密码修改时间
     * @param string $PasswordDueTime 密码过期时间  仅linux
     * @param integer $PasswordLockDays 密码锁定时间：单位天, -1为永不锁定 999为空，仅linux
     * @param string $Remark 备注
     * @param string $GroupName 用户组名
     * @param string $DisableTime 账号到期时间
     * @param string $LastLoginTerminal 最近登录终端
     * @param string $LastLoginLoc 最近登录位置
     * @param string $LastLoginIp 最近登录IP
     * @param integer $PasswordWarnDays 密码过期提醒：单位天
     * @param integer $PasswordChangeType 密码修改设置：0-不可修改，1-可修改
     * @param array $Keys 用户公钥列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 数据更新时间
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Gid",$param) and $param["Gid"] !== null) {
            $this->Gid = $param["Gid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsRoot",$param) and $param["IsRoot"] !== null) {
            $this->IsRoot = $param["IsRoot"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("IsDomain",$param) and $param["IsDomain"] !== null) {
            $this->IsDomain = $param["IsDomain"];
        }

        if (array_key_exists("IsSshLogin",$param) and $param["IsSshLogin"] !== null) {
            $this->IsSshLogin = $param["IsSshLogin"];
        }

        if (array_key_exists("HomePath",$param) and $param["HomePath"] !== null) {
            $this->HomePath = $param["HomePath"];
        }

        if (array_key_exists("Shell",$param) and $param["Shell"] !== null) {
            $this->Shell = $param["Shell"];
        }

        if (array_key_exists("ShellLoginStatus",$param) and $param["ShellLoginStatus"] !== null) {
            $this->ShellLoginStatus = $param["ShellLoginStatus"];
        }

        if (array_key_exists("PasswordChangeTime",$param) and $param["PasswordChangeTime"] !== null) {
            $this->PasswordChangeTime = $param["PasswordChangeTime"];
        }

        if (array_key_exists("PasswordDueTime",$param) and $param["PasswordDueTime"] !== null) {
            $this->PasswordDueTime = $param["PasswordDueTime"];
        }

        if (array_key_exists("PasswordLockDays",$param) and $param["PasswordLockDays"] !== null) {
            $this->PasswordLockDays = $param["PasswordLockDays"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("DisableTime",$param) and $param["DisableTime"] !== null) {
            $this->DisableTime = $param["DisableTime"];
        }

        if (array_key_exists("LastLoginTerminal",$param) and $param["LastLoginTerminal"] !== null) {
            $this->LastLoginTerminal = $param["LastLoginTerminal"];
        }

        if (array_key_exists("LastLoginLoc",$param) and $param["LastLoginLoc"] !== null) {
            $this->LastLoginLoc = $param["LastLoginLoc"];
        }

        if (array_key_exists("LastLoginIp",$param) and $param["LastLoginIp"] !== null) {
            $this->LastLoginIp = $param["LastLoginIp"];
        }

        if (array_key_exists("PasswordWarnDays",$param) and $param["PasswordWarnDays"] !== null) {
            $this->PasswordWarnDays = $param["PasswordWarnDays"];
        }

        if (array_key_exists("PasswordChangeType",$param) and $param["PasswordChangeType"] !== null) {
            $this->PasswordChangeType = $param["PasswordChangeType"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new AssetUserKeyInfo();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
