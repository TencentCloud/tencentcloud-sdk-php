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
 * DescribeOpsMakePlans请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getPageNumber() 获取分页数，默认值1
 * @method void setPageNumber(integer $PageNumber) 设置分页数，默认值1
 * @method integer getPageSize() 获取分页大小，默认值10
 * @method void setPageSize(integer $PageSize) 设置分页大小，默认值10
 * @method string getPlanId() 获取补录计划ID
 * @method void setPlanId(string $PlanId) 设置补录计划ID
 * @method string getPlanName() 获取补录计划名称
 * @method void setPlanName(string $PlanName) 设置补录计划名称
 * @method string getTaskName() 获取补录任务名称
 * @method void setTaskName(string $TaskName) 设置补录任务名称
 * @method string getTaskId() 获取补录任务ID
 * @method void setTaskId(string $TaskId) 设置补录任务ID
 * @method string getCreator() 获取补录计划创建者
 * @method void setCreator(string $Creator) 设置补录计划创建者
 * @method string getMinCreateTime() 获取补录计划最小创建时间
 * @method void setMinCreateTime(string $MinCreateTime) 设置补录计划最小创建时间
 * @method string getMaxCreateTime() 获取补录计划最大创建时间
 * @method void setMaxCreateTime(string $MaxCreateTime) 设置补录计划最大创建时间
 * @method array getStateList() 获取实例状态过滤条件
 * @method void setStateList(array $StateList) 设置实例状态过滤条件
 * @method string getKeyword() 获取模糊查询关键字
 * @method void setKeyword(string $Keyword) 设置模糊查询关键字
 */
class DescribeOpsMakePlansRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 分页数，默认值1
     */
    public $PageNumber;

    /**
     * @var integer 分页大小，默认值10
     */
    public $PageSize;

    /**
     * @var string 补录计划ID
     */
    public $PlanId;

    /**
     * @var string 补录计划名称
     */
    public $PlanName;

    /**
     * @var string 补录任务名称
     */
    public $TaskName;

    /**
     * @var string 补录任务ID
     */
    public $TaskId;

    /**
     * @var string 补录计划创建者
     */
    public $Creator;

    /**
     * @var string 补录计划最小创建时间
     */
    public $MinCreateTime;

    /**
     * @var string 补录计划最大创建时间
     */
    public $MaxCreateTime;

    /**
     * @var array 实例状态过滤条件
     */
    public $StateList;

    /**
     * @var string 模糊查询关键字
     */
    public $Keyword;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $PageNumber 分页数，默认值1
     * @param integer $PageSize 分页大小，默认值10
     * @param string $PlanId 补录计划ID
     * @param string $PlanName 补录计划名称
     * @param string $TaskName 补录任务名称
     * @param string $TaskId 补录任务ID
     * @param string $Creator 补录计划创建者
     * @param string $MinCreateTime 补录计划最小创建时间
     * @param string $MaxCreateTime 补录计划最大创建时间
     * @param array $StateList 实例状态过滤条件
     * @param string $Keyword 模糊查询关键字
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

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("MinCreateTime",$param) and $param["MinCreateTime"] !== null) {
            $this->MinCreateTime = $param["MinCreateTime"];
        }

        if (array_key_exists("MaxCreateTime",$param) and $param["MaxCreateTime"] !== null) {
            $this->MaxCreateTime = $param["MaxCreateTime"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
