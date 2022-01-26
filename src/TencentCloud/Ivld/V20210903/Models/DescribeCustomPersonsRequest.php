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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomPersons请求参数结构体
 *
 * @method integer getPageNumber() 获取分页序号，从1开始
 * @method void setPageNumber(integer $PageNumber) 设置分页序号，从1开始
 * @method integer getPageSize() 获取分页数据行数，最多50
 * @method void setPageSize(integer $PageSize) 设置分页数据行数，最多50
 * @method SortBy getSortBy() 获取排序信息，默认倒序
 * @method void setSortBy(SortBy $SortBy) 设置排序信息，默认倒序
 * @method CustomPersonFilter getFilter() 获取自定义人物过滤条件
 * @method void setFilter(CustomPersonFilter $Filter) 设置自定义人物过滤条件
 */
class DescribeCustomPersonsRequest extends AbstractModel
{
    /**
     * @var integer 分页序号，从1开始
     */
    public $PageNumber;

    /**
     * @var integer 分页数据行数，最多50
     */
    public $PageSize;

    /**
     * @var SortBy 排序信息，默认倒序
     */
    public $SortBy;

    /**
     * @var CustomPersonFilter 自定义人物过滤条件
     */
    public $Filter;

    /**
     * @param integer $PageNumber 分页序号，从1开始
     * @param integer $PageSize 分页数据行数，最多50
     * @param SortBy $SortBy 排序信息，默认倒序
     * @param CustomPersonFilter $Filter 自定义人物过滤条件
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = new SortBy();
            $this->SortBy->deserialize($param["SortBy"]);
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new CustomPersonFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
