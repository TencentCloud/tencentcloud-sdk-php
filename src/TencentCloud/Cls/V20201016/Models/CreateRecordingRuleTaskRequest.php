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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRecordingRuleTask请求参数结构体
 *
 * @method string getTopicId() 获取<p>源指标主题id</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/614/56454">DescribeTopics</a></li><li><a href="https://console.cloud.tencent.com/cls/metric">指标主题</a></li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>源指标主题id</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/614/56454">DescribeTopics</a></li><li><a href="https://console.cloud.tencent.com/cls/metric">指标主题</a></li></ul>
 * @method string getDstTopicId() 获取<p>目标指标主题id，可与 TopicId 相同</p>
 * @method void setDstTopicId(string $DstTopicId) 设置<p>目标指标主题id，可与 TopicId 相同</p>
 * @method string getName() 获取<p>预聚合任务名称</p><p>入参限制：仅支持字母、数字、及下划线，不允许下划线开头，小于256个字符</p>
 * @method void setName(string $Name) 设置<p>预聚合任务名称</p><p>入参限制：仅支持字母、数字、及下划线，不允许下划线开头，小于256个字符</p>
 * @method integer getEnableFlag() 获取<p>任务状态； 1:开启；2:关闭</p>
 * @method void setEnableFlag(integer $EnableFlag) 设置<p>任务状态； 1:开启；2:关闭</p>
 * @method integer getProcessStartTime() 获取<p>任务执行开始时间 ,Unix时间戳</p><p>单位：ms</p>
 * @method void setProcessStartTime(integer $ProcessStartTime) 设置<p>任务执行开始时间 ,Unix时间戳</p><p>单位：ms</p>
 * @method integer getProcessPeriod() 获取<p>调度周期(分钟)，支持范围(0,1440]分钟。</p>
 * @method void setProcessPeriod(integer $ProcessPeriod) 设置<p>调度周期(分钟)，支持范围(0,1440]分钟。</p>
 * @method integer getProcessDelay() 获取<p>执行延迟，建议设置为30秒，避免指标上报延迟导致预聚合任务计算结果不精确</p><p>单位：秒</p>
 * @method void setProcessDelay(integer $ProcessDelay) 设置<p>执行延迟，建议设置为30秒，避免指标上报延迟导致预聚合任务计算结果不精确</p><p>单位：秒</p>
 * @method string getRecordingRuleContent() 获取<p>执行语句(PromQL)</p>
 * @method void setRecordingRuleContent(string $RecordingRuleContent) 设置<p>执行语句(PromQL)</p>
 * @method string getMetricName() 获取<p>指标名称</p>
 * @method void setMetricName(string $MetricName) 设置<p>指标名称</p>
 * @method array getCustomMetricLabels() 获取<p>指标自定义维度</p>
 * @method void setCustomMetricLabels(array $CustomMetricLabels) 设置<p>指标自定义维度</p>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 */
class CreateRecordingRuleTaskRequest extends AbstractModel
{
    /**
     * @var string <p>源指标主题id</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/614/56454">DescribeTopics</a></li><li><a href="https://console.cloud.tencent.com/cls/metric">指标主题</a></li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>目标指标主题id，可与 TopicId 相同</p>
     */
    public $DstTopicId;

    /**
     * @var string <p>预聚合任务名称</p><p>入参限制：仅支持字母、数字、及下划线，不允许下划线开头，小于256个字符</p>
     */
    public $Name;

    /**
     * @var integer <p>任务状态； 1:开启；2:关闭</p>
     */
    public $EnableFlag;

    /**
     * @var integer <p>任务执行开始时间 ,Unix时间戳</p><p>单位：ms</p>
     */
    public $ProcessStartTime;

    /**
     * @var integer <p>调度周期(分钟)，支持范围(0,1440]分钟。</p>
     */
    public $ProcessPeriod;

    /**
     * @var integer <p>执行延迟，建议设置为30秒，避免指标上报延迟导致预聚合任务计算结果不精确</p><p>单位：秒</p>
     */
    public $ProcessDelay;

    /**
     * @var string <p>执行语句(PromQL)</p>
     */
    public $RecordingRuleContent;

    /**
     * @var string <p>指标名称</p>
     */
    public $MetricName;

    /**
     * @var array <p>指标自定义维度</p>
     */
    public $CustomMetricLabels;

    /**
     * @var integer <p>是否开启投递服务日志。1：关闭，2：开启。</p>
     */
    public $HasServicesLog;

    /**
     * @param string $TopicId <p>源指标主题id</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/614/56454">DescribeTopics</a></li><li><a href="https://console.cloud.tencent.com/cls/metric">指标主题</a></li></ul>
     * @param string $DstTopicId <p>目标指标主题id，可与 TopicId 相同</p>
     * @param string $Name <p>预聚合任务名称</p><p>入参限制：仅支持字母、数字、及下划线，不允许下划线开头，小于256个字符</p>
     * @param integer $EnableFlag <p>任务状态； 1:开启；2:关闭</p>
     * @param integer $ProcessStartTime <p>任务执行开始时间 ,Unix时间戳</p><p>单位：ms</p>
     * @param integer $ProcessPeriod <p>调度周期(分钟)，支持范围(0,1440]分钟。</p>
     * @param integer $ProcessDelay <p>执行延迟，建议设置为30秒，避免指标上报延迟导致预聚合任务计算结果不精确</p><p>单位：秒</p>
     * @param string $RecordingRuleContent <p>执行语句(PromQL)</p>
     * @param string $MetricName <p>指标名称</p>
     * @param array $CustomMetricLabels <p>指标自定义维度</p>
     * @param integer $HasServicesLog <p>是否开启投递服务日志。1：关闭，2：开启。</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("DstTopicId",$param) and $param["DstTopicId"] !== null) {
            $this->DstTopicId = $param["DstTopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("ProcessStartTime",$param) and $param["ProcessStartTime"] !== null) {
            $this->ProcessStartTime = $param["ProcessStartTime"];
        }

        if (array_key_exists("ProcessPeriod",$param) and $param["ProcessPeriod"] !== null) {
            $this->ProcessPeriod = $param["ProcessPeriod"];
        }

        if (array_key_exists("ProcessDelay",$param) and $param["ProcessDelay"] !== null) {
            $this->ProcessDelay = $param["ProcessDelay"];
        }

        if (array_key_exists("RecordingRuleContent",$param) and $param["RecordingRuleContent"] !== null) {
            $this->RecordingRuleContent = $param["RecordingRuleContent"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("CustomMetricLabels",$param) and $param["CustomMetricLabels"] !== null) {
            $this->CustomMetricLabels = [];
            foreach ($param["CustomMetricLabels"] as $key => $value){
                $obj = new MetricLabel();
                $obj->deserialize($value);
                array_push($this->CustomMetricLabels, $obj);
            }
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
