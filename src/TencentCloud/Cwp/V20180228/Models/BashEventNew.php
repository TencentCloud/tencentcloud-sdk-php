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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高危命令数据(新)
 *
 * @method integer getId() 获取<p>数据ID</p>
 * @method void setId(integer $Id) 设置<p>数据ID</p>
 * @method string getUuid() 获取<p>主机安全ID</p>
 * @method void setUuid(string $Uuid) 设置<p>主机安全ID</p>
 * @method string getQuuid() 获取<p>主机ID</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机ID</p>
 * @method string getHostIp() 获取<p>主机内网IP</p>
 * @method void setHostIp(string $HostIp) 设置<p>主机内网IP</p>
 * @method string getUser() 获取<p>执行用户名</p>
 * @method void setUser(string $User) 设置<p>执行用户名</p>
 * @method integer getPlatform() 获取<p>平台类型</p>
 * @method void setPlatform(integer $Platform) 设置<p>平台类型</p>
 * @method string getBashCmd() 获取<p>执行命令</p>
 * @method void setBashCmd(string $BashCmd) 设置<p>执行命令</p>
 * @method integer getRuleId() 获取<p>规则ID</p>
 * @method void setRuleId(integer $RuleId) 设置<p>规则ID</p>
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method integer getRuleLevel() 获取<p>规则等级：1-高 2-中 3-低</p>
 * @method void setRuleLevel(integer $RuleLevel) 设置<p>规则等级：1-高 2-中 3-低</p>
 * @method integer getStatus() 获取<p>处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3 = 已忽略</p>
 * @method void setStatus(integer $Status) 设置<p>处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3 = 已忽略</p>
 * @method string getCreateTime() 获取<p>发生时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>发生时间</p>
 * @method string getMachineName() 获取<p>主机名</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名</p>
 * @method integer getDetectBy() 获取<p>0: bash日志 1: 实时监控(雷霆版)</p>
 * @method void setDetectBy(integer $DetectBy) 设置<p>0: bash日志 1: 实时监控(雷霆版)</p>
 * @method string getPid() 获取<p>进程id</p>
 * @method void setPid(string $Pid) 设置<p>进程id</p>
 * @method string getExe() 获取<p>进程名称</p>
 * @method void setExe(string $Exe) 设置<p>进程名称</p>
 * @method string getModifyTime() 获取<p>处理时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>处理时间</p>
 * @method integer getRuleCategory() 获取<p>规则类别  0=系统规则，1=用户规则</p>
 * @method void setRuleCategory(integer $RuleCategory) 设置<p>规则类别  0=系统规则，1=用户规则</p>
 * @method string getRegexBashCmd() 获取<p>转义后的正则表达式</p>
 * @method void setRegexBashCmd(string $RegexBashCmd) 设置<p>转义后的正则表达式</p>
 * @method string getRegexExe() 获取<p>转义后的正则表达式</p>
 * @method void setRegexExe(string $RegexExe) 设置<p>转义后的正则表达式</p>
 * @method integer getMachineType() 获取<p>0:普通 1:专业版 2:旗舰版</p>
 * @method void setMachineType(integer $MachineType) 设置<p>0:普通 1:专业版 2:旗舰版</p>
 * @method MachineExtraInfo getMachineExtraInfo() 获取<p>机器额外信息</p>
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置<p>机器额外信息</p>
 * @method integer getEventCount() 获取<p>告警次数：同一聚合维度当天的告警命中次数，老数据为空</p>
 * @method void setEventCount(integer $EventCount) 设置<p>告警次数：同一聚合维度当天的告警命中次数，老数据为空</p>
 * @method string getFirstDetectTime() 获取<p>首次发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
 * @method void setFirstDetectTime(string $FirstDetectTime) 设置<p>首次发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
 * @method string getLatestDetectTime() 获取<p>最近发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
 * @method void setLatestDetectTime(string $LatestDetectTime) 设置<p>最近发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
 */
class BashEventNew extends AbstractModel
{
    /**
     * @var integer <p>数据ID</p>
     */
    public $Id;

    /**
     * @var string <p>主机安全ID</p>
     */
    public $Uuid;

