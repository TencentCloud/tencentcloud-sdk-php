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
 * DescribeTaskByStatusReport请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getType() 获取时间类型
 * @method void setType(string $Type) 设置时间类型
 * @method string getTaskType() 获取类型
 * @method void setTaskType(string $TaskType) 设置类型
 * @method string getTypeName() 获取类型名称
 * @method void setTypeName(string $TypeName) 设置类型名称
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getAggregationUnit() 获取聚合单元，H小时
 * @method void setAggregationUnit(string $AggregationUnit) 设置聚合单元，H小时
 * @method string getCycleUnit() 获取周期
 * @method void setCycleUnit(string $CycleUnit) 设置周期
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getInCharge() 获取责任人
 * @method void setInCharge(string $InCharge) 设置责任人
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method array getProjectIds() 获取项目ID列表，用于多项目实例趋势筛选，当指定了 ProjectIds 的时候，ProjectId 将只用来鉴权，不做筛选
 * @method void setProjectIds(array $ProjectIds) 设置项目ID列表，用于多项目实例趋势筛选，当指定了 ProjectIds 的时候，ProjectId 将只用来鉴权，不做筛选
 */
class DescribeTaskByStatusReportRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 时间类型
     */
    public $Type;

    /**
     * @var string 类型
     */
    public $TaskType;

    /**
     * @var string 类型名称
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
     * @var string 聚合单元，H小时
     */
    public $AggregationUnit;

    /**
     * @var string 周期
     */
    public $CycleUnit;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 责任人
     */
    public $InCharge;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var array 项目ID列表，用于多项目实例趋势筛选，当指定了 ProjectIds 的时候，ProjectId 将只用来鉴权，不做筛选
     */
    public $ProjectIds;

    /**
     * @param string $ProjectId 项目ID
     * @param string $Type 时间类型
     * @param string $TaskType 类型
     * @param string $TypeName 类型名称
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $AggregationUnit 聚合单元，H小时
     * @param string $CycleUnit 周期
     * @param string $Status 状态
     * @param string $InCharge 责任人
     * @param string $WorkflowId 工作流ID
     * @param array $ProjectIds 项目ID列表，用于多项目实例趋势筛选，当指定了 ProjectIds 的时候，ProjectId 将只用来鉴权，不做筛选
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
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

        if (array_key_exists("AggregationUnit",$param) and $param["AggregationUnit"] !== null) {
            $this->AggregationUnit = $param["AggregationUnit"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }
    }
}
