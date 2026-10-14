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
 * Proxy 层审计日志单条明细。字段由 DruidCommonUtil#changeLogsTdsqlProxy 和 BusinessCodeUtils 固定输出。
 *
 * @method string getTimestamp() 获取<p>SQL 执行时间点（格式化字符串，yyyy-MM-dd HH:mm:ss）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置<p>SQL 执行时间点（格式化字符串，yyyy-MM-dd HH:mm:ss）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>集群 ID（dcdb/mariadb 集群标识，与 InstanceId 相同）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID（dcdb/mariadb 集群标识，与 InstanceId 相同）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAffectRows() 获取<p>影响行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectRows(integer $AffectRows) 设置<p>影响行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutocommit() 获取<p>是否自动提交。1 表示开启，0 表示关闭。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutocommit(string $Autocommit) 设置<p>是否自动提交。1 表示开启，0 表示关闭。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComType() 获取<p>MySQL 网络协议命令类型（如 COM_QUERY、COM_CONNECT 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComType(string $ComType) 设置<p>MySQL 网络协议命令类型（如 COM_QUERY、COM_CONNECT 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConnTc() 获取<p>新建连接耗时。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnTc(integer $ConnTc) 设置<p>新建连接耗时。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDBHost() 获取<p>后端 DB 实例地址（多个用英文逗号分隔）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBHost(string $DBHost) 设置<p>后端 DB 实例地址（多个用英文逗号分隔）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDBName() 获取<p>SQL 执行所在的数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBName(string $DBName) 设置<p>SQL 执行所在的数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrCode() 获取<p>SQL 执行返回的错误码，0 表示成功。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(string $ErrCode) 设置<p>SQL 执行返回的错误码，0 表示成功。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrInfo() 获取<p>错误信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrInfo(string $ErrInfo) 设置<p>错误信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecTime() 获取<p>SQL 执行耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecTime(integer $ExecTime) 设置<p>SQL 执行耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHoldConns() 获取<p>请求结束后仍占用的连接数（非事务请求通常为 0）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHoldConns(string $HoldConns) 设置<p>请求结束后仍占用的连接数（非事务请求通常为 0）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取<p>客户端来源 IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置<p>客户端来源 IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMc() 获取<p>是否开启全局一致性读（0 否、1 是）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMc(string $Mc) 设置<p>是否开启全局一致性读（0 否、1 是）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSqlStartTimeUs() 获取<p>SQL 开始时间（微秒精度中的微秒部分）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlStartTimeUs(integer $SqlStartTimeUs) 设置<p>SQL 开始时间（微秒精度中的微秒部分）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNewConnNum() 获取<p>本次请求新建的连接数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewConnNum(integer $NewConnNum) 设置<p>本次请求新建的连接数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyHost() 获取<p>Proxy 代理节点地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyHost(string $ProxyHost) 设置<p>Proxy 代理节点地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyId() 获取<p>Proxy ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyId(string $ProxyId) 设置<p>Proxy ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueryId() 获取<p>查询 ID（用于关联查询）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryId(string $QueryId) 设置<p>查询 ID（用于关联查询）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSentRows() 获取<p>返回行数（扫描结果集行数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSentRows(integer $SentRows) 设置<p>返回行数（扫描结果集行数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSplited() 获取<p>是否为 Proxy 改写后的查询：0 原始查询，1 改写后查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplited(integer $Splited) 设置<p>是否为 Proxy 改写后的查询：0 原始查询，1 改写后查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSql() 获取<p>执行的 SQL 语句原文。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSql(string $Sql) 设置<p>执行的 SQL 语句原文。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlTemplate() 获取<p>SQL 模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlTemplate(string $SqlTemplate) 设置<p>SQL 模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlTemplateId() 获取<p>SQL 模板 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlTemplateId(string $SqlTemplateId) 设置<p>SQL 模板 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlType() 获取<p>SQL 类型（如 Select、Insert、Create、Login、Set 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlType(string $SqlType) 设置<p>SQL 类型（如 Select、Insert、Create、Login、Set 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTables() 获取<p>涉及的表（多表以英文逗号分隔）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTables(string $Tables) 设置<p>涉及的表（多表以英文逗号分隔）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThreadId() 获取<p>线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreadId(string $ThreadId) 设置<p>线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSqlStartTime() 获取<p>SQL 开始时间（毫秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlStartTime(integer $SqlStartTime) 设置<p>SQL 开始时间（毫秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取<p>执行 SQL 的数据库用户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置<p>执行 SQL 的数据库用户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostPort() 获取<p>客户端连接的 HostPort。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostPort(string $HostPort) 设置<p>客户端连接的 HostPort。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyThread() 获取<p>Proxy 节点处理线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyThread(string $ProxyThread) 设置<p>Proxy 节点处理线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbHostNum() 获取<p>后端 DB Host 数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbHostNum(string $DbHostNum) 设置<p>后端 DB Host 数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessCode() 获取<p>业务码（由业务侧 SQL 注释中 i/o/p 等 KV 提取）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessCode(string $BusinessCode) 设置<p>业务码（由业务侧 SQL 注释中 i/o/p 等 KV 提取）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessTag() 获取<p>业务标签（根据业务码后置补齐）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessTag(string $BusinessTag) 设置<p>业务标签（根据业务码后置补齐）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuditProxyLogItem extends AbstractModel
{
    /**
     * @var string <p>SQL 执行时间点（格式化字符串，yyyy-MM-dd HH:mm:ss）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string <p>集群 ID（dcdb/mariadb 集群标识，与 InstanceId 相同）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var integer <p>影响行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectRows;

    /**
     * @var string <p>是否自动提交。1 表示开启，0 表示关闭。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Autocommit;

    /**
     * @var string <p>MySQL 网络协议命令类型（如 COM_QUERY、COM_CONNECT 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComType;

    /**
     * @var integer <p>新建连接耗时。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnTc;

    /**
     * @var string <p>后端 DB 实例地址（多个用英文逗号分隔）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBHost;

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
     * @var string <p>错误信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrInfo;

    /**
     * @var integer <p>SQL 执行耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecTime;

    /**
     * @var string <p>请求结束后仍占用的连接数（非事务请求通常为 0）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HoldConns;

    /**
     * @var string <p>客户端来源 IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string <p>是否开启全局一致性读（0 否、1 是）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mc;

    /**
     * @var integer <p>SQL 开始时间（微秒精度中的微秒部分）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlStartTimeUs;

    /**
     * @var integer <p>本次请求新建的连接数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewConnNum;

    /**
     * @var string <p>Proxy 代理节点地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyHost;

    /**
     * @var string <p>Proxy ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyId;

    /**
     * @var string <p>查询 ID（用于关联查询）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryId;

    /**
     * @var integer <p>返回行数（扫描结果集行数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SentRows;

    /**
     * @var integer <p>是否为 Proxy 改写后的查询：0 原始查询，1 改写后查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Splited;

    /**
     * @var string <p>执行的 SQL 语句原文。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sql;

    /**
     * @var string <p>SQL 模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlTemplate;

    /**
     * @var string <p>SQL 模板 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlTemplateId;

    /**
     * @var string <p>SQL 类型（如 Select、Insert、Create、Login、Set 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlType;

    /**
     * @var string <p>涉及的表（多表以英文逗号分隔）。</p>
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
     * @var string <p>执行 SQL 的数据库用户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string <p>客户端连接的 HostPort。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostPort;

    /**
     * @var string <p>Proxy 节点处理线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyThread;

    /**
     * @var string <p>后端 DB Host 数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbHostNum;

    /**
     * @var string <p>业务码（由业务侧 SQL 注释中 i/o/p 等 KV 提取）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessCode;

    /**
     * @var string <p>业务标签（根据业务码后置补齐）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessTag;

    /**
     * @param string $Timestamp <p>SQL 执行时间点（格式化字符串，yyyy-MM-dd HH:mm:ss）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>集群 ID（dcdb/mariadb 集群标识，与 InstanceId 相同）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AffectRows <p>影响行数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Autocommit <p>是否自动提交。1 表示开启，0 表示关闭。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComType <p>MySQL 网络协议命令类型（如 COM_QUERY、COM_CONNECT 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConnTc <p>新建连接耗时。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DBHost <p>后端 DB 实例地址（多个用英文逗号分隔）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DBName <p>SQL 执行所在的数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrCode <p>SQL 执行返回的错误码，0 表示成功。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrInfo <p>错误信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecTime <p>SQL 执行耗时（微秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HoldConns <p>请求结束后仍占用的连接数（非事务请求通常为 0）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host <p>客户端来源 IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mc <p>是否开启全局一致性读（0 否、1 是）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SqlStartTimeUs <p>SQL 开始时间（微秒精度中的微秒部分）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NewConnNum <p>本次请求新建的连接数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyHost <p>Proxy 代理节点地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyId <p>Proxy ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueryId <p>查询 ID（用于关联查询）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SentRows <p>返回行数（扫描结果集行数）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Splited <p>是否为 Proxy 改写后的查询：0 原始查询，1 改写后查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sql <p>执行的 SQL 语句原文。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlTemplate <p>SQL 模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlTemplateId <p>SQL 模板 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlType <p>SQL 类型（如 Select、Insert、Create、Login、Set 等）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tables <p>涉及的表（多表以英文逗号分隔）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThreadId <p>线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SqlStartTime <p>SQL 开始时间（毫秒级时间戳）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User <p>执行 SQL 的数据库用户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostPort <p>客户端连接的 HostPort。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyThread <p>Proxy 节点处理线程 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbHostNum <p>后端 DB Host 数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessCode <p>业务码（由业务侧 SQL 注释中 i/o/p 等 KV 提取）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessTag <p>业务标签（根据业务码后置补齐）。</p>
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

        if (array_key_exists("Autocommit",$param) and $param["Autocommit"] !== null) {
            $this->Autocommit = $param["Autocommit"];
        }

        if (array_key_exists("ComType",$param) and $param["ComType"] !== null) {
            $this->ComType = $param["ComType"];
        }

        if (array_key_exists("ConnTc",$param) and $param["ConnTc"] !== null) {
            $this->ConnTc = $param["ConnTc"];
        }

        if (array_key_exists("DBHost",$param) and $param["DBHost"] !== null) {
            $this->DBHost = $param["DBHost"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = $param["ErrInfo"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("HoldConns",$param) and $param["HoldConns"] !== null) {
            $this->HoldConns = $param["HoldConns"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Mc",$param) and $param["Mc"] !== null) {
            $this->Mc = $param["Mc"];
        }

        if (array_key_exists("SqlStartTimeUs",$param) and $param["SqlStartTimeUs"] !== null) {
            $this->SqlStartTimeUs = $param["SqlStartTimeUs"];
        }

        if (array_key_exists("NewConnNum",$param) and $param["NewConnNum"] !== null) {
            $this->NewConnNum = $param["NewConnNum"];
        }

        if (array_key_exists("ProxyHost",$param) and $param["ProxyHost"] !== null) {
            $this->ProxyHost = $param["ProxyHost"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }

        if (array_key_exists("SentRows",$param) and $param["SentRows"] !== null) {
            $this->SentRows = $param["SentRows"];
        }

        if (array_key_exists("Splited",$param) and $param["Splited"] !== null) {
            $this->Splited = $param["Splited"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("HostPort",$param) and $param["HostPort"] !== null) {
            $this->HostPort = $param["HostPort"];
        }

        if (array_key_exists("ProxyThread",$param) and $param["ProxyThread"] !== null) {
            $this->ProxyThread = $param["ProxyThread"];
        }

        if (array_key_exists("DbHostNum",$param) and $param["DbHostNum"] !== null) {
            $this->DbHostNum = $param["DbHostNum"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessTag",$param) and $param["BusinessTag"] !== null) {
            $this->BusinessTag = $param["BusinessTag"];
        }
    }
}
