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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmReceiver请求参数结构体
 *
 * @method string getAlarmId() 获取告警ID
 * @method void setAlarmId(string $AlarmId) 设置告警ID
 * @method integer getPageNumber() 获取当前页
 * @method void setPageNumber(integer $PageNumber) 设置当前页
 * @method integer getPageSize() 获取每页记录数
 * @method void setPageSize(integer $PageSize) 设置每页记录数
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getMessageId() 获取消息ID
 * @method void setMessageId(string $MessageId) 设置消息ID
 * @method integer getTaskType() 获取类型
 * @method void setTaskType(integer $TaskType) 设置类型
 * @method string getAlarmRecipient() 获取告警接收人ID(逗号分隔)
 * @method void setAlarmRecipient(string $AlarmRecipient) 设置告警接收人ID(逗号分隔)
 * @method string getAlarmRecipientName() 获取告警接收人姓名(逗号分隔)
 * @method void setAlarmRecipientName(string $AlarmRecipientName) 设置告警接收人姓名(逗号分隔)
 * @method string getAlarmTime() 获取告警时间
 * @method void setAlarmTime(string $AlarmTime) 设置告警时间
 */
class DescribeAlarmReceiverRequest extends AbstractModel
{
    /**
     * @var string 告警ID
     */
    public $AlarmId;

    /**
     * @var integer 当前页
     */
    public $PageNumber;

    /**
     * @var integer 每页记录数
     */
    public $PageSize;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 消息ID
     */
    public $MessageId;

    /**
     * @var integer 类型
     */
    public $TaskType;

    /**
     * @var string 告警接收人ID(逗号分隔)
     */
    public $AlarmRecipient;

    /**
     * @var string 告警接收人姓名(逗号分隔)
     */
    public $AlarmRecipientName;

    /**
     * @var string 告警时间
     */
    public $AlarmTime;

    /**
     * @param string $AlarmId 告警ID
     * @param integer $PageNumber 当前页
     * @param integer $PageSize 每页记录数
     * @param string $ProjectId 项目ID
     * @param string $MessageId 消息ID
     * @param integer $TaskType 类型
     * @param string $AlarmRecipient 告警接收人ID(逗号分隔)
     * @param string $AlarmRecipientName 告警接收人姓名(逗号分隔)
     * @param string $AlarmTime 告警时间
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("AlarmRecipient",$param) and $param["AlarmRecipient"] !== null) {
            $this->AlarmRecipient = $param["AlarmRecipient"];
        }

        if (array_key_exists("AlarmRecipientName",$param) and $param["AlarmRecipientName"] !== null) {
            $this->AlarmRecipientName = $param["AlarmRecipientName"];
        }

        if (array_key_exists("AlarmTime",$param) and $param["AlarmTime"] !== null) {
            $this->AlarmTime = $param["AlarmTime"];
        }
    }
}