    /**
     * @var string <p>主机ID</p>
     */
    public $Quuid;

    /**
     * @var string <p>主机内网IP</p>
     */
    public $HostIp;

    /**
     * @var string <p>执行用户名</p>
     */
    public $User;

    /**
     * @var integer <p>平台类型</p>
     */
    public $Platform;

    /**
     * @var string <p>执行命令</p>
     */
    public $BashCmd;

    /**
     * @var integer <p>规则ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var integer <p>规则等级：1-高 2-中 3-低</p>
     */
    public $RuleLevel;

    /**
     * @var integer <p>处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3 = 已忽略</p>
     */
    public $Status;

    /**
     * @var string <p>发生时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>主机名</p>
     */
    public $MachineName;

    /**
     * @var integer <p>0: bash日志 1: 实时监控(雷霆版)</p>
     */
    public $DetectBy;

    /**
     * @var string <p>进程id</p>
     */
    public $Pid;

    /**
     * @var string <p>进程名称</p>
     */
    public $Exe;

    /**
     * @var string <p>处理时间</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>规则类别  0=系统规则，1=用户规则</p>
     */
    public $RuleCategory;

    /**
     * @var string <p>转义后的正则表达式</p>
     */
    public $RegexBashCmd;

    /**
     * @var string <p>转义后的正则表达式</p>
     */
    public $RegexExe;

    /**
     * @var integer <p>0:普通 1:专业版 2:旗舰版</p>
     */
    public $MachineType;

    /**
     * @var MachineExtraInfo <p>机器额外信息</p>
     */
    public $MachineExtraInfo;

    /**
     * @var integer <p>告警次数：同一聚合维度当天的告警命中次数，老数据为空</p>
     */
    public $EventCount;

    /**
     * @var string <p>首次发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
     */
    public $FirstDetectTime;

    /**
     * @var string <p>最近发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
     */
    public $LatestDetectTime;

    /**
     * @param integer $Id <p>数据ID</p>
     * @param string $Uuid <p>主机安全ID</p>
     * @param string $Quuid <p>主机ID</p>
     * @param string $HostIp <p>主机内网IP</p>
     * @param string $User <p>执行用户名</p>
     * @param integer $Platform <p>平台类型</p>
     * @param string $BashCmd <p>执行命令</p>
     * @param integer $RuleId <p>规则ID</p>
     * @param string $RuleName <p>规则名称</p>
     * @param integer $RuleLevel <p>规则等级：1-高 2-中 3-低</p>
     * @param integer $Status <p>处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3 = 已忽略</p>
     * @param string $CreateTime <p>发生时间</p>
     * @param string $MachineName <p>主机名</p>
     * @param integer $DetectBy <p>0: bash日志 1: 实时监控(雷霆版)</p>
     * @param string $Pid <p>进程id</p>
     * @param string $Exe <p>进程名称</p>
     * @param string $ModifyTime <p>处理时间</p>
     * @param integer $RuleCategory <p>规则类别  0=系统规则，1=用户规则</p>
     * @param string $RegexBashCmd <p>转义后的正则表达式</p>
     * @param string $RegexExe <p>转义后的正则表达式</p>
     * @param integer $MachineType <p>0:普通 1:专业版 2:旗舰版</p>
     * @param MachineExtraInfo $MachineExtraInfo <p>机器额外信息</p>
     * @param integer $EventCount <p>告警次数：同一聚合维度当天的告警命中次数，老数据为空</p>
     * @param string $FirstDetectTime <p>首次发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
     * @param string $LatestDetectTime <p>最近发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
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

        if (array_key_exists("DetectBy",$param) and $param["DetectBy"] !== null) {
            $this->DetectBy = $param["DetectBy"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
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

        if (array_key_exists("RegexExe",$param) and $param["RegexExe"] !== null) {
            $this->RegexExe = $param["RegexExe"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("FirstDetectTime",$param) and $param["FirstDetectTime"] !== null) {
            $this->FirstDetectTime = $param["FirstDetectTime"];
        }

        if (array_key_exists("LatestDetectTime",$param) and $param["LatestDetectTime"] !== null) {
            $this->LatestDetectTime = $param["LatestDetectTime"];
        }
    }
}
