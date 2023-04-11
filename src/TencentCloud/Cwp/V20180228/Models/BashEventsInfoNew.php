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
 * 高危命令数据详情(新)
 *
 * @method integer getId() 获取数据ID
 * @method void setId(integer $Id) 设置数据ID
 * @method string getUuid() 获取主机安全ID
 * @method void setUuid(string $Uuid) 设置主机安全ID
 * @method string getQuuid() 获取主机ID
 * @method void setQuuid(string $Quuid) 设置主机ID
 * @method string getHostIp() 获取主机内网IP
 * @method void setHostIp(string $HostIp) 设置主机内网IP
 * @method integer getPlatform() 获取平台类型
 * @method void setPlatform(integer $Platform) 设置平台类型
 * @method string getBashCmd() 获取执行命令
 * @method void setBashCmd(string $BashCmd) 设置执行命令
 * @method integer getRuleId() 获取规则ID,等于0表示已规则已被删除或生效范围已修改
 * @method void setRuleId(integer $RuleId) 设置规则ID,等于0表示已规则已被删除或生效范围已修改
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getRuleLevel() 获取规则等级：1-高 2-中 3-低
 * @method void setRuleLevel(integer $RuleLevel) 设置规则等级：1-高 2-中 3-低
 * @method integer getStatus() 获取处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3= 已忽略
 * @method void setStatus(integer $Status) 设置处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3= 已忽略
 * @method string getCreateTime() 获取发生时间
 * @method void setCreateTime(string $CreateTime) 设置发生时间
 * @method string getMachineName() 获取主机名
 * @method void setMachineName(string $MachineName) 设置主机名
 * @method string getExe() 获取进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExe(string $Exe) 设置进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取处理时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置处理时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleCategory() 获取规则类别  0=系统规则，1=用户规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCategory(integer $RuleCategory) 设置规则类别  0=系统规则，1=用户规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegexBashCmd() 获取自动生成的正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegexBashCmd(string $RegexBashCmd) 设置自动生成的正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPsTree() 获取进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPsTree(string $PsTree) 设置进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestScheme() 获取建议方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestScheme(string $SuggestScheme) 设置建议方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHarmDescribe() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHarmDescribe(string $HarmDescribe) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReferences() 获取参考链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferences(array $References) 设置参考链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineWanIp() 获取主机外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineStatus() 获取主机在线状态 OFFLINE  ONLINE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineStatus(string $MachineStatus) 设置主机在线状态 OFFLINE  ONLINE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取登录用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置登录用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPid() 获取进程号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPid(string $Pid) 设置进程号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMachineType() 获取0:普通 1:专业版 2:旗舰版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineType(integer $MachineType) 设置0:普通 1:专业版 2:旗舰版
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetectBy() 获取检测来源 0:bash日志 1:实时监控
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectBy(integer $DetectBy) 设置检测来源 0:bash日志 1:实时监控
注意：此字段可能返回 null，表示取不到有效值。
 */
class BashEventsInfoNew extends AbstractModel
{
    /**
     * @var integer 数据ID
     */
    public $Id;

    /**
     * @var string 主机安全ID
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
     * @var integer 平台类型
     */
    public $Platform;

    /**
     * @var string 执行命令
     */
    public $BashCmd;

    /**
     * @var integer 规则ID,等于0表示已规则已被删除或生效范围已修改
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 规则等级：1-高 2-中 3-低
     */
    public $RuleLevel;

    /**
     * @var integer 处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3= 已忽略
     */
    public $Status;

    /**
     * @var string 发生时间
     */
    public $CreateTime;

    /**
     * @var string 主机名
     */
    public $MachineName;

    /**
     * @var string 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Exe;

    /**
     * @var string 处理时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var integer 规则类别  0=系统规则，1=用户规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCategory;

    /**
     * @var string 自动生成的正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegexBashCmd;

    /**
     * @var string 进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PsTree;

    /**
     * @var string 建议方案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuggestScheme;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HarmDescribe;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 参考链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $References;

    /**
     * @var string 主机外网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineWanIp;

    /**
     * @var string 主机在线状态 OFFLINE  ONLINE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineStatus;

    /**
     * @var string 登录用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 进程号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pid;

    /**
     * @var integer 0:普通 1:专业版 2:旗舰版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineType;

    /**
     * @var integer 检测来源 0:bash日志 1:实时监控
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectBy;

    /**
     * @param integer $Id 数据ID
     * @param string $Uuid 主机安全ID
     * @param string $Quuid 主机ID
     * @param string $HostIp 主机内网IP
     * @param integer $Platform 平台类型
     * @param string $BashCmd 执行命令
     * @param integer $RuleId 规则ID,等于0表示已规则已被删除或生效范围已修改
     * @param string $RuleName 规则名称
     * @param integer $RuleLevel 规则等级：1-高 2-中 3-低
     * @param integer $Status 处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3= 已忽略
     * @param string $CreateTime 发生时间
     * @param string $MachineName 主机名
     * @param string $Exe 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 处理时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCategory 规则类别  0=系统规则，1=用户规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegexBashCmd 自动生成的正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PsTree 进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuggestScheme 建议方案
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HarmDescribe 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $References 参考链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineWanIp 主机外网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineStatus 主机在线状态 OFFLINE  ONLINE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 登录用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Pid 进程号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MachineType 0:普通 1:专业版 2:旗舰版
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetectBy 检测来源 0:bash日志 1:实时监控
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

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("BashCmd",$param) and $param["BashCmd"] !== null) {
            $this->BashCmd = $param["BashCmd"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
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

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }

        if (array_key_exists("RegexBashCmd",$param) and $param["RegexBashCmd"] !== null) {
            $this->RegexBashCmd = $param["RegexBashCmd"];
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("DetectBy",$param) and $param["DetectBy"] !== null) {
            $this->DetectBy = $param["DetectBy"];
        }
    }
}
