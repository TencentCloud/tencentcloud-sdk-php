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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotTask返回参数结构体
 *
 * @method string getTaskID() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskID(string $TaskID) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态
Running - 任务执行中
Finished - 任务已结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态
Running - 任务执行中
Finished - 任务已结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取任务创建时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置任务创建时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFinishTime() 获取任务完成时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(integer $FinishTime) 设置任务完成时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
 * @method SnapshotResult getResult() 获取任务结果信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(SnapshotResult $Result) 设置任务结果信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSnapshotTaskResponse extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskID;

    /**
     * @var string 任务状态
Running - 任务执行中
Finished - 任务已结束
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 任务创建时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 任务完成时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @var SnapshotResult 任务结果信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskID 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态
Running - 任务执行中
Finished - 任务已结束
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 任务创建时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FinishTime 任务完成时间，单位s
注意：此字段可能返回 null，表示取不到有效值。
     * @param SnapshotResult $Result 任务结果信息
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new SnapshotResult();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
