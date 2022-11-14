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
 * DescribeTableQualityDetails请求参数结构体
 *
 * @method integer getStatisticsDate() 获取统计日期
 * @method void setStatisticsDate(integer $StatisticsDate) 设置统计日期
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getPageNumber() 获取分页序号
 * @method void setPageNumber(integer $PageNumber) 设置分页序号
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method array getFilters() 获取过滤参数TableName、DatabaseId 、DatabaseName、OwnerUserName
 * @method void setFilters(array $Filters) 设置过滤参数TableName、DatabaseId 、DatabaseName、OwnerUserName
 * @method array getOrderFields() 获取排序参数 排序方式 DESC 或者 ASC，表得分排序 TableScore
 * @method void setOrderFields(array $OrderFields) 设置排序参数 排序方式 DESC 或者 ASC，表得分排序 TableScore
 * @method string getDatasourceId() 获取数据来源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据来源id
 */
class DescribeTableQualityDetailsRequest extends AbstractModel
{
    /**
     * @var integer 统计日期
     */
    public $StatisticsDate;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 分页序号
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var array 过滤参数TableName、DatabaseId 、DatabaseName、OwnerUserName
     */
    public $Filters;

    /**
     * @var array 排序参数 排序方式 DESC 或者 ASC，表得分排序 TableScore
     */
    public $OrderFields;

    /**
     * @var string 数据来源id
     */
    public $DatasourceId;

    /**
     * @param integer $StatisticsDate 统计日期
     * @param string $ProjectId 项目id
     * @param integer $PageNumber 分页序号
     * @param integer $PageSize 分页大小
     * @param array $Filters 过滤参数TableName、DatabaseId 、DatabaseName、OwnerUserName
     * @param array $OrderFields 排序参数 排序方式 DESC 或者 ASC，表得分排序 TableScore
     * @param string $DatasourceId 数据来源id
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
        if (array_key_exists("StatisticsDate",$param) and $param["StatisticsDate"] !== null) {
            $this->StatisticsDate = $param["StatisticsDate"];
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }
    }
}
