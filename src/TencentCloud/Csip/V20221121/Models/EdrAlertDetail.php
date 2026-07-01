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
 * EDR告警详情（含content JSON + 资产/情报富化字段）
 *
 * @method integer getId() 获取<p>主键ID</p>
 * @method void setId(integer $Id) 设置<p>主键ID</p>
 * @method integer getAppId() 获取<p>租户ID</p>
 * @method void setAppId(integer $AppId) 设置<p>租户ID</p>
 * @method string getAlertId() 获取<p>告警唯一标识</p>
 * @method void setAlertId(string $AlertId) 设置<p>告警唯一标识</p>
 * @method string getAlertCategory() 获取<p>告警大类（英文枚举：VIRUS_TROJAN/ABNORMAL_LOGIN/HOST_BEHAVIOR/NETWORK_BEHAVIOR/LINK_ENGINE）</p>
 * @method void setAlertCategory(string $AlertCategory) 设置<p>告警大类（英文枚举：VIRUS_TROJAN/ABNORMAL_LOGIN/HOST_BEHAVIOR/NETWORK_BEHAVIOR/LINK_ENGINE）</p>
 * @method string getAlertSubType() 获取<p>告警子类型（英文枚举：MALWARE_FILE/MALWARE_PROCESS/RISK_LOGIN/BRUTE_FORCE/DNS/BASH/PRIV_ESCALATION/REVERSE_SHELL/NET_ATTACK/VUL_DEFENCE/MEMORY_SHELL_INJECT/MEMORY_SHELL_SCAN/MULTI_BEHAVIOR_ATTACK）</p>
 * @method void setAlertSubType(string $AlertSubType) 设置<p>告警子类型（英文枚举：MALWARE_FILE/MALWARE_PROCESS/RISK_LOGIN/BRUTE_FORCE/DNS/BASH/PRIV_ESCALATION/REVERSE_SHELL/NET_ATTACK/VUL_DEFENCE/MEMORY_SHELL_INJECT/MEMORY_SHELL_SCAN/MULTI_BEHAVIOR_ATTACK）</p>
 * @method string getRuleId() 获取<p>关联规则ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>关联规则ID</p>
 * @method integer getRuleType() 获取<p>规则类型: 0-系统规则 1-用户自定义</p>
 * @method void setRuleType(integer $RuleType) 设置<p>规则类型: 0-系统规则 1-用户自定义</p>
 * @method string getLevel() 获取<p>告警等级（英文枚举：CRITICAL/HIGH/MEDIUM/LOW/INFO）</p>
 * @method void setLevel(string $Level) 设置<p>告警等级（英文枚举：CRITICAL/HIGH/MEDIUM/LOW/INFO）</p>
 * @method string getStatus() 获取<p>处理状态（英文枚举：PENDING/PROCESSED/WHITELISTED/ISOLATED/CLEANED/IGNORED/ISOLATING/RESTORING/BLOCKED/DELETED）</p>
 * @method void setStatus(string $Status) 设置<p>处理状态（英文枚举：PENDING/PROCESSED/WHITELISTED/ISOLATED/CLEANED/IGNORED/ISOLATING/RESTORING/BLOCKED/DELETED）</p>
 * @method string getAttackStage() 获取<p>ATT&amp;CK攻击阶段</p>
 * @method void setAttackStage(string $AttackStage) 设置<p>ATT&amp;CK攻击阶段</p>
 * @method string getDetectMode() 获取<p>检测模式（英文枚举：PRECISE/BALANCED/DEEP）</p>
 * @method void setDetectMode(string $DetectMode) 设置<p>检测模式（英文枚举：PRECISE/BALANCED/DEEP）</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getQuuid() 获取<p>主机UUID</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机UUID</p>
 * @method integer getEventCount() 获取<p>聚合事件数</p>
 * @method void setEventCount(integer $EventCount) 设置<p>聚合事件数</p>
 * @method integer getIsProVersion() 获取<p>是否付费版</p>
 * @method void setIsProVersion(integer $IsProVersion) 设置<p>是否付费版</p>
 * @method string getAlertSource() 获取<p>告警来源（英文枚举：HOST/CONTAINER/K8S/CSIP）</p>
 * @method void setAlertSource(string $AlertSource) 设置<p>告警来源（英文枚举：HOST/CONTAINER/K8S/CSIP）</p>
 * @method string getImageId() 获取<p>容器镜像ID（保留字段，恒为空串）</p>
 * @method void setImageId(string $ImageId) 设置<p>容器镜像ID（保留字段，恒为空串）</p>
 * @method string getContainerId() 获取<p>容器ID（保留字段，恒为空串）</p>
 * @method void setContainerId(string $ContainerId) 设置<p>容器ID（保留字段，恒为空串）</p>
 * @method string getClusterId() 获取<p>集群ID（保留字段，恒为空串）</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID（保留字段，恒为空串）</p>
 * @method string getFirstDetectTime() 获取<p>首次发现时间</p>
 * @method void setFirstDetectTime(string $FirstDetectTime) 设置<p>首次发现时间</p>
 * @method string getLatestDetectTime() 获取<p>最近发现时间</p>
 * @method void setLatestDetectTime(string $LatestDetectTime) 设置<p>最近发现时间</p>
 * @method string getRuleName() 获取<p>规则名称（规则富化）</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称（规则富化）</p>
 * @method string getContentType() 获取<p>内容类型: md5/cmdline/dns/ip_inbound/ip_outbound/custom_file/process_network</p>
 * @method void setContentType(string $ContentType) 设置<p>内容类型: md5/cmdline/dns/ip_inbound/ip_outbound/custom_file/process_network</p>
 * @method string getInstanceName() 获取<p>实例名（资产富化）</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名（资产富化）</p>
 * @method string getPublicIp() 获取<p>公网IP（资产富化）</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网IP（资产富化）</p>
 * @method string getPrivateIp() 获取<p>内网IP（资产富化）</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>内网IP（资产富化）</p>
 * @method string getContent() 获取<p>告警详情JSON字符串（前端通过JSON.parse解析，空值为&quot;{}&quot;）</p>
 * @method void setContent(string $Content) 设置<p>告警详情JSON字符串（前端通过JSON.parse解析，空值为&quot;{}&quot;）</p>
 * @method string getAlertName() 获取<p>告警名称（子类型中英文名）</p>
 * @method void setAlertName(string $AlertName) 设置<p>告警名称（子类型中英文名）</p>
 * @method array getCSIPTags() 获取<p>安全中心标签</p>
 * @method void setCSIPTags(array $CSIPTags) 设置<p>安全中心标签</p>
 * @method string getHarmDesc() 获取<p>危害描述（统一字段，合并原各子类型独立字段）</p>
 * @method void setHarmDesc(string $HarmDesc) 设置<p>危害描述（统一字段，合并原各子类型独立字段）</p>
 * @method string getSuggestScheme() 获取<p>修复建议（统一字段）</p>
 * @method void setSuggestScheme(string $SuggestScheme) 设置<p>修复建议（统一字段）</p>
 * @method string getHarmDescSource() 获取<p>数据来源: vuldb/vdc/intel/default</p>
 * @method void setHarmDescSource(string $HarmDescSource) 设置<p>数据来源: vuldb/vdc/intel/default</p>
 * @method array getThreatTags() 获取<p>统一威胁情报标签（按子类型路由不同情报源）</p>
 * @method void setThreatTags(array $ThreatTags) 设置<p>统一威胁情报标签（按子类型路由不同情报源）</p>
 * @method string getBashCmdDecoded() 获取<p>Base64解码后的命令（高危命令子类型独有）</p>
 * @method void setBashCmdDecoded(string $BashCmdDecoded) 设置<p>Base64解码后的命令（高危命令子类型独有）</p>
 * @method string getNetVulName() 获取<p>漏洞名称（网络攻击子类型独有）</p>
 * @method void setNetVulName(string $NetVulName) 设置<p>漏洞名称（网络攻击子类型独有）</p>
 * @method string getNetCVEId() 获取<p>CVE编号（网络攻击子类型独有）</p>
 * @method void setNetCVEId(string $NetCVEId) 设置<p>CVE编号（网络攻击子类型独有）</p>
 * @method string getNetAbnormalAction() 获取<p>异常行为（网络攻击子类型独有）</p>
 * @method void setNetAbnormalAction(string $NetAbnormalAction) 设置<p>异常行为（网络攻击子类型独有）</p>
 * @method IPIntelInfo getIPIntel() 获取<p>IP情报信息（为空时不返回）</p>
 * @method void setIPIntel(IPIntelInfo $IPIntel) 设置<p>IP情报信息（为空时不返回）</p>
 * @method string getMultiBehaviorDetectionMode() 获取<p>多行为攻击规则类型分类: sequence/threshold/command</p>
 * @method void setMultiBehaviorDetectionMode(string $MultiBehaviorDetectionMode) 设置<p>多行为攻击规则类型分类: sequence/threshold/command</p>
 * @method string getSourceDesc() 获取<p>告警来源描述（按子类型派生，描述哪个引擎/规则检出）</p>
 * @method void setSourceDesc(string $SourceDesc) 设置<p>告警来源描述（按子类型派生，描述哪个引擎/规则检出）</p>
 * @method string getModifyTime() 获取<p>处理时间参数格式：2026-05-26 19:45:48</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>处理时间参数格式：2026-05-26 19:45:48</p>
 * @method string getIntelSource() 获取<p>情报富化结果来源（标识本次详情是否成功命中外部情报）；取值 &quot;VDC&quot; / &quot;IPAnalysis&quot; / &quot;BreakingTI&quot; / 空串</p>
 * @method void setIntelSource(string $IntelSource) 设置<p>情报富化结果来源（标识本次详情是否成功命中外部情报）；取值 &quot;VDC&quot; / &quot;IPAnalysis&quot; / &quot;BreakingTI&quot; / 空串</p>
 * @method string getVerdict() 获取<p>综合研判，中英文已翻译，中：恶意/安全/未知；英：Malicious/Safe/Unknown</p>
 * @method void setVerdict(string $Verdict) 设置<p>综合研判，中英文已翻译，中：恶意/安全/未知；英：Malicious/Safe/Unknown</p>
 * @method string getVerdictBasis() 获取<p>研判依据</p>
 * @method void setVerdictBasis(string $VerdictBasis) 设置<p>研判依据</p>
 * @method string getVirusName() 获取<p>病毒名称</p>
 * @method void setVirusName(string $VirusName) 设置<p>病毒名称</p>
 * @method string getVirusFamily() 获取<p>病毒家族</p>
 * @method void setVirusFamily(string $VirusFamily) 设置<p>病毒家族</p>
 * @method string getNetResponsePayload() 获取<p>NetResponsePayload 响应数据包（base64 编码后的字符串）</p>
 * @method void setNetResponsePayload(string $NetResponsePayload) 设置<p>NetResponsePayload 响应数据包（base64 编码后的字符串）</p>
 * @method string getNetSvcPs() 获取<p>服务进程信息（base64 编码后的 JSON 字符串）</p>
 * @method void setNetSvcPs(string $NetSvcPs) 设置<p>服务进程信息（base64 编码后的 JSON 字符串）</p>
 */
