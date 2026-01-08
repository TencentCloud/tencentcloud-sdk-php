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
 * @method string getInstanceId() 获取业务系统 ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统 ID
 * @method string getName() 获取业务系统名
 * @method void setName(string $Name) 设置业务系统名
 * @method string getDescription() 获取业务系统描述信息
 * @method void setDescription(string $Description) 设置业务系统描述信息
 * @method integer getStatus() 获取业务系统状态。{
1: 初始化中; 2: 运行中; 4: 限流}
 * @method void setStatus(integer $Status) 设置业务系统状态。{
1: 初始化中; 2: 运行中; 4: 限流}
 * @method string getRegion() 获取业务系统所属地域
 * @method void setRegion(string $Region) 设置业务系统所属地域
 * @method array getTags() 获取业务系统 Tag 列表
 * @method void setTags(array $Tags) 设置业务系统 Tag 列表
 * @method integer getAppId() 获取AppID 信息
 * @method void setAppId(integer $AppId) 设置AppID 信息
 * @method string getCreateUin() 获取创建人 Uin
 * @method void setCreateUin(string $CreateUin) 设置创建人 Uin
 * @method float getAmountOfUsedStorage() 获取存储使用量(单位：MB)
 * @method void setAmountOfUsedStorage(float $AmountOfUsedStorage) 设置存储使用量(单位：MB)
 * @method integer getServiceCount() 获取该业务系统服务端应用数量
 * @method void setServiceCount(integer $ServiceCount) 设置该业务系统服务端应用数量
 * @method integer getCountOfReportSpanPerDay() 获取日均上报 Span 数
 * @method void setCountOfReportSpanPerDay(integer $CountOfReportSpanPerDay) 设置日均上报 Span 数
 * @method integer getTraceDuration() 获取Trace 数据保存时长（单位：天）
 * @method void setTraceDuration(integer $TraceDuration) 设置Trace 数据保存时长（单位：天）
 * @method integer getSpanDailyCounters() 获取业务系统上报额度
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) 设置业务系统上报额度
 * @method integer getBillingInstance() 获取业务系统是否已开通计费（0=未开通，1=已开通）
 * @method void setBillingInstance(integer $BillingInstance) 设置业务系统是否已开通计费（0=未开通，1=已开通）
 * @method integer getErrRateThreshold() 获取错误警示线（单位：%）
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置错误警示线（单位：%）
 * @method integer getSampleRate() 获取采样率（单位：%）
 * @method void setSampleRate(integer $SampleRate) 设置采样率（单位：%）
 * @method integer getErrorSample() 获取是否开启错误采样（0=关, 1=开）
 * @method void setErrorSample(integer $ErrorSample) 设置是否开启错误采样（0=关, 1=开）
 * @method integer getSlowRequestSavedThreshold() 获取采样慢调用保存阈值（单位：ms）
 * @method void setSlowRequestSavedThreshold(integer $SlowRequestSavedThreshold) 设置采样慢调用保存阈值（单位：ms）
 * @method string getLogRegion() 获取CLS 日志所在地域
 * @method void setLogRegion(string $LogRegion) 设置CLS 日志所在地域
 * @method string getLogSource() 获取日志源
 * @method void setLogSource(string $LogSource) 设置日志源
 * @method integer getIsRelatedLog() 获取日志功能开关（0=关， 1=开）
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置日志功能开关（0=关， 1=开）
 * @method string getLogTopicID() 获取日志主题 ID
 * @method void setLogTopicID(string $LogTopicID) 设置日志主题 ID
 * @method integer getClientCount() 获取该业务系统客户端应用数量
 * @method void setClientCount(integer $ClientCount) 设置该业务系统客户端应用数量
 * @method integer getTotalCount() 获取该业务系统最近2天活跃应用数量
 * @method void setTotalCount(integer $TotalCount) 设置该业务系统最近2天活跃应用数量
 * @method string getLogSet() 获取CLS 日志集
 * @method void setLogSet(string $LogSet) 设置CLS 日志集
 * @method integer getMetricDuration() 获取Metric 数据保存时长（单位：天）
 * @method void setMetricDuration(integer $MetricDuration) 设置Metric 数据保存时长（单位：天）
 * @method array getCustomShowTags() 获取用户自定义展示标签列表
 * @method void setCustomShowTags(array $CustomShowTags) 设置用户自定义展示标签列表
 * @method integer getPayMode() 获取业务系统计费模式（1为预付费，0为按量付费）
 * @method void setPayMode(integer $PayMode) 设置业务系统计费模式（1为预付费，0为按量付费）
 * @method boolean getPayModeEffective() 获取业务系统计费模式是否生效
 * @method void setPayModeEffective(boolean $PayModeEffective) 设置业务系统计费模式是否生效
 * @method integer getResponseDurationWarningThreshold() 获取响应时间警示线（单位：ms）
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) 设置响应时间警示线（单位：ms）
 * @method integer getFree() 获取是否免费（0=否，1=限额免费，2=完全免费），默认0
 * @method void setFree(integer $Free) 设置是否免费（0=否，1=限额免费，2=完全免费），默认0
 * @method integer getDefaultTSF() 获取是否 TSF 默认业务系统（0=否，1=是）
 * @method void setDefaultTSF(integer $DefaultTSF) 设置是否 TSF 默认业务系统（0=否，1=是）
 * @method integer getIsRelatedDashboard() 获取是否关联 Dashboard（0=关, 1=开）
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) 设置是否关联 Dashboard（0=关, 1=开）
 * @method string getDashboardTopicID() 获取关联的 Dashboard ID
 * @method void setDashboardTopicID(string $DashboardTopicID) 设置关联的 Dashboard ID
 * @method integer getIsInstrumentationVulnerabilityScan() 获取是否开启组件漏洞检测（0=关， 1=开）
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) 设置是否开启组件漏洞检测（0=关， 1=开）
 * @method integer getIsSqlInjectionAnalysis() 获取是否开启 SQL 注入分析（0=关， 1=开）
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) 设置是否开启 SQL 注入分析（0=关， 1=开）
 * @method integer getStopReason() 获取限流原因。{
1: 正式版限额;
2: 试用版限额;
4: 试用版到期;
8: 账号欠费
}
 * @method void setStopReason(integer $StopReason) 设置限流原因。{
1: 正式版限额;
2: 试用版限额;
4: 试用版到期;
8: 账号欠费
}
 * @method integer getIsRemoteCommandExecutionAnalysis() 获取是否开远程命令执行检测（0=关， 1=开）
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) 设置是否开远程命令执行检测（0=关， 1=开）
 * @method integer getIsMemoryHijackingAnalysis() 获取是否开内存马执行检测（0=关， 1=开）
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) 设置是否开内存马执行检测（0=关， 1=开）
 * @method integer getLogIndexType() 获取CLS索引类型(0=全文索引，1=键值索引)
 * @method void setLogIndexType(integer $LogIndexType) 设置CLS索引类型(0=全文索引，1=键值索引)
 * @method string getLogTraceIdKey() 获取traceId的索引key: 当CLS索引类型为键值索引时生效
 * @method void setLogTraceIdKey(string $LogTraceIdKey) 设置traceId的索引key: 当CLS索引类型为键值索引时生效
 * @method integer getIsDeleteAnyFileAnalysis() 获取是否开启删除任意文件检测（0-关闭，1-开启）
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) 设置是否开启删除任意文件检测（0-关闭，1-开启）
 * @method integer getIsReadAnyFileAnalysis() 获取是否开启读取任意文件检测（0-关闭，1-开启）
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) 设置是否开启读取任意文件检测（0-关闭，1-开启）
 * @method integer getIsUploadAnyFileAnalysis() 获取是否开启上传任意文件检测（0-关闭，1-开启）
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) 设置是否开启上传任意文件检测（0-关闭，1-开启）
 * @method integer getIsIncludeAnyFileAnalysis() 获取是否开启包含任意文件检测（0-关闭，1-开启）
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) 设置是否开启包含任意文件检测（0-关闭，1-开启）
 * @method integer getIsDirectoryTraversalAnalysis() 获取是否开启目录遍历检测（0-关闭，1-开启）
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) 设置是否开启目录遍历检测（0-关闭，1-开启）
 * @method integer getIsTemplateEngineInjectionAnalysis() 获取是否开启模板引擎注入检测（0-关闭，1-开启）
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) 设置是否开启模板引擎注入检测（0-关闭，1-开启）
 * @method integer getIsScriptEngineInjectionAnalysis() 获取是否开启脚本引擎注入检测（0-关闭，1-开启）
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) 设置是否开启脚本引擎注入检测（0-关闭，1-开启）
 * @method integer getIsExpressionInjectionAnalysis() 获取是否开启表达式注入检测（0-关闭，1-开启）
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) 设置是否开启表达式注入检测（0-关闭，1-开启）
 * @method integer getIsJNDIInjectionAnalysis() 获取是否开启JNDI注入检测（0-关闭，1-开启）
 * @method void setIsJNDIInjectionAnalysis(integer $IsJNDIInjectionAnalysis) 设置是否开启JNDI注入检测（0-关闭，1-开启）
 * @method integer getIsJNIInjectionAnalysis() 获取是否开启JNI注入检测（0-关闭，1-开启）
 * @method void setIsJNIInjectionAnalysis(integer $IsJNIInjectionAnalysis) 设置是否开启JNI注入检测（0-关闭，1-开启）
 * @method integer getIsWebshellBackdoorAnalysis() 获取是否开启Webshell后门检测（0-关闭，1-开启）
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) 设置是否开启Webshell后门检测（0-关闭，1-开启）
 * @method integer getIsDeserializationAnalysis() 获取是否开启反序列化检测（0-关闭，1-开启）
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) 设置是否开启反序列化检测（0-关闭，1-开启）
 * @method string getToken() 获取业务系统鉴权 token
 * @method void setToken(string $Token) 设置业务系统鉴权 token
 * @method integer getUrlLongSegmentThreshold() 获取URL长分段收敛阈值
 * @method void setUrlLongSegmentThreshold(integer $UrlLongSegmentThreshold) 设置URL长分段收敛阈值
 * @method integer getUrlNumberSegmentThreshold() 获取URL数字分段收敛阈值
 * @method void setUrlNumberSegmentThreshold(integer $UrlNumberSegmentThreshold) 设置URL数字分段收敛阈值
 * @method string getLogSpanIdKey() 获取spanId的索引key: 当CLS索引类型为键值索引时生效
 * @method void setLogSpanIdKey(string $LogSpanIdKey) 设置spanId的索引key: 当CLS索引类型为键值索引时生效
 */
