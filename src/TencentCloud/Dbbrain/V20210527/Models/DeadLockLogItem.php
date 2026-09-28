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
 * 死锁事件列表。按事件时间倒序排列（最近的死锁在前）。
 *
 * @method string getInstanceId() 获取<p>实例 ID，例如 mssql-ks3s56dj。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，例如 mssql-ks3s56dj。</p>
 * @method string getTimestampSource() 获取<p>时间字段来源。XML_EVENT 表示时间来自 xml_deadlock_report 的引擎打点；OBSERVED_LOG 表示时间来自 chain/lock 观测记录（partial 事件）。</p>
 * @method void setTimestampSource(string $TimestampSource) 设置<p>时间字段来源。XML_EVENT 表示时间来自 xml_deadlock_report 的引擎打点；OBSERVED_LOG 表示时间来自 chain/lock 观测记录（partial 事件）。</p>
 * @method string getPartialReasonCode() 获取<p>降级原因码。IsPartial=true 时值为 XML_NOT_AVAILABLE；否则为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartialReasonCode(string $PartialReasonCode) 设置<p>降级原因码。IsPartial=true 时值为 XML_NOT_AVAILABLE；否则为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVictimProcessIds() 获取<p>被回滚的进程内部指针列表，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 对齐，可用于死锁环节点定位。</p>
 * @method void setVictimProcessIds(array $VictimProcessIds) 设置<p>被回滚的进程内部指针列表，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 对齐，可用于死锁环节点定位。</p>
 * @method boolean getPayloadTruncated() 获取<p>原始负载是否被上游截断。true 表示 XmlReport 或 chain/lock payload 有过截断，会影响诊断可信度。</p>
 * @method void setPayloadTruncated(boolean $PayloadTruncated) 设置<p>原始负载是否被上游截断。true 表示 XmlReport 或 chain/lock payload 有过截断，会影响诊断可信度。</p>
 * @method array getSourceUuids() 获取<p>组成本事件的所有 XEvent 原始消息 UUID 列表（去重后按字典序排序），用于多源溯源、审计、补数。</p>
 * @method void setSourceUuids(array $SourceUuids) 设置<p>组成本事件的所有 XEvent 原始消息 UUID 列表（去重后按字典序排序），用于多源溯源、审计、补数。</p>
 * @method integer getObservedTransactionCount() 获取<p>实际可归因（有 TransactionId）的事务数量。</p>
 * @method void setObservedTransactionCount(integer $ObservedTransactionCount) 设置<p>实际可归因（有 TransactionId）的事务数量。</p>
 * @method string getEventTimestamp() 获取<p>死锁发生时间。ISO-8601 带偏移格式，例如 2026-09-16T06:58:52.611+00:00。来源于 XEvent 原始 timestamp。</p>
 * @method void setEventTimestamp(string $EventTimestamp) 设置<p>死锁发生时间。ISO-8601 带偏移格式，例如 2026-09-16T06:58:52.611+00:00。来源于 XEvent 原始 timestamp。</p>
 * @method string getGraphStatus() 获取<p>死锁图完整性。COMPLETE 表示成功装配 xml_deadlock_report；MISSING 表示无 xml 只有 chain/lock 消息（对应 IsPartial=true）。</p>
 * @method void setGraphStatus(string $GraphStatus) 设置<p>死锁图完整性。COMPLETE 表示成功装配 xml_deadlock_report；MISSING 表示无 xml 只有 chain/lock 消息（对应 IsPartial=true）。</p>
 * @method boolean getXmlIncluded() 获取<p>本次响应中是否内联了原始死锁 XML。仅当请求参数 IncludeXml=true 且事件为 COMPLETE 时为 true。</p>
 * @method void setXmlIncluded(boolean $XmlIncluded) 设置<p>本次响应中是否内联了原始死锁 XML。仅当请求参数 IncludeXml=true 且事件为 COMPLETE 时为 true。</p>
 * @method integer getProcessCount() 获取<p>参与死锁的进程总数。2 方死锁最常见，N 方死锁更严重。</p>
 * @method void setProcessCount(integer $ProcessCount) 设置<p>参与死锁的进程总数。2 方死锁最常见，N 方死锁更严重。</p>
 * @method array getTransactions() 获取<p>参与死锁的事务列表（按 IsVictim=true 排前、TransactionId 升序）。每个事务下可能有多个 Session（例如并行执行 worker）。</p>
 * @method void setTransactions(array $Transactions) 设置<p>参与死锁的事务列表（按 IsVictim=true 排前、TransactionId 升序）。每个事务下可能有多个 Session（例如并行执行 worker）。</p>
 * @method string getDeadlockId() 获取<p>引擎内的死锁编号，例如 84。与 SQL Server 端 xml_deadlock_report 对齐。同实例短期内可辨识，重启后会复用。若上游数据缺失则为 null。</p>
 * @method void setDeadlockId(string $DeadlockId) 设置<p>引擎内的死锁编号，例如 84。与 SQL Server 端 xml_deadlock_report 对齐。同实例短期内可辨识，重启后会复用。若上游数据缺失则为 null。</p>
 * @method string getXmlReport() 获取<p>原始 SQL Server 死锁图 XML 字符串（xml_deadlock_report 输出）。IncludeXml=false 或事件为 partial 时为 null。可用于前端直接绘制死锁环、AI 深度诊断，或落到对象存储做冷归档。</p>
 * @method void setXmlReport(string $XmlReport) 设置<p>原始 SQL Server 死锁图 XML 字符串（xml_deadlock_report 输出）。IncludeXml=false 或事件为 partial 时为 null。可用于前端直接绘制死锁环、AI 深度诊断，或落到对象存储做冷归档。</p>
 * @method integer getOriginalXmlBytes() 获取<p>原始 XML 字节数，用于采集侧健康度评估。partial 事件为 null。</p>
 * @method void setOriginalXmlBytes(integer $OriginalXmlBytes) 设置<p>原始 XML 字节数，用于采集侧健康度评估。partial 事件为 null。</p>
 * @method array getVictimSessionIds() 获取<p>被 SQL Server 选中回滚的会话 SPID 列表（去重）。DBA 复盘定位牺牲者的核心字段。</p>
 * @method void setVictimSessionIds(array $VictimSessionIds) 设置<p>被 SQL Server 选中回滚的会话 SPID 列表（去重）。DBA 复盘定位牺牲者的核心字段。</p>
 * @method boolean getIsPartial() 获取<p>是否为降级 partial 事件。true 表示无 xml_deadlock_report，Transactions/Resources 只能从 chain/lock 消息尽力还原。AI 诊断前建议过滤 IsPartial=true 的记录。</p>
 * @method void setIsPartial(boolean $IsPartial) 设置<p>是否为降级 partial 事件。true 表示无 xml_deadlock_report，Transactions/Resources 只能从 chain/lock 消息尽力还原。AI 诊断前建议过滤 IsPartial=true 的记录。</p>
 * @method array getDatabaseNames() 获取<p>涉及的数据库名去重列表，用于分库聚合与影响范围判断。</p>
 * @method void setDatabaseNames(array $DatabaseNames) 设置<p>涉及的数据库名去重列表，用于分库聚合与影响范围判断。</p>
 * @method string getEventId() 获取<p>事件唯一 ID，格式为 xml:&lt;uuid&gt; 或 partial:&lt;uuid&gt;。前缀 xml 表示由 xml_deadlock_report 装配的完整事件；partial 表示只有 chain/lock 消息的降级事件。可作为幂等主键。</p>
 * @method void setEventId(string $EventId) 设置<p>事件唯一 ID，格式为 xml:&lt;uuid&gt; 或 partial:&lt;uuid&gt;。前缀 xml 表示由 xml_deadlock_report 装配的完整事件；partial 表示只有 chain/lock 消息的降级事件。可作为幂等主键。</p>
 * @method string getDeadlockSignature() 获取<p>死锁事件级签名（SHA-1 前 16 位）。基于参与死锁的所有锁资源三元组 (Kind, ObjectName, IndexName, Mode) 排序后计算，用于聚合相同锁冲突模式的死锁模板。partial 事件无 Resources 时为 null。</p>
 * @method void setDeadlockSignature(string $DeadlockSignature) 设置<p>死锁事件级签名（SHA-1 前 16 位）。基于参与死锁的所有锁资源三元组 (Kind, ObjectName, IndexName, Mode) 排序后计算，用于聚合相同锁冲突模式的死锁模板。partial 事件无 Resources 时为 null。</p>
 * @method array getResources() 获取<p>死锁涉及的锁资源节点列表。每个资源节点有若干 Owners（持有边）与 Waiters（等待边），二者组合构成死锁环。partial 事件为空数组。</p>
 * @method void setResources(array $Resources) 设置<p>死锁涉及的锁资源节点列表。每个资源节点有若干 Owners（持有边）与 Waiters（等待边），二者组合构成死锁环。partial 事件为空数组。</p>
 * @method string getAssociationStatus() 获取<p>XE 辅助事件（chain/lock）与 XML 图的关联状态。MATCHED 表示至少一个 chain/lock 消息已关联到该 xml；UNMATCHED 表示只有孤立 xml 或降级 partial 事件。</p>
 * @method void setAssociationStatus(string $AssociationStatus) 设置<p>XE 辅助事件（chain/lock）与 XML 图的关联状态。MATCHED 表示至少一个 chain/lock 消息已关联到该 xml；UNMATCHED 表示只有孤立 xml 或降级 partial 事件。</p>
 * @method integer getTransactionCount() 获取<p>参与死锁的事务总数（有 TransactionId 的会话按事务分组后的数量）。当存在无 TransactionId 的会话时为 null，通过 ObservedTransactionCount 与该字段的差值可以判断归因缺失情况。</p>
 * @method void setTransactionCount(integer $TransactionCount) 设置<p>参与死锁的事务总数（有 TransactionId 的会话按事务分组后的数量）。当存在无 TransactionId 的会话时为 null，通过 ObservedTransactionCount 与该字段的差值可以判断归因缺失情况。</p>
 */