class EdrAlertDetail extends AbstractModel
{
    /**
     * @var integer <p>主键ID</p>
     */
    public $Id;

    /**
     * @var integer <p>租户ID</p>
     */
    public $AppId;

    /**
     * @var string <p>告警唯一标识</p>
     */
    public $AlertId;

    /**
     * @var string <p>告警大类（英文枚举：VIRUS_TROJAN/ABNORMAL_LOGIN/HOST_BEHAVIOR/NETWORK_BEHAVIOR/LINK_ENGINE）</p>
     */
    public $AlertCategory;

    /**
     * @var string <p>告警子类型（英文枚举：MALWARE_FILE/MALWARE_PROCESS/RISK_LOGIN/BRUTE_FORCE/DNS/BASH/PRIV_ESCALATION/REVERSE_SHELL/NET_ATTACK/VUL_DEFENCE/MEMORY_SHELL_INJECT/MEMORY_SHELL_SCAN/MULTI_BEHAVIOR_ATTACK）</p>
     */
    public $AlertSubType;

    /**
     * @var string <p>关联规则ID</p>
     */
    public $RuleId;

    /**
     * @var integer <p>规则类型: 0-系统规则 1-用户自定义</p>
     */
    public $RuleType;

    /**
     * @var string <p>告警等级（英文枚举：CRITICAL/HIGH/MEDIUM/LOW/INFO）</p>
     */
    public $Level;

