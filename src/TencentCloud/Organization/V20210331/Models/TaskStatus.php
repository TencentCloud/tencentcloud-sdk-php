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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务状态信息。
 *
 * @method string getStatus() 获取任务状态。取值：  InProgress：任务执行中。 Success：任务执行成功。 Failed：任务执行失败。
 * @method void setStatus(string $Status) 设置任务状态。取值：  InProgress：任务执行中。 Success：任务执行成功。 Failed：任务执行失败。
 * @method string getTaskId() 获取任务 ID。
 * @method void setTaskId(string $TaskId) 设置任务 ID。
 * @method string getTaskType() 获取任务类型。取值：
ProvisionRoleConfiguration：部署权限配置。
DeprovisionRoleConfiguration：解除权限配置部署。
CreateRoleAssignment：在成员 账号上授权。
DeleteRoleAssignment：移除 成员 账号上的授权。
 * @method void setTaskType(string $TaskType) 设置任务类型。取值：
ProvisionRoleConfiguration：部署权限配置。
DeprovisionRoleConfiguration：解除权限配置部署。
CreateRoleAssignment：在成员 账号上授权。
DeleteRoleAssignment：移除 成员 账号上的授权。
 * @method string getFailureReason() 获取任务失败原因。
说明
只有Status为Failed，才会显示该参数。
 * @method void setFailureReason(string $FailureReason) 设置任务失败原因。
说明
只有Status为Failed，才会显示该参数。
 */
class TaskStatus extends AbstractModel
{
    /**
     * @var string 任务状态。取值：  InProgress：任务执行中。 Success：任务执行成功。 Failed：任务执行失败。
     */
    public $Status;

    /**
     * @var string 任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务类型。取值：
ProvisionRoleConfiguration：部署权限配置。
DeprovisionRoleConfiguration：解除权限配置部署。
CreateRoleAssignment：在成员 账号上授权。
DeleteRoleAssignment：移除 成员 账号上的授权。
     */
    public $TaskType;

    /**
     * @var string 任务失败原因。
说明
只有Status为Failed，才会显示该参数。
     */
    public $FailureReason;

    /**
     * @param string $Status 任务状态。取值：  InProgress：任务执行中。 Success：任务执行成功。 Failed：任务执行失败。
     * @param string $TaskId 任务 ID。
     * @param string $TaskType 任务类型。取值：
ProvisionRoleConfiguration：部署权限配置。
DeprovisionRoleConfiguration：解除权限配置部署。
CreateRoleAssignment：在成员 账号上授权。
DeleteRoleAssignment：移除 成员 账号上的授权。
     * @param string $FailureReason 任务失败原因。
说明
只有Status为Failed，才会显示该参数。
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }
    }
}
