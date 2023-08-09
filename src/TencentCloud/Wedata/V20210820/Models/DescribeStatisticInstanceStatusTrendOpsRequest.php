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
 * DescribeStatisticInstanceStatusTrendOps请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTaskTypeId() 获取任务类型Id
 * @method void setTaskTypeId(string $TaskTypeId) 设置任务类型Id
 * @method string getTimeType() 获取时间类型
 * @method void setTimeType(string $TimeType) 设置时间类型
 * @method string getTypeName() 获取任务类型名称
 * @method void setTypeName(string $TypeName) 设置任务类型名称
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getExecutionGroupId() 获取资源组ID
 * @method void setExecutionGroupId(string $ExecutionGroupId) 设置资源组ID
 * @method string getExecutionGroupName() 获取资源组名称
 * @method void setExecutionGroupName(string $ExecutionGroupName) 设置资源组名称
 * @method string getInCharge() 获取1
 * @method void setInCharge(string $InCharge) 设置1
 * @method integer getTaskType() 获取1
 * @method void setTaskType(integer $TaskType) 设置1
 * @method array getStateList() 获取1
 * @method void setStateList(array $StateList) 设置1
 * @method string getAggregationUnit() 获取D代表天，H代表小时
 * @method void setAggregationUnit(string $AggregationUnit) 设置D代表天，H代表小时
 * @method integer getAverageWindowSize() 获取1
 * @method void setAverageWindowSize(integer $AverageWindowSize) 设置1
 */
class DescribeStatisticInstanceStatusTrendOpsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 任务类型Id
     */
    public $TaskTypeId;

    /**
     * @var string 时间类型
     */
    public $TimeType;

    /**
     * @var string 任务类型名称
     */
    public $TypeName;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 资源组ID
     */
    public $ExecutionGroupId;

    /**
     * @var string 资源组名称
     */
    public $ExecutionGroupName;

    /**
     * @var string 1
     */
    public $InCharge;

    /**
     * @var integer 1
     */
    public $TaskType;

    /**
     * @var array 1
     */
    public $StateList;

    /**
     * @var string D代表天，H代表小时
     */
    public $AggregationUnit;

    /**
     * @var integer 1
     */
    public $AverageWindowSize;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TaskTypeId 任务类型Id
     * @param string $TimeType 时间类型
     * @param string $TypeName 任务类型名称
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $ExecutionGroupId 资源组ID
     * @param string $ExecutionGroupName 资源组名称
     * @param string $InCharge 1
     * @param integer $TaskType 1
     * @param array $StateList 1
     * @param string $AggregationUnit D代表天，H代表小时
     * @param integer $AverageWindowSize 1
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

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionGroupId",$param) and $param["ExecutionGroupId"] !== null) {
            $this->ExecutionGroupId = $param["ExecutionGroupId"];
        }

        if (array_key_exists("ExecutionGroupName",$param) and $param["ExecutionGroupName"] !== null) {
            $this->ExecutionGroupName = $param["ExecutionGroupName"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("AggregationUnit",$param) and $param["AggregationUnit"] !== null) {
            $this->AggregationUnit = $param["AggregationUnit"];
        }

        if (array_key_exists("AverageWindowSize",$param) and $param["AverageWindowSize"] !== null) {
            $this->AverageWindowSize = $param["AverageWindowSize"];
        }
    }
}
