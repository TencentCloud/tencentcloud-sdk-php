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
 * 异常进程事件
 *
 * @method integer getEventId() 获取<p>事件ID</p>
 * @method void setEventId(integer $EventId) 设置<p>事件ID</p>
 * @method string getHostName() 获取<p>主机名称</p>
 * @method void setHostName(string $HostName) 设置<p>主机名称</p>
 * @method string getHostIp() 获取<p>主机IP</p>
 * @method void setHostIp(string $HostIp) 设置<p>主机IP</p>
 * @method string getWanIp() 获取<p>外网IP</p>
 * @method void setWanIp(string $WanIp) 设置<p>外网IP</p>
 * @method integer getProcessId() 获取<p>进程ID</p>
 * @method void setProcessId(integer $ProcessId) 设置<p>进程ID</p>
 * @method string getFilePath() 获取<p>文件路径</p>
 * @method void setFilePath(string $FilePath) 设置<p>文件路径</p>
 * @method string getCmdLine() 获取<p>执行命令</p>
 * @method void setCmdLine(string $CmdLine) 设置<p>执行命令</p>
 * @method string getStartTime() 获取<p>进程启动时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>进程启动时间</p>
 * @method string getDetectTime() 获取<p>最近检测时间</p>
 * @method void setDetectTime(string $DetectTime) 设置<p>最近检测时间</p>
 * @method string getVirusName() 获取<p>病毒名称</p>
 * @method void setVirusName(string $VirusName) 设置<p>病毒名称</p>
 * @method array getCheckPlatform() 获取<p>木马检测平台 [1:云查杀引擎|2:TAV|3:binaryAi|4:异常行为|5:威胁情报]</p>
 * @method void setCheckPlatform(array $CheckPlatform) 设置<p>木马检测平台 [1:云查杀引擎|2:TAV|3:binaryAi|4:异常行为|5:威胁情报]</p>
 * @method array getVirusTags() 获取<p>病毒标签</p>
 * @method void setVirusTags(array $VirusTags) 设置<p>病毒标签</p>
 * @method string getThreatDesc() 获取<p>威胁描述</p>
 * @method void setThreatDesc(string $ThreatDesc) 设置<p>威胁描述</p>
 * @method string getSuggestSolution() 获取<p>建议方案</p>
 * @method void setSuggestSolution(string $SuggestSolution) 设置<p>建议方案</p>
 * @method string getReferenceLink() 获取<p>参考链接</p>
 * @method void setReferenceLink(string $ReferenceLink) 设置<p>参考链接</p>
 * @method integer getHandleStatus() 获取<p>处理状态[0待处理;1已处理;2查杀中;3已查杀;4已退出;5忽略]</p>
 * @method void setHandleStatus(integer $HandleStatus) 设置<p>处理状态[0待处理;1已处理;2查杀中;3已查杀;4已退出;5忽略]</p>
 * @method integer getOnlineStatus() 获取<p>主机在线状态</p>
 * @method void setOnlineStatus(integer $OnlineStatus) 设置<p>主机在线状态</p>
 * @method MachineExtraInfo getMachineExtraInfo() 获取<p>附加信息</p>
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置<p>附加信息</p>
 * @method string getUuid() 获取<p>主机uuid</p>
 * @method void setUuid(string $Uuid) 设置<p>主机uuid</p>
 * @method integer getFirstDetectionMethod() 获取<p>首次检出方式 0扫描;1实时监控</p>
 * @method void setFirstDetectionMethod(integer $FirstDetectionMethod) 设置<p>首次检出方式 0扫描;1实时监控</p>
 * @method string getQUUID() 获取<p>quuid</p>
 * @method void setQUUID(string $QUUID) 设置<p>quuid</p>
 * @method string getExeMd5() 获取<p>进程md5</p>
 * @method void setExeMd5(string $ExeMd5) 设置<p>进程md5</p>
 */
class RiskProcessEvent extends AbstractModel
{
    /**
     * @var integer <p>事件ID</p>
     */
    public $EventId;

    /**
     * @var string <p>主机名称</p>
     */
    public $HostName;

    /**
     * @var string <p>主机IP</p>
     */
    public $HostIp;

    /**
     * @var string <p>外网IP</p>
     */
    public $WanIp;

    /**
     * @var integer <p>进程ID</p>
     */
    public $ProcessId;