    /**
     * @var string <p>处理状态（英文枚举：PENDING/PROCESSED/WHITELISTED/ISOLATED/CLEANED/IGNORED/ISOLATING/RESTORING/BLOCKED/DELETED）</p>
     */
    public $Status;

    /**
     * @var string <p>ATT&amp;CK攻击阶段</p>
     */
    public $AttackStage;

    /**
     * @var string <p>检测模式（英文枚举：PRECISE/BALANCED/DEEP）</p>
     */
    public $DetectMode;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>主机UUID</p>
     */
    public $Quuid;

    /**
     * @var integer <p>聚合事件数</p>
     */
    public $EventCount;

    /**
     * @var integer <p>是否付费版</p>
     */
    public $IsProVersion;

    /**
     * @var string <p>告警来源（英文枚举：HOST/CONTAINER/K8S/CSIP）</p>
     */
    public $AlertSource;

    /**
     * @var string <p>容器镜像ID（保留字段，恒为空串）</p>
     */
    public $ImageId;

    /**
     * @var string <p>容器ID（保留字段，恒为空串）</p>
     */
    public $ContainerId;

    /**
     * @var string <p>集群ID（保留字段，恒为空串）</p>
     */
    public $ClusterId;

    /**
     * @var string <p>首次发现时间</p>
     */
    public $FirstDetectTime;

