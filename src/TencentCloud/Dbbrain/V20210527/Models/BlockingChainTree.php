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
 * 阻塞树，一棵阻塞链的完整视图。一棵树的定义：同一(instanceId, monitorLoop)下，通过blocker/blocked边可达构成的一个连通分量。根节点是入度为0的会话（即从未被任何会话阻塞的头blocker）。一个monitorLoop可能对应多棵独立阻塞树。
 *
 * @method string getMonitorLoop() 获取<p>监控轮次ID（同一实例内唯一标识一次采集快照，同一快照可包含多棵独立阻塞树）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorLoop(string $MonitorLoop) 设置<p>监控轮次ID（同一实例内唯一标识一次采集快照，同一快照可包含多棵独立阻塞树）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取<p>阻塞发生所在的数据库名称（整条链路隶属同一 database，放在树级返回一次即可）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置<p>阻塞发生所在的数据库名称（整条链路隶属同一 database，放在树级返回一次即可）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockingSessionId() 获取<p>头阻塞会话ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingSessionId(integer $BlockingSessionId) 设置<p>头阻塞会话ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockingTransactionId() 获取<p>头阻塞会话事务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingTransactionId(integer $BlockingTransactionId) 设置<p>头阻塞会话事务ID。</p>
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
 * @method string getBlockingStatus() 获取<p>头阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status 文本），常见取值：running / sleeping / suspended / background。sleeping + BlockingTranCount&gt;0 是 C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingStatus(string $BlockingStatus) 设置<p>头阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status 文本），常见取值：running / sleeping / suspended / background。sleeping + BlockingTranCount&gt;0 是 C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingIsolationLevel() 获取<p>头阻塞会话事务隔离级别（SQL Server 原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingIsolationLevel(string $BlockingIsolationLevel) 设置<p>头阻塞会话事务隔离级别（SQL Server 原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockingTranCount() 获取<p>头阻塞会话当前显式事务嵌套层数（XEvent trancount）。&gt;0 表示持有显式事务；与 BlockingStatus=sleeping 组合是 C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingTranCount(integer $BlockingTranCount) 设置<p>头阻塞会话当前显式事务嵌套层数（XEvent trancount）。&gt;0 表示持有显式事务；与 BlockingStatus=sleeping 组合是 C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingInputBuffer() 获取<p>头阻塞会话正在执行的 SQL 原文（对应 DBCC INPUTBUFFER 返回内容，单条最长 16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingInputBuffer(string $BlockingInputBuffer) 设置<p>头阻塞会话正在执行的 SQL 原文（对应 DBCC INPUTBUFFER 返回内容，单条最长 16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingSqlTemplate() 获取<p>头阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingSqlTemplate(string $BlockingSqlTemplate) 设置<p>头阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlockingSqlMd5() 获取<p>头阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingSqlMd5(string $BlockingSqlMd5) 设置<p>头阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockingWaitTimeMs() 获取<p>头阻塞会话自身的等待时长（毫秒，来自XML blocking-process/process的waittime属性）。多数场景为0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBlockingWaitTimeMs(integer $BlockingWaitTimeMs) 设置<p>头阻塞会话自身的等待时长（毫秒，来自XML blocking-process/process的waittime属性）。多数场景为0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRootCause() 获取<p>根因分类。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootCause(string $RootCause) 设置<p>根因分类。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRootCauseDesc() 获取<p>根因分类的可读中文描述（服务端已完成中文化，前端可直接展示；与 RootCause 代号一一对应；未识别或空值统一返回“未识别”）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootCauseDesc(string $RootCauseDesc) 设置<p>根因分类的可读中文描述（服务端已完成中文化，前端可直接展示；与 RootCause 代号一一对应；未识别或空值统一返回“未识别”）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>该链路阻塞事件的起始时间（该树内__time最小值），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>该链路阻塞事件的起始时间（该树内__time最小值），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>该链路阻塞事件的结束时间（该树内__time最大值），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>该链路阻塞事件的结束时间（该树内__time最大值），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationMs() 获取<p>该链路最长等待时长（毫秒），作为链路影响时长。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationMs(integer $DurationMs) 设置<p>该链路最长等待时长（毫秒），作为链路影响时长。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChainLength() 获取<p>该链路被阻塞会话数（等价于树节点数-1，即受影响会话数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChainLength(integer $ChainLength) 设置<p>该链路被阻塞会话数（等价于树节点数-1，即受影响会话数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChainDepth() 获取<p>树深度（根节点为0，最长路径的深度）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChainDepth(integer $ChainDepth) 设置<p>树深度（根节点为0，最长路径的深度）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetails() 获取<p>被阻塞节点子树（可能为空，也可能多叉或多层）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetails(array $Details) 设置<p>被阻塞节点子树（可能为空，也可能多叉或多层）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BlockingChainTree extends AbstractModel
{
    /**
     * @var string <p>监控轮次ID（同一实例内唯一标识一次采集快照，同一快照可包含多棵独立阻塞树）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorLoop;

    /**
     * @var string <p>阻塞发生所在的数据库名称（整条链路隶属同一 database，放在树级返回一次即可）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var integer <p>头阻塞会话ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingSessionId;

    /**
     * @var integer <p>头阻塞会话事务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingTransactionId;

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
     * @var string <p>头阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status 文本），常见取值：running / sleeping / suspended / background。sleeping + BlockingTranCount&gt;0 是 C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingStatus;

    /**
     * @var string <p>头阻塞会话事务隔离级别（SQL Server 原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingIsolationLevel;

    /**
     * @var integer <p>头阻塞会话当前显式事务嵌套层数（XEvent trancount）。&gt;0 表示持有显式事务；与 BlockingStatus=sleeping 组合是 C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingTranCount;

    /**
     * @var string <p>头阻塞会话正在执行的 SQL 原文（对应 DBCC INPUTBUFFER 返回内容，单条最长 16KB，超长截断）。</p>
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
     * @var integer <p>头阻塞会话自身的等待时长（毫秒，来自XML blocking-process/process的waittime属性）。多数场景为0。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BlockingWaitTimeMs;

    /**
     * @var string <p>根因分类。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootCause;

    /**
     * @var string <p>根因分类的可读中文描述（服务端已完成中文化，前端可直接展示；与 RootCause 代号一一对应；未识别或空值统一返回“未识别”）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootCauseDesc;

    /**
     * @var string <p>该链路阻塞事件的起始时间（该树内__time最小值），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>该链路阻塞事件的结束时间（该树内__time最大值），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer <p>该链路最长等待时长（毫秒），作为链路影响时长。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationMs;

    /**
     * @var integer <p>该链路被阻塞会话数（等价于树节点数-1，即受影响会话数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChainLength;

    /**
     * @var integer <p>树深度（根节点为0，最长路径的深度）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChainDepth;

    /**
     * @var array <p>被阻塞节点子树（可能为空，也可能多叉或多层）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Details;

    /**
     * @param string $MonitorLoop <p>监控轮次ID（同一实例内唯一标识一次采集快照，同一快照可包含多棵独立阻塞树）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName <p>阻塞发生所在的数据库名称（整条链路隶属同一 database，放在树级返回一次即可）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockingSessionId <p>头阻塞会话ID（对应 SQL Server sys.dm_exec_sessions.session_id，即 SPID）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockingTransactionId <p>头阻塞会话事务ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingLoginName <p>头阻塞会话数据库用户。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingHostName <p>头阻塞会话客户端主机。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingClientApp <p>头阻塞会话客户端应用名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingStatus <p>头阻塞会话运行时状态（SQL Server sys.dm_exec_sessions.status 文本），常见取值：running / sleeping / suspended / background。sleeping + BlockingTranCount&gt;0 是 C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingIsolationLevel <p>头阻塞会话事务隔离级别（SQL Server 原生取值：read uncommitted / read committed / repeatable read / serializable / snapshot）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockingTranCount <p>头阻塞会话当前显式事务嵌套层数（XEvent trancount）。&gt;0 表示持有显式事务；与 BlockingStatus=sleeping 组合是 C2_SLEEPING_UNCOMMITTED（休眠会话持未提交事务）的直接证据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingInputBuffer <p>头阻塞会话正在执行的 SQL 原文（对应 DBCC INPUTBUFFER 返回内容，单条最长 16KB，超长截断）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingSqlTemplate <p>头阻塞SQL归一化模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlockingSqlMd5 <p>头阻塞SQL模板MD5。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockingWaitTimeMs <p>头阻塞会话自身的等待时长（毫秒，来自XML blocking-process/process的waittime属性）。多数场景为0。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RootCause <p>根因分类。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RootCauseDesc <p>根因分类的可读中文描述（服务端已完成中文化，前端可直接展示；与 RootCause 代号一一对应；未识别或空值统一返回“未识别”）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>该链路阻塞事件的起始时间（该树内__time最小值），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>该链路阻塞事件的结束时间（该树内__time最大值），格式：yyyy-MM-dd HH:mm:ss。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationMs <p>该链路最长等待时长（毫秒），作为链路影响时长。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChainLength <p>该链路被阻塞会话数（等价于树节点数-1，即受影响会话数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChainDepth <p>树深度（根节点为0，最长路径的深度）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Details <p>被阻塞节点子树（可能为空，也可能多叉或多层）。</p>
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
        if (array_key_exists("MonitorLoop",$param) and $param["MonitorLoop"] !== null) {
            $this->MonitorLoop = $param["MonitorLoop"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("BlockingSessionId",$param) and $param["BlockingSessionId"] !== null) {
            $this->BlockingSessionId = $param["BlockingSessionId"];
        }

        if (array_key_exists("BlockingTransactionId",$param) and $param["BlockingTransactionId"] !== null) {
            $this->BlockingTransactionId = $param["BlockingTransactionId"];
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

        if (array_key_exists("BlockingTranCount",$param) and $param["BlockingTranCount"] !== null) {
            $this->BlockingTranCount = $param["BlockingTranCount"];
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

        if (array_key_exists("BlockingWaitTimeMs",$param) and $param["BlockingWaitTimeMs"] !== null) {
            $this->BlockingWaitTimeMs = $param["BlockingWaitTimeMs"];
        }

        if (array_key_exists("RootCause",$param) and $param["RootCause"] !== null) {
            $this->RootCause = $param["RootCause"];
        }

        if (array_key_exists("RootCauseDesc",$param) and $param["RootCauseDesc"] !== null) {
            $this->RootCauseDesc = $param["RootCauseDesc"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("ChainLength",$param) and $param["ChainLength"] !== null) {
            $this->ChainLength = $param["ChainLength"];
        }

        if (array_key_exists("ChainDepth",$param) and $param["ChainDepth"] !== null) {
            $this->ChainDepth = $param["ChainDepth"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new BlockingChainNode();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