class DeadLockLogItem extends AbstractModel
{
    /**
     * @var string <p>实例 ID，例如 mssql-ks3s56dj。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>时间字段来源。XML_EVENT 表示时间来自 xml_deadlock_report 的引擎打点；OBSERVED_LOG 表示时间来自 chain/lock 观测记录（partial 事件）。</p>
     */
    public $TimestampSource;

    /**
     * @var string <p>降级原因码。IsPartial=true 时值为 XML_NOT_AVAILABLE；否则为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartialReasonCode;

    /**
     * @var array <p>被回滚的进程内部指针列表，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 对齐，可用于死锁环节点定位。</p>
     */
    public $VictimProcessIds;

    /**
     * @var boolean <p>原始负载是否被上游截断。true 表示 XmlReport 或 chain/lock payload 有过截断，会影响诊断可信度。</p>
     */
    public $PayloadTruncated;

    /**
     * @var array <p>组成本事件的所有 XEvent 原始消息 UUID 列表（去重后按字典序排序），用于多源溯源、审计、补数。</p>
     */
    public $SourceUuids;

    /**
     * @var integer <p>实际可归因（有 TransactionId）的事务数量。</p>
     */
    public $ObservedTransactionCount;

    /**
     * @var string <p>死锁发生时间。ISO-8601 带偏移格式，例如 2026-09-16T06:58:52.611+00:00。来源于 XEvent 原始 timestamp。</p>
     */
    public $EventTimestamp;

