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
 * 预聚合Yaml任务详情
 *
 * @method string getYamlId() 获取yaml配置文件id
 * @method void setYamlId(string $YamlId) 设置yaml配置文件id
 * @method string getTopicId() 获取源日志主题id
 * @method void setTopicId(string $TopicId) 设置源日志主题id
 * @method string getDstTopicId() 获取写入描述的日志主题id
 * @method void setDstTopicId(string $DstTopicId) 设置写入描述的日志主题id
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
 * @method string getYamlConfigName() 获取yaml配置文件名称
 * @method void setYamlConfigName(string $YamlConfigName) 设置yaml配置文件名称
 * @method string getYamlContent() 获取yaml配置文件内容
 * @method void setYamlContent(string $YamlContent) 设置yaml配置文件内容
 * @method integer getSubTaskCount() 获取yaml文件子任务数量
 * @method void setSubTaskCount(integer $SubTaskCount) 设置yaml文件子任务数量
 */
class RecordingRuleYamlTaskInfo extends AbstractModel
{
    /**
     * @var string yaml配置文件id
     */
    public $YamlId;

    /**
     * @var string 源日志主题id
     */
    public $TopicId;

    /**
     * @var string 写入描述的日志主题id
     */
    public $DstTopicId;

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
     * @var string yaml配置文件名称
     */
    public $YamlConfigName;

    /**
     * @var string yaml配置文件内容
     */
    public $YamlContent;

    /**
     * @var integer yaml文件子任务数量
     */
    public $SubTaskCount;

    /**
     * @param string $YamlId yaml配置文件id
     * @param string $TopicId 源日志主题id
     * @param string $DstTopicId 写入描述的日志主题id
     * @param string $CreateTime 任务创建时间
     * @param string $UpdateTime 任务更新时间
     * @param integer $Status 任务状态，1:运行 2:停止 3:异常-找不到源日志主题 4:异常-找不到目标主题

5: 访问权限问题 6:内部故障 7:其他故障
     * @param integer $EnableFlag 任务启用状态，1开启,  2关闭
     * @param integer $ProcessStartTime 调度开始时间
     * @param integer $ProcessPeriod 调度周期(分钟)
     * @param integer $ProcessDelay 执行延迟(秒)
     * @param integer $HasServicesLog 是否开启投递服务日志。1：关闭，2：开启。
     * @param string $YamlConfigName yaml配置文件名称
     * @param string $YamlContent yaml配置文件内容
     * @param integer $SubTaskCount yaml文件子任务数量
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
        if (array_key_exists("YamlId",$param) and $param["YamlId"] !== null) {
            $this->YamlId = $param["YamlId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("DstTopicId",$param) and $param["DstTopicId"] !== null) {
            $this->DstTopicId = $param["DstTopicId"];
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

        if (array_key_exists("YamlConfigName",$param) and $param["YamlConfigName"] !== null) {
            $this->YamlConfigName = $param["YamlConfigName"];
        }

        if (array_key_exists("YamlContent",$param) and $param["YamlContent"] !== null) {
            $this->YamlContent = $param["YamlContent"];
        }

        if (array_key_exists("SubTaskCount",$param) and $param["SubTaskCount"] !== null) {
            $this->SubTaskCount = $param["SubTaskCount"];
        }
    }
}
