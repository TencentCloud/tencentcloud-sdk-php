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
 * ModifyApmInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method string getName() 获取<p>业务系统名</p>
 * @method void setName(string $Name) 设置<p>业务系统名</p>
 * @method array getTags() 获取<p>Tag 列表</p>
 * @method void setTags(array $Tags) 设置<p>Tag 列表</p>
 * @method string getDescription() 获取<p>业务系统描述</p>
 * @method void setDescription(string $Description) 设置<p>业务系统描述</p>
 * @method integer getTraceDuration() 获取<p>Trace 数据保存时长（单位：天）</p>
 * @method void setTraceDuration(integer $TraceDuration) 设置<p>Trace 数据保存时长（单位：天）</p>
 * @method boolean getOpenBilling() 获取<p>是否开启计费</p>
 * @method void setOpenBilling(boolean $OpenBilling) 设置<p>是否开启计费</p>
 * @method integer getSpanDailyCounters() 获取<p>业务系统上报额度</p>
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) 设置<p>业务系统上报额度</p>
 * @method integer getErrRateThreshold() 获取<p>错误率警示线，当应用的平均错误率超出该阈值时，系统会给出异常提示。</p>
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置<p>错误率警示线，当应用的平均错误率超出该阈值时，系统会给出异常提示。</p>
 * @method integer getSampleRate() 获取<p>采样率（单位：%）</p>
 * @method void setSampleRate(integer $SampleRate) 设置<p>采样率（单位：%）</p>
 * @method integer getErrorSample() 获取<p>是否开启错误采样（0=关, 1=开）</p>
 * @method void setErrorSample(integer $ErrorSample) 设置<p>是否开启错误采样（0=关, 1=开）</p>
 * @method integer getSlowRequestSavedThreshold() 获取<p>采样慢调用保存阈值（单位：ms）</p>
 * @method void setSlowRequestSavedThreshold(integer $SlowRequestSavedThreshold) 设置<p>采样慢调用保存阈值（单位：ms）</p>
 * @method integer getIsRelatedLog() 获取<p>是否开启日志功能（0=关, 1=开）</p>
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置<p>是否开启日志功能（0=关, 1=开）</p>
 * @method string getLogRegion() 获取<p>日志地域，开启日志功能后才会生效</p>
 * @method void setLogRegion(string $LogRegion) 设置<p>日志地域，开启日志功能后才会生效</p>
 * @method string getLogTopicID() 获取<p>CLS 日志主题 ID，开启日志功能后才会生效</p>
 * @method void setLogTopicID(string $LogTopicID) 设置<p>CLS 日志主题 ID，开启日志功能后才会生效</p>
 * @method string getLogSet() 获取<p>日志集，开启日志功能后才会生效</p>
 * @method void setLogSet(string $LogSet) 设置<p>日志集，开启日志功能后才会生效</p>
 * @method string getLogSource() 获取<p>日志源，开启日志功能后才会生效</p>
 * @method void setLogSource(string $LogSource) 设置<p>日志源，开启日志功能后才会生效</p>
 * @method array getCustomShowTags() 获取<p>用户自定义展示标签列表</p>
 * @method void setCustomShowTags(array $CustomShowTags) 设置<p>用户自定义展示标签列表</p>
 * @method integer getPayMode() 获取<p>修改计费模式（1为预付费，0为按量付费）</p>
 * @method void setPayMode(integer $PayMode) 设置<p>修改计费模式（1为预付费，0为按量付费）</p>
 * @method integer getResponseDurationWarningThreshold() 获取<p>响应时间警示线</p>
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) 设置<p>响应时间警示线</p>
 * @method integer getFree() 获取<p>是否免费（0=付费版；1=TSF 受限免费版；2=免费版），默认0</p>
 * @method void setFree(integer $Free) 设置<p>是否免费（0=付费版；1=TSF 受限免费版；2=免费版），默认0</p>
 * @method integer getIsRelatedDashboard() 获取<p>是否关联 Dashboard（0=关,1=开）</p>
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) 设置<p>是否关联 Dashboard（0=关,1=开）</p>
 * @method string getDashboardTopicID() 获取<p>关联的 Dashboard ID，开启关联 Dashboard 后才会生效</p>
 * @method void setDashboardTopicID(string $DashboardTopicID) 设置<p>关联的 Dashboard ID，开启关联 Dashboard 后才会生效</p>
 * @method integer getIsSqlInjectionAnalysis() 获取<p>是否开启 SQL 注入检测（0=关,1=开）</p>
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) 设置<p>是否开启 SQL 注入检测（0=关,1=开）</p>
 * @method integer getIsInstrumentationVulnerabilityScan() 获取<p>是否开启组件漏洞检测（0=关,1=开）</p>
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) 设置<p>是否开启组件漏洞检测（0=关,1=开）</p>
 * @method integer getIsRemoteCommandExecutionAnalysis() 获取<p>是否开启远程命令攻击检测</p>
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) 设置<p>是否开启远程命令攻击检测</p>
 * @method integer getIsMemoryHijackingAnalysis() 获取<p>是否开启内存马检测</p>
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) 设置<p>是否开启内存马检测</p>
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
 * @method integer getUrlLongSegmentThreshold() 获取<p>URL长分段收敛阈值</p>
 * @method void setUrlLongSegmentThreshold(integer $UrlLongSegmentThreshold) 设置<p>URL长分段收敛阈值</p>
 * @method integer getUrlNumberSegmentThreshold() 获取<p>URL数字分段收敛阈值</p>
 * @method void setUrlNumberSegmentThreshold(integer $UrlNumberSegmentThreshold) 设置<p>URL数字分段收敛阈值</p>
 * @method string getLogSpanIdKey() 获取<p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method void setLogSpanIdKey(string $LogSpanIdKey) 设置<p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
 * @method boolean getEnableHeadSampler() 获取<p>是否开启探针头采样</p>
 * @method void setEnableHeadSampler(boolean $EnableHeadSampler) 设置<p>是否开启探针头采样</p>
 * @method string getHeadSamplerType() 获取<p>头采类型</p><p>枚举值：</p><ul><li>parentbased_traceidratio： 默认</li></ul>
 * @method void setHeadSamplerType(string $HeadSamplerType) 设置<p>头采类型</p><p>枚举值：</p><ul><li>parentbased_traceidratio： 默认</li></ul>
 * @method integer getHeadSamplerArg() 获取<p>头采采样率</p><p>取值范围：[0, 100]</p>
 * @method void setHeadSamplerArg(integer $HeadSamplerArg) 设置<p>头采采样率</p><p>取值范围：[0, 100]</p>
 */
