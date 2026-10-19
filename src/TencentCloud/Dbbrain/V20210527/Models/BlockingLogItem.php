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
 * 阻塞日志扁平明细行：一次blocked_process_report（blocker→blocked边）在某一次monitorLoop内被lock monitor捕获的瞬时数据。
 *
 * @method string getReportTime() 获取<p>本条明细行上报时间（事件时间，__time；时区UTC+8），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportTime(string $ReportTime) 设置<p>本条明细行上报时间（事件时间，__time；时区UTC+8），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonitorLoop() 获取<p>监控轮次ID（同一实例内唯一标识一次采集快照，可透传至DescribeBlockingLockTree下钻查看完整阻塞树）。文本承载数值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorLoop(string $MonitorLoop) 设置<p>监控轮次ID（同一实例内唯一标识一次采集快照，可透传至DescribeBlockingLockTree下钻查看完整阻塞树）。文本承载数值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationMs() 获取<p>被阻塞方的等待时长（毫秒）。来源：Kafka顶层Fields.duration÷1000（微秒→毫秒），来自SQL Server内核XEvent事件的duration字段。与BlockedWaitTimeMs来源不同但通常非常接近（非严格相等，两者为同一事件的两个独立快照）；仅为OrderBy=durationMs排序别名保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationMs(integer $DurationMs) 设置<p>被阻塞方的等待时长（毫秒）。来源：Kafka顶层Fields.duration÷1000（微秒→毫秒），来自SQL Server内核XEvent事件的duration字段。与BlockedWaitTimeMs来源不同但通常非常接近（非严格相等，两者为同一事件的两个独立快照）；仅为OrderBy=durationMs排序别名保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取<p>阻塞发生所在的数据库名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置<p>阻塞发生所在的数据库名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatabaseId() 获取<p>阻塞发生所在的数据库 ID（Fields.database_id，对应 SQL Server sys.databases.database_id）。可配合 DatabaseName 使用：ID 稳定、Name 易读；Name 在重命名场景下会变化，ID 则不会。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(integer $DatabaseId) 设置<p>阻塞发生所在的数据库 ID（Fields.database_id，对应 SQL Server sys.databases.database_id）。可配合 DatabaseName 使用：ID 稳定、Name 易读；Name 在重命名场景下会变化，ID 则不会。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getObjectId() 获取<p>阻塞锁资源归属的对象 ID（Fields.object_id，对应 SQL Server sys.objects.object_id）。标识具体的表/视图/存储过程等用户对象；可结合 sys.objects 元数据查询对象名。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectId(integer $ObjectId) 设置<p>阻塞锁资源归属的对象 ID（Fields.object_id，对应 SQL Server sys.objects.object_id）。标识具体的表/视图/存储过程等用户对象；可结合 sys.objects 元数据查询对象名。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexId() 获取<p>阻塞锁资源归属的索引 ID（Fields.index_id，对应 SQL Server sys.indexes.index_id）。常见取值：0=堆（无聚集索引）、1=聚集索引、&gt;1=非聚集索引；&gt;250 通常为系统内部索引（如全文/XML/空间索引），诊断时按&quot;是否为用户索引&quot;判断即可。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexId(integer $IndexId) 设置<p>阻塞锁资源归属的索引 ID（Fields.index_id，对应 SQL Server sys.indexes.index_id）。常见取值：0=堆（无聚集索引）、1=聚集索引、&gt;1=非聚集索引；&gt;250 通常为系统内部索引（如全文/XML/空间索引），诊断时按&quot;是否为用户索引&quot;判断即可。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRootCause() 获取<p>根因分类（与枚举BlockingRootCause一一对应）。取值：C1_LONG_QUERY=长查询正常运行阻塞；C2_SLEEPING_UNCOMMITTED=休眠会话且存在未提交事务；C3_CLIENT_NOT_FETCHING=客户端未取完结果行；C4_APP_DEADLOCK=应用层分布式死锁；C5_ROLLBACK=会话正在rollback；C6_ORPHAN_TRANSACTION=孤立事务；UNKNOWN=未识别。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootCause(string $RootCause) 设置<p>根因分类（与枚举BlockingRootCause一一对应）。取值：C1_LONG_QUERY=长查询正常运行阻塞；C2_SLEEPING_UNCOMMITTED=休眠会话且存在未提交事务；C3_CLIENT_NOT_FETCHING=客户端未取完结果行；C4_APP_DEADLOCK=应用层分布式死锁；C5_ROLLBACK=会话正在rollback；C6_ORPHAN_TRANSACTION=孤立事务；UNKNOWN=未识别。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRootCauseDesc() 获取<p>根因分类的可读中文描述（服务端已完成中文化，前端可直接展示；与RootCause代号一一对应，例如C1_LONG_QUERY→&quot;长查询正常运行阻塞，考虑优化SQL/索引&quot;，未识别或空值统一返回&quot;未识别&quot;）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootCauseDesc(string $RootCauseDesc) 设置<p>根因分类的可读中文描述（服务端已完成中文化，前端可直接展示；与RootCause代号一一对应，例如C1_LONG_QUERY→&quot;长查询正常运行阻塞，考虑优化SQL/索引&quot;，未识别或空值统一返回&quot;未识别&quot;）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockingSessionId() 获取<p>头阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingSessionId(integer $BlockingSessionId) 设置<p>头阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingLoginName() 获取<p>头阻塞会话数据库用户。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingLoginName(string $BlockingLoginName) 设置<p>头阻塞会话数据库用户。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingHostName() 获取<p>头阻塞会话客户端主机。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingHostName(string $BlockingHostName) 设置<p>头阻塞会话客户端主机。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingClientApp() 获取<p>头阻塞会话客户端应用名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingClientApp(string $BlockingClientApp) 设置<p>头阻塞会话客户端应用名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingStatus() 获取<p>头阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status文本），常见取值：running / sleeping / suspended / background。sleeping+trancount&gt;0是C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingStatus(string $BlockingStatus) 设置<p>头阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status文本），常见取值：running / sleeping / suspended / background。sleeping+trancount&gt;0是C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingIsolationLevel() 获取<p>头阻塞会话事务隔离级别（SQL Server原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingIsolationLevel(string $BlockingIsolationLevel) 设置<p>头阻塞会话事务隔离级别（SQL Server原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingTransactionName() 获取<p>头阻塞会话当前显式事务名（XEvent transactionname，如user_transaction / implicit_transaction）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingTransactionName(string $BlockingTransactionName) 设置<p>头阻塞会话当前显式事务名（XEvent transactionname，如user_transaction / implicit_transaction）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockingTranCount() 获取<p>头阻塞会话当前显式事务嵌套层数（XEvent trancount）。&gt;0表示持有显式事务；与BlockingStatus=sleeping组合是C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingTranCount(integer $BlockingTranCount) 设置<p>头阻塞会话当前显式事务嵌套层数（XEvent trancount）。&gt;0表示持有显式事务；与BlockingStatus=sleeping组合是C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingLastTranStarted() 获取<p>头阻塞会话显式事务BEGIN TRAN时刻（XEvent lasttranstarted，SQL Server服务端本地时区的ISO 8601字符串，无时区后缀）。该字段代表事务持锁开始时刻：ReportTime-BlockingLastTranStarted≈事务持锁时长，用于C1_LONG_QUERY / C6_ORPHAN_TRANSACTION根因复核；在多语句事务场景下比lastbatchstarted更稳定（不会被每个新batch刷新）。值为空表示XML未提供该属性（blocking-process侧常见）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingLastTranStarted(string $BlockingLastTranStarted) 设置<p>头阻塞会话显式事务BEGIN TRAN时刻（XEvent lasttranstarted，SQL Server服务端本地时区的ISO 8601字符串，无时区后缀）。该字段代表事务持锁开始时刻：ReportTime-BlockingLastTranStarted≈事务持锁时长，用于C1_LONG_QUERY / C6_ORPHAN_TRANSACTION根因复核；在多语句事务场景下比lastbatchstarted更稳定（不会被每个新batch刷新）。值为空表示XML未提供该属性（blocking-process侧常见）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingInputBuffer() 获取<p>头阻塞会话正在执行的SQL原文（对应DBCC INPUTBUFFER返回内容，单条最长16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingInputBuffer(string $BlockingInputBuffer) 设置<p>头阻塞会话正在执行的SQL原文（对应DBCC INPUTBUFFER返回内容，单条最长16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingSqlTemplate() 获取<p>头阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingSqlTemplate(string $BlockingSqlTemplate) 设置<p>头阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingSqlMd5() 获取<p>头阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingSqlMd5(string $BlockingSqlMd5) 设置<p>头阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingLockMode() 获取<p>头阻塞会话持有或请求的锁模式（SQL Server原生lock_mode枚举；blocker通常不处于等锁状态，该字段多为空）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingLockMode(string $BlockingLockMode) 设置<p>头阻塞会话持有或请求的锁模式（SQL Server原生lock_mode枚举；blocker通常不处于等锁状态，该字段多为空）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockingWaitTimeMs() 获取<p>头阻塞会话自身的等待时长（毫秒）。多数场景为0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingWaitTimeMs(integer $BlockingWaitTimeMs) 设置<p>头阻塞会话自身的等待时长（毫秒）。多数场景为0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockedSessionId() 获取<p>被阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedSessionId(integer $BlockedSessionId) 设置<p>被阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockedTransactionId() 获取<p>被阻塞会话事务ID（SQL Server transaction_id，bigint）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedTransactionId(integer $BlockedTransactionId) 设置<p>被阻塞会话事务ID（SQL Server transaction_id，bigint）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockedWaitTimeMs() 获取<p>被阻塞会话等待时长（毫秒）。来源：XML &lt;blocked-process&gt;&lt;process waittime&gt;属性（来自ys.dm_os_waiting_tasks.wait_duration_ms在report生成瞬间的快照）。与DurationMs来源不同但通常非常接近；仅为OrderBy=blockedWaitTimeMs排序别名保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedWaitTimeMs(integer $BlockedWaitTimeMs) 设置<p>被阻塞会话等待时长（毫秒）。来源：XML &lt;blocked-process&gt;&lt;process waittime&gt;属性（来自ys.dm_os_waiting_tasks.wait_duration_ms在report生成瞬间的快照）。与DurationMs来源不同但通常非常接近；仅为OrderBy=blockedWaitTimeMs排序别名保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedLockMode() 获取<p>被阻塞会话正在等待的锁模式（SQL Server原生lock_mode枚举，常见取值：S、U、X、IS、IU、IX、SIU、SIX、UIX、Sch-S、Sch-M）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedLockMode(string $BlockedLockMode) 设置<p>被阻塞会话正在等待的锁模式（SQL Server原生lock_mode枚举，常见取值：S、U、X、IS、IU、IX、SIU、SIX、UIX、Sch-S、Sch-M）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedWaitResource() 获取<p>被阻塞会话等待资源。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedWaitResource(string $BlockedWaitResource) 设置<p>被阻塞会话等待资源。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedLoginName() 获取<p>被阻塞会话数据库用户。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedLoginName(string $BlockedLoginName) 设置<p>被阻塞会话数据库用户。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedHostName() 获取<p>被阻塞会话客户端主机。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedHostName(string $BlockedHostName) 设置<p>被阻塞会话客户端主机。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedClientApp() 获取<p>被阻塞会话客户端应用名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedClientApp(string $BlockedClientApp) 设置<p>被阻塞会话客户端应用名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedStatus() 获取<p>被阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status文本），常见取值：running / sleeping / suspended / background。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedStatus(string $BlockedStatus) 设置<p>被阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status文本），常见取值：running / sleeping / suspended / background。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedIsolationLevel() 获取<p>被阻塞会话事务隔离级别（SQL Server原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedIsolationLevel(string $BlockedIsolationLevel) 设置<p>被阻塞会话事务隔离级别（SQL Server原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedTransactionName() 获取<p>被阻塞会话当前显式事务名（XEvent transactionname）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedTransactionName(string $BlockedTransactionName) 设置<p>被阻塞会话当前显式事务名（XEvent transactionname）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockedTranCount() 获取<p>被阻塞会话当前显式事务嵌套层数（XEvent trancount）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedTranCount(integer $BlockedTranCount) 设置<p>被阻塞会话当前显式事务嵌套层数（XEvent trancount）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedLastTranStarted() 获取<p>被阻塞会话显式事务BEGIN TRAN时刻（XEvent lasttranstarted，SQL Server服务端本地时区的ISO 8601字符串，无时区后缀）。该字段代表事务开始时刻，在多语句事务场景下比lastbatchstarted更稳定。咨视值1900-01-01T00:00:00表示未知。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedLastTranStarted(string $BlockedLastTranStarted) 设置<p>被阻塞会话显式事务BEGIN TRAN时刻（XEvent lasttranstarted，SQL Server服务端本地时区的ISO 8601字符串，无时区后缀）。该字段代表事务开始时刻，在多语句事务场景下比lastbatchstarted更稳定。咨视值1900-01-01T00:00:00表示未知。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedInputBuffer() 获取<p>被阻塞会话正在执行的SQL原文（对应DBCC INPUTBUFFER返回内容，单条最长16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedInputBuffer(string $BlockedInputBuffer) 设置<p>被阻塞会话正在执行的SQL原文（对应DBCC INPUTBUFFER返回内容，单条最长16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedSqlTemplate() 获取<p>被阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedSqlTemplate(string $BlockedSqlTemplate) 设置<p>被阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedSqlMd5() 获取<p>被阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedSqlMd5(string $BlockedSqlMd5) 设置<p>被阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedProcessXml() 获取<p>被阻塞方 blocked_process_report 原始 XML 文本（含完整执行计划、等待链、死锁明细等原始现场；字段体积较大，KB 级起步）。仅当请求参数 WithXml=true 时才返回；默认 false 时该字段省略，不出现在响应体中。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedProcessXml(string $BlockedProcessXml) 设置<p>被阻塞方 blocked_process_report 原始 XML 文本（含完整执行计划、等待链、死锁明细等原始现场；字段体积较大，KB 级起步）。仅当请求参数 WithXml=true 时才返回；默认 false 时该字段省略，不出现在响应体中。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BlockingLogItem extends AbstractModel
{
    /**
     * @var string <p>本条明细行上报时间（事件时间，__time；时区UTC+8），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportTime;

    /**
     * @var string <p>监控轮次ID（同一实例内唯一标识一次采集快照，可透传至DescribeBlockingLockTree下钻查看完整阻塞树）。文本承载数值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorLoop;

    /**
     * @var integer <p>被阻塞方的等待时长（毫秒）。来源：Kafka顶层Fields.duration÷1000（微秒→毫秒），来自SQL Server内核XEvent事件的duration字段。与BlockedWaitTimeMs来源不同但通常非常接近（非严格相等，两者为同一事件的两个独立快照）；仅为OrderBy=durationMs排序别名保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationMs;

    /**
     * @var string <p>阻塞发生所在的数据库名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var integer <p>阻塞发生所在的数据库 ID（Fields.database_id，对应 SQL Server sys.databases.database_id）。可配合 DatabaseName 使用：ID 稳定、Name 易读；Name 在重命名场景下会变化，ID 则不会。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var integer <p>阻塞锁资源归属的对象 ID（Fields.object_id，对应 SQL Server sys.objects.object_id）。标识具体的表/视图/存储过程等用户对象；可结合 sys.objects 元数据查询对象名。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectId;

    /**
     * @var integer <p>阻塞锁资源归属的索引 ID（Fields.index_id，对应 SQL Server sys.indexes.index_id）。常见取值：0=堆（无聚集索引）、1=聚集索引、&gt;1=非聚集索引；&gt;250 通常为系统内部索引（如全文/XML/空间索引），诊断时按&quot;是否为用户索引&quot;判断即可。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexId;

    /**
     * @var string <p>根因分类（与枚举BlockingRootCause一一对应）。取值：C1_LONG_QUERY=长查询正常运行阻塞；C2_SLEEPING_UNCOMMITTED=休眠会话且存在未提交事务；C3_CLIENT_NOT_FETCHING=客户端未取完结果行；C4_APP_DEADLOCK=应用层分布式死锁；C5_ROLLBACK=会话正在rollback；C6_ORPHAN_TRANSACTION=孤立事务；UNKNOWN=未识别。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootCause;

    /**
     * @var string <p>根因分类的可读中文描述（服务端已完成中文化，前端可直接展示；与RootCause代号一一对应，例如C1_LONG_QUERY→&quot;长查询正常运行阻塞，考虑优化SQL/索引&quot;，未识别或空值统一返回&quot;未识别&quot;）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootCauseDesc;

    /**
     * @var integer <p>头阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingSessionId;

    /**
     * @var string <p>头阻塞会话数据库用户。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingLoginName;

    /**
     * @var string <p>头阻塞会话客户端主机。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingHostName;

    /**
     * @var string <p>头阻塞会话客户端应用名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingClientApp;

    /**
     * @var string <p>头阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status文本），常见取值：running / sleeping / suspended / background。sleeping+trancount&gt;0是C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingStatus;

    /**
     * @var string <p>头阻塞会话事务隔离级别（SQL Server原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingIsolationLevel;

    /**
     * @var string <p>头阻塞会话当前显式事务名（XEvent transactionname，如user_transaction / implicit_transaction）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingTransactionName;

    /**
     * @var integer <p>头阻塞会话当前显式事务嵌套层数（XEvent trancount）。&gt;0表示持有显式事务；与BlockingStatus=sleeping组合是C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingTranCount;

    /**
     * @var string <p>头阻塞会话显式事务BEGIN TRAN时刻（XEvent lasttranstarted，SQL Server服务端本地时区的ISO 8601字符串，无时区后缀）。该字段代表事务持锁开始时刻：ReportTime-BlockingLastTranStarted≈事务持锁时长，用于C1_LONG_QUERY / C6_ORPHAN_TRANSACTION根因复核；在多语句事务场景下比lastbatchstarted更稳定（不会被每个新batch刷新）。值为空表示XML未提供该属性（blocking-process侧常见）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingLastTranStarted;

    /**
     * @var string <p>头阻塞会话正在执行的SQL原文（对应DBCC INPUTBUFFER返回内容，单条最长16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingInputBuffer;

    /**
     * @var string <p>头阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingSqlTemplate;

    /**
     * @var string <p>头阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingSqlMd5;

    /**
     * @var string <p>头阻塞会话持有或请求的锁模式（SQL Server原生lock_mode枚举；blocker通常不处于等锁状态，该字段多为空）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingLockMode;

    /**
     * @var integer <p>头阻塞会话自身的等待时长（毫秒）。多数场景为0。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingWaitTimeMs;

    /**
     * @var integer <p>被阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedSessionId;

    /**
     * @var integer <p>被阻塞会话事务ID（SQL Server transaction_id，bigint）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedTransactionId;

    /**
     * @var integer <p>被阻塞会话等待时长（毫秒）。来源：XML &lt;blocked-process&gt;&lt;process waittime&gt;属性（来自ys.dm_os_waiting_tasks.wait_duration_ms在report生成瞬间的快照）。与DurationMs来源不同但通常非常接近；仅为OrderBy=blockedWaitTimeMs排序别名保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedWaitTimeMs;

    /**
     * @var string <p>被阻塞会话正在等待的锁模式（SQL Server原生lock_mode枚举，常见取值：S、U、X、IS、IU、IX、SIU、SIX、UIX、Sch-S、Sch-M）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedLockMode;

    /**
     * @var string <p>被阻塞会话等待资源。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedWaitResource;

    /**
     * @var string <p>被阻塞会话数据库用户。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedLoginName;

    /**
     * @var string <p>被阻塞会话客户端主机。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedHostName;

    /**
     * @var string <p>被阻塞会话客户端应用名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedClientApp;

    /**
     * @var string <p>被阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status文本），常见取值：running / sleeping / suspended / background。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedStatus;

    /**
     * @var string <p>被阻塞会话事务隔离级别（SQL Server原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedIsolationLevel;

    /**
     * @var string <p>被阻塞会话当前显式事务名（XEvent transactionname）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedTransactionName;

    /**
     * @var integer <p>被阻塞会话当前显式事务嵌套层数（XEvent trancount）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedTranCount;

    /**
     * @var string <p>被阻塞会话显式事务BEGIN TRAN时刻（XEvent lasttranstarted，SQL Server服务端本地时区的ISO 8601字符串，无时区后缀）。该字段代表事务开始时刻，在多语句事务场景下比lastbatchstarted更稳定。咨视值1900-01-01T00:00:00表示未知。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedLastTranStarted;

    /**
     * @var string <p>被阻塞会话正在执行的SQL原文（对应DBCC INPUTBUFFER返回内容，单条最长16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedInputBuffer;

    /**
     * @var string <p>被阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedSqlTemplate;

    /**
     * @var string <p>被阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedSqlMd5;

    /**
     * @var string <p>被阻塞方 blocked_process_report 原始 XML 文本（含完整执行计划、等待链、死锁明细等原始现场；字段体积较大，KB 级起步）。仅当请求参数 WithXml=true 时才返回；默认 false 时该字段省略，不出现在响应体中。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedProcessXml;

    /**
     * @param string $ReportTime <p>本条明细行上报时间（事件时间，__time；时区UTC+8），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MonitorLoop <p>监控轮次ID（同一实例内唯一标识一次采集快照，可透传至DescribeBlockingLockTree下钻查看完整阻塞树）。文本承载数值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationMs <p>被阻塞方的等待时长（毫秒）。来源：Kafka顶层Fields.duration÷1000（微秒→毫秒），来自SQL Server内核XEvent事件的duration字段。与BlockedWaitTimeMs来源不同但通常非常接近（非严格相等，两者为同一事件的两个独立快照）；仅为OrderBy=durationMs排序别名保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName <p>阻塞发生所在的数据库名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatabaseId <p>阻塞发生所在的数据库 ID（Fields.database_id，对应 SQL Server sys.databases.database_id）。可配合 DatabaseName 使用：ID 稳定、Name 易读；Name 在重命名场景下会变化，ID 则不会。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ObjectId <p>阻塞锁资源归属的对象 ID（Fields.object_id，对应 SQL Server sys.objects.object_id）。标识具体的表/视图/存储过程等用户对象；可结合 sys.objects 元数据查询对象名。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexId <p>阻塞锁资源归属的索引 ID（Fields.index_id，对应 SQL Server sys.indexes.index_id）。常见取值：0=堆（无聚集索引）、1=聚集索引、&gt;1=非聚集索引；&gt;250 通常为系统内部索引（如全文/XML/空间索引），诊断时按&quot;是否为用户索引&quot;判断即可。采样为空时该字段不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RootCause <p>根因分类（与枚举BlockingRootCause一一对应）。取值：C1_LONG_QUERY=长查询正常运行阻塞；C2_SLEEPING_UNCOMMITTED=休眠会话且存在未提交事务；C3_CLIENT_NOT_FETCHING=客户端未取完结果行；C4_APP_DEADLOCK=应用层分布式死锁；C5_ROLLBACK=会话正在rollback；C6_ORPHAN_TRANSACTION=孤立事务；UNKNOWN=未识别。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RootCauseDesc <p>根因分类的可读中文描述（服务端已完成中文化，前端可直接展示；与RootCause代号一一对应，例如C1_LONG_QUERY→&quot;长查询正常运行阻塞，考虑优化SQL/索引&quot;，未识别或空值统一返回&quot;未识别&quot;）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockingSessionId <p>头阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingLoginName <p>头阻塞会话数据库用户。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingHostName <p>头阻塞会话客户端主机。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingClientApp <p>头阻塞会话客户端应用名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingStatus <p>头阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status文本），常见取值：running / sleeping / suspended / background。sleeping+trancount&gt;0是C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingIsolationLevel <p>头阻塞会话事务隔离级别（SQL Server原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingTransactionName <p>头阻塞会话当前显式事务名（XEvent transactionname，如user_transaction / implicit_transaction）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockingTranCount <p>头阻塞会话当前显式事务嵌套层数（XEvent trancount）。&gt;0表示持有显式事务；与BlockingStatus=sleeping组合是C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingLastTranStarted <p>头阻塞会话显式事务BEGIN TRAN时刻（XEvent lasttranstarted，SQL Server服务端本地时区的ISO 8601字符串，无时区后缀）。该字段代表事务持锁开始时刻：ReportTime-BlockingLastTranStarted≈事务持锁时长，用于C1_LONG_QUERY / C6_ORPHAN_TRANSACTION根因复核；在多语句事务场景下比lastbatchstarted更稳定（不会被每个新batch刷新）。值为空表示XML未提供该属性（blocking-process侧常见）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingInputBuffer <p>头阻塞会话正在执行的SQL原文（对应DBCC INPUTBUFFER返回内容，单条最长16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingSqlTemplate <p>头阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingSqlMd5 <p>头阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingLockMode <p>头阻塞会话持有或请求的锁模式（SQL Server原生lock_mode枚举；blocker通常不处于等锁状态，该字段多为空）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockingWaitTimeMs <p>头阻塞会话自身的等待时长（毫秒）。多数场景为0。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockedSessionId <p>被阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockedTransactionId <p>被阻塞会话事务ID（SQL Server transaction_id，bigint）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockedWaitTimeMs <p>被阻塞会话等待时长（毫秒）。来源：XML &lt;blocked-process&gt;&lt;process waittime&gt;属性（来自ys.dm_os_waiting_tasks.wait_duration_ms在report生成瞬间的快照）。与DurationMs来源不同但通常非常接近；仅为OrderBy=blockedWaitTimeMs排序别名保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedLockMode <p>被阻塞会话正在等待的锁模式（SQL Server原生lock_mode枚举，常见取值：S、U、X、IS、IU、IX、SIU、SIX、UIX、Sch-S、Sch-M）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedWaitResource <p>被阻塞会话等待资源。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedLoginName <p>被阻塞会话数据库用户。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedHostName <p>被阻塞会话客户端主机。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedClientApp <p>被阻塞会话客户端应用名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedStatus <p>被阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status文本），常见取值：running / sleeping / suspended / background。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedIsolationLevel <p>被阻塞会话事务隔离级别（SQL Server原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedTransactionName <p>被阻塞会话当前显式事务名（XEvent transactionname）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockedTranCount <p>被阻塞会话当前显式事务嵌套层数（XEvent trancount）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedLastTranStarted <p>被阻塞会话显式事务BEGIN TRAN时刻（XEvent lasttranstarted，SQL Server服务端本地时区的ISO 8601字符串，无时区后缀）。该字段代表事务开始时刻，在多语句事务场景下比lastbatchstarted更稳定。咨视值1900-01-01T00:00:00表示未知。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedInputBuffer <p>被阻塞会话正在执行的SQL原文（对应DBCC INPUTBUFFER返回内容，单条最长16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedSqlTemplate <p>被阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedSqlMd5 <p>被阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedProcessXml <p>被阻塞方 blocked_process_report 原始 XML 文本（含完整执行计划、等待链、死锁明细等原始现场；字段体积较大，KB 级起步）。仅当请求参数 WithXml=true 时才返回；默认 false 时该字段省略，不出现在响应体中。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("MonitorLoop",$param) and $param["MonitorLoop"] !== null) {
            $this->MonitorLoop = $param["MonitorLoop"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("IndexId",$param) and $param["IndexId"] !== null) {
            $this->IndexId = $param["IndexId"];
        }

        if (array_key_exists("RootCause",$param) and $param["RootCause"] !== null) {
            $this->RootCause = $param["RootCause"];
        }

        if (array_key_exists("RootCauseDesc",$param) and $param["RootCauseDesc"] !== null) {
            $this->RootCauseDesc = $param["RootCauseDesc"];
        }

        if (array_key_exists("BlockingSessionId",$param) and $param["BlockingSessionId"] !== null) {
            $this->BlockingSessionId = $param["BlockingSessionId"];
        }

        if (array_key_exists("BlockingLoginName",$param) and $param["BlockingLoginName"] !== null) {
            $this->BlockingLoginName = $param["BlockingLoginName"];
        }

        if (array_key_exists("BlockingHostName",$param) and $param["BlockingHostName"] !== null) {
            $this->BlockingHostName = $param["BlockingHostName"];
        }

        if (array_key_exists("BlockingClientApp",$param) and $param["BlockingClientApp"] !== null) {
            $this->BlockingClientApp = $param["BlockingClientApp"];
        }

        if (array_key_exists("BlockingStatus",$param) and $param["BlockingStatus"] !== null) {
            $this->BlockingStatus = $param["BlockingStatus"];
        }

        if (array_key_exists("BlockingIsolationLevel",$param) and $param["BlockingIsolationLevel"] !== null) {
            $this->BlockingIsolationLevel = $param["BlockingIsolationLevel"];
        }

        if (array_key_exists("BlockingTransactionName",$param) and $param["BlockingTransactionName"] !== null) {
            $this->BlockingTransactionName = $param["BlockingTransactionName"];
        }

        if (array_key_exists("BlockingTranCount",$param) and $param["BlockingTranCount"] !== null) {
            $this->BlockingTranCount = $param["BlockingTranCount"];
        }

        if (array_key_exists("BlockingLastTranStarted",$param) and $param["BlockingLastTranStarted"] !== null) {
            $this->BlockingLastTranStarted = $param["BlockingLastTranStarted"];
        }

        if (array_key_exists("BlockingInputBuffer",$param) and $param["BlockingInputBuffer"] !== null) {
            $this->BlockingInputBuffer = $param["BlockingInputBuffer"];
        }

        if (array_key_exists("BlockingSqlTemplate",$param) and $param["BlockingSqlTemplate"] !== null) {
            $this->BlockingSqlTemplate = $param["BlockingSqlTemplate"];
        }

        if (array_key_exists("BlockingSqlMd5",$param) and $param["BlockingSqlMd5"] !== null) {
            $this->BlockingSqlMd5 = $param["BlockingSqlMd5"];
        }

        if (array_key_exists("BlockingLockMode",$param) and $param["BlockingLockMode"] !== null) {
            $this->BlockingLockMode = $param["BlockingLockMode"];
        }

        if (array_key_exists("BlockingWaitTimeMs",$param) and $param["BlockingWaitTimeMs"] !== null) {
            $this->BlockingWaitTimeMs = $param["BlockingWaitTimeMs"];
        }

        if (array_key_exists("BlockedSessionId",$param) and $param["BlockedSessionId"] !== null) {
            $this->BlockedSessionId = $param["BlockedSessionId"];
        }

        if (array_key_exists("BlockedTransactionId",$param) and $param["BlockedTransactionId"] !== null) {
            $this->BlockedTransactionId = $param["BlockedTransactionId"];
        }

        if (array_key_exists("BlockedWaitTimeMs",$param) and $param["BlockedWaitTimeMs"] !== null) {
            $this->BlockedWaitTimeMs = $param["BlockedWaitTimeMs"];
        }

        if (array_key_exists("BlockedLockMode",$param) and $param["BlockedLockMode"] !== null) {
            $this->BlockedLockMode = $param["BlockedLockMode"];
        }

        if (array_key_exists("BlockedWaitResource",$param) and $param["BlockedWaitResource"] !== null) {
            $this->BlockedWaitResource = $param["BlockedWaitResource"];
        }

        if (array_key_exists("BlockedLoginName",$param) and $param["BlockedLoginName"] !== null) {
            $this->BlockedLoginName = $param["BlockedLoginName"];
        }

        if (array_key_exists("BlockedHostName",$param) and $param["BlockedHostName"] !== null) {
            $this->BlockedHostName = $param["BlockedHostName"];
        }

        if (array_key_exists("BlockedClientApp",$param) and $param["BlockedClientApp"] !== null) {
            $this->BlockedClientApp = $param["BlockedClientApp"];
        }

        if (array_key_exists("BlockedStatus",$param) and $param["BlockedStatus"] !== null) {
            $this->BlockedStatus = $param["BlockedStatus"];
        }

        if (array_key_exists("BlockedIsolationLevel",$param) and $param["BlockedIsolationLevel"] !== null) {
            $this->BlockedIsolationLevel = $param["BlockedIsolationLevel"];
        }

        if (array_key_exists("BlockedTransactionName",$param) and $param["BlockedTransactionName"] !== null) {
            $this->BlockedTransactionName = $param["BlockedTransactionName"];
        }

        if (array_key_exists("BlockedTranCount",$param) and $param["BlockedTranCount"] !== null) {
            $this->BlockedTranCount = $param["BlockedTranCount"];
        }

        if (array_key_exists("BlockedLastTranStarted",$param) and $param["BlockedLastTranStarted"] !== null) {
            $this->BlockedLastTranStarted = $param["BlockedLastTranStarted"];
        }

        if (array_key_exists("BlockedInputBuffer",$param) and $param["BlockedInputBuffer"] !== null) {
            $this->BlockedInputBuffer = $param["BlockedInputBuffer"];
        }

        if (array_key_exists("BlockedSqlTemplate",$param) and $param["BlockedSqlTemplate"] !== null) {
            $this->BlockedSqlTemplate = $param["BlockedSqlTemplate"];
        }

        if (array_key_exists("BlockedSqlMd5",$param) and $param["BlockedSqlMd5"] !== null) {
            $this->BlockedSqlMd5 = $param["BlockedSqlMd5"];
        }

        if (array_key_exists("BlockedProcessXml",$param) and $param["BlockedProcessXml"] !== null) {
            $this->BlockedProcessXml = $param["BlockedProcessXml"];
        }
    }
}
