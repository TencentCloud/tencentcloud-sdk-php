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
 * DescribeOpsMakePlanTasks请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getPlanId() 获取补录计划ID
 * @method void setPlanId(string $PlanId) 设置补录计划ID
 * @method array getStateList() 获取实例状态过滤条件
 * @method void setStateList(array $StateList) 设置实例状态过滤条件
 * @method integer getPageNumber() 获取分页页码，默认值1
 * @method void setPageNumber(integer $PageNumber) 设置分页页码，默认值1
 * @method integer getPageSize() 获取分页大小，默认值10
 * @method void setPageSize(integer $PageSize) 设置分页大小，默认值10
 */
class DescribeOpsMakePlanTasksRequest extends AbstractModel
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
     * @var array 实例状态过滤条件
     */
    public $StateList;

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
     * @param array $StateList 实例状态过滤条件
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

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