    /**
     * @var string <p>最近发现时间</p>
     */
    public $LatestDetectTime;

    /**
     * @var string <p>规则名称（规则富化）</p>
     */
    public $RuleName;

    /**
     * @var string <p>内容类型: md5/cmdline/dns/ip_inbound/ip_outbound/custom_file/process_network</p>
     */
    public $ContentType;

    /**
     * @var string <p>实例名（资产富化）</p>
     */
    public $InstanceName;

    /**
     * @var string <p>公网IP（资产富化）</p>
     */
    public $PublicIp;

    /**
     * @var string <p>内网IP（资产富化）</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>告警详情JSON字符串（前端通过JSON.parse解析，空值为&quot;{}&quot;）</p>
     */
    public $Content;

    /**
     * @var string <p>告警名称（子类型中英文名）</p>
     */
    public $AlertName;

    /**
     * @var array <p>安全中心标签</p>
     */
    public $CSIPTags;

    /**
     * @var string <p>危害描述（统一字段，合并原各子类型独立字段）</p>
     */
    public $HarmDesc;

    /**
     * @var string <p>修复建议（统一字段）</p>
     */
    public $SuggestScheme;

    /**
     * @var string <p>数据来源: vuldb/vdc/intel/default</p>
     */
    public $HarmDescSource;

    /**
     * @var array <p>统一威胁情报标签（按子类型路由不同情报源）</p>
     */
    public $ThreatTags;

    /**
     * @var string <p>Base64解码后的命令（高危命令子类型独有）</p>
     */
    public $BashCmdDecoded;

    /**
     * @var string <p>漏洞名称（网络攻击子类型独有）</p>
     */
    public $NetVulName;

    /**
     * @var string <p>CVE编号（网络攻击子类型独有）</p>
     */
    public $NetCVEId;

    /**
     * @var string <p>异常行为（网络攻击子类型独有）</p>
     */
    public $NetAbnormalAction;

    /**
     * @var IPIntelInfo <p>IP情报信息（为空时不返回）</p>
     */
    public $IPIntel;

    /**
     * @var string <p>多行为攻击规则类型分类: sequence/threshold/command</p>
     */
    public $MultiBehaviorDetectionMode;

    /**
     * @var string <p>告警来源描述（按子类型派生，描述哪个引擎/规则检出）</p>
     */
    public $SourceDesc;

    /**
     * @var string <p>处理时间参数格式：2026-05-26 19:45:48</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>情报富化结果来源（标识本次详情是否成功命中外部情报）；取值 &quot;VDC&quot; / &quot;IPAnalysis&quot; / &quot;BreakingTI&quot; / 空串</p>
     */
    public $IntelSource;

    /**
     * @var string <p>综合研判，中英文已翻译，中：恶意/安全/未知；英：Malicious/Safe/Unknown</p>
     */
    public $Verdict;

    /**
     * @var string <p>研判依据</p>
     */
    public $VerdictBasis;

    /**
     * @var string <p>病毒名称</p>
     */
    public $VirusName;

    /**
     * @var string <p>病毒家族</p>
     */
    public $VirusFamily;

    /**
     * @var string <p>NetResponsePayload 响应数据包（base64 编码后的字符串）</p>
     */
    public $NetResponsePayload;

    /**
     * @var string <p>服务进程信息（base64 编码后的 JSON 字符串）</p>
     */
    public $NetSvcPs;

