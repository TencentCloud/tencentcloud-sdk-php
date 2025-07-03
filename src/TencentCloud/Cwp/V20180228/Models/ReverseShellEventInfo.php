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
 * 反弹Shell数据详情
 *
 * @method integer getId() 获取ID 主键
 * @method void setId(integer $Id) 设置ID 主键
 * @method string getUuid() 获取主机安全uuid
 * @method void setUuid(string $Uuid) 设置主机安全uuid
 * @method string getQuuid() 获取主机uuid
 * @method void setQuuid(string $Quuid) 设置主机uuid
 * @method string getHostIp() 获取主机内网IP
 * @method void setHostIp(string $HostIp) 设置主机内网IP
 * @method string getDstIp() 获取目标IP
 * @method void setDstIp(string $DstIp) 设置目标IP
 * @method integer getDstPort() 获取目标端口
 * @method void setDstPort(integer $DstPort) 设置目标端口
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method string getFullPath() 获取进程路径
 * @method void setFullPath(string $FullPath) 设置进程路径
 * @method string getCmdLine() 获取命令详情
 * @method void setCmdLine(string $CmdLine) 设置命令详情
 * @method string getUserName() 获取执行用户
 * @method void setUserName(string $UserName) 设置执行用户
 * @method string getUserGroup() 获取执行用户组
 * @method void setUserGroup(string $UserGroup) 设置执行用户组
 * @method string getParentProcName() 获取父进程名
 * @method void setParentProcName(string $ParentProcName) 设置父进程名
 * @method string getParentProcUser() 获取父进程用户
 * @method void setParentProcUser(string $ParentProcUser) 设置父进程用户
 * @method string getParentProcGroup() 获取父进程用户组
 * @method void setParentProcGroup(string $ParentProcGroup) 设置父进程用户组
 * @method string getParentProcPath() 获取父进程路径
 * @method void setParentProcPath(string $ParentProcPath) 设置父进程路径
 * @method integer getStatus() 获取处理状态：0-待处理 2-白名单 3-已处理 4-已忽略
 * @method void setStatus(integer $Status) 设置处理状态：0-待处理 2-白名单 3-已处理 4-已忽略
 * @method string getCreateTime() 获取产生时间
 * @method void setCreateTime(string $CreateTime) 设置产生时间
 * @method string getMachineName() 获取主机名
 * @method void setMachineName(string $MachineName) 设置主机名
 * @method integer getDetectBy() 获取检测方法
 * @method void setDetectBy(integer $DetectBy) 设置检测方法
 * @method string getPsTree() 获取进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
 * @method void setPsTree(string $PsTree) 设置进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
 * @method string getSuggestScheme() 获取建议方案
 * @method void setSuggestScheme(string $SuggestScheme) 设置建议方案
 * @method string getHarmDescribe() 获取描述
 * @method void setHarmDescribe(string $HarmDescribe) 设置描述
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method array getReferences() 获取参考链接
 * @method void setReferences(array $References) 设置参考链接
 * @method string getMachineWanIp() 获取主机外网ip
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网ip
 * @method string getMachineStatus() 获取主机在线状态 OFFLINE  ONLINE
 * @method void setMachineStatus(string $MachineStatus) 设置主机在线状态 OFFLINE  ONLINE
 * @method string getModifyTime() 获取处理时间
 * @method void setModifyTime(string $ModifyTime) 设置处理时间
 * @method string getCmdLineQuote() 获取命令详情的转义后内容，供正则加白全字符串匹配使用
 * @method void setCmdLineQuote(string $CmdLineQuote) 设置命令详情的转义后内容，供正则加白全字符串匹配使用
 * @method integer getRiskLevel() 获取风险等级
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
 */
class ReverseShellEventInfo extends AbstractModel
{
    /**
     * @var integer ID 主键
     */
    public $Id;

    /**
     * @var string 主机安全uuid
     */
    public $Uuid;

    /**
     * @var string 主机uuid
     */
    public $Quuid;

    /**
     * @var string 主机内网IP
     */
    public $HostIp;

    /**
     * @var string 目标IP
     */
    public $DstIp;

    /**
     * @var integer 目标端口
     */
    public $DstPort;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var string 进程路径
     */
    public $FullPath;

