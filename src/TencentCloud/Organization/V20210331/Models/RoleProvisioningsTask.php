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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步部署角色任务状态信息。
 *
 * @method string getTaskId() 获取任务ID。
 * @method void setTaskId(string $TaskId) 设置任务ID。
 * @method string getRoleConfigurationId() 获取权限配置ID。
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置权限配置ID。
 * @method string getRoleConfigurationName() 获取权限配置名称。
 * @method void setRoleConfigurationName(string $RoleConfigurationName) 设置权限配置名称。
 * @method integer getTargetUin() 获取授权的集团账号目标账号的UIN
 * @method void setTargetUin(integer $TargetUin) 设置授权的集团账号目标账号的UIN
 * @method string getTargetType() 获取同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 * @method void setTargetType(string $TargetType) 设置同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 * @method string getTaskType() 获取任务类型。
 * @method void setTaskType(string $TaskType) 设置任务类型。
 * @method string getTaskStatus() 获取任务状态：InProgress: 进行中，Failed: 失败 3:Success: 成功
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态：InProgress: 进行中，Failed: 失败 3:Success: 成功
 */
class RoleProvisioningsTask extends AbstractModel
{
    /**
     * @var string 任务ID。
     */
    public $TaskId;

    /**
     * @var string 权限配置ID。
     */
    public $RoleConfigurationId;

    /**
     * @var string 权限配置名称。
     */
    public $RoleConfigurationName;

    /**
     * @var integer 授权的集团账号目标账号的UIN
     */
    public $TargetUin;

    /**
     * @var string 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
     */
    public $TargetType;

    /**
     * @var string 任务类型。
     */
    public $TaskType;

    /**
     * @var string 任务状态：InProgress: 进行中，Failed: 失败 3:Success: 成功
     */
    public $TaskStatus;

    /**
     * @param string $TaskId 任务ID。
     * @param string $RoleConfigurationId 权限配置ID。
     * @param string $RoleConfigurationName 权限配置名称。
     * @param integer $TargetUin 授权的集团账号目标账号的UIN
     * @param string $TargetType 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
     * @param string $TaskType 任务类型。
     * @param string $TaskStatus 任务状态：InProgress: 进行中，Failed: 失败 3:Success: 成功
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

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("RoleConfigurationName",$param) and $param["RoleConfigurationName"] !== null) {
            $this->RoleConfigurationName = $param["RoleConfigurationName"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
