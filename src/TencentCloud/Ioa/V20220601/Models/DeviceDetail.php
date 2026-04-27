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
 * 业务响应数据
 *
 * @method integer getId() 获取<p>设备ID</p>
 * @method void setId(integer $Id) 设置<p>设备ID</p>
 * @method string getMid() 获取<p>设备唯一标识码，在ioa中每个设备有唯一标识码</p>
 * @method void setMid(string $Mid) 设置<p>设备唯一标识码，在ioa中每个设备有唯一标识码</p>
 * @method string getName() 获取<p>终端名（设备名）</p>
 * @method void setName(string $Name) 设置<p>终端名（设备名）</p>
 * @method integer getGroupId() 获取<p>设备所在分组ID</p>
 * @method void setGroupId(integer $GroupId) 设置<p>设备所在分组ID</p>
 * @method integer getOsType() 获取<p>OS平台，0：Windows 、1： Linux、 2：macOS 、4： Android、 5: iOS。默认是0</p>
 * @method void setOsType(integer $OsType) 设置<p>OS平台，0：Windows 、1： Linux、 2：macOS 、4： Android、 5: iOS。默认是0</p>
 * @method string getIp() 获取<p>设备IP地址（出口IP）</p>
 * @method void setIp(string $Ip) 设置<p>设备IP地址（出口IP）</p>
 * @method integer getOnlineStatus() 获取<p>在线状态，2：在线、0或者1:离线</p>
 * @method void setOnlineStatus(integer $OnlineStatus) 设置<p>在线状态，2：在线、0或者1:离线</p>
 * @method string getVersion() 获取<p>客户端版本号-大整数</p>
 * @method void setVersion(string $Version) 设置<p>客户端版本号-大整数</p>
 * @method string getStrVersion() 获取<p>客户端版本号-点分字符串</p>
 * @method void setStrVersion(string $StrVersion) 设置<p>客户端版本号-点分字符串</p>
 * @method string getItime() 获取<p>首次在线时间</p>
 * @method void setItime(string $Itime) 设置<p>首次在线时间</p>
 * @method string getConnActiveTime() 获取<p>最后一次在线时间</p>
 * @method void setConnActiveTime(string $ConnActiveTime) 设置<p>最后一次在线时间</p>
 * @method integer getLocked() 获取<p>设备是否加锁 ，1：锁定 0或者2：未锁定。</p>
 * @method void setLocked(integer $Locked) 设置<p>设备是否加锁 ，1：锁定 0或者2：未锁定。</p>
 * @method string getLocalIpList() 获取<p>设备本地IP列表, 包括IP</p>
 * @method void setLocalIpList(string $LocalIpList) 设置<p>设备本地IP列表, 包括IP</p>
 * @method integer getHostId() 获取<p>宿主机id（需要宿主机也安装iOA才能显示）</p>
 * @method void setHostId(integer $HostId) 设置<p>宿主机id（需要宿主机也安装iOA才能显示）</p>
 * @method string getGroupName() 获取<p>设备所属分组名</p>
 * @method void setGroupName(string $GroupName) 设置<p>设备所属分组名</p>
 * @method string getGroupNamePath() 获取<p>设备所属分组路径</p>
 * @method void setGroupNamePath(string $GroupNamePath) 设置<p>设备所属分组路径</p>
 * @method integer getCriticalVulListCount() 获取<p>未修复高危漏洞数(只支持32位)</p>
 * @method void setCriticalVulListCount(integer $CriticalVulListCount) 设置<p>未修复高危漏洞数(只支持32位)</p>
 * @method string getOs() 获取<p>操作系统名称</p>
 * @method void setOs(string $Os) 设置<p>操作系统名称</p>
 * @method integer getOsBits() 获取<p>操作系统位数</p>
 * @method void setOsBits(integer $OsBits) 设置<p>操作系统位数</p>
 * @method string getOsVersion() 获取<p>操作系统版本</p>
 * @method void setOsVersion(string $OsVersion) 设置<p>操作系统版本</p>
 * @method string getOsLanguage() 获取<p>操作系统语言</p>
 * @method void setOsLanguage(string $OsLanguage) 设置<p>操作系统语言</p>
 * @method string getOsInstallDate() 获取<p>操作系统安装时间</p>
 * @method void setOsInstallDate(string $OsInstallDate) 设置<p>操作系统安装时间</p>
 * @method string getComputerName() 获取<p>设备名，和Name相同</p>
 * @method void setComputerName(string $ComputerName) 设置<p>设备名，和Name相同</p>
 * @method string getDomainName() 获取<p>登录域名</p>
 * @method void setDomainName(string $DomainName) 设置<p>登录域名</p>
 * @method string getMacAddr() 获取<p>MAC地址</p>
 * @method void setMacAddr(string $MacAddr) 设置<p>MAC地址</p>
 * @method integer getVulCount() 获取<p>漏洞数</p>
 * @method void setVulCount(integer $VulCount) 设置<p>漏洞数</p>
 * @method integer getRiskCount() 获取<p>病毒风险数</p>
 * @method void setRiskCount(integer $RiskCount) 设置<p>病毒风险数</p>
 * @method string getVirusVer() 获取<p>病毒库版本</p>
 * @method void setVirusVer(string $VirusVer) 设置<p>病毒库版本</p>
 * @method string getVulVersion() 获取<p>漏洞库版本</p>
 * @method void setVulVersion(string $VulVersion) 设置<p>漏洞库版本</p>
 * @method string getSysRepVersion() 获取<p>系统修复引擎版本</p>
 * @method void setSysRepVersion(string $SysRepVersion) 设置<p>系统修复引擎版本</p>
 * @method array getVulCriticalList() 获取<p>高危补丁列表</p>
 * @method void setVulCriticalList(array $VulCriticalList) 设置<p>高危补丁列表</p>
 * @method string getTags() 获取<p>标签</p>
 * @method void setTags(string $Tags) 设置<p>标签</p>
 * @method string getUserName() 获取<p>终端用户名</p>
 * @method void setUserName(string $UserName) 设置<p>终端用户名</p>
 * @method integer getFirewallStatus() 获取<p>防火墙状态，不等于0表示开启</p>
 * @method void setFirewallStatus(integer $FirewallStatus) 设置<p>防火墙状态，不等于0表示开启</p>
 * @method string getSerialNum() 获取<p>SN序列号</p>
 * @method void setSerialNum(string $SerialNum) 设置<p>SN序列号</p>
 * @method string getDeviceStrategyVer() 获取<p>设备管控策略版本</p>
 * @method void setDeviceStrategyVer(string $DeviceStrategyVer) 设置<p>设备管控策略版本</p>
 * @method string getNGNStrategyVer() 获取<p>NGN策略版本</p>
 * @method void setNGNStrategyVer(string $NGNStrategyVer) 设置<p>NGN策略版本</p>
 * @method string getIOAUserName() 获取<p>最近登录账户的账号(账号系统用户账号)</p>
 * @method void setIOAUserName(string $IOAUserName) 设置<p>最近登录账户的账号(账号系统用户账号)</p>
 * @method string getDeviceNewStrategyVer() 获取<p>设备管控新策略</p>
 * @method void setDeviceNewStrategyVer(string $DeviceNewStrategyVer) 设置<p>设备管控新策略</p>
 * @method string getNGNNewStrategyVer() 获取<p>NGN策略新版本</p>
 * @method void setNGNNewStrategyVer(string $NGNNewStrategyVer) 设置<p>NGN策略新版本</p>
 * @method string getHostName() 获取<p>宿主机名称（需要宿主机也安装iOA才能显示）</p>
 * @method void setHostName(string $HostName) 设置<p>宿主机名称（需要宿主机也安装iOA才能显示）</p>
 * @method string getBaseBoardSn() 获取<p>主板序列号</p>
 * @method void setBaseBoardSn(string $BaseBoardSn) 设置<p>主板序列号</p>
 * @method string getAccountUsers() 获取<p>绑定账户名称</p>
 * @method void setAccountUsers(string $AccountUsers) 设置<p>绑定账户名称</p>
 * @method string getIdentityStrategyVer() 获取<p>身份策略版本</p>
 * @method void setIdentityStrategyVer(string $IdentityStrategyVer) 设置<p>身份策略版本</p>
 * @method string getIdentityNewStrategyVer() 获取<p>身份策略新版本</p>
 * @method void setIdentityNewStrategyVer(string $IdentityNewStrategyVer) 设置<p>身份策略新版本</p>
 * @method string getAccountGroupName() 获取<p>最近登录账号部门</p>
 * @method void setAccountGroupName(string $AccountGroupName) 设置<p>最近登录账号部门</p>
 * @method string getAccountName() 获取<p>最近登录账户的姓名(账号系统用户姓名)</p>
 * @method void setAccountName(string $AccountName) 设置<p>最近登录账户的姓名(账号系统用户姓名)</p>
 * @method integer getAccountGroupId() 获取<p>账号组id</p>
 * @method void setAccountGroupId(integer $AccountGroupId) 设置<p>账号组id</p>
 * @method integer getScreenRecordingPermission() 获取<p>是否开启录屏权限，仅macOS， 0： 未开启 、1： 开启</p>
 * @method void setScreenRecordingPermission(integer $ScreenRecordingPermission) 设置<p>是否开启录屏权限，仅macOS， 0： 未开启 、1： 开启</p>
 * @method integer getDiskAccessPermission() 获取<p>是否开启磁盘访问权限，仅macOS， 0： 未开启、 1： 开启</p>
 * @method void setDiskAccessPermission(integer $DiskAccessPermission) 设置<p>是否开启磁盘访问权限，仅macOS， 0： 未开启、 1： 开启</p>
 * @method string getRemarkName() 获取<p>终端备注名</p>
 * @method void setRemarkName(string $RemarkName) 设置<p>终端备注名</p>
 */
