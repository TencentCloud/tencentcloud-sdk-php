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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogs请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method string getStartTime() 获取<p>日志检索的起始时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 00:00:00。返回结果中仅包含该时间点及之后的日志。</p>
 * @method void setStartTime(string $StartTime) 设置<p>日志检索的起始时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 00:00:00。返回结果中仅包含该时间点及之后的日志。</p>
 * @method string getEndTime() 获取<p>日志检索的结束时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 23:59:59。返回结果中仅包含该时间点及之前的日志。</p>
 * @method void setEndTime(string $EndTime) 设置<p>日志检索的结束时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 23:59:59。返回结果中仅包含该时间点及之前的日志。</p>
 * @method string getLogType() 获取<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method void setLogType(string $LogType) 设置<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method array getLogFilter() 获取<p>过滤条件</p>
 * @method void setLogFilter(array $LogFilter) 设置<p>过滤条件</p>
 * @method integer getLimit() 获取<p>每页返回的日志列表大小。</p><ul><li>默认值：20。</li><li>取值范围：[1,100]。</li></ul>
 * @method void setLimit(integer $Limit) 设置<p>每页返回的日志列表大小。</p><ul><li>默认值：20。</li><li>取值范围：[1,100]。</li></ul>
 * @method integer getOffset() 获取<p>分页的起始偏移量。</p><ul><li>默认：0。</li><li>取值：Limit 整数倍。计算公式：offset=limit*(页码-1)。</li></ul>
 * @method void setOffset(integer $Offset) 设置<p>分页的起始偏移量。</p><ul><li>默认：0。</li><li>取值：Limit 整数倍。计算公式：offset=limit*(页码-1)。</li></ul>
 * @method string getOrder() 获取<p>日志排序方式，默认值为 DESC。取值如下：</p><ul><li>ASC：按时间升序排列，最早的日志在前。</li><li>DESC：按时间降序排列，最新的日志在前。</li></ul>
 * @method void setOrder(string $Order) 设置<p>日志排序方式，默认值为 DESC。取值如下：</p><ul><li>ASC：按时间升序排列，最早的日志在前。</li><li>DESC：按时间降序排列，最新的日志在前。</li></ul>
 * @method string getOrderBy() 获取<p>排序字段，指定按哪个字段对日志进行排序。</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段，指定按哪个字段对日志进行排序。</p>
 */
class DescribeLogsRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志检索的起始时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 00:00:00。返回结果中仅包含该时间点及之后的日志。</p>
     */
    public $StartTime;

    /**
     * @var string <p>日志检索的结束时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 23:59:59。返回结果中仅包含该时间点及之前的日志。</p>
     */
    public $EndTime;

    /**
     * @var string <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     */
    public $LogType;

    /**
     * @var array <p>过滤条件</p>
     */
    public $LogFilter;

    /**
     * @var integer <p>每页返回的日志列表大小。</p><ul><li>默认值：20。</li><li>取值范围：[1,100]。</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>分页的起始偏移量。</p><ul><li>默认：0。</li><li>取值：Limit 整数倍。计算公式：offset=limit*(页码-1)。</li></ul>
     */
    public $Offset;

    /**
     * @var string <p>日志排序方式，默认值为 DESC。取值如下：</p><ul><li>ASC：按时间升序排列，最早的日志在前。</li><li>DESC：按时间降序排列，最新的日志在前。</li></ul>
     */
    public $Order;

    /**
     * @var string <p>排序字段，指定按哪个字段对日志进行排序。</p>
     */
    public $OrderBy;

    /**
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param string $StartTime <p>日志检索的起始时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 00:00:00。返回结果中仅包含该时间点及之后的日志。</p>
     * @param string $EndTime <p>日志检索的结束时间。</p><p>参数格式：YYYY-MM-DD HH:mm:ss，例如 2026-03-06 23:59:59。返回结果中仅包含该时间点及之前的日志。</p>
     * @param string $LogType <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     * @param array $LogFilter <p>过滤条件</p>
     * @param integer $Limit <p>每页返回的日志列表大小。</p><ul><li>默认值：20。</li><li>取值范围：[1,100]。</li></ul>
     * @param integer $Offset <p>分页的起始偏移量。</p><ul><li>默认：0。</li><li>取值：Limit 整数倍。计算公式：offset=limit*(页码-1)。</li></ul>
     * @param string $Order <p>日志排序方式，默认值为 DESC。取值如下：</p><ul><li>ASC：按时间升序排列，最早的日志在前。</li><li>DESC：按时间降序排列，最新的日志在前。</li></ul>
     * @param string $OrderBy <p>排序字段，指定按哪个字段对日志进行排序。</p>
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
    }
}