class ApmInstanceDetail extends AbstractModel
{
    /**
     * @var string 业务系统 ID
     */
    public $InstanceId;

    /**
     * @var string 业务系统名
     */
    public $Name;

    /**
     * @var string 业务系统描述信息
     */
    public $Description;

    /**
     * @var integer 业务系统状态。{
1: 初始化中; 2: 运行中; 4: 限流}
     */
    public $Status;

    /**
     * @var string 业务系统所属地域
     */
    public $Region;

    /**
     * @var array 业务系统 Tag 列表
     */
    public $Tags;

    /**
     * @var integer AppID 信息
     */
    public $AppId;

    /**
     * @var string 创建人 Uin
     */
    public $CreateUin;

    /**
     * @var float 存储使用量(单位：MB)
     */
    public $AmountOfUsedStorage;

    /**
     * @var integer 该业务系统服务端应用数量
     */
    public $ServiceCount;

    /**
     * @var integer 日均上报 Span 数
     */
    public $CountOfReportSpanPerDay;

    /**
     * @var integer Trace 数据保存时长（单位：天）
     */
    public $TraceDuration;

    /**
     * @var integer 业务系统上报额度
     */
    public $SpanDailyCounters;

    /**
     * @var integer 业务系统是否已开通计费（0=未开通，1=已开通）
     */
    public $BillingInstance;

