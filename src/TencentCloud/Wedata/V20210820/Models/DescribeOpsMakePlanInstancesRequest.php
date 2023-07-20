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
 * DescribeOpsMakePlanInstances请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getPlanId() 获取补录计划ID
 * @method void setPlanId(string $PlanId) 设置补录计划ID
 * @method string getTaskId() 获取补录任务ID
 * @method void setTaskId(string $TaskId) 设置补录任务ID
 * @method integer getPageNumber() 获取分页页码，默认值1
 * @method void setPageNumber(integer $PageNumber) 设置分页页码，默认值1
 * @method integer getPageSize() 获取分页大小，默认值10
 * @method void setPageSize(integer $PageSize) 设置分页大小，默认值10
 */
class DescribeOpsMakePlanInstancesRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 补录计划ID
     */
    public $PlanId;

    /**
     * @var string 补录任务ID
     */
    public $TaskId;

    /**
     * @var integer 分页页码，默认值1
     */
    public $PageNumber;

    /**
     * @var integer 分页大小，默认值10
     */
    public $PageSize;

    /**
     * @param string $ProjectId 项目ID
     * @param string $PlanId 补录计划ID
     * @param string $TaskId 补录任务ID
     * @param integer $PageNumber 分页页码，默认值1
     * @param integer $PageSize 分页大小，默认值10
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

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
