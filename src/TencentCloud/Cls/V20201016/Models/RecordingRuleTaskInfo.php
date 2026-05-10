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
 * 预聚合任务详情
 *
 * @method string getTaskId() 获取预聚合任务id
 * @method void setTaskId(string $TaskId) 设置预聚合任务id
 * @method string getTopicId() 获取源日志主题id
 * @method void setTopicId(string $TopicId) 设置源日志主题id
 * @method string getName() 获取预聚合任务名称
 * @method void setName(string $Name) 设置预聚合任务名称
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getUpdateTime() 获取任务更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间
 * @method integer getStatus() 获取任务状态，1:运行 2:停止 3:异常-找不到源日志主题 4:异常-找不到目标主题

5: 访问权限问题 6:内部故障 7:其他故障
 * @method void setStatus(integer $Status) 设置任务状态，1:运行 2:停止 3:异常-找不到源日志主题 4:异常-找不到目标主题

5: 访问权限问题 6:内部故障 7:其他故障
 * @method integer getEnableFlag() 获取任务启用状态，1开启,  2关闭
 * @method void setEnableFlag(integer $EnableFlag) 设置任务启用状态，1开启,  2关闭
 * @method integer getProcessStartTime() 获取调度开始时间
 * @method void setProcessStartTime(integer $ProcessStartTime) 设置调度开始时间
 * @method integer getProcessPeriod() 获取调度周期(分钟)
 * @method void setProcessPeriod(integer $ProcessPeriod) 设置调度周期(分钟)
 * @method integer getProcessDelay() 获取执行延迟(秒)
 * @method void setProcessDelay(integer $ProcessDelay) 设置执行延迟(秒)
 * @method integer getHasServicesLog() 获取是否开启投递服务日志。1：关闭，2：开启。
 * @method void setHasServicesLog(integer $HasServicesLog) 设置是否开启投递服务日志。1：关闭，2：开启。
 * @method string getRecordingRuleContent() 获取预聚合检索语句
 * @method void setRecordingRuleContent(string $RecordingRuleContent) 设置预聚合检索语句
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method array getCustomMetricLabels() 获取自定义指标名称
 * @method void setCustomMetricLabels(array $CustomMetricLabels) 设置自定义指标名称
 * @method string getYamlId() 获取yaml配置文件id
 * @method void setYamlId(string $YamlId) 设置yaml配置文件id
 * @method string getYamlConfigName() 获取yaml配置文件名称
 * @method void setYamlConfigName(string $YamlConfigName) 设置yaml配置文件名称
 * @method string getDstTopicId() 获取目标日志主题id
 * @method void setDstTopicId(string $DstTopicId) 设置目标日志主题id
 */
class RecordingRuleTaskInfo extends AbstractModel
{
    /**
     * @var string 预聚合任务id
     */
    public $TaskId;

    /**
     * @var string 源日志主题id
     */
    public $TopicId;

    /**
     * @var string 预聚合任务名称
     */
    public $Name;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 任务状态，1:运行 2:停止 3:异常-找不到源日志主题 4:异常-找不到目标主题

5: 访问权限问题 6:内部故障 7:其他故障
     */
    public $Status;

    /**
     * @var integer 任务启用状态，1开启,  2关闭
     */
    public $EnableFlag;

    /**
     * @var integer 调度开始时间
     */
    public $ProcessStartTime;

    /**
     * @var integer 调度周期(分钟)
     */
    public $ProcessPeriod;

    /**
     * @var integer 执行延迟(秒)
     */
    public $ProcessDelay;

    /**
     * @var integer 是否开启投递服务日志。1：关闭，2：开启。
     */
    public $HasServicesLog;

    /**
     * @var string 预聚合检索语句
     */
    public $RecordingRuleContent;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var array 自定义指标名称
     */
    public $CustomMetricLabels;

    /**
     * @var string yaml配置文件id
     */
    public $YamlId;

    /**
     * @var string yaml配置文件名称
     */
    public $YamlConfigName;

    /**
     * @var string 目标日志主题id
     */
    public $DstTopicId;

    /**
     * @param string $TaskId 预聚合任务id
     * @param string $TopicId 源日志主题id
     * @param string $Name 预聚合任务名称
     * @param string $CreateTime 任务创建时间
     * @param string $UpdateTime 任务更新时间
     * @param integer $Status 任务状态，1:运行 2:停止 3:异常-找不到源日志主题 4:异常-找不到目标主题

5: 访问权限问题 6:内部故障 7:其他故障
     * @param integer $EnableFlag 任务启用状态，1开启,  2关闭
     * @param integer $ProcessStartTime 调度开始时间
     * @param integer $ProcessPeriod 调度周期(分钟)
     * @param integer $ProcessDelay 执行延迟(秒)
     * @param integer $HasServicesLog 是否开启投递服务日志。1：关闭，2：开启。
     * @param string $RecordingRuleContent 预聚合检索语句
     * @param string $MetricName 指标名称
     * @param array $CustomMetricLabels 自定义指标名称
     * @param string $YamlId yaml配置文件id
     * @param string $YamlConfigName yaml配置文件名称
     * @param string $DstTopicId 目标日志主题id
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
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

        if (array_key_exists("YamlId",$param) and $param["YamlId"] !== null) {
            $this->YamlId = $param["YamlId"];
        }

        if (array_key_exists("YamlConfigName",$param) and $param["YamlConfigName"] !== null) {
            $this->YamlConfigName = $param["YamlConfigName"];
        }

        if (array_key_exists("DstTopicId",$param) and $param["DstTopicId"] !== null) {
            $this->DstTopicId = $param["DstTopicId"];
        }
    }
}
