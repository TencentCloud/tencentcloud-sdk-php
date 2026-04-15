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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSArchiveLogs请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method integer getArchiveLogId() 获取<p>日志记录ID</p>
 * @method void setArchiveLogId(integer $ArchiveLogId) 设置<p>日志记录ID</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method string getFilterStatus() 获取<p>备份状态：pending,running,success,failed</p>
 * @method void setFilterStatus(string $FilterStatus) 设置<p>备份状态：pending,running,success,failed</p>
 * @method integer getLimit() 获取<p>条数限制</p>
 * @method void setLimit(integer $Limit) 设置<p>条数限制</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method string getOrderBy() 获取<p>排序字段，枚举：StartTime,EndTime,ExpiredTime,FileSize,BackupDuration</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段，枚举：StartTime,EndTime,ExpiredTime,FileSize,BackupDuration</p>
 * @method string getOrderType() 获取<p>排序方式：ASC：顺序, DESC：倒序</p>
 * @method void setOrderType(string $OrderType) 设置<p>排序方式：ASC：顺序, DESC：倒序</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 */
class DescribeDBSArchiveLogsRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>日志记录ID</p>
     */
    public $ArchiveLogId;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>备份状态：pending,running,success,failed</p>
     */
    public $FilterStatus;

    /**
     * @var integer <p>条数限制</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var string <p>排序字段，枚举：StartTime,EndTime,ExpiredTime,FileSize,BackupDuration</p>
     */
    public $OrderBy;

    /**
     * @var string <p>排序方式：ASC：顺序, DESC：倒序</p>
     */
    public $OrderType;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param integer $ArchiveLogId <p>日志记录ID</p>
     * @param string $EndTime <p>结束时间</p>
     * @param string $FilterStatus <p>备份状态：pending,running,success,failed</p>
     * @param integer $Limit <p>条数限制</p>
     * @param integer $Offset <p>偏移量</p>
     * @param string $OrderBy <p>排序字段，枚举：StartTime,EndTime,ExpiredTime,FileSize,BackupDuration</p>
     * @param string $OrderType <p>排序方式：ASC：顺序, DESC：倒序</p>
     * @param string $StartTime <p>开始时间</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ArchiveLogId",$param) and $param["ArchiveLogId"] !== null) {
            $this->ArchiveLogId = $param["ArchiveLogId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FilterStatus",$param) and $param["FilterStatus"] !== null) {
            $this->FilterStatus = $param["FilterStatus"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
