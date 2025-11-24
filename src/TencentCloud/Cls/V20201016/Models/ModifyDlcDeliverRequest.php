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
 * ModifyDlcDeliver请求参数结构体
 *
 * @method string getTopicId() 获取日志主题id。
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题id。
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
 * @method string getTaskId() 获取任务id。
 * @method void setTaskId(string $TaskId) 设置任务id。
 * @method string getName() 获取名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
 * @method void setName(string $Name) 设置名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
 * @method integer getDeliverType() 获取投递类型。0:批投递,1:实时投递
 * @method void setDeliverType(integer $DeliverType) 设置投递类型。0:批投递,1:实时投递
 * @method integer getStartTime() 获取投递时间范围的开始时间
 * @method void setStartTime(integer $StartTime) 设置投递时间范围的开始时间
 * @method integer getEndTime() 获取投递时间范围的结束时间。 如果为空，则表示不限时
 * @method void setEndTime(integer $EndTime) 设置投递时间范围的结束时间。 如果为空，则表示不限时
 * @method integer getMaxSize() 获取投递文件大小,单位MB。 DeliverType=0时必填，范围 5<= MaxSize <= 256。
 * @method void setMaxSize(integer $MaxSize) 设置投递文件大小,单位MB。 DeliverType=0时必填，范围 5<= MaxSize <= 256。
 * @method integer getInterval() 获取投递间隔，单位秒。 DeliverType=0时必填，范围 300<= Interval <=900。
 * @method void setInterval(integer $Interval) 设置投递间隔，单位秒。 DeliverType=0时必填，范围 300<= Interval <=900。
 * @method DlcInfo getDlcInfo() 获取dlc配置信息
 * @method void setDlcInfo(DlcInfo $DlcInfo) 设置dlc配置信息
 * @method integer getHasServicesLog() 获取是否开启投递服务日志。1关闭，2开启。默认开启
 * @method void setHasServicesLog(integer $HasServicesLog) 设置是否开启投递服务日志。1关闭，2开启。默认开启
 * @method integer getStatus() 获取任务状态。
 * @method void setStatus(integer $Status) 设置任务状态。
 */
class ModifyDlcDeliverRequest extends AbstractModel
{
    /**
     * @var string 日志主题id。
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string 任务id。
     */
    public $TaskId;

    /**
     * @var string 名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
     */
    public $Name;

    /**
     * @var integer 投递类型。0:批投递,1:实时投递
     */
    public $DeliverType;

    /**
     * @var integer 投递时间范围的开始时间
     */
    public $StartTime;

    /**
     * @var integer 投递时间范围的结束时间。 如果为空，则表示不限时
     */
    public $EndTime;

    /**
     * @var integer 投递文件大小,单位MB。 DeliverType=0时必填，范围 5<= MaxSize <= 256。
     */
    public $MaxSize;

    /**
     * @var integer 投递间隔，单位秒。 DeliverType=0时必填，范围 300<= Interval <=900。
     */
    public $Interval;

    /**
     * @var DlcInfo dlc配置信息
     */
    public $DlcInfo;

    /**
     * @var integer 是否开启投递服务日志。1关闭，2开启。默认开启
     */
    public $HasServicesLog;

    /**
     * @var integer 任务状态。
     */
    public $Status;

    /**
     * @param string $TopicId 日志主题id。
- 通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题Id。
     * @param string $TaskId 任务id。
     * @param string $Name 名称：长度不超过64字符，以字母开头，接受0-9,a-z,A-Z, _,-,中文字符。
     * @param integer $DeliverType 投递类型。0:批投递,1:实时投递
     * @param integer $StartTime 投递时间范围的开始时间
     * @param integer $EndTime 投递时间范围的结束时间。 如果为空，则表示不限时
     * @param integer $MaxSize 投递文件大小,单位MB。 DeliverType=0时必填，范围 5<= MaxSize <= 256。
     * @param integer $Interval 投递间隔，单位秒。 DeliverType=0时必填，范围 300<= Interval <=900。
     * @param DlcInfo $DlcInfo dlc配置信息
     * @param integer $HasServicesLog 是否开启投递服务日志。1关闭，2开启。默认开启
     * @param integer $Status 任务状态。
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
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
    }
}
