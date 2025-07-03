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
 * 业务响应数据
 *
 * @method integer getId() 获取设备ID
 * @method void setId(integer $Id) 设置设备ID
 * @method string getMid() 获取设备唯一标识码，在ioa中每个设备有唯一标识码
 * @method void setMid(string $Mid) 设置设备唯一标识码，在ioa中每个设备有唯一标识码
 * @method string getName() 获取终端名（设备名）
 * @method void setName(string $Name) 设置终端名（设备名）
 * @method integer getGroupId() 获取设备所在分组ID
 * @method void setGroupId(integer $GroupId) 设置设备所在分组ID
 * @method integer getOsType() 获取OS平台，0：Windows 、1： Linux、 2：macOS 、4： Android、 5: iOS。默认是0
 * @method void setOsType(integer $OsType) 设置OS平台，0：Windows 、1： Linux、 2：macOS 、4： Android、 5: iOS。默认是0
 * @method string getIp() 获取设备IP地址（出口IP）
 * @method void setIp(string $Ip) 设置设备IP地址（出口IP）
 * @method integer getOnlineStatus() 获取在线状态，2：在线、0或者1:离线
 * @method void setOnlineStatus(integer $OnlineStatus) 设置在线状态，2：在线、0或者1:离线
 * @method string getVersion() 获取客户端版本号-大整数
 * @method void setVersion(string $Version) 设置客户端版本号-大整数
 * @method string getStrVersion() 获取客户端版本号-点分字符串
 * @method void setStrVersion(string $StrVersion) 设置客户端版本号-点分字符串
 * @method string getItime() 获取首次在线时间
 * @method void setItime(string $Itime) 设置首次在线时间
 * @method string getConnActiveTime() 获取最后一次在线时间
 * @method void setConnActiveTime(string $ConnActiveTime) 设置最后一次在线时间
 * @method integer getLocked() 获取设备是否加锁 ，1：锁定 0或者2：未锁定。
 * @method void setLocked(integer $Locked) 设置设备是否加锁 ，1：锁定 0或者2：未锁定。
 * @method string getLocalIpList() 获取设备本地IP列表, 包括IP
 * @method void setLocalIpList(string $LocalIpList) 设置设备本地IP列表, 包括IP
 * @method integer getHostId() 获取宿主机id（需要宿主机也安装iOA才能显示）
 * @method void setHostId(integer $HostId) 设置宿主机id（需要宿主机也安装iOA才能显示）
 * @method string getGroupName() 获取设备所属分组名
 * @method void setGroupName(string $GroupName) 设置设备所属分组名
 * @method string getGroupNamePath() 获取设备所属分组路径
 * @method void setGroupNamePath(string $GroupNamePath) 设置设备所属分组路径
 * @method integer getCriticalVulListCount() 获取未修复高危漏洞数(只支持32位)
 * @method void setCriticalVulListCount(integer $CriticalVulListCount) 设置未修复高危漏洞数(只支持32位)
 * @method string getOs() 获取操作系统名称
 * @method void setOs(string $Os) 设置操作系统名称
 * @method integer getOsBits() 获取操作系统位数
 * @method void setOsBits(integer $OsBits) 设置操作系统位数
 * @method string getOsVersion() 获取操作系统版本
 * @method void setOsVersion(string $OsVersion) 设置操作系统版本
 * @method string getOsLanguage() 获取操作系统语言
 * @method void setOsLanguage(string $OsLanguage) 设置操作系统语言
 * @method string getOsInstallDate() 获取操作系统安装时间
 * @method void setOsInstallDate(string $OsInstallDate) 设置操作系统安装时间
 * @method string getComputerName() 获取设备名，和Name相同
 * @method void setComputerName(string $ComputerName) 设置设备名，和Name相同
 * @method string getDomainName() 获取登录域名
 * @method void setDomainName(string $DomainName) 设置登录域名
 * @method string getMacAddr() 获取MAC地址
 * @method void setMacAddr(string $MacAddr) 设置MAC地址
 * @method integer getVulCount() 获取漏洞数
 * @method void setVulCount(integer $VulCount) 设置漏洞数
 * @method integer getRiskCount() 获取病毒风险数
 * @method void setRiskCount(integer $RiskCount) 设置病毒风险数
 * @method string getVirusVer() 获取病毒库版本
 * @method void setVirusVer(string $VirusVer) 设置病毒库版本
 * @method string getVulVersion() 获取漏洞库版本
 * @method void setVulVersion(string $VulVersion) 设置漏洞库版本
 * @method string getSysRepVersion() 获取系统修复引擎版本
 * @method void setSysRepVersion(string $SysRepVersion) 设置系统修复引擎版本
 * @method array getVulCriticalList() 获取高危补丁列表
 * @method void setVulCriticalList(array $VulCriticalList) 设置高危补丁列表
 * @method string getTags() 获取标签
 * @method void setTags(string $Tags) 设置标签
 * @method string getUserName() 获取终端用户名
 * @method void setUserName(string $UserName) 设置终端用户名
 * @method integer getFirewallStatus() 获取防火墙状态，不等于0表示开启
 * @method void setFirewallStatus(integer $FirewallStatus) 设置防火墙状态，不等于0表示开启
 * @method string getSerialNum() 获取SN序列号
 * @method void setSerialNum(string $SerialNum) 设置SN序列号
 * @method string getDeviceStrategyVer() 获取设备管控策略版本
 * @method void setDeviceStrategyVer(string $DeviceStrategyVer) 设置设备管控策略版本
 * @method string getNGNStrategyVer() 获取NGN策略版本
 * @method void setNGNStrategyVer(string $NGNStrategyVer) 设置NGN策略版本
 * @method string getIOAUserName() 获取最近登录账户的账号(账号系统用户账号)
 * @method void setIOAUserName(string $IOAUserName) 设置最近登录账户的账号(账号系统用户账号)
 * @method string getDeviceNewStrategyVer() 获取设备管控新策略
 * @method void setDeviceNewStrategyVer(string $DeviceNewStrategyVer) 设置设备管控新策略
 * @method string getNGNNewStrategyVer() 获取NGN策略新版本
 * @method void setNGNNewStrategyVer(string $NGNNewStrategyVer) 设置NGN策略新版本
 * @method string getHostName() 获取宿主机名称（需要宿主机也安装iOA才能显示）
 * @method void setHostName(string $HostName) 设置宿主机名称（需要宿主机也安装iOA才能显示）
 * @method string getBaseBoardSn() 获取主板序列号
 * @method void setBaseBoardSn(string $BaseBoardSn) 设置主板序列号
 * @method string getAccountUsers() 获取绑定账户名称
 * @method void setAccountUsers(string $AccountUsers) 设置绑定账户名称
 * @method string getIdentityStrategyVer() 获取身份策略版本
 * @method void setIdentityStrategyVer(string $IdentityStrategyVer) 设置身份策略版本
 * @method string getIdentityNewStrategyVer() 获取身份策略新版本
 * @method void setIdentityNewStrategyVer(string $IdentityNewStrategyVer) 设置身份策略新版本
 * @method string getAccountGroupName() 获取最近登录账号部门
 * @method void setAccountGroupName(string $AccountGroupName) 设置最近登录账号部门
 * @method string getAccountName() 获取最近登录账户的姓名(账号系统用户姓名)
 * @method void setAccountName(string $AccountName) 设置最近登录账户的姓名(账号系统用户姓名)
 * @method integer getAccountGroupId() 获取账号组id
 * @method void setAccountGroupId(integer $AccountGroupId) 设置账号组id
 * @method string getRemarkName() 获取终端备注名
 * @method void setRemarkName(string $RemarkName) 设置终端备注名
 */
