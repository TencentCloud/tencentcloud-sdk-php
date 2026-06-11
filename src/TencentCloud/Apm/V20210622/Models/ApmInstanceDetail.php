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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * APM 业务系统信息
 *
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method string getName() 获取<p>业务系统名</p>
 * @method void setName(string $Name) 设置<p>业务系统名</p>
 * @method string getDescription() 获取<p>业务系统描述信息</p>
 * @method void setDescription(string $Description) 设置<p>业务系统描述信息</p>
 * @method integer getStatus() 获取<p>业务系统状态。{<br>1: 初始化中; 2: 运行中; 4: 限流}</p>
 * @method void setStatus(integer $Status) 设置<p>业务系统状态。{<br>1: 初始化中; 2: 运行中; 4: 限流}</p>
 * @method string getRegion() 获取<p>业务系统所属地域</p>
 * @method void setRegion(string $Region) 设置<p>业务系统所属地域</p>
 * @method array getTags() 获取<p>业务系统 Tag 列表</p>
 * @method void setTags(array $Tags) 设置<p>业务系统 Tag 列表</p>
 * @method integer getAppId() 获取<p>AppID 信息</p>
 * @method void setAppId(integer $AppId) 设置<p>AppID 信息</p>
 * @method string getCreateUin() 获取<p>创建人 Uin</p>
 * @method void setCreateUin(string $CreateUin) 设置<p>创建人 Uin</p>
 * @method float getAmountOfUsedStorage() 获取<p>存储使用量(单位：MB)</p>
 * @method void setAmountOfUsedStorage(float $AmountOfUsedStorage) 设置<p>存储使用量(单位：MB)</p>
 * @method integer getServiceCount() 获取<p>该业务系统服务端应用数量</p>
 * @method void setServiceCount(integer $ServiceCount) 设置<p>该业务系统服务端应用数量</p>
 * @method integer getCountOfReportSpanPerDay() 获取<p>日均上报 Span 数</p>
 * @method void setCountOfReportSpanPerDay(integer $CountOfReportSpanPerDay) 设置<p>日均上报 Span 数</p>
 * @method integer getTraceDuration() 获取<p>Trace 数据保存时长（单位：天）</p>
 * @method void setTraceDuration(integer $TraceDuration) 设置<p>Trace 数据保存时长（单位：天）</p>
 * @method integer getSpanDailyCounters() 获取<p>业务系统上报额度</p>
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) 设置<p>业务系统上报额度</p>
 * @method integer getBillingInstance() 获取<p>业务系统是否已开通计费（0=未开通，1=已开通）</p>
 * @method void setBillingInstance(integer $BillingInstance) 设置<p>业务系统是否已开通计费（0=未开通，1=已开通）</p>
 * @method integer getErrRateThreshold() 获取<p>错误警示线（单位：%）</p>
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置<p>错误警示线（单位：%）</p>
 * @method integer getSampleRate() 获取<p>采样率（单位：%）</p>
 * @method void setSampleRate(integer $SampleRate) 设置<p>采样率（单位：%）</p>
 * @method integer getErrorSample() 获取<p>是否开启错误采样（0=关, 1=开）</p>
 * @method void setErrorSample(integer $ErrorSample) 设置<p>是否开启错误采样（0=关, 1=开）</p>
 * @method integer getSlowRequestSavedThreshold() 获取<p>采样慢调用保存阈值（单位：ms）</p>
 * @method void setSlowRequestSavedThreshold(integer $SlowRequestSavedThreshold) 设置<p>采样慢调用保存阈值（单位：ms）</p>
 * @method string getLogRegion() 获取<p>CLS 日志所在地域</p>
 * @method void setLogRegion(string $LogRegion) 设置<p>CLS 日志所在地域</p>
 * @method string getLogSource() 获取<p>日志源</p>
 * @method void setLogSource(string $LogSource) 设置<p>日志源</p>
 * @method integer getIsRelatedLog() 获取<p>日志功能开关（0=关， 1=开）</p>
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置<p>日志功能开关（0=关， 1=开）</p>
 * @method string getLogTopicID() 获取<p>日志主题 ID</p>
 * @method void setLogTopicID(string $LogTopicID) 设置<p>日志主题 ID</p>
 * @method integer getClientCount() 获取<p>该业务系统客户端应用数量</p>
 * @method void setClientCount(integer $ClientCount) 设置<p>该业务系统客户端应用数量</p>
 * @method integer getTotalCount() 获取<p>该业务系统最近2天活跃应用数量</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>该业务系统最近2天活跃应用数量</p>
 * @method string getLogSet() 获取<p>CLS 日志集</p>
 * @method void setLogSet(string $LogSet) 设置<p>CLS 日志集</p>
 * @method integer getMetricDuration() 获取<p>Metric 数据保存时长（单位：天）</p>
 * @method void setMetricDuration(integer $MetricDuration) 设置<p>Metric 数据保存时长（单位：天）</p>
 * @method array getCustomShowTags() 获取<p>用户自定义展示标签列表</p>
 * @method void setCustomShowTags(array $CustomShowTags) 设置<p>用户自定义展示标签列表</p>
 * @method integer getPayMode() 获取<p>业务系统计费模式（1为预付费，0为按量付费）</p>
 * @method void setPayMode(integer $PayMode) 设置<p>业务系统计费模式（1为预付费，0为按量付费）</p>
 * @method boolean getPayModeEffective() 获取<p>业务系统计费模式是否生效</p>
 * @method void setPayModeEffective(boolean $PayModeEffective) 设置<p>业务系统计费模式是否生效</p>
 * @method integer getResponseDurationWarningThreshold() 获取<p>响应时间警示线（单位：ms）</p>
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) 设置<p>响应时间警示线（单位：ms）</p>
 * @method integer getFree() 获取<p>是否免费（0=否，1=限额免费，2=完全免费），默认0</p>
 * @method void setFree(integer $Free) 设置<p>是否免费（0=否，1=限额免费，2=完全免费），默认0</p>
 * @method integer getDefaultTSF() 获取<p>是否 TSF 默认业务系统（0=否，1=是）</p>
 * @method void setDefaultTSF(integer $DefaultTSF) 设置<p>是否 TSF 默认业务系统（0=否，1=是）</p>
 * @method integer getIsRelatedDashboard() 获取<p>是否关联 Dashboard（0=关, 1=开）</p>
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) 设置<p>是否关联 Dashboard（0=关, 1=开）</p>
 * @method string getDashboardTopicID() 获取<p>关联的 Dashboard ID</p>
 * @method void setDashboardTopicID(string $DashboardTopicID) 设置<p>关联的 Dashboard ID</p>
 * @method integer getIsInstrumentationVulnerabilityScan() 获取<p>是否开启组件漏洞检测（0=关， 1=开）</p>
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) 设置<p>是否开启组件漏洞检测（0=关， 1=开）</p>
 * @method integer getIsSqlInjectionAnalysis() 获取<p>是否开启 SQL 注入分析（0=关， 1=开）</p>
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) 设置<p>是否开启 SQL 注入分析（0=关， 1=开）</p>
 * @method integer getStopReason() 获取<p>限流原因。{<br>1: 正式版限额;<br>2: 试用版限额;<br>4: 试用版到期;<br>8: 账号欠费<br>}</p>
 * @method void setStopReason(integer $StopReason) 设置<p>限流原因。{<br>1: 正式版限额;<br>2: 试用版限额;<br>4: 试用版到期;<br>8: 账号欠费<br>}</p>
 * @method integer getIsRemoteCommandExecutionAnalysis() 获取<p>是否开远程命令执行检测（0=关， 1=开）</p>
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) 设置<p>是否开远程命令执行检测（0=关， 1=开）</p>
 * @method integer getIsMemoryHijackingAnalysis() 获取<p>是否开内存马执行检测（0=关， 1=开）</p>
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) 设置<p>是否开内存马执行检测（0=关， 1=开）</p>
 * @method integer getLogIndexType() 获取<p>CLS索引类型(0=全文索引，1=键值索引)</p>
 * @method void setLogIndexType(integer $LogIndexType) 设置<p>CLS索引类型(0=全文索引，1=键值索引)</p>
 * @method string getLogTraceIdKey() 获取<p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method void setLogTraceIdKey(string $LogTraceIdKey) 设置<p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method integer getIsDeleteAnyFileAnalysis() 获取<p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) 设置<p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
 * @method integer getIsReadAnyFileAnalysis() 获取<p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) 设置<p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
 * @method integer getIsUploadAnyFileAnalysis() 获取<p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) 设置<p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
 * @method integer getIsIncludeAnyFileAnalysis() 获取<p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) 设置<p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
 * @method integer getIsDirectoryTraversalAnalysis() 获取<p>是否开启目录遍历检测（0-关闭，1-开启）</p>
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) 设置<p>是否开启目录遍历检测（0-关闭，1-开启）</p>
 * @method integer getIsTemplateEngineInjectionAnalysis() 获取<p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) 设置<p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
 * @method integer getIsScriptEngineInjectionAnalysis() 获取<p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) 设置<p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
 * @method integer getIsExpressionInjectionAnalysis() 获取<p>是否开启表达式注入检测（0-关闭，1-开启）</p>
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) 设置<p>是否开启表达式注入检测（0-关闭，1-开启）</p>
 * @method integer getIsJNDIInjectionAnalysis() 获取<p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
 * @method void setIsJNDIInjectionAnalysis(integer $IsJNDIInjectionAnalysis) 设置<p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
 * @method integer getIsJNIInjectionAnalysis() 获取<p>是否开启JNI注入检测（0-关闭，1-开启）</p>
 * @method void setIsJNIInjectionAnalysis(integer $IsJNIInjectionAnalysis) 设置<p>是否开启JNI注入检测（0-关闭，1-开启）</p>
 * @method integer getIsWebshellBackdoorAnalysis() 获取<p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) 设置<p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
 * @method integer getIsDeserializationAnalysis() 获取<p>是否开启反序列化检测（0-关闭，1-开启）</p>
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) 设置<p>是否开启反序列化检测（0-关闭，1-开启）</p>
 * @method string getToken() 获取<p>业务系统鉴权 token</p>
 * @method void setToken(string $Token) 设置<p>业务系统鉴权 token</p>
 * @method integer getUrlLongSegmentThreshold() 获取<p>URL长分段收敛阈值</p>
 * @method void setUrlLongSegmentThreshold(integer $UrlLongSegmentThreshold) 设置<p>URL长分段收敛阈值</p>
 * @method integer getUrlNumberSegmentThreshold() 获取<p>URL数字分段收敛阈值</p>
 * @method void setUrlNumberSegmentThreshold(integer $UrlNumberSegmentThreshold) 设置<p>URL数字分段收敛阈值</p>
 * @method string getLogSpanIdKey() 获取<p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method void setLogSpanIdKey(string $LogSpanIdKey) 设置<p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
 */
