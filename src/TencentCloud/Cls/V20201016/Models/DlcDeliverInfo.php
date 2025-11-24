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
 * @method string getTaskId() 获取任务id。
 * @method void setTaskId(string $TaskId) 设置任务id。
 * @method integer getUin() 获取账号id。
 * @method void setUin(integer $Uin) 设置账号id。
 * @method string getTopicId() 获取日志主题id。
 * @method void setTopicId(string $TopicId) 设置日志主题id。
 * @method string getName() 获取任务名称。
 * @method void setName(string $Name) 设置任务名称。
 * @method integer getDeliverType() 获取投递类型，0：实时投递，1：历史投递
 * @method void setDeliverType(integer $DeliverType) 设置投递类型，0：实时投递，1：历史投递
 * @method integer getMaxSize() 获取投递文件大小，单位MB
 * @method void setMaxSize(integer $MaxSize) 设置投递文件大小，单位MB
 * @method integer getInterval() 获取投递间隔 单位秒
 * @method void setInterval(integer $Interval) 设置投递间隔 单位秒
 * @method integer getStartTime() 获取投递时间范围的开始时间
 * @method void setStartTime(integer $StartTime) 设置投递时间范围的开始时间
 * @method integer getEndTime() 获取投递时间范围的结束时间
 * @method void setEndTime(integer $EndTime) 设置投递时间范围的结束时间
 * @method DlcInfo getDlcInfo() 获取dlc配置信息
 * @method void setDlcInfo(DlcInfo $DlcInfo) 设置dlc配置信息
 * @method integer getHasServicesLog() 获取是否开启投递服务日志。1关闭，2开启
 * @method void setHasServicesLog(integer $HasServicesLog) 设置是否开启投递服务日志。1关闭，2开启
 * @method integer getStatus() 获取任务状态。
 * @method void setStatus(integer $Status) 设置任务状态。
 * @method integer getProgress() 获取任务进度。历史投递任务生效。
 * @method void setProgress(integer $Progress) 设置任务进度。历史投递任务生效。
 * @method integer getBizType() 获取日志主题类型。0:标准主题，1:指标主题
 * @method void setBizType(integer $BizType) 设置日志主题类型。0:标准主题，1:指标主题
 * @method integer getCreateTime() 获取任务创建时间。
 * @method void setCreateTime(integer $CreateTime) 设置任务创建时间。
 * @method integer getUpdateTime() 获取任务修改时间。
 * @method void setUpdateTime(integer $UpdateTime) 设置任务修改时间。
 */
class DlcDeliverInfo extends AbstractModel
{
    /**
     * @var string 任务id。
     */
    public $TaskId;

    /**
     * @var integer 账号id。
     */
    public $Uin;

    /**
     * @var string 日志主题id。
     */
    public $TopicId;

    /**
     * @var string 任务名称。
     */
    public $Name;

    /**
     * @var integer 投递类型，0：实时投递，1：历史投递
     */
    public $DeliverType;

    /**
     * @var integer 投递文件大小，单位MB
     */
    public $MaxSize;

    /**
     * @var integer 投递间隔 单位秒
     */
    public $Interval;

    /**
     * @var integer 投递时间范围的开始时间
     */
    public $StartTime;

    /**
     * @var integer 投递时间范围的结束时间
     */
    public $EndTime;

    /**
     * @var DlcInfo dlc配置信息
     */
    public $DlcInfo;

    /**
     * @var integer 是否开启投递服务日志。1关闭，2开启
     */
    public $HasServicesLog;

    /**
     * @var integer 任务状态。
     */
    public $Status;

    /**
     * @var integer 任务进度。历史投递任务生效。
     */
    public $Progress;

    /**
     * @var integer 日志主题类型。0:标准主题，1:指标主题
     */
    public $BizType;

    /**
     * @var integer 任务创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 任务修改时间。
     */
    public $UpdateTime;

    /**
     * @param string $TaskId 任务id。
     * @param integer $Uin 账号id。
     * @param string $TopicId 日志主题id。
     * @param string $Name 任务名称。
     * @param integer $DeliverType 投递类型，0：实时投递，1：历史投递
     * @param integer $MaxSize 投递文件大小，单位MB
     * @param integer $Interval 投递间隔 单位秒
     * @param integer $StartTime 投递时间范围的开始时间
     * @param integer $EndTime 投递时间范围的结束时间
     * @param DlcInfo $DlcInfo dlc配置信息
     * @param integer $HasServicesLog 是否开启投递服务日志。1关闭，2开启
     * @param integer $Status 任务状态。
     * @param integer $Progress 任务进度。历史投递任务生效。
     * @param integer $BizType 日志主题类型。0:标准主题，1:指标主题
     * @param integer $CreateTime 任务创建时间。
     * @param integer $UpdateTime 任务修改时间。
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
    }
}
