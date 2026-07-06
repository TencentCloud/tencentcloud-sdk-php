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
 * 投递DLC任务配置信息
 *
 * @method string getTaskId() 获取<p>任务id。</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id。</p>
 * @method integer getUin() 获取<p>账号id。</p>
 * @method void setUin(integer $Uin) 设置<p>账号id。</p>
 * @method string getTopicId() 获取<p>日志主题id。</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id。</p>
 * @method string getName() 获取<p>任务名称。</p>
 * @method void setName(string $Name) 设置<p>任务名称。</p>
 * @method integer getDeliverType() 获取<p>投递类型，0：实时投递，1：历史投递</p>
 * @method void setDeliverType(integer $DeliverType) 设置<p>投递类型，0：实时投递，1：历史投递</p>
 * @method integer getMaxSize() 获取<p>投递文件大小，单位MB</p>
 * @method void setMaxSize(integer $MaxSize) 设置<p>投递文件大小，单位MB</p>
 * @method integer getInterval() 获取<p>投递间隔 单位秒</p>
 * @method void setInterval(integer $Interval) 设置<p>投递间隔 单位秒</p>
 * @method integer getStartTime() 获取<p>投递时间范围的开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>投递时间范围的开始时间</p>
 * @method integer getEndTime() 获取<p>投递时间范围的结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>投递时间范围的结束时间</p>
 * @method DlcInfo getDlcInfo() 获取<p>dlc配置信息</p>
 * @method void setDlcInfo(DlcInfo $DlcInfo) 设置<p>dlc配置信息</p>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。1关闭，2开启</p>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。1关闭，2开启</p>
 * @method integer getStatus() 获取<p>任务状态。</p>
 * @method void setStatus(integer $Status) 设置<p>任务状态。</p>
 * @method integer getProgress() 获取<p>任务进度。历史投递任务生效。</p>
 * @method void setProgress(integer $Progress) 设置<p>任务进度。历史投递任务生效。</p>
 * @method integer getBizType() 获取<p>日志主题类型。0:标准主题，1:指标主题</p>
 * @method void setBizType(integer $BizType) 设置<p>日志主题类型。0:标准主题，1:指标主题</p>
 * @method integer getCreateTime() 获取<p>任务创建时间。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>任务创建时间。</p>
 * @method integer getUpdateTime() 获取<p>任务修改时间。</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>任务修改时间。</p>
 * @method boolean getAutoCreateField() 获取<p>自动创建dlc字段</p><p>默认值：false</p><p>当您的日志中有新增字段时，系统自动将其投递至DLC</p>
 * @method void setAutoCreateField(boolean $AutoCreateField) 设置<p>自动创建dlc字段</p><p>默认值：false</p><p>当您的日志中有新增字段时，系统自动将其投递至DLC</p>
 * @method DlcFailHandle getDlcFailHandle() 获取<p>将投递失败的日志存储至DLC表</p>
 * @method void setDlcFailHandle(DlcFailHandle $DlcFailHandle) 设置<p>将投递失败的日志存储至DLC表</p>
 * @method string getDSLFilter() 获取<p>日志预过滤-数据写入 Splunk 的原始数据进行预过滤处理</p>
 * @method void setDSLFilter(string $DSLFilter) 设置<p>日志预过滤-数据写入 Splunk 的原始数据进行预过滤处理</p>
 */
class DlcDeliverInfo extends AbstractModel
{
    /**
     * @var string <p>任务id。</p>
     */
    public $TaskId;

    /**
     * @var integer <p>账号id。</p>
     */
    public $Uin;

    /**
     * @var string <p>日志主题id。</p>
     */
    public $TopicId;

    /**
     * @var string <p>任务名称。</p>
     */
    public $Name;

    /**
     * @var integer <p>投递类型，0：实时投递，1：历史投递</p>
     */
    public $DeliverType;

    /**
     * @var integer <p>投递文件大小，单位MB</p>
     */
    public $MaxSize;

    /**
     * @var integer <p>投递间隔 单位秒</p>
     */
    public $Interval;

    /**
     * @var integer <p>投递时间范围的开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>投递时间范围的结束时间</p>
     */
    public $EndTime;

    /**
     * @var DlcInfo <p>dlc配置信息</p>
     */
    public $DlcInfo;

    /**
     * @var integer <p>是否开启投递服务日志。1关闭，2开启</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>任务状态。</p>
     */
    public $Status;

    /**
     * @var integer <p>任务进度。历史投递任务生效。</p>
     */
    public $Progress;

    /**
     * @var integer <p>日志主题类型。0:标准主题，1:指标主题</p>
     */
    public $BizType;

    /**
     * @var integer <p>任务创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>任务修改时间。</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>自动创建dlc字段</p><p>默认值：false</p><p>当您的日志中有新增字段时，系统自动将其投递至DLC</p>
     */
    public $AutoCreateField;

    /**
     * @var DlcFailHandle <p>将投递失败的日志存储至DLC表</p>
     */
    public $DlcFailHandle;

    /**
     * @var string <p>日志预过滤-数据写入 Splunk 的原始数据进行预过滤处理</p>
     */
    public $DSLFilter;

    /**
     * @param string $TaskId <p>任务id。</p>
     * @param integer $Uin <p>账号id。</p>
     * @param string $TopicId <p>日志主题id。</p>
     * @param string $Name <p>任务名称。</p>
     * @param integer $DeliverType <p>投递类型，0：实时投递，1：历史投递</p>
     * @param integer $MaxSize <p>投递文件大小，单位MB</p>
     * @param integer $Interval <p>投递间隔 单位秒</p>
     * @param integer $StartTime <p>投递时间范围的开始时间</p>
     * @param integer $EndTime <p>投递时间范围的结束时间</p>
     * @param DlcInfo $DlcInfo <p>dlc配置信息</p>
     * @param integer $HasServicesLog <p>是否开启投递服务日志。1关闭，2开启</p>
     * @param integer $Status <p>任务状态。</p>
     * @param integer $Progress <p>任务进度。历史投递任务生效。</p>
     * @param integer $BizType <p>日志主题类型。0:标准主题，1:指标主题</p>
     * @param integer $CreateTime <p>任务创建时间。</p>
     * @param integer $UpdateTime <p>任务修改时间。</p>
     * @param boolean $AutoCreateField <p>自动创建dlc字段</p><p>默认值：false</p><p>当您的日志中有新增字段时，系统自动将其投递至DLC</p>
     * @param DlcFailHandle $DlcFailHandle <p>将投递失败的日志存储至DLC表</p>
     * @param string $DSLFilter <p>日志预过滤-数据写入 Splunk 的原始数据进行预过滤处理</p>
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

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DlcInfo",$param) and $param["DlcInfo"] !== null) {
            $this->DlcInfo = new DlcInfo();
            $this->DlcInfo->deserialize($param["DlcInfo"]);
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AutoCreateField",$param) and $param["AutoCreateField"] !== null) {
            $this->AutoCreateField = $param["AutoCreateField"];
        }

        if (array_key_exists("DlcFailHandle",$param) and $param["DlcFailHandle"] !== null) {
            $this->DlcFailHandle = new DlcFailHandle();
            $this->DlcFailHandle->deserialize($param["DlcFailHandle"]);
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
