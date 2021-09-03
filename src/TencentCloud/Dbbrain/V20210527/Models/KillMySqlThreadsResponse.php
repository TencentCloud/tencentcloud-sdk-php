<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * KillMySqlThreads返回参数结构体
 *
 * @method array getThreads() 获取kill完成的sql会话ID列表。
 * @method void setThreads(array $Threads) 设置kill完成的sql会话ID列表。
 * @method string getSqlExecId() 获取执行ID， Prepare阶段的任务输出，用于Commit阶段中指定执行kill操作的会话ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlExecId(string $SqlExecId) 设置执行ID， Prepare阶段的任务输出，用于Commit阶段中指定执行kill操作的会话ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class KillMySqlThreadsResponse extends AbstractModel
{
    /**
     * @var array kill完成的sql会话ID列表。
     */
    public $Threads;

    /**
     * @var string 执行ID， Prepare阶段的任务输出，用于Commit阶段中指定执行kill操作的会话ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlExecId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Threads kill完成的sql会话ID列表。
     * @param string $SqlExecId 执行ID， Prepare阶段的任务输出，用于Commit阶段中指定执行kill操作的会话ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Threads",$param) and $param["Threads"] !== null) {
            $this->Threads = $param["Threads"];
        }

        if (array_key_exists("SqlExecId",$param) and $param["SqlExecId"] !== null) {
            $this->SqlExecId = $param["SqlExecId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
