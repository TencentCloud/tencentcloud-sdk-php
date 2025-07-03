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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警下拉字段
 *
 * @method RelatedEvent getRelateEvent() 获取相关攻击事件
 * @method void setRelateEvent(RelatedEvent $RelateEvent) 设置相关攻击事件
 * @method string getLeakContent() 获取泄漏内容
 * @method void setLeakContent(string $LeakContent) 设置泄漏内容
 * @method string getLeakAPI() 获取泄漏API
 * @method void setLeakAPI(string $LeakAPI) 设置泄漏API
 * @method string getSecretID() 获取secretID
 * @method void setSecretID(string $SecretID) 设置secretID
 * @method string getRule() 获取命中规则
 * @method void setRule(string $Rule) 设置命中规则
 * @method string getRuleDesc() 获取规则描述
 * @method void setRuleDesc(string $RuleDesc) 设置规则描述
 * @method string getProtocolPort() 获取协议端口
 * @method void setProtocolPort(string $ProtocolPort) 设置协议端口
 * @method string getAttackContent() 获取攻击内容
 * @method void setAttackContent(string $AttackContent) 设置攻击内容
 * @method string getAttackIPProfile() 获取攻击IP画像
 * @method void setAttackIPProfile(string $AttackIPProfile) 设置攻击IP画像
 * @method string getAttackIPTags() 获取攻击IP标签
 * @method void setAttackIPTags(string $AttackIPTags) 设置攻击IP标签
 * @method string getRequestMethod() 获取请求方式
 * @method void setRequestMethod(string $RequestMethod) 设置请求方式
 * @method string getHttpLog() 获取HTTP日志
 * @method void setHttpLog(string $HttpLog) 设置HTTP日志
 * @method string getAttackDomain() 获取被攻击域名
 * @method void setAttackDomain(string $AttackDomain) 设置被攻击域名
 * @method string getFilePath() 获取文件路径
 * @method void setFilePath(string $FilePath) 设置文件路径
 * @method string getUserAgent() 获取user_agent
 * @method void setUserAgent(string $UserAgent) 设置user_agent
 * @method string getRequestHeaders() 获取请求头
 * @method void setRequestHeaders(string $RequestHeaders) 设置请求头
 * @method string getLoginUserName() 获取登录用户名
 * @method void setLoginUserName(string $LoginUserName) 设置登录用户名
 * @method string getVulnerabilityName() 获取漏洞名称
 * @method void setVulnerabilityName(string $VulnerabilityName) 设置漏洞名称
 * @method string getCVE() 获取公共漏洞和暴露
 * @method void setCVE(string $CVE) 设置公共漏洞和暴露
 * @method string getServiceProcess() 获取服务进程
 * @method void setServiceProcess(string $ServiceProcess) 设置服务进程
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getFileSize() 获取文件大小
 * @method void setFileSize(string $FileSize) 设置文件大小
 * @method string getFileMD5() 获取文件MD5
 * @method void setFileMD5(string $FileMD5) 设置文件MD5
 * @method string getFileLastAccessTime() 获取文件最近访问时间
 * @method void setFileLastAccessTime(string $FileLastAccessTime) 设置文件最近访问时间
 * @method string getFileModifyTime() 获取文件修改时间
 * @method void setFileModifyTime(string $FileModifyTime) 设置文件修改时间
 * @method string getRecentAccessTime() 获取最近访问时间
 * @method void setRecentAccessTime(string $RecentAccessTime) 设置最近访问时间
 * @method string getRecentModifyTime() 获取最近修改时间
 * @method void setRecentModifyTime(string $RecentModifyTime) 设置最近修改时间
 * @method string getVirusName() 获取病毒名
 * @method void setVirusName(string $VirusName) 设置病毒名
 * @method string getVirusFileTags() 获取病毒文件标签
 * @method void setVirusFileTags(string $VirusFileTags) 设置病毒文件标签
 * @method string getBehavioralCharacteristics() 获取行为特征
 * @method void setBehavioralCharacteristics(string $BehavioralCharacteristics) 设置行为特征
 * @method string getProcessNamePID() 获取进程名（PID）
 * @method void setProcessNamePID(string $ProcessNamePID) 设置进程名（PID）
 * @method string getProcessPath() 获取进程路径
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
 * @method string getProcessCommandLine() 获取进程命令行
 * @method void setProcessCommandLine(string $ProcessCommandLine) 设置进程命令行
 * @method string getProcessPermissions() 获取进程权限
 * @method void setProcessPermissions(string $ProcessPermissions) 设置进程权限
 * @method string getExecutedCommand() 获取执行命令
 * @method void setExecutedCommand(string $ExecutedCommand) 设置执行命令
 * @method string getAffectedFileName() 获取受影响文件名
 * @method void setAffectedFileName(string $AffectedFileName) 设置受影响文件名
 * @method string getDecoyPath() 获取诱饵路径
 * @method void setDecoyPath(string $DecoyPath) 设置诱饵路径
 * @method string getMaliciousProcessFileSize() 获取恶意进程文件大小
 * @method void setMaliciousProcessFileSize(string $MaliciousProcessFileSize) 设置恶意进程文件大小
 * @method string getMaliciousProcessFileMD5() 获取恶意进程文件MD5
 * @method void setMaliciousProcessFileMD5(string $MaliciousProcessFileMD5) 设置恶意进程文件MD5
 * @method string getMaliciousProcessNamePID() 获取恶意进程名（PID）
 * @method void setMaliciousProcessNamePID(string $MaliciousProcessNamePID) 设置恶意进程名（PID）
 * @method string getMaliciousProcessPath() 获取恶意进程路径
 * @method void setMaliciousProcessPath(string $MaliciousProcessPath) 设置恶意进程路径
 * @method string getMaliciousProcessStartTime() 获取恶意进程启动时间
 * @method void setMaliciousProcessStartTime(string $MaliciousProcessStartTime) 设置恶意进程启动时间
 * @method string getCommandContent() 获取命令内容
 * @method void setCommandContent(string $CommandContent) 设置命令内容
 * @method string getStartupUser() 获取启动用户
 * @method void setStartupUser(string $StartupUser) 设置启动用户
 * @method string getUserGroup() 获取用户所属组
 * @method void setUserGroup(string $UserGroup) 设置用户所属组
 * @method string getNewPermissions() 获取新增权限
 * @method void setNewPermissions(string $NewPermissions) 设置新增权限
 * @method string getParentProcess() 获取父进程
 * @method void setParentProcess(string $ParentProcess) 设置父进程
 * @method string getClassName() 获取类名
 * @method void setClassName(string $ClassName) 设置类名
 * @method string getClassLoader() 获取所属类加载器
 * @method void setClassLoader(string $ClassLoader) 设置所属类加载器
 * @method string getClassFileSize() 获取类文件大小
 * @method void setClassFileSize(string $ClassFileSize) 设置类文件大小
 * @method string getClassFileMD5() 获取类文件MD5
 * @method void setClassFileMD5(string $ClassFileMD5) 设置类文件MD5
 * @method string getParentClassName() 获取父类名
 * @method void setParentClassName(string $ParentClassName) 设置父类名
 * @method string getInheritedInterface() 获取继承接口
 * @method void setInheritedInterface(string $InheritedInterface) 设置继承接口
 * @method string getComment() 获取注释
 * @method void setComment(string $Comment) 设置注释
 * @method string getPayloadContent() 获取载荷内容
 * @method void setPayloadContent(string $PayloadContent) 设置载荷内容
 * @method string getCallbackAddressPortrait() 获取回连地址画像
 * @method void setCallbackAddressPortrait(string $CallbackAddressPortrait) 设置回连地址画像
 * @method string getCallbackAddressTag() 获取回连地址标签
 * @method void setCallbackAddressTag(string $CallbackAddressTag) 设置回连地址标签
 * @method string getProcessMD5() 获取进程MD5
 * @method void setProcessMD5(string $ProcessMD5) 设置进程MD5
 * @method string getFilePermission() 获取文件权限
 * @method void setFilePermission(string $FilePermission) 设置文件权限
 * @method array getFromLogAnalysisData() 获取来源于日志分析的信息字段
 * @method void setFromLogAnalysisData(array $FromLogAnalysisData) 设置来源于日志分析的信息字段
 * @method string getHitProbe() 获取命中探针
 * @method void setHitProbe(string $HitProbe) 设置命中探针
 * @method string getHitHoneyPot() 获取命中蜜罐

 * @method void setHitHoneyPot(string $HitHoneyPot) 设置命中蜜罐

 * @method string getCommandList() 获取命令列表
 * @method void setCommandList(string $CommandList) 设置命令列表
 * @method string getAttackEventDesc() 获取攻击事件描述

 * @method void setAttackEventDesc(string $AttackEventDesc) 设置攻击事件描述

 * @method string getProcessInfo() 获取进程信息
 * @method void setProcessInfo(string $ProcessInfo) 设置进程信息
 * @method string getUserNameAndPwd() 获取使用用户名&密码
 * @method void setUserNameAndPwd(string $UserNameAndPwd) 设置使用用户名&密码
 * @method string getStrategyID() 获取主机防护策略ID
 * @method void setStrategyID(string $StrategyID) 设置主机防护策略ID
 * @method string getStrategyName() 获取主机防护策略名称
 * @method void setStrategyName(string $StrategyName) 设置主机防护策略名称
 * @method string getHitStrategy() 获取主机防护命中策略，是策略ID和策略名称的组合
 * @method void setHitStrategy(string $HitStrategy) 设置主机防护命中策略，是策略ID和策略名称的组合
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method string getPID() 获取PID
 * @method void setPID(string $PID) 设置PID
 * @method string getPodName() 获取容器Pod名
 * @method void setPodName(string $PodName) 设置容器Pod名
 * @method string getPodID() 获取容器PodID
 * @method void setPodID(string $PodID) 设置容器PodID
 * @method string getResponse() 获取Http响应
 * @method void setResponse(string $Response) 设置Http响应
 * @method string getSystemCall() 获取系统调用
 * @method void setSystemCall(string $SystemCall) 设置系统调用
 * @method string getVerb() 获取操作类型verb
 * @method void setVerb(string $Verb) 设置操作类型verb
 * @method string getLogID() 获取日志ID
 * @method void setLogID(string $LogID) 设置日志ID
 * @method string getDifferent() 获取变更内容
 * @method void setDifferent(string $Different) 设置变更内容
 * @method string getEventType() 获取事件类型
 * @method void setEventType(string $EventType) 设置事件类型
 * @method string getDescription() 获取事件描述
 * @method void setDescription(string $Description) 设置事件描述
 * @method string getTargetAddress() 获取目标地址(容器反弹shell)
 * @method void setTargetAddress(string $TargetAddress) 设置目标地址(容器反弹shell)
 * @method string getMaliciousRequestDomain() 获取恶意请求域名(容器恶意外联)
 * @method void setMaliciousRequestDomain(string $MaliciousRequestDomain) 设置恶意请求域名(容器恶意外联)
 * @method string getRuleType() 获取规则类型(容器K8sAPI异常请求)
 * @method void setRuleType(string $RuleType) 设置规则类型(容器K8sAPI异常请求)
 * @method string getRequestURI() 获取请求资源(容器K8sAPI异常请求)
 * @method void setRequestURI(string $RequestURI) 设置请求资源(容器K8sAPI异常请求)
 * @method string getRequestUser() 获取发起请求用户(容器K8sAPI异常请求)
 * @method void setRequestUser(string $RequestUser) 设置发起请求用户(容器K8sAPI异常请求)
 * @method string getRequestObject() 获取请求对象(容器K8sAPI异常请求)
 * @method void setRequestObject(string $RequestObject) 设置请求对象(容器K8sAPI异常请求)
 * @method string getResponseObject() 获取响应对象(容器K8sAPI异常请求)
 * @method void setResponseObject(string $ResponseObject) 设置响应对象(容器K8sAPI异常请求)
 * @method string getFileType() 获取文件类型(容器文件篡改)
 * @method void setFileType(string $FileType) 设置文件类型(容器文件篡改)
 * @method string getTIType() 获取标签特征(容器恶意外联)
 * @method void setTIType(string $TIType) 设置标签特征(容器恶意外联)
 * @method string getSourceIP() 获取来源IP(容器K8sAPI异常请求)
 * @method void setSourceIP(string $SourceIP) 设置来源IP(容器K8sAPI异常请求)
 */
