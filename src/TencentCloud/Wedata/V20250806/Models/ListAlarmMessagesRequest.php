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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAlarmMessages请求参数结构体
 *
 * @method string getProjectId() 获取所属项目id
 * @method void setProjectId(string $ProjectId) 设置所属项目id
 * @method integer getPageNumber() 获取页码数，用于翻页，最小值为 1。
 * @method void setPageNumber(integer $PageNumber) 设置页码数，用于翻页，最小值为 1。
 * @method integer getPageSize() 获取每页显示的条数，最大 100 条
 * @method void setPageSize(integer $PageSize) 设置每页显示的条数，最大 100 条
 * @method string getStartTime() 获取起始告警时间, 格式为yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置起始告警时间, 格式为yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取截止告警时间, 格式yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置截止告警时间, 格式yyyy-MM-dd HH:mm:ss
 * @method integer getAlarmLevel() 获取告警级别
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别
 * @method string getAlarmRecipientId() 获取告警接收人Id
 * @method void setAlarmRecipientId(string $AlarmRecipientId) 设置告警接收人Id
 * @method string getTimeZone() 获取对于传入和返回的过滤时区, 默认UTC+8
 * @method void setTimeZone(string $TimeZone) 设置对于传入和返回的过滤时区, 默认UTC+8
 */
class ListAlarmMessagesRequest extends AbstractModel
{
    /**
     * @var string 所属项目id
     */
    public $ProjectId;

    /**
     * @var integer 页码数，用于翻页，最小值为 1。
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的条数，最大 100 条
     */
    public $PageSize;

    /**
     * @var string 起始告警时间, 格式为yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 截止告警时间, 格式yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var integer 告警级别
     */
    public $AlarmLevel;

    /**
     * @var string 告警接收人Id
     */
    public $AlarmRecipientId;

    /**
     * @var string 对于传入和返回的过滤时区, 默认UTC+8
     */
    public $TimeZone;

    /**
     * @param string $ProjectId 所属项目id
     * @param integer $PageNumber 页码数，用于翻页，最小值为 1。
     * @param integer $PageSize 每页显示的条数，最大 100 条
     * @param string $StartTime 起始告警时间, 格式为yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 截止告警时间, 格式yyyy-MM-dd HH:mm:ss
     * @param integer $AlarmLevel 告警级别
     * @param string $AlarmRecipientId 告警接收人Id
     * @param string $TimeZone 对于传入和返回的过滤时区, 默认UTC+8
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
