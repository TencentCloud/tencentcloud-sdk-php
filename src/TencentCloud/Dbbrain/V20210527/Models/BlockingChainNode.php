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
 * 阻塞树节点，表示一个被阻塞会话。若该会话又阻塞了其它会话，则通过children递归表达。
 *
 * @method integer getBlockedSessionId() 获取<p>被阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedSessionId(integer $BlockedSessionId) 设置<p>被阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockedTransactionId() 获取<p>被阻塞会话事务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedTransactionId(integer $BlockedTransactionId) 设置<p>被阻塞会话事务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockedWaitTimeMs() 获取<p>被阻塞会话等待时长（毫秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedWaitTimeMs(integer $BlockedWaitTimeMs) 设置<p>被阻塞会话等待时长（毫秒）。</p>
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
 * @method string getBlockedStatus() 获取<p>被阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status 文本），常见取值：running / sleeping / suspended / background。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedStatus(string $BlockedStatus) 设置<p>被阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status 文本），常见取值：running / sleeping / suspended / background。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedIsolationLevel() 获取<p>被阻塞会话事务隔离级别（SQL Server 原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedIsolationLevel(string $BlockedIsolationLevel) 设置<p>被阻塞会话事务隔离级别（SQL Server 原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedTransactionName() 获取<p>被阻塞会话当前显式事务名（XEvent transactionname）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedTransactionName(string $BlockedTransactionName) 设置<p>被阻塞会话当前显式事务名（XEvent transactionname）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockedTranCount() 获取<p>被阻塞会话当前显式事务嵌套层数（XEvent trancount）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedTranCount(integer $BlockedTranCount) 设置<p>被阻塞会话当前显式事务嵌套层数（XEvent trancount）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedLastTranStarted() 获取<p>被阻塞会话显式事务 BEGIN TRAN 时刻（XEvent lasttranstarted，SQL Server 服务端本地时区的 ISO 8601 字符串，无时区后缀）。多语句事务场景下比 lastbatchstarted 更稳定。咨视值 1900-01-01T00:00:00 表示未知。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedLastTranStarted(string $BlockedLastTranStarted) 设置<p>被阻塞会话显式事务 BEGIN TRAN 时刻（XEvent lasttranstarted，SQL Server 服务端本地时区的 ISO 8601 字符串，无时区后缀）。多语句事务场景下比 lastbatchstarted 更稳定。咨视值 1900-01-01T00:00:00 表示未知。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedInputBuffer() 获取<p>被阻塞会话正在执行的 SQL 原文（对应 DBCC INPUTBUFFER 返回内容，单条最长 16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedInputBuffer(string $BlockedInputBuffer) 设置<p>被阻塞会话正在执行的 SQL 原文（对应 DBCC INPUTBUFFER 返回内容，单条最长 16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedSqlTemplate() 获取<p>被阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedSqlTemplate(string $BlockedSqlTemplate) 设置<p>被阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockedSqlMd5() 获取<p>被阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockedSqlMd5(string $BlockedSqlMd5) 设置<p>被阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRootCause() 获取<p>根因分类（继承自所属报告的rootCause）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootCause(string $RootCause) 设置<p>根因分类（继承自所属报告的rootCause）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportTime() 获取<p>本节点上报事件时间（__time），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportTime(string $ReportTime) 设置<p>本节点上报事件时间（__time），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取<p>本节点又阻塞的下级会话（可能为空）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置<p>本节点又阻塞的下级会话（可能为空）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BlockingChainNode extends AbstractModel
{
    /**
     * @var integer <p>被阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedSessionId;

    /**
     * @var integer <p>被阻塞会话事务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedTransactionId;

    /**
     * @var integer <p>被阻塞会话等待时长（毫秒）。</p>
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
     * @var string <p>被阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status 文本），常见取值：running / sleeping / suspended / background。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedStatus;

    /**
     * @var string <p>被阻塞会话事务隔离级别（SQL Server 原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
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
     * @var string <p>被阻塞会话显式事务 BEGIN TRAN 时刻（XEvent lasttranstarted，SQL Server 服务端本地时区的 ISO 8601 字符串，无时区后缀）。多语句事务场景下比 lastbatchstarted 更稳定。咨视值 1900-01-01T00:00:00 表示未知。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockedLastTranStarted;

    /**
     * @var string <p>被阻塞会话正在执行的 SQL 原文（对应 DBCC INPUTBUFFER 返回内容，单条最长 16KB，超长截断）。</p>
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
     * @var string <p>根因分类（继承自所属报告的rootCause）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootCause;

    /**
     * @var string <p>本节点上报事件时间（__time），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportTime;

    /**
     * @var array <p>本节点又阻塞的下级会话（可能为空）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @param integer $BlockedSessionId <p>被阻塞会话 ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockedTransactionId <p>被阻塞会话事务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockedWaitTimeMs <p>被阻塞会话等待时长（毫秒）。</p>
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
     * @param string $BlockedStatus <p>被阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status 文本），常见取值：running / sleeping / suspended / background。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedIsolationLevel <p>被阻塞会话事务隔离级别（SQL Server 原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedTransactionName <p>被阻塞会话当前显式事务名（XEvent transactionname）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockedTranCount <p>被阻塞会话当前显式事务嵌套层数（XEvent trancount）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedLastTranStarted <p>被阻塞会话显式事务 BEGIN TRAN 时刻（XEvent lasttranstarted，SQL Server 服务端本地时区的 ISO 8601 字符串，无时区后缀）。多语句事务场景下比 lastbatchstarted 更稳定。咨视值 1900-01-01T00:00:00 表示未知。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedInputBuffer <p>被阻塞会话正在执行的 SQL 原文（对应 DBCC INPUTBUFFER 返回内容，单条最长 16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedSqlTemplate <p>被阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockedSqlMd5 <p>被阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RootCause <p>根因分类（继承自所属报告的rootCause）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportTime <p>本节点上报事件时间（__time），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children <p>本节点又阻塞的下级会话（可能为空）。</p>
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

        if (array_key_exists("RootCause",$param) and $param["RootCause"] !== null) {
            $this->RootCause = $param["RootCause"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new BlockingChainNode();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