class AlertExtraInfo extends AbstractModel
{
    /**
     * @var RelatedEvent 相关攻击事件
     */
    public $RelateEvent;

    /**
     * @var string 泄漏内容
     */
    public $LeakContent;

    /**
     * @var string 泄漏API
     */
    public $LeakAPI;

    /**
     * @var string secretID
     */
    public $SecretID;

    /**
     * @var string 命中规则
     */
    public $Rule;

    /**
     * @var string 规则描述
     */
    public $RuleDesc;

    /**
     * @var string 协议端口
     */
    public $ProtocolPort;

    /**
     * @var string 攻击内容
     */
    public $AttackContent;

    /**
     * @var string 攻击IP画像
     */
    public $AttackIPProfile;

    /**
     * @var string 攻击IP标签
     */
    public $AttackIPTags;

    /**
     * @var string 请求方式
     */
    public $RequestMethod;

    /**
     * @var string HTTP日志
     */
    public $HttpLog;

    /**
     * @var string 被攻击域名
     */
    public $AttackDomain;

    /**
     * @var string 文件路径
     */
    public $FilePath;

    /**
     * @var string user_agent
     */
    public $UserAgent;

    /**
     * @var string 请求头
     */
    public $RequestHeaders;

    /**
     * @var string 登录用户名
     */
    public $LoginUserName;

