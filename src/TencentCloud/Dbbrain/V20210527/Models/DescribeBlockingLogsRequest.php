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
 * DescribeBlockingLogs请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getProduct() 获取<p>服务产品类型，固定为sqlserver。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，固定为sqlserver。</p>
 * @method string getStartTime() 获取<p>查询起始时间（服务端时区 UTC+8），格式：yyyy-MM-dd HH:mm:ss。必须在最近 30 天内，否则返回 InvalidParameterValue。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询起始时间（服务端时区 UTC+8），格式：yyyy-MM-dd HH:mm:ss。必须在最近 30 天内，否则返回 InvalidParameterValue。</p>
 * @method string getEndTime() 获取<p>查询结束时间（服务端时区 UTC+8），格式：yyyy-MM-dd HH:mm:ss，需大于 StartTime。单次查询跨度必须 ≤ 1 天（24 小时），否则返回 InvalidParameterValue。大跨度趋势场景请改用 DescribeBlockingTrend。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间（服务端时区 UTC+8），格式：yyyy-MM-dd HH:mm:ss，需大于 StartTime。单次查询跨度必须 ≤ 1 天（24 小时），否则返回 InvalidParameterValue。大跨度趋势场景请改用 DescribeBlockingTrend。</p>
 * @method string getRootCause() 获取<p>根因过滤（可选），支持：C1_LONG_QUERY=长事务查询持锁；C2_SLEEP_UNCOMMITTED=sleeping会话持未提交事务；C3_LOCK_ESCALATION=锁升级；C4_HIGH_CONCURRENCY=高并发争用；C5_INDEX_MISS=索引缺失导致大范围锁；C6_ORPHAN_TRAN=孤儿事务。</p>
 * @method void setRootCause(string $RootCause) 设置<p>根因过滤（可选），支持：C1_LONG_QUERY=长事务查询持锁；C2_SLEEP_UNCOMMITTED=sleeping会话持未提交事务；C3_LOCK_ESCALATION=锁升级；C4_HIGH_CONCURRENCY=高并发争用；C5_INDEX_MISS=索引缺失导致大范围锁；C6_ORPHAN_TRAN=孤儿事务。</p>
 * @method string getBlockingSqlMd5() 获取<p>头SQL（blocker）MD5过滤（可选）。</p>
 * @method void setBlockingSqlMd5(string $BlockingSqlMd5) 设置<p>头SQL（blocker）MD5过滤（可选）。</p>
 * @method string getBlockedSqlMd5() 获取<p>被阻塞SQL（blocked）MD5过滤（可选）。</p>
 * @method void setBlockedSqlMd5(string $BlockedSqlMd5) 设置<p>被阻塞SQL（blocked）MD5过滤（可选）。</p>
 * @method array getDatabaseNames() 获取<p>数据库名列表过滤（可选），按阻塞事件所在数据库名过滤；列表内任意匹配即命中，最多50项。多库实例场景下推荐用本字段定位阻塞所在库。</p>
 * @method void setDatabaseNames(array $DatabaseNames) 设置<p>数据库名列表过滤（可选），按阻塞事件所在数据库名过滤；列表内任意匹配即命中，最多50项。多库实例场景下推荐用本字段定位阻塞所在库。</p>
 * @method array getBlockingSessionIds() 获取<p>头阻塞会话 ID（SPID）列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method void setBlockingSessionIds(array $BlockingSessionIds) 设置<p>头阻塞会话 ID（SPID）列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method array getBlockedSessionIds() 获取<p>被阻塞会话 ID（SPID）列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method void setBlockedSessionIds(array $BlockedSessionIds) 设置<p>被阻塞会话 ID（SPID）列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method array getBlockingLoginNames() 获取<p>头阻塞登录名列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method void setBlockingLoginNames(array $BlockingLoginNames) 设置<p>头阻塞登录名列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method array getBlockedLoginNames() 获取<p>被阻塞登录名列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method void setBlockedLoginNames(array $BlockedLoginNames) 设置<p>被阻塞登录名列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method array getBlockingHostNames() 获取<p>头阻塞客户端主机列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method void setBlockingHostNames(array $BlockingHostNames) 设置<p>头阻塞客户端主机列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method array getBlockedHostNames() 获取<p>被阻塞客户端主机列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method void setBlockedHostNames(array $BlockedHostNames) 设置<p>被阻塞客户端主机列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method array getBlockingClientApps() 获取<p>头阻塞客户端应用列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method void setBlockingClientApps(array $BlockingClientApps) 设置<p>头阻塞客户端应用列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method array getBlockedClientApps() 获取<p>被阻塞客户端应用列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method void setBlockedClientApps(array $BlockedClientApps) 设置<p>被阻塞客户端应用列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
 * @method array getBlockedLockModes() 获取<p>被阻塞方等待锁模式列表过滤（可选），SQL Server原生lock_mode枚举，常见取值（非穷尽）：S、U、X、IS、IU、IX、SIU、SIX、UIX、Sch-S、Sch-M；serializable隔离级别下还可能出现RangeS-S / RangeS-U / RangeX-X / RangeI-N系列。列表内任意匹配即命中，最多50项。</p>
 * @method void setBlockedLockModes(array $BlockedLockModes) 设置<p>被阻塞方等待锁模式列表过滤（可选），SQL Server原生lock_mode枚举，常见取值（非穷尽）：S、U、X、IS、IU、IX、SIU、SIX、UIX、Sch-S、Sch-M；serializable隔离级别下还可能出现RangeS-S / RangeS-U / RangeX-X / RangeI-N系列。列表内任意匹配即命中，最多50项。</p>
 * @method integer getDurationMsMin() 获取<p>被阻塞方等待时长下限（毫秒，含），用于筛选慢阻塞（可选）。</p>
 * @method void setDurationMsMin(integer $DurationMsMin) 设置<p>被阻塞方等待时长下限（毫秒，含），用于筛选慢阻塞（可选）。</p>
 * @method integer getDurationMsMax() 获取<p>被阻塞方等待时长上限（毫秒，含），用于筛选阻塞时长不超过某值的记录（可选）。</p>
 * @method void setDurationMsMax(integer $DurationMsMax) 设置<p>被阻塞方等待时长上限（毫秒，含），用于筛选阻塞时长不超过某值的记录（可选）。</p>
 * @method string getOrderBy() 获取<p>排序字段（可选），支持reportTime（按明细行上报时间，默认）/ durationMs（按链路阻塞时长）/ blockedWaitTimeMs（按被阻塞方等待时长）/ blockingWaitTimeMs（按头阻塞自身等待时长）。</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段（可选），支持reportTime（按明细行上报时间，默认）/ durationMs（按链路阻塞时长）/ blockedWaitTimeMs（按被阻塞方等待时长）/ blockingWaitTimeMs（按头阻塞自身等待时长）。</p>
 * @method string getOrderDirection() 获取<p>排序方向（可选），支持desc（默认，倒序）/ asc（正序）。</p>
 * @method void setOrderDirection(string $OrderDirection) 设置<p>排序方向（可选），支持desc（默认，倒序）/ asc（正序）。</p>
 * @method integer getLimit() 获取<p>返回条数上限，默认20，最大100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回条数上限，默认20，最大100。</p>
 * @method integer getOffset() 获取<p>偏移量，默认 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认 0。</p>
 * @method boolean getWithXml() 获取<p>是否返回原始 blocked_process_report XML（可选，默认 false 不返回）。该字段体积较大（KB 级起步，含完整执行计划/等待链/死锁明细等原始上下文），常规列表展示不需要，仅在需要查看完整 XML 现场（如线下诊断、离线分析）时将本参数置为 true 按需拉取。</p>
 * @method void setWithXml(boolean $WithXml) 设置<p>是否返回原始 blocked_process_report XML（可选，默认 false 不返回）。该字段体积较大（KB 级起步，含完整执行计划/等待链/死锁明细等原始上下文），常规列表展示不需要，仅在需要查看完整 XML 现场（如线下诊断、离线分析）时将本参数置为 true 按需拉取。</p>
 */
class DescribeBlockingLogsRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>服务产品类型，固定为sqlserver。</p>
     */
    public $Product;

    /**
     * @var string <p>查询起始时间（服务端时区 UTC+8），格式：yyyy-MM-dd HH:mm:ss。必须在最近 30 天内，否则返回 InvalidParameterValue。</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间（服务端时区 UTC+8），格式：yyyy-MM-dd HH:mm:ss，需大于 StartTime。单次查询跨度必须 ≤ 1 天（24 小时），否则返回 InvalidParameterValue。大跨度趋势场景请改用 DescribeBlockingTrend。</p>
     */
    public $EndTime;

    /**
     * @var string <p>根因过滤（可选），支持：C1_LONG_QUERY=长事务查询持锁；C2_SLEEP_UNCOMMITTED=sleeping会话持未提交事务；C3_LOCK_ESCALATION=锁升级；C4_HIGH_CONCURRENCY=高并发争用；C5_INDEX_MISS=索引缺失导致大范围锁；C6_ORPHAN_TRAN=孤儿事务。</p>
     */
    public $RootCause;

    /**
     * @var string <p>头SQL（blocker）MD5过滤（可选）。</p>
     */
    public $BlockingSqlMd5;

    /**
     * @var string <p>被阻塞SQL（blocked）MD5过滤（可选）。</p>
     */
    public $BlockedSqlMd5;

    /**
     * @var array <p>数据库名列表过滤（可选），按阻塞事件所在数据库名过滤；列表内任意匹配即命中，最多50项。多库实例场景下推荐用本字段定位阻塞所在库。</p>
     */
    public $DatabaseNames;

    /**
     * @var array <p>头阻塞会话 ID（SPID）列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     */
    public $BlockingSessionIds;

    /**
     * @var array <p>被阻塞会话 ID（SPID）列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     */
    public $BlockedSessionIds;

    /**
     * @var array <p>头阻塞登录名列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     */
    public $BlockingLoginNames;

    /**
     * @var array <p>被阻塞登录名列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     */
    public $BlockedLoginNames;

    /**
     * @var array <p>头阻塞客户端主机列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     */
    public $BlockingHostNames;

    /**
     * @var array <p>被阻塞客户端主机列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     */
    public $BlockedHostNames;

    /**
     * @var array <p>头阻塞客户端应用列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     */
    public $BlockingClientApps;

    /**
     * @var array <p>被阻塞客户端应用列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     */
    public $BlockedClientApps;

    /**
     * @var array <p>被阻塞方等待锁模式列表过滤（可选），SQL Server原生lock_mode枚举，常见取值（非穷尽）：S、U、X、IS、IU、IX、SIU、SIX、UIX、Sch-S、Sch-M；serializable隔离级别下还可能出现RangeS-S / RangeS-U / RangeX-X / RangeI-N系列。列表内任意匹配即命中，最多50项。</p>
     */
    public $BlockedLockModes;

    /**
     * @var integer <p>被阻塞方等待时长下限（毫秒，含），用于筛选慢阻塞（可选）。</p>
     */
    public $DurationMsMin;

    /**
     * @var integer <p>被阻塞方等待时长上限（毫秒，含），用于筛选阻塞时长不超过某值的记录（可选）。</p>
     */
    public $DurationMsMax;

    /**
     * @var string <p>排序字段（可选），支持reportTime（按明细行上报时间，默认）/ durationMs（按链路阻塞时长）/ blockedWaitTimeMs（按被阻塞方等待时长）/ blockingWaitTimeMs（按头阻塞自身等待时长）。</p>
     */
    public $OrderBy;

    /**
     * @var string <p>排序方向（可选），支持desc（默认，倒序）/ asc（正序）。</p>
     */
    public $OrderDirection;

    /**
     * @var integer <p>返回条数上限，默认20，最大100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认 0。</p>
     */
    public $Offset;

    /**
     * @var boolean <p>是否返回原始 blocked_process_report XML（可选，默认 false 不返回）。该字段体积较大（KB 级起步，含完整执行计划/等待链/死锁明细等原始上下文），常规列表展示不需要，仅在需要查看完整 XML 现场（如线下诊断、离线分析）时将本参数置为 true 按需拉取。</p>
     */
    public $WithXml;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $Product <p>服务产品类型，固定为sqlserver。</p>
     * @param string $StartTime <p>查询起始时间（服务端时区 UTC+8），格式：yyyy-MM-dd HH:mm:ss。必须在最近 30 天内，否则返回 InvalidParameterValue。</p>
     * @param string $EndTime <p>查询结束时间（服务端时区 UTC+8），格式：yyyy-MM-dd HH:mm:ss，需大于 StartTime。单次查询跨度必须 ≤ 1 天（24 小时），否则返回 InvalidParameterValue。大跨度趋势场景请改用 DescribeBlockingTrend。</p>
     * @param string $RootCause <p>根因过滤（可选），支持：C1_LONG_QUERY=长事务查询持锁；C2_SLEEP_UNCOMMITTED=sleeping会话持未提交事务；C3_LOCK_ESCALATION=锁升级；C4_HIGH_CONCURRENCY=高并发争用；C5_INDEX_MISS=索引缺失导致大范围锁；C6_ORPHAN_TRAN=孤儿事务。</p>
     * @param string $BlockingSqlMd5 <p>头SQL（blocker）MD5过滤（可选）。</p>
     * @param string $BlockedSqlMd5 <p>被阻塞SQL（blocked）MD5过滤（可选）。</p>
     * @param array $DatabaseNames <p>数据库名列表过滤（可选），按阻塞事件所在数据库名过滤；列表内任意匹配即命中，最多50项。多库实例场景下推荐用本字段定位阻塞所在库。</p>
     * @param array $BlockingSessionIds <p>头阻塞会话 ID（SPID）列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     * @param array $BlockedSessionIds <p>被阻塞会话 ID（SPID）列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     * @param array $BlockingLoginNames <p>头阻塞登录名列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     * @param array $BlockedLoginNames <p>被阻塞登录名列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     * @param array $BlockingHostNames <p>头阻塞客户端主机列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     * @param array $BlockedHostNames <p>被阻塞客户端主机列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     * @param array $BlockingClientApps <p>头阻塞客户端应用列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     * @param array $BlockedClientApps <p>被阻塞客户端应用列表过滤（可选），列表内任意匹配即命中，最多50项。</p>
     * @param array $BlockedLockModes <p>被阻塞方等待锁模式列表过滤（可选），SQL Server原生lock_mode枚举，常见取值（非穷尽）：S、U、X、IS、IU、IX、SIU、SIX、UIX、Sch-S、Sch-M；serializable隔离级别下还可能出现RangeS-S / RangeS-U / RangeX-X / RangeI-N系列。列表内任意匹配即命中，最多50项。</p>
     * @param integer $DurationMsMin <p>被阻塞方等待时长下限（毫秒，含），用于筛选慢阻塞（可选）。</p>
     * @param integer $DurationMsMax <p>被阻塞方等待时长上限（毫秒，含），用于筛选阻塞时长不超过某值的记录（可选）。</p>
     * @param string $OrderBy <p>排序字段（可选），支持reportTime（按明细行上报时间，默认）/ durationMs（按链路阻塞时长）/ blockedWaitTimeMs（按被阻塞方等待时长）/ blockingWaitTimeMs（按头阻塞自身等待时长）。</p>
     * @param string $OrderDirection <p>排序方向（可选），支持desc（默认，倒序）/ asc（正序）。</p>
     * @param integer $Limit <p>返回条数上限，默认20，最大100。</p>
     * @param integer $Offset <p>偏移量，默认 0。</p>
     * @param boolean $WithXml <p>是否返回原始 blocked_process_report XML（可选，默认 false 不返回）。该字段体积较大（KB 级起步，含完整执行计划/等待链/死锁明细等原始上下文），常规列表展示不需要，仅在需要查看完整 XML 现场（如线下诊断、离线分析）时将本参数置为 true 按需拉取。</p>
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

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RootCause",$param) and $param["RootCause"] !== null) {
            $this->RootCause = $param["RootCause"];
        }

        if (array_key_exists("BlockingSqlMd5",$param) and $param["BlockingSqlMd5"] !== null) {
            $this->BlockingSqlMd5 = $param["BlockingSqlMd5"];
        }

        if (array_key_exists("BlockedSqlMd5",$param) and $param["BlockedSqlMd5"] !== null) {
            $this->BlockedSqlMd5 = $param["BlockedSqlMd5"];
        }

        if (array_key_exists("DatabaseNames",$param) and $param["DatabaseNames"] !== null) {
            $this->DatabaseNames = $param["DatabaseNames"];
        }

        if (array_key_exists("BlockingSessionIds",$param) and $param["BlockingSessionIds"] !== null) {
            $this->BlockingSessionIds = $param["BlockingSessionIds"];
        }

        if (array_key_exists("BlockedSessionIds",$param) and $param["BlockedSessionIds"] !== null) {
            $this->BlockedSessionIds = $param["BlockedSessionIds"];
        }

        if (array_key_exists("BlockingLoginNames",$param) and $param["BlockingLoginNames"] !== null) {
            $this->BlockingLoginNames = $param["BlockingLoginNames"];
        }

        if (array_key_exists("BlockedLoginNames",$param) and $param["BlockedLoginNames"] !== null) {
            $this->BlockedLoginNames = $param["BlockedLoginNames"];
        }

        if (array_key_exists("BlockingHostNames",$param) and $param["BlockingHostNames"] !== null) {
            $this->BlockingHostNames = $param["BlockingHostNames"];
        }

        if (array_key_exists("BlockedHostNames",$param) and $param["BlockedHostNames"] !== null) {
            $this->BlockedHostNames = $param["BlockedHostNames"];
        }

        if (array_key_exists("BlockingClientApps",$param) and $param["BlockingClientApps"] !== null) {
            $this->BlockingClientApps = $param["BlockingClientApps"];
        }

        if (array_key_exists("BlockedClientApps",$param) and $param["BlockedClientApps"] !== null) {
            $this->BlockedClientApps = $param["BlockedClientApps"];
        }

        if (array_key_exists("BlockedLockModes",$param) and $param["BlockedLockModes"] !== null) {
            $this->BlockedLockModes = $param["BlockedLockModes"];
        }

        if (array_key_exists("DurationMsMin",$param) and $param["DurationMsMin"] !== null) {
            $this->DurationMsMin = $param["DurationMsMin"];
        }

        if (array_key_exists("DurationMsMax",$param) and $param["DurationMsMax"] !== null) {
            $this->DurationMsMax = $param["DurationMsMax"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("WithXml",$param) and $param["WithXml"] !== null) {
            $this->WithXml = $param["WithXml"];
        }
    }
}
