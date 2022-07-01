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
 * DescribeTaskInstances请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getPageNumber() 获取页号，默认为1
 * @method void setPageNumber(integer $PageNumber) 设置页号，默认为1
 * @method integer getPageSize() 获取页大小，默认为10，最大不超过200
 * @method void setPageSize(integer $PageSize) 设置页大小，默认为10，最大不超过200
 * @method array getWorkflowIdList() 获取工作流id列表
 * @method void setWorkflowIdList(array $WorkflowIdList) 设置工作流id列表
 * @method array getWorkflowNameList() 获取工作流名称列表，支持模糊搜索
 * @method void setWorkflowNameList(array $WorkflowNameList) 设置工作流名称列表，支持模糊搜索
 * @method string getDateFrom() 获取起始数据时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setDateFrom(string $DateFrom) 设置起始数据时间，格式yyyy-MM-dd HH:mm:ss
 * @method string getDateTo() 获取结束数据时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setDateTo(string $DateTo) 设置结束数据时间，格式yyyy-MM-dd HH:mm:ss
 * @method array getTaskIdList() 获取任务id列表
 * @method void setTaskIdList(array $TaskIdList) 设置任务id列表
 * @method array getTaskNameList() 获取任务名称列表，支持模糊搜索
 * @method void setTaskNameList(array $TaskNameList) 设置任务名称列表，支持模糊搜索
 * @method array getInChargeList() 获取责任人名称列表
 * @method void setInChargeList(array $InChargeList) 设置责任人名称列表
 * @method array getTaskTypeIdList() 获取任务类型码列表，26离线同步，30Python，31PySpark，32DLC，33Impala，34Hive SQL，35Shell，36Spark SQL，39Spark，40CDW PG，92MapReduce
 * @method void setTaskTypeIdList(array $TaskTypeIdList) 设置任务类型码列表，26离线同步，30Python，31PySpark，32DLC，33Impala，34Hive SQL，35Shell，36Spark SQL，39Spark，40CDW PG，92MapReduce
 * @method array getStateList() 获取实例状态列表，0等待事件，1等待上游，2等待运行，3运行中，4正在终止，5失败重试，6失败，7成功
 * @method void setStateList(array $StateList) 设置实例状态列表，0等待事件，1等待上游，2等待运行，3运行中，4正在终止，5失败重试，6失败，7成功
 * @method array getTaskCycleUnitList() 获取周期类型列表，I分钟，H小时，D天，W周，M月，Y年，O一次性，C crontab
 * @method void setTaskCycleUnitList(array $TaskCycleUnitList) 设置周期类型列表，I分钟，H小时，D天，W周，M月，Y年，O一次性，C crontab
 * @method integer getInstanceType() 获取实例类型，0补录实例，1周期实例，2非周期实例
 * @method void setInstanceType(integer $InstanceType) 设置实例类型，0补录实例，1周期实例，2非周期实例
 * @method array getOrderFields() 获取排序字段信息列表，ScheduleDateTime / CostTime / StartTime / EndTime
 * @method void setOrderFields(array $OrderFields) 设置排序字段信息列表，ScheduleDateTime / CostTime / StartTime / EndTime
 */
class DescribeTaskInstancesRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 页号，默认为1
     */
    public $PageNumber;

    /**
     * @var integer 页大小，默认为10，最大不超过200
     */
    public $PageSize;

    /**
     * @var array 工作流id列表
     */
    public $WorkflowIdList;

    /**
     * @var array 工作流名称列表，支持模糊搜索
     */
    public $WorkflowNameList;

    /**
     * @var string 起始数据时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $DateFrom;

    /**
     * @var string 结束数据时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $DateTo;

    /**
     * @var array 任务id列表
     */
    public $TaskIdList;

    /**
     * @var array 任务名称列表，支持模糊搜索
     */
    public $TaskNameList;

    /**
     * @var array 责任人名称列表
     */
    public $InChargeList;

    /**
     * @var array 任务类型码列表，26离线同步，30Python，31PySpark，32DLC，33Impala，34Hive SQL，35Shell，36Spark SQL，39Spark，40CDW PG，92MapReduce
     */
    public $TaskTypeIdList;

    /**
     * @var array 实例状态列表，0等待事件，1等待上游，2等待运行，3运行中，4正在终止，5失败重试，6失败，7成功
     */
    public $StateList;

    /**
     * @var array 周期类型列表，I分钟，H小时，D天，W周，M月，Y年，O一次性，C crontab
     */
    public $TaskCycleUnitList;

    /**
     * @var integer 实例类型，0补录实例，1周期实例，2非周期实例
     */
    public $InstanceType;

    /**
     * @var array 排序字段信息列表，ScheduleDateTime / CostTime / StartTime / EndTime
     */
    public $OrderFields;

    /**
     * @param string $ProjectId 项目id
     * @param integer $PageNumber 页号，默认为1
     * @param integer $PageSize 页大小，默认为10，最大不超过200
     * @param array $WorkflowIdList 工作流id列表
     * @param array $WorkflowNameList 工作流名称列表，支持模糊搜索
     * @param string $DateFrom 起始数据时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $DateTo 结束数据时间，格式yyyy-MM-dd HH:mm:ss
     * @param array $TaskIdList 任务id列表
     * @param array $TaskNameList 任务名称列表，支持模糊搜索
     * @param array $InChargeList 责任人名称列表
     * @param array $TaskTypeIdList 任务类型码列表，26离线同步，30Python，31PySpark，32DLC，33Impala，34Hive SQL，35Shell，36Spark SQL，39Spark，40CDW PG，92MapReduce
     * @param array $StateList 实例状态列表，0等待事件，1等待上游，2等待运行，3运行中，4正在终止，5失败重试，6失败，7成功
     * @param array $TaskCycleUnitList 周期类型列表，I分钟，H小时，D天，W周，M月，Y年，O一次性，C crontab
     * @param integer $InstanceType 实例类型，0补录实例，1周期实例，2非周期实例
     * @param array $OrderFields 排序字段信息列表，ScheduleDateTime / CostTime / StartTime / EndTime
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

        if (array_key_exists("WorkflowIdList",$param) and $param["WorkflowIdList"] !== null) {
            $this->WorkflowIdList = $param["WorkflowIdList"];
        }

        if (array_key_exists("WorkflowNameList",$param) and $param["WorkflowNameList"] !== null) {
            $this->WorkflowNameList = $param["WorkflowNameList"];
        }

        if (array_key_exists("DateFrom",$param) and $param["DateFrom"] !== null) {
            $this->DateFrom = $param["DateFrom"];
        }

        if (array_key_exists("DateTo",$param) and $param["DateTo"] !== null) {
            $this->DateTo = $param["DateTo"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("TaskNameList",$param) and $param["TaskNameList"] !== null) {
            $this->TaskNameList = $param["TaskNameList"];
        }

        if (array_key_exists("InChargeList",$param) and $param["InChargeList"] !== null) {
            $this->InChargeList = $param["InChargeList"];
        }

        if (array_key_exists("TaskTypeIdList",$param) and $param["TaskTypeIdList"] !== null) {
            $this->TaskTypeIdList = $param["TaskTypeIdList"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("TaskCycleUnitList",$param) and $param["TaskCycleUnitList"] !== null) {
            $this->TaskCycleUnitList = $param["TaskCycleUnitList"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
