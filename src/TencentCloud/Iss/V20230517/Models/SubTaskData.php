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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子任务详情
 *
 * @method string getSubTaskId() 获取子任务ID
 * @method void setSubTaskId(string $SubTaskId) 设置子任务ID
 * @method integer getStatus() 获取任务状态1:NEW,2:RUNNING,3:COMPLETED ,4:FAILED
 * @method void setStatus(integer $Status) 设置任务状态1:NEW,2:RUNNING,3:COMPLETED ,4:FAILED
 * @method string getFailReason() 获取任务失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置任务失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProgress() 获取任务进度
 * @method void setProgress(float $Progress) 设置任务进度
 * @method string getAction() 获取操作类型
 * @method void setAction(string $Action) 设置操作类型
 * @method string getActionZhDesc() 获取操作类型中文描述
 * @method void setActionZhDesc(string $ActionZhDesc) 设置操作类型中文描述
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getStartedAt() 获取启动任务时间
 * @method void setStartedAt(string $StartedAt) 设置启动任务时间
 * @method string getCreatedAt() 获取创建任务时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建任务时间
 * @method string getUpdatedAt() 获取更新任务时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新任务时间
 * @method integer getRuntime() 获取任务运行时间，单位ms
 * @method void setRuntime(integer $Runtime) 设置任务运行时间，单位ms
 */
class SubTaskData extends AbstractModel
{
    /**
     * @var string 子任务ID
     */
    public $SubTaskId;

    /**
     * @var integer 任务状态1:NEW,2:RUNNING,3:COMPLETED ,4:FAILED
     */
    public $Status;

    /**
     * @var string 任务失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var float 任务进度
     */
    public $Progress;

    /**
     * @var string 操作类型
     */
    public $Action;

    /**
     * @var string 操作类型中文描述
     */
    public $ActionZhDesc;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 启动任务时间
     */
    public $StartedAt;

    /**
     * @var string 创建任务时间
     */
    public $CreatedAt;

    /**
     * @var string 更新任务时间
     */
    public $UpdatedAt;

    /**
     * @var integer 任务运行时间，单位ms
     */
    public $Runtime;

    /**
     * @param string $SubTaskId 子任务ID
     * @param integer $Status 任务状态1:NEW,2:RUNNING,3:COMPLETED ,4:FAILED
     * @param string $FailReason 任务失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Progress 任务进度
     * @param string $Action 操作类型
     * @param string $ActionZhDesc 操作类型中文描述
     * @param string $ResourceId 资源ID
     * @param string $StartedAt 启动任务时间
     * @param string $CreatedAt 创建任务时间
     * @param string $UpdatedAt 更新任务时间
     * @param integer $Runtime 任务运行时间，单位ms
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
        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            $this->SubTaskId = $param["SubTaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionZhDesc",$param) and $param["ActionZhDesc"] !== null) {
            $this->ActionZhDesc = $param["ActionZhDesc"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }
    }
}
