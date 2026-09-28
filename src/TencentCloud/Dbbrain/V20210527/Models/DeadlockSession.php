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
 * 参与死锁的单个进程/会话。
 *
 * @method string getSqlFingerprint() 获取<p>SQL 归一化后的指纹（SHA-1 前 16 位）。去掉字面量、注释、参数名、空白差异后计算，抗字面量差异，用于聚合相同 SQL 模板。SqlText 为空时为 null。</p>
 * @method void setSqlFingerprint(string $SqlFingerprint) 设置<p>SQL 归一化后的指纹（SHA-1 前 16 位）。去掉字面量、注释、参数名、空白差异后计算，抗字面量差异，用于聚合相同 SQL 模板。SqlText 为空时为 null。</p>
 * @method string getLoginName() 获取<p>SQL Server 登录账号，用于权限归因。可判断是 SQLAgent、业务账号还是 DBA 账号。</p>
 * @method void setLoginName(string $LoginName) 设置<p>SQL Server 登录账号，用于权限归因。可判断是 SQLAgent、业务账号还是 DBA 账号。</p>
 * @method array getFrames() 获取<p>会话执行栈帧列表（xml 的 executionStack.frame），用于定位到存储过程内的具体语句区间。partial 事件为空数组。</p>
 * @method void setFrames(array $Frames) 设置<p>会话执行栈帧列表（xml 的 executionStack.frame），用于定位到存储过程内的具体语句区间。partial 事件为空数组。</p>
 * @method string getIsolationLevel() 获取<p>事务隔离级别，例如 &#39;read committed (2)&#39;、&#39;repeatable read (3)&#39;、&#39;serializable (4)&#39; 等。显著影响锁形态和死锁模式。</p>
 * @method void setIsolationLevel(string $IsolationLevel) 设置<p>事务隔离级别，例如 &#39;read committed (2)&#39;、&#39;repeatable read (3)&#39;、&#39;serializable (4)&#39; 等。显著影响锁形态和死锁模式。</p>
 * @method string getProcessStatus() 获取<p>进程状态。常见值：suspended（挂起等锁）/ running / background。判断是否运行中被检测终止。</p>
 * @method void setProcessStatus(string $ProcessStatus) 设置<p>进程状态。常见值：suspended（挂起等锁）/ running / background。判断是否运行中被检测终止。</p>
 * @method string getClientApp() 获取<p>客户端应用名（xml 的 clientapp）。判断连接来源，例如 SQLAgent Job、ORM、SSMS、业务服务名等。</p>
 * @method void setClientApp(string $ClientApp) 设置<p>客户端应用名（xml 的 clientapp）。判断连接来源，例如 SQLAgent Job、ORM、SSMS、业务服务名等。</p>
 * @method integer getPriority() 获取<p>会话的 DEADLOCK_PRIORITY 设置。-10 表示主动降级为牺牲者候选；10 表示优先级更高。可解释为何这一方成为牺牲品。</p>
 * @method void setPriority(integer $Priority) 设置<p>会话的 DEADLOCK_PRIORITY 设置。-10 表示主动降级为牺牲者候选；10 表示优先级更高。可解释为何这一方成为牺牲品。</p>
 * @method string getDatabaseName() 获取<p>会话当前活跃的数据库名（xml 的 currentdbname）。</p>
 * @method void setDatabaseName(string $DatabaseName) 设置<p>会话当前活跃的数据库名（xml 的 currentdbname）。</p>
 * @method array getLockHold() 获取<p>本进程当前持有的锁资源描述列表（死锁环的持有边）。格式同 LockRequest 但结尾为 &#39;holding&#39;。partial 事件为空数组。</p>
 * @method void setLockHold(array $LockHold) 设置<p>本进程当前持有的锁资源描述列表（死锁环的持有边）。格式同 LockRequest 但结尾为 &#39;holding&#39;。partial 事件为空数组。</p>
 * @method string getSqlText() 获取<p>会话最近执行的 SQL 文本（xml 的 InputBuf）。是 AI 诊断的主输入与 SqlFingerprint 的来源。</p>
 * @method void setSqlText(string $SqlText) 设置<p>会话最近执行的 SQL 文本（xml 的 InputBuf）。是 AI 诊断的主输入与 SqlFingerprint 的来源。</p>
 * @method string getHost() 获取<p>客户端主机的 IP 地址（点分十进制，来自 message.ip）。判断是否来自同一台机器、批处理源。</p>
 * @method void setHost(string $Host) 设置<p>客户端主机的 IP 地址（点分十进制，来自 message.ip）。判断是否来自同一台机器、批处理源。</p>
 * @method integer getDatabaseId() 获取<p>会话当前活跃的数据库 ID（xml 的 currentdb）。</p>
 * @method void setDatabaseId(integer $DatabaseId) 设置<p>会话当前活跃的数据库 ID（xml 的 currentdb）。</p>
 * @method boolean getIsVictim() 获取<p>本事务是否为牺牲事务。true 表示 SQL Server 已回滚该事务；false 表示正常提交；null 表示 XML 缺 VictimProcessIds 无法判定。</p>
 * @method void setIsVictim(boolean $IsVictim) 设置<p>本事务是否为牺牲事务。true 表示 SQL Server 已回滚该事务；false 表示正常提交；null 表示 XML 缺 VictimProcessIds 无法判定。</p>
 * @method integer getWaitTimeMs() 获取<p>等锁时长，单位毫秒。判断死锁检测延迟、事务超时的辅助指标。</p>
 * @method void setWaitTimeMs(integer $WaitTimeMs) 设置<p>等锁时长，单位毫秒。判断死锁检测延迟、事务超时的辅助指标。</p>
 * @method string getLastTransStarted() 获取<p>事务开始时间（xml 里的 lasttranstarted，本地时间字符串，如 2026-09-16T14:58:23.840）。用于分析长事务、锁持有时长。</p>
 * @method void setLastTransStarted(string $LastTransStarted) 设置<p>事务开始时间（xml 里的 lasttranstarted，本地时间字符串，如 2026-09-16T14:58:23.840）。用于分析长事务、锁持有时长。</p>
 * @method integer getExecutionContextId() 获取<p>该边对应进程的并行执行子线程 ID。</p>
 * @method void setExecutionContextId(integer $ExecutionContextId) 设置<p>该边对应进程的并行执行子线程 ID。</p>
 * @method string getProcessId() 获取<p>SQL Server 引擎内的进程指针，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 拼接死锁环。partial 事件为 null。</p>
 * @method void setProcessId(string $ProcessId) 设置<p>SQL Server 引擎内的进程指针，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 拼接死锁环。partial 事件为 null。</p>
 * @method string getClientAppNormalized() 获取<p>归一化后的客户端应用名。去掉 SQLAgent 的 JobId（16-64 位十六进制串）、Step 号、GUID、末尾进程号等易变部分，用于按应用类别聚合。</p>
 * @method void setClientAppNormalized(string $ClientAppNormalized) 设置<p>归一化后的客户端应用名。去掉 SQLAgent 的 JobId（16-64 位十六进制串）、Step 号、GUID、末尾进程号等易变部分，用于按应用类别聚合。</p>
 * @method array getLockRequest() 获取<p>本进程正在等待的锁资源描述列表（死锁环的等待边）。每条形如 &#39;keylock on tempdb.dbo.dl_a mode X waiting&#39;。applicationlock 会展示原始资源名（如 &#39;lock_a&#39;）。partial 事件为空数组。</p>
 * @method void setLockRequest(array $LockRequest) 设置<p>本进程正在等待的锁资源描述列表（死锁环的等待边）。每条形如 &#39;keylock on tempdb.dbo.dl_a mode X waiting&#39;。applicationlock 会展示原始资源名（如 &#39;lock_a&#39;）。partial 事件为空数组。</p>
 * @method integer getSessionId() 获取<p>SQL Server 会话 ID。日志排查主键。</p>
 * @method void setSessionId(integer $SessionId) 设置<p>SQL Server 会话 ID。日志排查主键。</p>
 */
