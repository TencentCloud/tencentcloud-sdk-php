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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAuditLogFile请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cmgo-xfts****，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cmgo-xfts****，与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getStartTime() 获取开始时间，格式为："2021-07-12 10:29:20"。
 * @method void setStartTime(string $StartTime) 设置开始时间，格式为："2021-07-12 10:29:20"。
 * @method string getEndTime() 获取结束时间，格式为："2021-07-12 10:39:20"。
 * @method void setEndTime(string $EndTime) 设置结束时间，格式为："2021-07-12 10:39:20"。
 * @method string getOrder() 获取审计日志文件的排序方式。
<ul><li>ASC：升序。</li><li>DESC：降序。</li></ul>
 * @method void setOrder(string $Order) 设置审计日志文件的排序方式。
<ul><li>ASC：升序。</li><li>DESC：降序。</li></ul>
 * @method string getOrderBy() 获取审计日志文件的排序字段。当前支持的取值包括：
<ul><li>timestamp：时间戳。</li><li>affectRows：影响行数。</li><li>execTime：执行时间。</li></ul>
 * @method void setOrderBy(string $OrderBy) 设置审计日志文件的排序字段。当前支持的取值包括：
<ul><li>timestamp：时间戳。</li><li>affectRows：影响行数。</li><li>execTime：执行时间。</li></ul>
 * @method AuditLogFilter getFilter() 获取过滤条件。可按设置的过滤条件过滤审计日志。
 * @method void setFilter(AuditLogFilter $Filter) 设置过滤条件。可按设置的过滤条件过滤审计日志。
 */
class CreateAuditLogFileRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cmgo-xfts****，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，格式为："2021-07-12 10:29:20"。
     */
    public $StartTime;

    /**
     * @var string 结束时间，格式为："2021-07-12 10:39:20"。
     */
    public $EndTime;

    /**
     * @var string 审计日志文件的排序方式。
<ul><li>ASC：升序。</li><li>DESC：降序。</li></ul>
     */
    public $Order;

    /**
     * @var string 审计日志文件的排序字段。当前支持的取值包括：
<ul><li>timestamp：时间戳。</li><li>affectRows：影响行数。</li><li>execTime：执行时间。</li></ul>
     */
    public $OrderBy;

    /**
     * @var AuditLogFilter 过滤条件。可按设置的过滤条件过滤审计日志。
     */
    public $Filter;

    /**
     * @param string $InstanceId 实例 ID，格式如：cmgo-xfts****，与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $StartTime 开始时间，格式为："2021-07-12 10:29:20"。
     * @param string $EndTime 结束时间，格式为："2021-07-12 10:39:20"。
     * @param string $Order 审计日志文件的排序方式。
<ul><li>ASC：升序。</li><li>DESC：降序。</li></ul>
     * @param string $OrderBy 审计日志文件的排序字段。当前支持的取值包括：
<ul><li>timestamp：时间戳。</li><li>affectRows：影响行数。</li><li>execTime：执行时间。</li></ul>
     * @param AuditLogFilter $Filter 过滤条件。可按设置的过滤条件过滤审计日志。
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
