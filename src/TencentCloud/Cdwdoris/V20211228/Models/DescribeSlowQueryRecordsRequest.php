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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowQueryRecords请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getQueryDurationMs() 获取慢查询时间
 * @method void setQueryDurationMs(integer $QueryDurationMs) 设置慢查询时间
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getPageSize() 获取分页
 * @method void setPageSize(integer $PageSize) 设置分页
 * @method integer getPageNum() 获取分页
 * @method void setPageNum(integer $PageNum) 设置分页
 * @method string getDurationMs() 获取排序参数
 * @method void setDurationMs(string $DurationMs) 设置排序参数
 * @method array getDbName() 获取数据库名称
 * @method void setDbName(array $DbName) 设置数据库名称
 * @method integer getIsQuery() 获取是否是查询，0：否， 1：是
 * @method void setIsQuery(integer $IsQuery) 设置是否是查询，0：否， 1：是
 * @method array getCatalogName() 获取catalog名称
 * @method void setCatalogName(array $CatalogName) 设置catalog名称
 * @method string getSql() 获取sql名
 * @method void setSql(string $Sql) 设置sql名
 * @method string getReadRows() 获取ReadRows排序字段
 * @method void setReadRows(string $ReadRows) 设置ReadRows排序字段
 * @method string getResultBytes() 获取ResultBytes排序字段
 * @method void setResultBytes(string $ResultBytes) 设置ResultBytes排序字段
 * @method string getMemoryUsage() 获取MemoryUsage排序字段
 * @method void setMemoryUsage(string $MemoryUsage) 设置MemoryUsage排序字段
 * @method string getSortField() 获取排序字段
 * @method void setSortField(string $SortField) 设置排序字段
 * @method string getSortOrder() 获取排序方式
 * @method void setSortOrder(string $SortOrder) 设置排序方式
 * @method string getUserName() 获取user
 * @method void setUserName(string $UserName) 设置user
 */
class DescribeSlowQueryRecordsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 慢查询时间
     */
    public $QueryDurationMs;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 分页
     */
    public $PageSize;

    /**
     * @var integer 分页
     */
    public $PageNum;

    /**
     * @var string 排序参数
     */
    public $DurationMs;

    /**
     * @var array 数据库名称
     */
    public $DbName;

    /**
     * @var integer 是否是查询，0：否， 1：是
     */
    public $IsQuery;

    /**
     * @var array catalog名称
     */
    public $CatalogName;

    /**
     * @var string sql名
     */
    public $Sql;

    /**
     * @var string ReadRows排序字段
     */
    public $ReadRows;

    /**
     * @var string ResultBytes排序字段
     */
    public $ResultBytes;

    /**
     * @var string MemoryUsage排序字段
     */
    public $MemoryUsage;

    /**
     * @var string 排序字段
     */
    public $SortField;

    /**
     * @var string 排序方式
     */
    public $SortOrder;

    /**
     * @var string user
     */
    public $UserName;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $QueryDurationMs 慢查询时间
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $PageSize 分页
     * @param integer $PageNum 分页
     * @param string $DurationMs 排序参数
     * @param array $DbName 数据库名称
     * @param integer $IsQuery 是否是查询，0：否， 1：是
     * @param array $CatalogName catalog名称
     * @param string $Sql sql名
     * @param string $ReadRows ReadRows排序字段
     * @param string $ResultBytes ResultBytes排序字段
     * @param string $MemoryUsage MemoryUsage排序字段
     * @param string $SortField 排序字段
     * @param string $SortOrder 排序方式
     * @param string $UserName user
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("QueryDurationMs",$param) and $param["QueryDurationMs"] !== null) {
            $this->QueryDurationMs = $param["QueryDurationMs"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("IsQuery",$param) and $param["IsQuery"] !== null) {
            $this->IsQuery = $param["IsQuery"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("ReadRows",$param) and $param["ReadRows"] !== null) {
            $this->ReadRows = $param["ReadRows"];
        }

        if (array_key_exists("ResultBytes",$param) and $param["ResultBytes"] !== null) {
            $this->ResultBytes = $param["ResultBytes"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