class DeadlockSession extends AbstractModel
{
    /**
     * @var string <p>SQL 归一化后的指纹（SHA-1 前 16 位）。去掉字面量、注释、参数名、空白差异后计算，抗字面量差异，用于聚合相同 SQL 模板。SqlText 为空时为 null。</p>
     */
    public $SqlFingerprint;

    /**
     * @var string <p>SQL Server 登录账号，用于权限归因。可判断是 SQLAgent、业务账号还是 DBA 账号。</p>
     */
    public $LoginName;

    /**
     * @var array <p>会话执行栈帧列表（xml 的 executionStack.frame），用于定位到存储过程内的具体语句区间。partial 事件为空数组。</p>
     */
    public $Frames;

    /**
     * @var string <p>事务隔离级别，例如 &#39;read committed (2)&#39;、&#39;repeatable read (3)&#39;、&#39;serializable (4)&#39; 等。显著影响锁形态和死锁模式。</p>
     */
    public $IsolationLevel;

    /**
     * @var string <p>进程状态。常见值：suspended（挂起等锁）/ running / background。判断是否运行中被检测终止。</p>
     */
    public $ProcessStatus;

    /**
     * @var string <p>客户端应用名（xml 的 clientapp）。判断连接来源，例如 SQLAgent Job、ORM、SSMS、业务服务名等。</p>
     */
    public $ClientApp;