    /**
     * @var string 漏洞名称
     */
    public $VulnerabilityName;

    /**
     * @var string 公共漏洞和暴露
     */
    public $CVE;

    /**
     * @var string 服务进程
     */
    public $ServiceProcess;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 文件大小
     */
    public $FileSize;

    /**
     * @var string 文件MD5
     */
    public $FileMD5;

    /**
     * @var string 文件最近访问时间
     */
    public $FileLastAccessTime;

    /**
     * @var string 文件修改时间
     */
    public $FileModifyTime;

    /**
     * @var string 最近访问时间
     */
    public $RecentAccessTime;

    /**
     * @var string 最近修改时间
     */
    public $RecentModifyTime;

    /**
     * @var string 病毒名
     */
    public $VirusName;

    /**
     * @var string 病毒文件标签
     */
    public $VirusFileTags;

    /**
     * @var string 行为特征
     */
    public $BehavioralCharacteristics;

    /**
     * @var string 进程名（PID）
     */
    public $ProcessNamePID;

    /**
     * @var string 进程路径
     */
    public $ProcessPath;

    /**
     * @var string 进程命令行
     */
    public $ProcessCommandLine;

    /**
     * @var string 进程权限
     */
    public $ProcessPermissions;

    /**
     * @var string 执行命令
     */
    public $ExecutedCommand;