class ApmInstanceDetail extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>业务系统名</p>
     */
    public $Name;

    /**
     * @var string <p>业务系统描述信息</p>
     */
    public $Description;

    /**
     * @var integer <p>业务系统状态。{<br>1: 初始化中; 2: 运行中; 4: 限流}</p>
     */
    public $Status;

    /**
     * @var string <p>业务系统所属地域</p>
     */
    public $Region;

    /**
     * @var array <p>业务系统 Tag 列表</p>
     */
    public $Tags;

    /**
     * @var integer <p>AppID 信息</p>
     */
    public $AppId;

    /**
     * @var string <p>创建人 Uin</p>
     */
    public $CreateUin;

    /**
     * @var float <p>存储使用量(单位：MB)</p>
     */
    public $AmountOfUsedStorage;

    /**
     * @var integer <p>该业务系统服务端应用数量</p>
     */
    public $ServiceCount;

    /**
     * @var integer <p>日均上报 Span 数</p>
     */
    public $CountOfReportSpanPerDay;

    /**
     * @var integer <p>Trace 数据保存时长（单位：天）</p>
     */
    public $TraceDuration;

    /**
     * @var integer <p>业务系统上报额度</p>
     */
    public $SpanDailyCounters;

    /**
     * @var integer <p>业务系统是否已开通计费（0=未开通，1=已开通）</p>
     */
    public $BillingInstance;

    /**
     * @var integer <p>错误警示线（单位：%）</p>
     */
    public $ErrRateThreshold;

    /**
     * @var integer <p>采样率（单位：%）</p>
     */
    public $SampleRate;

    /**
     * @var integer <p>是否开启错误采样（0=关, 1=开）</p>
     */
    public $ErrorSample;

    /**
     * @var integer <p>采样慢调用保存阈值（单位：ms）</p>
     */
    public $SlowRequestSavedThreshold;

    /**
     * @var string <p>CLS 日志所在地域</p>
     */
    public $LogRegion;

    /**
     * @var string <p>日志源</p>
     */
    public $LogSource;

    /**
     * @var integer <p>日志功能开关（0=关， 1=开）</p>
     */
    public $IsRelatedLog;

    /**
     * @var string <p>日志主题 ID</p>
     */
    public $LogTopicID;

    /**
     * @var integer <p>该业务系统客户端应用数量</p>
     */
    public $ClientCount;

    /**
     * @var integer <p>该业务系统最近2天活跃应用数量</p>
     */
    public $TotalCount;

    /**
     * @var string <p>CLS 日志集</p>
     */
    public $LogSet;

    /**
     * @var integer <p>Metric 数据保存时长（单位：天）</p>
     */
    public $MetricDuration;

    /**
     * @var array <p>用户自定义展示标签列表</p>
     */
    public $CustomShowTags;

    /**
     * @var integer <p>业务系统计费模式（1为预付费，0为按量付费）</p>
     */
    public $PayMode;

    /**
     * @var boolean <p>业务系统计费模式是否生效</p>
     */
    public $PayModeEffective;

    /**
     * @var integer <p>响应时间警示线（单位：ms）</p>
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @var integer <p>是否免费（0=否，1=限额免费，2=完全免费），默认0</p>
     */
    public $Free;

    /**
     * @var integer <p>是否 TSF 默认业务系统（0=否，1=是）</p>
     */
    public $DefaultTSF;

    /**
     * @var integer <p>是否关联 Dashboard（0=关, 1=开）</p>
     */
    public $IsRelatedDashboard;

    /**
     * @var string <p>关联的 Dashboard ID</p>
     */
    public $DashboardTopicID;

    /**
     * @var integer <p>是否开启组件漏洞检测（0=关， 1=开）</p>
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer <p>是否开启 SQL 注入分析（0=关， 1=开）</p>
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer <p>限流原因。{<br>1: 正式版限额;<br>2: 试用版限额;<br>4: 试用版到期;<br>8: 账号欠费<br>}</p>
     */
    public $StopReason;

    /**
     * @var integer <p>是否开远程命令执行检测（0=关， 1=开）</p>
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer <p>是否开内存马执行检测（0=关， 1=开）</p>
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer <p>CLS索引类型(0=全文索引，1=键值索引)</p>
     */
    public $LogIndexType;

    /**
     * @var string <p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
     */
    public $LogTraceIdKey;

    /**
     * @var integer <p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer <p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer <p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer <p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer <p>是否开启目录遍历检测（0-关闭，1-开启）</p>
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer <p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer <p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer <p>是否开启表达式注入检测（0-关闭，1-开启）</p>
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer <p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
     */
    public $IsJNDIInjectionAnalysis;

    /**
     * @var integer <p>是否开启JNI注入检测（0-关闭，1-开启）</p>
     */
    public $IsJNIInjectionAnalysis;

    /**
     * @var integer <p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer <p>是否开启反序列化检测（0-关闭，1-开启）</p>
     */
    public $IsDeserializationAnalysis;

    /**
     * @var string <p>业务系统鉴权 token</p>
     */
    public $Token;

    /**
     * @var integer <p>URL长分段收敛阈值</p>
     */
    public $UrlLongSegmentThreshold;

    /**
     * @var integer <p>URL数字分段收敛阈值</p>
     */
    public $UrlNumberSegmentThreshold;

    /**
     * @var string <p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
     */
    public $LogSpanIdKey;

    /**
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param string $Name <p>业务系统名</p>
     * @param string $Description <p>业务系统描述信息</p>
     * @param integer $Status <p>业务系统状态。{<br>1: 初始化中; 2: 运行中; 4: 限流}</p>
     * @param string $Region <p>业务系统所属地域</p>
     * @param array $Tags <p>业务系统 Tag 列表</p>
     * @param integer $AppId <p>AppID 信息</p>
     * @param string $CreateUin <p>创建人 Uin</p>
     * @param float $AmountOfUsedStorage <p>存储使用量(单位：MB)</p>
     * @param integer $ServiceCount <p>该业务系统服务端应用数量</p>
     * @param integer $CountOfReportSpanPerDay <p>日均上报 Span 数</p>
     * @param integer $TraceDuration <p>Trace 数据保存时长（单位：天）</p>
     * @param integer $SpanDailyCounters <p>业务系统上报额度</p>
     * @param integer $BillingInstance <p>业务系统是否已开通计费（0=未开通，1=已开通）</p>
     * @param integer $ErrRateThreshold <p>错误警示线（单位：%）</p>
     * @param integer $SampleRate <p>采样率（单位：%）</p>
     * @param integer $ErrorSample <p>是否开启错误采样（0=关, 1=开）</p>
     * @param integer $SlowRequestSavedThreshold <p>采样慢调用保存阈值（单位：ms）</p>
     * @param string $LogRegion <p>CLS 日志所在地域</p>
     * @param string $LogSource <p>日志源</p>
     * @param integer $IsRelatedLog <p>日志功能开关（0=关， 1=开）</p>
     * @param string $LogTopicID <p>日志主题 ID</p>
     * @param integer $ClientCount <p>该业务系统客户端应用数量</p>
     * @param integer $TotalCount <p>该业务系统最近2天活跃应用数量</p>
     * @param string $LogSet <p>CLS 日志集</p>
     * @param integer $MetricDuration <p>Metric 数据保存时长（单位：天）</p>
     * @param array $CustomShowTags <p>用户自定义展示标签列表</p>
     * @param integer $PayMode <p>业务系统计费模式（1为预付费，0为按量付费）</p>
     * @param boolean $PayModeEffective <p>业务系统计费模式是否生效</p>
     * @param integer $ResponseDurationWarningThreshold <p>响应时间警示线（单位：ms）</p>
     * @param integer $Free <p>是否免费（0=否，1=限额免费，2=完全免费），默认0</p>
     * @param integer $DefaultTSF <p>是否 TSF 默认业务系统（0=否，1=是）</p>
     * @param integer $IsRelatedDashboard <p>是否关联 Dashboard（0=关, 1=开）</p>
     * @param string $DashboardTopicID <p>关联的 Dashboard ID</p>
     * @param integer $IsInstrumentationVulnerabilityScan <p>是否开启组件漏洞检测（0=关， 1=开）</p>
     * @param integer $IsSqlInjectionAnalysis <p>是否开启 SQL 注入分析（0=关， 1=开）</p>
     * @param integer $StopReason <p>限流原因。{<br>1: 正式版限额;<br>2: 试用版限额;<br>4: 试用版到期;<br>8: 账号欠费<br>}</p>
     * @param integer $IsRemoteCommandExecutionAnalysis <p>是否开远程命令执行检测（0=关， 1=开）</p>
     * @param integer $IsMemoryHijackingAnalysis <p>是否开内存马执行检测（0=关， 1=开）</p>
     * @param integer $LogIndexType <p>CLS索引类型(0=全文索引，1=键值索引)</p>
     * @param string $LogTraceIdKey <p>traceId的索引key: 当CLS索引类型为键值索引时生效</p>
     * @param integer $IsDeleteAnyFileAnalysis <p>是否开启删除任意文件检测（0-关闭，1-开启）</p>
     * @param integer $IsReadAnyFileAnalysis <p>是否开启读取任意文件检测（0-关闭，1-开启）</p>
     * @param integer $IsUploadAnyFileAnalysis <p>是否开启上传任意文件检测（0-关闭，1-开启）</p>
     * @param integer $IsIncludeAnyFileAnalysis <p>是否开启包含任意文件检测（0-关闭，1-开启）</p>
     * @param integer $IsDirectoryTraversalAnalysis <p>是否开启目录遍历检测（0-关闭，1-开启）</p>
     * @param integer $IsTemplateEngineInjectionAnalysis <p>是否开启模板引擎注入检测（0-关闭，1-开启）</p>
     * @param integer $IsScriptEngineInjectionAnalysis <p>是否开启脚本引擎注入检测（0-关闭，1-开启）</p>
     * @param integer $IsExpressionInjectionAnalysis <p>是否开启表达式注入检测（0-关闭，1-开启）</p>
     * @param integer $IsJNDIInjectionAnalysis <p>是否开启JNDI注入检测（0-关闭，1-开启）</p>
     * @param integer $IsJNIInjectionAnalysis <p>是否开启JNI注入检测（0-关闭，1-开启）</p>
     * @param integer $IsWebshellBackdoorAnalysis <p>是否开启Webshell后门检测（0-关闭，1-开启）</p>
     * @param integer $IsDeserializationAnalysis <p>是否开启反序列化检测（0-关闭，1-开启）</p>
     * @param string $Token <p>业务系统鉴权 token</p>
     * @param integer $UrlLongSegmentThreshold <p>URL长分段收敛阈值</p>
     * @param integer $UrlNumberSegmentThreshold <p>URL数字分段收敛阈值</p>
     * @param string $LogSpanIdKey <p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("AmountOfUsedStorage",$param) and $param["AmountOfUsedStorage"] !== null) {
            $this->AmountOfUsedStorage = $param["AmountOfUsedStorage"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("CountOfReportSpanPerDay",$param) and $param["CountOfReportSpanPerDay"] !== null) {
            $this->CountOfReportSpanPerDay = $param["CountOfReportSpanPerDay"];
        }

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
        }

        if (array_key_exists("BillingInstance",$param) and $param["BillingInstance"] !== null) {
            $this->BillingInstance = $param["BillingInstance"];
        }

        if (array_key_exists("ErrRateThreshold",$param) and $param["ErrRateThreshold"] !== null) {
            $this->ErrRateThreshold = $param["ErrRateThreshold"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ErrorSample",$param) and $param["ErrorSample"] !== null) {
            $this->ErrorSample = $param["ErrorSample"];
        }

        if (array_key_exists("SlowRequestSavedThreshold",$param) and $param["SlowRequestSavedThreshold"] !== null) {
            $this->SlowRequestSavedThreshold = $param["SlowRequestSavedThreshold"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("ClientCount",$param) and $param["ClientCount"] !== null) {
            $this->ClientCount = $param["ClientCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("MetricDuration",$param) and $param["MetricDuration"] !== null) {
            $this->MetricDuration = $param["MetricDuration"];
        }

        if (array_key_exists("CustomShowTags",$param) and $param["CustomShowTags"] !== null) {
            $this->CustomShowTags = $param["CustomShowTags"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeEffective",$param) and $param["PayModeEffective"] !== null) {
            $this->PayModeEffective = $param["PayModeEffective"];
        }

        if (array_key_exists("ResponseDurationWarningThreshold",$param) and $param["ResponseDurationWarningThreshold"] !== null) {
            $this->ResponseDurationWarningThreshold = $param["ResponseDurationWarningThreshold"];
        }

        if (array_key_exists("Free",$param) and $param["Free"] !== null) {
            $this->Free = $param["Free"];
        }

        if (array_key_exists("DefaultTSF",$param) and $param["DefaultTSF"] !== null) {
            $this->DefaultTSF = $param["DefaultTSF"];
        }

        if (array_key_exists("IsRelatedDashboard",$param) and $param["IsRelatedDashboard"] !== null) {
            $this->IsRelatedDashboard = $param["IsRelatedDashboard"];
        }

        if (array_key_exists("DashboardTopicID",$param) and $param["DashboardTopicID"] !== null) {
            $this->DashboardTopicID = $param["DashboardTopicID"];
        }

        if (array_key_exists("IsInstrumentationVulnerabilityScan",$param) and $param["IsInstrumentationVulnerabilityScan"] !== null) {
            $this->IsInstrumentationVulnerabilityScan = $param["IsInstrumentationVulnerabilityScan"];
        }

        if (array_key_exists("IsSqlInjectionAnalysis",$param) and $param["IsSqlInjectionAnalysis"] !== null) {
            $this->IsSqlInjectionAnalysis = $param["IsSqlInjectionAnalysis"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
        }

        if (array_key_exists("IsRemoteCommandExecutionAnalysis",$param) and $param["IsRemoteCommandExecutionAnalysis"] !== null) {
            $this->IsRemoteCommandExecutionAnalysis = $param["IsRemoteCommandExecutionAnalysis"];
        }

        if (array_key_exists("IsMemoryHijackingAnalysis",$param) and $param["IsMemoryHijackingAnalysis"] !== null) {
            $this->IsMemoryHijackingAnalysis = $param["IsMemoryHijackingAnalysis"];
        }

        if (array_key_exists("LogIndexType",$param) and $param["LogIndexType"] !== null) {
            $this->LogIndexType = $param["LogIndexType"];
        }

        if (array_key_exists("LogTraceIdKey",$param) and $param["LogTraceIdKey"] !== null) {
            $this->LogTraceIdKey = $param["LogTraceIdKey"];
        }

        if (array_key_exists("IsDeleteAnyFileAnalysis",$param) and $param["IsDeleteAnyFileAnalysis"] !== null) {
            $this->IsDeleteAnyFileAnalysis = $param["IsDeleteAnyFileAnalysis"];
        }

        if (array_key_exists("IsReadAnyFileAnalysis",$param) and $param["IsReadAnyFileAnalysis"] !== null) {
            $this->IsReadAnyFileAnalysis = $param["IsReadAnyFileAnalysis"];
        }

        if (array_key_exists("IsUploadAnyFileAnalysis",$param) and $param["IsUploadAnyFileAnalysis"] !== null) {
            $this->IsUploadAnyFileAnalysis = $param["IsUploadAnyFileAnalysis"];
        }

        if (array_key_exists("IsIncludeAnyFileAnalysis",$param) and $param["IsIncludeAnyFileAnalysis"] !== null) {
            $this->IsIncludeAnyFileAnalysis = $param["IsIncludeAnyFileAnalysis"];
        }

        if (array_key_exists("IsDirectoryTraversalAnalysis",$param) and $param["IsDirectoryTraversalAnalysis"] !== null) {
            $this->IsDirectoryTraversalAnalysis = $param["IsDirectoryTraversalAnalysis"];
        }

        if (array_key_exists("IsTemplateEngineInjectionAnalysis",$param) and $param["IsTemplateEngineInjectionAnalysis"] !== null) {
            $this->IsTemplateEngineInjectionAnalysis = $param["IsTemplateEngineInjectionAnalysis"];
        }

        if (array_key_exists("IsScriptEngineInjectionAnalysis",$param) and $param["IsScriptEngineInjectionAnalysis"] !== null) {
            $this->IsScriptEngineInjectionAnalysis = $param["IsScriptEngineInjectionAnalysis"];
        }

        if (array_key_exists("IsExpressionInjectionAnalysis",$param) and $param["IsExpressionInjectionAnalysis"] !== null) {
            $this->IsExpressionInjectionAnalysis = $param["IsExpressionInjectionAnalysis"];
        }

        if (array_key_exists("IsJNDIInjectionAnalysis",$param) and $param["IsJNDIInjectionAnalysis"] !== null) {
            $this->IsJNDIInjectionAnalysis = $param["IsJNDIInjectionAnalysis"];
        }

        if (array_key_exists("IsJNIInjectionAnalysis",$param) and $param["IsJNIInjectionAnalysis"] !== null) {
            $this->IsJNIInjectionAnalysis = $param["IsJNIInjectionAnalysis"];
        }

        if (array_key_exists("IsWebshellBackdoorAnalysis",$param) and $param["IsWebshellBackdoorAnalysis"] !== null) {
            $this->IsWebshellBackdoorAnalysis = $param["IsWebshellBackdoorAnalysis"];
        }

        if (array_key_exists("IsDeserializationAnalysis",$param) and $param["IsDeserializationAnalysis"] !== null) {
            $this->IsDeserializationAnalysis = $param["IsDeserializationAnalysis"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("UrlLongSegmentThreshold",$param) and $param["UrlLongSegmentThreshold"] !== null) {
            $this->UrlLongSegmentThreshold = $param["UrlLongSegmentThreshold"];
        }

        if (array_key_exists("UrlNumberSegmentThreshold",$param) and $param["UrlNumberSegmentThreshold"] !== null) {
            $this->UrlNumberSegmentThreshold = $param["UrlNumberSegmentThreshold"];
        }

        if (array_key_exists("LogSpanIdKey",$param) and $param["LogSpanIdKey"] !== null) {
            $this->LogSpanIdKey = $param["LogSpanIdKey"];
        }
    }
}