    /**
     * @var string <p>死锁图完整性。COMPLETE 表示成功装配 xml_deadlock_report；MISSING 表示无 xml 只有 chain/lock 消息（对应 IsPartial=true）。</p>
     */
    public $GraphStatus;

    /**
     * @var boolean <p>本次响应中是否内联了原始死锁 XML。仅当请求参数 IncludeXml=true 且事件为 COMPLETE 时为 true。</p>
     */
    public $XmlIncluded;

    /**
     * @var integer <p>参与死锁的进程总数。2 方死锁最常见，N 方死锁更严重。</p>
     */
    public $ProcessCount;

    /**
     * @var array <p>参与死锁的事务列表（按 IsVictim=true 排前、TransactionId 升序）。每个事务下可能有多个 Session（例如并行执行 worker）。</p>
     */
    public $Transactions;

    /**
     * @var string <p>引擎内的死锁编号，例如 84。与 SQL Server 端 xml_deadlock_report 对齐。同实例短期内可辨识，重启后会复用。若上游数据缺失则为 null。</p>
     */
    public $DeadlockId;

    /**
     * @var string <p>原始 SQL Server 死锁图 XML 字符串（xml_deadlock_report 输出）。IncludeXml=false 或事件为 partial 时为 null。可用于前端直接绘制死锁环、AI 深度诊断，或落到对象存储做冷归档。</p>
     */
    public $XmlReport;