    /**
     * @var string 受影响文件名
     */
    public $AffectedFileName;

    /**
     * @var string 诱饵路径
     */
    public $DecoyPath;

    /**
     * @var string 恶意进程文件大小
     */
    public $MaliciousProcessFileSize;

    /**
     * @var string 恶意进程文件MD5
     */
    public $MaliciousProcessFileMD5;

    /**
     * @var string 恶意进程名（PID）
     */
    public $MaliciousProcessNamePID;

    /**
     * @var string 恶意进程路径
     */
    public $MaliciousProcessPath;

    /**
     * @var string 恶意进程启动时间
     */
    public $MaliciousProcessStartTime;

    /**
     * @var string 命令内容
     */
    public $CommandContent;

    /**
     * @var string 启动用户
     */
    public $StartupUser;

    /**
     * @var string 用户所属组
     */
    public $UserGroup;

    /**
     * @var string 新增权限
     */
    public $NewPermissions;

    /**
     * @var string 父进程
     */
    public $ParentProcess;

    /**
     * @var string 类名
     */
    public $ClassName;

    /**
     * @var string 所属类加载器
     */
    public $ClassLoader;

    /**
     * @var string 类文件大小
     */
    public $ClassFileSize;

    /**
     * @var string 类文件MD5
     */
    public $ClassFileMD5;

    /**
     * @var string 父类名
     */
    public $ParentClassName;

    /**
     * @var string 继承接口
     */
    public $InheritedInterface;

    /**
     * @var string 注释
     */
    public $Comment;

    /**
     * @var string 载荷内容
     */
    public $PayloadContent;

    /**
     * @var string 回连地址画像
     */
    public $CallbackAddressPortrait;

    /**
     * @var string 回连地址标签
     */
    public $CallbackAddressTag;

    /**
     * @var string 进程MD5
     */
    public $ProcessMD5;

    /**
     * @var string 文件权限
     */
    public $FilePermission;

    /**
     * @var array 来源于日志分析的信息字段
     */
    public $FromLogAnalysisData;

    /**
     * @var string 命中探针
     */
    public $HitProbe;

    /**
     * @var string 命中蜜罐

     */
    public $HitHoneyPot;

    /**
     * @var string 命令列表
     */
    public $CommandList;

    /**
     * @var string 攻击事件描述

     */
    public $AttackEventDesc;

    /**
     * @var string 进程信息
     */
    public $ProcessInfo;

