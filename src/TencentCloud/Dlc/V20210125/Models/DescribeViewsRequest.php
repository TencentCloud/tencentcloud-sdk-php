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
 * DescribeViews请求参数结构体
 *
 * @method string getDatabaseName() 获取列出该数据库下所属数据表。
 * @method void setDatabaseName(string $DatabaseName) 设置列出该数据库下所属数据表。
 * @method integer getLimit() 获取返回数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为100。
 * @method integer getOffset() 获取数据偏移量，从0开始，默认为0。
 * @method void setOffset(integer $Offset) 设置数据偏移量，从0开始，默认为0。
 * @method array getFilters() 获取过滤条件，如下支持的过滤类型，传参Name应为其一
view-name - String - （过滤条件）数据表名称,形如：view-001。
view-id - String - （过滤条件）view id形如：12342。
 * @method void setFilters(array $Filters) 设置过滤条件，如下支持的过滤类型，传参Name应为其一
view-name - String - （过滤条件）数据表名称,形如：view-001。
view-id - String - （过滤条件）view id形如：12342。
 * @method string getDatasourceConnectionName() 获取数据库所属的数据源名称
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据库所属的数据源名称
 * @method string getSort() 获取排序字段
 * @method void setSort(string $Sort) 设置排序字段
 * @method boolean getAsc() 获取排序规则，true:升序；false:降序
 * @method void setAsc(boolean $Asc) 设置排序规则，true:升序；false:降序
 * @method string getStartTime() 获取按视图更新时间筛选，开始时间，如2021-11-11 00:00:00
 * @method void setStartTime(string $StartTime) 设置按视图更新时间筛选，开始时间，如2021-11-11 00:00:00
 * @method string getEndTime() 获取按视图更新时间筛选，结束时间，如2021-11-12 00:00:00
 * @method void setEndTime(string $EndTime) 设置按视图更新时间筛选，结束时间，如2021-11-12 00:00:00
 * @method string getDescribeType() 获取查询类型：all：全部数据（默认）、permission：有权限的数据
注意：此字段需要开启白名单使用，如果需要使用，请提交工单联系我们。
 * @method void setDescribeType(string $DescribeType) 设置查询类型：all：全部数据（默认）、permission：有权限的数据
注意：此字段需要开启白名单使用，如果需要使用，请提交工单联系我们。
 */
class DescribeViewsRequest extends AbstractModel
{
    /**
     * @var string 列出该数据库下所属数据表。
     */
    public $DatabaseName;

    /**
     * @var integer 返回数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 数据偏移量，从0开始，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件，如下支持的过滤类型，传参Name应为其一
view-name - String - （过滤条件）数据表名称,形如：view-001。
view-id - String - （过滤条件）view id形如：12342。
     */
    public $Filters;

    /**
     * @var string 数据库所属的数据源名称
     */
    public $DatasourceConnectionName;

    /**
     * @var string 排序字段
     */
    public $Sort;

    /**
     * @var boolean 排序规则，true:升序；false:降序
     */
    public $Asc;

    /**
     * @var string 按视图更新时间筛选，开始时间，如2021-11-11 00:00:00
     */
    public $StartTime;

    /**
     * @var string 按视图更新时间筛选，结束时间，如2021-11-12 00:00:00
     */
    public $EndTime;

    /**
     * @var string 查询类型：all：全部数据（默认）、permission：有权限的数据
注意：此字段需要开启白名单使用，如果需要使用，请提交工单联系我们。
     */
    public $DescribeType;

    /**
     * @param string $DatabaseName 列出该数据库下所属数据表。
     * @param integer $Limit 返回数量，默认为10，最大值为100。
     * @param integer $Offset 数据偏移量，从0开始，默认为0。
     * @param array $Filters 过滤条件，如下支持的过滤类型，传参Name应为其一
view-name - String - （过滤条件）数据表名称,形如：view-001。
view-id - String - （过滤条件）view id形如：12342。
     * @param string $DatasourceConnectionName 数据库所属的数据源名称
     * @param string $Sort 排序字段
     * @param boolean $Asc 排序规则，true:升序；false:降序
     * @param string $StartTime 按视图更新时间筛选，开始时间，如2021-11-11 00:00:00
     * @param string $EndTime 按视图更新时间筛选，结束时间，如2021-11-12 00:00:00
     * @param string $DescribeType 查询类型：all：全部数据（默认）、permission：有权限的数据
注意：此字段需要开启白名单使用，如果需要使用，请提交工单联系我们。
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
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

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DescribeType",$param) and $param["DescribeType"] !== null) {
            $this->DescribeType = $param["DescribeType"];
        }
    }
}
