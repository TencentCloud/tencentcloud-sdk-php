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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取账号列表响应的单个对象
 *
 * @method integer getId() 获取uid，数据库中唯一
 * @method void setId(integer $Id) 设置uid，数据库中唯一
 * @method string getUserId() 获取账号，登录账号
 * @method void setUserId(string $UserId) 设置账号，登录账号
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method integer getAccountId() 获取账号id，同Id字段
 * @method void setAccountId(integer $AccountId) 设置账号id，同Id字段
 * @method integer getGroupId() 获取账号所在的分组id
 * @method void setGroupId(integer $GroupId) 设置账号所在的分组id
 * @method string getGroupName() 获取账号所在的分组名称
 * @method void setGroupName(string $GroupName) 设置账号所在的分组名称
 * @method string getNamePath() 获取账号所在的分组名称路径，用英文.分割
 * @method void setNamePath(string $NamePath) 设置账号所在的分组名称路径，用英文.分割
 * @method integer getSource() 获取账号来源,0表示本地账号(只支持32位)
 * @method void setSource(integer $Source) 设置账号来源,0表示本地账号(只支持32位)
 * @method integer getStatus() 获取账号状态,0禁用，1启用(只支持32位)
 * @method void setStatus(integer $Status) 设置账号状态,0禁用，1启用(只支持32位)
 * @method string getItime() 获取账号的创建时间
 * @method void setItime(string $Itime) 设置账号的创建时间
 * @method string getUtime() 获取账号的最后更新时间
 * @method void setUtime(string $Utime) 设置账号的最后更新时间
 * @method string getExtraInfo() 获取账号的扩展信息，包含邮箱、手机号、身份证、职位等信息
 * @method void setExtraInfo(string $ExtraInfo) 设置账号的扩展信息，包含邮箱、手机号、身份证、职位等信息
 * @method string getRiskLevel() 获取用户风险等级，枚举：none, low, middle, high
 * @method void setRiskLevel(string $RiskLevel) 设置用户风险等级，枚举：none, low, middle, high
 * @method array getAccountGroups() 获取所属组
 * @method void setAccountGroups(array $AccountGroups) 设置所属组
 * @method integer getMobileBindNum() 获取绑定手机端设备数
 * @method void setMobileBindNum(integer $MobileBindNum) 设置绑定手机端设备数
 * @method integer getPcBindNum() 获取绑定Pc端设备数
 * @method void setPcBindNum(integer $PcBindNum) 设置绑定Pc端设备数
 * @method integer getOnlineStatus() 获取账号在线状态 1：在线 2：离线
 * @method void setOnlineStatus(integer $OnlineStatus) 设置账号在线状态 1：在线 2：离线
 * @method integer getActiveStatus() 获取账号活跃状态 1：活跃 2：非活跃
 * @method void setActiveStatus(integer $ActiveStatus) 设置账号活跃状态 1：活跃 2：非活跃
 * @method string getLoginTime() 获取账号登录时间
 * @method void setLoginTime(string $LoginTime) 设置账号登录时间
 * @method string getLogoutTime() 获取账号登出时间
 * @method void setLogoutTime(string $LogoutTime) 设置账号登出时间
 */
class DescribeLocalAccountsData extends AbstractModel
{
    /**
     * @var integer uid，数据库中唯一
     */
    public $Id;

    /**
     * @var string 账号，登录账号
     */
    public $UserId;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var integer 账号id，同Id字段
     */
    public $AccountId;

    /**
     * @var integer 账号所在的分组id
     */
    public $GroupId;

    /**
     * @var string 账号所在的分组名称
     */
    public $GroupName;

    /**
     * @var string 账号所在的分组名称路径，用英文.分割
     */
    public $NamePath;

    /**
     * @var integer 账号来源,0表示本地账号(只支持32位)
     */
    public $Source;

    /**
     * @var integer 账号状态,0禁用，1启用(只支持32位)
     */
    public $Status;

    /**
     * @var string 账号的创建时间
     */
    public $Itime;

    /**
     * @var string 账号的最后更新时间
     */
    public $Utime;

    /**
     * @var string 账号的扩展信息，包含邮箱、手机号、身份证、职位等信息
     */
    public $ExtraInfo;

    /**
     * @var string 用户风险等级，枚举：none, low, middle, high
     */
    public $RiskLevel;

    /**
     * @var array 所属组
     */
    public $AccountGroups;

    /**
     * @var integer 绑定手机端设备数
     */
    public $MobileBindNum;

    /**
     * @var integer 绑定Pc端设备数
     */
    public $PcBindNum;

    /**
     * @var integer 账号在线状态 1：在线 2：离线
     */
    public $OnlineStatus;

    /**
     * @var integer 账号活跃状态 1：活跃 2：非活跃
     */
    public $ActiveStatus;

    /**
     * @var string 账号登录时间
     */
    public $LoginTime;

    /**
     * @var string 账号登出时间
     */
    public $LogoutTime;

    /**
     * @param integer $Id uid，数据库中唯一
     * @param string $UserId 账号，登录账号
     * @param string $UserName 用户名
     * @param integer $AccountId 账号id，同Id字段
     * @param integer $GroupId 账号所在的分组id
     * @param string $GroupName 账号所在的分组名称
     * @param string $NamePath 账号所在的分组名称路径，用英文.分割
     * @param integer $Source 账号来源,0表示本地账号(只支持32位)
     * @param integer $Status 账号状态,0禁用，1启用(只支持32位)
     * @param string $Itime 账号的创建时间
     * @param string $Utime 账号的最后更新时间
     * @param string $ExtraInfo 账号的扩展信息，包含邮箱、手机号、身份证、职位等信息
     * @param string $RiskLevel 用户风险等级，枚举：none, low, middle, high
     * @param array $AccountGroups 所属组
     * @param integer $MobileBindNum 绑定手机端设备数
     * @param integer $PcBindNum 绑定Pc端设备数
     * @param integer $OnlineStatus 账号在线状态 1：在线 2：离线
     * @param integer $ActiveStatus 账号活跃状态 1：活跃 2：非活跃
     * @param string $LoginTime 账号登录时间
     * @param string $LogoutTime 账号登出时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("NamePath",$param) and $param["NamePath"] !== null) {
            $this->NamePath = $param["NamePath"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Itime",$param) and $param["Itime"] !== null) {
            $this->Itime = $param["Itime"];
        }

        if (array_key_exists("Utime",$param) and $param["Utime"] !== null) {
            $this->Utime = $param["Utime"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("AccountGroups",$param) and $param["AccountGroups"] !== null) {
            $this->AccountGroups = [];
            foreach ($param["AccountGroups"] as $key => $value){
                $obj = new DescribeLocalAccountAccountGroupsData();
                $obj->deserialize($value);
                array_push($this->AccountGroups, $obj);
            }
        }

        if (array_key_exists("MobileBindNum",$param) and $param["MobileBindNum"] !== null) {
            $this->MobileBindNum = $param["MobileBindNum"];
        }

        if (array_key_exists("PcBindNum",$param) and $param["PcBindNum"] !== null) {
            $this->PcBindNum = $param["PcBindNum"];
        }

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }

        if (array_key_exists("ActiveStatus",$param) and $param["ActiveStatus"] !== null) {
            $this->ActiveStatus = $param["ActiveStatus"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("LogoutTime",$param) and $param["LogoutTime"] !== null) {
            $this->LogoutTime = $param["LogoutTime"];
        }
    }
}