    /**
     * @var string 使用用户名&密码
     */
    public $UserNameAndPwd;

    /**
     * @var string 主机防护策略ID
     */
    public $StrategyID;

    /**
     * @var string 主机防护策略名称
     */
    public $StrategyName;

    /**
     * @var string 主机防护命中策略，是策略ID和策略名称的组合
     */
    public $HitStrategy;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var string PID
     */
    public $PID;

    /**
     * @var string 容器Pod名
     */
    public $PodName;

    /**
     * @var string 容器PodID
     */
    public $PodID;

    /**
     * @var string Http响应
     */
    public $Response;

    /**
     * @var string 系统调用
     */
    public $SystemCall;

    /**
     * @var string 操作类型verb
     */
    public $Verb;

    /**
     * @var string 日志ID
     */
    public $LogID;

    /**
     * @var string 变更内容
     */
    public $Different;

    /**
     * @var string 事件类型
     */
    public $EventType;

    /**
     * @var string 事件描述
     */
    public $Description;

    /**
     * @var string 目标地址(容器反弹shell)
     */
    public $TargetAddress;

    /**
     * @var string 恶意请求域名(容器恶意外联)
     */
    public $MaliciousRequestDomain;

    /**
     * @var string 规则类型(容器K8sAPI异常请求)
     */
    public $RuleType;

    /**
     * @var string 请求资源(容器K8sAPI异常请求)
     */
    public $RequestURI;

    /**
     * @var string 发起请求用户(容器K8sAPI异常请求)
     */
    public $RequestUser;

    /**
     * @var string 请求对象(容器K8sAPI异常请求)
     */
    public $RequestObject;

    /**
     * @var string 响应对象(容器K8sAPI异常请求)
     */
    public $ResponseObject;

    /**
     * @var string 文件类型(容器文件篡改)
     */
    public $FileType;

    /**
     * @var string 标签特征(容器恶意外联)
     */
    public $TIType;

    /**
     * @var string 来源IP(容器K8sAPI异常请求)
     */
    public $SourceIP;

