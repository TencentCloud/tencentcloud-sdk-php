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
 * DescribeTaskReportDetailList请求参数结构体
 *
 * @method string getProjectId() 获取WeData项目id
 * @method void setProjectId(string $ProjectId) 设置WeData项目id
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getBeginDate() 获取统计周期的开始日期，格式为 yyyy-MM-dd
 * @method void setBeginDate(string $BeginDate) 设置统计周期的开始日期，格式为 yyyy-MM-dd
 * @method string getEndDate() 获取统计周期的结束日期，格式为 yyyy-MM-dd
 * @method void setEndDate(string $EndDate) 设置统计周期的结束日期，格式为 yyyy-MM-dd
 * @method string getStateList() 获取任务状态，多个状态用逗号连接
 * @method void setStateList(string $StateList) 设置任务状态，多个状态用逗号连接
 * @method string getSortItem() 获取排序字段名
 * @method void setSortItem(string $SortItem) 设置排序字段名
 * @method string getSortType() 获取升序或降序，传ASC或DESC
 * @method void setSortType(string $SortType) 设置升序或降序，传ASC或DESC
 * @method integer getPageIndex() 获取页数，从1开始
 * @method void setPageIndex(integer $PageIndex) 设置页数，从1开始
 * @method integer getPageSize() 获取每页的记录条数，默认10条
 * @method void setPageSize(integer $PageSize) 设置每页的记录条数，默认10条
 */
class DescribeTaskReportDetailListRequest extends AbstractModel
{
    /**
     * @var string WeData项目id
     */
    public $ProjectId;

    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 统计周期的开始日期，格式为 yyyy-MM-dd
     */
    public $BeginDate;

    /**
     * @var string 统计周期的结束日期，格式为 yyyy-MM-dd
     */
    public $EndDate;

    /**
     * @var string 任务状态，多个状态用逗号连接
     */
    public $StateList;

    /**
     * @var string 排序字段名
     */
    public $SortItem;

    /**
     * @var string 升序或降序，传ASC或DESC
     */
    public $SortType;

    /**
     * @var integer 页数，从1开始
     */
    public $PageIndex;

    /**
     * @var integer 每页的记录条数，默认10条
     */
    public $PageSize;

    /**
     * @param string $ProjectId WeData项目id
     * @param string $TaskId 任务Id
     * @param string $BeginDate 统计周期的开始日期，格式为 yyyy-MM-dd
     * @param string $EndDate 统计周期的结束日期，格式为 yyyy-MM-dd
     * @param string $StateList 任务状态，多个状态用逗号连接
     * @param string $SortItem 排序字段名
     * @param string $SortType 升序或降序，传ASC或DESC
     * @param integer $PageIndex 页数，从1开始
     * @param integer $PageSize 每页的记录条数，默认10条
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