    /**
     * @var integer 错误警示线（单位：%）
     */
    public $ErrRateThreshold;

    /**
     * @var integer 采样率（单位：%）
     */
    public $SampleRate;

    /**
     * @var integer 是否开启错误采样（0=关, 1=开）
     */
    public $ErrorSample;

    /**
     * @var integer 采样慢调用保存阈值（单位：ms）
     */
    public $SlowRequestSavedThreshold;

    /**
     * @var string CLS 日志所在地域
     */
    public $LogRegion;

    /**
     * @var string 日志源
     */
    public $LogSource;

    /**
     * @var integer 日志功能开关（0=关， 1=开）
     */
    public $IsRelatedLog;

    /**
     * @var string 日志主题 ID
     */
    public $LogTopicID;

    /**
     * @var integer 该业务系统客户端应用数量
     */
    public $ClientCount;

    /**
     * @var integer 该业务系统最近2天活跃应用数量
     */
    public $TotalCount;

    /**
     * @var string CLS 日志集
     */
    public $LogSet;

    /**
     * @var integer Metric 数据保存时长（单位：天）
     */
    public $MetricDuration;

    /**
     * @var array 用户自定义展示标签列表
     */
    public $CustomShowTags;

    /**
     * @var integer 业务系统计费模式（1为预付费，0为按量付费）
     */
    public $PayMode;