class DeviceDetail extends AbstractModel
{
    /**
     * @var integer 设备ID
     */
    public $Id;

    /**
     * @var string 设备唯一标识码，在ioa中每个设备有唯一标识码
     */
    public $Mid;

    /**
     * @var string 终端名（设备名）
     */
    public $Name;

    /**
     * @var integer 设备所在分组ID
     */
    public $GroupId;

    /**
     * @var integer OS平台，0：Windows 、1： Linux、 2：macOS 、4： Android、 5: iOS。默认是0
     */
    public $OsType;

    /**
     * @var string 设备IP地址（出口IP）
     */
    public $Ip;

    /**
     * @var integer 在线状态，2：在线、0或者1:离线
     */
    public $OnlineStatus;

    /**
     * @var string 客户端版本号-大整数
     */
    public $Version;

    /**
     * @var string 客户端版本号-点分字符串
     */
    public $StrVersion;

    /**
     * @var string 首次在线时间
     */
    public $Itime;

    /**
     * @var string 最后一次在线时间
     */
    public $ConnActiveTime;

    /**
     * @var integer 设备是否加锁 ，1：锁定 0或者2：未锁定。
     */
    public $Locked;

    /**
     * @var string 设备本地IP列表, 包括IP
     */
    public $LocalIpList;

