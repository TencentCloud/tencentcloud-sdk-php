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
 * @method integer getEventId() 获取事件ID
 * @method void setEventId(integer $EventId) 设置事件ID
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostIp() 获取主机IP
 * @method void setHostIp(string $HostIp) 设置主机IP
 * @method string getWanIp() 获取外网IP
 * @method void setWanIp(string $WanIp) 设置外网IP
 * @method integer getProcessId() 获取进程ID
 * @method void setProcessId(integer $ProcessId) 设置进程ID
 * @method string getFilePath() 获取文件路径
 * @method void setFilePath(string $FilePath) 设置文件路径
 * @method string getCmdLine() 获取执行命令
 * @method void setCmdLine(string $CmdLine) 设置执行命令
 * @method string getStartTime() 获取进程启动时间
 * @method void setStartTime(string $StartTime) 设置进程启动时间
 * @method string getDetectTime() 获取最近检测时间
 * @method void setDetectTime(string $DetectTime) 设置最近检测时间
 * @method string getVirusName() 获取病毒名称
 * @method void setVirusName(string $VirusName) 设置病毒名称
 * @method array getCheckPlatform() 获取木马检测平台 [1:云查杀引擎|2:TAV|3:binaryAi|4:异常行为|5:威胁情报]
 * @method void setCheckPlatform(array $CheckPlatform) 设置木马检测平台 [1:云查杀引擎|2:TAV|3:binaryAi|4:异常行为|5:威胁情报]
 * @method array getVirusTags() 获取病毒标签
 * @method void setVirusTags(array $VirusTags) 设置病毒标签
 * @method string getThreatDesc() 获取威胁描述
 * @method void setThreatDesc(string $ThreatDesc) 设置威胁描述
 * @method string getSuggestSolution() 获取建议方案
 * @method void setSuggestSolution(string $SuggestSolution) 设置建议方案
 * @method string getReferenceLink() 获取参考链接
 * @method void setReferenceLink(string $ReferenceLink) 设置参考链接
 * @method integer getHandleStatus() 获取处理状态[0待处理;1已处理;2查杀中;3已查杀;4已退出;5忽略]
 * @method void setHandleStatus(integer $HandleStatus) 设置处理状态[0待处理;1已处理;2查杀中;3已查杀;4已退出;5忽略]
 * @method integer getOnlineStatus() 获取主机在线状态
 * @method void setOnlineStatus(integer $OnlineStatus) 设置主机在线状态
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method integer getFirstDetectionMethod() 获取首次检出方式 0扫描;1实时监控
 * @method void setFirstDetectionMethod(integer $FirstDetectionMethod) 设置首次检出方式 0扫描;1实时监控
 */
class RiskProcessEvent extends AbstractModel
{
    /**
     * @var integer 事件ID
     */
    public $EventId;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机IP
     */
    public $HostIp;

    /**
     * @var string 外网IP
     */
    public $WanIp;

    /**
     * @var integer 进程ID
     */
    public $ProcessId;

    /**
     * @var string 文件路径
     */
    public $FilePath;

    /**
     * @var string 执行命令
     */
    public $CmdLine;

    /**
     * @var string 进程启动时间
     */
    public $StartTime;

    /**
     * @var string 最近检测时间
     */
    public $DetectTime;

    /**
     * @var string 病毒名称
     */
    public $VirusName;

    /**
     * @var array 木马检测平台 [1:云查杀引擎|2:TAV|3:binaryAi|4:异常行为|5:威胁情报]
     */
    public $CheckPlatform;

    /**
     * @var array 病毒标签
     */
    public $VirusTags;

    /**
     * @var string 威胁描述
     */
    public $ThreatDesc;

    /**
     * @var string 建议方案
     */
    public $SuggestSolution;

    /**
     * @var string 参考链接
     */
    public $ReferenceLink;

    /**
     * @var integer 处理状态[0待处理;1已处理;2查杀中;3已查杀;4已退出;5忽略]
     */
    public $HandleStatus;

    /**
     * @var integer 主机在线状态
     */
    public $OnlineStatus;

    /**
     * @var MachineExtraInfo 附加信息
     */
    public $MachineExtraInfo;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var integer 首次检出方式 0扫描;1实时监控
     */
    public $FirstDetectionMethod;

    /**
     * @param integer $EventId 事件ID
     * @param string $HostName 主机名称
     * @param string $HostIp 主机IP
     * @param string $WanIp 外网IP
     * @param integer $ProcessId 进程ID
     * @param string $FilePath 文件路径
     * @param string $CmdLine 执行命令
     * @param string $StartTime 进程启动时间
     * @param string $DetectTime 最近检测时间
     * @param string $VirusName 病毒名称
     * @param array $CheckPlatform 木马检测平台 [1:云查杀引擎|2:TAV|3:binaryAi|4:异常行为|5:威胁情报]
     * @param array $VirusTags 病毒标签
     * @param string $ThreatDesc 威胁描述
     * @param string $SuggestSolution 建议方案
     * @param string $ReferenceLink 参考链接
     * @param integer $HandleStatus 处理状态[0待处理;1已处理;2查杀中;3已查杀;4已退出;5忽略]
     * @param integer $OnlineStatus 主机在线状态
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
     * @param string $Uuid 主机uuid
     * @param integer $FirstDetectionMethod 首次检出方式 0扫描;1实时监控
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
    }
}
