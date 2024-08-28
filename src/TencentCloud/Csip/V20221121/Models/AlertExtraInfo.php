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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelateEvent(RelatedEvent $RelateEvent) 设置相关攻击事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLeakContent() 获取泄漏内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeakContent(string $LeakContent) 设置泄漏内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLeakAPI() 获取泄漏API
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeakAPI(string $LeakAPI) 设置泄漏API
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretID() 获取secretID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretID(string $SecretID) 设置secretID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRule() 获取命中规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRule(string $Rule) 设置命中规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleDesc() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleDesc(string $RuleDesc) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocolPort() 获取协议端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolPort(string $ProtocolPort) 设置协议端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackContent() 获取攻击内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackContent(string $AttackContent) 设置攻击内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackIPProfile() 获取攻击IP画像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackIPProfile(string $AttackIPProfile) 设置攻击IP画像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackIPTags() 获取攻击IP标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackIPTags(string $AttackIPTags) 设置攻击IP标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestMethod() 获取请求方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestMethod(string $RequestMethod) 设置请求方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpLog() 获取HTTP日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpLog(string $HttpLog) 设置HTTP日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackDomain() 获取被攻击域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackDomain(string $AttackDomain) 设置被攻击域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilePath() 获取文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePath(string $FilePath) 设置文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAgent() 获取user_agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAgent(string $UserAgent) 设置user_agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestHeaders() 获取请求头
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestHeaders(string $RequestHeaders) 设置请求头
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoginUserName() 获取登录用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoginUserName(string $LoginUserName) 设置登录用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityName() 获取漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityName(string $VulnerabilityName) 设置漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCVE() 获取公共漏洞和暴露
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVE(string $CVE) 设置公共漏洞和暴露
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceProcess() 获取服务进程
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceProcess(string $ServiceProcess) 设置服务进程
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSize() 获取文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(string $FileSize) 设置文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMD5() 获取文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMD5(string $FileMD5) 设置文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileLastAccessTime() 获取文件最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileLastAccessTime(string $FileLastAccessTime) 设置文件最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileModifyTime() 获取文件修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileModifyTime(string $FileModifyTime) 设置文件修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecentAccessTime() 获取最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecentAccessTime(string $RecentAccessTime) 设置最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecentModifyTime() 获取最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecentModifyTime(string $RecentModifyTime) 设置最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirusName() 获取病毒名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusName(string $VirusName) 设置病毒名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirusFileTags() 获取病毒文件标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusFileTags(string $VirusFileTags) 设置病毒文件标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBehavioralCharacteristics() 获取行为特征
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBehavioralCharacteristics(string $BehavioralCharacteristics) 设置行为特征
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessNamePID() 获取进程名（PID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessNamePID(string $ProcessNamePID) 设置进程名（PID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessPath() 获取进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessCommandLine() 获取进程命令行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessCommandLine(string $ProcessCommandLine) 设置进程命令行
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessPermissions() 获取进程权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessPermissions(string $ProcessPermissions) 设置进程权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutedCommand() 获取执行命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutedCommand(string $ExecutedCommand) 设置执行命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAffectedFileName() 获取受影响文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectedFileName(string $AffectedFileName) 设置受影响文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDecoyPath() 获取诱饵路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDecoyPath(string $DecoyPath) 设置诱饵路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaliciousProcessFileSize() 获取恶意进程文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaliciousProcessFileSize(string $MaliciousProcessFileSize) 设置恶意进程文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaliciousProcessFileMD5() 获取恶意进程文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaliciousProcessFileMD5(string $MaliciousProcessFileMD5) 设置恶意进程文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaliciousProcessNamePID() 获取恶意进程名（PID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaliciousProcessNamePID(string $MaliciousProcessNamePID) 设置恶意进程名（PID）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaliciousProcessPath() 获取恶意进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaliciousProcessPath(string $MaliciousProcessPath) 设置恶意进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaliciousProcessStartTime() 获取恶意进程启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaliciousProcessStartTime(string $MaliciousProcessStartTime) 设置恶意进程启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommandContent() 获取命令内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommandContent(string $CommandContent) 设置命令内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartupUser() 获取启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupUser(string $StartupUser) 设置启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroup() 获取用户所属组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroup(string $UserGroup) 设置用户所属组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewPermissions() 获取新增权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewPermissions(string $NewPermissions) 设置新增权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentProcess() 获取父进程
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentProcess(string $ParentProcess) 设置父进程
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassName() 获取类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassName(string $ClassName) 设置类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassLoader() 获取所属类加载器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassLoader(string $ClassLoader) 设置所属类加载器
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassFileSize() 获取类文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassFileSize(string $ClassFileSize) 设置类文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassFileMD5() 获取类文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassFileMD5(string $ClassFileMD5) 设置类文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentClassName() 获取父类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentClassName(string $ParentClassName) 设置父类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInheritedInterface() 获取继承接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInheritedInterface(string $InheritedInterface) 设置继承接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayloadContent() 获取载荷内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayloadContent(string $PayloadContent) 设置载荷内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallbackAddressPortrait() 获取回连地址画像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackAddressPortrait(string $CallbackAddressPortrait) 设置回连地址画像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallbackAddressTag() 获取回连地址标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackAddressTag(string $CallbackAddressTag) 设置回连地址标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessMD5() 获取进程MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessMD5(string $ProcessMD5) 设置进程MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilePermission() 获取文件权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePermission(string $FilePermission) 设置文件权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFromLogAnalysisData() 获取来源于日志分析的信息字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromLogAnalysisData(array $FromLogAnalysisData) 设置来源于日志分析的信息字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHitProbe() 获取命中探针
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitProbe(string $HitProbe) 设置命中探针
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHitHoneyPot() 获取命中蜜罐

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitHoneyPot(string $HitHoneyPot) 设置命中蜜罐

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommandList() 获取命令列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommandList(string $CommandList) 设置命令列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackEventDesc() 获取攻击事件描述

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackEventDesc(string $AttackEventDesc) 设置攻击事件描述

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessInfo() 获取进程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessInfo(string $ProcessInfo) 设置进程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserNameAndPwd() 获取使用用户名&密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNameAndPwd(string $UserNameAndPwd) 设置使用用户名&密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyID() 获取主机防护策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyID(string $StrategyID) 设置主机防护策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyName() 获取主机防护策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置主机防护策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHitStrategy() 获取主机防护命中策略，是策略ID和策略名称的组合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitStrategy(string $HitStrategy) 设置主机防护命中策略，是策略ID和策略名称的组合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessName() 获取进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessName(string $ProcessName) 设置进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPID() 获取PID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPID(string $PID) 设置PID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取容器Pod名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置容器Pod名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodID() 获取容器PodID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodID(string $PodID) 设置容器PodID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponse() 获取Http响应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponse(string $Response) 设置Http响应
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSystemCall() 获取系统调用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemCall(string $SystemCall) 设置系统调用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerb() 获取操作类型verb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerb(string $Verb) 设置操作类型verb
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogID() 获取日志ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogID(string $LogID) 设置日志ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDifferent() 获取变更内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDifferent(string $Different) 设置变更内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventType() 获取事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType(string $EventType) 设置事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetAddress() 获取目标地址(容器反弹shell)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetAddress(string $TargetAddress) 设置目标地址(容器反弹shell)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaliciousRequestDomain() 获取恶意请求域名(容器恶意外联)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaliciousRequestDomain(string $MaliciousRequestDomain) 设置恶意请求域名(容器恶意外联)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取规则类型(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置规则类型(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestURI() 获取请求资源(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestURI(string $RequestURI) 设置请求资源(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestUser() 获取发起请求用户(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestUser(string $RequestUser) 设置发起请求用户(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestObject() 获取请求对象(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestObject(string $RequestObject) 设置请求对象(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponseObject() 获取响应对象(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseObject(string $ResponseObject) 设置响应对象(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取文件类型(容器文件篡改)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置文件类型(容器文件篡改)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTIType() 获取标签特征(容器恶意外联)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTIType(string $TIType) 设置标签特征(容器恶意外联)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceIP() 获取来源IP(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceIP(string $SourceIP) 设置来源IP(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlertExtraInfo extends AbstractModel
{
    /**
     * @var RelatedEvent 相关攻击事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelateEvent;

    /**
     * @var string 泄漏内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeakContent;

    /**
     * @var string 泄漏API
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeakAPI;

    /**
     * @var string secretID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretID;

    /**
     * @var string 命中规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rule;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleDesc;

    /**
     * @var string 协议端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolPort;

    /**
     * @var string 攻击内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackContent;

    /**
     * @var string 攻击IP画像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackIPProfile;

    /**
     * @var string 攻击IP标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackIPTags;

    /**
     * @var string 请求方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestMethod;

    /**
     * @var string HTTP日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpLog;

    /**
     * @var string 被攻击域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackDomain;

    /**
     * @var string 文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePath;

    /**
     * @var string user_agent
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAgent;

    /**
     * @var string 请求头
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestHeaders;

    /**
     * @var string 登录用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoginUserName;

    /**
     * @var string 漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulnerabilityName;

    /**
     * @var string 公共漏洞和暴露
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVE;

    /**
     * @var string 服务进程
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceProcess;

    /**
     * @var string 文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMD5;

    /**
     * @var string 文件最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileLastAccessTime;

    /**
     * @var string 文件修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileModifyTime;

    /**
     * @var string 最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecentAccessTime;

    /**
     * @var string 最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecentModifyTime;

    /**
     * @var string 病毒名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusName;

    /**
     * @var string 病毒文件标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusFileTags;

    /**
     * @var string 行为特征
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BehavioralCharacteristics;

    /**
     * @var string 进程名（PID）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessNamePID;

    /**
     * @var string 进程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessPath;

    /**
     * @var string 进程命令行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessCommandLine;

    /**
     * @var string 进程权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessPermissions;

    /**
     * @var string 执行命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutedCommand;

    /**
     * @var string 受影响文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectedFileName;

    /**
     * @var string 诱饵路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DecoyPath;

    /**
     * @var string 恶意进程文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaliciousProcessFileSize;

    /**
     * @var string 恶意进程文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaliciousProcessFileMD5;

    /**
     * @var string 恶意进程名（PID）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaliciousProcessNamePID;

    /**
     * @var string 恶意进程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaliciousProcessPath;

    /**
     * @var string 恶意进程启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaliciousProcessStartTime;

    /**
     * @var string 命令内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommandContent;

    /**
     * @var string 启动用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupUser;

    /**
     * @var string 用户所属组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroup;

    /**
     * @var string 新增权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewPermissions;

    /**
     * @var string 父进程
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentProcess;

    /**
     * @var string 类名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassName;

    /**
     * @var string 所属类加载器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassLoader;

    /**
     * @var string 类文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassFileSize;

    /**
     * @var string 类文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassFileMD5;

    /**
     * @var string 父类名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentClassName;

    /**
     * @var string 继承接口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InheritedInterface;

    /**
     * @var string 注释
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 载荷内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayloadContent;

    /**
     * @var string 回连地址画像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackAddressPortrait;

    /**
     * @var string 回连地址标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackAddressTag;

    /**
     * @var string 进程MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessMD5;

    /**
     * @var string 文件权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePermission;

    /**
     * @var array 来源于日志分析的信息字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromLogAnalysisData;

    /**
     * @var string 命中探针
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitProbe;

    /**
     * @var string 命中蜜罐

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitHoneyPot;

    /**
     * @var string 命令列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommandList;

    /**
     * @var string 攻击事件描述

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackEventDesc;

    /**
     * @var string 进程信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessInfo;

    /**
     * @var string 使用用户名&密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserNameAndPwd;

    /**
     * @var string 主机防护策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyID;

    /**
     * @var string 主机防护策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var string 主机防护命中策略，是策略ID和策略名称的组合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitStrategy;

    /**
     * @var string 进程名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessName;

    /**
     * @var string PID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PID;

    /**
     * @var string 容器Pod名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string 容器PodID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodID;

    /**
     * @var string Http响应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Response;

    /**
     * @var string 系统调用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemCall;

    /**
     * @var string 操作类型verb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Verb;

    /**
     * @var string 日志ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogID;

    /**
     * @var string 变更内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Different;

    /**
     * @var string 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType;

    /**
     * @var string 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 目标地址(容器反弹shell)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetAddress;

    /**
     * @var string 恶意请求域名(容器恶意外联)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaliciousRequestDomain;

    /**
     * @var string 规则类型(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string 请求资源(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestURI;

    /**
     * @var string 发起请求用户(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestUser;

    /**
     * @var string 请求对象(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestObject;

    /**
     * @var string 响应对象(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseObject;

    /**
     * @var string 文件类型(容器文件篡改)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var string 标签特征(容器恶意外联)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TIType;

    /**
     * @var string 来源IP(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceIP;

    /**
     * @param RelatedEvent $RelateEvent 相关攻击事件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LeakContent 泄漏内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LeakAPI 泄漏API
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretID secretID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Rule 命中规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleDesc 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProtocolPort 协议端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackContent 攻击内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackIPProfile 攻击IP画像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackIPTags 攻击IP标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestMethod 请求方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpLog HTTP日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackDomain 被攻击域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilePath 文件路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAgent user_agent
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestHeaders 请求头
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoginUserName 登录用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityName 漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CVE 公共漏洞和暴露
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceProcess 服务进程
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSize 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMD5 文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileLastAccessTime 文件最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileModifyTime 文件修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecentAccessTime 最近访问时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecentModifyTime 最近修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirusName 病毒名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirusFileTags 病毒文件标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BehavioralCharacteristics 行为特征
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessNamePID 进程名（PID）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessPath 进程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessCommandLine 进程命令行
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessPermissions 进程权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutedCommand 执行命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AffectedFileName 受影响文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DecoyPath 诱饵路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaliciousProcessFileSize 恶意进程文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaliciousProcessFileMD5 恶意进程文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaliciousProcessNamePID 恶意进程名（PID）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaliciousProcessPath 恶意进程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaliciousProcessStartTime 恶意进程启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CommandContent 命令内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartupUser 启动用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroup 用户所属组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewPermissions 新增权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentProcess 父进程
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassName 类名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassLoader 所属类加载器
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassFileSize 类文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassFileMD5 类文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentClassName 父类名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InheritedInterface 继承接口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 注释
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayloadContent 载荷内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallbackAddressPortrait 回连地址画像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallbackAddressTag 回连地址标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessMD5 进程MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilePermission 文件权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FromLogAnalysisData 来源于日志分析的信息字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HitProbe 命中探针
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HitHoneyPot 命中蜜罐

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CommandList 命令列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackEventDesc 攻击事件描述

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessInfo 进程信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserNameAndPwd 使用用户名&密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyID 主机防护策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyName 主机防护策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HitStrategy 主机防护命中策略，是策略ID和策略名称的组合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessName 进程名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PID PID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName 容器Pod名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodID 容器PodID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Response Http响应
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SystemCall 系统调用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Verb 操作类型verb
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogID 日志ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Different 变更内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventType 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetAddress 目标地址(容器反弹shell)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaliciousRequestDomain 恶意请求域名(容器恶意外联)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType 规则类型(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestURI 请求资源(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestUser 发起请求用户(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestObject 请求对象(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResponseObject 响应对象(容器K8sAPI异常请求)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType 文件类型(容器文件篡改)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TIType 标签特征(容器恶意外联)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceIP 来源IP(容器K8sAPI异常请求)
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