    /**
     * @var integer <p>会话的 DEADLOCK_PRIORITY 设置。-10 表示主动降级为牺牲者候选；10 表示优先级更高。可解释为何这一方成为牺牲品。</p>
     */
    public $Priority;

    /**
     * @var string <p>会话当前活跃的数据库名（xml 的 currentdbname）。</p>
     */
    public $DatabaseName;

    /**
     * @var array <p>本进程当前持有的锁资源描述列表（死锁环的持有边）。格式同 LockRequest 但结尾为 &#39;holding&#39;。partial 事件为空数组。</p>
     */
    public $LockHold;

    /**
     * @var string <p>会话最近执行的 SQL 文本（xml 的 InputBuf）。是 AI 诊断的主输入与 SqlFingerprint 的来源。</p>
     */
    public $SqlText;

    /**
     * @var string <p>客户端主机的 IP 地址（点分十进制，来自 message.ip）。判断是否来自同一台机器、批处理源。</p>
     */
    public $Host;

    /**
     * @var integer <p>会话当前活跃的数据库 ID（xml 的 currentdb）。</p>
     */
    public $DatabaseId;

    /**
     * @var boolean <p>本事务是否为牺牲事务。true 表示 SQL Server 已回滚该事务；false 表示正常提交；null 表示 XML 缺 VictimProcessIds 无法判定。</p>
     */
    public $IsVictim;

    /**
     * @var integer <p>等锁时长，单位毫秒。判断死锁检测延迟、事务超时的辅助指标。</p>
     */
    public $WaitTimeMs;

    /**
     * @var string <p>事务开始时间（xml 里的 lasttranstarted，本地时间字符串，如 2026-09-16T14:58:23.840）。用于分析长事务、锁持有时长。</p>
     */
    public $LastTransStarted;

    /**
     * @var integer <p>该边对应进程的并行执行子线程 ID。</p>
     */
    public $ExecutionContextId;

    /**
     * @var string <p>SQL Server 引擎内的进程指针，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 拼接死锁环。partial 事件为 null。</p>
     */
    public $ProcessId;

    /**
     * @var string <p>归一化后的客户端应用名。去掉 SQLAgent 的 JobId（16-64 位十六进制串）、Step 号、GUID、末尾进程号等易变部分，用于按应用类别聚合。</p>
     */
    public $ClientAppNormalized;

    /**
     * @var array <p>本进程正在等待的锁资源描述列表（死锁环的等待边）。每条形如 &#39;keylock on tempdb.dbo.dl_a mode X waiting&#39;。applicationlock 会展示原始资源名（如 &#39;lock_a&#39;）。partial 事件为空数组。</p>
     */
    public $LockRequest;

    /**
     * @var integer <p>SQL Server 会话 ID。日志排查主键。</p>
     */
    public $SessionId;

