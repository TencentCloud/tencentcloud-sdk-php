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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamTaskLogList请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getJobId() 获取<p>作业ID</p>
 * @method void setJobId(string $JobId) 设置<p>作业ID</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method string getContainer() 获取<p>container名字</p>
 * @method void setContainer(string $Container) 设置<p>container名字</p>
 * @method integer getLimit() 获取<p>条数</p>
 * @method void setLimit(integer $Limit) 设置<p>条数</p>
 * @method string getOrderType() 获取<p>排序类型 desc asc</p>
 * @method void setOrderType(string $OrderType) 设置<p>排序类型 desc asc</p>
 * @method integer getRunningOrderId() 获取<p>作业运行的实例ID</p>
 * @method void setRunningOrderId(integer $RunningOrderId) 设置<p>作业运行的实例ID</p>
 * @method string getKeyword() 获取<p>关键字</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字</p>
 * @method string getJobType() 获取<p>任务类型，不传时按 <code>INTEGRATION</code> 处理 </p><p>枚举值：</p><ul><li>INTEGRATION： 集成任务</li><li>VALIDATE： 对账任务</li></ul>
 * @method void setJobType(string $JobType) 设置<p>任务类型，不传时按 <code>INTEGRATION</code> 处理 </p><p>枚举值：</p><ul><li>INTEGRATION： 集成任务</li><li>VALIDATE： 对账任务</li></ul>
 */
class DescribeStreamTaskLogListRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>作业ID</p>
     */
    public $JobId;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>container名字</p>
     */
    public $Container;

    /**
     * @var integer <p>条数</p>
     */
    public $Limit;

    /**
     * @var string <p>排序类型 desc asc</p>
     */
    public $OrderType;

    /**
     * @var integer <p>作业运行的实例ID</p>
     */
    public $RunningOrderId;

    /**
     * @var string <p>关键字</p>
     */
    public $Keyword;

    /**
     * @var string <p>任务类型，不传时按 <code>INTEGRATION</code> 处理 </p><p>枚举值：</p><ul><li>INTEGRATION： 集成任务</li><li>VALIDATE： 对账任务</li></ul>
     */
    public $JobType;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $TaskId <p>任务ID</p>
     * @param string $JobId <p>作业ID</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param string $Container <p>container名字</p>
     * @param integer $Limit <p>条数</p>
     * @param string $OrderType <p>排序类型 desc asc</p>
     * @param integer $RunningOrderId <p>作业运行的实例ID</p>
     * @param string $Keyword <p>关键字</p>
     * @param string $JobType <p>任务类型，不传时按 <code>INTEGRATION</code> 处理 </p><p>枚举值：</p><ul><li>INTEGRATION： 集成任务</li><li>VALIDATE： 对账任务</li></ul>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("RunningOrderId",$param) and $param["RunningOrderId"] !== null) {
            $this->RunningOrderId = $param["RunningOrderId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }
    }
}