    /**
     * @param RelatedEvent $RelateEvent 相关攻击事件
     * @param string $LeakContent 泄漏内容
     * @param string $LeakAPI 泄漏API
     * @param string $SecretID secretID
     * @param string $Rule 命中规则
     * @param string $RuleDesc 规则描述
     * @param string $ProtocolPort 协议端口
     * @param string $AttackContent 攻击内容
     * @param string $AttackIPProfile 攻击IP画像
     * @param string $AttackIPTags 攻击IP标签
     * @param string $RequestMethod 请求方式
     * @param string $HttpLog HTTP日志
     * @param string $AttackDomain 被攻击域名
     * @param string $FilePath 文件路径
     * @param string $UserAgent user_agent
     * @param string $RequestHeaders 请求头
     * @param string $LoginUserName 登录用户名
     * @param string $VulnerabilityName 漏洞名称
     * @param string $CVE 公共漏洞和暴露
     * @param string $ServiceProcess 服务进程
     * @param string $FileName 文件名
     * @param string $FileSize 文件大小
     * @param string $FileMD5 文件MD5
     * @param string $FileLastAccessTime 文件最近访问时间
     * @param string $FileModifyTime 文件修改时间
     * @param string $RecentAccessTime 最近访问时间
     * @param string $RecentModifyTime 最近修改时间
     * @param string $VirusName 病毒名
     * @param string $VirusFileTags 病毒文件标签
     * @param string $BehavioralCharacteristics 行为特征
     * @param string $ProcessNamePID 进程名（PID）
     * @param string $ProcessPath 进程路径
     * @param string $ProcessCommandLine 进程命令行
     * @param string $ProcessPermissions 进程权限
     * @param string $ExecutedCommand 执行命令
     * @param string $AffectedFileName 受影响文件名
     * @param string $DecoyPath 诱饵路径
     * @param string $MaliciousProcessFileSize 恶意进程文件大小
     * @param string $MaliciousProcessFileMD5 恶意进程文件MD5
     * @param string $MaliciousProcessNamePID 恶意进程名（PID）
     * @param string $MaliciousProcessPath 恶意进程路径
     * @param string $MaliciousProcessStartTime 恶意进程启动时间
     * @param string $CommandContent 命令内容
     * @param string $StartupUser 启动用户
     * @param string $UserGroup 用户所属组
     * @param string $NewPermissions 新增权限
     * @param string $ParentProcess 父进程
     * @param string $ClassName 类名
     * @param string $ClassLoader 所属类加载器
     * @param string $ClassFileSize 类文件大小
     * @param string $ClassFileMD5 类文件MD5
     * @param string $ParentClassName 父类名
     * @param string $InheritedInterface 继承接口
     * @param string $Comment 注释
     * @param string $PayloadContent 载荷内容
     * @param string $CallbackAddressPortrait 回连地址画像
     * @param string $CallbackAddressTag 回连地址标签
     * @param string $ProcessMD5 进程MD5
     * @param string $FilePermission 文件权限
     * @param array $FromLogAnalysisData 来源于日志分析的信息字段
     * @param string $HitProbe 命中探针
     * @param string $HitHoneyPot 命中蜜罐

     * @param string $CommandList 命令列表
     * @param string $AttackEventDesc 攻击事件描述

     * @param string $ProcessInfo 进程信息
     * @param string $UserNameAndPwd 使用用户名&密码
     * @param string $StrategyID 主机防护策略ID
     * @param string $StrategyName 主机防护策略名称
     * @param string $HitStrategy 主机防护命中策略，是策略ID和策略名称的组合
     * @param string $ProcessName 进程名
     * @param string $PID PID
     * @param string $PodName 容器Pod名
     * @param string $PodID 容器PodID
     * @param string $Response Http响应
     * @param string $SystemCall 系统调用
     * @param string $Verb 操作类型verb
     * @param string $LogID 日志ID
     * @param string $Different 变更内容
     * @param string $EventType 事件类型
     * @param string $Description 事件描述
     * @param string $TargetAddress 目标地址(容器反弹shell)
     * @param string $MaliciousRequestDomain 恶意请求域名(容器恶意外联)
     * @param string $RuleType 规则类型(容器K8sAPI异常请求)
     * @param string $RequestURI 请求资源(容器K8sAPI异常请求)
     * @param string $RequestUser 发起请求用户(容器K8sAPI异常请求)
     * @param string $RequestObject 请求对象(容器K8sAPI异常请求)
     * @param string $ResponseObject 响应对象(容器K8sAPI异常请求)
     * @param string $FileType 文件类型(容器文件篡改)
     * @param string $TIType 标签特征(容器恶意外联)
     * @param string $SourceIP 来源IP(容器K8sAPI异常请求)
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
        if (array_key_exists("RelateEvent",$param) and $param["RelateEvent"] !== null) {
            $this->RelateEvent = new RelatedEvent();
            $this->RelateEvent->deserialize($param["RelateEvent"]);
        }

        if (array_key_exists("LeakContent",$param) and $param["LeakContent"] !== null) {
            $this->LeakContent = $param["LeakContent"];
        }

        if (array_key_exists("LeakAPI",$param) and $param["LeakAPI"] !== null) {
            $this->LeakAPI = $param["LeakAPI"];
        }

        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("ProtocolPort",$param) and $param["ProtocolPort"] !== null) {
            $this->ProtocolPort = $param["ProtocolPort"];
        }

        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
        }

        if (array_key_exists("AttackIPProfile",$param) and $param["AttackIPProfile"] !== null) {
            $this->AttackIPProfile = $param["AttackIPProfile"];
        }

        if (array_key_exists("AttackIPTags",$param) and $param["AttackIPTags"] !== null) {
            $this->AttackIPTags = $param["AttackIPTags"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
        }

        if (array_key_exists("HttpLog",$param) and $param["HttpLog"] !== null) {
            $this->HttpLog = $param["HttpLog"];
        }

        if (array_key_exists("AttackDomain",$param) and $param["AttackDomain"] !== null) {
            $this->AttackDomain = $param["AttackDomain"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("RequestHeaders",$param) and $param["RequestHeaders"] !== null) {
            $this->RequestHeaders = $param["RequestHeaders"];
        }

        if (array_key_exists("LoginUserName",$param) and $param["LoginUserName"] !== null) {
            $this->LoginUserName = $param["LoginUserName"];
        }

        if (array_key_exists("VulnerabilityName",$param) and $param["VulnerabilityName"] !== null) {
            $this->VulnerabilityName = $param["VulnerabilityName"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("ServiceProcess",$param) and $param["ServiceProcess"] !== null) {
            $this->ServiceProcess = $param["ServiceProcess"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileMD5",$param) and $param["FileMD5"] !== null) {
            $this->FileMD5 = $param["FileMD5"];
        }

        if (array_key_exists("FileLastAccessTime",$param) and $param["FileLastAccessTime"] !== null) {
            $this->FileLastAccessTime = $param["FileLastAccessTime"];
        }

        if (array_key_exists("FileModifyTime",$param) and $param["FileModifyTime"] !== null) {
            $this->FileModifyTime = $param["FileModifyTime"];
        }

        if (array_key_exists("RecentAccessTime",$param) and $param["RecentAccessTime"] !== null) {
            $this->RecentAccessTime = $param["RecentAccessTime"];
        }

        if (array_key_exists("RecentModifyTime",$param) and $param["RecentModifyTime"] !== null) {
            $this->RecentModifyTime = $param["RecentModifyTime"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("VirusFileTags",$param) and $param["VirusFileTags"] !== null) {
            $this->VirusFileTags = $param["VirusFileTags"];
        }

        if (array_key_exists("BehavioralCharacteristics",$param) and $param["BehavioralCharacteristics"] !== null) {
            $this->BehavioralCharacteristics = $param["BehavioralCharacteristics"];
        }

        if (array_key_exists("ProcessNamePID",$param) and $param["ProcessNamePID"] !== null) {
            $this->ProcessNamePID = $param["ProcessNamePID"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("ProcessCommandLine",$param) and $param["ProcessCommandLine"] !== null) {
            $this->ProcessCommandLine = $param["ProcessCommandLine"];
        }

        if (array_key_exists("ProcessPermissions",$param) and $param["ProcessPermissions"] !== null) {
            $this->ProcessPermissions = $param["ProcessPermissions"];
        }

        if (array_key_exists("ExecutedCommand",$param) and $param["ExecutedCommand"] !== null) {
            $this->ExecutedCommand = $param["ExecutedCommand"];
        }

        if (array_key_exists("AffectedFileName",$param) and $param["AffectedFileName"] !== null) {
            $this->AffectedFileName = $param["AffectedFileName"];
        }

        if (array_key_exists("DecoyPath",$param) and $param["DecoyPath"] !== null) {
            $this->DecoyPath = $param["DecoyPath"];
        }

        if (array_key_exists("MaliciousProcessFileSize",$param) and $param["MaliciousProcessFileSize"] !== null) {
            $this->MaliciousProcessFileSize = $param["MaliciousProcessFileSize"];
        }

        if (array_key_exists("MaliciousProcessFileMD5",$param) and $param["MaliciousProcessFileMD5"] !== null) {
            $this->MaliciousProcessFileMD5 = $param["MaliciousProcessFileMD5"];
        }

        if (array_key_exists("MaliciousProcessNamePID",$param) and $param["MaliciousProcessNamePID"] !== null) {
            $this->MaliciousProcessNamePID = $param["MaliciousProcessNamePID"];
        }

        if (array_key_exists("MaliciousProcessPath",$param) and $param["MaliciousProcessPath"] !== null) {
            $this->MaliciousProcessPath = $param["MaliciousProcessPath"];
        }

        if (array_key_exists("MaliciousProcessStartTime",$param) and $param["MaliciousProcessStartTime"] !== null) {
            $this->MaliciousProcessStartTime = $param["MaliciousProcessStartTime"];
        }

        if (array_key_exists("CommandContent",$param) and $param["CommandContent"] !== null) {
            $this->CommandContent = $param["CommandContent"];
        }

        if (array_key_exists("StartupUser",$param) and $param["StartupUser"] !== null) {
            $this->StartupUser = $param["StartupUser"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("NewPermissions",$param) and $param["NewPermissions"] !== null) {
            $this->NewPermissions = $param["NewPermissions"];
        }

        if (array_key_exists("ParentProcess",$param) and $param["ParentProcess"] !== null) {
            $this->ParentProcess = $param["ParentProcess"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("ClassLoader",$param) and $param["ClassLoader"] !== null) {
            $this->ClassLoader = $param["ClassLoader"];
        }

        if (array_key_exists("ClassFileSize",$param) and $param["ClassFileSize"] !== null) {
            $this->ClassFileSize = $param["ClassFileSize"];
        }

        if (array_key_exists("ClassFileMD5",$param) and $param["ClassFileMD5"] !== null) {
            $this->ClassFileMD5 = $param["ClassFileMD5"];
        }

        if (array_key_exists("ParentClassName",$param) and $param["ParentClassName"] !== null) {
            $this->ParentClassName = $param["ParentClassName"];
        }

        if (array_key_exists("InheritedInterface",$param) and $param["InheritedInterface"] !== null) {
            $this->InheritedInterface = $param["InheritedInterface"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PayloadContent",$param) and $param["PayloadContent"] !== null) {
            $this->PayloadContent = $param["PayloadContent"];
        }

        if (array_key_exists("CallbackAddressPortrait",$param) and $param["CallbackAddressPortrait"] !== null) {
            $this->CallbackAddressPortrait = $param["CallbackAddressPortrait"];
        }

        if (array_key_exists("CallbackAddressTag",$param) and $param["CallbackAddressTag"] !== null) {
            $this->CallbackAddressTag = $param["CallbackAddressTag"];
        }

        if (array_key_exists("ProcessMD5",$param) and $param["ProcessMD5"] !== null) {
            $this->ProcessMD5 = $param["ProcessMD5"];
        }

        if (array_key_exists("FilePermission",$param) and $param["FilePermission"] !== null) {
            $this->FilePermission = $param["FilePermission"];
        }

        if (array_key_exists("FromLogAnalysisData",$param) and $param["FromLogAnalysisData"] !== null) {
            $this->FromLogAnalysisData = [];
            foreach ($param["FromLogAnalysisData"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->FromLogAnalysisData, $obj);
            }
        }

        if (array_key_exists("HitProbe",$param) and $param["HitProbe"] !== null) {
            $this->HitProbe = $param["HitProbe"];
        }

        if (array_key_exists("HitHoneyPot",$param) and $param["HitHoneyPot"] !== null) {
            $this->HitHoneyPot = $param["HitHoneyPot"];
        }

        if (array_key_exists("CommandList",$param) and $param["CommandList"] !== null) {
            $this->CommandList = $param["CommandList"];
        }

        if (array_key_exists("AttackEventDesc",$param) and $param["AttackEventDesc"] !== null) {
            $this->AttackEventDesc = $param["AttackEventDesc"];
        }

        if (array_key_exists("ProcessInfo",$param) and $param["ProcessInfo"] !== null) {
            $this->ProcessInfo = $param["ProcessInfo"];
        }

        if (array_key_exists("UserNameAndPwd",$param) and $param["UserNameAndPwd"] !== null) {
            $this->UserNameAndPwd = $param["UserNameAndPwd"];
        }

        if (array_key_exists("StrategyID",$param) and $param["StrategyID"] !== null) {
            $this->StrategyID = $param["StrategyID"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("HitStrategy",$param) and $param["HitStrategy"] !== null) {
            $this->HitStrategy = $param["HitStrategy"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodID",$param) and $param["PodID"] !== null) {
            $this->PodID = $param["PodID"];
        }

        if (array_key_exists("Response",$param) and $param["Response"] !== null) {
            $this->Response = $param["Response"];
        }

        if (array_key_exists("SystemCall",$param) and $param["SystemCall"] !== null) {
            $this->SystemCall = $param["SystemCall"];
        }

        if (array_key_exists("Verb",$param) and $param["Verb"] !== null) {
            $this->Verb = $param["Verb"];
        }

        if (array_key_exists("LogID",$param) and $param["LogID"] !== null) {
            $this->LogID = $param["LogID"];
        }

        if (array_key_exists("Different",$param) and $param["Different"] !== null) {
            $this->Different = $param["Different"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TargetAddress",$param) and $param["TargetAddress"] !== null) {
            $this->TargetAddress = $param["TargetAddress"];
        }

        if (array_key_exists("MaliciousRequestDomain",$param) and $param["MaliciousRequestDomain"] !== null) {
            $this->MaliciousRequestDomain = $param["MaliciousRequestDomain"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RequestURI",$param) and $param["RequestURI"] !== null) {
            $this->RequestURI = $param["RequestURI"];
        }

        if (array_key_exists("RequestUser",$param) and $param["RequestUser"] !== null) {
            $this->RequestUser = $param["RequestUser"];
        }

        if (array_key_exists("RequestObject",$param) and $param["RequestObject"] !== null) {
            $this->RequestObject = $param["RequestObject"];
        }

        if (array_key_exists("ResponseObject",$param) and $param["ResponseObject"] !== null) {
            $this->ResponseObject = $param["ResponseObject"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("TIType",$param) and $param["TIType"] !== null) {
            $this->TIType = $param["TIType"];
        }

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }
    }
}