class DeviceDetail extends AbstractModel
{
    /**
     * @var integer <p>设备ID</p>
     */
    public $Id;

    /**
     * @var string <p>设备唯一标识码，在ioa中每个设备有唯一标识码</p>
     */
    public $Mid;

    /**
     * @var string <p>终端名（设备名）</p>
     */
    public $Name;

    /**
     * @var integer <p>设备所在分组ID</p>
     */
    public $GroupId;

    /**
     * @var integer <p>OS平台，0：Windows 、1： Linux、 2：macOS 、4： Android、 5: iOS。默认是0</p>
     */
    public $OsType;

    /**
     * @var string <p>设备IP地址（出口IP）</p>
     */
    public $Ip;

    /**
     * @var integer <p>在线状态，2：在线、0或者1:离线</p>
     */
    public $OnlineStatus;

    /**
     * @var string <p>客户端版本号-大整数</p>
     */
    public $Version;

    /**
     * @var string <p>客户端版本号-点分字符串</p>
     */
    public $StrVersion;

    /**
     * @var string <p>首次在线时间</p>
     */
    public $Itime;

    /**
     * @var string <p>最后一次在线时间</p>
     */
    public $ConnActiveTime;

    /**
     * @var integer <p>设备是否加锁 ，1：锁定 0或者2：未锁定。</p>
     */
    public $Locked;

