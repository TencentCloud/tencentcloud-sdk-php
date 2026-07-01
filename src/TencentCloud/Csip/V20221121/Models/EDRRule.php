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
 * EDR-策略内容
 *
 * @method string getRuleID() 获取<p>策略ID</p>
 * @method void setRuleID(string $RuleID) 设置<p>策略ID</p>
 * @method integer getRuleType() 获取<p>策略类型，0-系统策略/System Rule, 1-自定义策略/Custom Rule</p>
 * @method void setRuleType(integer $RuleType) 设置<p>策略类型，0-系统策略/System Rule, 1-自定义策略/Custom Rule</p>
 * @method string getName() 获取<p>策略名称</p>
 * @method void setName(string $Name) 设置<p>策略名称</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method string getContentType() 获取<p>内容类型 / Content Type: md5-文件MD5/File MD5, cmdline-命令行/Command Line, dns-DNS, ip_inbound-入站IP/Inbound IP, ip_outbound-出站IP/Outbound IP, custom_file-自定义文件/Custom File, process_network-进程网络/Process Network</p>
 * @method void setContentType(string $ContentType) 设置<p>内容类型 / Content Type: md5-文件MD5/File MD5, cmdline-命令行/Command Line, dns-DNS, ip_inbound-入站IP/Inbound IP, ip_outbound-出站IP/Outbound IP, custom_file-自定义文件/Custom File, process_network-进程网络/Process Network</p>
 * @method integer getAction() 获取<p>执行动作 / Action: 0-告警/Alert, 1-放行/Allow, 2-告警并拦截/Alert and Block</p>
 * @method void setAction(integer $Action) 设置<p>执行动作 / Action: 0-告警/Alert, 1-放行/Allow, 2-告警并拦截/Alert and Block</p>
 * @method integer getLevel() 获取<p>告警等级 / Alert Level: 0-无/None, 1-高危/High, 2-中危/Medium, 3-低危/Low, 4-提示/Reminder</p>
 * @method void setLevel(integer $Level) 设置<p>告警等级 / Alert Level: 0-无/None, 1-高危/High, 2-中危/Medium, 3-低危/Low, 4-提示/Reminder</p>
 * @method integer getDetectMode() 获取<p>检测模式 / Detect Mode: 0-精准/Precise, 1-均衡/Balanced, 2-深度/Deep</p>
 * @method void setDetectMode(integer $DetectMode) 设置<p>检测模式 / Detect Mode: 0-精准/Precise, 1-均衡/Balanced, 2-深度/Deep</p>
 * @method integer getDetectType() 获取<p>检测方式 / Detect Type: 0-主机检测/Host Detection, 1-网络检测/Network Detection</p>
 * @method void setDetectType(integer $DetectType) 设置<p>检测方式 / Detect Type: 0-主机检测/Host Detection, 1-网络检测/Network Detection</p>
 * @method string getAttackStage() 获取<p>攻击阶段</p>
 * @method void setAttackStage(string $AttackStage) 设置<p>攻击阶段</p>
 * @method integer getCWPScope() 获取<p>主机生效资产范围 / Effective Scope: 0-指定主机/Specified Hosts, 1-全部主机/All Hosts, 2-专业版/Professional, 3-旗舰版/Flagship, 4-专业版+旗舰版/Professional+Flagship</p>
 * @method void setCWPScope(integer $CWPScope) 设置<p>主机生效资产范围 / Effective Scope: 0-指定主机/Specified Hosts, 1-全部主机/All Hosts, 2-专业版/Professional, 3-旗舰版/Flagship, 4-专业版+旗舰版/Professional+Flagship</p>
 * @method array getQUUIDS() 获取<p>主机运行时的自选主机</p>
 * @method void setQUUIDS(array $QUUIDS) 设置<p>主机运行时的自选主机</p>
 * @method integer getStatus() 获取<p>状态 / Status: 0-开启/Enabled, 1-关闭/Disabled</p>
 * @method void setStatus(integer $Status) 设置<p>状态 / Status: 0-开启/Enabled, 1-关闭/Disabled</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method integer getSupportBlock() 获取<p>是否支持拦截 / Support Block: 0-不支持/Not Supported, 1-支持/Supported</p>
 * @method void setSupportBlock(integer $SupportBlock) 设置<p>是否支持拦截 / Support Block: 0-不支持/Not Supported, 1-支持/Supported</p>
 * @method array getMd5List() 获取<p>MD5列表,ContentType=md5 时填充</p>
 * @method void setMd5List(array $Md5List) 设置<p>MD5列表,ContentType=md5 时填充</p>
 * @method array getFileName() 获取<p>文件名列表,ContentType=custom_file 时填充</p>
 * @method void setFileName(array $FileName) 设置<p>文件名列表,ContentType=custom_file 时填充</p>
 * @method array getFileDirectory() 获取<p>文件目录列表,ContentType=custom_file 时填充</p>
 * @method void setFileDirectory(array $FileDirectory) 设置<p>文件目录列表,ContentType=custom_file 时填充</p>
 * @method array getDomains() 获取<p>域名列表,ContentType=dns 时填充</p>
 * @method void setDomains(array $Domains) 设置<p>域名列表,ContentType=dns 时填充</p>
 * @method array getOutboundIP() 获取<p>出站IP列表,ContentType=ip_outbound 时填充</p>
 * @method void setOutboundIP(array $OutboundIP) 设置<p>出站IP列表,ContentType=ip_outbound 时填充</p>
 * @method array getInboundIP() 获取<p>入站IP列表,ContentType=ip_inbound 时填充</p>
 * @method void setInboundIP(array $InboundIP) 设置<p>入站IP列表,ContentType=ip_inbound 时填充</p>
 * @method RuleContentCmdLine getCmdLineRules() 获取<p>命令行规则,ContentType=cmdline 时填充</p>
 * @method void setCmdLineRules(RuleContentCmdLine $CmdLineRules) 设置<p>命令行规则,ContentType=cmdline 时填充</p>
 * @method integer getTCSSScope() 获取<p>容器生效镜像范围 / Container Image Scope: 0-指定镜像/Specified Images, 1-全部镜像/All Images</p>
 * @method void setTCSSScope(integer $TCSSScope) 设置<p>容器生效镜像范围 / Container Image Scope: 0-指定镜像/Specified Images, 1-全部镜像/All Images</p>
 * @method array getImageIDs() 获取<p>生效镜像ID列表 / Image IDs (when TCSSScope=0)</p>
 * @method void setImageIDs(array $ImageIDs) 设置<p>生效镜像ID列表 / Image IDs (when TCSSScope=0)</p>
 * @method string getImageNamesRegex() 获取<p>镜像名正则表达式 / Image Names Regex</p>
 * @method void setImageNamesRegex(string $ImageNamesRegex) 设置<p>镜像名正则表达式 / Image Names Regex</p>
 * @method integer getConfidence() 获取<p>置信度 / Confidence: 0-低/Low, 1-中/Medium, 2-高/High</p>
 * @method void setConfidence(integer $Confidence) 设置<p>置信度 / Confidence: 0-低/Low, 1-中/Medium, 2-高/High</p>
 * @method array getExcludeQUUIDS() 获取<p>排除的主机列表 / Excluded Host QUUIDS</p>
 * @method void setExcludeQUUIDS(array $ExcludeQUUIDS) 设置<p>排除的主机列表 / Excluded Host QUUIDS</p>
 * @method array getExcludeImageIDs() 获取<p>排除的镜像ID列表 / Excluded Image IDs</p>
 * @method void setExcludeImageIDs(array $ExcludeImageIDs) 设置<p>排除的镜像ID列表 / Excluded Image IDs</p>
 * @method RuleContentProcessNetwork getProcessNetworkRules() 获取<p>进程网络规则 / Process network rules</p>
 * @method void setProcessNetworkRules(RuleContentProcessNetwork $ProcessNetworkRules) 设置<p>进程网络规则 / Process network rules</p>
 * @method integer getAppID() 获取<p>策略对应APPID</p>
 * @method void setAppID(integer $AppID) 设置<p>策略对应APPID</p>
 * @method array getInstanceIDs() 获取<p>自选实例ID范围</p>
 * @method void setInstanceIDs(array $InstanceIDs) 设置<p>自选实例ID范围</p>
 * @method array getExcludeInstanceIDs() 获取<p>排除实例ID</p>
 * @method void setExcludeInstanceIDs(array $ExcludeInstanceIDs) 设置<p>排除实例ID</p>
 */
