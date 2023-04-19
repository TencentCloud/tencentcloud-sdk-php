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
 * 核心文件监控事件
 *
 * @method string getHostName() 获取机器名称
 * @method void setHostName(string $HostName) 设置机器名称
 * @method string getHostIp() 获取机器IP
 * @method void setHostIp(string $HostIp) 设置机器IP
 * @method string getCreateTime() 获取发生时间
 * @method void setCreateTime(string $CreateTime) 设置发生时间
 * @method string getModifyTime() 获取最近发生时间
 * @method void setModifyTime(string $ModifyTime) 设置最近发生时间
 * @method integer getId() 获取事件id
 * @method void setId(integer $Id) 设置事件id
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method string getQuuid() 获取cvm id
 * @method void setQuuid(string $Quuid) 设置cvm id
 * @method integer getType() 获取事件类型/动作  0 -- 告警
 * @method void setType(integer $Type) 设置事件类型/动作  0 -- 告警
 * @method string getProcessExe() 获取进程路径
 * @method void setProcessExe(string $ProcessExe) 设置进程路径
 * @method string getProcessArgv() 获取进程参数
 * @method void setProcessArgv(string $ProcessArgv) 设置进程参数
 * @method string getTarget() 获取目标文件路径
 * @method void setTarget(string $Target) 设置目标文件路径
 * @method integer getStatus() 获取处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略 4-已手动处理
 * @method void setStatus(integer $Status) 设置处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略 4-已手动处理
 * @method integer getEventCount() 获取事件产生次数
 * @method void setEventCount(integer $EventCount) 设置事件产生次数
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getPstree() 获取事件详情: json格式
 * @method void setPstree(string $Pstree) 设置事件详情: json格式
 * @method integer getRuleCategory() 获取规则类型 0系统规则 1自定义规则
 * @method void setRuleCategory(integer $RuleCategory) 设置规则类型 0系统规则 1自定义规则
 * @method string getMachineStatus() 获取主机在线信息 ONLINE、OFFLINE
 * @method void setMachineStatus(string $MachineStatus) 设置主机在线信息 ONLINE、OFFLINE
 * @method string getDescription() 获取危害描述
 * @method void setDescription(string $Description) 设置危害描述
 * @method string getSuggestion() 获取修护建议
 * @method void setSuggestion(string $Suggestion) 设置修护建议
 * @method string getPrivateIp() 获取内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
 * @method string getExePermission() 获取进程权限
 * @method void setExePermission(string $ExePermission) 设置进程权限
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getUserGroup() 获取用户组
 * @method void setUserGroup(string $UserGroup) 设置用户组
 * @method string getExeMd5() 获取进程名
 * @method void setExeMd5(string $ExeMd5) 设置进程名
 * @method integer getExeSize() 获取进程文件大小
 * @method void setExeSize(integer $ExeSize) 设置进程文件大小
 * @method integer getExeTime() 获取进程执行时长
 * @method void setExeTime(integer $ExeTime) 设置进程执行时长
 * @method integer getTargetSize() 获取目标文件大小
 * @method void setTargetSize(integer $TargetSize) 设置目标文件大小
 * @method string getTargetPermission() 获取目标文件权限
 * @method void setTargetPermission(string $TargetPermission) 设置目标文件权限
 * @method string getTargetModifyTime() 获取目标文件更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetModifyTime(string $TargetModifyTime) 设置目标文件更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetCreatTime() 获取目标文件创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetCreatTime(string $TargetCreatTime) 设置目标文件创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExePid() 获取进程pid
 * @method void setExePid(integer $ExePid) 设置进程pid
 * @method string getTargetName() 获取文件名称
 * @method void setTargetName(string $TargetName) 设置文件名称
 * @method string getReference() 获取参考链接
 * @method void setReference(string $Reference) 设置参考链接
 * @method integer getLevel() 获取风险等级 0：无， 1: 高危， 2:中危， 3: 低危
 * @method void setLevel(integer $Level) 设置风险等级 0：无， 1: 高危， 2:中危， 3: 低危
 * @method string getExeName() 获取进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExeName(string $ExeName) 设置进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachineExtraInfo getMachineExtraInfo() 获取 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileAction() 获取文件威胁行为
