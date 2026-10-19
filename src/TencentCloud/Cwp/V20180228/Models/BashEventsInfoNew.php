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
 * 高危命令数据详情(新)
 *
 * @method integer getId() 获取<p>数据ID</p>
 * @method void setId(integer $Id) 设置<p>数据ID</p>
 * @method string getUuid() 获取<p>主机安全ID</p>
 * @method void setUuid(string $Uuid) 设置<p>主机安全ID</p>
 * @method string getQuuid() 获取<p>主机ID</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机ID</p>
 * @method string getHostIp() 获取<p>主机内网IP</p>
 * @method void setHostIp(string $HostIp) 设置<p>主机内网IP</p>
 * @method integer getPlatform() 获取<p>平台类型</p>
 * @method void setPlatform(integer $Platform) 设置<p>平台类型</p>
 * @method string getBashCmd() 获取<p>执行命令</p>
 * @method void setBashCmd(string $BashCmd) 设置<p>执行命令</p>
 * @method integer getRuleId() 获取<p>规则ID,等于0表示已规则已被删除或生效范围已修改</p>
 * @method void setRuleId(integer $RuleId) 设置<p>规则ID,等于0表示已规则已被删除或生效范围已修改</p>
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method integer getRuleLevel() 获取<p>规则等级：1-高 2-中 3-低</p>
 * @method void setRuleLevel(integer $RuleLevel) 设置<p>规则等级：1-高 2-中 3-低</p>
 * @method integer getStatus() 获取<p>处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3= 已忽略</p>
 * @method void setStatus(integer $Status) 设置<p>处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3= 已忽略</p>
 * @method string getCreateTime() 获取<p>发生时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>发生时间</p>
 * @method string getMachineName() 获取<p>主机名</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名</p>
 * @method string getExe() 获取<p>进程名称</p>
 * @method void setExe(string $Exe) 设置<p>进程名称</p>
 * @method string getModifyTime() 获取<p>处理时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>处理时间</p>
 * @method integer getRuleCategory() 获取<p>规则类别  0=系统规则，1=用户规则</p>
 * @method void setRuleCategory(integer $RuleCategory) 设置<p>规则类别  0=系统规则，1=用户规则</p>
 * @method string getRegexBashCmd() 获取<p>自动生成的正则表达式</p>
 * @method void setRegexBashCmd(string $RegexBashCmd) 设置<p>自动生成的正则表达式</p>
 * @method string getPsTree() 获取<p>进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源</p>
 * @method void setPsTree(string $PsTree) 设置<p>进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源</p>
 * @method string getSuggestScheme() 获取<p>建议方案</p>
 * @method void setSuggestScheme(string $SuggestScheme) 设置<p>建议方案</p>
 * @method string getHarmDescribe() 获取<p>描述</p>
 * @method void setHarmDescribe(string $HarmDescribe) 设置<p>描述</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method array getReferences() 获取<p>参考链接</p>
 * @method void setReferences(array $References) 设置<p>参考链接</p>
 * @method string getMachineWanIp() 获取<p>主机外网ip</p>
 * @method void setMachineWanIp(string $MachineWanIp) 设置<p>主机外网ip</p>
 * @method string getMachineStatus() 获取<p>主机在线状态 OFFLINE  ONLINE</p>
 * @method void setMachineStatus(string $MachineStatus) 设置<p>主机在线状态 OFFLINE  ONLINE</p>
 * @method string getUser() 获取<p>登录用户</p>
 * @method void setUser(string $User) 设置<p>登录用户</p>
 * @method string getPid() 获取<p>进程号</p>
 * @method void setPid(string $Pid) 设置<p>进程号</p>
 * @method integer getMachineType() 获取<p>0:普通 1:专业版 2:旗舰版</p>
 * @method void setMachineType(integer $MachineType) 设置<p>0:普通 1:专业版 2:旗舰版</p>
 * @method integer getDetectBy() 获取<p>检测来源 0:bash日志 1:实时监控</p>
 * @method void setDetectBy(integer $DetectBy) 设置<p>检测来源 0:bash日志 1:实时监控</p>
 * @method string getBashCmdDecoded() 获取<p>执行命令(解码后)</p>
 * @method void setBashCmdDecoded(string $BashCmdDecoded) 设置<p>执行命令(解码后)</p>
 * @method integer getEventCount() 获取<p>告警次数：同一聚合维度当天的告警命中次数，老数据为空</p>
 * @method void setEventCount(integer $EventCount) 设置<p>告警次数：同一聚合维度当天的告警命中次数，老数据为空</p>
 * @method string getFirstDetectTime() 获取<p>首次发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
 * @method void setFirstDetectTime(string $FirstDetectTime) 设置<p>首次发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
 * @method string getLatestDetectTime() 获取<p>最近发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
 * @method void setLatestDetectTime(string $LatestDetectTime) 设置<p>最近发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
 * @method string getFileProcessMd5() 获取<p>进程MD5（文件监控行为独有）</p>
 * @method void setFileProcessMd5(string $FileProcessMd5) 设置<p>进程MD5（文件监控行为独有）</p>
 * @method string getFileAction() 获取<p>动作：进程对文件的操作，如 读/写/重命名/删除/清空内容（文件监控行为独有）</p>
 * @method void setFileAction(string $FileAction) 设置<p>动作：进程对文件的操作，如 读/写/重命名/删除/清空内容（文件监控行为独有）</p>
 * @method string getFilePath() 获取<p>文件路径（文件监控行为独有）</p>
 * @method void setFilePath(string $FilePath) 设置<p>文件路径（文件监控行为独有）</p>
 * @method string getFileMd5() 获取<p>文件MD5（文件监控行为独有）</p>
 * @method void setFileMd5(string $FileMd5) 设置<p>文件MD5（文件监控行为独有）</p>
 * @method string getFileName() 获取<p>文件名称（文件监控行为独有）</p>
 * @method void setFileName(string $FileName) 设置<p>文件名称（文件监控行为独有）</p>
 * @method string getFileSize() 获取<p>文件大小（文件监控行为独有）</p>
 * @method void setFileSize(string $FileSize) 设置<p>文件大小（文件监控行为独有）</p>
 * @method string getFileModifyTime() 获取<p>文件修改时间（文件监控行为独有）</p>
 * @method void setFileModifyTime(string $FileModifyTime) 设置<p>文件修改时间（文件监控行为独有）</p>
 * @method string getFilePermission() 获取<p>文件权限（文件监控行为独有）</p>
 * @method void setFilePermission(string $FilePermission) 设置<p>文件权限（文件监控行为独有）</p>
 * @method string getFileAccessTime() 获取<p>文件访问时间</p>
 * @method void setFileAccessTime(string $FileAccessTime) 设置<p>文件访问时间</p>
 * @method string getBashType() 获取<p>高危命令事件类型</p><p>枚举值：</p><ul><li>filemon： 文件监控事件</li><li>connect： 外联行为事件</li><li>process： 进程启动事件</li></ul>
 * @method void setBashType(string $BashType) 设置<p>高危命令事件类型</p><p>枚举值：</p><ul><li>filemon： 文件监控事件</li><li>connect： 外联行为事件</li><li>process： 进程启动事件</li></ul>
 */