    /**
     * @param integer $Id <p>主键ID</p>
     * @param integer $AppId <p>租户ID</p>
     * @param string $AlertId <p>告警唯一标识</p>
     * @param string $AlertCategory <p>告警大类（英文枚举：VIRUS_TROJAN/ABNORMAL_LOGIN/HOST_BEHAVIOR/NETWORK_BEHAVIOR/LINK_ENGINE）</p>
     * @param string $AlertSubType <p>告警子类型（英文枚举：MALWARE_FILE/MALWARE_PROCESS/RISK_LOGIN/BRUTE_FORCE/DNS/BASH/PRIV_ESCALATION/REVERSE_SHELL/NET_ATTACK/VUL_DEFENCE/MEMORY_SHELL_INJECT/MEMORY_SHELL_SCAN/MULTI_BEHAVIOR_ATTACK）</p>
     * @param string $RuleId <p>关联规则ID</p>
     * @param integer $RuleType <p>规则类型: 0-系统规则 1-用户自定义</p>
     * @param string $Level <p>告警等级（英文枚举：CRITICAL/HIGH/MEDIUM/LOW/INFO）</p>
     * @param string $Status <p>处理状态（英文枚举：PENDING/PROCESSED/WHITELISTED/ISOLATED/CLEANED/IGNORED/ISOLATING/RESTORING/BLOCKED/DELETED）</p>
     * @param string $AttackStage <p>ATT&amp;CK攻击阶段</p>
     * @param string $DetectMode <p>检测模式（英文枚举：PRECISE/BALANCED/DEEP）</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Quuid <p>主机UUID</p>
     * @param integer $EventCount <p>聚合事件数</p>
     * @param integer $IsProVersion <p>是否付费版</p>
     * @param string $AlertSource <p>告警来源（英文枚举：HOST/CONTAINER/K8S/CSIP）</p>
     * @param string $ImageId <p>容器镜像ID（保留字段，恒为空串）</p>
     * @param string $ContainerId <p>容器ID（保留字段，恒为空串）</p>
     * @param string $ClusterId <p>集群ID（保留字段，恒为空串）</p>
     * @param string $FirstDetectTime <p>首次发现时间</p>
     * @param string $LatestDetectTime <p>最近发现时间</p>
     * @param string $RuleName <p>规则名称（规则富化）</p>
     * @param string $ContentType <p>内容类型: md5/cmdline/dns/ip_inbound/ip_outbound/custom_file/process_network</p>
     * @param string $InstanceName <p>实例名（资产富化）</p>
     * @param string $PublicIp <p>公网IP（资产富化）</p>
     * @param string $PrivateIp <p>内网IP（资产富化）</p>
     * @param string $Content <p>告警详情JSON字符串（前端通过JSON.parse解析，空值为&quot;{}&quot;）</p>
     * @param string $AlertName <p>告警名称（子类型中英文名）</p>
     * @param array $CSIPTags <p>安全中心标签</p>
     * @param string $HarmDesc <p>危害描述（统一字段，合并原各子类型独立字段）</p>
     * @param string $SuggestScheme <p>修复建议（统一字段）</p>
     * @param string $HarmDescSource <p>数据来源: vuldb/vdc/intel/default</p>
     * @param array $ThreatTags <p>统一威胁情报标签（按子类型路由不同情报源）</p>
     * @param string $BashCmdDecoded <p>Base64解码后的命令（高危命令子类型独有）</p>
     * @param string $NetVulName <p>漏洞名称（网络攻击子类型独有）</p>
     * @param string $NetCVEId <p>CVE编号（网络攻击子类型独有）</p>
     * @param string $NetAbnormalAction <p>异常行为（网络攻击子类型独有）</p>
     * @param IPIntelInfo $IPIntel <p>IP情报信息（为空时不返回）</p>
     * @param string $MultiBehaviorDetectionMode <p>多行为攻击规则类型分类: sequence/threshold/command</p>
     * @param string $SourceDesc <p>告警来源描述（按子类型派生，描述哪个引擎/规则检出）</p>
     * @param string $ModifyTime <p>处理时间参数格式：2026-05-26 19:45:48</p>
     * @param string $IntelSource <p>情报富化结果来源（标识本次详情是否成功命中外部情报）；取值 &quot;VDC&quot; / &quot;IPAnalysis&quot; / &quot;BreakingTI&quot; / 空串</p>
     * @param string $Verdict <p>综合研判，中英文已翻译，中：恶意/安全/未知；英：Malicious/Safe/Unknown</p>
     * @param string $VerdictBasis <p>研判依据</p>
     * @param string $VirusName <p>病毒名称</p>
     * @param string $VirusFamily <p>病毒家族</p>
     * @param string $NetResponsePayload <p>NetResponsePayload 响应数据包（base64 编码后的字符串）</p>
     * @param string $NetSvcPs <p>服务进程信息（base64 编码后的 JSON 字符串）</p>
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }

        if (array_key_exists("AlertCategory",$param) and $param["AlertCategory"] !== null) {
            $this->AlertCategory = $param["AlertCategory"];
        }

        if (array_key_exists("AlertSubType",$param) and $param["AlertSubType"] !== null) {
            $this->AlertSubType = $param["AlertSubType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("AlertSource",$param) and $param["AlertSource"] !== null) {
            $this->AlertSource = $param["AlertSource"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("FirstDetectTime",$param) and $param["FirstDetectTime"] !== null) {
            $this->FirstDetectTime = $param["FirstDetectTime"];
        }

        if (array_key_exists("LatestDetectTime",$param) and $param["LatestDetectTime"] !== null) {
            $this->LatestDetectTime = $param["LatestDetectTime"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("AlertName",$param) and $param["AlertName"] !== null) {
            $this->AlertName = $param["AlertName"];
        }

        if (array_key_exists("CSIPTags",$param) and $param["CSIPTags"] !== null) {
            $this->CSIPTags = [];
            foreach ($param["CSIPTags"] as $key => $value){
                $obj = new CSIPTag();
                $obj->deserialize($value);
                array_push($this->CSIPTags, $obj);
            }
        }

        if (array_key_exists("HarmDesc",$param) and $param["HarmDesc"] !== null) {
            $this->HarmDesc = $param["HarmDesc"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("HarmDescSource",$param) and $param["HarmDescSource"] !== null) {
            $this->HarmDescSource = $param["HarmDescSource"];
        }

        if (array_key_exists("ThreatTags",$param) and $param["ThreatTags"] !== null) {
            $this->ThreatTags = $param["ThreatTags"];
        }

        if (array_key_exists("BashCmdDecoded",$param) and $param["BashCmdDecoded"] !== null) {
            $this->BashCmdDecoded = $param["BashCmdDecoded"];
        }

        if (array_key_exists("NetVulName",$param) and $param["NetVulName"] !== null) {
            $this->NetVulName = $param["NetVulName"];
        }

        if (array_key_exists("NetCVEId",$param) and $param["NetCVEId"] !== null) {
            $this->NetCVEId = $param["NetCVEId"];
        }

        if (array_key_exists("NetAbnormalAction",$param) and $param["NetAbnormalAction"] !== null) {
            $this->NetAbnormalAction = $param["NetAbnormalAction"];
        }

        if (array_key_exists("IPIntel",$param) and $param["IPIntel"] !== null) {
            $this->IPIntel = new IPIntelInfo();
            $this->IPIntel->deserialize($param["IPIntel"]);
        }

        if (array_key_exists("MultiBehaviorDetectionMode",$param) and $param["MultiBehaviorDetectionMode"] !== null) {
            $this->MultiBehaviorDetectionMode = $param["MultiBehaviorDetectionMode"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IntelSource",$param) and $param["IntelSource"] !== null) {
            $this->IntelSource = $param["IntelSource"];
        }

        if (array_key_exists("Verdict",$param) and $param["Verdict"] !== null) {
            $this->Verdict = $param["Verdict"];
        }

        if (array_key_exists("VerdictBasis",$param) and $param["VerdictBasis"] !== null) {
            $this->VerdictBasis = $param["VerdictBasis"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("VirusFamily",$param) and $param["VirusFamily"] !== null) {
            $this->VirusFamily = $param["VirusFamily"];
        }

        if (array_key_exists("NetResponsePayload",$param) and $param["NetResponsePayload"] !== null) {
            $this->NetResponsePayload = $param["NetResponsePayload"];
        }

        if (array_key_exists("NetSvcPs",$param) and $param["NetSvcPs"] !== null) {
            $this->NetSvcPs = $param["NetSvcPs"];
        }
    }
}
