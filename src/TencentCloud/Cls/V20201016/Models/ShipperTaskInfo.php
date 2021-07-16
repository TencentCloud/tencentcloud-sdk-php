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
 * 投递任务信息
 *
 * @method string getTaskId() 获取投递任务ID
 * @method void setTaskId(string $TaskId) 设置投递任务ID
 * @method string getShipperId() 获取投递信息ID
 * @method void setShipperId(string $ShipperId) 设置投递信息ID
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method integer getRangeStart() 获取本批投递的日志的开始时间戳，毫秒
 * @method void setRangeStart(integer $RangeStart) 设置本批投递的日志的开始时间戳，毫秒
 * @method integer getRangeEnd() 获取本批投递的日志的结束时间戳， 毫秒
 * @method void setRangeEnd(integer $RangeEnd) 设置本批投递的日志的结束时间戳， 毫秒
 * @method integer getStartTime() 获取本次投递任务的开始时间戳， 毫秒
 * @method void setStartTime(integer $StartTime) 设置本次投递任务的开始时间戳， 毫秒
 * @method integer getEndTime() 获取本次投递任务的结束时间戳， 毫秒
 * @method void setEndTime(integer $EndTime) 设置本次投递任务的结束时间戳， 毫秒
 * @method string getStatus() 获取本次投递的结果，"success","running","failed"
 * @method void setStatus(string $Status) 设置本次投递的结果，"success","running","failed"
 * @method string getMessage() 获取结果的详细信息
 * @method void setMessage(string $Message) 设置结果的详细信息
 */
class ShipperTaskInfo extends AbstractModel
{
    /**
     * @var string 投递任务ID
     */
    public $TaskId;

    /**
     * @var string 投递信息ID
     */
    public $ShipperId;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var integer 本批投递的日志的开始时间戳，毫秒
     */
    public $RangeStart;

    /**
     * @var integer 本批投递的日志的结束时间戳， 毫秒
     */
    public $RangeEnd;

    /**
     * @var integer 本次投递任务的开始时间戳， 毫秒
     */
    public $StartTime;

    /**
     * @var integer 本次投递任务的结束时间戳， 毫秒
     */
    public $EndTime;

    /**
     * @var string 本次投递的结果，"success","running","failed"
     */
    public $Status;

    /**
     * @var string 结果的详细信息
     */
    public $Message;

    /**
     * @param string $TaskId 投递任务ID
     * @param string $ShipperId 投递信息ID
     * @param string $TopicId 日志主题ID
     * @param integer $RangeStart 本批投递的日志的开始时间戳，毫秒
     * @param integer $RangeEnd 本批投递的日志的结束时间戳， 毫秒
     * @param integer $StartTime 本次投递任务的开始时间戳， 毫秒
     * @param integer $EndTime 本次投递任务的结束时间戳， 毫秒
     * @param string $Status 本次投递的结果，"success","running","failed"
     * @param string $Message 结果的详细信息
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

        if (array_key_exists("ShipperId",$param) and $param["ShipperId"] !== null) {
            $this->ShipperId = $param["ShipperId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("RangeStart",$param) and $param["RangeStart"] !== null) {
            $this->RangeStart = $param["RangeStart"];
        }

        if (array_key_exists("RangeEnd",$param) and $param["RangeEnd"] !== null) {
            $this->RangeEnd = $param["RangeEnd"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
