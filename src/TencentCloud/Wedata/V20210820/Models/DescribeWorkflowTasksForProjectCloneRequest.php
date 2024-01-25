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
 * DescribeWorkflowTasksForProjectClone请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method integer getPage() 获取页号
 * @method void setPage(integer $Page) 设置页号
 * @method integer getSize() 获取分页大小
 * @method void setSize(integer $Size) 设置分页大小
 * @method string getOrder() 获取排序类型。两种取值 DESC、ASC，当前仅支持按提交时间排序
 * @method void setOrder(string $Order) 设置排序类型。两种取值 DESC、ASC，当前仅支持按提交时间排序
 * @method string getOwnerName() 获取工作流责任人名称
 * @method void setOwnerName(string $OwnerName) 设置工作流责任人名称
 * @method string getStartTime() 获取提交开始时间（筛选用）
 * @method void setStartTime(string $StartTime) 设置提交开始时间（筛选用）
 * @method string getEndTime() 获取提交结束时间（筛选用）
 * @method void setEndTime(string $EndTime) 设置提交结束时间（筛选用）
 * @method string getFilterWorkflowName() 获取工作流名称（筛选用）
 * @method void setFilterWorkflowName(string $FilterWorkflowName) 设置工作流名称（筛选用）
 */
class DescribeWorkflowTasksForProjectCloneRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var integer 页号
     */
    public $Page;

    /**
     * @var integer 分页大小
     */
    public $Size;

    /**
     * @var string 排序类型。两种取值 DESC、ASC，当前仅支持按提交时间排序
     */
    public $Order;

    /**
     * @var string 工作流责任人名称
     */
    public $OwnerName;

    /**
     * @var string 提交开始时间（筛选用）
     */
    public $StartTime;

    /**
     * @var string 提交结束时间（筛选用）
     */
    public $EndTime;

    /**
     * @var string 工作流名称（筛选用）
     */
    public $FilterWorkflowName;

    /**
     * @param string $ProjectId 项目id
     * @param string $WorkflowId 工作流id
     * @param integer $Page 页号
     * @param integer $Size 分页大小
     * @param string $Order 排序类型。两种取值 DESC、ASC，当前仅支持按提交时间排序
     * @param string $OwnerName 工作流责任人名称
     * @param string $StartTime 提交开始时间（筛选用）
     * @param string $EndTime 提交结束时间（筛选用）
     * @param string $FilterWorkflowName 工作流名称（筛选用）
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FilterWorkflowName",$param) and $param["FilterWorkflowName"] !== null) {
            $this->FilterWorkflowName = $param["FilterWorkflowName"];
        }
    }
}