    /**
     * @var integer <p>原始 XML 字节数，用于采集侧健康度评估。partial 事件为 null。</p>
     */
    public $OriginalXmlBytes;

    /**
     * @var array <p>被 SQL Server 选中回滚的会话 SPID 列表（去重）。DBA 复盘定位牺牲者的核心字段。</p>
     */
    public $VictimSessionIds;

    /**
     * @var boolean <p>是否为降级 partial 事件。true 表示无 xml_deadlock_report，Transactions/Resources 只能从 chain/lock 消息尽力还原。AI 诊断前建议过滤 IsPartial=true 的记录。</p>
     */
    public $IsPartial;

    /**
     * @var array <p>涉及的数据库名去重列表，用于分库聚合与影响范围判断。</p>
     */
    public $DatabaseNames;

    /**
     * @var string <p>事件唯一 ID，格式为 xml:&lt;uuid&gt; 或 partial:&lt;uuid&gt;。前缀 xml 表示由 xml_deadlock_report 装配的完整事件；partial 表示只有 chain/lock 消息的降级事件。可作为幂等主键。</p>
     */
    public $EventId;

    /**
     * @var string <p>死锁事件级签名（SHA-1 前 16 位）。基于参与死锁的所有锁资源三元组 (Kind, ObjectName, IndexName, Mode) 排序后计算，用于聚合相同锁冲突模式的死锁模板。partial 事件无 Resources 时为 null。</p>
     */
    public $DeadlockSignature;

    /**
     * @var array <p>死锁涉及的锁资源节点列表。每个资源节点有若干 Owners（持有边）与 Waiters（等待边），二者组合构成死锁环。partial 事件为空数组。</p>
     */
    public $Resources;

    /**
     * @var string <p>XE 辅助事件（chain/lock）与 XML 图的关联状态。MATCHED 表示至少一个 chain/lock 消息已关联到该 xml；UNMATCHED 表示只有孤立 xml 或降级 partial 事件。</p>
     */
    public $AssociationStatus;

    /**
     * @var integer <p>参与死锁的事务总数（有 TransactionId 的会话按事务分组后的数量）。当存在无 TransactionId 的会话时为 null，通过 ObservedTransactionCount 与该字段的差值可以判断归因缺失情况。</p>
     */
    public $TransactionCount;

