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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRayJobs请求参数结构体
 *
 * @method integer getPage() 获取当前页码（从1开始）
 * @method void setPage(integer $Page) 设置当前页码（从1开始）
 * @method integer getPageSize() 获取页数
 * @method void setPageSize(integer $PageSize) 设置页数
 * @method array getFilters() 获取过滤条件列表（列表的字段名称）
 * @method void setFilters(array $Filters) 设置过滤条件列表（列表的字段名称）
 * @method integer getStartTime() 获取提交时间起始过滤-时间戳（毫秒，可选）
 * @method void setStartTime(integer $StartTime) 设置提交时间起始过滤-时间戳（毫秒，可选）
 * @method integer getEndTime() 获取提交时间截止过滤-时间戳（毫秒，可选）
 * @method void setEndTime(integer $EndTime) 设置提交时间截止过滤-时间戳（毫秒，可选）
 * @method array getSortFields() 获取排序字段列表（列表字段）
 * @method void setSortFields(array $SortFields) 设置排序字段列表（列表字段）
 */
class ListRayJobsRequest extends AbstractModel
{
    /**
     * @var integer 当前页码（从1开始）
     */
    public $Page;

    /**
     * @var integer 页数
     */
    public $PageSize;

    /**
     * @var array 过滤条件列表（列表的字段名称）
     */
    public $Filters;

    /**
     * @var integer 提交时间起始过滤-时间戳（毫秒，可选）
     */
    public $StartTime;

    /**
     * @var integer 提交时间截止过滤-时间戳（毫秒，可选）
     */
    public $EndTime;

    /**
     * @var array 排序字段列表（列表字段）
     */
    public $SortFields;

    /**
     * @param integer $Page 当前页码（从1开始）
     * @param integer $PageSize 页数
     * @param array $Filters 过滤条件列表（列表的字段名称）
     * @param integer $StartTime 提交时间起始过滤-时间戳（毫秒，可选）
     * @param integer $EndTime 提交时间截止过滤-时间戳（毫秒，可选）
     * @param array $SortFields 排序字段列表（列表字段）
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SortFields",$param) and $param["SortFields"] !== null) {
            $this->SortFields = [];
            foreach ($param["SortFields"] as $key => $value){
                $obj = new SortField();
                $obj->deserialize($value);
                array_push($this->SortFields, $obj);
            }
        }
    }
}
