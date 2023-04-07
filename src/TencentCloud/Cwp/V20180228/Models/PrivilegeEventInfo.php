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
 * 本地提权数据
 *
 * @method integer getId() 获取数据ID
 * @method void setId(integer $Id) 设置数据ID
 * @method string getUuid() 获取云镜ID
 * @method void setUuid(string $Uuid) 设置云镜ID
 * @method string getQuuid() 获取主机ID
 * @method void setQuuid(string $Quuid) 设置主机ID
 * @method string getHostIp() 获取主机内网IP
 * @method void setHostIp(string $HostIp) 设置主机内网IP
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method string getFullPath() 获取进程路径
 * @method void setFullPath(string $FullPath) 设置进程路径
 * @method string getCmdLine() 获取执行命令
 * @method void setCmdLine(string $CmdLine) 设置执行命令
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getUserGroup() 获取用户组
 * @method void setUserGroup(string $UserGroup) 设置用户组
 * @method string getProcFilePrivilege() 获取进程文件权限
 * @method void setProcFilePrivilege(string $ProcFilePrivilege) 设置进程文件权限
 * @method string getParentProcName() 获取父进程名
 * @method void setParentProcName(string $ParentProcName) 设置父进程名
 * @method string getParentProcUser() 获取父进程用户名
 * @method void setParentProcUser(string $ParentProcUser) 设置父进程用户名
 * @method string getParentProcGroup() 获取父进程用户组
 * @method void setParentProcGroup(string $ParentProcGroup) 设置父进程用户组
 * @method string getParentProcPath() 获取父进程路径
 * @method void setParentProcPath(string $ParentProcPath) 设置父进程路径
 * @method string getPsTree() 获取进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
 * @method void setPsTree(string $PsTree) 设置进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
 * @method integer getStatus() 获取处理状态：0-待处理 2-白名单 3-已处理 4-已忽略
 * @method void setStatus(integer $Status) 设置处理状态：0-待处理 2-白名单 3-已处理 4-已忽略
 * @method string getCreateTime() 获取发生时间
 * @method void setCreateTime(string $CreateTime) 设置发生时间
 * @method string getMachineName() 获取机器名
 * @method void setMachineName(string $MachineName) 设置机器名
 * @method string getSuggestScheme() 获取建议方案
 * @method void setSuggestScheme(string $SuggestScheme) 设置建议方案
 * @method string getHarmDescribe() 获取危害描述信息
 * @method void setHarmDescribe(string $HarmDescribe) 设置危害描述信息
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method array getReferences() 获取参考链接
 * @method void setReferences(array $References) 设置参考链接
 * @method string getMachineWanIp() 获取主机外网ip
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网ip
 * @method string getNewCaps() 获取权限列表|隔开
 * @method void setNewCaps(string $NewCaps) 设置权限列表|隔开
 * @method string getMachineStatus() 获取主机在线状态 OFFLINE  ONLINE
 * @method void setMachineStatus(string $MachineStatus) 设置主机在线状态 OFFLINE  ONLINE
 * @method string getModifyTime() 获取处理时间
 * @method void setModifyTime(string $ModifyTime) 设置处理时间
 */
class PrivilegeEventInfo extends AbstractModel
{
    /**
     * @var integer 数据ID
     */
    public $Id;

    /**
     * @var string 云镜ID
     */
    public $Uuid;

    /**
     * @var string 主机ID
     */
    public $Quuid;

    /**
     * @var string 主机内网IP
     */
    public $HostIp;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var string 进程路径
     */
    public $FullPath;

    /**
     * @var string 执行命令
     */
    public $CmdLine;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 用户组
     */
    public $UserGroup;

    /**
     * @var string 进程文件权限
     */
    public $ProcFilePrivilege;

    /**
     * @var string 父进程名
     */
    public $ParentProcName;

    /**
     * @var string 父进程用户名
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
     * @var string 进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
     */
    public $PsTree;

    /**
     * @var integer 处理状态：0-待处理 2-白名单 3-已处理 4-已忽略
     */
    public $Status;

    /**
     * @var string 发生时间
     */
    public $CreateTime;

    /**
     * @var string 机器名
     */
    public $MachineName;

    /**
     * @var string 建议方案
     */
    public $SuggestScheme;

    /**
     * @var string 危害描述信息
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
     * @var string 权限列表|隔开
     */
    public $NewCaps;

    /**
     * @var string 主机在线状态 OFFLINE  ONLINE
     */
    public $MachineStatus;

    /**
     * @var string 处理时间
     */
    public $ModifyTime;

    /**
     * @param integer $Id 数据ID
     * @param string $Uuid 云镜ID
     * @param string $Quuid 主机ID
     * @param string $HostIp 主机内网IP
     * @param string $ProcessName 进程名
     * @param string $FullPath 进程路径
     * @param string $CmdLine 执行命令
     * @param string $UserName 用户名
     * @param string $UserGroup 用户组
     * @param string $ProcFilePrivilege 进程文件权限
     * @param string $ParentProcName 父进程名
     * @param string $ParentProcUser 父进程用户名
     * @param string $ParentProcGroup 父进程用户组
     * @param string $ParentProcPath 父进程路径
     * @param string $PsTree 进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
     * @param integer $Status 处理状态：0-待处理 2-白名单 3-已处理 4-已忽略
     * @param string $CreateTime 发生时间
     * @param string $MachineName 机器名
     * @param string $SuggestScheme 建议方案
     * @param string $HarmDescribe 危害描述信息
     * @param array $Tags 标签
     * @param array $References 参考链接
     * @param string $MachineWanIp 主机外网ip
     * @param string $NewCaps 权限列表|隔开
     * @param string $MachineStatus 主机在线状态 OFFLINE  ONLINE
     * @param string $ModifyTime 处理时间
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

        if (array_key_exists("ProcFilePrivilege",$param) and $param["ProcFilePrivilege"] !== null) {
            $this->ProcFilePrivilege = $param["ProcFilePrivilege"];
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

        if (array_key_exists("PsTree",$param) and $param["PsTree"] !== null) {
            $this->PsTree = $param["PsTree"];
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

        if (array_key_exists("NewCaps",$param) and $param["NewCaps"] !== null) {
            $this->NewCaps = $param["NewCaps"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
