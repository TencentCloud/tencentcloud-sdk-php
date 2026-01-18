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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventTasks请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getEventTaskId() 获取过滤的事件任务id
 * @method void setEventTaskId(integer $EventTaskId) 设置过滤的事件任务id
 * @method integer getPageNumber() 获取页码，默认为1
 * @method void setPageNumber(integer $PageNumber) 设置页码，默认为1
 * @method integer getPageSize() 获取每页数量（支持10、20、30、50、100、200），默认为100
 * @method void setPageSize(integer $PageSize) 设置每页数量（支持10、20、30、50、100、200），默认为100
 * @method string getEventCode() 获取事件名称过滤
 * @method void setEventCode(string $EventCode) 设置事件名称过滤
 * @method array getStatus() 获取(1-待处理;2-已预约;3-处理中;4-已结束;5-处理中;-1-已忽略;-2-已删除)
 * @method void setStatus(array $Status) 设置(1-待处理;2-已预约;3-处理中;4-已结束;5-处理中;-1-已忽略;-2-已删除)
 * @method string getStartTime() 获取创建时间范围开始 (格式: YYYY-MM-DD HH:MM:SS)，最大支持查询180天信息
 * @method void setStartTime(string $StartTime) 设置创建时间范围开始 (格式: YYYY-MM-DD HH:MM:SS)，最大支持查询180天信息
 * @method string getEndTime() 获取创建时间范围结束 (格式: YYYY-MM-DD HH:MM:SS)
 * @method void setEndTime(string $EndTime) 设置创建时间范围结束 (格式: YYYY-MM-DD HH:MM:SS)
 * @method string getSortField() 获取排序字段（事件类型：event_code；触发时间：create_time；完成时间：end_time）
 * @method void setSortField(string $SortField) 设置排序字段（事件类型：event_code；触发时间：create_time；完成时间：end_time）
 * @method string getSortOrder() 获取排序顺序 (asc/desc)
 * @method void setSortOrder(string $SortOrder) 设置排序顺序 (asc/desc)
 */
class DescribeEventTasksRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 过滤的事件任务id
     */
    public $EventTaskId;

    /**
     * @var integer 页码，默认为1
     */
    public $PageNumber;

    /**
     * @var integer 每页数量（支持10、20、30、50、100、200），默认为100
     */
    public $PageSize;

    /**
     * @var string 事件名称过滤
     */
    public $EventCode;

    /**
     * @var array (1-待处理;2-已预约;3-处理中;4-已结束;5-处理中;-1-已忽略;-2-已删除)
     */
    public $Status;

    /**
     * @var string 创建时间范围开始 (格式: YYYY-MM-DD HH:MM:SS)，最大支持查询180天信息
     */
    public $StartTime;

    /**
     * @var string 创建时间范围结束 (格式: YYYY-MM-DD HH:MM:SS)
     */
    public $EndTime;

    /**
     * @var string 排序字段（事件类型：event_code；触发时间：create_time；完成时间：end_time）
     */
    public $SortField;

    /**
     * @var string 排序顺序 (asc/desc)
     */
    public $SortOrder;

    /**
     * @param string $InstanceId 集群id
     * @param integer $EventTaskId 过滤的事件任务id
     * @param integer $PageNumber 页码，默认为1
     * @param integer $PageSize 每页数量（支持10、20、30、50、100、200），默认为100
     * @param string $EventCode 事件名称过滤
     * @param array $Status (1-待处理;2-已预约;3-处理中;4-已结束;5-处理中;-1-已忽略;-2-已删除)
     * @param string $StartTime 创建时间范围开始 (格式: YYYY-MM-DD HH:MM:SS)，最大支持查询180天信息
     * @param string $EndTime 创建时间范围结束 (格式: YYYY-MM-DD HH:MM:SS)
     * @param string $SortField 排序字段（事件类型：event_code；触发时间：create_time；完成时间：end_time）
     * @param string $SortOrder 排序顺序 (asc/desc)
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

        if (array_key_exists("EventTaskId",$param) and $param["EventTaskId"] !== null) {
            $this->EventTaskId = $param["EventTaskId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
