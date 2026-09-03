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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取账号列表响应的单个对象
 *
 * @method integer getId() 获取<p>uid，数据库中唯一</p>
 * @method void setId(integer $Id) 设置<p>uid，数据库中唯一</p>
 * @method string getUserId() 获取<p>账号，登录账号</p>
 * @method void setUserId(string $UserId) 设置<p>账号，登录账号</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method integer getAccountId() 获取<p>账号id，同Id字段</p>
 * @method void setAccountId(integer $AccountId) 设置<p>账号id，同Id字段</p>
 * @method integer getGroupId() 获取<p>账号所在的分组id</p>
 * @method void setGroupId(integer $GroupId) 设置<p>账号所在的分组id</p>
 * @method string getGroupName() 获取<p>账号所在的分组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>账号所在的分组名称</p>
 * @method string getNamePath() 获取<p>账号所在的分组名称路径，用英文.分割</p>
 * @method void setNamePath(string $NamePath) 设置<p>账号所在的分组名称路径，用英文.分割</p>
 * @method integer getSource() 获取<p>账号来源,0表示本地账号(只支持32位)</p>
 * @method void setSource(integer $Source) 设置<p>账号来源,0表示本地账号(只支持32位)</p>
 * @method integer getStatus() 获取<p>账号状态,0禁用，1启用(只支持32位)</p>
 * @method void setStatus(integer $Status) 设置<p>账号状态,0禁用，1启用(只支持32位)</p>
 * @method string getItime() 获取<p>账号的创建时间</p>
 * @method void setItime(string $Itime) 设置<p>账号的创建时间</p>
 * @method string getUtime() 获取<p>账号的最后更新时间</p>
 * @method void setUtime(string $Utime) 设置<p>账号的最后更新时间</p>
 * @method string getExtraInfo() 获取<p>账号的扩展信息，包含邮箱、手机号、身份证、职位等信息</p>
 * @method void setExtraInfo(string $ExtraInfo) 设置<p>账号的扩展信息，包含邮箱、手机号、身份证、职位等信息</p>
 * @method string getRiskLevel() 获取<p>用户风险等级，枚举：none, low, middle, high</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>用户风险等级，枚举：none, low, middle, high</p>
 * @method array getAccountGroups() 获取<p>所属组</p>
 * @method void setAccountGroups(array $AccountGroups) 设置<p>所属组</p>
 * @method integer getMobileBindNum() 获取<p>绑定手机端设备数</p>
 * @method void setMobileBindNum(integer $MobileBindNum) 设置<p>绑定手机端设备数</p>
 * @method integer getPcBindNum() 获取<p>绑定Pc端设备数</p>
 * @method void setPcBindNum(integer $PcBindNum) 设置<p>绑定Pc端设备数</p>
 * @method integer getOnlineStatus() 获取<p>账号在线状态 1：在线 2：离线</p>
 * @method void setOnlineStatus(integer $OnlineStatus) 设置<p>账号在线状态 1：在线 2：离线</p>
 * @method integer getActiveStatus() 获取<p>账号活跃状态 1：活跃 2：非活跃</p>
 * @method void setActiveStatus(integer $ActiveStatus) 设置<p>账号活跃状态 1：活跃 2：非活跃</p>
 * @method string getLoginTime() 获取<p>账号登录时间</p>
 * @method void setLoginTime(string $LoginTime) 设置<p>账号登录时间</p>
 * @method string getLogoutTime() 获取<p>账号登出时间</p>
 * @method void setLogoutTime(string $LogoutTime) 设置<p>账号登出时间</p>
 */
class DescribeLocalAccountsData extends AbstractModel
{
    /**
     * @var integer <p>uid，数据库中唯一</p>
     */
    public $Id;

    /**
     * @var string <p>账号，登录账号</p>
     */
    public $UserId;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var integer <p>账号id，同Id字段</p>
     */
    public $AccountId;

    /**
     * @var integer <p>账号所在的分组id</p>
     */
    public $GroupId;

    /**
     * @var string <p>账号所在的分组名称</p>
     */
    public $GroupName;

    /**
     * @var string <p>账号所在的分组名称路径，用英文.分割</p>
     */
    public $NamePath;

    /**
     * @var integer <p>账号来源,0表示本地账号(只支持32位)</p>
     */
    public $Source;

    /**
     * @var integer <p>账号状态,0禁用，1启用(只支持32位)</p>
     */
    public $Status;

    /**
     * @var string <p>账号的创建时间</p>
     */
    public $Itime;

    /**
     * @var string <p>账号的最后更新时间</p>
     */
    public $Utime;

    /**
     * @var string <p>账号的扩展信息，包含邮箱、手机号、身份证、职位等信息</p>
     */
    public $ExtraInfo;

    /**
     * @var string <p>用户风险等级，枚举：none, low, middle, high</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>所属组</p>
     */
    public $AccountGroups;

    /**
     * @var integer <p>绑定手机端设备数</p>
     */
    public $MobileBindNum;

    /**
     * @var integer <p>绑定Pc端设备数</p>
     */
    public $PcBindNum;

    /**
     * @var integer <p>账号在线状态 1：在线 2：离线</p>
     */
    public $OnlineStatus;

    /**
     * @var integer <p>账号活跃状态 1：活跃 2：非活跃</p>
     */
    public $ActiveStatus;

    /**
     * @var string <p>账号登录时间</p>
     */
    public $LoginTime;

    /**
     * @var string <p>账号登出时间</p>
     */
    public $LogoutTime;

    /**
     * @param integer $Id <p>uid，数据库中唯一</p>
     * @param string $UserId <p>账号，登录账号</p>
     * @param string $UserName <p>用户名</p>
     * @param integer $AccountId <p>账号id，同Id字段</p>
     * @param integer $GroupId <p>账号所在的分组id</p>
     * @param string $GroupName <p>账号所在的分组名称</p>
     * @param string $NamePath <p>账号所在的分组名称路径，用英文.分割</p>
     * @param integer $Source <p>账号来源,0表示本地账号(只支持32位)</p>
     * @param integer $Status <p>账号状态,0禁用，1启用(只支持32位)</p>
     * @param string $Itime <p>账号的创建时间</p>
     * @param string $Utime <p>账号的最后更新时间</p>
     * @param string $ExtraInfo <p>账号的扩展信息，包含邮箱、手机号、身份证、职位等信息</p>
     * @param string $RiskLevel <p>用户风险等级，枚举：none, low, middle, high</p>
     * @param array $AccountGroups <p>所属组</p>
     * @param integer $MobileBindNum <p>绑定手机端设备数</p>
     * @param integer $PcBindNum <p>绑定Pc端设备数</p>
     * @param integer $OnlineStatus <p>账号在线状态 1：在线 2：离线</p>
     * @param integer $ActiveStatus <p>账号活跃状态 1：活跃 2：非活跃</p>
     * @param string $LoginTime <p>账号登录时间</p>
     * @param string $LogoutTime <p>账号登出时间</p>
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
