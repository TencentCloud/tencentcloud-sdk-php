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
 * 恶意请求事件
 *
 * @method integer getId() 获取事件Id
 * @method void setId(integer $Id) 设置事件Id
 * @method integer getPolicyId() 获取策略ID
 * @method void setPolicyId(integer $PolicyId) 设置策略ID
 * @method integer getPolicyType() 获取命中策略类型[-1:未知|0系统|1:用户]
 * @method void setPolicyType(integer $PolicyType) 设置命中策略类型[-1:未知|0系统|1:用户]
 * @method string getPolicyName() 获取命中策略名称
 * @method void setPolicyName(string $PolicyName) 设置命中策略名称
 * @method integer getProtectLevel() 获取保护级别[0:基础版|1:专业版|2:旗舰版]
 * @method void setProtectLevel(integer $ProtectLevel) 设置保护级别[0:基础版|1:专业版|2:旗舰版]
 * @method string getHostId() 获取主机ID
 * @method void setHostId(string $HostId) 设置主机ID
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostIp() 获取主机IP
 * @method void setHostIp(string $HostIp) 设置主机IP
 * @method string getWanIp() 获取外网IP
 * @method void setWanIp(string $WanIp) 设置外网IP
 * @method string getAgentId() 获取客户端ID
 * @method void setAgentId(string $AgentId) 设置客户端ID
 * @method string getDomain() 获取访问域名
 * @method void setDomain(string $Domain) 设置访问域名
 * @method array getTags() 获取标签特性
 * @method void setTags(array $Tags) 设置标签特性
 * @method integer getAccessCount() 获取访问次数
 * @method void setAccessCount(integer $AccessCount) 设置访问次数
 * @method string getThreatDesc() 获取威胁描述
 * @method void setThreatDesc(string $ThreatDesc) 设置威胁描述
 * @method string getSuggestSolution() 获取修复方案
 * @method void setSuggestSolution(string $SuggestSolution) 设置修复方案
 * @method string getReferenceLink() 获取参考链接
 * @method void setReferenceLink(string $ReferenceLink) 设置参考链接
 * @method integer getHandleStatus() 获取处理状态；[0:待处理|2:已加白|3:非信任状态|4:已处理|5:已忽略]
 * @method void setHandleStatus(integer $HandleStatus) 设置处理状态；[0:待处理|2:已加白|3:非信任状态|4:已处理|5:已忽略]
 * @method integer getPid() 获取进程ID
 * @method void setPid(integer $Pid) 设置进程ID
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method string getProcessMd5() 获取进程MD5
 * @method void setProcessMd5(string $ProcessMd5) 设置进程MD5
 * @method string getCmdLine() 获取命令行
 * @method void setCmdLine(string $CmdLine) 设置命令行
 * @method string getFirstTime() 获取首次访问时间
 * @method void setFirstTime(string $FirstTime) 设置首次访问时间
 * @method string getLastTime() 获取最近访问时间
 * @method void setLastTime(string $LastTime) 设置最近访问时间
 * @method string getHostStatus() 获取主机在线状态[OFFLINE:离线|ONLINE:在线|UNKNOWN:未知]
 * @method void setHostStatus(string $HostStatus) 设置主机在线状态[OFFLINE:离线|ONLINE:在线|UNKNOWN:未知]
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class RiskDnsEvent extends AbstractModel
{
    /**
     * @var integer 事件Id
     */
    public $Id;

    /**
     * @var integer 策略ID
     */
    public $PolicyId;

    /**
     * @var integer 命中策略类型[-1:未知|0系统|1:用户]
     */
    public $PolicyType;

    /**
     * @var string 命中策略名称
     */
    public $PolicyName;

    /**
     * @var integer 保护级别[0:基础版|1:专业版|2:旗舰版]
     */
    public $ProtectLevel;

    /**
     * @var string 主机ID
     */
    public $HostId;

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
     * @var string 客户端ID
     */
    public $AgentId;

    /**
     * @var string 访问域名
     */
    public $Domain;

    /**
     * @var array 标签特性
     */
    public $Tags;

    /**
     * @var integer 访问次数
     */
    public $AccessCount;

    /**
     * @var string 威胁描述
     */
    public $ThreatDesc;

    /**
     * @var string 修复方案
     */
    public $SuggestSolution;

    /**
     * @var string 参考链接
     */
    public $ReferenceLink;

    /**
     * @var integer 处理状态；[0:待处理|2:已加白|3:非信任状态|4:已处理|5:已忽略]
     */
    public $HandleStatus;

    /**
     * @var integer 进程ID
     */
    public $Pid;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var string 进程MD5
     */
    public $ProcessMd5;

    /**
     * @var string 命令行
     */
    public $CmdLine;

    /**
     * @var string 首次访问时间
     */
    public $FirstTime;

    /**
     * @var string 最近访问时间
     */
    public $LastTime;

    /**
     * @var string 主机在线状态[OFFLINE:离线|ONLINE:在线|UNKNOWN:未知]
     */
    public $HostStatus;

    /**
     * @var MachineExtraInfo 附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param integer $Id 事件Id
     * @param integer $PolicyId 策略ID
     * @param integer $PolicyType 命中策略类型[-1:未知|0系统|1:用户]
     * @param string $PolicyName 命中策略名称
     * @param integer $ProtectLevel 保护级别[0:基础版|1:专业版|2:旗舰版]
     * @param string $HostId 主机ID
     * @param string $HostName 主机名称
     * @param string $HostIp 主机IP
     * @param string $WanIp 外网IP
     * @param string $AgentId 客户端ID
     * @param string $Domain 访问域名
     * @param array $Tags 标签特性
     * @param integer $AccessCount 访问次数
     * @param string $ThreatDesc 威胁描述
     * @param string $SuggestSolution 修复方案
     * @param string $ReferenceLink 参考链接
     * @param integer $HandleStatus 处理状态；[0:待处理|2:已加白|3:非信任状态|4:已处理|5:已忽略]
     * @param integer $Pid 进程ID
     * @param string $ProcessName 进程名
     * @param string $ProcessMd5 进程MD5
     * @param string $CmdLine 命令行
     * @param string $FirstTime 首次访问时间
     * @param string $LastTime 最近访问时间
     * @param string $HostStatus 主机在线状态[OFFLINE:离线|ONLINE:在线|UNKNOWN:未知]
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("ProtectLevel",$param) and $param["ProtectLevel"] !== null) {
            $this->ProtectLevel = $param["ProtectLevel"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
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

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("AccessCount",$param) and $param["AccessCount"] !== null) {
            $this->AccessCount = $param["AccessCount"];
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

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("HostStatus",$param) and $param["HostStatus"] !== null) {
            $this->HostStatus = $param["HostStatus"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
