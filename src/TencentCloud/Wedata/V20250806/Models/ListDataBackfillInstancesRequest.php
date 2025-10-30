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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDataBackfillInstances请求参数结构体
 *
 * @method string getProjectId() 获取所属项目Id
 * @method void setProjectId(string $ProjectId) 设置所属项目Id
 * @method string getDataBackfillPlanId() 获取补录计划Id
 * @method void setDataBackfillPlanId(string $DataBackfillPlanId) 设置补录计划Id
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 */
class ListDataBackfillInstancesRequest extends AbstractModel
{
    /**
     * @var string 所属项目Id
     */
    public $ProjectId;

    /**
     * @var string 补录计划Id
     */
    public $DataBackfillPlanId;

    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @param string $ProjectId 所属项目Id
     * @param string $DataBackfillPlanId 补录计划Id
     * @param string $TaskId 任务Id
     * @param integer $PageNumber 页码
     * @param integer $PageSize 分页大小
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

        if (array_key_exists("DataBackfillPlanId",$param) and $param["DataBackfillPlanId"] !== null) {
            $this->DataBackfillPlanId = $param["DataBackfillPlanId"];
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
