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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内嵌工作流任务运行详情（仅限 FOR_EACH 任务）
 *
 * @method integer getPageNumber() 获取当前页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置当前页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取每页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置每页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPageNumber() 获取总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取迭代运行列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置迭代运行列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIterationCount() 获取迭代次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIterationCount(integer $IterationCount) 设置迭代次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailureCount() 获取失败次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureCount(integer $FailureCount) 设置失败次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessCount() 获取成功次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessCount(integer $SuccessCount) 设置成功次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInnerWorkflowId() 获取内嵌工作流ID，可通过 ListWorkflows 获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerWorkflowId(string $InnerWorkflowId) 设置内嵌工作流ID，可通过 ListWorkflows 获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInnerTaskId() 获取内嵌任务ID，可通过 ListWorkflowTasks 获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerTaskId(string $InnerTaskId) 设置内嵌任务ID，可通过 ListWorkflowTasks 获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInnerTaskRunBizEnumInfos() 获取内嵌任务运行状态数量统计（实例业务枚举键值对列表）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerTaskRunBizEnumInfos(array $InnerTaskRunBizEnumInfos) 设置内嵌任务运行状态数量统计（实例业务枚举键值对列表）
注意：此字段可能返回 null，表示取不到有效值。
 */
class InnerWorkflowTaskRun extends AbstractModel
{
    /**
     * @var integer 当前页码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer 每页大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 总页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPageNumber;

    /**
     * @var array 迭代运行列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer 迭代次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IterationCount;

    /**
     * @var integer 失败次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureCount;

    /**
     * @var integer 成功次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessCount;

    /**
     * @var string 内嵌工作流ID，可通过 ListWorkflows 获取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerWorkflowId;

    /**
     * @var string 内嵌任务ID，可通过 ListWorkflowTasks 获取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerTaskId;

    /**
     * @var array 内嵌任务运行状态数量统计（实例业务枚举键值对列表）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerTaskRunBizEnumInfos;

    /**
     * @param integer $PageNumber 当前页码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 每页大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPageNumber 总页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 迭代运行列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IterationCount 迭代次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailureCount 失败次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessCount 成功次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InnerWorkflowId 内嵌工作流ID，可通过 ListWorkflows 获取
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InnerTaskId 内嵌任务ID，可通过 ListWorkflowTasks 获取
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InnerTaskRunBizEnumInfos 内嵌任务运行状态数量统计（实例业务枚举键值对列表）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new InnerWorkflowTaskRunIteration();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("IterationCount",$param) and $param["IterationCount"] !== null) {
            $this->IterationCount = $param["IterationCount"];
        }

        if (array_key_exists("FailureCount",$param) and $param["FailureCount"] !== null) {
            $this->FailureCount = $param["FailureCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("InnerWorkflowId",$param) and $param["InnerWorkflowId"] !== null) {
            $this->InnerWorkflowId = $param["InnerWorkflowId"];
        }

        if (array_key_exists("InnerTaskId",$param) and $param["InnerTaskId"] !== null) {
            $this->InnerTaskId = $param["InnerTaskId"];
        }

        if (array_key_exists("InnerTaskRunBizEnumInfos",$param) and $param["InnerTaskRunBizEnumInfos"] !== null) {
            $this->InnerTaskRunBizEnumInfos = [];
            foreach ($param["InnerTaskRunBizEnumInfos"] as $key => $value){
                $obj = new ScheduleBizEnumBrief();
                $obj->deserialize($value);
                array_push($this->InnerTaskRunBizEnumInfos, $obj);
            }
        }
    }
}
