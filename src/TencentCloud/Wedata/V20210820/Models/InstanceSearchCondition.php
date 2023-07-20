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
 * 实例检索条件
 *
 * @method array getCycleList() 获取任务调度周期类型
 * @method void setCycleList(array $CycleList) 设置任务调度周期类型
 * @method string getDateFrom() 获取起始时间
 * @method void setDateFrom(string $DateFrom) 设置起始时间
 * @method string getDateTo() 获取截止时间
 * @method void setDateTo(string $DateTo) 设置截止时间
 * @method InstanceCondition getInstance() 获取实例过滤条件
 * @method void setInstance(InstanceCondition $Instance) 设置实例过滤条件
 * @method string getKeyword() 获取模糊查询关键字
 * @method void setKeyword(string $Keyword) 设置模糊查询关键字
 * @method string getSort() 获取排序方式
 * @method void setSort(string $Sort) 设置排序方式
 * @method string getSortCol() 获取排序字段
 * @method void setSortCol(string $SortCol) 设置排序字段
 * @method array getStateList() 获取实例状态类型
 * @method void setStateList(array $StateList) 设置实例状态类型
 */
class InstanceSearchCondition extends AbstractModel
{
    /**
     * @var array 任务调度周期类型
     */
    public $CycleList;

    /**
     * @var string 起始时间
     */
    public $DateFrom;

    /**
     * @var string 截止时间
     */
    public $DateTo;

    /**
     * @var InstanceCondition 实例过滤条件
     */
    public $Instance;

    /**
     * @var string 模糊查询关键字
     */
    public $Keyword;

    /**
     * @var string 排序方式
     */
    public $Sort;

    /**
     * @var string 排序字段
     */
    public $SortCol;

    /**
     * @var array 实例状态类型
     */
    public $StateList;

    /**
     * @param array $CycleList 任务调度周期类型
     * @param string $DateFrom 起始时间
     * @param string $DateTo 截止时间
     * @param InstanceCondition $Instance 实例过滤条件
     * @param string $Keyword 模糊查询关键字
     * @param string $Sort 排序方式
     * @param string $SortCol 排序字段
     * @param array $StateList 实例状态类型
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
        if (array_key_exists("CycleList",$param) and $param["CycleList"] !== null) {
            $this->CycleList = $param["CycleList"];
        }

        if (array_key_exists("DateFrom",$param) and $param["DateFrom"] !== null) {
            $this->DateFrom = $param["DateFrom"];
        }

        if (array_key_exists("DateTo",$param) and $param["DateTo"] !== null) {
            $this->DateTo = $param["DateTo"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new InstanceCondition();
            $this->Instance->deserialize($param["Instance"]);
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SortCol",$param) and $param["SortCol"] !== null) {
            $this->SortCol = $param["SortCol"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }
    }
}
