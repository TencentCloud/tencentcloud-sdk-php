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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBAuditLogs请求参数结构体
 *
 * @method string getProduct() 获取<p>服务产品类型。当前  云 API 仅支持：dcdb、mariadb（cdb、cynosdb 已切至中台）。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型。当前  云 API 仅支持：dcdb、mariadb（cdb、cynosdb 已切至中台）。</p>
 * @method string getStartTime() 获取<p>开始时间，格式 yyyy-MM-dd HH:mm:ss。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，格式 yyyy-MM-dd HH:mm:ss。</p>
 * @method string getEndTime() 获取<p>结束时间，格式 yyyy-MM-dd HH:mm:ss。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，格式 yyyy-MM-dd HH:mm:ss。</p>
 * @method string getInstanceId() 获取<p>实例 ID，必填。dcdb、mariadb 场景以实例维度查询审计日志。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，必填。dcdb、mariadb 场景以实例维度查询审计日志。</p>
 * @method string getLogType() 获取<p>日志类型：Proxy 代理日志，DB 数据库日志，All 全部。</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型：Proxy 代理日志，DB 数据库日志，All 全部。</p>
 * @method string getSortBy() 获取<p>排序字段，默认 Timestamp。</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段，默认 Timestamp。</p>
 * @method string getOrderBy() 获取<p>排序方式：ASC 升序，DESC 降序。默认 DESC。</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序方式：ASC 升序，DESC 降序。默认 DESC。</p>
 * @method integer getOffset() 获取<p>偏移量，默认 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认 0。</p>
 * @method integer getLimit() 获取<p>返回数量，默认 20，最大 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认 20，最大 100。</p>
 * @method integer getSqlStartTime() 获取<p>SQL 开始时间（毫秒级时间戳），根据 QueryId 关联查询时使用。</p>
 * @method void setSqlStartTime(integer $SqlStartTime) 设置<p>SQL 开始时间（毫秒级时间戳），根据 QueryId 关联查询时使用。</p>
 * @method AuditLogQueryFilter getFilter() 获取<p>审计日志查询过滤条件集合。</p>
 * @method void setFilter(AuditLogQueryFilter $Filter) 设置<p>审计日志查询过滤条件集合。</p>
 * @method string getClusterId() 获取<p>集群 ID，dcdb 产品以集群维度查询审计日志</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID，dcdb 产品以集群维度查询审计日志</p>
 */
class DescribeDBAuditLogsRequest extends AbstractModel
{
    /**
     * @var string <p>服务产品类型。当前  云 API 仅支持：dcdb、mariadb（cdb、cynosdb 已切至中台）。</p>
     */
    public $Product;

    /**
     * @var string <p>开始时间，格式 yyyy-MM-dd HH:mm:ss。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间，格式 yyyy-MM-dd HH:mm:ss。</p>
     */
    public $EndTime;

    /**
     * @var string <p>实例 ID，必填。dcdb、mariadb 场景以实例维度查询审计日志。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志类型：Proxy 代理日志，DB 数据库日志，All 全部。</p>
     */
    public $LogType;

    /**
     * @var string <p>排序字段，默认 Timestamp。</p>
     */
    public $SortBy;

    /**
     * @var string <p>排序方式：ASC 升序，DESC 降序。默认 DESC。</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>偏移量，默认 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认 20，最大 100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>SQL 开始时间（毫秒级时间戳），根据 QueryId 关联查询时使用。</p>
     */
    public $SqlStartTime;

    /**
     * @var AuditLogQueryFilter <p>审计日志查询过滤条件集合。</p>
     */
    public $Filter;

    /**
     * @var string <p>集群 ID，dcdb 产品以集群维度查询审计日志</p>
     */
    public $ClusterId;

    /**
     * @param string $Product <p>服务产品类型。当前  云 API 仅支持：dcdb、mariadb（cdb、cynosdb 已切至中台）。</p>
     * @param string $StartTime <p>开始时间，格式 yyyy-MM-dd HH:mm:ss。</p>
     * @param string $EndTime <p>结束时间，格式 yyyy-MM-dd HH:mm:ss。</p>
     * @param string $InstanceId <p>实例 ID，必填。dcdb、mariadb 场景以实例维度查询审计日志。</p>
     * @param string $LogType <p>日志类型：Proxy 代理日志，DB 数据库日志，All 全部。</p>
     * @param string $SortBy <p>排序字段，默认 Timestamp。</p>
     * @param string $OrderBy <p>排序方式：ASC 升序，DESC 降序。默认 DESC。</p>
     * @param integer $Offset <p>偏移量，默认 0。</p>
     * @param integer $Limit <p>返回数量，默认 20，最大 100。</p>
     * @param integer $SqlStartTime <p>SQL 开始时间（毫秒级时间戳），根据 QueryId 关联查询时使用。</p>
     * @param AuditLogQueryFilter $Filter <p>审计日志查询过滤条件集合。</p>
     * @param string $ClusterId <p>集群 ID，dcdb 产品以集群维度查询审计日志</p>
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SqlStartTime",$param) and $param["SqlStartTime"] !== null) {
            $this->SqlStartTime = $param["SqlStartTime"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AuditLogQueryFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
