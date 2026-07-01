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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEDRRule请求参数结构体
 *
 * @method integer getRuleType() 获取<p>策略类型 / Rule Type: 0-系统策略/System Rule, 1-自定义策略/Custom Rule</p>
 * @method void setRuleType(integer $RuleType) 设置<p>策略类型 / Rule Type: 0-系统策略/System Rule, 1-自定义策略/Custom Rule</p>
 * @method integer getAlertAction() 获取<p>执行动作 / Action: 0-告警/Alert, 1-放行/Allow, 2-告警并拦截/Alert and Block</p>
 * @method void setAlertAction(integer $AlertAction) 设置<p>执行动作 / Action: 0-告警/Alert, 1-放行/Allow, 2-告警并拦截/Alert and Block</p>
 * @method integer getCWPScope() 获取<p>生效资产 / Effective Scope: 0-指定主机/Specified Hosts, 1-全部主机/All Hosts, 2-专业版/Professional, 3-旗舰版/Flagship, 4-专业版+旗舰版/Professional+Flagship     QUUIDS        []string json:&quot;QUUIDS&quot;                                      // 主机列表 / Host QUUIDS (when Scope=0)</p>
 * @method void setCWPScope(integer $CWPScope) 设置<p>生效资产 / Effective Scope: 0-指定主机/Specified Hosts, 1-全部主机/All Hosts, 2-专业版/Professional, 3-旗舰版/Flagship, 4-专业版+旗舰版/Professional+Flagship     QUUIDS        []string json:&quot;QUUIDS&quot;                                      // 主机列表 / Host QUUIDS (when Scope=0)</p>
 * @method integer getTCSSScope() 获取<p>容器生效镜像范围 / Container Image Scope: 0-指定镜像/Specified Images, 1-全部镜像/All Images</p>
 * @method void setTCSSScope(integer $TCSSScope) 设置<p>容器生效镜像范围 / Container Image Scope: 0-指定镜像/Specified Images, 1-全部镜像/All Images</p>
 * @method integer getStatus() 获取<p>开关 / Status: 0-开启/Enabled, 1-关闭/Disabled</p>
 * @method void setStatus(integer $Status) 设置<p>开关 / Status: 0-开启/Enabled, 1-关闭/Disabled</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getName() 获取<p>策略名称</p>
 * @method void setName(string $Name) 设置<p>策略名称</p>
 * @method string getContentType() 获取<p>内容类型 / Content Type: md5-文件MD5/File MD5, cmdline-命令行/Command Line, dns-DNS, ip_inbound-入站IP/Inbound IP, ip_outbound-出站IP/Outbound IP, custom_file-自定义文件/Custom File, process_network-进程网络/Process Network</p>
 * @method void setContentType(string $ContentType) 设置<p>内容类型 / Content Type: md5-文件MD5/File MD5, cmdline-命令行/Command Line, dns-DNS, ip_inbound-入站IP/Inbound IP, ip_outbound-出站IP/Outbound IP, custom_file-自定义文件/Custom File, process_network-进程网络/Process Network</p>
 * @method integer getLevel() 获取<p>告警等级 / Alert Level: 1-高危/High, 2-中危/Medium, 3-低危/Low, 4-提示/Reminder</p>
 * @method void setLevel(integer $Level) 设置<p>告警等级 / Alert Level: 1-高危/High, 2-中危/Medium, 3-低危/Low, 4-提示/Reminder</p>
 * @method integer getDetectMode() 获取<p>检测模式 / Detect Mode: 0-精准/Precise, 1-均衡/Balanced, 2-深度/Deep</p>
 * @method void setDetectMode(integer $DetectMode) 设置<p>检测模式 / Detect Mode: 0-精准/Precise, 1-均衡/Balanced, 2-深度/Deep</p>
 * @method string getAttackStage() 获取<p>攻击阶段</p>
 * @method void setAttackStage(string $AttackStage) 设置<p>攻击阶段</p>
 * @method string getRuleID() 获取<p>策略</p>
 * @method void setRuleID(string $RuleID) 设置<p>策略</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method integer getDealOldEvents() 获取<p>处理历史告警 / Handle Old Events: 0-否/No, 1-是/Yes</p>
 * @method void setDealOldEvents(integer $DealOldEvents) 设置<p>处理历史告警 / Handle Old Events: 0-否/No, 1-是/Yes</p>
 * @method array getMd5List() 获取<p>ContentType=md5 时传入的 MD5 列表</p>
 * @method void setMd5List(array $Md5List) 设置<p>ContentType=md5 时传入的 MD5 列表</p>
 * @method array getFileName() 获取<p>ContentType=custom_file 时传入的文件名列表(Base64编码)</p>
 * @method void setFileName(array $FileName) 设置<p>ContentType=custom_file 时传入的文件名列表(Base64编码)</p>
 * @method array getFileDirectory() 获取<p>ContentType=custom_file 时传入的文件目录列表(Base64编码)</p>
 * @method void setFileDirectory(array $FileDirectory) 设置<p>ContentType=custom_file 时传入的文件目录列表(Base64编码)</p>
 * @method RuleContentCmdLine getCmdLineRules() 获取<p>ContentType=cmdline 时传入的命令行规则，Process/PProcess/AProcess 的 Exe/Cmdline 字段需要 Base64 编码</p>
 * @method void setCmdLineRules(RuleContentCmdLine $CmdLineRules) 设置<p>ContentType=cmdline 时传入的命令行规则，Process/PProcess/AProcess 的 Exe/Cmdline 字段需要 Base64 编码</p>
 * @method array getDomains() 获取<p>ContentType=dns 时传入的域名列表(Base64编码)</p>
 * @method void setDomains(array $Domains) 设置<p>ContentType=dns 时传入的域名列表(Base64编码)</p>
 * @method array getOutboundIP() 获取<p>ContentType=ip_outbound 时传入的出站IP列表(Base64编码)</p>
 * @method void setOutboundIP(array $OutboundIP) 设置<p>ContentType=ip_outbound 时传入的出站IP列表(Base64编码)</p>
 * @method array getInboundIP() 获取<p>ContentType=ip_inbound 时传入的入站IP列表(Base64编码)</p>
 * @method void setInboundIP(array $InboundIP) 设置<p>ContentType=ip_inbound 时传入的入站IP列表(Base64编码)</p>
 * @method array getImageIDs() 获取<p>镜像ID列表 / Image IDs (when TCSSScope=0)</p>
 * @method void setImageIDs(array $ImageIDs) 设置<p>镜像ID列表 / Image IDs (when TCSSScope=0)</p>
 * @method RuleContentProcessNetwork getProcessNetworkRules() 获取<p>ContentType=process_network 时传入的进程网络规则</p>
 * @method void setProcessNetworkRules(RuleContentProcessNetwork $ProcessNetworkRules) 设置<p>ContentType=process_network 时传入的进程网络规则</p>
 * @method array getTargetAppIDs() 获取<p>选择的多账号的APPID</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) 设置<p>选择的多账号的APPID</p>
 * @method EdrAlertTarget getTarget() 获取<p>告警的加白目标机器信息</p>
 * @method void setTarget(EdrAlertTarget $Target) 设置<p>告警的加白目标机器信息</p>
 * @method array getInstanceIDsWithAppId() 获取<p>自选资产对应的实例ID和APPID</p>
 * @method void setInstanceIDsWithAppId(array $InstanceIDsWithAppId) 设置<p>自选资产对应的实例ID和APPID</p>
 * @method array getExcludeInstanceIDsWithAppId() 获取<p>全选资产排除的实例ID和APPID</p>
 * @method void setExcludeInstanceIDsWithAppId(array $ExcludeInstanceIDsWithAppId) 设置<p>全选资产排除的实例ID和APPID</p>
 */
class ModifyEDRRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>策略类型 / Rule Type: 0-系统策略/System Rule, 1-自定义策略/Custom Rule</p>
     */
    public $RuleType;

    /**
     * @var integer <p>执行动作 / Action: 0-告警/Alert, 1-放行/Allow, 2-告警并拦截/Alert and Block</p>
     */
    public $AlertAction;

    /**
     * @var integer <p>生效资产 / Effective Scope: 0-指定主机/Specified Hosts, 1-全部主机/All Hosts, 2-专业版/Professional, 3-旗舰版/Flagship, 4-专业版+旗舰版/Professional+Flagship     QUUIDS        []string json:&quot;QUUIDS&quot;                                      // 主机列表 / Host QUUIDS (when Scope=0)</p>
     */
    public $CWPScope;

    /**
     * @var integer <p>容器生效镜像范围 / Container Image Scope: 0-指定镜像/Specified Images, 1-全部镜像/All Images</p>
     */
    public $TCSSScope;

    /**
     * @var integer <p>开关 / Status: 0-开启/Enabled, 1-关闭/Disabled</p>
     */
    public $Status;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>策略名称</p>
     */
    public $Name;

    /**
     * @var string <p>内容类型 / Content Type: md5-文件MD5/File MD5, cmdline-命令行/Command Line, dns-DNS, ip_inbound-入站IP/Inbound IP, ip_outbound-出站IP/Outbound IP, custom_file-自定义文件/Custom File, process_network-进程网络/Process Network</p>
     */
    public $ContentType;

    /**
     * @var integer <p>告警等级 / Alert Level: 1-高危/High, 2-中危/Medium, 3-低危/Low, 4-提示/Reminder</p>
     */
    public $Level;

    /**
     * @var integer <p>检测模式 / Detect Mode: 0-精准/Precise, 1-均衡/Balanced, 2-深度/Deep</p>
     */
    public $DetectMode;

    /**
     * @var string <p>攻击阶段</p>
     */
    public $AttackStage;

    /**
     * @var string <p>策略</p>
     */
    public $RuleID;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var integer <p>处理历史告警 / Handle Old Events: 0-否/No, 1-是/Yes</p>
     */
    public $DealOldEvents;

    /**
     * @var array <p>ContentType=md5 时传入的 MD5 列表</p>
     */
    public $Md5List;

    /**
     * @var array <p>ContentType=custom_file 时传入的文件名列表(Base64编码)</p>
     */
    public $FileName;

    /**
     * @var array <p>ContentType=custom_file 时传入的文件目录列表(Base64编码)</p>
     */
    public $FileDirectory;

    /**
     * @var RuleContentCmdLine <p>ContentType=cmdline 时传入的命令行规则，Process/PProcess/AProcess 的 Exe/Cmdline 字段需要 Base64 编码</p>
     */
    public $CmdLineRules;

    /**
     * @var array <p>ContentType=dns 时传入的域名列表(Base64编码)</p>
     */
    public $Domains;

    /**
     * @var array <p>ContentType=ip_outbound 时传入的出站IP列表(Base64编码)</p>
     */
    public $OutboundIP;

    /**
     * @var array <p>ContentType=ip_inbound 时传入的入站IP列表(Base64编码)</p>
     */
    public $InboundIP;

    /**
     * @var array <p>镜像ID列表 / Image IDs (when TCSSScope=0)</p>
     */
    public $ImageIDs;

    /**
     * @var RuleContentProcessNetwork <p>ContentType=process_network 时传入的进程网络规则</p>
     */
    public $ProcessNetworkRules;

    /**
     * @var array <p>选择的多账号的APPID</p>
     */
    public $TargetAppIDs;

    /**
     * @var EdrAlertTarget <p>告警的加白目标机器信息</p>
     */
    public $Target;

    /**
     * @var array <p>自选资产对应的实例ID和APPID</p>
     */
    public $InstanceIDsWithAppId;

    /**
     * @var array <p>全选资产排除的实例ID和APPID</p>
     */
    public $ExcludeInstanceIDsWithAppId;

    /**
     * @param integer $RuleType <p>策略类型 / Rule Type: 0-系统策略/System Rule, 1-自定义策略/Custom Rule</p>
     * @param integer $AlertAction <p>执行动作 / Action: 0-告警/Alert, 1-放行/Allow, 2-告警并拦截/Alert and Block</p>
     * @param integer $CWPScope <p>生效资产 / Effective Scope: 0-指定主机/Specified Hosts, 1-全部主机/All Hosts, 2-专业版/Professional, 3-旗舰版/Flagship, 4-专业版+旗舰版/Professional+Flagship     QUUIDS        []string json:&quot;QUUIDS&quot;                                      // 主机列表 / Host QUUIDS (when Scope=0)</p>
     * @param integer $TCSSScope <p>容器生效镜像范围 / Container Image Scope: 0-指定镜像/Specified Images, 1-全部镜像/All Images</p>
     * @param integer $Status <p>开关 / Status: 0-开启/Enabled, 1-关闭/Disabled</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Name <p>策略名称</p>
     * @param string $ContentType <p>内容类型 / Content Type: md5-文件MD5/File MD5, cmdline-命令行/Command Line, dns-DNS, ip_inbound-入站IP/Inbound IP, ip_outbound-出站IP/Outbound IP, custom_file-自定义文件/Custom File, process_network-进程网络/Process Network</p>
     * @param integer $Level <p>告警等级 / Alert Level: 1-高危/High, 2-中危/Medium, 3-低危/Low, 4-提示/Reminder</p>
     * @param integer $DetectMode <p>检测模式 / Detect Mode: 0-精准/Precise, 1-均衡/Balanced, 2-深度/Deep</p>
     * @param string $AttackStage <p>攻击阶段</p>
     * @param string $RuleID <p>策略</p>
     * @param string $Description <p>策略描述</p>
     * @param integer $DealOldEvents <p>处理历史告警 / Handle Old Events: 0-否/No, 1-是/Yes</p>
     * @param array $Md5List <p>ContentType=md5 时传入的 MD5 列表</p>
     * @param array $FileName <p>ContentType=custom_file 时传入的文件名列表(Base64编码)</p>
     * @param array $FileDirectory <p>ContentType=custom_file 时传入的文件目录列表(Base64编码)</p>
     * @param RuleContentCmdLine $CmdLineRules <p>ContentType=cmdline 时传入的命令行规则，Process/PProcess/AProcess 的 Exe/Cmdline 字段需要 Base64 编码</p>
     * @param array $Domains <p>ContentType=dns 时传入的域名列表(Base64编码)</p>
     * @param array $OutboundIP <p>ContentType=ip_outbound 时传入的出站IP列表(Base64编码)</p>
     * @param array $InboundIP <p>ContentType=ip_inbound 时传入的入站IP列表(Base64编码)</p>
     * @param array $ImageIDs <p>镜像ID列表 / Image IDs (when TCSSScope=0)</p>
     * @param RuleContentProcessNetwork $ProcessNetworkRules <p>ContentType=process_network 时传入的进程网络规则</p>
     * @param array $TargetAppIDs <p>选择的多账号的APPID</p>
     * @param EdrAlertTarget $Target <p>告警的加白目标机器信息</p>
     * @param array $InstanceIDsWithAppId <p>自选资产对应的实例ID和APPID</p>
     * @param array $ExcludeInstanceIDsWithAppId <p>全选资产排除的实例ID和APPID</p>
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("AlertAction",$param) and $param["AlertAction"] !== null) {
            $this->AlertAction = $param["AlertAction"];
        }

        if (array_key_exists("CWPScope",$param) and $param["CWPScope"] !== null) {
            $this->CWPScope = $param["CWPScope"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileDirectory",$param) and $param["FileDirectory"] !== null) {
            $this->FileDirectory = $param["FileDirectory"];
        }

        if (array_key_exists("CmdLineRules",$param) and $param["CmdLineRules"] !== null) {
            $this->CmdLineRules = new RuleContentCmdLine();
            $this->CmdLineRules->deserialize($param["CmdLineRules"]);
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("OutboundIP",$param) and $param["OutboundIP"] !== null) {
            $this->OutboundIP = $param["OutboundIP"];
        }

        if (array_key_exists("InboundIP",$param) and $param["InboundIP"] !== null) {
            $this->InboundIP = $param["InboundIP"];
        }

        if (array_key_exists("ImageIDs",$param) and $param["ImageIDs"] !== null) {
            $this->ImageIDs = $param["ImageIDs"];
        }

        if (array_key_exists("ProcessNetworkRules",$param) and $param["ProcessNetworkRules"] !== null) {
            $this->ProcessNetworkRules = new RuleContentProcessNetwork();
            $this->ProcessNetworkRules->deserialize($param["ProcessNetworkRules"]);
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new EdrAlertTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("InstanceIDsWithAppId",$param) and $param["InstanceIDsWithAppId"] !== null) {
            $this->InstanceIDsWithAppId = [];
            foreach ($param["InstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->InstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeInstanceIDsWithAppId",$param) and $param["ExcludeInstanceIDsWithAppId"] !== null) {
            $this->ExcludeInstanceIDsWithAppId = [];
            foreach ($param["ExcludeInstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeInstanceIDsWithAppId, $obj);
            }
        }
    }
}
