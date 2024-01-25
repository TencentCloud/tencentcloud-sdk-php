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
 * DescribeWorkflowCanvasOpLogs请求参数结构体
 *
 * @method DescribeWorkflowCanvasOplogRequestFilter getFilter() 获取过滤器
 * @method void setFilter(DescribeWorkflowCanvasOplogRequestFilter $Filter) 设置过滤器
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getPageNumber() 获取页号
 * @method void setPageNumber(string $PageNumber) 设置页号
 * @method string getPageSize() 获取页大小
 * @method void setPageSize(string $PageSize) 设置页大小
 */
class DescribeWorkflowCanvasOpLogsRequest extends AbstractModel
{
    /**
     * @var DescribeWorkflowCanvasOplogRequestFilter 过滤器
     */
    public $Filter;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 页号
     */
    public $PageNumber;

    /**
     * @var string 页大小
     */
    public $PageSize;

    /**
     * @param DescribeWorkflowCanvasOplogRequestFilter $Filter 过滤器
     * @param string $WorkflowId 工作流ID
     * @param string $ProjectId 项目ID
     * @param string $PageNumber 页号
     * @param string $PageSize 页大小
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new DescribeWorkflowCanvasOplogRequestFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
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
    }
}
