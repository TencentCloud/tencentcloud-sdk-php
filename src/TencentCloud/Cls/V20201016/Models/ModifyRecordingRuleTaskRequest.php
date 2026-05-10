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
 * ModifyRecordingRuleTask请求参数结构体
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTopicId() 获取<p>源指标主题id</p>
 * @method void setTopicId(string $TopicId) 设置<p>源指标主题id</p>
 * @method string getDstTopicId() 获取<p>目标指标主题id</p>
 * @method void setDstTopicId(string $DstTopicId) 设置<p>目标指标主题id</p>
 * @method string getName() 获取<p>任务名称</p>
 * @method void setName(string $Name) 设置<p>任务名称</p>
 * @method integer getEnableFlag() 获取<p>任务启动状态.   1开启,  2关闭</p>
 * @method void setEnableFlag(integer $EnableFlag) 设置<p>任务启动状态.   1开启,  2关闭</p>
 * @method integer getProcessStartTime() 获取<p>调度开始时间,Unix时间戳，单位ms</p>
 * @method void setProcessStartTime(integer $ProcessStartTime) 设置<p>调度开始时间,Unix时间戳，单位ms</p>
 * @method integer getProcessPeriod() 获取<p>调度周期(分钟)，支持范围(0,1440]分钟。</p>
 * @method void setProcessPeriod(integer $ProcessPeriod) 设置<p>调度周期(分钟)，支持范围(0,1440]分钟。</p>
 * @method integer getProcessDelay() 获取<p>执行延迟(秒)</p>
 * @method void setProcessDelay(integer $ProcessDelay) 设置<p>执行延迟(秒)</p>
 * @method string getMetricName() 获取<p>指标名称</p>
 * @method void setMetricName(string $MetricName) 设置<p>指标名称</p>
 * @method string getRecordingRuleContent() 获取<p>执行语句(PromQL)</p>
 * @method void setRecordingRuleContent(string $RecordingRuleContent) 设置<p>执行语句(PromQL)</p>
 * @method array getCustomMetricLabels() 获取<p>自定义指标名称</p>
 * @method void setCustomMetricLabels(array $CustomMetricLabels) 设置<p>自定义指标名称</p>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 */
class ModifyRecordingRuleTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>源指标主题id</p>
     */
    public $TopicId;

    /**
     * @var string <p>目标指标主题id</p>
     */
    public $DstTopicId;

    /**
     * @var string <p>任务名称</p>
     */
    public $Name;

    /**
     * @var integer <p>任务启动状态.   1开启,  2关闭</p>
     */
    public $EnableFlag;

    /**
     * @var integer <p>调度开始时间,Unix时间戳，单位ms</p>
     */
    public $ProcessStartTime;

    /**
     * @var integer <p>调度周期(分钟)，支持范围(0,1440]分钟。</p>
     */
    public $ProcessPeriod;

    /**
     * @var integer <p>执行延迟(秒)</p>
     */
    public $ProcessDelay;

    /**
     * @var string <p>指标名称</p>
     */
    public $MetricName;

    /**
     * @var string <p>执行语句(PromQL)</p>
     */
    public $RecordingRuleContent;

    /**
     * @var array <p>自定义指标名称</p>
     */
    public $CustomMetricLabels;

    /**
     * @var integer <p>是否开启投递服务日志。1：关闭，2：开启。</p>
     */
    public $HasServicesLog;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param string $TopicId <p>源指标主题id</p>
     * @param string $DstTopicId <p>目标指标主题id</p>
     * @param string $Name <p>任务名称</p>
     * @param integer $EnableFlag <p>任务启动状态.   1开启,  2关闭</p>
     * @param integer $ProcessStartTime <p>调度开始时间,Unix时间戳，单位ms</p>
     * @param integer $ProcessPeriod <p>调度周期(分钟)，支持范围(0,1440]分钟。</p>
     * @param integer $ProcessDelay <p>执行延迟(秒)</p>
     * @param string $MetricName <p>指标名称</p>
     * @param string $RecordingRuleContent <p>执行语句(PromQL)</p>
     * @param array $CustomMetricLabels <p>自定义指标名称</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("RecordingRuleContent",$param) and $param["RecordingRuleContent"] !== null) {
            $this->RecordingRuleContent = $param["RecordingRuleContent"];
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
