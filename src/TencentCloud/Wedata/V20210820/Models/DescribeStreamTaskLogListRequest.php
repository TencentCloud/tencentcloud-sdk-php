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
 * DescribeStreamTaskLogList请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getJobId() 获取作业ID
 * @method void setJobId(string $JobId) 设置作业ID
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method string getContainer() 获取container名字
 * @method void setContainer(string $Container) 设置container名字
 * @method integer getLimit() 获取条数
 * @method void setLimit(integer $Limit) 设置条数
 * @method string getOrderType() 获取排序类型 desc asc
 * @method void setOrderType(string $OrderType) 设置排序类型 desc asc
 * @method integer getRunningOrderId() 获取作业运行的实例ID
 * @method void setRunningOrderId(integer $RunningOrderId) 设置作业运行的实例ID
 */
class DescribeStreamTaskLogListRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 作业ID
     */
    public $JobId;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var string container名字
     */
    public $Container;

    /**
     * @var integer 条数
     */
    public $Limit;

    /**
     * @var string 排序类型 desc asc
     */
    public $OrderType;

    /**
     * @var integer 作业运行的实例ID
     */
    public $RunningOrderId;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TaskId 任务ID
     * @param string $JobId 作业ID
     * @param integer $EndTime 结束时间
     * @param integer $StartTime 开始时间
     * @param string $Container container名字
     * @param integer $Limit 条数
     * @param string $OrderType 排序类型 desc asc
     * @param integer $RunningOrderId 作业运行的实例ID
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
    }
}