    /**
     * @param string $SqlFingerprint <p>SQL 归一化后的指纹（SHA-1 前 16 位）。去掉字面量、注释、参数名、空白差异后计算，抗字面量差异，用于聚合相同 SQL 模板。SqlText 为空时为 null。</p>
     * @param string $LoginName <p>SQL Server 登录账号，用于权限归因。可判断是 SQLAgent、业务账号还是 DBA 账号。</p>
     * @param array $Frames <p>会话执行栈帧列表（xml 的 executionStack.frame），用于定位到存储过程内的具体语句区间。partial 事件为空数组。</p>
     * @param string $IsolationLevel <p>事务隔离级别，例如 &#39;read committed (2)&#39;、&#39;repeatable read (3)&#39;、&#39;serializable (4)&#39; 等。显著影响锁形态和死锁模式。</p>
     * @param string $ProcessStatus <p>进程状态。常见值：suspended（挂起等锁）/ running / background。判断是否运行中被检测终止。</p>
     * @param string $ClientApp <p>客户端应用名（xml 的 clientapp）。判断连接来源，例如 SQLAgent Job、ORM、SSMS、业务服务名等。</p>
     * @param integer $Priority <p>会话的 DEADLOCK_PRIORITY 设置。-10 表示主动降级为牺牲者候选；10 表示优先级更高。可解释为何这一方成为牺牲品。</p>
     * @param string $DatabaseName <p>会话当前活跃的数据库名（xml 的 currentdbname）。</p>
     * @param array $LockHold <p>本进程当前持有的锁资源描述列表（死锁环的持有边）。格式同 LockRequest 但结尾为 &#39;holding&#39;。partial 事件为空数组。</p>
     * @param string $SqlText <p>会话最近执行的 SQL 文本（xml 的 InputBuf）。是 AI 诊断的主输入与 SqlFingerprint 的来源。</p>
     * @param string $Host <p>客户端主机的 IP 地址（点分十进制，来自 message.ip）。判断是否来自同一台机器、批处理源。</p>
     * @param integer $DatabaseId <p>会话当前活跃的数据库 ID（xml 的 currentdb）。</p>
     * @param boolean $IsVictim <p>本事务是否为牺牲事务。true 表示 SQL Server 已回滚该事务；false 表示正常提交；null 表示 XML 缺 VictimProcessIds 无法判定。</p>
     * @param integer $WaitTimeMs <p>等锁时长，单位毫秒。判断死锁检测延迟、事务超时的辅助指标。</p>
     * @param string $LastTransStarted <p>事务开始时间（xml 里的 lasttranstarted，本地时间字符串，如 2026-09-16T14:58:23.840）。用于分析长事务、锁持有时长。</p>
     * @param integer $ExecutionContextId <p>该边对应进程的并行执行子线程 ID。</p>
     * @param string $ProcessId <p>SQL Server 引擎内的进程指针，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 拼接死锁环。partial 事件为 null。</p>
     * @param string $ClientAppNormalized <p>归一化后的客户端应用名。去掉 SQLAgent 的 JobId（16-64 位十六进制串）、Step 号、GUID、末尾进程号等易变部分，用于按应用类别聚合。</p>
     * @param array $LockRequest <p>本进程正在等待的锁资源描述列表（死锁环的等待边）。每条形如 &#39;keylock on tempdb.dbo.dl_a mode X waiting&#39;。applicationlock 会展示原始资源名（如 &#39;lock_a&#39;）。partial 事件为空数组。</p>
     * @param integer $SessionId <p>SQL Server 会话 ID。日志排查主键。</p>
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
        if (array_key_exists("SqlFingerprint",$param) and $param["SqlFingerprint"] !== null) {
            $this->SqlFingerprint = $param["SqlFingerprint"];
        }

        if (array_key_exists("LoginName",$param) and $param["LoginName"] !== null) {
            $this->LoginName = $param["LoginName"];
        }

        if (array_key_exists("Frames",$param) and $param["Frames"] !== null) {
            $this->Frames = [];
            foreach ($param["Frames"] as $key => $value){
                $obj = new DeadlockFrame();
                $obj->deserialize($value);
                array_push($this->Frames, $obj);
            }
        }

        if (array_key_exists("IsolationLevel",$param) and $param["IsolationLevel"] !== null) {
            $this->IsolationLevel = $param["IsolationLevel"];
        }

        if (array_key_exists("ProcessStatus",$param) and $param["ProcessStatus"] !== null) {
            $this->ProcessStatus = $param["ProcessStatus"];
        }

        if (array_key_exists("ClientApp",$param) and $param["ClientApp"] !== null) {
            $this->ClientApp = $param["ClientApp"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("LockHold",$param) and $param["LockHold"] !== null) {
            $this->LockHold = $param["LockHold"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("IsVictim",$param) and $param["IsVictim"] !== null) {
            $this->IsVictim = $param["IsVictim"];
        }

        if (array_key_exists("WaitTimeMs",$param) and $param["WaitTimeMs"] !== null) {
            $this->WaitTimeMs = $param["WaitTimeMs"];
        }

        if (array_key_exists("LastTransStarted",$param) and $param["LastTransStarted"] !== null) {
            $this->LastTransStarted = $param["LastTransStarted"];
        }

        if (array_key_exists("ExecutionContextId",$param) and $param["ExecutionContextId"] !== null) {
            $this->ExecutionContextId = $param["ExecutionContextId"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ClientAppNormalized",$param) and $param["ClientAppNormalized"] !== null) {
            $this->ClientAppNormalized = $param["ClientAppNormalized"];
        }

        if (array_key_exists("LockRequest",$param) and $param["LockRequest"] !== null) {
            $this->LockRequest = $param["LockRequest"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
