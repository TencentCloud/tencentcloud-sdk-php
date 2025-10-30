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
 * DescribeWorkflowExecuteById请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkFlowIdList() 获取工作流ID
 * @method void setWorkFlowIdList(string $WorkFlowIdList) 设置工作流ID
 * @method integer getPageNumber() 获取分页大小
 * @method void setPageNumber(integer $PageNumber) 设置分页大小
 * @method integer getPageSize() 获取分页索引
 * @method void setPageSize(integer $PageSize) 设置分页索引
 */
class DescribeWorkflowExecuteByIdRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 工作流ID
     */
    public $WorkFlowIdList;

    /**
     * @var integer 分页大小
     */
    public $PageNumber;

    /**
     * @var integer 分页索引
     */
    public $PageSize;

    /**
     * @param string $ProjectId 项目ID
     * @param string $WorkFlowIdList 工作流ID
     * @param integer $PageNumber 分页大小
     * @param integer $PageSize 分页索引
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

        if (array_key_exists("WorkFlowIdList",$param) and $param["WorkFlowIdList"] !== null) {
            $this->WorkFlowIdList = $param["WorkFlowIdList"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
