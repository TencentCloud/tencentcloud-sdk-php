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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息
 *
 * @method string getLifeState() 获取任务状态（process(运行中)、pause(暂停)、pausing(暂停中)、paused(已暂停)、done(已完成)、abort(中止)、aborted(已中止)、resume(重新执行)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeState(string $LifeState) 设置任务状态（process(运行中)、pause(暂停)、pausing(暂停中)、paused(已暂停)、done(已完成)、abort(中止)、aborted(已中止)、resume(重新执行)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetObj() 获取任务目标ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetObj(string $TargetObj) 设置任务目标ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParam() 获取任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParam(string $Param) 设置任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastError() 获取任务失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastError(string $LastError) 设置任务失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterID() 获取任务所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterID(string $ClusterID) 设置任务所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskID() 获取创建任务唯一请求ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskID(string $TaskID) 设置创建任务唯一请求ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class Task extends AbstractModel
{
    /**
     * @var string 任务状态（process(运行中)、pause(暂停)、pausing(暂停中)、paused(已暂停)、done(已完成)、abort(中止)、aborted(已中止)、resume(重新执行)）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeState;

    /**
     * @var string 任务目标ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetObj;

    /**
     * @var string 任务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Param;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 任务失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastError;

    /**
     * @var string 任务所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterID;

    /**
     * @var string 任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 创建任务唯一请求ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskID;

    /**
     * @param string $LifeState 任务状态（process(运行中)、pause(暂停)、pausing(暂停中)、paused(已暂停)、done(已完成)、abort(中止)、aborted(已中止)、resume(重新执行)）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetObj 任务目标ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Param 任务参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastError 任务失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterID 任务所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskID 创建任务唯一请求ID
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
        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("TargetObj",$param) and $param["TargetObj"] !== null) {
            $this->TargetObj = $param["TargetObj"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("LastError",$param) and $param["LastError"] !== null) {
            $this->LastError = $param["LastError"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }
    }
}