    /**
     * @var boolean 业务系统计费模式是否生效
     */
    public $PayModeEffective;

    /**
     * @var integer 响应时间警示线（单位：ms）
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @var integer 是否免费（0=否，1=限额免费，2=完全免费），默认0
     */
    public $Free;

    /**
     * @var integer 是否 TSF 默认业务系统（0=否，1=是）
     */
    public $DefaultTSF;

    /**
     * @var integer 是否关联 Dashboard（0=关, 1=开）
     */
    public $IsRelatedDashboard;

    /**
     * @var string 关联的 Dashboard ID
     */
    public $DashboardTopicID;

    /**
     * @var integer 是否开启组件漏洞检测（0=关， 1=开）
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer 是否开启 SQL 注入分析（0=关， 1=开）
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer 限流原因。{
1: 正式版限额;
2: 试用版限额;
4: 试用版到期;
8: 账号欠费
}
     */
    public $StopReason;

    /**
     * @var integer 是否开远程命令执行检测（0=关， 1=开）
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer 是否开内存马执行检测（0=关， 1=开）
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer CLS索引类型(0=全文索引，1=键值索引)
     */
    public $LogIndexType;

    /**
     * @var string traceId的索引key: 当CLS索引类型为键值索引时生效
     */
    public $LogTraceIdKey;

    /**
     * @var integer 是否开启删除任意文件检测（0-关闭，1-开启）
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer 是否开启读取任意文件检测（0-关闭，1-开启）
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer 是否开启上传任意文件检测（0-关闭，1-开启）
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer 是否开启包含任意文件检测（0-关闭，1-开启）
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer 是否开启目录遍历检测（0-关闭，1-开启）
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer 是否开启模板引擎注入检测（0-关闭，1-开启）
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer 是否开启脚本引擎注入检测（0-关闭，1-开启）
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer 是否开启表达式注入检测（0-关闭，1-开启）
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer 是否开启JNDI注入检测（0-关闭，1-开启）
     */
    public $IsJNDIInjectionAnalysis;

    /**
     * @var integer 是否开启JNI注入检测（0-关闭，1-开启）
     */
    public $IsJNIInjectionAnalysis;

    /**
     * @var integer 是否开启Webshell后门检测（0-关闭，1-开启）
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer 是否开启反序列化检测（0-关闭，1-开启）
     */
    public $IsDeserializationAnalysis;

    /**
     * @var string 业务系统鉴权 token
     */
    public $Token;

    /**
     * @var integer URL长分段收敛阈值
     */
    public $UrlLongSegmentThreshold;

    /**
     * @var integer URL数字分段收敛阈值
     */
    public $UrlNumberSegmentThreshold;

    /**
     * @var string spanId的索引key: 当CLS索引类型为键值索引时生效
     */
    public $LogSpanIdKey;