<li>read 读取文件</li>
<li>write 修改文件</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileAction(string $FileAction) 设置文件威胁行为
<li>read 读取文件</li>
<li>write 修改文件</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileTamperEvent extends AbstractModel
{
    /**
     * @var string 机器名称
     */
    public $HostName;

    /**
     * @var string 机器IP
     */
    public $HostIp;

    /**
     * @var string 发生时间
     */
    public $CreateTime;

    /**
     * @var string 最近发生时间
     */
    public $ModifyTime;

    /**
     * @var integer 事件id
     */
    public $Id;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var string cvm id
     */
    public $Quuid;

    /**
     * @var integer 事件类型/动作  0 -- 告警
     */
    public $Type;

    /**
     * @var string 进程路径
     */
    public $ProcessExe;

    /**
     * @var string 进程参数
     */
    public $ProcessArgv;

    /**
     * @var string 目标文件路径
     */
    public $Target;

    /**
     * @var integer 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略 4-已手动处理
     */
    public $Status;

    /**
     * @var integer 事件产生次数
     */
    public $EventCount;

    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 事件详情: json格式
     */
    public $Pstree;

    /**
     * @var integer 规则类型 0系统规则 1自定义规则
     */
    public $RuleCategory;

    /**
     * @var string 主机在线信息 ONLINE、OFFLINE
     */
    public $MachineStatus;

    /**
     * @var string 危害描述
     */
    public $Description;

    /**
     * @var string 修护建议
     */
    public $Suggestion;

    /**
     * @var string 内网ip
     */
    public $PrivateIp;

    /**
     * @var string 进程权限
     */
    public $ExePermission;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 用户组
     */
    public $UserGroup;

    /**
     * @var string 进程名
     */
    public $ExeMd5;

    /**
     * @var integer 进程文件大小
     */
    public $ExeSize;

    /**
     * @var integer 进程执行时长
     */
    public $ExeTime;

    /**
     * @var integer 目标文件大小
     */
    public $TargetSize;

    /**
     * @var string 目标文件权限
     */
    public $TargetPermission;

    /**
     * @var string 目标文件更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetModifyTime;

    /**
     * @var string 目标文件创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetCreatTime;

    /**
     * @var integer 进程pid
     */
    public $ExePid;

    /**
     * @var string 文件名称
     */
    public $TargetName;

    /**
     * @var string 参考链接
     */
    public $Reference;

    /**
     * @var integer 风险等级 0：无， 1: 高危， 2:中危， 3: 低危
     */
    public $Level;

    /**
     * @var string 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExeName;

    /**
     * @var MachineExtraInfo  主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @var string 文件威胁行为
<li>read 读取文件</li>
<li>write 修改文件</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileAction;

    /**
     * @param string $HostName 机器名称
     * @param string $HostIp 机器IP
     * @param string $CreateTime 发生时间
     * @param string $ModifyTime 最近发生时间
     * @param integer $Id 事件id
     * @param string $Uuid 主机uuid
     * @param string $Quuid cvm id
     * @param integer $Type 事件类型/动作  0 -- 告警
     * @param string $ProcessExe 进程路径
     * @param string $ProcessArgv 进程参数
     * @param string $Target 目标文件路径
     * @param integer $Status 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略 4-已手动处理
     * @param integer $EventCount 事件产生次数
     * @param integer $RuleId 规则id
     * @param string $RuleName 规则名称
     * @param string $Pstree 事件详情: json格式
     * @param integer $RuleCategory 规则类型 0系统规则 1自定义规则
     * @param string $MachineStatus 主机在线信息 ONLINE、OFFLINE
     * @param string $Description 危害描述
     * @param string $Suggestion 修护建议
     * @param string $PrivateIp 内网ip
     * @param string $ExePermission 进程权限
     * @param string $UserName 用户名
     * @param string $UserGroup 用户组
     * @param string $ExeMd5 进程名
     * @param integer $ExeSize 进程文件大小
     * @param integer $ExeTime 进程执行时长
     * @param integer $TargetSize 目标文件大小
     * @param string $TargetPermission 目标文件权限
     * @param string $TargetModifyTime 目标文件更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetCreatTime 目标文件创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExePid 进程pid
     * @param string $TargetName 文件名称
     * @param string $Reference 参考链接
     * @param integer $Level 风险等级 0：无， 1: 高危， 2:中危， 3: 低危
     * @param string $ExeName 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param MachineExtraInfo $MachineExtraInfo  主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileAction 文件威胁行为
<li>read 读取文件</li>
<li>write 修改文件</li>
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProcessExe",$param) and $param["ProcessExe"] !== null) {
            $this->ProcessExe = $param["ProcessExe"];
        }

        if (array_key_exists("ProcessArgv",$param) and $param["ProcessArgv"] !== null) {
            $this->ProcessArgv = $param["ProcessArgv"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Pstree",$param) and $param["Pstree"] !== null) {
            $this->Pstree = $param["Pstree"];
        }

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("ExePermission",$param) and $param["ExePermission"] !== null) {
            $this->ExePermission = $param["ExePermission"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("ExeMd5",$param) and $param["ExeMd5"] !== null) {
            $this->ExeMd5 = $param["ExeMd5"];
        }

        if (array_key_exists("ExeSize",$param) and $param["ExeSize"] !== null) {
            $this->ExeSize = $param["ExeSize"];
        }

        if (array_key_exists("ExeTime",$param) and $param["ExeTime"] !== null) {
            $this->ExeTime = $param["ExeTime"];
        }

        if (array_key_exists("TargetSize",$param) and $param["TargetSize"] !== null) {
            $this->TargetSize = $param["TargetSize"];
        }

        if (array_key_exists("TargetPermission",$param) and $param["TargetPermission"] !== null) {
            $this->TargetPermission = $param["TargetPermission"];
        }

        if (array_key_exists("TargetModifyTime",$param) and $param["TargetModifyTime"] !== null) {
            $this->TargetModifyTime = $param["TargetModifyTime"];
        }

        if (array_key_exists("TargetCreatTime",$param) and $param["TargetCreatTime"] !== null) {
            $this->TargetCreatTime = $param["TargetCreatTime"];
        }

        if (array_key_exists("ExePid",$param) and $param["ExePid"] !== null) {
            $this->ExePid = $param["ExePid"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ExeName",$param) and $param["ExeName"] !== null) {
            $this->ExeName = $param["ExeName"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("FileAction",$param) and $param["FileAction"] !== null) {
            $this->FileAction = $param["FileAction"];
        }
    }
}