    /**
     * @param string $InstanceId <p>实例 ID，例如 mssql-ks3s56dj。</p>
     * @param string $TimestampSource <p>时间字段来源。XML_EVENT 表示时间来自 xml_deadlock_report 的引擎打点；OBSERVED_LOG 表示时间来自 chain/lock 观测记录（partial 事件）。</p>
     * @param string $PartialReasonCode <p>降级原因码。IsPartial=true 时值为 XML_NOT_AVAILABLE；否则为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VictimProcessIds <p>被回滚的进程内部指针列表，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 对齐，可用于死锁环节点定位。</p>
     * @param boolean $PayloadTruncated <p>原始负载是否被上游截断。true 表示 XmlReport 或 chain/lock payload 有过截断，会影响诊断可信度。</p>
     * @param array $SourceUuids <p>组成本事件的所有 XEvent 原始消息 UUID 列表（去重后按字典序排序），用于多源溯源、审计、补数。</p>
     * @param integer $ObservedTransactionCount <p>实际可归因（有 TransactionId）的事务数量。</p>
     * @param string $EventTimestamp <p>死锁发生时间。ISO-8601 带偏移格式，例如 2026-09-16T06:58:52.611+00:00。来源于 XEvent 原始 timestamp。</p>
     * @param string $GraphStatus <p>死锁图完整性。COMPLETE 表示成功装配 xml_deadlock_report；MISSING 表示无 xml 只有 chain/lock 消息（对应 IsPartial=true）。</p>
     * @param boolean $XmlIncluded <p>本次响应中是否内联了原始死锁 XML。仅当请求参数 IncludeXml=true 且事件为 COMPLETE 时为 true。</p>
     * @param integer $ProcessCount <p>参与死锁的进程总数。2 方死锁最常见，N 方死锁更严重。</p>
     * @param array $Transactions <p>参与死锁的事务列表（按 IsVictim=true 排前、TransactionId 升序）。每个事务下可能有多个 Session（例如并行执行 worker）。</p>
     * @param string $DeadlockId <p>引擎内的死锁编号，例如 84。与 SQL Server 端 xml_deadlock_report 对齐。同实例短期内可辨识，重启后会复用。若上游数据缺失则为 null。</p>
     * @param string $XmlReport <p>原始 SQL Server 死锁图 XML 字符串（xml_deadlock_report 输出）。IncludeXml=false 或事件为 partial 时为 null。可用于前端直接绘制死锁环、AI 深度诊断，或落到对象存储做冷归档。</p>
     * @param integer $OriginalXmlBytes <p>原始 XML 字节数，用于采集侧健康度评估。partial 事件为 null。</p>
     * @param array $VictimSessionIds <p>被 SQL Server 选中回滚的会话 SPID 列表（去重）。DBA 复盘定位牺牲者的核心字段。</p>
     * @param boolean $IsPartial <p>是否为降级 partial 事件。true 表示无 xml_deadlock_report，Transactions/Resources 只能从 chain/lock 消息尽力还原。AI 诊断前建议过滤 IsPartial=true 的记录。</p>
     * @param array $DatabaseNames <p>涉及的数据库名去重列表，用于分库聚合与影响范围判断。</p>
     * @param string $EventId <p>事件唯一 ID，格式为 xml:&lt;uuid&gt; 或 partial:&lt;uuid&gt;。前缀 xml 表示由 xml_deadlock_report 装配的完整事件；partial 表示只有 chain/lock 消息的降级事件。可作为幂等主键。</p>
     * @param string $DeadlockSignature <p>死锁事件级签名（SHA-1 前 16 位）。基于参与死锁的所有锁资源三元组 (Kind, ObjectName, IndexName, Mode) 排序后计算，用于聚合相同锁冲突模式的死锁模板。partial 事件无 Resources 时为 null。</p>
     * @param array $Resources <p>死锁涉及的锁资源节点列表。每个资源节点有若干 Owners（持有边）与 Waiters（等待边），二者组合构成死锁环。partial 事件为空数组。</p>
     * @param string $AssociationStatus <p>XE 辅助事件（chain/lock）与 XML 图的关联状态。MATCHED 表示至少一个 chain/lock 消息已关联到该 xml；UNMATCHED 表示只有孤立 xml 或降级 partial 事件。</p>
     * @param integer $TransactionCount <p>参与死锁的事务总数（有 TransactionId 的会话按事务分组后的数量）。当存在无 TransactionId 的会话时为 null，通过 ObservedTransactionCount 与该字段的差值可以判断归因缺失情况。</p>
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

        if (array_key_exists("TimestampSource",$param) and $param["TimestampSource"] !== null) {
            $this->TimestampSource = $param["TimestampSource"];
        }

        if (array_key_exists("PartialReasonCode",$param) and $param["PartialReasonCode"] !== null) {
            $this->PartialReasonCode = $param["PartialReasonCode"];
        }

        if (array_key_exists("VictimProcessIds",$param) and $param["VictimProcessIds"] !== null) {
            $this->VictimProcessIds = $param["VictimProcessIds"];
        }

        if (array_key_exists("PayloadTruncated",$param) and $param["PayloadTruncated"] !== null) {
            $this->PayloadTruncated = $param["PayloadTruncated"];
        }

        if (array_key_exists("SourceUuids",$param) and $param["SourceUuids"] !== null) {
            $this->SourceUuids = $param["SourceUuids"];
        }

        if (array_key_exists("ObservedTransactionCount",$param) and $param["ObservedTransactionCount"] !== null) {
            $this->ObservedTransactionCount = $param["ObservedTransactionCount"];
        }

        if (array_key_exists("EventTimestamp",$param) and $param["EventTimestamp"] !== null) {
            $this->EventTimestamp = $param["EventTimestamp"];
        }

        if (array_key_exists("GraphStatus",$param) and $param["GraphStatus"] !== null) {
            $this->GraphStatus = $param["GraphStatus"];
        }

        if (array_key_exists("XmlIncluded",$param) and $param["XmlIncluded"] !== null) {
            $this->XmlIncluded = $param["XmlIncluded"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("Transactions",$param) and $param["Transactions"] !== null) {
            $this->Transactions = [];
            foreach ($param["Transactions"] as $key => $value){
                $obj = new DeadlockTransaction();
                $obj->deserialize($value);
                array_push($this->Transactions, $obj);
            }
        }

        if (array_key_exists("DeadlockId",$param) and $param["DeadlockId"] !== null) {
            $this->DeadlockId = $param["DeadlockId"];
        }

        if (array_key_exists("XmlReport",$param) and $param["XmlReport"] !== null) {
            $this->XmlReport = $param["XmlReport"];
        }

        if (array_key_exists("OriginalXmlBytes",$param) and $param["OriginalXmlBytes"] !== null) {
            $this->OriginalXmlBytes = $param["OriginalXmlBytes"];
        }

        if (array_key_exists("VictimSessionIds",$param) and $param["VictimSessionIds"] !== null) {
            $this->VictimSessionIds = $param["VictimSessionIds"];
        }

        if (array_key_exists("IsPartial",$param) and $param["IsPartial"] !== null) {
            $this->IsPartial = $param["IsPartial"];
        }

        if (array_key_exists("DatabaseNames",$param) and $param["DatabaseNames"] !== null) {
            $this->DatabaseNames = $param["DatabaseNames"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DeadlockSignature",$param) and $param["DeadlockSignature"] !== null) {
            $this->DeadlockSignature = $param["DeadlockSignature"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new DeadlockResource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("AssociationStatus",$param) and $param["AssociationStatus"] !== null) {
            $this->AssociationStatus = $param["AssociationStatus"];
        }

        if (array_key_exists("TransactionCount",$param) and $param["TransactionCount"] !== null) {
            $this->TransactionCount = $param["TransactionCount"];
        }
    }
}
