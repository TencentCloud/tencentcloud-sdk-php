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
 * 持有该锁资源的进程列表（死锁环的持有边）。
 *
 * @method string getMode() 获取<p>锁模式。常见值：X（排他）/ U（更新）/ S（共享）/ IX / IU / RangeS-U / RangeX-X 等。</p>
 * @method void setMode(string $Mode) 设置<p>锁模式。常见值：X（排他）/ U（更新）/ S（共享）/ IX / IU / RangeS-U / RangeX-X 等。</p>
 * @method integer getExecutionContextId() 获取<p>该边对应进程的并行执行子线程 ID。</p>
 * @method void setExecutionContextId(integer $ExecutionContextId) 设置<p>该边对应进程的并行执行子线程 ID。</p>
 * @method string getProcessId() 获取<p>SQL Server 引擎内的进程指针，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 拼接死锁环。partial 事件为 null。</p>
 * @method void setProcessId(string $ProcessId) 设置<p>SQL Server 引擎内的进程指针，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 拼接死锁环。partial 事件为 null。</p>
 * @method integer getSessionId() 获取<p>SQL Server 会话 ID。日志排查主键。</p>
 * @method void setSessionId(integer $SessionId) 设置<p>SQL Server 会话 ID。日志排查主键。</p>
 */
class OwnerItem extends AbstractModel
{
    /**
     * @var string <p>锁模式。常见值：X（排他）/ U（更新）/ S（共享）/ IX / IU / RangeS-U / RangeX-X 等。</p>
     */
    public $Mode;

    /**
     * @var integer <p>该边对应进程的并行执行子线程 ID。</p>
     */
    public $ExecutionContextId;

    /**
     * @var string <p>SQL Server 引擎内的进程指针，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 拼接死锁环。partial 事件为 null。</p>
     */
    public $ProcessId;

    /**
     * @var integer <p>SQL Server 会话 ID。日志排查主键。</p>
     */
    public $SessionId;

    /**
     * @param string $Mode <p>锁模式。常见值：X（排他）/ U（更新）/ S（共享）/ IX / IU / RangeS-U / RangeX-X 等。</p>
     * @param integer $ExecutionContextId <p>该边对应进程的并行执行子线程 ID。</p>
     * @param string $ProcessId <p>SQL Server 引擎内的进程指针，例如 process260256c7468。与 Resources.Owners/Waiters.ProcessId 拼接死锁环。partial 事件为 null。</p>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ExecutionContextId",$param) and $param["ExecutionContextId"] !== null) {
            $this->ExecutionContextId = $param["ExecutionContextId"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