    /**
     * @var string 命令详情
     */
    public $CmdLine;

    /**
     * @var string 执行用户
     */
    public $UserName;

    /**
     * @var string 执行用户组
     */
    public $UserGroup;

    /**
     * @var string 父进程名
     */
    public $ParentProcName;

    /**
     * @var string 父进程用户
     */
    public $ParentProcUser;

    /**
     * @var string 父进程用户组
     */
    public $ParentProcGroup;

    /**
     * @var string 父进程路径
     */
    public $ParentProcPath;

    /**
     * @var integer 处理状态：0-待处理 2-白名单 3-已处理 4-已忽略
     */
    public $Status;

    /**
     * @var string 产生时间
     */
    public $CreateTime;

    /**
     * @var string 主机名
     */
    public $MachineName;

    /**
     * @var integer 检测方法
     */
    public $DetectBy;

    /**
     * @var string 进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
     */
    public $PsTree;

    /**
     * @var string 建议方案
     */
    public $SuggestScheme;

    /**
     * @var string 描述
     */
    public $HarmDescribe;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var array 参考链接
     */
    public $References;

    /**
     * @var string 主机外网ip
     */
    public $MachineWanIp;

    /**
     * @var string 主机在线状态 OFFLINE  ONLINE
     */
    public $MachineStatus;

    /**
     * @var string 处理时间
     */
    public $ModifyTime;

    /**
     * @var string 命令详情的转义后内容，供正则加白全字符串匹配使用
     */
    public $CmdLineQuote;

    /**
     * @var integer 风险等级
     */
    public $RiskLevel;

    /**
     * @param integer $Id ID 主键
     * @param string $Uuid 主机安全uuid
     * @param string $Quuid 主机uuid
     * @param string $HostIp 主机内网IP
     * @param string $DstIp 目标IP
     * @param integer $DstPort 目标端口
     * @param string $ProcessName 进程名
     * @param string $FullPath 进程路径
     * @param string $CmdLine 命令详情
     * @param string $UserName 执行用户
     * @param string $UserGroup 执行用户组
     * @param string $ParentProcName 父进程名
     * @param string $ParentProcUser 父进程用户
     * @param string $ParentProcGroup 父进程用户组
     * @param string $ParentProcPath 父进程路径
     * @param integer $Status 处理状态：0-待处理 2-白名单 3-已处理 4-已忽略
     * @param string $CreateTime 产生时间
     * @param string $MachineName 主机名
     * @param integer $DetectBy 检测方法
     * @param string $PsTree 进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
     * @param string $SuggestScheme 建议方案
     * @param string $HarmDescribe 描述
     * @param array $Tags 标签
     * @param array $References 参考链接
     * @param string $MachineWanIp 主机外网ip
     * @param string $MachineStatus 主机在线状态 OFFLINE  ONLINE
     * @param string $ModifyTime 处理时间
     * @param string $CmdLineQuote 命令详情的转义后内容，供正则加白全字符串匹配使用
     * @param integer $RiskLevel 风险等级
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("ParentProcName",$param) and $param["ParentProcName"] !== null) {
            $this->ParentProcName = $param["ParentProcName"];
        }

        if (array_key_exists("ParentProcUser",$param) and $param["ParentProcUser"] !== null) {
            $this->ParentProcUser = $param["ParentProcUser"];
        }

        if (array_key_exists("ParentProcGroup",$param) and $param["ParentProcGroup"] !== null) {
            $this->ParentProcGroup = $param["ParentProcGroup"];
        }

        if (array_key_exists("ParentProcPath",$param) and $param["ParentProcPath"] !== null) {
            $this->ParentProcPath = $param["ParentProcPath"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("DetectBy",$param) and $param["DetectBy"] !== null) {
            $this->DetectBy = $param["DetectBy"];
        }

        if (array_key_exists("PsTree",$param) and $param["PsTree"] !== null) {
            $this->PsTree = $param["PsTree"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("HarmDescribe",$param) and $param["HarmDescribe"] !== null) {
            $this->HarmDescribe = $param["HarmDescribe"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = $param["References"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CmdLineQuote",$param) and $param["CmdLineQuote"] !== null) {
            $this->CmdLineQuote = $param["CmdLineQuote"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
