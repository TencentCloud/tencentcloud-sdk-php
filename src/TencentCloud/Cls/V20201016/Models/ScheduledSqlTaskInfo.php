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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScheduledSql任务详情
 *
 * @method string getTaskId() 获取ScheduledSql任务id
 * @method void setTaskId(string $TaskId) 设置ScheduledSql任务id
 * @method string getName() 获取ScheduledSql任务名称
 * @method void setName(string $Name) 设置ScheduledSql任务名称
 * @method string getSrcTopicId() 获取源日志主题id
 * @method void setSrcTopicId(string $SrcTopicId) 设置源日志主题id
 * @method string getSrcTopicName() 获取源日志主题名称
 * @method void setSrcTopicName(string $SrcTopicName) 设置源日志主题名称
 * @method ScheduledSqlResouceInfo getDstResource() 获取定时SQL分析目标主题
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) 设置定时SQL分析目标主题
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
 * @method string getScheduledSqlContent() 获取查询语句
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) 设置查询语句
 * @method string getProcessStartTime() 获取调度开始时间
 * @method void setProcessStartTime(string $ProcessStartTime) 设置调度开始时间
 * @method integer getProcessType() 获取调度类型，1:持续运行 2:指定时间范围
 * @method void setProcessType(integer $ProcessType) 设置调度类型，1:持续运行 2:指定时间范围
 * @method string getProcessEndTime() 获取调度结束时间，当process_type=2时为必传字段
 * @method void setProcessEndTime(string $ProcessEndTime) 设置调度结束时间，当process_type=2时为必传字段
 * @method integer getProcessPeriod() 获取调度周期(分钟)
 * @method void setProcessPeriod(integer $ProcessPeriod) 设置调度周期(分钟)
 * @method string getProcessTimeWindow() 获取查询的时间窗口. @m-15m, @m，意为近15分钟
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) 设置查询的时间窗口. @m-15m, @m，意为近15分钟
 * @method integer getProcessDelay() 获取执行延迟(秒)
 * @method void setProcessDelay(integer $ProcessDelay) 设置执行延迟(秒)
 * @method string getSrcTopicRegion() 获取源topicId的地域信息
 * @method void setSrcTopicRegion(string $SrcTopicRegion) 设置源topicId的地域信息
 * @method integer getSyntaxRule() 获取语法规则，0：Lucene语法，1：CQL语法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyntaxRule(integer $SyntaxRule) 设置语法规则，0：Lucene语法，1：CQL语法
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScheduledSqlTaskInfo extends AbstractModel
{
    /**
     * @var string ScheduledSql任务id
     */
    public $TaskId;

    /**
     * @var string ScheduledSql任务名称
     */
    public $Name;

    /**
     * @var string 源日志主题id
     */
    public $SrcTopicId;

    /**
     * @var string 源日志主题名称
     */
    public $SrcTopicName;

    /**
     * @var ScheduledSqlResouceInfo 定时SQL分析目标主题
     */
    public $DstResource;

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
     * @var string 查询语句
     */
    public $ScheduledSqlContent;

    /**
     * @var string 调度开始时间
     */
    public $ProcessStartTime;

    /**
     * @var integer 调度类型，1:持续运行 2:指定时间范围
     */
    public $ProcessType;

    /**
     * @var string 调度结束时间，当process_type=2时为必传字段
     */
    public $ProcessEndTime;

    /**
     * @var integer 调度周期(分钟)
     */
    public $ProcessPeriod;

    /**
     * @var string 查询的时间窗口. @m-15m, @m，意为近15分钟
     */
    public $ProcessTimeWindow;

    /**
     * @var integer 执行延迟(秒)
     */
    public $ProcessDelay;

    /**
     * @var string 源topicId的地域信息
     */
    public $SrcTopicRegion;

    /**
     * @var integer 语法规则，0：Lucene语法，1：CQL语法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyntaxRule;

    /**
     * @param string $TaskId ScheduledSql任务id
     * @param string $Name ScheduledSql任务名称
     * @param string $SrcTopicId 源日志主题id
     * @param string $SrcTopicName 源日志主题名称
     * @param ScheduledSqlResouceInfo $DstResource 定时SQL分析目标主题
     * @param string $CreateTime 任务创建时间
     * @param string $UpdateTime 任务更新时间
     * @param integer $Status 任务状态，1:运行 2:停止 3:异常-找不到源日志主题 4:异常-找不到目标主题

5: 访问权限问题 6:内部故障 7:其他故障
     * @param integer $EnableFlag 任务启用状态，1开启,  2关闭
     * @param string $ScheduledSqlContent 查询语句
     * @param string $ProcessStartTime 调度开始时间
     * @param integer $ProcessType 调度类型，1:持续运行 2:指定时间范围
     * @param string $ProcessEndTime 调度结束时间，当process_type=2时为必传字段
     * @param integer $ProcessPeriod 调度周期(分钟)
     * @param string $ProcessTimeWindow 查询的时间窗口. @m-15m, @m，意为近15分钟
     * @param integer $ProcessDelay 执行延迟(秒)
     * @param string $SrcTopicRegion 源topicId的地域信息
     * @param integer $SyntaxRule 语法规则，0：Lucene语法，1：CQL语法
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("SrcTopicName",$param) and $param["SrcTopicName"] !== null) {
            $this->SrcTopicName = $param["SrcTopicName"];
        }

        if (array_key_exists("DstResource",$param) and $param["DstResource"] !== null) {
            $this->DstResource = new ScheduledSqlResouceInfo();
            $this->DstResource->deserialize($param["DstResource"]);
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

        if (array_key_exists("ScheduledSqlContent",$param) and $param["ScheduledSqlContent"] !== null) {
            $this->ScheduledSqlContent = $param["ScheduledSqlContent"];
        }

        if (array_key_exists("ProcessStartTime",$param) and $param["ProcessStartTime"] !== null) {
            $this->ProcessStartTime = $param["ProcessStartTime"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("ProcessEndTime",$param) and $param["ProcessEndTime"] !== null) {
            $this->ProcessEndTime = $param["ProcessEndTime"];
        }

        if (array_key_exists("ProcessPeriod",$param) and $param["ProcessPeriod"] !== null) {
            $this->ProcessPeriod = $param["ProcessPeriod"];
        }

        if (array_key_exists("ProcessTimeWindow",$param) and $param["ProcessTimeWindow"] !== null) {
            $this->ProcessTimeWindow = $param["ProcessTimeWindow"];
        }

        if (array_key_exists("ProcessDelay",$param) and $param["ProcessDelay"] !== null) {
            $this->ProcessDelay = $param["ProcessDelay"];
        }

        if (array_key_exists("SrcTopicRegion",$param) and $param["SrcTopicRegion"] !== null) {
            $this->SrcTopicRegion = $param["SrcTopicRegion"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }
    }
}
