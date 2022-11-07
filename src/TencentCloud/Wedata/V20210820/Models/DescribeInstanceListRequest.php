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
 * DescribeInstanceList请求参数结构体
 *
 * @method string getProjectId() 获取项目/工作空间id
 * @method void setProjectId(string $ProjectId) 设置项目/工作空间id
 * @method integer getPageIndex() 获取页码
 * @method void setPageIndex(integer $PageIndex) 设置页码
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method array getCycleList() 获取周期列表（如天，一次性），可选
 * @method void setCycleList(array $CycleList) 设置周期列表（如天，一次性），可选
 * @method array getOwnerList() 获取责任人
 * @method void setOwnerList(array $OwnerList) 设置责任人
 * @method string getInstanceType() 获取跟之前保持一致
 * @method void setInstanceType(string $InstanceType) 设置跟之前保持一致
 * @method string getSort() 获取排序顺序（asc，desc）
 * @method void setSort(string $Sort) 设置排序顺序（asc，desc）
 * @method string getSortCol() 获取排序列（costTime 运行耗时，startTime 开始时间，state 实例状态，curRunDate 数据时间）
 * @method void setSortCol(string $SortCol) 设置排序列（costTime 运行耗时，startTime 开始时间，state 实例状态，curRunDate 数据时间）
 * @method array getTaskTypeList() 获取类型列表（如35 shell任务），可选
 * @method void setTaskTypeList(array $TaskTypeList) 设置类型列表（如35 shell任务），可选
 * @method array getStateList() 获取状态列表（如成功 2，正在执行 1），可选
 * @method void setStateList(array $StateList) 设置状态列表（如成功 2，正在执行 1），可选
 * @method string getKeyword() 获取任务名称
 * @method void setKeyword(string $Keyword) 设置任务名称
 */
class DescribeInstanceListRequest extends AbstractModel
{
    /**
     * @var string 项目/工作空间id
     */
    public $ProjectId;

    /**
     * @var integer 页码
     */
    public $PageIndex;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var array 周期列表（如天，一次性），可选
     */
    public $CycleList;

    /**
     * @var array 责任人
     */
    public $OwnerList;

    /**
     * @var string 跟之前保持一致
     */
    public $InstanceType;

    /**
     * @var string 排序顺序（asc，desc）
     */
    public $Sort;

    /**
     * @var string 排序列（costTime 运行耗时，startTime 开始时间，state 实例状态，curRunDate 数据时间）
     */
    public $SortCol;

    /**
     * @var array 类型列表（如35 shell任务），可选
     */
    public $TaskTypeList;

    /**
     * @var array 状态列表（如成功 2，正在执行 1），可选
     */
    public $StateList;

    /**
     * @var string 任务名称
     */
    public $Keyword;

    /**
     * @param string $ProjectId 项目/工作空间id
     * @param integer $PageIndex 页码
     * @param integer $PageSize 页大小
     * @param array $CycleList 周期列表（如天，一次性），可选
     * @param array $OwnerList 责任人
     * @param string $InstanceType 跟之前保持一致
     * @param string $Sort 排序顺序（asc，desc）
     * @param string $SortCol 排序列（costTime 运行耗时，startTime 开始时间，state 实例状态，curRunDate 数据时间）
     * @param array $TaskTypeList 类型列表（如35 shell任务），可选
     * @param array $StateList 状态列表（如成功 2，正在执行 1），可选
     * @param string $Keyword 任务名称
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

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("CycleList",$param) and $param["CycleList"] !== null) {
            $this->CycleList = $param["CycleList"];
        }

        if (array_key_exists("OwnerList",$param) and $param["OwnerList"] !== null) {
            $this->OwnerList = $param["OwnerList"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SortCol",$param) and $param["SortCol"] !== null) {
            $this->SortCol = $param["SortCol"];
        }

        if (array_key_exists("TaskTypeList",$param) and $param["TaskTypeList"] !== null) {
            $this->TaskTypeList = $param["TaskTypeList"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