class EDRRule extends AbstractModel
{
    /**
     * @var string <p>策略ID</p>
     */
    public $RuleID;

    /**
     * @var integer <p>策略类型，0-系统策略/System Rule, 1-自定义策略/Custom Rule</p>
     */
    public $RuleType;

    /**
     * @var string <p>策略名称</p>
     */
    public $Name;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var string <p>内容类型 / Content Type: md5-文件MD5/File MD5, cmdline-命令行/Command Line, dns-DNS, ip_inbound-入站IP/Inbound IP, ip_outbound-出站IP/Outbound IP, custom_file-自定义文件/Custom File, process_network-进程网络/Process Network</p>
     */
    public $ContentType;

    /**
     * @var integer <p>执行动作 / Action: 0-告警/Alert, 1-放行/Allow, 2-告警并拦截/Alert and Block</p>
     */
    public $Action;

    /**
     * @var integer <p>告警等级 / Alert Level: 0-无/None, 1-高危/High, 2-中危/Medium, 3-低危/Low, 4-提示/Reminder</p>
     */
    public $Level;

    /**
     * @var integer <p>检测模式 / Detect Mode: 0-精准/Precise, 1-均衡/Balanced, 2-深度/Deep</p>
     */
    public $DetectMode;

    /**
     * @var integer <p>检测方式 / Detect Type: 0-主机检测/Host Detection, 1-网络检测/Network Detection</p>
     */
    public $DetectType;