    /**
     * @param string $InstanceId 业务系统 ID
     * @param string $Name 业务系统名
     * @param string $Description 业务系统描述信息
     * @param integer $Status 业务系统状态。{
1: 初始化中; 2: 运行中; 4: 限流}
     * @param string $Region 业务系统所属地域
     * @param array $Tags 业务系统 Tag 列表
     * @param integer $AppId AppID 信息
     * @param string $CreateUin 创建人 Uin
     * @param float $AmountOfUsedStorage 存储使用量(单位：MB)
     * @param integer $ServiceCount 该业务系统服务端应用数量
     * @param integer $CountOfReportSpanPerDay 日均上报 Span 数
     * @param integer $TraceDuration Trace 数据保存时长（单位：天）
     * @param integer $SpanDailyCounters 业务系统上报额度
     * @param integer $BillingInstance 业务系统是否已开通计费（0=未开通，1=已开通）
     * @param integer $ErrRateThreshold 错误警示线（单位：%）
     * @param integer $SampleRate 采样率（单位：%）
     * @param integer $ErrorSample 是否开启错误采样（0=关, 1=开）
     * @param integer $SlowRequestSavedThreshold 采样慢调用保存阈值（单位：ms）
     * @param string $LogRegion CLS 日志所在地域
     * @param string $LogSource 日志源
     * @param integer $IsRelatedLog 日志功能开关（0=关， 1=开）
     * @param string $LogTopicID 日志主题 ID
     * @param integer $ClientCount 该业务系统客户端应用数量
     * @param integer $TotalCount 该业务系统最近2天活跃应用数量
     * @param string $LogSet CLS 日志集
     * @param integer $MetricDuration Metric 数据保存时长（单位：天）
     * @param array $CustomShowTags 用户自定义展示标签列表
     * @param integer $PayMode 业务系统计费模式（1为预付费，0为按量付费）
     * @param boolean $PayModeEffective 业务系统计费模式是否生效
     * @param integer $ResponseDurationWarningThreshold 响应时间警示线（单位：ms）
     * @param integer $Free 是否免费（0=否，1=限额免费，2=完全免费），默认0
     * @param integer $DefaultTSF 是否 TSF 默认业务系统（0=否，1=是）
     * @param integer $IsRelatedDashboard 是否关联 Dashboard（0=关, 1=开）
     * @param string $DashboardTopicID 关联的 Dashboard ID
     * @param integer $IsInstrumentationVulnerabilityScan 是否开启组件漏洞检测（0=关， 1=开）
     * @param integer $IsSqlInjectionAnalysis 是否开启 SQL 注入分析（0=关， 1=开）
     * @param integer $StopReason 限流原因。{
1: 正式版限额;
2: 试用版限额;
4: 试用版到期;
8: 账号欠费
}
     * @param integer $IsRemoteCommandExecutionAnalysis 是否开远程命令执行检测（0=关， 1=开）
     * @param integer $IsMemoryHijackingAnalysis 是否开内存马执行检测（0=关， 1=开）
     * @param integer $LogIndexType CLS索引类型(0=全文索引，1=键值索引)
     * @param string $LogTraceIdKey traceId的索引key: 当CLS索引类型为键值索引时生效
     * @param integer $IsDeleteAnyFileAnalysis 是否开启删除任意文件检测（0-关闭，1-开启）
     * @param integer $IsReadAnyFileAnalysis 是否开启读取任意文件检测（0-关闭，1-开启）
     * @param integer $IsUploadAnyFileAnalysis 是否开启上传任意文件检测（0-关闭，1-开启）
     * @param integer $IsIncludeAnyFileAnalysis 是否开启包含任意文件检测（0-关闭，1-开启）
     * @param integer $IsDirectoryTraversalAnalysis 是否开启目录遍历检测（0-关闭，1-开启）
     * @param integer $IsTemplateEngineInjectionAnalysis 是否开启模板引擎注入检测（0-关闭，1-开启）
     * @param integer $IsScriptEngineInjectionAnalysis 是否开启脚本引擎注入检测（0-关闭，1-开启）
     * @param integer $IsExpressionInjectionAnalysis 是否开启表达式注入检测（0-关闭，1-开启）
     * @param integer $IsJNDIInjectionAnalysis 是否开启JNDI注入检测（0-关闭，1-开启）
     * @param integer $IsJNIInjectionAnalysis 是否开启JNI注入检测（0-关闭，1-开启）
     * @param integer $IsWebshellBackdoorAnalysis 是否开启Webshell后门检测（0-关闭，1-开启）
     * @param integer $IsDeserializationAnalysis 是否开启反序列化检测（0-关闭，1-开启）
     * @param string $Token 业务系统鉴权 token
     * @param integer $UrlLongSegmentThreshold URL长分段收敛阈值
     * @param integer $UrlNumberSegmentThreshold URL数字分段收敛阈值
     * @param string $LogSpanIdKey spanId的索引key: 当CLS索引类型为键值索引时生效
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
