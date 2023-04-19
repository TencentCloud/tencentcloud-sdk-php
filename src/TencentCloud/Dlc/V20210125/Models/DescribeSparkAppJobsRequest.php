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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkAppJobs请求参数结构体
 *
 * @method string getSortBy() 获取返回结果按照该字段排序
 * @method void setSortBy(string $SortBy) 设置返回结果按照该字段排序
 * @method string getSorting() 获取正序或者倒序，例如：desc
 * @method void setSorting(string $Sorting) 设置正序或者倒序，例如：desc
 * @method array getFilters() 获取按照该参数过滤,支持spark-job-name
 * @method void setFilters(array $Filters) 设置按照该参数过滤,支持spark-job-name
 * @method string getStartTime() 获取更新时间起始点，支持格式：yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置更新时间起始点，支持格式：yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取更新时间截止点，支持格式：yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置更新时间截止点，支持格式：yyyy-MM-dd HH:mm:ss
 * @method integer getOffset() 获取查询列表偏移量, 默认值0
 * @method void setOffset(integer $Offset) 设置查询列表偏移量, 默认值0
 * @method integer getLimit() 获取查询列表限制数量, 默认值100
 * @method void setLimit(integer $Limit) 设置查询列表限制数量, 默认值100
 */
class DescribeSparkAppJobsRequest extends AbstractModel
{
    /**
     * @var string 返回结果按照该字段排序
     */
    public $SortBy;

    /**
     * @var string 正序或者倒序，例如：desc
     */
    public $Sorting;

    /**
     * @var array 按照该参数过滤,支持spark-job-name
     */
    public $Filters;

    /**
     * @var string 更新时间起始点，支持格式：yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 更新时间截止点，支持格式：yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var integer 查询列表偏移量, 默认值0
     */
    public $Offset;

    /**
     * @var integer 查询列表限制数量, 默认值100
     */
    public $Limit;

    /**
     * @param string $SortBy 返回结果按照该字段排序
     * @param string $Sorting 正序或者倒序，例如：desc
     * @param array $Filters 按照该参数过滤,支持spark-job-name
     * @param string $StartTime 更新时间起始点，支持格式：yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 更新时间截止点，支持格式：yyyy-MM-dd HH:mm:ss
     * @param integer $Offset 查询列表偏移量, 默认值0
     * @param integer $Limit 查询列表限制数量, 默认值100
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
        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