    /**
     * @var integer 宿主机id（需要宿主机也安装iOA才能显示）
     */
    public $HostId;

    /**
     * @var string 设备所属分组名
     */
    public $GroupName;

    /**
     * @var string 设备所属分组路径
     */
    public $GroupNamePath;

    /**
     * @var integer 未修复高危漏洞数(只支持32位)
     */
    public $CriticalVulListCount;

    /**
     * @var string 操作系统名称
     */
    public $Os;

    /**
     * @var integer 操作系统位数
     */
    public $OsBits;

    /**
     * @var string 操作系统版本
     */
    public $OsVersion;

    /**
     * @var string 操作系统语言
     */
    public $OsLanguage;

    /**
     * @var string 操作系统安装时间
     */
    public $OsInstallDate;

    /**
     * @var string 设备名，和Name相同
     */
    public $ComputerName;

    /**
     * @var string 登录域名
     */
    public $DomainName;

    /**
     * @var string MAC地址
     */
    public $MacAddr;

    /**
     * @var integer 漏洞数
     */
    public $VulCount;

    /**
     * @var integer 病毒风险数
     */
    public $RiskCount;

    /**
     * @var string 病毒库版本
     */
    public $VirusVer;

    /**
     * @var string 漏洞库版本
     */
    public $VulVersion;

    /**
     * @var string 系统修复引擎版本
     */
    public $SysRepVersion;

    /**
     * @var array 高危补丁列表
     */
    public $VulCriticalList;

    /**
     * @var string 标签
     */
    public $Tags;

    /**
     * @var string 终端用户名
     */
    public $UserName;

    /**
     * @var integer 防火墙状态，不等于0表示开启
     */
    public $FirewallStatus;

    /**
     * @var string SN序列号
     */
    public $SerialNum;

    /**
     * @var string 设备管控策略版本
     */
    public $DeviceStrategyVer;

    /**
     * @var string NGN策略版本
     */
    public $NGNStrategyVer;

    /**
     * @var string 最近登录账户的账号(账号系统用户账号)
     */
    public $IOAUserName;

    /**
     * @var string 设备管控新策略
     */
    public $DeviceNewStrategyVer;

    /**
     * @var string NGN策略新版本
     */
    public $NGNNewStrategyVer;

    /**
     * @var string 宿主机名称（需要宿主机也安装iOA才能显示）
     */
    public $HostName;

    /**
     * @var string 主板序列号
     */
    public $BaseBoardSn;

    /**
     * @var string 绑定账户名称
     */
    public $AccountUsers;

    /**
     * @var string 身份策略版本
     */
    public $IdentityStrategyVer;

    /**
     * @var string 身份策略新版本
     */
    public $IdentityNewStrategyVer;

    /**
     * @var string 最近登录账号部门
     */
    public $AccountGroupName;