class BashEventsInfoNew extends AbstractModel
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
     * @var integer <p>平台类型</p>
     */
    public $Platform;

    /**
     * @var string <p>执行命令</p>
     */
    public $BashCmd;

    /**
     * @var integer <p>规则ID,等于0表示已规则已被删除或生效范围已修改</p>
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
     * @var integer <p>处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3= 已忽略</p>
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
     * @var string <p>自动生成的正则表达式</p>
     */
    public $RegexBashCmd;

    /**
     * @var string <p>进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源</p>
     */
    public $PsTree;

    /**
     * @var string <p>建议方案</p>
     */
    public $SuggestScheme;

    /**
     * @var string <p>描述</p>
     */
    public $HarmDescribe;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var array <p>参考链接</p>
     */
    public $References;

    /**
     * @var string <p>主机外网ip</p>
     */
    public $MachineWanIp;

    /**
     * @var string <p>主机在线状态 OFFLINE  ONLINE</p>
     */
    public $MachineStatus;

    /**
     * @var string <p>登录用户</p>
     */
    public $User;

    /**
     * @var string <p>进程号</p>
     */
    public $Pid;

    /**
     * @var integer <p>0:普通 1:专业版 2:旗舰版</p>
     */
    public $MachineType;

    /**
     * @var integer <p>检测来源 0:bash日志 1:实时监控</p>
     */
    public $DetectBy;

    /**
     * @var string <p>执行命令(解码后)</p>
     */
    public $BashCmdDecoded;

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
     * @var string <p>进程MD5（文件监控行为独有）</p>
     */
    public $FileProcessMd5;

    /**
     * @var string <p>动作：进程对文件的操作，如 读/写/重命名/删除/清空内容（文件监控行为独有）</p>
     */
    public $FileAction;

    /**
     * @var string <p>文件路径（文件监控行为独有）</p>
     */
    public $FilePath;

    /**
     * @var string <p>文件MD5（文件监控行为独有）</p>
     */
    public $FileMd5;

    /**
     * @var string <p>文件名称（文件监控行为独有）</p>
     */
    public $FileName;

    /**
     * @var string <p>文件大小（文件监控行为独有）</p>
     */
    public $FileSize;

    /**
     * @var string <p>文件修改时间（文件监控行为独有）</p>
     */
    public $FileModifyTime;

    /**
     * @var string <p>文件权限（文件监控行为独有）</p>
     */
    public $FilePermission;

    /**
     * @var string <p>文件访问时间</p>
     */
    public $FileAccessTime;

    /**
     * @var string <p>高危命令事件类型</p><p>枚举值：</p><ul><li>filemon： 文件监控事件</li><li>connect： 外联行为事件</li><li>process： 进程启动事件</li></ul>
     */
    public $BashType;

    /**
     * @param integer $Id <p>数据ID</p>
     * @param string $Uuid <p>主机安全ID</p>
     * @param string $Quuid <p>主机ID</p>
     * @param string $HostIp <p>主机内网IP</p>
     * @param integer $Platform <p>平台类型</p>
     * @param string $BashCmd <p>执行命令</p>
     * @param integer $RuleId <p>规则ID,等于0表示已规则已被删除或生效范围已修改</p>
     * @param string $RuleName <p>规则名称</p>
     * @param integer $RuleLevel <p>规则等级：1-高 2-中 3-低</p>
     * @param integer $Status <p>处理状态： 0 = 待处理 1= 已处理, 2 = 已加白， 3= 已忽略</p>
     * @param string $CreateTime <p>发生时间</p>
     * @param string $MachineName <p>主机名</p>
     * @param string $Exe <p>进程名称</p>
     * @param string $ModifyTime <p>处理时间</p>
     * @param integer $RuleCategory <p>规则类别  0=系统规则，1=用户规则</p>
     * @param string $RegexBashCmd <p>自动生成的正则表达式</p>
     * @param string $PsTree <p>进程树 json  pid:进程id，exe:文件路径 ，account:进程所属用组和用户 ,cmdline:执行命令，ssh_service: SSH服务ip, ssh_soure:登录源</p>
     * @param string $SuggestScheme <p>建议方案</p>
     * @param string $HarmDescribe <p>描述</p>
     * @param array $Tags <p>标签</p>
     * @param array $References <p>参考链接</p>
     * @param string $MachineWanIp <p>主机外网ip</p>
     * @param string $MachineStatus <p>主机在线状态 OFFLINE  ONLINE</p>
     * @param string $User <p>登录用户</p>
     * @param string $Pid <p>进程号</p>
     * @param integer $MachineType <p>0:普通 1:专业版 2:旗舰版</p>
     * @param integer $DetectBy <p>检测来源 0:bash日志 1:实时监控</p>
     * @param string $BashCmdDecoded <p>执行命令(解码后)</p>
     * @param integer $EventCount <p>告警次数：同一聚合维度当天的告警命中次数，老数据为空</p>
     * @param string $FirstDetectTime <p>首次发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
     * @param string $LatestDetectTime <p>最近发现时间（格式 yyyy-MM-dd HH:mm:ss）</p>
     * @param string $FileProcessMd5 <p>进程MD5（文件监控行为独有）</p>
     * @param string $FileAction <p>动作：进程对文件的操作，如 读/写/重命名/删除/清空内容（文件监控行为独有）</p>
     * @param string $FilePath <p>文件路径（文件监控行为独有）</p>
     * @param string $FileMd5 <p>文件MD5（文件监控行为独有）</p>
     * @param string $FileName <p>文件名称（文件监控行为独有）</p>
     * @param string $FileSize <p>文件大小（文件监控行为独有）</p>
     * @param string $FileModifyTime <p>文件修改时间（文件监控行为独有）</p>
     * @param string $FilePermission <p>文件权限（文件监控行为独有）</p>
     * @param string $FileAccessTime <p>文件访问时间</p>
     * @param string $BashType <p>高危命令事件类型</p><p>枚举值：</p><ul><li>filemon： 文件监控事件</li><li>connect： 外联行为事件</li><li>process： 进程启动事件</li></ul>
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

        if (array_key_exists("BashCmdDecoded",$param) and $param["BashCmdDecoded"] !== null) {
            $this->BashCmdDecoded = $param["BashCmdDecoded"];
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

        if (array_key_exists("FileProcessMd5",$param) and $param["FileProcessMd5"] !== null) {
            $this->FileProcessMd5 = $param["FileProcessMd5"];
        }

        if (array_key_exists("FileAction",$param) and $param["FileAction"] !== null) {
            $this->FileAction = $param["FileAction"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileModifyTime",$param) and $param["FileModifyTime"] !== null) {
            $this->FileModifyTime = $param["FileModifyTime"];
        }

        if (array_key_exists("FilePermission",$param) and $param["FilePermission"] !== null) {
            $this->FilePermission = $param["FilePermission"];
        }

        if (array_key_exists("FileAccessTime",$param) and $param["FileAccessTime"] !== null) {
            $this->FileAccessTime = $param["FileAccessTime"];
        }

        if (array_key_exists("BashType",$param) and $param["BashType"] !== null) {
            $this->BashType = $param["BashType"];
        }
    }
}
