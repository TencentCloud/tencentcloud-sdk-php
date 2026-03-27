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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIGCTaskStatus返回参数结构体
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>FINISHED： 1</li></ul>
 * @method void setTaskStatus(string $TaskStatus) 设置<p>状态</p><p>枚举值：</p><ul><li>FINISHED： 1</li></ul>
 * @method string getOutputUrl() 获取<p>输出url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputUrl(string $OutputUrl) 设置<p>输出url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>任务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间</p>
 * @method string getScheduledTime() 获取<p>任务调度时间</p>
 * @method void setScheduledTime(string $ScheduledTime) 设置<p>任务调度时间</p>
 * @method string getFinishedTime() 获取<p>任务完成时间</p>
 * @method void setFinishedTime(string $FinishedTime) 设置<p>任务完成时间</p>
 * @method integer getTaskResultCode() 获取<p>任务错误码</p>
 * @method void setTaskResultCode(integer $TaskResultCode) 设置<p>任务错误码</p>
 * @method string getTaskResultMsg() 获取<p>任务返回错误信息</p>
 * @method void setTaskResultMsg(string $TaskResultMsg) 设置<p>任务返回错误信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAIGCTaskStatusResponse extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>状态</p><p>枚举值：</p><ul><li>FINISHED： 1</li></ul>
     */
    public $TaskStatus;

    /**
     * @var string <p>输出url</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputUrl;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>任务调度时间</p>
     */
    public $ScheduledTime;

    /**
     * @var string <p>任务完成时间</p>
     */
    public $FinishedTime;

    /**
     * @var integer <p>任务错误码</p>
     */
    public $TaskResultCode;

    /**
     * @var string <p>任务返回错误信息</p>
     */
    public $TaskResultMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskStatus <p>状态</p><p>枚举值：</p><ul><li>FINISHED： 1</li></ul>
     * @param string $OutputUrl <p>输出url</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>任务创建时间</p>
     * @param string $ScheduledTime <p>任务调度时间</p>
     * @param string $FinishedTime <p>任务完成时间</p>
     * @param integer $TaskResultCode <p>任务错误码</p>
     * @param string $TaskResultMsg <p>任务返回错误信息</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("OutputUrl",$param) and $param["OutputUrl"] !== null) {
            $this->OutputUrl = $param["OutputUrl"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ScheduledTime",$param) and $param["ScheduledTime"] !== null) {
            $this->ScheduledTime = $param["ScheduledTime"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }

        if (array_key_exists("TaskResultCode",$param) and $param["TaskResultCode"] !== null) {
            $this->TaskResultCode = $param["TaskResultCode"];
        }

        if (array_key_exists("TaskResultMsg",$param) and $param["TaskResultMsg"] !== null) {
            $this->TaskResultMsg = $param["TaskResultMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