    /**
     * @var string 最近登录账户的姓名(账号系统用户姓名)
     */
    public $AccountName;

    /**
     * @var integer 账号组id
     */
    public $AccountGroupId;

    /**
     * @var string 终端备注名
     */
    public $RemarkName;

    /**
     * @param integer $Id 设备ID
     * @param string $Mid 设备唯一标识码，在ioa中每个设备有唯一标识码
     * @param string $Name 终端名（设备名）
     * @param integer $GroupId 设备所在分组ID
     * @param integer $OsType OS平台，0：Windows 、1： Linux、 2：macOS 、4： Android、 5: iOS。默认是0
     * @param string $Ip 设备IP地址（出口IP）
     * @param integer $OnlineStatus 在线状态，2：在线、0或者1:离线
     * @param string $Version 客户端版本号-大整数
     * @param string $StrVersion 客户端版本号-点分字符串
     * @param string $Itime 首次在线时间
     * @param string $ConnActiveTime 最后一次在线时间
     * @param integer $Locked 设备是否加锁 ，1：锁定 0或者2：未锁定。
     * @param string $LocalIpList 设备本地IP列表, 包括IP
     * @param integer $HostId 宿主机id（需要宿主机也安装iOA才能显示）
     * @param string $GroupName 设备所属分组名
     * @param string $GroupNamePath 设备所属分组路径
     * @param integer $CriticalVulListCount 未修复高危漏洞数(只支持32位)
     * @param string $Os 操作系统名称
     * @param integer $OsBits 操作系统位数
     * @param string $OsVersion 操作系统版本
     * @param string $OsLanguage 操作系统语言
     * @param string $OsInstallDate 操作系统安装时间
     * @param string $ComputerName 设备名，和Name相同
     * @param string $DomainName 登录域名
     * @param string $MacAddr MAC地址
     * @param integer $VulCount 漏洞数
     * @param integer $RiskCount 病毒风险数
     * @param string $VirusVer 病毒库版本
     * @param string $VulVersion 漏洞库版本
     * @param string $SysRepVersion 系统修复引擎版本
     * @param array $VulCriticalList 高危补丁列表
     * @param string $Tags 标签
     * @param string $UserName 终端用户名
     * @param integer $FirewallStatus 防火墙状态，不等于0表示开启
     * @param string $SerialNum SN序列号
     * @param string $DeviceStrategyVer 设备管控策略版本
     * @param string $NGNStrategyVer NGN策略版本
     * @param string $IOAUserName 最近登录账户的账号(账号系统用户账号)
     * @param string $DeviceNewStrategyVer 设备管控新策略
     * @param string $NGNNewStrategyVer NGN策略新版本
     * @param string $HostName 宿主机名称（需要宿主机也安装iOA才能显示）
     * @param string $BaseBoardSn 主板序列号
     * @param string $AccountUsers 绑定账户名称
     * @param string $IdentityStrategyVer 身份策略版本
     * @param string $IdentityNewStrategyVer 身份策略新版本
     * @param string $AccountGroupName 最近登录账号部门
     * @param string $AccountName 最近登录账户的姓名(账号系统用户姓名)
     * @param integer $AccountGroupId 账号组id
     * @param string $RemarkName 终端备注名
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

        if (array_key_exists("Mid",$param) and $param["Mid"] !== null) {
            $this->Mid = $param["Mid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("StrVersion",$param) and $param["StrVersion"] !== null) {
            $this->StrVersion = $param["StrVersion"];
        }

        if (array_key_exists("Itime",$param) and $param["Itime"] !== null) {
            $this->Itime = $param["Itime"];
        }

        if (array_key_exists("ConnActiveTime",$param) and $param["ConnActiveTime"] !== null) {
            $this->ConnActiveTime = $param["ConnActiveTime"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("LocalIpList",$param) and $param["LocalIpList"] !== null) {
            $this->LocalIpList = $param["LocalIpList"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupNamePath",$param) and $param["GroupNamePath"] !== null) {
            $this->GroupNamePath = $param["GroupNamePath"];
        }

        if (array_key_exists("CriticalVulListCount",$param) and $param["CriticalVulListCount"] !== null) {
            $this->CriticalVulListCount = $param["CriticalVulListCount"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("OsBits",$param) and $param["OsBits"] !== null) {
            $this->OsBits = $param["OsBits"];
        }

        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            $this->OsVersion = $param["OsVersion"];
        }

        if (array_key_exists("OsLanguage",$param) and $param["OsLanguage"] !== null) {
            $this->OsLanguage = $param["OsLanguage"];
        }

        if (array_key_exists("OsInstallDate",$param) and $param["OsInstallDate"] !== null) {
            $this->OsInstallDate = $param["OsInstallDate"];
        }

        if (array_key_exists("ComputerName",$param) and $param["ComputerName"] !== null) {
            $this->ComputerName = $param["ComputerName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("MacAddr",$param) and $param["MacAddr"] !== null) {
            $this->MacAddr = $param["MacAddr"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("VirusVer",$param) and $param["VirusVer"] !== null) {
            $this->VirusVer = $param["VirusVer"];
        }

        if (array_key_exists("VulVersion",$param) and $param["VulVersion"] !== null) {
            $this->VulVersion = $param["VulVersion"];
        }

        if (array_key_exists("SysRepVersion",$param) and $param["SysRepVersion"] !== null) {
            $this->SysRepVersion = $param["SysRepVersion"];
        }

        if (array_key_exists("VulCriticalList",$param) and $param["VulCriticalList"] !== null) {
            $this->VulCriticalList = $param["VulCriticalList"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("FirewallStatus",$param) and $param["FirewallStatus"] !== null) {
            $this->FirewallStatus = $param["FirewallStatus"];
        }

        if (array_key_exists("SerialNum",$param) and $param["SerialNum"] !== null) {
            $this->SerialNum = $param["SerialNum"];
        }

        if (array_key_exists("DeviceStrategyVer",$param) and $param["DeviceStrategyVer"] !== null) {
            $this->DeviceStrategyVer = $param["DeviceStrategyVer"];
        }

        if (array_key_exists("NGNStrategyVer",$param) and $param["NGNStrategyVer"] !== null) {
            $this->NGNStrategyVer = $param["NGNStrategyVer"];
        }

        if (array_key_exists("IOAUserName",$param) and $param["IOAUserName"] !== null) {
            $this->IOAUserName = $param["IOAUserName"];
        }

        if (array_key_exists("DeviceNewStrategyVer",$param) and $param["DeviceNewStrategyVer"] !== null) {
            $this->DeviceNewStrategyVer = $param["DeviceNewStrategyVer"];
        }

        if (array_key_exists("NGNNewStrategyVer",$param) and $param["NGNNewStrategyVer"] !== null) {
            $this->NGNNewStrategyVer = $param["NGNNewStrategyVer"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("BaseBoardSn",$param) and $param["BaseBoardSn"] !== null) {
            $this->BaseBoardSn = $param["BaseBoardSn"];
        }

        if (array_key_exists("AccountUsers",$param) and $param["AccountUsers"] !== null) {
            $this->AccountUsers = $param["AccountUsers"];
        }

        if (array_key_exists("IdentityStrategyVer",$param) and $param["IdentityStrategyVer"] !== null) {
            $this->IdentityStrategyVer = $param["IdentityStrategyVer"];
        }

        if (array_key_exists("IdentityNewStrategyVer",$param) and $param["IdentityNewStrategyVer"] !== null) {
            $this->IdentityNewStrategyVer = $param["IdentityNewStrategyVer"];
        }

        if (array_key_exists("AccountGroupName",$param) and $param["AccountGroupName"] !== null) {
            $this->AccountGroupName = $param["AccountGroupName"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("RemarkName",$param) and $param["RemarkName"] !== null) {
            $this->RemarkName = $param["RemarkName"];
        }
    }
}
