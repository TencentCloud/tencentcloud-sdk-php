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
 * 参与死锁的单个事务。
 *
 * @method string getStatus() 获取<p>事务最终状态。Rollback（被回滚，对应 IsVictim=true）/ Normal（正常，对应 IsVictim=false）/ Unknown（无 victim 信息）。</p>
 * @method void setStatus(string $Status) 设置<p>事务最终状态。Rollback（被回滚，对应 IsVictim=true）/ Normal（正常，对应 IsVictim=false）/ Unknown（无 victim 信息）。</p>
 * @method string getTransactionId() 获取<p>SQL Server 引擎内的事务 ID。同实例短期内唯一。与 Auxiliary 记录里的 transaction_id 对齐。</p>
 * @method void setTransactionId(string $TransactionId) 设置<p>SQL Server 引擎内的事务 ID。同实例短期内唯一。与 Auxiliary 记录里的 transaction_id 对齐。</p>
 * @method boolean getIsVictim() 获取<p>本事务是否为牺牲事务。true 表示 SQL Server 已回滚该事务；false 表示正常提交；null 表示 XML 缺 VictimProcessIds 无法判定。</p>
 * @method void setIsVictim(boolean $IsVictim) 设置<p>本事务是否为牺牲事务。true 表示 SQL Server 已回滚该事务；false 表示正常提交；null 表示 XML 缺 VictimProcessIds 无法判定。</p>
 * @method array getSessions() 获取<p>该事务下的进程/会话列表。并行计划下同一事务可能包含多个 worker（SessionId 相同 ExecutionContextId 不同）。</p>
 * @method void setSessions(array $Sessions) 设置<p>该事务下的进程/会话列表。并行计划下同一事务可能包含多个 worker（SessionId 相同 ExecutionContextId 不同）。</p>
 */
class DeadlockTransaction extends AbstractModel
{
    /**
     * @var string <p>事务最终状态。Rollback（被回滚，对应 IsVictim=true）/ Normal（正常，对应 IsVictim=false）/ Unknown（无 victim 信息）。</p>
     */
    public $Status;

    /**
     * @var string <p>SQL Server 引擎内的事务 ID。同实例短期内唯一。与 Auxiliary 记录里的 transaction_id 对齐。</p>
     */
    public $TransactionId;

    /**
     * @var boolean <p>本事务是否为牺牲事务。true 表示 SQL Server 已回滚该事务；false 表示正常提交；null 表示 XML 缺 VictimProcessIds 无法判定。</p>
     */
    public $IsVictim;

    /**
     * @var array <p>该事务下的进程/会话列表。并行计划下同一事务可能包含多个 worker（SessionId 相同 ExecutionContextId 不同）。</p>
     */
    public $Sessions;

    /**
     * @param string $Status <p>事务最终状态。Rollback（被回滚，对应 IsVictim=true）/ Normal（正常，对应 IsVictim=false）/ Unknown（无 victim 信息）。</p>
     * @param string $TransactionId <p>SQL Server 引擎内的事务 ID。同实例短期内唯一。与 Auxiliary 记录里的 transaction_id 对齐。</p>
     * @param boolean $IsVictim <p>本事务是否为牺牲事务。true 表示 SQL Server 已回滚该事务；false 表示正常提交；null 表示 XML 缺 VictimProcessIds 无法判定。</p>
     * @param array $Sessions <p>该事务下的进程/会话列表。并行计划下同一事务可能包含多个 worker（SessionId 相同 ExecutionContextId 不同）。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("IsVictim",$param) and $param["IsVictim"] !== null) {
            $this->IsVictim = $param["IsVictim"];
        }

        if (array_key_exists("Sessions",$param) and $param["Sessions"] !== null) {
            $this->Sessions = [];
            foreach ($param["Sessions"] as $key => $value){
                $obj = new DeadlockSession();
                $obj->deserialize($value);
                array_push($this->Sessions, $obj);
            }
        }
    }
}
