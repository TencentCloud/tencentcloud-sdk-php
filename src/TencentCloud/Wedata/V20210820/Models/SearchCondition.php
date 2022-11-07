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
 * 查询实例条件
 *
 * @method SearchConditionInstance getInstance() 获取查询框架，必选
 * @method void setInstance(SearchConditionInstance $Instance) 设置查询框架，必选
 * @method string getKeyword() 获取查询关键字（任务Id精确匹配，任务名称模糊匹配），可选
 * @method void setKeyword(string $Keyword) 设置查询关键字（任务Id精确匹配，任务名称模糊匹配），可选
 * @method string getSort() 获取排序顺序（asc，desc）
 * @method void setSort(string $Sort) 设置排序顺序（asc，desc）
 * @method string getSortCol() 获取排序列（costTime 运行耗时，startTime 开始时间，state 实例状态，curRunDate 数据时间）
 * @method void setSortCol(string $SortCol) 设置排序列（costTime 运行耗时，startTime 开始时间，state 实例状态，curRunDate 数据时间）
 */
class SearchCondition extends AbstractModel
{
    /**
     * @var SearchConditionInstance 查询框架，必选
     */
    public $Instance;

    /**
     * @var string 查询关键字（任务Id精确匹配，任务名称模糊匹配），可选
     */
    public $Keyword;

    /**
     * @var string 排序顺序（asc，desc）
     */
    public $Sort;

    /**
     * @var string 排序列（costTime 运行耗时，startTime 开始时间，state 实例状态，curRunDate 数据时间）
     */
    public $SortCol;

    /**
     * @param SearchConditionInstance $Instance 查询框架，必选
     * @param string $Keyword 查询关键字（任务Id精确匹配，任务名称模糊匹配），可选
     * @param string $Sort 排序顺序（asc，desc）
     * @param string $SortCol 排序列（costTime 运行耗时，startTime 开始时间，state 实例状态，curRunDate 数据时间）
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
        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new SearchConditionInstance();
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
    }
}