    /**
     * @var string <p>文件路径</p>
     */
    public $FilePath;

    /**
     * @var string <p>执行命令</p>
     */
    public $CmdLine;

    /**
     * @var string <p>进程启动时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>最近检测时间</p>
     */
    public $DetectTime;

    /**
     * @var string <p>病毒名称</p>
     */
    public $VirusName;

    /**
     * @var array <p>木马检测平台 [1:云查杀引擎|2:TAV|3:binaryAi|4:异常行为|5:威胁情报]</p>
     */
    public $CheckPlatform;

    /**
     * @var array <p>病毒标签</p>
     */
    public $VirusTags;

    /**
     * @var string <p>威胁描述</p>
     */
    public $ThreatDesc;

    /**
     * @var string <p>建议方案</p>
     */
    public $SuggestSolution;

    /**
     * @var string <p>参考链接</p>
     */
    public $ReferenceLink;

    /**
     * @var integer <p>处理状态[0待处理;1已处理;2查杀中;3已查杀;4已退出;5忽略]</p>
     */
    public $HandleStatus;

    /**
     * @var integer <p>主机在线状态</p>
     */
    public $OnlineStatus;

    /**
     * @var MachineExtraInfo <p>附加信息</p>
     */
    public $MachineExtraInfo;

    /**
     * @var string <p>主机uuid</p>
     */
    public $Uuid;

    /**
     * @var integer <p>首次检出方式 0扫描;1实时监控</p>
     */
    public $FirstDetectionMethod;

    /**
     * @var string <p>quuid</p>
     */
    public $QUUID;

    /**
     * @var string <p>进程md5</p>
     */
    public $ExeMd5;

    /**
     * @param integer $EventId <p>事件ID</p>
     * @param string $HostName <p>主机名称</p>
     * @param string $HostIp <p>主机IP</p>
     * @param string $WanIp <p>外网IP</p>
     * @param integer $ProcessId <p>进程ID</p>
     * @param string $FilePath <p>文件路径</p>
     * @param string $CmdLine <p>执行命令</p>
     * @param string $StartTime <p>进程启动时间</p>
     * @param string $DetectTime <p>最近检测时间</p>
     * @param string $VirusName <p>病毒名称</p>
     * @param array $CheckPlatform <p>木马检测平台 [1:云查杀引擎|2:TAV|3:binaryAi|4:异常行为|5:威胁情报]</p>
     * @param array $VirusTags <p>病毒标签</p>
     * @param string $ThreatDesc <p>威胁描述</p>
     * @param string $SuggestSolution <p>建议方案</p>
     * @param string $ReferenceLink <p>参考链接</p>
     * @param integer $HandleStatus <p>处理状态[0待处理;1已处理;2查杀中;3已查杀;4已退出;5忽略]</p>
     * @param integer $OnlineStatus <p>主机在线状态</p>
     * @param MachineExtraInfo $MachineExtraInfo <p>附加信息</p>
     * @param string $Uuid <p>主机uuid</p>
     * @param integer $FirstDetectionMethod <p>首次检出方式 0扫描;1实时监控</p>
     * @param string $QUUID <p>quuid</p>
     * @param string $ExeMd5 <p>进程md5</p>
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("CheckPlatform",$param) and $param["CheckPlatform"] !== null) {
            $this->CheckPlatform = $param["CheckPlatform"];
        }

        if (array_key_exists("VirusTags",$param) and $param["VirusTags"] !== null) {
            $this->VirusTags = $param["VirusTags"];
        }

        if (array_key_exists("ThreatDesc",$param) and $param["ThreatDesc"] !== null) {
            $this->ThreatDesc = $param["ThreatDesc"];
        }

        if (array_key_exists("SuggestSolution",$param) and $param["SuggestSolution"] !== null) {
            $this->SuggestSolution = $param["SuggestSolution"];
        }

        if (array_key_exists("ReferenceLink",$param) and $param["ReferenceLink"] !== null) {
            $this->ReferenceLink = $param["ReferenceLink"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("FirstDetectionMethod",$param) and $param["FirstDetectionMethod"] !== null) {
            $this->FirstDetectionMethod = $param["FirstDetectionMethod"];
        }

        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("ExeMd5",$param) and $param["ExeMd5"] !== null) {
            $this->ExeMd5 = $param["ExeMd5"];
        }
    }
}