    /**
     * @var string <p>攻击阶段</p>
     */
    public $AttackStage;

    /**
     * @var integer <p>主机生效资产范围 / Effective Scope: 0-指定主机/Specified Hosts, 1-全部主机/All Hosts, 2-专业版/Professional, 3-旗舰版/Flagship, 4-专业版+旗舰版/Professional+Flagship</p>
     */
    public $CWPScope;

    /**
     * @var array <p>主机运行时的自选主机</p>
     */
    public $QUUIDS;

    /**
     * @var integer <p>状态 / Status: 0-开启/Enabled, 1-关闭/Disabled</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>是否支持拦截 / Support Block: 0-不支持/Not Supported, 1-支持/Supported</p>
     */
    public $SupportBlock;

    /**
     * @var array <p>MD5列表,ContentType=md5 时填充</p>
     */
    public $Md5List;

    /**
     * @var array <p>文件名列表,ContentType=custom_file 时填充</p>
     */
    public $FileName;

    /**
     * @var array <p>文件目录列表,ContentType=custom_file 时填充</p>
     */
    public $FileDirectory;

    /**
     * @var array <p>域名列表,ContentType=dns 时填充</p>
     */
    public $Domains;

    /**
     * @var array <p>出站IP列表,ContentType=ip_outbound 时填充</p>
     */
    public $OutboundIP;

    /**
     * @var array <p>入站IP列表,ContentType=ip_inbound 时填充</p>
     */
    public $InboundIP;

    /**
     * @var RuleContentCmdLine <p>命令行规则,ContentType=cmdline 时填充</p>
     */
    public $CmdLineRules;

    /**
     * @var integer <p>容器生效镜像范围 / Container Image Scope: 0-指定镜像/Specified Images, 1-全部镜像/All Images</p>
     */
    public $TCSSScope;

    /**
     * @var array <p>生效镜像ID列表 / Image IDs (when TCSSScope=0)</p>
     */
    public $ImageIDs;

    /**
     * @var string <p>镜像名正则表达式 / Image Names Regex</p>
     */
    public $ImageNamesRegex;

    /**
     * @var integer <p>置信度 / Confidence: 0-低/Low, 1-中/Medium, 2-高/High</p>
     */
    public $Confidence;

    /**
     * @var array <p>排除的主机列表 / Excluded Host QUUIDS</p>
     */
    public $ExcludeQUUIDS;

    /**
     * @var array <p>排除的镜像ID列表 / Excluded Image IDs</p>
     */
    public $ExcludeImageIDs;

    /**
     * @var RuleContentProcessNetwork <p>进程网络规则 / Process network rules</p>
     */
    public $ProcessNetworkRules;

    /**
     * @var integer <p>策略对应APPID</p>
     */
    public $AppID;

    /**
     * @var array <p>自选实例ID范围</p>
     */
    public $InstanceIDs;

    /**
     * @var array <p>排除实例ID</p>
     */
    public $ExcludeInstanceIDs;

