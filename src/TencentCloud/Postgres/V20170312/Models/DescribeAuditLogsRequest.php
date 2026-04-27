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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditLogs请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getStartTime() 获取<p>开始时间</p><p>参数格式：2026-03-25 00:00:00</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p><p>参数格式：2026-03-25 00:00:00</p>
 * @method string getEndTime() 获取<p>结束时间</p><p>参数格式：2026-03-25 01:00:00</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p><p>参数格式：2026-03-25 01:00:00</p>
 * @method integer getLimit() 获取<p>查询限制</p><p>取值范围：[1, 100]</p>
 * @method void setLimit(integer $Limit) 设置<p>查询限制</p><p>取值范围：[1, 100]</p>
 * @method string getProduct() 获取<p>产品名称</p><p>参数格式：postgres</p>
 * @method void setProduct(string $Product) 设置<p>产品名称</p><p>参数格式：postgres</p>
 * @method integer getOffset() 获取<p>位移量</p><p>取值范围：[0, 10000]</p>
 * @method void setOffset(integer $Offset) 设置<p>位移量</p><p>取值范围：[0, 10000]</p>
 * @method string getOrder() 获取<p>排序方法</p><p>入参限制：Timestamp,AffectRows,ExecTime</p>
 * @method void setOrder(string $Order) 设置<p>排序方法</p><p>入参限制：Timestamp,AffectRows,ExecTime</p>
 * @method string getOrderBy() 获取<p>排序字段</p><p>入参限制：ASC,DESC</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段</p><p>入参限制：ASC,DESC</p>
 * @method AuditLogFilter getFilter() 获取<p>过滤条件</p>
 * @method void setFilter(AuditLogFilter $Filter) 设置<p>过滤条件</p>
 */
class DescribeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>开始时间</p><p>参数格式：2026-03-25 00:00:00</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p><p>参数格式：2026-03-25 01:00:00</p>
     */
    public $EndTime;

    /**
     * @var integer <p>查询限制</p><p>取值范围：[1, 100]</p>
     */
    public $Limit;

    /**
     * @var string <p>产品名称</p><p>参数格式：postgres</p>
     */
    public $Product;

    /**
     * @var integer <p>位移量</p><p>取值范围：[0, 10000]</p>
     */
    public $Offset;

    /**
     * @var string <p>排序方法</p><p>入参限制：Timestamp,AffectRows,ExecTime</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段</p><p>入参限制：ASC,DESC</p>
     */
    public $OrderBy;

    /**
     * @var AuditLogFilter <p>过滤条件</p>
     */
    public $Filter;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $StartTime <p>开始时间</p><p>参数格式：2026-03-25 00:00:00</p>
     * @param string $EndTime <p>结束时间</p><p>参数格式：2026-03-25 01:00:00</p>
     * @param integer $Limit <p>查询限制</p><p>取值范围：[1, 100]</p>
     * @param string $Product <p>产品名称</p><p>参数格式：postgres</p>
     * @param integer $Offset <p>位移量</p><p>取值范围：[0, 10000]</p>
     * @param string $Order <p>排序方法</p><p>入参限制：Timestamp,AffectRows,ExecTime</p>
     * @param string $OrderBy <p>排序字段</p><p>入参限制：ASC,DESC</p>
     * @param AuditLogFilter $Filter <p>过滤条件</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AuditLogFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