class ModifyApmInstanceRequest extends AbstractModel
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
     * @var array <p>Tag 列表</p>
     */
    public $Tags;

    /**
     * @var string <p>业务系统描述</p>
     */
    public $Description;

    /**
     * @var integer <p>Trace 数据保存时长（单位：天）</p>
     */
    public $TraceDuration;

    /**
     * @var boolean <p>是否开启计费</p>
     */
    public $OpenBilling;

    /**
     * @var integer <p>业务系统上报额度</p>
     */
    public $SpanDailyCounters;

    /**
     * @var integer <p>错误率警示线，当应用的平均错误率超出该阈值时，系统会给出异常提示。</p>
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
     * @var integer <p>是否开启日志功能（0=关, 1=开）</p>
     */
    public $IsRelatedLog;

    /**
     * @var string <p>日志地域，开启日志功能后才会生效</p>
     */
    public $LogRegion;

    /**
     * @var string <p>CLS 日志主题 ID，开启日志功能后才会生效</p>
     */
    public $LogTopicID;

    /**
     * @var string <p>日志集，开启日志功能后才会生效</p>
     */
    public $LogSet;

    /**
     * @var string <p>日志源，开启日志功能后才会生效</p>
     */
    public $LogSource;

    /**
     * @var array <p>用户自定义展示标签列表</p>
     */
    public $CustomShowTags;

    /**
     * @var integer <p>修改计费模式（1为预付费，0为按量付费）</p>
     */
    public $PayMode;

    /**
     * @var integer <p>响应时间警示线</p>
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @var integer <p>是否免费（0=付费版；1=TSF 受限免费版；2=免费版），默认0</p>
     */
    public $Free;

    /**
     * @var integer <p>是否关联 Dashboard（0=关,1=开）</p>
     */
    public $IsRelatedDashboard;

    /**
     * @var string <p>关联的 Dashboard ID，开启关联 Dashboard 后才会生效</p>
     */
    public $DashboardTopicID;

    /**
     * @var integer <p>是否开启 SQL 注入检测（0=关,1=开）</p>
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer <p>是否开启组件漏洞检测（0=关,1=开）</p>
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer <p>是否开启远程命令攻击检测</p>
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer <p>是否开启内存马检测</p>
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
     * @var boolean <p>是否开启探针头采样</p>
     */
    public $EnableHeadSampler;

    /**
     * @var string <p>头采类型</p><p>枚举值：</p><ul><li>parentbased_traceidratio： 默认</li></ul>
     */
    public $HeadSamplerType;

    /**
     * @var integer <p>头采采样率</p><p>取值范围：[0, 100]</p>
     */
    public $HeadSamplerArg;

    /**
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param string $Name <p>业务系统名</p>
     * @param array $Tags <p>Tag 列表</p>
     * @param string $Description <p>业务系统描述</p>
     * @param integer $TraceDuration <p>Trace 数据保存时长（单位：天）</p>
     * @param boolean $OpenBilling <p>是否开启计费</p>
     * @param integer $SpanDailyCounters <p>业务系统上报额度</p>
     * @param integer $ErrRateThreshold <p>错误率警示线，当应用的平均错误率超出该阈值时，系统会给出异常提示。</p>
     * @param integer $SampleRate <p>采样率（单位：%）</p>
     * @param integer $ErrorSample <p>是否开启错误采样（0=关, 1=开）</p>
     * @param integer $SlowRequestSavedThreshold <p>采样慢调用保存阈值（单位：ms）</p>
     * @param integer $IsRelatedLog <p>是否开启日志功能（0=关, 1=开）</p>
     * @param string $LogRegion <p>日志地域，开启日志功能后才会生效</p>
     * @param string $LogTopicID <p>CLS 日志主题 ID，开启日志功能后才会生效</p>
     * @param string $LogSet <p>日志集，开启日志功能后才会生效</p>
     * @param string $LogSource <p>日志源，开启日志功能后才会生效</p>
     * @param array $CustomShowTags <p>用户自定义展示标签列表</p>
     * @param integer $PayMode <p>修改计费模式（1为预付费，0为按量付费）</p>
     * @param integer $ResponseDurationWarningThreshold <p>响应时间警示线</p>
     * @param integer $Free <p>是否免费（0=付费版；1=TSF 受限免费版；2=免费版），默认0</p>
     * @param integer $IsRelatedDashboard <p>是否关联 Dashboard（0=关,1=开）</p>
     * @param string $DashboardTopicID <p>关联的 Dashboard ID，开启关联 Dashboard 后才会生效</p>
     * @param integer $IsSqlInjectionAnalysis <p>是否开启 SQL 注入检测（0=关,1=开）</p>
     * @param integer $IsInstrumentationVulnerabilityScan <p>是否开启组件漏洞检测（0=关,1=开）</p>
     * @param integer $IsRemoteCommandExecutionAnalysis <p>是否开启远程命令攻击检测</p>
     * @param integer $IsMemoryHijackingAnalysis <p>是否开启内存马检测</p>
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
     * @param integer $UrlLongSegmentThreshold <p>URL长分段收敛阈值</p>
     * @param integer $UrlNumberSegmentThreshold <p>URL数字分段收敛阈值</p>
     * @param string $LogSpanIdKey <p>spanId的索引key: 当CLS索引类型为键值索引时生效</p>
     * @param boolean $EnableHeadSampler <p>是否开启探针头采样</p>
     * @param string $HeadSamplerType <p>头采类型</p><p>枚举值：</p><ul><li>parentbased_traceidratio： 默认</li></ul>
     * @param integer $HeadSamplerArg <p>头采采样率</p><p>取值范围：[0, 100]</p>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("OpenBilling",$param) and $param["OpenBilling"] !== null) {
            $this->OpenBilling = $param["OpenBilling"];
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
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

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("CustomShowTags",$param) and $param["CustomShowTags"] !== null) {
            $this->CustomShowTags = $param["CustomShowTags"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResponseDurationWarningThreshold",$param) and $param["ResponseDurationWarningThreshold"] !== null) {
            $this->ResponseDurationWarningThreshold = $param["ResponseDurationWarningThreshold"];
        }

        if (array_key_exists("Free",$param) and $param["Free"] !== null) {
            $this->Free = $param["Free"];
        }

        if (array_key_exists("IsRelatedDashboard",$param) and $param["IsRelatedDashboard"] !== null) {
            $this->IsRelatedDashboard = $param["IsRelatedDashboard"];
        }

        if (array_key_exists("DashboardTopicID",$param) and $param["DashboardTopicID"] !== null) {
            $this->DashboardTopicID = $param["DashboardTopicID"];
        }

        if (array_key_exists("IsSqlInjectionAnalysis",$param) and $param["IsSqlInjectionAnalysis"] !== null) {
            $this->IsSqlInjectionAnalysis = $param["IsSqlInjectionAnalysis"];
        }

        if (array_key_exists("IsInstrumentationVulnerabilityScan",$param) and $param["IsInstrumentationVulnerabilityScan"] !== null) {
            $this->IsInstrumentationVulnerabilityScan = $param["IsInstrumentationVulnerabilityScan"];
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

        if (array_key_exists("UrlLongSegmentThreshold",$param) and $param["UrlLongSegmentThreshold"] !== null) {
            $this->UrlLongSegmentThreshold = $param["UrlLongSegmentThreshold"];
        }

        if (array_key_exists("UrlNumberSegmentThreshold",$param) and $param["UrlNumberSegmentThreshold"] !== null) {
            $this->UrlNumberSegmentThreshold = $param["UrlNumberSegmentThreshold"];
        }

        if (array_key_exists("LogSpanIdKey",$param) and $param["LogSpanIdKey"] !== null) {
            $this->LogSpanIdKey = $param["LogSpanIdKey"];
        }

        if (array_key_exists("EnableHeadSampler",$param) and $param["EnableHeadSampler"] !== null) {
            $this->EnableHeadSampler = $param["EnableHeadSampler"];
        }

        if (array_key_exists("HeadSamplerType",$param) and $param["HeadSamplerType"] !== null) {
            $this->HeadSamplerType = $param["HeadSamplerType"];
        }

        if (array_key_exists("HeadSamplerArg",$param) and $param["HeadSamplerArg"] !== null) {
            $this->HeadSamplerArg = $param["HeadSamplerArg"];
        }
    }
}