    /**
     * @param string $RuleID <p>策略ID</p>
     * @param integer $RuleType <p>策略类型，0-系统策略/System Rule, 1-自定义策略/Custom Rule</p>
     * @param string $Name <p>策略名称</p>
     * @param string $Description <p>策略描述</p>
     * @param string $ContentType <p>内容类型 / Content Type: md5-文件MD5/File MD5, cmdline-命令行/Command Line, dns-DNS, ip_inbound-入站IP/Inbound IP, ip_outbound-出站IP/Outbound IP, custom_file-自定义文件/Custom File, process_network-进程网络/Process Network</p>
     * @param integer $Action <p>执行动作 / Action: 0-告警/Alert, 1-放行/Allow, 2-告警并拦截/Alert and Block</p>
     * @param integer $Level <p>告警等级 / Alert Level: 0-无/None, 1-高危/High, 2-中危/Medium, 3-低危/Low, 4-提示/Reminder</p>
     * @param integer $DetectMode <p>检测模式 / Detect Mode: 0-精准/Precise, 1-均衡/Balanced, 2-深度/Deep</p>
     * @param integer $DetectType <p>检测方式 / Detect Type: 0-主机检测/Host Detection, 1-网络检测/Network Detection</p>
     * @param string $AttackStage <p>攻击阶段</p>
     * @param integer $CWPScope <p>主机生效资产范围 / Effective Scope: 0-指定主机/Specified Hosts, 1-全部主机/All Hosts, 2-专业版/Professional, 3-旗舰版/Flagship, 4-专业版+旗舰版/Professional+Flagship</p>
     * @param array $QUUIDS <p>主机运行时的自选主机</p>
     * @param integer $Status <p>状态 / Status: 0-开启/Enabled, 1-关闭/Disabled</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param integer $SupportBlock <p>是否支持拦截 / Support Block: 0-不支持/Not Supported, 1-支持/Supported</p>
     * @param array $Md5List <p>MD5列表,ContentType=md5 时填充</p>
     * @param array $FileName <p>文件名列表,ContentType=custom_file 时填充</p>
     * @param array $FileDirectory <p>文件目录列表,ContentType=custom_file 时填充</p>
     * @param array $Domains <p>域名列表,ContentType=dns 时填充</p>
     * @param array $OutboundIP <p>出站IP列表,ContentType=ip_outbound 时填充</p>
     * @param array $InboundIP <p>入站IP列表,ContentType=ip_inbound 时填充</p>
     * @param RuleContentCmdLine $CmdLineRules <p>命令行规则,ContentType=cmdline 时填充</p>
     * @param integer $TCSSScope <p>容器生效镜像范围 / Container Image Scope: 0-指定镜像/Specified Images, 1-全部镜像/All Images</p>
     * @param array $ImageIDs <p>生效镜像ID列表 / Image IDs (when TCSSScope=0)</p>
     * @param string $ImageNamesRegex <p>镜像名正则表达式 / Image Names Regex</p>
     * @param integer $Confidence <p>置信度 / Confidence: 0-低/Low, 1-中/Medium, 2-高/High</p>
     * @param array $ExcludeQUUIDS <p>排除的主机列表 / Excluded Host QUUIDS</p>
     * @param array $ExcludeImageIDs <p>排除的镜像ID列表 / Excluded Image IDs</p>
     * @param RuleContentProcessNetwork $ProcessNetworkRules <p>进程网络规则 / Process network rules</p>
     * @param integer $AppID <p>策略对应APPID</p>
     * @param array $InstanceIDs <p>自选实例ID范围</p>
     * @param array $ExcludeInstanceIDs <p>排除实例ID</p>
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("DetectType",$param) and $param["DetectType"] !== null) {
            $this->DetectType = $param["DetectType"];
        }

        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("CWPScope",$param) and $param["CWPScope"] !== null) {
            $this->CWPScope = $param["CWPScope"];
        }

        if (array_key_exists("QUUIDS",$param) and $param["QUUIDS"] !== null) {
            $this->QUUIDS = $param["QUUIDS"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("SupportBlock",$param) and $param["SupportBlock"] !== null) {
            $this->SupportBlock = $param["SupportBlock"];
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

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("OutboundIP",$param) and $param["OutboundIP"] !== null) {
            $this->OutboundIP = $param["OutboundIP"];
        }

        if (array_key_exists("InboundIP",$param) and $param["InboundIP"] !== null) {
            $this->InboundIP = $param["InboundIP"];
        }

        if (array_key_exists("CmdLineRules",$param) and $param["CmdLineRules"] !== null) {
            $this->CmdLineRules = new RuleContentCmdLine();
            $this->CmdLineRules->deserialize($param["CmdLineRules"]);
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("ImageIDs",$param) and $param["ImageIDs"] !== null) {
            $this->ImageIDs = $param["ImageIDs"];
        }

        if (array_key_exists("ImageNamesRegex",$param) and $param["ImageNamesRegex"] !== null) {
            $this->ImageNamesRegex = $param["ImageNamesRegex"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("ExcludeQUUIDS",$param) and $param["ExcludeQUUIDS"] !== null) {
            $this->ExcludeQUUIDS = $param["ExcludeQUUIDS"];
        }

        if (array_key_exists("ExcludeImageIDs",$param) and $param["ExcludeImageIDs"] !== null) {
            $this->ExcludeImageIDs = $param["ExcludeImageIDs"];
        }

        if (array_key_exists("ProcessNetworkRules",$param) and $param["ProcessNetworkRules"] !== null) {
            $this->ProcessNetworkRules = new RuleContentProcessNetwork();
            $this->ProcessNetworkRules->deserialize($param["ProcessNetworkRules"]);
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("ExcludeInstanceIDs",$param) and $param["ExcludeInstanceIDs"] !== null) {
            $this->ExcludeInstanceIDs = $param["ExcludeInstanceIDs"];
        }
    }
}