    /**
     * @var string <p>设备本地IP列表, 包括IP</p>
     */
    public $LocalIpList;

    /**
     * @var integer <p>宿主机id（需要宿主机也安装iOA才能显示）</p>
     */
    public $HostId;

    /**
     * @var string <p>设备所属分组名</p>
     */
    public $GroupName;

    /**
     * @var string <p>设备所属分组路径</p>
     */
    public $GroupNamePath;

    /**
     * @var integer <p>未修复高危漏洞数(只支持32位)</p>
     */
    public $CriticalVulListCount;

    /**
     * @var string <p>操作系统名称</p>
     */
    public $Os;

    /**
     * @var integer <p>操作系统位数</p>
     */
    public $OsBits;

    /**
     * @var string <p>操作系统版本</p>
     */
    public $OsVersion;

    /**
     * @var string <p>操作系统语言</p>
     */
    public $OsLanguage;

    /**
     * @var string <p>操作系统安装时间</p>
     */
    public $OsInstallDate;

    /**
     * @var string <p>设备名，和Name相同</p>
     */
    public $ComputerName;

    /**
     * @var string <p>登录域名</p>
     */
    public $DomainName;

    /**
     * @var string <p>MAC地址</p>
     */
    public $MacAddr;

    /**
     * @var integer <p>漏洞数</p>
     */
    public $VulCount;

