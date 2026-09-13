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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OneFlow 透传的 Workspace 异步文件操作信息；作业状态由 Workspace 持久化和维护
 *
 * @method boolean getIsAsync() 获取是否异步执行；ZIP 解压创建时为 true
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAsync(boolean $IsAsync) 设置是否异步执行；ZIP 解压创建时为 true
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取Workspace 持久化的异步作业 ID，用于查询作业进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置Workspace 持久化的异步作业 ID，用于查询作业进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperationId() 获取调用方生成的提交幂等与链路追踪标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationId(string $OperationId) 设置调用方生成的提交幂等与链路追踪标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取异步作业状态：0-未指定，1-已受理，2-解压中，3-回调处理中，4-成功，5-部分失败，6-失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置异步作业状态：0-未指定，1-已受理，2-解压中，3-回调处理中，4-成功，5-部分失败，6-失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class AsyncOperation extends AbstractModel
{
    /**
     * @var boolean 是否异步执行；ZIP 解压创建时为 true
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAsync;

    /**
     * @var string Workspace 持久化的异步作业 ID，用于查询作业进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 调用方生成的提交幂等与链路追踪标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationId;

    /**
     * @var integer 异步作业状态：0-未指定，1-已受理，2-解压中，3-回调处理中，4-成功，5-部分失败，6-失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param boolean $IsAsync 是否异步执行；ZIP 解压创建时为 true
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId Workspace 持久化的异步作业 ID，用于查询作业进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperationId 调用方生成的提交幂等与链路追踪标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 异步作业状态：0-未指定，1-已受理，2-解压中，3-回调处理中，4-成功，5-部分失败，6-失败
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
        if (array_key_exists("IsAsync",$param) and $param["IsAsync"] !== null) {
            $this->IsAsync = $param["IsAsync"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("OperationId",$param) and $param["OperationId"] !== null) {
            $this->OperationId = $param["OperationId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
