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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问密钥账号信息
 *
 * @method integer getID() 获取账号ID
 * @method void setID(integer $ID) 设置账号ID
 * @method string getName() 获取账号名称
 * @method void setName(string $Name) 设置账号名称
 * @method integer getType() 获取0 主账号 1子账号
 * @method void setType(integer $Type) 设置0 主账号 1子账号
 * @method integer getAccessType() 获取访问方式
0 API
1 控制台与API
 * @method void setAccessType(integer $AccessType) 设置访问方式
0 API
1 控制台与API
 * @method integer getAdvice() 获取安全建议 枚举 0 正常 1 立即处理 2 建议加固
 * @method void setAdvice(integer $Advice) 设置安全建议 枚举 0 正常 1 立即处理 2 建议加固
 * @method array getAccessKeyAlarmList() 获取告警信息列表
 * @method void setAccessKeyAlarmList(array $AccessKeyAlarmList) 设置告警信息列表
 * @method array getAccessKeyRiskList() 获取风险信息列表
 * @method void setAccessKeyRiskList(array $AccessKeyRiskList) 设置风险信息列表
 * @method integer getAppID() 获取账号所属APPID
 * @method void setAppID(integer $AppID) 设置账号所属APPID
 * @method string getNickname() 获取主账号昵称
 * @method void setNickname(string $Nickname) 设置主账号昵称
 * @method string getSubNickname() 获取子账号昵称
 * @method void setSubNickname(string $SubNickname) 设置子账号昵称
 * @method string getUin() 获取账号所属主账号Uin
 * @method void setUin(string $Uin) 设置账号所属主账号Uin
 * @method string getSubUin() 获取账号自身uin，主账号时与主账号uin一致
 * @method void setSubUin(string $SubUin) 设置账号自身uin，主账号时与主账号uin一致
 * @method string getLoginIP() 获取登录IP
 * @method void setLoginIP(string $LoginIP) 设置登录IP
 * @method string getLoginLocation() 获取登录地址
 * @method void setLoginLocation(string $LoginLocation) 设置登录地址
 * @method string getLoginTime() 获取登录时间
 * @method void setLoginTime(string $LoginTime) 设置登录时间
 * @method string getISP() 获取运营商名称
 * @method void setISP(string $ISP) 设置运营商名称
 * @method integer getActionFlag() 获取操作保护是否开启
0 未开启
1 已开启
 * @method void setActionFlag(integer $ActionFlag) 设置操作保护是否开启
0 未开启
1 已开启
 * @method integer getLoginFlag() 获取登录保护是否开启
0 未开启
1 已开启
 * @method void setLoginFlag(integer $LoginFlag) 设置登录保护是否开启
0 未开启
1 已开启
 * @method integer getCheckStatus() 获取0 表示已检测 1 表示检测中
 * @method void setCheckStatus(integer $CheckStatus) 设置0 表示已检测 1 表示检测中
 * @method integer getCloudType() 获取云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云
 * @method void setCloudType(integer $CloudType) 设置云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云
 */
class AccessKeyUser extends AbstractModel
{
    /**
     * @var integer 账号ID
     */
    public $ID;

    /**
     * @var string 账号名称
     */
    public $Name;

    /**
     * @var integer 0 主账号 1子账号
     */
    public $Type;

    /**
     * @var integer 访问方式
0 API
1 控制台与API
     */
    public $AccessType;

    /**
     * @var integer 安全建议 枚举 0 正常 1 立即处理 2 建议加固
     */
    public $Advice;

    /**
     * @var array 告警信息列表
     */
    public $AccessKeyAlarmList;

    /**
     * @var array 风险信息列表
     */
    public $AccessKeyRiskList;

    /**
     * @var integer 账号所属APPID
     */
    public $AppID;

    /**
     * @var string 主账号昵称
     */
    public $Nickname;

    /**
     * @var string 子账号昵称
     */
    public $SubNickname;

    /**
     * @var string 账号所属主账号Uin
     */
    public $Uin;

    /**
     * @var string 账号自身uin，主账号时与主账号uin一致
     */
    public $SubUin;

    /**
     * @var string 登录IP
     */
    public $LoginIP;

    /**
     * @var string 登录地址
     */
    public $LoginLocation;

    /**
     * @var string 登录时间
     */
    public $LoginTime;

    /**
     * @var string 运营商名称
     */
    public $ISP;

    /**
     * @var integer 操作保护是否开启
0 未开启
1 已开启
     */
    public $ActionFlag;

    /**
     * @var integer 登录保护是否开启
0 未开启
1 已开启
     */
    public $LoginFlag;

    /**
     * @var integer 0 表示已检测 1 表示检测中
     */
    public $CheckStatus;

    /**
     * @var integer 云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云
     */
    public $CloudType;

    /**
     * @param integer $ID 账号ID
     * @param string $Name 账号名称
     * @param integer $Type 0 主账号 1子账号
     * @param integer $AccessType 访问方式
0 API
1 控制台与API
     * @param integer $Advice 安全建议 枚举 0 正常 1 立即处理 2 建议加固
     * @param array $AccessKeyAlarmList 告警信息列表
     * @param array $AccessKeyRiskList 风险信息列表
     * @param integer $AppID 账号所属APPID
     * @param string $Nickname 主账号昵称
     * @param string $SubNickname 子账号昵称
     * @param string $Uin 账号所属主账号Uin
     * @param string $SubUin 账号自身uin，主账号时与主账号uin一致
     * @param string $LoginIP 登录IP
     * @param string $LoginLocation 登录地址
     * @param string $LoginTime 登录时间
     * @param string $ISP 运营商名称
     * @param integer $ActionFlag 操作保护是否开启
0 未开启
1 已开启
     * @param integer $LoginFlag 登录保护是否开启
0 未开启
1 已开启
     * @param integer $CheckStatus 0 表示已检测 1 表示检测中
     * @param integer $CloudType 云厂商类型 0:腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Advice",$param) and $param["Advice"] !== null) {
            $this->Advice = $param["Advice"];
        }

        if (array_key_exists("AccessKeyAlarmList",$param) and $param["AccessKeyAlarmList"] !== null) {
            $this->AccessKeyAlarmList = [];
            foreach ($param["AccessKeyAlarmList"] as $key => $value){
                $obj = new AccessKeyAlarmInfo();
                $obj->deserialize($value);
                array_push($this->AccessKeyAlarmList, $obj);
            }
        }

        if (array_key_exists("AccessKeyRiskList",$param) and $param["AccessKeyRiskList"] !== null) {
            $this->AccessKeyRiskList = [];
            foreach ($param["AccessKeyRiskList"] as $key => $value){
                $obj = new AccessKeyAlarmInfo();
                $obj->deserialize($value);
                array_push($this->AccessKeyRiskList, $obj);
            }
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("SubNickname",$param) and $param["SubNickname"] !== null) {
            $this->SubNickname = $param["SubNickname"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("LoginIP",$param) and $param["LoginIP"] !== null) {
            $this->LoginIP = $param["LoginIP"];
        }

        if (array_key_exists("LoginLocation",$param) and $param["LoginLocation"] !== null) {
            $this->LoginLocation = $param["LoginLocation"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = $param["ActionFlag"];
        }

        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = $param["LoginFlag"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