    /**
     * @var integer <p>病毒风险数</p>
     */
    public $RiskCount;

    /**
     * @var string <p>病毒库版本</p>
     */
    public $VirusVer;

    /**
     * @var string <p>漏洞库版本</p>
     */
    public $VulVersion;

    /**
     * @var string <p>系统修复引擎版本</p>
     */
    public $SysRepVersion;

    /**
     * @var array <p>高危补丁列表</p>
     */
    public $VulCriticalList;

    /**
     * @var string <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>终端用户名</p>
     */
    public $UserName;

    /**
     * @var integer <p>防火墙状态，不等于0表示开启</p>
     */
    public $FirewallStatus;

    /**
     * @var string <p>SN序列号</p>
     */
    public $SerialNum;

    /**
     * @var string <p>设备管控策略版本</p>
     */
    public $DeviceStrategyVer;

    /**
     * @var string <p>NGN策略版本</p>
     */
    public $NGNStrategyVer;

    /**
     * @var string <p>最近登录账户的账号(账号系统用户账号)</p>
     */
    public $IOAUserName;

    /**
     * @var string <p>设备管控新策略</p>
     */
    public $DeviceNewStrategyVer;

    /**
     * @var string <p>NGN策略新版本</p>
     */
    public $NGNNewStrategyVer;

    /**
     * @var string <p>宿主机名称（需要宿主机也安装iOA才能显示）</p>
     */
    public $HostName;

    /**
     * @var string <p>主板序列号</p>
     */
    public $BaseBoardSn;

    /**
     * @var string <p>绑定账户名称</p>
     */
    public $AccountUsers;

    /**
     * @var string <p>身份策略版本</p>
     */
    public $IdentityStrategyVer;

    /**
     * @var string <p>身份策略新版本</p>
     */
    public $IdentityNewStrategyVer;

    /**
     * @var string <p>最近登录账号部门</p>
     */
    public $AccountGroupName;

    /**
     * @var string <p>最近登录账户的姓名(账号系统用户姓名)</p>
     */
    public $AccountName;

    /**
     * @var integer <p>账号组id</p>
     */
    public $AccountGroupId;

    /**
     * @var integer <p>是否开启录屏权限，仅macOS， 0： 未开启 、1： 开启</p>
     */
    public $ScreenRecordingPermission;

    /**
     * @var integer <p>是否开启磁盘访问权限，仅macOS， 0： 未开启、 1： 开启</p>
     */
    public $DiskAccessPermission;

    /**
     * @var string <p>终端备注名</p>
     */
    public $RemarkName;

