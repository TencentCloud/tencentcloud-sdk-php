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
 * DB 层审计日志单条明细。字段由 DruidCommonUtil#changeLogsTdsqlDB 和 BusinessCodeUtils 固定输出。LogType=All 时额外追加 FlowTime。
 *
 * @method string getTimestamp() 获取<p>SQL 执行时间点（格式化字符串，yyyy-MM-dd HH:mm:ss）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置<p>SQL 执行时间点（格式化字符串，yyyy-MM-dd HH:mm:ss）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>集群 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAffectRows() 获取<p>影响行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectRows(integer $AffectRows) 设置<p>影响行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckRows() 获取<p>扫描行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckRows(integer $CheckRows) 设置<p>扫描行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuTime() 获取<p>CPU 耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTime(integer $CpuTime) 设置<p>CPU 耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSetHost() 获取<p>后端 Set Host（源字段 dbHost）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetHost(string $SetHost) 设置<p>后端 Set Host（源字段 dbHost）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDBName() 获取<p>SQL 执行所在的数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBName(string $DBName) 设置<p>SQL 执行所在的数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrCode() 获取<p>SQL 执行返回的错误码，0 表示成功。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(string $ErrCode) 设置<p>SQL 执行返回的错误码，0 表示成功。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecTime() 获取<p>SQL 执行耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecTime(integer $ExecTime) 设置<p>SQL 执行耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取<p>客户端来源 IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置<p>客户端来源 IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSetName() 获取<p>Set 名称（源字段 instanceId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetName(string $SetName) 设置<p>Set 名称（源字段 instanceId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIoWaitTime() 获取<p>IO 等待时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIoWaitTime(integer $IoWaitTime) 设置<p>IO 等待时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLockWaitTime() 获取<p>锁等待时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockWaitTime(integer $LockWaitTime) 设置<p>锁等待时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSqlStartTimeNs() 获取<p>SQL 开始时间（纳秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlStartTimeNs(integer $SqlStartTimeNs) 设置<p>SQL 开始时间（纳秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueryId() 获取<p>查询 ID（用于关联查询）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryId(string $QueryId) 设置<p>查询 ID（用于关联查询）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueryNo() 获取<p>查询序号（同一事务内 SQL 的序列号）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryNo(integer $QueryNo) 设置<p>查询序号（同一事务内 SQL 的序列号）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSentRows() 获取<p>返回行数（扫描结果集行数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSentRows(integer $SentRows) 设置<p>返回行数（扫描结果集行数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSql() 获取<p>执行的 SQL 语句原文。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSql(string $Sql) 设置<p>执行的 SQL 语句原文。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlTemplateId() 获取<p>SQL 模板 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlTemplateId(string $SqlTemplateId) 设置<p>SQL 模板 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlType() 获取<p>SQL 类型（如 Select、Insert、Update、Delete 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlType(string $SqlType) 设置<p>SQL 类型（如 Select、Insert、Update、Delete 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTables() 获取<p>涉及的表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTables(string $Tables) 设置<p>涉及的表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThreadId() 获取<p>线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreadId(string $ThreadId) 设置<p>线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSqlStartTime() 获取<p>SQL 开始时间（毫秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlStartTime(integer $SqlStartTime) 设置<p>SQL 开始时间（毫秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTrxLivingTime() 获取<p>事务存活时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrxLivingTime(integer $TrxLivingTime) 设置<p>事务存活时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取<p>执行 SQL 的数据库用户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置<p>执行 SQL 的数据库用户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrxId() 获取<p>事务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrxId(string $TrxId) 设置<p>事务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternalXId() 获取<p>内部 XID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalXId(string $InternalXId) 设置<p>内部 XID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessCode() 获取<p>业务码（由业务侧 SQL 注释中 i/o/p 等 KV 提取）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessCode(string $BusinessCode) 设置<p>业务码（由业务侧 SQL 注释中 i/o/p 等 KV 提取）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlowTime() 获取<p>网关流转耗时（毫秒），仅 LogType=All 时由 Gateway 日志关联后返回；LogType=DB 时该字段不下发。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowTime(integer $FlowTime) 设置<p>网关流转耗时（毫秒），仅 LogType=All 时由 Gateway 日志关联后返回；LogType=DB 时该字段不下发。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuditDBLogItem extends AbstractModel
{
    /**
     * @var string <p>SQL 执行时间点（格式化字符串，yyyy-MM-dd HH:mm:ss）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string <p>集群 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var integer <p>影响行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectRows;

    /**
     * @var integer <p>扫描行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckRows;

    /**
     * @var integer <p>CPU 耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTime;

    /**
     * @var string <p>后端 Set Host（源字段 dbHost）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetHost;

    /**
     * @var string <p>SQL 执行所在的数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBName;

    /**
     * @var string <p>SQL 执行返回的错误码，0 表示成功。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var integer <p>SQL 执行耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecTime;

    /**
     * @var string <p>客户端来源 IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string <p>Set 名称（源字段 instanceId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetName;

    /**
     * @var integer <p>IO 等待时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IoWaitTime;

    /**
     * @var integer <p>锁等待时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockWaitTime;

    /**
     * @var integer <p>SQL 开始时间（纳秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlStartTimeNs;

    /**
     * @var string <p>查询 ID（用于关联查询）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryId;

    /**
     * @var integer <p>查询序号（同一事务内 SQL 的序列号）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryNo;

    /**
     * @var integer <p>返回行数（扫描结果集行数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SentRows;

    /**
     * @var string <p>执行的 SQL 语句原文。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sql;

    /**
     * @var string <p>SQL 模板 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlTemplateId;

    /**
     * @var string <p>SQL 类型（如 Select、Insert、Update、Delete 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlType;

    /**
     * @var string <p>涉及的表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tables;

    /**
     * @var string <p>线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThreadId;

    /**
     * @var integer <p>SQL 开始时间（毫秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlStartTime;

    /**
     * @var integer <p>事务存活时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrxLivingTime;

    /**
     * @var string <p>执行 SQL 的数据库用户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string <p>事务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrxId;

    /**
     * @var string <p>内部 XID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalXId;

    /**
     * @var string <p>业务码（由业务侧 SQL 注释中 i/o/p 等 KV 提取）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessCode;

    /**
     * @var integer <p>网关流转耗时（毫秒），仅 LogType=All 时由 Gateway 日志关联后返回；LogType=DB 时该字段不下发。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowTime;

    /**
     * @param string $Timestamp <p>SQL 执行时间点（格式化字符串，yyyy-MM-dd HH:mm:ss）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>集群 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AffectRows <p>影响行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckRows <p>扫描行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuTime <p>CPU 耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SetHost <p>后端 Set Host（源字段 dbHost）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DBName <p>SQL 执行所在的数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrCode <p>SQL 执行返回的错误码，0 表示成功。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecTime <p>SQL 执行耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host <p>客户端来源 IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SetName <p>Set 名称（源字段 instanceId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IoWaitTime <p>IO 等待时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LockWaitTime <p>锁等待时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SqlStartTimeNs <p>SQL 开始时间（纳秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueryId <p>查询 ID（用于关联查询）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueryNo <p>查询序号（同一事务内 SQL 的序列号）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SentRows <p>返回行数（扫描结果集行数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sql <p>执行的 SQL 语句原文。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlTemplateId <p>SQL 模板 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlType <p>SQL 类型（如 Select、Insert、Update、Delete 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tables <p>涉及的表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThreadId <p>线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SqlStartTime <p>SQL 开始时间（毫秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TrxLivingTime <p>事务存活时间（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User <p>执行 SQL 的数据库用户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrxId <p>事务 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternalXId <p>内部 XID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessCode <p>业务码（由业务侧 SQL 注释中 i/o/p 等 KV 提取）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlowTime <p>网关流转耗时（毫秒），仅 LogType=All 时由 Gateway 日志关联后返回；LogType=DB 时该字段不下发。</p>
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("CheckRows",$param) and $param["CheckRows"] !== null) {
            $this->CheckRows = $param["CheckRows"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("SetHost",$param) and $param["SetHost"] !== null) {
            $this->SetHost = $param["SetHost"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("SetName",$param) and $param["SetName"] !== null) {
            $this->SetName = $param["SetName"];
        }

        if (array_key_exists("IoWaitTime",$param) and $param["IoWaitTime"] !== null) {
            $this->IoWaitTime = $param["IoWaitTime"];
        }

        if (array_key_exists("LockWaitTime",$param) and $param["LockWaitTime"] !== null) {
            $this->LockWaitTime = $param["LockWaitTime"];
        }

        if (array_key_exists("SqlStartTimeNs",$param) and $param["SqlStartTimeNs"] !== null) {
            $this->SqlStartTimeNs = $param["SqlStartTimeNs"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }

        if (array_key_exists("QueryNo",$param) and $param["QueryNo"] !== null) {
            $this->QueryNo = $param["QueryNo"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SqlTemplateId",$param) and $param["SqlTemplateId"] !== null) {
            $this->SqlTemplateId = $param["SqlTemplateId"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = $param["Tables"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("SqlStartTime",$param) and $param["SqlStartTime"] !== null) {
            $this->SqlStartTime = $param["SqlStartTime"];
        }

        if (array_key_exists("TrxLivingTime",$param) and $param["TrxLivingTime"] !== null) {
            $this->TrxLivingTime = $param["TrxLivingTime"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("TrxId",$param) and $param["TrxId"] !== null) {
            $this->TrxId = $param["TrxId"];
        }

        if (array_key_exists("InternalXId",$param) and $param["InternalXId"] !== null) {
            $this->InternalXId = $param["InternalXId"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("FlowTime",$param) and $param["FlowTime"] !== null) {
            $this->FlowTime = $param["FlowTime"];
        }
    }
}
