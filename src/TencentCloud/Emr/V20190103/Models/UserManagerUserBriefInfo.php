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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户管理中用户的简要信息
 *
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getUserGroup() 获取<p>用户所属的组</p>
 * @method void setUserGroup(string $UserGroup) 设置<p>用户所属的组</p>
 * @method string getUserType() 获取<p>Manager表示管理员、NormalUser表示普通用户</p>
 * @method void setUserType(string $UserType) 设置<p>Manager表示管理员、NormalUser表示普通用户</p>
 * @method string getCreateTime() 获取<p>用户创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>用户创建时间</p>
 * @method boolean getSupportDownLoadKeyTab() 获取<p>是否可以下载用户对应的keytab文件，对开启kerberos的集群才有意义</p>
 * @method void setSupportDownLoadKeyTab(boolean $SupportDownLoadKeyTab) 设置<p>是否可以下载用户对应的keytab文件，对开启kerberos的集群才有意义</p>
 * @method string getDownLoadKeyTabUrl() 获取<p>keytab文件的下载地址</p>
 * @method void setDownLoadKeyTabUrl(string $DownLoadKeyTabUrl) 设置<p>keytab文件的下载地址</p>
 * @method array getGroups() 获取<p>用户组</p>
 * @method void setGroups(array $Groups) 设置<p>用户组</p>
 * @method string getUin() 获取<p>客户UIN</p>
 * @method void setUin(string $Uin) 设置<p>客户UIN</p>
 * @method integer getState() 获取<p>用户状态</p>
 * @method void setState(integer $State) 设置<p>用户状态</p>
 * @method boolean getDisplayPasswdUpdateTime() 获取<p>是否展示密码更新时间</p>
 * @method void setDisplayPasswdUpdateTime(boolean $DisplayPasswdUpdateTime) 设置<p>是否展示密码更新时间</p>
 * @method string getPasswdUpdateTime() 获取<p>密码最近更新时间</p>
 * @method void setPasswdUpdateTime(string $PasswdUpdateTime) 设置<p>密码最近更新时间</p>
 * @method integer getPasswdUsedDay() 获取<p>已经使用的天数</p><p>单位：天</p>
 * @method void setPasswdUsedDay(integer $PasswdUsedDay) 设置<p>已经使用的天数</p><p>单位：天</p>
 * @method integer getPasswdUsedHour() 获取<p>已经使用的小时数</p><p>单位：时</p>
 * @method void setPasswdUsedHour(integer $PasswdUsedHour) 设置<p>已经使用的小时数</p><p>单位：时</p>
 */
class UserManagerUserBriefInfo extends AbstractModel
{
    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>用户所属的组</p>
     */
    public $UserGroup;

    /**
     * @var string <p>Manager表示管理员、NormalUser表示普通用户</p>
     */
    public $UserType;

    /**
     * @var string <p>用户创建时间</p>
     */
    public $CreateTime;

    /**
     * @var boolean <p>是否可以下载用户对应的keytab文件，对开启kerberos的集群才有意义</p>
     */
    public $SupportDownLoadKeyTab;

    /**
     * @var string <p>keytab文件的下载地址</p>
     */
    public $DownLoadKeyTabUrl;

    /**
     * @var array <p>用户组</p>
     */
    public $Groups;

    /**
     * @var string <p>客户UIN</p>
     */
    public $Uin;

    /**
     * @var integer <p>用户状态</p>
     */
    public $State;

    /**
     * @var boolean <p>是否展示密码更新时间</p>
     */
    public $DisplayPasswdUpdateTime;

    /**
     * @var string <p>密码最近更新时间</p>
     */
    public $PasswdUpdateTime;

    /**
     * @var integer <p>已经使用的天数</p><p>单位：天</p>
     */
    public $PasswdUsedDay;

    /**
     * @var integer <p>已经使用的小时数</p><p>单位：时</p>
     */
    public $PasswdUsedHour;

    /**
     * @param string $UserName <p>用户名</p>
     * @param string $UserGroup <p>用户所属的组</p>
     * @param string $UserType <p>Manager表示管理员、NormalUser表示普通用户</p>
     * @param string $CreateTime <p>用户创建时间</p>
     * @param boolean $SupportDownLoadKeyTab <p>是否可以下载用户对应的keytab文件，对开启kerberos的集群才有意义</p>
     * @param string $DownLoadKeyTabUrl <p>keytab文件的下载地址</p>
     * @param array $Groups <p>用户组</p>
     * @param string $Uin <p>客户UIN</p>
     * @param integer $State <p>用户状态</p>
     * @param boolean $DisplayPasswdUpdateTime <p>是否展示密码更新时间</p>
     * @param string $PasswdUpdateTime <p>密码最近更新时间</p>
     * @param integer $PasswdUsedDay <p>已经使用的天数</p><p>单位：天</p>
     * @param integer $PasswdUsedHour <p>已经使用的小时数</p><p>单位：时</p>
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SupportDownLoadKeyTab",$param) and $param["SupportDownLoadKeyTab"] !== null) {
            $this->SupportDownLoadKeyTab = $param["SupportDownLoadKeyTab"];
        }

        if (array_key_exists("DownLoadKeyTabUrl",$param) and $param["DownLoadKeyTabUrl"] !== null) {
            $this->DownLoadKeyTabUrl = $param["DownLoadKeyTabUrl"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DisplayPasswdUpdateTime",$param) and $param["DisplayPasswdUpdateTime"] !== null) {
            $this->DisplayPasswdUpdateTime = $param["DisplayPasswdUpdateTime"];
        }

        if (array_key_exists("PasswdUpdateTime",$param) and $param["PasswdUpdateTime"] !== null) {
            $this->PasswdUpdateTime = $param["PasswdUpdateTime"];
        }

        if (array_key_exists("PasswdUsedDay",$param) and $param["PasswdUsedDay"] !== null) {
            $this->PasswdUsedDay = $param["PasswdUsedDay"];
        }

        if (array_key_exists("PasswdUsedHour",$param) and $param["PasswdUsedHour"] !== null) {
            $this->PasswdUsedHour = $param["PasswdUsedHour"];
        }
    }
}