    /**
     * @param integer $Id <p>设备ID</p>
     * @param string $Mid <p>设备唯一标识码，在ioa中每个设备有唯一标识码</p>
     * @param string $Name <p>终端名（设备名）</p>
     * @param integer $GroupId <p>设备所在分组ID</p>
     * @param integer $OsType <p>OS平台，0：Windows 、1： Linux、 2：macOS 、4： Android、 5: iOS。默认是0</p>
     * @param string $Ip <p>设备IP地址（出口IP）</p>
     * @param integer $OnlineStatus <p>在线状态，2：在线、0或者1:离线</p>
     * @param string $Version <p>客户端版本号-大整数</p>
     * @param string $StrVersion <p>客户端版本号-点分字符串</p>
     * @param string $Itime <p>首次在线时间</p>
     * @param string $ConnActiveTime <p>最后一次在线时间</p>
     * @param integer $Locked <p>设备是否加锁 ，1：锁定 0或者2：未锁定。</p>
     * @param string $LocalIpList <p>设备本地IP列表, 包括IP</p>
     * @param integer $HostId <p>宿主机id（需要宿主机也安装iOA才能显示）</p>
     * @param string $GroupName <p>设备所属分组名</p>
     * @param string $GroupNamePath <p>设备所属分组路径</p>
     * @param integer $CriticalVulListCount <p>未修复高危漏洞数(只支持32位)</p>
     * @param string $Os <p>操作系统名称</p>
     * @param integer $OsBits <p>操作系统位数</p>
     * @param string $OsVersion <p>操作系统版本</p>
     * @param string $OsLanguage <p>操作系统语言</p>
     * @param string $OsInstallDate <p>操作系统安装时间</p>
     * @param string $ComputerName <p>设备名，和Name相同</p>
     * @param string $DomainName <p>登录域名</p>
     * @param string $MacAddr <p>MAC地址</p>
     * @param integer $VulCount <p>漏洞数</p>
     * @param integer $RiskCount <p>病毒风险数</p>
     * @param string $VirusVer <p>病毒库版本</p>
     * @param string $VulVersion <p>漏洞库版本</p>
     * @param string $SysRepVersion <p>系统修复引擎版本</p>
     * @param array $VulCriticalList <p>高危补丁列表</p>
     * @param string $Tags <p>标签</p>
     * @param string $UserName <p>终端用户名</p>
     * @param integer $FirewallStatus <p>防火墙状态，不等于0表示开启</p>
     * @param string $SerialNum <p>SN序列号</p>
     * @param string $DeviceStrategyVer <p>设备管控策略版本</p>
     * @param string $NGNStrategyVer <p>NGN策略版本</p>
     * @param string $IOAUserName <p>最近登录账户的账号(账号系统用户账号)</p>
     * @param string $DeviceNewStrategyVer <p>设备管控新策略</p>
     * @param string $NGNNewStrategyVer <p>NGN策略新版本</p>
     * @param string $HostName <p>宿主机名称（需要宿主机也安装iOA才能显示）</p>
     * @param string $BaseBoardSn <p>主板序列号</p>
     * @param string $AccountUsers <p>绑定账户名称</p>
     * @param string $IdentityStrategyVer <p>身份策略版本</p>
     * @param string $IdentityNewStrategyVer <p>身份策略新版本</p>
     * @param string $AccountGroupName <p>最近登录账号部门</p>
     * @param string $AccountName <p>最近登录账户的姓名(账号系统用户姓名)</p>
     * @param integer $AccountGroupId <p>账号组id</p>
     * @param integer $ScreenRecordingPermission <p>是否开启录屏权限，仅macOS， 0： 未开启 、1： 开启</p>
     * @param integer $DiskAccessPermission <p>是否开启磁盘访问权限，仅macOS， 0： 未开启、 1： 开启</p>
     * @param string $RemarkName <p>终端备注名</p>
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

        if (array_key_exists("ScreenRecordingPermission",$param) and $param["ScreenRecordingPermission"] !== null) {
            $this->ScreenRecordingPermission = $param["ScreenRecordingPermission"];
        }

        if (array_key_exists("DiskAccessPermission",$param) and $param["DiskAccessPermission"] !== null) {
            $this->DiskAccessPermission = $param["DiskAccessPermission"];
        }

        if (array_key_exists("RemarkName",$param) and $param["RemarkName"] !== null) {
            $this->RemarkName = $param["RemarkName"];
        }
    }
}
