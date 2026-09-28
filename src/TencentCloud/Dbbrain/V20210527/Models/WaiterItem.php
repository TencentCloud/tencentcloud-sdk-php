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
 * 等待该锁资源的进程列表（死锁环的等待边）。
 *
 * @method string getMode() 获取<p>该边持有或申请的锁模式。</p>
 * @method void setMode(string $Mode) 设置<p>该边持有或申请的锁模式。</p>
 * @method integer getExecutionContextId() 获取<p>并行执行子线程 ID。0 表示主线程；大于 0 表示并行计划的 worker。SessionId + ExecutionContextId 组合可唯一区分并行执行下的 worker。</p>
 * @method void setExecutionContextId(integer $ExecutionContextId) 设置<p>并行执行子线程 ID。0 表示主线程；大于 0 表示并行计划的 worker。SessionId + ExecutionContextId 组合可唯一区分并行执行下的 worker。</p>
 * @method string getProcessId() 获取<p>进程内部指针，对应 Transactions[].Processes[].ProcessId。</p>
 * @method void setProcessId(string $ProcessId) 设置<p>进程内部指针，对应 Transactions[].Processes[].ProcessId。</p>
 * @method integer getSessionId() 获取<p>该边对应进程的 SPID，便于前端直接展示无需回查。</p>
 * @method void setSessionId(integer $SessionId) 设置<p>该边对应进程的 SPID，便于前端直接展示无需回查。</p>
 * @method string getRequestType() 获取<p>仅 Waiters 边有值。常见值：wait（普通等待）/ convert（锁转换，如从 S 升级到 X）。owner 边无此字段。</p>
 * @method void setRequestType(string $RequestType) 设置<p>仅 Waiters 边有值。常见值：wait（普通等待）/ convert（锁转换，如从 S 升级到 X）。owner 边无此字段。</p>
 */
class WaiterItem extends AbstractModel
{
    /**
     * @var string <p>该边持有或申请的锁模式。</p>
     */
    public $Mode;

    /**
     * @var integer <p>并行执行子线程 ID。0 表示主线程；大于 0 表示并行计划的 worker。SessionId + ExecutionContextId 组合可唯一区分并行执行下的 worker。</p>
     */
    public $ExecutionContextId;

    /**
     * @var string <p>进程内部指针，对应 Transactions[].Processes[].ProcessId。</p>
     */
    public $ProcessId;

    /**
     * @var integer <p>该边对应进程的 SPID，便于前端直接展示无需回查。</p>
     */
    public $SessionId;

    /**
     * @var string <p>仅 Waiters 边有值。常见值：wait（普通等待）/ convert（锁转换，如从 S 升级到 X）。owner 边无此字段。</p>
     */
    public $RequestType;

    /**
     * @param string $Mode <p>该边持有或申请的锁模式。</p>
     * @param integer $ExecutionContextId <p>并行执行子线程 ID。0 表示主线程；大于 0 表示并行计划的 worker。SessionId + ExecutionContextId 组合可唯一区分并行执行下的 worker。</p>
     * @param string $ProcessId <p>进程内部指针，对应 Transactions[].Processes[].ProcessId。</p>
     * @param integer $SessionId <p>该边对应进程的 SPID，便于前端直接展示无需回查。</p>
     * @param string $RequestType <p>仅 Waiters 边有值。常见值：wait（普通等待）/ convert（锁转换，如从 S 升级到 X）。owner 边无此字段。</p>
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

        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }
    }
}
