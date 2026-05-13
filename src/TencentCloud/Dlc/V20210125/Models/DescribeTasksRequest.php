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
 * DescribeTasks请求参数结构体
 *
 * @method integer getLimit() 获取<p>返回数量，默认为10，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为10，最大值为100。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method array getFilters() 获取<p>过滤条件，如下支持的过滤类型，传参Name应为以下其中一个,其中task-id支持最大50个过滤个数，其他过滤参数支持的总数不超过5个。<br>task-id - String - （任务ID准确过滤）task-id取值形如：e386471f-139a-4e59-877f-50ece8135b99。<br>task-state - String - （任务状态过滤）取值范围 0(初始化)， 1(运行中)， 2(成功)， -1(失败)。<br>task-sql-keyword - String - （SQL语句关键字模糊过滤）取值形如：DROP TABLE。<br>task-operator- string （子uin过滤）<br>task-kind - string （任务类型过滤）</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，如下支持的过滤类型，传参Name应为以下其中一个,其中task-id支持最大50个过滤个数，其他过滤参数支持的总数不超过5个。<br>task-id - String - （任务ID准确过滤）task-id取值形如：e386471f-139a-4e59-877f-50ece8135b99。<br>task-state - String - （任务状态过滤）取值范围 0(初始化)， 1(运行中)， 2(成功)， -1(失败)。<br>task-sql-keyword - String - （SQL语句关键字模糊过滤）取值形如：DROP TABLE。<br>task-operator- string （子uin过滤）<br>task-kind - string （任务类型过滤）</p>
 * @method string getSortBy() 获取<p>排序字段，支持如下字段类型，create-time（创建时间，默认）、update-time（更新时间）</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段，支持如下字段类型，create-time（创建时间，默认）、update-time（更新时间）</p>
 * @method string getSorting() 获取<p>排序方式，desc表示正序，asc表示反序， 默认为asc。</p>
 * @method void setSorting(string $Sorting) 设置<p>排序方式，desc表示正序，asc表示反序， 默认为asc。</p>
 * @method string getStartTime() 获取<p>起始时间点，格式为yyyy-mm-dd HH:MM:SS。默认为45天前的当前时刻</p>
 * @method void setStartTime(string $StartTime) 设置<p>起始时间点，格式为yyyy-mm-dd HH:MM:SS。默认为45天前的当前时刻</p>
 * @method string getEndTime() 获取<p>结束时间点，格式为yyyy-mm-dd HH:MM:SS时间跨度在(0,30天]，支持最近45天数据查询。默认为当前时刻</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间点，格式为yyyy-mm-dd HH:MM:SS时间跨度在(0,30天]，支持最近45天数据查询。默认为当前时刻</p>
 * @method string getDataEngineName() 获取<p>数据引擎名称，用于筛选</p>
 * @method void setDataEngineName(string $DataEngineName) 设置<p>数据引擎名称，用于筛选</p>
 * @method string getResourceGroupName() 获取<p>spark引擎资源组名称</p>
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>spark引擎资源组名称</p>
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer <p>返回数量，默认为10，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤条件，如下支持的过滤类型，传参Name应为以下其中一个,其中task-id支持最大50个过滤个数，其他过滤参数支持的总数不超过5个。<br>task-id - String - （任务ID准确过滤）task-id取值形如：e386471f-139a-4e59-877f-50ece8135b99。<br>task-state - String - （任务状态过滤）取值范围 0(初始化)， 1(运行中)， 2(成功)， -1(失败)。<br>task-sql-keyword - String - （SQL语句关键字模糊过滤）取值形如：DROP TABLE。<br>task-operator- string （子uin过滤）<br>task-kind - string （任务类型过滤）</p>
     */
    public $Filters;

    /**
     * @var string <p>排序字段，支持如下字段类型，create-time（创建时间，默认）、update-time（更新时间）</p>
     */
    public $SortBy;

    /**
     * @var string <p>排序方式，desc表示正序，asc表示反序， 默认为asc。</p>
     */
    public $Sorting;

    /**
     * @var string <p>起始时间点，格式为yyyy-mm-dd HH:MM:SS。默认为45天前的当前时刻</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间点，格式为yyyy-mm-dd HH:MM:SS时间跨度在(0,30天]，支持最近45天数据查询。默认为当前时刻</p>
     */
    public $EndTime;

    /**
     * @var string <p>数据引擎名称，用于筛选</p>
     */
    public $DataEngineName;

    /**
     * @var string <p>spark引擎资源组名称</p>
     */
    public $ResourceGroupName;

    /**
     * @param integer $Limit <p>返回数量，默认为10，最大值为100。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param array $Filters <p>过滤条件，如下支持的过滤类型，传参Name应为以下其中一个,其中task-id支持最大50个过滤个数，其他过滤参数支持的总数不超过5个。<br>task-id - String - （任务ID准确过滤）task-id取值形如：e386471f-139a-4e59-877f-50ece8135b99。<br>task-state - String - （任务状态过滤）取值范围 0(初始化)， 1(运行中)， 2(成功)， -1(失败)。<br>task-sql-keyword - String - （SQL语句关键字模糊过滤）取值形如：DROP TABLE。<br>task-operator- string （子uin过滤）<br>task-kind - string （任务类型过滤）</p>
     * @param string $SortBy <p>排序字段，支持如下字段类型，create-time（创建时间，默认）、update-time（更新时间）</p>
     * @param string $Sorting <p>排序方式，desc表示正序，asc表示反序， 默认为asc。</p>
     * @param string $StartTime <p>起始时间点，格式为yyyy-mm-dd HH:MM:SS。默认为45天前的当前时刻</p>
     * @param string $EndTime <p>结束时间点，格式为yyyy-mm-dd HH:MM:SS时间跨度在(0,30天]，支持最近45天数据查询。默认为当前时刻</p>
     * @param string $DataEngineName <p>数据引擎名称，用于筛选</p>
     * @param string $ResourceGroupName <p>spark引擎资源组名称</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
